@extends('backend.layouts.app')
@section('title')
    Product
@endsection
@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

@endsection
@section('content')
<div class="page-titles">
    <h4>Product</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('product.index') }}">Product </a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Create</a></li>
    </ol>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Product</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 ">
                        <label for="name" class="form-label"> Select Category </label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('cateogry_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="name" class="form-label"> Product Name </label>
                        <input type="text" class="form-control" name="name" id="" placeholder="Product Name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="name" class="form-label"> Short Description </label>
                     <textarea name="short_desc" id="" placeholder="Short Description" class="form-control" cols="30" rows="5"></textarea>
                        @error('short_desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class=" row mb-3 ">
                        <div class="col-6">
                            <label for="name" class="form-label"> Price </label>
                            <input type="number" class="form-control" name="price" id="" placeholder="Price">
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="name" class="form-label"> Tags  <span style="font-size: 10px">(separate by comma)</span> </label>
                            <input type="text" class="form-control" name="tags" id="" placeholder="pizza, burger, fast food">
                            @error('tags')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Description  </label>
                        <textarea name="desc" id="summernote" class="form-control" cols="30" rows="10"></textarea>
                        @error('desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Image  <span style="font-size: 10px">(use white or transparent background)</span></label>
                        <input type="file" class="form-control" name="image" id="" >
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Create</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('summernote_script')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
<script>
    $('#summernote').summernote({
      placeholder: 'Write product description.....',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>

@endsection
