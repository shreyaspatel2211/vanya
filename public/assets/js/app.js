$(document).ready(function () {
  jQuery("#hamburger-icon").click(function () {
    jQuery("#mobile-nav").toggleClass("translate-x-full"); // Slide in/out mobile menu
    jQuery("#hamburger").toggleClass("hidden"); // Hide hamburger icon
    jQuery("#close-icon").toggleClass("hidden"); // Show close icon
  });

  // Close the mobile menu when the close icon is clicked
  jQuery("#close-mobile-nav").click(function () {
    jQuery("#mobile-nav").toggleClass("translate-x-full");
    jQuery("#hamburger").toggleClass("hidden");
    jQuery("#close-icon").toggleClass("hidden");
  });

  // Toggle submenus
  document
    .querySelectorAll(".nav-menu .has-child > button")
    .forEach((button) => {
      button.addEventListener("click", () => {
        const submenu = button.nextElementSibling;
        submenu.classList.toggle("hidden");
      });
    });

  jQuery(".teams-slider").slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024, // Tablet
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768, // Mobile
        settings: {
          slidesToShow: 1,
          centerPadding: "0",
        },
      },
    ],
  });

  jQuery(".testimonial-slider").slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024, // Tablet
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768, // Mobile
        settings: {
          slidesToShow: 1,
          centerPadding: "0",
        },
      },
    ],
  });

  var path = window.location.href;
  // because the 'href' property of the DOM element is the absolute path
  jQuery("nav a, .useful-links-wrapper ul li a").each(function () {
    if (this.href === path) {
      jQuery(this).addClass("active");
    }
  });

  const hamburgerIcon = document.getElementById("hamburger-icon");
  const mobileNav = document.getElementById("mobile-nav");

  hamburgerIcon.addEventListener("click", () => {
    mobileNav.classList.remove("translate-x-full");
  });

  const searchIcon = document.getElementById("search-icon");
  const searchContainer = document.getElementById("search-container");

  searchIcon.addEventListener("click", (e) => {
    e.preventDefault();
    if (searchContainer.classList.contains("hidden")) {
      searchContainer.classList.remove("hidden");
      searchContainer.classList.add("animate-slide-down");
    } else {
      searchContainer.classList.add("hidden");
      searchContainer.classList.remove("animate-slide-down");
    }
  });
});
