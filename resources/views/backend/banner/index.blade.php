@extends('backend.layouts.app')
@section('title')
    Banner
@endsection
@section('content')
<div class="page-titles">
    <h4>Banner</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Banner</a></li>
    </ol>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add or Update Banner Information</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row ">
                        <div class="col-6">
                            <label for="name" class="form-label">First Title  </label>
                            <input type="text" class="form-control" name="first_title" id="" placeholder="First Title" value="{{ $banner?->first_title }}">
                            @error('first_title')

                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="name" class="form-label">Second Title  </label>
                            <input type="text" class="form-control" name="second_title" id="" placeholder="Second Title" value="{{ $banner?->second_title }}">
                            @error('second_title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row ">
                        <div class="col-6">
                            <label for="name" class="form-label"> Short Description</label>
                            <textarea class="form-control" cols="30" rows="2" name="short_description" id="" placeholder="Short Description">{{ $banner?->short_description }}
                            </textarea>
                            @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="name" class="form-label">Price  </label>
                            <input type="number" class="form-control" name="price" id="" placeholder="Price" value="{{ $banner?->price }}">
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 ">
                        <label for="name" class="form-label"> Banner Image </label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <p class="text-primary mt-3" style="font-size: 12px;">Current Image:</p>
                        <img src="{{ asset('uploads/banner/'.$banner?->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">{{ $banner?->id ? 'Update' : 'Add' }} </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
