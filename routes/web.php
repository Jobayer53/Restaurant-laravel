<?php

use App\Models\Product;
use App\Models\MenuCategory;
use App\Http\Controllers\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
 use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\MemberSkillsController;
use App\Http\Controllers\MenuCategoryController;
use App\Http\Controllers\MemeberSocialController;
use App\Http\Controllers\MemberThumbnailController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index'])->name('index');

Auth::routes();
Route::fallback(function () {
    return view('frontend.404-error');
})->name('fallback');
//frontend
Route::get('/blog-list', [FrontendController::class, 'blog_list'])->name('blog-list');
Route::get('/blog-grid', [FrontendController::class, 'blog_grid'])->name('blog-grid');
Route::get('/menu', [FrontendController::class, 'menu'])->name('menu');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact/store', [FrontendController::class, 'contact_store'])->name('contact_store');
Route::get('/about-us', [FrontendController::class, 'about_us'])->name('about-us');
Route::get('/team',[FrontendController::class, 'team'])->name('team');
Route::get('/team/member.{id}',[FrontendController::class, 'team_member'])->name('team.member');
Route::get('/our-history',[FrontendController::class, 'our_history'])->name('our.history');
Route::get('/testimonial',[FrontendController::class, 'testimonial'])->name('testimonial');
Route::post('/fd/store', [FrontendController::class, 'fd_store'])->name('fd_store');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/product/details/{id}', [FrontendController::class, 'product_details'])->name('single-product');
Route::get('/product/tag/{tag}', [FrontendController::class, 'product_tag'])->name('tag-product');
Route::get('/category/product/{id}',[FrontendController::class, 'category_product'])->name('category-product');
Route::get('/Faq',[FrontendController::class, 'faq'])->name('faq');
Route::get('/delivery',[FrontendController::class, 'delivery'])->name('delivery');
Route::get('/cart',[FrontendController::class, 'cart'])->name('cart');

Route::get('/add-to-cart/{id}',[FrontendController::class, 'add_to_cart'])->name('add-to-cart');
Route::get('/delete-to-cart/{id}',[FrontendController::class, 'delete_to_cart'])->name('delete-to-cart');
Route::post('/update-to-cart',[FrontendController::class, 'update_to_cart'])->name('update-to-cart');

Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::post('/order-place', [FrontendController::class, 'order_place'])->name('order-place');
Route::post('/getStates', [FrontendController::class, 'getStates'])->name('getStates');
Route::get('/my-account',[FrontendController::class, 'my_account'])->name('my_account');



//backend
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //profile
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::post('/profile/update',[DashboardController::class, 'updateProfile'])->name('profile.update');

    //category
    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::post('/category/store', [CategoryController::class, 'category_store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'category_edit'])->name('category.edit');
    Route::post('/category/update', [CategoryController::class, 'category_update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'category_delete'])->name('category.delete');
    //thumbnail
    Route::get('/thumbnail/delete/{id}', [ProductController::class, 'thumbnail_delete'])->name('thumbnail.delete');
    //resource
    Route::resources([
        'product'               => ProductController::class,
        'banner'                => BannerController::class,
        'news'                  => NewsController::class,
        'blog'                  => BlogController::class,
        'menuCategory'          => MenuCategoryController::class,
        'menuItem'              => MenuItemController::class,
        'support'               => SupportController::class,
        'feedback'              => FeedbackController::class,
        'faq'                   => FaqController::class,
        'review'                => ReviewController::class,
        'member'                => MemberController::class,
        'memberSocial'          => MemeberSocialController::class,
        'memberSkill'           =>MemberSkillsController::class,
        'memberThumbnail'       =>MemberThumbnailController::class,
        'order'                 =>OrderController::class,
        'timeline'              =>TimelineController::class

    ]);
});
