@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-5 mb-5">
        <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
    </div>
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <div class="row d-flex flex-wrap">
            <div class="col-md-6 mt-4">
                <input type="text" class="form-control" name="nik" placeholder="NIK KTP/PASSPORT">
            </div>
            <div class="col-md-6 mt-4">
                <input type="text" class="form-control" name="nama" placeholder="NAMA">
            </div>
            <div class="col-md-12 mt-4">
                <input type="text" class="form-control" name="asal_perusahaan" placeholder="ASAL PERUSAHAAN">
            </div>
            <div class="col-md-4 mt-4">
                <input type="text" class="form-control" name="nama_pic" placeholder="NAMA PIC">
            </div>
            <div class="col-md-4 mt-4">
                <select name="departemen" class="form-select" id="DepartemenSelect">
                    <option value="" disabled selected>Departemen</option>
                    <option value="Belum Ada">Belum Ada</option>
                </select>
            </div>
            <div class="col-md-4 mt-4">
                <select name="tujuan_lokasi" class="form-select" id="TujuanLokasiSelect">
                    <option value="" disabled selected>Tujuan Lokasi</option>
                    <option value="Belum Ada">Belum Ada</option>
                </select>
            </div>
            <div class="col-md-12 mt-4">
                <textarea class="form-control" name="tujuan" placeholder="TUJUAN" rows="5"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="d-grid">
                    <button class="btn btn-primary">SIMPAN</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
