# Vespa Profile - Website Sekolah

Website responsif untuk sekolah menengah dengan fitur lengkap berdasarkan Laravel 11 dan Bootstrap 5.

## 📋 Daftar Halaman

1. **Home** (`/`) - Halaman utama dengan hero, berita terbaru, profil singkat, visi & misi, fasilitas, dan kontak
2. **About** (`/about`) - Profil lengkap sekolah, visi & misi, dan fasilitas dengan ikon
3. **Akademik** (`/akademik`) - Informasi kurikulum, jadwal pelajaran, dan program akademik
4. **News** (`/news`) - Berita dan pengumuman terbaru dalam format list yang rapi
5. **Gallery** (`/gallery`) - Galeri foto kegiatan sekolah
6. **Students** (`/students`) - Informasi untuk siswa (portal, ekstrakurikuler)
7. **Parents** (`/parents`) - Informasi untuk orang tua (pertemuan, komunikasi)
8. **SPMB** (`/spmb`) - Penerimaan Siswa Baru dengan form pendaftaran
9. **Contact** (`/contact`) - Halaman kontak dengan form dan peta interaktif Leaflet

## 🎨 Fitur Desain

### Framework & Library
- **Laravel 11** - Backend framework
- **Bootstrap 5.3.2** - CSS framework untuk layout dan komponen
- **Bootstrap Icons** - Icon library (1.11.0)
- **Leaflet 1.9.4** - Peta interaktif (OpenStreetMap)
- **Vite** - Asset bundler (opsional, sudah terinstall)

### Styling
- **Color Scheme:**
  - Primary: `#0f4c81` (Biru tua)
  - Accent: `#ffb703` (Kuning)
  - Muted: `#6b7280` (Abu-abu)

- **Custom CSS** (`public/css/custom.css`)
  - Hero gradient background
  - Card shadow effects
  - Facility icons dengan background
  - Utility classes (`.max-width-72ch`, `.section-title`, `.badge-date`, dll)

- **Responsive Design**
  - Mobile-first approach
  - Navbar hamburger menu untuk mobile
  - Grid system Bootstrap (col-md, col-lg, dll)

## 🗂️ Struktur Folder

```
vespa-profile/
├── app/
│   └── Http/
│       └── Controllers/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php       # Layout utama (header, footer, CDN)
│   │   ├── home.blade.php
│   │   ├── about.blade.php
│   │   ├── akademik.blade.php
│   │   ├── news.blade.php
│   │   ├── gallery.blade.php
│   │   ├── students.blade.php
│   │   ├── parents.blade.php
│   │   ├── spmb.blade.php
│   │   └── contact.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       ├── app.js
│       └── bootstrap.js
├── public/
│   ├── css/
│   │   └── custom.css              # Styling tambahan
│   ├── images/
│   │   ├── logo.svg                # Logo sekolah
│   │   ├── hero.svg                # Hero banner
│   │   ├── news1.svg, news2.svg     # Thumbnail berita
│   │   └── gallery1.svg, gallery2.svg, gallery3.svg  # Foto galeri
│   └── index.php
├── routes/
│   └── web.php                     # Route definitions
├── config/
├── database/
├── bootstrap/
├── storage/
└── vendor/
```

## 🚀 Cara Menjalankan

### Prerequisites
- PHP 8.2+
- Composer
- Node.js (opsional, untuk npm)
- Server lokal (Laragon, Xampp, atau Valet)

### Setup

1. **Clone atau copy project ke folder `www`:**
   ```bash
   cd C:/laragon/www/vespa-profile
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Copy `.env.example` ke `.env`** (jika belum ada):
   ```bash
   cp .env.example .env
   ```

4. **Generate app key:**
   ```bash
   php artisan key:generate
   ```

5. **Jalankan development server:**
   ```bash
   php artisan serve
   ```
   Akses di: `http://127.0.0.1:8000`

### Dengan Laragon
- Taruh project di `C:/laragon/www/vespa-profile`
- Double-click `laragon.exe` dan klik "Start"
- Buka `http://vespa-profile.test` di browser (atau klik "Open" di Laragon)

## 🎯 Komponen Utama

### Layout Master (`resources/views/layouts/app.blade.php`)
- Bootstrap navbar dengan mobile menu hamburger
- Container responsif
- Footer dengan info sekolah
- CDN untuk Bootstrap, Bootstrap Icons, Leaflet
- Custom CSS include

### Hero Section
- Gradient background (primary color)
- Text white dengan call-to-action buttons
- Gambar SVG placeholder

### Card Component
- Shadow dan border-radius custom
- Text muted untuk deskripsi
- Responsive grid layout

### Ikon Fasilitas (Bootstrap Icons)
- Flask (Laboratorium)
- Book (Perpustakaan)
- Basketball (Olahraga)
- Music Note (Ekstrakurikuler)
- Circular background dengan primary color

### Peta Interaktif (Leaflet)
- OpenStreetMap tiles
- Marker dengan popup
- Zoom level dapat diatur
- Container responsif

### Form Kontak
- Bootstrap form control styling
- Label dan validasi HTML5
- Submit button dengan warna accent (yellow)

## 🔧 Customization

### Ubah SDIT RUSMANI
Edit di `resources/views/layouts/app.blade.php` (navbar) dan setiap halaman:
```blade
<div>SDIT RUSMANI</div>
```
Ganti dengan nama Anda.

### Ubah Warna Tema
Edit `public/css/custom.css`:
```css
:root{
  --primary:#0f4c81;      /* Warna utama */
  --accent:#ffb703;       /* Warna accent/button */
  --muted:#6b7280;        /* Warna teks secondary */
}
```

### Ubah Koordinat Peta
Di `resources/views/contact.blade.php` atau `resources/views/home.blade.php`:
```javascript
const map = L.map('map').setView([-6.2088, 106.8456], 15);
//                          latitude   longitude   zoom
```
Cari koordinat di: https://www.google.com/maps

### Ganti Logo
Ganti file `public/images/logo.svg` dengan logo Anda sendiri.

### Ganti Gambar Hero & Berita
Ganti file di `public/images/`:
- `hero.svg` → hero banner
- `news1.svg`, `news2.svg` → thumbnail berita
- `gallery1.svg`, `gallery2.svg`, `gallery3.svg` → foto galeri

## 📱 Responsive Breakpoints

Bootstrap menggunakan breakpoints standar:
- **xs** (< 576px) - Mobile
- **sm** (≥ 576px) - Small devices
- **md** (≥ 768px) - Tablet
- **lg** (≥ 992px) - Desktop
- **xl** (≥ 1200px) - Large desktop

Gunakan `col-md-6`, `d-md-block`, dll untuk responsive design.

## 🔐 Keamanan

- CSRF protection aktif (middleware)
- XSS prevention melalui Blade escaping
- SQL Injection protected (Eloquent ORM)
- Environment variables di `.env`

## 📦 Dependencies

Utama:
- `laravel/framework` ^11.0
- `laravel/tinker` ^2.9

Development:
- `laravel/pint` ^1.13
- `laravel/sail` ^1.26
- `phpunit/phpunit` ^11.0

Frontend:
- Bootstrap 5.3.2 (CDN)
- Bootstrap Icons 1.11.0 (CDN)
- Leaflet 1.9.4 (CDN)

## 🌐 Routes

| Route | Method | View | Purpose |
|-------|--------|------|---------|
| `/` | GET | home | Halaman utama |
| `/about` | GET | about | Tentang sekolah |
| `/akademik` | GET | akademik | Info akademik |
| `/news` | GET | news | Berita & pengumuman |
| `/gallery` | GET | gallery | Galeri foto |
| `/students` | GET | students | Info siswa |
| `/parents` | GET | parents | Info orang tua |
| `/spmb` | GET | spmb | Penerimaan siswa baru |
| `/contact` | GET | contact | Kontak |

Semua route dapat diedit di `routes/web.php`.

## 📝 Tips Penggunaan

1. **Tambah Berita Baru** - Edit `resources/views/news.blade.php`, tambahkan `<a>` item baru di list-group
2. **Tambah Galeri Foto** - Edit `resources/views/gallery.blade.php`, tambahkan `<div class="col-sm-6 col-md-4">` baru
3. **Update Form SPMB** - Edit `resources/views/spmb.blade.php`, tambahkan field form sesuai kebutuhan
4. **Ubah Konten Statis** - Langsung edit file `.blade.php` yang sesuai

## 🎓 Fitur Tambahan (Future)

- [ ] Database untuk berita dinamis
- [ ] Admin panel untuk manage konten
- [ ] User authentication (siswa/guru/admin)
- [ ] Online form submission untuk SPMB
- [ ] Email notifications
- [ ] SEO optimization
- [ ] Analytics integration

## 💡 Troubleshooting

**Peta tidak muncul:**
- Pastikan `<script src="leaflet.js"></script>` sudah di layout
- Cek `#map` atau `#mapHome` div ada di halaman
- Buka browser console (F12) untuk error messages

**Ikon tidak muncul:**
- Pastikan Bootstrap Icons CDN sudah di layout
- Cek `<i class="bi bi-icon-name"></i>` syntax benar
- Refresh browser (Ctrl+F5)

**Styling tidak berubah:**
- Clear browser cache (Ctrl+Shift+Del)
- Restart development server
- Cek CSS file path di `<link href="/css/custom.css">`

**500 Error:**
- Cek `.env` sudah di-copy dan ada `APP_KEY`
- Run `php artisan key:generate` jika belum
- Cek file permissions di `storage/` dan `bootstrap/cache/`

## 📧 Kontak & Support

Untuk pertanyaan atau masalah:
- Email: info@sekolah.example (sesuaikan dengan email sekolah Anda)
- Telepon: (0266) 0000-000 (sesuaikan dengan nomor sekolah Anda)

---

**Version:** 1.0.0  
**Last Updated:** November 26, 2025  
**Framework:** Laravel 11  
**CSS Framework:** Bootstrap 5.3.2
