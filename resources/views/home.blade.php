@extends('layouts.main')
@section('title', 'Home')
@section('navbar-link')
<li class="nav-item">
    <a href="/sign-up" class="nav-link">Sign Up</a>
</li>
@endsection

@section('content')
<section class="bg-dark text-light p-5">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
            <div class="m-auto col-md-4">
                <h1>Login</h1>
                <form action="/classes" method="GET">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <button class="btn btn-primary mt-3" type="submit">Login</button>
                </form>
            </div>
            <img src="{{ asset('graphics/hero-img.svg') }}" alt="" class="img-fluid w-50 d-md-block d-none">
        </div>
    </div>
</section>

<section style="margin: 100px 0;">
    <div class="container d-sm-flex justify-content-around align-items-center">
        <div class="m-auto">
            <h1>Feature</h1>
            <p class="lead">Feature Description</p>
        </div>
        <img src="{{ asset('graphics/feature-1.svg') }}" alt="" class="img-fluid w-50">
    </div>
</section>
@endsection
