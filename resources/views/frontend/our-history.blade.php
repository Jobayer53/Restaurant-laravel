
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our History</title>

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
            <h1 class="page-title fw-bold">OUR HISTORY</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold " ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">Our History</li>
                </ol>
            </nav>
        </div>

    </div>
</section>

<section class="category-section" style="height: auto;">
    <div class="container" style="margin-top:170px;">
        <div class="row">
            <div class="col-lg-6">
               <img src="{{ asset('frontend/asset/image/history-chef.png') }}" class="img-fluid w-100" alt="">
            </div>
            <div class="col-lg-6 m">
                <p class="  color-yellow font-dancing mb-2">Who Are We</p>
                <h1 class=" font_oswald_600">Why Do We</h1>
                <h1 class=" color-yellow font_oswald_600">Choose Pipirima?</h1>
                <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate expedita consequatur minima totam quia corporis, unde id laboriosam nostrum consequuntur quo, quam possimus eveniet consectetur autem ad exercitationem alias! Quod.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate expedita consequatur minima totam quia corporis, unde id laboriosam nostrum consequuntur quo, quam possimus eveniet consectetur autem ad exercitationem alias! Quod.</p>
                <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate expedita consequatur minima totam quia corporis.</p>

            </div>



        </div>

    </div>


</section>

<section style="height: auto; background-color: #f9f5f2; padding: 50px 0; margin-bottom: 170px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 text-center">
                <img src="{{ asset('frontend/asset/image/about-us-pizza.png') }}" class="img-fluid" style="width: 58%;" alt="">
                <p>Pizza </p>
            </div>
            <div class="col-lg-2 text-center">
                <img src="{{ asset('frontend/asset/image/about-us-soups.png') }}" class="img-fluid" style="width: 58%;" alt="">
                <p>Soups</p>
            </div>
            <div class="col-lg-2 text-center">
                <img src="{{ asset('frontend/asset/image/about-us-salad.png') }}" class="img-fluid" style="width: 58%;" alt="">
                <p>Salads</p>
            </div>
            <div class="col-lg-2 text-center">
                <img src="{{ asset('frontend/asset/image/about-us-dessert.png') }}" class="img-fluid" style="width: 58%;" alt="">
                <p>Desserts</p>
            </div>
            <div class="col-lg-4">
               <h3 class="font-oswald_700 text-dark mt-4">Discover Our <span class="color-yellow font-oswald_700">Tasty</span> Menu</h3>
               <p class="font-oswald_200">Fastest delivery on your doorstep</p>
            </div>
        </div>
    </div>

</section>
<section class="" style="height: auto;">
    <div class="container" style="margin-top:100px; margin-bottom: 140px;">
        <div class="row">
            <div class="col-lg-12">
                <p class=" text-center color-yellow font-dancing">Our History</p>
                <h1 class="text-center font_oswald_600">Timeline of Pizzeria</h1>
            </div>
        </div>
       <div class="row mt-5 right">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <div class="d-flex mt-5 align-items-center">
                    <h2 class="color-yellow fw-bold" style="margin-left: 43px;">2021</h2>
                    <img src="{{ asset('frontend/asset/image/Line2.png') }}" class="img-fluid "style="width: 100px; height: 15px; margin-top: -5px;  margin-left: 10px;"   alt="">
                    <div style="background-image: url({{ asset('frontend/asset/image/team-member-slider-two.avif') }}); background-size: cover;  background-repeat: no-repeat; width:21%; height:115px;border-radius: 50%;">
                    </div>
                    <p class="ms-4 fw-semibold">Lorem ipsum dolor </p>
                </div>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <p class=" mt-4" style="font-size: 14px; margin-left: 52px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, exercitationem nobis. Unde provident perspiciatis,?</p>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>


        </div>
        <div class="row mt-1 left">
            <div class="col-lg-7 ">
                <div class="d-flex mt-1 align-items-center flex-row-reverse justify-content-center">
                    <h2 class="color-yellow fw-bold" style="margin-right: -43px;">2020</h2>
                    <img src="{{ asset('frontend/asset/image/Line1.png') }}" class="img-fluid "style="width: 100px;  height: 15px;margin-top: -5px; margin-left: 10px;" alt="">
                    <div style="background-image: url({{ asset('frontend/asset/image/team-member-slider-two.avif') }}); background-size: cover;  background-repeat: no-repeat; width:21%; height:115px;border-radius: 50%;">
                    </div>
                    <p class="me-4 mb-0 fw-semibold">Lorem ipsum dolor </p>
                </div>
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-7 ps-0">
                        <p class=" mt-4" style="font-size: 14px; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, exercitationem nobis. Unde provident perspiciatis,?</p>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
            <div class="col-lg-5"></div>
        </div>
       <div class="row mt-1 right">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <div class="d-flex mt-5 align-items-center">
                    <h2 class="color-yellow fw-bold" style="margin-left: 43px;">2019</h2>
                    <img src="{{ asset('frontend/asset/image/Line2.png') }}" class="img-fluid "style="width: 100px; height: 15px; margin-top: -5px;  margin-left: 10px;"   alt="">
                    <div style="background-image: url({{ asset('frontend/asset/image/team-member-slider-two.avif') }}); background-size: cover;  background-repeat: no-repeat; width:21%; height:115px;border-radius: 50%;">
                    </div>
                    <p class="ms-4 fw-semibold">Lorem ipsum dolor </p>
                </div>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <p class=" mt-4" style="font-size: 14px; margin-left: 52px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, exercitationem nobis. Unde provident perspiciatis,?</p>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>


        </div>
        <div class="row mt-1 left">
            <div class="col-lg-7 ">
                <div class="d-flex mt-1 align-items-center flex-row-reverse justify-content-center">
                    <h2 class="color-yellow fw-bold" style="margin-right: -43px;">2018</h2>
                    <img src="{{ asset('frontend/asset/image/Line1.png') }}" class="img-fluid "style="width: 100px;  height: 15px;margin-top: -5px; margin-left: 10px;" alt="">
                    <div style="background-image: url({{ asset('frontend/asset/image/team-member-slider-two.avif') }}); background-size: cover;  background-repeat: no-repeat; width:21%; height:115px;border-radius: 50%;">
                    </div>
                    <p class="me-4 mb-0 fw-semibold">Lorem ipsum dolor </p>
                </div>
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-7 ps-0">
                        <p class=" mt-4" style="font-size: 14px; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, exercitationem nobis. Unde provident perspiciatis,?</p>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
            <div class="col-lg-5"></div>
        </div>
        <div class="row mt-1 right">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <div class="d-flex mt-5 align-items-center">
                    <h2 class="color-yellow fw-bold" style="margin-left: 43px;">2017</h2>
                    <img src="{{ asset('frontend/asset/image/Line2.png') }}" class="img-fluid "style="width: 100px; height: 15px; margin-top: -5px;  margin-left: 10px;"   alt="">
                    <div style="background-image: url({{ asset('frontend/asset/image/team-member-slider-two.avif') }}); background-size: cover;  background-repeat: no-repeat; width:21%; height:115px;border-radius: 50%;">
                    </div>
                    <p class="ms-4 fw-semibold">Lorem ipsum dolor </p>
                </div>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <p class=" mt-4" style="font-size: 14px; margin-left: 52px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, exercitationem nobis. Unde provident perspiciatis,?</p>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>


        </div>

    </div>


</section>
<section class="made-love-section " >
    <div class="container">
        <div class="row" >
            <div class="col-lg-4" >
                <p class="  color-yellow font-dancing mb-1">Made With Love</p>
                <h1 class=" font_oswald_600 text-white  mb-1">The Best Cuisine</h1>
                <h1 class=" font_oswald_600 color-yellow  mb-1">Every Day</h1>
                <button class="btn btn-light mt-5 text-dark">Watch Video</button>
            </div>

        </div>
    </div>
</section>
<section class="reviews-section" style="height: auto;">
    <div class="container">
        <div class="row" style="margin-top: 150px;">
            <div class="col-lg-4">
                <h1 class= " font-dancing color-yellow   mb-2" style="font-weight: 700!important;">Lovely Memories</h1>
                <h1 class="  font-oswald_700 mb-2" style="font-weight: 700!important;">Our Best </h1>
                <h1 class=" color-yellow font-oswald_700 mb-2" style="font-weight: 700!important;">Pizza Lovers.</h1>

                <a href="{{ route('testimonial') }}" class="btn btn-dark text-white mt-5">ALL REVIEWS</a>
            </div>
            <div class="col-lg-8">
                <div class="row g-4">
                    @foreach ($reviews as  $data)
                    <div class="col-12 col-md-5 ms-3 " style="border: 1px solid #ededed;padding: 22px;">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('uploads/review/'.$data->image) }}" alt="" class="testimonial-img me-3">
                            <div>
                                <h5 class="testimonial-name">{{ $data->name }}</h5>
                                <div class="star-rating">

                                    @php
                                    $maxRating = 5; // Maximum number of stars
                                @endphp

                                @for ($i = 1; $i <= $maxRating; $i++)
                                    @if ($i <= $data->rating)
                                        <i class="fa fa-star checked"></i> <!-- Filled star -->
                                    @else
                                        <i class="fa fa-star text-dark"></i> <!-- Empty star -->
                                    @endif
                                @endfor

                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">
                            "{{ $data->message }}"
                        </p>
                    </div>
                    @endforeach
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
