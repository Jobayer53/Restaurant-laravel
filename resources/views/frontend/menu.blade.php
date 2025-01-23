
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MENU</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">


</head>
  <body>

<section class=" header-wrapper">
    <div class="container-fluid">
        <div class="container">
         @include('frontend.layouts.nav-header')
        </div>
        <div class="container">
            <h1 class="page-title fw-bold">MENU</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold " ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">Menu</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="category-section mb-5" style="height: auto;">
    <div class="container">
        @forelse ($categories as $key =>  $category )
            @if($loop->iteration % 2 == 0)
             <div class="row align-items-center" >
                    <div class="col-md-6">
                        <div class="pizza-menu-container">
                            <h2 class="fw-bold mb-3 ms-3" style="font-size: 40px;">{{ $category->name }}</h2>
                                @foreach($category->items as $item)
                            <div class="mb-0 d-flex ">
                                <img src="{{ asset('uploads/menu/item/'.$item->image) }}" class="img-fluid w-25 d-inline" alt="">
                                <div>
                                    <h5 class="fw-bold mt-4">{{ $item->name }} <span class="fw-normal"> - - - - - - - </span>${{ $item->price }}</h5>
                                    <p style="font-size: 14px;">{{ $item->description }}</p>
                                </div>
                            </div>
                                @endforeach



                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('uploads/menu/category/'.$category->image) }}" alt="Pizza" class="pizza-image img-fluid">
                        <a href="{{ route('products') }}" class="btn  btn-warning mt-4 ">Order Now</a>
                    </div>
                </div>
            @else
                <div class="row align-items-center" @if($key == 0) style="margin-top: 100px;" @endif>
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('uploads/menu/category/'.$category->image) }}" alt="Pizza" class="pizza-image img-fluid">
                        <a href="{{ route('products') }}" class="btn  btn-warning mt-4 ">Order Now</a>
                    </div>
                    <div class="col-md-6">
                        <div class="pizza-menu-container">
                            <h2 class="fw-bold mb-3 ms-3" style="font-size: 40px;">Pizza</h2>
                                @foreach ($category->items as $item )
                                <div class="mb-0 d-flex ">
                                    <img src="{{ asset('uploads/menu/item/'.$item->image) }}" class="img-fluid w-25 d-inline" alt="">
                                    <div>
                                        <h5 class="fw-bold mt-4"> {{ $item->name }} <span class="fw-normal"> - - - - - - - </span>${{ $item->price }}</h5>
                                        <p style="font-size: 14px;">{{ $item->description }}</p>
                                    </div>
                                </div>
                                @endforeach




                        </div>
                    </div>
                </div>
            @endif
        @empty

        @endforelse

    </div>
</section>

<section class="delivery-section" style="height: auto;">
    <div class="container">
        <div class="row" style="    margin-top: 85px;">
            <div class="col-lg-5 ">
                <p class="color-yellow font-dancing">Fast Delivery</p>
                <h1 class="font-oswald_700 mb-3" style="font-weight: 700!important;">Your Favorite Pizza,</h1>
                <h1 class=" color-yellow font-oswald_700 mb-3" style="font-weight: 700!important;">On the Way!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ipsam iusto numquam dolor fugiat soluta sint, quasi veritatis modi.</p>
                <div class="row justify-content-center g-4">
                    <!-- Delivery in 30 minutes -->
                    <div class="col-12 col-md-4">
                        <div class="text-center">
                            <div class="service-icon">
                               <img src="{{ asset('frontend/asset/image/logo_delivery.png') }}" class="img-fluid" alt="">
                            </div>
                            <h6 class="service-text">
                                Delivery in 30<br>minutes
                            </h6>
                        </div>
                    </div>

                    <!-- Free shipping -->
                    <div class="col-12 col-md-4">
                        <div class="text-center">
                            <div class="service-icon">
                                <img src="{{ asset('frontend/asset/image/logo_free.png') }}" class="img-fluid" alt="">
                            </div>
                            <h6 class="service-text" style="margin-top: 11px;">
                                Free shipping<br>from 75$
                            </h6>
                        </div>
                    </div>

                    <!-- Delivery on doorstep -->
                    <div class="col-12 col-md-4">
                        <div class="text-center">
                            <div class="service-icon">
                                <img src="{{ asset('frontend/asset/image/logo_pizzapis.png') }}" class="img-fluid" alt="">
                            </div>
                            <h6 class="service-text" style="margin-top: 9px;">
                                Delivery on your<br>doorstep
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 ">
                <img src="{{ asset('frontend/asset/image/pipirima_pizzabox.png') }}" class="img-fluid" alt="" style="    float: right;width: 100%;margin-right: -60px;">
            </div>
        </div>
    </div>
</section>
<section class="most-popular-section" style="margin-top: 56px; height: auto;">
    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <div class="col-lg-12 text-center">
                <p class="  color-yellow font-dancing">Any Day Offers</p>
                <h1 class=" font_oswald_600 text-dark  mb-3">Discount Product </h1>
            </div>
            <div class="row g-4">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="product-card">
                            <img src="{{ asset('uploads/product/'.$product->image) }}" alt="Meaty Legend" class="img-fluid">
                            <h5>{{ $product->name }}</h5>
                            <span class="old-price ">${{ $product->discount_price }}</span>
                            <span class="price ">${{ $product->price }}</span>
                            <button class="btn mt-3 btn-outline-warning">ADD TO CART</button>
                        </div>
                    </div>
                @endforeach


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
