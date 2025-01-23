
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">
    <style>
    .update-card:hover {
        transform:none;
        box-shadow: none;
    }
    .update-card{
        border: none;
        background-color: #f9f5f2;
        border-radius: 0;
    }
</style>
    </style>

</head>
  <body>

<section class=" header-wrapper">
    <div class="container-fluid">
        <div class="container">
          @include('frontend.layouts.nav-header')
        </div>
        <div class="container">
            <h1 class="page-title fw-bold">CART</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold" ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>

    </div>
</section>

<section class="h-auto "  style="margin-top: 100px;">
    <div class="container mb-5 ">
        <div class="row">
            <div class="col-lg-8">
                <table class="table mb-0" style="background-color: #f9f5f2;">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th class="fw-normal" scope="col">Product</th>
                            <th class="fw-normal" scope="col">Price</th>
                            <th class="fw-normal" scope="col">Quantity</th>
                            <th class="fw-normal" scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form class="quantity-form" action="{{ route('update-to-cart') }}" method="post">
                            @csrf
                            @php
                                $subtotal = null;
                            @endphp
                        @foreach ($productsWithQuantities as $product )
                        <tr>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="{{ route('delete-to-cart', $product->id) }}" class="btn ">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                            <td style="width: 12%; text-align: center; vertical-align: middle;">
                                <img src="{{ asset('uploads/product/'.$product->image) }}" class="img-fluid w-100" alt="">
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                    {{ $product->name }}
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                $ <span class="price">

                                    {{ $product->price }}
                                </span>
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <input type="number" name="quantity{{ $product->id }}" value="{{ $product->quantity }}" min="1" class="form-control quantity">
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                $ <span class="subtotal">
                                    {{ $product->subtotal }}
                                    @php
                                        $subtotal += $product->subtotal
                                    @endphp
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </form>



                    </tbody>

                </table>
                <div class="card update-card">
                    <div class="card-body">
                        <button id="updateButton" class="btn btn-warning text-dark"> UPDATE CART   </button>
                    </div>
                </div>
                <div class="card update-card mt-3">
                    <div class="card-body">
                        <div class="input-group p-3">
                            <input type="text" class="form-control" id="couponCode" placeholder="Enter coupon code">
                            <button class="btn btn-warning text-dark" type="button">Apply Coupon</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="card update-card">
                    <div class="ps-3 mt-1 ">
                        <h5 class="card-title fw-semibold">Cart Totals</h5>
                    </div>
                    <div class="card-body ">
                        <div class=" d-flex justify-content-between border-bottom">

                            <p class="card-title text-secondary" style="font-size: 16px;">Subtotal:</p>
                            <p class="card-title text-secondary" style="font-size: 16px;"> ${{ $subtotal }}</p>
                        </div>
                        <div class=" d-flex justify-content-between ">

                            <p class="card-title text-secondary" style="font-size: 16px;">Total:</p>
                            <p class="card-title text-secondary" style="font-size: 16px;"> ${{ $subtotal }}</p>
                        </div>

                        <a  href="{{ route('checkout') }}" class="btn btn-dark text-white w-100 mt-3">Proceed to Checkout</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<section class="newsletter-section">
    <div class="container" style="background-color: #ffa500; border-radius: 5px;">
        <div class="row " style="padding: 25px;">
            <div class="col-lg-12 ">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="mt-2">Subscribe to our newsletter</h3>
                    </div>
                    <div class="col-lg-6">

                        <div class="subscribe-input d-flex gap-2 mt-2">
                            <input type="email" class="form-control" placeholder="Email">
                            <button class="subscribe-btn">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Brand Column -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="footer-brand">BRAND NAME</div>
                <p class="footer-description">Lorem ipsum dolor, sit ame consectetur adipisicing elit.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-1 col-md-6 mb-4 mb-lg-0">
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Menu</a></li>

                </ul>
            </div>

            <!-- Contact Links -->
            <div class="col-lg-1 col-md-6 mb-4 mb-lg-0">
                <ul class="footer-links">
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </div>
            <div class="col-lg-1 col-md-6 mb-4 mb-lg-0">
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Working Hours -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 ">
                <div class="working-hours float-end">
                    <i class="fa fa-clock-o"></i>
                    <div class="">
                        <div>WORKING HOURS</div>
                        <div>7:00 - 24:00</div>
                    </div>
                </div>
            </div>

            <!-- Social Links -->
            <div class="col-lg-3 col-md-6">
                <div class="social-links text-center">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            let form = $('.quantity-form');
            $('#updateButton').on('click',function(){
                form.submit();
            });
            let input = $('.quantity');
            let price = $('.price');
            // console.log(subtotal.text());
            // subtotal.text(price.text() * input.val());
            // $(input).on('change',function(){
            //     let subtotal = $('.subtotal');
            //     let val = $(this).val();
            //     subtotal.text(val * price.text());

            // });
        });
    </script>
  </body>
</html>
