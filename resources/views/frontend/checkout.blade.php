
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Checkout</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">
<style>
    .card:hover {
        transform:none;
        box-shadow: none;
    }
</style>

</head>
  <body>

<section class=" header-wrapper">
    <div class="container-fluid">
        <div class="container">
            @include('frontend.layouts.nav-header')
        </div>
        <div class="container">
            <h1 class="page-title fw-bold">MY CHECKOUT</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold " ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">My Checkout</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="category-section mb-5" style="height: auto;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" style="box-shadow: none !important;">
                            <div class="card-header" style="background-color: #f9f5f2;">
                                <h3 class="fw-bold card-title">Billing Details</h3>
                            </div>
                            <div class="card-body" style="background-color: #f9f5f2;">
                                <form id="billing" action="{{ route('order-place') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label for="" class="form-label fw-semibold">First Name <span class="text-danger"   >*</span></label>
                                            <input name="first_name" type="text" class="form-control" placeholder="First Name">
                                            @error('first_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label for="" class="form-label fw-semibold">Last Name <span class="text-danger"   >*</span></label>
                                            <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                                            @error('last_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Company Name (optional)</label>
                                        <input name="company_name" type="text" class="form-control" placeholder="Company Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Country / Region <span class="text-danger"   >*</span></label>
                                        <select name="country" class="form-select" id="country">
                                            <option value="">Select a country / region…</option>
                                            @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('country')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Street Address <span class="text-danger"   >*</span></label>
                                        <input name="address" type="text" class="form-control" placeholder="House number and street name">
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input name="apartment" type="text" class="form-control mt-2" placeholder="Apartment, suite, unit etc. (optional)">
                                        @error('apartment')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Town / City <span class="text-danger"   >*</span></label>
                                        <input name="city" type="text" class="form-control" placeholder="Town / City">
                                        @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">State  <span class="text-danger"   >*</span></label>
                                        <select name="state" class="form-select" id="states">
                                            <option value="">Select a state…</option>

                                        </select>
                                        @error('state')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Postcode / ZIP <span class="text-danger"   >*</span></label>
                                        <input  name="postcode" type="text" class="form-control" placeholder="Postcode / ZIP">
                                        @error('postcode')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Phone <span class="text-danger"   >*</span></label>
                                        <input name="phone" type="text" class="form-control" placeholder="Phone">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Email Address <span class="text-danger"   >*</span></label>
                                        <input name="email" type="email" class="form-control" placeholder="Email Address">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="card" style="box-shadow: none !important;">
                            <div class="card-header" style="background-color: #f9f5f2;">
                                <h3 class="fw-bold card-title">Additional Information</h3>
                            </div>
                            <div class="card-body" style="background-color: #f9f5f2;">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Order Notes (optional)</label>
                                        <textarea name="notes" id="" cols="30" rows="2" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                     
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" style="box-shadow: none !important;">
                            <div class="card-header" style="background-color: #f9f5f2;">
                                <h3 class="fw-bold card-title">Your Order</h3>
                            </div>
                            <div class="card-body" style="background-color: #f9f5f2;">
                                <div class="mb-0 d-flex ">
                                    <p class="fw-semibold">Product</p>
                                    <p class="fw-semibold ms-auto">Total</p>
                                </div>
                                @php
                                    $subtotal = null;
                                @endphp
                                @foreach ($productsWithQuantities as $product )


                                <div class="mb-2 d-flex border-bottom">
                                    <p style="font-size: 14px;">{{ $product->name }}  <span class="fw-semibold">x {{ $product->quantity }}</span></p>
                                    <p class="ms-auto" style="font-size: 14px;"> ${{ $product->price }}</p>
                                </div>
                                @php
                                    $subtotal += $product->price*$product->quantity;
                                @endphp
                                @endforeach

                                <div class="mb-2 d-flex ">
                                    <p class="fw-semibold" style="font-size: 14px;">Subtotal </p>
                                    <p class="ms-auto fw-semibold" style="font-size: 14px;"> ${{ $subtotal }}</p>
                                </div>
                                <div class="mb-2 d-flex">
                                    <p class="fw-semibold" style="font-size: 14px;">Total</p>
                                    <p class="ms-auto fw-semibold" style="font-size: 14px;"> ${{ $subtotal }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card" style="background-color: #f9f5f2;">
                            <div class="card-body">
                                <p>Have a coupon? <a href="#" class="text-danger"> Click here to enter your coupon code</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card" style="background-color: #f9f5f2;">
                            <div class="card-body">
                               <button id="placeOrder"  class="btn btn-dark text-white w-100">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










@include('frontend.layouts.footer')




    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#placeOrder').click(function(){
                $('#billing').submit();
            });
            $('#country').on('change',function(){
                let country = $(this).val();
                $.ajax({
                    url: '/getStates',
                    method: 'POST',
                    data: {
                        country: country,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response){
                        $('#states').empty();
                        $('#states').append('<option value="">Select a state / region…</option>');
                        $.each(response, function(index, state){
                            $('#states').append('<option value="'+state.id+'">'+state.name+'</option>');
                        });

                    }
                });
            });

        });
    </script>

  </body>
</html>
