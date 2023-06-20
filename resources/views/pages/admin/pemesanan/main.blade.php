User
@extends('theme.admin.main')
<link href="{{ asset('assets-admin/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <span>Datatable</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Transaksi</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Pemesanan</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Pemesanan</h4>
                            <a class="btn btn-primary" href="{{ route('admin.pemesanan.export-pdf') }}">Cetak PDF</a>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Total</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Status</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pemesanan as $item => $l)
                                            <tr>
                                                <td scope="col">{{ $loop->iteration }}</td>
                                                <td>{{ $l->nama_customer }}</td>
                                                <td>
                                                    @php
                                                        $total_harga = 0;
                                                        foreach ($l->checkouts as $checkout) {
                                                            $total_harga += $checkout->total_harga;
                                                        }
                                                    @endphp
                                                    {{ $total_harga }}
                                                </td>

                                                <td>{{ $l->payment_method }}</td>
                                                <td>
                                                    @if ($l->payment_method == 'Cash')
                                                        -
                                                    @else
                                                        <img src="{{ asset('images/' . $l->gambar) }}" style="width: 8rem">
                                                    @endif
                                                </td>
                                                <td>{{ $l->status }}</td>
                                                <td>{{ \Carbon\Carbon::parse($l->created_at)->locale('id')->isoFormat('D MMMM YYYY') }}
                                                </td>

                                                <td class="py-2 text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary tp-btn-light sharp" type="button"
                                                            data-toggle="dropdown">
                                                            <span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24"
                                                                            height="24"></rect>
                                                                        <circle fill="#000000" cx="5" cy="12"
                                                                            r="2"></circle>
                                                                        <circle fill="#000000" cx="12" cy="12"
                                                                            r="2"></circle>
                                                                        <circle fill="#000000" cx="19" cy="12"
                                                                            r="2"></circle>
                                                                    </g>
                                                                </svg></span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                                            <div class="py-2">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('admin.pemesanan.show', $l->id) }}">Show</a>
                                                                <form
                                                                    action="{{ route('admin.pemesanan.accept', $l->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button class="dropdown-item" type="submit">
                                                                        Accept
                                                                    </button>
                                                                </form>
                                                                <form
                                                                    action="{{ route('admin.pemesanan.reject', $l->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button class="dropdown-item" type="submit">
                                                                        Reject
                                                                    </button>
                                                                </form>
                                                                <form
                                                                    action="{{ route('admin.pemesanan.destroy', $l->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button onclick="return confirm('Apakah Anda yakin ingin menghapus data pemesanan ini?')" class="dropdown-item" type="submit">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr style="padding: 10px;">
                                            <td scope="col" style="color: black" colspan="6">
                                                Total Pemasukan
                                            </td>
                                            @if (isset($totalAmount))
                                                <td colspan="">Rp.{{ number_format($totalAmount) }}</td>
                                            @endif
                                            <td>

                                            </td>
                                        </tr scope="col">
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        var table = $("#example").DataTable();

        Swal.fire(
            'ditolak',
            '{{ session('reject') }}',
            'success'
        )
    </script>
@endsection
