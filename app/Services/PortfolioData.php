<?php

namespace App\Services;

class PortfolioData
{
    /**
     * Dapatkan data profil lengkap pengembang
     */
    public static function getProfile(): array
    {
        return [
            'name' => 'Amrun Tajdid, S.T.',
            'badge_title' => 'Web Developer & Tech Enthusiast',
            'headline' => 'Membangun Aplikasi Web Modern, Skalabel, dan Sistem Berorientasi Solusi.',
            'subheadline' => 'Spesialis dalam arsitektur backend Laravel yang bersih, sistem database terstruktur, dan antarmuka web performa tinggi untuk sistem manajemen dan landing page konversi periklanan.',
            'status' => 'Tersedia untuk Proyek Baru & Kolaborasi',
            'status_active' => true,
            'whatsapp' => '6281295340314',
            'email' => 'tajdidamaramrun@gmail.com',
            'github' => 'https://github.com/AmrunTajdid',
            'linkedin' => 'https://linkedin.com/in/amar-amrun-tajdid-544984431/',
            'instagram' => 'https://instagram.com/amarhar20',
            'avatar' => 'images/profile.jpeg',
            'stats' => [
                [
                    'value' => '9+',
                    'label' => 'Proyek Siap Produksi',
                    'sub' => 'Web App & Landing Page'
                ],
                [
                    'value' => 'Laravel 12',
                    'label' => 'Spesialisasi Backend',
                    'sub' => 'Clean Architecture & API'
                ],
                [
                    'value' => '100%',
                    'label' => 'Responsive Design',
                    'sub' => 'Mobile-First & Clean UI'
                ],
            ]
        ];
    }

    /**
     * Dapatkan daftar kategori proyek
     */
    public static function getCategories(): array
    {
        return [
            'all' => 'Semua Proyek',
            'web-app' => 'Aplikasi Web & Sistem',
            'landing-page' => 'Landing Page & Iklan',
            'fintech' => 'Keuangan & Proteksi',
        ];
    }

    /**
     * Dapatkan keahlian teknis terstruktur
     */
    public static function getSkills(): array
    {
        return [
            [
                'title' => 'Backend Engineering',
                'icon' => 'fa-brands fa-laravel',
                'color' => 'text-red-500',
                'bg' => 'bg-red-500/10 border-red-500/20',
                'description' => 'Membangun arsitektur server yang skalabel, RESTful API terstandarisasi, dan keamanan data.',
                'tags' => ['Laravel 12', 'PHP 8.2+', 'RESTful API', 'MySQL Database', 'Eloquent ORM', 'Session & Auth Architecture']
            ],
            [
                'title' => 'Modern Frontend & UI',
                'icon' => 'fa-solid fa-code',
                'color' => 'text-indigo-400',
                'bg' => 'bg-indigo-500/10 border-indigo-500/20',
                'description' => 'Merancang antarmuka cepat, elegan, bebas kesan template AI klise, dan responsif lintas perangkat.',
                'tags' => ['Tailwind CSS', 'Blade Component', 'JavaScript (ES6+)', 'Alpine.js', 'Chart.js Visual', 'Vite Bundler']
            ],
            [
                'title' => 'Conversion & High-Impact Ads',
                'icon' => 'fa-solid fa-chart-line',
                'color' => 'text-emerald-400',
                'bg' => 'bg-emerald-500/10 border-emerald-500/20',
                'description' => 'Optimasi kecepatan muat, struktur copywriting berbasis kepercayaan, dan integrasi WhatsApp conversion.',
                'tags' => ['Google Ads Landing Page', 'Meta Ads Ready', 'WebP Asset Optimization', 'GTM & Event Tracking', 'Mobile-First UX']
            ],
            [
                'title' => 'Workflow & Deployment',
                'icon' => 'fa-solid fa-server',
                'color' => 'text-amber-400',
                'bg' => 'bg-amber-500/10 border-amber-500/20',
                'description' => 'Manajemen kode sumber, pengujian terstruktur, serta penerapan aplikasi ke server produksi.',
                'tags' => ['Git & GitHub', 'Postman API Testing', 'XAMPP Local Server', 'Vercel / Shared Hosting', 'Composer & NPM']
            ],
        ];
    }

    /**
     * Dapatkan seluruh data proyek
     */
    public static function getProjects(): array
    {
        return [
            // PROYEK 1: KEUANGAN KELUARGA (FEATURED)
            [
                'id' => 1,
                'slug' => 'keuangan-keluarga',
                'title' => 'KeuanganKeluarga — Smart Financial Budgeting',
                'client_type' => 'Full-Stack Web Application',
                'category' => 'web-app',
                'categories' => ['web-app', 'fintech'],
                'badge' => '⭐ Featured Web App',
                'badge_color' => 'bg-emerald-500/15 text-emerald-400 border-emerald-500/30',
                'image' => 'images/projects/keuangan-keluarga.svg',
                'summary' => 'Aplikasi web manajemen finansial keluarga dengan 4 kartu ringkasan kekayaan real-time, grafik arus kas 6 bulan, pelacak budget per kategori, multi-rekening/e-wallet, target tabungan, dan laporan PDF siap cetak.',
                'the_challenge' => 'Banyak rumah tangga kesulitan melacak keluar-masuk dana yang tersebar di berbagai rekening bank dan dompet digital, memicu kebocoran pengeluaran serta gagalnya target tabungan masa depan.',
                'the_solution' => 'Membangun aplikasi terintegrasi dengan visualisasi Chart.js interaktif, sistem multi-dompet (BCA, BSI, E-Wallet), perencanaan anggaran bulanan dengan fitur "Salin dari Bulan Lalu", dan penghitungan otomatis savings rate.',
                'features' => [
                    'Dashboard Visual Arus Kas: 4 kartu ringkasan kekayaan & net cashflow bulanan.',
                    'Grafik Tren 6 Bulan (Bar Chart) & Proporsi Pengeluaran Kategori (Donut Chart) via Chart.js.',
                    'Pencatatan 3 Arus Dana: Pemasukan (+), Pengeluaran (-), dan Transfer Antar Rekening (⇄).',
                    'Budget Planner Bulanan dengan batas alokasi & peringatan visual jika over-budget.',
                    'Dompet & Multi-Kas: Kelola rekening bank, brankas fisik, dan saldo e-wallet terpusat.',
                    'Target Tabungan Impian (Savings Goals) lengkap dengan visual progress bar persentase.',
                    'Multi-Anggota Keluarga (Ayah, Ibu, Anak) & Laporan Finansial Siap Cetak PDF.'
                ],
                'tags' => ['Laravel 12', 'Tailwind CSS', 'Chart.js', 'MySQL', 'Alpine.js', 'PDF Export'],
                'featured' => true,
                'col_span' => 'lg:col-span-2',
                'whatsapp_msg' => 'Halo Amrun, saya tertarik dengan aplikasi Keuangan Keluarga yang Anda bangun. Bisakah kita berdiskusi lebih lanjut?'
            ],

            // PROYEK 2: HAJJ CLUB (FEATURED)
            [
                'id' => 2,
                'slug' => 'hajj-club',
                'title' => 'Hajj Club — Platform Kemitraan Travel Haji',
                'client_type' => 'High-Converting Landing Page',
                'category' => 'landing-page',
                'categories' => ['landing-page'],
                'badge' => '⭐ Google Ads High-Converting',
                'badge_color' => 'bg-amber-500/15 text-amber-400 border-amber-500/30',
                'image' => 'images/projects/hajjclub.webp',
                'logo' => 'images/projects/hajjclub-logo.png',
                'summary' => 'Landing page eksklusif untuk platform kemitraan biro travel haji bersama, dirancang spesifik untuk kebutuhan Google Ads berkonversi tinggi dengan arsitektur visual Navy & Gold yang prestisius.',
                'the_challenge' => 'Iklan berbayar Google Ads membutuhkan halaman yang memuat di bawah 2 detik pada perangkat mobile dan mampu membangun kepercayaan calon investor kemitraan haji dalam beberapa detik pertama.',
                'the_solution' => 'Mengembangkan landing page modular dengan Tailwind CSS via Vite, optimasi gambar WebP berbobot ringan, penegasan Unique Value Proposition (Ownership, Transparan, Berkelanjutan), dan tombol WhatsApp konversi instan.',
                'features' => [
                    'Arsitektur Kecepatan Tinggi (Mobile-First) untuk Optimasi Quality Score Google Ads.',
                    'Palet Warna Prestisius: Deep Navy (#080c17) & Royal Gold (#d4af37) dengan font serif elegan.',
                    'Komponen UVP Terstruktur: Kepemilikan bersama, sistem transparan, dan proteksi legalitas.',
                    'Pemisahan Benefit: Legal Benefit (Payung Hukum) & Priority Benefit bagi mitra.',
                    'Pelacakan Konversi WhatsApp yang terhubung rapi ke event Google Tag Manager / GA4.'
                ],
                'tags' => ['Laravel 12', 'Tailwind CSS', 'Alpine.js', 'Vite', 'Google Ads Ready', 'WebP'],
                'featured' => true,
                'col_span' => 'lg:col-span-1',
                'whatsapp_msg' => 'Halo Amrun, saya tertarik dengan implementasi Landing Page Hajj Club yang Anda kembangkan untuk kebutuhan promosi/iklan.'
            ],

            // PROYEK 3: AMANAH PROTECTION (FEATURED)
            [
                'id' => 3,
                'slug' => 'amanah',
                'title' => 'AMANAH — Umroh & Hajj Protection',
                'client_type' => 'Landing Page & FinTech Safety',
                'category' => 'landing-page',
                'categories' => ['landing-page', 'fintech'],
                'badge' => '⭐ Escrow & Dana Terproteksi',
                'badge_color' => 'bg-emerald-500/15 text-emerald-400 border-emerald-500/30',
                'image' => 'images/projects/amanah.webp',
                'logo' => 'images/projects/amanah-logo.png',
                'summary' => 'Website proteksi dana jamaah haji dan umroh PT Amanah Haramain International dengan layout Split Luxury Islami, verifikasi legalitas NIB/Kemenkumham, simulasi kalkulator, dan lead capture WhatsApp.',
                'the_challenge' => 'Tingginya kekhawatiran masyarakat terhadap penipuan biro travel umroh memerlukan antarmuka yang membuktikan secara konkret keamanan dana, legalitas resmi, dan rekening penampung bank syariah.',
                'the_solution' => 'Menerapkan 3 Pilar Legitimasi nyata, kalkulator estimasi proteksi dana, tata letak Split Luxury dengan bingkai arsitektur kubah Islami, serta tombol WhatsApp instan dengan pra-isi nama paket yang dipilih.',
                'features' => [
                    'Split Luxury Layout: Kolaborasi warna Emerald Green (#0D3B36) dan Royal Metallic Gold.',
                    'Formulir Konsultasi Cepat di Hero dengan Auto-Redirect ke WhatsApp resmi tim penjamin.',
                    '3 Pilar Kredibilitas: Nomor NIB, Keputusan SK Kemenkumham RI, & Rekening Bank Syariah.',
                    'Kalkulator Simulasi Proteksi Dana Jamaah Interaktif yang mudah dipahami calon jamaah.',
                    'Floating Sticky WhatsApp Bar khusus layar smartphone untuk mempermudah kontak darurat.'
                ],
                'tags' => ['Laravel 12', 'Tailwind CSS', 'JavaScript', 'Fintech Protection', 'Lead Capture'],
                'featured' => true,
                'col_span' => 'lg:col-span-1',
                'whatsapp_msg' => 'Halo Amrun, saya ingin berkonsultasi mengenai pembuatan Landing Page Keuangan/Proteksi Dana seperti Amanah.'
            ],

            // PROYEK 4: MAZIAH TOUR (FEATURED)
            [
                'id' => 4,
                'slug' => 'maziah',
                'title' => 'Maziah Tour & Travel — Umroh Rasa Keluarga',
                'client_type' => 'Landing Page Biro Umroh Resmi',
                'category' => 'landing-page',
                'categories' => ['landing-page'],
                'badge' => '⭐ Kemenag RI Certified',
                'badge_color' => 'bg-indigo-500/15 text-indigo-400 border-indigo-500/30',
                'image' => 'images/projects/maziah.jpg',
                'logo' => 'images/projects/maziah-logo.png',
                'summary' => 'Landing page biro umroh resmi Kemenag RI (PT Marhaban JAWLA MUBAROKAH) dengan positioning "Layanan Umroh Rasa Keluarga", transparansi penerbangan Qatar/Saudia, hotel pelataran, dan kantor fisik Jabodetabek.',
                'the_challenge' => 'Calon jamaah dari iklan Google/Meta Ads sangat selektif dan waspada terhadap travel bodong; membutuhkan bukti otentik dokumentasi jamaah asli dan transparansi maskapai/hotel tanpa foto stok AI.',
                'the_solution' => 'Menyajikan dokumentasi asli jamaah lansia & keluarga di depan Ka\'bah, rincian transparan 3 paket utama (Awal Tahun 12H, Ramadhan 15H, Full Ramadhan 32H), peta lokasi kantor fisik Bekasi, dan lead capture WA.',
                'features' => [
                    'Dokumentasi Asli Jamaah di Baitullah (Bebas Foto Stok Generik / Ilustrasi AI Kartun).',
                    'Transparansi Maskapai Bintang Lima: Qatar Airways & Saudia Airlines direct/transit nyaman.',
                    'Rincian Hotel Pelataran Sangat Dekat dengan Masjidil Haram & Nabawi untuk kenyamanan lansia.',
                    'Otoritas Kantor Fisik Nyata: Lokasi Jalan Bambu Kuning I, Bekasi dengan integrasi Google Maps.',
                    'Formulir Cepat Terintegrasi WhatsApp + Skrip Pelacakan Google Ads & Meta Pixel.'
                ],
                'tags' => ['Laravel 12', 'Tailwind CSS', 'Responsive UI', 'WhatsApp Leads', 'SEO Authority'],
                'featured' => true,
                'col_span' => 'lg:col-span-2',
                'whatsapp_msg' => 'Halo Amrun, saya ingin bertanya tentang pembuatan Landing Page Travel & Haji Khusus seperti Maziah Tour.'
            ],

            // PROYEK 5: TODOLIST LARAVEL
            [
                'id' => 5,
                'slug' => 'todolist',
                'title' => 'Sistem Todolist Laravel',
                'client_type' => 'Aplikasi Web Manajemen Tugas',
                'category' => 'web-app',
                'categories' => ['web-app'],
                'badge' => 'Core Web App',
                'badge_color' => 'bg-slate-700/50 text-slate-300 border-slate-600/50',
                'image' => 'images/projects/todolist.jpeg',
                'summary' => 'Aplikasi manajemen tugas harian berbasis session dan layanan berorientasi objek di Laravel dengan arsitektur kode bersih dan validasi data terstruktur.',
                'the_challenge' => 'Membangun aplikasi ringan yang efisien untuk mengelola state tugas harian pengguna tanpa overhead database berlebih.',
                'the_solution' => 'Menerapkan Clean Architecture dengan Service Layer dan Repository Pattern berbasis session di Laravel.',
                'features' => [
                    'Manajemen Tugas Harian (Tambah, Selesai, Hapus, Filter).',
                    'Session-based State Storage dengan Enkripsi Laravel.',
                    'Validasi Form Ketat dengan Pesan Error Dinamis.'
                ],
                'tags' => ['Laravel', 'PHP 8.2', 'OOP Service', 'Session Management'],
                'featured' => false,
                'col_span' => 'lg:col-span-1',
                'whatsapp_msg' => 'Halo Amrun, saya ingin berdiskusi mengenai proyek Sistem Todolist Laravel.'
            ],

            // PROYEK 6: PT KHAIRA BERKAH MANDIRI
            [
                'id' => 6,
                'slug' => 'khaira',
                'title' => 'PT Khaira Berkah Mandiri',
                'client_type' => 'Landing Page Travel Haji & Umroh',
                'category' => 'landing-page',
                'categories' => ['landing-page'],
                'badge' => 'Travel Agency',
                'badge_color' => 'bg-slate-700/50 text-slate-300 border-slate-600/50',
                'image' => 'images/projects/khaira.jpeg',
                'summary' => 'Landing page agen travel umrah dan haji yang responsif dan modern, menyajikan katalog penawaran paket ibadah dan saluran komunikasi langsung calon jamaah.',
                'the_challenge' => 'Memudahkan calon jamaah memahami katalog paket umroh musiman dari layar smartphone dengan navigasi yang mudah.',
                'the_solution' => 'Mengembangkan layout modern dengan Tailwind CSS yang berfokus pada kemudahan akses paket dan tombol kontak cepat.',
                'features' => [
                    'Katalog Paket Umrah & Haji Responsif.',
                    'Integrasi WhatsApp Konsultasi Cepat.',
                    'Navigasi Ramah Perangkat Seluler.'
                ],
                'tags' => ['Laravel', 'Tailwind CSS', 'Responsive UI', 'Travel Agency'],
                'featured' => false,
                'col_span' => 'lg:col-span-1',
                'whatsapp_msg' => 'Halo Amrun, saya ingin menanyakan tentang landing page PT Khaira Berkah Mandiri.'
            ],

            // PROYEK 7: KEMENAG JAKARTA TIMUR
            [
                'id' => 7,
                'slug' => 'kemenag',
                'title' => 'KEMENAG Jakarta Timur',
                'client_type' => 'Sistem Pendaftaran Haji Online',
                'category' => 'web-app',
                'categories' => ['web-app'],
                'badge' => 'Government System',
                'badge_color' => 'bg-slate-700/50 text-slate-300 border-slate-600/50',
                'image' => 'images/projects/kemenag.jpeg',
                'summary' => 'Aplikasi pendaftaran haji online terintegrasi untuk memudahkan proses pendaftaran dan verifikasi berkas bagi calon jamaah di wilayah Jakarta Timur.',
                'the_challenge' => 'Proses pendaftaran manual membutuhkan banyak waktu verifikasi berkas fisik dan menyulitkan pelacakan status berkas.',
                'the_solution' => 'Membangun aplikasi formulir berbasis web dengan validasi dokumen digital dan sistem antrian terstruktur.',
                'features' => [
                    'Formulir Registrasi Haji Lengkap Berkas Digital.',
                    'Validasi Syarat Administrasi Online.',
                    'Manajemen Data Calon Jamaah Terpadu.'
                ],
                'tags' => ['Laravel', 'MySQL', 'Full-Stack', 'Gov Service', 'Document Verification'],
                'featured' => false,
                'col_span' => 'lg:col-span-1',
                'whatsapp_msg' => 'Halo Amrun, saya tertarik dengan arsitektur sistem pendaftaran Kemenag yang Anda bangun.'
            ],

            // PROYEK 8: PT MULTAZAM SINAR SURYA
            [
                'id' => 8,
                'slug' => 'multazam',
                'title' => 'PT Multazam Sinar Surya',
                'client_type' => 'Aplikasi Pendaftaran Haji & Umrah',
                'category' => 'web-app',
                'categories' => ['web-app'],
                'badge' => 'Enterprise Travel App',
                'badge_color' => 'bg-slate-700/50 text-slate-300 border-slate-600/50',
                'image' => 'images/projects/multazam.jpeg',
                'summary' => 'Aplikasi pendaftaran haji & umrah online yang mempermudah proses pendaftaran, pemilihan paket, dan pencatatan berkas jamaah.',
                'the_challenge' => 'Pengelolaan data keberangkatan jamaah dalam jumlah besar membutuhkan pencatatan paspor, visa, dan paket dalam satu sistem terpusat.',
                'the_solution' => 'Mengembangkan web app terintegrasi untuk pendataan calon jamaah, pemilihan paket, dan pencatatan berkas administrasi.',
                'features' => [
                    'Pendaftaran Jamaah Online Mandiri.',
                    'Manajemen Dokumen Paspor & Visa Jamaah.',
                    'Integrasi Pemilihan Paket Haji & Umrah.'
                ],
                'tags' => ['Laravel', 'MySQL', 'REST API', 'Enterprise Travel'],
                'featured' => false,
                'col_span' => 'lg:col-span-1',
                'whatsapp_msg' => 'Halo Amrun, saya ingin mendiskusikan aplikasi pendaftaran haji & umrah seperti Multazam.'
            ],

            // PROYEK 9: PERSONAL PORTFOLIO WEBSITE
            [
                'id' => 9,
                'slug' => 'portfolio',
                'title' => 'Personal Portfolio Website',
                'client_type' => 'Modern Portfolio Showcase',
                'category' => 'web-app',
                'categories' => ['web-app'],
                'badge' => 'Personal Branding',
                'badge_color' => 'bg-slate-700/50 text-slate-300 border-slate-600/50',
                'image' => 'images/projects/portfolio.jpeg',
                'summary' => 'Website portofolio profesional Amrun Tajdid, S.T. yang dirancang dengan konsep Bento Grid modern, data terstruktur tanpa ketergantungan database (Zero-DB), dan bebas klise AI.',
                'the_challenge' => 'Membuat wadah personal branding yang elegan, cepat diakses, mudah dipelihara tanpa database, dan mampu menampilkan rekam jejak proyek dengan kredibilitas tinggi.',
                'the_solution' => 'Menggunakan Laravel 12 dengan Blade Components modular, Service Data Provider, Tailwind CSS, dan sistem modal detail interaktif.',
                'features' => [
                    'Arsitektur Bento Grid Modern & Anti-AI Cliché.',
                    'Penyedia Data Terstruktur (Zero-DB Deployment Ready).',
                    'Filter Proyek Dinamis & Modal Pop-Up Interaktif.'
                ],
                'tags' => ['Laravel 12', 'Tailwind CSS', 'Blade Components', 'Zero-DB Architecture'],
                'featured' => false,
                'col_span' => 'lg:col-span-1',
                'whatsapp_msg' => 'Halo Amrun, saya melihat website portofolio Anda dan ingin mendiskusikan peluang kerja sama proyek.'
            ],
        ];
    }
}
