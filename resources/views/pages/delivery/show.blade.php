@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-5">
        <a href="{{ route('thanks') }}">
            <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
        </a>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 mt-2">
            <label class="form-label">NIK KTP/PASSPORT</label>
            <input type="text" name="nik" class="form-control" placeholder="NIK KTP/PASSPORT" value="{{ $delivery->nik }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $delivery->nama }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">ASAL PERUSAHAAN</label>
            <input type="text" name="asal_perusahaan" class="form-control" placeholder="ASAL PERUSAHAAN" value="{{ $delivery->asal_perusahaan }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">NAMA PIC</label>
            <input type="text" name="nama_pic" class="form-control" placeholder="NAMA PIC" value="{{ $delivery->nama_pic }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">DEPARTEMEN</label>
            <input type="text" name="departemen" class="form-control" placeholder="DEPARTEMEN" value="{{ $delivery->departemen }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">TUJUAN LOKASI</label>
            <input type="text" name="tujuan_lokasi" class="form-control" placeholder="tujuan_lokasi" value="{{ $delivery->tujuan_lokasi }}" readonly>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">TUJUAN</label>
            <textarea class="form-control" name="tujuan" placeholder="description" rows="{{ substr_count($delivery->tujuan, "\n") + 1 }}" readonly>{{ $delivery->tujuan }}</textarea>
        </div>
        <div class="col-md-6 mt-2">
            <label class="form-label">CREATED AT</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $delivery->created_at->format('Y-m-d H:i:s') }}" readonly>
        </div>
        {{-- <div class="col-md-3 mt-2">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $book->updated_at->format('Y-m-d H:i:s') }}" readonly>
        </div> --}}
    </div>
</div>
@endsection
