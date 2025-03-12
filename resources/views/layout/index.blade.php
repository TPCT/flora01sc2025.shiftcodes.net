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
                    <li class="nav-item"><a class="nav-link active-1" href="{{ url('/upload') }}">{{ __('lang.Upload') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/premium') }}">{{ __('lang.Premium') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/tiers') }}">{{ __('lang.Earn Money') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('api') }}">{{ __('lang.Service API') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('tos') }}">{{ __('lang.Terms Of Service') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">{{ __('lang.About Us') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">{{ __('lang.Contacts') }}</a></li>
                </ul>
                <div class="buttons d-flex align-items-start gap-2 flex-column flex-lg-row">
                    @guest
                    <a href="{{ route('login') }}" class="btn secondary-btn">{{ __('lang.Login') }}</a>
                    <a href="{{ route('register')}}" class="btn main-btn">{{ __('lang.Register') }}</a>
                    @endguest
                    <a href="{{ route('change.lang', app()->getLocale() == 'en' ? 'ar' : 'en') }}">
                        <i class="fa-solid fa-earth-europe"></i>
                    </a>
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
                <a href="/" class="logo">
                  <img src="./assets/footerlogo3.svg" alt="">
                </a>
              </div>
              <p class="text-muted">© 2023 VIDTUBE. <br> {{ __('lang.All rights reserved.') }}</p>
            </div>
            <div class="col-lg-3">
              <div class="nav flex-column mb-2">
                <a href="{{ ('/tos') }}" class="nav-link">{{ __('lang.Terms of service') }}</a>
                <a href="{{ ('/api') }}" class="nav-link">{{ __('lang.API Documentation') }}</a>
                <a href="{{ ('/about') }}" class="nav-link">{{ __('lang.FAQ') }}</a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="nav flex-column mb-2">
                <a href="/premium" class="nav-link">{{ __('lang.Premium') }}</a>
                <a href="{{ ('/tiers') }}" class="nav-link">{{ __('lang.Earn money') }}</a>
                <a href="/checkfiles.html" class="nav-link">{{ __('lang.Link Checker') }}</a>
                <a href="{{ ('/contact') }}" class="nav-link">{{ __('lang.Contact Us') }}</a>
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
