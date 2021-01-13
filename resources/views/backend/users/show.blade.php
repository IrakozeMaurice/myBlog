@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-lg-8">
            <h4>{{ $user->name }}</h4>
            <small>click the edit or delete buttons below to edit or delete this user.</small>
            <br><br>
            <a href="/users/{{ $user->id }}/edit"><button class="btn btn-success">Edit</button></a>
            <form action="/users/{{ $user->id }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>
    </div>
@endsection
