@extends('layouts.main')

@section('container')
<nav class="navbar navbar-light bg-light mb-4">
  <div class="container-fluid">
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Pilih Kategori
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @foreach ($kategori_list as $kategori)
          <li><a class="dropdown-item" href="{{ url('/belis?kategori='. $kategori->nama_kategori) }}">{{ $kategori->nama_kategori }}</a></li>
          @endforeach
        </ul>
      </div>
    <form class="d-flex" action="/belis">
      @if (request('kategori'))
        <input type="hidden" name="kategori" value="kategori">
      @endif
      <input class="form-control me-2" name="cari" type="search" placeholder="Cari barang.." aria-label="Search" value="{{ request('cari') }}" style="width: 500px;">
      <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>
  </div>
</nav>
<hr class="mt-4">

@if ($barang->count())
<div class="row featurette">
  <div class="col-md-2">
    <p>Filter</p>
    <p>Filter</p>
  </div>
  <div class="col-md-10">
    <div class="row">
      @foreach ($barang as $brg)
        <div class="col-md-3 mb-3">
          <div class="card" style="height: 100%;">
            <img src="https://source.unsplash.com/500x400?{{ $brg->kategori->nama_kategori }}" class="card-img-top" alt="{{ $brg->kategori->nama_kategori }}" style="object-fit: cover; width: 100%; height: 200px;">
            <div class="card-body">
              <h5 class="card-title">{{ $brg->namabarang }}</h5>
              <p class="card-text d-inline" style="margin-right: 1rem">
                Kategori : <a href="/belis?kategori={{ $brg->kategori->nama_kategori }}" style="text-decoration: none">{{ $brg->kategori->nama_kategori }}</a>
              </p>
              <p class="card-text d-inline-block mb-0"><b>Rp. {{ $brg->harga }}</b></p>
              <p class="card-text mb-0">Stok : {{ $brg->stok }}</p>
              <p class="card-text"> {{ $brg->deskripsi_singkat }}..</p>
              <a href="/beli/{{ $brg->namabarang }}" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

@else
<p class="text-center fs-4">Tidak ada barang yang sesuai.</p>
@endif
@endsection

