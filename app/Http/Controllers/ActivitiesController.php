<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activities;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $role = $user->role;
    
        if ($role === 'admin') {
            $activities = Activities::all();
            if ($activities->isEmpty()) {
                return $this->responseError('There are no activities.');
            } else {
                return $this->responseSuccess($activities, 'Successfully displays activities data', 200);
            }
        } elseif ($role === 'kontributor') {
            $activities = Activities::where('author_id', $user->id)->get();
            if ($activities->isEmpty()) {
                return $this->responseError('There are no activities for this contributor.');
            } else {
                return $this->responseSuccess($activities, 'Successfully displays activities data', 200);
            }
        } else {
            return $this->responseUnauthorized('Unauthorized to access this resource.');
        }
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = $request->user();
    
        $validatedData = $request->validate([
            'title' =>'required',
            'category' => 'required|in:olahraga,kesehatan',
            'description' => 'required',
            'location' => 'required',
            'location_link' => 'required',
            'image' => 'required',
            'activity_date' => 'required|date',
        ]);
    
        $validatedData['author_id'] = $user->id; 

        // dd($validatedData);
    
        $activity = Activities::create($validatedData);
    
        if ($activity) {
            return $this->responseSuccess($activity, 'Activities created successfully.', 200);
        } else {
            return $this->responseError('Failed to add Activity.');
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


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $activity = Activities::find($id);
    
        if (!$activity) {
            return $this->responseNotFound('Activity not found.');
        }
    
        $user = $request->user();
        $role = $user->role;
    
        if ($role === 'admin' || ($role === 'kontributor' && $user->id === $activity->author_id)) {
            $validatedData = $request->validate([
                'title' =>'required',
                'category' => 'required|in:olahraga,kesehatan',
                'description' => 'required',
                'location' => 'required',
                'location_link' => 'required',
                'image' => 'required',
                'activity_date' => 'required|date',
            ]);
    
            $activity->update($validatedData);
    
            return $this->responseSuccess($activity, 'Activity updated successfully.', 200);
        } else {
            return $this->responseUnauthorized('Unauthorized to update this activity.');
        }
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
    
        if ($user->role === 'admin' || $user->id === $activity->author_id) {
            $activity->delete();
            return $this->responseSuccess(null, 'Activity deleted successfully.', 200);
        } else {
            return $this->responseUnauthorized('Unauthorized to delete this activity.');
        }
    }
    
}
