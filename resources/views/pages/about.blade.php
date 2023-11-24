<x-layouts.app title="Tentang Kami">
    <div class="flex flex-col gap-16 secondary-padding py-8">
        {{-- top --}}
        <div class="flex flex-col gap-6">
            {{-- breadcrumb --}}
            <x-partials.breadcrumb />
            {{-- page title --}}
            <x-partials.page-title title="Tentang Kami" />
        </div>

        <div class="flex flex-col md:flex-row items-start gap-4 w-full">
            <div class="w-[50%] px-6 py-4 bg-white rounded-md flex flex-col items-start gap-6">
                <p class="text-justify text-gray-600 text-base sm:text-lg leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt. <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt. <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.
                </p>
                <button class="px-5 py-3 bg-brand-50 hover:bg-brand-300 text-white rounded-md shadow-md">
                    Read more
                </button>
            </div>
            <div class="w-[50%]">
                <img src="{{ asset('assets/images/about.png') }}" alt="About" class="object-cover w-auto">
            </div>
        </div>

    </div>
</x-layouts.app>
