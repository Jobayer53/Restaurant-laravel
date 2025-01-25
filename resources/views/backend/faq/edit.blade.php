@extends('backend.layouts.app')
@section('title')
FAQ
@endsection

@section('content')
<div class="page-titles">
    <h4>FAQ</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('faq.index') }}">FAQ </a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update </a></li>
    </ol>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update FAQ </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('faq.update', $faq->id) }}" method="post" >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Type</label>
                       <select name="type" id="" class="form-control">
                           <option {{ $faq->type == 'faq' ? 'selected' : ''  }} value="faq">FAQ</option>
                        <option {{ $faq->type == 'delivery' ? 'selected' : '' }} value="delivery">Delivery</option>
                       </select>
                        @error('type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Question</label>
                        <input type="text" class="form-control" name="question" placeholder="Question" value="{{ $faq->question }}" >
                        @error('question')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Answer</label>
                        <textarea name="answer" placeholder="Answer" class="form-control" id="" cols="30" rows="5">{{ $faq->answer }}</textarea>
                        @error('answer')
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

