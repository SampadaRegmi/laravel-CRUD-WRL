@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <input type="hidden" name="role" value="member">

    <section class="register-photo" style="background-color: transparent;">
        <div class="form-container" style="margin-top: 40px;">
            <div class="image-holder" style="background: url('{{ asset('images/logo.png') }}') left / cover no-repeat;">
            </div>
            <form method="post" action="{{ route('register') }}" style="height: 525px;">
                @csrf
                <h2 class="text-center"><strong>Sign-Up</strong></h2>
                <p>You need to register to enter the site.</p>

                <label class="form-label">Name</label>
                <div class="form-group mb-3">
                    <input class="border rounded-pill form-control @error('name') is-invalid @enderror" type="name"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

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
                    <input class="border rounded form-control @error('password') is-invalid @enderror" type="password"
                        id="password" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label class="form-label">Re-enter Password</label>
                <div class="form-group mb-3">
                    <input class="border rounded form-control" type="password" id="confirmPassword" name="password_repeat"
                        required autocomplete="new-password">
                </div>
                <div id="passwordsError" style="display: none;margin-bottom: 16.5px;"><span id="errorMessage"
                        class="text-danger" style="font-size:13px;"></span></div>
                <div class="form-group mb-3"><button
                        class="btn btn-primary border rounded shadow-none d-block w-100 ms-md-0 me-md-0" id="submitButton"
                        type="submit" style="color: rgb(255,255,255);background-color: black;">Sign Up</button></div>
                <a class="already" href="{{ route('login') }}">Already have an account? Sign in</a>
            </form>
        </div>
    </section>
@endsection
