@extends('theme.admin.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-sm-6">
                    <h4 class="page-title">Horas Namura!
                    </h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pemesanan</a></li>
                        <li class="breadcrumb-item active">Show</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @if ($pemesanan->payment_method == 'Transfer')
                                    <div class="col-xl-4 col-lg-5">
                                        <img class="img-fluid product-image"
                                            src="{{ asset('images/' . $pemesanan->gambar) }}" alt="Product Image" width="300" height="200">
                                    </div>
                                @endif

                                <div class="col-xl-8 col-lg-7">
                                    <div class="product-detail-content">
                                        <h2 class="product-name">{{ $pemesanan->nama_customer }}</h2>
                                        <p class="order-number">Order Number: {{ $pemesanan->order_number }}</p>
                                        <p class="order-number">Metode Pembayaran : {{ $pemesanan->payment_method }}</p>
                                        <p class="order-number">Catatan     : {{ $pemesanan->catatan }}</p>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $total_amount = 0;
                                                @endphp
                                                @foreach ($pemesanan->checkouts as $item)
                                                    <tr>
                                                        <td>{{ $item->product->title }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                    </tr>
                                                    @php
                                                        $total = $item->quantity * $item->harga;
                                                        $total_amount += $total;
                                                    @endphp
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <h3 class="total-amount">Rp. {{ number_format($total_amount, 2) }}</h3>
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

@section('styles')
    <style>
        .content-body {
            background-color: #f8f8f8;
            padding: 20px;
        }

        .page-titles {
            margin-bottom: 20px;
        }

        .page-title {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 0;
        }

        .breadcrumb-item a {
            color: #888;
            text-decoration: none;
        }

        .breadcrumb-item.active a {
            color: #333;
        }

        .card {
            margin-bottom: 20px;
        }

        .product-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product-detail-content {
            padding: 20px;
        }

        .product-name {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .order-number {
            font-size: 18px;
            margin-bottom: 20px;
            color: #888;
        }

        .table {
            margin-bottom: 20px;
        }

        .table th {
            text-align: center;
        }

        .total-amount {
            font-size: 32px;
            font-weight: bold;
        }
    </style>
@endsection


