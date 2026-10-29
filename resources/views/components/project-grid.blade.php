<section id="semua-proyek" class="py-14 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    
    <!-- Section Header in Outfit font & Filter Controls -->
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6">
        <div>
            <div class="text-xs font-semibold uppercase tracking-wider text-indigo-400 mb-1 flex items-center gap-1.5">
                <span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span>
                ARSIP KARYA LENGKAP
            </div>
            <h2 class="text-2xl sm:text-3xl font-heading font-black text-white tracking-tight">
                Seluruh Portofolio &amp; <span class="bg-gradient-to-r from-blue-400 via-indigo-300 to-teal-300 bg-clip-text text-transparent">Katalog Sistem</span>
            </h2>
        </div>

        <!-- Category Filter Tabs -->
        <div class="flex flex-wrap items-center gap-1.5 bg-slate-900/90 p-1.5 rounded-2xl border border-slate-800 backdrop-blur-md" id="filterBtnGroup">
            @foreach($categories as $key => $name)
            <button type="button" 
                    onclick="filterCategory('{{ $key }}', this)"
                    class="filter-btn px-4 py-2 text-xs font-semibold rounded-xl transition duration-200 {{ $key === 'all' ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-md shadow-indigo-600/25' : 'text-slate-400 hover:text-white hover:bg-slate-800' }}">
                {{ $name }}
            </button>
            @endforeach
        </div>
    </div>

    <!-- 3-Column Responsive Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="projectsContainer">
        @foreach($allProjects as $project)
            @include('components.project-card', ['project' => $project])
        @endforeach
    </div>

    <!-- Empty State -->
    <div id="noProjectAlert" class="hidden text-center py-16 bg-slate-900/40 rounded-3xl border border-slate-800">
        <i class="fa-solid fa-folder-open text-3xl text-slate-500 mb-3"></i>
        <h3 class="text-sm font-semibold text-white font-heading">Tidak ada proyek dalam kategori ini</h3>
        <p class="text-xs text-slate-400 mt-1">Silakan pilih kategori lain di atas.</p>
    </div>

</section>

@push('scripts')
<script>
    function filterCategory(categoryKey, clickedBtn) {
        const buttons = document.querySelectorAll('.filter-btn');
        buttons.forEach(btn => {
            btn.className = 'filter-btn px-4 py-2 text-xs font-semibold rounded-xl transition duration-200 text-slate-400 hover:text-white hover:bg-slate-800';
        });
        clickedBtn.className = 'filter-btn px-4 py-2 text-xs font-semibold rounded-xl transition duration-200 bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-md shadow-indigo-600/25';

        const cards = document.querySelectorAll('.project-card');
        let visibleCount = 0;

        cards.forEach(card => {
            const cardCategories = (card.getAttribute('data-categories') || '').split(' ');
            if (categoryKey === 'all' || cardCategories.includes(categoryKey)) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        const alert = document.getElementById('noProjectAlert');
        if (visibleCount === 0) {
            alert.classList.remove('hidden');
        } else {
            alert.classList.add('hidden');
        }
    }
</script>
@endpush
