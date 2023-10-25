<nav class="bg-white relative w-full lg:hidden">
  <div class="flex justify-between items-center py-2 w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] ">
    <!--Logo -->
    <div class="block">
      <a href="{{ route('home') }}" class="">
        <img class="w-[30px]" src="{{ url('assets/images/originale-logo-webizy-1.png') }}" alt="webizy-code-logo">
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
  <ul class="hidden absolute w-full bg-white border z-50 py-6 " id="small-device-card-menu">
    <li class="text-center mb-2 font-semibold">
      <a class="text-black text-xs uppercase  leading-4 my-5 " href="{{ route('home') }}">
        Home
      </a>
    </li>
    <li class="text-center mb-2 font-semibold"><a class="text-black text-xs uppercase  leading-4 my-5 "
        href="{{ route('services') }}">Services</a></li>
    <li class="text-center mb-2 font-semibold"><a class="text-black text-xs uppercase  leading-4 my-5 "
        href="{{ route('blog') }}">Blog</a></li>
    <li class="text-center mb-2 font-semibold"><a class="text-black text-xs uppercase  leading-4 my-5 "
        href="{{ route('youtube.show') }}">Youtube</a></li>
    <li class="text-center mb-2 font-semibold"><a class="text-black text-xs uppercase  leading-4 my-5 "
        href="{{ route('portfolio.show') }}">Portfolio</a></li>
    <li class="text-center mb-2 font-semibold">
      <a class="text-black text-xs uppercase  leading-4 my-5 " href="{{ route('contact.index') }}">Contact Us</a>
    </li>
  </ul>
</nav>