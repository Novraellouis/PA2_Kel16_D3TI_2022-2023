@extends('theme.app.main')
@section('title', 'menu')

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
                            <a href="booking-table.html" class="default-btn">Book A Table</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="pag-banner-area menu-pages-banner-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content">
                <h1>Menu</h1>
                <ul>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li>Menu</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape">
            <img src="assets-customer/images/page/page-banner-shape-1.webp" alt="images">
        </div>
    </div>


    <div class="special-menu-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span class="top-title">Special Menu</span>
                <h2>Food & Beverages</h2>
            </div>
            <div class="showing">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5">
                        <p>Showing 1–9 of 10 results</p>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="showingdowen-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-9">
                                    <div class="widget_search">
                                        <form class="search-form" action="" method="GET">
                                            <input class="search-input" placeholder="Search..." type="text"
                                                name="search" value="{{ request()->input('search') }}">
                                            <button class="search-button" type="submit"><i
                                                    class='bx bx-search'></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        </div>
    </div>
    {{-- <div class="copyright-content">
    <p>©<b>Namura 2019</b></p>
</div> --}}
@endsection
