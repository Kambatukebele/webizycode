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
        <!--Hidden Navigation and logo for Small devices -->
        <x-navigation-small-devices />
        <!--ENd Hidden Navigation and logo for Small devices -->
        <!-- Header -->
        <x-header-visible2 />
        <!-- Hero section  -->
        {{ $slot }}
        <!-- Footer -->
        <x-footer />
        <!-- End Footer -->

    </body>


</html>