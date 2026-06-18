<section id="gallery" class="relative py-24 bg-[#f1f5f9] overflow-hidden">
    <!-- Subtle Background Line Divider -->
    <div class="absolute inset-x-0 top-0 h-[1px] bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <x-section-title 
            title="The Signature Collection" 
            subtitle="Masterpieces in Silver" 
            align="center"
        />

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            
            <!-- Ring 1: Yemeni Red Aqeeq -->
            <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 hover:border-amber-500/50 transition-all duration-300 flex flex-col justify-between shadow-md hover:shadow-xl hover:shadow-slate-300/40">
                <div>
                    <!-- Image Wrapper -->
                    <div class="relative aspect-square rounded-xl overflow-hidden bg-slate-50 border border-slate-200/60">
                        <img src="{{ asset('images/ring_hero.png') }}" alt="Yemeni Red Aqeeq Sterling Silver Ring" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <span class="absolute top-3 right-3 bg-amber-500/10 border border-amber-500/30 text-amber-700 text-[10px] font-semibold tracking-wider px-2 py-0.5 rounded-md uppercase font-mono">
                            Rare Gem
                        </span>
                    </div>

                    <!-- Title & description -->
                    <div class="mt-6">
                        <div class="flex items-center justify-between">
                            <h3 class="font-serif text-xl font-bold text-slate-900 group-hover:text-amber-600 transition-colors">
                                The Royal Al-Khatam
                            </h3>
                            <span class="font-mono text-lg text-amber-600 font-semibold">$349</span>
                        </div>
                        <p class="text-xs text-slate-500 mt-1 uppercase tracking-widest font-semibold">Yemeni Red Aqeeq</p>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            A classic, prominent ring featuring a translucent red Carnelian (Aqeeq) stone, renowned for its spiritual lineage. Framed in heavy, detailed hand-crafted filigree.
                        </p>
                    </div>

                    <!-- Specifications list -->
                    <ul class="mt-5 space-y-2 border-t border-slate-200/60 pt-4 text-xs text-slate-500">
                        <li class="flex justify-between">
                            <span>Base Metal</span>
                            <span class="text-slate-800 font-medium">925 Sterling Silver</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Gem weight</span>
                            <span class="text-slate-800 font-medium">~12.4 Carats</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Calligraphy option</span>
                            <span class="text-slate-800 font-medium">Inside / Custom Engraved</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-200/60">
                    <x-button variant="primary" href="#order-form" class="w-full !py-2.5 text-xs uppercase tracking-wider">
                        Configure & Order
                    </x-button>
                </div>
            </div>

            <!-- Ring 2: Persian Feroza -->
            <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 hover:border-amber-500/50 transition-all duration-300 flex flex-col justify-between shadow-md hover:shadow-xl hover:shadow-slate-300/40">
                <div>
                    <!-- Image Wrapper -->
                    <div class="relative aspect-square rounded-xl overflow-hidden bg-slate-50 border border-slate-200/60">
                        <img src="{{ asset('images/ring_turquoise.png') }}" alt="Persian Turquoise Feroza Ring" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <span class="absolute top-3 right-3 bg-emerald-500/10 border border-emerald-500/30 text-emerald-700 text-[10px] font-semibold tracking-wider px-2 py-0.5 rounded-md uppercase font-mono">
                            Popular Choice
                        </span>
                    </div>

                    <!-- Title & description -->
                    <div class="mt-6">
                        <div class="flex items-center justify-between">
                            <h3 class="font-serif text-xl font-bold text-slate-900 group-hover:text-amber-600 transition-colors">
                                The Persian Neyshabur
                            </h3>
                            <span class="font-mono text-lg text-amber-600 font-semibold">$389</span>
                        </div>
                        <p class="text-xs text-emerald-700 mt-1 uppercase tracking-widest font-semibold">Persian Turquoise (Feroza)</p>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            Boasting a stunning sky-blue hue with natural brown matrices, sourced from Neyshabur mines. The silver band is hand-carved with gorgeous floral details.
                        </p>
                    </div>

                    <!-- Specifications list -->
                    <ul class="mt-5 space-y-2 border-t border-slate-200/60 pt-4 text-xs text-slate-500">
                        <li class="flex justify-between">
                            <span>Base Metal</span>
                            <span class="text-slate-800 font-medium">925 Sterling Silver</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Gem weight</span>
                            <span class="text-slate-800 font-medium">~9.8 Carats</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Calligraphy option</span>
                            <span class="text-slate-800 font-medium">Inside / Custom Engraved</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-200/60">
                    <x-button variant="primary" href="#order-form" class="w-full !py-2.5 text-xs uppercase tracking-wider">
                        Configure & Order
                    </x-button>
                </div>
            </div>

            <!-- Ring 3: Royal Emerald Signet -->
            <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 hover:border-amber-500/50 transition-all duration-300 flex flex-col justify-between shadow-md hover:shadow-xl hover:shadow-slate-300/40">
                <div>
                    <!-- Image Wrapper -->
                    <div class="relative aspect-square rounded-xl overflow-hidden bg-slate-50 border border-slate-200/60">
                        <img src="{{ asset('images/ring_emerald.png') }}" alt="Royal Emerald Signet Silver Ring" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <span class="absolute top-3 right-3 bg-amber-500/10 border border-amber-500/30 text-amber-700 text-[10px] font-semibold tracking-wider px-2 py-0.5 rounded-md uppercase font-mono">
                            Limited Edition
                        </span>
                    </div>

                    <!-- Title & description -->
                    <div class="mt-6">
                        <div class="flex items-center justify-between">
                            <h3 class="font-serif text-xl font-bold text-slate-900 group-hover:text-amber-600 transition-colors">
                                The Emerald Sovereign
                            </h3>
                            <span class="font-mono text-lg text-amber-600 font-semibold">$499</span>
                        </div>
                        <p class="text-xs text-amber-700 mt-1 uppercase tracking-widest font-semibold font-mono">Green Emerald (Zamurrad)</p>
                        <p class="text-sm text-slate-600 mt-3 leading-relaxed">
                            A signature bold signet ring hosting a gorgeous facet-cut natural deep green emerald. The side panel displays a customized, hammer-finish Arabic script.
                        </p>
                    </div>

                    <!-- Specifications list -->
                    <ul class="mt-5 space-y-2 border-t border-slate-200/60 pt-4 text-xs text-slate-500">
                        <li class="flex justify-between">
                            <span>Base Metal</span>
                            <span class="text-slate-800 font-medium">925 Sterling Silver</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Gem weight</span>
                            <span class="text-slate-800 font-medium">~7.2 Carats</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Calligraphy option</span>
                            <span class="text-slate-800 font-medium">Engraved side script</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-6 pt-4 border-t border-slate-200/60">
                    <x-button variant="primary" href="#order-form" class="w-full !py-2.5 text-xs uppercase tracking-wider">
                        Configure & Order
                    </x-button>
                </div>
            </div>

        </div>
    </div>
</section>
