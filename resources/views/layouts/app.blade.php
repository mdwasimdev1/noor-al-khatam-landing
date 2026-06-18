<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="নূর আল খাতাম - কাস্টম হস্তনির্মিত ৯২৫ স্টার্লিং সিলভার এবং আসল রত্ন পাথরের আংটি। আপনার আধ্যাত্মিক ব্যক্তিত্ব ও ঐতিহ্যের প্রকাশ।">
    <meta name="keywords" content="হস্তনির্মিত আংটি, স্টার্লিং সিলভার, আকিক আংটি, ফিরোজা পাথর, কাস্টম আংটি">
    <meta name="author" content="Noor Al Khatam">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="নূর আল খাতাম | ঐতিহ্যবাহী আসল পাথরের সিলভার আংটি">
    <meta property="og:description" content="খাঁটি ৯২৫ স্টার্লিং সিলভারের উপর কাস্টম ক্যালিগ্রাফি এবং আসল ইয়ামেনী লাল আকিক ও ফিরোজা পাথরের রাজকীয় আংটি সংগ্রহ।">
    
    <title>@yield('title', 'নূর আল খাতাম | ঐতিহ্যবাহী আসল পাথরের সিলভার আংটি')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f8fafc] text-slate-700 selection:bg-amber-500/20 selection:text-amber-900 min-h-screen flex flex-col overflow-x-hidden antialiased font-sans">
    
    <!-- Background Glows -->
    <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-emerald-500/5 rounded-full blur-[120px] pointer-events-none -z-10"></div>
    <div class="absolute top-[800px] right-1/4 w-[600px] h-[600px] bg-amber-500/5 rounded-full blur-[140px] pointer-events-none -z-10"></div>
    <div class="absolute bottom-[1000px] left-1/3 w-[500px] h-[500px] bg-emerald-500/5 rounded-full blur-[130px] pointer-events-none -z-10"></div>

    <!-- Header Navigation -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Logo Section -->
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-tr from-amber-600 to-amber-400 flex items-center justify-center shadow-md shadow-amber-500/10 group-hover:shadow-amber-500/35 transition-all duration-300">
                    <!-- Geometric Logo Icon -->
                    <svg class="w-6 h-6 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m12.728 12.727l.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-serif text-lg sm:text-xl font-bold tracking-widest text-slate-900 uppercase leading-none">
                        Noor Al Khatam
                    </span>
                    <span class="text-[9px] font-sans tracking-[0.3em] uppercase text-amber-600 font-semibold mt-1">
                        আংটির রাজকীয় আলো
                    </span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold tracking-wide text-slate-600">
                <a href="#benefits" class="hover:text-amber-600 transition-colors duration-200">আমাদের মান</a>
                <a href="#gallery" class="hover:text-amber-600 transition-colors duration-200">সংগ্রহ</a>
                <a href="#reviews" class="hover:text-amber-600 transition-colors duration-200">রিভিউ</a>
                <a href="#pricing" class="hover:text-amber-600 transition-colors duration-200">মূল্য তালিকা</a>
                <a href="#faq" class="hover:text-amber-600 transition-colors duration-200">প্রশ্নোত্তর</a>
            </nav>

            <!-- CTA Button -->
            <div class="flex items-center gap-4">
                <x-button variant="outline" href="#order-form" class="hidden sm:inline-flex !px-5 !py-2 text-xs uppercase tracking-wider">
                    বিশেষ অনুরোধ
                </x-button>
                <x-button variant="primary" href="#gallery" class="!px-5 !py-2 text-xs uppercase tracking-wider">
                    সংগ্রহ দেখুন
                </x-button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-100 border-t border-slate-200 pt-16 pb-8 text-slate-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- About -->
            <div class="md:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-8 rounded bg-amber-500 flex items-center justify-center">
                        <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m12.728 12.727l.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                        </svg>
                    </div>
                    <span class="font-serif text-lg font-bold tracking-widest text-slate-900 uppercase">নূর আল খাতাম</span>
                </div>
                <p class="text-sm text-slate-500 max-w-sm mb-6 leading-relaxed">
                    শতবর্ষ প্রাচীন রৌপ্য ও রত্ন পাথর খোদাইয়ের ঐতিহ্য ধরে রেখে আমরা কাজ করি। আধ্যাত্মিক মহিমা এবং ব্যক্তিগত ঐতিহ্যের স্মারক হিসেবে আমরা ৯২৫ স্টার্লিং সিলভারের আংটি তৈরি করি।
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-serif text-sm font-semibold tracking-wider text-slate-800 uppercase mb-4">সংগ্রহশালা</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#gallery" class="hover:text-amber-600 transition-colors duration-150">ইয়ামেনী আকিক</a></li>
                    <li><a href="#gallery" class="hover:text-amber-600 transition-colors duration-150">পার্সিয়ান ফিরোজা</a></li>
                    <li><a href="#gallery" class="hover:text-amber-600 transition-colors duration-150">কাস্টম নাম ক্যালিগ্রাফি</a></li>
                    <li><a href="#gallery" class="hover:text-amber-600 transition-colors duration-150">রাজকীয় কালেকশন</a></li>
                </ul>
            </div>

            <!-- Contact/Support Info with Phone & Call Icon -->
            <div>
                <h4 class="font-serif text-sm font-semibold tracking-wider text-slate-800 uppercase mb-4">প্রয়োজনে যোগাযোগ করুন :</h4>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="tel:01846252544" class="hover:text-amber-600 transition-colors duration-150 flex items-center gap-2">
                            <svg class="w-4 h-4 text-amber-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>01846 252544</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:01846252544" class="hover:text-amber-600 transition-colors duration-150 flex items-center gap-2">
                            <svg class="w-4 h-4 text-amber-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>01846 252544</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:01846252544" class="hover:text-amber-600 transition-colors duration-150 flex items-center gap-2">
                            <svg class="w-4 h-4 text-amber-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>01846 252544</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-t border-slate-200 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
            <p>&copy; 2026 নূর আল খাতাম। সর্বস্বত্ব সংরক্ষিত।</p>
            <p class="flex items-center gap-1.5 text-slate-500">
                পরম যত্ন সহকারে হাতে তৈরি
                <span class="w-1.5 h-1.5 rotate-45 bg-amber-500"></span>
                খাঁটি ৯২৫ স্টার্লিং সিলভার
            </p>
        </div>
    </footer>

</body>
</html>
