<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    <x-head />
    <!-- Head -->

    <body class="bg-gray-50 font-inter">
        {{-- //in your blade template --}}
        @include('cookie-consent::index')
        <!--Hidden Navigation and logo for Small devices -->
        <x-navigation-small-devices />
        <!--ENd Hidden Navigation and logo for Small devices -->
        <!-- Header -->
        <x-header-visible>
          <x-slot:upper>
             {{-- Email Marketing & Shopify Agency --}}
             @lang('home.email Marketing')
          </x-slot:upper>
          <x-slot:title>
            Shopify – Tech & Marketing Solutions
          </x-slot:title>
          <x-slot:description>
            Focus on growing your business while we handle all your Shopify tech and marketing needs.
          </x-slot:description>
          <x-slot:CTA_Link>
             {{ route('contact.index') }}
          </x-slot:CTA_Link>
          <x-slot:CTA>
              {{-- Work with us --}}
              @lang('home.Work with us')
          </x-slot:CTA>
          <x-slot:image>
              {{ url('/assets/images/slider-girl-img-1.png') }}
          </x-slot:image>
        </x-header-visible>

        <!-- Hero section  -->
        {{ $slot }}
        <!-- Footer -->
        <x-footer />
        <!-- End Footer -->

    </body>
</html>
