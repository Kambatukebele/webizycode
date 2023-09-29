<x-web-site-layout2>
  <x-header-section>
    <x-slot:titlePage>
      {{ $portfolio->company_name }}
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>

  <!--Form -->
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <section class="p-6 text-gray-900">
          <table class="mt-6 space-y-6 bg-white">
            <div id="card-image" class="mb-5">
              <div class="block w-[300px] sm:w-[350px] md:w-[450px]" id="divImage">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/uploads/' .$portfolio->company_image) }}" alt="">
              </div>
            </div>
            <div>
              <div class="font-semibold text-black text-xl">Company Name: </div>
              <div id="Company Name" class="my-1 mb-5 block w-full text-base font-normal">
                {{ $portfolio->company_name}}
              </div>
            </div>
            <div>
              <div class="font-semibold text-black text-xl">Project Title:</div>
              <div class="my-1 mb-5 block w-full text-base font-normal">{{ $portfolio->company_project_title }}</div>
            </div>
            <div>
              <div class="font-semibold text-black text-xl">Project Description:</div>
              <div class="my-1 mb-5 block w-full text-base font-normal">{{ $portfolio->company_project_description }}
              </div>
            </div>
            <div>
              <div class="font-semibold text-black text-xl">Project Task:</div>
              <div class="my-1 mb-5 block w-full text-base font-normal">{{ $portfolio->company_project_task }}</div>
            </div>
            <div>
              <div class="font-semibold text-black text-xl">Company Location:</div>
              <div class="my-1 mb-5 block w-full text-base font-normal"> {{ $portfolio->company_location}}</div>
            </div>
            <div>
              <div class="font-semibold text-black text-xl">Company Live link:</div>
              <div class="my-1 mb-5 block w-full text-base font-normal"><a href="{{ $portfolio->company_link }}"
                  class="underline text-purple-400">{{ $portfolio->company_name }}</a> </div>
            </div>
            <div>
              <div class="font-semibold text-black text-xl">Published Date:</div>
              <div class="my-1 mb-5 block w-full text-base font-normal">{{ $portfolio->company_date_launched }}</div>
            </div>
      </div>
      </table>
      </section>
    </div>
  </div>
  </div>
  <!--End Form -->

  <br><br>
  <!--End Services box description -->
</x-web-site-layout2>