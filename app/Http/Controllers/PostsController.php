<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        return view('backend.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.posts.create');
    }

    public function store()
    {
        $attributes = $this->validatePost();
        $attributes['category_id'] = request('category_id');
        $attributes['user_id'] = auth()->id();
        Post::create($attributes);
        return redirect('/posts')->with('message', 'created');
    }

    public function show(Post $post)
    {
        return view('backend.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('backend.posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $post->update($this->validatePost());

        return redirect('/posts')->with('message', 'updated');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('message', 'deleted');
    }

    protected function validatePost()
    {
        return request()->validate(
            [
                'title' => ['required', 'min:3'],
                'description' => ['required', 'min:3']
            ]
        );
    }
}
