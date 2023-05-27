@extends('theme.app.main')
@section('title', 'shop')

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


    <div class="pag-banner-area portfolio-pages-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content">
                <h1>Shop</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="assets-customer/images/page/page-banner-shape-1.webp" alt="images">
        </div>
    </div>


    <div class="shop-area pt-100 pb-100">
        <div class="container">
            <div class="showing">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5">
                        <p>Showing 1–9 of 12 results</p>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="showingdowen-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Sort By Latest</option>
                                        <option value="1">Marmaid Chicken</option>
                                        <option value="2">Marmaid Chicken</option>
                                        <option value="3">Chicken Pizza</option>
                                        <option value="5">Fried Popcorn</option>
                                        <option value="6">Tandoori Chicken</option>
                                        <option value="7">Grilled Chicken</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="widget_search">
                                        <form class="search-form">
                                            <input type="search" class="search-field" placeholder="Search...">
                                            <button type="submit" class="default-btn"><i
                                                    class="bx bx-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="single-shop-cart">
                        <div class="shop-img">
                            <a href="shop-details.html">
                                <img src="assets-customer/images/shop/shop-1.webp" alt="images">
                            </a>
                            <div class="shop-btn">
                                <a href="{{ url('cart') }}" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="shop-cart">
                            <a href="shop-details.html">
                                <h2>Grillde Chicken</h2>
                            </a>
                            <span>$120.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="single-shop-cart">
                        <div class="shop-img">
                            <a href="shop-details.html">
                                <img src="assets-customer/images/shop/shop-2.webp" alt="images">
                            </a>
                            <div class="shop-btn">
                                <a href="{{ url('cart') }}" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="shop-cart">
                            <a href="shop-details.html">
                                <h2>Cappuccino</h2>
                            </a>
                            <span>$30.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="single-shop-cart">
                        <div class="shop-img">
                            <a href="shop-details.html">
                                <img src="assets-customer/images/shop/shop-3.webp" alt="images">
                            </a>
                            <div class="shop-btn">
                                <a href="{{ url('cart') }}" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="shop-cart">
                            <a href="shop-details.html">
                                <h2>Italian Burger</h2>
                            </a>
                            <span>$70.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="single-shop-cart">
                        <div class="shop-img">
                            <a href="shop-details.html">
                                <img src="assets-customer/images/shop/shop-4.webp" alt="images">
                            </a>
                            <div class="shop-btn">
                                <a href="{{ url('cart') }}" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="shop-cart">
                            <a href="shop-details.html">
                                <h2>Espresson Lungo</h2>
                            </a>
                            <span>$80.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="single-shop-cart">
                        <div class="shop-img">
                            <a href="shop-details.html">
                                <img src="assets-customer/images/shop/shop-5.webp" alt="images">
                            </a>
                            <div class="shop-btn">
                                <a href="{{ url('cart') }}" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="shop-cart">
                            <a href="shop-details.html">
                                <h2>Masala Fried Pomfret</h2>
                            </a>
                            <span>$60.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                    <div class="single-shop-cart">
                        <div class="shop-img">
                            <a href="shop-details.html">
                                <img src="assets-customer/images/shop/shop-6.webp" alt="images">
                            </a>
                            <div class="shop-btn">
                                <a href="{{ url('cart') }}" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="shop-cart">
                            <a href="shop-details.html">
                                <h2>Americano Coffee</h2>
                            </a>
                            <span>$40.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-area">
                <a href="shop.html" class="next page-numbers">
                    <i class='bx bx-chevron-left'></i>
                </a>
                <span class="page-numbers current" aria-current="page">01</span>
                <a href="shop.html" class="page-numbers">02</a>
                <a href="shop.html" class="page-numbers">03</a>
                <a href="shop.html" class="next page-numbers">
                    <i class='bx bx-chevron-right'></i>
                </a>
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
                        <a href="about.html" class="default-btn">Discover More</a>
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
    <div class="copyright-content">
        <p>©<b>Namura</b> is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
    </div>
@endsection
