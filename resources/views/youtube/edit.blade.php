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
          <form method="post" action="{{ route('youtube.update', ['id' => $youtube->id]) }}" class="mt-6 space-y-6">
            @csrf
            @method('PUT')
            <div>
              <x-input-label for="title" :value="__('Title')" />
              <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus
                autocomplete="title" value="{{ old('title', $youtube->title) }}" />
              <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>
            <div>
              <x-input-label for="title" :value="__('Youtube Link')" />
              <x-text-input id="title" name="youtube_link" type="text" class="mt-1 block w-full" required autofocus
                autocomplete="title" value="{{ old('youtube_link', $youtube->youtube_link) }}" />
              <x-input-error class="mt-2" :messages="$errors->get('youtube_link')" />
            </div>
            <div>
              <x-input-label for="status" :value="__('Status')" />
              <select name="status" id="status"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                @isset($youtube->status)
                <option value="{{$youtube->status }}" selected>{{ Str::ucfirst($youtube->status) }}</option>
                @endisset
                <option value="draft">Draft</option>
                <option value="active">Active</option>
              </select>
              <x-input-error class="mt-2" :messages="$errors->get('status')" />
            </div>
            <div class="flex items-center gap-4">
              <x-primary-button>{{ __('Post Video') }}</x-primary-button>
            </div>
          </form>
        </section>
        <!--End Form -->
      </div>

      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5">
        <!--Form -->
        <form method="post" action="{{ route('youtube.destroy', ['id' =>$youtube->id]) }}" class="my-5 pl-5">
          @csrf
          @method('delete')
          <x-danger-button>
            {{ __('Delete This Youtube Post') }}
          </x-danger-button>
        </form>
        <!--End Form -->
      </div>
    </div>
  </div>

</x-app-layout>