@extends('layouts.app')
@section('pageTitle', 'Posts')

@section('content')
    <div class="container">
        <a href="/posts/create" class="btn btn-primary" style="float: right;">New post</a>
        <h1>Posts</h1>
        <hr>
        @if (session('message') == 'post created')
            <div class="alert alert-primary">
                {{ session('message') }}
            </div>
        @endif
        @if (session('message') == 'post updated')
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session('message') == 'post deleted')
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
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
                        <a href="#"><button class="btn btn-danger">Delete</button></a>
                    </form>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
