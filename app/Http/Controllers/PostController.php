<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $title= '';
        if(request('category')){
            $category = Category::firstWhere('slog', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }


        return view('post',[
            "title" => 'All Post' . $title,
            'active' => 'posts',
            'post' => Post::latest()->filter(['search' => request('search'),
                                              'category' => request('category'),
                                              'author' => request('author')
                                        ])->simplepaginate(7)
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
