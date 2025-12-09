# **SQS \- Sistem Quiz Semalam**

SQS (Sistem Quiz Semalam) adalah platform manajemen kuis berbasis web modern yang dibangun menggunakan framework **Laravel 10**. Aplikasi ini dirancang untuk merevolusi cara pembuatan dan pengerjaan kuis dengan integrasi **Kecerdasan Buatan (AI)**, sistem pembayaran digital, dan verifikasi akademik otomatis untuk pembelajaran yang interaktif dan cepat.

## **🚀 Fitur Utama**

* **Generasi Soal Otomatis (AI)**: Membuat kuis secara instan dari teks atau topik menggunakan **Google Gemini AI**.  
* **Analisis Hasil Cerdas**: Memberikan wawasan mendalam (Diagnostik, Remedial, Full Insight) terhadap hasil kuis siswa menggunakan AI.  
* **Sistem Membership Berjenjang**: Mendukung level pengguna (Guest, User, Pro, Premium, Academic) dengan batasan akses yang berbeda.  
* **Gateway Pembayaran**: Integrasi mulus dengan **Midtrans** untuk langganan akun Premium/Pro.  
* **Verifikasi Akademik**: Sistem upload dan validasi dokumen untuk status pelajar/mahasiswa (Academic Plan).  
* **Manajemen Kuis Lengkap**: Mendukung tipe soal Pilihan Ganda dan Essay dengan pengaturan timer dan durasi.  
* **Leaderboard Global**: Papan peringkat real-time untuk memacu kompetisi antar pengguna.  
* **Autentikasi Sosial**: Login cepat dan aman menggunakan akun **Google**.

## **🛠️ Teknologi yang Digunakan**

* **Backend**: Laravel 10 (PHP ^8.2)  
* **Frontend**: Blade Templates, Tailwind CSS, Alpine.js  
* **Database**: PostgreSQL  
* **AI Service**: Google Gemini API (Generative Language)  
* **Payment Gateway**: Midtrans (Snap API)  
* **PDF Processing**: smalot/pdfparser (untuk ekstrak materi dari PDF)  
* **Asset Bundler**: Vite

## **📋 Prasyarat**

Sebelum memulai instalasi, pastikan lingkungan pengembangan Anda memiliki:

* PHP \>= 8.2 (Pastikan ekstensi pdo\_pgsql dan pgsql aktif)  
* Composer  
* Node.js & NPM  
* PostgreSQL Database  
* Git

## **⚙️ Panduan Instalasi**

Ikuti langkah-langkah berikut untuk menjalankan proyek di komputer lokal Anda:

1. **Clone Repositori**  
   git clone \[https://github.com/username/sqs1.git\](https://github.com/username/sqs1.git)  
   cd sqs1

2. **Install Dependensi Backend & Frontend**  
   composer install  
   npm install

3. Konfigurasi Environment  
   Salin file konfigurasi contoh:  
   cp .env.example .env

4. Generate Application Key & Storage Link  
   Penting untuk keamanan sesi dan akses file publik (gambar/dokumen verifikasi):  
   php artisan key:generate  
   php artisan storage:link

5. Konfigurasi Database & API Services  
   Buka file .env dan sesuaikan pengaturan berikut agar sesuai dengan kredensial Anda:  
   APP\_URL=http://localhost:8000 \# Ganti dengan URL Ngrok jika menggunakan fitur Payment/Google Auth

   \# Konfigurasi Database (PostgreSQL)  
   DB\_CONNECTION=pgsql  
   DB\_HOST=127.0.0.1  
   DB\_PORT=5432  
   DB\_DATABASE=nama\_database\_postgres\_anda  
   DB\_USERNAME=postgres  
   DB\_PASSWORD=password\_postgres\_anda

   \# Konfigurasi Midtrans (Pembayaran)  
   MIDTRANS\_SERVER\_KEY=isi\_server\_key\_midtrans  
   MIDTRANS\_CLIENT\_KEY=isi\_client\_key\_midtrans  
   MIDTRANS\_IS\_PRODUCTION=false  
   MIDTRANS\_IS\_SANITIZED=true  
   MIDTRANS\_IS\_3DS=true

   \# Konfigurasi Google Gemini AI  
   GEMINI\_API\_KEY=isi\_api\_key\_google\_ai\_studio

   \# Konfigurasi Google OAuth (Social Login)  
   GOOGLE\_CLIENT\_ID=isi\_client\_id\_google\_cloud  
   GOOGLE\_CLIENT\_SECRET=isi\_client\_secret\_google\_cloud  
   GOOGLE\_REDIRECT\_URI="${APP\_URL}/auth/google/callback"

6. Migrasi Database  
   Membuat tabel yang diperlukan (Users, Quizzes, Transactions, dll) dan data awal:  
   php artisan migrate \--seed

7. Build Aset Frontend  
   Kompilasi file CSS dan JS untuk production (agar tampilan tidak rusak di mobile/ngrok):  
   npm run build

## **▶️ Menjalankan Aplikasi**

Opsi 1: Lokal Sederhana  
Gunakan perintah bawaan Laravel:  
php artisan serve

Akses di: http://localhost:8000  
Opsi 2: Lokal Publik (Wajib untuk Payment & Google Login)  
Jika Anda ingin menguji fitur Midtrans atau Login Google, gunakan Ngrok agar bisa menerima callback:

1. Jalankan server Laravel:  
   php artisan serve \--port=8000

2. Jalankan Ngrok di terminal baru:  
   ngrok http 8000

3. Jangan lupa update APP\_URL di .env dengan URL Ngrok yang muncul.
