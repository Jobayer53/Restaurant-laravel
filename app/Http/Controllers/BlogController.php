<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('backend.blog.index',[
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.create');
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
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->description = $request->description;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/blog'), $imageName);
        $blog->image = $imageName;
        $blog->save();
        flash()->position('top-right')->success('Blog added successfully');
        return redirect()->route('blog.index');
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
        $blog = Blog::find($id);
        return view('backend.blog.edit',[
            'blog' => $blog
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
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->description = $request->description;
        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $old_image = public_path('uploads/blog/'.$blog->image);
            if(file_exists($old_image)){
                unlink($old_image);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/blog'), $imageName);
            $blog->image = $imageName;
        }
        $blog->save();
        flash()->position('top-right')->success('Blog updated successfully');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $old_image = public_path('uploads/blog/'.$blog->image);
        if(file_exists($old_image)){
            unlink($old_image);
        }
        $blog->delete();
        flash()->position('top-right')->success('Blog deleted successfully');
        return back();
    }
}
