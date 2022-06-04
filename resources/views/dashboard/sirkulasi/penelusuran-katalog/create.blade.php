@extends('dashboard.layouts.main')
@section('container')
    
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Responsive Table -->
    <div class="card">
        <h5 class="card-header">Tambah Data Penelusuran Katalog</h5>
        <div class="card-body">
            <div class="col-lg-10">
                <form method="POST" action="/dashboard/sirkulasi/penelusuran-katalog">
                    @csrf
                    <form>
                        {{-- <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug">
                          </div> --}}
                    <div class="mb-3 row">
                        <label for="title" class="col-md-2 col-form-label">Title</label>
                        <div class="col-md-10">
                          <input class="form-control" type="text" name="title" id="title"/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="slug" class="col-md-2 col-form-label">Slug</label>
                        <div class="col-md-10">
                          <input class="form-control" type="text" name="slug" id="slug" />
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="defaultSelect" class="col-md-2 col-form-label">Category</label>
                        <div class="col-md-10">
                        <select id="defaultSelect" class="form-select" name="category_id">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="body" class="col-md-2 col-form-label">Sinopsis</label>
                        <div class="col-md-10">
                            <input id="body" type="hidden" name="body">
                            <trix-editor input="body"></trix-editor>
                      </div>
                      </div>
                    <button type="submit" class="btn btn-primary" style="float:right">Tambah Data</button>
                  </form>
            </div>
        </div>
    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->

{{-- <script>
    $('#title').change(function(e) {
       $.get('{{ url('dashboard.sirkulasi.penelusuran-katalog.checkSlug') }}', 
       { 'title': $(this).val() }, 
       function( data ) {
           $('#slug').val(data.slug);
       }
       );
    });
</script> --}}
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/sirkulasi/penelusuran-katalog/checkSlug?title=' +title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection
