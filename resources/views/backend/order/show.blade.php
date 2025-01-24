@extends('backend.layouts.app')
@section('title')
    Order
@endsection
@section('style')



@endsection
@section('content')
<div class="page-titles">
    <h4>Order</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('order.index') }}">Order</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Order Item</a></li>
    </ol>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Order Details</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <p >First Name: {{$order->first_name}}</p>
                    </div>
                    <div class="col-lg-4">
                        <p >last Name: {{$order->last_name}}</p>
                    </div>
                    <div class="col-lg-4">
                        <p >Company Name: {{$order->company_name}}</p>
                    </div>
                    <div class="col-lg-4">
                        <p >Country: {{$order->country_name->name}}</p>
                    </div>
                    <div class="col-lg-4">
                        <p >Street: {{$order->address}}</p>
                    </div>
                    <div class="col-lg-4">
                        <p >Apartment: {{$order->apartment}}</p>
                    </div>
                    <div class="col-lg-4">
                        <p >Town: {{$order->city}}</p>
                    </div>
                    <div class="col-lg-4">
                        <p >State: {{$order->state_name->name}}</p>
                    </div>
                    <div class="col-lg-4">
                        <p >POSTCODE: {{$order->postcode}}</p>
                    </div>
                    <div class="col-lg-4">
                        <p >Phone: {{$order->phone}}</p>
                    </div>
                    <div class="col-lg-4">
                        <p >Email: {{$order->email}}</p>
                    </div>
                    <div class="col-lg-12">
                        <p>Note: {{ $order->notes }}</p>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Item List</h4>
                @php
                $total = 0;
            @endphp
                <h4 class="card-title">Total: {{ $total }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class=" table ">
                        <thead class="thead-primary">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Subtotal</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderProduct as  $odr)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $odr->product->name }}</td>
                                    <td>{{ $odr->quantity }}</td>
                                    <td>{{ $odr->price }}</td>
                                    <td>{{ $odr->subtotal}}</td>
                                    @php
                                        $total += $odr->subtotal;
                                    @endphp


                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                    <p class="float-end">Total: {{ $total }}</p>
                    <form action="{{ route('order.update',$order->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="" class="form-label"> Status</label>
                        <select name="status" id="" class="form-control">
                            <option  > Updte Status</option>
                            <option {{ $order->status == 'pending' ? 'selected' : '' }}  value="pending">Pending</option>
                            <option {{ $order->status == 'shipped' ? 'selected' :'' }} value="shipped">Shipped</option>
                            <option {{ $order->status == 'deliverd' ? 'selected' :'' }} value="deliverd">Deliverd</option>
                            <option {{ $order->status == 'cancel' ? 'selected' :'' }} value="cancel">Cancel</option>
                        </select>
                        <button type="submit" class=" mt-3 float-end btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')



@endsection
