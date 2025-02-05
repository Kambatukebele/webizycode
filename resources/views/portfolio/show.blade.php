@section('title', 'Portfolios | Showcasing Our Portfolio of Excellence')
@section('description',
    'Explore the diverse success stories and creative solutions in our portfolio at WebizyCode. From
    captivating Shopify web designs to impactful email marketing campaigns and seamless store migrations, witness the
    transformation of online businesses. Dive into our portfolio to discover how our expertise has elevated brands, and
    envision the possibilities for your own digital journey.')
    <x-web-site-layout>
        <x-header-section>
            <x-slot:titlePage>
                Porfolio
            </x-slot:titlePage>
        </x-header-section>
        <!--Services box description -->
        <br><br>
        {{-- <section class="bg-gray-200 w-full py-12">
            <div class="container mx-auto px-4">
                <div class="w-full text-center my-5">
                    <button class="inline-block rounded-md px-5 py-3 text-sm bg-blue-800 text-white">
                        View All
                    </button>
                    <button class="inline-block rounded-md px-5 py-3 text-sm border border-blue-800 text-blue-800">
                        Shopify
                    </button>
                    <button class="inline-block rounded-md px-5 py-3 text-sm border border-blue-800 text-blue-800">
                        WordPress
                    </button>
                    <button class="inline-block rounded-md px-5 py-3 text-sm border border-blue-800 text-blue-800">
                        Laravel
                    </button>

                </div>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-10" id="projects">
                    @foreach ($portfolios as $portfolio)
                        @if ($portfolio->technology === 'wordpress')
                            <x-project-card link="#" :image="$portfolio->featured_image" />
                        @endif
                    @endforeach
                </ul>
            </div>
        </section> --}}

        <br><br>
        <!--End Services box description -->
    </x-web-site-layout>
