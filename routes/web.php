<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

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
    
    
});