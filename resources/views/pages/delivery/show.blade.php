@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-5">
        <a href="{{ route('thanks') }}">
            <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
            <a href="javascript:history.go(-1);" class="btn btn-primary">Kembali</a>
        </a>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 mt-2">
            <label class="form-label">NIK KTP/PASSPORT</label>
            <input type="text" name="nik" class="form-control" placeholder="NIK KTP/PASSPORT" value="{{ $delivery->nik }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control" placeholder="NAMA LENGKAP" value="{{ $delivery->nama }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">ASAL PERUSAHAAN</label>
            <input type="text" name="asal_perusahaan" class="form-control" placeholder="ASAL PERUSAHAAN" value="{{ $delivery->asal_perusahaan }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">PLAT KENDARAAN</label>
            <input type="text" name="plat_kendaraan" class="form-control" placeholder="PLAT NOMOR KENDARAAN" value="{{ strtoupper($delivery->plat_kendaraan) }}" readonly>
        </div>        
        <div class="col-md-6 mt-2">
            <label class="form-label">LOKASI TUJUAN</label>
            <input type="text" name="lokasi_tujuan" class="form-control" placeholder="LOKASI TUJUAN" value="{{ $delivery->lokasi_tujuan }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">CREATED AT</label>
            <input type="text" name="created_at" class="form-control" placeholder="CREATED AT" value="{{ $delivery->created_at->format('Y-m-d H:i:s') }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">KEPERLUAN</label>
            <textarea class="form-control" name="tujuan" placeholder="KEPERLUAN" rows="{{ substr_count($delivery->keperluan, "\n") + 5 }}" readonly>{{ $delivery->keperluan }}</textarea>
        </div>
        {{-- <div class="col-md-3 mt-2">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $book->updated_at->format('Y-m-d H:i:s') }}" readonly>
        </div> --}}
    </div>
</div>
@endsection
