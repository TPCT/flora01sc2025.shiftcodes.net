<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <link href="./css/bootstrap/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="./js/slick-1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="./js/slick-1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="./css/carousel.css" />
  <link rel="stylesheet" href="./css/owl.carousel.css" />
  <link rel="stylesheet" href="./css/intlTelInput.min.css" />
  <link rel="stylesheet" href="./css/fancybox.css" />
  <link href="./css/regular.css" rel="stylesheet" type="text/css" />
  <link href="./css/solid.css" rel="stylesheet" type="text/css" />
  <link href="./css/brands.css" rel="stylesheet" type="text/css" />
  <link href="./css/fontawesome.css" rel="stylesheet" type="text/css" />
  <link href="./css/footer.css" rel="stylesheet" type="text/css" />
  <link href="./css/navbar.css" rel="stylesheet" type="text/css" />
  <link href="./css/home.css" rel="stylesheet" type="text/css" />
  <link href="./css/main.css" rel="stylesheet" type="text/css" />
  <link href="./css/arabic-styles.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/custom.css" />
  @stack('style')

  <script type="text/javascript" src="./js/fancybox.umd.js"></script>
  <script type="text/javascript" src="./js/jquery-3.7.1.js"></script>
  <script type="text/javascript" src="./js/slick-1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="./js/bootstrap/popper.min.js"></script>
  <script type="text/javascript" src="./js/bootstrap/bootstrap.bundle.min.js"></script>

  <script src="./js/owl.carousel.js"></script>
  <script src="./js/intlTelInputWithUtils.min.js"></script>
  <script src="./js/menu.js"></script>
  <script src="./js/main.js"></script>
</head>

<body class="">


    <nav class="navbar navbar-expand-xl bg-white py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand logo text-center d-flex align-items-center" href="{{ url('/') }}">
                <img class="logo-img" src="{{ asset('assets/logo.svg') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse mb-2 mb-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active-1" href="{{ url('/upload') }}">Upload</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/premium') }}">Premium</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/tiers') }}">Earn Money</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('api') }}">Service API</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('tos') }}">Terms Of Service</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contacts</a></li>
                </ul>
                <div class="buttons d-flex align-items-start gap-2 flex-column flex-lg-row">
                    <a href="{{ route('login') }}" class="btn secondary-btn">Login</a>
                    <a href="{{ route('register')}}" class="btn main-btn">Register</a>
                </div>
            </div>
        </div>
    </nav>


    <main>
        @yield('main')
    </main>


    <footer class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 d-flex flex-column justify-content-between">
              <div class="mb-3">
                <a href="./home.html" class="logo">
                  <img src="./assets/footerlogo3.svg" alt="">
                </a>
              </div>
              <p class="text-muted">© 2023 VIDTUBE. <br> All rights reserved.</p>
            </div>
            <div class="col-lg-3">
              <div class="nav flex-column mb-2">
                <a href="./tos.html" class="nav-link">Terms of service</a>
                <a href="./api.html" class="nav-link">API Documentation</a>
                <a href="./about-us.html" class="nav-link">FAQ</a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="nav flex-column mb-2">
                <a href="./premium.html" class="nav-link">Premium</a>
                <a href="./EarnMoney.html" class="nav-link">Earn money</a>
                <a href="/checkfiles.html" class="nav-link">Link Checker</a>
                <a href="./Contact.html" class="nav-link">Contact Us</a>
              </div>
            </div>
            <div class="col-lg-2 align-self-end text-end">
              <div class="mb-4">



              </div>
            </div>
          </div>
        </div>
      </footer>
      <script>

      </script>

      <script src="js/wow.js"></script>
      <script>
        new WOW().init();
      </script>
      @stack('script')
    </body>

    </html>
