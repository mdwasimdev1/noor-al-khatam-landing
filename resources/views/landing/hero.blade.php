<section class="relative min-h-[calc(100vh-80px)] flex items-center justify-center py-20 overflow-hidden">
    <!-- Subtle Background Elements -->
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(217,119,6,0.06),transparent_50%)]"></div>
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-emerald-500/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Hero Text -->
            <div class="lg:col-span-6 text-center lg:text-left flex flex-col items-center lg:items-start">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-xs font-semibold tracking-wider text-amber-700 mb-6 uppercase">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                    ঐতিহ্যবাহী হস্তশিল্প রৌপ্য গহনা
                </span>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold font-serif text-slate-900 leading-[1.15] tracking-wide mb-6">
                    আংটির রাজকীয় <br>
                    <span class="bg-gradient-to-r from-amber-700 via-amber-500 to-amber-800 bg-clip-text text-transparent drop-shadow-[0_2px_10px_rgba(245,158,11,0.1)]">
                        আলো ধারণ করুন
                    </span>
                </h1>
                
                <p class="text-base sm:text-lg text-slate-600 max-w-xl mb-8 leading-relaxed font-sans">
                    খাঁটি ৯২৫ স্টার্লিং সিলভার এবং সম্পূর্ণ আসল ও সার্টিফাইড রত্ন পাথরের হাতে তৈরি আংটি। আপনার আধ্যাত্মিক ব্যক্তিত্ব ও চিরন্তন শৈলী ফুটিয়ে তুলতে আমাদের কাস্টম ডিজাইন।
                </p>
                
                <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto">
                    <x-button variant="primary" href="#gallery" class="w-full sm:w-auto uppercase tracking-wider text-sm shadow-xl shadow-amber-500/20">
                        আমাদের সংগ্রহ দেখুন
                    </x-button>
                    <x-button variant="outline" href="#order-form" class="w-full sm:w-auto uppercase tracking-wider text-sm">
                        কাস্টম ডিজাইনের অনুরোধ
                    </x-button>
                </div>
                
                <!-- Micro Features -->
                <div class="mt-12 pt-8 border-t border-slate-200 w-full grid grid-cols-3 gap-4 text-center lg:text-left">
                    <div>
                        <div class="text-2xl font-serif font-bold text-amber-600">১০০%</div>
                        <div class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-semibold">আসল রত্ন পাথর</div>
                    </div>
                    <div>
                        <div class="text-2xl font-serif font-bold text-amber-600">৯২৫</div>
                        <div class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-semibold">খাঁটি রৌপ্য</div>
                    </div>
                    <div>
                        <div class="text-2xl font-serif font-bold text-amber-600">ফ্রি</div>
                        <div class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-semibold">শিপিং ও ডেলিভারি</div>
                    </div>
                </div>
            </div>
            
            <!-- Hero Image Showcase -->
            <div class="lg:col-span-6 flex justify-center relative">
                <!-- Floating Ornament Background -->
                <div class="absolute -inset-4 bg-gradient-to-tr from-emerald-500/15 to-amber-500/15 rounded-full blur-2xl opacity-60 animate-pulse"></div>
                
                <!-- Premium Showcase Card -->
                <div class="relative group max-w-md w-full rounded-2xl overflow-hidden border border-slate-200/80 bg-white p-4 shadow-xl shadow-slate-200/50">
                    <div class="relative aspect-square rounded-xl overflow-hidden bg-slate-50 border border-slate-200/50">
                        <img src="{{ asset('images/ring_hero.png') }}" alt="নূর আল খাতাম ইয়ামেনী আকিক আংটি" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <!-- Floating gemstone badge -->
                        <div class="absolute bottom-4 left-4 bg-slate-900/95 border border-amber-500/30 px-3.5 py-1.5 rounded-lg backdrop-blur-sm">
                            <span class="text-[10px] font-mono tracking-widest text-amber-400 uppercase">ইয়ামেনী লাল আকিক</span>
                        </div>
                    </div>
                    
                    <div class="mt-4 px-2 py-1 flex justify-between items-center">
                        <div>
                            <h3 class="font-serif text-slate-900 font-semibold tracking-wide">দি রয়্যাল আল-খাতাম</h3>
                            <p class="text-xs text-slate-500 mt-1 font-sans">হস্তনির্মিত ফিলিগিরি এবং চমৎকার নকশা</p>
                        </div>
                        <div class="text-right">
                            <span class="text-sm font-mono text-amber-600 font-semibold">$৩৪৯</span>
                            <p class="text-[9px] text-emerald-600 font-semibold mt-0.5 uppercase tracking-wider">স্টকে আছে</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
