<?php
include 'sidebar.php';
include 'navbar.php';
?>
<!-- =========================
             CONTENT
        ========================= -->

<div class="content">


    <!-- PAGE HEADER -->

    <div class="mb-4">

        <h3 class="fw-bold mb-1">

            Tambah User

        </h3>


        <p class="text-muted mb-0">

            Tambahkan pengguna baru ke dalam sistem.

        </p>

    </div>



    <!-- =========================
                 FORM
            ========================= -->

    <div class="form-card">


        <div class="form-card-title">

            Form Data User

        </div>


        <form action="proses_tambah_user.php" method="POST">


            <div class="row g-3">


                <!-- NAMA -->

                <div class="col-md-6">

                    <label for="nama" class="form-label">

                        Nama Lengkap

                    </label>


                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap"
                        required>

                </div>



                <!-- USERNAME -->

                <div class="col-md-6">

                    <label for="username" class="form-label">

                        Username

                    </label>


                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="Masukkan username" required>

                </div>



                <!-- EMAIL -->

                <div class="col-md-6">

                    <label for="email" class="form-label">

                        Email

                    </label>


                    <input type="email" class="form-control" id="email" name="email" placeholder="contoh@email.com"
                        required>

                </div>



                <!-- ROLE -->

                <div class="col-md-6">

                    <label for="role" class="form-label">

                        Role

                    </label>


                    <select class="form-select" id="role" name="role" required>


                        <option value="">

                            -- Pilih Role --

                        </option>


                        <option value="admin">

                            Admin

                        </option>


                        <option value="petugas">

                            Petugas

                        </option>


                        <option value="peminjam">

                            Peminjam

                        </option>


                    </select>

                </div>



                <!-- PASSWORD -->

                <div class="col-md-6">

                    <label for="password" class="form-label">

                        Password

                    </label>


                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan password" required>

                </div>



                <!-- KONFIRMASI PASSWORD -->

                <div class="col-md-6">

                    <label for="password_confirmation" class="form-label">

                        Konfirmasi Password

                    </label>


                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                        placeholder="Ulangi password" required>

                </div>



                <!-- STATUS -->

                <div class="col-md-6">

                    <label for="status" class="form-label">

                        Status

                    </label>


                    <select class="form-select" id="status" name="status" required>


                        <option value="aktif">

                            Aktif

                        </option>


                        <option value="nonaktif">

                            Nonaktif

                        </option>


                    </select>

                </div>


            </div>



            <!-- PEMBATAS -->

            <hr class="my-4">



            <!-- BUTTON -->

            <div class="d-flex justify-content-end gap-2">


                <a href="user.php" class="btn btn-secondary">

                    <i class="bi bi-arrow-left me-1"></i>

                    Batal

                </a>


                <button type="submit" class="btn btn-primary">

                    <i class="bi bi-save me-1"></i>

                    Simpan User

                </button>


            </div>


        </form>

    </div>

</div>

</div>

<?php include 'footer.php'; ?>