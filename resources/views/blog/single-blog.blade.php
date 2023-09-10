<x-web-site-layout2>
  <x-header-section>
    <x-slot:titlePage>
      {{ $blog->title }}
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>
  <!--Blog-->
  <section class="w-full h-fit bg-gray-100 py-5">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px] rounded-xl bg-white">
      <div class="my-4 pb-5 rounded-lg min-w-[290px] relative  mx-auto">
        <div class="min-w-[290px] h-[250px] sm:h-[330px] md:h-[390px]">
          <img class="w-full h-full rounded-lg object-cover object-center"
            src="{{ url('uploads/'. $blog->featured_image) }}" alt="">
        </div>
        <div class="">
          <h4 class="text-black text-left font-ReadexPro font-semibold text-4xl px-5 my-5">
            {{-- Fast Performance --}}
            {{ $blog->title }}
          </h4>
          {{-- Category --}}
          <div class="my-5 mx-5 flex justify-start items-center">
            <p>Category: </p>
            <p class="bg-purple-700 uppercase text-white w-24  text-center font-Nunito ml-2 text-xs py-2 rounded-md">
              {{ $blog->category}}
            </p>
          </div>
          {{-- Tags --}}

          <div class="px-5 mb-5">
            <p>Tags: </p>
            @php
            $tags = explode(',', $blog->tags);
            @endphp
            <div class="block sm:flex sm:justify-start sm:items-center">
              @foreach ( $tags as $tag )
              <p
                class="bg-purple-700 my-3 uppercase text-white w-36  text-center font-Nunito text-xs py-2 rounded-md sm:m-3">
                {{ $tag }}
              </p>
              @endforeach
            </div>
          </div>
          <div class="font-NunitoSans text-left px-5 mb-5">
            {!! $blog->content !!}
          </div>
          {{-- Date --}}
          <p
            class="bg-purple-700 text-white w-24 absolute top-2 left-2  text-center font-Nunito text-xs py-2 rounded-md">
            {{ $blog->created_at->format('Y-m-d') }}
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="w-full h-fit bg-gray-100 mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">Continue Reading</h3>
      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-2 xl:grid-cols-3">
        {{-- Card --}}
        @foreach ($allPosts as $allPost)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $allPost->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $allPost->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($allPost->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$allPost->id, $allPost->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $allPost->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
      </div>
    </div>
  </section>


  <br><br>
  <!--End Services box description -->
</x-web-site-layout2>