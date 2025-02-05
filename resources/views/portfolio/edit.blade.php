@section('title', 'Portfolio - Edit')
<x-app-layout>
    <script src="https://cdn.tiny.cloud/1/vs2uzmszoglxmru2wiphv9o8lwo8r5xplo8mqk0q9a2uh6w3/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Portfolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!--Form -->
                <section class="p-6 text-gray-900">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('You are editing') }}
                        </h2>
                    </header>

                    <form method="post" action="{{ route('portfolio.update', ['id' => $portfolio->id]) }}"
                        enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="Company Name" :value="__('Company Name')" />
                            <x-text-input id="Company Name" name="company_name" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="Company Name"
                                value="{{ old('company_name', $portfolio->company_name) }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('company_name')" />
                        </div>
                        <div>
                            <x-input-label for="Company Description" :value="__('Company Description (Write what the company do)')" />
                            <textarea
                                class="border-gray-300  w-full h-[300px] mt-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                style="white-space: pre;" name="company_description">{{ old('company_description', $portfolio->company_description) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('company_description')" />
                        </div>
                        <div class="parentBtnAndImage" data-input ="featured_image">
                            <x-input-label for="featured_image" :value="__('Featured Image')" />
                            <button type="button"
                                class="cursor-pointer uppercase bg-red-800 border my-3 py-3 w-[200px] rounded-md text-sm text-white upper hover:bg-black showBtn">
                                {{ __('Change featured image') }}
                            </button>
                            <button type="button"
                                class="hidden cursor-pointer uppercase bg-green-800 border my-3 py-3 w-[200px] rounded-md text-sm text-white hover:bg-black hover:text-white hideBtn">
                                {{ __('Revert featured image') }}
                            </button>
                            <div class="max-w-sm showImage">
                                <img class="rounded-2xl" src="{{ url('/uploads/' . $portfolio->featured_image) }}"
                                    alt="">
                            </div>

                            <x-input-error class="mt-2" :messages="$errors->get('featured_image')" />
                        </div>
                        <div>
                            <x-input-label for="Challenges" :value="__('Challenges (Write about the challenge the company is facing)')" />
                            <textarea
                                class="border-gray-300  w-full h-[300px] mt-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                style="white-space: pre;" name="challenges">{{ old('challenges', $portfolio->challenges) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('challenges')" />
                        </div>
                        <div>
                            <x-input-label for="Issues" :value="__('Issues (Separate with comma)')" />
                            <x-text-input id="Issues" name="issues" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="issues"
                                value="{{ old('issues', $portfolio->issues) }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('issues')" />
                        </div>
                        <div>
                            <x-input-label for="Services provided" :value="__('Services provided (Separate with comma)')" />
                            <x-text-input id="Services provided" name="services_provided" type="text"
                                class="mt-1 block w-full" required autofocus autocomplete="services_provided"
                                value="{{ old('services_provided', $portfolio->services_provided) }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('services_provided')" />
                        </div>
                        <div>
                            <x-input-label for="Solution" :value="__('Solution (Explain the solution)')" />
                            <textarea
                                class="border-gray-300  w-full h-[300px] mt-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                style="white-space: pre;" name="solution">{{ old('solution', $portfolio->solution) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('solution')" />
                        </div>
                        <div>
                            <x-input-label for="Technology" :value="__('Technology (WordPress, Shopify, Full stack Laravel React)')" />
                            <x-text-input id="Technology" name="technology" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="technology"
                                value="{{ old('technology', $portfolio->technology) }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('technology')" />
                        </div>
                        <div>
                            <x-input-label for="Link" :value="__('Link (Link of the project)')" />
                            <x-text-input id="Link" name="link" type="text" class="mt-1 block w-full"
                                required autofocus autocomplete="link" value="{{ old('link', $portfolio->link) }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('link')" />
                        </div>
                        <div>
                            <x-input-label for="Owner testimonial" :value="__('Owner testimonial (Owner testimonial)')" />
                            <textarea
                                class="border-gray-300  w-full h-[300px] mt-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                style="white-space: pre;" name="owner_testimonial">{{ old('owner_testimonial', $portfolio->owner_testimonial) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('owner_testimonial')" />
                        </div>
                        <div>
                            <x-input-label for="status" :value="__('Status')" />
                            <select name="status" id="status"
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                                @isset($portfolio->status)
                                    <option value="{{ $portfolio->status }}" selected>
                                        {{ Str::ucfirst($portfolio->status) }}</option>
                                @endisset
                                <option value="draft">Draft</option>
                                <option value="active">Active</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </div>
                        <br>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Update') }}</x-primary-button>
                        </div>
                    </form>
                </section>
                <!--End Form -->
                <!--Delete part-->
                <section class="space-y-6">
                    <form method="post" action="{{ route('portfolio.destroy', ['id' => $portfolio->id]) }}"
                        class="mt-5">
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
