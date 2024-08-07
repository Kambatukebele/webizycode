<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2">
    <div class="max-w-7xl mx-auto px-6">
        <div class="p-2 rounded-lg bg-yellow-100">
            <div class="flex items-center justify-between flex-col lg:flex-row lg:justify-around">
                <div class="w-full flex-1 items-center lg:flex lg:justify-start">
                    <p class="text-black cookie-consent__message text-center lg:text-start">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:w-auto lg:mt-0">
                    <a href="{{ route('privacy-policy') }}" class="mr-5 cursor-pointer underline">
                        Privacy Policy
                    </a>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:w-auto mr-2 lg:mt-0">
                    <button
                        class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-white bg-red-800 hover:bg-red-950">
                        {{ trans('cookie-consent::texts.reject') }}
                    </button>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:w-auto lg:mt-0">
                    <button
                        class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-white bg-purple-800 hover:bg-purple-950">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>