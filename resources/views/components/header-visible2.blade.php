<header class="w-full h-fit bg-hero-upper">
  <div class="w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
    <!-- Navigation and logo -->
    <x-navigation-site2 />
    <!-- end Navigation and logo -->
  </div>
  {{-- Header section --}}
</header>
@if(session('success'))
<p class="text-green-500">{{ session('success') }}</p>
@endif