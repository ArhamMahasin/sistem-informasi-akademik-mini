<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Manajemen Data Pengguna</h3>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.users.profile') }}" class="btn btn-outline-secondary">Profil Pengguna</a>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">+ Tambah Pengguna</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form method="GET" action="{{ route('admin.users.index') }}" class="row g-2 mb-3">
        <div class="col-md-6">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Cari nama, NIM/NIP, atau email...">
        </div>
        <div class="col-md-4">
            <select name="role" class="form-select">
                <option value="">Semua Peran</option>
                <option value="admin" @selected(request('role') === 'admin')>Admin</option>
                <option value="dosen" @selected(request('role') === 'dosen')>Dosen</option>
                <option value="mahasiswa" @selected(request('role') === 'mahasiswa')>Mahasiswa</option>
            </select>
        </div>
        <div class="col-md-2 d-grid">
            <button type="submit" class="btn btn-secondary">Filter</button>
        </div>
    </form>

    <div class="card shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>NIM / NIP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Peran</th>
                        <th>Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $index => $user)
                        <tr>
                            <td>{{ $users->firstItem() + $index }}</td>
                            <td>{{ $user->identifier ?? '-' }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><span class="badge bg-info text-dark text-uppercase">{{ $user->role }}</span></td>
                            <td>
                                @if($user->is_active)
                                    <span class="badge bg-success">Aktif</span>
                                @else
                                    <span class="badge bg-secondary">Nonaktif</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.users.profile', $user) }}" class="btn btn-sm btn-outline-info">Profil</a>
                                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus pengguna ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">Belum ada data pengguna.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $users->links() }}
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
