@extends('layouts.main')

@section('container')
<div class="container">
<h1 class="pt-5 mb-2 fs-7 fw-bold"><span style="color: #002147"> Sirkulasi </span></h1>
    
    <!--Header-->
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Peminjaman Buku</li>
    </ol>
  </nav>

    <!--Search-->
    <div class="row pt-5 mb-5">
        <div class="col-5">
            <form>
                <div class="search rounded-pill"><input type="text" class="form-control rounded-pill" placeholder="Search books, articles, keywords"> <i class="fa fa-search"></i></div>
            </form>
        </div>
        <div class="col">
            <form>
                <div class="search rounded-pill"><input type="text" class="form-control rounded-pill" placeholder="Judul"> <i class="fa fa-search"></i></div>
            </form>
        </div>
        <div class="col">
            <form>
                <div class="search rounded-pill"><input type="text" class="form-control rounded-pill" placeholder="Jenis"> <i class="fa fa-search"></i></div>
            </form>
        </div>
        <div class="col">
            <form>
                <button class="btn btn-search " type="submit">Search</button>
            </form>
        </div>
    </div>
  
    <!--Koleksi-Dipinjam-->
    <ul class="nav nav-tabs pt-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Koleksi Dipinjam</a>
        </li>
      </ul>
   
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">dfdddddd</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
      </div>

</div>
@endsection