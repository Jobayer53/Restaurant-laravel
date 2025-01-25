@extends('backend.layouts.app')
@section('title')
    Timeline
@endsection

@section('content')
<div class="page-titles">
    <h4>Timeline</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('timeline.index') }}">Timeline </a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update </a></li>

    </ol>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Timeline</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('timeline.update', $timeline->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">Year</label>
                            <input type="text" class="form-control" name="year" id="" placeholder="Enter Year" value="{{ $timeline->year }}">
                            @error('year')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="" placeholder="Enter Title" value="{{ $timeline->title }}">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $timeline->description }}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="" placeholder="Enter Image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <p class="text-primary mt-3" style="font-size: 12px;">Current Image:</p>
                            <img src="{{ asset('uploads/timeline/'.$timeline->image) }}" class="img-fluid" alt="">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn float-end btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')


@endsection
