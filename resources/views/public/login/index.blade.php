@extends('public.layouts.main')
<title>{{ $title }}</title>
@section('container')
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            @if (session()->has('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    <main class="form-signin mt-2 w-100 m-auto">
        <form action="/login" method="post">
            @csrf
            <h1 class="h2 mb-3 fw-700 text-center">Login</h1>
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" autofocus placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" name="submit" type="submit">Login</button>
        </form>
        <small>Belum Punya akun ? <a href="/register" class="text-decoration-none"><small>Register
                    now</small></a></small>
    </main>
@endsection
