@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-lg-8">
            <h1>{{ $category->name }}</h1>
            <small>click the edit button below to edit this category or delete button to delete it.</small>
            <br><br>
            <a href="/categories/{{ $category->id }}/edit"><button class="btn btn-success">Edit</button></a>
            <form action="/categories/{{ $category->id }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>
    </div>
@endsection
