# Company Portfolio Backend

Web portal & REST API untuk portofolio perusahaan. Dibuat menggunakan Laravel 13, Tailwind CSS, dan Laravel Sanctum untuk manajemen autentikasi.

---

## Technical Stack
- Framework: Laravel 13
- Database: MySQL
- Auth: Laravel Sanctum / Session Auth
- Frontend: Blade Templates + Tailwind CSS

---

## Directory Overview

```text
app/
├── Http/
│   ├── Controllers/
│   │   ├── Admin/         # CategoryController, ArticleController, DashboardController
│   │   └── PortfolioController.php
│   ├── Requests/          # Validasi Form Request (Store/Update)
│   └── Resources/         # API Resource Response
└── Models/                # User, Category, Article

resources/views/
├── layouts/               # Base layout (app.blade.php & admin.blade.php)
├── pages/                 # Halaman publik (home, article, pricing, contact)
└── admin/                 # Management views (categories, articles, dashboard)
```

---

## Installation & Setup

Jika kamu mengklon proyek ini, ikuti langkah berikut untuk menjalankan di server lokal:

1. **Clone repository & masuk folder proyek:**
   ```bash
   git clone https://github.com/GoldenSinapsis/itena-webPorto.git
   cd itena-webPorto
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Setup environment file:**
   ```bash
   cp .env.example .env
   ```
   Sesuaikan konfigurasi koneksi database MySQL pada file `.env`.

4. **Generate app key & storage link:**
   ```bash
   php artisan key:generate
   php artisan storage:link
   ```

5. **Jalankan database migration:**
   ```bash
   php artisan migrate
   ```

6. **Jalankan development server:**
   ```bash
   php artisan serve
   ```
   Aplikasi dapat diakses via browser di `http://127.0.0.1:8000`.

---

## Route Overview

### Frontend Publik
- `GET /` — Landing page (`pages.home`)
- `GET /article` — Daftar artikel / portofolio (`pages.article`)
- `GET /article/{slug}` — Detail artikel berdasarkan slug
- `GET /pricing` — Halaman daftar harga (`pages.pricing`)
- `GET /contact` — Halaman kontak (`pages.contact`)

### Admin Dashboard (Protected `auth`)
- `GET /admin` — Main dashboard Overview
- `RESOURCE /admin/categories` — CRUD Kategori
- `RESOURCE /admin/articles` — CRUD Artikel (support image upload & auto-slug)

---

## Notes
- Upload berkas gambar disimpan di disk `public` (`storage/app/public/articles/`).
- Pembuatan `slug` artikel dan kategori ditangani secara otomatis dari kolom `name` / `title`.
- `user_id` pada pembuat artikel diambil dari ID user yang sedang aktif login (`auth()->user()->id`).
