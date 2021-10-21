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
            <h1>Create Class</h1>
            <form action="">
                <label for="className" class="form-label">Class Name</label>
                <input type="text" class="form-control" id="className" name="className" style="max-width: 500px;">
                <label for="classCode" class="form-label">Custom Class Code</label>
                <input type="text" class="form-control" id="classCode" name="classCode" style="max-width: 500px;">
                <label for="classDescription" class="form-label">Class description</label>
                <textarea name="classDescription" id="classDescription" cols="30" rows="10" class="form-control" style="max-width: 500px"></textarea>
                <button class="btn btn-lg bg-primary text-light mt-5">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection
