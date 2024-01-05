<div class="main-padding bg-indigo-50 mt-20 py-4 bg-cover" style="background-image: url('{{ asset('assets/images/pattern/pattern-4.webp') }}')">
    <div class="flex flex-col gap-3 my-10 bg-gradient-to-r from-indigo-500/10 from-10% via-sky-500 via-90% to-transparent to-60% px-6 py-4 rounded-md">
        <h2 class="text-4xl tracking-wide text-gray-900 relative">
            Property populer
            <span class="absolute -bottom-2 left-0 w-1/12 h-[8px] bg-brand-50 rounded-full"></span>
        </h2>
        <h5 class="text-gray-500 text-sm">Property di berbagai wilayah yang menjadi trending kami</h5>
    </div>
    <div class="popular-properties-swiper overflow-hidden mx-auto px-0.5 relative group">
        <div class="popular-button-next absolute top-[50%] transform translate-y-[-50%] -right-12 group-hover:right-5 z-10 cursor-pointer bg-gray-400 hover:bg-brand-50 shadow-md px-3.5 py-2 rounded-full transition-all ease-in-out duration-200">
            <i class="fa-light fa-arrow-right text-lg text-gray-100"></i>
        </div>
        <div class="popular-button-prev absolute top-[50%] transform translate-y-[-50%] -left-12 group-hover:left-5 z-10 cursor-pointer bg-gray-400 hover:bg-brand-50 shadow-md px-3.5 py-2 rounded-full transition-all ease-in-out duration-200">
            <i class="fa-light fa-arrow-left text-lg text-gray-100"></i>
        </div>
        <div class="swiper-wrapper py-4">
            @foreach ($properties as $property)
                <div class="swiper-slide flex flex-col overflow-hidden rounded-md bg-white shadow-md" data-aos="fade-up">
                    <div class="w-full relative">
                        <img src="{{ asset('assets/images/properties/' . $property->images->first()->url . '.jpg') }}" alt="" class="w-full h-full object-cover">
                    </div>
                    <article class="flex flex-col gap-3 p-4 w-full">
                        <a href="#" class="text-lg sm:text-md xl:text-lg text-gray-800 group-hover:text-brand-50 font-semibold">{{ $property->name }}</a>
                        <div class="flex items-center gap-2 text-gray-500">
                            <i class="fa-light fa-location-dot text-sm"></i>
                            <span class="text-xs">{{ $property->relatedLocation->name }}</span>
                        </div>
                        {{--  --}}
                        <div class="grid grid-cols-2 gap-4 my-6">
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-light fa-bed-front"></i>
                                <span class="text-sm font-light">{{ $property->bedroom }} kamar tidur</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-light fa-bath"></i>
                                <span class="text-sm font-light">{{ $property->bathroom }} kamar mandi</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-light fa-ruler-triangle"></i>
                                <span class="text-sm font-light">{{ $property->area }} m&#xb2</span>
                            </div>
                            <div class="flex items-center gap-2 text-gray-500">
                                <i class="fa-light fa-garage-open"></i>
                                <span class="text-sm font-light">{{ $property->garage }} garasi</span>
                            </div>
                        </div>
                        {{--  --}}
                        <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                        {{--  --}}
                        <div class="flex justify-between">
                            <span class="text-gray-600 font-semibold text-lg">Rp {{ $property->price }}</span>
                            <ul class="flex gap-2">
                                <li>
                                    <a href="" class="text-blue-700 text-2xl">
                                        <i class="fa-brands fa-square-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-gray-500 text-2xl">
                                        <i class="fa-brands fa-square-x-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-green-500 text-2xl">
                                        <i class="fa-brands fa-square-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</div>
