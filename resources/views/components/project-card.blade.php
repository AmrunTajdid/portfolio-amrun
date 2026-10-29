<div class="project-card rounded-3xl modern-card overflow-hidden flex flex-col justify-between group"
     data-categories="{{ implode(' ', $project['categories'] ?? [$project['category']]) }}">
    
    <!-- Top Header -->
    <div class="px-5 py-3.5 bg-slate-900/60 border-b border-slate-800 flex items-center justify-between text-xs">
        <span class="font-semibold text-slate-300 text-[11px] truncate max-w-[170px]">
            {{ $project['client_type'] }}
        </span>
        <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-0.5 rounded-full border {{ $project['badge_color'] ?? 'bg-slate-800 text-slate-300 border-slate-700' }}">
            {{ $project['badge'] }}
        </span>
    </div>

    <!-- Image Area -->
    <div class="relative aspect-[16/10] bg-[#070b14] overflow-hidden border-b border-slate-800">
        <img src="{{ asset($project['image']) }}?v={{ @filemtime(public_path($project['image'])) }}" 
             alt="{{ $project['title'] }}" 
             class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105"
             loading="lazy">
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
                <button type="button" 
                        onclick="openProjectModal({{ $project['id'] }})"
                        class="flex-1 inline-flex items-center justify-center gap-1.5 bg-slate-800 hover:bg-indigo-600 hover:text-white text-slate-200 text-xs font-semibold py-2.5 px-3 rounded-xl border border-slate-700 transition duration-200">
                    <span>Detail Proyek</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </button>
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
