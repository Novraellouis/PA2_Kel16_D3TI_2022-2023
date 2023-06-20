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
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            border: 1px solid #333333;
            padding: 10px;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
        }

        table td {
            text-align: left;
        }

        tfoot td {
            font-weight: bold;
            text-align: right;
        }

        tfoot td:last-child {
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Data Penjualan Namura Cafe And Resto</h1>
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
                    <td>
                        @php
                            $total_harga = 0;
                            foreach ($l->checkouts as $checkout) {
                                $total_harga += $checkout->total_harga;
                            }
                        @endphp
                        Rp.{{ number_format($total_harga) }}
                    </td>
                    <td>{{ $l->payment_method }}</td>
                    <td>{{ $l->status }}</td>
                </tr>
                <?php $counter++; ?>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" style="color: black; font-weight: bold; text-align: left">Total Pemasukan</td>
                <td style="text-align: right">
                    @if (isset($totalAmount))
                        Rp.{{ number_format($totalAmount) }}
                    @endif
                </td>
            </tr>

        </tfoot>
    </table>
</body>

</html>
