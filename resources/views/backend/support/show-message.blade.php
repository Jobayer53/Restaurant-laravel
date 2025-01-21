@extends('backend.layouts.app')
@section('title')
Contact
@endsection
@section('style')
<link href="{{ asset('backend/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">


@endsection
@section('content')
<div class="page-titles">
    <h4>Contact</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('support.index') }}">Contact</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Message</a></li>
    </ol>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <p class=" text-muted">NAME: <span class="fw-normal text-black"> {{ $support->name }}</span></p>
                <p class=" text-muted">EMAIL: <span class="fw-normal text-black"> {{ $support->email }}</span></p>
            </div>
            <div class="card-body">
                <p class=" text-muted">MESSAGE: <span class="fw-normal text-black"> {{ $support->message }}</span></p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script>


@endsection
