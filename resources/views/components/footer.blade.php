<footer class="w-full h-fit bg-hero-footer bg-cover bg-center bg-gray-900 py-10">
    <div class="mx-auto flex justify-between items-center flex-col">
        <!--Upper -->
        <div class="lg:grid lg:gap-36 lg:grid-cols-3 lg:grid-rows-1 lg:h-[300px]">
            <!--Logo-->
            <div
                class="min-w-[290px] my-5 flex justify-center items-center flex-col lg:my-0 lg:w-[200px] lg:justify-start">
                <div class="">
                    <a href="#" class="text-white font-extrabold text-2xl">
                        EZAGROW
                    </a>
                </div>
                <div class="my-2">
                    <p class="text-xl font-poppins text-white px-2 text-center">
                        We design exceptional digital products to streamline your business processes and save resources.
                    </p>
                </div>
                <!--Icons -->
                <div class="my-3 inline-block">
                    <a href="https://github.com/kambatukebele"><i
                            class="fa-brands fa-github text-blue-800 text-2xl mr-2"></i></a>
                    <a href="https://www.linkedin.com/kambatukebele"><i
                            class="fa-brands fa-linkedin text-blue-800 text-2xl mr-2"></i></a>
                    <a href="https://www.instagram.com/kambatukebele"><i
                            class="fa-brands fa-instagram text-blue-800 text-2xl mr-2"></i></a>
                </div>
            </div>
            <!-- Info & Notices -->
            <div class="min-w-[290px] my-5 lg:w-[200px] lg:my-0">
                <div>
                    <h4 class="text-white font-outfit text-2xl font-semibold text-center">
                        {{-- Info & Notices --}}
                        @lang('footer.Info & Notices')
                    </h4>
                </div>
                <div class="">
                    {{-- <p class="text-xl font-normal font-poppins text-white text-center my-2">Legal Notice</p> --}}
                    <p class=" block text-xl font-normal font-poppins text-white text-center my-2">
                        <a href="{{ route('privacy-policy') }}" class="block">
                            {{-- Privacy Policy --}}
                            @lang('footer.Privacy Policies')
                        </a>
                    </p>
                    <p class="text-xl font-normal font-poppins text-white text-center my-2">
                        <a href="{{ route('cookies-policies') }}" class="block">
                            {{-- Cookies Policies --}}
                            @lang('footer.Cookie Policies')
                        </a>
                    </p>

                    <p class="text-xl font-normal font-poppins text-white text-center my-2">
                        <a href="{{ route('blog') }}" class="block">Blog</a>
                    </p>
                    <p class="text-xl font-normal font-poppins text-white text-center my-2">
                        <a href="{{ route('youtube.show') }}" class="block">Youtube</a>
                    </p>
                </div>
            </div>
            <!--Contact -->
            <div class="min-w-[290px] lg:w-[200px]">
                <div>
                    <h4 class="text-white font-outfit text-2xl font-semibold text-center">
                        {{-- Contact --}}
                        @lang('footer.Contact')
                    </h4>
                </div>
                <!--Address -->

                <!--pHONE -->

                <!--Email -->
                <div class="flex justify-start items-center flex-col my-2 lg:flex-row">
                    <!--icon -->
                    <div class="flex justify-start items-center">
                        <i class="fa-solid fa-envelope text-2xl text-blue-800"></i>
                    </div>
                    <div>
                        <p class="text-xl font-normal font-poppins text-white text-center my-2 px-2">
                            info@ezagrowllc.com</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Bottom -->
        <div class="mt-10 border-t w-full border-t-blue-800 h-20 flex justify-center items-center">
            <p class="text-xl font-normal font-poppins text-white text-center px-2">Copyright {{ now()->year }}.
                All
                rights
                reserved. Code with <span class="text-white">Laravel</span> by <span
                    class="text-blue-800 cursor-pointer">Ezagrow</span>
            </p>
        </div>
    </div>
</footer>
<script src="{{ url('/assets/js/index.js') }}"></script>
