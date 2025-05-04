# NusaData

**Sistem Informasi Data Warga**

---

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

<<<<<<< HEAD
<!-- ## About Laravel
=======
# NusaData
**Sistem Informasi Data Warga**
>>>>>>> 77b39e430ab2cf14aecb908c48ab5314dcacac12


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
- Kelola data petugas dan warga  
- Manajemen wilayah administrasi  
- Monitoring aktivitas sistem dan statistik  

### 📋 Petugas
- Mencari dan mengelola data warga  
- Melayani permintaan dokumen  
- Verifikasi pengajuan perubahan data  

### 👥 Warga
- Melihat data kependudukan sendiri  
- Mengajukan perubahan data  
- Melihat status pengajuan  

---

## 🗃️ Tabel-tabel Database

### Tabel `users`

| Nama Field       | Tipe Data       | Keterangan                    |
|------------------|------------------|-------------------------------|
| id               | bigIncrements    | Primary key                   |
| name             | string           | Nama lengkap user             |
| email            | string           | Email login                   |
| password         | string           | Password login                |
| role             | enum             | ['admin', 'petugas', 'warga'] |
| remember_token   | string           | Token autentikasi             |
| timestamps       | timestamps       | Created_at & updated_at       |

---

### Tabel `petugas`

| Nama Field | Tipe Data     | Keterangan                     |
|------------|---------------|--------------------------------|
| id         | bigIncrements | Primary key                    |
| user_id    | foreignId     | FK ke tabel users              |
| nip        | string        | Nomor Induk Petugas            |
| jabatan    | string        | Jabatan                        |
| wilayah    | string        | Wilayah kerja                  |
| timestamps | timestamps    |                                |

---

### Tabel `warga`

| Nama Field     | Tipe Data     | Keterangan                        |
|----------------|---------------|------------------------------------|
| id             | bigIncrements | Primary key                        |
| user_id        | foreignId     | FK ke tabel users                  |
| nik            | string        | Nomor Induk Kependudukan           |
| kk             | string        | Nomor Kartu Keluarga               |
| alamat         | string        | Alamat lengkap                     |
| rt/rw          | string        | RT dan RW                          |
| desa           | string        | Nama desa                          |
| kecamatan      | string        | Nama kecamatan                     |
| tanggal_lahir  | date          | Tanggal lahir                      |
| jenis_kelamin  | enum          | ['L', 'P']                          |
| timestamps     | timestamps    |                                    |

---

### Tabel `pengajuan_perubahan`

| Nama Field       | Tipe Data     | Keterangan                          |
|------------------|---------------|--------------------------------------|
| id               | bigIncrements | Primary key                          |
| warga_id         | foreignId     | FK ke tabel warga                    |
| field_diubah     | string        | Field yang ingin diubah              |
| nilai_lama       | text          | Nilai sebelum perubahan              |
| nilai_baru       | text          | Nilai setelah perubahan              |
| status           | enum          | ['pending', 'disetujui', 'ditolak'] |
| catatan_petugas  | text          | Catatan dari petugas                 |
| timestamps       | timestamps    |                                      |

---

## 🔗 Jenis Relasi dan Tabel yang Berelasi

- `users` ↔ `petugas` = One to One  
- `users` ↔ `warga` = One to One  
- `warga` ↔ `pengajuan_perubahan` = One to Many

---

## ✅ Tujuan Sistem

Mempermudah proses pencarian dan penggunaan data warga dalam layanan administratif di tingkat desa dan kecamatan tanpa memerlukan dokumen fisik yang banyak.

---

<<<<<<< HEAD
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). --> -->
=======
>>>>>>> 77b39e430ab2cf14aecb908c48ab5314dcacac12
