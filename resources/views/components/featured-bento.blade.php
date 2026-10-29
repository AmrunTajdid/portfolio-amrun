<section id="proyek-unggulan" class="py-14 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    
    <!-- Section Header in Outfit font -->
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
        <div>
            <div class="text-xs font-semibold uppercase tracking-wider text-indigo-400 mb-1 flex items-center gap-1.5">
                <span class="w-1.5 h-1.5 rounded-full bg-indigo-400 animate-pulse"></span>
                KARYA TERBARU &amp; PILIHAN
            </div>
            <h2 class="text-2xl sm:text-3xl font-heading font-black text-white tracking-tight">
                Proyek Unggulan &amp; <span class="bg-gradient-to-r from-blue-400 via-indigo-300 to-teal-300 bg-clip-text text-transparent">Studi Kasus</span>
            </h2>
        </div>
        <p class="text-slate-400 text-xs sm:text-sm max-w-md leading-relaxed">
            Empat proyek terbaru dengan fokus pada kompleksitas arsitektur backend, manajemen finansial, serta efektivitas konversi periklanan digital.
        </p>
    </div>

    <!-- Featured Bento Grid (12 Columns) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
        
        @foreach($featuredProjects as $index => $project)
            @php
                $colClass = match($index) {
                    0 => 'lg:col-span-7',
                    1 => 'lg:col-span-5',
                    2 => 'lg:col-span-5',
                    3 => 'lg:col-span-7',
                    default => 'lg:col-span-6'
                };
            @endphp

            <div class="{{ $colClass }} rounded-3xl modern-card overflow-hidden flex flex-col justify-between group">
                
                <!-- Card Header -->
                <div class="px-6 py-4 bg-slate-900/60 border-b border-slate-800 flex items-center justify-between text-xs">
                    <span class="font-semibold text-slate-300 tracking-wide flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-indigo-400"></span>
                        {{ $project['client_type'] }}
                    </span>
                    <span class="text-[11px] font-bold uppercase tracking-wider px-3 py-1 rounded-full border {{ $project['badge_color'] }}">
                        {{ $project['badge'] }}
                    </span>
                </div>

                <!-- Image Showcase Area -->
                <div class="relative overflow-hidden bg-[#070b14] aspect-[16/10] sm:aspect-[16/9] border-b border-slate-800">
                    <img src="{{ asset($project['image']) }}?v={{ @filemtime(public_path($project['image'])) }}" 
                         alt="{{ $project['title'] }}" 
                         class="w-full h-full object-cover object-top transition duration-500 ease-out group-hover:scale-[1.03]"
                         loading="lazy">
                </div>

                <!-- Card Content Body -->
                <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between space-y-6">
                    <div class="space-y-3">
                        <h3 class="text-xl sm:text-2xl font-heading font-bold text-white tracking-tight group-hover:text-indigo-300 transition">
                            {{ $project['title'] }}
                        </h3>
                        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                            {{ $project['summary'] }}
                        </p>
                    </div>

                    <!-- Tech Stack Pills & Actions -->
                    <div class="space-y-4 pt-4 border-t border-slate-800">
                        <div class="flex flex-wrap gap-1.5">
                            @foreach($project['tags'] as $tag)
                            <span class="text-[11px] font-medium bg-slate-900 text-slate-300 px-2.5 py-1 rounded-lg border border-slate-800">
                                {{ $tag }}
                            </span>
                            @endforeach
                        </div>

                        <!-- Card Action Buttons -->
                        <div class="flex items-center gap-3 pt-2">
                            <button type="button" 
                                    onclick="openProjectModal({{ $project['id'] }})"
                                    class="flex-1 inline-flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 via-indigo-600 to-violet-600 hover:from-blue-500 hover:to-violet-500 text-white font-bold text-xs py-3 px-4 rounded-xl shadow-md transition-all hover:scale-[1.02]">
                                <span>Lihat Detail Studi Kasus</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </button>

                            <a href="https://wa.me/{{ $profile['whatsapp'] }}?text={{ urlencode($project['whatsapp_msg']) }}" 
                               target="_blank"
                               class="inline-flex items-center justify-center gap-2 bg-slate-800 hover:bg-slate-700 text-slate-200 hover:text-white text-xs font-semibold py-3 px-4 rounded-xl border border-slate-700 transition"
                               title="Diskusi via WhatsApp">
                                <i class="fa-brands fa-whatsapp text-emerald-400 text-base"></i>
                                <span class="hidden sm:inline">Diskusi</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach

    </div>

</section>
