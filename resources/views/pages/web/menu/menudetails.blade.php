@extends('theme.app.main')
@section('title', 'menudetails')

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
                                <a href="{{ url('cart') }}">
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
    <div class="pag-banner-area menu-pages-banner-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content">
                <h1>Menu Detail</h1>
                <ul>
                    <li><a href="{{ url('home') }}">Beranda</a></li>
                    <li>Menu Detail</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- <div class="menu-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="menu-details">
                        <div class="row align-items-center">

                            <div class="col-lg-6 col-md-6">
                                <div class="mrnu-details-img">
                                    <img src="{{ asset('images/menu/' . $menu->cover) }}" alt="images">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-menu-details-contant shop-single-text">
                                    <h2>{{ $menu->title }}</h2>

                                    <span class="details-two">{{ $menu->price }}</span>
                                    <p style="text-align: justify">{{ $menu->description }}</p>
                                    @auth
                                        <form method="POST" action="{{ route('cart.add') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $menu->id }}" name="menu_id">
                                            <ul class="quantity-list">
                                                <li>
                                                    <div class="pass-quantity">
                                                        <div class="input-counter">
                                                            <span class="minus-btn">
                                                                <i class='bx bx-minus'></i>
                                                            </span>
                                                            <input type="text" value="1" name="quantity">
                                                            <span class="plus-btn">
                                                                <i class='bx bx-plus'></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <button type="submit" class="default-btn">Add To Cart</button>
                                                </li>
                                            </ul>
                                            <ul class="shop-single-list">
                                                <li><span>Sku:</span>{{ $menu->stock }}</li>
                                                <li><span>Category:</span><a href="shop-details.html"> {{ $menu->category }}</a></li>
                                            </ul>
                                        </form>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="shop-single-area pt-100">
        <div class="container">
            <div class="menu-details shop-single-details">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="menu-details-img">
                            <img src="{{ asset('images/menu/' . $menu->cover) }}" alt="images" />
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="single-menu-details-contant shop-single-text">
                            <h2>{{ $menu->title }}</h2>

                            <span class="details-two">{{ $menu->price }}</span>
                            <p>{{ $menu->description }}</p>
                            @auth
                                <form method="POST" action="{{ route('cart.add') }}">
                                    @csrf
                                    <input type="hidden" value="{{ $menu->id }}" name="menu_id">
                                    <ul class="quantity-list">
                                        <li>
                                            <div class="pass-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class='bx bx-minus'></i>
                                                    </span>
                                                    <input type="text" value="1" name="quantity">
                                                    <span class="plus-btn">
                                                        <i class='bx bx-plus'></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <button type="submit" class="default-btn">Add To Cart</button>
                                        </li>
                                    </ul>

                                </form>
                            @endauth
                            <ul class="shop-single-list">
                                <li>
                                    <span>Stok:</span>{{ $menu->stock }}
                                    @if ($menu->stock > 0 && $menu->stock <= 10)
                                        <span class="low-stock">Stok Terbatas</span>
                                    @endif
                                </li>

                                <li><span>Category:</span><a href="shop-details.html"> {{ $menu->category }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
