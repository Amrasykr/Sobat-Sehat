<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
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

        $user = $request->user();

        $validatedData = $request->validate([
            'title' =>'required',
            'category' =>'required|in:olahraga,kesehatan',
            'description' =>'required',
            'image' =>'required'
        ]);
        $validatedData['author_id'] = $user->id; 

        $news = News::create($validatedData);

        if ($news) {
            return $this->responseSuccess($news, 'News created successfully.', 200);
        } else {
            return $this->responseError('Failed to add news.');
        }

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

        $news = News::find($id);
    
        if (!$news) {
            return $this->responseNotFound('News not found.');
        }

        $validatedData = $request->validate([
            'title' =>'required',
            'category' =>'required|in:olahraga,kesehatan',
            'description' =>'required',
            'image' =>'required'
        ]);
     
        $news->update($validatedData);
    
        return $this->responseSuccess($news, 'News updated successfully.', 200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);
    
        if (!$news) {
            return $this->responseNotFound('News not found.');
        }
    
        $news->delete();
    
        return $this->responseSuccess(null, 'News deleted successfully.', 200);
    }
    
}
