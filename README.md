# Sisedia  
**Aplikasi Cerdas untuk Otomatisasi Persediaan UMKM**  

Sisedia adalah aplikasi berbasis Laravel + Vite yang dirancang untuk membantu UMKM dalam mengelola persediaan secara otomatis, cepat, dan efisien.  

---

## 🚀 Setup Aplikasi

Ikuti langkah-langkah berikut untuk menjalankan aplikasi secara lokal:  

```bash
# 1. Clone repository
git clone https://github.com/username/sisedia.git
cd sisedia

# 2. Install dependencies PHP & JS
composer install
npm install

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Setup database
# -> Edit file .env sesuai konfigurasi database kamu
# Contoh untuk MySQL:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=sisedia
# DB_USERNAME=root
# DB_PASSWORD=
php artisan migrate

# 5. Jalankan aplikasi (opsi 1: sekaligus backend & frontend)
composer run dev

# 6. Atau jalankan secara terpisah (opsi 2: buka 2 terminal)
# Terminal 1 - Backend
php artisan serve

# Terminal 2 - Frontend
npm run dev
