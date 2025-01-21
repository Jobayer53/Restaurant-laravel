<?php

namespace App\Http\Controllers;

use App\Models\MemberThumbnail;
use Illuminate\Http\Request;

class MemberThumbnailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            'member_id' => 'required',
        ]);
        $member = new MemberThumbnail;
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/member/thumbnail'), $imageName);
        $member->member_id = $request->member_id;
        $member->image = $imageName;
        $member->save();
        flash()->position('top-right')->success('Thumbnail added successfully');
        return back();
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
        $thumbnail = MemberThumbnail::find($id);
        $path = public_path('uploads/member/thumbnail/' . $thumbnail->image);
        if (file_exists($path)) {
            unlink($path);
        }
        $thumbnail->delete();
        flash()->position('top-right')->success('Thumbnail deleted successfully');
        return back();
    }
}
