# Panduan Integrasi Antaranggota

## Sistem Informasi Akademik Mini

Dokumen ini menjadi pedoman seluruh anggota dalam mengembangkan dan mengintegrasikan modul ke aplikasi utama.

## 1. Prinsip Pengembangan

1. Setiap anggota bertanggung jawab terhadap modul yang sudah dibagikan.
2. Seluruh modul dikembangkan dalam satu repository Laravel.
3. Setiap anggota menggunakan branch Git masing-masing.
4. Branch utama aplikasi adalah `main`.
5. Semua perubahan masuk ke `main` melalui Pull Request.
6. Ketua bertanggung jawab melakukan pemeriksaan dan integrasi.

## 2. Pembagian Tanggung Jawab

| Anggota           | Modul                                               |
| ----------------- | --------------------------------------------------- |
| Ketua + Anggota 1 | UI bersama, autentikasi, layout, integrasi          |
| Anggota 2         | Data Mahasiswa, Data Dosen, Akun Pengguna           |
| Anggota 3         | Program Studi, Angkatan, Mata Kuliah, Kelas, Jadwal |
| Anggota 4         | Pengaturan Akademik dan Laporan                     |
| Anggota 5         | Modul Dosen dan Input Nilai                         |
| Anggota 6         | Modul KRS Mahasiswa                                 |
| Anggota 7         | Informasi Akademik Mahasiswa                        |

## 3. Aturan Branch Git

Setiap anggota wajib membuat branch sendiri.

Contoh:

```bash
git checkout main
git pull origin main
git checkout -b fitur/data-pengguna
```

Contoh nama branch:

| Anggota   | Branch                    |
| --------- | ------------------------- |
| Anggota 1 | fitur/ui-auth-integrasi   |
| Anggota 2 | fitur/data-pengguna       |
| Anggota 3 | fitur/data-akademik       |
| Anggota 4 | fitur/pengaturan-akademik |
| Anggota 5 | fitur/modul-dosen         |
| Anggota 6 | fitur/modul-krs           |
| Anggota 7 | fitur/akademik-mahasiswa  |

Gunakan nama branch tersebut sebagai contoh standar. Jika satu anggota mengerjakan beberapa perubahan terpisah, boleh menggunakan branch fitur tambahan setelah berkoordinasi.

## 4. Aturan File Bersama

Beberapa file digunakan oleh seluruh aplikasi dan tidak boleh diubah sembarangan.

| File                        | Penanggung Jawab           |
| --------------------------- | -------------------------- |
| routes/web.php              | Ketua + Anggota 1          |
| AuthController.php          | Ketua + Anggota 1          |
| DashboardController.php     | Ketua + Anggota 1          |
| layouts/app.blade.php       | Ketua + Anggota 1          |
| components/                 | Ketua + Anggota 1          |
| resources/css/app.css       | Ketua + Anggota 1          |
| resources/js/app.js         | Ketua + Anggota 1          |
| bootstrap/app.php           | Ketua + Anggota 1          |
| Model dan migration bersama | Koordinasi seluruh anggota |

Anggota lain harus berkoordinasi sebelum mengubah file-file tersebut.

## 5. Aturan Controller dan Blade

1. Controller ditempatkan sesuai folder modul.
2. Blade View ditempatkan sesuai folder modul.
3. Gunakan namespace Controller yang sesuai.
4. Gunakan `layouts.app` untuk seluruh halaman internal.
5. Gunakan Shared UI Components yang sudah tersedia.
6. Jangan membuat ulang komponen yang sudah disediakan.
7. Gunakan nama route sesuai standar role dan modul.

## 6. Aturan Database

1. Gunakan struktur database yang sudah disepakati.
2. Jangan mengubah tabel atau kolom tanpa koordinasi.
3. Jangan membuat migration duplikat untuk tabel yang sudah tersedia.
4. Jika membutuhkan perubahan database, diskusikan terlebih dahulu dengan Ketua.
5. Setiap migration baru harus memiliki fungsi yang jelas.
6. Pastikan migration memiliki metode `down()` yang sesuai.

## 7. Alur Pull Request

Setiap anggota mengikuti alur berikut:

1. Ambil perubahan terbaru dari `main`.
2. Kerjakan fitur pada branch masing-masing.
3. Uji fitur secara lokal.
4. Commit perubahan dengan pesan yang jelas.
5. Push branch ke GitHub.
6. Buat Pull Request menuju `main`.
7. Berikan informasi fitur yang dibuat dan cara mengujinya.
8. Ketua melakukan review.
9. Setelah disetujui, Pull Request dapat di-merge.

## 8. Format Commit

Gunakan format pesan commit yang jelas.

Contoh:

```bash
git add .
git commit -m "Add student management module"
```

Contoh awalan pesan commit:

- `Add`: menambahkan fitur.
- `Update`: memperbarui fitur.
- `Fix`: memperbaiki kesalahan.
- `Refactor`: merapikan struktur kode.
- `Docs`: memperbarui dokumentasi.

## 9. Pemeriksaan Sebelum Integrasi

Sebelum Pull Request di-merge, pastikan:

- [ ] Tidak ada error PHP.
- [ ] Tidak ada error Blade.
- [ ] Route dapat diakses sesuai role.
- [ ] Validasi form berjalan.
- [ ] Data tersimpan dengan benar.
- [ ] Tampilan mengikuti standar UI.
- [ ] Tidak merusak fitur yang sudah tersedia.
- [ ] Tidak ada perubahan file di luar tanggung jawab tanpa koordinasi.

## 10. Penanganan Konflik

Jika terjadi konflik Git:

1. Jangan langsung menghapus perubahan anggota lain.
2. Identifikasi file yang mengalami konflik.
3. Diskusikan dengan anggota yang mengerjakan file tersebut.
4. Selesaikan konflik bersama.
5. Uji kembali aplikasi setelah konflik selesai.
6. Ketua memastikan hasil integrasi berjalan.

## 11. Tanggung Jawab Ketua

Ketua bertanggung jawab untuk:

1. Menjaga konsistensi struktur proyek.
2. Mengawasi pembagian tugas.
3. Memeriksa Pull Request.
4. Mengkoordinasikan perubahan database.
5. Menyelesaikan konflik integrasi.
6. Memastikan seluruh modul dapat berjalan bersama.
7. Menjaga kestabilan branch `main`.

## 12. Ketentuan Akhir

Setiap anggota wajib mengikuti panduan ini.

Jika terdapat kebutuhan perubahan di luar tanggung jawab modul, anggota harus berkoordinasi dengan Ketua sebelum melakukan perubahan.
