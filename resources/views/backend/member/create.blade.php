@extends('backend.layouts.app')
@section('title')
    Members
@endsection
@section('content')
<div class="page-titles">
    <h4>Members</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('member.index') }}">Members</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Create</a></li>
    </ol>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Member</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="name" class="form-label">  Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="name" class="form-label">  Title</label>
                            <input type="text" class="form-control" name="title" id="" placeholder="Title">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Description</label>

                        <textarea  class="form-control" cols="30" rows="5" name="description"  placeholder="description">
                        </textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="name" class="form-label">  Image </label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="">
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
