<nav class="navbar navbar-expand-lg text-white">
    <div class="container-fluid ">
      <a class="navbar-brand text-white"  href="{{ route('index') }}">
        <img src="{{ asset('frontend/asset/image/logo-site.png') }}" alt="" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active text-white " aria-current="page" href="{{ route('index') }}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('menu') }}">MENU</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PAGES
            </a>
            <ul class="dropdown-menu " style="background-color: #b1011f;">
              <li><a class="dropdown-item text-white" href="{{ route('about-us') }}" style="background: none;">About Us</a></li>
              <li><a class="dropdown-item text-white" href="{{ route('our.history') }}" style="background: none;">Our History</a></li>
              <li><a class="dropdown-item text-white" href="{{ route('testimonial') }}" style="background: none;">Testimonial</a></li>
              <li><a class="dropdown-item text-white" href="{{ route('blog-grid') }}" style="background: none;">Blog Grid</a></li>
              <li><a class="dropdown-item text-white" href="{{ route('blog-list') }}" style="background: none;">Blog List</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-white" href="{{ route('team') }}" style="background: none;">Team</a></li>
              {{-- <li><a class="dropdown-item text-white" href="team-member.html" style="background: none;">Team Member</a></li> --}}
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-white" href="{{ route('products') }}" style="background: none;">Products</a></li>
              <li><a class="dropdown-item text-white" href="cart.html" style="background: none;">Cart</a></li>
              <li><a class="dropdown-item text-white" href="my-checkout.html" style="background: none;">My Checkout</a></li>


              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-white" href="my-account.html" style="background: none;">My Account</a></li>
              <li><a class="dropdown-item text-white" href="{{ route('delivery') }}" style="background: none;">Delivery</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-white" href="{{ route('faq') }}" style="background: none;">FAQ</a></li>
              {{-- <li><a class="dropdown-item text-white" href="404.html" style="background: none;">404 Page</a></li> --}}






              {{-- <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item text-white" href="#" style="background: none;">Something else here</a></li> --}}
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('contact') }}" class="nav-link text-white ">CONTACT</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <ul class="navbar-nav me-2 ">
            <li>

            <a href="" class="nav-link me-4" style="color: white;">
                <i>
                    <svg height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="white" d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                </i>
                <span class="badge rounded-pill text-bg-warning" style="    position: relative;top: -12px;    left: -7px;font-size: 12px;">4</span>
            </a>
            </li>
            <li>
                <a class=" btn btn-dark text-white me-3" >QUICK ORDER</a>
            </li>
            <li class="ms-3 me-2    ">
               <img src="{{ asset('frontend/asset/image/logo-fast-delivery.png') }}" alt="">
            </li>
            <li>
                <p class="mb-0" style="font-size: 10px;float: right;">FAST DELIVERY</p>
                <P style="color:#fda209">(234)346-634</P>
            </li>
          </ul>
        </form>
      </div>
    </div>
</nav>
