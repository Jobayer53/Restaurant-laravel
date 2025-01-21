@extends('backend.layouts.app')
@section('title')
    Feedback
@endsection
@section('style')
<link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">


@endsection
@section('content')
<div class="page-titles">
    <h4>Feedback</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Feedback</a></li>
    </ol>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Feedback List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="display min-w850">
                        <thead class="thead-primary">
                            <tr>
                                <th>#</th>
                                <th>Time</th>
                                <th>Name</th>
                                <th>Email</th>

                                <th width="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedbacks as  $feedback)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $feedback->created_at->diffForHumans() }}</td>
                                    <td>{{ $feedback->name }}</td>
                                    <td>{{ $feedback->email }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('feedback.show', $feedback->id) }}" class="btn btn-{{ $feedback->status == 1 ? 'primary': 'light' }} shadow btn-xs sharp me-1"><i class="fa fa-eye    "></i></a>
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
