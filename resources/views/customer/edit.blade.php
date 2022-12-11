@extends('template.template')
@section('title', 'Edit Data Customer')
@section('section-header')
<h1>Edit Data Customer</h1>
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
    <div class="breadcrumb-item active"><a href="/customer">Customer</a></div>
    <div class="breadcrumb-item active"><a href="/customer/create">Edit Data Customer</a></div>
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
            <form action="{{ route('customer.update', $customer->id_customer) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>NIK</label>
                    <input type="text" class="form-control" name="nik" value="{{ $customer->nik }}">
                </div>
                <div class="form-group">
                    <label>Nama Customer</label>
                    <input type="text" class="form-control" name="nama_customer" value="{{ $customer->nama_customer }}">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin" value="{{ $customer->jenis_kelamin }}">
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $customer->tempat_lahir }}">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="{{ $customer->tanggal_lahir }}">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10">{{ $customer->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label>No Handphone</label>
                    <input type="text" class="form-control" name="no_hp" value="{{ $customer->no_hp }}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $customer->email }}">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="{{ $customer->password}}">
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Ubah</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
