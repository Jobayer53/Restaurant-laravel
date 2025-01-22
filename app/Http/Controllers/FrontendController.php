<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\News;
use App\Models\Banner;
use App\Models\Member;
use App\Models\Review;
use App\Models\Product;
use App\Models\Support;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banner = Banner::latest()->first();
        $categories = Category::all();
        $news = News::latest()->take(3)->get();
        $reviews = Review::inRandomOrder()->limit(2)->get();
        return view('frontend.index',[
            'banner' => $banner,
            'categories' => $categories,
            'news' => $news,
            'reviews' => $reviews
        ]);
    }
    public function blog_list()
    {
        $blogs = Blog::latest()->paginate(3);
        $blog_posts = Blog::latest()->take(4)->get();
        return view('frontend.blog-list',[
            'blogs' => $blogs,
            'blog_posts' => $blog_posts
        ]);
    }
    public function blog_grid()
    {
        $blogs = Blog::latest()->paginate(6);

        return view('frontend.blog-grid',[
            'blogs' => $blogs,

        ]);
    }
    public function menu()
    {
        $categories = MenuCategory::with('items')->get();
        return view('frontend.menu',[
            'categories' => $categories
        ]);
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function contact_store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $support = new Support();
        $support->name = $request->name;
        $support->email = $request->email;
        $support->message = $request->message;
        $support->save();
        return back()->with('message', value: 'Sent successfully');
    }
    public function fd_store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->message = $request->message;
        $feedback->save();
        return back()->with('message', 'Feedback sent successfully');
    }
    public function about_us(){
        $members = Member::inRandomOrder()->limit(3)->get();
        return view('frontend.about-us',[
            'members' => $members
        ]);
    }
    public function team(){
        $team_member = Member::all();
        return view('frontend.team',[
            'team_member' => $team_member
        ]);
    }
    public function team_member($id){
        $team_member = Member::find($id);
        return view('frontend.team-member',[
            'member' => $team_member
        ]);
    }
    public function our_history(){
        $reviews = Review::inRandomOrder()->limit(2)->get();
        return view('frontend.our-history',[
            'reviews' => $reviews
        ]);
    }
    public function testimonial(){
        $reviews = Review::all();
        return view('frontend.testimonial',[
            'reviews' => $reviews
        ]);
    }
    public function products(){
        $cateogries = Category::all();
        $products = Product::all();
        return view('frontend.product',[
            'products' => $products,
            'cateogries' => $cateogries,
        ]);
    }
    public function category_product($id){
        $cateogries = Category::all();
        $products = Product::where('category_id',$id)->get();
        return view('frontend.product',[
            'products' => $products,
            'cateogries' => $cateogries,
        ]);
    }
    public function product_details($id){
        $products = Product::find($id);
        $tags = explode(',', $products->tags);

        return view('frontend.single-product',[
            'product' => $products,
            'tags' => $tags
        ]);
    }
    public function faq(){
        $faqs = Faq::where('type','faq')->get();
        return view('frontend.faq',[
            'faqs' => $faqs
        ]);
    }
    public function delivery(){
        $faqs = Faq::where('type','delivery')->get();
        return view('frontend.delivery',[
            'faqs' => $faqs
        ]);
    }
}
