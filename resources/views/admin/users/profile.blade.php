<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 640px;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Profil Pengguna</h3>
        <a href="{{ route('admin.users.index') }}" class="btn btn-sm btn-outline-secondary">Kembali ke Daftar</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm mb-3">
        <div class="card-body">
            <div class="mb-2"><span class="text-muted">Peran:</span> <strong class="text-uppercase">{{ $user->role }}</strong></div>
            <div class="mb-0"><span class="text-muted">Status Akun:</span> <strong>{{ $user->is_active ? 'Aktif' : 'Nonaktif' }}</strong></div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.users.profile.update', $user) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">NIM / NIP / NIDN</label>
                    <input type="text" name="identifier" value="{{ old('identifier', $user->identifier) }}" class="form-control @error('identifier') is-invalid @enderror">
                    @error('identifier')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control @error('email') is-invalid @enderror" required>
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Password Baru <small class="text-muted">(kosongkan jika tidak diubah)</small></label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan Profil</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
