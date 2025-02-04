@section('title', 'YouTube Video | Explore our latest video projects and SEO tips')
@section('description',
    'Dive into a world of captivating content on our YouTube channel, WebizyCode. Discover a diverse
    array of videos, from insightful tutorials on Shopify web design and email marketing tips to exciting behind-the-scenes
    looks at our creative process. Subscribe now for a front-row seat to industry insights, expert advice, and the latest
    trends in e-commerce. Join our community and empower your online journey with engaging and informative content.')
    <x-web-site-layout>
        <x-header-section>
            <x-slot:titlePage>
                @lang('youtube.Our Videos')
            </x-slot:titlePage>
        </x-header-section>
        <!--Services box description -->
        <br><br>
        <!--Blog-->
        <!--Blog-->
        {{-- Laravel --}}
        @isset($youtubes[0]->status)
            <section class="w-full py-12">
                <div class="container mx-auto">
                    <!--Upper -->
                    <!-- body section -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                        {{-- Card --}}
                        @if ($youtubes)
                            @foreach ($youtubes as $youtube)
                                <div
                                    class="rounded-lg border border-gray-300 shadow-md hover:shadow-xl cursor-pointer overflow-hidden">
                                    <div class="">
                                        <iframe class="w-full h-[300px]" width="290" height="190"
                                            src="{{ $youtube->youtube_link }}" title="YouTube video player"
                                            frameborder="0"></iframe>
                                    </div>
                                    <div class="px-4">
                                        <h4 class="text-3xl font-extrabold my-4 font-outfit">
                                            {{-- Fast Performance --}}
                                            {{ $youtube->title }}
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="my-20">
                        {{ $youtubes->links() }}
                    </div>
                </div>
            </section>
        @endisset
        <br><br>
        <!--End Services box description -->
    </x-web-site-layout>
