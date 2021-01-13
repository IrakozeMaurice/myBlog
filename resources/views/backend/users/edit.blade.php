@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-8">
            <h2>Edit User</h2><br>
            <form action="/users/{{ $user->id }}" method="POST">
                @csrf
                @method('PATCH')
                <div>
                    <label for="role">select role</label>
                    <select name="is_admin" id="role" class="form-control">
                        <option value="0">Normal User</option>
                        <option value="1" @if ($user->is_admin == 1)
                            selected
                            @endif>Administrator</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="username">Name</label>
                    <input type="text" name="name" id="username" value="{{ $user->name }}" class="form-control">
                </div>
                <br>
                <div>
                    <label for="userEmail">Email</label>
                    <input type="email" name="email" id="userEmail" value="{{ $user->email }}" class="form-control">
                </div>
                <br>
                <div>
                    <label for="userpassword">Password</label>
                    <input type="password" name="password" id="userpassword" placeholder="password" class="form-control">
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-primary" value="Update User">
                </div>
            </form><br>
            @include('partials.errors')
        </div>
    </div>
@endsection
