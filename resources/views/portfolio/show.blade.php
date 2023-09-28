<x-web-site-layout2>
  <x-header-section>
    <x-slot:titlePage>
      Porfolio
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>
  <!--Blog-->
  <!--Blog-->
  {{-- Laravel --}}
  <section class="w-full h-fit  mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      {{-- <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">Laravel </h3>
      </div> --}}
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @foreach ($portfolios as $portfolio)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $portfolio->company_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $portfolio->company_project_title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($portfolio->company_project_description, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('portfolio.single', [$portfolio->id, $portfolio->company_project_title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $portfolio->company_date_launched }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
      </div>
      <div class="flex justify-center items-center">
        {{-- <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3"
          href="{{ route('blog.category',  $portfolio->category) }}">View More of Laravel</a> --}}
      </div>
    </div>
  </section>
  <br><br>
  <!--End Services box description -->
</x-web-site-layout2>