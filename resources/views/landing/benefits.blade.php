<section id="benefits" class="relative py-24 bg-white overflow-hidden">
    <!-- Top divider -->
    <div class="absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-slate-200 to-transparent"></div>

    <!-- Ambient glows -->
    <div class="absolute -top-40 -right-40 w-125 h-125 rounded-full bg-amber-50 blur-3xl opacity-50 pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-125 h-125 rounded-full bg-emerald-50 blur-3xl opacity-40 pointer-events-none"></div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">


        <!-- ── Dark Benefits Card ── -->
        <div class="mt-8 relative rounded-3xl overflow-hidden bg-white shadow-2xl shadow-slate-200/60 border border-slate-200">

            <!-- Corner gold accents -->
            <div class="absolute top-5 left-5 w-7 h-7 border-t-2 border-l-2 border-amber-500 rounded-tl-lg pointer-events-none"></div>
            <div class="absolute top-5 right-5 w-7 h-7 border-t-2 border-r-2 border-amber-500 rounded-tr-lg pointer-events-none"></div>
            <div class="absolute bottom-5 left-5 w-7 h-7 border-b-2 border-l-2 border-amber-500 rounded-bl-lg pointer-events-none"></div>
            <div class="absolute bottom-5 right-5 w-7 h-7 border-b-2 border-r-2 border-amber-500 rounded-br-lg pointer-events-none"></div>

            <!-- Inner glow -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-2/3 h-1 bg-linear-to-r from-transparent via-amber-400/60 to-transparent"></div>

            <div class="p-8 md:p-12">

                <!-- Card Title -->
                <div class="text-center mb-10">
                    <span class="inline-flex items-center gap-2 bg-amber-500/15 border border-amber-400/30 text-amber-400 text-xs font-bold tracking-widest uppercase px-4 py-2 rounded-full mb-5">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        হালাল ও বিশ্বস্ত পণ্য
                    </span>
                    <h3 class="font-serif text-2xl md:text-3xl font-bold text-slate-900">
                        হালালকৃত ভালো বিষয়সমূহ
                    </h3>
                    <div class="mt-3 mx-auto w-16 h-0.5 rounded-full bg-linear-to-r from-amber-500 to-amber-300"></div>
                </div>

                <!-- ── Benefits List — two columns ── -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-0">

                    @forelse($benefits as $benefit)
                    <div class="group flex items-center gap-3.5 py-3.5 border-b border-slate-100 last:border-0 sm:nth-last-2:border-0 cursor-default hover:bg-amber-50/60 rounded-lg px-2 -mx-2 transition-colors duration-200">
                        <!-- Coloured dot -->
                        <span class="shrink-0 w-3 h-3 rounded-full {{ $benefit->color }} shadow-md {{ $benefit->shadow }} ring-2 ring-white group-hover:scale-110 transition-transform duration-200"></span>
                        <!-- Text -->
                        <span class="text-sm text-slate-700 group-hover:text-slate-900 transition-colors duration-200 leading-snug font-sans">
                            {{ $benefit->text }}
                        </span>
                    </div>
                    @empty
                    <p class="sm:col-span-2 py-6 text-center text-sm text-slate-500">
                        সুবিধাগুলো শীঘ্রই যোগ করা হবে।
                    </p>
                    @endforelse

                </div><!-- /grid -->

                <!-- Bottom CTA strip -->
                <div class="mt-10 pt-8 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#order-form"
                       class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-400 text-slate-950 text-sm font-bold tracking-wider uppercase px-6 py-3 rounded-xl transition-all duration-200 shadow-lg shadow-amber-500/30 shrink-0">
                        এখনই অর্ডার করুন
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

            </div><!-- /inner padding -->
        </div><!-- /dark card -->


    </div>
</section>
