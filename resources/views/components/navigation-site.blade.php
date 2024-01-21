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
        <li class="lg:text-white lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            <a class="" href="{{ route('home') }}">Home</a>
        </li>
        <li id="services"
            class="lg:relative  lg:text-white lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            <a class="" href="{{ route('services') }}">Services</a>
            <div id="services-card"
                class="hidden lg:absolute lg:hidden lg:bg-white lg:w-[200px] lg:mt-2 lg:z-10 lg:rounded-md">
                <a class="hidden lg:block lg:text-black lg:my-3 leading-4  lg:px-3 lg:text-xs hover:underline hover:text-purple-700"
                    href="{{ route('services.shopify') }}">Shopify design </a>
                <a class="hidden lg:block lg:text-black lg:my-3 leading-4  lg:px-3 lg:text-xs hover:underline hover:text-purple-700"
                    href="{{ route('services.email-marketing') }}">Email Marketing</a>
                <a class="hidden lg:block lg:text-black lg:my-3 leading-4  lg:px-3 lg:text-xs hover:underline hover:text-purple-700"
                    href="{{ route('services.store-speed-optimization') }}">Speed Optimization</a>
                    <a class="hidden lg:block lg:text-black lg:my-3 leading-4  lg:px-3 lg:text-xs hover:underline hover:text-purple-700"
                    href="{{ route('services.migration') }}">Shopify Migration</a>
            </div>
        </li>
        <li class="lg:text-white lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            <a class="" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="lg:text-white lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            <a class="" href="{{ route('youtube.show') }}">Youtube</a>
        </li>
        <li class="lg:text-white lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            <a class="" href="{{ route('portfolio.show') }}">Portfolio</a>
        </li>
        <li class="lg:text-white lg:text-xs uppercase lg:font-semibold leading-4  hover:text-black transition-all">
            <a class="" href="{{ route('contact.index') }}">Contact Us</a>
        </li>
        {{-- <li class="lg:text-white lg:text-base lg:font-normal  hover:text-black transition-all"><a class="" href="/">Home</a></li> --}}
    </ul>
    <!-- CTA -->
    <div class="block">
        <a class="block text-center text-xs font-semibold leading-4  w-[200px] mx-auto py-3 my-9 rounded uppercase bg-transparent border border-white text-white hover:bg-black hover:font-semibold transition-all"
            href="https://calendly.com/webizycode">Free Consultancy</a>
    </div>
</nav>
<!-- end Navigation and logo -->