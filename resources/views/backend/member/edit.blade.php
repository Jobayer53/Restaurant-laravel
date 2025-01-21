@extends('backend.layouts.app')
@section('title')
    Members
@endsection
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<div class="page-titles">
    <h4>Members</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('member.index') }}">Members</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update</a></li>
    </ol>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Member</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('member.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="name" class="form-label">  Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $member->name }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="name" class="form-label">  Title</label>
                            <input type="text" class="form-control" name="title" id="" placeholder="Title" value="{{ $member->title }}">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"> Description</label>

                        <textarea  class="form-control" cols="30" rows="5" name="description"  placeholder="description">{{ $member->description }}
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
                        <p class="text-primary mt-3" style="font-size: 12px;">Current Image:</p>
                        <img src="{{ asset('uploads/member/'.$member->image) }}" class="img-fluid" alt="">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Social </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('memberSocial.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <button type="button"  data-value="fa-facebook" class="btn btn-light icon-btn"><i class="fa fa-facebook"></i></button>
                        <button type="button"  data-value="fa-youtube" class="btn btn-light icon-btn"><i class="fa fa-youtube"></i></button>
                        <button type="button"  data-value="fa-twitter" class="btn btn-light icon-btn"><i class="fa fa-twitter"></i></button>
                        <button type="button"  data-value="fa-instagram" class="btn btn-light icon-btn"><i class="fa fa-instagram"></i></button>

                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="member_id" value="{{ $member->id }}">
                        <input type="text" name="social" readonly class="form-control" id="icon-value" required>
                        @error('social')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" name="link"  class="form-control" placeholder="Link" required >
                        @error('link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Social List </h4>
            </div>
            <div class="card-body">
                <table class="table primary-table-bordered">
                    <thead class="thead-primary">
                        <tr>
                            <th>SL</th>
                            <th>Icon</th>
                            <th>Link</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($member->social as  $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td><i class="fa {{ $data->social }}"></i></td>
                                <td>{{ $data->link }}</td>
                                <td>
                                    <div class="d-flex">

                                        <form action="{{ route('memberSocial.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this social link?');">
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
<div class="row mt-5">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Skills </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('memberSkill.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="member_id" value="{{ $member->id }}">
                        <input type="text" name="skill" class="form-control"  required placeholder="Skill">
                        @error('skill')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="number" min="0" name="level"  class="form-control" placeholder="Level" required >
                        @error('level')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Skill List </h4>
            </div>
            <div class="card-body">
                <table class="table primary-table-bordered">
                    <thead class="thead-primary">
                        <tr>
                            <th>SL</th>
                            <th>Skill</th>
                            <th>Level</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($member->skill as  $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $data->skill }}</td>
                                <td>{{ $data->level }}</td>
                                <td>
                                    <div class="d-flex">

                                        <form action="{{ route('memberSkill.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this skill?');">
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
<div class="row mt-5">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Thumbnails </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('memberThumbnail.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="member_id" value="{{ $member->id }}">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control"  required placeholder="">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Thumbnails  </h4>
            </div>
            <div class="card-body">
                @foreach ($member->thumbnail as $data )
                <div class="me-3" style="display: ruby">

                    <img src="{{ asset('uploads/member/thumbnail/'.$data->image) }}" class="img-fluid " style="width: 15%" alt="">
                    <div class="">
                        <form action="{{ route('memberThumbnail.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this image?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn  shadow btn-xs sharp"><i class="fa fa-trash text-danger  "></i></button>
                        </form>
                    </div>
                </div>


                    @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script>
        $(document).ready(function(){
            let input = $('#icon-value');

            $('.icon-btn').on('click',function(){
                let value = $(this).data('value');
                input.val(value);
            })
        });
    </script>
@endsection
