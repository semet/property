<div id="indicators-carousel" class="relative flex flex-col gap-2 w-full mt-10 p-4 bg-white rounded-md shadow-md group" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="{{ asset('assets/images/properties/1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('assets/images/properties/2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('assets/images/properties/3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('assets/images/properties/4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('assets/images/properties/5.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="flex justify-between gap-2">
        <button type="button" class="rounded-md overflow-hidden" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
            <img src="{{ asset('assets/images/properties/1.jpg') }}" alt="">
        </button>
        <button type="button" class="rounded-md overflow-hidden" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1">
            <img src="{{ asset('assets/images/properties/2.jpg') }}" alt="">
        </button>
        <button type="button" class="rounded-md overflow-hidden" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2">
            <img src="{{ asset('assets/images/properties/3.jpg') }}" alt="">
        </button>
        <button type="button" class="rounded-md overflow-hidden" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3">
            <img src="{{ asset('assets/images/properties/4.jpg') }}" alt="">
        </button>
        <button type="button" class="rounded-md overflow-hidden" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4">
            <img src="{{ asset('assets/images/properties/5.jpg') }}" alt="">
        </button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-1 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-brand-50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <i class="fa-light fa-arrow-left text-lg text-gray-100"></i>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-1 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-brand-50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <i class="fa-light fa-arrow-right text-lg text-gray-100"></i>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
