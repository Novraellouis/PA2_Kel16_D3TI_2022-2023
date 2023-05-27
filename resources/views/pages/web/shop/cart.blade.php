@extends('theme.app.main')
@section('title', 'chart')

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
                <h1>Cart</h1>
                <ul>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="assets-customer/images/page/page-banner-shape-1.webp" alt="images">
        </div>
    </div>


    <div class="cart-area pt-100 pb-70">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th scope="col" class="cart-text">Name </th>
                            <th scope="col">Unit Price</th>
                            <th scope="col" class="cart-quantity">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $item)
                            <tr>
                                <th scope="col" class="table-img">
                                    <div class="table-icon">
                                        <a href="W1">
                                            <img src="{{ asset('images/menu/' . $item->menu->cover) }}" width="150">
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="cart-text">
                                    <a href="{{ route('menu.menudetails', $item->menu->id) }}">{{ $item->menu->title }}</a>
                                </th>
                                <th scope="col">
                                    Rp. {{ $item->menu->price }}
                                </th>
                                <th scope="col" class="cart-quantity">
                                        {{ $item->quantity }}
                                </th>
                                <th scope="col">
                                    Rp. {{ $item->quantity * $item->menu->price }}
                                </th>
                                <th>
                                    <form action="{{ route('cart.remove', $item->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-bin" style="border:none ">
                                            <img src="assets-customer/images/delete-bin-icon.svg" alt="images">
                                        </button>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="checkout">
                <div class="checkout-working">
                    <h2>Cart Totals</h2>
                    <ul>
                        @if ($totalHarga = 0)
                            <li class="d-flex justify-content-between">
                                <span>Subtotal</span>
                                <span class="cart-number">Rp. --</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Shipping</span>
                                <span class="cart-number">Rp. --</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Total</span>
                                <span class="cart-number-2">Rp. --</span>
                            </li>
                        @else
                            <li class="d-flex justify-content-between">
                                <span>Subtotal</span>
                                <span class="cart-number">Rp. {{ $harga }}</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>PPN</span>
                                <span class="cart-number">Rp. {{ $ship }}</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Total</span>
                                <span class="cart-number-2">Rp. {{ $harga + $ship }}</span>
                            </li>
                        @endif
                    </ul>
                    <a href="{{ url('checkout') }}" class="default-btn">Proceed To Checkout<span></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-content">
        <p>©<b>Namura</b> is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
    </div>
@endsection
