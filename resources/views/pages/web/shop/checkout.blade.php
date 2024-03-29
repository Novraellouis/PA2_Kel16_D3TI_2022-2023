@extends('theme.app.main')
@section('title', 'checkout')

@section('content')
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-option justify-content-center d-flex align-items-center">
                        <div class="option-item">
                            <i class='bx bx-search search-btn'></i>
                            <i class='bx bx-x close-btn'></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" placeholder="Search..." type="text">
                                        <button class="search-button" type="submit">
                                            <i class='bx bx-search'></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="shapping-bag">
                                <a href="cart.html">
                                    <img src="assets-customer/images/shopping-bag-icon.svg" alt="images">
                                </a>
                                <div class="shapping-text">
                                    01
                                </div>
                            </div>
                        </div>
                        <div class="option-item">
                            <a href="{{ url('booking') }}" class="default-btn">Book A Table</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="pag-banner-area shop-pages-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content">
                <h1>Pembayaran</h1>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li>Pembayaran</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="assets-customer/images/page/page-banner-shape-1.webp" alt="images">
        </div>
    </div>

    <div class="checkout-area ptb-100">
        <div class="container">
            <div class="row">

                {{-- <div class="returning-customer">
                    <p>Returning Customer?<a href="login.html"> Click here to login</a></p>
                </div> --}}

                <div class="menu-details-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Transfer</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Cash</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <div class="single-shop-text row">
                                <div class="col-lg-7">
                                    <div class="checkout-from">
                                        <form action="{{ route('checkout.post') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <h2>Billing details</h2>
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        {{-- <input type="hidden" name="id_customer" value="{{ $user['id'] }}"> --}}
                                                        <label class="form-label">Nama</label>
                                                        <input type="text" name="nama_customer"
                                                            value="@auth{{ Auth::user()->name }} @endauth"
                                                            class="form-control" readonly>
                                                    </div>
                                                    <div class="col-lg-12col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nomor Telepon</label>
                                                            <input type="text" name="telepon"
                                                                value="@auth{{ Auth::user()->nomorhp }} @endauth"
                                                                class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Alamat</label>
                                                        <input type="text" name="alamat"
                                                            value="@auth{{ Auth::user()->alamat }} @endauth"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Catatan</label>
                                                        <input type="text" name="catatan"
                                                            class="form-control @error('catatan') is-invalid @enderror">
                                                        @error('catatan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Bukti Pembayaran</label>
                                                        <input type="file" name="gambar"
                                                            class="form-control @error('gambar') is-invalid @enderror">
                                                        @error('gambar')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="checkout-right">
                                        <h2>Your Order Summary</h2>
                                        <div class="single-checkout-cart">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Product Name </th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($carts as $cart)
                                                            <tr>
                                                                <th scope="col">{{ $cart->menu->title }}</th>
                                                                <th scope="col">{{ $cart->quantity }}</th>
                                                                <th scope="col">
                                                                    {{ $cart->menu->price * $cart->quantity }}</th>
                                                            </tr>
                                                        @endforeach
                                                        <tr class="card-subtotal">
                                                            <th scope="col">Order Total </th>
                                                            <th scope="col"></th>
                                                            <th scope="col">{{ $harga }}</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="checkout-right">
                                            <h2>Proses Pembayaran</h2>
                                        </div>
                                    </div>
                                    <div class="bill-details bg-albastor">
                                        <div class="bill-item-wrap">
                                            <div class="payment-box">
                                                <div class="payment-method">
                                                    <p>
                                                        <label for="direct-bank-transfer">Bank Transfer</label>
                                                    <p class="chack-text">8200071591 a/n Siska Sitio (BCA)</p>
                                                    </p>
                                                </div>
                                                <div class="payment-method">
                                                    <p>
                                                        <label for="Ovo">Ovo</label>
                                                    <p class="chack-text">+62 852-2149-7286 a/n Siska Sitio (OVO)</p>
                                                    </p>
                                                </div>
                                                <button type="submit" class="default-btn">Bayar</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="additional-information row">
                                <div class="col-lg-7">
                                    <div class="checkout-from">
                                        <form action="{{ route('checkoutCash') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <h2>Billing details</h2>
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        {{-- <input type="hidden" name="id_customer" value="{{ $user['id'] }}"> --}}
                                                        <label class="form-label">Nama</label>
                                                        <input type="text" name="nama_customer"
                                                            value="@auth{{ Auth::user()->name }} @endauth"
                                                            class="form-control" readonly>
                                                    </div>
                                                    <div class="col-lg-12col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Nomor Telepon</label>
                                                            <input type="text" name="telepon"
                                                                value="@auth{{ Auth::user()->nomorhp }} @endauth"
                                                                class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Alamat</label>
                                                        <input type="text" name="alamat"
                                                            value="@auth{{ Auth::user()->alamat }} @endauth"
                                                            class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Catatan</label>
                                                        <input type="text" name="catatan"
                                                            class="@error('catatan') is-invalid @enderror form-control">
                                                        @error('catatan')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="checkout-right">
                                        <h2>Your Order Summary</h2>
                                        <div class="single-checkout-cart">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Product Name </th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($carts as $cart)
                                                            <tr>
                                                                <th scope="col">{{ $cart->menu->title }}</th>
                                                                <th scope="col">{{ $cart->quantity }}</th>
                                                                <th scope="col">
                                                                    {{ $cart->menu->price * $cart->quantity }}</th>
                                                            </tr>
                                                        @endforeach
                                                        <tr class="card-subtotal">
                                                            <th scope="col">Order Total </th>
                                                            <th scope="col"></th>
                                                            <th scope="col">{{ $harga }}</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="checkout-right">
                                            <h2>Proses Pembayaran</h2>
                                        </div>
                                    </div>
                                    <div class="bill-details bg-albastor">
                                        <div class="bill-item-wrap">
                                            <div class="payment-box">
                                                <div class="payment-method">
                                                    <p>
                                                        <label for="direct-bank-transfer">Cash Payment</label>
                                                    <p class="chack-text">Pembayaran pesanan cash</p>
                                                    </p>
                                                </div>
                                                <button type="submit" class="default-btn">Bayar</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
