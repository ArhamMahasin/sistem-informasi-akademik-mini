
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistem Informasi Akademik Mini')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body>

    <div class="app-wrapper">

        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">

            <div class="sidebar-brand">
                <div class="brand-icon">SIA</div>
                <div>
                    <h6 class="mb-0 fw-bold">SIA Mini</h6>
                    <small>UIN Sunan Gunung Djati</small>
                </div>
            </div>

            <hr>

            <div class="sidebar-menu">
                @yield('sidebar-menu')
            </div>

            <div class="sidebar-footer">
                <small>© 2026 Sistem Informasi Akademik Mini</small>
            </div>

        </aside>

        <!-- Main Content -->
        <div class="main-wrapper">

            <!-- Navbar -->
            <nav class="top-navbar">

                <button
                    class="btn sidebar-toggle d-lg-none"
                    type="button"
                    id="sidebarToggle"
                    aria-label="Buka menu">
                    <span class="hamburger-icon">☰</span>
                </button>

                <div class="ms-auto d-flex align-items-center gap-3">
                    <span class="text-secondary small">
                        Sistem Informasi Akademik
                    </span>

                    <div class="user-avatar">U</div>
                </div>

            </nav>

            <!-- Page Content -->
            <main class="main-content">
                @yield('content')
            </main>

        </div>

    </div>

    @stack('scripts')

</body>
</html>
