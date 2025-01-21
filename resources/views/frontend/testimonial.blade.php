
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testimonial</title>

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
            <h1 class="page-title fw-bold">TESTIMONIAL</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold" ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>

    </div>
</section>


<section class="category-section" style="height: auto;">
    <div class="container" style="margin-top:170px;margin-bottom:170px;">
        <div class="row">
            <div class="col-lg-6" style="margin-top: 80px;">
                <p class="  color-yellow font-dancing mb-2">Talk About Us</p>
                <h1 class=" font_oswald_600">Top Clients</h1>
                <h1 class=" color-yellow font_oswald_600">Reviews</h1>
                <p style="font-size: 14px; width: 80%;" class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate expedita consequatur minima totam quia corporis, unde id laboriosam nostrum consequuntur quo, quam possimus eveniet consectetur autem ad exercitationem alias! Quod.Lorem ipsum dolor sit amet, </p>

                <a href="{{ route('menu') }}" class="btn btn-dark text-white mt-4" >YUMMY PIZZA</a>
                <a href="#review" class=" btn ms-3 text-dark mt-4">Leave Review<i class="ms-3 fa fa-arrow-right"></i></a>
            </div>
            <div class="col-lg-6">
                <div class="gallery-container">
                    <div class="row g-4">
                        <!-- Left Column -->
                        <div class="col-12 col-md-6 gallery-left">
                            <div class="img-container">
                                <img src="{{ asset('frontend/asset/image/testimonial-banner-three.webp') }}" alt="Chef preparing dish" class="gallery-img" style="    width: 150%;margin-left: -115px;">
                            </div>
                            <div class="img-container">
                                <img src="{{ asset('frontend/asset/image/testimonial-bannero-one.webp') }}" alt="Chef tasting food" class="gallery-img">
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-12 col-md-6 gallery-right">
                            <div class="img-container h-75">
                                <img src="{{ asset('frontend/asset/image/testimonial-banner-two.webp') }}" alt="Chef presenting dish" class="gallery-img h-100">
                            </div>
                            <div class="caption-container">
                                <p class="img-caption">Enjoy yummy dishe :)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>


</section>

<section style="height: 700px; background-color: #f9f5f2; padding: 50px 0; ">
    <div class="container" id="review">
        <div class="row" style="margin-top: 120px;">
           <div class="col-lg-6">
            <img src="{{ asset('frontend/asset/image/testimonial-child.png') }}" class="img-fluid " style="width: 90%;" alt="">
           </div>
           <div class="col-lg-6">
            <p class="  color-yellow font-dancing mb-2">Client Feedback</p>
            <h1 class=" font_oswald_600">Leave your Review</h1>
            <form action="{{ route('fd_store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <div class="row mt-4">
                        <div class="col-6">
                            <input name="name" type="text" class="form-control" placeholder="Name" aria-label="Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Email">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <textarea name="message" id="" cols="30" rows="5" placeholder="Message"  class="form-control"></textarea>
                    @error('message')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="color-yellow btn btn-warning w-100 fw-semibold text-dark">Send</button>
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
<section style="height: auto;  padding: 50px 0; ">
    <div class="container">
        <div class="row" style="margin-top: 120px;margin-bottom:100px;">
           <!-- <div class="col-lg-6">
            <img src="asset/image/testimonial-child.png" class="img-fluid " style="width: 90%;" alt="">
           </div> -->
           <div class="col-lg-12 text-center">
            <p class="  color-yellow font-dancing mb-2">Testimonial</p>
            <h1 class=" font_oswald_600">What our Clients Say</h1>
            @foreach ($reviews as $key => $review )
            @if($key == 0)
            <p>" {{ $review->message }} "</p>
            <img src="{{ asset('uploads/review/'.$review->image) }}" class="rounded-circle me-3"  alt="Profile picture"    style="width: 70px; height: 70px; object-fit: cover;">
            <p class="font-dancing text-dark fw-semibold mt-2">{{ $review->name }}</p>
            @endif
            @endforeach
           </div>
        </div>
        <div class="row">
            @foreach ($reviews as $key => $review )
                @if($key != 0)
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow-sm " style="@if($key % 2 == 0) background-color: #f9f5f2; @endif  width: 100%;">
                            <div class="card-body p-4">
                                <p class="card-text mb-4 text-secondary fst-italic">
                                    " {{ $review->message }} "
                                </p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('uploads/review/'.$review->image) }}"
                                        class="rounded-circle me-3"
                                        alt="Profile picture"
                                        style="width: 48px; height: 48px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 fw-bold">{{ $review->name }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>

</section>














@include('frontend.layouts.footer')




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>
