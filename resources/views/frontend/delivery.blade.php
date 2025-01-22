
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delivery</title>

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
            <h1 class="page-title fw-semibold">DELIVERY</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold " ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold  " style="color: #fda209 !important;" aria-current="page">Delivery</li>
                </ol>
            </nav>
        </div>

    </div>
</section>


<section class="category-section" style="height: 700px;">
    <div class="container" style="margin-top:170px;">
        <div class="row">
           <div class="col-lg-4">
                <p class="  color-yellow font-dancing mb-2">Fast Delivery</p>
                <h1 class=" font_oswald_600 fw-semibold">Delivery Pizza</h1>
                <p class="text-dark mt-4"  style="font-size:12px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur hic, repellendus maiores pariatur non cumque error ea molestiae debitis, dicta dolores ab omnis. Eaque tempora repudiandae, incidunt debitis ipsam sapiente?</p>
                <a href="{{ route('menu') }}" class="btn btn-warning text-dark mt-4">ORDER MENU</a>
           </div>
           <div class="col-lg-4 ">
                <div class="card shadow-sm" style="
                    background-color: #fafafa;
                border: none;
                padding: 2rem;
                text-align: center;
                min-height: 300px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                    ">
                    <div>
                        <h3 class="delivery-title" style="
                                     color: orange;
            font-weight: bold;
            margin-bottom: 1rem;
                            ">Free Delivery</h3>
                        <div class="price"
                            style="font-size: 2.5rem;
                font-weight: bold;"
                        >$0<sup>00</sup></div>
                        <p class="delivery-info mt-5"
                            style="
                            color: #666;
                font-size: 0.9rem;

                            "
                        >Free shipping from 75$</p>
                    </div>
                    <div>
                        <button class="order-btn"
                        style="
                        background-color:   #fafafa;
                border: 0.5px solid #e7e7e7;
                border-radius: 5px;
                color: orange;
                font-weight: bold;
                padding: 0.5rem 1rem;
                text-transform: uppercase;
                transition: all 0.3s ease;
                "
                        >
                            Order Now</button>
                    </div>
                </div>
           </div>
           <div class="col-lg-4" style="margin-top: -55px;">
            <div class="card shadow-sm"style="
            background-color: white;
        border: none;
        padding: 2rem;
        text-align: center;
        min-height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
            ">
                <div>
                    <h3 class="delivery-title"
                        style="         color: orange;
                        font-weight: bold;
                        margin-bottom: 1rem;    margin-top: 2rem;"
                    >Fast Delivery</h3>
                    <div class="price"
                        style=" font-size: 2.5rem;
            font-weight: bold;"
                    >$12<sup>00</sup></div>
                    <p class="delivery-info info-border">Delivery on your doorstep</p>
                    <p class="delivery-info info-border">Delivery in 30 minutes</p>
                    <p class="delivery-info info-border">Food of the Best Quality and Taste</p>
                </div>
                <div>
                    <button class="order-btn"
                        style="
                        background-color:   white;
                border: 0.5px solid #e7e7e7;
                border-radius: 5px;
                color: orange;
                font-weight: bold;
                padding: 0.5rem 1rem;
                text-transform: uppercase;
                transition: all 0.3s ease;
                margin-top: 2rem;
                "
                        >
                            Order Now</button>
                </div>
            </div>
           </div>
        </div>
    </div>
</section>

<section style="height: 800px; background-color: #f9f5f2; padding: 50px 0; ">
    <div class="container">
        <div class="row" style="margin-top: 120px;">

           <div class="col-lg-6">
                <p class="  color-yellow font-dancing mb-2">Download the App</p>
                <h1 class=" font_oswald_600">Get More With</h1>
                <h1 class=" color-yellow font_oswald_600">Our Application</h1>
                <div class="row justify-content-center g-4">
                    <!-- Delivery in 30 minutes -->
                    <div class="col-12 col-md-4">
                        <div class="float-start">
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
                        <div class="float-start">
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
                        <div class="float-start">
                            <div class="service-icon">
                                <img src="{{ asset('frontend/asset/image/logo_pizzapis.png') }}" class="img-fluid" alt="">
                            </div>
                            <h6 class="service-text" style="margin-top: 9px;">
                                Delivery on your<br>doorstep
                            </h6>
                        </div>
                    </div>
                </div>
                <p class="text-dark mt-5" style="font-size: 14px ;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil doloribus suscipit delectus, minima dolorum aut at cumque molestiae magnam eligendi, nam sequi placeat. Itaque, repellat. At maxime optio dolor veritatis.</p>
                <img src="asset/image/get-on-google.png" class="img-fluid mt-4 w-25" alt="">
           </div>
           <div class="col-lg-6 text-center">
            <img src="{{ asset('frontend/asset/image/pipirima_pizzabox.png') }} " class="img-fluid" alt="" style="    float: right;width: 100%;margin-right: -60px;">
           </div>
        </div>
    </div>

</section>
<section style="height: 800px;  padding: 50px 0; ">
    <div class="container">
        <div class="row" style="margin-top: 120px;">
           <div class="col-lg-6">
            <img src="{{ asset('frontend/asset/image/delivery-guy.png') }}" class="img-fluid " style="width: 90%;" alt="">
           </div>
           <div class="col-lg-6">
                <p class="font-dancing color-yellow">About Delivery</p>
                <h1 class="font_oswald_700">Delivery Pizza</h1>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach($faqs as $data)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading{{$data->id}}">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$data->id}}" aria-expanded="false" aria-controls="flush-collapse{{$data->id}}" style="padding: 8px 6px;">
                            {{ $data->question }}
                          </button>
                        </h2>
                        <div id="flush-collapse{{$data->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$data->id}}" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">{{ $data->answer  }}</div>
                        </div>
                    </div>
                    @endforeach
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




<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->





</head>
  </body>
</html>
