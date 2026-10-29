# 📋 Issue: Modernisasi Portfolio Website Amrun Tajdid, S.T. (Anti-AI Cliché, Modern Bento Grid & Laravel 12)

> **Status:** Disetujui & Dikunci Melalui Sesi `/grill-me`  
> **Tanggal Pembaruan:** 29 Oktober 2026  
> **Pengembang:** Amrun Tajdid, S.T.  
> **Gaya Desain:** *Modern Bento Grid & Editorial Tech* (Inspirasi: Linear & Apple Design, Bebas Efek Klise AI)  
> **Framework Target:** Laravel 12 + Blade Components + Tailwind CSS  
> **Lokasi Project:** `C:\xampp\htdocs\portfolio-amrun`  

---

## 1. 🎯 Visi & Hasil Keputusan Desain (Sesi `/grill-me`)

Berdasarkan kesepakatan sesi wawancara mendalam `/grill-me`, portofolio ini akan mengalami transformasi menyeluruh dari template sederhana menjadi sebuah showcase kelas profesional:

### A. Anti-AI Template & Estetika "Bento Grid Editorial"
- **Menghindari Klise AI:** Menolak penggunaan gradasi ungu-pink neon generik, partikel animasi kosong, teks klise AI (*"Membuka potensi masa depan"*), atau kartu generik tanpa substansi.
- **Konsep Tampilan Modern:** Mengusung tata letak **Bento Grid** modular (seperti Linear/Apple) dengan pembagian area visual yang presisi, bingkai browser/mockup nyata (*browser window with macOS dots*), tipografi tajam (*Plus Jakarta Sans* / *Inter*), latar belakang *Deep Slate & Obsidian* (`#0a0e17` & `#0f172a`), serta aksen warna terarah (*Emerald Tech* `#10b981` & *Royal Indigo* `#6366f1`).
- **Mikro-Interaksi Halus:** Efek hover kartu dengan pencahayaan tepi (*subtle border highlight*), transisi bayangan lembut, dan animasi *smooth-scroll*.

### B. Struktur Showcase Proyek (Featured Bento + Filterable Grid)
- **4 Proyek Unggulan Baru (Featured Hero Bento):** Ditampilkan dengan kartu berukuran dinamis yang kaya visual dan menonjolkan nilai bisnis & solusi teknis:
  1. 💰 **Keuangan Keluarga** — Kartu Bento Utama (Visual dashboard analitik, arsitektur pencatatan kas multi-rekening & budget planner).
  2. 🕋 **Hajj Club** — Kartu Kemitraan & Bisnis (Platform kepemilikan travel haji & optimasi konversi Google Ads).
  3. 🛡️ **Amanah (PT Amanah Haramain International)** — Kartu FinTech & Proteksi Dana (Simulasi dana jamaah di bank syariah & direct lead capture WhatsApp).
  4. ✈️ **Maziah Tour & Travel** — Kartu Layanan Umroh Rasa Keluarga (Transparansi paket hotel/maskapai bintang lima & otoritas kantor fisik).
- **5 Proyek Pendukung (Interactive Grid):** Disusun dalam grid responsif di bawahnya dengan filter tab instan (*Semua*, *Aplikasi Web & Sistem*, *Landing Page & Iklan*, *Keuangan & Proteksi*).
  - Sistem Todolist Laravel
  - PT Khaira Berkah Mandiri
  - KEMENAG Jakarta Timur (Pendaftaran Haji Online)
  - PT Multazam Sinar Surya (Pendaftaran Haji & Umrah Online)
  - Personal Portfolio Website

### C. Mekanisme Eksplorasi (Interactive Modal / Drawer)
- Ketika kartu proyek diklik, muncul **Modal Pop-up Modern** (bebas reload halaman):
  - Screenshot resolusi tinggi / mockup bingkai aplikasi.
  - Ringkasan masalah (*The Challenge*) & solusi teknis (*The Solution*).
  - Daftar fitur utama yang dikembangkan (*Key Features*).
  - Tech stack badges (*Laravel 12, Tailwind CSS, Chart.js, MySQL, REST API, dll*).
  - Tombol aksi instan: *"Tanya Terkait Proyek Ini via WhatsApp"* (membuka WhatsApp dengan pesan otomatis terformat spesifik mengenai proyek tersebut) dan tautan demo/repository jika tersedia.

### D. Arsitektur Data Laravel Tanpa Ketergantungan Database (*Zero-DB Dependency*)
- Seluruh data portofolio (profil, statistik, keahlian, dan 9 detail proyek) dikelola secara terstruktur melalui Service Class / Data Provider: `app/Services/PortfolioData.php`.
- **Keuntungan:** Sangat cepat (*high performance*), tidak membutuhkan konfigurasi database saat di-deploy (cocok untuk Vercel, shared hosting cPanel, atau VPS), serta riwayat data tersimpan rapi dalam Git version control.

### E. Personal Branding & Kredibilitas Nyata
- **Live Status Indicator:** Lencana status aktif interaktif: `🟢 Tersedia untuk Proyek Baru / Kolaborasi`.
- **Metrik Kredibilitas:** `9+ Proyek Skala Produksi`, `Spesialisasi Laravel & Ekosistem Web Modern`.
- **Grid Keahlian Terarah:** Mengelompokkan skill secara nyata (bukan persentase buatan AI yang tidak ada artinya), melainkan berdasarkan peran: *Backend Engineering*, *Modern Frontend & UI*, *Database & API Integration*, serta *Dev & Deployment Tools*.

---

## 2. 🗂️ Rincian 9 Proyek & Pemetaan Aset

| No | Proyek | Kategori | Label Bento | Sumber Aset Gambar |
|---|---|---|---|---|
| **1** | **Keuangan Keluarga** | Aplikasi Web & Finansial | `⭐ Featured Web App` | `..\keuangan-keluarga\` & mockup dashboard grafis |
| **2** | **Hajj Club** | Landing Page & Kemitraan | `⭐ Featured Landing Page` | `..\LandingPage-HajjClub\public\images\` |
| **3** | **Amanah Protection** | FinTech & Proteksi Jamaah | `⭐ Featured Protection` | `..\LandingPage-Amanah\public\images\` |
| **4** | **Maziah Tour & Travel** | Biro Haji & Umroh | `⭐ Featured Travel` | `..\LandingPage-Maziah\public\images\` |
| **5** | **Sistem Todolist Laravel** | Aplikasi Web | `Web Application` | `public/images/todolist.jpeg` |
| **6** | **PT Khaira Berkah Mandiri** | Landing Page Travel | `Landing Page` | `public/images/khaira.jpeg` |
| **7** | **KEMENAG Jakarta Timur** | Sistem Pendaftaran Haji | `Web System` | `public/images/kemenag.jpeg` |
| **8** | **PT Multazam Sinar Surya** | Aplikasi Haji & Umrah | `Web Application` | `public/images/multazam.jpeg` |
| **9** | **Personal Portfolio Website** | Portofolio Digital | `Personal Brand` | `public/images/portfolio.jpeg` |

---

## 3. 🧩 Arsitektur Komponen Blade (`resources/views/`)

Struktur berkas tampilan baru yang modular dan rapi:
```text
resources/views/
├── layouts/
│   └── app.blade.php           # Template dasar HTML5, SEO meta, font, asset bundling
├── components/
│   ├── navbar.blade.php        # Glassmorphic header, live status badge, link WhatsApp
│   ├── hero.blade.php          # Bento hero dengan bio Amrun Tajdid, stats bar, CTA
│   ├── skills.blade.php        # Grid keahlian terstruktur (Backend, Frontend, Tools)
│   ├── featured-bento.blade.php # 4 kartu Bento proyek unggulan terbaru
│   ├── project-grid.blade.php  # Grid filterable untuk proyek lainnya + tombol kategori
│   ├── project-card.blade.php  # Kartu proyek reusable dengan browser mockup frame
│   ├── project-modal.blade.php # Modal dialog detail proyek interaktif (Alpine/Vanilla)
│   └── footer.blade.php        # Call-to-action kolaborasi, sosial media, hak cipta
└── portfolio.blade.php         # View utama yang mengorkestrasi seluruh komponen
```

---

## 4. ✅ Checklist Rencana Implementasi Bertahap

### 🔹 Fase 1: Penyiapan Aset Visual & Mockup Proyek
- [x] Buat direktori `public/images/projects/` untuk standarisasi aset.
- [x] Salin aset visual dari proyek sumber:
  - Salin aset Hajj Club dari `..\LandingPage-HajjClub\public\images\` (`hajjclub.webp` & `hajjclub-logo.png`).
  - Salin aset Amanah dari `..\LandingPage-Amanah\public\images\` (`amanah.webp` & `amanah-logo.png`).
  - Salin aset Maziah dari `..\LandingPage-Maziah\public\images\` (`maziah.jpg`, `maziah-flyer.jpg`, & `maziah-logo.png`).
  - Siapkan gambar representatif untuk Keuangan Keluarga (`keuangan-keluarga.svg` - mockup visual dashboard finansial).
- [x] Rapikan aset gambar proyek eksisting (`todolist`, `khaira`, `kemenag`, `multazam`, `portfolio`).

### 🔹 Fase 2: Service Data & Backend Controller
- [x] Buat file Service [`app/Services/PortfolioData.php`](file:///c:/xampp/htdocs/portfolio-amrun/app/Services/PortfolioData.php) berisi:
  - Data profil (nama, gelar, bio, kontak, status ketersediaan kerja sama).
  - Data metrik (statistik pengalaman, fokus teknologi).
  - Data keahlian (Backend, Frontend, Conversion & Ads, Workflow & Tools).
  - Data lengkap 9 proyek beserta kategori, tag, tantangan, solusi, fitur, dan nomor WhatsApp template spesifik.
- [x] Perbarui [`app/Http/Controllers/PortfolioController.php`](file:///c:/xampp/htdocs/portfolio-amrun/app/Http/Controllers/PortfolioController.php) untuk memanggil service tersebut dan menyalurkan data ke view.

### 🔹 Fase 3: Komponenisasi Blade & Layouting
- [x] Buat master layout `resources/views/layouts/app.blade.php` dengan font *Plus Jakarta Sans* dari Google Fonts, Tailwind CSS, Font Awesome 6.
- [x] Buat `components/navbar.blade.php` dengan glassmorphism (`backdrop-blur-md bg-slate-900/80`), status badge hijau, dan tombol WhatsApp.
- [x] Buat `components/hero.blade.php` dengan tata letak Bento: bio, foto profil Amrun Tajdid, pill badges, dan tombol CTA.
- [x] Buat `components/skills.blade.php` dengan kartu bento keahlian terstruktur.
- [x] Buat `components/featured-bento.blade.php` untuk menampilkan 4 proyek baru secara megah.
- [x] Buat `components/project-grid.blade.php` & `components/project-card.blade.php` dengan bingkai mockup modern.
- [x] Buat `components/footer.blade.php` dengan kontak langsung dan footer minimalis.

### 🔹 Fase 4: Interaktivitas (Filter Kategori & Modal Pop-up)
- [x] Implementasikan script filter kategori proyek:
  - `Semua Proyek`
  - `Aplikasi Web & Sistem`
  - `Landing Page & Iklan`
  - `Keuangan & Proteksi`
- [x] Buat komponen `components/project-modal.blade.php`:
  - Muncul dengan transisi halus saat kartu diklik.
  - Menampilkan mockup besar, ringkasan arsitektur/masalah, solusi, rincian fitur, dan badges teknologi.
  - Tombol WhatsApp dengan pesan otomatis yang spesifik menyebutkan nama proyek yang sedang dilihat.

### 🔹 Fase 5: Pengujian Responsivitas & Polish
- [x] Uji tampilan dan kompilasi Blade via automated feature testing (`tests/Feature/PortfolioTest.php`).
- [x] Validasi status respons HTTP 200 dengan 17 assertions passed.
- [x] Pastikan seluruh tombol WhatsApp mengarah ke nomor `+6281295340314` dengan teks pesan yang ramah dan relevan.

---

## 5. 🚀 Status Implementasi: Selesai (Completed)

Seluruh tahapan dari **Fase 1** hingga **Fase 5** telah sukses diimplementasikan dan diverifikasi berjalan lancar tanpa error.
