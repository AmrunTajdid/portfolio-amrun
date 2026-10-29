<!-- Modal Pop-Up Dialog -->
<div id="projectModal" 
     class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 sm:p-6 overflow-y-auto"
     aria-modal="true" 
     role="dialog">
    
    <!-- Backdrop Blur Overlay -->
    <div class="fixed inset-0 bg-[#070b14]/90 backdrop-blur-md transition-opacity duration-300 opacity-0" 
         id="modalBackdrop" 
         onclick="closeProjectModal()"></div>

    <!-- Modal Card Box -->
    <div class="relative w-full max-w-3xl bg-[#0f172a] border border-slate-700/80 rounded-3xl shadow-2xl overflow-hidden z-10 transform transition-all duration-300 scale-95 opacity-0 my-8"
         id="modalContentBox">
        
        <!-- Modal Top Bar -->
        <div class="px-6 py-4 bg-slate-900/80 border-b border-slate-800 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-indigo-400"></span>
                <span class="text-xs font-semibold text-slate-300 font-heading" id="modalSlug">project-details</span>
            </div>
            <button type="button" 
                    onclick="closeProjectModal()" 
                    class="w-8 h-8 rounded-full bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white flex items-center justify-center transition"
                    aria-label="Tutup Modal">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
        </div>

        <!-- Scrollable Modal Body -->
        <div class="p-6 sm:p-8 max-h-[80vh] overflow-y-auto space-y-6">
            
            <!-- Large Image Preview -->
            <div class="rounded-2xl overflow-hidden bg-[#070b14] border border-slate-800 relative aspect-[16/9]">
                <img id="modalImage" 
                     src="" 
                     alt="" 
                     class="w-full h-full object-cover object-top">
            </div>

            <!-- Title & Badge -->
            <div class="space-y-2">
                <div class="flex flex-wrap items-center gap-2">
                    <span id="modalBadge" class="text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full border"></span>
                    <span id="modalClientType" class="text-xs font-semibold text-indigo-400 font-heading"></span>
                </div>
                <h3 id="modalTitle" class="text-2xl sm:text-3xl font-heading font-black text-white tracking-tight"></h3>
                <p id="modalSummary" class="text-slate-300 text-sm leading-relaxed"></p>
            </div>

            <!-- The Challenge & Solution Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-5 rounded-2xl bg-slate-900/60 border border-slate-800 space-y-2">
                    <div class="flex items-center gap-2 text-rose-400 font-bold text-xs uppercase tracking-wider">
                        <i class="fa-solid fa-triangle-exclamation text-xs"></i>
                        <span>Tantangan Proyek</span>
                    </div>
                    <p id="modalChallenge" class="text-slate-400 text-xs leading-relaxed"></p>
                </div>
                <div class="p-5 rounded-2xl bg-slate-900/60 border border-slate-800 space-y-2">
                    <div class="flex items-center gap-2 text-emerald-400 font-bold text-xs uppercase tracking-wider">
                        <i class="fa-solid fa-lightbulb text-xs"></i>
                        <span>Solusi Arsitektur</span>
                    </div>
                    <p id="modalSolution" class="text-slate-400 text-xs leading-relaxed"></p>
                </div>
            </div>

            <!-- Key Features List -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold text-indigo-300 uppercase tracking-wider font-heading">
                    Fitur &amp; Kemampuan Utama:
                </h4>
                <ul id="modalFeatures" class="space-y-2.5">
                    <!-- Injected via JavaScript -->
                </ul>
            </div>

            <!-- Technology Stack -->
            <div class="space-y-2 pt-2 border-t border-slate-800">
                <span class="text-xs text-slate-400 font-semibold">Teknologi &amp; Pustaka:</span>
                <div id="modalTags" class="flex flex-wrap gap-1.5">
                    <!-- Injected via JavaScript -->
                </div>
            </div>

        </div>

        <!-- Modal Footer Actions -->
        <div class="px-6 py-4 bg-slate-900/80 border-t border-slate-800 flex flex-wrap items-center justify-between gap-3">
            <span class="text-xs text-slate-400">
                Tertarik menerapkan solusi serupa?
            </span>
            <div class="flex items-center gap-3">
                <button type="button" 
                        onclick="closeProjectModal()" 
                        class="px-4 py-2 text-xs font-semibold text-slate-400 hover:text-white rounded-xl transition">
                    Tutup
                </button>
                <a id="modalWhatsAppBtn" 
                   href="#" 
                   target="_blank" 
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-400 hover:to-teal-400 text-slate-950 text-xs font-bold px-5 py-2.5 rounded-xl shadow-lg shadow-emerald-500/25 transition-all hover:scale-105">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    <span>Tanya Terkait Proyek Ini</span>
                </a>
            </div>
        </div>

    </div>
</div>

@push('scripts')
<script>
    const PROJECTS_DATABASE = @json($allProjects);
    const USER_WHATSAPP = @json($profile['whatsapp']);

    const modal = document.getElementById('projectModal');
    const backdrop = document.getElementById('modalBackdrop');
    const contentBox = document.getElementById('modalContentBox');

    function openProjectModal(projectId) {
        const project = PROJECTS_DATABASE.find(p => p.id === projectId);
        if (!project) return;

        document.getElementById('modalSlug').innerText = (project.slug || 'project');
        document.getElementById('modalImage').src = '{{ asset("") }}' + project.image;
        document.getElementById('modalImage').alt = project.title;

        const badgeEl = document.getElementById('modalBadge');
        badgeEl.innerText = project.badge;
        badgeEl.className = 'text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full border ' + (project.badge_color || 'bg-slate-800 text-slate-300 border-slate-700');

        document.getElementById('modalClientType').innerText = project.client_type;
        document.getElementById('modalTitle').innerText = project.title;
        document.getElementById('modalSummary').innerText = project.summary;
        document.getElementById('modalChallenge').innerText = project.the_challenge || 'Kebutuhan solusi digital modern yang responsif dan berkinerja tinggi.';
        document.getElementById('modalSolution').innerText = project.the_solution || 'Mengimplementasikan arsitektur Laravel dan antarmuka web modern yang solid.';

        const featuresContainer = document.getElementById('modalFeatures');
        featuresContainer.innerHTML = '';
        if (project.features && project.features.length > 0) {
            project.features.forEach(feat => {
                const li = document.createElement('li');
                li.className = 'flex items-start gap-2.5 text-xs text-slate-300 leading-relaxed';
                li.innerHTML = '<i class="fa-solid fa-circle-check text-emerald-400 mt-0.5 text-xs"></i> <span>' + feat + '</span>';
                featuresContainer.appendChild(li);
            });
        }

        const tagsContainer = document.getElementById('modalTags');
        tagsContainer.innerHTML = '';
        if (project.tags && project.tags.length > 0) {
            project.tags.forEach(t => {
                const span = document.createElement('span');
                span.className = 'text-[11px] font-medium bg-slate-900 text-slate-300 px-2.5 py-1 rounded-md border border-slate-700';
                span.innerText = t;
                tagsContainer.appendChild(span);
            });
        }

        const waMsg = encodeURIComponent(project.whatsapp_msg || ('Halo Amrun, saya tertarik dengan proyek ' + project.title));
        document.getElementById('modalWhatsAppBtn').href = 'https://wa.me/' + USER_WHATSAPP + '?text=' + waMsg;

        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');

        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            backdrop.classList.add('opacity-100');
            contentBox.classList.remove('scale-95', 'opacity-0');
            contentBox.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeProjectModal() {
        backdrop.classList.remove('opacity-100');
        backdrop.classList.add('opacity-0');
        contentBox.classList.remove('scale-100', 'opacity-100');
        contentBox.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }, 220);
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeProjectModal();
        }
    });
</script>
@endpush
