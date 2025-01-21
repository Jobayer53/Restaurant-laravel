<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('backend.news.index',[
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $news = new News();
        $news->title = $request->title;
        $news->author = $request->author;
        $news->description = $request->description;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/news'), $imageName);
        $news->image = $imageName;
        $news->save();
        flash()->position('top-right')->success('News added successfully');
        return redirect()->route('news.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::find($id);
        return view('backend.news.edit',[
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
        ]);
        $news = News::find($id);
        $news->title = $request->title;
        $news->author = $request->author;
        $news->description = $request->description;
        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $old_image = public_path('uploads/news/'.$news->image);
            if(file_exists($old_image)){
                unlink($old_image);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/news'), $imageName);
            $news->image = $imageName;
        }
        $news->save();
        flash()->position('top-right')->success('News updated successfully');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);
        $old_image = public_path('uploads/news/'.$news->image);
        if(file_exists($old_image)){
            unlink($old_image);
        }
        $news->delete();
        flash()->position('top-right')->success('News deleted successfully');
        return back();
    }
}
