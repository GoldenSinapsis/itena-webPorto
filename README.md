# Company Portfolio Backend API (Laravel 13)

Sistem backend RESTful API untuk aplikasi Web Portofolio Perusahaan (*Company Portfolio*). Dibuat menggunakan **Laravel 13**, dilengkapi fitur autentikasi API via **Sanctum**, manajemen Kategori, serta CRUD Artikel lengkap dengan fitur auto-slug, filter status, dan upload media.

---

## Struktur File Backend

```text
app/
├── Http/
│   ├── Controllers/Api/  -> CategoryController, ArticleController
│   ├── Requests/         -> Form Request validasi (Store & Update)
│   └── Resources/        -> API Resource (JSON response)
└── Models/               -> User, Category, Article (dengan relasi)
database/
└── migrations/           -> Migrasi tabel: users, categories, articles
routes/
└── api.php               -> Endpoint API
```

---

## Panduan Setup (Untuk yang Mengklon Project)

Jika Anda mengklon (*clone*) repositori ini, ikuti langkah-langkah berikut untuk menjalankan proyek di lingkungan lokal:

### 1. Clone Repositori
```bash
git clone https://github.com/GoldenSinapsis/itena-webPorto.git
cd itena-webPorto
```

### 2. Install Dependensi PHP
```bash
composer install
```

### 3. Konfigurasi Environment (`.env`)
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```
Buka file `.env` dan sesuaikan pengaturan database Anda:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=itena
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Key & Link Storage
Jalankan perintah ini untuk membuat *app key* dan menyambungkan folder penyimpanan gambar:
```bash
php artisan key:generate
php artisan storage:link
```

### 5. Jalankan Migrasi Database
```bash
php artisan migrate
```

### 6. Jalankan Server
```bash
php artisan serve
```
Aplikasi backend akan berjalan di `http://127.0.0.1:8000`.

---

## 🌐 Endpoint API

### 🔓 Publik (Tanpa Autentikasi)

| Method | Endpoint | Keterangan |
| :--- | :--- | :--- |
| `GET` | `/api/categories` | List kategori (+search, pagination) |
| `GET` | `/api/categories/{slug}` | Detail kategori berdasarkan slug |
| `GET` | `/api/articles` | List artikel (+filter status, category, search) |
| `GET` | `/api/articles/{slug}` | Detail artikel berdasarkan slug (otomatis +1 views) |

### 🔒 Perlu Login (Bearer Token Sanctum)

> Tambahkan Header pada request: `Authorization: Bearer <TOKEN_ANDA>`

| Method | Endpoint | Keterangan |
| :--- | :--- | :--- |
| `POST` | `/api/categories` | Membuat kategori baru |
| `PUT` | `/api/categories/{id}` | Memperbarui data kategori |
| `DELETE` | `/api/categories/{id}` | Menghapus kategori |
| `POST` | `/api/articles` | Membuat artikel baru (support upload `image` & `sub_image`) |
| `PUT` | `/api/articles/{id}` | Memperbarui artikel |
| `DELETE` | `/api/articles/{id}` | Menghapus artikel beserta berkas gambar |

---

## 📝 Catatan Penting
- Kolom `email` pada tabel `users` dibuat **unique** untuk keperluan sistem autentikasi.
- `slug` pada `categories` dan `articles` bersifat **unique** dan dibuat otomatis dari kolom `name` jika tidak diisi oleh client.
- Upload `image` & `sub_image` disimpan pada disk `public` (`storage/app/public/articles/`).
- `user_id` pada artikel diisi secara otomatis dari ID pengguna yang sedang login (`auth()->user()->id`) demi keamanan.
- Route model binding artikel & kategori menggunakan `slug` untuk mendukung URL SEO-friendly.
