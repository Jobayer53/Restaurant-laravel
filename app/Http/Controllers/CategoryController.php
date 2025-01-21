<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {   $categories = Category::all();
        return view('backend.category.index',[
            'categories'=>$categories
        ]);
    }
    public function category_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
        ]);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/category'), $new_name);
        $category = new Category();
        $category->name = $request->name;
        $category->image = $new_name;
        $category->save();
        flash()->position('top-right')->success('Category added successfully');
        return back();
    }
    public function category_edit($id){
        $category = Category::find($id);
        return view('backend.category.edit',[
            'category'=>$category
        ]);
    }
    public function category_update(Request $request){
        $request->validate([
            'name' => 'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
        ]);
        $category = Category::find($request->id);
        $image = $request->file('image');
        if($image){
            $old_image = public_path('uploads/category/'.$category->image);
            if(file_exists($old_image)){
                unlink($old_image);
            }
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/category'), $new_name);
            $category->image = $new_name;
        }
        $category->name = $request->name;
        $category->save();
        flash()->position('top-right')->success('Category updated successfully');
        return redirect()->route('category');
    }
    public function category_delete($id){
        $category = Category::find($id);
        $old_image = public_path('uploads/category/'.$category->image);
        if(file_exists($old_image)){
            unlink($old_image);
        }
        $category->delete();
        flash()->position('top-right')->success('Category deleted successfully');
        return back();
    }
}
