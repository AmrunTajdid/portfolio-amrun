<section id="beranda" class="pt-32 pb-14 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    
    <!-- Bento Grid Container for Hero -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
        
        <!-- Bento 1: Main Introduction & Headline (8 cols) -->
        <div class="lg:col-span-8 p-8 sm:p-12 rounded-3xl modern-card flex flex-col justify-between relative overflow-hidden">
            
            <div class="space-y-6">
                <!-- Status & Identification -->
                <div class="flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center gap-2 text-xs font-semibold text-emerald-400 bg-emerald-500/10 px-3.5 py-1.5 rounded-full border border-emerald-500/25">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        Tersedia untuk Pekerjaan &amp; Kolaborasi
                    </span>
                    <span class="text-xs text-slate-400 font-medium">
                        Jakarta &bull; Full-Stack &bull; Laravel Specialist
                    </span>
                </div>

                <!-- Main Headline in Outfit Font -->
                <div class="space-y-4">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-heading font-black tracking-tight text-white leading-[1.2]">
                        Membangun Sistem Web <span class="bg-gradient-to-r from-blue-400 via-indigo-300 to-teal-300 bg-clip-text text-transparent">Modern &amp; Berorientasi Solusi</span>.
                    </h1>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl font-normal">
                        Halo, saya <strong class="text-white font-semibold">Amrun Tajdid, S.T.</strong> — Web Developer yang berfokus pada rekayasa backend modern menggunakan <strong class="text-indigo-300 font-semibold">Laravel 12</strong>, perancangan database terstruktur, dan antarmuka web responsif dengan konversi tinggi untuk kebutuhan bisnis nyata.
                    </p>
                </div>

                <!-- Action CTA Buttons -->
                <div class="flex flex-wrap items-center gap-3.5 pt-2">
                    <a href="#proyek-unggulan" 
                       class="inline-flex items-center gap-2.5 bg-gradient-to-r from-blue-600 via-indigo-600 to-violet-600 hover:from-blue-500 hover:to-violet-500 text-white font-bold px-6 py-3.5 rounded-xl shadow-lg shadow-indigo-600/30 transition-all hover:scale-[1.02] active:scale-[0.98] text-xs">
                        <span>Lihat Karya Unggulan</span>
                        <i class="fa-solid fa-arrow-down text-xs"></i>
                    </a>
                    
                    <a href="https://wa.me/{{ $profile['whatsapp'] }}?text={{ urlencode('Halo Amrun Tajdid, saya ingin berkonsultasi mengenai proyek web development.') }}" 
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-slate-800/90 hover:bg-slate-700/90 text-slate-200 hover:text-white font-semibold px-5 py-3.5 rounded-xl border border-slate-700 transition text-xs">
                        <i class="fa-brands fa-whatsapp text-emerald-400 text-base"></i>
                        <span>Diskusi via WhatsApp</span>
                    </a>

                    <!-- Social Fast Links -->
                    <div class="flex items-center gap-2.5 pl-2 text-slate-400">
                        <a href="{{ $profile['github'] }}" target="_blank" class="w-10 h-10 rounded-xl bg-slate-800/80 border border-slate-700/70 flex items-center justify-center hover:text-white hover:border-slate-500 transition" title="GitHub">
                            <i class="fa-brands fa-github text-base"></i>
                        </a>
                        <a href="{{ $profile['linkedin'] }}" target="_blank" class="w-10 h-10 rounded-xl bg-slate-800/80 border border-slate-700/70 flex items-center justify-center hover:text-blue-400 hover:border-blue-500/50 transition" title="LinkedIn">
                            <i class="fa-brands fa-linkedin text-base"></i>
                        </a>
                        <a href="{{ $profile['instagram'] }}" target="_blank" class="w-10 h-10 rounded-xl bg-slate-800/80 border border-slate-700/70 flex items-center justify-center hover:text-pink-400 hover:border-pink-500/50 transition" title="Instagram">
                            <i class="fa-brands fa-instagram text-base"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Stats Ribbon inside Bento 1 with Colorful Metric Highlights -->
            <div class="mt-10 pt-6 border-t border-slate-800/80 grid grid-cols-3 gap-6">
                <div>
                    <div class="text-2xl sm:text-3xl font-heading font-black text-cyan-400 tracking-tight">
                        9+
                    </div>
                    <div class="text-xs font-semibold text-slate-200 mt-1">
                        Proyek Produksi
                    </div>
                    <div class="text-[11px] text-slate-400">
                        Web App &amp; Landing Page
                    </div>
                </div>
                <div>
                    <div class="text-2xl sm:text-3xl font-heading font-black text-indigo-400 tracking-tight">
                        Laravel 12
                    </div>
                    <div class="text-xs font-semibold text-slate-200 mt-1">
                        Backend Engineering
                    </div>
                    <div class="text-[11px] text-slate-400">
                        Clean Code &amp; RESTful API
                    </div>
                </div>
                <div>
                    <div class="text-2xl sm:text-3xl font-heading font-black text-emerald-400 tracking-tight">
                        100%
                    </div>
                    <div class="text-xs font-semibold text-slate-200 mt-1">
                        Mobile-First
                    </div>
                    <div class="text-[11px] text-slate-400">
                        Responsif &amp; Ringan
                    </div>
                </div>
            </div>
        </div>

        <!-- Bento 2: Profile Photo & Card (4 cols) -->
        <div class="lg:col-span-4 p-8 rounded-3xl modern-card flex flex-col justify-between items-center text-center relative overflow-hidden group">
            
            <div class="w-full flex items-center justify-between text-xs text-slate-400 border-b border-slate-800/80 pb-4">
                <span class="font-semibold text-slate-300">Profil Pengembang</span>
                <span class="text-emerald-400 flex items-center gap-1.5 text-xs font-medium">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Siap Kolaborasi
                </span>
            </div>

            <!-- Profile Image in Stylish Gradient Frame -->
            <div class="my-6 relative">
                <div class="w-48 h-48 sm:w-56 sm:h-56 rounded-3xl p-1 bg-gradient-to-tr from-blue-500 via-indigo-600 to-teal-400 shadow-2xl relative">
                    <img src="{{ asset($profile['avatar']) }}" 
                         alt="{{ $profile['name'] }}" 
                         class="w-full h-full object-cover object-[center_37%] rounded-[22px] transition duration-500 group-hover:scale-[1.02]">
                </div>
                <!-- Clean Pill Badge -->
                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-[#0d1527] border border-slate-700 text-white text-xs font-semibold px-4 py-1 rounded-full shadow-lg whitespace-nowrap flex items-center gap-1.5">
                    <i class="fa-solid fa-code text-indigo-400 text-xs"></i>
                    <span>Amrun Tajdid, S.T.</span>
                </div>
            </div>

            <!-- Profile Info Box -->
            <div class="w-full bg-slate-900/80 p-4 rounded-2xl border border-slate-800 text-left space-y-2">
                <div class="flex items-center justify-between text-xs">
                    <span class="text-slate-400">Lokasi</span>
                    <span class="text-slate-200 font-semibold">Jakarta / Jabodetabek</span>
                </div>
                <div class="flex items-center justify-between text-xs">
                    <span class="text-slate-400">Email</span>
                    <a href="mailto:{{ $profile['email'] }}" class="text-indigo-400 hover:underline font-medium text-[11px]">
                        {{ $profile['email'] }}
                    </a>
                </div>
                <div class="flex items-center justify-between text-xs">
                    <span class="text-slate-400">Keahlian Utama</span>
                    <span class="text-teal-400 font-semibold">Laravel &bull; Tailwind &bull; MySQL</span>
                </div>
            </div>

        </div>

    </div>

</section>
