@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('partials.sidenav')
            <div class="col-lg-6">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-primary text-white"><strong>About</strong></div>
                    <div class="card-body">
                        <div>
                            <strong>Email</strong><br>
                            <small>{{ auth()->user()->email }}</small>
                        </div><br>
                        <div>
                            <strong>Phone</strong><br>
                            <small>(888) 888-888</small>
                        </div><br>
                        <div>
                            <strong>Posts</strong><br>
                            <small>{{ auth()->user()->posts()->count() }}</small>
                        </div><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                @if (auth()->user()->is_admin == 1)
                    <h3 class="text-primary">System administrator</h3><br>
                @else
                    <h3 class="text-primary">{{ auth()->user()->name }}</h3><br>
                @endif
                <img class="img-fluid img-thumbnail" src="/storage/profile_pictures/{{ auth()->user()->avatar }}"
                    alt="user image" style="display: block"><br>
                <button class="btn btn-primary btn-sm btn-block">Change profile picture</button>
            </div>
        </div>
    </div>
@endsection
