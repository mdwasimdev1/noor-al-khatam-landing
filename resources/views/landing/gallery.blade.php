<section id="gallery" class="relative py-24 bg-[#f1f5f9] overflow-hidden">
    <!-- Subtle Background Line Divider -->
    <div class="absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-slate-200 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <x-section-title
            title="রাজমোহিনী আংটি সকল রাশির নারী-পুরুষ ব্যবহার করতে পারবেন।"
            subtitle="রৌপ্যের শ্রেষ্ঠ স্মারক"
            align="center"
        />

        {{-- ========================================================
             PREMIUM IMAGE SLIDER
        ======================================================== --}}
        <div class="relative w-full max-w-4xl mx-auto mb-10 group" id="gallerySlider">

            <!-- Slides Wrapper -->
            <div class="relative overflow-hidden rounded-2xl border border-slate-200 shadow-2xl shadow-slate-300/50 bg-white"
                 style="height: 520px;">

                <!-- Slides -->
                <div id="sliderTrack"
                     class="flex h-full transition-transform duration-700 ease-in-out"
                     style="width: 300%; transform: translateX(0%);">

                    <!-- Slide 1 -->
                    <div class="relative shrink-0 h-full" style="width: 33.333%;">
                        <img src="{{ asset('images/ring_hero.png') }}"
                             alt="ইয়ামেনী লাল আকিক আংটি"
                             class="w-full h-full object-cover">
                        <!-- Caption -->
                        <div class="absolute bottom-0 inset-x-0 bg-linear-to-t from-slate-900/80 via-slate-900/30 to-transparent px-8 pb-8 pt-16">
                            <span class="inline-block bg-amber-500/20 border border-amber-400/40 text-amber-300 text-[10px] font-bold tracking-[0.2em] px-3 py-1 rounded-full uppercase mb-2">দুর্লভ রত্ন</span>
                            <h3 class="font-serif text-2xl font-bold text-white tracking-wide">দি রয়্যাল আল-খাতাম</h3>
                            <p class="text-sm text-slate-300 mt-1 font-sans">ইয়ামেনী লাল আকিক — ৯২৫ স্টার্লিং সিলভার</p>
                            <div class="flex items-center gap-4 mt-4">
                                <span class="font-mono text-xl font-bold text-amber-400">$৩৪৯</span>
                                <a href="#order-form"
                                   class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-slate-950 text-xs font-bold tracking-wider uppercase px-5 py-2 rounded-lg transition-all duration-200 shadow-lg shadow-amber-500/30">
                                    অর্ডার করুন
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="relative shrink-0 h-full" style="width: 33.333%;">
                        <img src="{{ asset('images/ring_turquoise.png') }}"
                             alt="পার্সিয়ান ফিরোজা আংটি"
                             class="w-full h-full object-cover">
                        <!-- Caption -->
                        <div class="absolute bottom-0 inset-x-0 bg-linear-to-t from-slate-900/80 via-slate-900/30 to-transparent px-8 pb-8 pt-16">
                            <span class="inline-block bg-emerald-500/20 border border-emerald-400/40 text-emerald-300 text-[10px] font-bold tracking-[0.2em] px-3 py-1 rounded-full uppercase mb-2">জনপ্রিয় পছন্দ</span>
                            <h3 class="font-serif text-2xl font-bold text-white tracking-wide">দি পার্সিয়ান নিশাপুর</h3>
                            <p class="text-sm text-slate-300 mt-1 font-sans">পার্সিয়ান ফিরোজা — ৯২৫ স্টার্লিং সিলভার</p>
                            <div class="flex items-center gap-4 mt-4">
                                <span class="font-mono text-xl font-bold text-amber-400">$৩৮৯</span>
                                <a href="#order-form"
                                   class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-slate-950 text-xs font-bold tracking-wider uppercase px-5 py-2 rounded-lg transition-all duration-200 shadow-lg shadow-amber-500/30">
                                    অর্ডার করুন
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="relative shrink-0 h-full" style="width: 33.333%;">
                        <img src="{{ asset('images/ring_emerald.png') }}"
                             alt="পান্না সভরেন আংটি"
                             class="w-full h-full object-cover">
                        <!-- Caption -->
                        <div class="absolute bottom-0 inset-x-0 bg-linear-to-t from-slate-900/80 via-slate-900/30 to-transparent px-8 pb-8 pt-16">
                            <span class="inline-block bg-amber-500/20 border border-amber-400/40 text-amber-300 text-[10px] font-bold tracking-[0.2em] px-3 py-1 rounded-full uppercase mb-2">সীমিত সংস্করণ</span>
                            <h3 class="font-serif text-2xl font-bold text-white tracking-wide">দি এমেরাল্ড সভরেন</h3>
                            <p class="text-sm text-slate-300 mt-1 font-sans">সবুজ পান্না — ৯২৫ স্টার্লিং সিলভার</p>
                            <div class="flex items-center gap-4 mt-4">
                                <span class="font-mono text-xl font-bold text-amber-400">$৪৯৯</span>
                                <a href="#order-form"
                                   class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-slate-950 text-xs font-bold tracking-wider uppercase px-5 py-2 rounded-lg transition-all duration-200 shadow-lg shadow-amber-500/30">
                                    অর্ডার করুন
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div><!-- /sliderTrack -->

                <!-- Prev Arrow -->
                <button id="sliderPrev"
                        aria-label="পূর্ববর্তী"
                        class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/90 hover:bg-white border border-slate-200 shadow-lg hover:shadow-xl flex items-center justify-center text-slate-700 hover:text-amber-600 transition-all duration-200 opacity-0 group-hover:opacity-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>

                <!-- Next Arrow -->
                <button id="sliderNext"
                        aria-label="পরবর্তী"
                        class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/90 hover:bg-white border border-slate-200 shadow-lg hover:shadow-xl flex items-center justify-center text-slate-700 hover:text-amber-600 transition-all duration-200 opacity-0 group-hover:opacity-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>

                <!-- Slide Counter (top-right) -->
                <div class="absolute top-4 right-4 z-20 bg-slate-900/70 backdrop-blur-sm text-white text-xs font-mono px-3 py-1.5 rounded-full border border-slate-700/50">
                    <span id="sliderCurrent">১</span> / <span id="sliderTotal">৩</span>
                </div>

            </div><!-- /overflow-hidden -->

            <!-- Dot Indicators -->
            <div class="flex items-center justify-center gap-3 mt-6" id="sliderDots">
                <button data-dot="0"
                        class="slider-dot w-8 h-1.5 rounded-full bg-amber-500 transition-all duration-300"
                        aria-label="স্লাইড ১"></button>
                <button data-dot="1"
                        class="slider-dot w-4 h-1.5 rounded-full bg-slate-300 hover:bg-amber-400 transition-all duration-300"
                        aria-label="স্লাইড ২"></button>
                <button data-dot="2"
                        class="slider-dot w-4 h-1.5 rounded-full bg-slate-300 hover:bg-amber-400 transition-all duration-300"
                        aria-label="স্লাইড ৩"></button>
            </div>

        </div><!-- /gallerySlider -->

     <div class="flex justify-center items-center">
                    <x-button variant="primary" href="#order-form" class="w-full sm:w-auto uppercase tracking-wider text-sm shadow-xl shadow-amber-500/20">
                        আংটির অর্ডার করুন
                    </x-button>
                </div>

    </div>{{-- /container --}}
</section>

{{-- ======================================================
     GALLERY SLIDER — Vanilla JS (no external dependencies)
====================================================== --}}
<script>
(function () {
    const TOTAL      = 3;
    const AUTO_DELAY = 4000; // ms between auto-advances
    const BN_DIGITS  = ['১','২','৩','৪','৫','৬','৭','৮','৯'];

    const track    = document.getElementById('sliderTrack');
    const prevBtn  = document.getElementById('sliderPrev');
    const nextBtn  = document.getElementById('sliderNext');
    const progress = document.getElementById('sliderProgress');
    const curEl    = document.getElementById('sliderCurrent');
    const dots     = document.querySelectorAll('.slider-dot');

    let current   = 0;
    let autoTimer = null;
    let touchStartX = 0;

    /* ---- helpers ---- */
    function toBn(n) { return BN_DIGITS[n - 1] || String(n); }

    function goTo(index) {
        current = (index + TOTAL) % TOTAL;
        // Slide
        track.style.transform = `translateX(-${current * (100 / TOTAL)}%)`;
        // Counter
        curEl.textContent = toBn(current + 1);
        // Progress bar
        progress.style.width = `${((current + 1) / TOTAL) * 100}%`;
        // Dots
        dots.forEach((dot, i) => {
            if (i === current) {
                dot.classList.add('bg-amber-500', 'w-8');
                dot.classList.remove('bg-slate-300', 'w-4');
            } else {
                dot.classList.remove('bg-amber-500', 'w-8');
                dot.classList.add('bg-slate-300', 'w-4');
            }
        });
    }

    function startAuto() {
        stopAuto();
        autoTimer = setInterval(() => goTo(current + 1), AUTO_DELAY);
    }

    function stopAuto() {
        if (autoTimer) { clearInterval(autoTimer); autoTimer = null; }
    }

    /* ---- button events ---- */
    prevBtn.addEventListener('click', () => { goTo(current - 1); startAuto(); });
    nextBtn.addEventListener('click', () => { goTo(current + 1); startAuto(); });

    /* ---- dot events ---- */
    dots.forEach((dot) => {
        dot.addEventListener('click', () => { goTo(parseInt(dot.dataset.dot)); startAuto(); });
    });

    /* ---- touch / swipe support ---- */
    track.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
        stopAuto();
    }, { passive: true });

    track.addEventListener('touchend', (e) => {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) {
            goTo(diff > 0 ? current + 1 : current - 1);
        }
        startAuto();
    }, { passive: true });

    /* ---- pause on hover ---- */
    const sliderEl = document.getElementById('gallerySlider');
    sliderEl.addEventListener('mouseenter', stopAuto);
    sliderEl.addEventListener('mouseleave', startAuto);

    /* ---- keyboard navigation ---- */
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft')  { goTo(current - 1); startAuto(); }
        if (e.key === 'ArrowRight') { goTo(current + 1); startAuto(); }
    });

    /* ---- init ---- */
    goTo(0);
    startAuto();
})();
</script>
