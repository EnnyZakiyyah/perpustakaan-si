@extends('dashboard.layouts.main')
@section('container')

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Responsive Table -->
    <div class="card">
        <h5 class="card-header">Penelusuran katalog</h5>
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
                    @foreach ($katalogs as $katalog)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $katalog->title }}</td>
                        <td>{{ $katalog->author->name }}</td>
                        <td>ISBN</td>
                        <td>2016</td>
                        <td>
                            <a href="/dashboard/sirkulasi/penelusuran-katalog/{{ $katalog->slug }}"
                                class="badge bg-info"><i class="bx bx-show"></i></a>
                            <a href="" class="badge bg-warning"><i class="bx bx-message-square-edit"></i></a>
                            <a href="" class="badge bg-danger"><i class="bx bx-x-circle"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->

@endsection
