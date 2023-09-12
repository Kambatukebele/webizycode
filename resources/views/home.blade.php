<x-web-site-layout>
  <!--Services section Title -->
  <section class="block w-full my-5 xl:mt-24">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] xl:w-[1220px] lg:flex lg:justify-between lg:items-center">
      <!--Text-->
      <div class="flex justify-center items-center flex-col lg:items-start lg:justify-end">
        <small class="text-black font-Nunito text-sm font-medium">Our Workflow <span
            class="font-bold text-purple-800">__ ___</span></small>
        <h2 class="text-black font-ReadexPro text-4xl text-center font-bold my-3">Our Services</h2>
      </div>
      <!--BTN-->
      <div>
        <a class="block text-center text-base font-semibold text-white bg-purple-700 w-[150px] mx-auto py-3 my-5 rounded-full hover:bg-black hover:text-white hover:font-medium uppercase"
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
  <!--End Services box description -->

  <!--Why choose us -->
  <section class="w-full h-fit py-7 my-10">
    <div
      class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] lg:flex lg:justify-between lg:items-center xl:w-[1220px] xl:items-start">
      <!--Image -->
      <div class="w-[250px] mx-auto lg:w-[500px] xl:w-[600px]">
        <img class="w-full h-full object-cover object-center" src="/assets/images/64351ff45a3851681203188.png" alt="">
      </div>
      <!--Text -->
      <div class="block  mt-5 lg:w-[400px] xl:w-[600px]">
        <h2 class="mb-5 font-semibold font-poppins text-black text-4xl text-center">Why Us? </h2>
        <p class="font-normall font-poppins text-gray-500 text-base">
          With years of experience in the web development industry, our team has honed its skills to deliver
          top-notch
          solutions. Your satisfaction is our priority. We maintain open communication channels throughout the
          project,
          keeping you involved
          at every stage and addressing your concerns promptly.
        </p>
        <br>
        <p class="font-normal font-poppins text-gray-500 text-base">
          We don't believe in one-size-fits-all solutions. Each project is unique, and we tailor our services to
          meet
          your
          specific needs. Whether it's a small business website or a complex e-commerce platform, we've got you
          covered.
        </p>
        <br>
        <p class="font-normal font-poppins text-gray-500 text-base">
          We offer cost-effective solutions without compromising on quality. Our pricing is transparent, and we work
          within your
          budget. Our commitment doesn't end at launch. We provide ongoing maintenance and support to keep your
          website
          or application
          running smoothly and up to date.
        </p>

        {{-- <p>We stay at the forefront of technology trends, using the latest tools and frameworks to build websites and applications
          that are not only functional but also future-proof.
          </p>
            <br>
          <p>
            A visually appealing and user-friendly design is crucial for online success. Our designers create stunning and intuitive
            interfaces that leave a lasting impression on your audience.
          </p>
            <br>
          <p>
            We take the security of your data and your users seriously. Our development process includes robust security measures to
            protect your online presence from threats.
          </p> --}}

      </div>
    </div>
  </section>

  <!--End Why choose us -->
  <!-- How we Work -->
  <section class="w-full h-fit bg-gray-100 my-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">How We Work</h3>
        <p class="text-sm text-gray-400 font-normal text-center">
          We utilize Scrum as our operational framework, an agile methodology focused on delivering product value in
          short
          timeframes. It is grounded in three core principles: transparency, inspection, and adaptation.
        </p>
        <p class="text-sm text-gray-400 font-normal text-center">
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
  <!-- Technology stack -->
  <section class="w-full h-fit  my-12 py-10 bg-white">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">Stack of Technologies</h3>
        <p class="text-sm text-gray-400 font-normal text-center">
          Our development team is proficient in utilizing cutting-edge, secure, robust, and high-performance
          technologies for
          projects of any scale and purpose.
        </p>
        <p class="text-sm text-gray-400 font-normal text-center">
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
</x-web-site-layout>