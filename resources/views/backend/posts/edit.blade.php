@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-6">
            <h2>Edit Post</h2>
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PATCH')
                <div>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                </div>
                <br>
                <div>
                    <textarea name="description" class="form-control">{{ $post->description }}</textarea>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Update post</button>
                </div>
                <br>
            </form>
            @include('partials.errors')
        </div>
    </div>
@endsection
