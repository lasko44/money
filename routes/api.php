<?php

use App\Http\Controllers\LikeController;
use App\Http\Controllers\FixStuffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('like')->group(function(){
    Route::get('/add',[LikeController::class,'add']);
    Route::get('/remove',[LikeController::class,'remove']);
});

Route::get('/replace', [FixStuffController::class, 'replace'])->name('fix.images');
