<x-app-layout>
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
          <form method="post" action="{{ route('review.update', ['id'=> $review->id]) }}" enctype="multipart/form-data"
            class="mt-6 space-y-6">
            @csrf
            @method('PUT')
            <div>
              <x-input-label for="status" :value="__('Status')" />
              <select name="status" id="status"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                @isset($review->status)
                <option value="{{$review->status }}" selected>{{ Str::ucfirst($review->status) }}</option>
                @endisset
                <option value="draft">Draft</option>
                <option value="active">Active</option>
              </select>
              <x-input-error class="mt-2" :messages="$errors->get('status')" />
            </div>
      </div>

      <div class="flex items-center gap-4 my-5">
        <x-primary-button>{{ __('Update') }}</x-primary-button>
        {{-- @if (session('status') === 'profile-updated')
                          <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">{{ __('Saved.') }}</p>
        @endif --}}
      </div>
      </form>
      </section>
      <!--End Form -->
      <!--Delete part-->
      {{-- <section class="space-y-6">
        <form method="post" action="{{ route('post.destroy', ['id' =>$review->id]) }}" class="mt-5">
      @csrf
      @method('delete')
      <x-danger-button>
        {{ __('Delete This Post') }}
      </x-danger-button>
      </form>
      </section> --}}
    </div>
  </div>
  </div>

</x-app-layout>