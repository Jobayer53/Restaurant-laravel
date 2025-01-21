
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>

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
            <h1 class="page-title fw-bold">PRODUCTS</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold " ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">Shop</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="category-section mb-5" style="height: auto;">
    <div class="container mt-5">
        <p class="fw-semibold">PRODUCT CATEGORIES</p>

        <div class="row">
            <div class="col-lg-3 ">
                <div class="row shadow-sm">
                    @foreach ($cateogries as $data )
                        <div class="col-lg-6 ">
                            <div class="card shadow-sm my-2">
                                <div class="card-body">
                                    <a href="{{ route('category-product',$data->id) }}">

                                        <img src="{{ asset('uploads/category/'.$data->image) }}" class="image-fluid w-100" alt="">
                                    </a>
                                    <p class="fw-semibold mb-1 text-center">{{ $data->name }} ({{$data->products->count()}})</p>
                                </div>
                            </div>
                        </div>
                    @endforeach






                </div>
                <div class="row shadow-sm mt-2">
                    <div class="col-lg-12">
                        <div class="mt-4">
                            <h2>PRODUCT TAGS</h2>
                            <div class="d-flex flex-wrap">
                                <span class="badge bg-secondary m-1">Basingstoke</span>
                                <span class="badge bg-secondary m-1">Bullet</span>
                                <span class="badge bg-secondary m-1">Cake</span>
                                <span class="badge bg-secondary m-1">Caramel</span>
                                <span class="badge bg-secondary m-1">Cheese</span>
                                <span class="badge bg-secondary m-1">Cherry</span>
                                <span class="badge bg-secondary m-1">Chicken</span>
                                <span class="badge bg-secondary m-1">Chocolate</span>
                                <span class="badge bg-secondary m-1">Coconut</span>
                                <span class="badge bg-secondary m-1">Deep</span>
                                <span class="badge bg-secondary m-1">Dish</span>
                                <span class="badge bg-secondary m-1">Sweet</span>
                                <span class="badge bg-secondary m-1">Egg</span>
                                <span class="badge bg-secondary m-1">Garlic</span>
                                <span class="badge bg-secondary m-1">Lemon</span>
                                <span class="badge bg-secondary m-1">Milk</span>
                                <span class="badge bg-secondary m-1">Mozzarella</span>
                                <span class="badge bg-secondary m-1">Mushroom</span>
                                <span class="badge bg-secondary m-1">Needle</span>
                                <span class="badge bg-secondary m-1">Onion</span>
                                <span class="badge bg-secondary m-1">Pan</span>
                                <span class="badge bg-secondary m-1">Parmesan</span>
                                <span class="badge bg-secondary m-1">Pastey</span>
                                <span class="badge bg-secondary m-1">Proteom</span>
                                <span class="badge bg-secondary m-1">Pizza</span>
                                <span class="badge bg-secondary m-1">Pasta</span>
                                <span class="badge bg-secondary m-1">Pumpkin</span>
                                <span class="badge bg-secondary m-1">Papadense</span>
                                <span class="badge bg-secondary m-1">Red onion</span>
                                <span class="badge bg-secondary m-1">Roll</span>
                                <span class="badge bg-secondary m-1">Sausage</span>
                                <span class="badge bg-secondary m-1">Cheery Roll</span>
                                <span class="badge bg-secondary m-1">Chicago Fire</span>
                                <span class="badge bg-secondary m-1">Chicken Salad</span>
                                <span class="badge bg-secondary m-1">Shrimp Soup</span>
                                <span class="badge bg-secondary m-1">Spicy</span>
                                <span class="badge bg-secondary m-1">Sugar</span>
                                <span class="badge bg-secondary m-1">Tomato</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row shadow-sm mt-2">
                    <p class="fw-semibold my-3">SHOPPING CART</p>
                    <a href="#" class="btn btn-light">$00.0 <i class="text-warning fa fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row g-4">
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="product-card">
                                <a href="{{ route('single-product', $product->id) }}">

                                    <img src="{{ asset('uploads/product/'.$product->image) }}" alt="Meaty Legend" class="img-fluid">
                                </a>
                                <h5>{{ $product->name }}</h5>
                                @if($product->discount_price)
                                <span class="old-price ">asdfd</span>
                                @endif
                                <span class="price @if (!$product->discount_price) d-block @endif">${{ $product->price }}</span>


                                <button class="btn mt-3 btn-outline-warning">ADD TO CART</button>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-md-4">
                        <div class="product-card">
                            <img src="asset/image/gino.png" alt="Gino's Supreme" class="img-fluid">
                            <h5>Gino's Supreme</h5>
                            <span class="old-price">$21.00</span>
                            <span class="price">$19.00</span>
                            <button class="mt-3 btn btn-outline-warning">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-card">
                            <img src="asset/image/vanila.png" alt="Vanilla Cheesecake" class="img-fluid" style="margin-bottom: 24px;">
                            <h5>Vanilla Cheesecake</h5>
                            <span class="old-price">$21.00</span>
                            <span class="price">$19.00</span>
                            <button class="mt-3 btn btn-outline-warning">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-card">
                            <img src="asset/image/chicken.png" alt="Chicken Salad" class="img-fluid">
                            <h5>Chicken Salad</h5>
                            <span class="old-price">$21.00</span>
                            <span class="price">$19.00</span>
                            <button class="mt-3 btn btn-outline-warning">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-card">
                            <img src="asset/image/chicken.png" alt="Chicken Salad" class="img-fluid">
                            <h5>Chicken Salad</h5>
                            <span class="old-price">$21.00</span>
                            <span class="price">$19.00</span>
                            <button class="mt-3 btn btn-outline-warning">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-card">
                            <img src="asset/image/chicken.png" alt="Chicken Salad" class="img-fluid">
                            <h5>Chicken Salad</h5>
                            <span class="old-price">$21.00</span>
                            <span class="price">$19.00</span>
                            <button class="mt-3 btn btn-outline-warning">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-card">
                            <img src="asset/image/meaty.png" alt="Meaty Legend" class="img-fluid">
                            <h5>Meaty Legend</h5>
                            <span class="old-price ">$21.00</span>
                            <span class="price ">$19.00</span>
                            <button class="btn mt-3 btn-outline-warning">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-card">
                            <img src="asset/image/gino.png" alt="Gino's Supreme" class="img-fluid">
                            <h5>Gino's Supreme</h5>
                            <span class="old-price">$21.00</span>
                            <span class="price">$19.00</span>
                            <button class="mt-3 btn btn-outline-warning">ADD TO CART</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-card">
                            <img src="asset/image/chicken.png" alt="Chicken Salad" class="img-fluid">
                            <h5>Chicken Salad</h5>
                            <span class="old-price">$21.00</span>
                            <span class="price">$19.00</span>
                            <button class="mt-3 btn btn-outline-warning">ADD TO CART</button>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</section>


<section class="most-popular-section" >
    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <div class="col-lg-12">
                <p class="  color-yellow font-dancing text-center">Most Popular</p>
                <h1 class=" font_oswald_600 text-dark text-center  mb-3">Top Dishes</h1>
            </div>
            <div class="row g-4">


                <div class="col-md-3">
                    <div class="product-card">
                        <img src="asset/image/meaty.png" alt="Meaty Legend" class="img-fluid">
                        <h5>Meaty Legend</h5>
                        <p class="price">$25.00</p>
                        <button class="btn btn-outline-warning">ADD TO CART</button>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-card">
                        <img src="asset/image/gino.png" alt="Gino's Supreme" class="img-fluid">
                        <h5>Gino's Supreme</h5>
                        <p class="price">$21.00</p>
                        <button class="btn btn-outline-warning">ADD TO CART</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="asset/image/vanila.png" alt="Vanilla Cheesecake" class="img-fluid" style="margin-bottom: 24px;">
                        <h5>Vanilla Cheesecake</h5>
                        <p class="price">$14.00</p>
                        <button class="btn btn-outline-warning">ADD TO CART</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="asset/image/chicken.png" alt="Chicken Salad" class="img-fluid">
                        <h5>Chicken Salad</h5>
                        <p class="price">$15.00</p>
                        <button class="btn btn-outline-warning">ADD TO CART</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@include('frontend.layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  </body>
</html>
