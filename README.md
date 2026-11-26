# Sistem Informasi Akademik Mini

Aplikasi **Sistem Informasi Akademik Mini** merupakan proyek pengembangan aplikasi berbasis web untuk membantu pengelolaan kegiatan akademik di lingkungan perguruan tinggi.

Proyek ini dikembangkan secara berkelompok oleh 7 anggota dari Program Studi Teknik Informatika, UIN Sunan Gunung Djati Bandung. Aplikasi dirancang untuk mendukung pengelolaan data akademik, Kartu Rencana Studi (KRS), jadwal perkuliahan, serta pengelolaan nilai mahasiswa.

Pengembangan menggunakan Laravel, MySQL, dan Bootstrap 5 dengan sistem kolaborasi kode sumber melalui Git dan GitHub.

---

## 1. Informasi Proyek

| Keterangan         | Detail                         |
| ------------------ | ------------------------------ |
| Nama Proyek        | Sistem Informasi Akademik Mini |
| Institusi          | UIN Sunan Gunung Djati Bandung |
| Fakultas           | Sains dan Teknologi            |
| Program Studi      | Teknik Informatika             |
| Jumlah Anggota     | 7 orang                        |
| Framework Backend  | Laravel                        |
| Bahasa Pemrograman | PHP                            |
| Database           | MySQL                          |
| Frontend           | Blade, Bootstrap 5, JavaScript |
| Version Control    | Git                            |
| Repository         | GitHub                         |
| Containerization   | Docker dan Docker Compose      |
| Branch Utama       | `main`                         |

**Repository GitHub:**

https://github.com/ArhamMahasin/sistem-informasi-akademik-mini

## 2. Latar Belakang dan Tujuan

Pengelolaan kegiatan akademik membutuhkan sistem yang dapat membantu administrator, dosen, dan mahasiswa dalam mengakses serta mengelola informasi akademik.

Sistem Informasi Akademik Mini dikembangkan sebagai aplikasi berbasis web yang mengintegrasikan beberapa proses akademik dalam satu sistem.

Tujuan pengembangan proyek ini adalah:

1. Membantu administrator mengelola data akademik dan pengguna.
2. Memudahkan mahasiswa dalam mengisi dan mengelola KRS.
3. Memudahkan dosen dalam mengelola kelas dan memberikan nilai.
4. Menyediakan informasi akademik mahasiswa secara terpusat.
5. Menerapkan pengembangan aplikasi web menggunakan Laravel dan MySQL.
6. Menerapkan kolaborasi pengembangan perangkat lunak menggunakan Git dan GitHub.

## 3. Aktor dan Hak Akses Sistem

Sistem memiliki tiga jenis pengguna utama.

### 3.1 Administrator

Administrator bertanggung jawab mengelola keseluruhan data dan pengaturan akademik.

Fitur yang direncanakan:

- Dashboard administrator.
- Mengelola data mahasiswa.
- Mengelola data dosen.
- Mengelola program studi.
- Mengelola angkatan.
- Mengelola mata kuliah.
- Mengelola kelas perkuliahan.
- Mengelola jadwal dan ruangan.
- Mengelola tahun akademik dan semester.
- Mengatur semester aktif.
- Mengatur periode pengisian KRS.
- Mengatur periode pengubahan nilai.
- Melihat pengajuan dan detail KRS mahasiswa.
- Melakukan reset password pengguna.
- Melakukan kenaikan semester mahasiswa secara massal.
- Melihat laporan akademik.

### 3.2 Dosen

Dosen bertanggung jawab mengelola kegiatan perkuliahan dan memberikan penilaian kepada mahasiswa.

Fitur yang direncanakan:

- Dashboard dosen.
- Melihat kelas yang diampu.
- Melihat jadwal mengajar.
- Melihat daftar mahasiswa dalam kelas.
- Menginput dan mengubah nilai mahasiswa sesuai periode yang ditentukan.
- Melihat rekap nilai.
- Melihat riwayat nilai kelas yang pernah diajar.
- Mengelola profil dan password.
- Logout.

### 3.3 Mahasiswa

Mahasiswa menggunakan sistem untuk mengelola kebutuhan akademiknya.

Fitur yang direncanakan:

- Dashboard mahasiswa.
- Melihat IP semester sebelumnya.
- Melihat IPK.
- Melihat total SKS yang telah diselesaikan.
- Melihat jadwal kuliah mingguan.
- Melihat daftar mata kuliah.
- Mengisi KRS.
- Mengubah dan membatalkan KRS selama periode KRS masih dibuka.
- Melihat KRS yang telah disimpan.
- Melihat riwayat nilai.
- Mengelola profil dan password.
- Logout.

**Catatan:** Sistem tidak menggunakan persetujuan Dosen Pembimbing Akademik (DPA) untuk pengisian KRS.

## 4. Aturan Bisnis dan Akademik

Aturan berikut merupakan ketentuan yang telah disepakati sebagai acuan pengembangan sistem.

### 4.1 Tahun Akademik dan Semester

- Sistem menggunakan tahun akademik dan semester Ganjil/Genap.
- Administrator menentukan tahun akademik dan semester yang sedang aktif.
- Pengisian KRS hanya dapat dilakukan selama periode yang ditentukan administrator.

### 4.2 Pengambilan Mata Kuliah

- Mahasiswa hanya dapat mengambil mata kuliah yang sesuai dengan semester ganjil atau genap yang sedang aktif.
- Mahasiswa dapat mengambil mata kuliah semester lebih tinggi apabila memenuhi ketentuan.
- Mahasiswa dapat mengulang mata kuliah semester sebelumnya apabila mata kuliah tersebut sesuai dengan semester aktif.
- Mata kuliah semester berjalan secara normal diambil pada kelas asal mahasiswa.
- Mata kuliah semester lebih tinggi atau mata kuliah yang diulang dapat diambil pada kelas A, B, C, atau D sesuai ketersediaan kuota dan jadwal.

### 4.3 Batas Maksimal SKS

Batas maksimal SKS ditentukan berdasarkan IP semester sebelumnya.

| IP Semester Sebelumnya | Maksimal SKS |
| ---------------------- | -----------: |
| IP ≥ 3,00              |       24 SKS |
| 2,50 ≤ IP < 3,00       |       21 SKS |
| 2,00 ≤ IP < 2,50       |       18 SKS |
| IP < 2,00              |       15 SKS |

### 4.4 Pembagian Kelas

- Setiap angkatan memiliki kelas A, B, C, dan D.
- Setiap kelas memiliki kapasitas maksimal 35 mahasiswa.
- Mahasiswa semester berjalan mengambil mata kuliah pada kelas asalnya.
- Mahasiswa lintas semester dapat mengambil kelas lain sesuai ketentuan.
- Apabila kuota kelas tidak mencukupi, administrator dapat meminta mahasiswa lintas semester untuk berpindah kelas.
- Administrator dapat menghapus pengambilan mata kuliah mahasiswa pada kelas tertentu tanpa menghapus seluruh KRS atau akun mahasiswa.

### 4.5 Pengelolaan KRS

- Mahasiswa dapat mengisi KRS selama periode pengisian dibuka.
- Mahasiswa dapat mengubah atau membatalkan mata kuliah selama periode tersebut masih berlangsung.
- KRS tidak memerlukan persetujuan DPA.
- Mahasiswa dapat melihat KRS yang telah disimpan.
- Sistem tidak menyediakan fitur unduh atau cetak KRS.

### 4.6 Penilaian

Komponen penilaian mata kuliah:

| Komponen  |    Bobot |
| --------- | -------: |
| Kehadiran |      10% |
| Tugas     |      20% |
| UTS       |      25% |
| UAS       |      30% |
| Praktikum |      15% |
| **Total** | **100%** |

Konversi nilai:

| Nilai Akhir | Huruf | Bobot |
| ----------- | ----- | ----: |
| 80–100      | A     |     4 |
| 70–<80      | B     |     3 |
| 60–<70      | C     |     2 |
| 50–<60      | D     |     1 |
| 0–<50       | E     |     0 |

Ketentuan penilaian:

- Sistem menghitung nilai akhir berdasarkan bobot komponen penilaian.
- Sistem mengonversi nilai akhir menjadi nilai huruf dan bobot angka.
- Dosen hanya dapat menginput dan mengubah nilai pada kelas yang diampu.
- Pengubahan nilai mengikuti periode yang ditentukan administrator.
- Nilai mahasiswa dapat dilihat setelah dosen menyimpan nilai.
- IP dihitung berdasarkan hasil penilaian dalam satu semester.
- IPK dihitung berdasarkan keseluruhan hasil akademik mahasiswa.
- Apabila mahasiswa mengulang mata kuliah, nilai terbaru digunakan dalam perhitungan IPK.
- Riwayat nilai sebelumnya tetap disimpan dan dapat dilihat mahasiswa.

## 5. Struktur Database

Database dirancang untuk mendukung pengelolaan pengguna, data akademik, KRS, jadwal, dan nilai.

Tabel utama yang direncanakan:

| No. | Nama Tabel       | Keterangan                                   |
| --: | ---------------- | -------------------------------------------- |
|   1 | `users`          | Menyimpan akun dan autentikasi pengguna      |
|   2 | `mahasiswa`      | Menyimpan data mahasiswa                     |
|   3 | `dosen`          | Menyimpan data dosen                         |
|   4 | `program_studi`  | Menyimpan data program studi                 |
|   5 | `angkatan`       | Menyimpan data angkatan                      |
|   6 | `mata_kuliah`    | Menyimpan data mata kuliah                   |
|   7 | `tahun_akademik` | Menyimpan tahun akademik dan semester        |
|   8 | `kelas_kuliah`   | Menyimpan kelas mata kuliah                  |
|   9 | `jadwal_kuliah`  | Menyimpan jadwal dan ruangan perkuliahan     |
|  10 | `krs`            | Menyimpan data KRS mahasiswa                 |
|  11 | `detail_krs`     | Menyimpan mata kuliah yang diambil dalam KRS |
|  12 | `nilai`          | Menyimpan komponen dan hasil penilaian       |

Ketentuan tambahan:

- Tabel mahasiswa memiliki atribut `kelas_asal` dan `semester_berjalan`.
- `semester_berjalan` dapat diperbarui secara massal oleh administrator saat kenaikan semester.
- Tabel mahasiswa dan dosen menggunakan atribut `created_at` dan `updated_at`.
- Tabel lainnya mengikuti kebutuhan pencatatan waktu dan standar pengelolaan data Laravel.
- Relasi antartabel menggunakan primary key dan foreign key sesuai kebutuhan.

Struktur database dapat berkembang mengikuti kebutuhan implementasi, tetapi perubahan harus dikoordinasikan dengan anggota tim.

## 6. Teknologi yang Digunakan

| Teknologi          | Fungsi                               |
| ------------------ | ------------------------------------ |
| Laravel            | Framework backend aplikasi           |
| PHP                | Bahasa pemrograman backend           |
| MySQL              | Sistem manajemen basis data          |
| Blade              | Template engine Laravel              |
| Bootstrap 5        | Framework antarmuka                  |
| JavaScript         | Interaksi halaman web                |
| Docker             | Menjalankan layanan dalam container  |
| Docker Compose     | Mengelola konfigurasi layanan Docker |
| Git                | Version control                      |
| GitHub             | Penyimpanan kode dan kolaborasi      |
| Visual Studio Code | Editor kode                          |

Arsitektur aplikasi menggunakan satu proyek Laravel yang menggabungkan backend dan frontend melalui Blade. Dengan demikian, proyek tidak menggunakan frontend React terpisah atau arsitektur API terpisah.

## 7. Desain Antarmuka

Sistem menggunakan konsep **Minimalis Modern Akademik**.

### 7.1 Palet Warna

| Elemen       | Warna     |
| ------------ | --------- |
| Primary      | `#2563EB` |
| Primary Dark | `#1D4ED8` |
| Background   | `#F3F4F6` |
| White        | `#FFFFFF` |
| Text         | `#1F2937` |
| Text Muted   | `#6B7280` |
| Border       | `#E5E7EB` |

### 7.2 Pedoman Desain

- Menggunakan font Inter.
- Sidebar berada di sebelah kiri.
- Navbar berada di bagian atas.
- Konten utama berada di tengah halaman.
- Sidebar dapat disesuaikan berdasarkan hak akses pengguna.
- Tampilan menggunakan card, tabel, tombol, badge, dan form yang konsisten.
- Desain responsif untuk desktop, tablet, dan perangkat mobile.
- Komponen global dikelola secara terpusat agar tampilan setiap modul tetap konsisten.

### 7.3 Struktur Tampilan

Contoh struktur direktori tampilan:

```text
resources/
├── css/
│   └── app.css
├── js/
│   └── app.js
└── views/
    ├── layouts/
    │   └── app.blade.php
    ├── components/
    ├── showcase/
    │   ├── index.blade.php
    │   └── layout-test.blade.php
    ├── admin/
    ├── dosen/
    └── mahasiswa/
```

## 8. Struktur Tim Pengembang

Proyek dikerjakan oleh 7 anggota dengan pembagian tanggung jawab sebagai berikut.

| Anggota           | Tanggung Jawab                                                                     |
| ----------------- | ---------------------------------------------------------------------------------- |
| Anggota 1 (Ketua) | UI/UX, Design System, Master Layout, autentikasi, integrasi, dan koordinasi proyek |
| Anggota 2         | Administrator – Data Pengguna                                                      |
| Anggota 3         | Administrator – Data Akademik                                                      |
| Anggota 4         | Administrator – Pengaturan Akademik                                                |
| Anggota 5         | Modul Dosen                                                                        |
| Anggota 6         | Modul Mahasiswa – KRS                                                              |
| Anggota 7         | Modul Mahasiswa – Akademik                                                         |

**Ketentuan:** Setiap anggota bertanggung jawab mengerjakan frontend dan backend sesuai modul masing-masing, termasuk tampilan, route, controller, validasi, dan kebutuhan database.

### 8.1 Detail Pembagian Tugas

**Anggota 1 – Ketua dan UI/UX**

- Membuat Design System.
- Membuat UI Showcase.
- Membuat Master Layout.
- Membuat Sidebar dan Navbar.
- Menyiapkan komponen antarmuka bersama.
- Mengembangkan autentikasi dan pengaturan hak akses.
- Mengintegrasikan modul seluruh anggota.
- Mengawasi kualitas dan konsistensi proyek.

**Anggota 2 – Administrator Data Pengguna**

- CRUD data mahasiswa.
- CRUD data dosen.
- Pengelolaan akun pengguna.
- Reset password.
- Pengelolaan profil pengguna.

**Anggota 3 – Administrator Data Akademik**

- CRUD program studi.
- CRUD angkatan.
- CRUD mata kuliah.
- Pengelolaan kelas perkuliahan.
- Pengelolaan jadwal dan ruangan.

**Anggota 4 – Administrator Pengaturan Akademik**

- Pengelolaan tahun akademik.
- Pengaturan semester aktif.
- Pengaturan periode KRS.
- Pengaturan periode pengubahan nilai.
- Kenaikan semester mahasiswa.
- Laporan akademik.

**Anggota 5 – Modul Dosen**

- Dashboard dosen.
- Daftar kelas yang diampu.
- Jadwal mengajar.
- Daftar mahasiswa.
- Input dan pengubahan nilai.
- Rekap nilai.

**Anggota 6 – Modul Mahasiswa KRS**

- Tampilan daftar mata kuliah.
- Informasi mata kuliah dan kelas.
- Pengisian KRS.
- Pengubahan KRS.
- Pembatalan mata kuliah.
- Tampilan KRS mahasiswa.

**Anggota 7 – Modul Mahasiswa Akademik**

- Dashboard mahasiswa.
- Informasi IP dan IPK.
- Informasi total SKS.
- Jadwal kuliah mingguan.
- Riwayat nilai.
- Profil mahasiswa.
- Perhitungan IP dan IPK.

## 9. Repository GitHub

Seluruh kode sumber proyek disimpan dalam satu repository GitHub:

https://github.com/ArhamMahasin/sistem-informasi-akademik-mini

Branch utama yang digunakan adalah:

```text
main
```

Branch `main` merupakan branch utama yang berisi kode hasil integrasi dan pemeriksaan.

## 10. Aturan Kerja Git dan GitHub

Untuk menghindari konflik kode dan menjaga kestabilan proyek, seluruh anggota wajib mengikuti aturan kerja berikut.

### 10.1 Hak Akses Repository

**Ketua Repository**

Ketua memiliki tanggung jawab untuk:

- Mengelola repository GitHub.
- Mengatur akses anggota.
- Mengawasi pekerjaan seluruh anggota.
- Memeriksa kode yang diajukan melalui Pull Request.
- Memberikan persetujuan (approval) terhadap Pull Request.
- Melakukan merge Pull Request ke branch `main`.
- Mengelola integrasi kode seluruh modul.

**Enam Anggota Lainnya**

Anggota memiliki tanggung jawab untuk:

- Mengambil kode proyek dari repository.
- Membuat branch masing-masing.
- Mengerjakan fitur sesuai pembagian tugas.
- Melakukan commit dan push pada branch masing-masing.
- Mengajukan Pull Request kepada ketua.

**Penting:** Anggota tidak diperbolehkan melakukan push langsung ke branch `main`. Seluruh perubahan harus diajukan melalui Pull Request dan diperiksa serta disetujui oleh ketua sebelum digabungkan.

### 10.2 Alur Kerja Pengembangan

Alur kerja yang wajib diikuti seluruh anggota:

1. Melakukan clone repository.
2. Mengambil perubahan terbaru dari branch `main`.
3. Membuat branch khusus untuk pekerjaan masing-masing.
4. Mengembangkan fitur sesuai pembagian tugas.
5. Melakukan pengujian terhadap fitur yang dibuat.
6. Melakukan commit terhadap perubahan.
7. Melakukan push branch ke GitHub.
8. Membuat Pull Request dengan tujuan branch `main`.
9. Menunggu pemeriksaan dan persetujuan dari ketua.
10. Ketua melakukan merge setelah perubahan dinyatakan sesuai.

### 10.3 Aturan Penamaan Branch

Setiap anggota harus menggunakan nama branch yang jelas dan sesuai dengan modul yang dikerjakan.

| Anggota           | Nama Branch                  |
| ----------------- | ---------------------------- |
| Anggota 1 (Ketua) | `feature/ui-auth-layout`     |
| Anggota 2         | `feature/admin-pengguna`     |
| Anggota 3         | `feature/admin-akademik`     |
| Anggota 4         | `feature/admin-pengaturan`   |
| Anggota 5         | `feature/modul-dosen`        |
| Anggota 6         | `feature/mahasiswa-krs`      |
| Anggota 7         | `feature/mahasiswa-akademik` |

Nama branch dapat disesuaikan apabila terdapat pekerjaan tambahan atau pemisahan fitur.

## 11. Persiapan Lingkungan Pengembangan

Sebelum mulai mengembangkan aplikasi, setiap anggota harus memastikan perangkat masing-masing telah memiliki:

1. Git.
2. PHP.
3. Composer.
4. Node.js dan npm.
5. Docker Desktop.
6. Visual Studio Code.

Periksa instalasi melalui PowerShell:

```powershell
git --version
php --version
composer --version
node --version
npm --version
docker --version
docker compose version
```

## 12. Panduan Clone Repository

Setiap anggota harus mengambil salinan proyek dari GitHub ke komputer masing-masing.

**Langkah 1.** Pastikan sudah menerima dan menyetujui undangan sebagai kolaborator repository.

**Langkah 2.** Buka PowerShell.

**Langkah 3.** Masuk ke folder tempat proyek akan disimpan. Contoh:

```powershell
cd D:\Projects
```

**Langkah 4.** Clone repository:

```powershell
git clone https://github.com/ArhamMahasin/sistem-informasi-akademik-mini.git
```

**Langkah 5.** Masuk ke folder proyek:

```powershell
cd sistem-informasi-akademik-mini
```

**Langkah 6.** Buka proyek menggunakan Visual Studio Code:

```powershell
code .
```

Jika perintah `code .` tidak tersedia, buka folder proyek secara manual melalui Visual Studio Code.

## 13. Persiapan Laravel dan Database

Setelah berhasil melakukan clone repository, setiap anggota perlu menyiapkan dependensi Laravel.

### 13.1 Instalasi Dependensi

Pastikan PowerShell berada di folder utama proyek.

Jalankan:

```powershell
composer install
```

Kemudian:

```powershell
npm install
```

### 13.2 Membuat File Environment

Buat file konfigurasi lokal:

```powershell
Copy-Item .env.example .env
```

Buat application key:

```powershell
php artisan key:generate
```

### 13.3 Konfigurasi Database

Setiap anggota harus mengatur konfigurasi database lokal melalui file `.env` yang berada di folder utama proyek.

Buka file `.env`, kemudian sesuaikan konfigurasi database menjadi:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sia_mini
DB_USERNAME=sia_user
DB_PASSWORD=sia_password

MYSQL_ROOT_PASSWORD=root_password
MYSQL_DATABASE=sia_mini
MYSQL_USER=sia_user
MYSQL_PASSWORD=sia_password
```

**Keterangan konfigurasi:**

| Variabel              | Fungsi                                                |
| --------------------- | ----------------------------------------------------- |
| `DB_CONNECTION`       | Menentukan jenis database yang digunakan Laravel      |
| `DB_HOST`             | Alamat host database                                  |
| `DB_PORT`             | Port koneksi MySQL                                    |
| `DB_DATABASE`         | Nama database                                         |
| `DB_USERNAME`         | Username untuk koneksi Laravel ke MySQL               |
| `DB_PASSWORD`         | Password username database                            |
| `MYSQL_ROOT_PASSWORD` | Password akun root MySQL                              |
| `MYSQL_DATABASE`      | Nama database yang dibuat oleh container MySQL        |
| `MYSQL_USER`          | Username database yang dibuat oleh container          |
| `MYSQL_PASSWORD`      | Password username database yang dibuat oleh container |

**Ketentuan konfigurasi:**

- `DB_DATABASE` harus sama dengan `MYSQL_DATABASE`.
- `DB_USERNAME` harus sama dengan `MYSQL_USER`.
- `DB_PASSWORD` harus sama dengan `MYSQL_PASSWORD`.
- Nilai password di atas merupakan contoh untuk lingkungan pengembangan lokal.
- Jangan mengunggah file `.env` ke GitHub.
- Jangan membagikan password database, token, atau kredensial pribadi.
- Jangan mengubah konfigurasi database bersama tanpa koordinasi dengan ketua proyek.

### 13.4 Konfigurasi Docker Compose

File `compose.yaml` berada di folder utama proyek.

Contoh konfigurasi Docker Compose:

```yaml
services:
    mysql:
        image: mysql:8.4
        container_name: sia-mysql
        restart: unless-stopped
        environment:
            MYSQL_ROOT_PASSWORD: ${MYSQL_ROOT_PASSWORD}
            MYSQL_DATABASE: ${MYSQL_DATABASE}
            MYSQL_USER: ${MYSQL_USER}
            MYSQL_PASSWORD: ${MYSQL_PASSWORD}
        ports:
            - "3306:3306"
        volumes:
            - sia_mysql_data:/var/lib/mysql
        healthcheck:
            test:
                [
                    "CMD",
                    "mysqladmin",
                    "ping",
                    "-h",
                    "localhost",
                    "-u",
                    "root",
                    "-p${MYSQL_ROOT_PASSWORD}",
                ]
            interval: 10s
            timeout: 5s
            retries: 10

volumes:
    sia_mysql_data:
```

**Penjelasan:**

- `mysql:8.4` merupakan image MySQL yang digunakan.
- `sia-mysql` merupakan nama container.
- Port `3306` digunakan untuk koneksi MySQL dari komputer lokal.
- `sia_mysql_data` digunakan untuk menyimpan data database agar tetap tersimpan meskipun container dihentikan.
- Healthcheck digunakan untuk memeriksa kesiapan layanan MySQL.

### 13.5 Menjalankan Docker MySQL

Pastikan Docker Desktop sudah berjalan.

Dari folder utama proyek, jalankan:

```powershell
docker compose up -d mysql
```

Periksa status container:

```powershell
docker compose ps
```

Pastikan container `sia-mysql` sudah berstatus `healthy`.

### 13.6 Menjalankan Migrasi Database

Setelah MySQL berjalan, bersihkan cache konfigurasi Laravel:

```powershell
php artisan config:clear
```

Kemudian jalankan migrasi:

```powershell
php artisan migrate
```

**Catatan penting:**

Jika container MySQL sudah pernah dibuat dengan konfigurasi password sebelumnya, mengubah variabel `MYSQL_ROOT_PASSWORD` atau `MYSQL_PASSWORD` di `.env` tidak otomatis mengubah password pada database yang sudah tersimpan di Docker volume.

Jangan menghapus volume database tanpa koordinasi dengan ketua proyek karena data yang tersimpan dapat hilang.

### 13.7 Menjalankan Aplikasi

Jalankan Vite untuk kebutuhan frontend:

```powershell
npm run dev
```

Buka terminal PowerShell baru, kemudian jalankan:

```powershell
php artisan serve
```

Buka aplikasi melalui browser:

```text
http://127.0.0.1:8000
```

**Catatan:** Jalankan Docker MySQL terlebih dahulu sebelum menjalankan aplikasi yang membutuhkan koneksi database.

## 14. Panduan Membuat Branch

Sebelum mulai mengerjakan fitur, pastikan branch `main` sudah diperbarui.

```powershell
git switch main
git pull origin main
```

Selanjutnya, buat branch sesuai pekerjaan masing-masing.

Contoh untuk Anggota 2:

```powershell
git switch -c feature/admin-pengguna
```

Pastikan seluruh pekerjaan dilakukan pada branch tersebut, bukan pada branch `main`.

Untuk memeriksa branch yang sedang digunakan:

```powershell
git branch
```

Branch aktif ditandai dengan tanda bintang (`*`).

## 15. Panduan Commit dan Push

Setelah selesai mengerjakan perubahan, lakukan langkah berikut.

**Langkah 1.** Periksa perubahan:

```powershell
git status
```

**Langkah 2.** Tambahkan perubahan:

```powershell
git add .
```

**Langkah 3.** Buat commit:

```powershell
git commit -m "Add admin user management"
```

Gunakan pesan commit yang jelas dan menggambarkan perubahan.

**Langkah 4.** Push branch ke GitHub.

Contoh untuk Anggota 2:

```powershell
git push -u origin feature/admin-pengguna
```

Untuk push berikutnya pada branch yang sama, cukup jalankan:

```powershell
git push
```

**Perhatian:** Jangan melakukan `git push origin main` sebagai anggota.

## 16. Panduan Membuat Pull Request

Setelah berhasil melakukan push branch ke GitHub, anggota harus mengajukan Pull Request.

Langkah-langkah:

1. Buka repository GitHub.
2. Pilih menu **Pull requests**.
3. Klik **New pull request**.
4. Pastikan branch tujuan (base) adalah `main`.
5. Pilih branch pekerjaan sendiri sebagai compare.
6. Isi judul dan deskripsi perubahan.
7. Pilih ketua sebagai reviewer jika tersedia.
8. Klik **Create pull request**.
9. Tunggu pemeriksaan dan persetujuan dari ketua.

Contoh deskripsi Pull Request:

```text
## Ringkasan
Menambahkan fitur pengelolaan data pengguna administrator.

## Perubahan
- Menambahkan halaman daftar pengguna.
- Menambahkan fitur tambah pengguna.
- Menambahkan fitur ubah pengguna.
- Menambahkan validasi data.

## Pengujian
- [ ] Halaman dapat dibuka.
- [ ] Fitur tambah berjalan.
- [ ] Fitur ubah berjalan.
- [ ] Validasi berjalan.
```

### 16.1 Proses Pemeriksaan oleh Ketua

Setelah anggota mengajukan Pull Request:

1. Ketua memeriksa seluruh perubahan kode.
2. Ketua memastikan fitur berjalan sesuai kebutuhan.
3. Ketua memberikan komentar apabila terdapat kesalahan.
4. Anggota memperbaiki kode jika diperlukan.
5. Ketua memberikan approval jika perubahan sudah sesuai.
6. Ketua melakukan merge Pull Request ke branch `main`.

Anggota tidak diperbolehkan melakukan merge sendiri.

## 17. Panduan Memperbarui Proyek

Sebelum memulai pekerjaan baru, setiap anggota harus mengambil perubahan terbaru dari branch `main`.

Jalankan:

```powershell
git switch main
git pull origin main
```

Jika akan memulai pekerjaan baru, buat branch baru:

```powershell
git switch -c feature/nama-fitur
```

Jika masih memiliki pekerjaan pada branch sebelumnya, jangan menghapus atau mengganti branch tersebut sebelum memastikan pekerjaan sudah aman.

## 18. Aturan Penting Selama Pengembangan

Seluruh anggota wajib memperhatikan ketentuan berikut:

1. Kerjakan fitur sesuai pembagian tugas.
2. Gunakan branch masing-masing.
3. Jangan melakukan push langsung ke `main`.
4. Jangan melakukan merge Pull Request sendiri.
5. Setiap Pull Request wajib diperiksa dan disetujui ketua.
6. Jangan mengubah Design System dan Master Layout tanpa koordinasi.
7. Jangan menghapus atau mengubah file milik anggota lain tanpa komunikasi.
8. Jangan mengunggah file rahasia seperti `.env`, password, atau token.
9. Lakukan commit secara berkala.
10. Laporkan kendala kepada ketua jika mengalami masalah saat pengembangan.
11. Pastikan fitur yang dibuat telah diuji sebelum mengajukan Pull Request.
12. Koordinasikan perubahan struktur database dengan anggota lain yang berkaitan.

## 19. Keamanan dan Validasi Sistem

Pengembangan aplikasi memperhatikan beberapa ketentuan keamanan dan validasi berikut:

- Password pengguna disimpan dalam bentuk hash.
- Setiap pengguna hanya dapat mengakses fitur sesuai perannya.
- Administrator memiliki hak akses pengelolaan sistem.
- Dosen hanya dapat mengelola kelas dan nilai yang menjadi tanggung jawabnya.
- Mahasiswa hanya dapat mengakses dan mengubah data akademik miliknya sesuai ketentuan.
- NIM dan NIDN harus unik.
- Sistem memvalidasi batas maksimal SKS.
- Sistem memvalidasi kapasitas kelas.
- Sistem mencegah bentrok jadwal perkuliahan.
- Sistem membatasi pengubahan nilai sesuai periode yang ditentukan administrator.
- Sistem memvalidasi data pada sisi server.

## 20. Progres Pengembangan

Bagian ini digunakan untuk mendokumentasikan perkembangan implementasi proyek.

### 20.1 Progres yang Telah Dikerjakan

- [x] Menyusun perencanaan dan ruang lingkup sistem.
- [x] Menentukan aktor dan hak akses pengguna.
- [x] Menyepakati aturan bisnis akademik.
- [x] Menyusun pembagian tugas untuk 7 anggota.
- [x] Menentukan teknologi yang digunakan.
- [x] Menyiapkan repository GitHub.
- [x] Mengatur kolaborator repository.
- [x] Menyiapkan aturan branch dan Pull Request.
- [x] Membuat proyek Laravel.
- [x] Menyiapkan Bootstrap 5.
- [x] Menyiapkan Docker Compose untuk MySQL.
- [x] Menjalankan database MySQL melalui Docker.
- [x] Menjalankan migrasi awal Laravel.
- [x] Membuat Design System.
- [x] Membuat UI Showcase.
- [x] Membuat Master Layout.
- [x] Menguji tampilan responsif desktop dan mobile.
- [x] Melakukan commit awal dan push ke GitHub.

### 20.2 Tahap Pengembangan Selanjutnya

- [ ] Mengembangkan autentikasi dan hak akses berdasarkan peran.
- [ ] Mengembangkan modul administrator.
- [ ] Mengembangkan modul dosen.
- [ ] Mengembangkan modul mahasiswa.
- [ ] Mengintegrasikan seluruh modul.
- [ ] Menguji relasi dan proses database.
- [ ] Menguji seluruh fitur dan validasi.
- [ ] Melakukan pengujian sistem secara menyeluruh.
- [ ] Melengkapi dokumentasi proyek.
- [ ] Melakukan deployment aplikasi.

**Catatan:** Checklist progres perlu diperbarui sesuai kondisi implementasi sebenarnya. Status selesai pada tahap persiapan tidak berarti seluruh fitur aplikasi telah selesai dikembangkan.

## 21. Rencana Tahapan Pengembangan

Pengembangan dilakukan secara bertahap agar pekerjaan seluruh anggota dapat terkoordinasi.

| Tahap | Kegiatan                                  |
| ----- | ----------------------------------------- |
| 1     | Persiapan lingkungan dan repository       |
| 2     | Pembuatan Design System dan UI Showcase   |
| 3     | Pembuatan Master Layout                   |
| 4     | Pengembangan modul sesuai pembagian tugas |
| 5     | Integrasi seluruh modul                   |
| 6     | Pengujian sistem                          |
| 7     | Penyempurnaan dokumentasi                 |
| 8     | Deployment aplikasi                       |

Deployment direncanakan dilakukan setelah implementasi dan pengujian sistem selesai.

## 22. Penutup

README ini menjadi panduan kerja bersama bagi seluruh anggota dalam mengembangkan **Sistem Informasi Akademik Mini**.

Dokumentasi ini mencakup gambaran umum sistem, ruang lingkup fitur, aturan akademik, rancangan database, teknologi, pembagian tugas, serta prosedur kolaborasi pengembangan melalui Git dan GitHub.

Dengan mengikuti panduan ini, diharapkan proses pengembangan dapat berjalan secara terstruktur, kolaboratif, dan terhindar dari konflik kode.

Seluruh anggota diharapkan memahami dan mengikuti aturan yang telah disepakati agar integrasi setiap modul dapat berjalan dengan baik.

---

**Sistem Informasi Akademik Mini**  
UIN Sunan Gunung Djati Bandung  
Fakultas Sains dan Teknologi  
Program Studi Teknik Informatika  
2026
