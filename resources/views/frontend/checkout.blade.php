
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
                                <form action="">
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label for="" class="form-label fw-semibold">First Name <span class="text-danger"   >*</span></label>
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="col-6">
                                            <label for="" class="form-label fw-semibold">Last Name <span class="text-danger"   >*</span></label>
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Company Name (optional)</label>
                                        <input type="text" class="form-control" placeholder="Company Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Country / Region <span class="text-danger"   >*</span></label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Select a country / region…</option>
                                            <option value="">Nigeria</option>
                                            <option value="">Ghana</option>
                                            <option value="">Kenya</option>
                                            <option value="">South Africa</option>
                                            <option value="">Tanzania</option>
                                            <option value="">Uganda</option>
                                            <option value="">Zambia</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Street Address <span class="text-danger"   >*</span></label>
                                        <input type="text" class="form-control" placeholder="House number and street name">
                                        <input type="text" class="form-control mt-2" placeholder="Apartment, suite, unit etc. (optional)">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Town / City <span class="text-danger"   >*</span></label>
                                        <input type="text" class="form-control" placeholder="Town / City">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">State  <span class="text-danger"   >*</span></label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Select a state…</option>
                                            <option value="">Nigeria</option>
                                            <option value="">Ghana</option>
                                            <option value="">Kenya</option>
                                            <option value="">South Africa</option>
                                            <option value="">Tanzania</option>
                                            <option value="">Uganda</option>
                                            <option value="">Zambia</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Postcode / ZIP <span class="text-danger"   >*</span></label>
                                        <input type="text" class="form-control" placeholder="Postcode / ZIP">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Phone <span class="text-danger"   >*</span></label>
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-semibold">Email Address <span class="text-danger"   >*</span></label>
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                </form>
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
                                        <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
                               <button class="btn btn-dark text-white w-100">PLACE ORDER</button>
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


  </body>
</html>
