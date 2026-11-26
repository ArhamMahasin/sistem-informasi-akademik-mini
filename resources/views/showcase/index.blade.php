
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI Showcase | Sistem Informasi Akademik Mini</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container py-5">

    <div class="mb-5">
        <span class="badge text-bg-primary mb-2">DESIGN SYSTEM</span>
        <h1 class="fw-bold">UI Showcase</h1>
        <p class="text-secondary">
            Sistem Informasi Akademik Mini
            <br>
            UIN Sunan Gunung Djati Bandung
        </p>
    </div>

    <hr>

    <!-- COLORS -->
    <section class="mb-5">
        <h4 class="fw-bold mb-3">1. Warna Utama</h4>

        <div class="row g-3">
            <div class="col-md-4">
                <div class="p-4 rounded text-white" style="background: #2563EB;">
                    Primary Blue<br>#2563EB
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 rounded border bg-white">
                    White<br>#FFFFFF
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 rounded" style="background: #F3F4F6;">
                    Light Gray<br>#F3F4F6
                </div>
            </div>
        </div>
    </section>

    <!-- BUTTONS -->
    <section class="mb-5">
        <h4 class="fw-bold mb-3">2. Buttons</h4>

        <button class="btn btn-primary me-2">Primary</button>
        <button class="btn btn-outline-primary me-2">Outline</button>
        <button class="btn btn-secondary me-2">Secondary</button>
        <button class="btn btn-danger">Hapus</button>
    </section>

    <!-- CARDS -->
    <section class="mb-5">
        <h4 class="fw-bold mb-3">3. Cards</h4>

        <div class="row g-3">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <p class="text-secondary mb-1">Total Mahasiswa</p>
                        <h2 class="fw-bold mb-0">350</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <p class="text-secondary mb-1">Total Dosen</p>
                        <h2 class="fw-bold mb-0">25</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <p class="text-secondary mb-1">Mata Kuliah</p>
                        <h2 class="fw-bold mb-0">42</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TABLE -->
    <section class="mb-5">
        <h4 class="fw-bold mb-3">4. Table</h4>

        <div class="card border-0 shadow-sm">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Program Studi</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>123456001</td>
                            <td>Ahmad Fauzi</td>
                            <td>Teknik Informatika</td>
                            <td><span class="badge text-bg-success">Aktif</span></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>123456002</td>
                            <td>Siti Aminah</td>
                            <td>Teknik Informatika</td>
                            <td><span class="badge text-bg-warning">Cuti</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- FORMS -->
    <section class="mb-5">
        <h4 class="fw-bold mb-3">5. Form Components</h4>

        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama">
                </div>

                <div class="mb-3">
                    <label class="form-label">Program Studi</label>
                    <select class="form-select">
                        <option>Teknik Informatika</option>
                        <option>Sistem Informasi</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea class="form-control" rows="3" placeholder="Masukkan keterangan"></textarea>
                </div>

                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </section>

    <!-- BADGES -->
    <section class="mb-5">
        <h4 class="fw-bold mb-3">6. Status Badges</h4>

        <span class="badge text-bg-success me-2">Aktif</span>
        <span class="badge text-bg-warning me-2">Menunggu</span>
        <span class="badge text-bg-danger me-2">Tidak Aktif</span>
        <span class="badge text-bg-primary">Selesai</span>
    </section>

    <!-- MODAL -->
    <section class="mb-5">
        <h4 class="fw-bold mb-3">7. Modal Confirmation</h4>

        <button
            class="btn btn-outline-danger"
            data-bs-toggle="modal"
            data-bs-target="#confirmationModal">
            Contoh Modal Hapus
        </button>

        <div class="modal fade" id="confirmationModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        Apakah kamu yakin ingin menghapus data ini?
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-light" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button class="btn btn-danger" data-bs-dismiss="modal">
                            Ya, Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <footer class="text-center text-secondary py-3">
        Sistem Informasi Akademik Mini &copy; 2026
    </footer>

</div>

</body>
</html>
