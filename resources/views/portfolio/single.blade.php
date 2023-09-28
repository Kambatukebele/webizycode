<x-web-site-layout2>
  <x-header-section>
    <x-slot:titlePage>
      {{ $portfolio->company_name }}
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>
  <!--Blog-->
  <section class="w-full h-fit  py-5">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px] rounded-xl bg-gray-50">
      <div class="my-4 pb-5 rounded-lg min-w-[290px] relative  mx-auto">
        <div class="min-w-[290px] h-[250px] sm:h-[330px] md:h-[390px]">
          <img class="w-full h-full rounded-lg object-cover object-center"
            src="{{ url('uploads/'. $portfolio->company_image) }}" alt="">
        </div>
        <div class="">
          <h4 class="text-black text-left font-ReadexPro font-semibold text-3xl px-5 my-5">
            {{-- Fast Performance --}}
            Project Title: {{ $portfolio->company_project_title }}
          </h4>
        </div>
      </div>
    </div>
  </section>
  <br><br>
  <!--End Services box description -->
</x-web-site-layout2>