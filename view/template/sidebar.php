<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User - Peminjaman Alat</title> <!-- Bootstrap 5 -->
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

        /* ========================= SIDEBAR ========================= */
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

        /* ========================= MAIN CONTENT ========================= */
        .main-content {
            margin-left: 250px;
            min-height: 100vh;
            transition: 0.3s;
        }

        /* ========================= TOPBAR ========================= */
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

        /* ========================= CONTENT ========================= */
        .content {
            padding: 25px;
        }

        /* ========================= CONTENT CARD ========================= */
        .content-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 20px;
        }

        .content-card-title {
            font-size: 18px;
            font-weight: 600;
        }

        /* ========================= SEARCH ========================= */
        .search-box {
            max-width: 300px;
        }

        /* ========================= TABLE ========================= */
        .table {
            margin-bottom: 0;
        }

        .table th {
            white-space: nowrap;
        }

        .table td {
            vertical-align: middle;
        }

        /* ========================= DARK MODE ========================= */
        body.dark-mode {
            --body-bg: #121212;
            --card-bg: #1e1e1e;
            --text-color: #f1f1f1;
            --border-color: #333333;
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

        body.dark-mode .table {
            --bs-table-bg: #1e1e1e;
            --bs-table-color: #f1f1f1;
            --bs-table-border-color: #333333;
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

        body.dark-mode .form-control,
        body.dark-mode .form-select {
            background-color: #252525;
            color: #fff;
            border-color: #444;
        }

        body.dark-mode .form-control::placeholder {
            color: #aaa;
        }

        body.dark-mode .text-muted {
            color: #aaa !important;
        }

        /* ========================= MOBILE ========================= */
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

            .search-box {
                max-width: 100%;
            }
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

        /* =========================
           FORM CARD
        ========================= */

        .form-card {

            background-color: var(--card-bg);

            border: 1px solid var(--border-color);

            border-radius: 12px;

            padding: 25px;

        }


        .form-card-title {

            font-size: 18px;

            font-weight: 600;

            margin-bottom: 20px;

        }


        .form-label {

            font-weight: 500;

        }
    </style>
</head>


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


    <a href="dashboard_admin.php">

        <i class="bi bi-speedometer2"></i>

        Dashboard

    </a>


    <a href="alat.php">

        <i class="bi bi-box-seam"></i>

        Data Alat

    </a>


    <a href="kategori.php">

        <i class="bi bi-tags"></i>

        Kategori

    </a>


    <a href="peminjam.php">

        <i class="bi bi-person"></i>

        Peminjam

    </a>


    <a href="peminjaman.php">

        <i class="bi bi-arrow-left-right"></i>

        Peminjaman

    </a>


    <a href="pengembalian.php">

        <i class="bi bi-arrow-return-left"></i>

        Pengembalian

    </a>


    <div class="menu-title">

        Sistem

    </div>


    <!-- USER AKTIF -->

    <a href="daftar_user.php" class="active">

        <i class="bi bi-people"></i>

        Daftar User

    </a>


    <a href="log_aktivitas.php">

        <i class="bi bi-clock-history"></i>

        Log Aktivitas

    </a>


    <!-- LOGOUT -->

    <div class="logout">

        <a href="logout.php">

            <i class="bi bi-box-arrow-right"></i>

            Logout

        </a>

    </div>


</div>