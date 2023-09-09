<x-web-site-layout2>
  <x-header-section>
    <x-slot:titlePage>
      Blog
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>

  <section class="w-full h-fit bg-gray-100 mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-2 xl:grid-cols-3">
        {{-- Card --}}
        @for ($i = 0; $i < 6; $i++) <div
          class="my-4 pb-5 rounded-lg w-[290px] relative sm:w-[350px] md:w-[400px] xl:w-[380px] mx-auto shadow-xl">
          <div class="w-[290px] h-[190px] sm:w-[350px] md:w-[400px] xl:w-[380px]">
            <img class="w-full h-full rounded-t-lg object-cover object-center"
              src="{{ url('/assets/images/3.b3477e97bffc3dc7e37d.jpg') }}" alt="">
          </div>
          <div class="md:max-w-[550px]">
            <h4 class="text-black text-center font-ReadexPro font-semibold text-2xl my-5">
              {{-- Fast Performance --}}
              The blog
            </h4>
            <p class="font-base font-normal font-NunitoSans text-gray-500 px-5 mb-5 text-center">Lorem ipsum, dolor sit
              amet
              consectetur
              adipisicing elit. Quia beatae voluptates tenetur quisquam
              possimus, neque expedita itaque veniam consectetur placeat quis? Rerum ea quo alias voluptates voluptas
              aperiam perspiciatis temporibus.</p>
            <p
              class="block bg-purple-700 text-white w-36 rounded-full hover:bg-black  py-2 mx-auto text-base font-normal text-center">
              <a class="block" href="#">Read More</a>
            </p>
            {{-- Date --}}
            <p
              class="bg-purple-700 text-white w-24 absolute top-2 left-2  text-center font-Nunito text-xs py-2 rounded-md">
              April 19,
              2019</p>
          </div>
      </div>
      @endfor
    </div>
  </section>
  <br><br>
  <!--End Services box description -->
</x-web-site-layout2>