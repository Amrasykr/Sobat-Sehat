<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {

        return view('admin/news/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = $request->user();

        $validatedData = $request->validate([
            'title' => 'required',
            'category' => 'required|in:olahraga,kesehatan',
            'description' => 'required',
            'source' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $validatedData['author_id'] = $user->id;
    
        $news = new News([
            'title' => $validatedData['title'],
            'category' => $validatedData['category'],
            'description' => $validatedData['description'],
            'source' => $validatedData['source'],
            'author_id' => $validatedData['author_id'],
        ]);
    
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $request->file('image')->move('assets/img/news', $request->file('image')->getClientOriginalName());
            $news->image = $request->file('image')->getClientOriginalName();
        }
    
        $news->save();
  
        if ($news) {
            return redirect()->route('admin.news');
        } else {

            return redirect()->back();
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

    public function edit(string $id)
    {

        $news = News::find($id);
        return view('admin/news/edit', compact('news'));
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
        'title' => 'required',
        'category' => 'required|in:olahraga,kesehatan',
        'description' => 'required',
        'source' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg',
    ]);

    $news->title = $validatedData['title'];
    $news->category = $validatedData['category'];
    $news->description = $validatedData['description'];
    $news->source = $validatedData['source'];

    // Jika ada unggahan gambar baru
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        // Hapus gambar lama sebelum menyimpan yang baru
        if (File::exists(public_path('assets/img/news/' . $news->image))) {
            File::delete(public_path('assets/img/news/' . $news->image));
        }
        $request->file('image')->move('assets/img/news', $request->file('image')->getClientOriginalName());
        $news->image = $request->file('image')->getClientOriginalName();
    }

    $news->save();

    return redirect()->route('admin.news');
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
    
        return redirect()->route('admin.news');
    }
    
}
