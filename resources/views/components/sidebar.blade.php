<aside class="sidebar" id="sidebar">

    {{-- Brand --}}
    <div class="sidebar-brand">
        <div class="brand-icon">SIA</div>

        <div>
            <h6 class="mb-0 fw-bold">SIA Mini</h6>
            <small>UIN Sunan Gunung Djati</small>
        </div>
    </div>

    <hr>

    <div class="sidebar-menu">

        @auth

            {{-- MENU ADMIN --}}
            @if (Auth::user()->role === 'admin')

                <small class="text-secondary px-3 mb-2 d-block">
                    MENU ADMIN
                </small>

                <a href="{{ route('admin.dashboard') }}"
                   class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    Dashboard
                </a>

                <div class="sidebar-link text-secondary" aria-disabled="true">
                    Data Pengguna
                    <small class="ms-auto">Segera</small>
                </div>

                <div class="sidebar-link text-secondary" aria-disabled="true">
                    Data Akademik
                    <small class="ms-auto">Segera</small>
                </div>

                <div class="sidebar-link text-secondary" aria-disabled="true">
                    Pengaturan Akademik
                    <small class="ms-auto">Segera</small>
                </div>

                <div class="sidebar-link text-secondary" aria-disabled="true">
                    Laporan
                    <small class="ms-auto">Segera</small>
                </div>

            {{-- MENU DOSEN --}}
            @elseif (Auth::user()->role === 'dosen')

                <small class="text-secondary px-3 mb-2 d-block">
                    MENU DOSEN
                </small>

                <a href="{{ route('dosen.dashboard') }}"
                   class="sidebar-link {{ request()->routeIs('dosen.dashboard') ? 'active' : '' }}">
                    Dashboard
                </a>

                <div class="sidebar-link text-secondary" aria-disabled="true">
                    Kelas yang Diampu
                    <small class="ms-auto">Segera</small>
                </div>

                <div class="sidebar-link text-secondary" aria-disabled="true">
                    Input Nilai
                    <small class="ms-auto">Segera</small>
                </div>

                <div class="sidebar-link text-secondary" aria-disabled="true">
                    Rekap Nilai
                    <small class="ms-auto">Segera</small>
                </div>

            {{-- MENU MAHASISWA --}}
            @elseif (Auth::user()->role === 'mahasiswa')

                <small class="text-secondary px-3 mb-2 d-block">
                    MENU MAHASISWA
                </small>

                <a href="{{ route('mahasiswa.dashboard') }}"
                   class="sidebar-link {{ request()->routeIs('mahasiswa.dashboard') ? 'active' : '' }}">
                    Dashboard
                </a>

                <div class="sidebar-link text-secondary" aria-disabled="true">
                    Kartu Rencana Studi
                    <small class="ms-auto">Segera</small>
                </div>

                <div class="sidebar-link text-secondary" aria-disabled="true">
                    Jadwal Kuliah
                    <small class="ms-auto">Segera</small>
                </div>

                <div class="sidebar-link text-secondary" aria-disabled="true">
                    Riwayat Nilai
                    <small class="ms-auto">Segera</small>
                </div>

            @endif

        @endauth

    </div>

    {{-- Footer --}}
    <div class="sidebar-footer">
        <small>© 2026 Sistem Informasi Akademik Mini</small>
    </div>

</aside>
