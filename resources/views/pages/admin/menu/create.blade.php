@extends('theme.admin.main')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Create Menu</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Menu</label>
                                        <input type="text"
                                            class="form-control input-default @error('title') is-invalid @enderror"
                                            name="title" placeholder="Masukkan">
                                        @error('title')
                                            <span class="alert-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Pilih Kategori</label>
                                        <select name="category" class="form-select @error('category') is-invalid @enderror">
                                            <option disabled selected>Pilih Kategori</option>
                                            <option value="Makanan">Makanan</option>
                                            <option value="Minuman">Minuman</option>
                                        </select>
                                        <br>
                                        @error('category')
                                            <span class="alert-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number"
                                            class="form-control input-default @error('price') is-invalid @enderror"
                                            name="price" placeholder="Masukkan" value="">
                                        @error('price')
                                            <span class="alert-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input type="number"
                                            class="form-control input-default @error('stock') is-invalid @enderror"
                                            name="stock" placeholder="Masukkan" value="">
                                        @error('stock')
                                            <span class="alert-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea name="description" class=" form-control form-text @error('description') is-invalid @enderror"></textarea>
                                        @error('description')
                                            <span class="alert-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Cover</label>
                                        <input type="file"
                                            class="form-control input-default @error('cover') is-invalid @enderror"
                                            name="cover" placeholder="Masukkan" value="">
                                        @error('cover')
                                            <span class="alert-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="card-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-primary">Tambah
                                                Produk</button>
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
