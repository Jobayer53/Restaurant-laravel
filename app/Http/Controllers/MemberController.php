<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('backend.member.index',[
            'members' => $members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'title' => 'required',
           'image' => 'required|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
           'description' => 'required',
        ]);

        $member = new Member();
        $member->name = $request->name;
        $member->title = $request->title;
        $member->description = $request->description;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/member'), $imageName);
        $member->image = $imageName;
        $member->save();
        flash()->position('top-right')->success('Member added successfully');
        return redirect()->route('member.index');
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
        $member = Member::find($id);
        return view('backend.member.edit',[
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            'description' => 'required',
        ]);
        $member = Member::find($id);
        $member->name = $request->name;
        $member->title = $request->title;
        $member->description = $request->description;
        if ($request->hasFile('image')) {
            $oldImage = public_path('uploads/member/'.$member->image);
            unlink($oldImage);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/member'), $imageName);
            $member->image = $imageName;
        }
        $member->save();
        flash()->position('top-right')->success('Member updated successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::find($id);
        $path = public_path('uploads/member/'.$member->image);
        if (file_exists($path)) {
            unlink($path);
        }
        $socials = $member->social;
        foreach ($socials as $social) {
            $social->delete();
        }
        $skills = $member->skill;
        foreach ($skills as $skill) {
            $skill->delete();
        }
        $thumbnails = $member->thumbnail;
        foreach ($thumbnails as $thumbnail) {
            $path = public_path('uploads/member/thumbnail/'.$thumbnail->image);
            if (file_exists($path)) {
                unlink($path);
            }
            $thumbnail->delete();
        }
        $member->delete();
        flash()->position('top-right')->success('Member deleted successfully');
        return back();
    }
}
