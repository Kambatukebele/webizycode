@section('title', 'Blog | Engaging Blog Content for Business Readers')
@section('description', "Explore engaging blog content. Stay informed and entertained. Discover valuable insights on diverse topics.")
<x-web-site-layout>
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
  @isset($laravel[0]->status)
  <section class="w-full h-fit  mb-12 py-10">
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
  @endisset
  {{-- Reactjs --}}
  @isset($reactjs[0]->status)
  <section class="w-full h-fit  mb-12 py-10">
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
        <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3"
          href="{{ route('blog.category',  $reactjsBlog->category) }}">View More of Reactjs</a>
      </div>
    </div>
  </section>
  @endisset

  {{-- Javascript --}}
  @isset($javascript[0]->status)
  <section class="w-full h-fit  mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">JavaScript </h3>

      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @foreach ($javascript as $javascriptBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $javascriptBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $javascriptBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($javascriptBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$javascriptBlog->id, $javascriptBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $javascriptBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
      </div>
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-56 text-white p-2 rounded-lg px-3"
          href="{{ route('blog.category',  $javascriptBlog->category) }}">View More of
          JavaScript</a>
      </div>
    </div>
  </section>
  @endisset



  {{-- php--}}
  @isset($php[0]->status)
  <section class="w-full h-fit  mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">PHP </h3>
      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}

        @foreach ($php as $phpBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $phpBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $phpBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($phpBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$phpBlog->id, $phpBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $phpBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
      </div>
      @isset ($phpBlog->category)
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3"
          href="{{ route('blog.category',  $phpBlog->category) }}">View More of PHP</a>
      </div>
      @endisset

    </div>
  </section>
  @endisset





  {{-- WordPress --}}
  @isset($wordpress[0]->status)
  <section class="w-full h-fit  mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">WordPress</h3>

      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @foreach ($wordpress as $wordpressBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $wordpressBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $wordpressBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($wordpressBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$wordpressBlog->id, $wordpressBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $wordpressBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
      </div>
      @isset ($wordpressBlog->category)
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3"
          href="{{ route('blog.category',  $wordpressBlog->category) }}">All WordPress</a>
      </div>
      @endisset
    </div>
  </section>
  @endisset

  {{-- Shopify --}}
  @isset ($shopify[0]->status)
  <section class="w-full h-fit  mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">Shopify </h3>

      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}

        @foreach ($shopify as $shopifyBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $shopifyBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $shopifyBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($shopifyBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$shopifyBlog->id, $shopifyBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $shopifyBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
      </div>
      @isset($shopifyBlog->category)
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3"
          href="{{ route('blog.category',  $shopifyBlog->category) }}">All Shopify</a>
      </div>
      @endisset
    </div>
  </section>
  @endisset

  {{-- Social media --}}
  @isset ($emailMarketing[0]->status)
  <section class="w-full h-fit  mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
      <!--Upper -->
      <div class="mb-10">
        <h3 class="text-black font-semibold text-3xl text-center mb-5">Email Marketing</h3>

      </div>
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-1 xl:grid-cols-3">
        {{-- Card --}}
        @foreach ($emailMarketing as $emailMarketingBlog)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $emailMarketingBlog->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $emailMarketingBlog->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($emailMarketingBlog->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$emailMarketingBlog->id, $emailMarketingBlog->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $emailMarketingBlog->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
      </div>
      @isset($emailMarketingBlog->category)
      <div class="flex justify-center items-center">
        <a class="block text-center bg-purple-700 w-48 text-white p-2 rounded-lg px-3"
          href="{{ route('blog.category',  $emailMarketingBlog->category) }}">All Email Marketing Posts</a>
      </div>
      @endisset
    </div>
  </section>
  @endisset


  <br><br>
  <!--End Services box description -->
</x-web-site-layout>