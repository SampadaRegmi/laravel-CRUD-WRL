@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <section class="register-photo" style="background-color: transparent;">
        <div class="form-container" style="margin-top: 40px;">
            <div class="image-holder" style="background: url('{{ asset('images/logo.png') }}') left / cover no-repeat;">
            </div>
            <form method="post" action="{{ route('login') }}" style="height: 525px;">
                @csrf
                <h2 class="text-center"><strong>Sign-In</strong></h2>
                <p>Must login to enter the site.</p>
                <label class="form-label">Email</label>
                <div class="form-group mb-3">
                    <input class="border rounded-pill form-control @error('email') is-invalid @enderror" type="email"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label class="form-label">Password</label>
                <div class="form-group mb-3">
                    <input class="border rounded-pill form-control @error('password') is-invalid @enderror" type="password"
                        name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3"><a class="already" href="#" style="margin-right: 158px;">Forgot
                        Password?</a></div>
                <div class="form-group mb-3"><button
                        class="btn btn-primary border rounded shadow-none d-block w-100 ms-md-0 me-md-0" id="submitButton"
                        type="submit" style="color: rgb(255,255,255);background-color: black;">Sign In</button></div>
                        <div class="form-group mb-3">
                        <div class="form-group mb-3">
                        <a href="{{ route('root') }}" class="btn btn-secondary border rounded shadow-none d-block w-100 ms-md-0 me-md-0" style="color: rgb(255,255,255);background-color: black;">Back to Home</a>
                        </div>

                        </div>
                <a class="already" href="{{ route('register') }}">Don't have an account? Sign Up</a>
            </form>
        </div>
    </section>
@endsection
