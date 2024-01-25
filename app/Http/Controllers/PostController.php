<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('post',[
            "title" => 'All Post',
            'active' => 'posts',
            // 'post' => Post::all()
            'post' => Post::latest()->get()
        ]);  
    }

    public function show(Post $post)
    {
        return view('posts', [
            "title" => "Single Post",
            'active' => 'posts',
            "post" => $post
        ]);
    }
}
