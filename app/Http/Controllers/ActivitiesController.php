<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activities::all();


        return view('admin.activities.index', ['activities' => $activities]);
    }

    /**
     * Show form.
     */

    public function create()
    {
        return view('admin.activities.create');
    }


    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'activity_date' => 'required|date',
            'location' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location_link' => 'nullable|url',
        ]);

        $imagePath = 'null';
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('activity_images', 'public');
        }

        // Membuat activity baru
        Activities::create([
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'activity_date' => $request->input('activity_date'),
            'location' => $request->input('location'),
            'location_link' => $request->input('location_link'),
            'description' => $request->input('description'),
            // todo: replace author_id
            'author_id' => '1',
            'image' => $imagePath,
        ]);

        return redirect()->route('activities.index')->with('success', 'Activity created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
