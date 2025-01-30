<!-- Navigation and logo -->
<nav class="hidden relative lg:flex lg:justify-between lg:items-center lg:w-full ">
    <!-- Logo -->
    <div class="hidden lg:block">
        <a href="{{ route('home') }}" class="font-outfit font-extrabold text-xl">
            {{-- <img class="w-[50px]" src="{{ url('assets/images/originale-logo-webizy-1.png') }}" alt="webizy-code-logo"> --}}
            EZAGROW
        </a>
    </div>
    <!-- Navigation Menu-->
    <ul class="lg:flex lg:justify-between lg:items-center lg:w-[550px]">
        <li class="lg:text-gray-900 lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            {{-- <a class="" href="{{ route('home') }}">Home</a> --}}
            <a class="" href="{{ route('home') }}">@lang('home.home')</a>
        </li>
        <li id="services"
            class="lg:relative  lg:text-gray-900 lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            <span class="">Services</span>
            <div id="services-card"
                class="hidden lg:absolute lg:hidden lg:bg-blue-900 lg:w-[200px] lg:mt-2 lg:z-10 lg:rounded-md">
                <a class="hidden lg:block lg:text-white lg:my-3 leading-4  lg:px-3 lg:text-xs hover:underline "
                    href="{{ route('home') }}">
                    Shopify Development
                </a>
                <a class="hidden lg:block lg:text-white lg:my-3 leading-4  lg:px-3 lg:text-xs hover:underline "
                    href="{{ route('services.wordpress') }}">
                    Wordpress Development
                </a>
            </div>
        </li>
        <li class="lg:text-gray-900 lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            {{-- <a class="" href="{{ route('blog') }}">Blog</a> --}}
            <a class="" href="{{ route('blog') }}">@lang('home.blog')</a>
        </li>
        <li class="lg:text-gray-900 lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            {{-- <a class="" href="{{ route('youtube.show') }}">Youtube</a> --}}
            <a class="" href="{{ route('youtube.show') }}">@lang('home.youtube')</a>
        </li>
        <li class="lg:text-gray-900 lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            {{-- <a class="" href="{{ route('portfolio.show') }}">Portfolio</a> --}}
            <a class="" href="{{ route('portfolio.show') }}">@lang('home.portfolio')</a>
        </li>
        <li class="lg:text-gray-900 lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            {{-- <a class="" href="{{ route('contact.index') }}">Contact Us</a> --}}
            <a class="" href="{{ route('contact.index') }}">@lang('home.contact us')</a>
        </li>
        {{-- <li class="lg:text-gray-900 lg:text-base lg:font-normal  hover:text-black transition-all"><a class="" href="/">Home</a></li> --}}
    </ul>
    <!-- CTA -->
    <div class="block">
        <a class="block text-center text-xs font-semibold leading-4  w-[200px] mx-auto py-4 my-9 rounded-lg uppercase bg-blue-800 border border-blue-800 text-white hover:bg-black hover:font-semibold transition-all"
            href="https://calendly.com/webizycode">
            FREE CONSULTANCY
        </a>
    </div>

</nav>
<!-- end Navigation and logo -->
{{-- Changing language --}}
<div
    class="lang fixed left-2 rounded-md py-1 top-20 z-10 bg-white w-11 h-fit flex justify-center items-center flex-col cursor-pointer">
    <p class="langText"></p>
    <a href="locale/en" class="en hidden w-8 h-fit  bg-transparent">
        <img class="block w-full h-full object-cover object-center" src="{{ '/assets/images/united-states.png' }}"
            alt="">
    </a>
    <a href="locale/cs" class="cs hidden w-8 h-fit  bg-transparent">
        <img class="block w-full h-full object-cover object-center" src="{{ '/assets/images/czech-republic.png' }}"
            alt="">
    </a>
</div>
