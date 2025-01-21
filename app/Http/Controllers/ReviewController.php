<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return view('backend.review.index',[
            'reviews' => $reviews
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required|max:2048',
            'message' => 'required',
            'rating' => 'required',
        ]);
        $review = new Review();
        $review->name = $request->name;
        $review->message = $request->message;
        $review->rating = $request->rating;

        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/review'), $image_name);
        $review->image = $image_name;
        $review->save();

        flash()->position('top-right')->success('Review added successfully');
        return redirect()->route('review.index');


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
        $review = Review::find($id);
        return view('backend.review.edit',[
            'review' => $review
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'max:2048',
            'message' => 'required',
            'rating' => 'required',
        ]);
        $review = Review::find($id);
        $review->name = $request->name;
        $review->message = $request->message;
        $review->rating = $request->rating;
        if($request->hasFile('image')) {
            $oldImage = public_path('uploads/review/' . $review->image);
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/review'), $image_name);
            $review->image = $image_name;
        }
        $review->save();

        flash()->position('top-right')->success('Review updated successfully');
        return redirect()->route('review.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::find($id);
        $oldImage = public_path('uploads/review/' . $review->image);
        if (file_exists($oldImage)) {
            unlink($oldImage);
        }
        $review->delete();
        flash()->position('top-right')->success('Review deleted successfully');
        return redirect()->route('review.index');
    }
}
