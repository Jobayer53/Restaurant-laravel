<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = MenuItem::all();
        return view('backend.menu.item-index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = MenuCategory::all();
        return view('backend.menu.item-create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'menu_category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'short_desc' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',

        ]);
        $item = new MenuItem();
        $item->menu_category_id = $request->menu_category_id;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->short_desc;
        $imageName = 'item-'.time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/menu/item'), $imageName);
        $item->image = $imageName;
        $item->save();
        flash()->position('top-right')->success('Menu Item Created Successfully');
        return redirect()->route('menuItem.index');

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
        $item = MenuItem::find($id);
        $categories = MenuCategory::all();
        return view('backend.menu.item-edit',[
            'item' => $item,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'menu_category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'short_desc' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg,avif|max:2048',

        ]);
        $item = MenuItem::find($id);
        $item->menu_category_id = $request->menu_category_id;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->short_desc;
        if($request->hasFile('image')){
            $oldImage = public_path('uploads/menu/item/'.$item->image);
            if(file_exists($oldImage)){
                unlink($oldImage);
            }
            $imageName = 'item-'.time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/menu/item'), $imageName);
            $item->image = $imageName;
        }
        $item->save();
        flash()->position('top-right')->success('Menu Item Updated Successfully');
        return redirect()->route('menuItem.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = MenuItem::find($id);
        $oldImage = public_path('uploads/menu/item/'.$item->image);
        if(file_exists($oldImage)){
            unlink($oldImage);
        }
        $item->delete();
        flash()->position('top-right')->success('Menu Item Deleted Successfully');
        return back();
    }
}
