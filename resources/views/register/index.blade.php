@extends('layouts.main')

@section('container')
    <main class="form-registration w-100 m-auto">
        <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
        <form action="/register" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="ex : John Doe" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                    id="username" placeholder="ex : johndoe" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        </form>
        <small class="text-center d-block mt-3">Already registered? <a href="/login"
                class="text-decoration-none">Login</a></small>
    </main>
@endsection
