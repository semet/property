<div class="flex flex-col gap-4 h-min px-5 py-6 bg-white shadow-md rounded-md w-full lg:w-1/3">
    <h2 class="text-2xl text-gray-700">Informasi Agent</h2>
    <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
    <div class="flex flex-col items-center gap-2">
        <img src="{{ asset('assets/images/agents/' . $agent->photo) }}" alt="{{ $agent->name }}" class="object-cover w-40 h-40 rounded-full">
        <span class="text-gray-700 text-md">{{ $agent->name }}</span>
        <div class="flex items-center gap-2 text-gray-500">
            <i class="fa-light fa-location-dot text-xs"></i>
            <span class="text-xs">{{ $agent->location->name }}</span>
        </div>
        <span class="text-xs px-3 py-2 bg-brand-50 rounded-md text-white">{{ count($agent->properties) }} Listing</span>
        <div class="flex flex-col gap-4 p-4">
            <div class="flex gap-2 items-center text-gray-600">
                <i class="fa-light fa-phone text-brand-50"></i>
                <span class="font-light text-sm"> {{ $agent->phone }}</span>
            </div>
            <div class="flex gap-2 items-center text-gray-600">
                <i class="fa-light fa-envelope text-brand-50"></i>
                <span class="font-light text-sm"> {{ $agent->email }}</span>
            </div>
        </div>
    </div>
    <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
    <x-property.inquiry-form />
</div>
