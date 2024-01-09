<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\News;
use Illuminate\Http\Request;


class UserActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activities::all();
        return view ('user.activities.index', compact('activities'));
    }

    public function home()
    {
        //
        $activities = Activities::all();
        $news = News::all();
       
       return view('welcome', compact('activities', 'news'));
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
    public function show(string $id)
    {
        $activities = Activities::find($id);
        return view('user.activities.show' , compact('activities'));
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
