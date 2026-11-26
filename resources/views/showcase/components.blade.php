
@extends('layouts.app')

@section('title', 'UI Components Showcase')

@section('sidebar-menu')
    <a href="/" class="sidebar-link">
        UI Showcase
    </a>

    <a href="/layout-test" class="sidebar-link">
        Layout Test
    </a>

    <a href="/components-test" class="sidebar-link active">
        Components Showcase
    </a>
@endsection

@section('content')

    {{-- Breadcrumb --}}
    <x-breadcrumb :items="[
        ['label' => 'Showcase', 'url' => '/'],
        ['label' => 'Components'],
    ]" />

    {{-- Page Header --}}
    <x-page-header
        title="UI Components Showcase"
        description="Kumpulan komponen antarmuka yang digunakan dalam Sistem Informasi Akademik Mini."
    />

    <hr class="my-4">

    {{-- Alert Components --}}
    <h5 class="fw-bold mb-3">1. Alert Components</h5>

    <div class="mb-3">
        <x-alert type="success">
            Data berhasil disimpan!
        </x-alert>

        <x-alert type="danger">
            Terjadi kesalahan saat memproses data.
        </x-alert>

        <x-alert type="warning">
            Harap periksa kembali data Anda.
        </x-alert>

        <x-alert type="info" :dismissible="false">
            Selamat datang di Sistem Informasi Akademik Mini.
        </x-alert>
    </div>

    <hr class="my-4">

    {{-- Stat Card Components --}}
    <h5 class="fw-bold mb-3">2. Stat Card Components</h5>

    <div class="row g-3">

        <div class="col-md-6 col-xl-3">
            <x-stat-card
                title="Total Mahasiswa"
                :value="1250"
                description="Data ilustrasi"
            />
        </div>

        <div class="col-md-6 col-xl-3">
            <x-stat-card
                title="Total Dosen"
                :value="85"
                description="Data ilustrasi"
            />
        </div>

        <div class="col-md-6 col-xl-3">
            <x-stat-card
                title="Total Mata Kuliah"
                :value="120"
                description="Data ilustrasi"
            />
        </div>

        <div class="col-md-6 col-xl-3">
            <x-stat-card
                title="Total Kelas"
                :value="48"
                description="Data ilustrasi"
            />
        </div>

    </div>

    <hr class="my-4">

    {{-- Status Badge Components --}}
    <h5 class="fw-bold mb-3">3. Status Badge Components</h5>

    <div class="d-flex flex-wrap gap-2 mb-3">
        <x-status-badge status="Aktif" />
        <x-status-badge status="Nonaktif" />
        <x-status-badge status="Cuti" />
        <x-status-badge status="Lulus" />
        <x-status-badge status="Draft" />
        <x-status-badge status="Disimpan" />
        <x-status-badge status="Ganjil" />
        <x-status-badge status="Genap" />
        <x-status-badge status="Dibuka" />
        <x-status-badge status="Ditutup" />
    </div>

    <hr class="my-4">

    {{-- Data Table Components --}}
    <h5 class="fw-bold mb-3">4. Data Table Components</h5>

    <x-data-table>
        <x-slot:header>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Program Studi</th>
                <th>Status</th>
            </tr>
        </x-slot:header>

        <tr>
            <td>1</td>
            <td>123456789</td>
            <td>Mahasiswa Contoh 1</td>
            <td>Teknik Informatika</td>
            <td>
                <x-status-badge status="Aktif" />
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>123456790</td>
            <td>Mahasiswa Contoh 2</td>
            <td>Teknik Informatika</td>
            <td>
                <x-status-badge status="Cuti" />
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td>123456791</td>
            <td>Mahasiswa Contoh 3</td>
            <td>Teknik Informatika</td>
            <td>
                <x-status-badge status="Lulus" />
            </td>
        </tr>
    </x-data-table>

    <hr class="my-4">

    {{-- Empty State Components --}}
    <h5 class="fw-bold mb-3">5. Empty State Components</h5>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <x-empty-state
                title="Belum Ada Data Mahasiswa"
                description="Data mahasiswa belum tersedia."
            >
                <x-slot:actions>
                    <button class="btn btn-primary" type="button">
                        Tambah Mahasiswa
                    </button>
                </x-slot:actions>
            </x-empty-state>
        </div>
    </div>

    <hr class="my-4">

    {{-- Pagination Components --}}
    <h5 class="fw-bold mb-3">6. Pagination Components</h5>

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <x-pagination :paginator="$paginator" />
        </div>
    </div>

@endsection
