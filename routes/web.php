<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
//use controller here
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

Route::get('/posts', [PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
//create action will responsible to view create form
Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');
// post here to take numbers from user and put it here as aparameter
//to view specific post after while i will use this to view or execute query by post id
// framework search in lines in route sequentially
// cause of that i should write paramaterized view at the last
//alias name of route name i wanna make an alias for route
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');