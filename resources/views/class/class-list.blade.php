@extends('layouts.main')
@section('title', 'Cossignment')

@section('navbar-link')
<li class="nav-item">
    <a href="/" class="nav-link">Logout</a>
</li>
@endsection

@section('content')
<section class="p-5 mt-2">
    <div class="container">
        <div class="d-flex justify-content-end">
            <a href="/join-class">
                <button class="btn btn-lg bg-primary text-light me-4">Join class</button>
            </a>
            <a href="/create-class">
                <button class="btn btn-lg bg-primary text-light me-4">Create class</button>
            </a>
        </div>

        <div>
            <h1>Classes</h1>
            <div class="row">

                @for ($i = 0; $i < 5; $i++)
                <div class="col-12 col-lg-4 my-3">
                    <div class="card">
                        <img src="{{ asset('img/class.jpg') }}" alt="" class="card-img-top img-fluid h-50">
                        <div class="card-body">
                            <h5 class="card-title">Class {{ $i }}</h5>
                            <h6 class="card-subtitle">Class subtitle</h6>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia expedita incidunt reiciendis odit autem accusantium blanditiis officiis dolorum nulla provident!</p>
                        </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>
    </div>
</section>
@endsection
