<x-web-site-layout2>
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
          <i class="fa-brands fa-facebook text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          Facebook Management
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          "Unlock the Power of Facebook Ads! 🚀 Connect with your audience where they spend their time online. Our
          Facebook Ads
          expertise helps you reach, engage, and convert customers like never before. From precise targeting to
          compelling ad
          creatives, we maximize your ROI in the world's largest social playground. Ready to boost your brand? Let's get
          social!
          📈💥 #FacebookAdsMastery #DigitalMarketing"
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.facebook') }}
        </x-slot:cardOneLink>
      </x-card-one>
      <x-card-one>
        <x-slot:cardOneIcon>
          <i class="fa-brands fa-google text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          Google Adsense
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          "Drive Success with Google Ads! 🌟 Harness the unparalleled reach and precision of Google Ads to elevate your
          digital
          presence. Our expert team crafts data-driven campaigns that capture attention, clicks, and conversions.
          Whether you're
          aiming for brand awareness or direct sales, we've got the winning strategy. Let's put your business at the top
          of
          Google's search results! 📊💼 #GoogleAdsPro #DigitalMarketing"
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.google') }}
        </x-slot:cardOneLink>
      </x-card-one>
      <x-card-one>
        <x-slot:cardOneIcon>
          <i class="fa-brands fa-tiktok text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          TikTok Ads
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          "Unleash Creativity with TikTok Ads! 🎉 Dive into the world of viral sensations and trendsetting content. Our
          TikTok Ads
          experts know how to capture the attention of the ever-scrolling audience. From catchy challenges to engaging
          storytelling, we'll make your brand the star of the next big hit. Ready to go viral? Let's dance into TikTok
          success!
          💃📱 #TikTokAdsRevolution #DigitalMarketing"
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.tiktok') }}
        </x-slot:cardOneLink>
      </x-card-one>

    </div>
  </section>
  <br><br>
  <!--End Services box description -->
</x-web-site-layout2>