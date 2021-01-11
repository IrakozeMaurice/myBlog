@extends('layouts.app')
@section('pageTitle', 'Posts')

@section('content')
    <div class="container">
        <a href="/posts/create" class="btn btn-primary" style="float: right;">New post</a>
        <h1>Posts</h1>
        <hr>
        @include('partials.messages')
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-lg-2">
                    <img src="" alt="post image">
                </div>
                <div class="col-lg-8">
                    <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                    <p>{{ $post->description }}</p>
                </div>
                <div class="col-lg-2 text-center my-auto">
                    <a href="/posts/{{ $post->id }}/edit"><button class="btn btn-success">Edit</button></a>
                    <form action="/posts/{{ $post->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
