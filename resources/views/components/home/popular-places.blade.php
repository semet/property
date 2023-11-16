<div class="main-padding">
    <div class="text-center flex flex-col gap-2 my-10">
        <h2 class="text-2xl tracking-wider text-gray-600">Lokasi populer</h2>
        <h5 class="text-gray-500 text-sm">Lokasi dengan hunian paling populer</h5>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10">
        @foreach ($locations as $location)
            <a href="#" class="flex flex-col md:flex-row items-center rounded-md overflow-hidden hover:shadow-xl shadow-md cursor-pointer group">
                <img src="{{ asset('assets/images/locations/' . ($loop->index + 1) . '.jpg') }}" alt="{{ $location->name }}" class="w-full md:w-[180px] object-cover group-hover:scale-105 transition-all ease-in-out duration-150">
                <div class="flex flex-col items-center md:items-start gap-4 p-4">
                    <span class="text-gray-700 group-hover:text-brand-50 text-xl md:text-base">{{ $location->name }}</span>
                    <span class="text-sm text-gray-500">{{ $loop->index * 100 + 4 }} Property</span>
                </div>
            </a>
        @endforeach
    </div>
</div>
