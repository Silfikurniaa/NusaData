# NusaData

**Sistem Informasi Data Warga**

---

 <p align="center"><a href="https://laravel.com" target="_blank"><img src="WhatsApp Image 2025-05-04 at 11.31.09 PM.jpeg" width="400" alt="Laravel Logo"></a></p>

## 👤 Disusun oleh

**Silfi Kurnia**  
**NIM: D0223016**

## 📚 Mata Kuliah

Framework Web Based

## 🗓️ Tahun

2025

---

## 🧭 Deskripsi Proyek

**NusaData** adalah aplikasi web yang memudahkan proses pencarian dan verifikasi data penduduk saat mereka datang ke instansi daerah seperti kantor desa. Sistem ini memungkinkan petugas untuk dengan cepat mengakses data warga dan mencetak dokumen administrasi seperti surat pengantar tanpa warga harus membawa banyak berkas fisik.

---

## 🔐 Role dan Fitur-fiturnya

### 🛡️ Admin

-   Kelola data petugas dan warga
-   Manajemen wilayah administrasi
-   Monitoring aktivitas sistem dan statistik

### 📋 Petugas

-   Mencari dan mengelola data warga
-   Melayani permintaan dokumen
-   Verifikasi pengajuan perubahan data

### 👥 Warga

-   Melihat data kependudukan sendiri
-   Mengajukan perubahan data
-   Melihat status pengajuan

---

## 🗃️ Tabel-tabel Database

### Tabel `users`

| Nama Field     | Tipe Data     | Keterangan                    |
| -------------- | ------------- | ----------------------------- |
| id             | bigIncrements | Primary key                   |
| name           | string        | Nama lengkap user             |
| email          | string        | Email login                   |
| password       | string        | Password login                |
| role           | enum          | ['admin', 'petugas', 'warga'] |
| remember_token | string        | Token autentikasi             |
| timestamps     | timestamps    | Created_at & updated_at       |

---

### Tabel `petugas`

| Nama Field | Tipe Data     | Keterangan          |
| ---------- | ------------- | ------------------- |
| id         | bigIncrements | Primary key         |
| user_id    | foreignId     | FK ke tabel users   |
| nip        | string        | Nomor Induk Petugas |
| jabatan    | string        | Jabatan             |
| wilayah    | string        | Wilayah kerja       |
| timestamps | timestamps    |                     |

---

### Tabel `warga`

| Nama Field    | Tipe Data     | Keterangan               |
| ------------- | ------------- | ------------------------ |
| id            | bigIncrements | Primary key              |
| user_id       | foreignId     | FK ke tabel users        |
| nik           | string        | Nomor Induk Kependudukan |
| kk            | string        | Nomor Kartu Keluarga     |
| alamat        | string        | Alamat lengkap           |
| rt/rw         | string        | RT dan RW                |
| desa          | string        | Nama desa                |
| kecamatan     | string        | Nama kecamatan           |
| tanggal_lahir | date          | Tanggal lahir            |
| jenis_kelamin | enum          | ['L', 'P']               |
| timestamps    | timestamps    |                          |

---

### Tabel `pengajuan_perubahan`

| Nama Field      | Tipe Data     | Keterangan                          |
| --------------- | ------------- | ----------------------------------- |
| id              | bigIncrements | Primary key                         |
| warga_id        | foreignId     | FK ke tabel warga                   |
| field_diubah    | string        | Field yang ingin diubah             |
| nilai_lama      | text          | Nilai sebelum perubahan             |
| nilai_baru      | text          | Nilai setelah perubahan             |
| status          | enum          | ['pending', 'disetujui', 'ditolak'] |
| catatan_petugas | text          | Catatan dari petugas                |
| timestamps      | timestamps    |                                     |

---

## 🔗 Jenis Relasi dan Tabel yang Berelasi

-   `users` ↔ `petugas` = One to One
-   `users` ↔ `warga` = One to One
-   `warga` ↔ `pengajuan_perubahan` = One to Many

---

## ✅ Tujuan Sistem

Mempermudah proses pencarian dan penggunaan data warga dalam layanan administratif di tingkat desa dan kecamatan tanpa memerlukan dokumen fisik yang banyak.

---

<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<!-- ## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). --> -->
