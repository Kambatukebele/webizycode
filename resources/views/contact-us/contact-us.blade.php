@section('title', 'Contact | Get in Touch – Contact Us Today')
@section('description', "Connect with WebizyCode through our Contact Us page. Whether you have inquiries about our Shopify web design, email marketing services, store optimization, or migration solutions, our dedicated team is ready to assist you. Reach out to us for personalized consultations and discover how we can tailor our expertise to meet your unique business needs. Contact us today and take the first step towards transforming your online presence.")
<x-web-site-layout>
  <x-header-section>
    <x-slot:titlePage>
      Nice to Meet You!
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
        <h3 class="font-semibold text-2xl">@lang("contact.Excited! Let's Talk")</h3>
        <p class="text-base text-gray-700 my-3 text-center">@lang("contact.Your journey to this point demonstrates your interest in our work, and we're equally eager to learn more about you!")</p>
        <p class="text-base text-gray-700 mb-3 text-center">@lang("contact.We're eager to delve deeper into your project, discover its unique qualities, and nurture it as if it were our very own.")
      </div>
      <form method="post" action="{{ route('contact.store') }}"
        class="mt-6 space-y-6 sm:bg-white sm:w-[500px] sm:p-10 sm:rounded-lg sm:shadow-lg  sm:mx-auto lg:w-[600px]">
        @csrf
        <div>
          <x-input-label for="name" :value="__('Name')" />
          <input type="text" name="name" placeholder="example: John Doe" value="{{ old('name') }}"
            class="mt-1 block w-full" required autofocus autocomplete="name">
          <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
          <x-input-label for="email" :value="__('Email')" />
          <input type="email" name="email" placeholder="example: johndoe@youremail.com" value="{{ old('email') }}"
            class="mt-1 block w-full" required autofocus autocomplete="email">
          <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>
        <div>
          <x-input-label for="company" :value="__('Company')" />
          <input type="text" name="company" placeholder="example: Company LLC" value="{{ old('company') }}"
            class="mt-1 block w-full" required autofocus autocomplete="email">
          <x-input-error class="mt-2" :messages="$errors->get('company')" />
        </div>
        <div>
          <x-input-label for="name" :value="__('Message')" />
          <textarea
            class="border-gray-300 mt-1 block focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
            name="content" id="content" rows="10">{{ old('content') }}</textarea>
          <x-input-error class="mt-2" :messages="$errors->get('content')" />
        </div>
        <div class="flex">
          <input class="border-gray-300 mr-3 focus:border-indigo-500 focus:ring-indigo-500 rounded shadow-sm"
            type="checkbox" name="privacy" id="privacy">
          <a href="{{ route('privacy-policy') }}" class="block font-medium text-sm text-gray-700 underline">
            @lang("contact.I have read and accept the Privacy Policy")
          </a>
        </div>
        <x-input-error class="mt-2" :messages="$errors->get('privacy')" />
        <div class="flex items-center gap-4">
          <button
            class="inline-flex items-center px-4 py-2 bg-purple-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black  transition ease-in-out duration-150">
            @lang("contact.SEND MESSAGE")
          </button>
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
</x-web-site-layout>