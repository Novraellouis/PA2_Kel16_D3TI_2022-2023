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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Reservasi</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Reservasi</a></li>
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
                            <h4 class="card-title">Data Reservasi</h4>
                        </div>
                        <div class="card-body">
                            @if (count($reservation) > 0)
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>No Meja</th>
                                                <th>Nama Meja</th>
                                                <th>Tanggal</th>
                                                <th>Waktu</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reservation as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->username }}</td>
                                                    <td>{{ $item->table->no_meja }}</td>
                                                    <td>{{ $item->table->name }}</td>
                                                    <td>{{ $item->date }}</td>
                                                    <td>{{ $item->time }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td class="py-2 text-right">
                                                        <div class="dropdown">
                                                            <button class="btn btn-primary tp-btn-light sharp"
                                                                type="button" data-toggle="dropdown">
                                                                <span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="18px" height="18px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0"
                                                                                width="24" height="24"></rect>
                                                                            <circle fill="#000000" cx="5"
                                                                                cy="12" r="2"></circle>
                                                                            <circle fill="#000000" cx="12"
                                                                                cy="12" r="2"></circle>
                                                                            <circle fill="#000000" cx="19"
                                                                                cy="12" r="2"></circle>
                                                                        </g>
                                                                    </svg></span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right border py-0">
                                                                <div class="py-2">
                                                                    <form
                                                                        action="{{ route('admin.reservation.accept', $item->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('put')
                                                                        <button type="submit"
                                                                            class="dropdown-item text-success">Accept</button>
                                                                    </form>
                                                                </div>
                                                                <div class="py-2">
                                                                    <form
                                                                        action="{{ route('admin.reservation.reject', $item->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('put')
                                                                        <button type="submit"
                                                                            class="dropdown-item">Reject</button>
                                                                    </form>
                                                                </div>
                                                                <div class="py-2">
                                                                    <form
                                                                        action="{{ route('admin.reservation.destroy', $item->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('put')
                                                                        <button type="submit"
                                                                            class="dropdown-item text-danger">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p>No data available</p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        Swal.fire(
            'ditolak',
            '{{ session('reject') }}',
            'success'
        )
    </script>
    <script>
        var table = $("#example").DataTable();
    </script>
@endsection
