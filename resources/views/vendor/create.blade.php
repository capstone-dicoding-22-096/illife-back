@extends('template.template')
@section('title', 'Tambah Data Vendor')
@section('section-header')
<h1>Tambah Data Vendor</h1>
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
    <div class="breadcrumb-item active"><a href="/vendor">Vendor</a></div>
    <div class="breadcrumb-item active"><a href="/vendor/create">Tambah Data Vendor</a></div>
</div>
@endsection
@section('section-body')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Input gagal.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('vendor.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>ID Vendor</label>
                    <input type="text" class="form-control" name="id_vendor">
                </div>
                <div class="form-group">
                    <label>Nama Vendor</label>
                    <input type="text" class="form-control" name="nama_vendor">
                </div>
                <div class="form-group">
                    <label>Direktur Vendor</label>
                    <input type="text" class="form-control" name="direktur_vendor">
                </div>
                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" class="form-control" name="no_hp">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <input type="text" class="form-control" name="rating">
                </div>
                <div class="form-group">
                    <label>Tentang</label>
                    <input type="text" class="form-control" name="tentang">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"></textarea>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
