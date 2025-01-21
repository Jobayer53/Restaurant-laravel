@extends('backend.layouts.app')
@section('title')
    Menu Item
@endsection

@section('content')
<div class="page-titles">
    <h4>Menu Item</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('menuItem.index') }}">Menu Item </a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update</a></li>
    </ol>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Menu Item</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('menuItem.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 ">
                        <label for="name" class="form-label"> Select Menu Category </label>
                        <select name="menu_category_id" id="" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option {{ $category->id == $item->menu_category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('cateogry_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="name" class="form-label"> Item Name </label>
                        <input type="text" class="form-control" name="name" id="" placeholder="Item Name" value="{{ $item->name }}" >
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 ">
                        <label for="name" class="form-label"> Short Description </label>
                     <textarea name="short_desc" id="" placeholder="Short Description" class="form-control" cols="30" rows="5">{{ $item->description }}</textarea>
                        @error('short_desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class=" row mb-3 ">
                        <div class="col-12">
                            <label for="name" class="form-label"> Price </label>
                            <input type="number" min="0" class="form-control" name="price" id="" placeholder="Price" value="{{ $item->price }}">
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label"> Image  <span style="font-size: 10px">(use white or transparent background)</span></label>
                        <input type="file" class="form-control" name="image" id="" >
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <p class="text-primary mt-3" style="font-size: 12px;">Current Image:</p>
                        <img src="{{ asset('uploads/menu/item/'.$item->image) }}" class=" w-25 img-fluid" alt="">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

