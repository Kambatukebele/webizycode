<header class="w-full h-fit bg-hero-upper bg-cover bg-bottom bg-no-repeat sm:relative sm:h-[580px] lg:h-[780px]">
  <div class="w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
    <!-- Navigation and logo -->
    <nav class="hidden lg:flex lg:justify-between lg:items-center lg:w-full">
      <!-- Logo -->
      <div class="hidden lg:block">
        <a href="{{ route('home') }}" class="">
          <img class="w-[50px]" src="/assets/images/originale-logo-webizy-1.png" alt="webizy-code-logo">
        </a>
      </div>
      <!-- Navigation Menu-->
      <ul class="lg:flex lg:justify-between lg:items-center lg:w-[400px]">
        <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a
            class="" href="/">Home</a></li>
        <li id="services"
          class="lg:relative  lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all">
          <a class="" href="{{ route('services') }}">Services</a>
          <div id="services-card"
            class="hidden lg:absolute lg:hidden lg:bg-white lg:w-[200px] lg:mt-2 lg:z-10 lg:rounded-md">
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
              href="{{ route('services.facebook') }}">Facebook ADS</a>
          </div>
        </li>
        <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all">
          <a class="" href="{{ route('blog') }}">Blog</a>
          {{-- <div class="hidden lg:absolute lg:block lg:bg-white lg:w-[200px] lg:mt-2 lg:z-10 lg:rounded-md">
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
  </div> --}}
  </li>
  <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a class=""
      href="{{ route('portfolio') }}">Portfolio</a></li>
  <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a class=""
      href="{{ route('contact-us') }}">Contact Us</a></li>
  {{-- <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a class="" href="/">Home</a></li> --}}
  </ul>
  <!-- CTA -->
  <div class="block">
    <a class="block text-center text-base font-normal w-[200px] mx-auto py-3 my-9 rounded-full uppercase bg-transparent border-2 border-white text-white hover:bg-black hover:font-semibold transition-all"
      href="{{ route('contact-us') }}">Free Consultancy</a>
  </div>
  </nav>
  <!-- end Navigation and logo -->

  <!-- Hero section  -->
  <div
    class="block text-center sm:-mt-20 sm:flex sm:justify-between sm:items-center  sm:absolute sm:top-1/2 sm:left-1/2 sm:-translate-x-1/2 sm:-translate-y-1/2 sm:w-[600px] md:w-[700px] lg:w-[900px] xl:w-[1220px] xl:mt-0">
    <!-- Hero text -->
    <div
      class="block animate-SlideInLeft py-1  sm:flex sm:flex-col sm:justify-start sm:items-start sm:h-full sm:w-[260px] md:w-[450px] xl:w-[600px]">
      <small class="text-white font-Nunito font-normal text-xs block my-3 lg:font-medium lg:text-base">The only value
        proposition that really matters:</small>
      <div
        class="mb-4 animate-SlideInLeft max-w-[300px] mx-auto sm:mx-0 sm:w-full md:max-w-none  md:w-[350px] lg:w-[450px] xl:w-[600px]">
        <h1
          class="text-white font-bold text-xl font-ReadexPro sm:text-left sm:text-2xl md:text-4xl lg:text-5xl xl:text-6xl xl:leading-16 ">
          Bespoke software development for Small size Business
        </h1>
      </div>
      <div class="mb-4  max-w-[300px] mx-auto sm:mx-0 sm:max-w-[250px] md:max-w-[350px] lg:max-w-[450px]">
        <p class="text-white text-center font-normal text-xs font-NunitoSans sm:text-sm sm:text-left">
          We design exceptional digital products to streamline your business processes and save resources.
        </p>
      </div>
      <div class="block">
        <a class="block text-center text-base font-semibold text-purple-700 bg-white  mx-auto p-3 my-5 rounded-full hover:bg-black hover:text-white hover:font-medium uppercase animate-bounce transition-all"
          href="#">
          Work with with us
        </a>
      </div>
    </div>
    <!-- Hero Image -->
    <div
      class="block animate-SlideInRight w-full sm:w-[400px] sm:h-[390px] sm:absolute top-10 right-0 sm:flex sm:justify-center sm:items-center md:w-[425px] md:h-[415px] lg:w-[530px] lg:h-[518px] xl:w-[675px] xl:h-[660px]">
      <img class="w-full h-full object-cover object-center" src="/assets/images/slider-girl-img-1.png"
        alt="slider-girl-image">
    </div>

  </div>
  </div>
</header>