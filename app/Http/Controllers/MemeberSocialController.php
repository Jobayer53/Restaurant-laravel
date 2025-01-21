<?php

namespace App\Http\Controllers;

use App\Models\MemeberSocial;
use Illuminate\Http\Request;

class MemeberSocialController extends Controller
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
        'social' => 'required',
        'link' => 'required',
       ]);
       $social = new MemeberSocial();
       $social->member_id = $request->member_id;
       $social->social = $request->social;
       $social->link = $request->link;
       $social->save();
       flash()->position('top-right')->success('Social added successfully');
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
        $social= MemeberSocial::find($id);
        $social->delete();
        flash()->position('top-right')->success('Social deleted successfully');
        return back();
    }
}
