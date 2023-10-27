@section('title', 'Services | Comprehensive Web Development and SEO Services')
@section('description', 'Discover our complete web development and SEO services. Elevate your online presence with our comprehensive solutions.')
<x-web-site-layout>
  <x-header-section>
    <x-slot:titlePage>
      Services
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>
  <section class="w-full">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] xl:w-[1220px] lg:flex lg:justify-between lg:items-center">
      <!--Box -->
      <x-card-one>
        <x-slot:cardOneIcon>
          <i class="fa-brands fa-wordpress text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          WordPress Development
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          "Unlock the Power of Digital with our WordPress Wizards! 🚀 Elevate your online presence with custom WordPress
          solutions
          that blend innovation, creativity, and performance. We turn pixels into profits, one pixel at a time! 💻✨
          #WordPressMagic #WebDevMasters"
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.wordpress') }}
        </x-slot:cardOneLink>
      </x-card-one>
      <x-card-one>
        <x-slot:cardOneIcon>
          <i class="fa-brands fa-laravel text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          Laravel Development
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          "Crafting digital masterpieces with Laravel! 🛠️ Elevate your web presence with our expert Laravel development
          team. We
          turn your ideas into elegant, high-performance web solutions. Your success, our code! 💡💼 #LaravelMasters
          #WebDevExcellence"
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.laravel') }}
        </x-slot:cardOneLink>
      </x-card-one>
      <x-card-one>
        <x-slot:cardOneIcon>
          <i class="fa-brands fa-shopify text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          Shopify Development
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          "Shopify Superheroes at Your Service! 🛍️ Transform your e-commerce dreams into reality with our Shopify
          development
          expertise. From store setup to sales growth, we're your one-stop-shop for online success. Let's build your
          e-commerce
          empire together! 💼🚀 #ShopifySolutions #EcommercePros"
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.shopify') }}
        </x-slot:cardOneLink>
      </x-card-one>

    </div>
  </section>
  <br>
  <section class="w-full">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] xl:w-[1220px] lg:flex lg:justify-between lg:items-center">
      <!--Box -->
      <x-card-one>
        <x-slot:cardOneIcon>
          {{-- <i class="fa-brands fa-facebook text-4xl"></i> --}}
          <i class="fa-solid fa-cart-shopping text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          E-Commerce Development
          {{-- Facebook Management --}}
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          "Elevate Your E-commerce Game with Laravel, WordPress, and Shopify! 🛒 Dive into the world of online shopping
          excellence. Our experts specialize in crafting top-notch e-commerce solutions using these powerful platforms.
          From
          customizable options in Laravel to the content-driven prowess of WordPress and the ease of use in Shopify, we
          tailor the
          perfect e-commerce strategy for your business. Ready to thrive in the world of online retail? Let's get
          started! 💼🚀
          #EcommerceExcellence #Laravel #WordPress #Shopify"
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.e-commerce') }}
        </x-slot:cardOneLink>
      </x-card-one>
      <x-card-one>
        <x-slot:cardOneIcon>
          <i class="fa-brands fa-react text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          Reactjs/Nextjs
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          "Elevate Your Web Experience with ReactJS! 🚀 Dive into the world of dynamic interactivity and responsive
          design. Our
          experts harness the power of ReactJS to create stunning web solutions that engage and inspire. Ready to take
          your web
          presence to the next level? Let's get started! 💼🚀 #ReactJSRevolution #WebDevelopment"
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.reactjs') }}
        </x-slot:cardOneLink>
      </x-card-one>
      <x-card-one>
        <x-slot:cardOneIcon>
          <i class="fa-solid fa-rectangle-ad text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          Advertisement
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          "Elevate Your Brand's Reach with Google Ads, Facebook, Instagram, and TikTok! 🌐🚀 Dive into the world of
          targeted
          advertising and social media excellence. Our experts specialize in crafting compelling ad campaigns that
          captivate
          audiences on Google, Facebook, Instagram, and TikTok. From precise targeting to eye-catching visuals, we make
          your brand
          the star of the next big hit. Ready to go viral and reach new heights? Let's lead your advertising revolution!
          💫📱
          #DigitalMarketingMasters #AdvertisingExcellence"
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.social-advertisement') }}
        </x-slot:cardOneLink>
      </x-card-one>

    </div>
  </section>
  <br><br>
  <!--End Services box description -->
</x-web-site-layout>