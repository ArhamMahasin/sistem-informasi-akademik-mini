# DOKUMEN KESEPAKATAN TEKNIS

## SISTEM INFORMASI AKADEMIK MINI

**Institusi:** UIN Sunan Gunung Djati Bandung  
**Fakultas:** Sains dan Teknologi  
**Program Studi:** Teknik Informatika  
**Jumlah Anggota:** 7 Orang  
**Framework:** Laravel  
**Frontend:** Blade, Bootstrap 5, JavaScript  
**Database:** MySQL  
**Version Control:** Git dan GitHub  
**Containerization:** Docker dan Docker Compose

---

# 1. PENDAHULUAN

## 1.1 Tujuan Dokumen

Dokumen ini dibuat sebagai pedoman teknis bersama bagi seluruh anggota kelompok dalam mengembangkan aplikasi Sistem Informasi Akademik Mini.

Dokumen ini bertujuan untuk:

1. Menyamakan pemahaman seluruh anggota mengenai struktur dan teknologi proyek.
2. Menentukan standar pengembangan aplikasi.
3. Menghindari konflik kode dan perubahan file yang tidak terkoordinasi.
4. Memastikan setiap modul dapat dikembangkan secara bersamaan.
5. Mempermudah proses integrasi seluruh modul menjadi satu aplikasi.
6. Menjaga konsistensi tampilan, database, dan alur sistem.

## 1.2 Aturan Umum

Seluruh anggota wajib:

1. Mengikuti struktur folder proyek yang telah disepakati.
2. Menggunakan Laravel sebagai framework utama.
3. Menggunakan Blade dan Bootstrap 5 untuk tampilan.
4. Menggunakan MySQL sebagai database.
5. Menggunakan Git dan GitHub untuk pengelolaan kode.
6. Mengembangkan fitur sesuai pembagian tugas.
7. Tidak mengubah pekerjaan anggota lain tanpa koordinasi.
8. Melakukan pengujian sebelum mengajukan Pull Request.
9. Mengikuti standar database dan coding yang telah disepakati.
10. Melaporkan kendala teknis kepada ketua kelompok.

---

# 2. TEKNOLOGI PENGEMBANGAN

Seluruh anggota wajib menggunakan teknologi berikut:

| Komponen           | Teknologi          |
| ------------------ | ------------------ |
| Backend            | Laravel            |
| Frontend           | Blade              |
| CSS Framework      | Bootstrap 5        |
| JavaScript         | JavaScript         |
| Database           | MySQL 8.4          |
| Database Container | Docker             |
| Version Control    | Git                |
| Repository         | GitHub             |
| Code Editor        | Visual Studio Code |

## 2.1 Ketentuan Penggunaan Teknologi

1. Seluruh proses backend dikembangkan menggunakan Laravel.
2. Tampilan halaman menggunakan Blade.
3. Komponen antarmuka menggunakan Bootstrap 5.
4. JavaScript digunakan untuk interaksi halaman.
5. Seluruh data aplikasi disimpan dalam MySQL.
6. Setiap anggota menggunakan database pengembangan yang memiliki struktur sama.
7. Tidak diperbolehkan mengganti teknologi utama tanpa persetujuan ketua dan kesepakatan kelompok.

---

# 3. STRUKTUR TIM DAN TANGGUNG JAWAB

Pengembangan proyek dibagi kepada tujuh anggota.

| Anggota   | Tanggung Jawab                                      |
| --------- | --------------------------------------------------- |
| Anggota 1 | Ketua, UI/UX, Master Layout, autentikasi, integrasi |
| Anggota 2 | Administrasi data pengguna                          |
| Anggota 3 | Administrasi data akademik                          |
| Anggota 4 | Pengaturan akademik                                 |
| Anggota 5 | Modul dosen                                         |
| Anggota 6 | Modul KRS mahasiswa                                 |
| Anggota 7 | Modul akademik mahasiswa                            |

Setiap anggota bertanggung jawab mengembangkan bagian frontend dan backend sesuai modulnya.

## 3.1 Anggota 1 — Ketua dan Fondasi Aplikasi

Tanggung jawab:

- Mengatur koordinasi pengembangan.
- Membuat Design System.
- Membuat UI Showcase.
- Membuat Master Layout.
- Membuat Sidebar dan Navbar.
- Menyiapkan komponen UI bersama.
- Mengembangkan login dan logout.
- Mengembangkan autentikasi dan middleware role.
- Mengatur integrasi seluruh modul.
- Melakukan pemeriksaan Pull Request.

## 3.2 Anggota 2 — Administrasi Data Pengguna

Tanggung jawab:

- CRUD mahasiswa.
- CRUD dosen.
- Pengelolaan akun pengguna.
- Pengaturan username dan password.
- Reset password pengguna.
- Pengelolaan profil pengguna.

## 3.3 Anggota 3 — Administrasi Data Akademik

Tanggung jawab:

- CRUD program studi.
- CRUD angkatan.
- CRUD mata kuliah.
- Pengelolaan kelas perkuliahan.
- Pengelolaan jadwal kuliah.
- Pengaturan dosen pengampu.

## 3.4 Anggota 4 — Pengaturan Akademik

Tanggung jawab:

- Pengelolaan tahun akademik.
- Pengelolaan semester ganjil dan genap.
- Pengaturan semester aktif.
- Pengaturan periode pengisian KRS.
- Pengaturan periode perubahan nilai.
- Proses kenaikan semester mahasiswa.
- Laporan akademik.

## 3.5 Anggota 5 — Modul Dosen

Tanggung jawab:

- Dashboard dosen.
- Daftar kelas yang diampu.
- Jadwal mengajar.
- Daftar mahasiswa per kelas.
- Input nilai mahasiswa.
- Edit nilai sesuai periode.
- Rekap nilai.

## 3.6 Anggota 6 — Modul KRS Mahasiswa

Tanggung jawab:

- Dashboard KRS.
- Menampilkan daftar mata kuliah.
- Memilih kelas perkuliahan.
- Pengisian KRS.
- Perubahan KRS.
- Pembatalan mata kuliah dalam KRS.
- Menampilkan KRS tersimpan.

## 3.7 Anggota 7 — Modul Akademik Mahasiswa

Tanggung jawab:

- Menampilkan IP.
- Menampilkan IPK.
- Menampilkan total SKS yang telah diselesaikan.
- Menampilkan jadwal kuliah mingguan.
- Riwayat nilai mahasiswa.
- Pengelolaan profil mahasiswa.

---

# 4. ATURAN PENGEMBANGAN BERSAMA

1. Setiap anggota mengembangkan modul sesuai tanggung jawabnya.
2. Setiap anggota wajib menggunakan branch Git masing-masing.
3. Tidak diperbolehkan mengerjakan langsung pada branch `main` kecuali ketua melakukan integrasi atau perubahan yang telah disepakati.
4. Perubahan database harus dikoordinasikan.
5. Perubahan Master Layout dan CSS global hanya dilakukan oleh Anggota 1 atau melalui persetujuan Anggota 1.
6. Setiap modul harus menggunakan komponen UI yang telah disepakati.
7. Setiap anggota wajib melakukan pengujian sebelum mengirim Pull Request.
8. Jika terdapat perubahan kebutuhan sistem, perubahan harus dibicarakan bersama.
9. Setiap anggota wajib memperbarui progres pekerjaannya kepada ketua.

---

# 5. KETENTUAN INTEGRASI

Seluruh modul akan digabungkan ke dalam satu aplikasi Laravel.

Alur integrasi:

1. Anggota mengembangkan fitur pada branch masing-masing.
2. Anggota melakukan pengujian lokal.
3. Anggota melakukan commit dan push.
4. Anggota membuat Pull Request menuju `main`.
5. Ketua melakukan pemeriksaan perubahan kode.
6. Ketua memberikan persetujuan atau meminta perbaikan.
7. Ketua melakukan merge jika perubahan sudah sesuai.
8. Anggota melakukan sinkronisasi dengan branch `main` sebelum melanjutkan pekerjaan.

---

# 6. PENUTUP

Dokumen ini menjadi pedoman teknis bersama selama pengembangan Sistem Informasi Akademik Mini.

Seluruh anggota diharapkan mengikuti ketentuan yang telah disepakati agar proses pengembangan berjalan terarah, terstruktur, dan dapat diintegrasikan dengan baik.

Perubahan terhadap ketentuan dalam dokumen ini hanya dapat dilakukan melalui koordinasi dan persetujuan bersama.

---

# 7. STANDAR STRUKTUR FOLDER PROYEK

Seluruh anggota wajib mengikuti struktur folder Laravel yang telah disepakati.

Struktur folder ini dibuat agar setiap modul memiliki lokasi penyimpanan yang jelas dan memudahkan proses integrasi.

## 7.1 Struktur Folder Utama

Struktur folder target proyek:

```text
sistem-informasi-akademik-mini/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/
│   │   │   ├── Admin/
│   │   │   ├── Dosen/
│   │   │   └── Mahasiswa/
│   │   │
│   │   └── Middleware/
│   │
│   └── Models/
│       ├── User.php
│       ├── Mahasiswa.php
│       ├── Dosen.php
│       ├── ProgramStudi.php
│       ├── Angkatan.php
│       ├── MataKuliah.php
│       ├── TahunAkademik.php
│       ├── KelasKuliah.php
│       ├── JadwalKuliah.php
│       ├── Krs.php
│       ├── DetailKrs.php
│       └── Nilai.php
│
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │
│   ├── js/
│   │   └── app.js
│   │
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       ├── components/
│       │
│       ├── auth/
│       │
│       ├── showcase/
│       │
│       ├── admin/
│       │   ├── pengguna/
│       │   ├── akademik/
│       │   └── pengaturan/
│       │
│       ├── dosen/
│       │   ├── dashboard/
│       │   ├── kelas/
│       │   └── nilai/
│       │
│       └── mahasiswa/
│           ├── dashboard/
│           ├── krs/
│           └── akademik/
│
├── routes/
│   ├── web.php
│   ├── admin.php
│   ├── dosen.php
│   └── mahasiswa.php
│
├── public/
├── tests/
│
├── .env
├── .env.example
├── .gitignore
├── compose.yaml
├── package.json
├── composer.json
└── README.md
```

**Catatan:** Struktur di atas merupakan struktur target yang akan dikembangkan secara bertahap. Folder atau file yang belum ada tidak perlu dibuat sekaligus. Folder bawaan Laravel tetap dipertahankan.

## 7.2 Pembagian Folder Berdasarkan Anggota

| Anggota   | Lokasi Pekerjaan Utama                                                                                                                                                      |
| --------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Anggota 1 | `resources/views/layouts/`, `resources/views/components/`, `resources/views/auth/`, `app/Http/Controllers/Auth/`, `app/Http/Middleware/`, `resources/css/`, `resources/js/` |
| Anggota 2 | `app/Http/Controllers/Admin/`, `app/Models/`, `resources/views/admin/pengguna/`                                                                                             |
| Anggota 3 | `app/Http/Controllers/Admin/`, `app/Models/`, `resources/views/admin/akademik/`                                                                                             |
| Anggota 4 | `app/Http/Controllers/Admin/`, `app/Models/`, `resources/views/admin/pengaturan/`                                                                                           |
| Anggota 5 | `app/Http/Controllers/Dosen/`, `app/Models/`, `resources/views/dosen/`                                                                                                      |
| Anggota 6 | `app/Http/Controllers/Mahasiswa/`, `app/Models/`, `resources/views/mahasiswa/krs/`                                                                                          |
| Anggota 7 | `app/Http/Controllers/Mahasiswa/`, `app/Models/`, `resources/views/mahasiswa/akademik/`                                                                                     |

**Penting:** Beberapa anggota menggunakan folder yang sama, seperti `app/Models/` dan `app/Http/Controllers/Admin/`. Oleh karena itu, setiap anggota hanya boleh membuat atau mengubah file yang menjadi tanggung jawab modulnya. Perubahan file bersama harus dikoordinasikan dengan ketua.

## 7.3 Aturan Penamaan File

Seluruh anggota wajib menggunakan aturan penamaan berikut:

1. Nama Model menggunakan format PascalCase dan bentuk tunggal.

    Contoh: `Mahasiswa.php`, `MataKuliah.php`, `KelasKuliah.php`.

2. Nama Controller menggunakan format PascalCase dan diakhiri `Controller`.

    Contoh: `MahasiswaController.php`, `NilaiController.php`.

3. Nama tabel database menggunakan format snake_case.

    Contoh: `mahasiswa`, `mata_kuliah`, `kelas_kuliah`.

4. Nama file Blade menggunakan huruf kecil dan tanda hubung jika diperlukan.

    Contoh: `index.blade.php`, `create.blade.php`, `edit.blade.php`.

5. Nama route menggunakan format dot notation.

    Contoh: `admin.pengguna.index`, `dosen.nilai.index`, `mahasiswa.krs.index`.

6. Nama migration mengikuti format bawaan Laravel.

    Contoh: `create_mahasiswa_table`.

## 7.4 Aturan Pengelolaan File Bersama

File berikut merupakan file bersama yang tidak boleh diubah sembarangan:

| File                                    | Penanggung Jawab  |
| --------------------------------------- | ----------------- |
| `resources/css/app.css`                 | Anggota 1         |
| `resources/js/app.js`                   | Anggota 1         |
| `resources/views/layouts/app.blade.php` | Anggota 1         |
| `resources/views/components/`           | Anggota 1         |
| `routes/web.php`                        | Anggota 1 / Ketua |
| `compose.yaml`                          | Anggota 1 / Ketua |
| `.env.example`                          | Anggota 1 / Ketua |

Jika anggota membutuhkan perubahan terhadap file bersama, anggota wajib berkoordinasi dengan ketua terlebih dahulu.

## 7.5 Aturan Routing

Aplikasi menggunakan pemisahan file route berdasarkan peran pengguna.

| File                   | Fungsi                       |
| ---------------------- | ---------------------------- |
| `routes/web.php`       | Halaman umum dan autentikasi |
| `routes/admin.php`     | Halaman administrator        |
| `routes/dosen.php`     | Halaman dosen                |
| `routes/mahasiswa.php` | Halaman mahasiswa            |

Setiap file route khusus harus didaftarkan melalui konfigurasi routing Laravel agar dapat digunakan oleh aplikasi.

Ketentuan:

1. Anggota 1 bertanggung jawab mengatur pendaftaran file route.
2. Anggota lain menambahkan route pada file sesuai modulnya.
3. Setiap route harus memiliki nama yang jelas.
4. Route harus dilindungi middleware sesuai peran pengguna.
5. Anggota tidak boleh mengubah konfigurasi routing bersama tanpa koordinasi.

Contoh pola penamaan route:

```php
admin.pengguna.index
admin.pengguna.create
admin.pengguna.store

admin.akademik.mata-kuliah.index

dosen.dashboard
dosen.nilai.index

mahasiswa.dashboard
mahasiswa.krs.index
mahasiswa.akademik.nilai
```

## 7.6 Ketentuan Penggunaan Master Layout

Seluruh halaman aplikasi wajib menggunakan Master Layout yang disediakan oleh Anggota 1.

Contoh penggunaan:

```php
@extends('layouts.app')

@section('title', 'Dashboard Mahasiswa')

@section('sidebar-menu')
    {{-- Menu sesuai role pengguna --}}
@endsection

@section('content')
    <h4>Dashboard Mahasiswa</h4>
@endsection
```

Anggota tidak diperbolehkan membuat Master Layout baru untuk modul masing-masing.

Seluruh halaman harus mengikuti Design System dan komponen UI yang telah disepakati.

---

# 8. STANDAR DATABASE

Database aplikasi Sistem Informasi Akademik Mini menggunakan MySQL 8.4.

Seluruh anggota wajib menggunakan struktur database yang sama agar setiap modul dapat saling terhubung tanpa konflik.

## 8.1 Nama Database

Nama database yang digunakan:

```text
sia_mini
```

## 8.2 Ketentuan Umum Database

1. Seluruh tabel menggunakan storage engine InnoDB.
2. Seluruh tabel menggunakan primary key.
3. Relasi antartabel menggunakan foreign key jika diperlukan.
4. Nama tabel menggunakan format snake_case.
5. Nama kolom menggunakan format snake_case.
6. Tabel yang dikelola melalui Eloquent menggunakan `created_at` dan `updated_at` sesuai kebutuhan.
7. Kolom password tidak boleh menyimpan password dalam bentuk teks biasa.
8. Perubahan struktur database harus dikoordinasikan dengan ketua.
9. Setiap anggota wajib menggunakan migration Laravel.
10. Dilarang mengubah struktur database secara langsung tanpa migration.

## 8.3 Daftar Tabel Utama

Database memiliki 12 tabel utama:

| No. | Nama Tabel       | Fungsi                                            |
| --- | ---------------- | ------------------------------------------------- |
| 1   | `users`          | Menyimpan akun dan informasi autentikasi pengguna |
| 2   | `mahasiswa`      | Menyimpan data mahasiswa                          |
| 3   | `dosen`          | Menyimpan data dosen                              |
| 4   | `program_studi`  | Menyimpan data program studi                      |
| 5   | `angkatan`       | Menyimpan data angkatan mahasiswa                 |
| 6   | `mata_kuliah`    | Menyimpan data mata kuliah                        |
| 7   | `tahun_akademik` | Menyimpan tahun akademik dan semester             |
| 8   | `kelas_kuliah`   | Menyimpan kelas perkuliahan yang dibuka           |
| 9   | `jadwal_kuliah`  | Menyimpan jadwal perkuliahan                      |
| 10  | `krs`            | Menyimpan data KRS mahasiswa                      |
| 11  | `detail_krs`     | Menyimpan mata kuliah yang diambil dalam KRS      |
| 12  | `nilai`          | Menyimpan komponen dan hasil penilaian mahasiswa  |

## 8.4 Struktur dan Atribut Tabel

### 1. Tabel `users`

Fungsi: Menyimpan akun seluruh pengguna aplikasi.

| Kolom          | Tipe Data    | Keterangan                                    |
| -------------- | ------------ | --------------------------------------------- |
| id             | BIGINT       | Primary Key                                   |
| name           | VARCHAR(255) | Nama pengguna                                 |
| username       | VARCHAR(50)  | Username untuk login, unique                  |
| email          | VARCHAR(255) | Email pengguna, nullable jika tidak digunakan |
| password       | VARCHAR(255) | Password yang sudah di-hash                   |
| role           | ENUM         | admin, dosen, mahasiswa                       |
| remember_token | VARCHAR(100) | Token autentikasi                             |
| created_at     | TIMESTAMP    | Waktu dibuat                                  |
| updated_at     | TIMESTAMP    | Waktu diperbarui                              |

### 2. Tabel `program_studi`

Fungsi: Menyimpan data program studi.

| Kolom      | Tipe Data    | Keterangan                 |
| ---------- | ------------ | -------------------------- |
| id         | BIGINT       | Primary Key                |
| kode_prodi | VARCHAR(20)  | Kode program studi, unique |
| nama_prodi | VARCHAR(100) | Nama program studi         |
| created_at | TIMESTAMP    | Waktu dibuat               |
| updated_at | TIMESTAMP    | Waktu diperbarui           |

### 3. Tabel `angkatan`

Fungsi: Menyimpan informasi tahun masuk mahasiswa.

| Kolom      | Tipe Data | Keterangan       |
| ---------- | --------- | ---------------- |
| id         | BIGINT    | Primary Key      |
| tahun      | YEAR      | Tahun angkatan   |
| created_at | TIMESTAMP | Waktu dibuat     |
| updated_at | TIMESTAMP | Waktu diperbarui |

### 4. Tabel `mahasiswa`

Fungsi: Menyimpan data akademik dan identitas mahasiswa.

| Kolom             | Tipe Data    | Keterangan                    |
| ----------------- | ------------ | ----------------------------- |
| id                | BIGINT       | Primary Key                   |
| user_id           | BIGINT       | Foreign Key ke users          |
| nim               | VARCHAR(30)  | Nomor Induk Mahasiswa, unique |
| nama              | VARCHAR(150) | Nama mahasiswa                |
| program_studi_id  | BIGINT       | Foreign Key ke program_studi  |
| angkatan_id       | BIGINT       | Foreign Key ke angkatan       |
| kelas_asal        | ENUM         | A, B, C, D                    |
| semester_berjalan | TINYINT      | Semester mahasiswa saat ini   |
| created_at        | TIMESTAMP    | Waktu dibuat                  |
| updated_at        | TIMESTAMP    | Waktu diperbarui              |

### 5. Tabel `dosen`

Fungsi: Menyimpan data dosen.

| Kolom            | Tipe Data    | Keterangan                         |
| ---------------- | ------------ | ---------------------------------- |
| id               | BIGINT       | Primary Key                        |
| user_id          | BIGINT       | Foreign Key ke users               |
| nidn             | VARCHAR(30)  | Nomor Induk Dosen Nasional, unique |
| nama             | VARCHAR(150) | Nama dosen                         |
| program_studi_id | BIGINT       | Foreign Key ke program_studi       |
| created_at       | TIMESTAMP    | Waktu dibuat                       |
| updated_at       | TIMESTAMP    | Waktu diperbarui                   |

### 6. Tabel `mata_kuliah`

Fungsi: Menyimpan daftar mata kuliah.

| Kolom            | Tipe Data    | Keterangan                       |
| ---------------- | ------------ | -------------------------------- |
| id               | BIGINT       | Primary Key                      |
| kode_mk          | VARCHAR(20)  | Kode mata kuliah, unique         |
| nama_mk          | VARCHAR(150) | Nama mata kuliah                 |
| semester         | TINYINT      | Semester rekomendasi mata kuliah |
| sks              | TINYINT      | Jumlah SKS                       |
| program_studi_id | BIGINT       | Foreign Key ke program_studi     |
| created_at       | TIMESTAMP    | Waktu dibuat                     |
| updated_at       | TIMESTAMP    | Waktu diperbarui                 |

### 7. Tabel `tahun_akademik`

Fungsi: Menyimpan periode akademik dan pengaturan semester.

| Kolom           | Tipe Data  | Keterangan                     |
| --------------- | ---------- | ------------------------------ |
| id              | BIGINT     | Primary Key                    |
| tahun_akademik  | VARCHAR(9) | Contoh: 2026/2027              |
| semester        | ENUM       | Ganjil atau Genap              |
| tanggal_mulai   | DATE       | Tanggal mulai periode          |
| tanggal_selesai | DATE       | Tanggal akhir periode          |
| status_aktif    | BOOLEAN    | Penanda semester aktif         |
| krs_dibuka      | BOOLEAN    | Status periode pengisian KRS   |
| nilai_dibuka    | BOOLEAN    | Status periode perubahan nilai |
| created_at      | TIMESTAMP  | Waktu dibuat                   |
| updated_at      | TIMESTAMP  | Waktu diperbarui               |

### 8. Tabel `kelas_kuliah`

Fungsi: Menyimpan kelas mata kuliah yang dibuka pada suatu semester.

| Kolom             | Tipe Data | Keterangan                    |
| ----------------- | --------- | ----------------------------- |
| id                | BIGINT    | Primary Key                   |
| mata_kuliah_id    | BIGINT    | Foreign Key ke mata_kuliah    |
| dosen_id          | BIGINT    | Foreign Key ke dosen          |
| tahun_akademik_id | BIGINT    | Foreign Key ke tahun_akademik |
| nama_kelas        | ENUM      | A, B, C, D                    |
| kuota             | TINYINT   | Maksimal 35 mahasiswa         |
| created_at        | TIMESTAMP | Waktu dibuat                  |
| updated_at        | TIMESTAMP | Waktu diperbarui              |

### 9. Tabel `jadwal_kuliah`

Fungsi: Menyimpan jadwal kelas perkuliahan.

| Kolom           | Tipe Data    | Keterangan                  |
| --------------- | ------------ | --------------------------- |
| id              | BIGINT       | Primary Key                 |
| kelas_kuliah_id | BIGINT       | Foreign Key ke kelas_kuliah |
| hari            | ENUM         | Senin sampai Minggu         |
| jam_mulai       | TIME         | Waktu mulai                 |
| jam_selesai     | TIME         | Waktu selesai               |
| ruangan         | VARCHAR(100) | Ruangan perkuliahan         |
| created_at      | TIMESTAMP    | Waktu dibuat                |
| updated_at      | TIMESTAMP    | Waktu diperbarui            |

### 10. Tabel `krs`

Fungsi: Menyimpan data KRS setiap mahasiswa pada semester tertentu.

| Kolom             | Tipe Data | Keterangan                    |
| ----------------- | --------- | ----------------------------- |
| id                | BIGINT    | Primary Key                   |
| mahasiswa_id      | BIGINT    | Foreign Key ke mahasiswa      |
| tahun_akademik_id | BIGINT    | Foreign Key ke tahun_akademik |
| total_sks         | TINYINT   | Total SKS yang diambil        |
| status            | ENUM      | draft atau disimpan           |
| created_at        | TIMESTAMP | Waktu dibuat                  |
| updated_at        | TIMESTAMP | Waktu diperbarui              |

### 11. Tabel `detail_krs`

Fungsi: Menyimpan mata kuliah dan kelas yang dipilih mahasiswa dalam KRS.

| Kolom           | Tipe Data | Keterangan                  |
| --------------- | --------- | --------------------------- |
| id              | BIGINT    | Primary Key                 |
| krs_id          | BIGINT    | Foreign Key ke krs          |
| kelas_kuliah_id | BIGINT    | Foreign Key ke kelas_kuliah |
| created_at      | TIMESTAMP | Waktu dibuat                |
| updated_at      | TIMESTAMP | Waktu diperbarui            |

### 12. Tabel `nilai`

Fungsi: Menyimpan nilai mahasiswa untuk setiap mata kuliah yang diambil.

| Kolom           | Tipe Data    | Keterangan                |
| --------------- | ------------ | ------------------------- |
| id              | BIGINT       | Primary Key               |
| detail_krs_id   | BIGINT       | Foreign Key ke detail_krs |
| nilai_kehadiran | DECIMAL(5,2) | Nilai kehadiran           |
| nilai_tugas     | DECIMAL(5,2) | Nilai tugas               |
| nilai_uts       | DECIMAL(5,2) | Nilai UTS                 |
| nilai_uas       | DECIMAL(5,2) | Nilai UAS                 |
| nilai_praktikum | DECIMAL(5,2) | Nilai praktikum           |
| nilai_akhir     | DECIMAL(5,2) | Nilai akhir               |
| nilai_huruf     | CHAR(1)      | Nilai huruf A, B, C, D, E |
| bobot           | DECIMAL(3,2) | Bobot nilai               |
| created_at      | TIMESTAMP    | Waktu dibuat              |
| updated_at      | TIMESTAMP    | Waktu diperbarui          |

## 8.5 Relasi Antar Tabel

Relasi utama database:

1. `users` memiliki satu data `mahasiswa` atau satu data `dosen` sesuai role.
2. `program_studi` memiliki banyak mahasiswa.
3. `program_studi` memiliki banyak dosen.
4. `program_studi` memiliki banyak mata kuliah.
5. `angkatan` memiliki banyak mahasiswa.
6. `mata_kuliah` memiliki banyak kelas kuliah.
7. `dosen` dapat mengampu banyak kelas kuliah.
8. `tahun_akademik` memiliki banyak kelas kuliah.
9. `tahun_akademik` memiliki banyak KRS.
10. `kelas_kuliah` memiliki jadwal perkuliahan.
11. `mahasiswa` dapat memiliki banyak KRS pada periode akademik berbeda.
12. `krs` memiliki banyak detail KRS.
13. `kelas_kuliah` dapat dipilih oleh banyak detail KRS.
14. `detail_krs` memiliki satu data nilai.

## 8.6 Ketentuan Pengembangan Migration

1. Seluruh struktur tabel harus dibuat menggunakan Laravel Migration.
2. Migration dibuat sesuai urutan ketergantungan foreign key.
3. Anggota tidak boleh mengubah migration yang sudah digunakan bersama tanpa koordinasi.
4. Jika terdapat perubahan struktur tabel, buat migration baru.
5. Migration harus diuji sebelum diajukan untuk integrasi.
6. Seeder digunakan untuk menyediakan data awal yang dibutuhkan aplikasi.
7. Anggota wajib melaporkan migration baru kepada ketua.

## 8.7 Pembagian Tanggung Jawab Database

| Anggota   | Tanggung Jawab                                                             |
| --------- | -------------------------------------------------------------------------- |
| Anggota 1 | Tabel users dan autentikasi                                                |
| Anggota 2 | Tabel mahasiswa dan dosen                                                  |
| Anggota 3 | Tabel program_studi, angkatan, mata_kuliah, kelas_kuliah, jadwal_kuliah    |
| Anggota 4 | Tabel tahun_akademik dan pengaturan periode akademik                       |
| Anggota 5 | Penggunaan tabel dosen, kelas_kuliah, jadwal_kuliah, detail_krs, dan nilai |
| Anggota 6 | Penggunaan tabel mahasiswa, mata_kuliah, kelas_kuliah, krs, dan detail_krs |
| Anggota 7 | Penggunaan tabel mahasiswa, krs, detail_krs, dan nilai                     |

**Catatan penting:** Pembagian tanggung jawab di atas tidak berarti setiap anggota membuat ulang tabel yang sama. Setiap tabel hanya memiliki satu pemilik utama untuk perubahan struktur. Anggota lain menggunakan tabel tersebut melalui relasi Model dan Eloquent.

## 8.8 Ketentuan Tambahan

1. Setiap mahasiswa hanya memiliki satu KRS untuk satu periode akademik.
2. Satu kelas kuliah maksimal memiliki kuota 35 mahasiswa.
3. Mahasiswa tidak boleh mengambil kelas yang jadwalnya bertabrakan.
4. Mata kuliah yang diambil harus mengikuti ketentuan semester ganjil atau genap.
5. Total SKS tidak boleh melebihi batas berdasarkan IP semester sebelumnya.
6. Nilai mahasiswa terhubung dengan detail KRS, bukan langsung dengan tabel mahasiswa.
7. Riwayat pengambilan mata kuliah harus tetap tersimpan meskipun mahasiswa mengulang mata kuliah.
8. Perhitungan IP dan IPK dilakukan berdasarkan aturan akademik yang telah disepakati.

---

# 9. STANDAR MODEL DAN CONTROLLER

Seluruh anggota wajib mengikuti standar pembuatan Model dan Controller Laravel agar kode aplikasi konsisten dan mudah diintegrasikan.

## 9.1 Standar Model

Model digunakan untuk menghubungkan aplikasi Laravel dengan tabel database.

Ketentuan:

1. Setiap tabel utama memiliki Model masing-masing.
2. Nama Model menggunakan format PascalCase dan bentuk tunggal.
3. Model ditempatkan pada folder `app/Models/`.
4. Setiap Model wajib menggunakan nama tabel sesuai struktur database.
5. Relasi antartabel harus didefinisikan menggunakan Eloquent Relationship.
6. Kolom yang dapat diisi melalui aplikasi harus diatur menggunakan `$fillable` atau `$guarded`.
7. Gunakan `$casts` untuk menentukan tipe data atribut jika diperlukan.
8. Jangan membuat Model duplikat untuk tabel yang sama.
9. Perubahan Model bersama harus dikoordinasikan dengan pemilik tabel dan ketua.

Contoh nama Model:

| Nama Tabel     | Nama Model    |
| -------------- | ------------- |
| users          | User          |
| mahasiswa      | Mahasiswa     |
| dosen          | Dosen         |
| program_studi  | ProgramStudi  |
| angkatan       | Angkatan      |
| mata_kuliah    | MataKuliah    |
| tahun_akademik | TahunAkademik |
| kelas_kuliah   | KelasKuliah   |
| jadwal_kuliah  | JadwalKuliah  |
| krs            | Krs           |
| detail_krs     | DetailKrs     |
| nilai          | Nilai         |

Contoh pembuatan Model:

```bash
php artisan make:model Mahasiswa
```

Contoh struktur Model:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'user_id',
        'nim',
        'nama',
        'program_studi_id',
        'angkatan_id',
        'kelas_asal',
        'semester_berjalan',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function programStudi(): BelongsTo
    {
        return $this->belongsTo(ProgramStudi::class);
    }

    public function angkatan(): BelongsTo
    {
        return $this->belongsTo(Angkatan::class);
    }
}
```

Contoh tersebut menjadi acuan penulisan Model. Setiap anggota wajib menyesuaikan atribut dan relasi berdasarkan tabel yang dikerjakan.

## 9.2 Standar Controller

Controller digunakan untuk mengatur proses aplikasi, mulai dari menerima permintaan, menjalankan proses, hingga mengembalikan tampilan atau respons.

Ketentuan:

1. Controller ditempatkan sesuai kelompok modul.
2. Nama Controller menggunakan format PascalCase.
3. Nama Controller diakhiri dengan `Controller`.
4. Controller tidak boleh memiliki fungsi yang sama dengan Controller lain tanpa alasan yang jelas.
5. Proses validasi wajib dilakukan sebelum data disimpan atau diperbarui.
6. Gunakan Eloquent untuk mengakses database.
7. Gunakan redirect dan flash message untuk memberikan informasi hasil proses kepada pengguna.
8. Hindari menulis seluruh logika aplikasi di dalam file Route.
9. Controller harus fokus pada proses sesuai tanggung jawab modul.
10. Perubahan Controller yang digunakan bersama harus dikoordinasikan.

Contoh nama Controller:

| Modul          | Nama Controller         |
| -------------- | ----------------------- |
| Login          | AuthController          |
| Pengguna       | PenggunaController      |
| Mahasiswa      | MahasiswaController     |
| Dosen          | DosenController         |
| Program Studi  | ProgramStudiController  |
| Mata Kuliah    | MataKuliahController    |
| Kelas Kuliah   | KelasKuliahController   |
| Tahun Akademik | TahunAkademikController |
| KRS            | KrsController           |
| Nilai          | NilaiController         |

Contoh pembuatan Controller:

```bash
php artisan make:controller Admin/MahasiswaController
```

Contoh Controller sederhana:

```php
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\View\View;

class MahasiswaController extends Controller
{
    public function index(): View
    {
        $mahasiswa = Mahasiswa::with([
            'user',
            'programStudi',
            'angkatan',
        ])->get();

        return view('admin.pengguna.mahasiswa.index', compact('mahasiswa'));
    }
}
```

## 9.3 Standar Operasi CRUD

Setiap modul yang membutuhkan pengelolaan data wajib mengikuti pola CRUD berikut:

| Operasi                     | Method Controller | HTTP Method |
| --------------------------- | ----------------- | ----------- |
| Menampilkan data            | index()           | GET         |
| Menampilkan formulir tambah | create()          | GET         |
| Menyimpan data              | store()           | POST        |
| Menampilkan detail          | show()            | GET         |
| Menampilkan formulir edit   | edit()            | GET         |
| Memperbarui data            | update()          | PUT/PATCH   |
| Menghapus data              | destroy()         | DELETE      |

Nama method dan alur CRUD harus konsisten pada seluruh modul.

## 9.4 Standar Validasi Data

Setiap data yang dimasukkan pengguna wajib melalui validasi.

Ketentuan:

1. Validasi dilakukan di sisi backend menggunakan fitur Laravel.
2. Validasi harus sesuai dengan tipe dan kebutuhan data.
3. Kolom yang wajib diisi harus menggunakan aturan `required`.
4. Data unik harus menggunakan aturan `unique` sesuai tabel.
5. Data yang memiliki relasi wajib diperiksa keberadaannya.
6. Pesan kesalahan harus mudah dipahami pengguna.
7. Password harus menggunakan mekanisme hashing Laravel.
8. Validasi tidak boleh hanya mengandalkan JavaScript pada browser.

Contoh validasi:

```php
$request->validate([
    'nim' => 'required|string|max:30|unique:mahasiswa,nim',
    'nama' => 'required|string|max:150',
    'program_studi_id' => 'required|exists:program_studi,id',
    'angkatan_id' => 'required|exists:angkatan,id',
    'kelas_asal' => 'required|in:A,B,C,D',
]);
```

## 9.5 Standar Penanganan Data

1. Gunakan Eloquent ORM untuk proses pengambilan dan penyimpanan data.
2. Gunakan eager loading seperti `with()` apabila diperlukan untuk menghindari query berulang.
3. Gunakan database transaction untuk proses yang melibatkan beberapa perubahan data yang harus berhasil atau gagal bersama.
4. Jangan menghapus data yang masih memiliki relasi penting tanpa pemeriksaan.
5. Gunakan mekanisme penghapusan yang sesuai dengan kebutuhan sistem.
6. Jangan menampilkan informasi sensitif seperti password kepada pengguna.
7. Jangan menaruh kredensial database di dalam Controller atau Model.

## 9.6 Standar Penggunaan Form Request

Untuk validasi yang cukup kompleks atau digunakan berulang, anggota dianjurkan menggunakan Form Request.

Contoh pembuatan:

```bash
php artisan make:request StoreMahasiswaRequest
```

Form Request ditempatkan pada:

```text
app/Http/Requests/
```

Penggunaan Form Request bertujuan agar kode Controller lebih rapi dan validasi lebih mudah dikelola.

## 9.7 Standar Penggunaan Database Transaction

Database transaction digunakan ketika satu proses melibatkan beberapa perubahan data yang harus konsisten.

Contoh penerapan:

- Menyimpan KRS beserta detail mata kuliah.
- Menghapus atau membatalkan pengambilan mata kuliah.
- Melakukan proses akademik yang memperbarui beberapa tabel sekaligus.

Contoh penggunaan:

```php
use Illuminate\Support\Facades\DB;

DB::transaction(function () {
    // Proses penyimpanan beberapa data.
});
```

## 9.8 Standar Pembagian Tanggung Jawab

1. Setiap anggota bertanggung jawab terhadap Controller pada modulnya.
2. Setiap Model memiliki pemilik utama sesuai pembagian tabel pada Bagian 8.
3. Anggota lain boleh menggunakan Model yang sudah tersedia.
4. Anggota tidak diperbolehkan membuat Model baru untuk tabel yang sudah memiliki Model.
5. Jika membutuhkan penambahan relasi atau atribut Model milik anggota lain, koordinasikan terlebih dahulu.
6. Ketua bertanggung jawab memastikan seluruh Model dan Controller dapat terintegrasi.

---

# 10. STANDAR TAMPILAN (FRONTEND)

Seluruh tampilan aplikasi Sistem Informasi Akademik Mini wajib menggunakan Blade dan Bootstrap 5.

Tujuan standar tampilan adalah menjaga konsistensi desain, kemudahan penggunaan, dan keseragaman antarmodul.

## 10.1 Konsep Desain

Aplikasi menggunakan konsep:

**Minimalis Modern Akademik**

Karakteristik desain:

1. Sederhana dan mudah digunakan.
2. Tampilan bersih dan tidak terlalu ramai.
3. Navigasi mudah dipahami.
4. Informasi disajikan secara terstruktur.
5. Responsif pada desktop, tablet, dan smartphone.
6. Seluruh halaman menggunakan komponen desain yang konsisten.

## 10.2 Design System

Seluruh anggota wajib mengikuti warna dan gaya desain berikut:

| Elemen       | Nilai     |
| ------------ | --------- |
| Primary      | `#2563EB` |
| Primary Dark | `#1D4ED8` |
| Background   | `#F3F4F6` |
| White        | `#FFFFFF` |
| Text         | `#1F2937` |
| Text Muted   | `#6B7280` |
| Border       | `#E5E7EB` |
| Font         | Inter     |

Ketentuan:

1. Warna utama tombol dan elemen penting menggunakan warna Primary.
2. Background halaman menggunakan warna Background.
3. Card dan area konten menggunakan warna putih.
4. Teks utama menggunakan warna Text.
5. Teks tambahan menggunakan warna Text Muted.
6. Garis pembatas menggunakan warna Border.
7. Font utama menggunakan Inter.

## 10.3 Master Layout

Seluruh halaman setelah login wajib menggunakan Master Layout yang telah dibuat oleh Anggota 1.

Master Layout terdiri dari:

1. Sidebar di bagian kiri.
2. Navbar di bagian atas.
3. Area konten utama.
4. Area informasi pengguna.
5. Menu navigasi berdasarkan role pengguna.

Ketentuan:

- Anggota tidak boleh membuat layout utama baru.
- Sidebar dan Navbar dikelola oleh Anggota 1.
- Setiap role memiliki menu yang sesuai dengan hak aksesnya.
- Seluruh halaman modul harus menggunakan Master Layout yang sama.

## 10.4 Komponen UI Bersama

Anggota 1 bertanggung jawab menyediakan komponen UI yang dapat digunakan oleh seluruh anggota.

Komponen yang disediakan:

| Komponen | Fungsi                  |
| -------- | ----------------------- |
| Button   | Tombol aksi             |
| Card     | Wadah informasi         |
| Table    | Menampilkan data        |
| Form     | Input data              |
| Badge    | Penanda status          |
| Modal    | Dialog konfirmasi       |
| Alert    | Pesan informasi         |
| Navbar   | Navigasi bagian atas    |
| Sidebar  | Navigasi bagian samping |

Anggota lain wajib menggunakan komponen yang tersedia apabila sesuai dengan kebutuhan modulnya.

Jika membutuhkan komponen tambahan, anggota dapat mengusulkan kepada Anggota 1.

## 10.5 Standar Tampilan Halaman

Seluruh halaman wajib mengikuti pola berikut:

1. Memiliki judul halaman yang jelas.
2. Memiliki deskripsi singkat jika diperlukan.
3. Menggunakan Card untuk mengelompokkan informasi.
4. Menggunakan Table untuk menampilkan data berbentuk daftar.
5. Menggunakan Form untuk input dan perubahan data.
6. Menampilkan pesan berhasil atau gagal setelah proses tertentu.
7. Menampilkan kondisi kosong jika belum ada data.
8. Menampilkan indikator loading apabila diperlukan.

## 10.6 Standar Form

Seluruh form wajib mengikuti ketentuan:

1. Setiap input memiliki label.
2. Input wajib diberi tanda atau keterangan yang jelas.
3. Pesan validasi ditampilkan dekat dengan input terkait.
4. Tombol Simpan dan Batal harus mudah dikenali.
5. Data yang sudah dimasukkan harus tetap tersedia ketika validasi gagal, sejauh sesuai dengan keamanan dan kebutuhan form.
6. Form edit harus menampilkan data yang sedang diperbarui.
7. Form penghapusan data penting harus menggunakan konfirmasi.

## 10.7 Standar Tabel

Tabel data wajib:

1. Memiliki judul kolom yang jelas.
2. Menggunakan format data yang konsisten.
3. Menyediakan informasi ketika data kosong.
4. Menampilkan tombol aksi sesuai kebutuhan.
5. Menggunakan pagination jika jumlah data cukup banyak.
6. Menggunakan filter apabila diperlukan oleh modul.
7. Tidak menampilkan kolom informasi sensitif.

## 10.8 Standar Tombol dan Aksi

Gunakan fungsi tombol sesuai tujuan:

| Jenis Aksi | Contoh Tampilan |
| ---------- | --------------- |
| Tambah     | Tambah Data     |
| Simpan     | Simpan          |
| Edit       | Edit            |
| Hapus      | Hapus           |
| Batal      | Batal           |
| Detail     | Lihat Detail    |
| Kembali    | Kembali         |

Ketentuan:

1. Tombol dengan aksi berbeda harus memiliki tampilan yang mudah dibedakan.
2. Penghapusan data penting wajib menggunakan konfirmasi.
3. Tombol yang tidak memiliki fungsi tidak boleh ditampilkan sebagai tombol aktif.
4. Setiap tombol harus menjalankan aksi yang sesuai.

## 10.9 Standar Responsif

Aplikasi harus dapat digunakan pada:

- Desktop.
- Laptop.
- Tablet.
- Smartphone.

Ketentuan:

1. Sidebar desktop ditampilkan di sisi kiri.
2. Sidebar pada perangkat kecil dapat dibuka melalui tombol hamburger.
3. Konten tidak boleh terpotong pada layar kecil.
4. Tabel harus dapat diakses melalui tampilan responsif.
5. Form harus menyesuaikan lebar layar.
6. Tombol dan menu harus mudah digunakan melalui layar sentuh.

## 10.10 Standar Penggunaan JavaScript

JavaScript digunakan untuk interaksi antarmuka.

Contoh penggunaan:

- Membuka dan menutup modal.
- Menampilkan konfirmasi.
- Interaksi dropdown.
- Validasi tambahan pada sisi browser.
- Interaksi navigasi.

Ketentuan:

1. Validasi JavaScript tidak menggantikan validasi backend.
2. JavaScript tidak boleh menjadi satu-satunya pengaman data.
3. Perubahan pada `resources/js/app.js` harus dikoordinasikan dengan Anggota 1.
4. Hindari menambahkan library JavaScript baru tanpa persetujuan ketua.

## 10.11 Aturan Perubahan Desain

1. Anggota tidak boleh mengubah warna utama aplikasi secara sepihak.
2. Anggota tidak boleh mengubah font utama secara sepihak.
3. Anggota tidak boleh membuat Sidebar atau Navbar baru.
4. Anggota tidak boleh mengubah Master Layout tanpa koordinasi.
5. Jika terdapat kebutuhan desain baru, anggota menyampaikan usulan kepada Anggota 1.
6. Perubahan desain global harus diterapkan secara konsisten pada seluruh modul.

## 10.12 Pengujian Tampilan

Sebelum mengajukan Pull Request, setiap anggota wajib memastikan:

- Halaman dapat dibuka.
- Tidak ada tampilan yang rusak.
- Form dapat digunakan.
- Tombol menjalankan fungsi yang benar.
- Data ditampilkan dengan benar.
- Pesan validasi dapat terlihat.
- Tampilan sesuai Design System.
- Tampilan responsif pada ukuran layar yang berbeda.
- Tidak ada perubahan yang merusak halaman modul lain.

---

# 11. STANDAR GIT DAN GITHUB

Seluruh anggota wajib menggunakan Git dan GitHub untuk mengelola kode sumber proyek.

Repository utama:

https://github.com/ArhamMahasin/sistem-informasi-akademik-mini

Branch utama:

```text
main
```

## 11.1 Aturan Umum Git

1. Setiap anggota wajib melakukan clone repository resmi.
2. Setiap anggota wajib memiliki branch sendiri untuk mengembangkan fitur.
3. Branch `main` merupakan branch utama yang berisi kode proyek yang telah diintegrasikan.
4. Anggota tidak diperbolehkan mengerjakan fitur langsung pada branch `main`.
5. Setiap perubahan harus melalui commit.
6. Setiap fitur yang sudah selesai harus diajukan melalui Pull Request.
7. Ketua bertanggung jawab memeriksa dan mengintegrasikan perubahan.
8. Jangan memasukkan file `.env`, `vendor/`, atau `node_modules/` ke repository.

## 11.2 Ketentuan Penamaan Branch

Gunakan format:

```text
fitur/nama-modul
```

Contoh branch berdasarkan anggota:

| Anggota   | Nama Branch                |
| --------- | -------------------------- |
| Anggota 1 | `fitur/fondasi-aplikasi`   |
| Anggota 2 | `fitur/admin-pengguna`     |
| Anggota 3 | `fitur/admin-akademik`     |
| Anggota 4 | `fitur/admin-pengaturan`   |
| Anggota 5 | `fitur/modul-dosen`        |
| Anggota 6 | `fitur/mahasiswa-krs`      |
| Anggota 7 | `fitur/mahasiswa-akademik` |

Jika satu anggota mengerjakan beberapa fitur terpisah, anggota dapat membuat branch tambahan berdasarkan fitur tersebut setelah berkoordinasi dengan ketua.

## 11.3 Aturan Commit

Setiap commit harus memiliki pesan yang menjelaskan perubahan.

Gunakan format:

```text
jenis: deskripsi perubahan
```

Jenis commit:

| Jenis      | Kegunaan                                |
| ---------- | --------------------------------------- |
| `feat`     | Menambahkan fitur                       |
| `fix`      | Memperbaiki bug                         |
| `style`    | Mengubah tampilan atau format kode      |
| `refactor` | Merapikan kode tanpa mengubah fungsi    |
| `docs`     | Mengubah dokumentasi                    |
| `test`     | Menambahkan atau memperbaiki pengujian  |
| `chore`    | Perubahan konfigurasi atau pemeliharaan |

Contoh:

```bash
git add .
git commit -m "feat: menambahkan CRUD data mahasiswa"
```

Contoh lainnya:

```bash
git commit -m "fix: memperbaiki validasi form mahasiswa"
git commit -m "style: menyesuaikan tampilan tabel dosen"
git commit -m "docs: memperbarui dokumentasi proyek"
```

## 11.4 Alur Sebelum Mulai Bekerja

Sebelum mengembangkan fitur, anggota wajib mengambil perubahan terbaru dari `main`.

Contoh:

```bash
git checkout main
git pull origin main
```

Kemudian pindah atau buat branch fitur:

```bash
git checkout -b fitur/nama-modul
```

Jika branch sudah pernah dibuat:

```bash
git checkout fitur/nama-modul
```

Anggota tidak perlu membuat ulang branch yang sudah tersedia.

## 11.5 Alur Setelah Mengembangkan Fitur

Setelah pekerjaan selesai:

```bash
git add .
git commit -m "feat: deskripsi fitur"
git push -u origin fitur/nama-modul
```

Setelah berhasil melakukan push, anggota membuat Pull Request melalui GitHub.

## 11.6 Aturan Pull Request

Setiap anggota wajib mengajukan Pull Request dengan ketentuan:

1. Base branch harus `main`.
2. Compare branch harus branch fitur anggota.
3. Judul Pull Request harus menjelaskan fitur yang dibuat.
4. Deskripsi harus menjelaskan perubahan.
5. Anggota wajib menyampaikan hasil pengujian.
6. Anggota tidak boleh melakukan merge sendiri.
7. Ketua memeriksa perubahan sebelum memberikan persetujuan.
8. Pull Request hanya boleh digabungkan setelah dinyatakan sesuai.

Contoh judul Pull Request:

```text
feat: CRUD data mahasiswa
```

Contoh deskripsi:

```text
## Perubahan
- Menambahkan halaman daftar mahasiswa.
- Menambahkan form tambah mahasiswa.
- Menambahkan proses penyimpanan mahasiswa.
- Menambahkan validasi data mahasiswa.

## Pengujian
- [x] Halaman daftar dapat dibuka.
- [x] Form tambah dapat digunakan.
- [x] Data berhasil disimpan.
- [x] Validasi berjalan.
```

## 11.7 Tanggung Jawab Ketua

Ketua bertanggung jawab:

1. Memeriksa setiap Pull Request.
2. Memastikan perubahan sesuai pembagian tugas.
3. Memastikan tidak ada file sensitif yang ikut dikirim.
4. Memastikan migration tidak bertentangan.
5. Memeriksa perubahan file bersama.
6. Memastikan fitur dapat dijalankan.
7. Meminta perbaikan jika ditemukan masalah.
8. Melakukan merge setelah perubahan disetujui.

## 11.8 Sinkronisasi Branch

Anggota wajib memperbarui branch fitur jika terdapat perubahan baru pada `main`.

Contoh:

```bash
git checkout main
git pull origin main

git checkout fitur/nama-modul
git merge main
```

Jika terjadi konflik:

1. Jangan langsung menghapus perubahan anggota lain.
2. Periksa file yang mengalami konflik.
3. Diskusikan perubahan dengan pemilik file.
4. Selesaikan konflik secara hati-hati.
5. Uji kembali aplikasi.
6. Lanjutkan commit setelah konflik selesai.

## 11.9 Aturan Keamanan Repository

1. File `.env` tidak boleh diunggah ke GitHub.
2. Password database asli tidak boleh dimasukkan ke repository.
3. API key dan token tidak boleh dimasukkan ke kode publik.
4. Gunakan `.env.example` sebagai contoh konfigurasi.
5. Jangan mengunggah file hasil build atau dependency yang sudah diatur dalam `.gitignore`.
6. Jika kredensial terlanjur terunggah, segera laporkan kepada ketua dan lakukan penggantian kredensial.

## 11.10 Perlindungan Branch Main

Branch `main` dilindungi dengan aturan GitHub.

Ketentuan:

1. Anggota tidak boleh melakukan push langsung ke `main`.
2. Perubahan dari anggota harus melalui Pull Request.
3. Pull Request memerlukan persetujuan dari Code Owner sesuai aturan repository.
4. Ketua bertanggung jawab melakukan merge.
5. Ketua dapat melakukan perubahan langsung jika diperlukan sesuai hak akses dan aturan repository.

**Catatan:** Perlindungan branch harus tetap diperiksa melalui pengaturan GitHub. Jangan menganggap aturan berlaku jika pengaturannya belum aktif.

---

# 12. ALUR KERJA PARALEL DAN INTEGRASI ANTARANGGOTA

Pengembangan Sistem Informasi Akademik Mini dilakukan secara paralel dengan tetap memperhatikan ketergantungan antarfitur.

Setiap anggota dapat mengerjakan modul masing-masing secara bersamaan selama struktur database, standar coding, dan komponen bersama telah disepakati.

## 12.1 Prinsip Pengembangan Paralel

1. Setiap anggota mengerjakan modul sesuai pembagian tugas.
2. Anggota tidak harus menunggu seluruh pekerjaan anggota lain selesai.
3. Pekerjaan dapat dimulai secara bersamaan setelah kebutuhan teknis modul disepakati.
4. Setiap modul dikembangkan pada branch masing-masing.
5. Integrasi dilakukan secara bertahap melalui Pull Request.
6. Setiap anggota wajib menggunakan struktur dan standar yang sama.
7. Jika suatu fitur bergantung pada fitur lain, anggota harus berkoordinasi sebelum mengintegrasikannya.

## 12.2 Tahapan Pengembangan

Pengembangan proyek dibagi menjadi beberapa tahapan.

| Tahap | Pekerjaan                             | Penanggung Jawab                    |
| ----- | ------------------------------------- | ----------------------------------- |
| 1     | Persiapan proyek Laravel dan database | Anggota 1                           |
| 2     | Design System dan UI Showcase         | Anggota 1                           |
| 3     | Master Layout dan komponen UI         | Anggota 1                           |
| 4     | Autentikasi dan pembagian role        | Anggota 1                           |
| 5     | Pengembangan modul masing-masing      | Anggota 2–7                         |
| 6     | Integrasi modul                       | Seluruh anggota, dipimpin Anggota 1 |
| 7     | Pengujian keseluruhan aplikasi        | Seluruh anggota                     |
| 8     | Dokumentasi dan penyelesaian          | Seluruh anggota                     |
| 9     | Deployment                            | Ketua dan anggota yang ditugaskan   |

Tahap 1 sampai 4 menjadi fondasi utama aplikasi. Anggota lain dapat menyiapkan desain halaman, rancangan proses, dan pekerjaan yang tidak bergantung pada fondasi tersebut sambil menunggu kesiapan integrasi.

## 12.3 Ketentuan Pekerjaan Paralel

Pekerjaan berikut dapat dilakukan secara bersamaan setelah kesepakatan database dan kontrak teknis tersedia.

| Anggota   | Pekerjaan                     | Ketergantungan Utama                      |
| --------- | ----------------------------- | ----------------------------------------- |
| Anggota 2 | CRUD data mahasiswa dan dosen | Struktur tabel dan Model pengguna         |
| Anggota 3 | CRUD data akademik            | Struktur tabel akademik                   |
| Anggota 4 | Pengaturan akademik           | Struktur tahun akademik dan aturan sistem |
| Anggota 5 | Modul dosen                   | Autentikasi, kelas kuliah, dan nilai      |
| Anggota 6 | Modul KRS mahasiswa           | Autentikasi, mata kuliah, kelas, dan KRS  |
| Anggota 7 | Modul akademik mahasiswa      | Data mahasiswa, KRS, dan nilai            |

Setiap anggota boleh memulai pembuatan tampilan dan rancangan backend sebelum seluruh modul lain selesai.

Namun, integrasi fitur yang memiliki ketergantungan harus dilakukan setelah komponen yang dibutuhkan tersedia.

## 12.4 Alur Integrasi Modul

Integrasi dilakukan dengan urutan berikut:

1. Anggota 1 menyiapkan fondasi aplikasi.
2. Anggota 1 menyediakan Master Layout dan komponen UI.
3. Anggota 1 menyiapkan autentikasi dan middleware role.
4. Setiap anggota mengembangkan modulnya pada branch masing-masing.
5. Anggota melakukan pengujian mandiri.
6. Anggota mengajukan Pull Request.
7. Ketua memeriksa dan menggabungkan perubahan.
8. Modul yang sudah digabungkan diuji kembali.
9. Jika terjadi masalah, anggota terkait melakukan perbaikan.
10. Proses diulang sampai seluruh modul terintegrasi.

## 12.5 Ketentuan Koordinasi Antaranggota

1. Setiap anggota wajib memberikan laporan progres kepada ketua.
2. Anggota wajib memberitahu ketua jika menemukan perubahan kebutuhan database.
3. Anggota wajib berkoordinasi jika membutuhkan file milik anggota lain.
4. Anggota tidak boleh mengubah struktur folder atau standar bersama secara sepihak.
5. Jika terdapat konflik kode, penyelesaian dilakukan bersama pemilik file.
6. Setiap keputusan teknis yang memengaruhi modul lain harus disampaikan kepada anggota terkait.

## 12.6 Laporan Progres

Setiap anggota wajib melaporkan progres dengan format:

```text
LAPORAN PROGRES

Nama Anggota:
Modul:
Branch:

Pekerjaan yang sudah selesai:
1.
2.
3.

Pekerjaan yang sedang dikerjakan:
1.
2.

Kendala:
1.

File yang mengalami perubahan:
1.
2.

Status pengujian:
- Belum diuji / Sedang diuji / Berhasil

Status Pull Request:
- Belum dibuat / Menunggu review / Selesai
```

## 12.7 Ketentuan Pengujian Integrasi

Setelah suatu modul berhasil digabungkan:

1. Pastikan aplikasi dapat dijalankan.
2. Pastikan tidak ada error pada halaman.
3. Pastikan route dapat diakses sesuai role.
4. Pastikan data tersimpan dengan benar.
5. Pastikan relasi database berjalan.
6. Pastikan tampilan menggunakan Master Layout.
7. Pastikan modul lain tidak mengalami kerusakan.
8. Lakukan pengujian ulang setelah perubahan yang berpengaruh pada modul lain.

## 12.8 Prinsip Utama Pengembangan

Seluruh anggota harus memahami bahwa:

**Setiap anggota mengembangkan modulnya secara mandiri, tetapi seluruh modul merupakan bagian dari satu aplikasi Laravel yang sama.**

Oleh karena itu, komunikasi, kesepakatan teknis, dan integrasi bertahap menjadi tanggung jawab seluruh anggota.

Ketua bertugas mengoordinasikan proses tersebut agar pengembangan berjalan terarah dan tidak saling menghambat.

---

# 13. JADWAL PENGERJAAN DAN TARGET PENYELESAIAN

Pengembangan Sistem Informasi Akademik Mini dilaksanakan secara bertahap dengan menerapkan pembagian tugas dan pengembangan paralel.

Jadwal berikut merupakan urutan target pengerjaan. Tanggal penyelesaian dapat disesuaikan berdasarkan kesepakatan seluruh anggota dan deadline perkuliahan.

## 13.1 Tahapan dan Target Pengerjaan

| Tahap | Target Pekerjaan                                    | Penanggung Jawab                  |
| ----- | --------------------------------------------------- | --------------------------------- |
| 1     | Persiapan repository, Laravel, Docker, dan database | Anggota 1                         |
| 2     | Design System, UI Showcase, dan Master Layout       | Anggota 1                         |
| 3     | Autentikasi, login, logout, dan middleware role     | Anggota 1                         |
| 4     | Pengembangan seluruh modul utama                    | Anggota 2–7                       |
| 5     | Integrasi modul secara bertahap                     | Seluruh anggota                   |
| 6     | Pengujian fungsi dan integrasi                      | Seluruh anggota                   |
| 7     | Perbaikan bug dan penyempurnaan tampilan            | Seluruh anggota                   |
| 8     | Penyelesaian dokumentasi proyek                     | Seluruh anggota                   |
| 9     | Persiapan deployment                                | Ketua dan anggota yang ditugaskan |

## 13.2 Target Setiap Anggota

### Anggota 1 — Ketua dan UI/UX

- Menyelesaikan fondasi proyek Laravel.
- Menyelesaikan Design System dan UI Showcase.
- Menyelesaikan Master Layout.
- Menyiapkan komponen UI bersama.
- Menyelesaikan autentikasi dan middleware role.
- Mengintegrasikan seluruh modul.
- Memastikan aplikasi berjalan secara keseluruhan.

### Anggota 2 — Admin Data Pengguna

- Menyelesaikan CRUD mahasiswa.
- Menyelesaikan CRUD dosen.
- Menyelesaikan pengelolaan akun pengguna.
- Menyelesaikan fitur reset password.
- Menguji seluruh fungsi pengelolaan pengguna.

### Anggota 3 — Admin Data Akademik

- Menyelesaikan CRUD program studi.
- Menyelesaikan CRUD angkatan.
- Menyelesaikan CRUD mata kuliah.
- Menyelesaikan CRUD kelas kuliah.
- Menyelesaikan pengaturan jadwal kuliah.
- Menguji seluruh fungsi data akademik.

### Anggota 4 — Admin Pengaturan Akademik

- Menyelesaikan pengelolaan tahun akademik.
- Menyelesaikan pengaturan semester aktif.
- Menyelesaikan pengaturan periode KRS.
- Menyelesaikan pengaturan periode penginputan nilai.
- Menyelesaikan kenaikan semester mahasiswa.
- Menyelesaikan laporan akademik.

### Anggota 5 — Modul Dosen

- Menyelesaikan dashboard dosen.
- Menyelesaikan daftar kelas yang diampu.
- Menyelesaikan jadwal mengajar.
- Menyelesaikan daftar mahasiswa per kelas.
- Menyelesaikan input dan pengubahan nilai.
- Menyelesaikan rekapitulasi nilai.

### Anggota 6 — Modul Mahasiswa (KRS)

- Menyelesaikan dashboard KRS.
- Menyelesaikan daftar mata kuliah.
- Menyelesaikan pemilihan kelas kuliah.
- Menyelesaikan pengisian KRS.
- Menyelesaikan perubahan dan pembatalan KRS.
- Menyelesaikan tampilan KRS mahasiswa.

### Anggota 7 — Modul Akademik Mahasiswa

- Menyelesaikan dashboard akademik mahasiswa.
- Menyelesaikan perhitungan IP.
- Menyelesaikan perhitungan IPK.
- Menyelesaikan informasi SKS yang telah ditempuh.
- Menyelesaikan jadwal kuliah mingguan.
- Menyelesaikan riwayat nilai.
- Menyelesaikan profil mahasiswa.

## 13.3 Target Minimal Sebelum Modul Diintegrasikan

Setiap anggota harus memastikan:

- [ ] Halaman modul sudah dibuat.
- [ ] Tampilan menggunakan Master Layout.
- [ ] Route sudah tersedia.
- [ ] Controller sudah dibuat.
- [ ] Model dan relasi sudah sesuai.
- [ ] Validasi form sudah diterapkan.
- [ ] Proses penyimpanan dan pengambilan data berjalan.
- [ ] Tidak terdapat error pada fitur utama.
- [ ] Pengujian mandiri sudah dilakukan.
- [ ] Pull Request sudah dibuat.

## 13.4 Target Penyelesaian Proyek

Proyek dinyatakan selesai apabila:

1. Seluruh modul utama telah dikembangkan.
2. Seluruh modul berhasil diintegrasikan.
3. Autentikasi dan pembagian hak akses berjalan.
4. Proses akademik utama berjalan sesuai kesepakatan.
5. Database dan relasi berjalan dengan benar.
6. Tampilan konsisten pada seluruh halaman.
7. Tidak terdapat bug kritis pada fungsi utama.
8. Pengujian aplikasi telah dilakukan.
9. Dokumentasi proyek telah diperbarui.
10. Aplikasi siap dipresentasikan kepada dosen.

Deployment dilakukan setelah fungsi utama aplikasi selesai dan telah diuji.

## 13.5 Evaluasi Progres

Ketua melakukan evaluasi secara berkala untuk:

1. Memantau penyelesaian pekerjaan setiap anggota.
2. Mengidentifikasi kendala teknis.
3. Mengatur prioritas pekerjaan.
4. Memastikan pekerjaan tidak saling bertabrakan.
5. Menentukan kebutuhan integrasi.
6. Memastikan target penyelesaian tetap tercapai.

---

# 14. PENUTUP DAN PERSETUJUAN ANGGOTA

## 14.1 Penutup

Dokumen Kesepakatan Teknis ini dibuat sebagai pedoman bersama dalam pengembangan proyek **Sistem Informasi Akademik Mini**.

Seluruh anggota kelompok wajib memahami dan mengikuti ketentuan yang telah ditetapkan dalam dokumen ini.

Setiap perubahan terhadap kesepakatan teknis harus dibicarakan dan disetujui bersama, khususnya perubahan yang berkaitan dengan:

1. Struktur database.
2. Teknologi yang digunakan.
3. Pembagian tugas anggota.
4. Struktur folder proyek.
5. Standar pengembangan aplikasi.
6. Aturan integrasi kode.
7. Alur proses akademik.

Ketua bertanggung jawab mengoordinasikan pengembangan proyek dan memastikan seluruh anggota mengikuti kesepakatan yang telah dibuat.

Dokumen ini dapat diperbarui apabila terdapat kebutuhan teknis atau perubahan sistem yang telah disepakati bersama.

## 14.2 Pernyataan Persetujuan

Dengan adanya dokumen ini, seluruh anggota menyatakan bahwa:

1. Memahami tujuan dan ruang lingkup proyek.
2. Memahami pembagian tugas masing-masing.
3. Bersedia mengerjakan modul sesuai tanggung jawab.
4. Bersedia mengikuti standar pengembangan yang telah disepakati.
5. Bersedia menggunakan Git dan GitHub sesuai ketentuan.
6. Bersedia melakukan koordinasi dan integrasi bersama.
7. Bertanggung jawab terhadap pekerjaan masing-masing.
8. Bersedia membantu penyelesaian proyek sampai selesai.

## 14.3 Daftar Persetujuan Anggota

| No. | Nama Anggota | Tanggung Jawab                | Persetujuan  |
| --- | ------------ | ----------------------------- | ------------ |
| 1   | Ketua        | UI/UX, Fondasi, dan Integrasi | ****\_\_**** |
| 2   | Anggota 2    | Admin Data Pengguna           | ****\_\_**** |
| 3   | Anggota 3    | Admin Data Akademik           | ****\_\_**** |
| 4   | Anggota 4    | Admin Pengaturan Akademik     | ****\_\_**** |
| 5   | Anggota 5    | Modul Dosen                   | ****\_\_**** |
| 6   | Anggota 6    | Modul Mahasiswa (KRS)         | ****\_\_**** |
| 7   | Anggota 7    | Modul Akademik Mahasiswa      | ****\_\_**** |

---

**Dokumen:** Kesepakatan Teknis Pengembangan Sistem Informasi Akademik Mini

**Teknologi:** Laravel, Bootstrap 5, JavaScript, MySQL, Docker, dan GitHub

**Jumlah Anggota:** 7 Orang

**Status Dokumen:** Pedoman Pengembangan Proyek

**Dokumen ini berlaku untuk seluruh anggota kelompok selama pengembangan proyek berlangsung.**
