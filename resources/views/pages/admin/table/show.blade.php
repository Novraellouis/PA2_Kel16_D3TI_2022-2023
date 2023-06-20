@extends('theme.admin.main')
@section('content')
    <div class="content-body" style="min-height: 876px;">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <p class="mb-0">Your business dashboard template</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-3 ">
                                    <img class="img-fluid" src="{{ asset('images/menu/' . $menu->cover) }}" alt=""
                                        width="50">
                                </div>
                                <!--Tab slider End-->
                                <div class="col-xl-9 col-sm-12">
                                    <div class="product-detail-content">
                                        <!--Product details-->
                                        <div class="new-arrival-content pr">
                                            <h4>{{ $menu->title }}</h4>
                                            <p class="price">{{ $menu->price }}</p>
                                            <p>Availability:
                                                <span class="item"> In stock
                                                    <i class="fa fa-shopping-basket"></i>
                                                    {{ $menu->stock }}
                                                </span>
                                            </p>
                                            <p class="text-content">{{ $menu->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
