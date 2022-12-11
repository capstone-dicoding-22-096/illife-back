@extends('template.template')
@section('title', 'Vendor')
@section('section-header')
<h1>Data Vendor</h1>
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
    <div class="breadcrumb-item active"><a href="/vendor">Vendor</a></div>
</div>
@endsection
@section('section-body')
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('vendor.create') }}"><i class="fas fa-plus-circle"></i> Tambah
                Data Vendor</a>
        </div>
        @if ($message = Session::get('succes'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ $message }}
            </div>
        </div>
        @endif
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                        <th>No</th>
                        <th>ID Vendor</th>
                        <th>Nama Vendor</th>
                        <th>Direktur Vendor</th>
                        <th>No. Handphone</th>
                        <th>Email</th>
                        <th>Rating</th>
                        <th>Tentang</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($vend as $vendor)
                    <tr>
                        <td>{{ $vendor->id }}</td>
                        <td>{{ $vendor->id_vendor }}</td>
                        <td>{{ $vendor->nama_vendor }}</td>
                        <td>{{ $vendor->direktur_vendor }}</td>
                        <td>{{ $vendor->no_hp }}</td>
                        <td>{{ $vendor->email }}</td>
                        <td>{{ $vendor->rating }}</td>
                        <td>{{ $vendor->tentang }}</td>
                        <td>{{ $vendor->alamat }}</td>
                        <td>
                            <form action="{{ route('vendor.destroy',$vendor->id) }}" method="POST">
                                <a href="{{ route('vendor.edit',$vendor->id) }}" class="btn btn-warning"><i
                                    class="fas fa-pen-square"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $vend->links() !!}
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span
                                class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
