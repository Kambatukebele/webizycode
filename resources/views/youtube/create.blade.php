<x-app-layout>
  <script src="https://cdn.tiny.cloud/1/vs2uzmszoglxmru2wiphv9o8lwo8r5xplo8mqk0q9a2uh6w3/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create a Post') }}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <!--Form -->
        <section class="p-6 text-gray-900">
          <header>
            <h2 class="text-lg font-medium text-gray-900">
              {{ __('Create something amazing') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
              {{ __("What do you have in mind today?.") }}
            </p>
          </header>
          <form method="post" action="{{ route('youtube.store') }}" class="mt-6 space-y-6">
            @csrf
            <div>
              <x-input-label for="title" :value="__('Title')" />
              <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus
                autocomplete="title" value="{{ old('title') }}" />
              <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>
            <div>
              <x-input-label for="title" :value="__('Youtube Link')" />
              <x-text-input id="title" name="youtube_link" type="text" class="mt-1 block w-full" required autofocus
                autocomplete="title" value="{{ old('youtube_link') }}" />
              <x-input-error class="mt-2" :messages="$errors->get('youtube_link')" />
            </div>
            <div class="flex items-center gap-4">
              <x-primary-button>{{ __('Post') }}</x-primary-button>
            </div>
          </form>
        </section>
        <!--End Form -->
      </div>
    </div>
  </div>

</x-app-layout>