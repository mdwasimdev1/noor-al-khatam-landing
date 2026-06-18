<section id="order-form" class="relative py-24 bg-[#f8fafc] overflow-hidden">
    <!-- Subtle Background Line Divider -->
    <div class="absolute inset-x-0 top-0 h-[1px] bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Info Panel -->
            <div class="lg:col-span-5">
                <span class="text-xs font-semibold tracking-widest text-amber-600 uppercase block mb-3 font-mono">কাস্টম পরামর্শ</span>
                <h2 class="text-3xl md:text-5xl font-bold font-serif text-slate-900 leading-tight mb-6">
                    আপনার কাস্টম <br>আংটির অর্ডার করুন
                </h2>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-8 font-sans">
                    নূর আল খাতামের প্রতিটি আংটি আমাদের ওয়ার্কশপে সম্পূর্ণ কাস্টমাইজড অর্ডারে তৈরি করা হয়। কাস্টম আংটি তৈরি করতে ফর্মটি পূরণ করুন, আমাদের প্রতিনিধি ১২ ঘণ্টার মধ্যে ইমেইল বা হোয়াটসঅ্যাপে আপনার সাথে যোগাযোগ করবেন।
                </p>

                <!-- Helpful details list -->
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-emerald-50 border border-emerald-200 flex items-center justify-center text-emerald-600 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-serif text-sm font-semibold text-slate-800">দ্রুত সাড়া</h4>
                            <p class="text-xs text-slate-500 mt-1">ডিজাইন এবং সাইজ ভেরিফিকেশন ১২-২৪ ঘণ্টার মধ্যে চূড়ান্ত করা হয়।</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-amber-50 border border-amber-200 flex items-center justify-center text-amber-600 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-serif text-sm font-semibold text-slate-800">১০০% নিরাপদ অর্ডার</h4>
                            <p class="text-xs text-slate-500 mt-1">ডিজাইন কনসালটেশনের জন্য কোনো অগ্রিম পেমেন্ট প্রয়োজন নেই। চূড়ান্ত স্কেচ পছন্দ হলেই কেবল অর্ডার কনফার্ম করুন।</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form Panel -->
            <div class="lg:col-span-7">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-10 shadow-xl shadow-slate-250/50">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div>
                                <label for="name" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">আপনার সম্পূর্ণ নাম *</label>
                                <input type="text" id="name" name="name" required class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-800 focus:outline-none focus:bg-white focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all">
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">হোয়াটসঅ্যাপ / ফোন নম্বর *</label>
                                <input type="tel" id="phone" name="phone" required placeholder="+880 1XXX-XXXXXX" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-800 focus:outline-none focus:bg-white focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all">
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">ইমেইল এড্রেস *</label>
                            <input type="email" id="email" name="email" required placeholder="you@example.com" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-800 focus:outline-none focus:bg-white focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                            <!-- Tier -->
                            <div>
                                <label for="tier" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">প্যাকেজ নির্বাচন করুন</label>
                                <select id="tier" name="tier" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3 py-3 text-sm text-slate-700 focus:outline-none focus:bg-white focus:border-amber-600 transition-all">
                                    <option value="signature">আর্টিসান সিগনেচার ($৩৪৯)</option>
                                    <option value="sovereign" selected>সভরেন এলিট ($৪৯৯)</option>
                                    <option value="custom">এম্পেররস কাস্টম ($৮৯৯+)</option>
                                </select>
                            </div>

                            <!-- Gemstone -->
                            <div>
                                <label for="gemstone" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">রত্ন পাথর পছন্দ করুন</label>
                                <select id="gemstone" name="gemstone" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3 py-3 text-sm text-slate-700 focus:outline-none focus:bg-white focus:border-amber-600 transition-all">
                                    <option value="yemeni_aqeeq">ইয়ামেনী লাল আকিক</option>
                                    <option value="persian_feroza">পার্সিয়ান ফিরোজা</option>
                                    <option value="emerald">সবুজ পান্না</option>
                                    <option value="black_onyx">কালো ওনিক্স (কালো আকিক)</option>
                                    <option value="other">কাস্টম অনুরোধ...</option>
                                </select>
                            </div>

                            <!-- Size -->
                            <div>
                                <label for="ring_size" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">আংটির সাইজ (US)</label>
                                <select id="ring_size" name="ring_size" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3 py-3 text-sm text-slate-700 focus:outline-none focus:bg-white focus:border-amber-600 transition-all">
                                    <option value="unknown">আমার সাইজ জানা নেই</option>
                                    @for($size = 7; $size <= 14; $size++)
                                        <option value="{{ $size }}">US সাইজ {{ $size }}</option>
                                        <option value="{{ $size }}.5">US সাইজ {{ $size }}.5</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <!-- Notes / Calligraphy -->
                        <div>
                            <label for="notes" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">ক্যালিগ্রাফি ও কাস্টমাইজেশন নোট</label>
                            <textarea id="notes" name="notes" rows="4" placeholder="যে নামটি বা ক্যালিগ্রাফি খোদাই করতে চান তা লিখুন। গোল্ড ডিজাইন বা বিশেষ কোনো পাথর কাটিং থাকলে উল্লেখ করুন..." class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-800 focus:outline-none focus:bg-white focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all"></textarea>
                        </div>

                        <div class="pt-6 border-t border-slate-200/60 flex flex-col sm:flex-row items-center justify-between gap-6">
                            <span class="text-xs text-slate-500 leading-normal max-w-sm text-center sm:text-left">
                                এই ফর্মটি জমা দিয়ে আপনি একটি কাস্টম ডিজাইন অনুরোধ করছেন। এই ধাপে কোনো পেমেন্ট সম্পন্ন হবে না।
                            </span>
                            <x-button type="submit" variant="primary" class="w-full sm:w-auto uppercase tracking-wider text-xs shadow-lg shadow-amber-500/25">
                                অর্ডারের জন্য সাবমিট করুন
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
