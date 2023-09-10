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
                class="" href="{{ route('home') }}">Home</a></li>
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
                    href="{{ route('services.tiktok') }}">TikTok ADS</a>
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
        <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a
                class="" href="{{ route('portfolio') }}">Portfolio</a></li>
        <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a
                class="" href="{{ route('contact-us') }}">Contact Us</a></li>
        {{-- <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a class="" href="/">Home</a></li> --}}
    </ul>
    <!-- CTA -->
    <div class="block">
        <a class="block text-center text-base font-normal w-[200px] mx-auto py-3 my-9 rounded-full uppercase bg-transparent border-2 border-white text-white hover:bg-black hover:font-semibold transition-all"
            href="{{ route('contact-us') }}">Free Consultancy</a>
    </div>
</nav>
<!-- end Navigation and logo -->