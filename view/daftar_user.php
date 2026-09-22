<?php
include 'template/sidebar.php';
include 'template/navbar.php';
?>

<div class="container-fluid py-4">

    <!-- ================= HEADER ================= -->
    <div class="row align-items-center mb-4">

        <div class="col-12 col-md-7 mb-3 mb-md-0">

            <div class="d-flex align-items-center gap-3">

                <div class="page-icon">
                    <i class="bi bi-people-fill"></i>
                </div>

                <div>
                    <h3 class="fw-bold mb-1">
                        Daftar User
                    </h3>

                    <p class="text-body-secondary mb-0">
                        Kelola pengguna dan hak akses sistem
                    </p>
                </div>

            </div>

        </div>


        <div class="col-12 col-md-5 text-md-end">

            <a href="tambah_user.php" class="btn btn-primary px-3">

                <i class="bi bi-person-plus-fill me-1"></i>
                Tambah User

            </a>

        </div>

    </div>


    <!-- ================= STATISTIK ================= -->
    <div class="row g-3 mb-4">

        <!-- Total User -->
        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card stat-card h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <p class="text-body-secondary mb-1">
                                Total User
                            </p>

                            <h4 class="fw-bold mb-0">
                                25
                            </h4>

                        </div>

                        <div class="stat-icon bg-primary-subtle text-primary">
                            <i class="bi bi-people-fill"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Admin -->
        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card stat-card h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <p class="text-body-secondary mb-1">
                                Admin
                            </p>

                            <h4 class="fw-bold mb-0">
                                3
                            </h4>

                        </div>

                        <div class="stat-icon bg-danger-subtle text-danger">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Guru -->
        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card stat-card h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <p class="text-body-secondary mb-1">
                                Guru
                            </p>

                            <h4 class="fw-bold mb-0">
                                10
                            </h4>

                        </div>

                        <div class="stat-icon bg-info-subtle text-info">
                            <i class="bi bi-person-workspace"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Siswa -->
        <div class="col-12 col-sm-6 col-xl-3">

            <div class="card stat-card h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <p class="text-body-secondary mb-1">
                                Siswa
                            </p>

                            <h4 class="fw-bold mb-0">
                                12
                            </h4>

                        </div>

                        <div class="stat-icon bg-success-subtle text-success">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- ================= DATA USER ================= -->
    <div class="card user-card">

        <!-- Card Header -->
        <div class="card-header border-0 py-3">

            <div class="row align-items-center g-3">

                <div class="col-12 col-lg-5">

                    <div class="d-flex align-items-center gap-2">

                        <i class="bi bi-list-ul fs-5"></i>

                        <h5 class="fw-semibold mb-0">
                            Data Pengguna
                        </h5>

                    </div>

                </div>


                <div class="col-12 col-lg-7">

                    <div class="d-flex flex-column flex-sm-row gap-2">

                        <!-- Search -->
                        <div class="input-group">

                            <span class="input-group-text search-icon">
                                <i class="bi bi-search"></i>
                            </span>

                            <input type="text" id="searchUser" class="form-control"
                                placeholder="Cari nama, username atau role..." autocomplete="off">

                        </div>


                        <!-- Filter -->
                        <select id="filterRole" class="form-select" style="max-width: 160px;">

                            <option value="">Semua Role</option>
                            <option value="admin">Admin</option>
                            <option value="guru">Guru</option>
                            <option value="siswa">Siswa</option>

                        </select>

                    </div>

                </div>

            </div>

        </div>


        <!-- ================= TABLE ================= -->
        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0" id="tabelUser">

                    <thead>

                        <tr>

                            <th class="text-center" width="60">
                                #
                            </th>

                            <th>
                                Pengguna
                            </th>

                            <th>
                                Username
                            </th>

                            <th>
                                Role
                            </th>

                            <th class="text-center">
                                Status
                            </th>

                            <th class="text-center" width="120">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        <!-- USER 1 -->
                        <tr>

                            <td class="text-center text-body-secondary">
                                1
                            </td>

                            <td>

                                <div class="d-flex align-items-center gap-3">

                                    <div class="user-avatar avatar-primary">
                                        U
                                    </div>

                                    <div>

                                        <div class="fw-semibold">
                                            Ujang
                                        </div>

                                        <small class="text-body-secondary">
                                            Pengguna Sistem
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="text-body">
                                    ujang
                                </span>
                            </td>


                            <td>

                                <span class="badge role-admin">
                                    <i class="bi bi-shield-check me-1"></i>
                                    Admin
                                </span>

                            </td>


                            <td class="text-center">

                                <span class="status-active">
                                    <span class="status-dot"></span>
                                    Aktif
                                </span>

                            </td>


                            <td class="text-center">

                                <div class="d-flex justify-content-center gap-1">

                                    <a href="edit_user.php?id=1" class="btn btn-sm btn-outline-warning action-btn"
                                        title="Edit">

                                        <i class="bi bi-pencil"></i>

                                    </a>


                                    <a href="hapus_user.php?id=1" class="btn btn-sm btn-outline-danger action-btn"
                                        title="Hapus">

                                        <i class="bi bi-trash"></i>

                                    </a>

                                </div>

                            </td>

                        </tr>


                        <!-- USER 2 -->
                        <tr>

                            <td class="text-center text-body-secondary">
                                2
                            </td>

                            <td>

                                <div class="d-flex align-items-center gap-3">

                                    <div class="user-avatar avatar-info">
                                        B
                                    </div>

                                    <div>

                                        <div class="fw-semibold">
                                            Budi
                                        </div>

                                        <small class="text-body-secondary">
                                            Pengguna Sistem
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="text-body">
                                    budi
                                </span>
                            </td>


                            <td>

                                <span class="badge role-guru">
                                    <i class="bi bi-person-workspace me-1"></i>
                                    Guru
                                </span>

                            </td>


                            <td class="text-center">

                                <span class="status-active">
                                    <span class="status-dot"></span>
                                    Aktif
                                </span>

                            </td>


                            <td class="text-center">

                                <div class="d-flex justify-content-center gap-1">

                                    <a href="edit_user.php?id=2" class="btn btn-sm btn-outline-warning action-btn">

                                        <i class="bi bi-pencil"></i>

                                    </a>


                                    <a href="hapus_user.php?id=2" class="btn btn-sm btn-outline-danger action-btn">

                                        <i class="bi bi-trash"></i>

                                    </a>

                                </div>

                            </td>

                        </tr>


                        <!-- USER 3 -->
                        <tr>

                            <td class="text-center text-body-secondary">
                                3
                            </td>

                            <td>

                                <div class="d-flex align-items-center gap-3">

                                    <div class="user-avatar avatar-success">
                                        A
                                    </div>

                                    <div>

                                        <div class="fw-semibold">
                                            Andi
                                        </div>

                                        <small class="text-body-secondary">
                                            Pengguna Sistem
                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="text-body">
                                    andi
                                </span>
                            </td>


                            <td>

                                <span class="badge role-siswa">
                                    <i class="bi bi-mortarboard me-1"></i>
                                    Siswa
                                </span>

                            </td>


                            <td class="text-center">

                                <span class="status-active">
                                    <span class="status-dot"></span>
                                    Aktif
                                </span>

                            </td>


                            <td class="text-center">

                                <div class="d-flex justify-content-center gap-1">

                                    <a href="edit_user.php?id=3" class="btn btn-sm btn-outline-warning action-btn">

                                        <i class="bi bi-pencil"></i>

                                    </a>


                                    <a href="hapus_user.php?id=3" class="btn btn-sm btn-outline-danger action-btn">

                                        <i class="bi bi-trash"></i>

                                    </a>

                                </div>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>


        <!-- ================= FOOTER TABLE ================= -->
        <div class="card-footer border-0 py-3">

            <div class="d-flex flex-column flex-md-row
                        justify-content-between
                        align-items-center
                        gap-3">

                <small class="text-body-secondary">
                    Menampilkan <strong class="text-body">3</strong> dari
                    <strong class="text-body">25</strong> user
                </small>


                <nav>

                    <ul class="pagination pagination-sm mb-0">

                        <li class="page-item disabled">
                            <a class="page-link" href="#">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">
                                1
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                2
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                3
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

</div>


<!-- ================= CSS ================= -->
<style>
    /* ===============================
       PAGE HEADER
    =============================== */

    .page-icon {

        width: 48px;
        height: 48px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 12px;

        background: var(--bs-primary-bg-subtle);
        color: var(--bs-primary);

        font-size: 21px;

    }


    /* ===============================
       STAT CARD
    =============================== */

    .stat-card {

        border: 1px solid var(--bs-border-color);
        background-color: var(--bs-body-bg);

        transition: 0.2s ease;

    }

    .stat-card:hover {

        transform: translateY(-3px);

    }


    .stat-icon {

        width: 45px;
        height: 45px;

        border-radius: 12px;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 20px;

    }


    /* ===============================
       USER CARD
    =============================== */

    .user-card {

        border: 1px solid var(--bs-border-color);

        background-color: var(--bs-body-bg);

        overflow: hidden;

    }


    .user-card .card-header {

        background-color: var(--bs-body-bg);

        border-bottom: 1px solid var(--bs-border-color);

    }


    .user-card .card-footer {

        background-color: var(--bs-body-bg);

        border-top: 1px solid var(--bs-border-color);

    }


    /* ===============================
       TABLE
    =============================== */

    #tabelUser {

        color: var(--bs-body-color);

        margin-bottom: 0;

    }


    #tabelUser thead {

        background-color: var(--bs-tertiary-bg);

    }


    #tabelUser thead th {

        color: var(--bs-body-color);

        background-color: var(--bs-tertiary-bg);

        border-bottom: 1px solid var(--bs-border-color);

        font-size: 13px;

        font-weight: 600;

        padding: 14px 16px;

        white-space: nowrap;

    }


    #tabelUser tbody td {

        padding: 15px 16px;

        border-color: var(--bs-border-color);

    }


    #tabelUser tbody tr {

        background-color: var(--bs-body-bg);

    }


    #tabelUser tbody tr:hover {

        background-color: var(--bs-tertiary-bg);

    }


    /* ===============================
       USER AVATAR
    =============================== */

    .user-avatar {

        width: 42px;
        height: 42px;

        min-width: 42px;

        border-radius: 50%;

        display: flex;
        align-items: center;
        justify-content: center;

        font-weight: 600;

    }


    .avatar-primary {

        background: var(--bs-primary-bg-subtle);
        color: var(--bs-primary);

    }


    .avatar-info {

        background: var(--bs-info-bg-subtle);
        color: var(--bs-info-text-emphasis);

    }


    .avatar-success {

        background: var(--bs-success-bg-subtle);
        color: var(--bs-success-text-emphasis);

    }


    /* ===============================
       ROLE
    =============================== */

    .role-admin {

        background: var(--bs-danger-bg-subtle);
        color: var(--bs-danger-text-emphasis);

        padding: 6px 10px;

    }


    .role-guru {

        background: var(--bs-info-bg-subtle);
        color: var(--bs-info-text-emphasis);

        padding: 6px 10px;

    }


    .role-siswa {

        background: var(--bs-success-bg-subtle);
        color: var(--bs-success-text-emphasis);

        padding: 6px 10px;

    }


    /* ===============================
       STATUS
    =============================== */

    .status-active {

        display: inline-flex;

        align-items: center;

        gap: 6px;

        font-size: 13px;

        color: var(--bs-success-text-emphasis);

    }


    .status-dot {

        width: 7px;
        height: 7px;

        border-radius: 50%;

        background-color: var(--bs-success);

    }


    /* ===============================
       SEARCH
    =============================== */

    .search-icon {

        background-color: var(--bs-body-bg);

        border-color: var(--bs-border-color);

        color: var(--bs-secondary-color);

    }


    /* ===============================
       ACTION BUTTON
    =============================== */

    .action-btn {

        width: 34px;
        height: 34px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        border-radius: 8px;

    }


    /* ===============================
       RESPONSIVE
    =============================== */

    @media (max-width: 576px) {

        .page-icon {

            width: 42px;
            height: 42px;

            font-size: 18px;

        }

        #tabelUser {

            min-width: 750px;

        }

    }
</style>


<!-- ================= SEARCH + FILTER ================= -->
<script>

    const searchUser = document.getElementById("searchUser");
    const filterRole = document.getElementById("filterRole");

    function filterUser() {

        let keyword = searchUser.value.toLowerCase();
        let role = filterRole.value.toLowerCase();

        let rows = document.querySelectorAll("#tabelUser tbody tr");

        rows.forEach(function (row) {

            let text = row.textContent.toLowerCase();

            let cocokSearch = text.includes(keyword);
            let cocokRole = role === "" || text.includes(role);

            if (cocokSearch && cocokRole) {

                row.style.display = "";

            } else {

                row.style.display = "none";

            }

        });

    }


    searchUser.addEventListener("input", filterUser);

    filterRole.addEventListener("change", filterUser);

</script>


<?php
include 'template/footer.php';
?>