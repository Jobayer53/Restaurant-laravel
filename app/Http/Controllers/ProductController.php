<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use App\Models\Thumbnail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $products = product::all();
        return view('backend.product.index',[
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.product.create',[
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'short_desc' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            'tags' => 'required',
        ]);

        $product = new product();
        $product->name = $request->name;
        $product->slug = rand(1000,9999).'-'.strtolower(str_replace(' ','-',$request->name));
        $product->category_id = $request->category_id;
        $product->short_description = $request->short_desc;
        $product->description = $request->desc;
        $product->price = $request->price;
        $product->tags = $request->tags;

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/product'), $new_name);
        $product->image = $new_name;
        $product->save();
        flash()->position('top-right')->success('Product added successfully');
        return redirect()->route('product.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        $thumbnails = Thumbnail::where('product_id',$product->id)->get();
        $categories = Category::all();
        return view('backend.product.edit',[
            'product' => $product,
            'categories' => $categories,
            'thumbnails' => $thumbnails,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'short_desc' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'tags' => 'required',
        ]);

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->short_description = $request->short_desc;
        $product->description = $request->desc;
        $product->price = $request->price;
        $product->discount_price = $request->discount;
        $product->tags = $request->tags;
        $image = $request->file('image');
        if($image){
            $old_image = public_path('uploads/product/'.$product->image);
            if(file_exists($old_image)){
                unlink($old_image);
            }
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/product'), $new_name);
            $product->image = $new_name;
        }
        $thumbnail_image = $request->file('thumbnail_image');
        if($thumbnail_image){
            $thumbnail = new Thumbnail();
            $new_name = 'th'.rand() . '.' . $thumbnail_image->getClientOriginalExtension();
            $thumbnail_image->move(public_path('uploads/product/thumbnail'), $new_name);
            $thumbnail->image = $new_name;
            $thumbnail->product_id = $product->id;
            $thumbnail->save();
        }
        $product->save();
        flash()->position('top-right')->success('Product updated successfully');
        // return redirect()->route('product.index');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {

        $old_image = public_path('uploads/product/'.$product->image);
        if(file_exists($old_image)){
            unlink($old_image);
        }
        $thumbnails = Thumbnail::where('product_id',$product->id)->get();
        if($thumbnails->count() > 0){
        foreach($thumbnails as $thumbnail){
            $old_image = public_path('uploads/product/thumbnail/'.$thumbnail->image);
            if(file_exists($old_image)){
                unlink($old_image);
            }
            $thumbnail->delete();
        }
        }

        $product->delete();
        flash()->position('top-right')->success('Product deleted successfully');
        return redirect()->route('product.index');
    }


    public function thumbnail_delete($id){
        $thumbnail = Thumbnail::find($id);
        $old_image = public_path('uploads/product/thumbnail/'.$thumbnail->image);
        if(file_exists($old_image)){
            unlink($old_image);
        }
        $thumbnail->delete();
        flash()->position('top-right')->success('Thumbnail deleted successfully');
        return redirect()->back();
    }
}
