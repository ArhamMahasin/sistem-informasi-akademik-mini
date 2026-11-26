# Standar Struktur Modul

## Sistem Informasi Akademik Mini

Dokumen ini menjadi pedoman seluruh anggota dalam membuat Controller dan Blade View.

## 1. Struktur Controller

```text
app/Http/Controllers/
├── AuthController.php
├── DashboardController.php
├── Admin/
├── Dosen/
└── Mahasiswa/
```

### Pembagian Controller

| Folder                | Penanggung Jawab    |
| --------------------- | ------------------- |
| Controllers/Admin     | Anggota 2, 3, dan 4 |
| Controllers/Dosen     | Anggota 5           |
| Controllers/Mahasiswa | Anggota 6 dan 7     |
| Controllers utama     | Ketua + Anggota 1   |

## 2. Struktur Blade View

```text
resources/views/
├── layouts/
├── components/
├── auth/
├── landing/
├── admin/
│   ├── dashboard.blade.php
│   ├── mahasiswa/
│   ├── dosen/
│   ├── program-studi/
│   ├── angkatan/
│   ├── mata-kuliah/
│   ├── kelas/
│   └── pengaturan-akademik/
├── dosen/
│   ├── dashboard.blade.php
│   ├── kelas/
│   └── nilai/
├── mahasiswa/
│   ├── dashboard.blade.php
│   ├── krs/
│   └── akademik/
└── showcase/
```

## 3. Aturan Pembuatan Controller

1. Controller harus ditempatkan sesuai role dan modul.
2. Gunakan namespace sesuai folder.
3. Gunakan nama Controller berakhiran `Controller`.
4. Satu Controller menangani satu kelompok fungsi yang saling berkaitan.
5. Jangan mengubah AuthController dan DashboardController tanpa koordinasi dengan Ketua.

Contoh namespace:

```php
namespace App\Http\Controllers\Admin;
```

## 4. Aturan Pembuatan Blade

1. Semua halaman internal wajib menggunakan `layouts.app`.
2. Simpan halaman sesuai folder modul.
3. Gunakan nama file dengan format huruf kecil dan tanda hubung jika diperlukan.
4. Gunakan Shared UI Components yang sudah disediakan.
5. Jangan membuat ulang komponen yang sudah tersedia.

Contoh:

```blade
@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
    <x-breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('admin.dashboard')],
        ['label' => 'Data Mahasiswa'],
    ]" />

    <x-page-header
        title="Data Mahasiswa"
        description="Kelola data mahasiswa."
    />

@endsection
```

## 5. Standar Route

Gunakan prefix dan nama route berdasarkan role.

| Role      | Prefix URL   | Prefix Nama Route |
| --------- | ------------ | ----------------- |
| Admin     | `/admin`     | `admin.`          |
| Dosen     | `/dosen`     | `dosen.`          |
| Mahasiswa | `/mahasiswa` | `mahasiswa.`      |

Contoh:

```php
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        // Route modul Admin
    });
```

Setiap anggota wajib menambahkan route ke dalam grup role yang sesuai.

## 6. Aturan Integrasi

1. Gunakan satu repository GitHub.
2. Jangan mengerjakan fitur langsung di branch `main`.
3. Gunakan branch masing-masing anggota.
4. Kirim perubahan melalui Pull Request.
5. Ketua melakukan review sebelum merge.
6. Jangan mengubah file bersama tanpa koordinasi.
7. Pastikan aplikasi tetap berjalan setelah integrasi.

Dokumen ini berlaku untuk seluruh anggota kelompok.
