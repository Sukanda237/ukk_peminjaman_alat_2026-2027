<?php

require_once "m_koneksi.php";

class User
{
    private $conn;

    public function __construct()
    {
        $koneksi = new Koneksi();
        $this->conn = $koneksi->koneksi;
    }

    // Menampilkan semua data
    public function tampil()
    {
        $query = "SELECT * FROM user ORDER BY id_user DESC";

        return mysqli_query($this->conn, $query);
    }

    // Menampilkan data berdasarkan ID
    public function detail($id)
    {
        $query = "SELECT * FROM user WHERE id_user = '$id'";

        $result = mysqli_query($this->conn, $query);

        return mysqli_fetch_assoc($result);
    }

    // Menambah data
    public function tambah($nama, $username, $password, $role)
    {
        $query = "INSERT INTO user
                  (nama, username, password, role)
                  VALUES
                  ('$nama', '$username', '$password', '$role')";

        return mysqli_query($this->conn, $query);
    }

    // Mengubah data
    public function update($id, $nama, $username, $password, $role)
    {
        if ($password != "") {

            $query = "UPDATE user SET
                      nama = '$nama',
                      username = '$username',
                      password = '$password',
                      role = '$role'
                      WHERE id_user = '$id'";

        } else {

            $query = "UPDATE user SET
                      nama = '$nama',
                      username = '$username',
                      role = '$role'
                      WHERE id_user = '$id'";
        }

        return mysqli_query($this->conn, $query);
    }

    // Menghapus data
    public function hapus($id)
    {
        $query = "DELETE FROM user
                  WHERE id_user = '$id'";

        return mysqli_query($this->conn, $query);
    }
}