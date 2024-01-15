<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function indexDashboard() {
        $activities = Activities::all();
        $contributors = User::where('role', 'kontributor')->get();
        $accepted_contributors = User::where('role', 'kontributor')->where('validation', 'diterima')->get();
        $rejected_contributors = User::where('role', 'kontributor')->where('validation', 'ditolak')->get();

        return view('admin/index', compact(
            'activities',
            'contributors',
            'accepted_contributors',
            'rejected_contributors'
        ));
    }



    public function index(Request $request)
    {
        $user = $request->user();
        $role = $user->role;

        if ($role === 'admin') {
            $query = Activities::query();
        } elseif ($role === 'kontributor') {
            $query = Activities::where('author_id', $user->id);
        } else {
            return view('admin.activities.index')->with('error', 'Unauthorized to access this resource.');
        }

        $search = $request->input('search');
        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        $activities = $query->get();

        if ($activities->isEmpty()) {
            return view('admin.activities.index')->with('error', 'There are no activities.')->with(compact('activities'));
        } else {
            return view('admin.activities.index')->with('success', 'Successfully displays activities data')->with(compact('activities'));
        }
    }


    public function create()
    {
        return view('admin/activities/create');
    }

    public function store(Request $request)
    {

        $user = $request->user();

        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'required|in:olahraga,kesehatan',
            'description' => 'required',
            'location' => 'required',
            'location_link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'activity_date' => 'required',
        ]);

        $validatedData['author_id'] = $user->id;

        $activities = new Activities([
            'title' => $validatedData['title'],
            'category' => $validatedData['category'],
            'description' => $validatedData['description'],
            'location' => $validatedData['location'],
            'location_link' => $validatedData['location_link'],
            'activity_date' =>  $validatedData['activity_date'],
            'author_id' => $validatedData['author_id'],
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $request->file('image')->move('assets/img/activities', $request->file('image')->getClientOriginalName());
            $activities->image = $request->file('image')->getClientOriginalName();
        }

        $activities->save();

        if ($activities) {
            return redirect()->route('admin.activities');
        } else {

            return redirect()->back();
        }
    }



    /**
     * Display the specified resource.
     */
    public function show($id, Request $request )
    {
        $user = $request->user();
        $role = $user->role;
        $activity = Activities::find($id);

        if (!$activity) {
            return $this->responseError('Activity not found.');
        }

        if ($user->role === 'admin') {
            return $this->responseSuccess($activity, 'Activity found.', 200);
        } elseif ($user->role === 'kontributor' && $activity->author_id === $user->id) {
            return $this->responseSuccess($activity, 'Activity found.', 200);
        } else {
            return $this->responseUnauthorized('You are not authorized to view this activity.');
        }
    }


    public function edit(string $id)
    {

        $activities = Activities::find($id);
        return view('admin/activities/edit', compact('activities'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activities = Activities::find($id);

        if (!$activities) {
            return $this->responseNotFound('News not found.');
        }

        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'required|in:olahraga,kesehatan',
            'description' => 'required',
            'location' => 'required',
            'location_link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg',
            'activity_date' => 'required',
        ]);

        // $activities->title = $validatedData['title'];
        // $activities->category = $validatedData['category'];
        // $activities->description = $validatedData['description'];
        // $activities->location = $validatedData['location'];
        // $activities->location_link = $validatedData['location_link'];
        // $activities->activity_date = $validatedData['activity_date'];

        $activities->fill($validatedData); // <--- simplified

        // Jika ada unggahan gambar baru
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image_path = public_path('assets/img/activities/' . $activities->image);
            // Hapus gambar lama sebelum menyimpan yang baru
            $this->deleteImage($image_path);

            $request->file('image')->move('assets/img/activities', $request->file('image')->getClientOriginalName());
            $activities->image = $request->file('image')->getClientOriginalName();
        }

        $activities->save();

        return redirect()->route('admin.activities');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $user = $request->user();
        $activity = Activities::find($id);

        if (!$activity) {
            return $this->responseNotFound('Activity not found.');
        }

        // get and delete image
        $image_path = public_path('assets/img/activities/' . $activity->image);
        $this->deleteImage($image_path);

        if ($user->role === 'admin' || $user->id === $activity->author_id) {
            $activity->delete();
            return redirect()->route('admin.activities')->with('success', 'Activity deleted successfully.');
        } else {
            return redirect()->route('admin.activities')->with('error', 'Unauthorized to delete this activity.');
        }
    }


    private function deleteImage(string $image_path)
    {
        $is_old_image_exist = File::exists($image_path);
        if ($is_old_image_exist) {
            File::delete($image_path);
        }
    }
}
