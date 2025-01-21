<?php

namespace App\Http\Controllers;

use App\Models\MemberSkills;
use Illuminate\Http\Request;

class MemberSkillsController extends Controller
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
            'skill' => 'required',
            'level' => 'required',
        ]);
        $skill = new MemberSkills();
        $skill->member_id = $request->member_id;
        $skill->skill = $request->skill;
        $skill->level = $request->level;
        $skill->save();
        flash()->position('top-right')->success('Skill added successfully');
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
        $skill = MemberSkills::find($id);
        $skill->delete();
        flash()->position('top-right')->success('Skill deleted successfully');
        return back();
    }
}
