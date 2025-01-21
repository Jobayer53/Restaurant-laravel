<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = MenuCategory::all();
        return view('backend.menu.category-index',[
            'categories'=>$categories,
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
        $request->validate([
            'name' => 'required',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
        ]);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/menu/category'), $new_name);
        $category = new MenuCategory();
        $category->name = $request->name;
        $category->image = $new_name;
        $category->save();
        flash()->position('top-right')->success('Category added successfully');
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

        $category = MenuCategory::find($id);
        return view('backend.menu.category-edit',[
            'category'=>$category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'image'=>'mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
        ]);
        $category = MenuCategory::find($request->id);
        $image = $request->file('image');
        if($image){
            $old_image = public_path('uploads/menu/category/'.$category->image);
            if(file_exists($old_image)){
                unlink($old_image);
            }
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/menu/category'), $new_name);
            $category->image = $new_name;
        }
        $category->name = $request->name;
        $category->save();
        flash()->position('top-right')->success('Category updated successfully');
        return redirect()->route('menuCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = MenuCategory::find($id);
        $old_image = public_path('uploads/menu/category/'.$category->image);
        if(file_exists($old_image)){
            unlink($old_image);
        }
        $category->delete();
        flash()->position('top-right')->success('Category deleted successfully');
        return back();
    }
}
