<div class="bg-white my-4 rounded-lg p-5 min-w-[290px] mx-auto shadow-xl">
    <div class="flex justify-end items-center text-xl font-NunitoSans text-gray-200">
        {{ $cardTwoNumber }}
    </div>
    <div class="flex justify-center items-center flex-col">
        <div class="flex justify-center items-center  mt-1 mb-3">
            {{-- <i class="fa-solid fa-list-check block text-5xl text-purple-700"></i> --}}
            {{ $cardTwoIcon }}
        </div>
        <div class="md:max-w-[550px]">
            <h4 class="text-black text-center font-semibold text-2xl mb-2">
                {{-- Fast Performance --}}
                {{ $cardTwoTitle }}
            </h4>
            <p class="text-base text-gray-700 font-normal text-center">
                {{ $cardTwoDescription }}
            </p>
        </div>
    </div>
</div>