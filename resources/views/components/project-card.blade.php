<div class="project-card rounded-3xl modern-card overflow-hidden flex flex-col justify-between group"
     data-categories="{{ implode(' ', $project['categories'] ?? [$project['category']]) }}">
    
    <!-- Top Header -->
    <div class="px-5 py-3.5 bg-slate-900/60 border-b border-slate-800 flex items-center justify-between text-xs">
        <span class="font-semibold text-slate-300 text-[11px] truncate max-w-[140px]">
            {{ $project['client_type'] }}
        </span>
        <div class="flex items-center gap-2">
            @if(!empty($project['live_url']))
                <a href="{{ $project['live_url'] }}" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="text-[11px] font-semibold text-cyan-400 hover:text-cyan-300 flex items-center gap-1 transition"
                   title="Buka Website Langsung">
                    <span>Preview</span>
                    <i class="fa-solid fa-arrow-up-right-from-square text-[9px]"></i>
                </a>
            @endif
            <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-full border {{ $project['badge_color'] ?? 'bg-slate-800 text-slate-300 border-slate-700' }}">
                {{ $project['badge'] }}
            </span>
        </div>
    </div>

    <!-- Image Area -->
    <div class="relative aspect-[16/10] bg-[#070b14] overflow-hidden border-b border-slate-800 group/img">
        <img src="{{ asset($project['image']) }}?v={{ @filemtime(public_path($project['image'])) }}" 
             alt="{{ $project['title'] }}" 
             class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105"
             loading="lazy">
        @if(!empty($project['live_url']))
            <a href="{{ $project['live_url'] }}" 
               target="_blank" 
               rel="noopener noreferrer"
               class="absolute inset-0 bg-slate-950/40 opacity-0 group-hover/img:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2 text-white font-semibold text-xs backdrop-blur-xs">
                <span class="bg-slate-900/90 px-3.5 py-1.5 rounded-lg border border-white/20 shadow-lg flex items-center gap-1.5 hover:scale-105 transition-transform">
                    <span>Preview Web</span>
                    <i class="fa-solid fa-arrow-up-right-from-square text-[10px] text-cyan-400"></i>
                </span>
            </a>
        @endif
    </div>

    <!-- Card Body -->
    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
        <div class="space-y-2">
            <h4 class="text-lg font-heading font-bold text-white tracking-tight group-hover:text-indigo-300 transition">
                {{ $project['title'] }}
            </h4>
            <p class="text-slate-400 text-xs leading-relaxed line-clamp-3">
                {{ $project['summary'] }}
            </p>
        </div>

        <div class="pt-4 border-t border-slate-800 space-y-3">
            <!-- Tech Stack Tags -->
            <div class="flex flex-wrap gap-1">
                @foreach(array_slice($project['tags'], 0, 4) as $tag)
                <span class="text-[10px] font-medium bg-slate-900 text-slate-300 px-2 py-0.5 rounded-md border border-slate-800">
                    {{ $tag }}
                </span>
                @endforeach
                @if(count($project['tags']) > 4)
                <span class="text-[10px] font-medium bg-slate-900/60 text-slate-400 px-1.5 py-0.5 rounded">
                    +{{ count($project['tags']) - 4 }}
                </span>
                @endif
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-2 pt-1">
                @if(!empty($project['live_url']))
                    <a href="{{ $project['live_url'] }}" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       class="flex-1 inline-flex items-center justify-center gap-1.5 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white text-xs font-semibold py-2.5 px-3 rounded-xl shadow-sm transition duration-200">
                        <span>Preview</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </a>
                    <button type="button" 
                            onclick="openProjectModal({{ $project['id'] }})"
                            class="inline-flex items-center justify-center gap-1 bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white text-xs font-semibold py-2.5 px-3 rounded-xl border border-slate-700 transition duration-200"
                            title="Detail Proyek">
                        <i class="fa-solid fa-circle-info text-xs"></i>
                        <span>Detail</span>
                    </button>
                @else
                    <button type="button" 
                            onclick="openProjectModal({{ $project['id'] }})"
                            class="flex-1 inline-flex items-center justify-center gap-1.5 bg-slate-800 hover:bg-indigo-600 hover:text-white text-slate-200 text-xs font-semibold py-2.5 px-3 rounded-xl border border-slate-700 transition duration-200">
                        <span>Detail Proyek</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                @endif
                <a href="https://wa.me/{{ $profile['whatsapp'] }}?text={{ urlencode($project['whatsapp_msg']) }}" 
                   target="_blank"
                   class="p-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-emerald-400 border border-slate-700 transition"
                   title="Diskusi via WhatsApp">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                </a>
            </div>
        </div>
    </div>

</div>
