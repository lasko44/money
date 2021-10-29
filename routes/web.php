<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('blog')->group(function (){
    Route::prefix('blog-category')->group(function(){
        Route::get('/{id}',[BlogCategoryController::class, 'show'])->name('blog-category.show');
        Route::get('post/{postId}', [PostController::class, 'show'])->name('post.show');
    });
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/{slug}',[PostController::class, 'show'])->name('blog.post.show');
});
