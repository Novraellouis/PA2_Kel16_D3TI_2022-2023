<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktur Invoice</title>
    <style>
        body {
            background-color: #f8f8f8;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .card {
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product-detail-content {
            padding: 20px;
        }

        .product-name {
            font-size: 28px;
            margin-bottom: 10px;
            color: #333;
        }

        .order-number {
            font-size: 18px;
            margin-bottom: 20px;
            color: #888;
        }

        .table {
            margin-bottom: 20px;
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #555;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .total-amount {
            font-size: 32px;
            font-weight: bold;
            color: #555;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-detail-content">
                                <h4 class="product-name" style="text-transform: capitalize;">
                                    {{ $pemesanan->nama_customer }}</h4>
                                <p class="order-number">Order Number: {{ $pemesanan->order_number }}</p>
                                <p class="order-number">Order Date:
                                    {{ date('d F Y', strtotime($pemesanan->created_at)) }}</p>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
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
                                                <td>{{ $item->harga }}</td>
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
</body>
</html>
