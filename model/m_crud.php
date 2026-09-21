<?php
require_once "m_koneksi.php";

class Crud
{
    private $conn;

    public function __construct($conn)
    {
        $koneksi = new Koneksi();
        $this->conn = $koneksi->koneksi;
    }

    // Menampilkan semua data
    // getALL / tampilkan semua data dari tabel yang ditentukan. Fungsi ini menerima parameter $table yang merupakan nama tabel yang ingin diambil datanya. Fungsi ini akan mengembalikan hasil query sebagai objek mysqli_result.
    public function getAll($table)
    {
        //select * from $table untuk mengambil semua data dari tabel yang ditentukan. Hasil query disimpan dalam variabel $sql.
        $sql = "SELECT * FROM $table";

        // mysqli_query($this->conn, $sql) untuk menjalankan query SQL yang telah dibuat. Hasil query disimpan dalam variabel $result.
        //datanya berupa objek mysqli_result yang dapat digunakan untuk mengambil data dari hasil query.
        $result = mysqli_query($this->conn, $sql);

        // jika terjadi kesalahan dalam menjalankan query, maka program akan berhenti dan menampilkan pesan error. mysqli_error($this->conn) digunakan untuk mengambil pesan error dari koneksi database.
        if (!$result) {
            die("Query gagal: " . mysqli_error($this->conn));
        }

        return $result;
    }

    // Menampilkan data berdasarkan ID
    // getById / tampilkan data dari tabel yang ditentukan berdasarkan ID. Fungsi ini menerima parameter $table (nama tabel), $idField (nama kolom ID), dan $id (nilai ID yang ingin dicari). Fungsi ini akan mengembalikan hasil query sebagai array asosiatif.
    public function getById($table, $idField, $id)
    {
        // mysqli_real_escape_string($this->conn, $id) untuk mengamankan nilai ID dari potensi serangan SQL injection. Fungsi ini akan menghapus karakter-karakter berbahaya dari nilai ID sebelum digunakan dalam query SQL.
        $id = mysqli_real_escape_string($this->conn, $id);

        // SELECT * FROM $table WHERE $idField = '$id' untuk mengambil data dari tabel yang ditentukan berdasarkan ID. Hasil query disimpan dalam variabel $sql.
        $sql = "SELECT * FROM $table 
                WHERE $idField = '$id'";

        // mysqli_query($this->conn, $sql) untuk menjalankan query SQL yang telah dibuat. Hasil query disimpan dalam variabel $result.
        $result = mysqli_query($this->conn, $sql);

        if (!$result) {
            die("Query gagal: " . mysqli_error($this->conn));
        }

        return mysqli_fetch_assoc($result);
    }

    // Tambah data
    // insert / menambahkan data ke tabel yang ditentukan. Fungsi ini menerima parameter $table (nama tabel) dan $data (array asosiatif yang berisi data yang ingin ditambahkan). Fungsi ini akan mengembalikan true jika berhasil, atau false jika gagal.
    public function insert($table, $data)
    {
        // $fields = [] untuk menyimpan nama-nama kolom yang akan diisi dengan data. $values = [] untuk menyimpan nilai-nilai data yang akan dimasukkan ke dalam kolom-kolom tersebut.
        $fields = [];
        $values = [];

        // foreach ($data as $field => $value) untuk mengiterasi atau pengulangan setiap pasangan kunci-nilai dalam array $data. Kunci ($field) mewakili nama kolom, dan nilai ($value) mewakili data yang akan dimasukkan ke dalam kolom tersebut.
        foreach ($data as $field => $value) {

            // $fields[] = "`$field`" untuk menambahkan nama kolom ke dalam array $fields. Nama kolom dibungkus dengan tanda backtick (`) untuk menghindari konflik dengan kata kunci SQL.  
            $fields[] = "`$field`";

            // mysqli_real_escape_string($this->conn, $value) untuk mengamankan nilai data dari potensi serangan SQL injection. Fungsi ini akan menghapus karakter-karakter berbahaya dari nilai data sebelum digunakan dalam query SQL.
            //parameter $this->conn adalah koneksi database yang digunakan untuk menjalankan fungsi mysqli_real_escape_string. Parameter $value adalah nilai data yang ingin diamankan dari potensi serangan SQL injection.
            $value = mysqli_real_escape_string(
                $this->conn,
                $value
            );

            // $values[] = "'$value'" untuk menambahkan nilai data ke dalam array $values. Nilai data dibungkus dengan tanda kutip tunggal (') untuk memastikan bahwa nilai tersebut dianggap sebagai string dalam query SQL.
            $values[] = "'$value'";
        }

        // implode(", ", $fields) untuk menggabungkan semua nama kolom dalam array $fields menjadi satu string, dengan setiap nama kolom dipisahkan oleh koma dan spasi. Hasilnya disimpan dalam variabel $fieldList.
        $fieldList = implode(", ", $fields);

        // implode(", ", $values) untuk menggabungkan semua nilai data dalam array $values menjadi satu string, dengan setiap nilai data dipisahkan oleh koma dan spasi. Hasilnya disimpan dalam variabel $valueList.
        $valueList = implode(", ", $values);

        //$sql = "INSERT INTO `$table` ($fieldList) VALUES ($valueList)" untuk membuat query SQL yang akan menambahkan data ke tabel yang ditentukan. Query ini menggunakan nama kolom dari $fieldList dan nilai data dari $valueList. 
        $sql = "INSERT INTO `$table`
                ($fieldList)
                VALUES
                ($valueList)";

        return mysqli_query($this->conn, $sql);
    }

    // Update data
    // update / memperbarui data dalam tabel yang ditentukan berdasarkan ID. Fungsi ini menerima parameter $table (nama tabel), $data (array asosiatif yang berisi data yang ingin diperbarui), $idField (nama kolom ID), dan $id (nilai ID dari data yang ingin diperbarui). Fungsi ini akan mengembalikan true jika berhasil, atau false jika gagal.
    public function update($table, $data, $idField, $id)
    {
        // $set = [] untuk menyimpan pasangan nama kolom dan nilai data yang akan diperbarui dalam format SQL. Setiap pasangan akan berbentuk "`nama_kolom` = 'nilai_data'".
        $set = [];

        // foreach ($data as $field => $value) untuk mengiterasi atau pengulang setiap pasangan kunci-nilai dalam array $data. Kunci ($field) mewakili nama kolom, dan nilai ($value) mewakili data yang akan diperbarui.
        foreach ($data as $field => $value) {
            // mysqli_real_escape_string($this->conn, $value) untuk mengamankan nilai data dari potensi serangan SQL injection. Fungsi ini akan menghapus karakter-karakter berbahaya dari nilai data sebelum digunakan dalam query SQL.
            $value = mysqli_real_escape_string(
                $this->conn,
                $value
            );

            // set[] = "`$field` = '$value'" untuk menambahkan pasangan nama kolom dan nilai data ke dalam array $set. Nama kolom dibungkus dengan tanda backtick (`) dan nilai data dibungkus dengan tanda kutip tunggal (') untuk memastikan bahwa keduanya dianggap sebagai string dalam query SQL.
            $set[] = "`$field` = '$value'";
        }
        // implode(", ", $set) untuk menggabungkan semua pasangan nama kolom dan nilai data dalam array $set menjadi satu string, dengan setiap pasangan dipisahkan oleh koma dan spasi. Hasilnya disimpan dalam variabel $setList.
        $setList = implode(", ", $set);

        // mysqli_real_escape_string($this->conn, $id) untuk mengamankan nilai ID dari potensi serangan SQL injection. Fungsi ini akan menghapus karakter-karakter berbahaya dari nilai ID sebelum digunakan dalam query SQL.
        $id = mysqli_real_escape_string(
            $this->conn,
            $id
        );

        // $sql = "UPDATE `$table` SET $setList WHERE `$idField` = '$id'" untuk membuat query SQL yang akan memperbarui data dalam tabel yang ditentukan berdasarkan ID. Query ini menggunakan pasangan nama kolom dan nilai data dari $setList, serta kondisi WHERE untuk menentukan data yang akan diperbarui berdasarkan ID.
        $sql = "UPDATE `$table`
                SET $setList
                WHERE `$idField` = '$id'";

        return mysqli_query($this->conn, $sql);
    }

    // Hapus data
    // delete / menghapus data dari tabel yang ditentukan berdasarkan ID. Fungsi ini menerima parameter $table (nama tabel), $idField (nama kolom ID), dan $id (nilai ID dari data yang ingin dihapus). Fungsi ini akan mengembalikan true jika berhasil, atau false jika gagal.
    public function delete($table, $idField, $id)
    {
        // mysqli_real_escape_string($this->conn, $id) untuk mengamankan nilai ID dari potensi serangan SQL injection. Fungsi ini akan menghapus karakter-karakter berbahaya dari nilai ID sebelum digunakan dalam query SQL.
        $id = mysqli_real_escape_string(
            $this->conn,
            $id
        );
        //$sql = "DELETE FROM `$table` WHERE `$idField` = '$id'" untuk membuat query SQL yang akan menghapus data dari tabel yang ditentukan berdasarkan ID. Query ini menggunakan kondisi WHERE untuk menentukan data yang akan dihapus berdasarkan ID.
        $sql = "DELETE FROM `$table`
                WHERE `$idField` = '$id'";

        return mysqli_query($this->conn, $sql);
    }
}