@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mt-5 mb-5">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
            </a>
            <a href="javascript:history.go(-1);" class="btn btn-primary">Kembali</a>
        </div>
        <form action="{{ route('master_store') }}" method="POST">
            @csrf
            <div class="row d-flex flex-wrap">
                <div class="col-md-6 mt-4">
                    <input type="text" class="form-control" name="nama_master" placeholder="NAMA PIC YANG DITUJU"
                        required>
                </div>
                <div class="col-md-6 mt-4">
                    <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP" required>
                </div>

                <!-- Jika ingin menyimpan ID pengguna yang terkait dengan master -->
                <!-- <input type="hidden" name="user_id" value="{{ auth()->id() }}"> -->

                <div class="row mt-4">
                    <div class="col">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
