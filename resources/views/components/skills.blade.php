<section id="tentang" class="py-14 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    
    <!-- Section Header in Outfit font -->
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
        <div>
            <div class="text-xs font-semibold uppercase tracking-wider text-indigo-400 mb-1 flex items-center gap-1.5">
                <span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span>
                KAPABILITAS UTAMA
            </div>
            <h2 class="text-2xl sm:text-3xl font-heading font-black text-white tracking-tight">
                Keahlian &amp; <span class="bg-gradient-to-r from-blue-400 via-indigo-300 to-teal-300 bg-clip-text text-transparent">Spesialisasi Teknis</span>
            </h2>
        </div>
        <p class="text-slate-400 text-xs sm:text-sm max-w-md leading-relaxed">
            Membangun solusi perangkat lunak yang berfokus pada ketahanan arsitektur, efisiensi database, serta performa nyata bagi pengguna akhir.
        </p>
    </div>

    <!-- 4 Bento Skill Cards with Distinct Color Personalities -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($skills as $index => $skill)
        @php
            $accentBorder = match($index) {
                0 => 'hover:border-red-500/40',
                1 => 'hover:border-cyan-500/40',
                2 => 'hover:border-emerald-500/40',
                3 => 'hover:border-amber-500/40',
                default => 'hover:border-indigo-500/40'
            };
            $iconBg = match($index) {
                0 => 'bg-red-500/10 text-red-400 border-red-500/20',
                1 => 'bg-cyan-500/10 text-cyan-400 border-cyan-500/20',
                2 => 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
                3 => 'bg-amber-500/10 text-amber-400 border-amber-500/20',
                default => 'bg-indigo-500/10 text-indigo-400 border-indigo-500/20'
            };
        @endphp

        <div class="p-6 rounded-3xl modern-card flex flex-col justify-between group {{ $accentBorder }}">
            
            <div class="space-y-4">
                <!-- Icon Header -->
                <div class="w-12 h-12 rounded-2xl {{ $iconBg }} border flex items-center justify-center text-xl transition-transform duration-300 group-hover:scale-110 shadow-sm">
                    <i class="{{ $skill['icon'] }}"></i>
                </div>

                <!-- Skill Title & Description -->
                <div>
                    <h3 class="text-base font-heading font-bold text-white tracking-tight mb-2">
                        {{ $skill['title'] }}
                    </h3>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        {{ $skill['description'] }}
                    </p>
                </div>
            </div>

            <!-- Tags List -->
            <div class="pt-5 mt-5 border-t border-slate-800/80 flex flex-wrap gap-1.5">
                @foreach($skill['tags'] as $tag)
                <span class="text-[11px] font-medium bg-slate-900/90 text-slate-300 px-2.5 py-1 rounded-lg border border-slate-800 hover:border-slate-700 transition">
                    {{ $tag }}
                </span>
                @endforeach
            </div>

        </div>
        @endforeach
    </div>

</section>
