# Sistem Informasi Akademik Mini

Aplikasi Sistem Informasi Akademik Mini merupakan proyek pengembangan aplikasi berbasis web untuk membantu pengelolaan kegiatan akademik di lingkungan perguruan tinggi.

Proyek ini dikembangkan secara berkelompok oleh 7 anggota dengan menggunakan Laravel, MySQL, dan Bootstrap 5.

## 1. Informasi Proyek

| Keterangan        | Detail                                                                              |
| ----------------- | ----------------------------------------------------------------------------------- |
| Nama Proyek       | Sistem Informasi Akademik Mini                                                      |
| Institusi         | UIN Sunan Gunung Djati Bandung                                                      |
| Program Studi     | Teknik Informatika                                                                  |
| Framework Backend | Laravel                                                                             |
| Database          | MySQL                                                                               |
| Frontend          | Blade, Bootstrap 5, JavaScript                                                      |
| Version Control   | Git dan GitHub                                                                      |
| Containerization  | Docker dan Docker Compose                                                           |
| Repository        | [GitHub Repository](https://github.com/ArhamMahasin/sistem-informasi-akademik-mini) |

## 2. Teknologi yang Digunakan

Berikut teknologi yang digunakan dalam pengembangan aplikasi:

- Laravel sebagai framework backend.
- PHP sebagai bahasa pemrograman backend.
- MySQL sebagai sistem manajemen basis data.
- Blade sebagai template engine Laravel.
- Bootstrap 5 untuk desain antarmuka.
- JavaScript untuk interaksi pada halaman web.
- Docker dan Docker Compose untuk menjalankan layanan aplikasi.
- Git untuk version control.
- GitHub sebagai tempat penyimpanan dan kolaborasi kode sumber.

## 3. Struktur Tim Pengembang

Proyek ini dikerjakan oleh 7 anggota dengan pembagian tanggung jawab sebagai berikut:

| Anggota           | Tanggung Jawab                                                                     |
| ----------------- | ---------------------------------------------------------------------------------- |
| Anggota 1 (Ketua) | UI/UX, Design System, Master Layout, autentikasi, integrasi, dan koordinasi proyek |
| Anggota 2         | Administrator - Data Pengguna                                                      |
| Anggota 3         | Administrator - Data Akademik                                                      |
| Anggota 4         | Administrator - Pengaturan Akademik                                                |
| Anggota 5         | Modul Dosen                                                                        |
| Anggota 6         | Modul Mahasiswa - KRS                                                              |
| Anggota 7         | Modul Mahasiswa - Akademik                                                         |

**Ketentuan:** Setiap anggota bertanggung jawab mengerjakan frontend dan backend sesuai modul masing-masing.

## 4. Repository GitHub

Seluruh kode sumber proyek disimpan dalam satu repository GitHub:

https://github.com/ArhamMahasin/sistem-informasi-akademik-mini

Branch utama yang digunakan adalah:

`main`

Branch `main` merupakan branch utama yang berisi kode hasil integrasi dan pemeriksaan.

## 5. Aturan Kerja Git dan GitHub

Untuk menghindari konflik kode dan menjaga kestabilan proyek, seluruh anggota wajib mengikuti aturan kerja berikut.

### 5.1. Hak Akses Repository

**Ketua Repository:**

Ketua memiliki tanggung jawab untuk:

- Mengelola repository GitHub.
- Mengatur akses anggota.
- Mengawasi pekerjaan seluruh anggota.
- Memeriksa kode yang diajukan melalui Pull Request.
- Memberikan persetujuan (approval) terhadap Pull Request.
- Melakukan merge Pull Request ke branch `main`.
- Mengelola integrasi kode seluruh modul.

**Enam Anggota Lainnya:**

Anggota memiliki tanggung jawab untuk:

- Mengambil kode proyek dari repository.
- Membuat branch masing-masing.
- Mengerjakan fitur sesuai pembagian tugas.
- Melakukan commit dan push pada branch masing-masing.
- Mengajukan Pull Request kepada ketua.

**Penting:** Anggota tidak diperbolehkan melakukan push langsung ke branch `main`. Seluruh perubahan harus diajukan melalui Pull Request dan diperiksa serta disetujui oleh ketua sebelum digabungkan.

### 5.2. Alur Kerja Pengembangan

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

### 5.3. Aturan Penamaan Branch

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

## 6. Persiapan Lingkungan Pengembangan

Sebelum mulai mengembangkan aplikasi, setiap anggota harus memastikan perangkat masing-masing telah memiliki aplikasi berikut:

1. Git
2. PHP
3. Composer
4. Node.js dan npm
5. Docker Desktop
6. Visual Studio Code

Periksa instalasi melalui PowerShell:

```powershell
git --version
php --version
composer --version
node --version
npm --version
docker --version
```

## 7. Panduan Mengambil Proyek (Clone Repository)

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

## 8. Panduan Membuat Branch

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

## 9. Panduan Commit dan Push

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

## 10. Panduan Membuat Pull Request

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

### Proses Pemeriksaan oleh Ketua

Setelah anggota mengajukan Pull Request:

1. Ketua memeriksa seluruh perubahan kode.
2. Ketua memastikan fitur berjalan sesuai kebutuhan.
3. Ketua memberikan komentar apabila terdapat kesalahan.
4. Anggota memperbaiki kode jika diperlukan.
5. Ketua memberikan approval jika perubahan sudah sesuai.
6. Ketua melakukan merge Pull Request ke branch `main`.

Anggota tidak diperbolehkan melakukan merge sendiri.

## 11. Memperbarui Proyek

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

## 12. Persiapan Laravel

Setelah berhasil melakukan clone repository, setiap anggota perlu menyiapkan dependensi Laravel.

Jalankan perintah berikut dari folder utama proyek:

```powershell
composer install
```

Kemudian:

```powershell
npm install
```

Buat file konfigurasi lokal:

```powershell
Copy-Item .env.example .env
```

Buat application key:

```powershell
php artisan key:generate
```

Konfigurasi database lokal mengikuti arahan ketua proyek.

**Catatan penting:**

- File `.env` hanya digunakan secara lokal pada komputer masing-masing.
- Jangan mengunggah file `.env` ke GitHub.
- Jangan membagikan password database, token, atau kredensial pribadi.
- Jangan mengubah konfigurasi database bersama tanpa koordinasi dengan ketua.

## 13. Aturan Penting Selama Pengembangan

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

## 14. Penutup

README ini menjadi panduan kerja bersama bagi seluruh anggota dalam mengembangkan **Sistem Informasi Akademik Mini**.

Dengan mengikuti panduan ini, diharapkan proses pengembangan dapat berjalan secara terstruktur, kolaboratif, dan terhindar dari konflik kode.

Seluruh anggota diharapkan memahami dan mengikuti aturan yang telah disepakati agar integrasi setiap modul dapat berjalan dengan baik.

---

**Sistem Informasi Akademik Mini**  
UIN Sunan Gunung Djati Bandung  
Teknik Informatika  
2026
