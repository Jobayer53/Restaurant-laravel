@extends('backend.layouts.app')
@section('title')
    Members
@endsection
@section('content')
<div class="page-titles">
    <h4>Members</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Members</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12 mb-3">
        <a href="{{ route('member.create') }}" class="btn btn-primary"> Create Member</a>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Member List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table primary-table-bordered">
                        <thead class="thead-primary">
                            <tr>
                                <th>SL</th>
                                <th>Member Image</th>
                                <th>Member Name</th>
                                <th>Title</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as  $member)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/member/' . $member->image) }}" alt="" width="100">
                                    </td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->title }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('member.edit', $member->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>

                                            <form action="{{ route('member.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member? ');">
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
