@extends('theme.app.main')
@section('title', 'about')

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
                            <a href="{{ url('reservation') }}" class="default-btn">Book A Table</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="pag-banner-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content">
                <h1>About Us</h1>
                <ul>
                    <li><a href="{{ url('dashboard') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="assets-customer/images/page/page-banner-shape-1.webp" alt="images">
        </div>
    </div>

    <div class="team-restaurant-area team-restaurant-page-area pt-100 pb-70">
        <div class="container">
            <div class="section-title left-title">
                <span class="top-title">Team of Restaurant</span>
                <h2>Meet Our Professionals</h2>
                <div class="menu-view-btn">
                    <a href="menu-details.html" class="default-btn">View All</a>
                </div>
            </div>
            <div class="team-restaurant-slider owl-carousel owl-theme">
                <div class="single-team-restaurant-card team-restaurant-card-pages">
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
                <div class="single-team-restaurant-card team-restaurant-card-pages">
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
                <div class="single-team-restaurant-card team-restaurant-card-pages">
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
                <div class="single-team-restaurant-card team-restaurant-card-pages">
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
                <div class="single-team-restaurant-card team-restaurant-card-pages">
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
                <div class="single-team-restaurant-card team-restaurant-card-pages">
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
        <div class="odometer-area page-odometer-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-12 col-sm-2 col-md-2" data-cues="fadeIn" data-duration="1500">
                    <div class="fun-odometer fun-odometer-page">
                        <h2>
                            <span class="odometer" data-count="287">00</span>
                            <span class="target">+</span>
                        </h2>
                        <p>Clients Every Day</p>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-10 col-md-10">
                    <div class="row">
                        <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                            <div class="fun-odometer fun-odometer-page">
                                <h2>
                                    <span class="odometer" data-count="45">00</span>
                                    <span class="target">+</span>
                                </h2>
                                <p>Table Available</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                            <div class="fun-odometer fun-odometer-page">
                                <h2>
                                    <span class="odometer" data-count="70">00</span>
                                    <span class="target">+</span>
                                </h2>
                                <p>Breakfast Option</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                            <div class="fun-odometer fun-odometer-page">
                                <h2>
                                    <span class="odometer" data-count="130">00</span>
                                    <span class="target">+</span>
                                </h2>
                                <p>Dinner Option</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 col-sm-3 col-md-3" data-cues="fadeIn" data-duration="1500">
                            <div class="fun-odometer fun-odometer-page">
                                <h2>
                                    <span class="odometer" data-count="25">00</span>
                                    <span class="target">+</span>
                                </h2>
                                <p>Year Of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-area about-page pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-cue="slideInLeft" data-duration="800">
                    <div class="about-image">
                        <img src="images/menu/ayamgeprek.jpg" alt="images">
                    </div>
                </div>
                <div class="col-lg-6" data-cue="slideInRight" data-duration="800">
                    <div class="single-about-content">
                        <div class="section-title left-title">
                            <span class="top-title">About Us</span>
                            <h2>Enjoy An Exceptional Journey Of Taste In Our Restaurant</h2>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are mantis
                                beguiled aitem demora lized by the charms of pleasure of the moment.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="speciallst-card">
                                    <h3><img src="assets-customer/images/about/about-img-3.webp" alt="images">Speciallst
                                    </h3>
                                    <p>bled it to make a type specimen boIt has survived not amnits.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="speciallst-card">
                                    <h3><img src="assets-customer/images/about/about-img-4.webp" alt="images">Restaurant
                                    </h3>
                                    <p>bled it to make a type specimen boIt has survived not amnits.</p>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li><i class='bx bx-right-arrow-circle'></i>Mauris mattis lectus eget ligula dapibus, ac
                                maximus ipsum Services.</li>
                            <li><i class='bx bx-right-arrow-circle'></i>Aenean facilisis erat et metus semper molestie
                                sem posuere tests.</li>
                        </ul>
                        <a href="{{ url('reservation') }}" class="default-btn">Booking Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-1">
            <img src="assets-customer/images/about/about-page-shape-1.webp" alt="images">
        </div>
        <div class="about-shape-2">
            <img src="assets-customer/images/about/about-page-shape-2.webp" alt="images">
        </div>
        <div class="about-shape-3">
            <img src="assets-customer/images/about/about-page-shape-3.webp" alt="images">
        </div>
        <div class="about-shape-4">
            <img src="assets-customer/images/about/about-page-shape-4.webp" alt="images">
        </div>
    </div>
@endsection
