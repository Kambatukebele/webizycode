@if (!Request::is('/'))
    <header class="w-full relative bg-hero bg-cover bg-center bg-no-repeat">
        <div class="container mx-auto px-4">
            <!-- Navigation and logo -->
            <x-navigation-site />
            <!-- end Navigation and logo -->
        </div>
        {{-- Header section --}}
    </header>
@else
    <header class="w-full h-[55vh] relative bg-hero bg-cover bg-center bg-no-repeat md:h-[80vh]">
        <div class="container mx-auto px-4">
            <!-- Navigation and logo -->
            <x-navigation-site />
            <!-- end Navigation and logo -->

            <!-- Hero section  -->
            <div class="block animate-SlideInLeft py-4 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <h1
                    class="font-outfit text-gray-950 mb-5 w-[290px] font-extrabold text-center text-4xl sm:text-center sm:mx-auto sm:w-[490px] sm:text-5xl md:text-6xl md:w-[590px] lg:text-7xl lg:w-[900px] lg:px-28 xl:text-8xl xl:px-10 xl:w-[990px]">
                    {{ $title }}
                </h1>
                <p
                    class="font-poppins text-base mb-5 text-gray-700 font-normal text-center sm:text-xl lg:w-[700px] mx-auto">
                    {{ $description }}
                </p>
                <a class="block text-center w-44 text-sm font-semibold text-white bg-blue-800 mx-auto p-4 my-5 rounded-lg hover:bg-black hover:text-white  uppercase animate-bounce transition-all"
                    href="{{ $CTA_Link }}">
                    {{ $CTA }}
                </a>
            </div>
        </div>
    </header>
@endif
@if (session('success'))
    <p class="text-green-500">{{ session('success') }}</p>
@endif
