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
                <h1>Checkout</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Checkout</li>
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
                            <th>No</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Metode Pembayaran</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $item => $l)
                            @if (Auth::user()->id == $l->id_customer)
                                <tr>
                                    <td>{{ $item + $list->firstItem() }}</td>
                                    <td>{{ $l->nama_customer }}</td>
                                    <td>{{ $l->telepon }}</td>
                                    <td>{{ $l->alamat }}</td>
                                    <td>{{ $l->payment_method }}</td>
                                    <td>
                                        <img src="{{ asset('images/' . $l->gambar) }}" style="width: 8rem">
                                    </td>
                                    <td>{{ $l->status }}</td>
                                    <td class="py-2 text-right">
                                        {{-- <form action="{{ route('reservation.cancel', $item->id) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <button class="btn btn-outline-warning" type="submit">Cancel</button>
                                            </form> --}}
                                    </td>
                                </tr>
                                {{-- @else
                                    <tr>
                                        <td class="text-center" colspan="8">No Data</td>
                                    </tr> --}}
                            @endif
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


@endsection