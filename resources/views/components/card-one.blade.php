<div
    class="w-full mx-auto flex flex-col justify-center items-start rounded-md p-5 my-3 border bg-white  hover:shadow-2xl sm:max-w-[550px] lg:max-w-[280px]  lg:items-center xl:max-w-[390px]">
    <!--Icon -->
    <div class="block lg:flex lg:justify-center lg:items-center my-5 text-purple-700">
        {{-- <i class="fa-brands fa-wordpress text-4xl"></i> --}}
        {{ $cardOneIcon }}
    </div>
    <!-- Title -->
    <div class="my-3 lg:mt-0">
        <h3 class="text-black text-2xl font-semibold lg:text-center">{{ $cardOneTitle }}
        </h3>
        {{-- WordPress Development --}}
    </div>
    <!-- Description -->
    <div class="mb-1">
        <p class="text-gray-700 font-normal text-base lg:text-left">
            {{ $cardOneDescription }}
        </p>
        {{-- "Unlock the Power of Digital with our WordPress Wizards! 🚀 Elevate your online presence with custom
        WordPress
        solutions
        that blend innovation, creativity, and performance. We turn pixels into profits, one pixel at a time! --}}
    </div>
    <div class="block">
        <a class="block text-center text-sm font-semibold text-white bg-purple-700 w-[150px] mx-auto py-3 my-5 rounded hover:bg-black hover:text-white hover:font-medium uppercase"
            href="{{ $cardOneLink }}">
            <!-- Learn More -->
            @lang('home.More')
        </a>
    </div>
</div>