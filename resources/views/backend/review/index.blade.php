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
        <li class="breadcrumb-item active"><a href="{{ route('review.index') }}">Review </a></li>

    </ol>
</div>

<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('review.create') }}" class="btn btn-primary"> Add Custom Reviews</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Review List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="display min-w850">
                        <thead class="thead-primary">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name </th>
                                <th>Star</th>
                                <th>Message</th>
                                <th width="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as  $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/review/' . $data->image) }}" alt="" width="100">
                                    </td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->rating }}</td>
                                    <td>{{ $data->message    }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('review.edit', $data->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <form action="{{ route('review.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this review?');">
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
