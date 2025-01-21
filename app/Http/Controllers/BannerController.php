<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::latest()->first();
        return view('backend.banner.index',[
            'banner' => $banner
        ]);
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
        $banner = Banner::latest()->first();
        if($banner){
            $request->validate([
                'first_title' => 'required',
                'second_title' => 'required',
                'short_description' => 'required',
                'price' => 'required',

            ]);
            $banner->first_title = $request->first_title;
            $banner->second_title = $request->second_title;
            $banner->short_description = $request->short_description;
            $banner->price = $request->price;
            $image = $request->file('image');
            if($image){
                $old_image = public_path('uploads/banner/'.$banner->image);
                if(file_exists($old_image)){
                    unlink($old_image);
                }
                $new_name = 'banner-img-' . rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/banner'), $new_name);
                $banner->image = $new_name;
            }
            $banner->save();
            flash()->position('top-right')->success('Banner updated successfully');
            return back();
        }else{
            $request->validate([
                'first_title' => 'required',
                'second_title' => 'required',
                'short_description' => 'required',
                'price' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            ]);
            $banner = new Banner();
            $banner->first_title = $request->first_title;
            $banner->second_title = $request->second_title;
            $banner->short_description = $request->short_description;
            $banner->price = $request->price;
            $image = $request->file('image');
            $new_name = 'banner-img-' . rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/banner'), $new_name);
            $banner->image = $new_name;
            $banner->save();
            flash()->position('top-right')->success('Banner added successfully');
            return back();
        }
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
        //
    }
}
