@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-6">
            <h2>Create Post</h2><br>
            <form action="/posts" method="POST">
                @csrf
                <div>
                    <select name="category_id" class="form-control">
                        <option>Select category</option>
                        <option value="1">Sports</option>
                        <option value="2">Education</option>
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
                    <button type="submit" class="btn btn-primary">Create post</button>
                </div>
            </form><br>
            @include('partials.errors')
        </div>
    </div>
@endsection
