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
                <input type="text" class="form-control" name="nik" placeholder="NIK KTP/PASSPORT" required>
            </div>
            <div class="col-md-6 mt-4">
                <input type="text" class="form-control" name="nama" placeholder="NAMA" required>
            </div>
            <div class="col-md-12 mt-4">
                <input type="text" class="form-control" name="asal_perusahaan" placeholder="ASAL PERUSAHAAN" required>
            </div>
            <div class="col-md-4 mt-4">
                <input type="text" class="form-control" name="nama_pic" placeholder="NAMA PIC" required>
            </div>
            <div class="col-md-4 mt-4">
                <select name="departemen" class="form-select" id="DepartemenSelect" required>
                    <option value="" disabled selected>Departemen</option>
                    <option value="Belum Ada">Advisor</option>
                    <option value="Belum Ada">DIV Engineering</option>
                    <option value="Belum Ada">DIV Engineering & Production Electric</option>
                    <option value="Belum Ada">DIV FAC & Purchasing</option>
                    <option value="Belum Ada">DIV HRD IRL GA</option>
                    <option value="Belum Ada">DIV Production</option>
                    <option value="Belum Ada">ENG & QA Electric Components</option>
                    <option value="Belum Ada">Engineering Body</option>
                    <option value="Belum Ada">Engineering Unit</option>
                    <option value="Belum Ada">Human Resources Development & General Affairs</option>
                    <option value="Belum Ada">Industrial Relation & Legal</option>
                    <option value="Belum Ada">Information Technology Development</option>
                    <option value="Belum Ada">Machine Maintenance</option>
                    <option value="Belum Ada">Maintenance</option>
                    <option value="Belum Ada">Management System</option>
                    <option value="Belum Ada">Plant Director</option>
                    <option value="Belum Ada">President Director</option>
                    <option value="Belum Ada">Production Body</option>
                    <option value="Belum Ada">Production Electric Components</option>
                    <option value="Belum Ada">Production Planning & Inventory Control</option>
                    <option value="Belum Ada">Production Planning & Inventory Control Electric Components</option>
                    <option value="Belum Ada">Procuction System & Development</option>
                    <option value="Belum Ada">Production Unit DC</option>
                    <option value="Belum Ada">Production Unit MA</option>
                    <option value="Belum Ada">Quality Body</option>
                    <option value="Belum Ada">Quality Unit</option>
                    <option value="Belum Ada">Vice President Director</option>
                </select>
            </div>
            <div class="col-md-4 mt-4">
                <select name="tujuan_lokasi" class="form-select" id="TujuanLokasiSelect" required>
                    <option value="" disabled selected>Tujuan Lokasi</option>
                    <option value="Belum Ada">Level 0 - Loker</option>
                    <option value="Belum Ada">Level 0 - Parkiran Mobil</option>
                    <option value="Belum Ada">Level 0 - Parkiran Motor</option>
                    <option value="Belum Ada">Level 1 - Kantin</option>
                    <option value="Belum Ada">Level 1 - Mushola</option>
                    <option value="Belum Ada">Level 1 - Lobi</option>
                    <option value="Belum Ada">Level 2 - Unit Plant</option>
                    <option value="Belum Ada">Level 2 - Body Plant</option>
                    <option value="Belum Ada">Level 2 - Office Lt.1/2</option>
                    <option value="Belum Ada">Level 3 - Gardu Listrik</option>
                    <option value="Belum Ada">Level 3 - Ruangan Server</option>
                    <option value="Belum Ada">Level 3 - Water Tank</option>
                    <option value="Belum Ada">Level 3 - Area Gas PGN</option>
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
