@section('title', 'Home - WebizyCode | Web Development & SEO Agency')
@section('description', 'Boost your online presence with our web development and SEO expertise. A top-rated agency for growth and success.')
<x-web-site-layout>
  <!--Services section Title -->
  <section class="block w-full my-5 xl:mt-24">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] xl:w-[1220px] lg:flex lg:justify-between lg:items-center">
      <!--Text-->
      <div class="flex justify-center items-center flex-col lg:items-start lg:justify-end">
        <small class="text-black  text-sm font-normal">Our Workflow <span class="font-bold text-purple-800">__
            ___</span></small>
        <h2 class="text-black  text-4xl text-center font-bold my-3">Our Services</h2>
      </div>
      <!--BTN-->
      <div>
        <a class="block text-center text-sm font-semibold text-white bg-purple-700 w-[150px] mx-auto py-3 my-5 rounded hover:bg-black hover:text-white hover:font-medium uppercase"
          href="{{ route('services') }}">
          Learn More
        </a>
      </div>
    </div>
  </section>
  <!--End Services section Title -->
  <!--Services box description -->

  <section class="w-full">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] xl:w-[1220px] lg:flex lg:justify-between lg:items-center">
      <!--Box -->
      <x-card-one>
        <x-slot:cardOneIcon>
         <i class="fa-solid fa-envelope text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          Email Marketing
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          Leveraging top-notch email marketing platforms like Klaviyo or Brevo, we enhance your Shopify experience with targeted and effective email campaigns. Our commitment extends to providing cost-effective solutions without compromising quality. Our transparent pricing aligns with your budget.
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.wordpress') }}
        </x-slot:cardOneLink>
      </x-card-one>
      <x-card-one>
        <x-slot:cardOneIcon>
          <i class="fa-solid fa-money-bill text-4xl"></i>
        </x-slot:cardOneIcon>
        <x-slot:cardOneTitle>
          CRO
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
         Elevate your Shopify store's conversion rate with our specialized themes. Meticulously designed by our team, we empower businesses to craft a unique and optimized online shopping experience, seamlessly blending aesthetics and functionality. Our goal is to not just attract customers but to create an engaging journey that fosters long-term relationships and boosts sales.
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
          Customise existing themes
        </x-slot:cardOneTitle>
        <x-slot:cardOneDescription>
          Already settled on a theme? Dive into a realm of possibilities with our customization and rebranding services, curated to fulfill your distinct requirements. From our perspective, it's more than just adapting – it's about transforming your chosen theme into a bespoke masterpiece, a reflection of your brand essence. Let's collaborate to craft a digital storefront that not only captures attention but resonates with your unique identity.
        </x-slot:cardOneDescription>
        <x-slot:cardOneLink>
          {{ route('services.shopify') }}
        </x-slot:cardOneLink>
      </x-card-one>
    </div>
  </section>
  <!--End Services box description -->

  <!--Why choose us -->
  <section class="w-full h-fit py-7 my-10">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] lg:flex lg:justify-between lg:items-center xl:w-[1220px] xl:items-start">
      <!--Image -->
      <div class="w-[250px] mx-auto lg:w-[500px] xl:w-[600px]">
        <img class="w-full h-full object-cover object-center" src="{{ url('/assets/images/64351ff45a3851681203188.png') }}" alt="why choosing our company">
      </div>
      <!--Text -->
      <div class="block   mt-5 lg:w-[400px] xl:w-[600px]">
        <h2 class="mb-5 font-bold font-poppins text-black text-4xl text-center lg:text-left">Why Us? </h2>
        <p class="font-normall font-poppins text-gray-700 text-base">
          With extensive experience in the Shopify development realm, our team excels in delivering exceptional solutions. Your satisfaction is our utmost priority. Throughout the project, we prioritize transparent and open communication, ensuring your involvement at every stage while promptly addressing any concerns.
        </p>
        <br>
        <p class="font-normal font-poppins text-gray-700 text-base">
         We reject the one-size-fits-all approach. Recognizing the uniqueness of each project, we customize our services to meet your specific needs, whether it's a small business website or a sophisticated e-commerce platform.
        </p>
        <br>
        <p class="font-normal font-poppins text-gray-700 text-base">
          Our commitment extends to providing cost-effective solutions without compromising quality. Our transparent pricing aligns with your budget. Beyond the launch, we offer ongoing maintenance and support, ensuring your Shopify website or application runs seamlessly and stays up-to-date. Choose us for tailored excellence in Shopify development.
        </p>
      </div>
    </div>
  </section>

  <!--End Why choose us -->
  <!-- How we Work -->
  <section class="w-full h-fit bg-purple-800 my-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="font-bold text-white text-4xl text-center mb-5">How We Work</h3>
        <p class="text-sm font-normal text-center text-white">
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
        </p>
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
            Discovery and Requirement Analysis
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            At the outset, we engage in detailed discussions with you to understand your business goals and
            requirements. We
            identify your target audience, project objectives, and technological needs.
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
            Planning and Strategy
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            After gathering insights, we create a comprehensive project plan and strategy. This includes defining
            project
            milestones, timelines, and a development roadmap. We also outline the technology stack and design concepts
            to be used.
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
            Design and Prototyping
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            Our skilled designers work on creating visually appealing and user-friendly designs. We provide prototypes
            and
            wireframes for your review, ensuring alignment with your brand and user experience goals.
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
            Development and Testing
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            Our development team starts coding the website or web application based on the approved design and
            requirements. We
            follow best practices and conduct rigorous testing at each development stage to ensure a bug-free and robust
            product.
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
            Deployment and Launch
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            Once the development and testing phases are complete, we deploy your website or application to a production
            environment.
            We manage all aspects of the deployment process to ensure a smooth and secure launch.
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
            Maintenance and Support
          </x-slot:cardTwoTitle>
          <x-slot:cardTwoDescription>
            Our commitment doesn't end at launch. We offer ongoing maintenance and support services to address any
            issues, perform
            updates, and keep your website or application running smoothly. We also provide analytics and optimization
            recommendations to enhance your online presence.
          </x-slot:cardTwoDescription>
        </x-card-two>
      </div>
  </section>
  <!-- End How we Work -->
  <!--  Portfolio -->
  @isset($reviews[0]->status)
  <section class="bg-gray-50">
    <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
      <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
        <h3 class="max-w-xl text-xl font-bold tracking-tight text-gray-900 sm:text-4xl">
          Read trusted reviews from our customers
        </h3>

        <div class="mt-8 flex gap-4 lg:mt-0">
          <button aria-label="Previous slide" id="keen-slider-previous"
            class="rounded-full border border-purple-600 p-3 text-purple-600 transition hover:bg-purple-600 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="h-5 w-5 rtl:rotate-180">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
          </button>

          <button aria-label="Next slide" id="keen-slider-next"
            class="rounded-full border border-purple-600 p-3 text-purple-600 transition hover:bg-purple-600 hover:text-white">
            <svg class="h-5 w-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>
          </button>
        </div>
      </div>
      <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
        <div id="keen-slider" class="keen-slider">
          @foreach ($reviews as $review)
          <div class="keen-slider__slide">
            <blockquote class="flex h-full flex-col justify-between rounded-xl bg-white p-6 shadow-sm sm:p-8 lg:p-12">
              <div>
                <div class="mt-4">
                  <p class="text-2xl font-bold text-purple-600 sm:text-2xl">
                    {{ Str::upper($review->client_company_name) }}
                  </p>

                  <p class="mt-4 leading-relaxed text-gray-700">
                    {{ $review->client_review }}
                  </p>
                </div>
                @if ($review->client_company_link)
                <a href="{{ $review->client_company_link }}"
                  class="block items-center px-4 py-2 bg-purple-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase w-full sm:w-[300px] lg:w-[150px] xl:w-[200px] tracking-widest hover:bg-black  transition ease-in-out duration-150 my-5 text-center">Live
                  Site</a>
                @endif
              </div>

              <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
                &mdash;<span class="mx-1">{{ Str::upper($review->client_title) }}</span>
                {{ Str::ucfirst($review->client_fullname) }}
              </footer>
            </blockquote>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  @endisset
  <!-- End Portfolio -->
  <!-- Technology stack -->
  <section class="w-full h-fit  my-12 py-10 bg-white">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-bold text-4xl  text-center mb-5 lg:text-4xl">Stack of Technologies</h3>
        <p class="text-sm text-gray-700 font-normal text-center">
          Our development team is proficient in utilizing cutting-edge, secure, robust, and high-performance
          technologies for
          projects of any scale and purpose.
        </p>
        <p class="text-sm text-gray-700 font-normal text-center">
          Our creative process is rooted in the Design Thinking methodology. We aim to gain a deep understanding of your
          needs and
          offer solutions that address your users' genuine concerns. This approach is iterative and non-linear, allowing
          us to
          generate a multitude of innovative ideas to tackle complex challenges and optimize your procedures and
          resources
          effectively.
        </p>
      </div>
      <!-- body section -->
      <div class="mb-10 grid gap-4 grid-cols-3 grid-rows-2 sm:grid-cols-5 lg:grid-cols-6 lg:grid-rows-1">
        <x-stack-tech>
          <x-slot:stackIcon>
            <i class="fa-brands fa-laravel block text-4xl text-white"></i>
          </x-slot:stackIcon>
          <x-slot:stackTitle>
            Laravel
          </x-slot:stackTitle>
        </x-stack-tech>
        <x-stack-tech>
          <x-slot:stackIcon>
            <i class="fa-brands fa-react block text-4xl text-white"></i>
          </x-slot:stackIcon>
          <x-slot:stackTitle>
            Reactjs
          </x-slot:stackTitle>
        </x-stack-tech>
        <x-stack-tech>
          <x-slot:stackIcon>
            <i class="fa-brands fa-wordpress block text-4xl text-white"></i>
          </x-slot:stackIcon>
          <x-slot:stackTitle>
            WordPress
          </x-slot:stackTitle>
        </x-stack-tech>
        <x-stack-tech>
          <x-slot:stackIcon>
            <i class="fa-brands fa-shopify block text-4xl text-white"></i>
          </x-slot:stackIcon>
          <x-slot:stackTitle>
            Shopify
          </x-slot:stackTitle>
        </x-stack-tech>
        <x-stack-tech>
          <x-slot:stackIcon>
            <i class="fa-brands fa-aws block text-4xl text-white"></i>
          </x-slot:stackIcon>
          <x-slot:stackTitle>
            AWS
          </x-slot:stackTitle>
        </x-stack-tech>
        <x-stack-tech>
          <x-slot:stackIcon>
            <i class="fa-brands fa-docker block text-4xl text-white"></i>
          </x-slot:stackIcon>
          <x-slot:stackTitle>
            Docker
          </x-slot:stackTitle>
        </x-stack-tech>
      </div>
    </div>
  </section>
  <!-- End Technology stack -->
  <!-- News Letters -->
  @if (session('status'))
  <script>
    alert("{{ session('status') }}")
  </script>
  @endif
  <div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
        <div class="max-w-xl lg:max-w-lg">
          <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Subscribe to our newsletter.</h2>
          <p class="mt-4 text-lg leading-8 text-gray-300">"Subscribe to our newsletter and stay updated with our latest
            posts and videos, empowering your business growth."</p>
          <form class="mt-6 flex max-w-md gap-x-4" action="{{ route('subscribe.store') }}" method="POST">
            @csrf

            <div class="lg:flex lg:items-start lg:flex-col">
              <input id="email-address" placeholder="Enter your Email here" name="email" type="email"
                autocomplete="email" required
                class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6"
                placeholder="Enter your email">
              <x-input-error class="mt-2 text-white" :messages="$errors->get('email')" />
            </div>
            <button type="submit"
              class="flex-none rounded-md bg-purple-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribe</button>
          </form>
        </div>
        <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
          <div class="flex flex-col items-start">
            <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
              </svg>
            </div>
            <dt class="mt-4 font-semibold text-white">Weekly articles</dt>
            <dd class="mt-2 leading-7 text-gray-400">"You will receive valuable weekly posts to learn how to grow your
              business, build your website on your own, and master
              coding."</dd>
          </div>
          <div class="flex flex-col items-start">
            <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
              </svg>
            </div>
            <dt class="mt-4 font-semibold text-white">No spam</dt>
            <dd class="mt-2 leading-7 text-gray-400">"Spam emails and messages can be an annoying and invasive part of
              our digital lives. We understand the importance of
              your inbox and promise to keep it free from unwanted and irrelevant content."</dd>
          </div>
        </dl>
      </div>
    </div>
    <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
      <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
      </div>
    </div>
  </div>
  <!-- End News Letters -->
</x-web-site-layout>