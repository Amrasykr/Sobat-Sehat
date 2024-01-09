<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $news = News::all();
        if ($news->isEmpty()) {
            return $this->responseError('There are no news.');
        } else {
            return $this->responseSuccess($news, 'Successfully displays news data', 200);
        }
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
        $news = News::find($id);

        if ($news) {
            return $this->responseSuccess($news, 'News found.', 200);
        } else {
            return $this->responseError('News not found.');
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
