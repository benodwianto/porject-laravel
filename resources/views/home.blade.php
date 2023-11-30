@extends('layouts.main')

@section('container')
<main>
  <nav class="navbar navbar-light bg-light mb-4">
    <div class="container-fluid">
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Pilih Kategori
          </a>
        
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="/belis?kategori={{ $barang[0]->kategori->nama_kategori }}">{{ $barang[0]->kategori->nama_kategori }}</a></li>
            <li><a class="dropdown-item" href="/belis?kategori={{ $barang[1]->kategori->nama_kategori }}">{{ $barang[1]->kategori->nama_kategori }}</a></li>
            <li><a class="dropdown-item" href="/belis?kategori={{ $barang[2]->kategori->nama_kategori }}">{{ $barang[2]->kategori->nama_kategori }}</a></li>
          </ul>
        </div>
      <form class="d-flex" action="/belis">
        <input class="form-control me-2" name="cari" type="search" placeholder="Cari Barang.." aria-label="Search" style="width: 500px">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><img src="https://source.unsplash.com/1200x400?style" alt=""></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Stylelist</h1>
            <p>Berbagai macam jenis pakaian,Baju,celana dan lainnya </p>
            <p><a class="btn btn-lg btn-success" href="/belis">Belanja Sekarang</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><img src="https://source.unsplash.com/1200x400?accesories" alt=""></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Accesories</h1>
            <p>Berbagai macam jenis Aksesoris yang sangat unik untuk dimiliki</p>
            <p><a class="btn btn-lg btn-success" href="/belis">Selengkapnya</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <img src="https://source.unsplash.com/1200x400?Clothes" alt=""></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Clothes</h1>
            <p>Berbagai macam jenis Baju,celana dan lainnya yang sangat menarik untuk dimiliki</p>
            <p><a class="btn btn-lg btn-success" href="/belis">Lihat Detail</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
    <h3><b>Kategori Pilihan Sebelumnya</b> </h3>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <a href=""><img src="/img/skincare.jpg" alt="" style="width: 25rem;margin-right:1rem;"></a>
        <h2>Stylelist</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href=""><img src="/img/skincare.jpg" alt="" style="width: 25rem;margin-right:1rem;"></a>

        <h2>Accessories</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href=""><img src="/img/skincare.jpg" alt="" style="width: 25rem;margin-right:1rem;"></a>

        <h2>Makanan</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider mt-3 mb-5">

<div class="row featurette">
  <div class="col-md-12 order-md-2">
    <div class="row">
      @foreach ($barang as $brg)
        <div class="col-md-2 mb-3">
          <a href="/beli/{{ $brg->namabarang }}" style="text-decoration: none; color: black;">
            <div class="card" style="height: 100%;">
              <img src="https://source.unsplash.com/500x400?{{ $brg->kategori->nama_kategori }}" class="card-img-top" alt="{{ $brg->kategori->nama_kategori }}" style="object-fit: cover; width: 100%; height: 200px;">
              <div class="card-body">
                <h5 class="card-title">{{ $brg->namabarang }}</h5>
                <p class="card-text d-inline" style="margin-right: 1rem">
                  Kategori : <a href="/belis?kategori={{ $brg->kategori->nama_kategori }}" style="text-decoration: none; color:black;">{{ $brg->kategori->nama_kategori }}</a>
                </p>
                <p class="card-text mb-0 fw-bolder">Rp. {{ $brg->harga }} </p>
                <p class="card-text d-inline fs-6">Stok : {{ $brg->stok }}</p>
                <p class="card-text"> {{ $brg->deskripsi_singkat }}..</p>
                <a href="/beli/{{ $brg->namabarang }}" class="btn btn-success">Lihat Detail</a>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>

<div class="d-flex pagination-lg justify-content-center custom-pagination">
  {{ $barang->links() }}
</div>
    <hr class="featurette-divider mt-3">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    
    <!-- /END THE FEATURETTES -->
    
  </div><!-- /.container -->

@endsection