@if (!Request::is('/'))
<header class="w-full h-fit bg-hero-upper">
    <div class="w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!-- Navigation and logo -->
      <x-navigation-site />
      <!-- end Navigation and logo -->
    </div>
    {{-- Header section --}}
  </header>
@else
<header class="w-full h-fit bg-hero-upper bg-cover bg-bottom bg-no-repeat sm:relative sm:h-[580px] lg:h-[780px]">
    <div class="w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
        <!-- Navigation and logo -->
        <x-navigation-site />
        <!-- end Navigation and logo -->

        <!-- Hero section  -->
        <div
            class="block text-center sm:-mt-20 sm:flex sm:justify-between sm:items-center  sm:absolute sm:top-1/2 sm:left-1/2 sm:-translate-x-1/2 sm:-translate-y-1/2 sm:w-[600px] md:w-[700px] lg:w-[900px] xl:w-[1220px] xl:mt-0">
            <!-- Hero text -->
            <div
                class="block animate-SlideInLeft py-1  sm:flex sm:flex-col sm:justify-start sm:items-start sm:h-full sm:w-[260px] md:w-[450px] xl:w-[600px]">
                <small class="text-white font-normal text-sm leading-4 block my-3 sm:pl-0 lg:font-medium lg:text-sm">
                    {{ $upper }}
                </small>
                <div
                    class="mb-4 animate-SlideInLeft max-w-[300px] mx-auto sm:mx-0 sm:w-full md:max-w-none  md:w-[350px] lg:w-[450px] xl:w-[600px]">
                    <h1
                        class="text-white font-bold text-4xl sm:text-3xl sm:text-left lg:text-5xl  xl:text-6xl xl:leading-16 ">
                        {{ $title }}
                    </h1>
                </div>
                <div class="mb-4  max-w-[300px] mx-auto sm:mx-0 sm:max-w-[250px] md:max-w-[350px] lg:max-w-[450px]">
                    <p class="text-white text-center font-normal text-xl sm:text-left">
                        {{ $description }}
                    </p>
                </div>
                <div class="block">
                    <a class="block text-center text-sm font-semibold text-purple-700 bg-white  mx-auto p-3 my-5 rounded hover:bg-black hover:text-white  uppercase animate-bounce transition-all"
                        href="{{ $CTA_Link }}">
                        {{ $CTA }}
                    </a>
                </div>
            </div>
            <!-- Hero Image -->
            <div
                class="block animate-SlideInRight w-full sm:w-[400px] sm:h-[390px] sm:absolute top-10 right-0 sm:flex sm:justify-center sm:items-center md:w-[425px] md:h-[415px] lg:w-[530px] lg:h-[518px] xl:w-[675px] xl:h-[660px]">
                <img class="w-full h-full object-cover object-center" src="{{ $image }}" alt="slider-girl-image">
            </div>

        </div>
    </div>
</header>
@endif
@if(session('success'))
<p class="text-green-500">{{ session('success') }}</p>
@endif