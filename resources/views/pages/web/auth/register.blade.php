@extends('theme.app.main')
@section('title', 'register')
@section('content')
    <div class="my-account-area pt-100 pb-100">
        <div class="container">
            <div class="my-account-form login-form">
                <div class="section-title">
                    <h2>Register From Here</h2>
                    <p>You are the fill is register form.</p>
                </div>
                <form action="{{ route('register.custom') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap*</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="form-label">Alamat*</label>
                                <input type="text" name="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="form-label">Username*</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    name="username" placeholder="Username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="form-label">Nomor Hp*</label>
                                <input type="text" name="nomorhp"
                                    class="form-control @error('nomorhp') is-invalid @enderror" placeholder="No Handphone">
                                @error('nomorhp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="form-label">Email*</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Email">
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
                    </div>
                    <button type="submit" class="default-btn">Register Now</button>
                </form>
            </div>
        </div>
    </div>


    <div class="faqs-buy-one-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="faqs-buy-content">
                        <div class="section-title left-title">
                            <h2>Buy One Get Two! Only This Weekends!</h2>
                            <p>Pedit quo minus id quod maxime placeat facere possimus omnis voluptas assumenda est
                                orepellendus temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                saepe eveniet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="faqs-buy-btn">
                        <a href="{{ url('aboutUs') }}" class="default-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="faqs-buy-shape-1">
            <img src="assets-customer/images/faqs-shape-1.webp" alt="images">
        </div>
        <div class="faqs-buy-shape-2">
            <img src="assets-customer/images/faqs-shape-2.webp" alt="images">
        </div>
    </div>
@endsection
