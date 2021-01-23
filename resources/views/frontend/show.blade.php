@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img class="img-fluid img-thumbnail" src="/storage/cover_images/{{ $post->post_image }}" alt="post image">
            </div>
            <div class="col-lg-6">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->description }}</p>
                <br>
                <a href="/"><button class="btn btn-primary btn-sm">Back</button></a>
            </div>
        </div>
    </div>
@endsection
