@extends('layouts.main')

@section('container')
<div class="container">
<h1 class="pt-5 mb-2 fs-7 fw-bold"><span style="color: #002147"> Detail Bibliography </span></h1>
    
    <!--Header-->
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/home/layanan/bibliography">Bibliography</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Bibliography</li>
      </ol>
    </nav>

     <!--Detil-->
    <section class="pt-5">
        <div class="box-detil">
            <div class="container py-3">
                <div class="card-detil">
                    <div class="row h-100 align-items-center">
                        <div class="col-md-5 mb-4">
                            <div class="card-image h-100" style="background-color: #F9F7F7;">
                                <a href="#"> <center><img class="img-fluid" src="{{ asset('assets/img/sirkulasi/lord-rings-2.png') }}"></center> </a>
                            </div>
                        </div>
                        <div class="col-md-7 mb-4">
                            <div class="table">
                              {{-- <table width="400px">
                                <caption>------------Lebar Tabel 600px--------------</caption>
                                    <tr>
                                        <th width="200px">Judul 1 (width=300px)</th>
                                        <th width="100px">Judul 2 (width=200px)</th>
                                        <th width="100px">Judul 3 (width=100px)</th>
                                    </tr>
                                    <tr>
                                        <td>Baris 1, Kolom 1</td>
                                        <td>Baris 1, Kolom 2</td>
                                        <td>Baris 1, Kolom 3</td>
                                    </tr>
                                    <tr>
                                        <td>Data yang sangat panjang, 
                                            sehingga merusak tampilan dari tabel</td>
                                        <td>Baris 2, Kolom 2</td>
                                        <td>Baris 2, Kolom 3</td>
                                    </tr>
                                    <tr>
                                        <td>Baris 3, Kolom 1</td>
                                        <td>Baris 3, Kolom 2</td>
                                        <td>Baris 3, Kolom 3</td>
                                    </tr>
                                </table> --}}
                              <div class="table-responsive-sm">
                                <table class="table table-hover">
                                 
                                  <tbody>
                                    <tr>
                                      <th scope="row">Judul</th>
                                      <td >:</td>
                                      <td>Lorem ipsum dolor sit amet, </td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Penerbit</th>
                                      <td>:</td>
                                      <td>Lorem ipsum dolor sit amet</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Penulis</th>
                                      <td>:</td>
                                      <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Judul</th>
                                      <td >:</td>
                                      <td>Lorem ipsum dolor sit amet, </td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Judul</th>
                                      <td >:</td>
                                      <td>Lorem ipsum dolor sit amet, </td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Judul</th>
                                      <td >:</td>
                                      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt voluptatum aliquam atque maiores sed corrupti, voluptatibus nostrum tenetur quibusdam laborum. Modi, eius rerum. Quo, illum esse. Eveniet quaerat explicabo inventore.</td>
                                    </tr>
                                  </tbody>
                                
                                </table>
                              </div>
                              </div>
                              
                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>
      
</div>
@endsection