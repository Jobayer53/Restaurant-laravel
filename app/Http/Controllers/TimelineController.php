<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timelines = Timeline::latest()->get();
        return view('backend.timeline.index',[
            'timelines' => $timelines
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.timeline.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|max:2048',
        ]);
        $timeline = new Timeline();
        $timeline->year = $request->year;
        $timeline->title = $request->title;
        $timeline->description = $request->description;
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/timeline'), $new_name);

        $timeline->image = $new_name;
        $timeline->save();
        flash()->position('top-right')->success('Timeline added successfully');
        return redirect()->route('timeline.index');
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
        $timeline = Timeline::find($id);
        return view('backend.timeline.edit',[
            'timeline' => $timeline
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'year' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'max:2048',
        ]);
        $timeline = Timeline::find($id);
        $timeline->year = $request->year;
        $timeline->title = $request->title;
        $timeline->description = $request->description;
        $image = $request->file('image');
        if($image){
            $old_image = public_path('uploads/timeline/'.$timeline->image);
            if(file_exists($old_image)){
                unlink($old_image);
            }
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/timeline'), $new_name);
            $timeline->image = $new_name;
        }
        $timeline->save();
        flash()->position('top-right')->success('Timeline updated successfully');
        return redirect()->route('timeline.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $timeline = Timeline::find($id);
        $old_image = public_path('uploads/timeline/'.$timeline->image);
        if(file_exists($old_image)){
            unlink($old_image);
        }
        $timeline->delete();
        flash()->position('top-right')->success('Timeline deleted successfully');
        return redirect()->route('timeline.index');
    }
}
