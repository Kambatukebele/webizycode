<x-web-site-layout2>
  <x-header-section>
    <x-slot:titlePage>
      Review
    </x-slot:titlePage>
  </x-header-section>
  <!--Services box description -->
  <!--Session Message -->
  @if (session('status'))
  <script>
    alert("{{ session('status') }}")
  </script>
  @endif
  <section class="w-full relative">
    <div class="block w-[90%] mx-auto sm:w-[600px] lg:w-[700px]">
      <div class="flex justify-center items-center flex-col my-5">
        <h3 class="font-semibold text-2xl">Your Valued Feedback</h3>
        <p class="text-base text-gray-700 my-3 text-center">"Your experience and journey with us mean the world to us.
          Your opinion is invaluable, and we're excited to hear about
          your thoughts.</p>
        <p class="text-base text-gray-700 mb-3 text-center">Our commitment to excellence means we treat every project as
          if it were our own, and we're passionate about its success.
          Your feedback will help us continue to improve and provide exceptional service.</p>
        <p class="text-base text-gray-700 mb-3 text-center">Please take a moment to share your thoughts about our work.
          Your insights will guide us on this journey towards
          excellence."</p>
      </div>
      <form method="post" action="{{ route('review.store') }}"
        class="mt-6 space-y-6 sm:bg-white sm:w-[500px] sm:p-10 sm:rounded-lg sm:shadow-lg  sm:mx-auto lg:w-[600px]">
        @csrf
        <div>
          <x-input-label for="name" :value="__('Full Name')" />
          <x-text-input id="fullname" name="client_fullname" type="text" :value="old('client_fullname')"
            class="mt-1 block w-full" required autofocus autocomplete="name" />
          <x-input-error class="mt-2" :messages="$errors->get('client_fullname')" />
        </div>
        <div>
          <x-input-label for="name" :value="__('Your Company Name')" />
          <x-text-input id="fullname" name="client_company_name" type="text" :value="old('client_company_name')"
            class="mt-1 block w-full" required autofocus autocomplete="name" />
          <x-input-error class="mt-2" :messages="$errors->get('client_company_name')" />
        </div>
        <div>
          <x-input-label for="name" :value="__('Company Link')" />
          <x-text-input id="fullname" name="client_company_link" type="text" :value="old('client_company_link')"
            class="mt-1 block w-full" required autofocus autocomplete="name" />
          <x-input-error class="mt-2" :messages="$errors->get('client_company_link')" />
        </div>
        <div>
          <x-input-label for="name" :value="__('Your Review')" />
          <textarea
            class="border-gray-300 mt-1 block focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
            name="client_review" id="client_review" rows="10">{{ old('client_review') }}</textarea>
          <x-input-error class="mt-2" :messages="$errors->get('client_review')" />
        </div>
        <div class="flex">
          <input class="border-gray-300 mr-3 focus:border-indigo-500 focus:ring-indigo-500 rounded shadow-sm"
            type="checkbox" name="privacy" id="privacy">
          <a href="{{ route('privacy-policy') }}" class="block font-medium text-sm text-gray-700 underline">
            I have read and accept the Privacy Policy
          </a>
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('privacy')" />
        <div class="flex items-center gap-4">
          <button
            class="inline-flex items-center px-4 py-2 bg-purple-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black  transition ease-in-out duration-150">Share
            Your Feedback</button>
        </div>
      </form>
    </div>
    {{-- Design --}}
    <div
      class="flex justify-center items-center w-[50px] absolute top-0 right-5 opacity-30 -rotate-45 lg:w-[100px] lg:right-20">
      <img src="{{ url('/assets/images/icon-contact-us.webp') }}"
        class="w-full h-full object-cover object-center rounded-full" alt="">
    </div>

    <div class="w-[150px] hidden lg:block lg:absolute lg:left-10 lg:bottom-5 lg:animate-bounce">
      <img src="{{ url('/assets/images/navbar-vertical.png') }}" alt=""
        class="w-full h-full object-cover object-center rounded-full">
    </div>
  </section>
  <br>
  <!--End Services box description -->
</x-web-site-layout2>