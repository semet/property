<div class="main-padding py-4 bg-white">
    <div class="flex flex-col gap-3 my-10 bg-gradient-to-r from-indigo-500/10 from-10% via-sky-500 via-90% to-transparent to-60% px-6 py-4 rounded-md">
        <h2 class="text-4xl tracking-wide text-gray-900 relative">
            Partner kami
            <span class="absolute -bottom-2 left-0 w-1/12 h-[8px] bg-brand-50 rounded-full"></span>
        </h2>
        <h5 class="text-gray-500 text-sm">Kami bekerja sama dengan seluruh bang yang ada di Indnesia</h5>
    </div>
    <div class="partner-swiper overflow-hidden mx-auto px-0.5 relative group">
        <div class="swiper-wrapper py-4">
            @foreach ($partners as $partner)
                <div class="swiper-slide bg-white rounded-md shadow-md" style="background-image: url('asset('assets/images/partners/' . $partner['name'] . '.png')')" data-aos="fade-up">
                    <img src="{{ asset('assets/images/partners/' . $partner['name'] . '.png') }}" class="w-full" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>
