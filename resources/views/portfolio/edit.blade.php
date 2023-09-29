<x-app-layout>
  <script src="https://cdn.tiny.cloud/1/vs2uzmszoglxmru2wiphv9o8lwo8r5xplo8mqk0q9a2uh6w3/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create a Portfolio') }}
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
          <form method="post" action="{{ route('portfolio.update', ['id' => $portfolio->id]) }}"
            enctype="multipart/form-data" class="mt-6 space-y-6">
            @csrf
            @method('PUT')
            <div id="card-image">
              <x-input-label for="company_image" :value="__('Company Image')" />
              <button type="button"
                class="cursor-pointer border my-3 py-1 w-32 rounded-md text-sm text-gray-600 hover:bg-black hover:text-white"
                id="btn-show-hidden-input">
                {{ __("Change image") }}
              </button>
              <button type="button"
                class="hidden cursor-pointer border my-3 py-1 w-32 rounded-md text-sm text-gray-600 hover:bg-black hover:text-white"
                id="btn-hide-hidden-input">
                {{ __("Revert") }}
              </button>
              <div class="block w-[300px] sm:w-[350px] md:w-[450px]" id="divImage">
                <img class="w-full h-full object-cover object-center"
                  src="{{ url('/uploads/' .$portfolio->company_image) }}" alt="">
              </div>
              <x-input-error class="mt-2" :messages="$errors->get('company_image')" />
            </div>
            <div>
              <x-input-label for="Company Name" :value="__('Company Name')" />
              <x-text-input id="Company Name" name="company_name" type="text" class="mt-1 block w-full" required
                autofocus autocomplete="Company Name" value="{{ old('company_name', $portfolio->company_name) }}" />
              <x-input-error class="mt-2" :messages="$errors->get('company_name')" />
            </div>
            <div>
              <x-input-label for="Project Title" :value="__('Project Title')" />
              <x-text-input id="Project Title" name="company_project_title" type="text" class="mt-1 block w-full"
                required autofocus autocomplete="Project Title"
                value="{{ old('company_project_title', $portfolio->company_project_title) }}" />
              <x-input-error class="mt-2" :messages="$errors->get('company_project_title')" />
            </div>
            <div>
              <x-input-label for="Project Description" :value="__('Project Description')" />
              <textarea
                class="border-gray-300 w-full h-[300px] mt-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                name="company_project_description">{{ old('company_project_description', $portfolio->company_project_description) }}</textarea>
              <x-input-error class="mt-2" :messages="$errors->get('company_project_description')" />
            </div>
            <div>
              <x-input-label for="Project task" :value="__('Project task')" />
              <textarea
                class="border-gray-300 mt-1 w-full h-[300px] focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                name="company_project_task">{{ old('company_project_task', $portfolio->company_project_task) }}</textarea>
              <x-input-error class="mt-2" :messages="$errors->get('company_project_task')" />
            </div>
            <div>
              <x-input-label for="Company Location" :value="__('Company Location')" />
              <x-text-input id="Company Location" name="company_location" type="text" class="mt-1 block w-full" required
                autofocus autocomplete="Company Location"
                value="{{ old('company_location', $portfolio->company_location) }}" />
              <x-input-error class="mt-2" :messages="$errors->get('company_location')" />
            </div>
            <div>
              <x-input-label for="Company link" :value="__('Company link')" />
              <x-text-input id="Company link" name="company_link" type="text" class="mt-1 block w-full" required
                autofocus autocomplete="Company link" value="{{ old('company_link', $portfolio->company_link) }}" />
              <x-input-error class="mt-2" :messages="$errors->get('company_link')" />
            </div>
            <div>
              <x-input-label for="Company date" :value="__('Company date Launched')" />
              <x-text-input id="Company date" name="company_date_launched" type="date" class="mt-1 block w-full"
                required autofocus autocomplete="Company date"
                value="{{ old('company_date_launched', $portfolio->company_date_launched) }}" />
              <x-input-error class="mt-2" :messages="$errors->get('company_date_launched')" />
            </div>
            <div>
              <x-input-label for="status" :value="__('Status')" />
              <select name="status" id="status"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                @isset($portfolio->status)
                <option value="{{$portfolio->status }}" selected>{{ Str::ucfirst($portfolio->status) }}</option>
                @endisset
                <option value="draft">Draft</option>
                <option value="active">Active</option>
              </select>
              <x-input-error class="mt-2" :messages="$errors->get('status')" />
            </div>
      </div>
      <br>
      <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Post') }}</x-primary-button>
      </div>
      </form>
      </section>
      <!--End Form -->
      <!--Delete part-->
      <section class="space-y-6">
        <form method="post" action="{{ route('portfolio.destroy', ['id' =>$portfolio->id]) }}" class="mt-5">
          @csrf
          @method('delete')
          <x-danger-button>
            {{ __('Delete This Portfolio') }}
          </x-danger-button>
        </form>
      </section>
    </div>

  </div>
  </div>

</x-app-layout>