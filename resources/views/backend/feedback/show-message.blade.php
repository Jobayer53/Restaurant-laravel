@extends('backend.layouts.app')
@section('title')
Feedback
@endsection

@section('content')
<div class="page-titles">
    <h4>Feedback</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('feedback.index') }}">Feedback</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Message</a></li>
    </ol>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <p class=" text-muted">NAME: <span class="fw-normal text-black"> {{ $feedback->name }}</span></p>
                <p class=" text-muted">EMAIL: <span class="fw-normal text-black"> {{ $feedback->email }}</span></p>
            </div>
            <div class="card-body">
                <p class=" text-muted">MESSAGE: <span class="fw-normal text-black"> {{ $feedback->message }}</span></p>
            </div>
        </div>
    </div>
</div>
@endsection
