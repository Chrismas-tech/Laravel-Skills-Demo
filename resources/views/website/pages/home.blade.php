@extends('website.layouts.base-website')
@section('title')
    Home
@endsection
@section('content')
    <div class="container-fluid fixed-top p-4">

        <div class="col-12">
            <div class="d-flex justify-content-end">
                @if (Route::has('login'))
                    <div>
                        @auth
                            <button>
                                <a class="" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </button>
                        @else
                            <a href="{{ route('login') }}">Log in</a>

                            @if (Route::has('register'))
                                <a class="" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
