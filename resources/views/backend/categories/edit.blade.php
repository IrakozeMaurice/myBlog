@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-8">
            <h2>Edit Category</h2>
            <form action="/categories/{{ $category->id }}" method="POST">
                @csrf
                @method('PATCH')
                <div>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-primary" value="Update category">
                </div>
                <br>
            </form>
            @include('partials.errors')
        </div>
    </div>
@endsection
