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
                <h1>Detail Pembayaran</h1>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li>Detail Pembayaran</li>
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
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Produk</th>
                            <th>Order Number</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($review))
                            @foreach ($review as $item)
                                <tr>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->checkout->product->title }}</td>
                                    <td>{{ $item->checkout->id_order }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('review.edit', $item->id) }}">Update</a>
                                        <form action="{{ route('review.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" class="text-center">No Data</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>


@endsection
