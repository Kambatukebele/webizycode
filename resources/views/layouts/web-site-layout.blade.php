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
              The
              only value
              proposition that really matters:
          </x-slot:upper>
          <x-slot:title>
              {{-- Bespoke software development for Small size Business --}}
              {{-- Tailored software solutions for small businesses. --}}
              {{-- Custom <br> Web <br> development --}}
              E-Commerce web developement and SEO Agency
          </x-slot:title>
          <x-slot:description>
              We design exceptional digital products to streamline your business processes and save resources.
          </x-slot:description>
          <x-slot:CTA_Link>
             {{ route('contact.index') }}
          </x-slot:CTA_Link>
          <x-slot:CTA>
              Work with us
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