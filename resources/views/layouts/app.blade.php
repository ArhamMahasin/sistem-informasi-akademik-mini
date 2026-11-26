
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

        {{-- Sidebar Component --}}
        <x-sidebar />

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

                    @auth
                        <div class="text-end">
                            <div class="fw-semibold small">
                                {{ Auth::user()->name ?? Auth::user()->username }}
                            </div>

                            <small class="text-secondary">
                                {{ ucfirst(Auth::user()->role) }}
                            </small>
                        </div>

                        <div class="user-avatar">
                            {{ strtoupper(substr(Auth::user()->username, 0, 1)) }}
                        </div>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary btn-sm">
                            Login
                        </a>
                    @endauth

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
