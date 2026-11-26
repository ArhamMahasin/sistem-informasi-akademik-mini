# Standar Penggunaan Shared UI Components

## Sistem Informasi Akademik Mini

Dokumen ini menjadi acuan seluruh anggota kelompok dalam menggunakan komponen antarmuka bersama (Shared UI Components).

## 1. Tujuan

Seluruh halaman aplikasi harus menggunakan komponen bersama yang telah disediakan agar:

- Tampilan setiap modul konsisten.
- Anggota tidak membuat komponen serupa berulang kali.
- Perubahan desain lebih mudah diterapkan.
- Integrasi antarmodul lebih mudah dilakukan.

## 2. Daftar Komponen

| Komponen         | Fungsi                                                        |
| ---------------- | ------------------------------------------------------------- |
| `x-alert`        | Menampilkan pesan berhasil, gagal, peringatan, dan informasi. |
| `x-breadcrumb`   | Menampilkan navigasi lokasi halaman.                          |
| `x-page-header`  | Menampilkan judul dan deskripsi halaman.                      |
| `x-stat-card`    | Menampilkan ringkasan angka atau statistik.                   |
| `x-data-table`   | Menampilkan data dalam bentuk tabel.                          |
| `x-empty-state`  | Menampilkan kondisi ketika belum ada data.                    |
| `x-status-badge` | Menampilkan label status data.                                |
| `x-pagination`   | Menampilkan navigasi halaman data.                            |

## 3. Aturan Penggunaan

### 3.1 Alert

Gunakan untuk menampilkan informasi setelah proses berhasil atau gagal.

Contoh:

```blade
<x-alert type="success">
    Data mahasiswa berhasil disimpan.
</x-alert>
```

Jenis yang tersedia:

- `success`
- `danger`
- `warning`
- `info`

### 3.2 Breadcrumb

Gunakan untuk menunjukkan posisi halaman.

Contoh:

```blade
<x-breadcrumb :items="[
    ['label' => 'Dashboard', 'url' => route('admin.dashboard')],
    ['label' => 'Data Mahasiswa'],
]" />
```

### 3.3 Page Header

Setiap halaman utama modul wajib menggunakan page header.

Contoh:

```blade
<x-page-header
    title="Data Mahasiswa"
    description="Kelola data mahasiswa."
/>
```

Jika membutuhkan tombol aksi, gunakan slot `actions`.

### 3.4 Stat Card

Gunakan untuk menampilkan ringkasan angka pada dashboard.

Contoh:

```blade
<x-stat-card
    title="Total Mahasiswa"
    :value="$totalMahasiswa"
    description="Mahasiswa terdaftar"
/>
```

Jangan menggunakan angka ilustrasi pada halaman aplikasi yang sudah terhubung dengan database.

### 3.5 Data Table

Gunakan untuk menampilkan daftar data.

Contoh:

```blade
<x-data-table>
    <x-slot:header>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Status</th>
        </tr>
    </x-slot:header>

    @foreach ($mahasiswa as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama }}</td>
            <td>
                <x-status-badge :status="$item->status" />
            </td>
        </tr>
    @endforeach
</x-data-table>
```

### 3.6 Empty State

Gunakan ketika data belum tersedia.

Contoh:

```blade
<x-empty-state
    title="Belum Ada Data"
    description="Data belum tersedia."
/>
```

Jangan menampilkan tabel kosong tanpa informasi kepada pengguna.

### 3.7 Status Badge

Gunakan untuk menampilkan status data.

Contoh:

```blade
<x-status-badge status="Aktif" />
```

Gunakan komponen ini daripada membuat badge status sendiri dengan warna yang berbeda-beda.

### 3.8 Pagination

Gunakan untuk navigasi data yang memiliki pagination Laravel.

Contoh:

```blade
<x-pagination :paginator="$mahasiswa" />
```

Controller harus mengirimkan data menggunakan pagination Laravel, misalnya `paginate(10)`.

## 4. Standar Halaman

Setiap halaman modul dianjurkan memiliki urutan:

1. Breadcrumb.
2. Page Header.
3. Alert jika terdapat pesan proses.
4. Konten utama (stat card, form, atau data table).
5. Empty State jika data belum tersedia.
6. Pagination jika data memiliki beberapa halaman.

Tidak semua halaman harus menggunakan seluruh komponen. Gunakan sesuai kebutuhan halaman.

## 5. Aturan untuk Seluruh Anggota

1. Gunakan komponen yang sudah tersedia sebelum membuat komponen baru.
2. Jangan mengubah komponen bersama tanpa koordinasi dengan Ketua.
3. Jika membutuhkan komponen baru, diskusikan terlebih dahulu.
4. Jangan membuat warna, ukuran, atau gaya komponen yang berbeda tanpa persetujuan.
5. Seluruh halaman harus menggunakan Master Layout `layouts.app`.
6. Seluruh halaman harus mengikuti Design System proyek.

Dokumen ini berlaku untuk seluruh modul Admin, Dosen, dan Mahasiswa.
