<div class="submenu-area submenu-two-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-3">
                <div class="submenu-right-content">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100078047646834&mibextid=LQQJ4d"
                                target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li> --}}
                        <li>
                            <a href="https://www.instagram.com/namura.cafe/" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-9">
                <div class="submenu-left-content">
                    <ul>
                        <li>
                            <img src="{{ asset('assets-customer/images/phone-icon.svg') }}" alt="icon">
                            <a href="tel:+62 852-2149-7286">+62 852-2149-7286</a>
                        </li>
                        <li>
                            <img src="{{ asset('assets-customer/images/email-icon.svg') }}" alt="icon">
                            <a
                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#d3bbb6bfbfbc93a1a6a9bca7bbb6beb6a0fdb0bcbe"><span
                                    class="__cf_email__"
                                    data-cfemail="93fbf6fffffcd3e1e6e9fce7fbf6fef6e0bdf0fcfe">[email&#160;protected]</span></a>
                        </li>
                        <li>
                            <img src="{{ asset('assets-customer/images/map.svg') }}" alt="icon">
                            <p>Jln. Sisingamangaraja No.131, PARAPAT</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="navbar-area navbar-two-area">
    <div class="container">
        <div class="mobile-nav">
            <div class="logo">
                <a href="index.html">
                    <img src="{{ asset('assets-customer/images/logo-1.webp') }}" class="logo-light" alt="images">
                    <img src="{{ asset('assets-customer/images/logo-2.webp') }}" class="logo-dark" alt="images">
                </a>
            </div>
        </div>
    </div>

    <div class="main-nav main-two-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item nav-item-four">
                            <a href="{{ url('/') }}" class="nav-link ">
                                Beranda
                                {{-- <i class='bx bx-plus'></i> --}}
                            </a>
                        </li>
                        <li class="nav-item nav-item-five">
                            <a href="{{ url('reservation') }}" class="nav-link dropdown-toggle">
                                Reservasi
                                {{-- <i class='bx bx-plus'></i> --}}
                            </a>
                            {{-- <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ url('reservation') }}" class="nav-link">Reservasi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        User
                                        <i class='bx bx-plus'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @auth
                                            <li class="nav-item">
                                                <a href="{{ url('signout') }}" class="nav-link">logout <i
                                                        class="bi bi-box-arrow-in-right">{{ auth()->user()->name }}</i></a>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a href="{{ url('login') }}" class="nav-link">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ url('register') }}" class="nav-link">Register</a>
                                            </li>
                                        @endauth
                                    </ul>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/menu') }}" class="nav-link dropdown-toggle">
                                Menu
                            </a>
                        </li>
                        @auth
                            <li class="nav-item nav-item-five">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Belanja
                                    <i class='bx bx-plus'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url('cart') }}" class="nav-link">Keranjang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('checkout') }}" class="nav-link">Pembayaran</a>
                                    </li>
                                    <li class="nav-item">
                                                <a href="{{ url('contact') }}" class="nav-link">Kritik & Saran</a>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                        @auth
                            <li class="nav-item nav-item-five">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Detail
                                    <i class='bx bx-plus'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url('detail') }}" class="nav-link">Detail Reservasi</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ url('pemesanan') }}" class="nav-link">Detail Pemesanan</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item logo">
                                <a href="index.html" class="nav-link">
                                    <img src="{{ asset('assets-customer/images/logo-1.webp') }}" class="logo-light"
                                        alt="images">
                                    <img src="{{ asset('assets-customer/images/namura1.jpg') }}" class="logo-dark"
                                        alt="images">
                                </a>
                            </li>
                        @endauth

                    </ul>
                    <ul>
                    </ul>
                    <div class="others-option-vg d-flex align-items-center">
                        @guest
                            <div class="option-item">
                                <a href="#" class="nav-link">
                                    <img src="{{ asset('assets-customer/images/logo-1.webp') }}" class="logo-light"
                                        alt="images">
                                    <img src="{{ asset('assets-customer/images/namura1.jpg') }}" class="logo-dark"
                                        alt="images">
                                </a>
                            </div>
                        @endguest
                        <div class="option-item">
                            <div class="shapping-bag">
                                <a href="{{ url('cart') }}">
                                    <img src="{{ asset('assets-customer/images/shopping-bag-icon.svg') }}"
                                        alt="images">
                                </a>
                                @php
                                    $carts = App\Models\Cart::all();
                                @endphp
                                @if (!$carts->isEmpty())
                                    <div class="shapping-text">
                                        {{ $carts->count() }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="option-item">
                            @auth
                                <a href="{{ url('signout') }}" class="default-btn">Logout</a>
                            @else
                                <a href="{{ url('login') }}" class="default-btn">Login</a>
                            @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>


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
                                {{-- <div class="shapping-text">
                                    01
                                </div> --}}
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
