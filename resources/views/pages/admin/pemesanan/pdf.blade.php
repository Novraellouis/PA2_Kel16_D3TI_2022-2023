<!DOCTYPE html>
<html>

<head>
    <style>
        /* Gaya CSS untuk PDF */
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333333;
            font-size: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #333333;
            padding: 5px;
        }
    </style>
</head> 
<body>
    <h1>Data Penjualan</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Total</th>
                    <th>Metode Pembayaran</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; ?>
                @foreach ($pemesanan as $item => $l)
                    <tr>
                        <td>{{ $counter }}</td>
                        <td>{{ $l->nama_customer }}</td>
                        <td>@php
                            $total_harga = 0;
                            foreach ($l->checkouts as $checkout) {
                                $total_harga += $checkout->total_harga;
                            }
                        @endphp
                            {{ $total_harga }}</td>
                        <td>{{ $l->payment_method }}</td>
                        <td>{{ $l->status }}</td>
                    </tr>
                    <?php $counter++; ?>
                @endforeach
            </tbody>
        </table>
</body>

</html>
