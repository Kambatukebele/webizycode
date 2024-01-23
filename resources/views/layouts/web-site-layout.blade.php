<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    <x-head />
    <!-- Head -->

    <body class="bg-gray-50 font-montserrat">
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
              {{-- Elevate your Shopify brand for conversion --}}
              @lang('home.elevate your shopify brand for conversion')
          </x-slot:title>
          <x-slot:description>
            {{-- We leverage personalized Shopify email strategies to enhance your online presence and drive digital success. --}}
            @lang('home.we leverage personalized Shopify email strategies to enhance your online presence and drive digital success.')
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