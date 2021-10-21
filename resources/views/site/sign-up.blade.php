@extends('layouts.main')
@section('title', 'Home')
@section('content')
<section class="p-5">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
            <div class="m-auto col-md-4">
                <h1>Login</h1>
                <form action="">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <button class="btn btn-primary mt-3" type="submit">Login</button>
                </form>
                <a href="sign-up" class="mt-5">Sign up</a>
            </div>
            <img src="{{ asset('graphics/hero-img.svg') }}" alt="" class="img-fluid w-50 d-md-block d-none">
        </div>
    </div>
</section>
@endsection
