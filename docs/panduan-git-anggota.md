# Panduan Git untuk Anggota

## Sistem Informasi Akademik Mini

Dokumen ini merupakan panduan penggunaan Git dan GitHub bagi seluruh anggota kelompok.

## 1. Persiapan

Pastikan sudah menginstal:

- Git
- Visual Studio Code
- PHP dan Composer
- Node.js dan NPM
- Docker Desktop

Pastikan sudah menerima undangan sebagai collaborator repository GitHub.

Repository:
https://github.com/ArhamMahasin/sistem-informasi-akademik-mini

## 2. Clone Repository

Clone repository hanya dilakukan satu kali pada komputer masing-masing.

```bash
git clone https://github.com/ArhamMahasin/sistem-informasi-akademik-mini.git
```

Masuk ke folder proyek:

```bash
cd sistem-informasi-akademik-mini
```

## 3. Perbarui Branch Main

Sebelum mulai mengerjakan fitur, pastikan perubahan terbaru sudah diambil.

```bash
git checkout main
git pull origin main
```

Jangan mengerjakan fitur langsung di branch main.

## 4. Buat Branch Masing-Masing

Setiap anggota wajib membuat branch sendiri sesuai tanggung jawabnya.

| Anggota   | Nama Branch               |
| --------- | ------------------------- |
| Anggota 1 | fitur/ui-auth-integrasi   |
| Anggota 2 | fitur/data-pengguna       |
| Anggota 3 | fitur/data-akademik       |
| Anggota 4 | fitur/pengaturan-akademik |
| Anggota 5 | fitur/modul-dosen         |
| Anggota 6 | fitur/modul-krs           |
| Anggota 7 | fitur/akademik-mahasiswa  |

Contoh membuat branch untuk Anggota 2:

```bash
git checkout -b fitur/data-pengguna
```

Periksa branch aktif:

```bash
git branch
```

Tanda `*` menunjukkan branch yang sedang digunakan.

## 5. Mengerjakan Fitur

1. Kerjakan fitur sesuai pembagian tugas.
2. Jangan mengubah file bersama tanpa koordinasi.
3. Jangan mengerjakan fitur langsung di branch main.
4. Ikuti standar Controller, Blade, Route, dan UI yang telah disepakati.

## 6. Simpan Perubahan dengan Commit

Periksa perubahan:

```bash
git status
```

Tambahkan perubahan:

```bash
git add .
```

Buat commit:

```bash
git commit -m "Add student management module"
```

Gunakan pesan commit yang menjelaskan perubahan.

Contoh awalan commit:

- Add: menambahkan fitur.
- Update: memperbarui fitur.
- Fix: memperbaiki kesalahan.
- Refactor: merapikan kode.
- Docs: memperbarui dokumentasi.

## 7. Push Branch ke GitHub

Kirim branch ke GitHub:

```bash
git push -u origin fitur/data-pengguna
```

Ganti nama branch sesuai branch masing-masing.

Untuk push berikutnya cukup gunakan:

```bash
git push
```

## 8. Membuat Pull Request

Setelah branch berhasil di-push:

1. Buka repository GitHub.
2. Pilih menu Pull requests.
3. Klik New pull request.
4. Pilih branch milik sendiri sebagai Compare.
5. Pastikan Base adalah `main`.
6. Isi judul dan deskripsi perubahan.
7. Klik Create pull request.
8. Tunggu Ketua melakukan pemeriksaan.

Jangan merge Pull Request sendiri tanpa persetujuan Ketua.

## 9. Mengambil Perubahan Terbaru

Sebelum melanjutkan pekerjaan, anggota perlu mengambil perubahan terbaru dari main.

Pastikan pekerjaan lokal sudah di-commit terlebih dahulu.

```bash
git checkout main
git pull origin main
git checkout fitur/data-pengguna
```

Gabungkan perubahan terbaru main ke branch fitur:

```bash
git merge main
```

Jika terjadi konflik, jangan langsung menghapus perubahan anggota lain. Koordinasikan penyelesaiannya dengan Ketua atau pemilik file terkait.

## 10. Aturan Penting

1. Jangan melakukan commit langsung ke main.
2. Jangan melakukan force push.
3. Jangan menghapus branch main.
4. Jangan mengubah file bersama tanpa koordinasi.
5. Jangan mengirim file `.env` ke GitHub.
6. Jangan membuat migration duplikat.
7. Selalu uji fitur sebelum membuat Pull Request.
8. Pastikan Pull Request ditujukan ke main.
9. Komunikasikan perubahan yang berdampak pada modul anggota lain.

## 11. Alur Kerja Singkat

```text
Clone Repository
       |
       v
Update Main
       |
       v
Buat Branch Fitur
       |
       v
Kerjakan Modul
       |
       v
Commit Perubahan
       |
       v
Push ke GitHub
       |
       v
Buat Pull Request
       |
       v
Review oleh Ketua
       |
       v
Merge ke Main
```

## 12. Bantuan dan Koordinasi

Jika mengalami kendala Git, konflik, atau perubahan file bersama, segera koordinasikan dengan Ketua.

Seluruh anggota wajib mengikuti panduan ini selama pengembangan Sistem Informasi Akademik Mini.
