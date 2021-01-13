@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-8">
            <h2>Create User</h2><br>
            <form action="/users" method="POST">
                @csrf
                <div>
                    <label for="role">select role</label>
                    <select name="is_admin" id="role" class="form-control">
                        <option value="0">Normal User</option>
                        <option value="1">Administrator</option>
                    </select>
                </div>
                <br>
                <div>
                    <input type="text" name="name" placeholder="user name" class="form-control">
                </div>
                <br>
                <div>
                    <input type="email" name="email" placeholder="email address" class="form-control">
                </div>
                <br>
                <div>
                    <input type="password" name="password" placeholder="password" class="form-control">
                </div>
                <br>
                <div>
                    <input type="submit" class="btn btn-primary" value="Create User">
                </div>
            </form><br>
            @include('partials.errors')
        </div>
    </div>
@endsection
