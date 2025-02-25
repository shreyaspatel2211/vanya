<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="./favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              theme1: '#009846',
              theme2: '#184175',
            }
          }
        }
      }
  </script>
  <link rel="stylesheet" href="{{ asset('dist/assets/css/app.min.css') }}">
  </head>
  <body>
    <header class="absolute left-0 top-0 w-full bg-[#F3F5FC70] shadow-lg z-[9]">
      <div class="container mx-auto w-full flex justify-between items-center">
        <!-- Logo -->
        <div class="text-white font-bold text-xl w-1/2 lg:w-1/4">
          <a href="/" class="w-[140px] md:w-[250px]">
            <img src="{{ asset('dist/assets/images/logo.svg') }}" alt="">
          </a>
        </div>
        <!-- Navbar (Desktop) -->
        <nav class="w-2/4 hidden w-full lg:flex items-center justify-center space-x-[50px] relative">
          <a href="/" class="text-[#262121] DMSans-medium text-sm">Home</a>
          <a href="/about" class="text-[#262121] DMSans-medium text-sm ">
            About Us
          </a>
          <!-- Insurance Menu -->
          <div class="relative group">
            <a
              href="javascript:void(0)"
              class="text-[#262121] DMSans-medium text-sm  flex items-center"
            >
              Services
              <span class="ml-2">
                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.06294 7.209C6.82118 7.45046 6.49346 7.58609 6.15177 7.58609C5.81008 7.58609 5.48236 7.45046 5.24059 7.209L0.376985 2.34711C0.135212 2.10522 -0.000568848 1.7772 -0.000488245 1.4352C-0.000407642 1.0932 0.135528 0.765242 0.377414 0.52347C0.619301 0.281697 0.947324 0.145916 1.28932 0.145996C1.63132 0.146077 1.95928 0.282013 2.20105 0.523899L6.15177 4.47462L10.1025 0.523899C10.3456 0.288908 10.6712 0.158788 11.0093 0.161565C11.3474 0.164343 11.6708 0.299795 11.91 0.538748C12.1492 0.777701 12.2849 1.10104 12.288 1.43911C12.2911 1.77719 12.1613 2.10295 11.9266 2.34625L7.0638 7.20986L7.06294 7.209Z" fill="#54677A"/>
                </svg>

              </span>
            </a>
            <!-- Submenu -->
            <div
              class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg opacity-0 transform scale-y-0 origin-top transition-all duration-300 group-hover:opacity-100 group-hover:scale-y-100 z-[999]">
              <a
                href="/service/1"
                class="px-3 py-2 text-[#262121] DMSans-medium text-sm after:hidden"
              >
                Dog Insurance
              </a>
              <a
                href="/service/2"
                class="px-3 py-2 text-[#262121] DMSans-medium text-sm after:hidden"
              >
                Cat Insurance
              </a>
              <a
                href="/service/3"
                class="px-3 py-2 text-[#262121] DMSans-medium text-sm after:hidden"
              >
                Companion pet Insurance
              </a>
            </div>
          </div>

          <!-- Other Menu Items -->
          <a href="/submit_claim" class="text-[#262121] DMSans-medium text-sm ">Submit a claim</a>
          <a href="/contact" class="text-[#262121] DMSans-medium text-sm ">Contact</a>
        </nav>

        <div class="w-1/4 hidden lg:flex justify-end">
          <div class="hidden lg:block lg:px-[30px] py-6">
            <a href="/get_quote" class="flex items-center btn bg-theme2 text-white rounded-full py-[20px] px-[32px] DMSans-medium text-sm ">Get a Quote
            </a>
          </div>
        </div>
        
        <!-- Hamburger Icon (Mobile) -->
        <div class="w-1/4 lg:hidden text-right">
          <button id="hamburger-icon" class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#001e37" class="h-8 w-8" id="hamburger">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#001e37" class="h-6 w-6 hidden" id="close-icon">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Navbar Menu -->
      <!-- Mobile Navigation Menu -->
      <div id="mobile-nav" class="nav-menu fixed inset-0 bg-white text-theme1 p-6 md:hidden transform z-20 translate-x-full">
        <div class="flex justify-end">
          <button id="close-mobile-nav" class="text-theme1 mt-2 -mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#001e37" class="h-6 w-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <nav class="flex flex-col space-y-6 mt-4">
          <a href="/" class="text-[#0A2540] DMSans-medium text-sm ">Home</a>
          <a href="/about" class="text-[#0A2540] DMSans-medium text-sm ">About</a>
          <div class="relative has-child">
            <button class="flex justify-between items-center w-full text-theme1 font-semibold" data-menu="insurance">
              Services
              <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.06294 7.209C6.82118 7.45046 6.49346 7.58609 6.15177 7.58609C5.81008 7.58609 5.48236 7.45046 5.24059 7.209L0.376985 2.34711C0.135212 2.10522 -0.000568848 1.7772 -0.000488245 1.4352C-0.000407642 1.0932 0.135528 0.765242 0.377414 0.52347C0.619301 0.281697 0.947324 0.145916 1.28932 0.145996C1.63132 0.146077 1.95928 0.282013 2.20105 0.523899L6.15177 4.47462L10.1025 0.523899C10.3456 0.288908 10.6712 0.158788 11.0093 0.161565C11.3474 0.164343 11.6708 0.299795 11.91 0.538748C12.1492 0.777701 12.2849 1.10104 12.288 1.43911C12.2911 1.77719 12.1613 2.10295 11.9266 2.34625L7.0638 7.20986L7.06294 7.209Z" fill="#0E5994"/>
              </svg>
            </button>
            <div class="hidden mt-2 pl-4 space-y-2 text-sm" data-submenu="insurance">
              <a href="/service/1" class="block text-gray-700 hover:bg-gray-200">Dog Insurance</a>
              <a href="/service/2" class="block text-gray-700 hover:bg-gray-200">Cat Insurance</a>
              <a href="/service/3" class="block text-gray-700 hover:bg-gray-200">Companion pet Insurance</a>
            </div>
          </div>
          <a href="" class="text-[#0A2540] DMSans-medium text-sm ">Showcase </a>
          <a href="/submit_claim" class="text-[#0A2540] DMSans-medium text-sm ">Submit a claim</a>
          <a href="/contact" class="text-[#0A2540] DMSans-medium text-sm ">Contact</a>
          <a href="/get_quote" class="text-[#0A2540] DMSans-medium text-sm ">Get a Quote</a>
        </nav>
      </div>


    </header>