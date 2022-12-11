@extends('template.template')
@section('title', 'Edit Data Vendor')
@section('section-header')
<h1>Edit Data Vendor</h1>
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
    <div class="breadcrumb-item active"><a href="/vendor">Vendor</a></div>
    <div class="breadcrumb-item active"><a href="/vendor/tambah_vendor">Edit Data Vendor</a></div>
</div>
@endsection
@section('section-body')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Ubah Data Gagal.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('vendor.update', $vendor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>ID Vendor</label>
                    <input type="text" class="form-control" name="id_vendor" value="{{ $vendor->id_vendor }}">
                </div>
                <div class="form-group">
                    <label>Nama Vendor</label>
                    <input type="text" class="form-control" name="nama_vendor" value="{{ $vendor->nama_vendor }}">
                </div>
                <div class="form-group">
                    <label>Direktur Vendor</label>
                    <input type="text" class="form-control" name="direktur_vendor" value="{{ $vendor->direktur_vendor }}">
                </div>
                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" class="form-control" name="no_hp" value="{{ $vendor->id_vendor }}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $vendor->email }}">
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <input type="text" class="form-control" name="rating" value="{{ $vendor->rating }}">
                </div>
                <div class="form-group">
                    <label>Tentang</label>
                    <input type="text" class="form-control" name="tentang" value="{{ $vendor->tentang}}">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10">{{ $vendor->alamat }}</textarea>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Ubah</button>
                    <button class="btn btn-secondary" type="reset">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
