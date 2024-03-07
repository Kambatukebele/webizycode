@section('title', 'Blog | Engaging Blog Content for Business Readers')
@section('description', "Explore a treasure trove of knowledge and insights in our blog at WebizyCode. Immerse yourself in a wide range of articles covering everything from Shopify web design and email marketing strategies to e-commerce trends and expert advice. Stay informed, inspired, and ahead of the curve as our blog becomes your go-to resource for valuable information in the digital realm. Join our community of readers and empower your online journey with our thought-provoking and informative content.")
<x-web-site-layout>
  <x-header-section>
    <x-slot:titlePage>
      Blog
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <br><br>
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
          href="{{ route('blog.category',  $shopifyBlog->category) }}">@lang('blog.All Shopify Posts')</a>
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
          href="{{ route('blog.category',  $emailMarketingBlog->category) }}">@lang('blog.All Email Marketing Posts')</a>
      </div>
      @endisset
    </div>
  </section>
  @endisset


  <br><br>
  <!--End Services box description -->
</x-web-site-layout>