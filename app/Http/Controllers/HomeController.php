<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        //die(print_r($posts));
        return view('index')->with('posts', $posts);
    }
}
