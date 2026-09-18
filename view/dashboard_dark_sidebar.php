<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Peminjaman Alat</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --sidebar-color: #42a5f5;
            --sidebar-hover: rgba(255, 255, 255, 0.20);
            --body-bg: #f5f7fb;
            --card-bg: #ffffff;
            --text-color: #212529;
            --border-color: #e5e7eb;
        }

        body {
            background-color: var(--body-bg);
            color: var(--text-color);
            transition: 0.3s;
        }

        /* =========================
           SIDEBAR
        ========================= */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: var(--sidebar-color);
            color: white;
            padding-top: 20px;
            z-index: 1000;
            transition: all 0.3s;
        }

        .sidebar .brand {
            font-size: 21px;
            font-weight: 600;
            padding: 0 20px 25px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar .menu-title {
            font-size: 12px;
            padding: 10px 20px;
            text-transform: uppercase;
            opacity: 0.75;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            margin: 3px 10px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: var(--sidebar-hover);
        }

        .sidebar a i {
            font-size: 18px;
        }

        /* akan dihapus  */
        /* .logout {
            position: absolute;
            bottom: 20px;
            left: 10px;
            right: 10px;
        } */

        /* =========================
           MAIN CONTENT
        ========================= */
        .main-content {
            margin-left: 250px;
            min-height: 100vh;
            transition: 0.3s;
        }

        /* =========================
           TOP NAVBAR
        ========================= */
        .topbar {
            background-color: var(--card-bg);
            border-bottom: 1px solid var(--border-color);
            padding: 15px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .topbar-title {
            font-size: 20px;
            font-weight: 600;
        }

        /* =========================
           CONTENT
        ========================= */
        .content {
            padding: 25px;
        }

        .welcome {
            margin-bottom: 25px;
        }

        .welcome h3 {
            font-weight: 600;
        }

        .welcome p {
            color: #6c757d;
            margin-bottom: 0;
        }

        /* =========================
           STAT CARD
        ========================= */
        .stat-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 20px;
            transition: 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            background-color: rgba(66, 165, 245, 0.15);
            color: #42a5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .stat-title {
            font-size: 14px;
            color: #6c757d;
            margin-top: 15px;
        }

        .stat-number {
            font-size: 28px;
            font-weight: 700;
        }

        /* =========================
           TABLE
        ========================= */
        .content-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 20px;
        }

        .content-card-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* =========================
           DARK MODE
        ========================= */
        body.dark-mode {
            --body-bg: #121212;
            --card-bg: #1e1e1e;
            --text-color: #f1f1f1;
            --border-color: #333333;
        }

        /* Sidebar Dark Mode */
        body.dark-mode {
            --sidebar-color: #1f2937;
            --sidebar-hover: rgba(255, 255, 255, 0.10);
        }

        body.dark-mode .sidebar {
            background-color: var(--sidebar-color);
            color: #f1f1f1;
        }

        body.dark-mode .sidebar a {
            color: #f1f1f1;
        }

        body.dark-mode .sidebar .menu-title {
            color: #d1d5db;
        }

        body.dark-mode .sidebar a:hover,
        body.dark-mode .sidebar a.active {
            background-color: var(--sidebar-hover);
        }

        body.dark-mode .topbar {
            background-color: #1e1e1e;
        }

        body.dark-mode .welcome p,
        body.dark-mode .stat-title {
            color: #aaaaaa;
        }

        body.dark-mode .table {
            --bs-table-bg: #1e1e1e;
            --bs-table-color: #f1f1f1;
        }

        body.dark-mode .table-light {
            --bs-table-bg: #292929;
            --bs-table-color: #fff;
        }

        body.dark-mode .btn-light {
            background-color: #333;
            color: white;
            border-color: #444;
        }

        /* =========================
           MOBILE
        ========================= */
        /* Overlay untuk mobile */
        .sidebar-overlay {
            display: none;
        }

        @media (max-width: 768px) {

            .sidebar {
                margin-left: -250px;
            }

            .sidebar.show {
                margin-left: 0;
            }

            .sidebar-overlay.show {
                display: block;
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.35);
                z-index: 999;
            }

            .main-content {
                margin-left: 0;
            }

            .content {
                padding: 15px;
            }

            .topbar {
                padding: 12px 15px;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
     SIDEBAR
========================= -->
    <div class="sidebar" id="sidebar">

        <div class="brand">
            <i class="bi bi-tools"></i>
            Peminjaman Alat
        </div>

        <div class="menu-title">
            Menu Utama
        </div>

        <a href="#" class="active">
            <i class="bi bi-speedometer2"></i>
            Dashboard
        </a>

        <a href="#">
            <i class="bi bi-box-seam"></i>
            Data Alat
        </a>

        <a href="#">
            <i class="bi bi-tags"></i>
            Kategori
        </a>

        <a href="#">
            <i class="bi bi-person"></i>
            Peminjam
        </a>

        <a href="#">
            <i class="bi bi-arrow-left-right"></i>
            Peminjaman
        </a>

        <a href="#">
            <i class="bi bi-arrow-return-left"></i>
            Pengembalian
        </a>

        <div class="menu-title">
            Sistem
        </div>

        <a href="#">
            <i class="bi bi-clock-history"></i>
            Log Aktivitas
        </a>

        <!-- Logout -->
        <div class="logout">
            <a href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </a>
        </div>

    </div>

    <!-- Overlay mobile: klik di luar sidebar untuk menutup -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>


    <!-- =========================
     MAIN CONTENT
========================= -->
    <div class="main-content">

        <!-- TOPBAR -->
        <div class="topbar">

            <div class="d-flex align-items-center gap-3">

                <button class="btn btn-light d-md-none" id="sidebarToggle" type="button" onclick="toggleSidebar()"
                    aria-label="Buka atau tutup menu">
                    <i class="bi bi-list" id="sidebarToggleIcon"></i>
                </button>

                <div class="topbar-title">
                    Dashboard
                </div>

            </div>

            <div class="d-flex align-items-center gap-3">

                <!-- Dark Mode -->
                <button class="btn btn-light" id="themeButton" onclick="toggleTheme()">

                    <i class="bi bi-moon-fill" id="themeIcon"></i>

                    <span class="d-none d-sm-inline" id="themeText">
                        Mode Gelap
                    </span>

                </button>

                <!-- User -->
                <div class="d-none d-md-flex align-items-center gap-2">

                    <i class="bi bi-person-circle fs-4"></i>

                    <div>
                        <small class="text-muted">Login sebagai</small>
                        <div class="fw-semibold">Administrator</div>
                    </div>

                </div>

            </div>

        </div>


        <!-- CONTENT -->
        <div class="content">

            <!-- Welcome -->
            <div class="welcome">

                <h3>Selamat Datang, Administrator 👋</h3>

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


    <!-- =========================
     JAVASCRIPT
========================= -->

    <script>
        // =========================
        // DARK MODE
        // =========================

        function toggleTheme() {

            document.body.classList.toggle("dark-mode");

            const icon = document.getElementById("themeIcon");
            const text = document.getElementById("themeText");

            if (document.body.classList.contains("dark-mode")) {

                icon.classList.remove("bi-moon-fill");
                icon.classList.add("bi-sun-fill");

                text.textContent = "Mode Terang";

                localStorage.setItem("theme", "dark");

            } else {

                icon.classList.remove("bi-sun-fill");
                icon.classList.add("bi-moon-fill");

                text.textContent = "Mode Gelap";

                localStorage.setItem("theme", "light");

            }

        }


        // =========================
        // SIMPAN TEMA
        // =========================

        window.onload = function () {

            const theme = localStorage.getItem("theme");

            if (theme === "dark") {

                document.body.classList.add("dark-mode");

                document.getElementById("themeIcon")
                    .classList.remove("bi-moon-fill");

                document.getElementById("themeIcon")
                    .classList.add("bi-sun-fill");

                document.getElementById("themeText")
                    .textContent = "Mode Terang";

            }

        };


        // =========================
        // SIDEBAR MOBILE
        // =========================

        function toggleSidebar() {

            const sidebar = document.getElementById("sidebar");
            const overlay = document.getElementById("sidebarOverlay");
            const icon = document.getElementById("sidebarToggleIcon");

            sidebar.classList.toggle("show");
            overlay.classList.toggle("show");

            if (sidebar.classList.contains("show")) {
                icon.classList.remove("bi-list");
                icon.classList.add("bi-x-lg");
            } else {
                icon.classList.remove("bi-x-lg");
                icon.classList.add("bi-list");
            }
        }

        function closeSidebar() {

            const sidebar = document.getElementById("sidebar");
            const overlay = document.getElementById("sidebarOverlay");
            const icon = document.getElementById("sidebarToggleIcon");

            sidebar.classList.remove("show");
            overlay.classList.remove("show");

            icon.classList.remove("bi-x-lg");
            icon.classList.add("bi-list");
        }

        // Tutup sidebar setelah memilih menu pada perangkat mobile.
        document.querySelectorAll(".sidebar a").forEach(function (link) {
            link.addEventListener("click", function () {
                if (window.innerWidth <= 768) {
                    closeSidebar();
                }
            });
        });

        // Jika ukuran layar berubah dari mobile ke desktop,
        // pastikan overlay tidak tertinggal.
        window.addEventListener("resize", function () {
            if (window.innerWidth > 768) {
                closeSidebar();
            }
        });
    </script>

</body>

</html>