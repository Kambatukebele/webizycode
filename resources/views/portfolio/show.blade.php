@section('title', 'Portfolios | Showcasing Our Portfolio of Excellence')
@section('description', 'Explore our portfolio of excellence. See our finest work and creative solutions. Witness our commitment to quality.')
<x-web-site-layout>
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
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @if ($portfolios)
        @foreach ($portfolios as $portfolio)
        @if ($portfolio->status === 'active')
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
        @endif
        @endforeach
        @endif
      </div>
    </div>
  </section>
  <br><br>
  <!--End Services box description -->
</x-web-site-layout>