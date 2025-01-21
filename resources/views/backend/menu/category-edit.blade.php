@extends('backend.layouts.app')
@section('title')
Menu Category
@endsection
@section('content')
<div class="page-titles">
    <h4>Menu Category</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Menu Category Update</a></li>
    </ol>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Menu Category</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('menuCategory.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <div class="mb-3 ">
                        <label for="name" class="form-label"> Category Image </label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <p class="text-primary mt-3" style="font-size: 12px;">Current Image:</p>
                        <img src="{{ asset('uploads/menu/category/'.$category->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Category Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name" value="{{ $category->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
