
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">
    <style>
        .old-price{
            font-size: 14px;
            text-decoration: line-through;
            color: gray;
            margin-right: 5px;
        }

    </style>



</head>
  <body>
<section class="" style="width: 100%; height: 100px; background-color: #b1011f;">
    <div class="container-fluid">
        <div class="container">
            @include('frontend.layouts.nav-header')
        </div>
    </div>
</section>

<section style="height: auto;">
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb" style="float: left;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a class="text-dark fw-semibold" href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-dark fw-semibold" href="{{ route('category-product',$product->category->id)}}">{{ $product->category->name }}</a></li>
                        <li class="breadcrumb-item active fw-semibold text-warning aria-current="page">{{ $product->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="main-image-container">
                    <img id="mainImage" src="{{ asset('uploads/product/'.$product->image) }}" alt="Main Image">
                    <button class="arrow-button left" onclick="prevImage()">&#10094;</button>
                    <button class="arrow-button right" onclick="nextImage()">&#10095;</button>
                </div>

                <div class="thumbnail-container">
                    <img src="{{ asset('uploads/product/'.$product->image) }}" alt="Thumb 1" data-index="0" onclick="changeMainImage(this)" class="active">
                    @foreach($product->thumbnail as $data)
                    <img src="{{ asset('uploads/product/thumbnail/'.$data->image) }}" alt="Thumb 1" data-index="0" onclick="changeMainImage(this)" class="active">

                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <h1>{{ $product->name }}</h1>
                <p>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    (1 customer review)</p>
                <p>{{ $product->short_description }}</p>
                <h3 </h3>
                <h3 class="text-warning fw-semibold my-4">
                    <span class=" old-price fw-normal">{{ $product->discount_price? '$'.$product->discount_price : '' }}</span>
                    ${{ $product->price }}</h3>
                <div class="mb-3 d-flex">

                    <input type="number" class="form-control" id="quantity" value="1" min="1" style="width: 100px;">
                    <button class="btn btn-warning ms-3 fw-semibold" style="font-size: 14px;">ADD TO CART</button>
                </div>
                <div class="mt-4">
                    <p class="fw-semibold">Category:
                        <span class="fw-normal" style="font-size: 14px;">{{ $product->category->name }}</span>
                    </p>
                    <div class="d-flex flex-wrap">
                        <p class="fw-semibold">Tags:</p>
                        @foreach($tags as $data)
                        <span class="badge bg-secondary ms-2 mt-1 mb-3">{{ $data }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>







<section class="" style="height: auto; margin-top: 200px;">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="additional-info-tab" data-bs-toggle="tab" data-bs-target="#additional-info" type="button" role="tab" aria-controls="additional-info" aria-selected="false">Additional Information</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</button>
            </li>
        </ul>
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <p>{!! $product->description !!}</p>
            </div>
            <div class="tab-pane fade" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                <p>Additional information about the product goes here.</p>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <p>Customer reviews and ratings go here.</p>
            </div>
        </div>
    </div>

</section>







<section class="category-section mb-5" style="height: auto;">
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-lg-12">
                <p class=" text-center color-yellow font-dancing">Specials For You</p>
                <h1 class="text-center font_oswald_600">Popular Dishes</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="sale-badge">SALE!</div>
                        <img src="asset/image/griffin.png" alt="Griffin" class="img-fluid" style="    margin-bottom: 10px;">
                        <h5>Griffin</h5>
                        <p>
                            <span class="old-price">$21.00</span>
                            <span class="price">$19.00</span>
                        </p>
                        <button class="btn btn-outline-warning">ADD TO CART</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="sale-badge">SALE!</div>
                        <img src="asset/image/potato_salad.png" alt="Potato Salad" class="img-fluid" style="margin-bottom: -7px;">
                        <h5>Potato Salad</h5>
                        <p class="price">$16.00</p>
                        <button class="btn btn-outline-warning">ADD TO CART</button>
                    </div>
                </div>
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
                        <img src="asset/image/pumpkin.png" alt="Pumpkin Soup" class="img-fluid">
                        <h5>Pumpkin Soup</h5>
                        <p class="price">$14.00</p>
                        <button class="btn btn-outline-warning">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@include('frontend.layouts.footer')




    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        let currentIndex = 0;

        function changeMainImage(thumbnail) {
            const index = parseInt(thumbnail.getAttribute('data-index'));
            currentIndex = index;
            const mainImage = document.getElementById('mainImage');
            mainImage.src = thumbnail.src;
            updateThumbnails();
        }

        function prevImage() {
            const thumbnails = document.querySelectorAll('.thumbnail-container img');
            currentIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
            const mainImage = document.getElementById('mainImage');
            mainImage.src = thumbnails[currentIndex].src;
            updateThumbnails();
        }

        function nextImage() {
            const thumbnails = document.querySelectorAll('.thumbnail-container img');
            currentIndex = (currentIndex + 1) % thumbnails.length;
            const mainImage = document.getElementById('mainImage');
            mainImage.src = thumbnails[currentIndex].src;
            updateThumbnails();
        }

        function updateThumbnails() {
            const thumbnails = document.querySelectorAll('.thumbnail-container img');
            thumbnails.forEach((thumb, index) => {
                thumb.classList.toggle('active', index === currentIndex);
            });
        }
    </script>

  </body>
</html>
