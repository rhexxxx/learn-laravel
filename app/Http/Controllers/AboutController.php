<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "about",
            "name" => 'Rhexxx',
            "email" => "rheino.3223@gmail.com",
            "image" => "jl.png"
        ]);
    }
}
