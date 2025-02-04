<a href="{{ $link }}"
    class="rounded-lg border border-gray-300 shadow-md hover:shadow-xl cursor-pointer overflow-hidden">
    <img src="{{ $image }}" alt="blog image" class="w-full h-auto object-cover" />
    <div class="p-6">
        <h3 class="text-3xl font-extrabold my-4 font-outfit">
            {{ $title }}
        </h3>
        <p class="text-lg text-gray-700 font-poppins">
            {{ Str::words(strip_tags($description), 20, '...') }}
        </p>
    </div>
</a>
