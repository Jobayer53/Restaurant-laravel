
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/asset/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">
    <style>
        .sale-badge{
            z-index: 1;
        }
    </style>

</head>
  <body>
    <section class="" style="width: 100%; height: 650px; background-color: #b1011f;">


    <div class="container-fluid">
        <div class="container">
           @include('frontend.layouts.nav-header')
           <header>
            <div class="row">
                <div class="col-6" style="margin-top: 150px;">
                    <h5 class="text-white font-dancing">{{ $banner?->first_title }}</h5>
                    <h1 class=" font_oswald_700" style="color:#fda209">{{ $banner?->second_title }}</h1>
                    <p class="text-white" style="font-size:12px;">{{ $banner?->short_description }}</p>
                    <div class="d-flex " style="align-items: center;">
                        <a href="{{ route('menu') }}" class="btn btn-dark me-5">ORDER NOW</a>

                        <h3 class="mt-2 fw-semibold" style="color:#fda209">${{ $banner? round($banner?->price):0 }}.00</h3>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{ asset('uploads/banner/'.$banner?->image)}}" class="img-fluid "  alt="">
                </div>
           </header>
        </div>
    </div>

</section>
<section class="h-auto">
    <div class="container" style="margin-top:170px;">
        <div class="row">
            <div class="col-lg-12">
                <p class=" text-center color-yellow font-dancing">Choose Your Favorite</p>
                <h1 class="text-center font_oswald_600">Category</h1>
            </div>
            <div class="row gy-4" style="margin-top: 32px;  width: 100%;">
                @forelse ($categories as $category )
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12" >
                        <div class="card">
                            <a href="{{ route('category-product',$category->id) }}">

                                <img src="{{ asset('uploads/category/'.$category->image) }}" class="card-img-top" alt="Pizza">
                            </a>
                        <div class=" text-center">
                            <P class="">{{ $category->name }}</P>
                        </div>
                        </div>
                    </div>
                @empty

                @endforelse


              </div>
        </div>

    </div>


</section>
<section class="category-section h-auto">
    <div class="container" style="margin-top:170px;">
        <div class="row">
            <div class="col-lg-12">
                <p class=" text-center color-yellow font-dancing">Specials For You</p>
                <h1 class="text-center font_oswald_600">Popular Dishes</h1>
            </div>
            <div class="row g-4">
                @foreach($products as $product)
                    <div class="col-md-3">
                        <div class="product-card">
                            @if($product->discount_price)
                            <div class="sale-badge z-3" >SALE!</div>
                            @endif
                            <a href="{{ route('single-product',$product->id) }}">

                                <img src="{{ asset('uploads/product/'.$product->image) }}" alt="Griffin" class="img-fluid" style="    margin-bottom: 10px;">
                            </a>
                            <h5>{{ $product->name }}</h5>
                            <p>
                                @if($product->discount_price)
                                <span class="old-price">${{ $product->price }}</span>
                                <span class="price">${{ $product->discount_price }}</span>
                                @else
                                <span class="price">${{ $product->price }}</span>
                                @endif
                            </p>
                            <a href="{{ route('add-to-cart',$product->id) }}" class="btn btn-outline-warning">ADD TO CART</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="{{ route('products') }}" class=" btn btn-warning text-dark">ALL PRODUCTS</a>
            </div>
        </div>

    </div>


</section>
<section class="delivery-section h-auto">
    <div class="container">
        <div class="row" style="    margin-top: 85px;">
            <div class="col-lg-5">
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
            <div class="col-lg-7">
                <img src="{{ asset('frontend/asset/image/pipirima_pizzabox.png') }} " class="img-fluid" alt="" style="    float: right;width: 100%;margin-right: -60px;">
            </div>
        </div>
    </div>
</section>
<section class="top-choice-section">
    <div class="container">
        <div class="row " style="margin-top: 76px;">
            <div class="col-lg-6 ">
                <img src="{{ asset('frontend/asset/image/free_drinks.png') }}"   class="img-fluid" alt="" style="width: 100%;margin-left: -20px;">
            </div>
            <div class="col-lg-6 " >
                <div style="margin-left: -20px;">

                    <p class="color-yellow font-dancing">Top Choice</p>
                    <h1 class="font-oswald_700 mb-3" style="font-weight: 700!important;">Best Pizza</h1>

                    <div class="row  g-4 mt-5">
                        @foreach ($productTwo as  $product)
                            <div class="col-md-4">
                                <div class="product-card">
                                    <a href="{{ route('single-product',$product->id) }}">

                                        <img src="{{ asset('uploads/product/'.$product->image) }}" alt="Chicken Salad" class="img-fluid">
                                    </a>
                                    <h5>{{ $product->name }}</h5>
                                    <p class="price">${{ $product->price }}</p>
                                    <a href="{{ route('add-to-cart',$product->id) }}" class="btn btn-outline-warning">ADD TO CART</a>
                                </div>
                            </div>
                        @endforeach



                </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="made-with-love-section">
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
                <a href="{{ route('about-us') }}" class="btn btn-warning text-dark mt-4">About Us</a>
            </div>
            <div class="col-lg-8">
                <img src="{{ asset('frontend/asset/image/pizza_details.png') }}" class="img-fluid" alt="" style="width: 100%;">
            </div>
        </div>
    </div>
</section>
<section class="prepare-section">
    <div class="container">
        <div class="row" style="margin-top: 80px;">
            <div class="col-lg-5">
                <img src="{{ asset('frontend/asset/image/prepare_man.png') }}" class="img-fluid" alt="" style="width: 100%;">
            </div>
            <div class="col-lg-7">
                <p class="color-yellow font-dancing mb-2">Preparing the Pizzas</p>
                    <h1 class="font-oswald_700 mb-2" style="font-weight: 700!important;">Anthony Bianco</h1>
                    <h1 class=" color-yellow font-oswald_700 mb-2" style="font-weight: 700!important;">Prepare Pizza? </h1>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa repudiandae cum maxime aut quibusdam harum, earum commodi ratione debitis beatae ullam quos obcaecati neque nisi iste cupiditate autem fuga quasi.</p>
                    <blockquote class="blockquote" style=" width: 60%;  margin-left: 30px; padding: 5px;   border-left: 5px solid #fda209;">
                        <p class="ms-3">A well-known quote, contained in a blockquote element.</p>
                    </blockquote>
                    <button class="btn btn-warning text-dark mt-5">WATCH VIDEO</button>
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
<section class="reviews-section">
    <div class="container">
        <div class="row" style="margin-top: 100px;">
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
        <div class="row" style="margin-top: 100px;">
            <div class="col-lg-12">
                <div class=" py-4">
                    <div class="slider-container">
                        <div class="slider-wrapper">
                            <!-- Slide 1 -->
                            <div class="slide">
                                <img src="{{ asset('frontend/asset/image/slide_one.png') }}" alt="People enjoying pizza">
                            </div>

                            <!-- Slide 2 -->
                            <div class="slide">
                                <img src="{{ asset('frontend/asset/image/slide_two.png') }}" alt="Friends having drinks and pizza">
                            </div>

                            <!-- Slide 3 -->
                            <div class="slide">
                                <img src="{{ asset('frontend/asset/image/slide_three.png') }}" alt="Kids eating pizza">
                            </div>

                            <!-- Slide 4 -->
                            <div class="slide">
                                <img src="{{ asset('frontend/asset/image/slide_four.png') }}" alt="Restaurant interior">
                            </div>
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
<section class="recent-section">
    <div class="container">
        <div class="row" style="margin-top: 100px;">
            <div class="col-lg-12">
                <p class=" text-center color-yellow font-dancing">Recent Atricles</p>
                <h1 class="text-center font_oswald_600">latest News</h1>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <!-- Card 1 -->
            @forelse ($news as $data )
                <div class="col-12 col-md-4">
                    <div class="card border-0 shadow-sm">
                        <div class="position-relative">
                            <img src="{{ asset('uploads/news/'.$data->image) }}" class="card-img-top" alt="Pizza with prosciutto">
                            <span class="blog-badge">BLOG LIST</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->title }}</h5>
                            <p class="card-text" id="text-{{ $data->id }}">{!! \Illuminate\Support\Str::words(strip_tags($data->description), 10) !!}</p>
                            {{-- <a href="#" class="read-more">READ MORE <i class="bi bi-arrow-right ms-2"></i></a> --}}
                            <button onclick="toggleText('{{ $data->id }}')" class="btn text-warning text-decoration-none">
                                READ MORE <i class="fa fa-arrow-right"></i>
                            </button>
                            <div class="blog-meta mt-3"style="padding-top: 10px; border-top: 1px solid #e0e0e0;">
                                <span>{{ $data->author }}</span>
                                <span>{{ $data->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

            @empty

            @endforelse


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
         <script>
            const originalTexts = {};  // Store the full texts
            const shortenedTexts = {}; // Store shortened texts
            const blogIds = [];        // Store blog IDs to manage state

            @foreach ($news as $blog)
                // Store the full text
                originalTexts['{{ $blog->id }}'] = `{!! addslashes($blog->description) !!}`;
                // Store the shortened text
                shortenedTexts['{{ $blog->id }}'] = `{!! \Illuminate\Support\Str::words(strip_tags($blog->description), 10, '...') !!}`;
                // Store the blog ID
                blogIds.push('{{ $blog->id }}');
            @endforeach

            function toggleText(blogId) {
                const element = document.getElementById(`text-${blogId}`);
                const button = element.nextElementSibling;
                if (button.textContent.includes('READ MORE')) {
                    // Change to full text
                    element.innerHTML = originalTexts[blogId];
                    button.innerHTML = 'READ LESS <i class="fa fa-arrow-right"></i>';
                } else {
                    // Change back to shortened text
                    element.innerHTML = shortenedTexts[blogId];
                    button.innerHTML = 'READ MORE <i class="fa fa-arrow-right"></i>';
                }
            }
        </script>

  </body>
</html>
