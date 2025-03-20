@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($suplier)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
            @else
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $suplier->suplier_id }}</td>
                    </tr>
                    <tr>
                        <th>Nama Suplier</th>
                        <td>{{ $suplier->nama_suplier }}</td>
                    </tr>
                    <tr>
                        <th>Kontak</th>
                        <td>{{ $suplier->kontak }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $suplier->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Aksi</th>
                        <td>{{ $suplier->aksi }}</td>
                    </tr>
                </table>
            @endempty
            <a href="{{ url('suplier') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
