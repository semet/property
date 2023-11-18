<div class="main-padding bg-indigo-50 mt-20 py-4 bg-cover" style="background-image: url('{{ asset('assets/images/pattern/pattern-1.jpg') }}')">
    <div class="flex flex-col gap-3 my-10 bg-gradient-to-r from-indigo-500/10 from-10% via-sky-500 via-90% to-transparent to-60% px-6 py-4 rounded-md">
        <h2 class="text-4xl tracking-wide text-gray-900">Property pilihan</h2>
        <h5 class="text-gray-500 text-sm">Properti pilihan kami dan para customers</h5>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach ($properties as $property)
            <div class="flex flex-col md:flex-row xl:flex-row bg-white rounded-md overflow-hidden group">
                <div class="w-full relative overflow-hidden">
                    <div class="absolute top-0 left-0 p-1.5 z-10 rounded-br-md @if ($property->status === 'Disewakan') bg-indigo-500 @else bg-pink-500 @endif">
                        <span class="text-sm text-gray-100">{{ $property->status }}</span>
                    </div>
                    <img src="{{ asset('assets/images/properties/' . $property->images->first()->url . '.jpg') }}" alt="{{ $property->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-all ease-in-out duration-200">
                </div>
                <article class="flex flex-col gap-3 p-4 w-full">
                    <a href="#" class="text-lg lg:text-2xl xl:text-lg text-gray-800 group-hover:text-brand-50">{{ $property->name }}</a>
                    <div class="flex items-center gap-2 text-gray-500">
                        <i class="fa-solid fa-location-dot text-sm"></i>
                        <span class="text-xs">{{ $property->location->name }}</span>
                    </div>
                    {{--  --}}
                    <div class="grid grid-cols-2 gap-4 my-6">
                        <div class="flex items-center gap-2 text-gray-500">
                            <i class="fa-solid fa-bed"></i>
                            <span class="text-sm font-light">{{ $property->bedroom }} kamar tidur</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-500">
                            <i class="fa-solid fa-bath"></i>
                            <span class="text-sm font-light">{{ $property->bathroom }} kamar mandi</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-500">
                            <i class="fa-solid fa-ruler-combined"></i>
                            <span class="text-sm font-light">{{ $property->area }} m&#xb2</span>
                        </div>
                        <div class="flex items-center gap-2 text-gray-500">
                            <i class="fa-solid fa-car"></i>
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
                                <a href="" class="text-blue-500 text-2xl">
                                    <i class="fa-brands fa-square-twitter"></i>
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
    {{-- Button --}}
    <div class="flex justify-center my-6">
        <a href="#" class="bg-pink-500 hover:bg-pink-600 px-6 py-3 flex gap-2 items-center text-gray-100 rounded-3xl shadow-md transition-all ease-in-out duration-200">
            <span class="text-md">Lebih banyak</span>
            <i class="fa-solid fa-arrow-right-long"></i>
        </a>
    </div>
</div>
