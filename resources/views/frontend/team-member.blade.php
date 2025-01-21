
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team Member</title>

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
            <h1 class="page-title fw-bold">TEAM MEMBER</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold" ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">Team Member</li>
                </ol>
            </nav>
        </div>

    </div>
</section>

<section class="category-section" style="height: 1300px;">
    <div class="container" style="margin-top:170px;">
        <div class="row">
            <div class="col-lg-6">
               <img src="{{ asset('uploads/member/'.$member->image) }}" class="img-fluid w-100" alt="">
            </div>
            <div class="col-lg-6 mt-5">
                <p class="  color-yellow font-dancing mb-2">{{ $member->title }}</p>
                <h1 class=" font_oswald_600">{{ $member->name }}</h1>
                <!-- <h1 class=" color-yellow font_oswald_600">Choose Pipirima?</h1> -->
                <p class="mt-4" style="font-size: 14px; width: 65%;">{{ $member->description }}</p>

                <div class=" d-flex gap-4">
                    @foreach($member->social as $data)
                    <a href="{{ $data->link }}"><i class="text-dark fa {{ $data->social }}"></i></a>

                    @endforeach
                </div>
                @foreach ($member->skill as $key => $data )
                    <div class="progress  @if($key == 0 )mt-5 @else mt-3 @endif " style="height: 25px;">
                        <div class="progress-bar px-3" role="progressbar" aria-label="Example with label" style="width: {{ $data->level }}%; background-color: #fda209;flex-direction: row;justify-content: space-between; " aria-valuenow="{{ $data->level }}" aria-valuemax="100">
                            <span class="text-dark fw-bold mt-1 me-5" >{{ $data->skill }}</span>
                        <span class="text-dark ms-5 mt-1 fw-bold"> {{ $data->level }}%</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row" style="margin-top: 100px;">
            <div class="col-lg-12">
                <div class=" py-4">
                    <div class="slider-container">
                        <div class="slider-wrapper">
                            @foreach ($member->thumbnail as $data )
                                <div class="slide">
                                    <img src="{{ asset('uploads/member/thumbnail/'.$data->image) }}" alt="">
                                </div>
                            @endforeach

                        </div>

                        <!-- Navigation Buttons -->
                        <button class="slider-nav prev">
                            <i class="fa fa-chevron-left"></i>
                        </button>
                        <button class="slider-nav next">
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<section class="reviews-section" style="height: 600px;">
    <div class="container">
        <div class="row" style="margin-top: 100px;">
            <div class="col-lg-4">
                <h1 class= " font-dancing color-yellow   mb-2" style="font-weight: 700!important;">Lovely Memories</h1>
                <h1 class="  font-oswald_700 mb-2" style="font-weight: 700!important;">Our Best </h1>
                <h1 class=" color-yellow font-oswald_700 mb-2" style="font-weight: 700!important;">Pizza Lovers.</h1>

                <button class="btn btn-dark text-white mt-5">ALL REVIEWS</button>
            </div>
            <div class="col-lg-8">
                <div class="row g-4">
                    <!-- First Testimonial -->
                    <div class="col-12 col-md-5 " style="border: 1px solid #ededed;padding: 22px;">
                        <div class="d-flex align-items-center mb-3">
                            <img src="asset/image/potrait.jfif" alt="Rhiana Giveday" class="testimonial-img me-3">
                            <div>
                                <h5 class="testimonial-name">Rhiana Giveday</h5>
                                <div class="star-rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star text-dark"></i>

                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">
                            "Consequat id porta nibh venenatis cras sed felis. Enim lobortis scelerisque fermentum dui faucibus in ornare. Diam quam nulla porttitor massa id neque. Sem integer vitae justo eget magna. Ac turpis egestas integer eget aliquet nibh praesent tristique. Netus et malesuada fames ac turpis egestas."
                        </p>
                    </div>

                    <!-- Second Testimonial -->
                    <div class="col-12 col-md-5 ms-3" style="border: 1px solid #ededed;padding: 22px;">
                        <div class="d-flex align-items-center mb-3">
                            <img src="asset/image/portrait.jfif" alt="John Beef" class="testimonial-img me-3">
                            <div>
                                <h5 class="testimonial-name">John Beef</h5>
                                <div class="star-rating">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star text-dark"></i>
                                </div>
                            </div>
                        </div>
                        <p class="testimonial-text">
                            "Faucibus urna et suspendisse sed nisi lacus sed viverra. Sed arcu non odio euismod. Auctor urna nunc id cursus metus aliquam efficitur. Elit sed imperdiet mi sit amet mauris commodo quis. Accumsan lacus vel facilisis volutpat est velit egestas. Nisi quis eleifend quam adipiscing dolor purus lacinia morbi."
                        </p>
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




    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const wrapper = document.querySelector('.slider-wrapper');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');
            const slideWidth = 320; // Width + gap

            prevBtn.addEventListener('click', () => {
                wrapper.scrollLeft -= slideWidth;
            });

            nextBtn.addEventListener('click', () => {
                wrapper.scrollLeft += slideWidth;
            });
        });
        </script>
  </body>
</html>
