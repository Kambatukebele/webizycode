@section('title', 'Portfolio - Create')
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
                            {{ __('What do you have in mind today?.') }}
                        </p>
                    </header>
                    <form method="post" action="{{ route('portfolio.store') }}" enctype="multipart/form-data"
                        class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="Company Name" :value="__('Company Name')" />
                            <x-text-input id="Company Name" name="company_name" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="Company Name" value="{{ old('company_name') }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('company_name')" />
                        </div>
                        <div>
                            <x-input-label for="Company Description" :value="__('Company Description (Write what the company do)')" />
                            <textarea
                                class="border-gray-300  w-full h-[300px] mt-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                style="white-space: pre;" name="company_description">{{ old('company_description') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('company_description')" />
                        </div>
                        <div>
                            <x-input-label for="featured_image" :value="__('Featured Image')" />
                            <x-text-input id="featured_image" name="featured_image" type="file"
                                value="{{ old('featured_image') }}" class="mt-1 block w-full" required autofocus
                                autocomplete="featured_image" />
                            <x-input-error class="mt-2" :messages="$errors->get('featured_image')" />
                        </div>
                        <div>
                            <x-input-label for="framed_image" :value="__('Framed Image (Show case image with mobile and computer)')" />
                            <x-text-input id="framed_image" name="framed_image" type="file"
                                value="{{ old('framed_image') }}" class="mt-1 block w-full" required autofocus
                                autocomplete="framed_image" />
                            <x-input-error class="mt-2" :messages="$errors->get('framed_image')" />
                        </div>
                        <div>
                            <x-input-label for="image_before" :value="__('Image Before (Image before I redisign)')" />
                            <x-text-input id="image_before" name="image_before" type="file"
                                value="{{ old('image_before') }}" class="mt-1 block w-full" required autofocus
                                autocomplete="image_before" />
                            <x-input-error class="mt-2" :messages="$errors->get('image_before')" />
                        </div>
                        <div>
                            <x-input-label for="image_after" :value="__('Image After (Image after I finish to build)')" />
                            <x-text-input id="image_after" name="image_after" type="file"
                                value="{{ old('image_after') }}" class="mt-1 block w-full" required autofocus
                                autocomplete="image_after" />
                            <x-input-error class="mt-2" :messages="$errors->get('image_after')" />
                        </div>
                        <div>
                            <x-input-label for="Challenges" :value="__('Challenges (Write about the challenge the company is facing)')" />
                            <textarea
                                class="border-gray-300  w-full h-[300px] mt-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                style="white-space: pre;" name="challenges">{{ old('challenges') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('challenges')" />
                        </div>
                        <div>
                            <x-input-label for="Issues" :value="__('Issues (Separate with comma)')" />
                            <x-text-input id="Issues" name="issues" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="issues" value="{{ old('issues') }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('issues')" />
                        </div>
                        <div>
                            <x-input-label for="Services provided" :value="__('Services provided (Separate with comma)')" />
                            <x-text-input id="Services provided" name="services_provided" type="text"
                                class="mt-1 block w-full" required autofocus autocomplete="services_provided"
                                value="{{ old('services_provided') }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('services_provided')" />
                        </div>
                        <div>
                            <x-input-label for="Solution" :value="__('Solution (Explain the solution)')" />
                            <textarea
                                class="border-gray-300  w-full h-[300px] mt-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                style="white-space: pre;" name="solution">{{ old('solution') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('solution')" />
                        </div>
                        <div>
                            <x-input-label for="Technology" :value="__('Technology (WordPress, Shopify, Full stack Laravel React)')" />
                            <x-text-input id="Technology" name="technology" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="technology" value="{{ old('technology') }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('technology')" />
                        </div>
                        <div>
                            <x-input-label for="Link" :value="__('Link (Link of the project)')" />
                            <x-text-input id="Link" name="link" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="link" value="{{ old('link') }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('link')" />
                        </div>
                        <div>
                            <x-input-label for="Owner testimonial" :value="__('Owner testimonial (Owner testimonial)')" />
                            <textarea
                                class="border-gray-300  w-full h-[300px] mt-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                style="white-space: pre;" name="owner_testimonial">{{ old('owner_testimonial') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('owner_testimonial')" />
                        </div>
                        <br>
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
