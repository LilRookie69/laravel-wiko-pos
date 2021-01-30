@extends('layouts.login')

@section('content')
<div class="col-md-6">
    <img src="{{ asset('img/login.jpeg') }}" alt="login" class="login-card-img">
</div>

<div class="col-md-6">
    <div class="card-body ml-lg-5">
        <div class="login-wrapper py-5">
            <div class="brand-wrapper">
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo">
            </div>
            <p class="login-card-description">Sign into your account</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" placeholder="Email address">
                    @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="***********">
                    @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
            </form>

            <a href="#" class="forgot-password-link">Forgot password?</a>
        </div>
    </div>
</div>

@endsection
