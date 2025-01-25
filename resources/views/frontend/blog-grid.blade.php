
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Grid</title>

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
            <h1 class="page-title fw-bold">BLOG GRID</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold" ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">Blog Grid</li>
                </ol>
            </nav>
        </div>

    </div>
</section>

<section class="h-auto">
    <div class="container" style="margin-top:200px; margin-bottom:100px;">
        <div class="row">
            @forelse ($blogs  as $blog )
            <div class="col-lg-4 mb-5">
                <div class="card shadow-sm rounded-0" style="height: 100%;">
                    <img src="{{ asset('uploads/blog/'.$blog->image ) }}" class="rounded-0" alt="...">
                    <div class="card-body">
                      <p class="card-title"> {{ $blog->title }}</p>
                      <p class="card-text" id="text-{{ $blog->id }}"> {!! \Illuminate\Support\Str::words(strip_tags($blog->description), 10) !!}</p>
                      <button onclick="toggleText('{{ $blog->id }}')" class="btn text-warning text-decoration-none">
                        READ MORE <i class="fa fa-arrow-right"></i>
                    </button>
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
</section>






@include('frontend.layouts.footer')




    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    {{-- <script>
        const originalTexts = {};  // Store the full texts
        const blogIds = [];        // Store blog IDs to manage state

        @foreach ($blogs as $blog)
            originalTexts['{{ $blog->id }}'] = `{!! addslashes($blog->description) !!}`;
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
                element.innerHTML = `{!! \Illuminate\Support\Str::words(strip_tags($blog->description), 10, '...') !!}`;
                button.innerHTML = 'READ MORE <i class="fa fa-arrow-right"></i>';
            }
        }
    </script> --}}
<script>
    const originalTexts = {};  // Store the full texts
    const shortenedTexts = {}; // Store the shortened texts
    const blogIds = [];        // Store blog IDs to manage state

    @foreach ($blogs as $blog)
        // Store the full text
        originalTexts['{{ $blog->id }}'] = `{!! addslashes($blog->description) !!}`;
        // Store the shortened text
        shortenedTexts['{{ $blog->id }}'] = `{!! \Illuminate\Support\Str::words(strip_tags($blog->description), 10, '...') !!}`;
        // Add the blog ID
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
