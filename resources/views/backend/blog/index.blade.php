@extends('backend.layouts.app')
@section('title')
    Blog
@endsection
@section('style')
<link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">

@endsection
@section('content')
<div class="page-titles">
    <h4>Blog</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('blog.index') }}">Blog </a></li>

    </ol>
</div>

<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('blog.create') }}" class="btn btn-primary"> Create Blog</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Blog List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="display min-w850">
                        <thead class="thead-primary">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title </th>
                                <th>Author</th>
                                <th>Date</th>
                                <th width="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as  $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/blog/' . $data->image) }}" alt="" width="100">
                                    </td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->author }}</td>
                                    <td>{{ $data->created_at->format('M-d-Y') }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('blog.edit', $data->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <form action="{{ route('blog.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');">
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
@section('script')

<script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script>
@endsection
