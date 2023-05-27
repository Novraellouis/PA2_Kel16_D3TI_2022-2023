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
                        <p data-cue="slideInLeft" data-duration="2500">On the other hand, we denounce with righteous
                            indignation and dislike men who are so beguiled an item by the charms of pleasure of the
                            moment with a righteous hand.</p>
                        <ul>
                            <li data-cue="slideInLeft" data-duration="1500">
                                <a href="{{ url('about') }}" class="default-btn">Explore More</a>
                            </li>
                            <li data-cue="slideInLeft" data-duration="2500">
                                <a href="{{ url('booking') }}" class="default-btn">Get Delivery</a>
                            </li>
                        </ul>
                        <div class="banner-content-shape">
                            <img src="assets-customer/images/banner/banner-two-shape-3.webp" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-banner-two-image">
                        <img src="{{ asset('images/menu/Minuman/Minuman/milkshake.jpg') }}" alt="images">
                        <div class="banner-two-image">
                            <img src="{{ asset('images/menu/Minuman/Minuman/keju.jpg') }}" alt="images" width="300px" height="400px" data-cue="zoomIn"
                                data-duration="2000">
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
                        <h3>Great Americano</h3>
                        <p>All the lorem ipsum generators on the predefined t tend to repeat chunks as necessary
                            predefined making this internet.</p>
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
                        <p>All the lorem ipsum generators on the predefined t tend to repeat chunks as necessary making
                            this internet.</p>
                        <div class="features-shape">
                            <img src="assets-customer/images/features/features-shape.webp" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="single-features-card">s
                        <div class="features-img">
                            <img src="assets-customer/images/features/features-3.webp" alt="images">
                            <div class="features-img-2">
                                <img src="assets-customer/images/features/features-6.webp" alt="images">
                            </div>
                        </div>
                        <h3>Best Mocha</h3>
                        <p>All the lorem ipsum generators on the predefined t tend to repeat chunks as necessary making
                            this internet.</p>
                        <div class="features-shape">
                            <img src="assets-customer/images/features/features-shape.webp" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-two-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single-about-two-img">
                        <img src="assets-customer/images/about/about-two-img-1.webp" alt="images">
                        <div class="about-two-logo">
                            <img src="assets-customer/images/about/about-logo.webp" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-about-two-content">
                        <div class="section-title left-title">
                            <span class="top-title">About Us</span>
                            <h2>New London Coffee Founded For Extraordinary Test</h2>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who areantis
                                beguiled aitem demora lized by the charms of pleasure of the moment.</p>
                        </div>
                        <div class="about-natural">
                            <div class="natural-img">
                                <img src="assets-customer/images/about/about-two-img-2.webp" alt="images">
                            </div>
                            <h3>Natural Coffee Beans</h3>
                        </div>
                        <div class="about-natural about-natural-two">
                            <div class="natural-img">
                                <img src="assets-customer/images/about/about-two-img-3.webp" alt="images">
                            </div>
                            <h3>100% ISO Certification</h3>
                        </div>
                        <a href="about.html" class="default-btn">Read More</a>
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

    <div class="restaurant-two-area pt-100 pb-100 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title left-title">
                <span class="top-title">Team of Restaurant</span>
                <h2>Meet Our Professionals</h2>
            </div>
            <div class="team-restaurant-slider owl-carousel owl-theme">
                <div class="single-team-restaurant-card">
                    <div class="team-restaurant-img">
                        <a href="menu-details.html">
                            <img src="assets-customer/images/restaurant/restaurant-three-imag-1.webp" alt="images">
                        </a>
                        <ul class="team-restaurant-list-icon">
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="restaurant-content">
                        <a href="menu-details.html">
                            <h3>Mary Christmas</h3>
                        </a>
                        <p>Assistent Chef</p>
                    </div>
                </div>
                <div class="single-team-restaurant-card">
                    <div class="team-restaurant-img">
                        <a href="menu-details.html">
                            <img src="assets-customer/images/restaurant/restaurant-three-imag-2.webp" alt="images">
                        </a>
                        <ul class="team-restaurant-list-icon">
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="restaurant-content">
                        <a href="menu-details.html">
                            <h3>Ash Wednesday</h3>
                        </a>
                        <p>Chef</p>
                    </div>
                </div>
                <div class="single-team-restaurant-card">
                    <div class="team-restaurant-img">
                        <a href="menu-details.html">
                            <img src="assets-customer/images/restaurant/restaurant-three-imag-3.webp" alt="images">
                        </a>
                        <ul class="team-restaurant-list-icon">
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="restaurant-content">
                        <a href="menu-details.html">
                            <h3>Sharon Needles</h3>
                        </a>
                        <p>Co - Founder</p>
                    </div>
                </div>
                <div class="single-team-restaurant-card">
                    <div class="team-restaurant-img">
                        <a href="menu-details.html">
                            <img src="assets-customer/images/restaurant/restaurant-three-imag-1.webp" alt="images">
                        </a>
                        <ul class="team-restaurant-list-icon">
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="restaurant-content">
                        <a href="menu-details.html">
                            <h3>Mary Christmas</h3>
                        </a>
                        <p>Assistent Chef</p>
                    </div>
                </div>
                <div class="single-team-restaurant-card">
                    <div class="team-restaurant-img">
                        <a href="menu-details.html">
                            <img src="assets-customer/images/restaurant/restaurant-three-imag-2.webp" alt="images">
                        </a>
                        <ul class="team-restaurant-list-icon">
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="restaurant-content">
                        <a href="menu-details.html">
                            <h3>Ash Wednesday</h3>
                        </a>
                        <p>Chef</p>
                    </div>
                </div>
                <div class="single-team-restaurant-card">
                    <div class="team-restaurant-img">
                        <a href="menu-details.html">
                            <img src="assets-customer/images/restaurant/restaurant-three-imag-3.webp" alt="images">
                        </a>
                        <ul class="team-restaurant-list-icon">
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="restaurant-content">
                        <a href="menu-details.html">
                            <h3>Sharon Needles</h3>
                        </a>
                        <p>Co - Founder</p>
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
