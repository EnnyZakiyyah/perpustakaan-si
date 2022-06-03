{{-- @extends('dashboard.layouts.main')
@section('container') --}}

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Responsive Table -->
  <div class="card">
      <h5 class="card-header">Koleksi Digital</h5>
      <div class="table-responsive text-nowrap">
          <table class="table">
              <thead>
                  <tr class="text-nowrap">
                      <th>No</th>
                      <th>Judul</th>
                      <th>Penulis</th>
                      <th>ISBN</th>
                      <th>Tahun Terbit</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                {{-- @foreach ($katalogs as $katalog) --}}
                
                  <tr>
                    <th scope="row">1</th>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                  </tr>
                  {{-- @endforeach --}}
              </tbody>
          </table>
      </div>
  </div>
  <!--/ Responsive Table -->
</div>
<!-- / Content -->

{{-- @endsection --}}