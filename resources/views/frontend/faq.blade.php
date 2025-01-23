
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">


</head>
  <body>

<section class=" header-wrapper" >
    <div class="container-fluid">
        <div class="container">
           @include('frontend.layouts.nav-header')
        </div>
        <div class="container">
            <h1 class="page-title fw-semibold">FAQ</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold " ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold  " style="color: #fda209 !important;" aria-current="page">FAQ</li>
                </ol>
            </nav>
        </div>

    </div>
</section>


<section class="category-section" style="height: 700px;">
    <div class="container" style="margin-top:100px;">
        <div class="row"  style="margin-top: 80px;">
            <div class="col-lg-6">
                <p class="  color-yellow font-dancing mb-2">Answers on Questions</p>
                <h1 class=" font_oswald_600">Every Day Help</h1>
                <h1 class=" color-yellow font_oswald_600">for Our Customers.</h1>
                <p style="font-size: 14px; width: 80%;" class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate expedita consequatur minima totam quia corporis, unde id laboriosam nostrum consequuntur quo, quam possimus eveniet consectetur autem ad exercitationem alias! Quod.Lorem ipsum dolor sit amet, </p>

                <a href="{{ route('contact') }}" class="btn btn-dark text-white mt-4" >CONTACT US</a>
                <a href="{{ route('testimonial') }} " class=" btn ms-3 text-dark mt-4">Leave Review<i class="ms-3 fa fa-arrow-right"></i></a>
            </div>
            <div class="col-lg-6"  style="margin-top: 80px;">

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

<section style="height: 200px; background-color: #f9f5f2; padding: 50px 0;  ">
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
               <h3 class="font-oswald_700 text-dark mt-4">Discover Our <span class="color-yellow font-oswald_700">YUM</span> Menu</h3>
               <p class="font-oswald_200">Fastest delivery on your doorstep</p>
            </div>
        </div>
    </div>

</section>

<section style="height: 500px;  padding: 50px 0; ">
    <div class="container">
        <div class="row" style="margin-top: 120px;">
           <div class="col-lg-12 text-center">
            <h1 class="fw-bold font-oswald_700">Want to Order Our Pizza?</h1>
            <h1 class="fw-bold color-yellow">Do it Right Now!</h1>
            <a href="{{ route('products') }}" class="btn btn-dark text-white mt-5">ORDER NOW</a>
           </div>
        </div>
    </div>

</section>

@include('frontend.layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
  </body>
</html>
