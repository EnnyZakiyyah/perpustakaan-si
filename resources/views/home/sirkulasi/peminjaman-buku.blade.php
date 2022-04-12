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
        <div class="col-2">
            <form>
                <div class="search rounded-pill"><input type="text" class="form-control rounded-pill" placeholder="Judul"> <i class="fa fa-search"></i></div>
            </form>
        </div>
        <div class="col-3">
            <form>
                <div class="search rounded-pill"><input type="text" class="form-control rounded-pill" placeholder="Jenis"> <i class="fa fa-search"></i></div>
            </form>
        </div>
        <div class="col-2">
            <form>
                <button class="btn btn-search " type="submit">Search</button>
            </form>
        </div>
    </div>
  
    <!--Koleksi-Dipinjam-->
  
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><span style="color: #002147"> Koleksi </span><span style="color : #FF9900">Dipinjam</span></button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    
</div>
@endsection