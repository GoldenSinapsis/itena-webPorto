# Backend Laravel 13 — Portfolio Company

## Struktur
```
database/migrations/   -> 3 migration: users, categories, articles
app/Models/             -> User, Category, Article (dengan relasi)
app/Http/Requests/      -> Form Request validasi (Store & Update)
app/Http/Resources/     -> API Resource (JSON response)
app/Http/Controllers/Api/ -> CategoryController, ArticleController
routes/api.php          -> Route API
```

## Cara pasang
1. Salin folder `app`, `database`, `routes` ke root project Laravel 13 Anda
   (timpa file yang sama jika ditanya, khususnya `routes/api.php`).
2. Jika project belum punya `routes/api.php` terdaftar, pastikan di
   `bootstrap/app.php` route api sudah di-load:
   ```php
   ->withRouting(
       web: __DIR__.'/../routes/web.php',
       api: __DIR__.'/../routes/api.php',
       ...
   )
   ```
3. Install Sanctum untuk autentikasi (dipakai di `auth:sanctum` middleware):
   ```bash
   composer require laravel/sanctum
   php artisan install:api
   ```
4. Buat symlink storage untuk upload gambar:
   ```bash
   php artisan storage:link
   ```
5. Jalankan migration:
   ```bash
   php artisan migrate
   ```

## Endpoint yang tersedia

### Publik (tanpa login)
| Method | Endpoint                  | Keterangan                          |
|--------|----------------------------|--------------------------------------|
| GET    | /api/categories             | List kategori (+search, pagination) |
| GET    | /api/categories/{slug}      | Detail kategori                     |
| GET    | /api/articles                | List artikel (+filter status/category/search) |
| GET    | /api/articles/{slug}         | Detail artikel (otomatis +1 views)  |

### Perlu login (Bearer token Sanctum)
| Method | Endpoint              |
|--------|------------------------|
| POST   | /api/categories        |
| PUT    | /api/categories/{id}   |
| DELETE | /api/categories/{id}   |
| POST   | /api/articles           |
| PUT    | /api/articles/{id}      |
| DELETE | /api/articles/{id}      |

## Catatan penting
- Kolom `email` pada tabel `users` dibuat **unique** (tidak eksplisit di DDL
  Anda, tapi wajib secara praktik untuk sistem login).
- `slug` pada `categories` dan `articles` dibuat **unique**, dan otomatis
  di-generate dari `name` bila tidak dikirim oleh client (lihat
  `prepareForValidation()` di masing-masing Form Request).
- Upload `image` & `sub_image` disimpan di disk `public`
  (`storage/app/public/articles/...`), field di database tetap `VARCHAR`
  path relatif — sesuai DDL.
- `user_id` pada artikel **tidak diambil dari input client**, melainkan
  otomatis dari `auth()->user()->id` saat create, demi keamanan.
- Route model binding artikel & kategori memakai `slug` (bukan `id`),
  cocok untuk URL SEO-friendly seperti `/api/articles/judul-artikel-saya`.
- Jika ingin otorisasi berbasis role (admin/editor/author), tambahkan
  Policy/Middleware terpisah — saat ini `authorize()` di Request masih
  `return true` (hanya cek login, bukan role).
