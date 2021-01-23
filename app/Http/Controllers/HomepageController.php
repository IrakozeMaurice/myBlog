<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomepageController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('frontend.home', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('frontend.show', compact('post'));
    }
}
