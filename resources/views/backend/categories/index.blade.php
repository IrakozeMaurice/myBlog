@extends('layouts.app')
@section('pageTitle', 'Categories')

@section('content')
    <div class="container">
        <div class="row">
            @include('partials.sidenav')
            <div class="col-lg-7">
                <a href="/categories/create" class="btn btn-primary" style="float: right;">New Category</a>
                <h2>Categories</h2>
                <hr>
                @include('partials.messages')
                <table class="table">
                    <tr>
                        <th>Category Name</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    @foreach ($categories as $category)
                        <tr>
                            <td><a href="/categories/{{ $category->id }}">{{ $category->name }}</a></td>
                            <td><a href="/categories/{{ $category->id }}/edit"><button
                                        class="btn btn-success">Edit</button></a>
                            </td>
                            <td>
                                <form action="/categories/{{ $category->id }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
    </div>
@endsection
