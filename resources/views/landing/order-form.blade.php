<section id="order-form" class="relative py-24 bg-[#f8fafc] overflow-hidden">
    <!-- Subtle Background Line Divider -->
    <div class="absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-slate-200 to-transparent"></div>

    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>

    @php
        function toBnDigits($num) {
            $en = ['0','1','2','3','4','5','6','7','8','9'];
            $bn = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];
            return str_replace($en, $bn, (string)$num);
        }
        $discountPercent = $settings->discount > $settings->price ? round((($settings->discount - $settings->price) / $settings->discount) * 100) : 0;
    @endphp

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Centered Header -->
        <div class="text-center mb-8">
            <h2 class="text-xl md:text-2xl font-bold text-slate-800 leading-tight">
                অর্ডার টি সম্পন্ন করতে আপনার নাম, মোবাইল নাম্বার ও ঠিকানা নিচে লিখুন
            </h2>
            <div class="border-b border-dashed border-slate-300 w-full mt-4"></div>
        </div>

        <!-- Main Card Container -->
        <div class="bg-white border border-slate-200 rounded-2xl shadow-xl shadow-slate-100/50 p-6 sm:p-8">
            @if(session('order_success'))
                <div class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-sm font-semibold text-emerald-800">
                    {{ session('order_success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-5 py-4 text-sm text-red-700">
                    অর্ডারের তথ্যগুলো আবার যাচাই করুন।
                </div>
            @endif

            <form action="{{ route('orders.store') }}" method="POST" id="checkout-form" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                    <!-- Left Column: Product Image Gallery & Billing Details (6 cols) -->
                    <div class="lg:col-span-6 space-y-6">
                        <!-- Product Gallery Mockup -->
                        <div>
                            @if($galleryItems->isNotEmpty())
                                <div class="relative aspect-square rounded-xl overflow-hidden border border-slate-200/80 bg-white p-0.5 shadow-sm">
                                    <img
                                        id="gallery-main"
                                        src="{{ asset('images/' . $galleryItems->first()->image) }}"
                                        alt="প্রোডাক্ট"
                                        class="w-full h-full object-cover rounded-lg transition-all duration-300"
                                    >
                                </div>

                                @if($galleryItems->count() > 1)
                                    <!-- Thumbnail Slider -->
                                    <div class="relative mt-4 flex items-center justify-center px-8">
                                        <button type="button" id="gallery-prev" class="absolute left-0 top-1/2 -translate-y-1/2 w-7 h-7 rounded-full bg-white border border-slate-200 shadow flex items-center justify-center text-slate-600 hover:text-amber-600 hover:border-amber-400 hover:shadow-md transition-all z-10 cursor-pointer">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                                            </svg>
                                        </button>

                                        <div class="flex items-center gap-2 overflow-x-auto no-scrollbar scroll-smooth py-1" id="thumbnails-container">
                                            @foreach($galleryItems as $item)
                                                <div class="gallery-thumb w-14 h-14 rounded-md overflow-hidden border {{ $loop->first ? 'border-2 border-amber-600' : 'border border-slate-200' }} cursor-pointer shrink-0 shadow-sm transition-all" data-src="{{ asset('images/' . $item->image) }}">
                                                    <img src="{{ asset('images/' . $item->image) }}" class="w-full h-full object-cover">
                                                </div>
                                            @endforeach
                                        </div>

                                        <button type="button" id="gallery-next" class="absolute right-0 top-1/2 -translate-y-1/2 w-7 h-7 rounded-full bg-white border border-slate-200 shadow flex items-center justify-center text-slate-600 hover:text-amber-600 hover:border-amber-400 hover:shadow-md transition-all z-10 cursor-pointer">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </button>
                                    </div>
                                @endif
                            @endif
                        </div>

                        <div>
                               <!-- Pricing -->
                            <div class="flex items-baseline gap-3 pt-1 flex-wrap">
                                <span class="text-xs font-semibold text-slate-500">Price:</span>
                                <span class="text-2xl font-black text-[#d97706] font-mono">৳ <span id="unit-price">{{ toBnDigits($settings->price) }}</span></span>
                                @if($settings->discount > $settings->price)
                                    <span class="text-sm text-slate-400 line-through font-mono">৳ {{ toBnDigits($settings->discount) }}</span>
                                    <span class="bg-black text-white text-[10px] font-bold px-2 py-0.5 rounded tracking-wide">{{ $discountPercent }}% OFF</span>
                                @endif
                            </div>

                            <!-- Status -->
                            <div class="flex items-center gap-2 text-xs font-bold text-slate-500">
                                <span>STATUS:</span>
                                <span class="bg-emerald-50 text-emerald-600 border border-emerald-200/50 px-2 py-0.5 rounded text-[10px]">IN STOCK</span>
                            </div>

                            <!-- Quantity Selector -->
                            <div class="flex items-center gap-3 pt-1">
                                <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">QUANTITY</span>
                                <div class="inline-flex items-center border border-slate-350 rounded bg-white overflow-hidden shadow-sm">
                                    <button type="button" id="qty-minus" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-100 font-bold transition-colors select-none cursor-pointer">-</button>
                                    <input
                                        type="number"
                                        id="qty-input"
                                        name="quantity"
                                        value="{{ old('quantity', 1) }}"
                                        min="1"
                                        max="10"
                                        readonly
                                        class="w-10 text-center font-bold text-sm text-slate-800 focus:outline-none border-none pointer-events-none"
                                    >
                                    <button type="button" id="qty-plus" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-100 font-bold transition-colors select-none cursor-pointer">+</button>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- Right Column: Product Title, Pricing, Quantity & Summary (6 cols) -->
                    <div class="lg:col-span-6 space-y-6 lg:pl-6 lg:border-l lg:border-slate-100 flex flex-col justify-between self-stretch">

                        <div class="space-y-5">
                            <!-- Product Title -->
                            <!-- Billing Details Form -->
                        <div class="pt-4 border-t border-slate-100">
                            <h3 class="text-base font-bold text-slate-800 mb-4 pb-1 border-b border-slate-100">বিলিং ডিটেইলস</h3>

                            <div class="space-y-4">
                                <!-- Name -->
                                <div>
                                    <label for="name" class="block text-xs font-bold text-slate-700 mb-1.5">আপনার নাম লিখুন *</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        placeholder="আপনার নাম লিখুন"
                                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all bg-white"
                                    >
                                    @error('name')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <!-- Phone -->
                                <div>
                                    <label for="phone" class="block text-xs font-bold text-slate-700 mb-1.5">আপনার মোবাইল নাম্বার লিখুন *</label>
                                    <input
                                        type="tel"
                                        id="phone"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        required
                                        placeholder="আপনার মোবাইল নাম্বার লিখুন"
                                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all bg-white"
                                    >
                                    @error('phone')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <!-- Division Select -->
                                <div>
                                    <label for="division" class="block text-xs font-bold text-slate-700 mb-1.5">আপনার বিভাগ সিলেক্ট করুন *</label>
                                    <select
                                        id="division"
                                        name="division"
                                        required
                                        class="w-full border border-slate-300 rounded-lg px-3 py-2.5 text-sm text-slate-700 focus:outline-none focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all bg-white"
                                    >
                                        <option value="" disabled {{ old('division') ? '' : 'selected' }}>বিভাগ সিলেক্ট করুন</option>
                                        @foreach([
                                            'Dhaka' => 'Dhaka (ঢাকা)',
                                            'Chattogram' => 'Chattogram (চট্টগ্রাম)',
                                            'Rajshahi' => 'Rajshahi (রাজশাহী)',
                                            'Khulna' => 'Khulna (খুলনা)',
                                            'Barishal' => 'Barishal (বরিশাল)',
                                            'Sylhet' => 'Sylhet (সিলেট)',
                                            'Rangpur' => 'Rangpur (রংপুর)',
                                            'Mymensingh' => 'Mymensingh (ময়মনসিংহ)',
                                        ] as $value => $label)
                                            <option value="{{ $value }}" {{ old('division') === $value ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>
                                    @error('division')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                                </div>

                                <!-- Address -->
                                <div>
                                    <label for="address" class="block text-xs font-bold text-slate-700 mb-1.5">আপনার ঠিকানা *</label>
                                    <input
                                        type="text"
                                        id="address"
                                        name="address"
                                        value="{{ old('address') }}"
                                        required
                                        placeholder="গ্রাম/মহল্লা, ইউনিয়ন, থানা, জেলা"
                                        class="w-full border border-slate-300 rounded-lg px-4 py-2.5 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all bg-white"
                                    >
                                    @error('address')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                                </div>
                            </div>
                        </div>


                        </div>

                        <!-- Summary and Submit -->
                        <div class="border-t border-dashed border-slate-200 pt-4 mt-6 space-y-4">
                            <!-- Shipping -->
                            <div class="flex items-center justify-between text-sm text-slate-600 font-medium">
                                <span>ডেলিভারি চার্জ:</span>
                                <span class="text-emerald-600 font-bold">Free Delivery</span>
                            </div>

                            <!-- Total Price -->
                            <div class="flex items-center justify-between text-base font-bold text-slate-850">
                                <span>টোটাল</span>
                                <span class="text-lg font-black text-slate-900 font-mono">৳ <span id="total-price">{{ toBnDigits($settings->price) }}</span></span>
                            </div>

                            <!-- Big Black Order Button -->
                            <button
                                type="submit"
                                class="w-full bg-amber-500 hover:bg-amber-600 active:scale-[0.99] text-black font-bold text-sm py-4 rounded-lg flex items-center justify-center gap-2 tracking-wide transition-all shadow-lg shadow-amber-500/30 hover:shadow-amber-500/40 cursor-pointer"
                            >
                                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                                অর্ডারটি নিশ্চিত করতে এখানে ক্লিক করুন
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Bengali Digits Translator Helper
        const EN_DIGITS = ['0','1','2','3','4','5','6','7','8','9'];
        const BN_DIGITS = ['০','১','২','৩','৪','৫','৬','৭','৮','৯'];

        function toBn(num) {
            return String(num).split('').map(char => {
                const idx = EN_DIGITS.indexOf(char);
                return idx !== -1 ? BN_DIGITS[idx] : char;
            }).join('');
        }

        // ── Gallery Slider ──
        const mainImg = document.getElementById('gallery-main');
        const thumbs = document.querySelectorAll('.gallery-thumb');
        const prevBtn = document.getElementById('gallery-prev');
        const nextBtn = document.getElementById('gallery-next');
        const thumbsContainer = document.getElementById('thumbnails-container');

        if (thumbs.length > 0) {
            let currentIndex = 0;
            const images = Array.from(thumbs).map(t => t.dataset.src);

            function updateActiveThumb(index) {
                thumbs.forEach((thumb, idx) => {
                    if (idx === index) {
                        thumb.classList.remove('border-slate-200', 'border');
                        thumb.classList.add('border-amber-600', 'border-2');
                    } else {
                        thumb.classList.remove('border-amber-600', 'border-2');
                        thumb.classList.add('border-slate-200', 'border');
                    }
                });
            }

            function scrollThumbIntoView(index) {
                if (!thumbsContainer || !thumbs[index]) return;
                const thumb = thumbs[index];
                const containerRect = thumbsContainer.getBoundingClientRect();
                const thumbRect = thumb.getBoundingClientRect();

                if (thumbRect.left < containerRect.left || thumbRect.right > containerRect.right) {
                    thumb.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
                }
            }

            function setIndex(index) {
                currentIndex = (index + images.length) % images.length;
                if (mainImg) {
                    mainImg.src = images[currentIndex];
                }
                updateActiveThumb(currentIndex);
                scrollThumbIntoView(currentIndex);
            }

            thumbs.forEach((thumb, idx) => {
                thumb.addEventListener('click', () => {
                    setIndex(idx);
                });
            });

            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    setIndex(currentIndex - 1);
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    setIndex(currentIndex + 1);
                });
            }
        }

        // ── Quantity & Total Price Calculations ──
        const qtyMinus = document.getElementById('qty-minus');
        const qtyPlus = document.getElementById('qty-plus');
        const qtyInput = document.getElementById('qty-input');
        const totalPriceEl = document.getElementById('total-price');
        const unitPrice = {{ $settings->price }};

        function updatePrice() {
            if (!qtyInput || !totalPriceEl) return;
            const qty = parseInt(qtyInput.value) || 1;
            const total = unitPrice * qty;
            totalPriceEl.textContent = toBn(total);
        }

        if (qtyMinus && qtyPlus && qtyInput) {
            qtyMinus.addEventListener('click', () => {
                let val = parseInt(qtyInput.value) || 1;
                if (val > 1) {
                    qtyInput.value = val - 1;
                    updatePrice();
                }
            });

            qtyPlus.addEventListener('click', () => {
                let val = parseInt(qtyInput.value) || 1;
                if (val < 10) {
                    qtyInput.value = val + 1;
                    updatePrice();
                }
            });
        }

        // Initial Price Load
        updatePrice();
    });
</script>
@endpush
