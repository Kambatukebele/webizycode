@section('title', 'YouTube Video | Explore our latest video projects and SEO tips')
@section('description', 'Explore our web development and SEO video content. Expert insights for online success. Tune in for growth strategies!')
<x-web-site-layout>
  <x-header-section>
    <x-slot:titlePage>
      Our Videos
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>
  <!--Blog-->
  <!--Blog-->
  {{-- Laravel --}}
  @isset($youtubes[0]->status)
  <section class="w-full h-fit  mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">Check our videos</h3>
      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @if ($youtubes)
        @foreach ($youtubes as $youtube)
        <div
          class="my-4 pb-5 rounded-3xl w-[290px] relative sm:w-[350px] md:w-[400px] xl:w-[380px] mx-auto border hover:shadow-xl">
          <div class="w-[290px] h-[290px] sm:w-[350px] md:w-[400px] xl:w-[380px]">
            <iframe class="w-full h-full rounded-t-3xl object-cover object-center" width="290" height="190"
              src="https://www.youtube.com/embed/{{ $videoId }}" title="YouTube video player" frameborder="0"></iframe>
          </div>
          <div class="md:max-w-[550px]">
            <h4 class="text-black text-center px-3 font-semibold text-2xl my-5">
              {{-- Fast Performance --}}
              {{ $youtube->title }}
            </h4>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </section>
  @endisset
  <br><br>
  <!--End Services box description -->
</x-web-site-layout>