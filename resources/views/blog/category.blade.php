<x-web-site-layout2>
  <x-header-section>
    <x-slot:titlePage>
      {{ Str::ucfirst($postCategory[0]->category) }}
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
      <!-- body section -->
      <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-2 xl:grid-cols-3">
        {{-- Card --}}
        @foreach ($postCategory as $categoryPost)
        <x-card-three>
          <x-slot:cardThreeImage>
            {{ url('/uploads/'. $categoryPost->featured_image) }}
          </x-slot:cardThreeImage>
          <x-slot:cardThreeTitle>
            {{ $categoryPost->title }}
          </x-slot:cardThreeTitle>
          <x-slot:cardThreeDescription>
            {{ strip_tags(\Illuminate\Support\Str::words($categoryPost->content, 15, '...'))  }}
          </x-slot:cardThreeDescription>
          <x-slot:cardThreeLink>
            {{ route('blog.single-blog', [$categoryPost->id, $categoryPost->title] ) }}
          </x-slot:cardThreeLink>
          <x-slot:cardThreeDate>
            {{ $categoryPost->created_at->format('Y-m-d') }}
          </x-slot:cardThreeDate>
        </x-card-three>
        @endforeach
      </div>
      <nav class="flex items-center justify-between pt-4 px-3" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $postCategory->links() }}</span>
      </nav>
    </div>
  </section>



  <br><br>
  <!--End Services box description -->
</x-web-site-layout2>