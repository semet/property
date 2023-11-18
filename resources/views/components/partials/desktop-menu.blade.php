<div class="hidden md:flex overflow-auto no-scrollbar">
    <ul class="flex gap-4">
        @foreach ($menus as $menu)
            <li class="hover:bg-brand-50 whitespace-nowrap text-gray-600 hover:text-gray-50 text-sm lg:text-base p-2 rounded-t-sm transition-all duration-200">
                <a href="{{ $menu['url'] }}">{{ $menu['label'] }}</a>
            </li>
        @endforeach
    </ul>
</div>
