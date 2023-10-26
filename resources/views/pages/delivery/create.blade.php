@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-5 mb-5">
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
            <a href="javascript:history.go(-1);" class="btn btn-primary">Kembali</a>
        </a>
    </div>
    <form action="{{ route('delivery.store') }}" method="POST">
        @csrf
        <div class="row d-flex flex-wrap">
            <div class="col-md-6 mt-4">
                <input type="text" class="form-control" name="nik" placeholder="NIK KTP/PASSPORT" required>
            </div>
            <div class="col-md-6 mt-4">
                <input type="text" class="form-control" name="nama" placeholder="NAMA LENGKAP" required>
            </div>
            <div class="col-md-12 mt-4">
                <input type="text" class="form-control" name="asal_perusahaan" placeholder="ASAL PERUSAHAAN" required>
            </div>
            <div class="col-md-6 mt-4">
                <input type="text" class="form-control" name="plat_kendaraan" placeholder="PLAT NOMOR KENDARAAN" required style="text-transform: uppercase;">
            </div>            
            <div class="col-md-6 mt-4">
                <select name="lokasi_tujuan" class="form-select" id="LokasiTujuanSelect" required>
                    <option value="" disabled selected>--Tujuan Lokasi--</option>
                    <option value="Level 0 - Loker">Level 0 - Loker</option>
                    <option value="Level 0 - Parkiran Mobil">Level 0 - Parkiran Mobil</option>
                    <option value="Level 0 - Parkiran Motor">Level 0 - Parkiran Motor</option>
                    <option value="Level 1 - Kantin">Level 1 - Kantin</option>
                    <option value="Level 1 - Mushola">Level 1 - Mushola</option>
                    <option value="Level 1 - Lobi">Level 1 - Lobi</option>
                    <option value="Level 2 - Unit Plant">Level 2 - Unit Plant</option>
                    <option value="Level 2 - Body Plant">Level 2 - Body Plant</option>
                    <option value="Level 2 - Office Lt.1/2">Level 2 - Office Lt.1/2</option>
                    <option value="Level 3 - Gardu Listrik">Level 3 - Gardu Listrik</option>
                    <option value="Level 3 - Ruangan Server">Level 3 - Ruangan Server</option>
                    <option value="Level 3 - Water Tank">Level 3 - Water Tank</option>
                    <option value="Level 3 - Area Gas PGN">Level 3 - Area Gas PGN</option>
                </select>
            </div>
            <div class="col-md-12 mt-4">
                <textarea class="form-control" name="keperluan" placeholder="KEPERLUAN" rows="5" required></textarea>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="d-grid">
                    <button class="btn btn-primary">SIMPAN</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
