<?php

use App\Http\Controllers\AboutController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home' ,[
        "title" => "home"
    ]);
});

Route::get('/about',[AboutController::class, 'index']);

Route::get('/blog', [PostController::class, 'index']);

Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories' , [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slog}', function(Category $category ){
    return view('post' , [
        'title' => "post by Category: $category->name",
        'post' => $category->posts,
    ]);
});

Route::get('/author/{author:username}', function(User $author){
    return view('post' , [
        'title' => "Post by Author: $author->name",
        'post' => $author->post,
        'ver' => true
    ]);
});
