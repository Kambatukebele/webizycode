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

  <body>
    <!--Hidden Navigation and logo for Small devices -->
    <nav class="bg-white w-full lg:hidden">
      <div class="flex justify-between items-center py-2 w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] ">
        <!--Logo -->
        <div class="block">
          <a href="#" class="">
            <img class="w-[30px]" src="/assets/images/originale-logo-webizy-1.png" alt="webizy-code-logo">
          </a>
        </div>
        <!--Hamburger Menu-->
        <div class="block cursor-pointer">
          <i class="fa-solid fa-bars block text-xl"></i>
        </div>
        <!-- Close Menu -->
        <div class="hidden">
          <i class="fa-solid fa-xmark text-xl"></i>
        </div>
        <!-- Menu -->
        <ul class="hidden">
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </div>
    </nav>
    <!--ENd Hidden Navigation and logo for Small devices -->
    <!-- Header -->
    <header class="w-full h-full bg-[url('/public/assets/images/bg-image.png')] bg-cover bg-center bg-no-repeat sm:h-[75vh] sm:relative lg:h-screen">
      <div class="w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
        <!-- Navigation and logo -->
        <nav class="hidden lg:flex lg:justify-between lg:items-center lg:w-full">
          <!-- Logo -->
          <div class="">
            <a href="#" class="">
              <img class="w-[50px]" src="/assets/images/originale-logo-webizy-1.png" alt="webizy-code-logo">
            </a>
          </div>
          <!-- Navigation Menu-->
          <ul class="lg:flex lg:justify-between lg:items-center lg:w-[400px]">
            <li class="lg:text-white lg:text-base lg:font-normal"><a class="" href="/">Home</a></li>
            <li class="lg:text-white lg:text-base lg:font-normal"><a class="" href="/">Services</a></li>
            <li class="lg:text-white lg:text-base lg:font-normal"><a class="" href="/">Home</a></li>
            <li class="lg:text-white lg:text-base lg:font-normal"><a class="" href="/">Home</a></li>
            <li class="lg:text-white lg:text-base lg:font-normal"><a class="" href="/">Home</a></li>
            <li class="lg:text-white lg:text-base lg:font-normal"><a class="" href="/">Home</a></li>
          </ul>
          <!-- CTA -->
          <div class="block">
            <a class="block text-center text-base font-normal text-purple-900 bg-white w-52 mx-auto py-3 my-5 rounded-3xl uppercase" href="$">Free Consultancy</a>
          </div>
        </nav>
        <!-- end Navigation and logo -->
        <!-- Hero section  -->
        <div class="block text-center sm:flex sm:justify-between sm:items-center  sm:absolute sm:top-1/2 sm:left-1/2 sm:-translate-x-1/2 sm:-translate-y-1/2 sm:w-[600px] sm:h-[500px] md:w-[700px] lg:w-[900px] xl:w-[1220px] lg:mt-10">
          <!-- Hero text -->
          <div class=" block py-1 sm:flex sm:flex-col sm:justify-start sm:items-start sm:h-full  sm:w-[260px] md:w-[450px] xl:w-[600px]">
            <small class="text-white font-Nunito font-normal text-xs block my-3 ">Boot Your Business</small>
            <div class="mb-4 w-[300px] sm:mx-0 sm:w-full md:w-[350px] lg:w-[450px] xl:w-[600px]">
              <h1 class="text-white font-bold text-xl font-ReadexPro sm:text-left sm:text-2xl md:text-4xl lg:text-5xl xl:text-6xl xl:leading-16xl:max-w-[500px]">Enthusiastic about coding. Fueled by the
                power of Laravel.
              </h1>
            </div>
            <div class="mb-4  max-w-[300px] mx-auto sm:mx-0 sm:max-w-[250px] md:max-w-[350px] lg:max-w-[450px]">
              <p class="text-white text-center font-normal text-xs font-NunitoSans sm:text-sm sm:text-left">
                Since 2020, we've been crafting, overseeing, and enhancing WordPress and Laravel applications 
              </p>
            </div>
            <div class="block ">
              <a class="block text-center text-base font-normal text-purple-900 bg-white w-44 mx-auto py-3 my-5 rounded-3xl uppercase"
                href="#">
                Learn More
              </a>
            </div>
          </div>
          <!-- Hero Image -->
          <div class="block w-full sm:w-[380px] sm:h-[380px] sm:absolute top-20 right-0 sm:flex sm:justify-center sm:items-center md:w-[410px] md:h-[410px] lg:w-[510px] lg:h-[510px] xl:w-[710px] xl:h-[710px]">
            <img class="w-full h-full object-cover object-center" src="/assets/images/slider-girl-img-1.png"
              alt="slider-girl-image">
          </div>
        </div>
      </div>
    </header>
    <!-- Hidden Header for Small devices -->
    {{-- <header>

    </header> --}}
  </body>
  <script src="/assets/js/index.js"></script>

</html>