@extends('layouts.main')

@section('container')
<hr class="mt-4">
<div class="container">
  <div class="row">
    @foreach ($barang as $brg)
    <div class="col-md-2 mb-3">
        <div class="card">
            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0,7)"><a href="/kategori/{{ $brg->kategori->nama_kategori }}" class="text-white text-decoration-none">{{ $brg->kategori->nama_kategori }}</a></div>
              <img src="https://source.unsplash.com/500x400?{{ $brg->kategori->nama_kategori }}" class="card-img-top" alt="{{ $brg->kategori->nama_kategori }}">
            <div class="card-body">
              <h5 class="card-title">{{ $brg->namabarang }}</h5>
              <p class="card-text d-inline" style="margin-right: 1rem">Kategori : <a href="#" style="text-decoration: none">{{ $brg->kategori->nama_kategori }} </a></p>
              <p class="card-text d-inline"><b>Rp. {{ $brg->harga }}</b></p>
              <p class="card-text">Stok : {{ $brg->stok }}</p>
              <p class="card-text"> {{ $brg->deskripsi_singkat }}..</p>
              <a href="/beli/{{ $brg->namabarang }}" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
    </div>
    @endforeach
</div>
</div>
<hr>
@endsection