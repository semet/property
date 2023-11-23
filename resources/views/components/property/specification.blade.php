<div class="px-6 py-4 bg-white rounded-md shadow-md flex flex-col gap-10">
    <h2 class="text-2xl tracking-wide text-gray-700 relative">
        Spesifikasi
        <span class="absolute -bottom-1 left-0 w-1/12 h-[4px] bg-brand-50 rounded-full"></span>
    </h2>
    <div class="grid grid-cols-3 gap-4">
        <div class="flex items-center gap-2">
            <span class="font-semibold">ID Property : </span>
            <span class="text-gray-600">{{ $property->property_id }}</span>
        </div>
        <div class="flex items-center gap-2">
            <span class="font-semibold">Tipe Property : </span>
            <span class="text-gray-600">{{ $property->relatedType->name }}</span>
        </div>
        <div class="flex items-center gap-2">
            <span class="font-semibold">Status : </span>
            <span class="text-gray-600">{{ $property->status }}</span>
        </div>
        <div class="flex items-center gap-2">
            <span class="font-semibold">Harga : </span>
            <span class="text-gray-600">{{ $property->price }}</span>
        </div>
        <div class="flex items-center gap-2">
            <span class="font-semibold">Kamar : </span>
            <span class="text-gray-600">{{ $property->room }}</span>
        </div>
        <div class="flex items-center gap-2">
            <span class="font-semibold">Kamar Tidur: </span>
            <span class="text-gray-600">{{ $property->bedroom }}</span>
        </div>
        <div class="flex items-center gap-2">
            <span class="font-semibold">Kamar Mandi: </span>
            <span class="text-gray-600">{{ $property->bathroom }}</span>
        </div>
        <div class="flex items-center gap-2">
            <span class="font-semibold">Kamar Mandi: </span>
            <span class="text-gray-600">{{ $property->bathroom }}</span>
        </div>
        <div class="flex items-center gap-2">
            <span class="font-semibold">Garasi: </span>
            <span class="text-gray-600">{{ $property->garage }}</span>
        </div>
        <div class="flex items-center gap-2">
            <span class="font-semibold">Tahun Berdiri: </span>
            <span class="text-gray-600">{{ $property->built_year }}</span>
        </div>

    </div>
</div>
