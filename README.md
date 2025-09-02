# Sisedia  
**Aplikasi Cerdas untuk Otomatisasi Persediaan UMKM**  

Sisedia adalah aplikasi berbasis Laravel + Vite yang dirancang untuk membantu UMKM dalam mengelola persediaan secara otomatis, cepat, dan efisien.  

---

## 🚀 Setup Project

Ikuti langkah-langkah berikut untuk menjalankan aplikasi ini secara lokal:

### 1. Clone Repository
```bash
git clone https://github.com/username/sisedia.git
cd sisedia

### 2. Install Dependencies
```bash
composer install
npm install

### 3. Konfigurasi Environment

Salin file .env.example menjadi .env:
```bash
cp .env.example .env

### 4. Generate Application Key
```bash
php artisan key:generate

### 5. Setup Database

Buat database baru di MySQL/PostgreSQL sesuai kebutuhan.
Update konfigurasi database di file .env

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sisedia
DB_USERNAME=root
DB_PASSWORD=

### 6. Migrasi Database
Opsi 1: Jalankan Frontend & Backend Sekaligus
```bash
composer run dev

Opsi 2: Jalankan Backend & Frontend Secara Terpisah
Buka 2 terminal:

```bash
# Terminal 1 - Backend
php artisan serve

```bash
# Terminal 2 - Frontend
npm run dev

