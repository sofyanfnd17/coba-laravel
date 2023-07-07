@extends('layouts.main')

@section('containers')
<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow mt-3 mb-3">
                <main class="form-registration w-100 p-3 py-5 m-auto">
                    <h1 class="h3 mb-3 fw-normal text-center">Registration Form!</h1>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror"
                                name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                name="username" id="username" placeholder="Username" required
                                value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password"
                                class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
                    </form>
                    <small class="d-block text-center mt-3">Already registered? <a href="/login">Login Now!</a></small>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection