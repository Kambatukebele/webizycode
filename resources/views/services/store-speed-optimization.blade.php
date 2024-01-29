@section('title', 'Shopify Store Speed Optimization | Expert Shopify Development Services')
@section('description', 'Supercharge your online performance with our cutting-edge speed optimization services at WebizyCode. We specialize in enhancing website speed, ensuring swift page load times for an exceptional user experience. From code optimization to image compression, trust us to streamline your site and boost its efficiency. Explore our speed optimization solutions and propel your online presence to new heights.')
<x-web-site-layout>
  <x-header-section>
    <x-slot:titlePage>
      {{-- Store Speed Optimization --}}
      @lang('shopify_speed_optimization.Shopify Store Speed Optimization')
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>
  <section class="w-full h-fit py-7 my-10 relative">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px]  lg:w-[900px] lg:flex lg:justify-between lg:items-start xl:w-[1220px]">
      <!--Image -->
      <div class="w-full rounded-xl shadow-lg mx-auto lg:w-[450px] xl:w-[600px]">
        <img class="w-full rounded-xl h-full object-cover object-center" src="{{ url('/assets/images/optimization2.png') }}" alt="shopify-store-optimization-photo">
      </div>
      <!--Text -->
      <div class="block mt-5 lg:mt-0 lg:w-[400px] xl:w-[550px]">
        <h2 class="mb-5 font-semibold  text-black text-4xl text-center lg:text-left"> 
          @lang('shopify_speed_optimization.Shopify Store Speed Optimization')
        </h2>
        <p class="font-normal  text-gray-700 text-base">
           @lang('shopify_speed_optimization.At Webizycode, we understand the importance of website speed for ecommerce businesses.') <br><br> @lang('shopify_speed_optimization.Our team of experts will work closely with you to analyze and identify areas of your website that are slowing down the loading time.')<br><br>  @lang('shopify_speed_optimization.We will then implement a range of optimization techniques to improve the performance of your website.') <br><br> @lang("shopify_speed_optimization.Our Shopify page speed optimization service will not only improve the user experience for your customers but also help to increase your website's visibility on search engines, resulting in more traffic and higher conversion rates.")
            <br><br>
             @lang("shopify_speed_optimization.Don't let slow page speed hold back your ecommerce business. Contact Webizycode today")
        </p>
        <br>        
      </div>
    </div>
  </section>
  <section class="w-full h-fit py-7 my-10 relative">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px]  lg:w-[900px] lg:flex lg:justify-between lg:items-start xl:w-[1220px]">
      <!--Text -->
      <div class="block  lg:w-[400px] xl:w-[550px]">
        <h2 class="mb-5 font-semibold  text-black text-4xl text-center lg:text-left">
           @lang("shopify_speed_optimization.Online shoppers don’t like to wait!")
        </h2>
        <p class="font-normal  text-gray-700 text-base">
           @lang("shopify_speed_optimization.Website conversion rates drop by an average of 4.42% with each additional second of load time (between 0-5 seconds). The longer your Shopify store load time, the higher is the bounce rate.")
            <br><br>
            *  @lang("shopify_speed_optimization.- 45% shoppers say they are less likely to make a purchase if the site loads slower")
                <br><br>
            * @lang("shopify_speed_optimization.- 37% of online shoppers don’t return to a slow Shopify website")
        </p>        
      </div>
      <!--Image -->
      <div class="w-full mt-5 lg:mt-0 rounded-xl shadow-lg mx-auto lg:w-[450px] xl:w-[600px]">
        <img class="w-full rounded-xl h-full object-cover object-center" src="{{ url('/assets/images/optimization3.webp') }}" alt="">
      </div>
    </div>
  </section>
  <section class="w-full h-fit py-7 my-10 relative">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px]  lg:w-[900px] lg:flex lg:justify-between lg:items-start xl:w-[1220px]">
      <!--Image -->
      <div class="w-full rounded-xl shadow-lg mx-auto lg:w-[450px] xl:w-[600px]">
        <img class="w-full rounded-xl h-full object-cover object-center" src="{{ url('/assets/images/optimization4.webp') }}" alt="image">
      </div>
      <!--Text -->
      <div class="block mt-5 lg:mt-0 lg:w-[400px] xl:w-[550px]">
        <h2 class="mb-5 font-semibold  text-black text-4xl text-center lg:text-left">@lang("shopify_speed_optimization.Shopify store speed test and site audit")t</h2>
        <p class="font-normal  text-gray-700 text-base">
          @lang("shopify_speed_optimization.We deep dive into your Shopify dashboard analytics to conduct a thorough audit of your site performance. We run a Shopify store speed test to benchmark your site against industry best practices.")
          <br><br>
            * @lang("shopify_speed_optimization.Detailed analytics report")
            <br>
            * @lang("shopify_speed_optimization.Site audit report")
            <br>
            * @lang("shopify_speed_optimization.Store speed score")
            <br>
            * @lang("shopify_speed_optimization.Actionable insights for optimization")
            <br>
            * @lang("shopify_speed_optimization.Store speed optimization suggestions")
            <br>
            * @lang("shopify_speed_optimization.Recommended plan of action")
        </p>
        <br>
        
      </div>
    </div>
  </section>
  <section class="w-full h-fit py-7 my-10 relative">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px]  lg:w-[900px] lg:flex lg:justify-between lg:items-start xl:w-[1220px]">
      <!--Text -->
      <div class="block lg:w-[400px] xl:w-[550px]">
        <h2 class="mb-5 font-semibold  text-black text-4xl text-center lg:text-left">
          @lang("shopify_speed_optimization.Shopify site optimization services")
        </h2>
        <p class="font-normal  text-gray-700 text-base">
          @lang("shopify_speed_optimization.Based on the Shopify store speed test and app audit, we recommend a set of tasks to optimize your site. These include:")
          <br><br>
            * @lang("shopify_speed_optimization.Lazy loading and preloading")
            <br>
            * @lang("shopify_speed_optimization.Minify CSS/ JS")
            <br>
            * @lang("shopify_speed_optimization.Image optimization")
            <br>
            * @lang("shopify_speed_optimization.Deferred video loading")
            <br>
            * @lang("shopify_speed_optimization.App optimization")
            <br>
            * @lang("shopify_speed_optimization.Google PSI audit and optimization")
            <br>
            * @lang("shopify_speed_optimization.Error analysis and fix")
            <br>
            * @lang("shopify_speed_optimization.Source code management")
            <br>
            * @lang("shopify_speed_optimization.Developer analysis")
            <br>
            * @lang("shopify_speed_optimization.Google Analytics 4 (GA4) upgrade")
            <br>
            * @lang("shopify_speed_optimization.Shopify app customization")
            <br>
            * @lang("shopify_speed_optimization.Mobile site optimization")
            <br>
        </p>        
      </div>
      <!--Image -->
      <div class="w-full mt-5 lg:mt-0 rounded-xl shadow-lg mx-auto lg:w-[450px] xl:w-[600px]">
        <img class="w-full rounded-xl h-full object-cover object-center" src="{{ url('/assets/images/optimization5.webp') }}" alt="">
      </div>
    </div>
  </section>
  <section class="w-full h-fit py-7 my-10 relative">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px]  lg:w-[900px] lg:flex lg:justify-between lg:items-start xl:w-[1220px]">
      <!--Image -->
      <div class="w-full rounded-xl shadow-lg mx-auto lg:w-[450px] xl:w-[600px]">
        <img class="w-full rounded-xl h-full object-cover object-center" src="{{ url('/assets/images/optimization1.webp') }}" alt="">
      </div>
      <!--Text -->
      <div class="block mt-5 lg:mt-0 lg:w-[400px] xl:w-[550px]">
        <h2 class="mb-5 font-semibold  text-black text-4xl text-center lg:text-left">@lang("shopify_speed_optimization.Detailed Shopify site performance reporting")</h2>
        <p class="font-normal  text-gray-700 text-base">
         @lang("shopify_speed_optimization.Once we complete your Shopify site speed optimization, we monitor your online store for performance analysis.")
            <br><br>
       @lang("shopify_speed_optimization.Our team of Shopify experts create in-depth reporting to help you analyze site performance and identify opportunities to improve customer experience.")
          
        </p>
        <br>        
      </div>
    </div>
  </section>
  <!-- Benefits -->
  <section class="w-full h-fit bg-purple-800 mt-12 mb-0 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="font-bold text-white text-4xl text-center mb-5">@lang("shopify_speed_optimization.Benefits")</h3>
        {{-- <p class="text-sm font-normal text-center text-white">
          @lang("shopify_speed_optimization.Conduc")
        </p> --}}
      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-2 xl:grid-cols-3">
        <x-card-two>
          <x-slot:cardTwoNumber>
            1
          </x-slot:cardTwoNumber>
          <x-slot:cardTwoIcon>
            <i class="fa-solid fa-list-check block text-5xl text-purple-700"></i>
          </x-slot:cardTwoIcon>
          <x-slot:cardTwoTitle>
            @lang("shopify_speed_optimization.Improved UI/UX for customer experience")
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            
          </x-slot:cardTwoDescription>
        </x-card-two>
        {{-- 2 --}}
        <x-card-two>
          <x-slot:cardTwoNumber>
            2
          </x-slot:cardTwoNumber>
          <x-slot:cardTwoIcon>
            <i class="fa-solid fa-magnifying-glass block text-5xl text-purple-700"></i>
          </x-slot:cardTwoIcon>
          <x-slot:cardTwoTitle>
            @lang("shopify_speed_optimization.Improvement in SEO and search ranking")
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            
          </x-slot:cardTwoDescription>
        </x-card-two>
        {{-- 3 --}}
        <x-card-two>
          <x-slot:cardTwoNumber>
            3
          </x-slot:cardTwoNumber>
          <x-slot:cardTwoIcon>
            <i class="fa-solid fa-pen-nib block text-5xl text-purple-700"></i>
          </x-slot:cardTwoIcon>
          <x-slot:cardTwoTitle>
            @lang("shopify_speed_optimization.Reduce bounce and exit rate")
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            
          </x-slot:cardTwoDescription>
        </x-card-two>
        {{-- 4 --}}
        <x-card-two>
          <x-slot:cardTwoNumber>
            4
          </x-slot:cardTwoNumber>
          <x-slot:cardTwoIcon>
            <i class="fa-solid fa-code block text-5xl text-purple-700"></i>
          </x-slot:cardTwoIcon>
          <x-slot:cardTwoTitle>
           @lang("shopify_speed_optimization.Higher on-site conversion rate")
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            
          </x-slot:cardTwoDescription>
        </x-card-two>
        {{-- 5 --}}
        <x-card-two>
          <x-slot:cardTwoNumber>
            5
          </x-slot:cardTwoNumber>
          <x-slot:cardTwoIcon>
            <i class="fa-solid fa-paper-plane block text-5xl text-purple-700"></i>
          </x-slot:cardTwoIcon>
          <x-slot:cardTwoTitle>
            @lang("shopify_speed_optimization.Increased customer engagement and retention")
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
           
          </x-slot:cardTwoDescription>
        </x-card-two>
        {{-- 6 --}}
        {{-- <x-card-two>
          <x-slot:cardTwoNumber>
            6
          </x-slot:cardTwoNumber>
          <x-slot:cardTwoIcon>
            <i class="fa-solid fa-screwdriver-wrench block text-5xl text-purple-700"></i>
          </x-slot:cardTwoIcon>
          <x-slot:cardTwoTitle>
            Finalizing and Developing
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            
          </x-slot:cardTwoDescription>
        </x-card-two> --}}
      </div>
  </section>
  <!-- End Benefits -->
  <br><br>
  <!--End Services box description -->
</x-web-site-layout>