<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://webizycode.com/blog">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/ico" href="{{ url('/assets/images/favicon.ico') }}">
    {{-- End Favicon --}}
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--Testimonial code : https://www.hyperui.dev/components/marketing/testimonials -->
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
    <script type="module">
        import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

      const keenSlider = new KeenSlider(
        '#keen-slider',
        {
          loop: true,
          slides: {
            origin: 'center',
            perView: 1.25,
            spacing: 16,
          },
          breakpoints: {
            '(min-width: 1024px)': {
              slides: {
                origin: 'auto',
                perView: 2.5,
                spacing: 32,
              },
            },
          },
        },
        []
      )

      const keenSliderPrevious = document.getElementById('keen-slider-previous')
      const keenSliderNext = document.getElementById('keen-slider-next')

      keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
      keenSliderNext.addEventListener('click', () => keenSlider.next())
    </script>
    {{-- Schema Markup --}}
    <script type="application/ld+json">
      {
        "@context": "https://webizycode.com/",
        "@type": "Web Development Agency",
        "name": "Webizy Code",
        "url": "https://webizycode.com/",
        "logo": "https://webizycode.com/originale-logo-webizy-1.png"
      }
    </script>

    {{-- Schema Markup --}}
    <!--End Testimonial code : https://www.hyperui.dev/components/marketing/testimonials -->
    {{-- TItle --}}
    <title>@yield('title')</title>
    {{-- Description --}}
    <!-- Vite -->
    @vite('resources/css/app.css')

</head>
