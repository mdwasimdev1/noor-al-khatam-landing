<section id="reviews" class="relative py-24 bg-white overflow-hidden">
    <!-- Subtle Background Line Divider -->
    <div class="absolute inset-x-0 top-0 h-[1px] bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <x-section-title 
            title="গ্রাহকদের সন্তুষ্টির অভিজ্ঞতা" 
            subtitle="যাচাইকৃত রিভিউজ" 
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
                    "আমার ইয়ামেনী আকিক আংটির ওজন এবং ফিনিশিং অসাধারণ। আংটির ভেতরের কাস্টম ক্যালিগ্রাফি খোদাইটি আমার চাহিদা অনুযায়ী নিখুঁত হয়েছে। চমৎকার কাঠের বক্সে দ্রুত ডেলিভারি পেয়েছি।"
                </blockquote>

                <!-- Reviewer -->
                <div class="flex items-center justify-between border-t border-slate-200/60 pt-4">
                    <div>
                        <h4 class="font-serif text-sm font-semibold text-slate-900">তারিক আল-জামিল</h4>
                        <p class="text-[10px] text-slate-500 mt-0.5 font-semibold">মদিনা, সৌদি আরব</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center gap-1 text-[9px] text-emerald-700 font-bold uppercase tracking-wider bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-md">
                            যাচাইকৃত ক্রেতা
                        </span>
                        <p class="text-[8px] text-slate-550 mt-1 uppercase font-semibold">রয়্যাল আল-খাতাম</p>
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
                    "প্রথম থেকেই তাদের কাস্টমার সার্ভিস ছিল চমৎকার। সাইজিং গাইড খুবই নির্ভুল ছিল, আংটিটি আমার আঙুলে দারুণভাবে মানিয়ে গেছে। নিশাপুর ফিরোজা পাথরটি দেখতে ভীষণ উজ্জ্বল ও সুন্দর!"
                </blockquote>

                <!-- Reviewer -->
                <div class="flex items-center justify-between border-t border-slate-200/60 pt-4">
                    <div>
                        <h4 class="font-serif text-sm font-semibold text-slate-900">হামজা ইউসুফ</h4>
                        <p class="text-[10px] text-slate-500 mt-0.5 font-semibold">লন্ডন, যুক্তরাজ্য</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center gap-1 text-[9px] text-emerald-700 font-bold uppercase tracking-wider bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-md">
                            যাচাইকৃত ক্রেতা
                        </span>
                        <p class="text-[8px] text-slate-550 mt-1 uppercase font-semibold">পার্সিয়ান নিশাপুর</p>
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
                    "রুপা ও ক্যালিগ্রাফির অসাধারণ কারুকার্য। ৯২৫ সিলভারের ওজন বেশ ভারী ও মজবুত, এবং পাশের খোদাই ডিজাইনগুলো অত্যন্ত চমৎকার। প্রিমিয়াম কোয়ালিটির জন্য আমি তাদের অবশ্যই রেকমেন্ড করব।"
                </blockquote>

                <!-- Reviewer -->
                <div class="flex items-center justify-between border-t border-slate-200/60 pt-4">
                    <div>
                        <h4 class="font-serif text-sm font-semibold text-slate-900">ডঃ ইয়াসিন</h4>
                        <p class="text-[10px] text-slate-500 mt-0.5 font-semibold">ইস্তাম্বুল, তুরস্ক</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center gap-1 text-[9px] text-emerald-700 font-bold uppercase tracking-wider bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-md">
                            যাচাইকৃত ক্রেতা
                        </span>
                        <p class="text-[8px] text-slate-550 mt-1 uppercase font-semibold">এমেরাল্ড সভরেন</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
