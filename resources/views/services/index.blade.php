@section('title', 'Services | Comprehensive Web Development and SEO Services')
@section('description', 'Discover expert Shopify web design, powerful email marketing, and seamless store optimization services at WebizyCode. Elevate your online presence with visually captivating Shopify storefronts, targeted email campaigns, and strategic store optimization. Trust us for smooth store migrations, ensuring a seamless transition for your e-commerce venture. Explore how our comprehensive services can transform your online business today.')
<x-web-site-layout>
  <x-header-section>
    <x-slot:titlePage>
      {{-- Services --}}
      @lang('home.services')
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>
  <section class="w-full">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] xl:w-[1220px] lg:grid lg:gap-4 lg:grid-cols-3 lg:grid-rows-1">
      <!--Box -->
      <x-card-one>
        <x-slot:cardOneIcon>
          <i class="fa-solid fa-envelope text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          {{-- Email Marketing --}}
          @lang('home.email Marketing')
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
         {{-- Leveraging top-notch email marketing platforms like Klaviyo or Brevo, we enhance your Shopify experience with targeted and effective email campaigns. Our commitment extends to providing cost-effective solutions without compromising quality. Our transparent pricing aligns with your budget. --}}
         @lang('home.Leveraging top-notch email marketing platforms like Klaviyo or Brevo, we enhance your Shopify experience with targeted and effective email campaigns. Our commitment extends to providing cost-effective solutions without compromising quality. Our transparent pricing aligns with your budget.')
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.email-marketing') }}
        </x-slot:cardOneLink>
      </x-card-one>
      <x-card-one>
        <x-slot:cardOneIcon>
          <i class="fa-solid fa-money-bill text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          {{-- Store Optimization --}}
          @lang('home.Store Optimization')
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          {{-- Recognizing the crucial role of website speed in the success of ecommerce ventures, our team of specialists is committed to collaborating closely with you. Through careful analysis, we'll pinpoint and address areas on your website that contribute to slower loading times. Employing a variety of optimization techniques, our goal is to enhance your website's performance.  --}}
          @lang("home.Recognizing the crucial role of website speed in the success of ecommerce ventures, our team of specialists is committed to collaborating closely with you. Through careful analysis, we'll pinpoint and address areas on your website that contribute to slower loading times. Employing a variety of optimization techniques, our goal is to enhance your website's performance.")
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.store-speed-optimization') }}
        </x-slot:cardOneLink>
      </x-card-one>
      <x-card-one>
        <x-slot:cardOneIcon>
          <i class="fa-brands fa-shopify text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          {{-- Shopify Web Design --}}
          @lang('home.Shopify Web Design')
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          {{-- Our Shopify specialists provide personalized solutions for your brand, encompassing the customization of pre-existing Shopify themes and the creation of distinctive custom designs. Our focus is on helping you achieve your unique online business objectives. --}}
          @lang('home.Our Shopify specialists provide personalized solutions for your brand, encompassing the customization of pre-existing Shopify themes and the creation of distinctive custom designs. Our focus is on helping you achieve your unique online business objectives.')
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.shopify') }}
        </x-slot:cardOneLink>
      </x-card-one>
      <x-card-one>
        <x-slot:cardOneIcon>
          {{-- <i class="fa-brands fa-facebook text-4xl"></i> --}}
          <i class="fa-solid fa-cart-shopping text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          {{-- Shopify Migration --}}
          @lang('home.Shopify Migration')
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          {{-- Embarking on a seamless transition to Shopify? Look no further. Our Shopify migration services ensure a hassle-free move for your eCommerce store, handling data transfer with precision. Trust us to optimize your Shopify storefront, leaving you free to focus on growing your business without the headaches of migration complexities. Make the smart choice for a prosperous eCommerce future with our tailored Shopify migration solutions. --}}
          @lang('home.Embarking on a seamless transition to Shopify? Look no further. Our Shopify migration services ensure a hassle-free move for your eCommerce store, handling data transfer with precision. Trust us to optimize your Shopify storefront, leaving you free to focus on growing your business without the headaches of migration complexities. Make the smart choice for a prosperous eCommerce future with our tailored Shopify migration solutions.')
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.migration') }}
        </x-slot:cardOneLink>
      </x-card-one>
    </div>
  </section>
  <br><br>
  <!--End Services box description -->
</x-web-site-layout>