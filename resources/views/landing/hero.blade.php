<section class="relative min-h-[calc(100vh-80px)] flex items-center justify-center py-20 overflow-hidden">
    <!-- Subtle Background Elements -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

            <!-- Hero Text -->
            <div class="lg:col-span-6 text-center lg:text-left flex flex-col items-center lg:items-start">

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold font-serif text-slate-900 leading-[1.15] tracking-wide mb-6">
                    {{ $hero->heading_line1 }} <br>
                    <span class="bg-gradient-to-r from-amber-700 via-amber-500 to-amber-800 bg-clip-text text-transparent drop-shadow-[0_2px_10px_rgba(245,158,11,0.1)]">
                        {{ $hero->heading_line2 }}
                    </span>
                </h1>

                <p class="text-base sm:text-lg text-slate-600 max-w-xl mb-8 leading-relaxed font-sans">
                    {{ $hero->subheading }}
                </p>

                <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto">
                    <x-button variant="primary" href="{{ $hero->cta_link }}" class="w-full sm:w-auto uppercase tracking-wider text-sm shadow-xl shadow-amber-500/20">
                        {{ $hero->cta_text }}
                    </x-button>
                </div>

                <!-- Micro Features -->
                <div class="mt-12 pt-8 border-t border-slate-200 w-full grid grid-cols-3 gap-4 text-center lg:text-left">
                    <div>
                        <div class="text-2xl font-serif font-bold text-amber-600">{{ $hero->stat1_value }}</div>
                        <div class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-semibold">{{ $hero->stat1_label }}</div>
                    </div>
                    <div>
                        <div class="text-2xl font-serif font-bold text-amber-600">{{ $hero->stat2_value }}</div>
                        <div class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-semibold">{{ $hero->stat2_label }}</div>
                    </div>
                    <div>
                        <div class="text-2xl font-serif font-bold text-amber-600">{{ $hero->stat3_value }}</div>
                        <div class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-semibold">{{ $hero->stat3_label }}</div>
                    </div>
                </div>
            </div>

            <!-- Hero Image Showcase -->
            <div class="lg:col-span-6 flex justify-center relative">
                <!-- Premium Showcase Card -->
                <div class="relative group max-w-md w-full rounded-md overflow-hidden border border-slate-200/80 bg-white p-1 shadow-md shadow-slate-200/50">
                    <div class="relative aspect-square rounded-md overflow-hidden bg-slate-50 border border-slate-200/50">
                        <img src="{{ asset('images/' . $hero->hero_image) }}" alt="নূর আল খাতাম ইয়ামেনী আকিক আংটি" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
