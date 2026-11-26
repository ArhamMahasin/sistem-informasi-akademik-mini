<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4" style="max-width: 640px;">
    <h3 class="mb-3">Tambah Pengguna Baru</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Peran (Role)</label>
                    <select name="role" class="form-select @error('role') is-invalid @enderror" required>
                        <option value="mahasiswa" @selected(old('role') === 'mahasiswa')>Mahasiswa</option>
                        <option value="dosen" @selected(old('role') === 'dosen')>Dosen</option>
                        <option value="admin" @selected(old('role') === 'admin')>Admin</option>
                    </select>
                    @error('role')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">NIM / NIP / NIDN <small class="text-muted">(opsional untuk admin)</small></label>
                    <input type="text" name="identifier" value="{{ old('identifier') }}" class="form-control @error('identifier') is-invalid @enderror">
                    @error('identifier')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required>
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active" @checked(old('is_active', true))>
                    <label class="form-check-label" for="is_active">Akun Aktif</label>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
