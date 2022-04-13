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
    <section class="pt-5">
    <div class="row">
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
  </section>


    <!--Koleksi-Dipinjam-->
  <section class="pt-2">
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
                  <th scope="col">No</th>
                  <th scope="col">RFID</th>
                  <th scope="col">Nomor ISBN</th>
                  <th scope="col">Tanggal Peminjaman</th>
                  <th scope="col">Tanggal Pengembalian</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>000851829794</td>
                  <td>9792029710</td>
                  <td>20 Maret 2022</td>
                  <td>27 Maret 2022</td>
                  <td><span class="badge rounded-pill bg-warning text-white">Sedang Dipinjam</span></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>000851829794</td>
                  <td>9792029710</td>
                  <td>01 April 2022</td>
                  <td>08 April 2022</td>
                  <td><span class="badge rounded-pill bg-success text-white">Konfirmasi</span></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>000851829794</td>
                  <td>9792029710</td>
                  <td>30 Maret 2022</td>
                  <td>06 April 2022</td>
                  <td><span class="badge rounded-pill bg-danger text-white">Pending</span></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>000851829794</td>
                  <td>9792029710</td>
                  <td>30 Maret 2022</td>
                  <td>06 April 2022</td>
                  <td><span class="badge rounded-pill bg-danger text-white">Pending</span></td>
                </tr>
              </tbody>
            </table>

            <!--PAGINATION-->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
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
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="card"><img class="card-img-top" src="{{asset('assets/img/marketing/marketing01.png')}}" alt="" />
                      <div class="card-body ps-0">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card"><img class="card-img-top" src="{{asset('assets/img/marketing/marketing02.png')}}" alt="" />
                      <div class="card-body ps-0">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Motivation Is The First Step To Success</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card"><img class="card-img-top" src="{{asset('assets/img/marketing/marketing03.png')}}" alt="" />
                      <div class="card-body ps-0">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Success Steps For Your Personal Or Business Life</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="card"><img class="card-img-top" src="{{asset('assets/img/marketing/marketing01.png')}}" alt="" />
                      <div class="card-body ps-0">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card"><img class="card-img-top" src="{{asset('assets/img/marketing/marketing02.png')}}" alt="" />
                      <div class="card-body ps-0">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Motivation Is The First Step To Success</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card"><img class="card-img-top" src="{{asset('assets/img/marketing/marketing03.png')}}" alt="" />
                      <div class="card-body ps-0">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Success Steps For Your Personal Or Business Life</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="card"><img class="card-img-top" src="{{asset('assets/img/marketing/marketing01.png')}}" alt="" />
                      <div class="card-body ps-0">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card"><img class="card-img-top" src="{{asset('assets/img/marketing/marketing02.png')}}" alt="" />
                      <div class="card-body ps-0">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Motivation Is The First Step To Success</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card"><img class="card-img-top" src="{{asset('assets/img/marketing/marketing03.png')}}" alt="" />
                      <div class="card-body ps-0">
                        <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                        <h3 class="fw-bold">Success Steps For Your Personal Or Business Life</h3>
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