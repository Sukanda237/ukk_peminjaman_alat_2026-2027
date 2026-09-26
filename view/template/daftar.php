<?php
include 'sidebar.php';
include 'navbar.php';

?>
<!-- =========================
             CONTENT
        ========================= -->

<div class="content">

    <!-- Header -->


    <div class="d-flex flex-column flex-md-row
                        justify-content-between
                        align-items-md-center
                        gap-3 mb-4">

        <div>

            <h3 class="fw-bold mb-1">
                Daftar User
            </h3>

            <p class="text-muted mb-0">
                Kelola data pengguna sistem peminjaman alat.
            </p>

        </div>


        <!-- Tombol Tambah -->

        <a href="form_tambah_user.php" class="btn btn-primary">

            <i class="bi bi-plus-circle me-1"></i>

            Tambah User

        </a>

    </div>


    <!-- =========================
                 TABLE USER
            ========================= -->

    <div class="content-card">

        <!-- Header Table -->

        <div class="d-flex flex-column flex-md-row
                            justify-content-between
                            align-items-md-center
                            gap-3 mb-4">

            <div class="content-card-title">
                Data User
            </div>


            <!-- Search -->

            <div class="search-box">

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>

                    <input type="text" id="searchUser" class="form-control" placeholder="Cari user..."
                        onkeyup="searchUser()">

                </div>

            </div>

        </div>


        <!-- Table Responsive -->

        <div class="table-responsive">

            <table class="table table-hover align-middle" id="userTable">

                <thead class="table-light">

                    <tr>

                        <th width="60">
                            No
                        </th>

                        <th>
                            Nama
                        </th>

                        <th>
                            Username
                        </th>

                        <th>
                            Email
                        </th>

                        <th>
                            Role
                        </th>

                        <th>
                            Status
                        </th>

                        <th width="150">
                            Aksi
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <!-- USER 1 -->

                    <tr>

                        <td>
                            1
                        </td>

                        <td>

                            <div class="d-flex align-items-center gap-2">

                                <i class="bi bi-person-circle fs-4"></i>

                                <span>
                                    Administrator
                                </span>

                            </div>

                        </td>

                        <td>
                            admin
                        </td>

                        <td>
                            admin@gmail.com
                        </td>

                        <td>

                            <span class="badge text-bg-danger">
                                Admin
                            </span>

                        </td>

                        <td>

                            <span class="badge text-bg-success">
                                Aktif
                            </span>

                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <a href="edit_user.php?id=1" class="btn btn-sm btn-warning" title="Edit">

                                    <i class="bi bi-pencil"></i>

                                </a>


                                <a href="hapus_user.php?id=1" class="btn btn-sm btn-danger" title="Hapus">

                                    <i class="bi bi-trash"></i>

                                </a>

                            </div>

                        </td>

                    </tr>


                    <!-- USER 2 -->

                    <tr>

                        <td>
                            2
                        </td>

                        <td>

                            <div class="d-flex align-items-center gap-2">

                                <i class="bi bi-person-circle fs-4"></i>

                                <span>
                                    Budi Santoso
                                </span>

                            </div>

                        </td>

                        <td>
                            budi
                        </td>

                        <td>
                            budi@gmail.com
                        </td>

                        <td>

                            <span class="badge text-bg-primary">
                                Petugas
                            </span>

                        </td>

                        <td>

                            <span class="badge text-bg-success">
                                Aktif
                            </span>

                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <a href="edit_user.php?id=2" class="btn btn-sm btn-warning" title="Edit">

                                    <i class="bi bi-pencil"></i>

                                </a>


                                <a href="hapus_user.php?id=2" class="btn btn-sm btn-danger" title="Hapus">

                                    <i class="bi bi-trash"></i>

                                </a>

                            </div>

                        </td>

                    </tr>


                    <!-- USER 3 -->

                    <tr>

                        <td>
                            3
                        </td>

                        <td>

                            <div class="d-flex align-items-center gap-2">

                                <i class="bi bi-person-circle fs-4"></i>

                                <span>
                                    Siti Aminah
                                </span>

                            </div>

                        </td>

                        <td>
                            siti
                        </td>

                        <td>
                            siti@gmail.com
                        </td>

                        <td>

                            <span class="badge text-bg-primary">
                                Petugas
                            </span>

                        </td>

                        <td>

                            <span class="badge text-bg-secondary">
                                Nonaktif
                            </span>

                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <a href="edit_user.php?id=3" class="btn btn-sm btn-warning" title="Edit">

                                    <i class="bi bi-pencil"></i>

                                </a>


                                <a href="hapus_user.php?id=3" class="btn btn-sm btn-danger" title="Hapus">

                                    <i class="bi bi-trash"></i>

                                </a>

                            </div>

                        </td>

                    </tr>


                    <!-- USER 4 -->

                    <tr>

                        <td>
                            4
                        </td>

                        <td>

                            <div class="d-flex align-items-center gap-2">

                                <i class="bi bi-person-circle fs-4"></i>

                                <span>
                                    Andi Wijaya
                                </span>

                            </div>

                        </td>

                        <td>
                            andi
                        </td>

                        <td>
                            andi@gmail.com
                        </td>

                        <td>

                            <span class="badge text-bg-success">
                                Peminjam
                            </span>

                        </td>

                        <td>

                            <span class="badge text-bg-success">
                                Aktif
                            </span>

                        </td>

                        <td>

                            <div class="d-flex gap-1">

                                <a href="edit_user.php?id=4" class="btn btn-sm btn-warning" title="Edit">

                                    <i class="bi bi-pencil"></i>

                                </a>


                                <a href="hapus_user.php?id=4" class="btn btn-sm btn-danger" title="Hapus">

                                    <i class="bi bi-trash"></i>

                                </a>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

</div>

<?php include 'footer.php'; ?>