@extends('theme.app.main')
@section('title', 'booking')

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

    <div class="pag-banner-area faqs-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content">
                <h1>Booking Table</h1>
                <ul>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li>Booking Table</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="assets-customer/images/page/page-banner-shape-1.webp" alt="images">
        </div>
    </div>

    {{-- @auth
        <div class="cart-area pt-100 pb-70">
            <div class="container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>No Meja</th>
                                <th>Nama Meja</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @if (count($reservation) > 0)
                            <tbody>
                                @foreach ($reservation as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->table->no_meja }}</td>
                                        <td>{{ $item->table->name }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->time }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td class="py-2 text-right">
                                            <form action="{{ route('reservation.cancel', $item->id) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <button class="btn btn-outline-warning" type="submit">Cancel</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @else
                            <tbody>
                                <tr>
                                    <td class="text-center" colspan="8">No Data</td>
                                </tr>
                            </tbody>
                        @endif
                    </table>

                </div>
            </div>
        </div>
    @endauth --}}


    <div class="visit-two-area visit-page-area pt-100 pb-100">
        <div class="container">
            <div class="visit-two-form-content visit-page-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="visit-two-images">
                            <div class="visit-video">
                                <a href="https://www.youtube.com/watch?v=-z-wtyXjFIg" class="popup-youtube">
                                    <img src="assets-customer/images/video-play.svg" alt="images">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-visit-two-form booking-table-form">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <div class="section-title left-title">
                                <span class="top-title">Mari Kunjungi Namura Cafe</span>
                                <h2>Pesan Meja</h2>
                            </div>
                            <form method="POST" action="{{ route('reservation.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                value="@auth{{ Auth::user()->name }} @endauth" disabled required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="jumlah_orang"
                                                placeholder="Jumlah Orang" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <select class="form-select" name="table_id" aria-label="Default select example"
                                                required>
                                                <option selected disabled>No Meja</option>
                                                @foreach ($table as $item)
                                                    <option value="{{ $item->id }}">{{ $item->no_meja }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <div class="input-group date" id="datetimepicker">
                                                    <input type="text" class="form-control" name="date"
                                                        placeholder="mm/dd/yyyy" required>
                                                    <span class="input-group-addon"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <div class="input-group date" id="time">
                                                        <input type="time" class="form-control" name="time" required>
                                                        <span class="input-group-addon"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-sm-6 col-md-12">
                                            <button type="submit" class="default-btn">Book A Table</button>
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
@section('script')
    <script>
        $('#datetimepicker1').datepicker({
            weekStart: 0,
            todayBtn: "linked",
            language: "es",
            orientation: "bottom auto",
            keyboardNavigation: false,
            autoclose: true
        });
    </script>
@endsection
@endsection
