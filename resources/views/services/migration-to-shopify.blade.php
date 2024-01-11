@section('title', 'Migration to Shopify | Expert Shopify Development Services')
@section('description', 'Unleash the potential of Shopify. Explore expert Shopify development services. Elevate your online presence.')
<x-web-site-layout>
  <x-header-section>
    <x-slot:titlePage>
      Shopify Migration
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>
  <section class="w-full h-fit py-7 my-10 relative">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] lg:flex lg:justify-between lg:items-center xl:w-[1220px] xl:items-start">
      <!--Image -->
      <div class="w-[250px] mx-auto lg:w-[500px] xl:w-[600px]">
        <img class="w-full h-full object-cover object-center" src="{{ url('/assets/images/64351ff45a3851681203188.png') }}" alt="">
      </div>
      <!--Text -->
      <div class="block  mt-5 lg:w-[400px] xl:w-[600px]">
        <h2 class="mb-5 font-semibold  text-black text-4xl text-center lg:text-left">Shopify Migration</h2>
        <p class="font-normal  text-gray-700 text-base">
          We understand that as business evolve and grow, sometimes the need arises to migrate to a more suitable e-commerce platform. <br> <br> That's why we offer a comprehensive migration service from other platforms to Shopify. <br> <br> Our team of experts will handle the entire process, ensuring that your online store is seamlessly transferred to the Shopify platform without any disruption to your business.<br> <br> We will take care of everything, from data migration to theme customization, ensuring that your store is up and running on Shopify in no time. <br> <br>Our migration service is designed to make the transition process as smooth as possible.
        </p>
        <br>        
      </div>
    </div>
  </section>
  <!-- How we do it -->
  <section class="w-full h-fit bg-purple-800 mt-12 mb-0 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="font-bold text-white text-4xl text-center mb-5">How we do it</h3>
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
            Data Migration
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            We will transfer all your existing product, customer and order data to the Shopify platform.
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
           Theme Customization
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            We will customize the design of your store to match the look and feel of your current website or as per your vision.
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
            App and Plugin Integration
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            e will ensure that all necessary apps and plugins are installed and configured on your Shopify store as per your requirement.
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
            SEO and Analytics
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            We will set up and configure SEO and analytics tools to ensure that your store is optimized for search engines and you have insights on how to improve the store performance.
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
            Testing and quality assurance
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            We will test your store to ensure that everything is working correctly and troubleshoot any issues that may arise. We'll take care of redirects and 404 errors.
          </x-slot:cardTwoDescription>
        </x-card-two>
        {{-- 6 --}}
        <x-card-two>
          <x-slot:cardTwoNumber>
            6
          </x-slot:cardTwoNumber>
          <x-slot:cardTwoIcon>
            <i class="fa-solid fa-screwdriver-wrench block text-5xl text-purple-700"></i>
          </x-slot:cardTwoIcon>
          <x-slot:cardTwoTitle>
            Post-launch Support
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            We will provide ongoing support to ensure that your store runs smoothly after the migration is complete.
            We will provide training on how to manage and maintain your store once we have completed the migration.
          </x-slot:cardTwoDescription>
        </x-card-two>
      </div>
  </section>
  <!-- End How we do it -->
  <br><br>
  <!--End Services box description -->
</x-web-site-layout>