<!-- Navigation and logo -->
<nav class="hidden lg:flex lg:justify-between lg:items-center lg:w-full">
  <!-- Logo -->
  <div class="hidden lg:block">
    <a href="{{ route('home') }}" class="">
      <img class="w-[50px]" src="{{ url('assets/images/originale-logo-webizy-1.png') }}" alt="webizy-code-logo">
    </a>
  </div>
  <!-- Navigation Menu-->
  <ul class="lg:flex lg:justify-between lg:items-center lg:w-[550px]">
    <li class="lg:text-white  lg:text-xs uppercase lg:font-semibold leading-4 hover:text-black transition-all"><a
        class="" href="{{ route('home') }}">Home</a></li>
    <li id="services"
      class="lg:relative  lg:text-white  lg:text-xs uppercase lg:font-semibold leading-4 hover:text-black transition-all">
      <a class="" href="#">Services</a>
      <div id="services-card"
        class="hidden lg:absolute lg:hidden lg:bg-white lg:w-[200px] lg:mt-2 lg:z-10 lg:rounded-md lg:border">
        <a class="hidden lg:block lg:text-black lg:my-3  lg:px-3 lg:text-xs leading-4 hover:underline hover:text-purple-700"
          href="{{ route('services.shopify') }}">Shopify design </a>
        <a class="hidden lg:block lg:text-black lg:my-3  lg:px-3 lg:text-xs leading-4 hover:underline hover:text-purple-700"
          href="{{ route('services.shopify') }}">Shopify </a>
        <a class="hidden lg:block lg:text-black lg:my-3  lg:px-3 lg:text-xs leading-4 hover:underline hover:text-purple-700"
          href="{{ route('services.laravel') }}">Laravel </a>
        <a class="hidden lg:block lg:text-black lg:my-3  lg:px-3 lg:text-xs leading-4 hover:underline hover:text-purple-700"
          href="{{ route('services.e-commerce') }}">E-commerce </a>
        <a class="hidden lg:block lg:text-black lg:my-3  lg:px-3 lg:text-xs leading-4 hover:underline hover:text-purple-700"
          href="{{ route('services.reactjs') }}">Reactjs </a>
        <a class="hidden lg:block lg:text-black lg:my-3  lg:px-3 lg:text-xs leading-4 hover:underline hover:text-purple-700"
          href="{{ route('services.social-advertisement') }}">Social & Advertisement</a>
      </div>
    </li>
    <li class="lg:text-white  lg:text-xs uppercase lg:font-semibold leading-4 hover:text-black transition-all">
      <a class="" href="{{ route('blog') }}">Blog</a>
    </li>
    <li class="lg:text-white  lg:text-xs uppercase lg:font-semibold leading-4 hover:text-black transition-all"><a
        class="" href="{{ route('youtube.show') }}">Youtube</a></li>
    <li class="lg:text-white  lg:text-xs uppercase lg:font-semibold leading-4 hover:text-black transition-all"><a
        class="" href="{{ route('portfolio.show') }}">Portfolio</a></li>
    <li class="lg:text-white  lg:text-xs uppercase lg:font-semibold leading-4 hover:text-black transition-all"><a
        class="" href="{{ route('contact.index') }}">Contact Us</a></li>
    {{-- <li class="lg:text-white  lg:text-xs uppercase lg:font-semibold leading-4 hover:text-black transition-all"><a class="" href="/">Home</a></li> --}}
  </ul>
  <!-- CTA -->
  <div class="block">
    <a class="block text-center lg:text-xs lg:font-semibold leading-4 w-[200px] mx-auto py-3 my-9 rounded-full uppercase bg-transparant border-2 border-white text-white hover:bg-black hover:font-semibold transition-all"
      href="https://calendly.com/kambacharles11/30min">Free Consultancy</a>
  </div>
</nav>
<!-- end Navigation and logo -->