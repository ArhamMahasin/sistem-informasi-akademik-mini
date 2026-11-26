
@extends('layouts.app')

@section('title', 'Dashboard Preview | SIA Mini')

@section('sidebar-menu')
    <div class="mb-3">
        <small class="text-secondary fw-semibold">MENU UTAMA</small>
    </div>

    <a href="#" class="btn btn-primary w-100 text-start mb-2">
        Dashboard
    </a>

    <a href="#" class="btn btn-light w-100 text-start mb-2">
        Data Akademik
    </a>

    <a href="#" class="btn btn-light w-100 text-start mb-2">
        Pengaturan
    </a>
@endsection

@section('content')

    <div class="mb-4">
        <h3 class="fw-bold">Dashboard Preview</h3>
        <p class="text-secondary">
            Contoh penggunaan Master Layout Sistem Informasi Akademik Mini.
        </p>
    </div>

    <div class="row g-3">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-secondary mb-1">Total Mahasiswa</p>
                    <h2 class="fw-bold">350</h2>
                    <span class="text-success small">Data contoh</span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-secondary mb-1">Total Dosen</p>
                    <h2 class="fw-bold">25</h2>
                    <span class="text-success small">Data contoh</span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <p class="text-secondary mb-1">Mata Kuliah</p>
                    <h2 class="fw-bold">42</h2>
                    <span class="text-success small">Data contoh</span>
                </div>
            </div>
        </div>

    </div>

    <div class="card border-0 shadow-sm mt-4">
        <div class="card-body">
            <h5 class="fw-bold mb-3">Informasi Akademik</h5>
            <p class="text-secondary mb-0">
                Selamat datang di Sistem Informasi Akademik Mini.
                Halaman ini merupakan contoh tampilan menggunakan Master Layout.
            </p>
        </div>
    </div>

@endsection
