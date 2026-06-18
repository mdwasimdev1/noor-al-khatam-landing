<section id="order-form" class="relative py-24 bg-[#f8fafc] overflow-hidden">
    <!-- Subtle Background Line Divider -->
    <div class="absolute inset-x-0 top-0 h-[1px] bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Info Panel -->
            <div class="lg:col-span-5">
                <span class="text-xs font-semibold tracking-widest text-amber-600 uppercase block mb-3 font-mono">Bespoke Concierge</span>
                <h2 class="text-3xl md:text-5xl font-bold font-serif text-slate-900 leading-tight mb-6">
                    Request a <br>Bespoke Creation
                </h2>
                <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-8 font-sans">
                    Every Noor Al Khatam ring is custom-crafted to order in our artisanal silversmith workshop. Fill out this request form to secure your slot, and our jeweler will connect with you via email or WhatsApp within 12 hours to finalize your designs.
                </p>

                <!-- Helpful details list -->
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-emerald-50 border border-emerald-200 flex items-center justify-center text-emerald-600 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-serif text-sm font-semibold text-slate-800">Quick Turnaround</h4>
                            <p class="text-xs text-slate-500 mt-1">Design alignment and size verification is finalized within 12-24 hours.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-amber-50 border border-amber-200 flex items-center justify-center text-amber-600 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-serif text-sm font-semibold text-slate-800">100% Secure Customizing</h4>
                            <p class="text-xs text-slate-500 mt-1">No upfront payment required for consultations. Pay only when the final CAD/sketches are approved.</p>
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
                                <label for="name" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">Full Name *</label>
                                <input type="text" id="name" name="name" required class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-800 focus:outline-none focus:bg-white focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all">
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">WhatsApp / Phone *</label>
                                <input type="tel" id="phone" name="phone" required placeholder="+1 (555) 000-0000" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-800 focus:outline-none focus:bg-white focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all">
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="you@example.com" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-800 focus:outline-none focus:bg-white focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                            <!-- Tier -->
                            <div>
                                <label for="tier" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">Select Tier</label>
                                <select id="tier" name="tier" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3 py-3 text-sm text-slate-700 focus:outline-none focus:bg-white focus:border-amber-600 transition-all">
                                    <option value="signature">Artisan Signature ($349)</option>
                                    <option value="sovereign" selected>Sovereign Elite ($499)</option>
                                    <option value="custom">Emperor's Custom ($899+)</option>
                                </select>
                            </div>

                            <!-- Gemstone -->
                            <div>
                                <label for="gemstone" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">Gemstone Preference</label>
                                <select id="gemstone" name="gemstone" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3 py-3 text-sm text-slate-700 focus:outline-none focus:bg-white focus:border-amber-600 transition-all">
                                    <option value="yemeni_aqeeq">Yemeni Red Aqeeq</option>
                                    <option value="persian_feroza">Persian Feroza</option>
                                    <option value="emerald">Green Emerald</option>
                                    <option value="black_onyx">Black Onyx</option>
                                    <option value="other">Custom request...</option>
                                </select>
                            </div>

                            <!-- Size -->
                            <div>
                                <label for="ring_size" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">Ring Size (US)</label>
                                <select id="ring_size" name="ring_size" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3 py-3 text-sm text-slate-700 focus:outline-none focus:bg-white focus:border-amber-600 transition-all">
                                    <option value="unknown">I don't know my size</option>
                                    @for($size = 7; $size <= 14; $size++)
                                        <option value="{{ $size }}">US Size {{ $size }}</option>
                                        <option value="{{ $size }}.5">US Size {{ $size }}.5</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <!-- Notes / Calligraphy -->
                        <div>
                            <label for="notes" class="block text-xs font-semibold tracking-wider text-slate-500 uppercase mb-2 font-mono">Calligraphy & Customization Notes</label>
                            <textarea id="notes" name="notes" rows="4" placeholder="Enter name or verse you would like engraved. Mention if you need a gold accent or specific gemstone cut..." class="w-full bg-slate-50 border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-800 focus:outline-none focus:bg-white focus:border-amber-600 focus:ring-1 focus:ring-amber-600 transition-all"></textarea>
                        </div>

                        <div class="pt-6 border-t border-slate-200/60 flex flex-col sm:flex-row items-center justify-between gap-6">
                            <span class="text-xs text-slate-500 leading-normal max-w-sm text-center sm:text-left">
                                By submitting this form, you request a custom design slot. No payment will be captured at this stage.
                            </span>
                            <x-button type="submit" variant="primary" class="w-full sm:w-auto uppercase tracking-wider text-xs shadow-lg shadow-amber-500/25">
                                Submit Crafting Request
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
