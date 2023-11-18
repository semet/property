<div class="main-padding pt-10 bg-white">
    <div class="flex flex-col gap-3 my-10 bg-gradient-to-r from-indigo-500/10 from-10% via-sky-500 via-90% to-transparent to-60% px-6 py-4 rounded-md">
        <h2 class="text-4xl tracking-wide text-gray-800">Agent terbaik</h2>
        <h5 class="text-gray-500 text-sm">Daftar agent-agent terbaik yang kami miliki d seluruh wilayah</h5>
    </div>
    <div class="agent-swiper overflow-hidden mx-auto relative group">
        <div class="button-next absolute top-[50%] transform translate-y-[-50%] -right-12 group-hover:right-5 z-10 cursor-pointer bg-gray-400 hover:bg-brand-50 shadow-md px-3.5 py-2 rounded-full transition-all ease-in-out duration-200">
            <i class="fa-solid fa-arrow-right text-lg text-gray-100"></i>
        </div>
        <div class="button-prev absolute top-[50%] transform translate-y-[-50%] -left-12 group-hover:left-5 z-10 cursor-pointer bg-gray-400 hover:bg-brand-50 shadow-md px-3.5 py-2 rounded-full transition-all ease-in-out duration-200">
            <i class="fa-solid fa-arrow-left text-lg text-gray-100"></i>
        </div>
        <div class="swiper-wrapper py-4">
            @foreach ($agents as $agent)
                <div class="swiper-slide flex flex-col overflow-hidden rounded-md bg-white shadow-md">
                    <div class="w-full relative">
                        <div class="absolute top-0 p-2 bg-pink-500 text-gray-100 rounded-br-md">
                            {{ $agent->properties_count }} listing
                            {{-- TODO: make link to the listing --}}
                        </div>
                        <img src="{{ asset('assets/images/agents/' . $agent->photo) }}" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="flex flex-col gap-4 p-4">
                        <div class="flex flex-col">
                            <span class="text-2xl text-gray-800">{{ $agent->name }}</span>
                            <div class="flex items-center gap-2 text-gray-600">
                                <i class="fa-solid fa-location-dot text-sm"></i>
                                <span class="text-xs"> {{ $agent->location->name }}</span>
                            </div>
                        </div>
                        <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="flex gap-2 items-center text-gray-600">
                            <i class="fa-solid fa-mobile-screen"></i>
                            <span class="font-light text-sm"> {{ $agent->phone }}</span>
                        </div>
                        <div class="flex gap-2 items-center text-gray-600">
                            <i class="fa-regular fa-envelope"></i>
                            <span class="font-light text-sm"> {{ $agent->email }}</span>
                        </div>
                        <div class="flex">
                            {{--  --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
