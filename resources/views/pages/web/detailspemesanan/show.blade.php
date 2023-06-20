@extends('theme.app.main')
@section('title', 'Detail Pemesanan')

@section('content')
    <div class="pag-banner-area shop-pages-area jarallax" data-jarallax='{"speed": 0.3}'>
        <!-- Kode HTML lainnya -->
    </div>

    <div class="cart-area pt-100 pb-70">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Metode Pembayaran</th>
                            <th>Catatan</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                            <th>Pemesanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($order)
                            <tr>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td>{{ $order->catatan }}</td>
                                <td>
                                    @if ($order->payment_method == 'Cash')
                                        -
                                    @else
                                        <img src="{{ asset('images/' . $order->gambar) }}" style="width: 4rem">
                                    @endif
                                </td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    @if ($order->status == 'terima')
                                        <a href="{{ route('invoice.pdf', $order->id) }}">Cetak Struk <center><i
                                                    class="fas fa-download"></i></center></a>
                                    @endif
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="9" class="text-center">No Data</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            <div style="margin: 20px 0 20px 20px">
                <h4 class="text-secondary">Product</h4>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($order)
                            @foreach ($order->checkouts as $item)
                                <tr>
                                    <td>{{ $item->product->title }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->total_harga }}</td>
                                    @if ($item->order->status == 'terima')
                                        <td>
                                            @if ($item->review)
                                                <a href="{{ route('review.edit', $item->review->id) }}">Update</a>
                                            @else
                                                <a href="{{ route('review.create', $item->id) }}">Review</a>
                                            @endif
                                        </td>
                                    @else
                                        <td>No Action</td>
                                    @endif
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center">No Data</td>
                            </tr>
                        @endif
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
