@extends('theme.app.main')
@section('title', 'home')
@section('content')
    <div class="banner-two-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-two-content">
                        <span data-cue="slideInLeft" data-duration="1500">Horas!!! Welcome to NAMURA</span>
                        <h1 data-cue="slideInLeft" data-duration="1800">Namura Cafe & Resto</h1>
                        <p data-cue="slideInLeft" data-duration="2500">Website Namura Cafe telah hadir melayani anda dengan
                            sepenuh hati. Menyediakan yang terbaik untuk pelanggan setia Namura Cafe</p>
                        <ul>
                            <li data-cue="slideInLeft" data-duration="2500">
                                <a href="{{ url('reservation') }}" class="default-btn">Get Delivery</a>
                            </li>
                        </ul>
                        <div class="banner-content-shape">
                            <img src="assets-customer/images/banner/banner-two-shape-3.webp" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-banner-two-image">
                        <img src="{{ asset('images/namura9.jpg') }}" alt="images">
                        <div class="banner-two-image">
                            {{-- <img src="{{ asset('images/menu/udangsaos.jpg') }}" alt="images" width="300px" height="400px" data-cue="zoomIn"
                                data-duration="2000"> --}}
                        </div>
                        <div class="banner-two-dark">
                            <img src="assets-customer/images/banner/banner-two-dark-img.webp" alt="images"
                                data-cue="zoomIn" data-duration="1500">
                        </div>
                        <div class="banner-two-shape-1">
                            <img src="assets-customer/images/banner/banner-two-shape-1.webp" alt="images">
                        </div>
                        <div class="banner-two-shape-2">
                            <img src="assets-customer/images/banner/banner-two-shape-2.webp" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="features-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="single-features-card">
                        <div class="features-img">
                            <img src="assets-customer/images/features/features-1.webp" alt="images">
                            <div class="features-img-2">
                                <img src="assets-customer/images/features/features-4.webp" alt="images">
                            </div>
                        </div>
                        <h3>Americano</h3>
                        <p>Nikmati kesederhanaan yang memukau dalam setiap tegukan, dengan cita rasa yang menghidupkan
                            selera Anda. Sempurna antara kemurnian kopi dan kekuatan yang
                            menyegarkan </p>
                        <div class="features-shape">
                            <img src="assets-customer/images/features/features-shape.webp" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="single-features-card">
                        <div class="features-img">
                            <img src="assets-customer/images/features/features-2.webp" alt="images">
                            <div class="features-img-2">
                                <img src="assets-customer/images/features/features-5.webp" alt="images">
                            </div>
                        </div>
                        <h3>Delicious Latte</h3>
                        <p>Stok terbatas! Ayo segera coba seri delicious latte ini sebelum kehabisan di Cafe Namura. Ada
                            keajaiban tersendiri untuk memulai hari Anda dengan latte hangat.</p>
                        <div class="features-shape">
                            <img src="assets-customer/images/features/features-shape.webp" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="single-features-card">
                        <div class="features-img">
                            <img src="assets-customer/images/features/features-3.webp" alt="images">
                            <div class="features-img-2">
                                <img src="assets-customer/images/features/features-6.webp" alt="images">
                            </div>
                        </div>
                        <h3>Best Mocha</h3>
                        <p>Di dalam atmosfer yang hangat dan penuh keakraban, kami menghadirkan secangkir Best Moca yang
                            akan memenuhi semua keinginan rasa Anda. </p>
                        <div class="features-shape">
                            <img src="assets-customer/images/features/features-shape.webp" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="special-menu-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span class="top-title">Special Menu</span>
                <h2>Namura Popular Menu</h2>
            </div>
            <div class="special-menu-tabs">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="single-special-menu-content">
                            <div class="row">
                                @foreach ($menu as $item)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="special-card">
                                            <div class="row align-items-center">
                                                <div class="col-lg-3 col-4">
                                                    <div class="special-menu-img">
                                                        <a href="{{ route('menu.menudetails', $item->id) }}">
                                                            <img src="{{ asset('images/menu/' . $item->cover) }}"
                                                                alt="images">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-6">
                                                    <div class="special-menu-text">
                                                        <a href="{{ route('menu.menudetails', $item->id) }}">
                                                            <h3>{{ $item->title }}</h3>
                                                        </a>
                                                        <p>{{ $item->description }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-2">
                                                    <div class="special-menu-number">
                                                        <span>{{ $item->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="pagination-area py-5">
                                @if ($menu->currentPage() > 1)
                                    <a href="{{ $menu->previousPageUrl() }}" class="next page-numbers">
                                        <i class='bx bx-chevron-left'></i>
                                    </a>
                                @endif

                                @foreach ($menu->getUrlRange(1, $menu->lastPage()) as $page => $url)
                                    <a href="{{ $url }}"
                                        class="page-numbers {{ $page == $menu->currentPage() ? 'current' : '' }}">
                                        {{ str_pad($page, 2, '0', STR_PAD_LEFT) }}
                                    </a>
                                @endforeach

                                @if ($menu->hasMorePages())
                                    <a href="{{ $menu->nextPageUrl() }}" class="next page-numbers">
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="special-view-btn">
                <a href="{{ url('menu') }}" class="default-btn">View All Menu</a>
            </div>
        </div>
    </div>
    <div class="about-two-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single-about-two-img">
                        <img src="images/keju.jpg" alt="images" width="700px" height="650px">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-about-two-content">
                        <div class="section-title left-title">
                            <h2>Setiap Menu Tercipta Citarasa Yang Mengguga Selera</h2>
                            <p>Selamat datang di Namura Cafe, surga kuliner yang menawarkan menu yang menggugah selera. Kami
                                dengan bangga mempersembahkan hidangan-hidangan yang tak terlupakan, yang menggabungkan cita
                                rasa autentik dengan keahlian kulinernya yang luar biasa. Setiap hidangan di Namura Cafe
                                adalah hasil dari kecintaan kami terhadap masakan berkualitas dan penggunaan
                                bahan-bahan segar terbaik.</p>
                        </div>
                        <div class="about-natural">
                            <div class="natural-img">
                                <img src="assets-customer/images/about/about-two-img-2.webp" alt="images">
                            </div>
                            <h3>Terbuat dari bahan segar yang terjamin kualitasnya</h3>
                        </div>
                        <div class="about-natural about-natural-two">
                            <div class="natural-img">
                                <img src="assets-customer/images/about/about-two-img-3.webp" alt="images">
                            </div>
                            <h3>100% Biji Kopi yang terindikasi bermutu</h3>
                        </div>
                        {{-- <a href="{{ url('about') }}" class="default-btn">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="go-top">
        <i class='bx bxl-upwork'></i>
        <i class='bx bxl-upwork'></i>
    </div>
@endsection
