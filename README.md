# SQS - Smart Quiz System

SQS (Smart Quiz System) adalah platform kuis online berbasis web yang dibangun dengan Laravel, dirancang untuk memfasilitasi pembuatan, pengelolaan, dan partisipasi dalam kuis interaktif. Platform ini menawarkan fitur-fitur canggih seperti pembuatan kuis dengan AI, sistem langganan premium, verifikasi akademik, dan panel admin yang komprehensif.

## 🚀 Fitur Utama

### 👤 Sistem Pengguna
- **Registrasi dan Login**: Sistem autentikasi lengkap dengan verifikasi email
- **Login Google**: Integrasi OAuth dengan Google untuk kemudahan akses
- **Manajemen Profil**: Pengguna dapat mengupdate informasi pribadi
- **Sistem Role**: User biasa, Pro, Premium, dan Academic

### 📝 Manajemen Kuis
- **Pembuatan Kuis**: Interface yang mudah untuk membuat kuis dengan berbagai jenis pertanyaan
- **Pertanyaan AI**: Generate pertanyaan otomatis menggunakan Google Gemini AI
- **Timer Kuis**: Pengaturan waktu untuk setiap kuis
- **Kode Bergabung**: Sistem kode unik untuk bergabung ke kuis
- **Duplikasi Kuis**: Salin kuis yang sudah ada untuk modifikasi
- **Reset Statistik**: Reset data percobaan kuis

### 🎯 Sistem Percobaan Kuis
- **Percobaan Kuis**: Sistem scoring real-time
- **Riwayat Percobaan**: Tracking semua percobaan pengguna
- **Retake Kuis**: Opsi untuk mengulang kuis
- **Jawaban Essay**: Dukungan untuk pertanyaan essay
- **Guest Mode**: Percobaan kuis tanpa akun (terbatas)

### 💰 Sistem Pembayaran & Langganan
- **Integrasi Midtrans**: Gateway pembayaran Indonesia
- **Paket Langganan**: Pro, Premium, dan Academic
- **Limit AI**: Batasan penggunaan fitur AI berdasarkan paket
- **Manajemen Transaksi**: Tracking pembayaran dan status langganan

### 🎓 Verifikasi Akademik
- **Upload Dokumen**: Upload ijazah atau sertifikat akademik
- **Parsing PDF**: Ekstraksi data otomatis dari dokumen PDF
- **Approval Sistem**: Admin dapat menyetujui atau menolak verifikasi
- **Status Tracking**: Monitoring status verifikasi

### 👨‍💼 Panel Admin
- **Dashboard Admin**: Overview lengkap sistem
- **Manajemen User**: CRUD pengguna dengan kontrol role
- **Manajemen Kuis**: Moderasi dan pengelolaan kuis
- **Verifikasi Akademik**: Review dokumen akademik
- **Statistik Sistem**: Analytics dan reporting

### 📊 Analytics & Leaderboard
- **Leaderboard**: Peringkat berdasarkan skor
- **Analisis Kuis**: Statistik detail performa kuis
- **Dashboard User**: Ringkasan aktivitas pribadi
- **Popular Quizzes**: Kuis paling banyak diikuti

## 🛠️ Tech Stack

### Backend
- **Laravel 12**: Framework PHP modern
- **PHP 8.2+**: Bahasa pemrograman utama
- **MySQL**: Database utama
- **Redis**: Caching dan session storage

### Frontend
- **Blade Templates**: Template engine Laravel
- **Tailwind CSS**: Framework CSS utility-first
- **Alpine.js**: JavaScript framework untuk interaktivitas
- **Vite**: Build tool dan development server

### Integrasi & Layanan
- **Google Gemini AI**: Generate pertanyaan otomatis
- **Midtrans**: Gateway pembayaran
- **Google OAuth**: Autentikasi sosial
- **PDF Parser**: Ekstraksi data dari PDF

### Development Tools
- **Composer**: Dependency management PHP
- **NPM**: Package management JavaScript
- **Pest**: Testing framework
- **Laravel Sail**: Development environment

## 📋 Prasyarat Sistem

- PHP 8.2 atau lebih tinggi
- Composer
- Node.js & NPM
- MySQL 8.0+
- Redis (opsional, untuk caching)

## 🚀 Instalasi & Setup

### 1. Clone Repository
```bash
git clone <repository-url>
cd sqs
```

### 2. Install Dependencies PHP
```bash
composer install
```

### 3. Install Dependencies JavaScript
```bash
npm install
```

### 4. Environment Setup
```bash
cp .env.example .env
```

Edit file `.env` dengan konfigurasi database dan layanan eksternal yang diperlukan (lihat file `.env.example` untuk referensi).

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Database Setup
```bash
php artisan migrate
php artisan db:seed
```

### 7. Build Assets
```bash
npm run build
# atau untuk development
npm run dev
```

### 8. Jalankan Aplikasi
```bash
php artisan serve
```

Atau gunakan Laravel Sail untuk environment lengkap:
```bash
./vendor/bin/sail up
```

## 📖 Panduan Penggunaan

### Untuk User Biasa
1. **Registrasi**: Daftar akun baru atau login dengan Google
2. **Bergabung Kuis**: Masukkan kode kuis untuk bergabung
3. **Ikuti Kuis**: Jawab pertanyaan dalam waktu yang ditentukan
4. **Lihat Hasil**: Cek skor dan analisis performa

### Untuk Creator Kuis
1. **Buat Kuis**: Akses menu "Create Quiz" di dashboard
2. **Tambah Pertanyaan**: Tambahkan pertanyaan manual atau generate dengan AI
3. **Konfigurasi**: Set timer, deskripsi, dan pengaturan lainnya
4. **Bagikan Kode**: Berikan kode bergabung ke peserta

### Untuk Admin
1. **Login sebagai Admin**: Gunakan akun dengan role admin
2. **Kelola User**: Approve/reject user, ubah role
3. **Moderasi Kuis**: Review dan manage kuis yang dibuat user
4. **Verifikasi Akademik**: Approve dokumen akademik

## 🔧 Struktur Database

### Tabel Utama
- **users**: Data pengguna dan role
- **quizzes**: Informasi kuis
- **questions**: Pertanyaan dalam kuis
- **options**: Pilihan jawaban
- **quiz_attempts**: Percobaan kuis oleh user
- **user_answers**: Jawaban user
- **transactions**: Data pembayaran
- **academic_verifications**: Data verifikasi akademik

## 🧪 Testing

Jalankan test suite:
```bash
php artisan test
```

Atau dengan Pest:
```bash
./vendor/bin/pest
```

## 📦 Deployment

### Production Setup
1. Set `APP_ENV=production` di `.env`
2. Konfigurasi web server (Apache/Nginx)
3. Setup SSL certificate
4. Konfigurasi queue worker untuk background jobs
5. Setup cron job untuk scheduled tasks



## 🤝 Contributing

1. Fork repository
2. Buat branch fitur baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📝 License

Distributed under the MIT License. See `LICENSE` for more information.

## 📞 Support

Untuk pertanyaan atau dukungan, silakan hubungi tim development atau buat issue di repository ini.

## 🔄 Changelog

### v1.0.0
- Initial release
- Basic quiz functionality
- User authentication
- Admin panel
- Payment integration
- AI question generation
- Academic verification

---

**Dibangun dengan ❤️ menggunakan Laravel Framework**
