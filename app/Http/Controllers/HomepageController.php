<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomepageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('frontend.home', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('frontend.show', compact('post'));
    }

    public function showByCategory($id)
    {
        $posts = Post::where('category_id', $id)->orderBy('updated_at', 'desc')->get();
        return view('frontend.home', compact('posts'));
    }
}
