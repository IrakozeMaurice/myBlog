@extends('layouts.app')
@section('pageTitle', 'Posts')

@section('content')
    <div class="container">
        <a href="/posts/create" class="btn btn-primary" style="float: right;">New post</a>
        <h1>Posts</h1>
        <hr>
        @include('partials.messages')
        <div class="row">
            @include('partials.sidenav')
            <div class="col-lg-9">
                @foreach ($posts as $post)
                    <div class="row">
                        <div class="col-lg-3">
                            <img class="img-fluid img-thumbnail" src="/storage/cover_images/{{ $post->post_image }}"
                                alt="post image">
                        </div>
                        <div class="col-lg-9">
                            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                            <p>{{ $post->description }}</p><br>
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
        </div>
    </div>
@endsection
