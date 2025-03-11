$(document).ready(function () {
  $(window).on("scroll", function () {
    let scrollValue = $(this).scrollTop();
    let scrolledValueWithoutDecimal = scrollValue.toFixed(0);
    let firstNavigationHight = $("div.main-navigation--container").height();
    if ($(window).innerWidth() > 1199) {
      if (scrolledValueWithoutDecimal > firstNavigationHight) {
        $("div.navigation-container").css("top", `-${firstNavigationHight}px`);
        // $("div.main-navigation--container").css(
        //   "top",
        //   `-${firstNavigationHight}px`
        // );
      } else {
        $("div.navigation-container").css(
          "top",
          scrolledValueWithoutDecimal * -1
        );
      }
    }

    // console.log("Scroll position:", scrollValue);
  });

  // Cached Selectors
  const $window = $(window);
  const $targetElement = $(".main-navigation--container");
  const $targetElement2= $(".top-logo")
  const $targetElement3= $(".navigation-container")
  const $menuButton = $("#menu-button");
  const $searchContainer = $(".main-navigation-search-container");
  const $cssMenu = $("#cssmenu");
  let isScrolled = false;

  // Initialize the CSS Menu Plugin
  $cssMenu.menumaker({
    title: "",
    format: "multitoggle",
  });

  // Update opacity based on scroll position
  function updateOpacity() {
    if ($window.scrollTop() > 0) {
      $targetElement.addClass("navigation-scrolled");
      $targetElement2.addClass("navigation-scrolled");
      $targetElement3.addClass("navigation-scrolled");
      isScrolled = true;
    } else if (
      $(window).scrollTop() === 0 &&
      $("#menu-button").hasClass("menu-opened")
    ) {
      isScrolled = true;
      $targetElement.hasClass("navigation-scrolled");
      $targetElement2.hasClass("navigation-scrolled");
      $targetElement3.hasClass("navigation-scrolled")
        ? null
        : $targetElement.addClass("navigation-scrolled");
          $targetElement2.addClass("navigation-scrolled");
          $targetElement3.addClass("navigation-scrolled");
    } else if (isScrolled) {
      $targetElement.removeClass("navigation-scrolled");
      $targetElement2.removeClass("navigation-scrolled");
      $targetElement3.removeClass("navigation-scrolled");
      isScrolled = false;
    }
  }

  // Initial opacity update on page load and scroll event
  updateOpacity();
  $window.scroll(updateOpacity);

  // Toggle navigation-scrolled on #menu-button click

  // Hover effect for submenu items

  // if ($(window).innerWidth() > 1199) {
  //   // Add hover events
  //   $cssMenu
  //     .find("li")
  //     .add($targetElement.find("a"))
  //     .hover(
  //       function () {
  //         // Hover in
  //         $targetElement.addClass("navigation-scrolled");
  //         $targetElement2.addClass("navigation-scrolled");
  //         $targetElement3.addClass("navigation-scrolled");
  //       },
  //       function () {
  //         // Hover out
  //         if ($(window).scrollTop() === 0) {
  //           $targetElement.removeClass("navigation-scrolled");
  //           $targetElement2.removeClass("navigation-scrolled");
  //           $targetElement3.removeClass("navigation-scrolled");
  //         }
  //       }
  //     );
  // }

  // Search bar toggle
  $searchContainer.on("click", ".navigation-search", () => {
    $(".searchBarOpen").addClass("search-active");
    $('html').addClass("no-scroll");
  });
  $(".searchBarOpen--closeBtn").on("click", () => {
    $(".searchBarOpen").removeClass("search-active");
    $('html').removeClass("no-scroll");
  });

  // Dropdown handling
  $(".dropdown.signin-btn > .dropdown-toggle").click(function () {
    $menuButton.removeClass("menu-opened");
    $cssMenu.find("ul, .cssmenu2 ul").removeClass("open").css("display", "");
  });

  // Footer toggle button
  $(".toggleButton").click(function () {
    if ($window.width() <= 991) {
      const $ul = $(this).closest("div").next("ul");
      $ul.toggleClass("show");
      $(this).find(".fa-plus").toggle(!$ul.hasClass("show"));
      $(this).find(".fa-minus").toggle($ul.hasClass("show"));
    }
  });

  // Back to top button
  $(".backtotop-box").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "fast");
  });

  // Navbar active link
  $(".nav-link").click(function () {
    $(".nav-link").removeClass("active");
    $(this).addClass("active");
  });

  // Navbar search toggle
  $(".search-icon").click(function () {
    $(".nav-search, .navbar-search-bar-container").addClass("active");
  });
  $(".close-icon").click(function () {
    $(".nav-search, .navbar-search-bar-container").removeClass("active");
  });

  // Submenu toggle in the navigation
  $(".has-sub").click(function () {
    // const $submenu = $(this).find("ul");
    // const isOpen = $submenu.hasClass("open");
    // $("li.has-sub > span.submenu-button").removeClass("submenu-opened");
    // $("li.has-sub > ul").removeClass("open").css("display", "");

    if (!isOpen) {
      $submenu.addClass("open").css("display", "grid");
      $(this).find("span.submenu-button").addClass("submenu-opened");
    }
  });
});
$(document).ready(function () {
  const $donationBox = $('.floationg-quick-donation');

  // Function to get the appropriate closed position
  function getClosedPosition() {
    return window.matchMedia('(max-width: 474.8888888px)').matches ? '-290px' : '-400px';
  }

  // Set the initial position of the donation box
  $donationBox.css('inset-inline-end', getClosedPosition());

  $('.floationg-quick-donation-toggle').click(function () {
    const $icon = $(this).find('i');

    // Check if the box is visible
    const isVisible = $donationBox.css('inset-inline-end') === '0px';

    // Toggle position
    $donationBox.css('inset-inline-end', isVisible ? getClosedPosition() : '0px');

    // Toggle icon class
    $icon.toggleClass('fa-heart fa-xmark');

    // Remove or add spans dynamically
    if (isVisible) {
      // Add spans back when closing
      if ($(this).find('span').length === 0) {
        if ($('body').hasClass('arabic-version')) {
          // Add Arabic spans
          $(this).append('<span> تبرع</span><span>سريع</span>');
        } else {
          // Add English spans
          $(this).append('<span>Quick</span><span>Donation</span>');
        }
      }
    } else {
      // Remove spans when opening
      $(this).find('span').remove();
    }
  });
});





// donation progress 

    $(document).ready(function () {
      $(".inner-colored-progress-bar").each(function () {
        // Get the progress value
        const progressValue = $(this).attr("progress");

        // Set the width dynamically
        $(this).css("width", progressValue);

        // Set the text content of the span to the progress value
        $(this).find("span").text(progressValue);
      });
    });
 

    
    document.addEventListener("DOMContentLoaded", function () {
      const input = document.querySelector("#mobile-number-input");
      window.intlTelInput(input, {
        initialCountry: "JO",
        separateDialCode: true,
      });
    });