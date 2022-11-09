<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Faq\FaqComponent;
use App\Http\Livewire\Cart\CartComponent;
use App\Http\Livewire\Home\HomeComponent;
use App\Http\Livewire\Shop\ShopComponent;
use App\Http\Livewire\Contact\ContactComponent;
use App\Http\Livewire\Checkout\CheckoutComponent;
use App\Http\Livewire\Thankyou\ThankyouComponent;
use App\Http\Livewire\DetailsProduct\DetailsComponent;
use App\Http\Livewire\Admin\Coupon\AdminCouponComponent;
use App\Http\Livewire\Admin\Slider\AdminSliderComponent;
use App\Http\Livewire\User\Profile\UserProfileComponent;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Livewire\Admin\Product\AdminProductComponent;
use App\Http\Livewire\Admin\Profile\AdminProfileComponent;
use App\Http\Livewire\Admin\Coupon\AdminAddCouponComponent;
use App\Http\Livewire\Admin\Slider\AdminAddSliderComponent;
use App\Http\Livewire\Admin\Category\AdminCategoryComponent;
use App\Http\Livewire\Admin\Coupon\AdminEditCouponComponent;
use App\Http\Livewire\Admin\Slider\AdminEditSliderComponent;
use App\Http\Livewire\User\Dashboard\UserDashboardComponent;
use App\Http\Livewire\Admin\Product\AdminAddProductComponent;
use App\Http\Livewire\Admin\Dashboard\AdminDashboardComponent;
use App\Http\Livewire\Admin\Product\AdminEditProductComponent;
use App\Http\Livewire\Admin\Category\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\Category\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\Homecategory\AdminHomeCategoryComponent;
use App\Http\Livewire\Admin\Homecategory\AdminAddHomeCategoryComponent;
use App\Http\Livewire\Admin\Homecategory\AdminEditHomeCategoryComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', HomeComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/faq', FaqComponent::class);
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/products/{slug}', DetailsComponent::class)->name('product.details');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/thankyou', ThankyouComponent::class)->name('thankyou');

//For User / Customer
Route::middleware(['auth','verified'])->group(function(){
    
    //User Panel
        //For Dashboard
        Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');

        //For Profile 
        Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
});

//For Admin
Route::middleware(['auth','verified','authadmin'])->group(function(){
    
    //Admin Panel
        //For Dashboard
        Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');

        //For Profile 
        Route::get('/admin/profile', AdminProfileComponent::class)->name('admin.profile');

        //For Category
        Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
        Route::get('/admin/add-categories', AdminAddCategoryComponent::class)->name('admin.add-categories');
        Route::get('/admin/edit-categories/{category_slug}', AdminEditCategoryComponent::class)->name('admin.edit-categories');

        //For Products
        Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
        Route::get('/admin/add-products', AdminAddProductComponent::class)->name('admin.add-products');
        Route::get('/admin/edit-products/{product_slug}', AdminEditProductComponent::class)->name('admin.edit-products');

        //For Coupons
        Route::get('/admin/coupons', AdminCouponComponent::class)->name('admin.coupons');
        Route::get('/admin/add-coupons', AdminAddCouponComponent::class)->name('admin.add-coupons');
        Route::get('/admin/edit-coupons/{coupon_id}', AdminEditCouponComponent::class)->name('admin.edit-coupons');

        //For HomeSlider
        Route::get('/admin/home-slider', AdminSliderComponent::class)->name('admin.home-slider');
        Route::get('/admin/add-home-slider', AdminAddSliderComponent::class)->name('admin.add-home-slider');
        Route::get('/admin/edit-home-slider/{slide_id}', AdminEditSliderComponent::class)->name('admin.edit-home-slider');

        //For HomeCategory
        Route::get('/admin/home-category', AdminHomeCategoryComponent::class)->name('admin.home-category');
        Route::get('/admin/add-home-category', AdminAddHomeCategoryComponent::class)->name('admin.add-home-category');
        Route::get('/admin/edit-home-category', AdminEditHomeCategoryComponent::class)->name('admin.edit-home-category');

        //For OnSale
        // Route::get('/admin/on-sale', AdminOnSaleComponent::class)->name('admin.on-sale');
        // Route::get('/admin/add-on-sale', AdminAddOnSaleComponent::class)->name('admin.add-on-sale');
        // Route::get('/admin/edit-on-sale', AdminEditOnSaleComponent::class)->name('admin.edit-on-sale');


});


