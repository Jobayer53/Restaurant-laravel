
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>

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
            <h1 class="page-title fw-bold">ABOUT US</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold" ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>

    </div>
</section>

<section class="category-section" style="height: auto;">
    <div class="container" style="margin-top:170px;">
        <div class="row">
            <div class="col-lg-6">
                <p class="  color-yellow font-dancing mb-2">Welcome To Brand</p>
                <h1 class=" font_oswald_600">Your Loved Food</h1>
                <h1 class=" color-yellow font_oswald_600">is Made Gold Hands!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate expedita consequatur minima totam quia corporis, unde id laboriosam nostrum consequuntur quo, quam possimus eveniet consectetur autem ad exercitationem alias! Quod.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate expedita consequatur minima totam quia corporis, unde id laboriosam nostrum consequuntur quo, quam possimus eveniet consectetur autem ad exercitationem alias! Quod.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate expedita consequatur minima totam quia corporis.</p>
                <a href="{{ route('menu') }}" class="btn btn-dark text-white mt-4" >OUR MENU</a>
                <a href="{{ route('contact') }}" class=" btn ms-3 text-dark mt-4">Contact Us<i class="ms-3 fa fa-arrow-right"></i></a>
            </div>
            <div class="col-lg-6">
                <div class="gallery-container">
                    <div class="row g-4">
                        <!-- Left Column -->
                        <div class="col-12 col-md-6 gallery-left">
                            <div class="img-container">
                                <img src="{{ asset('frontend/asset/image/about-us-setmenu.avif') }}" alt="Chef preparing dish" class="gallery-img">
                            </div>
                            <div class="img-container">
                                <img src="{{ asset('frontend/asset/image/about-us-chef.avif') }}" alt="Chef tasting food" class="gallery-img">
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-12 col-md-6 gallery-right">
                            <div class="img-container h-75">
                                <img src="{{ asset('frontend/asset/image/about-us-chef1.webp') }}" alt="Chef presenting dish" class="gallery-img h-100">
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

<section style="height: auto; background-color: #f9f5f2; padding: 50px 0; margin-bottom: 100px;">
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
<section class="" style="height: auto; margin-bottom: 100px;">
    <div class="container" style="margin-top:170px;">
        <div class="row">
            <div class="col-lg-12">
                <p class=" text-center color-yellow font-dancing">Behind the Taste</p>
                <h1 class="text-center font_oswald_600">Meet Our Chefs</h1>
            </div>
        </div>
        <div class="row g-4 mt-4">
            @foreach ($members as $member )
            <div class="col-12 col-md-4  ">
                <div class="text-center border">
                    <div class="chef-image">
                        <a href="{{ route('team.member', $member->id) }}">
                            <img src="{{ asset('uploads/member/'.$member->image) }}" alt="Anthony Bianco">
                        </a>
                    </div>
                    <h3 class="chef-name">{{ $member->name }}</h3>
                    <div class="chef-title">{{ $member->title }}</div>
                    <div class="social-links mb-3">
                        @foreach($member->social as $social)
                        <a href="{{ $social->link }}"><i class="text-dark fa {{ $social->social }}"></i></a>
                        @endforeach
                    </div>
                </div>
            </div>

            @endforeach


        </div>

    </div>


</section>
<section class="made-with-love-section h-auto">
    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <div class="col-lg-4">
                <p class="  color-yellow font-dancing">Made With Love</p>
                <h1 class=" font_oswald_600 text-white  mb-3">We Make the Best</h1>
                <h1 class="color-yellow font_oswald_600 mb-3">Pizza in Town</h1>
                <p class="text text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut voluptas vero qui laborum. Delectus, debitis nemo architecto adipisci ipsum cumque beatae consectetur enim vero eligendi aut facere? Libero, veniam harum.</p>
                <ul class="list-unstyled" style="margin-top: 25px; margin-left: 50px;">
                    <li class="text text-white   mb-3 ">
                        <img src="{{ asset('frontend/asset/image/logo_pizza_slice.png') }}" class="img-fluid me-3" alt="">
                        lorem ipsum dolor sit amet
                    </li>
                    <li class="text text-white mb-3 ">
                        <img src="{{ asset('frontend/asset/image/logo_pizza_slice.png') }}" class="img-fluid me-3" alt="">
                        lorem ipsum dolor sit amet
                    </li>
                    <li class="text text-white mb-3 ">
                        <img src="{{ asset('frontend/asset/image/logo_pizza_slice.png') }}" class="img-fluid me-3" alt="">
                        lorem ipsum dolor sit amet
                    </li>
                </ul>
                <a href="{{ route('products') }}" class="btn btn-warning text-dark mt-4">Order Now</a>
            </div>
            <div class="col-lg-8">
                <img src="{{ asset('frontend/asset/image/pizza_details.png') }}" class="img-fluid" alt="" style="width: 100%;">
            </div>
        </div>
    </div>
</section>
<section class="most-popular-section h-auto" style="margin-top: 56px;">
    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <div class="col-lg-4">
                <p class="  color-yellow font-dancing ">Most Popular</p>
                <h1 class=" font_oswald_600 text-dark   mb-3">Top Dishes</h1>
            </div>
            <div class="row g-4">
                @foreach($products as $product)
                <div class="col-md-3">
                    <div class="product-card">
                        <img src="{{ asset('uploads/product/'.$product->image) }}" alt="Meaty Legend" class="img-fluid">
                        <h5>{{ $product->name }}</h5>
                        <p class="price">${{ $product->price }}</p>
                        <a href="{{ route('add-to-cart',$product->id) }}" class="btn btn-outline-warning">ADD TO CART</a>
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
