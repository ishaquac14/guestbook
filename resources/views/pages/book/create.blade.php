@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-5 mb-5">
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
            <a href="javascript:history.go(-1);" class="btn btn-primary">Kembali</a>
        </a>
    </div>
    <form action="{{ route('book.store') }}" method="POST">
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
            <div class="col-md-4 mt-4">
                <input type="text" class="form-control" name="nama_pic" placeholder="NAMA PIC YANG DITUJU" required>
            </div>
            <div class="col-md-4 mt-4">
                <select name="departemen" class="form-select" id="DepartemenSelect" contenteditable="true" required>
                    <option value="" disabled selected>--Departemen--</option>
                    <option value="Advisor">Advisor</option>
                    <option value="ENG & QA Electric Components">ENG & QA Electric Components</option>
                    <option value="Engineering Body">Engineering Body</option>
                    <option value="Engineering Unit">Engineering Unit</option>
                    <option value="Human Resources Development & General Affairs">Human Resources Development & General Affairs</option>
                    <option value="Industrial Relation & Legal">Industrial Relation & Legal</option>
                    <option value="Information Technology Development">Information Technology Development</option>
                    <option value="Machine Maintenance">Machine Maintenance</option>
                    <option value="Maintenance">Maintenance</option>
                    <option value="Management System">Management System</option>
                    <option value="Plant Director">Plant Director</option>
                    <option value="President Director">President Director</option>
                    <option value="Production Body">Production Body</option>
                    <option value="Production Electric Components">Production Electric Components</option>
                    <option value="Production Planning & Inventory Control">Production Planning & Inventory Control</option>
                    <option value="Production Planning & Inventory Control Electric Components">Production Planning & Inventory Control Electric Components</option>
                    <option value="Procuction System & Development">Procuction System & Development</option>
                    <option value="Production Unit DC">Production Unit DC</option>
                    <option value="Production Unit MA">Production Unit MA</option>
                    <option value="Quality Body">Quality Body</option>
                    <option value="Quality Unit">Quality Unit</option>
                    <option value="Vice President Director">Vice President Director</option>
                    <option value="Tidak Ada">--Tidak Ada--</option>
                </select>
            </div>
            <div class="col-md-4 mt-4">
                <select name="tujuan_lokasi" class="form-select" id="TujuanLokasiSelect" required>
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
                <textarea class="form-control" name="tujuan" placeholder="TUJUAN" rows="5" required></textarea>
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
