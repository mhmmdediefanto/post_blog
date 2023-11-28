@extends('public.layouts.main')
<title>{{ $title }}</title>
@section('container')
    <main class="form-signin mt-5 w-100 m-auto">
        <form action="/register" method="post">
            @csrf
            <h1 class="h2 mb-3 fw-700 text-center">Register</h1>
            <div class="form-floating">
                <input type="text"
                    class="form-control @error('name')
                    is-invalid
                @enderror"
                    name="name" placeholder="Name">
                <label>Full Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text"
                    class="form-control @error('username')
                    is-invalid
                @enderror"
                    name="username" placeholder="username name">
                <label for="floatingInput">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email"
                    class="form-control @error('email')
                    is-invalid
                @enderror"
                    name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password"
                    class="form-control @error('password')
                    is-invalid
                @enderror"
                    name="password" id="floatingPassword" placeholder="Password">
                <label for="">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            <small>Sudah Punya akun ? <a href="/login" class="text-decoration-none"><small>Login
                        now</small></a></small>
        </form>
    </main>
@endsection
