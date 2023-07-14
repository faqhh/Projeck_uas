@extends('layouts.masuk')
@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(masuk/images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Sign Up
                    </span>
                </div>

                <form class="login100-form validate-form">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Name is required">
                        <span class="label-input100">Name</span>
                        <input class="input100" type="text" name="name" placeholder="Enter name">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                        <span class="label-input100">Email Address</span>
                        <input class="input100" type="email" name="email" placeholder="Enter email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Confirm Password is required">
                        <span class="label-input100">Confirm Password</span>
                        <input class="input100" type="password" name="password_confirmation" placeholder="Confirm password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            {{ __('Register') }}
                        </button>
                    </div>

                    @if (Route::has('login'))
                        <div class="text-center p-t-20">
                            <a class="txt1" href="{{ route('login') }}">
                                Already have an account? Sign In
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</form>

@endsection
