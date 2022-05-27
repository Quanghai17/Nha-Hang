<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;

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

Route::resource('/', \App\Http\Controllers\HomeController::class);
Route::resource('/product',\App\Http\Controllers\ProductController::class);
Route::resource('/about',\App\Http\Controllers\AboutController::class);
Route::resource('/book',\App\Http\Controllers\BookController::class);
Route::resource('/blog',\App\Http\Controllers\BlogController::class);
Route::resource('/contact',\App\Http\Controllers\ContactController::class);
Route::get('/blogs/{slug}',"\App\Http\Controllers\BlogController@show")->name('blog.detail');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
