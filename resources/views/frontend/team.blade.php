
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEAM</title>

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
            <h1 class="page-title fw-bold">TEAM</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold " ><a class="text-dark" href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">Team</li>
                </ol>
            </nav>
        </div>

    </div>
</section>

<section class="category-section" style="height: 950px;">
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
<section style="height: 200px; background-color: #f9f5f2; padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 text-center">
                <h1>12</h1>
                <p>Pizza Chefs</p>
            </div>
            <div class="col-lg-2 text-center">
                <h1>32</h1>
                <p>Orders at Hour</p>
            </div>
            <div class="col-lg-2 text-center">
                <h1>15</h1>
                <p>Family Recipes</p>
            </div>
            <div class="col-lg-2 text-center">
                <h1>250+</h1>
                <p>Pizza per Day</p>
            </div>
            <div class="col-lg-4 text-center">
               <img src="{{ asset('frontend/asset/image/experience_pizza.png') }}" class="img-fluid" alt="" style="    margin-top: -112px;">
            </div>
        </div>
    </div>

</section>


<section class="" style="height: 950px;">
    <div class="container" style="margin-top:170px;">
        <div class="row">
            <div class="col-lg-12">
                <p class=" text-center color-yellow font-dancing">Our Staff</p>
                <h1 class="text-center font_oswald_600">Meet The Team</h1>
            </div>
        </div>
        <div class="row g-4 mt-4">
            @foreach ($team_member as $member )
                <div class="col-12 col-md-4">
                    <div class="text-center" style="border:1px solid #efefef; border-radius: 9px;">
                        <div class="chef-image mt-3 ">
                            <a href="{{ route('team.member', $member->id) }}">
                                <img src="{{ asset('uploads/member/'.$member->image) }}" alt="Anthony Bianco">
                            </a>
                        </div>
                        <h3 class="chef-name">{{ $member->name }}</h3>
                        <div class="chef-title">{{ $member->title }}</div>
                        <div class="social-links mb-3">
                            @foreach($member->social as $data)
                            <a href="{{ $data->link }}"><i class="text-dark fa {{ $data->social }}"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

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
