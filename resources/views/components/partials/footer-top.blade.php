<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-14 py-4">
    {{-- Logo and taglines --}}
    <div class="flex flex-col gap-6">
        <img src="{{ asset('assets/images/logo-light.png') }}" alt="Logo" width="150">
        <p class="text-gray-300 text-justify text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat consequatur tempore quisquam repellendus provident.</p>
        <div class="flex flex-col gap-2">
            <div class="flex gap-2 items-center">
                <i class="fa-light fa-phone text-brand-50"></i>
                <span class="text-gray-200">087736690307</span>
            </div>
            <div class="flex gap-2 items-center">
                <i class="fa-light fa-envelope text-brand-50"></i>
                <span class="text-gray-200">realestate@gmail.com</span>
            </div>
        </div>
    </div>
    {{-- Links --}}
    <div class="flex flex-col gap-4">
        <h3 class="text-3xl text-gray-200 relative">
            Sitemap
            <span class="absolute -bottom-1 left-0 w-1/4 h-1 bg-brand-50 rounded-full"></span>
        </h3>
        <ul role="list" class="grid grid-cols-2 gap-4">
            <li>
                <a href="#" class="hover:text-brand-50 text-gray-400">Homepage</a>
            </li>
            <li>
                <a href="#" class="hover:text-brand-50 text-gray-400">Tentang Kami</a>
            </li>
            <li>
                <a href="#" class="hover:text-brand-50 text-gray-400">Rumah</a>
            </li>
            <li>
                <a href="#" class="hover:text-brand-50 text-gray-400">Apartemen</a>
            </li>
            <li>
                <a href="#" class="hover:text-brand-50 text-gray-400">Tanah</a>
            </li>
            <li>
                <a href="#" class="hover:text-brand-50 text-gray-400">Gudang</a>
            </li>
            <li>
                <a href="#" class="hover:text-brand-50 text-gray-400">Ruko</a>
            </li>
        </ul>

    </div>
    {{-- socials --}}
    <div class="flex flex-col gap-4">
        <h3 class="text-3xl text-gray-200 relative">
            Social media
            <span class="absolute -bottom-1 left-0 w-1/4 h-1 bg-brand-50 rounded-full"></span>
        </h3>
        <ul role="list" class="grid grid-cols-2 gap-4">
            <li>
                <a href="" class="text-blue-700 flex gap-1 items-end">
                    <i class="fa-brands fa-square-facebook text-xl lg:text-2xl"></i>
                    <span class="text-gray-300">Facebook</span>
                </a>
            </li>
            <li>
                <a href="" class="text-gray-500 flex gap-1 items-end">
                    <i class="fa-brands fa-square-x-twitter text-xl lg:text-2xl"></i>
                    <span class="text-gray-300">Twitter</span>
                </a>
            </li>
            <li>
                <a href="" class="text-brand-50 flex gap-1 items-end">
                    <i class="fa-brands fa-square-instagram text-xl lg:text-2xl"></i>
                    <span class="text-gray-300">Instagram</span>
                </a>
            </li>
            <li>
                <a href="" class="text-red-600 flex gap-1 items-end">
                    <i class="fa-brands fa-square-youtube text-xl lg:text-2xl"></i>
                    <span class="text-gray-300">Youtube</span>
                </a>
            </li>
            <li>
                <a href="" class="text-blue-800 flex gap-1 items-end">
                    <i class="fa-brands fa-linkedin text-xl lg:text-2xl"></i>
                    <span class="text-gray-300">Linkedin</span>
                </a>
            </li>
        </ul>
    </div>
    {{-- Newsletter --}}
    <div class="flex flex-col gap-4">
        <h3 class="text-3xl text-gray-200 relative">
            Newsltter
            <span class="absolute -bottom-1 left-0 w-1/4 h-1 bg-brand-50 rounded-full"></span>
        </h3>
        <p class="text-gray-300 text-sm">
            Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.
        </p>
        <div class="flex items-center">
            <input type="text" name="search" id="search" class="h-[44px] rounded-l-md">
            <button class="bg-brand-50 px-4 py-3 rounded-r-md text-gray-200 text-sm hover:bg-pink-800">
                <i class="fa-solid fa-rss"></i>
            </button>
        </div>
    </div>
</div>
