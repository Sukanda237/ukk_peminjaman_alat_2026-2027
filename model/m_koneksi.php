<!-- fungsinya untuk menghubungkan data ke datasabe -->
<?php

//membuat class koneksi untuk menghubungkan ke database
class Koneksi
{
    // membuat properti untuk menyimpan informasi koneksi ke database dan bersifat private agar tidak dapat diakses dari luar class. Properti ini berisi host, username, password, dan nama database.
    //private adalah modifier yang digunakan untuk membatasi akses ke properti atau metode dalam sebuah class. Properti atau metode yang dideklarasikan sebagai private hanya dapat diakses dari dalam class itu sendiri, dan tidak dapat diakses dari luar class atau dari class turunan (subclass).
    private $host = "localhost",
    $username = "root",
    $pass = "",
    $db = "db_peminjaman_alat";

    // membuat properti publik untuk menyimpan koneksi ke database. Properti ini bersifat publik agar dapat diakses dari luar class.
    //public adalah modifier yang digunakan untuk menentukan tingkat aksesibilitas dari properti atau metode dalam sebuah class. Properti atau metode yang dideklarasikan sebagai public dapat diakses dari mana saja, baik dari dalam class itu sendiri, dari luar class, maupun dari class turunan (subclass).
    public $koneksi;

    // __construct() adalah metode khusus dalam PHP yang digunakan sebagai konstruktor untuk sebuah class. Metode ini secara otomatis dipanggil saat sebuah objek dari class tersebut dibuat. Dalam konteks ini, metode __construct() digunakan untuk menginisialisasi koneksi ke database saat objek Koneksi dibuat.
    function __construct()
    {
        //$this-> adalah cara untuk mengakses properti atau metode dari objek saat ini dalam konteks class. Dalam hal ini, $this->koneksi mengacu pada properti koneksi dari objek Koneksi yang sedang dibuat.
        // $this-> mengacu pada instance saat ini dari class Koneksi. Ini digunakan untuk mengakses properti dan metode dari objek yang sedang dibuat. Dalam konteks ini, $this->koneksi mengacu pada properti koneksi dari objek Koneksi yang sedang dibuat.
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->username,
            $this->pass,
            $this->db
        );


        if (!$this->koneksi) {
            die("Koneksi ke database gagal" . mysqli_connect_error());
        }
    }
}

// membuat objek dari class Koneksi untuk menghubungkan ke database. Objek ini akan digunakan untuk mengakses koneksi ke database di seluruh aplikasi.
// $koneksi = new Koneksi();

// membuat variabel $conn untuk menyimpan koneksi ke database. Variabel ini akan digunakan untuk mengakses koneksi ke database di seluruh aplikasi.
// $conn = $koneksi->koneksi;