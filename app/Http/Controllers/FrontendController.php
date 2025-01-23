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
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


class FrontendController extends Controller
{
    public function index()
    {
        $banner = Banner::latest()->first();
        $categories = Category::all();
        $news = News::latest()->take(3)->get();
        $reviews = Review::inRandomOrder()->limit(2)->get();
        $products = Product::inRandomOrder()->limit(8)->get();
        $productTwo = Product::inRandomOrder()->limit(2)->get();
        return view('frontend.index',[
            'banner' => $banner,
            'categories' => $categories,
            'news' => $news,
            'reviews' => $reviews,
            'products' => $products,
            'productTwo' => $productTwo,
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
        $products = Product::where('discount_price', '!=', null)->inRandomOrder(4)->get();
        return view('frontend.menu',[
            'categories' => $categories,
            'products' => $products
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
        $products = Product::inRandomOrder()->limit(4)->get();
        return view('frontend.about-us',[
            'members' => $members,
            'products' => $products
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
        $topProducts = Product::inRandomOrder()->limit(4)->get();
        $productTags = Product::all('tags');
        $allTags = [];
        foreach ($productTags as $product) {
            $tags = explode(',', $product->tags);
            $allTags = array_merge($allTags, $tags);
        }
        $uniqueTags = array_unique(array_map('trim', $allTags));
        return view('frontend.product',[
            'products' => $products,
            'cateogries' => $cateogries,
            'uniqueTags' => $uniqueTags,
            'topProducts' => $topProducts
        ]);
    }
    public function category_product($id){
        $cateogries = Category::all();
        $products = Product::where('category_id',$id)->get();
        $topProducts = Product::inRandomOrder()->limit(4)->get();
        $productTags = Product::all('tags');
        $allTags = [];
        foreach ($productTags as $product) {
            $tags = explode(',', $product->tags);
            $allTags = array_merge($allTags, $tags);
        }
        $uniqueTags = array_unique(array_map('trim', $allTags));
        return view('frontend.product',[
            'products' => $products,
            'cateogries' => $cateogries,
            'uniqueTags' => $uniqueTags,
            'topProducts' => $topProducts
        ]);

    }
    public function product_details($id){
        $products = Product::find($id);
        $tags = explode(',', $products->tags);
        $topProducts = Product::inRandomOrder()->limit(4)->get();

        return view('frontend.single-product',[
            'product' => $products,
            'tags' => $tags,
            'topProducts' => $topProducts
        ]);
    }
    public function product_tag($tag){
        $cateogries = Category::all();
        $products = Product::where('tags', 'like', '%' . $tag . '%')->get();;
        $productTags = Product::all('tags');
        $topProducts = Product::inRandomOrder()->limit(4)->get();
        $allTags = [];
        foreach ($productTags as $product) {
            $tags = explode(',', $product->tags);
            $allTags = array_merge($allTags, $tags);
        }
        $uniqueTags = array_unique(array_map('trim', $allTags));
        return view('frontend.product',[
            'products' => $products,
            'cateogries' => $cateogries,
            'uniqueTags' => $uniqueTags,
            'topProducts' => $topProducts
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
    public function cart(){
        $cart = session()->get('cart', []);
        $productIds = array_keys($cart);
        $products = Product::findMany($productIds)->keyBy('id');
        $productsWithQuantities = $products->map(function ($product) use ($cart) {
            $product->quantity = $cart[$product->id]['quantity'];
            $product->subtotal = $cart[$product->id]['price'] * $product->quantity; // Calculate subtotal
            return $product;
        });
        return view('frontend.cart',[
            'productsWithQuantities' => $productsWithQuantities
        ]);
    }
    public function add_to_cart($id){
        // session()->forget('cart');
        // return back();
        $productId = $id;
        $cart = session()->get('cart', []);
        if (!array_key_exists($productId, $cart)) {
            $product = Product::find($productId);
            if ($product) {
                // Calculate subtotal based on product price and quantity
                $subtotal = $product->price * 1; // since the quantity is 1 initially
                // Add product to cart with default quantity and subtotal
                $cart[$productId] = [
                    'quantity' => 1,
                    'price' => $product->price,
                    'subtotal' => $subtotal
                ];
                session()->put('cart', $cart);
                return back();
            } else {
                return back();
            }
        }
        return back();
    }
    public function delete_to_cart($id){
        $cart = session()->get('cart', []);
        if (array_key_exists($id, $cart)) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return back();
    }
    public function update_to_cart(Request $request){
        $cart = session()->get('cart', []);

        foreach ($cart as $id => &$details) {
            $inputName = 'quantity' . $id;
            if ($request->has($inputName)) {
                $newQuantity = $request->input($inputName);
                if ($newQuantity > 0) {
                    $details['quantity'] = $newQuantity;
                    $details['subtotal'] = $details['price'] * $newQuantity;
                } else {
                    // Optionally remove the item if quantity is zero or less
                    unset($cart[$id]);
                }
            }
        }

    session()->put('cart', $cart);
    return back();
    }
    public function checkout(){
        $cart = session()->get('cart', []);
        $productIds = array_keys($cart);
        $products = Product::findMany($productIds)->keyBy('id');
        $productsWithQuantities = $products->map(function ($product) use ($cart) {
            $product->quantity = $cart[$product->id]['quantity'];
            $product->subtotal = $cart[$product->id]['price'] * $product->quantity; // Calculate subtotal
            return $product;
        });
        return view('frontend.checkout',[
            'productsWithQuantities' => $productsWithQuantities
        ]);
    }






}
