<header class="fixed top-0 left-0 right-0 z-50 bg-[#070b14]/80 backdrop-blur-xl border-b border-slate-800/80 transition-all duration-300" id="mainNavbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        
        <!-- Logo / Monogram -->
        <a href="#beranda" class="flex items-center gap-3 group">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 via-indigo-600 to-cyan-500 p-0.5 shadow-lg shadow-indigo-600/30 group-hover:scale-105 transition-transform duration-300">
                <div class="w-full h-full bg-[#070b14] rounded-[10px] flex items-center justify-center font-heading font-extrabold text-white text-sm tracking-tight group-hover:bg-transparent transition-colors">
                    AT
                </div>
            </div>
            <div class="flex flex-col">
                <span class="text-base font-heading font-bold tracking-tight text-white group-hover:text-indigo-400 transition">
                    Amrun Tajdid<span class="text-indigo-400 font-semibold text-xs ml-1">, S.T.</span>
                </span>
                <span class="text-[11px] text-slate-400 font-medium -mt-1">
                    Web Developer &amp; Tech Enthusiast
                </span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden md:flex items-center gap-1 bg-slate-900/80 p-1.5 rounded-full border border-slate-800/80 backdrop-blur-md shadow-inner">
            <a href="#beranda" class="px-4 py-1.5 text-xs font-semibold text-slate-300 hover:text-white hover:bg-slate-800 rounded-full transition">
                Beranda
            </a>
            <a href="#tentang" class="px-4 py-1.5 text-xs font-semibold text-slate-300 hover:text-white hover:bg-slate-800 rounded-full transition">
                Keahlian
            </a>
            <a href="#proyek-unggulan" class="px-4 py-1.5 text-xs font-semibold text-indigo-300 hover:text-white hover:bg-indigo-600/25 rounded-full transition flex items-center gap-1.5">
                <span class="w-1.5 h-1.5 rounded-full bg-indigo-400 animate-pulse"></span>
                Proyek Unggulan
            </a>
            <a href="#semua-proyek" class="px-4 py-1.5 text-xs font-semibold text-slate-300 hover:text-white hover:bg-slate-800 rounded-full transition">
                Semua Karya
            </a>
            <a href="#kontak" class="px-4 py-1.5 text-xs font-semibold text-slate-300 hover:text-white hover:bg-slate-800 rounded-full transition">
                Kontak
            </a>
        </nav>

        <!-- Right Side: Availability & Action Button -->
        <div class="hidden lg:flex items-center gap-4">
            <!-- Availability Status Pill -->
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/25 text-emerald-400 text-xs font-medium">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span>Tersedia Proyek</span>
            </div>

            <!-- WhatsApp Action Button -->
            <a href="https://wa.me/{{ $profile['whatsapp'] }}?text={{ urlencode('Halo Amrun Tajdid, saya melihat portofolio Anda dan tertarik untuk berdiskusi mengenai proyek web development.') }}" 
               target="_blank" 
               class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-400 hover:to-teal-400 text-slate-950 font-bold text-xs px-4 py-2.5 rounded-xl shadow-lg shadow-emerald-500/20 transition-all hover:scale-105 active:scale-95">
                <i class="fa-brands fa-whatsapp text-sm"></i>
                <span>Hubungi Saya</span>
            </a>
        </div>

        <!-- Mobile Menu Trigger -->
        <button type="button" 
                id="mobileMenuBtn" 
                class="md:hidden text-slate-300 hover:text-white p-2.5 rounded-xl bg-slate-900 border border-slate-800"
                aria-label="Toggle Menu">
            <i class="fa-solid fa-bars text-sm" id="menuIcon"></i>
        </button>
    </div>

    <!-- Mobile Menu Drawer -->
    <div id="mobileMenu" class="hidden md:hidden px-4 pt-2 pb-6 bg-[#070b14]/95 border-b border-slate-800 space-y-2">
        <a href="#beranda" class="block px-3 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-slate-900 rounded-lg">
            Beranda
        </a>
        <a href="#tentang" class="block px-3 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-slate-900 rounded-lg">
            Keahlian Teknis
        </a>
        <a href="#proyek-unggulan" class="block px-3 py-2 text-xs font-medium text-indigo-400 hover:bg-slate-900 rounded-lg">
            Proyek Unggulan (4 Baru)
        </a>
        <a href="#semua-proyek" class="block px-3 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-slate-900 rounded-lg">
            Semua Proyek (9)
        </a>
        <a href="#kontak" class="block px-3 py-2 text-xs font-medium text-slate-300 hover:text-white hover:bg-slate-900 rounded-lg">
            Kontak
        </a>
        <div class="pt-3 border-t border-slate-800">
            <a href="https://wa.me/{{ $profile['whatsapp'] }}?text={{ urlencode('Halo Amrun Tajdid, saya tertarik untuk bekerja sama.') }}" 
               target="_blank" 
               class="w-full text-center bg-gradient-to-r from-emerald-500 to-teal-500 text-slate-950 font-bold py-2.5 rounded-xl flex items-center justify-center gap-2 text-xs shadow-md">
                <i class="fa-brands fa-whatsapp text-sm"></i>
                <span>Hubungi via WhatsApp</span>
            </a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobileMenuBtn');
        const menu = document.getElementById('mobileMenu');
        const icon = document.getElementById('menuIcon');
        
        btn.addEventListener('click', function() {
            const isHidden = menu.classList.contains('hidden');
            if (isHidden) {
                menu.classList.remove('hidden');
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            } else {
                menu.classList.add('hidden');
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            }
        });

        menu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            });
        });
    });
</script>
