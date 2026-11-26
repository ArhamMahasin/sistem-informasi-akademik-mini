
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Informasi Akademik Mini | UIN Sunan Gunung Djati Bandung</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            min-height: 100vh;
            background: #F3F4F6;
            color: #1F2937;
            font-family: 'Inter', sans-serif;
        }

        .landing-navbar {
            background: #FFFFFF;
            border-bottom: 1px solid #E5E7EB;
        }

        .landing-logo {
            width: 58px;
            height: 58px;
            object-fit: contain;
        }

        .hero-section {
            min-height: 75vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 20px;
        }

        .hero-content {
            max-width: 780px;
        }

        .hero-label {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 30px;
            background: #DBEAFE;
            color: #1D4ED8;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .hero-title {
            font-size: clamp(32px, 5vw, 52px);
            font-weight: 800;
            line-height: 1.2;
            margin-top: 24px;
            margin-bottom: 20px;
        }

        .hero-description {
            max-width: 650px;
            margin: 0 auto;
            color: #6B7280;
            font-size: 17px;
            line-height: 1.8;
        }

        .btn-login {
            background: #2563EB;
            color: #FFFFFF;
            padding: 13px 32px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: 0.2s;
        }

        .btn-login:hover {
            background: #1D4ED8;
            color: #FFFFFF;
            transform: translateY(-2px);
        }

        .landing-footer {
            background: #FFFFFF;
            border-top: 1px solid #E5E7EB;
            color: #6B7280;
        }

        @media (max-width: 576px) {
            .landing-logo {
                width: 48px;
                height: 48px;
            }

            .hero-description {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="landing-navbar py-3">
        <div class="container">
            <div class="d-flex align-items-center gap-3">

                <img
                    src="{{ asset('images/logo-uin.png') }}"
                    alt="Logo UIN Sunan Gunung Djati Bandung"
                    class="landing-logo"
                >

                <div>
                    <h6 class="fw-bold mb-1">
                        UIN Sunan Gunung Djati Bandung
                    </h6>

                    <small class="text-secondary">
                        Sistem Informasi Akademik Mini
                    </small>
                </div>

            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main class="hero-section">
        <div class="hero-content">

            <span class="hero-label">
                SISTEM INFORMASI AKADEMIK
            </span>

            <h1 class="hero-title">
                Sistem Informasi Akademik Mini
            </h1>

            <p class="hero-description mb-4">
                Platform informasi akademik terintegrasi untuk
                membantu pengelolaan data mahasiswa, dosen,
                perkuliahan, Kartu Rencana Studi, dan nilai
                akademik di lingkungan UIN Sunan Gunung Djati Bandung.
            </p>

            <a href="{{ route('login') }}" class="btn-login">
                Login ke Sistem
            </a>

        </div>
    </main>

    <!-- Footer -->
    <footer class="landing-footer py-4">
        <div class="container text-center">
            <small>
                &copy; {{ date('Y') }} Sistem Informasi Akademik Mini
                <br>
                UIN Sunan Gunung Djati Bandung
            </small>
        </div>
    </footer>

</body>
</html>
