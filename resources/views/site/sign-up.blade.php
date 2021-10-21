@extends('layouts.main')
@section('title', 'Sign-up')

@section('navbar-link')
<li class="nav-item">
    <a href="/" class="nav-link">Home</a>
</li>
@endsection

@section('content')
<section class="p-5 mt-5">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
            <div class="m-auto col-md-4">
                <h1>Sign up</h1>
                <form action="">
                    <label for="username" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                    <label for="role" class="form-label">User Role</label>
                    <select name="role" id="role" class="form-control">
                        <option hidden>Select role</option>
                        <option value="siswa">Siswa</option>
                        <option value="pengajar">Pengajar</option>
                    </select>
                    <button class="btn btn-primary mt-3" type="submit">Sign Up</button>
                </form>
            </div>
            <img src="{{ asset('graphics/sign-up.svg') }}" alt="" class="img-fluid w-50 d-md-block d-none">
        </div>
    </div>
</section>
@endsection
