<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <!-- Readex Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet">
    <!-- Nunito sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap"
      rel="stylesheet">
    <!-- Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
      rel="stylesheet">
    <!-- End Google Fonts -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Vite -->
    @vite('resources/css/app.css')
    <title>Document</title>
  </head>

  <body class="bg-gray-50">
    <!--Hidden Navigation and logo for Small devices -->
    <nav class="bg-white w-full lg:hidden">
      <div class="flex justify-between items-center py-2 w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] ">
        <!--Logo -->
        <div class="block">
          <a href="#" class="">
            <img class="w-[30px]" src="/assets/images/originale-logo-webizy-1.png" alt="webizy-code-logo">
          </a>
        </div>
        <!--Hamburger Menu-->
        <div class="block cursor-pointer">
          <i class="fa-solid fa-bars block text-xl"></i>
        </div>
        <!-- Close Menu -->
        <div class="hidden">
          <i class="fa-solid fa-xmark text-xl"></i>
        </div>
        <!-- Menu -->
        <ul class="hidden">
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </div>
    </nav>
    <!--ENd Hidden Navigation and logo for Small devices -->
    <!-- Header -->
    <header class="w-full h-fit bg-hero-upper bg-cover bg-bottom bg-no-repeat sm:relative sm:h-[580px] lg:h-[780px]">
      <div class="w-[90%] mx-auto sm:max-w-[600px] md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
        <!-- Navigation and logo -->
        <nav class="hidden lg:flex lg:justify-between lg:items-center lg:w-full">
          <!-- Logo -->
          <div class="hidden lg:block">
            <a href="#" class="">
              <img class="w-[50px]" src="/assets/images/originale-logo-webizy-1.png" alt="webizy-code-logo">
            </a>
          </div>
          <!-- Navigation Menu-->
          <ul class="lg:flex lg:justify-between lg:items-center lg:w-[400px]">
            <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a class="" href="/">Home</a></li>
            <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a class="" href="/">Services</a></li>
            <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a class="" href="/">Home</a></li>
            <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a class="" href="/">Home</a></li>
            <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a class="" href="/">Home</a></li>
            <li class="lg:text-white lg:text-base lg:font-normal hover:border-b-2 hover:border-white transition-all"><a class="" href="/">Home</a></li>
          </ul>
          <!-- CTA -->
          <div class="block">
            <a class="block text-center text-base font-normal w-[200px] mx-auto py-3 my-9 rounded-full uppercase bg-transparent border-2 border-white text-white hover:bg-black hover:font-semibold transition-all" href="$">Free Consultancy</a>
          </div>
        </nav>
        <!-- end Navigation and logo -->
        <!-- Hero section  -->
        <div class="block text-center sm:-mt-20 sm:flex sm:justify-between sm:items-center  sm:absolute sm:top-1/2 sm:left-1/2 sm:-translate-x-1/2 sm:-translate-y-1/2 sm:w-[600px] md:w-[700px] lg:w-[900px] xl:w-[1220px] xl:mt-0">
          <!-- Hero text -->
          <div class="block animate-SlideInLeft py-1  sm:flex sm:flex-col sm:justify-start sm:items-start sm:h-full sm:w-[260px] md:w-[450px] xl:w-[600px]">
            <small class="text-white font-Nunito font-normal text-xs block my-3 lg:font-medium lg:text-base">The only value proposition that really matters:</small>
            <div class="mb-4 animate-SlideInLeft max-w-[300px] mx-auto sm:mx-0 sm:w-full md:max-w-none  md:w-[350px] lg:w-[450px] xl:w-[600px]">
              <h1 class="text-white font-bold text-xl font-ReadexPro sm:text-left sm:text-2xl md:text-4xl lg:text-5xl xl:text-6xl xl:leading-16 ">Bespoke software development for Small size Business 
              </h1>
            </div>
            <div class="mb-4  max-w-[300px] mx-auto sm:mx-0 sm:max-w-[250px] md:max-w-[350px] lg:max-w-[450px]">
              <p class="text-white text-center font-normal text-xs font-NunitoSans sm:text-sm sm:text-left">
               We design exceptional digital products to streamline your business processes and save resources.
              </p>
            </div>
            <div class="block">
              <a class="block text-center text-base font-semibold text-purple-700 bg-white  mx-auto p-3 my-5 rounded-full hover:bg-black hover:text-white hover:font-medium uppercase animate-bounce transition-all"
                href="#">
                Work with with us 
              </a>
            </div>
          </div>
          <!-- Hero Image -->
          <div class="block animate-SlideInRight w-full sm:w-[400px] sm:h-[390px] sm:absolute top-10 right-0 sm:flex sm:justify-center sm:items-center md:w-[425px] md:h-[415px] lg:w-[530px] lg:h-[518px] xl:w-[675px] xl:h-[660px]">
            <img class="w-full h-full object-cover object-center" src="/assets/images/slider-girl-img-1.png"
              alt="slider-girl-image">
          </div>
          
        </div>
      </div>
    </header>
    <!-- Hidden Header for Small devices -->
    {{-- <header>

    </header> --}}

    <!--Services section Title -->
    <section class="block w-full my-5 xl:mt-24">
      <div class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] xl:w-[1220px] lg:flex lg:justify-between lg:items-center">
        <!--Text-->
        <div class="flex justify-center items-center flex-col lg:items-start lg:justify-end">
          <small class="text-black font-Nunito text-sm font-medium">Our Workflow <span class="font-bold text-purple-800">__ ___</span></small>
          <h2 class="text-black font-ReadexPro text-4xl text-center font-bold my-3">Our Services</h2>
        </div>
        <!--BTN-->
        <div>
          <a class="block text-center text-base font-semibold text-white bg-purple-700 w-[150px] mx-auto py-3 my-5 rounded-full hover:bg-black hover:text-white hover:font-medium uppercase"
            href="#">
            Learn More
          </a>
        </div>
      </div>
    </section>
    <!--End Services section Title -->
    <!--Services box description -->
    <section class="w-full">
      <div class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] xl:w-[1220px] lg:flex lg:justify-between lg:items-center">
        <!--Box -->
        @for ($i = 0; $i < 3; $i++)
          <div class="w-full mx-auto flex flex-col justify-center items-start rounded-md p-5 my-3 bg-white shadow-lg hover:bg-gray-100 hover:shadow-2xl sm:max-w-[550px] lg:max-w-[280px]  lg:items-center xl:max-w-[390px]">
          <!--Icon -->
            <div class="block lg:flex lg:justify-center lg:items-center my-5">
              <i class="fa-brands fa-wordpress text-4xl"></i>
            </div>
            <!-- Title -->
            <div class="my-3 lg:mt-0">
              <h3 class="text-black font-ReadexPro text-2xl font-semibold lg:text-center">WordPress Development</h3>
            </div>
            <!-- Description -->
            <div class="mb-1">
              <p class="font-Nunito text-gray-500 font-normal text-base lg:text-center">
                "Unlock the Power of Digital with our WordPress Wizards! 🚀 Elevate your online presence with custom WordPress
                solutions
                that blend innovation, creativity, and performance. We turn pixels into profits, one pixel at a time! 
              </p>
            </div>
            <div class="block">
              <a class="block text-center text-base font-semibold text-white bg-purple-700 w-[150px] mx-auto py-3 my-5 rounded-full hover:bg-black hover:text-white hover:font-medium uppercase"
                href="#">
                Learn More
              </a>
            </div>        
        </div>
        @endfor
      </div>
    </section>
    <!--End Services box description -->
    <!--How Can We Help -->
    {{-- <section class="w-full my-12 h-fit bg-green-500">
      <div class="w-[90%] mx-auto rounded-lg bg-purple-700 bg-hero-middle bg-cover bg-no-repeat bg-center">
        <div class="px-2 py-3">
          <h3 class="text-white font-ReadexPro text-4xl font-semibold text-center mb-2">How can we help you?</h3>
          <p class="text-white font-Nunito font-normal text-base text-center">Feel free to reach out to us with no commitment; we can tailor our services to fit your requirements.</p>
          <div class="block">
            <a class="block text-center text-base font-semibold text-purple-700 bg-white  mx-auto p-3 my-5 rounded-full hover:bg-black hover:text-white hover:font-medium uppercase animate-bounce transition-all"
              href="#">
              Would you like to discuss your project?
            </a>
          </div>
        </div>
        <div class="hidden">
          <img src="/assets/images/mobile-sml1.png" alt="">
        </div>
      </div>
    </section> --}}
    <!--End How Can We Help -->
    <!--Why choose us -->
    <section class="w-full h-fit py-7 my-10">
      <div class="block w-[90%]  mx-auto sm:w-[600px] md:w-[700px] lg:w-[900px] lg:flex lg:justify-between lg:items-center xl:w-[1220px] xl:items-start">
        <!--Image -->
        <div class="w-[350px] mx-auto lg:w-[500px] xl:w-[600px]">
          <img class="w-full h-full object-cover object-center" src="/assets/images/64351ff45a3851681203188.png" alt="">
        </div>
        <!--Text -->
        <div class="block  mt-5 lg:w-[400px] xl:w-[600px]">
          <h2 class="mb-5 font-semibold font-ReadexPro text-black text-4xl text-center">Why Us? </h2>
          <p class="font-normal font-Nunito text-gray-500 text-base">
            With years of experience in the web development industry, our team has honed its skills to deliver top-notch
            solutions. Your satisfaction is our priority. We maintain open communication channels throughout the project, keeping you involved
            at every stage and addressing your concerns promptly.
          </p>
           <br>
          <p class="font-normal font-Nunito text-gray-500 text-base">
            We don't believe in one-size-fits-all solutions. Each project is unique, and we tailor our services to meet your
            specific needs. Whether it's a small business website or a complex e-commerce platform, we've got you covered.
          </p>
          <br>
          <p class="font-normal font-Nunito text-gray-500 text-base">
            We offer cost-effective solutions without compromising on quality. Our pricing is transparent, and we work within your
            budget. Our commitment doesn't end at launch. We provide ongoing maintenance and support to keep your website or application
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
            We utilize Scrum as our operational framework, an agile methodology focused on delivering product value in short
            timeframes. It is grounded in three core principles: transparency, inspection, and adaptation.
          </p>
          <p class="text-sm text-gray-400 font-normal text-center">
            Our creative process is rooted in the Design Thinking methodology. We aim to gain a deep understanding of your needs and
            offer solutions that address your users' genuine concerns. This approach is iterative and non-linear, allowing us to
            generate a multitude of innovative ideas to tackle complex challenges and optimize your procedures and resources
            effectively.
          </p>
        </div>
        <!-- body section -->
        <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-2 xl:grid-cols-3">
          @for ($i = 0; $i < 6; $i++) 
          {{-- Card --}}
           <div class="bg-white my-4 rounded-lg p-5 min-w-[290px] mx-auto shadow-xl">
              <div class="flex justify-end items-center text-xl font-NunitoSans text-gray-200">
                01
              </div>
              <div class="flex justify-center items-center flex-col">
                <div class="flex justify-center items-center  mt-1 mb-3">
                  <i class="fa-solid fa-list-check block text-5xl text-purple-700"></i>
                </div>
                <div class="md:max-w-[550px]">
                  <h4 class="text-black text-center font-ReadexPro font-semibold text-2xl mb-2">Fast Performance</h4>
                  <p class="text-base text-gray-400 font-normal text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quasi doloribus cumque voluptate blanditiis!
                    Corporis nihil quia vel quos nostrum alias perspiciatis, sint odio eligendi ab doloribus nesciunt perferendis
                    ipsam.
                  </p>
                </div>
              </div>
            </div>
          @endfor
        </div>
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
           Our development team is proficient in utilizing cutting-edge, secure, robust, and high-performance technologies for
          projects of any scale and purpose.
          </p>
          <p class="text-sm text-gray-400 font-normal text-center">
            Our creative process is rooted in the Design Thinking methodology. We aim to gain a deep understanding of your
            needs and
            offer solutions that address your users' genuine concerns. This approach is iterative and non-linear, allowing
            us to
            generate a multitude of innovative ideas to tackle complex challenges and optimize your procedures and resources
            effectively.
          </p>
        </div>
        <!-- body section -->
        <div class="mb-10 grid gap-4 grid-cols-3 grid-rows-2 sm:grid-cols-5 lg:grid-cols-6 lg:grid-rows-1">
          @for ($i = 0; $i < 6; $i++)
            <div class="flex justify-center items-center flex-col  my-3 w-[100px]">
              <div class="w-[80px] mb-2 h-[80px] rounded-full bg-purple-700 flex justify-center items-center">
                <i class="fa-brands fa-laravel block text-4xl text-white"></i>
              </div>
              <p class="font-Nunito text-gray-500 text-sm font-normal">Laravel</p>
            </div>
          @endfor
        </div>
      </div>
  </section>
    <!-- End Technology stack -->
    <!-- Footer -->
  <footer class="w-full h-fit bg-hero-footer bg- bg-cover bg-center bg-gray-900 py-10">
      <div class="w-[90%] mx-auto flex justify-between items-center flex-col md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
        <!--Upper -->
        <div class="lg:grid lg:gap-4 lg:grid-cols-4 lg:grid-rows-1 lg:h-[300px]">
          <!--Logo-->
          <div class="min-w-[290px] my-5 flex justify-center items-center flex-col lg:my-0 lg:w-[200px] lg:justify-start">
            <div class="">
              <a href="#" class="">
                <img class="w-[50px]" src="/assets/images/originale-logo-webizy-1.png" alt="webizy-code-logo">
              </a>
            </div>
            <div class="my-2">
              <p class="text-base font-Nunito text-gray-500 px-2 text-center">
                We design exceptional digital products to streamline your business processes and save resources.
              </p>
            </div>
            <!--Icons -->
            <div class="my-3 inline-block">
              <a href="#"><i class="fa-brands fa-github text-purple-700 text-2xl mr-2"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin text-purple-700 text-2xl mr-2"></i></a>
              <a href="#"><i class="fa-brands fa-instagram text-purple-700 text-2xl mr-2"></i></a>
            </div>
          </div>
          <!-- Info & Notices -->
          <div class="min-w-[290px] my-5 lg:w-[200px] lg:my-0">
            <div>
              <h4 class="text-white font-ReadexPro text-2xl font-semibold text-center">Info & Notices</h4>
            </div>
            <div class="">
              <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2">Legal Notice</p>
              <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2">Privacy Policy</p>
              <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2">Cookies Policy</p>
            </div>
          </div>
          <!--Contact -->
          <div class="min-w-[290px] lg:w-[200px]">
            <div>
              <h4 class="text-white font-ReadexPro text-2xl font-semibold text-center">Contact</h4>
            </div>
            <!--Address -->
            <div class="flex justify-start items-center flex-col my-2 lg:flex-row">
              <!--icon -->
              <div class="">
                <i class="fa-solid fa-address-book text-2xl text-purple-700"></i>
              </div>
              <div class="">
                <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2 px-2">V. P. Čkalova 449/10, Bubeneč (Praha 6), 160 00 Praha</p>
              </div>
            </div>
            <!--pHONE -->
            <div class="flex justify-start items-center flex-col my-2 lg:flex-row">
              <!--icon -->
              <div class="flex justify-start items-center">
                <i class="fa-solid fa-phone text-2xl text-purple-700"></i>
              </div>
              <div>
                <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2 px-2">+420 999 999 999</p>
              </div>
            </div>
            <!--Email -->
            <div class="flex justify-start items-center flex-col my-2 lg:flex-row">
              <!--icon -->
              <div class="flex justify-start items-center">
               <i class="fa-solid fa-envelope text-2xl text-purple-700"></i>
              </div>
              <div>
                <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2 px-2">info@webizycode.com</p>
              </div>
            </div>
          </div>
          <!-- News Letters -->
          <div class="min-w-[290px] my-5 lg:w-[200px] lg:my-0">
            <div class="mb-5">
              <h4 class="text-white font-ReadexPro text-2xl font-semibold text-center">Get the lastest Info</h4>
            </div>
            <form class="sm:flex sm:justify-center sm:items-center sm:flex-col">
              <input type="text" placeholder="Your Email" class="border border-purple-700 text-gray-400 text-base font-normal bg-transparent rounded-md w-full sm:w-[300px] lg:w-[150px] xl:w-[200px]">
              <button type="submit" class="block text-center text-base font-semibold text-white bg-purple-700 w-[150px] mx-auto py-3 my-5 rounded-full hover:bg-black hover:text-white hover:font-medium uppercase">Subscribe</button>
              
            </form>
          </div>
        </div>
        <!--Bottom -->
        <div class="mt-10 border-t w-full border-t-purple-700 h-20 flex justify-center items-center">
          <p class="text-base font-normal font-Nunito text-gray-500 text-center px-2">Copyright 2023. All rights reserved. Code with <span class="text-red-800">Laravel</span> by <span class="text-purple-700">WebizyCode</span></p>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
  </body>
  <script src="/assets/js/index.js  <div>
    <small>Our Workflow</small>
  <h2>Build it Better with WebizyCode</h2></div>"></script>

</html>