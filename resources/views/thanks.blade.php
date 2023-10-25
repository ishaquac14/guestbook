@extends('layouts.app')

@section('body')

<div class="container py-4">
    <header class="pb-3 mb-4 mt-4">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <img src="{{ asset('images/logo1.png') }}" alt="" height="25">
      </a>
    </header>

      <div class="py-5 mt-5 text-center">
        <h1 class="display-1">TERIMA KASIH!</h1>
        {{-- <a class="btn btn-primary mt-4" href="{{ route('book.create') }}">Isi Buku Tamu</a> --}}
        
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary mt-4 mx-2" href="{{ route('book.create') }}">Buku Tamu</a>
          <a class="btn btn-success mt-4 mx-2" href="{{ route('delivery.create') }}">Buku Delivery</a>
        </div>
      </div>

  </div>
@endsection