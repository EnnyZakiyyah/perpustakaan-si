@extends('layouts.main')

@section('container')
      <!-- ==========================================-->
      <!-- <HEADER> begin============================-->

          <section class="pt-3">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-6 text-sm-start text-center py-6">
                  <h1 class="mb-4 fs-9 fw-bold">Selamat Datang di Perpustakaan LPTP Surakarta</h1>
                  <p class="mb-5 lead text-secondary">Tools tutorials, design and innovation experts, all<br class="d-none d-xl-block" />in one place! The most intuitive way to imagine<br class="d-none d-xl-block" />your next user experience.</p>
                  <form>
                    <div class="search rounded-pill w-xl-75 w-xxl-50 d-flex flex-end-center"><input type="text" class="form-control rounded-pill" placeholder="Search books, articles, keywords"> <i class="fa fa-search"></i></div>
                  </form>
                </div>
                <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="assets/img/hero/hero-img.png" alt="" /></div>
              </div>
            </div>
          </section>
          <!-- <HEADER> close ============================-->
          <!-- ============================================-->
    
          <!-- ============================================-->
          <!-- <INFORMATION> begin ========================-->
{{--     
            <section class="py-0 mt-3" style="margin-top:-5.8rem">
    
              <div class="container">
                <div class="row">
                  <div class="card card-span bg-secondary">
                    <div class="card-body">
                      <div class="row flex-center gx-0">
                        <div class="col-lg-4 col-xl-2 text-center text-xl-start"><img src="{{asset('assets/img/information/megaphone.png')}}" width="170" alt="..." /></div>
                        <div class="titles col-lg-8 col-xl-4">
                          <h1 class="text-light fs-lg-4 fs-xl-5">Our <br/><span style="color: #FF9900">Information ! </span></h1>
                        </div>
                        <div class="col-lg-6 col-xl-6 text-center justify-content-end">
                          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>First slide label</h5>
                                  <p>Some representative placeholder content for the first slide.</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>First slide label</h5>
                                  <p>Some representative placeholder content for the first slide.</p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="carousel-caption d-none d-md-block">
                                  <h5>First slide label</h5>
                                  <p>Some representative placeholder content for the first slide.</p>
                                </div>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
            </section> --}}
<!--================================================================-->
            <section class="py-0 mt-3" style="margin-top:-5.8rem">
    
              <div class="container">
                <div class="row">
                  <div class="card card-span bg-secondary">
                    <div class="card-body">
                      <div class="row flex-center gx-0">
                        <div class="col-lg-4 col-xl-2 text-center text-xl-start"><img src="{{asset('assets/img/information/megaphone.png')}}" width="170" alt="..." /></div>
                        <div class="titles col-lg-8 col-xl-4">
                          <h1 class="text-light fs-lg-4 fs-xl-5">Our <br class="d-none d-xl-block"/><span style="color: #FF9900">Information ! </span></h1>
                        </div>
                        <div class="col-lg-12 col-xl-6 order-1 text-center text-white">
                          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <h1 class="text-white">TANGGAL 5 LIBUR</h1>
                                  <p>Natal</p>
                              </div>
                              <div class="carousel-item">
                                <h1 class="text-white">TANGGAL 1 LIBUR</h1>
                                
                              </div>
                              <div class="carousel-item">
                                <h1 class="text-white">TANGGAL 5 LIBUR</h1>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
            </section>

            {{-- <section class="py-0 mt-3" style="margin-top:-5.8rem">
    
              <div class="container">
                <div class="row">
                  <div class="card card-span bg-secondary">
                    <div class="card-body">
                      <div class="row flex-center gx-0">
                        <div class="col-lg-4 col-xl-2 text-center text-xl-start"><img src="{{asset('assets/img/information/megaphone.png')}}" width="170" alt="..." /></div>
                        <div class="col-lg-8 col-xl-4">
                          <h1 class="text-light fs-lg-4 fs-xl-5">Upcoming Our <span class="text-primary">Basic in Python </span>Course!</h1>
                        </div>
                        <div class="col-lg-12 col-xl-6 align-items-end">
                        
                           <center> 
                            <div class="cards" style="width: 18rem;">
                             
                              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                      <h1 class="text-white">TANGGAL 5 LIBUR</h1>
                                      <p>Natal</p>
                                  </div>
                                  <div class="carousel-item">
                                    <h1 class="text-white">TANGGAL 1 LIBUR</h1>
                                    
                                  </div>
                                  <div class="carousel-item">
                                    <h1 class="text-white">TANGGAL 5 LIBUR</h1>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                            </div>

                            </div>
                          </center>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </section> --}}
           
      <!-- <INFORMATION> close ========================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <ABOUT ME> begin ============================-->
        <section class="mt-5" id="about-me">

          <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block" style="background-image:url({{asset('assets/img/category/shape.png')}});opacity:.5;">
          </div>
          <!--/.bg-holder-->

          <div class="container">
            <div class="row">
              <div class="col-lg-6"><img class="img-fluid" src="{{asset('assets/img/marketer/marketer.png')}}" alt="" /></div>
              <div class="col-lg-6">
                <p class="fs-7 fw-bold mb-2"> <span style="color: #002147"> Tentang </span> <span style="color : #FF9900"> Kami</span></p>
                <p class="mb-4 fw-medium text-secondary">
                  The Myspace page defines the individual,his or her
                  characteristics, traits, personal choices and the overall<br />personality of the person.
                </p>
                <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="{{asset('assets/img/manager/tick.png')}}" width="35" alt="tick" />
                  <p class="fw-medium mb-0 text-secondary">Never worry about overpaying for your<br />energy again.</p>
                </div>
                <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="{{asset('assets/img/manager/tick.png')}}" width="35" alt="tick" />
                  <p class="fw-medium mb-0 text-secondary">We will only switch you to energy companies<br />that we trust and will treat you right</p>
                </div>
                <div class="d-flex align-items-center mb-3"><img class="me-sm-4 me-2" src="{{asset('assets/img/manager/tick.png')}}" width="35" alt="tick" />
                  <p class="fw-medium mb-0 text-secondary"> We track the markets daily and know where the<br />savings are.</p>
                </div>
              </div>
            </div>
          </div><!-- end of .container-->
  
        </section>
        <!-- <TENTANG KAMI> close ============================-->
        <!-- ============================================-->


      <!-- ============================================-->
      <!-- <LAYANAN KAMI> begin ============================-->
      <section class="pt-0 pt-md-9 mb-3" id="layanan-kami">

        <div class="container">
          <h1 class="fs-9 fw-bold mb-4 pb-5 text-center"><span style="color: #002147"> Layanan </span><span style="color : #FF9900">Kami</span></h1>
          <div class="row justify-content-center">
          </div>
          <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
              <div class="px-0 px-lg-3"><img class="img-fluid mb-4 " src="{{asset('assets/img/layanan/Pencarian.png')}}" width="105" height="106" alt="..." />
                <h3 class="h5 mb-4 font-base">Pencarian</h3>
                <p class="lh-lg">Mencari informasi mengenai buku</p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
              <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('assets/img/layanan/Koleksi-Digital.png')}}" width="116" height="106" alt="..." />
                <h3 class="h5 mb-4 font-base">Koleksi Digital</h3>
                <p class="lh-lg">Pengelolaan dan pencatatan data buku</p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
              <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('assets/img/layanan/Keanggotaan.png')}}" width="102" height="106" alt="..." />
                <h3 class="h5 mb-4 font-base">Keanggotaan</h3>
                <p class="lh-lg">Publish with Wiley Explore our resource library Learn about topics and trends</p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 text-center">
              <div class="px-0 px-lg-3"><img class="img-fluid mb-4" src="{{asset('assets/img/layanan/Sirkulasi.png')}}" width="95" height="106" alt="..." />
                <h3 class="h5 mb-4 font-base">Sirkulasi</h3>
                <p class="lh-lg">Mengatur jalannya kegiatan peminjaman, pengembalian, perpanjangan, dan reservasi koleksi perpustakaan</p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <LAYANAN KAMI> close ============================-->
      <!-- ============================================-->


      <!-- ============================================-->
      <!-- <TATA TERTIB> begin ============================-->
      <section class="pt-2" id="tata-tertib">

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-2 fs-7 fw-bold"><span style="color: #002147"> Tata </span><span style="color : #FF9900">Tertib</span></h2>
              <p class="mb-4 fw-medium text-secondary">
                The Myspace page defines the individual,his or her
                characteristics, traits, personal choices and the overall<br />personality of the person.
              </p>
              <h4 class="fs-1 fw-bold">Accessory makers</h4>
              <p class="mb-4 fw-medium text-secondary">While most people enjoy casino gambling, sports betting,<br />lottery and bingo playing for the fun</p>
              <h4 class="fs-1 fw-bold">Alterationists</h4>
              <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your business<br />that won't cost you money,</p>
              <h4 class="fs-1 fw-bold">Custom Design designers</h4>
              <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your business<br />that won't cost you more money,</p>
            </div>
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/validation/validation.png" alt="" /></div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <TATA TERTIB> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <BUKU TERBARU> begin ============================-->
      <section class="pt-5" id="buku-terbaru">

        <div class="container">
          <h1 class="fs-9 fw-bold mb-4 pb-4 text-center"><span style="color: #002147"> Buku </span><span style="color : #FF9900">Terbaru</span></h1>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing01.png" alt="" />
                    <div class="card-body ps-0">
                      <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                      <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing02.png" alt="" />
                    <div class="card-body ps-0">
                      <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                      <h3 class="fw-bold">Motivation Is The First Step To Success</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing03.png" alt="" />
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
                  <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing01.png" alt="" />
                    <div class="card-body ps-0">
                      <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                      <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing02.png" alt="" />
                    <div class="card-body ps-0">
                      <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                      <h3 class="fw-bold">Motivation Is The First Step To Success</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing03.png" alt="" />
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
                  <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing01.png" alt="" />
                    <div class="card-body ps-0">
                      <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                      <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing02.png" alt="" />
                    <div class="card-body ps-0">
                      <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1" href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                      <h3 class="fw-bold">Motivation Is The First Step To Success</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing03.png" alt="" />
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


      <!-- ============================================-->
      <!-- <QUESTION> begin ============================-->
        <section class="py-md-11 py-3" id="question">

          <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block background-position-top" style="background-image:url(assets/img/superhero/oval.png);opacity:.5; background-position: top !important ;">
          </div>
          <!--/.bg-holder-->
  
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                <h1 class="fw-bold mb-4 fs-7">Ada Pertanyaan?</h1>
                <p class="mb-5 text-info fw-medium">Apakah ada pertanyaan mengenai<br />peminjaman, pengembalian, perpanjangan, atau yang lain?</p>
                <button class="btn btn-warning btn-md">Contact Us</button>
              </div>
            </div>
          </div><!-- end of .container-->
  
        </section>
        <!-- <QUESTION> close ============================-->
        <!-- ============================================-->


      <!-- ============================================-->
      <!-- <FOOTER> begin ============================-->
      <section class="pb-2 pb-lg-5">

        <div class="container">
          <div class="row border-top border-top-secondary pt-7">
            <div class="col-lg-2 col-md-6 mb-4 mb-md-6 mb-lg-0 mb-sm-2 order-1 order-md-1 order-lg-1"><img src="{{asset('assets/img/logo/User-Manual.png')}}" height="47" alt="logo" /><img src="{{asset('assets/img/logo/logo-lptp.png')}}" height="38" alt="logo" /></div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-3 order-md-3 order-lg-2">
              <p class="fs-2 mb-lg-4">Quick Links</p>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Tentang Kami</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Kontak Kami</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">FAQ</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-4 order-md-4 order-lg-3">
              <p class="fs-2 mb-lg-4">Layanan</p>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Daftar Anggota</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Koleksi Digital</a></li>
                <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Sirkulasi</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-6 mb-4 mb-lg-0 order-2 order-md-2 order-lg-4">
              <p class="fs-2 mb-lg-4">
                Our Social Network</p>
                <ul class="list-unstyled mb-0">
                  <p>Penggunaan platform media sosial berbasis internet
                <br/>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram-fill" viewBox="0 0 20 20">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg></i> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 20 20">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                </svg></p>
              </ul>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <FOOTER> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="text-center py-0">

        <div class="container">
          <div class="container border-top py-3">
            <div class="row justify-content-between">
              <div class="col-12 col-md-auto mb-1 mb-md-0">
                <p class="mb-0">&copy; 2022 LPTP Surakarta </p>
              </div>
              <div class="col-12 col-md-auto">
                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                </svg></a>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <iframe class="rounded" style="width:100%;height:500px;" src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>

@endsection