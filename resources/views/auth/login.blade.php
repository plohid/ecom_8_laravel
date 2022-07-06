@extends('layouts.frontend_master')

@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="home.html">Home</a></li>
                    <li class='active'>Login</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->			
    <div class="col-md-6 col-sm-6 sign-in">
        <h4 class="">Sign in</h4>
        <p class="">Hello, Welcome to your account.</p>
        <div class="social-sign-in outer-top-xs">
            <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
            <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
        </div>
        <form class="register-form outer-top-xs" role="form">
            <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
            </div>
            <div class="form-group">
                <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
            </div>
            <div class="radio outer-xs">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
                </label>
                <a href="#" class="forgot-password pull-right">Forgot your Password?</a>
            </div>
            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
        </form>					
    </div>
    <!-- Sign-in -->

    <!-- create a new account -->
    <div class="col-md-6 col-sm-6 create-new-account">
        <h4 class="checkout-subtitle">Create a new account</h4>
        <p class="text title-tag-line">Create your new account.</p>
        <form class="register-form outer-top-xs" role="form">
            <div class="form-group">
                <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
            </div>
            <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
            </div>
            <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
            </div>
            <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
            </div>
            <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
            </div>
            <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
        </form>
        
        
    </div>	
        
@endsection


{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div> --}}