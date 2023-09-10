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
          <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
            @csrf
            <div>
              <x-input-label for="featured_image" :value="__('Featured_image')" />
              <x-text-input id="featured_image" name="featured_image" type="file" class="mt-1 block w-full" required
                autofocus autocomplete="featured_image" />
              <x-input-error class="mt-2" :messages="$errors->get('featured_image')" />
            </div>
            <div>
              <x-input-label for="title" :value="__('Title')" />
              <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus
                autocomplete="title" />
              <x-input-error class="mt-2" :messages="$errors->get('title')" />
            </div>
            <div>
              <x-input-label for="category" :value="__('Category')" />
              <select name="category" id="category"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                <option value="laravel">Laravel</option>
                <option value="php">PHP</option>
                <option value="reactjs">Reactjs</option>
                <option value="javascript">JavaScript</option>
                <option value="wordpress">WordPress</option>
                <option value="shopify">Shopify</option>
                <option value="socialmedia">Social Media</option>
              </select>
              <x-input-error class="mt-2" :messages="$errors->get('category')" />
            </div>
            <div>
              <x-input-label for="tags" :value="__('Tags')" />
              <x-text-input id="tags" name="tags" type="text" class="mt-1 block w-full" required autofocus
                autocomplete="tags" />
              <p class="mt-1 text-sm text-gray-600">
                {{ __("Add tags and separare them with a commas") }}
              </p>
              <x-input-error class="mt-2" :messages="$errors->get('tags')" />
            </div>
            {{-- :value="old('email', $user->email)" --}}
            <div>
              <x-input-label for="email" :value="__('Content')" />
              <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                name="content"></textarea>
              {{-- cols="132" rows="10" --}}
              {{-- <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" required autocomplete="username" /> --}}
              <x-input-error class="mt-2" :messages="$errors->get('content')" />

              {{-- @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                          <p class="text-sm mt-2 text-gray-800">
                            {{ __('Your email address is unverified.') }}

              <button form="send-verification"
                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Click here to re-send the verification email.') }}
              </button>
              </p>

              @if (session('status') === 'verification-link-sent')
              <p class="mt-2 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to your email address.') }}
              </p>
              @endif
            </div>
            @endif --}}
      </div>

      <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Post') }}</x-primary-button>

        {{-- @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                          class="text-sm text-gray-600">{{ __('Saved.') }}</p>
        @endif --}}
      </div>
      </form>
      </section>
      <!--End Form -->
    </div>
  </div>
  </div>

</x-app-layout>
<script>
  tinymce.init({
      selector: 'textarea',
      plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
    });
</script>