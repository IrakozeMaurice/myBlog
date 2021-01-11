@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-lg-6">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->description }}</p>
            <br>
            <a href="/posts/{{ $post->id }}/edit"><button class="btn btn-success">Edit</button></a>
            <form action="/posts/{{ $post->id }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <a href="#"><button class="btn btn-danger">Delete</button></a>
            </form>
        </div>
    </div>
@endsection
