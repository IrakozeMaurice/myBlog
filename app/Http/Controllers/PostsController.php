<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        if (auth()->user()->is_admin == 1) {
            $posts = Post::all();
        } else {
            $posts = Post::where('user_id', auth()->id())->get();
        }

        return view('backend.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('backend.posts.create');
    }

    public function store(Request $request)
    {

        $attributes = $this->validatePost();
        $attributes['category_id'] = request('category_id');
        $attributes['user_id'] = auth()->id();
        $attributes['post_image'] = $this->handleFileUpload($request);
        Post::create($attributes);
        return redirect('/posts')->with('message', 'created');
    }

    public function show(Post $post)
    {
        abort_unless($post->user_id == auth()->id() || auth()->user()->is_admin == 1, 403, 'You are not authorized to view this page');

        return view('backend.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('backend.posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $attributes = $this->validatePost();
        $attributes['user_id'] = auth()->id();
        $attributes['post_image'] = $this->handleFileUpload($request);
        $post->update($attributes);

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
                'description' => ['required', 'min:3'],
                'post_image' => ['image', 'nullable', 'max:1999']
            ]
        );
    }

    protected function handleFileUpload(Request $request)
    {
        //handle file upload
        if ($request->hasFile('post_image')) {
            //get filename with extension
            $filenameWithExt = $request->file('post_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('post_image')->getClientOriginalExtension();
            //filename to store
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            //upload image
            $path = $request->file('post_image')->storeAs('public/cover_images', $filenameToStore);
        } else {
            $filenameToStore = 'default_cover.jpg';
        }
        return $filenameToStore;
    }
}
