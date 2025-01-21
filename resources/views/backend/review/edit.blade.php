@extends('backend.layouts.app')
@section('title')
    Review
@endsection
@section('style')
<link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">

@endsection
@section('content')
<div class="page-titles">
    <h4>Review</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('review.index') }}">Review </a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update </a></li>

    </ol>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Custom Review</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('review.update', $review->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class=" row mb-3">
                        <div class="col-6">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $review->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Rate Star</label>
                            <input type="number" min="0" max="5" class="form-control" name="rating" placeholder="Rate Star" value="{{ $review->rating }}" >
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" >
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <p class="text-primary mt-3" style="font-size: 12px;">Current Image:</p>
                        <img src="{{ asset('uploads/review/'.$review->image) }}" class="img-fluid w-25" alt="">

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Message</label>
                        <Textarea class="form-control" name="message" cols="30" rows="5">{{ $review->message }}</Textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class=" btn btn-primary float-end">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')

<script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script>
@endsection
