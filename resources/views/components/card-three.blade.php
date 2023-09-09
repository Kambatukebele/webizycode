<!--Blog-->
<section class="w-full h-fit bg-gray-100 mb-12 py-10">
    <div class="w-[90%] mx-auto md:max-w-[700px] lg:max-w-[900px] xl:max-w-[1220px]">
        <!--Upper -->
        <!-- body section -->
        <div class="mb-10 lg:grid lg:gap-4 lg:grid-cols-2 lg:grid-rows-2 xl:grid-cols-3">
            {{-- Card --}}
            <div
                class="my-4 pb-5 rounded-lg w-[290px] relative sm:w-[350px] md:w-[400px] xl:w-[380px] mx-auto shadow-xl">
                <div class="w-[290px] h-[190px] sm:w-[350px] md:w-[400px] xl:w-[380px]">
                    <img class="w-full h-full rounded-t-lg object-cover object-center" src="{{ $cardThreeImage }}"
                        alt="">
                </div>
                <div class="md:max-w-[550px]">
                    <h4 class="text-black text-center font-ReadexPro font-semibold text-2xl my-5">
                        {{-- Fast Performance --}}
                        {{ $cardThreeTitle }}
                    </h4>
                    <p class="font-base font-normal font-NunitoSans text-gray-500 px-5 mb-5 text-center">
                        {{ $cardThreeDescription }}
                    </p>
                    <p
                        class="block bg-purple-700 text-white w-36 rounded-full hover:bg-black  py-2 mx-auto text-base font-normal text-center">
                        <a class="block" href="{{ $cardThreeLink }}">Read More</a>
                    </p>
                    {{-- Date --}}
                    <p
                        class="bg-purple-700 text-white w-24 absolute top-2 left-2  text-center font-Nunito text-xs py-2 rounded-md">
                        {{ $cardThreeDate }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>