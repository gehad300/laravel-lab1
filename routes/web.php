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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//create action will responsible to view create form
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// post here to take numbers from user and put it here as aparameter
//to view specific post after while i will use this to view or execute query by post id
// framework search in lines in route sequentially
// cause of that i should write paramaterized view at the last
//alias name of route name i wanna make an alias for route
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/hello', function(){

});

//every change in database should create new schema and make php artisan
// there is a table called migration contains created files //it's job to check is there a file to run it's database or what
//then add php artisan migrate