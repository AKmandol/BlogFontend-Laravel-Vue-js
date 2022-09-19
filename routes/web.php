<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


Route::get('/',[BlogController::class,'index']);
//Route::get('/home',[BlogController::class,'index']);
Route::get('/blog/{slug}',[BlogController::class,'singleBlog']);

Route::get('/category/{categoryName}/{id}',[BlogController::class,'categoryIndex']);
Route::get('/tag/{tagName}/{id}',[BlogController::class,'tagIndex']);
Route::get('/userPost/{fullName}/{id}',[BlogController::class,'userAllPost']);
Route::get('/search',[BlogController::class,'search']);