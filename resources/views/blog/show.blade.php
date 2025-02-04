@section('title', 'Blog - Single | Your Source for In-Depth Insights')
@section('description',
    'Uncover the secrets of successful Shopify web design in our latest blog post at WebizyCode.
    From effective UI/UX principles to the latest design trends, this post dives deep into the art of creating visually
    stunning and high-converting online stores. Learn practical tips, gain insights from industry experts, and elevate your
    e-commerce game. Explore our blog now for an immersive journey into the world of impactful web design.')
    <x-web-site-layout>
        <x-header-section>
            <x-slot:titlePage>
                {{ $post['title']['rendered'] }}
            </x-slot:titlePage>
        </x-header-section>
        <section class="w-full h-fit mb-10">
            <div class="container mt-5">
                <div class="rounded-2xl px-4 mb-10">
                    <img class="block rounded-2xl"
                        src="{{ $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? 'default.jpg' }}">
                </div>
                <div class="rounded-2xl text-xl px-4 font-poppins max-w-fit">
                    {!! $post['content']['rendered'] !!}
                </div>
            </div>
        </section>

    </x-web-site-layout>
