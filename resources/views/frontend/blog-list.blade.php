
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">
    <style>
        .card:hover {
            transform:none;
            box-shadow: none;
        }
        .tag-cloud {
            line-height: 2; /* Spacing between lines */
        }
        .tag {
            margin-right: 10px; /* Spacing between tags */
            font-size: 14px; /* Size of font */
        }
        .tag:hover {
            text-decoration: underline; /* Hover effect to show interactivity */
            cursor: pointer;
        }
    </style>

</head>
  <body>

<section class=" header-wrapper">
    <div class="container-fluid">
        <div class="container">
          @include('frontend.layouts.nav-header')
        </div>
        <div class="container">
            <h1 class="page-title fw-bold">BLOG LIST</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold" ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">Blog List</li>
                </ol>
            </nav>
        </div>

    </div>
</section>

<section class="h-auto">
    <div class="container" style="margin-top:100px ; margin-bottom: 100px;">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @forelse ($blogs as $blog )
                    <div class="col-lg-12 mb-5">
                        <div class="card shadow-sm rounded-0">
                            <img src="{{ asset('uploads/blog/'.$blog->image) }}" class="rounded-0" alt="...">
                            <button class="btn btn-warning  w-15" style="    position: absolute;right: 15px;top: 15px;">BLOG LIST</button>
                            <div class="card-body">
                              <p class="card-title"> {{ $blog->title }}</p>
                              <p class="card-text">{!! \Illuminate\Support\Str::words(strip_tags($blog->description), 10) !!}</p>
                              <a href="#" class="text-warning text-decoration-none">READ MORE <i class="fa fa-arrow-right"></i></a>
                            </div>
                          </div>
                    </div>
                    @empty

                    @endforelse

                    <div class="col-lg-12 d-flex justify-content-center">
                        {{ $blogs->links('pagination::bootstrap-4') }}

                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="{{ asset('frontend/asset/image/about-us-chef.avif') }}" class="img-fluid w-100 rounded-circle" alt="">
                                <h5 class="card-title font-dancing text-dark">Anthem Blance</h5>
                                <p class="card-text">
                                    Volutpat diam ut venenatis tellus in metus vulputate rhoncus.
                                </p>
                                <a href="#" class="btn btn-outline-warning">ALL POSTS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class=" p-3">
                            <P class="mb-3">RECENT POSTS</P>
                            <ul class="list-group">
                                @forelse($blog_posts as $data)
                                <li class="list-group-item border-0 mb-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('uploads/blog/'.$data->image) }}" alt="Post Thumbnail" class="img-fluid me-2" style="width: 60px; height: 60px;">
                                        <div>
                                            <h6 class="m-0">{{ $data->title }}</h6>
                                            <small class="text-muted">{{ $data->created_at->format('M d, Y') }}</small>
                                        </div>
                                    </div>
                                </li>
                                @empty

                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="p-3">
                            <P>TAGS</P>
                            <div class="tag-cloud">
                                <span class="tag badge bg-secondary">Basilic</span>
                                <span class="tag badge bg-secondary">Bacon</span>
                                <span class="tag badge bg-secondary">Calzone</span>
                                <span class="tag badge bg-secondary">Cheese</span>
                                <span class="tag badge bg-secondary">Chicken</span>
                                <span class="tag badge bg-secondary">Mozzarella</span>
                                <span class="tag badge bg-secondary">Mushroom</span>
                                <span class="tag badge bg-secondary">Olive</span>
                                <span class="tag badge bg-secondary">Parmesan</span>
                                <span class="tag badge bg-secondary">Pepperoni</span>
                                <span class="tag badge bg-secondary">Pizza</span>
                                <span class="tag badge bg-secondary">Prosciutto</span>
                                <span class="tag badge bg-secondary">Tomato</span>
                            </div>
                        </div>
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


  </body>
</html>
