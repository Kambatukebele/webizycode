<footer class="w-full h-fit bg-hero-footer bg- bg-cover bg-center bg-gray-900 py-10">
  <div
    class="w-[90%] mx-auto flex justify-between items-center flex-col md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
    <!--Upper -->
    <div class="lg:grid lg:gap-36 lg:grid-cols-3 lg:grid-rows-1 lg:h-[300px]">
      <!--Logo-->
      <div class="min-w-[290px] my-5 flex justify-center items-center flex-col lg:my-0 lg:w-[200px] lg:justify-start">
        <div class="">
          <a href="#" class="">
            <img class="w-[50px]" src="{{ url('/assets/images/originale-logo-webizy-1.png') }}" alt="webizy-code-logo">
          </a>
        </div>
        <div class="my-2">
          <p class="text-base font-Nunito text-gray-500 px-2 text-center">
            {{-- We design exceptional digital products to streamline your business processes and save
            resources. --}}
            @lang('footer.We design exceptional digital products to streamline your business processes and save resources.')
          </p>
        </div>
        <!--Icons -->
        <div class="my-3 inline-block">
          <a href="https://github.com/webizycode"><i class="fa-brands fa-github text-purple-700 text-2xl mr-2"></i></a>
          <a href="https://www.linkedin.com/company/webizycode/?viewAsMember=true"><i
              class="fa-brands fa-linkedin text-purple-700 text-2xl mr-2"></i></a>
          <a href="https://www.instagram.com/webizy.cz/?hl=en"><i
              class="fa-brands fa-instagram text-purple-700 text-2xl mr-2"></i></a>
        </div>
      </div>
      <!-- Info & Notices -->
      <div class="min-w-[290px] my-5 lg:w-[200px] lg:my-0">
        <div>
          <h4 class="text-white font-ReadexPro text-2xl font-semibold text-center">
            {{-- Info & Notices --}}
            @lang('footer.Info & Notices')
          </h4>
        </div>
        <div class="">
          {{-- <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2">Legal Notice</p> --}}
          <p class=" block text-base font-normal font-Nunito text-gray-500 text-center my-2">
            <a href="{{ route('privacy-policy') }}" class="block">
              {{-- Privacy Policy --}}
              @lang('footer.Privacy Policies')
            </a>
          </p>
          <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2">
            <a href="{{ route('cookies-policies') }}" class="block">
              {{-- Cookies Policies --}}
              @lang('footer.Cookie Policies')
            </a>
          </p>
          <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2">
            <a href="{{ route('services') }}" class="block">
              {{-- Services --}}
              @lang('footer.Services')
            </a>
          </p>
          <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2">
            <a href="{{ route('blog') }}" class="block">Blog</a>
          </p>
          <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2">
            <a href="{{ route('youtube.index') }}" class="block">Youtube</a>
          </p>
        </div>
      </div>
      <!--Contact -->
      <div class="min-w-[290px] lg:w-[200px]">
        <div>
          <h4 class="text-white font-ReadexPro text-2xl font-semibold text-center">
            {{-- Contact --}}
            @lang('footer.Contact')
          </h4>
        </div>
        <!--Address -->
        <div class="flex justify-start items-center flex-col my-2 lg:flex-row">
          <!--icon -->
          <div class="">
            <i class="fa-solid fa-address-book text-2xl text-purple-700"></i>
          </div>
          <div class="">
            <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2 px-2">V. P.
              Čkalova 449/10,
              Bubeneč (Praha 6), 160 00 Praha</p>
          </div>
        </div>
        <!--pHONE -->
        <div class="flex justify-start items-center flex-col my-2 lg:flex-row">
          <!--icon -->
          <div class="flex justify-start items-center">
            <i class="fa-solid fa-phone text-2xl text-purple-700"></i>
          </div>
          <div>
            <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2 px-2">+420
              607 284 825</p>
          </div>
        </div>
        <!--Email -->
        <div class="flex justify-start items-center flex-col my-2 lg:flex-row">
          <!--icon -->
          <div class="flex justify-start items-center">
            <i class="fa-solid fa-envelope text-2xl text-purple-700"></i>
          </div>
          <div>
            <p class="text-base font-normal font-Nunito text-gray-500 text-center my-2 px-2">
              info@webizycode.com</p>
          </div>
        </div>
      </div>
      <!-- News Letters -->
      {{-- <div class="min-w-[290px] my-5 lg:w-[200px] lg:my-0">
        <div class="mb-5">
          <h4 class="text-white font-ReadexPro text-2xl font-semibold text-center">Get the lastest
            Info</h4>
        </div>
        <form class="sm:flex sm:justify-center sm:items-center sm:flex-col">
          @csrf
          <input type="email" placeholder="Your Email"
            class="border border-purple-700 text-gray-400 text-base font-normal bg-transparent rounded-md w-full sm:w-[300px] lg:w-[150px] xl:w-[200px]">

          <button type="submit"
            class="block items-center px-4 py-2 bg-purple-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase w-full sm:w-[300px] lg:w-[150px] xl:w-[200px] tracking-widest hover:bg-black  transition ease-in-out duration-150 my-5 text-center">Subscribe</button>

        </form>
      </div> --}}
    </div>
    <!--Bottom -->
    <div class="mt-10 border-t w-full border-t-purple-700 h-20 flex justify-center items-center">
      <p class="text-base font-normal font-Nunito text-gray-500 text-center px-2">Copyright {{ now()->year }}. All
        rights
        reserved. Code with <span class="text-white">Laravel</span> by <span
          class="text-purple-700 cursor-pointer">WebizyCode</span>
      </p>
    </div>
  </div>
</footer>
<script src="{{ url('/assets/js/index.js') }}"></script>