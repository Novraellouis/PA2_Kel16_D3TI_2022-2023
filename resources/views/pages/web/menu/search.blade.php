@extends('theme.app.main')
@section('title', 'Search Menu')

@section('content')
    <div class="special-menu-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <h2>Search Results for "{{ request()->input('search') }}"</h2>
            </div>
            <div class="single-special-menu-content">
                <div class="row">
                    @foreach ($menu as $item)
                        <div class="col-lg-6 col-md-6">
                            <div class="special-card">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-4">
                                        <div class="special-menu-img">
                                            <a href="{{ route('menu.menudetails', $item->id) }}">
                                                <img src="{{ asset('images/menu/' . $item->cover) }}" alt="images">
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

                    <div class="pagination-area py-5">
                        {{ $menu->links() }}
                    </div>

                </div>
            </div>
        </div>
    @endsection
