@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                @foreach ($posts as $post)
                    <div class="row">
                        <div class="col-lg-2">
                            <img class="img-fluid img-thumbnail" src="/storage/cover_images/{{ $post->post_image }}"
                                alt="post image">
                        </div>
                        <div class="col-lg-10">
                            <h2><a href="/{{ $post->id }}">{{ $post->title }}</a></h2>
                            <p><b>Posted:</b> {{ $post->created_at->diffForHumans() }}
                                by: {{ $post->writer->name }}</p>
                            <p><b>Category:</b> {{ $post->category->name }}</p>
                            <p>{{ substr($post->description, 0, 220) }}</p>
                            <a href="{{ $post->id }}">Continue reading &gt;</a>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
            <div class="col-lg-2">
                ads
            </div>
        </div>
    </div>
@endsection
