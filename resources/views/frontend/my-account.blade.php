
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Account</title>

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
            <h1 class="page-title fw-bold">MY ACCOUNT</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item fw-semibold" ><a class="text-dark" href="#">Home</a></li>
                    <li class="breadcrumb-item fw-semibold " style="color: #fda209 !important;" aria-current="page">My Account</li>
                </ol>
            </nav>
        </div>

    </div>
</section>

<section class="h-auto "  >

    <div class="container dashboard-container" style="margin-top:100px ; margin-bottom: 100px;">
        <div class="sidebar">

            <nav class="nav flex-column">
                <a class="nav-link text-secondary fw-semibold px-3 py-3" href="#" style="background-color: #f9f5f2; font-size: 14px;">DASHBOARD</a>
                <a class="nav-link text-secondary fw-semibold px-3 py-3" href="#" style="background-color: #f9f5f2; font-size: 14px;">ORDERS</a>
                <a class="nav-link text-secondary fw-semibold px-3 py-3" href="#" style="background-color: #f9f5f2; font-size: 14px;">DOWNLOADS</a>
                <a class="nav-link text-secondary fw-semibold px-3 py-3" href="#" style="background-color: #f9f5f2; font-size: 14px;">ADDRESSES</a>
                <a class="nav-link active text-secondary fw-semibold px-3 py-3 " href="#" style="background-color: #f9f5f2; font-size: 14px;">ACCOUNT DETAILS</a>
                <a class="nav-link text-secondary fw-semibold px-3 py-3" href="#" style="background-color: #f9f5f2; font-size: 14px;">LOGOUT</a>
            </nav>
        </div>
        <div class="content ms-4">

            <form>
                <div class="row mb-3">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="firstName" class="form-label text-secondary" >First name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control " id="firstName" required>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label class="form-label text-secondary" for="lastName">Last name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="lastName">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label class="form-label text-secondary" for="displayName">Display name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="displayName" required>
                    <small class="form-text text-muted fst-italic">This will be how your name will be displayed in the account section and in reviews.</small>
                </div>
                <div class="form-group mb-5">
                    <label class="form-label text-secondary"  for="email">Email address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" value="" required>
                </div>
                <p class="text-secondary ">Password change</p>
                <div class="form-group mb-4">
                    <label class="form-label text-secondary" for="currentPassword">Current password (leave blank to leave unchanged)</label>
                    <input type="password" class="form-control" id="currentPassword">
                </div>
                <div class="form-group mb-4">
                    <label class="form-label text-secondary" for="newPassword">New password (leave blank to leave unchanged)</label>
                    <input type="password" class="form-control" id="newPassword">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label text-secondary" for="confirmNewPassword">Confirm new password</label>

                    <input type="password" class="form-control" id="confirmNewPassword">
                </div>
                <button type="submit" class="btn btn-warning text-dark " >SAVE CHANGES</button>
            </form>
        </div>
    </div>

</section>







@include('frontend.layouts.footer')




    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  </body>
</html>
