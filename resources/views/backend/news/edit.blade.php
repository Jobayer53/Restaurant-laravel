@extends('backend.layouts.app')
@section('title')
    News
@endsection
@section('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="page-titles">
    <h4>News</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('news.index') }}">News </a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update</a></li>
    </ol>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update News</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="name" class="form-label"> Title </label>
                            <input type="text" class="form-control" name="title" id="" placeholder="News Title" value="{{ $news->title }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="name" class="form-label"> Author </label>
                            <input type="text" class="form-control" name="author"  placeholder="News Author" value="{{ $news->author }}">
                            @error('author')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label"> Description  </label>
                        <textarea name="description" id="summernote" class="form-control" cols="30" rows="10">{{ $news->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name"  class="form-label"> Image </label>
                        <input type="file" class="form-control" name="image" id="" >
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <img src="{{ asset('uploads/news/'.$news->image) }}" class="mt-2" width="100" alt="">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Update</button>
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
