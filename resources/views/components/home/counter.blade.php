<div class="bg-fixed mt-10 w-full flex justify-center" style="background-image: url('{{ asset('assets/images/bg-counter.jpg') }}')">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 w-full h-full py-10 main-padding bg-white/80">
        <div class="flex items-end gap-2">
            <i class="fa-sharp fa-regular fa-car-building text-4xl sm:text-7xl text-brand-50"></i>
            <div class="text-black">
                <span class="text-2xl font-semibold block counter">{{ $properties }}</span>
                <span class="">Property</span>
            </div>
        </div>
        <div class="flex items-end gap-2">
            <i class="fa-sharp fa-solid fa-users text-4xl sm:text-7xl text-brand-50"></i>
            <div class="text-black">
                <span class="text-2xl font-semibold block counter">{{ $agents }}</span>
                <span class="">Agent</span>
            </div>
        </div>
        <div class="flex items-end gap-2">
            <i class="fa-regular fa-map-location-dot text-4xl sm:text-7xl text-brand-50"></i>
            <div class="text-black">
                <span class="text-2xl font-semibold block counter">{{ $locations }}</span>
                <span class="">Lokasi</span>
            </div>
        </div>
        <div class="flex items-end gap-2">
            <i class="fa-solid fa-chart-mixed-up-circle-currency text-4xl sm:text-7xl text-brand-50"></i>
            <div class="text-black">
                <span class="text-2xl font-semibold block counter">{{ $types }}</span>
                <span class="">Tipe Property</span>
            </div>
        </div>
    </div>
</div>
