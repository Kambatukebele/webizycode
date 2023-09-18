<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Google Fonts -->
        <!--Montserrat-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <!-- End Google Fonts -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <!-- Vite -->
        @vite('resources/css/app.css')
        <title>Document</title>
    </head>

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
                E-Commerce web developement
            </x-slot:title>
            <x-slot:description>
                We design exceptional digital products to streamline your business processes and save resources.
            </x-slot:description>
            <x-slot:CTA_Link>
                https://laravel.com/docs/10.x/blade#slots
            </x-slot:CTA_Link>
            <x-slot:CTA>
                Work with with us
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