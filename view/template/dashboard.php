<?php include 'sidebar.php'; ?>
<?php include 'navbar.php'; ?>



<!-- CONTENT -->
<div class="content">

    <!-- Welcome -->
    <div class="welcome">

        <h3>Selamat Datang, Administrator</h3>

        <p>
            Berikut adalah ringkasan aktivitas sistem peminjaman alat.
        </p>

    </div>


    <!-- =========================
             STATISTICS
        ========================= -->

    <div class="row g-4 mb-4">

        <!-- Alat -->
        <div class="col-12 col-sm-6 col-xl-3">

            <div class="stat-card">

                <div class="d-flex justify-content-between">

                    <div>
                        <div class="stat-title">
                            Total Alat
                        </div>

                        <div class="stat-number">
                            120
                        </div>
                    </div>

                    <div class="stat-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- Peminjam -->
        <div class="col-12 col-sm-6 col-xl-3">

            <div class="stat-card">

                <div class="d-flex justify-content-between">

                    <div>

                        <div class="stat-title">
                            Total Peminjam
                        </div>

                        <div class="stat-number">
                            85
                        </div>

                    </div>

                    <div class="stat-icon">
                        <i class="bi bi-people"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- Peminjaman -->
        <div class="col-12 col-sm-6 col-xl-3">

            <div class="stat-card">

                <div class="d-flex justify-content-between">

                    <div>

                        <div class="stat-title">
                            Sedang Dipinjam
                        </div>

                        <div class="stat-number">
                            24
                        </div>

                    </div>

                    <div class="stat-icon">
                        <i class="bi bi-arrow-left-right"></i>
                    </div>

                </div>

            </div>

        </div>


        <!-- Pengembalian -->
        <div class="col-12 col-sm-6 col-xl-3">

            <div class="stat-card">

                <div class="d-flex justify-content-between">

                    <div>

                        <div class="stat-title">
                            Pengembalian
                        </div>

                        <div class="stat-number">
                            56
                        </div>

                    </div>

                    <div class="stat-icon">
                        <i class="bi bi-arrow-return-left"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================
             TABLE
        ========================= -->

    <div class="row g-4">

        <!-- Aktivitas Terbaru -->
        <div class="col-lg-8">

            <div class="content-card">

                <div class="d-flex justify-content-between align-items-center">

                    <div class="content-card-title">
                        Aktivitas Terbaru
                    </div>

                    <a href="#" class="btn btn-sm btn-outline-primary">
                        Lihat Semua
                    </a>

                </div>


                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-light">

                            <tr>
                                <th>No</th>
                                <th>User</th>
                                <th>Aktivitas</th>
                                <th>Deskripsi</th>
                                <th>Waktu</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>1</td>

                                <td>
                                    <i class="bi bi-person-circle me-1"></i>
                                    Admin
                                </td>

                                <td>
                                    <span class="badge text-bg-success">
                                        PEMINJAMAN
                                    </span>
                                </td>

                                <td>
                                    Membuat transaksi PMJ-001
                                </td>

                                <td>
                                    08:15
                                </td>

                            </tr>


                            <tr>

                                <td>2</td>

                                <td>
                                    <i class="bi bi-person-circle me-1"></i>
                                    Admin
                                </td>

                                <td>
                                    <span class="badge text-bg-primary">
                                        TAMBAH_ALAT
                                    </span>
                                </td>

                                <td>
                                    Menambahkan Laptop ASUS
                                </td>

                                <td>
                                    08:10
                                </td>

                            </tr>


                            <tr>

                                <td>3</td>

                                <td>
                                    <i class="bi bi-person-circle me-1"></i>
                                    Petugas
                                </td>

                                <td>
                                    <span class="badge text-bg-warning">
                                        PENGEMBALIAN
                                    </span>
                                </td>

                                <td>
                                    Memproses PMJ-002
                                </td>

                                <td>
                                    07:55
                                </td>

                            </tr>


                            <tr>

                                <td>4</td>

                                <td>
                                    <i class="bi bi-person-circle me-1"></i>
                                    Admin
                                </td>

                                <td>
                                    <span class="badge text-bg-info">
                                        UPDATE_ALAT
                                    </span>
                                </td>

                                <td>
                                    Mengubah data Proyektor
                                </td>

                                <td>
                                    07:40
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        <!-- Ringkasan -->
        <div class="col-lg-4">

            <div class="content-card">

                <div class="content-card-title">
                    Status Peminjaman
                </div>

                <div class="mb-3">

                    <div class="d-flex justify-content-between mb-1">
                        <span>Dipinjam</span>
                        <strong>24</strong>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-primary" style="width: 60%">
                        </div>
                    </div>

                </div>


                <div class="mb-3">

                    <div class="d-flex justify-content-between mb-1">
                        <span>Dikembalikan</span>
                        <strong>56</strong>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 80%">
                        </div>
                    </div>

                </div>


                <div class="mb-3">

                    <div class="d-flex justify-content-between mb-1">
                        <span>Terlambat</span>
                        <strong>8</strong>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-danger" style="width: 25%">
                        </div>
                    </div>

                </div>


                <hr>


                <div class="d-grid">

                    <a href="#" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i>
                        Buat Peminjaman
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</div>
<?php include 'footer.php'; ?>