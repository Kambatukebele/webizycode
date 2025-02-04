<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    Today is : {{ \Carbon\Carbon::now()->format('Y-m-d') }}
                </div>
            </div>
            <div class="lg:grid lg:grid-cols-3">
                <div class="bg-white shadow-sm sm:rounded-lg my-3 mx-1">
                    <div class="p-6 text-gray-900">
                        {{-- Youtubes Count: {{ $youtubes }} --}}
                    </div>
                </div>
                <div class="bg-white shadow-sm sm:rounded-lg my-3 mx-1">
                    <div class="p-6 text-gray-900">
                        {{-- Portfolios Count:{{ $portfolios }} --}}
                    </div>
                </div>

                <div class="bg-white shadow-sm sm:rounded-lg my-3 mx-1">
                    <div class="p-6 text-gray-900">
                        {{-- Contacts Count: {{ $contacts }} --}}
                    </div>
                </div>
                <div class="bg-white shadow-sm sm:rounded-lg my-3 mx-1">
                    <div class="p-6 text-gray-900">
                        {{-- Subscribers Count: {{ $subscribers }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
