@extends('layouts.app')
@section('pageTitle', 'Categories')

@section('content')
    <div class="container">
        <div class="col-lg-6">
            <h2>Create Category</h2><br>
            <form action="/categories" method="POST">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="category name" class="form-control">
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-primary" value="Create category">
                </div>
            </form><br>
            @include('partials.errors')
        </div>
    </div>
@endsection
