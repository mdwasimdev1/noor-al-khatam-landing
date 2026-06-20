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
  <!-- Header Navigation -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-28 flex items-center justify-center">
            <!-- Logo Section -->
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-16 h-16 rounded-md border border-amber-400 flex items-center justify-center">
                    <!-- Geometric Logo Icon -->
                    <img src="{{ asset('images/ring_hero.png') }}" alt="নূর আল খাতাম লোগো" class="w-full h-full object-contain rounded-md">
                </div>
                <div class="flex flex-col">
                    <span class="font-serif text-lg sm:text-xl font-bold tracking-widest text-slate-900 uppercase leading-none">
                        Noor Al Khatam
                    </span>
                    <span class="text-sm font-sans tracking-[0.3em] uppercase text-amber-600 font-semibold mt-1">
                        আংটির রাজকীয় আলো
                    </span>
                </div>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-100 border-t border-slate-200 pt-16 pb-8 text-slate-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 flex flex-col md:flex-row justify-between gap-12 md:gap-24">
            <!-- About -->
            <div class="md:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-8 rounded bg-amber-500 flex items-center justify-center">
                       <img src="{{ asset('images/ring_hero.png') }}" alt="নূর আল খাতাম লোগো" class="w-full h-full object-contain rounded-md">
                    </div>
                    <span class="font-serif text-lg font-bold tracking-widest text-slate-900 uppercase">নূর আল খাতাম</span>
                </div>
                <p class="text-sm text-slate-500 max-w-sm mb-6 leading-relaxed">
                    শতবর্ষ প্রাচীন রৌপ্য ও রত্ন পাথর খোদাইয়ের ঐতিহ্য ধরে রেখে আমরা কাজ করি। আধ্যাত্মিক মহিমা এবং ব্যক্তিগত ঐতিহ্যের স্মারক হিসেবে আমরা ৯২৫ স্টার্লিং সিলভারের আংটি তৈরি করি।
                </p>
            </div>

            <!-- Contact/Support Info with Phone & Call Icon -->
            <div>
                <h4 class="font-serif text-sm font-semibold tracking-wider text-slate-800 uppercase mb-4">প্রয়োজনে যোগাযোগ করুন</h4>
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

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-t border-slate-200 pt-8 text-center text-xs mt-5">
            <p>&copy; 2026 নূর আল খাতাম। সর্বস্বত্ব সংরক্ষিত।</p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
