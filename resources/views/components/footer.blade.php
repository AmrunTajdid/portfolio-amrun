<footer id="kontak" class="mt-20 border-t border-slate-800/80 bg-[#070b14] relative">
    
    <!-- Top CTA Banner -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -translate-y-10">
        <div class="p-8 sm:p-12 rounded-3xl bg-gradient-to-r from-indigo-950/80 via-slate-900 to-slate-950 border border-indigo-500/30 shadow-2xl flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="space-y-2 text-center md:text-left">
                <span class="text-xs font-semibold uppercase tracking-wider text-indigo-400 flex items-center justify-center md:justify-start gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    KOLABORASI &bull; PROYEK BARU
                </span>
                <h3 class="text-2xl sm:text-3xl font-heading font-black text-white tracking-tight">
                    Mari diskusikan kebutuhan perangkat lunak Anda.
                </h3>
                <p class="text-slate-300 text-xs sm:text-sm max-w-xl">
                    Terbuka untuk pengembangan aplikasi web skala penuh, perancangan backend Laravel 12, hingga optimasi landing page konversi bisnis.
                </p>
            </div>
            <a href="https://wa.me/{{ $profile['whatsapp'] }}?text={{ urlencode('Halo Amrun Tajdid, saya ingin berdiskusi mengenai proyek web development.') }}" 
               target="_blank" 
               class="whitespace-nowrap inline-flex items-center gap-2.5 bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-400 hover:to-teal-400 text-slate-950 font-bold px-7 py-3.5 rounded-2xl transition duration-200 text-xs shadow-lg shadow-emerald-500/25 hover:scale-105 active:scale-95">
                <i class="fa-brands fa-whatsapp text-slate-950 text-base"></i>
                <span>Hubungi via WhatsApp</span>
            </a>
        </div>
    </div>

    <!-- Main Footer Body -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center pb-8 border-b border-slate-800/80">
            
            <!-- Branding -->
            <div class="md:col-span-6 space-y-2">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center font-heading font-bold text-white text-xs">
                        AT
                    </div>
                    <span class="text-sm font-heading font-bold text-white tracking-tight">Amrun Tajdid, S.T.</span>
                </div>
                <p class="text-slate-400 text-xs leading-relaxed max-w-sm">
                    Web Developer &amp; Tech Enthusiast. Mengembangkan sistem web berbasis Laravel yang efisien, handal, dan berorientasi hasil.
                </p>
            </div>

            <!-- Social Links with Colorful Hover States -->
            <div class="md:col-span-6 flex flex-wrap items-center md:justify-end gap-2 text-slate-300">
                <a href="{{ $profile['github'] }}" target="_blank" class="px-3.5 py-1.5 rounded-xl bg-slate-900 border border-slate-800 hover:bg-white hover:text-black transition flex items-center gap-2 text-xs">
                    <i class="fa-brands fa-github text-xs"></i>
                    <span>GitHub</span>
                </a>
                <a href="{{ $profile['linkedin'] }}" target="_blank" class="px-3.5 py-1.5 rounded-xl bg-slate-900 border border-slate-800 hover:bg-blue-600 hover:text-white transition flex items-center gap-2 text-xs">
                    <i class="fa-brands fa-linkedin text-xs"></i>
                    <span>LinkedIn</span>
                </a>
                <a href="{{ $profile['instagram'] }}" target="_blank" class="px-3.5 py-1.5 rounded-xl bg-slate-900 border border-slate-800 hover:bg-pink-600 hover:text-white transition flex items-center gap-2 text-xs">
                    <i class="fa-brands fa-instagram text-xs"></i>
                    <span>Instagram</span>
                </a>
                <a href="mailto:{{ $profile['email'] }}" class="px-3.5 py-1.5 rounded-xl bg-slate-900 border border-slate-800 hover:bg-emerald-600 hover:text-white transition flex items-center gap-2 text-xs">
                    <i class="fa-solid fa-envelope text-xs"></i>
                    <span>Email</span>
                </a>
            </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="pt-6 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
            <p>&copy; 2026 {{ $profile['name'] }}. Hak cipta dilindungi.</p>
            <div class="flex items-center gap-2 text-slate-400 text-[11px]">
                <span class="text-red-400 font-semibold">Laravel 12</span>
                <span class="text-slate-600">&bull;</span>
                <span class="text-cyan-400 font-semibold">Tailwind CSS</span>
                <span class="text-slate-600">&bull;</span>
                <span class="text-indigo-400 font-semibold">Outfit &amp; Plus Jakarta Sans</span>
            </div>
        </div>
    </div>

</footer>
