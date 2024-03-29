@section('title', 'Email Marketing | Expert Shopify Development Services')
@section('description', "Ignite your brand's growth with our results-driven email marketing services at WebizyCode. Leverage the power of targeted campaigns, compelling content, and advanced analytics to connect with your audience. From captivating newsletters to automated drip campaigns, trust us to optimize your email strategy for engagement and conversions. Elevate your business with our expert email marketing solutions.")
<x-web-site-layout>
  <x-header-section>
    <x-slot:titlePage>
      Email Marketing
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>
  <section class="w-full h-fit py-7 my-10 relative">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px]  lg:w-[900px] lg:flex lg:justify-between lg:items-start xl:w-[1220px]">
      <!--Image -->
      <div class="w-full rounded-xl shadow-lg mx-auto lg:w-[450px] xl:w-[600px]">
        <img class="w-full rounded-xl h-full object-cover object-center" src="{{ url('/assets/images/emailMarketing.webp') }}" alt="email-marketing-photo">
      </div>
      <!--Text -->
      <div class="block mt-5 lg:mt-0 lg:w-[400px] xl:w-[550px]">
        <h2 class="mb-5 font-semibold  text-black text-4xl text-center lg:text-left">Email Marketing</h2>
        <p class="font-normal  text-gray-700 text-base">
          @lang("email_marketing.We at Webizycode, offer professional email marketing services to help businesses increase their online visibility and reach their target audience effectively.") <br><br>
          @lang("email_marketing.Personalized and targeted email messages can lead to higher engagement.")
          <br><br>@lang("email_marketing.By analyzing customer behavior, automated emails can be sent with relevant content to the right audience at the right time, resulting in increased sales. With the ability to include a call to action, email marketing is a cost-effective way to drive conversions.") <br><br>
          @lang("email_marketing.This measurable marketing strategy allows for the monitoring and improvement of email campaigns and automations for better results.")
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
        <h3 class="font-bold text-white text-4xl text-center mb-5">@lang("email_marketing.How we do it")</h3>
        {{-- <p class="text-sm font-normal text-center text-white">
          We utilize Scrum as our operational framework, an agile methodology focused on delivering product value in
          short
          timeframes. It is grounded in three core principles: transparency, inspection, and adaptation.
        </p>
        <p class="text-sm font-normal text-center text-white">
          Our creative process is rooted in the Design Thinking methodology. We aim to gain a deep understanding of
          your
          needs and
          offer solutions that address your users' genuine concerns. This approach is iterative and non-linear,
          allowing
          us to
          generate a multitude of innovative ideas to tackle complex challenges and optimize your procedures and
          resources
          effectively.
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
            @lang("email_marketing.Strategy Development")
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            @lang("email_marketing.Strategy development: We work with you to understand your business goals and target audience, and then create a custom email marketing strategy that aligns with your overall marketing plan.")
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
            @lang("email_marketing.List Management")
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
           @lang("email_marketing.We manage your email list, making sure it is clean, up-to-date and ready for your campaigns.")
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
            @lang("email_marketing.Content Creation")
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            @lang("email_marketing.Our team of creative writers and designers create compelling and engaging email content that resonates with your audience.")
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
            @lang("email_marketing.Automation Setup")
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
           @lang("email_marketing.We use the latest automation tools to streamline the email sending process and ensure timely delivery of messages.")
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
            @lang("email_marketing.Campaign Execution")
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            @lang("email_marketing.Our team launches and manages the campaigns, monitoring and adjusting as needed for optimal performance")
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
            @lang("email_marketing.Analytics and Reporting")
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
           @lang("email_marketing.We track and analyze the results of the campaigns, and provide you with detailed reports and insights to help you make informed decisions.")
          </x-slot:cardTwoDescription>
        </x-card-two>
      </div>
  </section>
  <!-- End How we do it -->
  <br><br>
  <!--End Services box description -->
</x-web-site-layout>