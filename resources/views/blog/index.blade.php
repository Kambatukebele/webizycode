<x-web-site-layout2>
  <x-header-section>
    <x-slot:titlePage>
      Blog
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>
  <!--Blog-->
  <!--Blog-->
  {{-- Laravel --}}
  <section class="w-full h-fit bg-gray-100 mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">Laravel </h3>

      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @if ($laravel)
        @foreach ($laravel as $laravelBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $laravelBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $laravelBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($laravelBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$laravelBlog->id, $laravelBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $laravelBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
        @endif
      </div>
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3"
          href="{{ route('blog.category',  $laravelBlog->category) }}">View More of Laravel</a>
      </div>
    </div>
  </section>

  {{-- Reactjs --}}
  <section class="w-full h-fit bg-gray-100 mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">Reactjs </h3>

      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @if ($reactjs)
        @foreach ($reactjs as $reactjsBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $reactjsBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $reactjsBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($reactjsBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$reactjsBlog->id, $reactjsBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $reactjsBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
        @endif
      </div>
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3" href="#">View More of Reactjs</a>
      </div>
    </div>
  </section>

  {{-- Javascript --}}
  <section class="w-full h-fit bg-gray-100 mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">JavaScript </h3>

      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @if ($reactjs)
        @foreach ($reactjs as $reactjsBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $reactjsBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $reactjsBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($reactjsBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$reactjsBlog->id, $reactjsBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $reactjsBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
        @endif
      </div>
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-56 text-white p-2 rounded-lg px-3" href="#">View More of
          JavaScript</a>
      </div>
    </div>
  </section>

  {{-- php--}}
  <section class="w-full h-fit bg-gray-100 mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">PHP </h3>

      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @if ($reactjs)
        @foreach ($reactjs as $reactjsBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $reactjsBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $reactjsBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($reactjsBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$reactjsBlog->id, $reactjsBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $reactjsBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
        @endif
      </div>
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3" href="#">View More of PHP</a>
      </div>
    </div>
  </section>

  {{-- WordPress --}}
  <section class="w-full h-fit bg-gray-100 mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">WordPress</h3>

      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @if ($reactjs)
        @foreach ($reactjs as $reactjsBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $reactjsBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $reactjsBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($reactjsBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$reactjsBlog->id, $reactjsBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $reactjsBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
        @endif
      </div>
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3" href="#">All WordPress</a>
      </div>
    </div>
  </section>

  {{-- Shopify --}}
  <section class="w-full h-fit bg-gray-100 mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">Shopify </h3>

      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @if ($reactjs)
        @foreach ($reactjs as $reactjsBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $reactjsBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $reactjsBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($reactjsBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$reactjsBlog->id, $reactjsBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $reactjsBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
        @endif
      </div>
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3" href="#">All Shopify</a>
      </div>
    </div>
  </section>

  {{-- Social media --}}
  <section class="w-full h-fit bg-gray-100 mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">Social Media </h3>

      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @if ($reactjs)
        @foreach ($reactjs as $reactjsBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $reactjsBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $reactjsBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($reactjsBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$reactjsBlog->id, $reactjsBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $reactjsBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
        @endif
      </div>
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3" href="#">All Social posts</a>
      </div>
    </div>
  </section>


  <br><br>
  <!--End Services box description -->
</x-web-site-layout2>