<section id="reviews" class="relative py-24 bg-white overflow-hidden">
    <!-- Subtle Background Line Divider -->
    <div class="absolute inset-x-0 top-0 h-[1px] bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <x-section-title 
            title="Voices of the Guardians" 
            subtitle="Verified Testimonials" 
            align="center"
        />

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            
            <!-- Review 1 -->
            <div class="group relative rounded-xl border border-slate-200 bg-slate-50/60 p-8 hover:bg-white hover:border-amber-500/30 hover:shadow-xl hover:shadow-slate-200/40 transition-all duration-300">
                <!-- Stars -->
                <div class="flex items-center gap-1 text-amber-500 mb-4">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>

                <!-- Review text -->
                <blockquote class="text-sm text-slate-600 leading-relaxed font-sans italic mb-6">
                    "The weight and details on my Yemeni Aqeeq ring are outstanding. The hand-engraved Arabic script inside is perfect and matches exactly what I requested. Shipped fast and came in a premium wooden chest."
                </blockquote>

                <!-- Reviewer -->
                <div class="flex items-center justify-between border-t border-slate-200/60 pt-4">
                    <div>
                        <h4 class="font-serif text-sm font-semibold text-slate-900">Tariq Al-Jamil</h4>
                        <p class="text-[10px] text-slate-500 mt-0.5 font-semibold">Medina, Saudi Arabia</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center gap-1 text-[9px] text-emerald-700 font-bold uppercase tracking-wider bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-md">
                            Verified Owner
                        </span>
                        <p class="text-[8px] text-slate-550 mt-1 uppercase font-semibold">Royal Al-Khatam</p>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="group relative rounded-xl border border-slate-200 bg-slate-50/60 p-8 hover:bg-white hover:border-amber-500/30 hover:shadow-xl hover:shadow-slate-200/40 transition-all duration-300">
                <!-- Stars -->
                <div class="flex items-center gap-1 text-amber-500 mb-4">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>

                <!-- Review text -->
                <blockquote class="text-sm text-slate-600 leading-relaxed font-sans italic mb-6">
                    "Excellent customer service from the beginning. Sizing guide was very precise, and the ring fits perfectly on my right hand. The Persian Feroza stone is spectacular—it has a deep sky blue that photos can't do justice."
                </blockquote>

                <!-- Reviewer -->
                <div class="flex items-center justify-between border-t border-slate-200/60 pt-4">
                    <div>
                        <h4 class="font-serif text-sm font-semibold text-slate-900">Hamza Yusuf</h4>
                        <p class="text-[10px] text-slate-500 mt-0.5 font-semibold">London, United Kingdom</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center gap-1 text-[9px] text-emerald-700 font-bold uppercase tracking-wider bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-md">
                            Verified Owner
                        </span>
                        <p class="text-[8px] text-slate-550 mt-1 uppercase font-semibold">Persian Neyshabur</p>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="group relative rounded-xl border border-slate-200 bg-slate-50/60 p-8 hover:bg-white hover:border-amber-500/30 hover:shadow-xl hover:shadow-slate-200/40 transition-all duration-300">
                <!-- Stars -->
                <div class="flex items-center gap-1 text-amber-500 mb-4">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>

                <!-- Review text -->
                <blockquote class="text-sm text-slate-600 leading-relaxed font-sans italic mb-6">
                    "A absolute masterpiece of calligraphic and silver craftsmanship. The weight of the 925 silver is satisfying, and the side engravings look very ancient. I recommend this workshop to anyone seeking true quality."
                </blockquote>

                <!-- Reviewer -->
                <div class="flex items-center justify-between border-t border-slate-200/60 pt-4">
                    <div>
                        <h4 class="font-serif text-sm font-semibold text-slate-900">Dr. Yaseen</h4>
                        <p class="text-[10px] text-slate-500 mt-0.5 font-semibold">Istanbul, Turkey</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center gap-1 text-[9px] text-emerald-700 font-bold uppercase tracking-wider bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-md">
                            Verified Owner
                        </span>
                        <p class="text-[8px] text-slate-550 mt-1 uppercase font-semibold">Emerald Sovereign</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
