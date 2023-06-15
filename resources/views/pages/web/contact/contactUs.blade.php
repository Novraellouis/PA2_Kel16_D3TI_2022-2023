@extends('theme.app.main')
@section('title', 'contactUs')

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



    <div class="pag-banner-area contact-pages-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content">
                <h1>Kritik & Saran</h1>
                <ul>
                    <li><a href="{{ url('home') }}">Beranda</a></li>
                    <li>Kritik & Saran</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="assets-customer/images/page/page-banner-shape-1.webp" alt="images">
        </div>
    </div>

    <div class="contact-from-area pt-100 pb-100">
        <div class="container">
            <div class="contact-form-box">
                <div class="col-lg-12">
                    <div class="single-contact-form">
                        <div class="contact-from">
                            <div class="visit-two-form-content visit-page-content">
                                <div class="image">
                                    <img src="images/namura99.jpg" alt="images" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="single-contact-form">
                            <div class="section-title left-title">
                                {{-- <h2>Get In Touch</h2> --}}
                            </div>
                            <div class="contact-from">
                                <form id="" action="{{ route('send.feedback') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Nama</label>
                                                <input type="text" name="name"
                                                    value="@auth{{ Auth::user()->name }} @endauth" class="form-control"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Nomor Telepon</label>
                                                <input type="text" name="nomorhp"
                                                    value="@auth{{ Auth::user()->nomorhp }} @endauth" class="form-control"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="from-label">Email</label>
                                                <input type="text" name="email"
                                                    value="@auth {{ Auth::user()->email }} @endauth" class="form-control"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message*"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit">Kirim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-form-content">
                            <div class="section-title left-title">
                                <span class="top-title">Our Contacts</span>
                                <h2>Find Us Location</h2>
                                <p>Minus id quod maxime placeat facere possimus, luptas assumenda est, omnis dolor
                                    repellendus emporibus.</p>
                            </div>
                            <div class="contact-widget">
                                <div class="contact-item">
                                    <i class="bx bxs-phone-call"></i>
                                    <h3>Phone:</h3>
                                    <a href="tel:(800)2162020">(800) 216 2020</a>
                                </div>
                                <div class="contact-item">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email:</h3>
                                    <a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#7119141d1d1e3103040b1e5f121e1c"><span
                                            class="__cf_email__"
                                            data-cfemail="bfd7dad3d3d0ffcdcac5d091dcd0d2">[email&#160;protected]</span></a>
                                </div>
                                <div class="contact-item">
                                    <i class="bx bx-map"></i>
                                    <h3>Location:</h3>
                                    <p>4578 Beverly Rd Brooklyn NewYork</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--
<div class="contact-map-area">
    <div class="container-fluid">
        <div class="google-map">
            <iframe class="maps"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d377070.2716139559!2d-75.55611735798045!3d42.40939424569905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89db8b87ed71f33d%3A0x91566d51a1f1ed5e!2sOneonta%2C%20NY%2013820%2C%20USA!5e0!3m2!1sen!2sbd!4v1659527425720!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
</div> --}}

    {{-- <div class="copyright-content">
    <p>©<b>Namura</b> is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
</div> --}}
@endsection
