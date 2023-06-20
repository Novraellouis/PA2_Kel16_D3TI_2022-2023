@extends('theme.app.main')
@section('title', 'Data Pengaduan')

@section('content')
    <div class="others-option-for-responsive">
        <!-- Konten lainnya -->
    </div>

    <div class="pag-banner-area contact-pages-area jarallax" data-jarallax='{"speed": 0.3}'>
        <!-- Konten lainnya -->
    </div>

    <div class="contact-from-area pt-100 pb-100">
        <div class="container">
            <div class="contact-form-box">
                <!-- Konten lainnya -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-contact-form">
                            <div class="section-title left-title">
                                <h2>Data Pengaduan</h2>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('pengaduan.create') }}" class="btn btn-primary">Buat Pengaduan</a>
                            </div>
                            <div class="contact-from" style="margin: 10px;">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Menu</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    @if (isset($pengaduan))
                                        <tbody>
                                            @foreach ($pengaduan as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->user->name }}</td>
                                                    <td>{{ $item->menu->title }}</td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>
                                                        <a href="{{ route('pengaduan.edit', $item->id) }}"
                                                            class="btn btn-primary btn-sm">Edit</a>
                                                        <form action="{{ route('pengaduan.destroy', $item->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus pengaduan ini?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    @else
                                        <tbody>
                                            <tr>
                                                <td class="text-center" colspan="6">No Data</td>
                                            </tr>
                                        </tbody>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
