@section('title', 'Contact | Get in Touch – Contact Us Today')
@section('description',
    'Connect with WebizyCode through our Contact Us page. Whether you have inquiries about our
    Shopify web design, email marketing services, store optimization, or migration solutions, our dedicated team is ready to
    assist you. Reach out to us for personalized consultations and discover how we can tailor our expertise to meet your
    unique business needs. Contact us today and take the first step towards transforming your online presence.')
    <x-web-site-layout>
        <x-header-section>
            <x-slot:titlePage>
                Let's Talk About Your Project
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
            <div class="container">
                <form method="post" action="{{ route('contact.store') }}"
                    class="mt-6 space-y-6 sm:bg-white sm:w-[500px] sm:p-10 sm:rounded-lg sm:shadow-lg  sm:mx-auto lg:w-[600px]">
                    @csrf
                    <div>
                        <label class="text-sm font-semibod" for="name">@lang('contact.Name')</label>
                        <input type="text" name="name" placeholder="John Doe" value="{{ old('name') }}"
                            class="mt-1 block w-full rounded-lg border-gray-300" required autofocus autocomplete="name">
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
                    <div>
                        <label class="text-sm font-semibod" for="name">@lang('contact.Email')</label>
                        <input type="email" name="email" placeholder="johndoe@youremail.com" value="{{ old('email') }}"
                            class="mt-1 block w-full rounded-lg border-gray-300" required autofocus autocomplete="email">
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>
                    <div>
                        <label class="text-sm font-semibod" for="name">@lang('contact.Company')</label>
                        <input type="text" name="company" placeholder="Labrador" value="{{ old('company') }}"
                            class="mt-1 block w-full rounded-lg border-gray-300" required autofocus autocomplete="email">
                        <x-input-error class="mt-2" :messages="$errors->get('company')" />
                    </div>
                    <div>
                        <label class="text-sm font-semibod" for="name">@lang('contact.Message')</label>
                        <textarea class="border-gray-300 mt-1 block focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                            name="content" id="content" rows="10">{{ old('content') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('content')" />
                    </div>
                    <div class="flex">
                        <input class="border-gray-300 mr-3 focus:border-indigo-500 focus:ring-indigo-500 rounded shadow-sm"
                            type="checkbox" name="privacy" id="privacy">
                        <a href="{{ route('privacy-policy') }}" class="block font-medium text-sm text-gray-700 underline">
                            @lang('contact.I have read and accept the Privacy Policy')
                        </a>
                    </div>
                    <x-input-error class="mt-2" :messages="$errors->get('privacy')" />
                    <div class="">
                        <button
                            class="block text-center text-xs font-semibold leading-4  w-[200px] py-4 rounded-lg uppercase bg-blue-800 border border-blue-800 text-white hover:bg-black hover:font-semibold transition-all">
                            @lang('contact.SEND MESSAGE')
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
