<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activities;

class ActivitiesUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $activities = Activities::all();
        if ($activities->isEmpty()) {
            return $this->responseError('There are no activities.');
        } else {
            return $this->responseSuccess($activities, 'Successfully displays activities', 200);
        }

        $activities = Activities::all();
        return view ('user/activities', compact('activities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $activities = Activities::find($id);

        if ($activities) {
            return $this->responseSuccess($activities, 'Activities found.', 200);
        } else {
            return $this->responseError('Activity not found.');
        }

        
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
