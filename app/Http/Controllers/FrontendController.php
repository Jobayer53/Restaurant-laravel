<?php

namespace App\Http\Controllers;



use App\Models\Faq;
use App\Models\Blog;
use App\Models\News;
use App\Models\Order;
use App\Models\Banner;
use App\Models\Member;
use App\Models\Review;
use App\Models\Product;
use App\Models\Support;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Countries;
use Illuminate\Support\Str;
use App\Models\MenuCategory;
use App\Models\OrderProduct;
use App\Models\Timeline;
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
        $products = Product::where('discount_price', '!=', null)->inRandomOrder()->limit(4)->get();
        return view('frontend.contact',[
            'products' => $products
        ]);
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
        $timelines = Timeline::latest()->get();
        return view('frontend.our-history',[
            'reviews' => $reviews,
            'timelines' => $timelines,
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
                $subtotal = $product->discount_price ? $product->discount_price : $product->price * 1; // since the quantity is 1 initially
                // Add product to cart with default quantity and subtotal
                $cart[$productId] = [
                    'quantity' => 1,
                    'price' => $product->discount_price ? $product->discount_price : $product->price,
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
        if(!$productIds){
            return redirect(route('products'));
        }
        $products = Product::findMany($productIds)->keyBy('id');
        $productsWithQuantities = $products->map(function ($product) use ($cart) {
            $product->quantity = $cart[$product->id]['quantity'];
            $product->subtotal = $cart[$product->id]['price'] * $product->quantity; // Calculate subtotal
            return $product;
        });
        $countries = Countries::select('id', 'name')->get();
        return view('frontend.checkout',[
            'productsWithQuantities' => $productsWithQuantities,
            'countries' => $countries
        ]);
    }


    public function order_place(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'address' => 'required',
            'apartment' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);
        $order = new Order();
        $order->slug = Str::random(6);
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->company_name = $request->company_name;
        $order->address = $request->address;
        $order->country_id = $request->country;
        $order->apartment = $request->apartment;
        $order->city = $request->city;
        $order->state = $request->state;
        $order->postcode = $request->postcode;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->notes = $request->notes;
        $order->save();
        $cart = session()->get('cart', []);
        $productIds = array_keys($cart);
        $products = Product::findMany($productIds)->keyBy('id');
        foreach ($products as $product){
            $orderItem = new OrderProduct();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $product->id;
            $orderItem->quantity = $cart[$product->id]['quantity'];
            $orderItem->price = $cart[$product->id]['price'];
            $orderItem->subtotal = $cart[$product->id]['subtotal'];
            $orderItem->save();

        }

        session()->forget('cart');
        return redirect()->route('index');
    }
    public function getStates(Request $request){
        $country_id = $request->country;
        $states = Countries::find($country_id)->states;
        return response()->json($states);
    }

    public function my_account(){
        return view('frontend.my-account');
    }
}
