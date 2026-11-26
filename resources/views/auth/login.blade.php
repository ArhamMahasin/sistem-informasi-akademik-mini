
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Informasi Akademik Mini</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

    <div class="container-fluid min-vh-100">
        <div class="row min-vh-100">

            <!-- Bagian Kiri -->
            <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center bg-primary text-white p-5">
                <div class="text-center" style="max-width: 480px;">

                    <div class="mb-4">
                        <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center"
                             style="width: 110px; height: 110px;">
                            <span class="text-primary fw-bold fs-1">SIA</span>
                        </div>
                    </div>

                    <h1 class="fw-bold mb-3">Sistem Informasi Akademik Mini</h1>

                    <p class="fs-5 mb-4">
                        Sistem informasi akademik untuk mendukung pengelolaan
                        kegiatan akademik mahasiswa dan dosen.
                    </p>

                    <div class="border-top border-light pt-4">
                        <p class="mb-1">UIN Sunan Gunung Djati Bandung</p>
                        <small>Fakultas Sains dan Teknologi</small>
                    </div>

                </div>
            </div>

            <!-- Bagian Kanan -->
            <div class="col-lg-6 d-flex align-items-center justify-content-center p-4 p-md-5">
                <div class="w-100" style="max-width: 430px;">

                    <div class="text-center mb-4 d-lg-none">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                             style="width: 75px; height: 75px;">
                            <span class="fw-bold fs-4">SIA</span>
                        </div>

                        <h4 class="fw-bold">Sistem Informasi Akademik Mini</h4>
                        <p class="text-muted">UIN Sunan Gunung Djati Bandung</p>
                    </div>

                    <div class="mb-4">
                        <h2 class="fw-bold mb-2">Selamat Datang!</h2>
                        <p class="text-muted">
                            Silakan masuk menggunakan akun akademik Anda.
                        </p>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="username" class="form-label fw-semibold">
                                Username
                            </label>

                            <input
                                type="text"
                                class="form-control form-control-lg @error('username') is-invalid @enderror"
                                id="username"
                                name="username"
                                value="{{ old('username') }}"
                                placeholder="Masukkan NIM, NIDN, atau username"
                                autocomplete="username"
                                required
                                autofocus
                            >

                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">
                                Password
                            </label>

                            <input
                                type="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                id="password"
                                name="password"
                                placeholder="Masukkan password"
                                autocomplete="current-password"
                                required
                            >

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="remember"
                                    id="remember"
                                    value="1"
                                >

                                <label class="form-check-label" for="remember">
                                    Ingat saya
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            Masuk
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <small class="text-muted">
                            &copy; {{ date('Y') }} Sistem Informasi Akademik Mini
                        </small>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>
</html>
