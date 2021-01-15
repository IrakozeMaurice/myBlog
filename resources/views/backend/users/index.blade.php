@extends('layouts.app')
@section('pageTitle', 'Users')

@section('content')
    <div class="container">
        <div class="row">
            @include('partials.sidenav')
            <div class="col-lg-7">
                <a href="/users/create" class="btn btn-primary" style="float: right;">New User</a>
                <h2>Users</h2>
                <hr>
                @include('partials.messages')
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Is admin</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>
                            @if ($user->is_admin == 1) Yes @else No
                                @endif
                            </td>
                            <td><a href="/users/{{ $user->id }}/edit"><button class="btn btn-success">Edit</button></a>
                            </td>
                            <td>
                                <form action="/users/{{ $user->id }}" method="POST" style="display: inline;">
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
