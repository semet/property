<x-layouts.app title="Listing">
    <div class="flex flex-col gap-16 secondary-padding py-8">
        {{-- top --}}
        <div class="flex flex-col gap-6">
            {{-- breadcrumb --}}
            <x-partials.breadcrumb />
            {{-- page title --}}
            <x-partials.page-title title="Listing" />
        </div>
        {{-- content --}}
        <div class="flex flex-col-reverse lg:flex-row md:justify-between gap-4 w-full">
            {{-- left --}}
            <div class="flex-1 flex flex-col gap-4 h-min">
                <div class="flex justify-between items-center py-2">
                    <span class="text-xl text-gray-500">
                        {{ $properties->total() }} hasil pencarian
                    </span>
                    <form class="flex items-center gap-2" id="filter-form" action="{{ $action }}">
                        <i class="fa-solid fa-bars-sort text-2xl"></i>
                        <select id="list-sorting" name="sort_by" class="bg-transparent border-gray-300 text-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 border-0 ring-0 focus:border-0 focus:ring-0">
                            <option value="">Default</option>
                            <option value="price-low-to-high" @selected(request('sort_by') === 'price-low-to-high')>Harga termurah</option>
                            <option value="price-high-to-low" @selected(request('sort_by') === 'price-high-to-low')>Harga termahal</option>
                        </select>
                    </form>
                </div>
                @if ($properties->isNotEmpty())
                    <div class="flex flex-col gap-4">
                        @foreach ($properties as $property)
                            <div class="flex flex-col lg:flex-row bg-white rounded-md shadow-md overflow-hidden group">
                                <div class="w-full relative overflow-hidden">
                                    <div class="absolute top-0 left-0 p-1.5 z-10 rounded-br-md bg-brand-50">
                                        <span class="text-sm text-gray-100">{{ $property->status }}</span>
                                    </div>
                                    <div class="absolute top-0 right-0 p-1.5 z-10 rounded-bl-md bg-indigo-500">
                                        <span class="text-sm text-gray-100">{{ $property->relatedType->name }}</span>
                                    </div>
                                    <img src="{{ asset('assets/images/properties/' . $property->images->first()->url . '.jpg') }}" alt="{{ $property->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-all ease-in-out duration-200">
                                </div>
                                <article class="flex flex-col justify-between gap-3 p-4 w-full">
                                    <a href="{{ route('property', $property) }}" class="text-lg lg:text-2xl xl:text-lg text-gray-800 group-hover:text-brand-50">{{ $property->name }}</a>
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
                @else
                    <blockquote class="p-4 my-4 border-s-4 border-gray-300 bg-gray-50 dark:border-gray-500 dark:bg-gray-800">
                        <p class="text-xl italic font-medium leading-relaxed text-gray-600 dark:text-white">Tidak ada hasil ditemukan</p>
                    </blockquote>
                @endif
                {{-- Pagination Links --}}
                {{ $properties->links('pagination::tailwind') }}
            </div>

            {{-- sidebar --}}
            <x-partials.sidebar />
        </div>
    </div>

</x-layouts.app>
