@section('title', 'Blog | Engaging Blog Content for Business Readers')
@section('description',
    'Explore a treasure trove of knowledge and insights in our blog at WebizyCode. Immerse yourself
    in a wide range of articles covering everything from Shopify web design and email marketing strategies to e-commerce
    trends and expert advice. Stay informed, inspired, and ahead of the curve as our blog becomes your go-to resource for
    valuable information in the digital realm. Join our community of readers and empower your online journey with our
    thought-provoking and informative content.')
    <x-web-site-layout>
        <x-header-section>
            <x-slot:titlePage>
                Blog
            </x-slot:titlePage>
        </x-header-section>
        <section class="w-full py-12">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach ($paginatedPosts as $post)
                        <x-card-blog :image="$post['_embedded']['wp:featuredmedia'][0]['source_url']" :date="$post['date']" :title="$post['title']['rendered']" :description="$post['excerpt']['rendered']"
                            :link="'/blog/' . $post['id']" />
                    @endforeach
                </div>
                <div class="my-10">
                    <!-- Pagination Links -->
                    {{ $paginatedPosts->links() }}
                </div>
            </div>
        </section>

    </x-web-site-layout>
