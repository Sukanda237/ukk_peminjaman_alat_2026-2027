<?php
include 'template/sidebar.php';
include 'template/navbar.php';
?>

<div class="container-fluid py-4">

    <!-- ================= HEADER ================= -->
    <div class="d-flex flex-column flex-md-row
                justify-content-between
                align-items-md-center
                gap-3 mb-4">

        <div class="d-flex align-items-center gap-3">

            <div class="page-icon">
                <i class="bi bi-person-plus-fill"></i>
            </div>

            <div>
                <h3 class="fw-bold mb-1">
                    Tambah User
                </h3>

                <p class="text-body-secondary mb-0">
                    Tambahkan pengguna baru ke dalam sistem
                </p>
            </div>

        </div>


        <a href="index.php" class="btn btn-outline-secondary">

            <i class="bi bi-arrow-left me-1"></i>
            Kembali

        </a>

    </div>


    <!-- ================= FORM ================= -->
    <div class="row justify-content-center">

        <div class="col-12 col-lg-8 col-xl-7">

            <div class="card user-form-card">

                <!-- CARD HEADER -->
                <div class="card-header">

                    <div class="d-flex align-items-center gap-2">

                        <i class="bi bi-person-vcard fs-5"></i>

                        <h5 class="mb-0 fw-semibold">
                            Informasi User
                        </h5>

                    </div>

                </div>


                <!-- CARD BODY -->
                <div class="card-body p-4">

                    <form action="aksi_tambah_user.php" method="POST">


                        <!-- NAMA -->
                        <div class="mb-3">

                            <label for="nama" class="form-label fw-semibold">

                                Nama Lengkap

                            </label>

                            <div class="input-group">

                                <span class="input-group-text form-icon">
                                    <i class="bi bi-person"></i>
                                </span>

                                <input type="text" name="nama" id="nama" class="form-control form-control-custom"
                                    placeholder="Masukkan nama lengkap" required>

                            </div>

                        </div>


                        <!-- USERNAME -->
                        <div class="mb-3">

                            <label for="username" class="form-label fw-semibold">

                                Username

                            </label>

                            <div class="input-group">

                                <span class="input-group-text form-icon">
                                    <i class="bi bi-at"></i>
                                </span>

                                <input type="text" name="username" id="username"
                                    class="form-control form-control-custom" placeholder="Masukkan username" required>

                            </div>

                            <div class="form-text">
                                Username digunakan untuk login ke sistem.
                            </div>

                        </div>


                        <!-- PASSWORD -->
                        <div class="mb-3">

                            <label for="password" class="form-label fw-semibold">

                                Password

                            </label>

                            <div class="input-group">

                                <span class="input-group-text form-icon">
                                    <i class="bi bi-lock"></i>
                                </span>

                                <input type="password" name="password" id="password"
                                    class="form-control form-control-custom" placeholder="Masukkan password" required>

                                <button type="button" class="btn password-toggle" id="togglePassword">

                                    <i class="bi bi-eye" id="eyeIcon"></i>

                                </button>

                            </div>

                        </div>


                        <!-- ROLE -->
                        <div class="mb-3">

                            <label for="role" class="form-label fw-semibold">

                                Role User

                            </label>

                            <div class="input-group">

                                <span class="input-group-text form-icon">
                                    <i class="bi bi-shield-check"></i>
                                </span>

                                <select name="role" id="role" class="form-select form-control-custom" required>

                                    <option value="">
                                        Pilih Role
                                    </option>

                                    <option value="admin">
                                        Admin
                                    </option>

                                    <option value="guru">
                                        Guru
                                    </option>

                                    <option value="siswa">
                                        Siswa
                                    </option>

                                </select>

                            </div>

                        </div>


                        <!-- STATUS -->
                        <div class="mb-4">

                            <label for="status" class="form-label fw-semibold">

                                Status

                            </label>

                            <div class="input-group">

                                <span class="input-group-text form-icon">
                                    <i class="bi bi-toggle-on"></i>
                                </span>

                                <select name="status" id="status" class="form-select form-control-custom" required>

                                    <option value="aktif">
                                        Aktif
                                    </option>

                                    <option value="nonaktif">
                                        Nonaktif
                                    </option>

                                </select>

                            </div>

                        </div>


                        <!-- BUTTON -->
                        <div class="d-flex
                                    flex-column
                                    flex-sm-row
                                    justify-content-end
                                    gap-2">

                            <a href="index.php" class="btn btn-outline-secondary">

                                <i class="bi bi-x-lg me-1"></i>
                                Batal

                            </a>


                            <button type="submit" name="tambah_user" class="btn btn-primary">

                                <i class="bi bi-save me-1"></i>
                                Simpan User

                            </button>

                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- ================= CSS ================= -->

<style>
    /* ========================================
   PAGE ICON
======================================== */

    .page-icon {

        width: 50px;
        height: 50px;

        border-radius: 13px;

        display: flex;

        align-items: center;

        justify-content: center;

        background-color: var(--bs-primary-bg-subtle);

        color: var(--bs-primary);

        font-size: 22px;

    }


    /* ========================================
   FORM CARD
======================================== */

    .user-form-card {

        background-color: var(--bs-body-bg);

        border: 1px solid var(--bs-border-color);

        border-radius: 12px;

        overflow: hidden;

    }


    /* ========================================
   CARD HEADER
======================================== */

    .user-form-card .card-header {

        background-color: var(--bs-body-bg);

        color: var(--bs-body-color);

        border-bottom: 1px solid var(--bs-border-color);

        padding: 18px 22px;

    }


    /* ========================================
   CARD BODY
======================================== */

    .user-form-card .card-body {

        background-color: var(--bs-body-bg);

        color: var(--bs-body-color);

    }


    /* ========================================
   FORM ICON
======================================== */

    .form-icon {

        background-color: var(--bs-tertiary-bg);

        color: var(--bs-secondary-color);

        border-color: var(--bs-border-color);

    }


    /* ========================================
   INPUT
======================================== */

    .form-control-custom {

        background-color: var(--bs-body-bg) !important;

        color: var(--bs-body-color) !important;

        border-color: var(--bs-border-color);

    }


    .form-control-custom:focus {

        background-color: var(--bs-body-bg);

        color: var(--bs-body-color);

        border-color: var(--bs-primary);

        box-shadow: 0 0 0 .2rem rgba(var(--bs-primary-rgb), .15);

    }


    .form-control-custom::placeholder {

        color: var(--bs-secondary-color);

    }


    /* ========================================
   PASSWORD BUTTON
======================================== */

    .password-toggle {

        background-color: var(--bs-body-bg);

        color: var(--bs-secondary-color);

        border: 1px solid var(--bs-border-color);

        border-left: 0;

    }


    .password-toggle:hover {

        background-color: var(--bs-tertiary-bg);

        color: var(--bs-body-color);

    }


    /* ========================================
   FORM TEXT
======================================== */

    .form-text {

        color: var(--bs-secondary-color);

    }


    /* ========================================
   DARK MODE
======================================== */

    [data-bs-theme="dark"] .user-form-card {

        background-color: #1b1b1b;

        border-color: #343434;

    }


    [data-bs-theme="dark"] .user-form-card .card-header {

        background-color: #1b1b1b;

        color: #f1f1f1;

        border-color: #343434;

    }


    [data-bs-theme="dark"] .user-form-card .card-body {

        background-color: #1b1b1b;

        color: #f1f1f1;

    }


    [data-bs-theme="dark"] .form-control-custom {

        background-color: #1b1b1b !important;

        color: #f1f1f1 !important;

        border-color: #3a3a3a;

    }


    [data-bs-theme="dark"] .form-control-custom:focus {

        background-color: #1b1b1b !important;

        color: #ffffff !important;

        border-color: var(--bs-primary);

    }


    [data-bs-theme="dark"] .form-icon {

        background-color: #252525;

        color: #bbbbbb;

        border-color: #3a3a3a;

    }


    [data-bs-theme="dark"] .password-toggle {

        background-color: #1b1b1b;

        color: #bbbbbb;

        border-color: #3a3a3a;

    }


    /* SELECT DARK MODE */

    [data-bs-theme="dark"] select.form-control-custom {

        background-color: #1b1b1b !important;

        color: #ffffff !important;

    }


    [data-bs-theme="dark"] select.form-control-custom option {

        background-color: #1b1b1b;

        color: #ffffff;

    }


    /* ========================================
   RESPONSIVE
======================================== */

    @media (max-width: 576px) {

        .user-form-card .card-body {

            padding: 20px !important;

        }

        .page-icon {

            width: 44px;
            height: 44px;

            font-size: 19px;

        }

    }
</style>


<!-- ================= JAVASCRIPT ================= -->

<script>

    const togglePassword =
        document.getElementById("togglePassword");

    const password =
        document.getElementById("password");

    const eyeIcon =
        document.getElementById("eyeIcon");


    togglePassword.addEventListener("click", function () {

        if (password.type === "password") {

            password.type = "text";

            eyeIcon.classList.remove("bi-eye");

            eyeIcon.classList.add("bi-eye-slash");

        } else {

            password.type = "password";

            eyeIcon.classList.remove("bi-eye-slash");

            eyeIcon.classList.add("bi-eye");

        }

    });

</script>


<?php
include 'template/footer.php';
?>