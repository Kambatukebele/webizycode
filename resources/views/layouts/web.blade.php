<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <!-- Readex Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet">
    <!-- Nunito sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap"
      rel="stylesheet">
    <!-- Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
      rel="stylesheet">
    <!-- End Google Fonts -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Vite -->
    @vite('resources/css/app.css')
    <title>Document</title>
  </head>

  <body class="bg-gray-50">
    <!--Hidden Navigation and logo for Small devices -->
    {{-- <nav class="bg-white relative w-full lg:hidden">
      <div class="flex justify-between items-center py-2 w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] ">
        <!--Logo -->
        <div class="block">
          <a href="{{ route('home') }}" class="">
    <img class="w-[30px]" src="/assets/images/originale-logo-webizy-1.png" alt="webizy-code-logo">
    </a>
    </div>
    <!--Hamburger Menu-->
    <div class="block cursor-pointer" id="hamburger-menu">
      <i class="fa-solid fa-bars block text-xl"></i>
    </div>
    <!-- Close Menu -->
    <div class="hidden cursor-pointer" id="close-menu">
      <i class="fa-solid fa-xmark text-xl"></i>
    </div>
    </div>

    <!-- Menu -->
    <ul class="hidden absolute w-full bg-white border z-50 py-6" id="small-device-card-menu">
      <li class="text-center"><a class="text-black font-Nunito text-base my-5 " href="{{ route('home') }}">Home</a></li>
      <li class="text-center"><a class="text-black font-Nunito text-base my-5 "
          href="{{ route('services') }}">Services</a></li>
      <li class="text-center"><a class="text-black font-Nunito text-base my-5 " href="{{ route('blog') }}">Blog</a></li>
      <li class="text-center"><a class="text-black font-Nunito text-base my-5 "
          href="{{ route('portfolio') }}">Portfolio</a></li>
      <li class="text-center">
        <a class="text-black font-Nunito text-base my-5 " href="{{ route('contact-us') }}">Contact Us</a>
      </li>
    </ul>
    </nav> --}}
    <!--ENd Hidden Navigation and logo for Small devices -->
    <!-- Header -->
    <x-header-layout />
    <!-- Hidden Header for Small devices -->
    <!--Nav menu on scroll -->
    <!-- Navigation and logo -->
    {{-- <header class="lg:w-full lg:bg-red-500">
    <div class="md:max-w-[700px] mx-auto lg:max-w-[900px] xl:max-w-[1220px]">
      <nav
        class="hidden lg:bg-green-500 lg:w-full  lg:z-10 lg:flex lg:justify-between lg:items-center ">
        <!-- Logo -->
        <div class="hidden lg:block">
          <a href="{{ url('/') }}" class="">
    <img class="w-[50px]" src="/assets/images/originale-logo-webizy-1.png" alt="webizy-code-logo">
    </a>
    </div>
    <!-- Navigation Menu-->
    <ul class="lg:flex lg:justify-between lg:items-center lg:w-[400px]">
      <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a
          class="" href="{{ route('home') }}">Home</a></li>
      <li
        class="lg:relative lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all">
        <a class="" href="{{ route('services') }}">Services</a>
        <div class="hidden lg:absolute lg:block lg:bg-white lg:w-[200px] lg:mt-2 lg:z-10 lg:rounded-md">
          <a class="hidden lg:block lg:text-black lg:my-3 lg:font-Nunito lg:px-3 lg:text-sm hover:underline hover:text-purple-700"
            href="{{ route('services.wordpress') }}">WordPress Development</a>
          <a class="hidden lg:block lg:text-black lg:my-3 lg:font-Nunito lg:px-3 lg:text-sm hover:underline hover:text-purple-700"
            href="{{ route('services.shopify') }}">Shopify Development</a>
          <a class="hidden lg:block lg:text-black lg:my-3 lg:font-Nunito lg:px-3 lg:text-sm hover:underline hover:text-purple-700"
            href="{{ route('services.laravel') }}">Laravel Development</a>
          <a class="hidden lg:block lg:text-black lg:my-3 lg:font-Nunito lg:px-3 lg:text-sm hover:underline hover:text-purple-700"
            href="{{ route('services.fullstack') }}">FullStack Development</a>
          <a class="hidden lg:block lg:text-black lg:my-3 lg:font-Nunito lg:px-3 lg:text-sm hover:underline hover:text-purple-700"
            href="{{ route('services.google') }}">Google ADS</a>
          <a class="hidden lg:block lg:text-black lg:my-3 lg:font-Nunito lg:px-3 lg:text-sm hover:underline hover:text-purple-700"
            href="{{ route(" services.facebook") }}">Facebook ADS</a>
        </div>
      </li>
      <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a
          class="" href="{{ route('blog') }}">Blog</a></li>
      <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a
          class="" href="{{ route('portfolio') }}">Portfolio</a></li>
      <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a
          class="" href="{{ route('contact-us') }}">Contact Us</a></li>

    </ul>
    <!-- CTA -->
    <div class="block">
      <a class="block text-center text-base font-normal w-[200px] mx-auto py-3 my-9 rounded-full uppercase bg-transparent border-2 border-white text-white hover:bg-black hover:font-semibold transition-all"
        href="$">Free Consultancy</a>
    </div>
    </nav>
    </div>
    </header> --}}
    <!-- end Navigation and logo -->
    <!--Nav menu on scroll -->
   {{ $slot }}
    <!-- Footer -->
    <footer class="w-full h-fit bg-hero-footer bg- bg-cover bg-center bg-gray-900 py-10">
      <div
        class="w-[90%] mx-auto flex justify-between items-center flex-col md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
        <!--Upper -->
        <div class="lg:grid lg:gap-4 lg:grid-cols-4 lg:grid-rows-1 lg:h-[300px]">
          <!--Logo-->
          <div
            class="min-w-[290px] my-5 flex justify-center items-center flex-col lg:my-0 lg:w-[200px] lg:justify-start">
            <div class="">
              <a href="#" class="">
                <img class="w-[50px]" src="/assets/images/originale-logo-webizy-1.png" alt="webizy-code-logo">
              </a>
            </div>
            <div class="my-2">
              <p class="text-base font-Nunito text-gray-500 px-2 text-center">
                We design exceptional digital products to streamline your business processes and save resources.
              </p>
            </div>
            <!--Icons -->
            <div class="my-3 inline-block">
              <a href="#"><i class="fa-brands fa-github text-purple-700 text-2xl mr-2"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin text-purple-700 text-2xl mr-2"></i></a>
              <a href="#"><i class="fa-brands fa-instagram text-purple-700 text-2xl mr-2"></i></a>
            </div>
          </div>
          <!-- Info & Notices -->
          <div class="min-w-[290px] my-5 lg:w-[200px] lg:my-0">
            <div>
              <h4 class="text-white font-ReadexPro text-2xl font-semibold text-center">Info & Notices</h4>
            </div>
            <div class="">
              <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2">Legal Notice</p>
              <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2">Privacy Policy</p>
              <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2">Cookies Policy</p>
            </div>
          </div>
          <!--Contact -->
          <div class="min-w-[290px] lg:w-[200px]">
            <div>
              <h4 class="text-white font-ReadexPro text-2xl font-semibold text-center">Contact</h4>
            </div>
            <!--Address -->
            <div class="flex justify-start items-center flex-col my-2 lg:flex-row">
              <!--icon -->
              <div class="">
                <i class="fa-solid fa-address-book text-2xl text-purple-700"></i>
              </div>
              <div class="">
                <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2 px-2">V. P. Čkalova 449/10,
                  Bubeneč (Praha 6), 160 00 Praha</p>
              </div>
            </div>
            <!--pHONE -->
            <div class="flex justify-start items-center flex-col my-2 lg:flex-row">
              <!--icon -->
              <div class="flex justify-start items-center">
                <i class="fa-solid fa-phone text-2xl text-purple-700"></i>
              </div>
              <div>
                <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2 px-2">+420 999 999 999</p>
              </div>
            </div>
            <!--Email -->
            <div class="flex justify-start items-center flex-col my-2 lg:flex-row">
              <!--icon -->
              <div class="flex justify-start items-center">
                <i class="fa-solid fa-envelope text-2xl text-purple-700"></i>
              </div>
              <div>
                <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2 px-2">info@webizycode.com</p>
              </div>
            </div>
          </div>
          <!-- News Letters -->
          <div class="min-w-[290px] my-5 lg:w-[200px] lg:my-0">
            <div class="mb-5">
              <h4 class="text-white font-ReadexPro text-2xl font-semibold text-center">Get the lastest Info</h4>
            </div>
            <form class="sm:flex sm:justify-center sm:items-center sm:flex-col">
              <input type="text" placeholder="Your Email"
                class="border border-purple-700 text-gray-400 text-base font-normal bg-transparent rounded-md w-full sm:w-[300px] lg:w-[150px] xl:w-[200px]">
              <button type="submit"
                class="block text-center text-base font-semibold text-white bg-purple-700 w-[150px] mx-auto py-3 my-5 rounded-full hover:bg-black hover:text-white hover:font-medium uppercase">Subscribe</button>

            </form>
          </div>
        </div>
        <!--Bottom -->
        <div class="mt-10 border-t w-full border-t-purple-700 h-20 flex justify-center items-center">
          <p class="text-base font-normal font-Nunito text-gray-500 text-center px-2">Copyright 2023. All rights
            reserved. Code with <span class="text-red-800">Laravel</span> by <span
              class="text-purple-700">WebizyCode</span></p>
        </div>
      </div>
    </footer>

    <!-- End Footer -->
  </body>
  <script src="/assets/js/index.js"></script>

</html>