@extends('theme.app.main')
@section('title', 'shopdetail')

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


    <div class="pag-banner-area shop-pages-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content">
                <h1>Shop Details</h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Shop Details</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="assets-customer/images/page/page-banner-shape-1.webp" alt="images">
        </div>
    </div>


    <div class="shop-single-area pt-100">
        <div class="container">
            <div class="menu-details shop-single-details">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="menu-details-img">
                            <img src="assets-customer/images/shop/shop-details-1.webp" alt="images">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="single-menu-details-contant shop-single-text">
                            <h2>Nicaragua Coffee Beans</h2>
                            <ul class="shop-star">
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <i class='bx bxs-star'></i>
                                </li>
                                <li>
                                    <span>(1 customer review)</span>
                                </li>
                            </ul>
                            <span class="details-two">$165.00</span>
                            <p>On the other hand, we denounce with righteous indignation
                                and dislike men who are and beguiled and demoralized by the charms of pleasure of the
                                moment so blinded by desire.</p>
                            <ul class="quantity-list">
                                <li>
                                    <p>Quantity</p>
                                    <div class="pass-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn">
                                                <i class='bx bx-minus'></i>
                                            </span>
                                            <input type="text" value="1">
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
                                <li>
                                    <span>Sku:</span>1
                                </li>
                                <li>
                                    <span>Category:</span><a href="shop-details.html"> Black Tea, Chocolate</a>
                                </li>
                                <li>
                                    <span>Tags:</span><a href="shop-details.html"> White - Bride</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-details-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab"
                            aria-controls="home-tab-pane" aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false">Additional Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" type="button" role="tab"
                            aria-controls="contact-tab-pane" aria-selected="false">Reviews (1)</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">
                        <div class="single-shop-text">
                            <p>If you are going to use a passage of lorem ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text all the Lorem Ipsum generators on the
                                Internet tend to repeat predefined chunks as necessary making this the first true
                                generator on the Internet it uses a dictionary are many variations of passages of Lorem
                                Ipsum available but the majority have suffered alteration in some form by injected humor
                                or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <div class="additional-information">
                            <ul class="information">
                                <li>
                                    <span>Brand:</span> ThemeForest
                                </li>
                                <li>
                                    <span>Color:</span> white
                                </li>
                                <li>
                                    <span>Size:</span> Amaranth, Medium
                                </li>
                                <li>
                                    <span>Weight:</span> 46 kg
                                </li>
                                <li>
                                    <span>Dimensions:</span> 25 x 30 x 186 cm
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">
                        <div class="blog-details-from">
                            <div class="single-comment">
                                <div class="single-shop-details-contant">
                                    <img src="assets-customer/images/testimonials/testimonials-3.webp" alt="images">
                                    <h3>Runing Shoes</h3>
                                    <span>30 September 2022</span>
                                    <div class="single-menus-list">
                                        <ul>
                                            <li>
                                                <i class='bx bxs-star'></i>
                                            </li>
                                            <li>
                                                <i class='bx bxs-star'></i>
                                            </li>
                                            <li>
                                                <i class='bx bxs-star'></i>
                                            </li>
                                            <li>
                                                <i class='bx bxs-star'></i>
                                            </li>
                                            <li>
                                                <i class='bx bxs-star'></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>The very well-built theme couldn't be happier with it can't wait for future
                                        updates to see what else they.</p>
                                    <div class="reply-btn">
                                        <button type="submit" class="default-btn">Reply</button>
                                    </div>
                                </div>
                            </div>
                            <form>
                                <h2>Add a Review</h2>
                                <p>Your email address will not be published required fields are marked.</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="details-from">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="details-from">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="details-from">
                                            <textarea class="form-control" placeholder="Your review" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Save my name, email, and website in this browser for the next time i
                                                comment.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="default-btn">Submit Now<span></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="related-products-area pb-70">
        <div class="container">
            <div class="section-title left-title">
                <h2>Related products</h2>
            </div>
            <div class="row justify-content-center">
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
                                <h2>Grilled Chicken</h2>
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
            </div>
        </div>
    </div>

    <div class="copyright-content">
        <p>©<b>Namura</b> is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
    </div>

@endsection
