<div class="flex flex-col gap-4 h-min px-4 py-6 bg-white shadow-md rounded-md">
    <h2 class="text-2xl font-semibold text-gray-600">Temukan property anda</h2>
    <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
    <form action="{{ route('search-properties') }}" method="get" class="flex flex-col gap-8">
        {{-- Status --}}
        <div class="flex gap-4 items-center">
            <div class="block text-sm font-medium text-gray-600">Status</div>
            <div class="flex gap-2">
                <div class="flex items-center">
                    <input id="dijual" @checked(request('status') === 'dijual') type="radio" name="status" value="dijual" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="dijual" class="block ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">
                        Dijual
                    </label>
                </div>

                <div class="flex items-center">
                    <input id="disewakan" @checked(request('status') === 'disewakan') type="radio" name="status" value="disewakan" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="disewakan" class="block ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">
                        Disewakan
                    </label>
                </div>
            </div>
        </div>
        {{-- Tipe --}}
        <div>
            <label for="type" class="block mb-2 text-sm font-medium text-gray-600">Tipe Property</label>
            <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="semua">Semua</option>
                @foreach ($types as $type)
                    <option value="{{ $type->slug }}" @selected(request('type') === $type->slug)>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        {{-- Lokasi --}}
        <div>
            <label for="location" class="block mb-2 text-sm font-medium text-gray-600">Lokasi</label>
            <select id="location" name="location" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Pilih Lokasi</option>
                @foreach ($locations as $location)
                    <option value="{{ $location->slug }}" @selected(request('location') === $location->slug)>{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        {{-- Btn --}}
        <button type="submit" class="text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 shadow-md bg-gradient-to-r from-indigo-700 to-indigo-600 hover:bg-gradient-to-r hover:from-indigo-900 hover:to-indigo-800">Search</button>
    </form>
</div>
