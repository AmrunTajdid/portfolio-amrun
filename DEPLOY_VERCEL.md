# 🚀 Panduan Deployment: GitHub & Vercel (Portfolio Amrun Tajdid)

Seluruh berkas konfigurasi serverless Vercel untuk project **portfolio-amrun** telah selesai dikonfigurasi penuh:
1. [`vercel.json`](file:///c:/xampp/htdocs/portfolio-amrun/vercel.json) (Routing serverless PHP runtime, static assets, dan environment variables).
2. [`api/index.php`](file:///c:/xampp/htdocs/portfolio-amrun/api/index.php) (Serverless handler untuk Laravel dengan penyimpanan writable `/tmp/storage`).
3. [`bootstrap/app.php`](file:///c:/xampp/htdocs/portfolio-amrun/bootstrap/app.php) (Dynamic storage path untuk lingkungan serverless Vercel).
4. [`.vercelignore`](file:///c:/xampp/htdocs/portfolio-amrun/.vercelignore) (Pencegahan upload file sampah/development).
5. Git repository lokal telah diinisialisasi dan seluruh kode telah di-commit ke branch `main`.

---

## 📌 Langkah 1: Buat Repository di GitHub & Push

GitHub mewajibkan pembuatan repository kosong terlebih dahulu melalui web:

1. Buka tautan: 👉 **[https://github.com/new](https://github.com/new)**
2. Isi formulir pembuatan repository:
   - **Repository name**: `portfolio-amrun`
   - **Description**: `Personal Portfolio Website - Amrun Tajdid, S.T. (Laravel 12 & Tailwind CSS)`
   - **Visibility**: Pilih **Public** (atau *Private* sesuai keinginan)
   - **PENTING**: **JANGAN centang** *"Add a README file"*, *"Add .gitignore"*, atau *"Choose a license"* (karena repositori lokal kita sudah memiliki semua berkas ini).
3. Klik tombol hijau: **"Create repository"**.
4. Setelah repository dibuat di GitHub, jalankan perintah ini di terminal / PowerShell:
   ```bash
   git push -u origin main
   ```
   *(Semua kode dan aset portofolio akan langsung ter-upload ke repositori GitHub Anda)*.

---

## 🌐 Langkah 2: Hubungkan & Deploy di Vercel (100% Gratis)

Metode terbaik dan paling praktis adalah menghubungkan Vercel langsung ke repository GitHub Anda (otomatis auto-deploy setiap kali ada pembaruan kode):

1. Buka dashboard Vercel: 👉 **[https://vercel.com/new](https://vercel.com/new)**
2. Masuk menggunakan akun **GitHub** Anda (`AmrunTajdid`).
3. Pada daftar repository yang muncul, cari **`portfolio-amrun`**, lalu klik tombol **"Import"**.
4. Di halaman konfigurasi:
   - **Project Name**: `portfolio-amrun` (bisa diubah sesuai keinginan)
   - **Framework Preset**: Biarkan **Other** (karena sudah diatur oleh `vercel.json`)
   - **Root Directory**: `./` (default)
5. Klik tombol biru: **"Deploy"**.
6. Tunggu proses build selama 1 - 2 menit.
7. **Selesai!** Website portofolio Anda langsung aktif secara global dengan domain gratis dan HTTPS resmi:
   👉 `https://portfolio-amrun.vercel.app` (atau nama subdomain yang Anda pilih).

---

## ⚡ Opsi Alternatif: Deploy Langsung via Terminal (Vercel CLI)

Jika Anda ingin deploy langsung dari terminal komputer:
1. Jalankan perintah login:
   ```bash
   npx vercel login
   ```
   *(Pilih Login with GitHub atau Email, lalu konfirmasi di browser)*.
2. Jalankan perintah deploy produksi:
   ```bash
   npx vercel --prod
   ```
3. Tekan **Y** untuk mengonfirmasi setup, dan website akan langsung aktif!
