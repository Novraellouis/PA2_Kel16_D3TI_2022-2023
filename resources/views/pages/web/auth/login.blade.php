@extends('theme.app.main')
@section('title', 'login')
@section('content')
    <div class="my-account-area pt-100 pb-100">
        <div class="container">
            <div class="my-account-form login-form">
                <div class="section-title">
                    <h2>Login From Here</h2>
                    <p>You are the fill is login form.</p>
                </div>
                <form action="{{ route('login.custom') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="form-label">Email Address*</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email address">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="form-label">Password*</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="section-title">
                            <p>Dont have account? Register <a href="{{ url('register') }}">Here</a></p>
                        </div>
                        {{-- <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <div class="my-account-text">
                                <a href="forgot-password.html">Lost your password?</a>
                            </div>
                        </div> --}}
                    </div>
                    <button type="submit" class="default-btn">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection
