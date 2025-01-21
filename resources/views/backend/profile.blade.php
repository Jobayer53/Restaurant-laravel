@extends('backend.layouts.app')
@section('title')
    Profile
@endsection
@section('content')
    <div class="page-titles">
        <h4>Profile</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo"></div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">
                            <img src="{{ asset('backend/images/profile/profile.png') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h4 class="text-primary mb-0">{{ auth()->user()->name }}</h4>
                                <p>Designer / Developer</p>
                            </div>
                            <div class="profile-email px-2 pt-2">
                                <h4 class="text-muted mb-0">{{ auth()->user()->email }}</h4>
                                <p>Email</p>
                            </div>
                            {{-- <div class="dropdown ms-auto">
                                <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                    <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to close friends</li>
                                    <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                    <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-xl-12">
            <div class="card h-auto">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link active show">Setting</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="profile-settings" class="tab-pane fade active show">
                                    <div class="pt-3">
                                        <div class="settings-form">
                                            <h4 class="text-primary mt-3">Account Setting</h4>
                                            <form action="{{ route('profile.update') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Name</label>
                                                        <input name="name" type="text" placeholder="" value="{{ auth()->user()->name }}" class="form-control" required>
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Email</label>
                                                        <input name="email" type="email" placeholder="" value="{{ auth()->user()->email }}" class="form-control">
                                                        @error('email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Password <span style="font-size: 10px">(Leave empty if not change)</span></label>
                                                        <input name="password" type="password" placeholder="Password" class="form-control">
                                                        @error('password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Confirm Password <span style="font-size: 10px">(Leave empty if not change)</span></label>
                                                        <input name="password_confirmation" type="password" placeholder=" Confirm Password" class="form-control">
                                                    </div>
                                                </div>



                                                <button class="btn btn-primary float-end" type="submit"> Update</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
