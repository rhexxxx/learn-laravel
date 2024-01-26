<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::latest();

        if(request('search')){
            $post->where('title', 'like', '%' . request('search') . '%');
        }

        return view('post',[
            "title" => 'All Post',
            'active' => 'posts',
            // 'post' => Post::latest()->get()
            'post' => $post->get()
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
