@extends('layouts.main')

@section('container')
<div class="container">
<h1 class="pt-5 mb-2 fs-7 fw-bold"><span style="color: #002147"> Sirkulasi </span></h1>
    
    <!--Header-->
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Bebas Pustaka</li>
      </ol>
    </nav>
  
    <!--Ajukan-Permohonan-->
  <section class="pt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><span style="color: #002147"> Ajukan </span><span style="color : #FF9900">Permohonan</span></button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form class="row g-3 needs-validation align-items-center">
                <div class="col-10">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Keperluan" aria-label="Keperluan">
                  </div>
                </div>
                <div class="col-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

              <!--Table-->
              <table class="table table-hover mt-5">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal Pengajuan</th>
                    <th scope="col">Status</th>
                    <th scope="col">File</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>27 Maret 2022</td>
                    <td><span class="badge rounded-pill bg-success text-white">Diterima</span></td>
                    <td><span class="badge rounded-pill bg-primary text-white">Download File</span></td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <BUKU TERBARU> begin ============================-->
        <section class="pt-5 pb-0 mt-5" id="buku-terbaru">

          <div class="container">
            <h1 class="fs-9 fw-bold mb-4 pb-4 text-center"><span style="color: #002147"> Buku </span><span style="color : #FF9900">Terbaru</span></h1>
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row h-100 align-items-center">
                  <div class="col-md-4 mb-4">
                    <div class="card-book card-span text-white h-100" style="background-color:#E5E5E5"><center><img class="img-thumbnail" src="{{ asset('assets/img/sirkulasi/lord-rings-2.png') }}" alt="..." /></center>
                      <div class="card-book-body ps-0" style="background-color:#ffffff">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card-book card-span text-white h-100" style="background-color:#E5E5E5"><center><img class="img-thumbnail" src="{{ asset('assets/img/sirkulasi/lord-rings-2.png') }}" alt="..." /></center>
                      <div class="card-book-body ps-0" style="background-color:#ffffff">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card-book card-span text-white h-100" style="background-color:#E5E5E5"><center><img class="img-thumbnail" src="{{ asset('assets/img/sirkulasi/lord-rings-2.png') }}" alt="..." /></center>
                      <div class="card-book-body ps-0" style="background-color:#ffffff">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row h-100 align-items-center">
                  <div class="col-md-4 mb-4">
                    <div class="card-book card-span text-white h-100" style="background-color:#E5E5E5"><center><img class="img-thumbnail" src="{{ asset('assets/img/sirkulasi/lord-rings-2.png') }}" alt="..." /></center>
                      <div class="card-book-body ps-0" style="background-color:#ffffff">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card-book card-span text-white h-100" style="background-color:#E5E5E5"><center><img class="img-thumbnail" src="{{ asset('assets/img/sirkulasi/lord-rings-2.png') }}" alt="..." /></center>
                      <div class="card-book-body ps-0" style="background-color:#ffffff">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card-book card-span text-white h-100" style="background-color:#E5E5E5"><center><img class="img-thumbnail" src="{{ asset('assets/img/sirkulasi/lord-rings-2.png') }}" alt="..." /></center>
                      <div class="card-book-body ps-0" style="background-color:#ffffff">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row h-100 align-items-center">
                  <div class="col-md-4 mb-4">
                    <div class="card-book card-span text-white h-100" style="background-color:#E5E5E5"><center><img class="img-thumbnail" src="{{ asset('assets/img/sirkulasi/lord-rings-2.png') }}" alt="..." /></center>
                      <div class="card-book-body ps-0" style="background-color:#ffffff">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card-book card-span text-white h-100" style="background-color:#E5E5E5"><center><img class="img-thumbnail" src="{{ asset('assets/img/sirkulasi/lord-rings-2.png') }}" alt="..." /></center>
                      <div class="card-book-body ps-0" style="background-color:#ffffff">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card-book card-span text-white h-100" style="background-color:#E5E5E5"><center><img class="img-thumbnail" src="{{ asset('assets/img/sirkulasi/lord-rings-2.png') }}" alt="..." /></center>
                      <div class="card-book-body ps-0" style="background-color:#ffffff">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end of .container-->
  
        </section>
        <!-- <BUKU TERBARU> close ============================-->
        <!-- ============================================-->
      
</div>
@endsection