@extends('backend.layouts.app')
@section('title')
    Menu Category
@endsection
@section('content')
<div class="page-titles">
    <h4>Menu Category</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Menu Category</a></li>
    </ol>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Menu Category</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('menuCategory.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 ">
                        <label for="name" class="form-label"> Category Image </label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Category Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name">
                        @error('name')
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
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Menu Category List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table primary-table-bordered">
                        <thead class="thead-primary">
                            <tr>
                                <th>SL</th>
                                <th>Category Image</th>
                                <th>Category Name</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as  $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/menu/category/' . $category->image) }}" alt="" width="100">
                                    </td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('menuCategory.edit', $category->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <form action="{{ route('menuCategory.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
