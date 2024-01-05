<x-layouts.app :title="$property->name">
    <div class="flex flex-col gap-16 secondary-padding py-10">
        <x-partials.breadcrumb />
        <div class="flex flex-col lg:flex-row justify-between gap-4">
            {{-- left --}}
            <div class="flex flex-col w-full gap-8">
                <div class="flex flex-col w-full">
                    <h2 class="text-3xl text-gray-600">{{ $property->name }}</h2>
                    <div class="flex items-center gap-2 text-gray-500">
                        <i class="fa-light fa-location-dot text-sm"></i>
                        <span class="text-sm">{{ $property->relatedLocation->name }}</span>
                    </div>
                </div>
                <div class="-mb-14 relative">
                    <span class="absolute left-0 -bottom-1 bg-brand-100 h-1 w-1/12 rounded-full"></span>
                    <span class="text-2xl font-semibold text-brand-50">
                        Rp {{ $property->price }}
                    </span>
                </div>

                {{-- carousel --}}
                <x-carousel.property-image />
                {{-- property description --}}
                <x-property.description :property="$property" />
                {{-- Specification --}}
                <x-property.specification :property="$property" />
                {{-- Location --}}
                <x-property.location :property="$property" />

            </div>
            {{-- right --}}
            <x-property.property-sidebar :agent="$property->agent" />
        </div>
    </div>
</x-layouts.app>
