@extends('theme.app.main')
@section('title', 'Pengaduan')

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
                    <div class="col-lg-7">
                        <div class="single-contact-form">
                            <div class="section-title left-title">
                                <h2>Review Makanan</h2>
                            </div>
                            <div class="contact-from">
                                <form id="" action="{{ route('pengaduan.update', $pengaduan->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Nama</label>
                                                <input type="text" value="@auth{{ Auth::user()->name }} @endauth"
                                                    class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Menu</label>
                                                <select class="form-control" name="menu_id">
                                                    <option value="" selected disabled>Pilih Menu</option>
                                                    @foreach ($menus as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id == $pengaduan->menu_id ? 'selected' : '' }}>
                                                            {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Deskripsi</label>
                                                <textarea name="description" class="form-control" id="description" cols="30" rows="5"
                                                    placeholder="Deskripsi">{{ $pengaduan->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
