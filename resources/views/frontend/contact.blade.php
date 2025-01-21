
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>

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
            <h1 class="page-title fw-semibold">CONTACT</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold " ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold  " style="color: #fda209 !important;" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>

    </div>
</section>


<section class="category-section" style="height: auto;">
    <div class="container" style="margin-top:120px; margin-bottom: 60px;">
        <div class="row justify-content-center">

            <div class="col-lg-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="fw-semibold text-dark">Working Hours</h4>
                        <p class="mt-3 mb-1" style="font-size: 14px;">Monday - Friday 8.00 - 23.00</p>
                        <p class="mt-1" style="font-size: 14px;">Saturday - Sunday 7.00 - 22.00</p>
                    </div>
                </div>
           </div>
            <div class="col-lg-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="fw-semibold text-dark">Contact Us</h4>
                        <p class="mt-3 mb-1" style="font-size: 14px;"> <i class="text-warning me-2 fa fa-phone"></i> (321)1257-5211</p>
                        <p class="mt-3 mb-1" style="font-size: 14px;"> <i class="text-warning me-2 fa fa-envelope"></i> demo@email.com</p>

                    </div>
                </div>
           </div>
            <div class="col-lg-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="fw-semibold text-dark">Get Direction </h4>
                        <p class="mt-3 mb-1" style="font-size: 14px;">Largo Josemaria Escriva de</p>
                        <p class="mt-1" style="font-size: 14px;">Balaguer,7, 00142 Roma RM, Italy</p>
                    </div>
                </div>
           </div>

        </div>
    </div>
</section>


<section style="height: auto; background-color: #f9f5f2; padding: 50px 0; ">
    <div class="container">
        <div class="row" style="margin-top: 120px;">
           <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.238638769121!2d90.37282297424125!3d23.738868089220986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8caa7e60837%3A0xf47efcf6f49b50c5!2sSultan&#39;s%20Dine%2C%20Dhanmondi%20Branch!5e0!3m2!1sen!2sbd!4v1736858617561!5m2!1sen!2sbd" width="80%" height="400" style="border-radius:50%; float: right; margin-right: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <div class="col-lg-6">
            <p class="  color-yellow font-dancing mb-2">Ask a Question</p>
            <h1 class=" font_oswald_600">Send a Message</h1>
            <form action="{{ route('contact_store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="row mt-4">
                        <div class="col-6">
                            <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" required>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <textarea name="message" id="" cols="30" rows="5" placeholder="Message"  class="form-control" required></textarea>
                    @error('message')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="color-yellow btn btn-warning w-100 fw-semibold text-dark">Send</button>
                </div>
            </form>
            @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
           </div>
        </div>
    </div>

</section>

<section class="most-popular-section h-auto" style="margin-top: 56px;">
    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <div class="col-lg-12 text-center">
                <p class="  color-yellow font-dancing">Any Day Offers</p>
                <h1 class=" font_oswald_600 text-dark  mb-3">Discount Product </h1>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="asset/image/meaty.png" alt="Meaty Legend" class="img-fluid">
                        <h5>Meaty Legend</h5>
                        <span class="old-price ">$21.00</span>
                        <span class="price ">$19.00</span>
                        <button class="btn mt-3 btn-outline-warning">ADD TO CART</button>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-card">
                        <img src="asset/image/gino.png" alt="Gino's Supreme" class="img-fluid">
                        <h5>Gino's Supreme</h5>
                        <span class="old-price">$21.00</span>
                        <span class="price">$19.00</span>
                        <button class="mt-3 btn btn-outline-warning">ADD TO CART</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="asset/image/vanila.png" alt="Vanilla Cheesecake" class="img-fluid" style="margin-bottom: 24px;">
                        <h5>Vanilla Cheesecake</h5>
                        <span class="old-price">$21.00</span>
                        <span class="price">$19.00</span>
                        <button class="mt-3 btn btn-outline-warning">ADD TO CART</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="asset/image/chicken.png" alt="Chicken Salad" class="img-fluid">
                        <h5>Chicken Salad</h5>
                        <span class="old-price">$21.00</span>
                        <span class="price">$19.00</span>
                        <button class="mt-3 btn btn-outline-warning">ADD TO CART</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@include('frontend.layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>







  </body>
</html>
