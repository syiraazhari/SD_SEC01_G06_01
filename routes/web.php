<?php

use App\Http\Controllers\Admin\AdminProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Users\UsersController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Homepage
Route::get('/', [FrontController::class, 'index']);

// Category
Route::get('category', [FrontController::class, 'category']);
Route::get('category/{slug}', [FrontController::class, 'viewcategory']);
Route::get('category/{cate_slug}/{prod_slug}', [FrontController::class, 'productview']);

// User Profile
Route::get('settings', [ProfileController::class, 'index']);
Route::put('update-profile/{id}', [ProfileController::class, 'update']);




Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');


// Admin
Route::middleware(['auth', 'isAdmin']) ->group(function () {

    Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@index');

    Route::get('categories', 'App\Http\Controllers\Admin\CategoryController@index');
    Route::get('add-category', 'App\Http\Controllers\Admin\CategoryController@add');
    Route::post('insert-category', 'App\Http\Controllers\Admin\CategoryController@insert');
    Route::get('edit-category/{id}',[CategoryController::class , 'edit']);
    Route::put('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);
    
    Route::get('products', [ProductController::class, 'index' ]);
    Route::get('add-products', [ProductController::class, 'add' ]);
    Route::post('insert-products', [ProductController::class, 'insert']);
    Route::get('edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('update-products/{id}', [ProductController::class, 'update']);
    Route::get('delete-product/{id}', [ProductController::class, 'destroy']);

    Route::get('users', [UsersController::class, 'index' ]);
    Route::get('edit-users/{id}', [UsersController::class, 'edit' ]);
    Route::put('update-users/{id}', [UsersController::class, 'update' ]);
    Route::get('delete-users/{id}', [UsersController::class, 'destroy' ]);

    Route::get('admin-profile', [AdminProfileController::class, 'index']);
    Route::put('update-admin-profile/{id}', [AdminProfileController::class, 'update']);

    
    
});