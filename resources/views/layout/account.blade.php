<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>
    @yield('title')
</title>

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
  <link href="./css/styles.css" rel="stylesheet" type="text/css" />
  <link href="./css/account.css" rel="stylesheet" type="text/css" />
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

    <div class="navpanel">
        <div class="btn icon-btn d-lg-none navpanel-close btn-close"></div>
        <div class="navpanel-logo">
          <a href="{{ ('/') }}">
            <img src="./assets/logo.svg" alt="">
          </a>
        </div>
        <div class="navpanel-nav nav flex-column flex-grow-1">
          <a href="{{ ('/account') }}" class="nav-link active">
            <span class="navpanel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                <defs>
                  <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="#8761ED"></stop>
                    <stop offset="100%" stop-color="#39B2E3"></stop>
                  </linearGradient>
                </defs>
                <path fill="url(#a)"
                  d="M16.525 17.561c-.032.032-.062.063-.099.09A9.953 9.953 0 0 1 10 20a9.947 9.947 0 0 1-6.448-2.369c-.018-.014-.032-.029-.048-.044A9.972 9.972 0 0 1 0 10C0 4.486 4.486 0 10 0s10 4.486 10 10c0 3.02-1.351 5.726-3.475 7.561Zm-1.92-1.03A3.013 3.013 0 0 0 12.002 15H7.998a2.972 2.972 0 0 0-2.606 1.529 7.952 7.952 0 0 0 9.213.002ZM10 2c-4.411 0-8 3.589-8 8a7.96 7.96 0 0 0 1.889 5.151A4.962 4.962 0 0 1 7.998 13h4.005c1.657 0 3.184.84 4.103 2.157A7.962 7.962 0 0 0 18 10c0-4.411-3.589-8-8-8Zm0 10c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4Zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2c1.102 0 2-.897 2-2s-.898-2-2-2Z">
                </path>
              </svg>
            </span> Account </a>
          <a href="{{ '/videos' }}" class="nav-link">
            <span class="navpanel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14">
                <defs>
                  <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="#8761ED"></stop>
                    <stop offset="100%" stop-color="#39B2E3"></stop>
                  </linearGradient>
                </defs>
                <path fill="url(#a)"
                  d="M17.999 12.382c-.309 0-.617-.073-.894-.211L14 10.618V11c0 1.654-1.346 3-3 3H3c-1.654 0-3-1.346-3-3V3c0-1.654 1.346-3 3-3h8c1.654 0 3 1.346 3 3v.382l3.105-1.552A2.001 2.001 0 0 1 20 3.618v6.764c0 1.102-.898 2-2.001 2ZM12 3c0-.551-.448-1-1-1H3c-.551 0-1 .449-1 1v8c0 .552.449 1 1 1h8a1 1 0 0 0 1-1V3Zm6 .618-4 2v2.764l4 2V3.618Z">
                </path>
              </svg>
            </span> My videos</a>
          <a href="{{ 'upload' }}" class="nav-link">
            <span class="navpanel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="23" height="19">
                <defs>
                  <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="#8761ED"></stop>
                    <stop offset="100%" stop-color="#39B2E3"></stop>
                  </linearGradient>
                </defs>
                <path fill="url(#a)"
                  d="M18.506 15.694h-.992c-.548 0-.992-.458-.992-1.023s.444-1.023.992-1.023h.992c1.367 0 2.478-1.146 2.478-2.557 0-1.41-1.111-2.557-2.478-2.557h-.992a.981.981 0 0 1-.774-.383 1.048 1.048 0 0 1-.193-.863 3.804 3.804 0 0 0-.534-2.879c-.653-1.018-1.757-1.739-3.028-1.977-2.492-.47-4.918.995-5.411 3.258a.998.998 0 0 1-.967.799c-2.025 0-3.673 1.606-3.673 3.579 0 1.974 1.648 3.58 3.673 3.58.548 0 .992.458.992 1.023s-.444 1.023-.992 1.023c-3.119 0-5.656-2.524-5.656-5.626 0-2.848 2.14-5.209 4.904-5.576C6.897 1.605 10.092-.192 13.34.419c1.799.338 3.375 1.38 4.326 2.86.628.978.952 2.086.951 3.211 2.409.061 4.351 2.101 4.351 4.601 0 2.538-2.002 4.603-4.462 4.603ZM7.889 10.879l2.974-3.068a.968.968 0 0 1 1.404.001l2.973 3.067c.388.4.388 1.047 0 1.447a.974.974 0 0 1-1.402 0l-1.282-1.323v6.736c0 .566-.443 1.023-.991 1.023s-.992-.457-.992-1.023v-6.736l-1.282 1.323a.97.97 0 0 1-1.402 0 1.047 1.047 0 0 1 0-1.447Z">
                </path>
              </svg>
            </span> Upload </a>
          <a href="./reports.html" class="nav-link">
            <span class="navpanel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18">
                <defs>
                  <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="#8761ED"></stop>
                    <stop offset="100%" stop-color="#39B2E3"></stop>
                  </linearGradient>
                </defs>
                <path fill="url(#a)"
                  d="M18 18H2c-1.103 0-2-.897-2-2v-6c0-1.103.897-2 2-2h4V6c0-1.103.897-2 2-2h4V2c0-1.103.897-2 2-2h4c1.102 0 2 .897 2 2v14c0 1.103-.898 2-2 2ZM6 10H1.999L2 16h4v-6Zm6-4H7.999v3.992L8 10v6h4V6Zm6-4h-4.001v3.993L14 6v10h4V2Z">
                </path>
              </svg>
            </span> Reports </a>
          <a href="./dmca.html" class="nav-link">
            <span class="navpanel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20">
                <defs>
                  <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="#8761ED"></stop>
                    <stop offset="100%" stop-color="#39B2E3"></stop>
                  </linearGradient>
                </defs>
                <path fill="url(#a)"
                  d="M17 6h-.08l-.924 11.083C16 18.654 14.654 20 13 20H5c-1.654 0-3-1.346-3-3L1.08 6H1a1 1 0 0 1 0-2h4V2c0-1.103.897-2 2-2h4c1.103 0 2 .897 2 2v2h4a1 1 0 1 1 0 2Zm-6-4H7v2h4V2ZM3.087 6l.91 10.917C4 17.552 4.449 18 5 18h8a1 1 0 0 0 1-1l.914-11H3.087Zm8.62 8.707a.997.997 0 0 1-1.414 0L9 13.414l-1.293 1.293a.999.999 0 1 1-1.414-1.414L7.586 12l-1.293-1.293a.999.999 0 1 1 1.414-1.414L9 10.586l1.293-1.293a.999.999 0 1 1 1.414 1.414L10.414 12l1.293 1.293a.999.999 0 0 1 0 1.414Z">
                </path>
              </svg>
            </span> DMCA </a>
          <hr>
          <a href="{{ ('/tiers') }}" class="nav-link">
            <span class="navpanel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20">
                <defs>
                  <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="#8761ED"></stop>
                    <stop offset="100%" stop-color="#39B2E3"></stop>
                  </linearGradient>
                </defs>
                <path fill="url(#a)"
                  d="M13 20H3c-1.654 0-3-1.346-3-3V5c0-1.654 1.346-3 3-3h1.184A2.996 2.996 0 0 1 7 0h2c1.302 0 2.402.839 2.816 2H13c1.654 0 3 1.346 3 3v12c0 1.654-1.346 3-3 3ZM9 2H7c-.551 0-1 .449-1 1 0 .551.449 1 1 1h2a1.001 1.001 0 0 0 0-2Zm5 3c0-.551-.448-1-1-1h-1.184A2.996 2.996 0 0 1 9 6H7a2.996 2.996 0 0 1-2.816-2H3c-.551 0-1 .449-1 1v12c0 .552.449 1 1 1h10a1 1 0 0 0 1-1V5Zm-6.5 6h1c1.379 0 2.5 1.121 2.5 2.5 0 1.208-.86 2.217-2 2.449V16a1 1 0 1 1-2 0H6a1 1 0 1 1 0-2h2.5c.275 0 .5-.225.5-.5s-.225-.5-.5-.5h-1A2.503 2.503 0 0 1 5 10.5c0-1.207.86-2.217 2-2.449V8a1 1 0 0 1 2 0h1a1 1 0 1 1 0 2H7.5a.5.5 0 0 0 0 1Z">
                </path>
              </svg>
            </span> Earn money</a>
          <a href="./api.html" class="nav-link">
            <span class="navpanel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18">
                <defs>
                  <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="#8761ED"></stop>
                    <stop offset="100%" stop-color="#39B2E3"></stop>
                  </linearGradient>
                </defs>
                <path fill="url(#a)"
                  d="M19 10c-.408 0-1 .779-1 2v3c0 1.654-1.346 3-3 3a1 1 0 1 1 0-2 1 1 0 0 0 1-1v-3c0-1.207.381-2.273.995-3C16.381 8.272 16 7.206 16 6V3c0-.551-.448-1-1-1a1 1 0 1 1 0-2c1.654 0 3 1.346 3 3v3c0 1.221.592 2 1 2a1 1 0 1 1 0 2ZM4 15c0 .552.449 1 1 1a1 1 0 1 1 0 2c-1.654 0-3-1.346-3-3v-3c0-1.221-.592-2-1-2a1 1 0 1 1 0-2c.408 0 1-.779 1-2V3c0-1.654 1.346-3 3-3a1 1 0 0 1 0 2c-.551 0-1 .449-1 1v3c0 1.206-.381 2.272-.996 3 .615.727.996 1.793.996 3v3Z">
                </path>
              </svg>
            </span> API Docs</a>
          <a href="{{ ('/contact') }}" class="nav-link">
            <span class="navpanel-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16">
                <defs>
                  <linearGradient id="a" x1="0%" x2="100%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="#8761ED"></stop>
                    <stop offset="100%" stop-color="#39B2E3"></stop>
                  </linearGradient>
                </defs>
                <path fill="url(#a)"
                  d="M19.793 13c0 1.654-1.329 3-2.963 3H3.004C1.37 16 .041 14.654.041 13V3c0-.059.014-.115.018-.174l.001-.018C.16 1.245 1.435 0 3.004 0H16.83c1.568 0 2.843 1.244 2.943 2.807.002.007.001.014.002.021.004.058.018.113.018.172v10ZM3.004 14H16.83a.994.994 0 0 0 .987-1V4.868l-7.352 4.964a.979.979 0 0 1-1.096 0L2.016 4.868V13c0 .552.443 1 .988 1ZM16.83 2H3.004a.98.98 0 0 0-.867.546l7.78 5.252 7.78-5.252A.98.98 0 0 0 16.83 2Z">
                </path>
              </svg>
            </span> Support </a>
        </div>
      </div>
      <header class="">
        <div class="container-fluid">
          <div class="row align-items-center header-row">
            <div class="col-auto d-lg-none">
              <button class="btn header-btn icon-btn open-menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14">
                  <path fill-rule="evenodd" fill="currentcolor"
                    d="M17 8H1a1 1 0 1 1 0-2h16a1 1 0 1 1 0 2Zm0-6H1a1 1 0 0 1 0-2h16a1 1 0 1 1 0 2ZM1 12h16a1 1 0 1 1 0 2H1a1 1 0 1 1 0-2Z">
                  </path>
                </svg>
              </button>
            </div>
            <div class="col-auto d-lg-none ps-0 flex-grow-1">
              <a href="#" class="logo">
                <img src="./assets/logo.svg" alt="">
              </a>
            </div>
            <div class="col-auto header-title">
              <h3>Account</h3>
            </div>
            <div class="col-auto header-js d-none"></div>
            <div class="col-auto ms-auto">
              <a href="" class="btn logout-btn rounded-pill">Logout</a>
            </div>
          </div>
        </div>
      </header>

@yield('main')


  <script type="text/javascript">
    function showTab() {
      const tabEl = document.querySelectorAll('.section-tabs a[data-bs-toggle="tab"]');
      tabEl.forEach((item, i) => {
        item.addEventListener('shown.bs.tab', event => {
          localStorage.setItem('activeTab', event.target.hash);
        });
      });

      const activeTab = localStorage.getItem('activeTab');
      if (activeTab) {
        const tab = document.querySelector('a[href="' + activeTab + '"]');
        const bsTab = new bootstrap.Tab(tab);
        bsTab.show()
      }

    }
    showTab();
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const navPanel = document.querySelector(".navpanel");
      const toggleButton = document.querySelector(".open-menu");
      const closeButton = document.querySelector(".navpanel-close");

      // فتح القائمة
      toggleButton.addEventListener("click", function () {
        navPanel.classList.toggle("open");
      });

      // إغلاق القائمة
      closeButton.addEventListener("click", function () {
        navPanel.classList.remove("open");
      });
    });

  </script>


@stack('script')
</body>

</html>
