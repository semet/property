<header class="flex justify-between items-end main-padding h-[90px] bg-white shadow-md">
    {{-- Logo --}}
    <img src="{{ asset('assets/images/logo.png') }}" class="object-cover p-2" alt="Logo Image" width="100">
    {{-- Desktop Menu --}}
    <x-partials.desktop-menu />
    {{-- Right Menu --}}
    <x-partials.right-menu />
</header>
