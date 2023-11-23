<div class="main-padding pt-6 pb-10">
    <div class="flex flex-col gap-3 my-10 bg-gradient-to-r from-indigo-500/10 from-10% via-sky-500 via-90% to-transparent to-60% px-6 py-4 rounded-md">
        <h2 class="text-4xl tracking-wide text-gray-900 relative">
            Lokasi populer
            <span class="absolute -bottom-2 left-0 w-1/12 h-[8px] bg-brand-50 rounded-full"></span>
        </h2>
        <h5 class="text-gray-500 text-sm">Lokasi dengan hunian paling populer</h5>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10">
        @foreach ($locations as $location)
            <a href="{{ route('listing-by-location', $location) }}" class="flex flex-col md:flex-row items-center rounded-md overflow-hidden hover:shadow-md ring-1 ring-gray-200 cursor-pointer group">
                <img src="{{ asset('assets/images/locations/' . ($loop->index + 1) . '.jpg') }}" alt="{{ $location->name }}" class="w-full md:w-[180px] object-cover group-hover:scale-105 transition-all ease-in-out duration-150">
                <div class="flex flex-col items-center md:items-start gap-4 p-4">
                    <span class="text-gray-700 group-hover:text-brand-50 text-xl md:text-base">{{ $location->name }}</span>
                    <span class="text-sm text-gray-500">{{ $location->properties_count }} Property</span>
                </div>
            </a>
        @endforeach
    </div>
</div>
