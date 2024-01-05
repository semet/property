<header id="header" class="flex justify-between items-end main-padding h-[100px] sticky top-0 bg-white shadow-sm z-50 transition-all ease-in-out duration-500">
    {{-- Logo --}}
    <img src="{{ asset('assets/images/logo.png') }}" class="object-cover p-2" alt="Logo Image" width="160">
    {{-- Desktop Menu --}}
    <x-partials.desktop-menu />
    {{-- Right Menu --}}
    <x-partials.right-menu />
</header>
