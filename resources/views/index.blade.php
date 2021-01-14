@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('partials.sidenav')
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        @if (auth()->user()->is_admin == 1)
                            You are logged in as admin
                        @else
                            You are logged in as normal user
                        @endif

                    </div>
                </div>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="jumbotron">
                    user profile here
                </div>
            </div>
        </div>
    </div>
@endsection
