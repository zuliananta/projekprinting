@extends('backend.dashboard_coba.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Categories</h1>
  </div>

  <div class="col-lg-8">
  <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
      name="name" required autofocus value="{{ old('name') }}">
      @error('name')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create Category</button>
  </form>
</div>

<script>
    const name = document.querySelector('#name');


    name.addEventListener('change', function(){
        fetch('/administrator/category/' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('tric-file-accept', function(e){
        e.preventDefault();
    })

    // function previewImage(){
    // const image = document.querySelector('#image');
    // const imgPreview = document.querySelector('.img-preview');

    // imgPreview.style.display='block';

    // const oFReader = new FileReader();
    // oFReader.readAsDataURL(image.files[0]);

    // oFReader.onload = function(oFREvent){
    //     imgPreview.src = oFREvent.target.result;
    // }
    // }


</script>
@endsection
