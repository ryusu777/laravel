@extends('layouts.main')
@section('title', 'Cossignment')

@section('navbar-link')
<li class="nav-item">
    <a href="/classes" class="nav-link">Classes</a>
</li>
<li class="nav-item">
    <a href="/" class="nav-link">Logout</a>
</li>
@endsection

@section('content')
<section class="p-5 mt-2 h-100">
    <div class="container" style="margin-top: 50px;">
        <div>
            <h1>Join Class</h1>
            <form action="">
                <label for="class-code" class="form-label">Enter Class Code</label>
                <input type="text" class="form-control" id="class-code" name="class-code" style="max-width: 500px;">
                <button class="btn btn-lg bg-primary text-light mt-5">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection
