<section id="gallery" class="relative py-24 bg-[#f1f5f9] overflow-hidden">
    <div class="absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-slate-200 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <x-section-title title="গ্যালারি" subtitle="আমাদের প্রোডাক্টগুলোর ছবি" align="center" />

        @if ($galleryItems->isNotEmpty())
            @php($galleryCount = $galleryItems->count())
            <div class="relative w-full max-w-4xl mx-auto mb-10 group" id="gallerySlider">
                <div
                    class="relative overflow-hidden rounded-2xl border border-slate-200 shadow-2xl shadow-slate-300/50 bg-white h-105 sm:h-130">
                    <div id="sliderTrack" class="flex h-full transition-transform duration-700 ease-in-out"
                        style="width: {{ $galleryCount * 100 }}%; transform: translateX(0%);">
                        @foreach ($galleryItems as $item)
                            <div class="relative shrink-0 h-full" style="width: {{ 100 / $galleryCount }}%;">
                                <img src="{{ asset('images/' . $item->image) }}" alt="Gallery image"
                                    class="w-full h-full object-cover">
                            </div>
                        @endforeach
                    </div>

                    @if ($galleryCount > 1)
                        <button id="sliderPrev" type="button" aria-label="পূর্ববর্তী"
                            class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/90 hover:bg-white border border-slate-200 shadow-lg flex items-center justify-center text-slate-700 hover:text-amber-600 transition-all duration-200 opacity-100 sm:opacity-0 sm:group-hover:opacity-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button id="sliderNext" type="button" aria-label="পরবর্তী"
                            class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/90 hover:bg-white border border-slate-200 shadow-lg flex items-center justify-center text-slate-700 hover:text-amber-600 transition-all duration-200 opacity-100 sm:opacity-0 sm:group-hover:opacity-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    @endif

                    <div
                        class="absolute top-4 right-4 z-20 bg-slate-900/70 backdrop-blur-sm text-white text-xs font-mono px-3 py-1.5 rounded-full border border-slate-700/50">
                        <span id="sliderCurrent">১</span> /
                        <span>{{ strtr((string) $galleryCount, ['0' => '০', '1' => '১', '2' => '২', '3' => '৩', '4' => '৪', '5' => '৫', '6' => '৬', '7' => '৭', '8' => '৮', '9' => '৯']) }}</span>
                    </div>
                </div>

                @if ($galleryCount > 1)
                    <div class="flex items-center justify-center gap-3 mt-6" id="sliderDots">
                        @foreach ($galleryItems as $item)
                            <button type="button" data-dot="{{ $loop->index }}"
                                class="slider-dot h-1.5 rounded-full transition-all duration-300 {{ $loop->first ? 'w-8 bg-amber-500' : 'w-4 bg-slate-300 hover:bg-amber-400' }}"
                                aria-label="স্লাইড {{ $loop->iteration }}"></button>
                        @endforeach
                    </div>
                @endif
            </div>
        @else
            <div
                class="max-w-4xl mx-auto mb-10 rounded-2xl border border-dashed border-slate-300 bg-white/60 py-20 text-center text-slate-500">
                গ্যালারির ছবি শীঘ্রই যোগ করা হবে।
            </div>
        @endif

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="#order-form"
                class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-slate-950 text-lg font-bold tracking-wider uppercase px-6 py-3 rounded-xl transition-all duration-200 shadow-lg shadow-amber-500/30 shrink-0">
                এখনই অর্ডার করুন
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

    </div>
</section>

@if ($galleryItems->count() > 1)
    <script>
        (() => {
            const total = {{ $galleryItems->count() }};
            const track = document.getElementById('sliderTrack');
            const slider = document.getElementById('gallerySlider');
            const currentLabel = document.getElementById('sliderCurrent');
            const dots = document.querySelectorAll('.slider-dot');
            const toBangla = value => String(value).replace(/\d/g, digit => '০১২৩৪৫৬৭৮৯' [digit]);

            let current = 0;
            let timer;
            let touchStartX = 0;

            const goTo = index => {
                current = (index + total) % total;
                track.style.transform = `translateX(-${current * (100 / total)}%)`;
                currentLabel.textContent = toBangla(current + 1);

                dots.forEach((dot, index) => {
                    dot.classList.toggle('bg-amber-500', index === current);
                    dot.classList.toggle('w-8', index === current);
                    dot.classList.toggle('bg-slate-300', index !== current);
                    dot.classList.toggle('w-4', index !== current);
                });
            };

            const stopAuto = () => clearInterval(timer);
            const startAuto = () => {
                stopAuto();
                timer = setInterval(() => goTo(current + 1), 4000);
            };

            document.getElementById('sliderPrev').addEventListener('click', () => {
                goTo(current - 1);
                startAuto();
            });
            document.getElementById('sliderNext').addEventListener('click', () => {
                goTo(current + 1);
                startAuto();
            });
            dots.forEach(dot => dot.addEventListener('click', () => {
                goTo(Number(dot.dataset.dot));
                startAuto();
            }));

            track.addEventListener('touchstart', event => {
                touchStartX = event.touches[0].clientX;
                stopAuto();
            }, {
                passive: true
            });
            track.addEventListener('touchend', event => {
                const distance = touchStartX - event.changedTouches[0].clientX;
                if (Math.abs(distance) > 40) {
                    goTo(distance > 0 ? current + 1 : current - 1);
                }
                startAuto();
            }, {
                passive: true
            });

            slider.addEventListener('mouseenter', stopAuto);
            slider.addEventListener('mouseleave', startAuto);
            startAuto();
        })();
    </script>
@endif
