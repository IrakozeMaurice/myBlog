@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-6">
            <h2>Create Post</h2><br>
            <form action="/posts" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Select category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories = getCategories() as $category)
                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div>
                    <input type="text" name="title" placeholder="title" class="form-control">
                </div>
                <br>
                <div>
                    <textarea name="description" placeholder="description" class="form-control"></textarea>
                </div>
                <br>
                <div>
                    <label for="post_img">Select a cover image</label>
                    <input type="file" id="post_img" name="post_image" class="form-control">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Create post</button>
                </div>
            </form><br>
            @include('partials.errors')
        </div>
    </div>
@endsection
