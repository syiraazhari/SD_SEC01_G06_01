<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Staff\StaffController;
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

Route::get('/', [FrontController::class, 'index']);

Route::get('category', [FrontController::class, 'category']);
Route::get('category/{slug}', [FrontController::class, 'viewcategory']);
Route::get('category/{cate_slug}/{prod_slug}', [FrontController::class, 'productview']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

    Route::get('staff', [StaffController::class, 'index' ]);
    Route::get('edit-staff/{id}', [StaffController::class, 'edit' ]);
    Route::put('update-staff/{id}', [StaffController::class, 'update' ]);
    Route::get('delete-staff/{id}', [StaffController::class, 'destroy' ]);

    
    
});