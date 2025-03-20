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
            <i class="fas fa-ban"></i> Kesalahan! <br>
            Data yang Anda cari tidak ditemukan.
        </div>
        <a href="{{ url('suplier') }}" class="btn btn-sm btn-default ml-2">Kembali</a>
        @else
        <form method="POST" action="{{ url('suplier/'.$suplier->suplier_id) }}" class="form-horizontal">
            @csrf
            {!! method_field('PUT') !!} <!-- Tambahkan method PUT untuk edit -->

            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Nama</label>
                <div class="col-11">
                    <input type="text" class="form-control" id="suplier_nama" name="suplier_nama" 
                           value="{{ old('suplier_nama', $suplier->suplier_nama) }}" required>
                    @error('suplier_nama')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Alamat</label>
                <div class="col-11">
                    <input type="text" class="form-control" id="suplier_alamat" name="suplier_alamat" 
                           value="{{ old('suplier_alamat', $suplier->suplier_alamat) }}" required>
                    @error('suplier_alamat')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-11">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a class="btn btn-sm btn-default ml-1" href="{{ url('suplier') }}">Kembali</a>
                </div>
            </div>
        </form>
        @endempty
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush
