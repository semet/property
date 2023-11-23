<div class="absolute top-[50%] left-[50%] md:left-20 transform -translate-y-[50%] -translate-x-[50%] md:-translate-x-0 z-30 bg-white p-6 max-w-md rounded-md shadow-md">
    <h2 class="text-md sm:text-xl md:text-2xl mb-4 font-semibold tracking-wide text-gray-600 leading-snug">Temukan Properti Idaman <span class="bg-gradient-to-r from-pink-600 to-indigo-600 text-transparent bg-clip-text">Bersama Kami</span></h2>
    <form action="{{ route('search-properties') }}" method="get" class="flex flex-col gap-6">
        {{-- Status --}}
        <div class="flex gap-4 items-center">
            <div class="block text-sm font-medium text-gray-600">Status</div>
            <div class="flex gap-2">
                <div class="flex items-center">
                    <input id="dijual" type="radio" name="status" value="dijual" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                    <label for="dijual" class="block ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">
                        Dijual
                    </label>
                </div>

                <div class="flex items-center">
                    <input id="disewakan" type="radio" name="status" value="disewakan" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
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
                    <option value="{{ $type->slug }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        {{-- Lokasi --}}
        <div>
            <label for="location" class="block mb-2 text-sm font-medium text-gray-600">Lokasi</label>
            <select id="location" name="location" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="">Pilih Lokasi</option>
                @foreach ($locations as $location)
                    <option value="{{ $location->slug }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        {{-- Btn --}}
        <button type="submit" id="search-btn" class="text-white font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 shadow-md bg-gradient-to-r from-brand-50 to-indigo-600 hover:bg-gradient-to-r hover:from-brand-300 hover:to-indigo-800   disabled:bg-gradient-to-r disabled:from-brand-light-200 disabled:to-indigo-400">Search</button>
    </form>
</div>
