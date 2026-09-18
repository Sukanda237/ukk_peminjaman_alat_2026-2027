-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Sep 2026 pada 04.32
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peminjaman_alat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE `alat` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT 0,
  `kondisi` varchar(50) NOT NULL,
  `deskripsi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`id`, `kode`, `id_kategori`, `nama_alat`, `jumlah`, `kondisi`, `deskripsi`) VALUES
(1, 'ALT001', 1, 'Laptop ASUS VivoBook', 10, 'Baik', 'Laptop untuk kegiatan pembelajaran'),
(2, 'ALT002', 1, 'Laptop Lenovo ThinkPad', 8, 'Baik', 'Laptop untuk praktik pemrograman'),
(3, 'ALT003', 2, 'PC Laboratorium', 20, 'Baik', 'Komputer laboratorium sekolah'),
(4, 'ALT004', 3, 'Proyektor Epson', 5, 'Baik', 'Proyektor untuk presentasi'),
(5, 'ALT005', 4, 'Kamera Canon EOS', 3, 'Baik', 'Kamera dokumentasi kegiatan'),
(6, 'ALT006', 5, 'Speaker Portable', 6, 'Baik', 'Speaker untuk kegiatan sekolah'),
(7, 'ALT007', 6, 'Router TP-Link', 10, 'Baik', 'Router untuk praktik jaringan'),
(8, 'ALT008', 7, 'Mouse Wireless', 15, 'Baik', 'Mouse tambahan komputer'),
(9, 'ALT009', 8, 'Printer Canon', 4, 'Baik', 'Printer untuk mencetak dokumen'),
(10, 'ALT010', 9, 'Multimeter Digital', 7, 'Baik', 'Alat ukur untuk kegiatan praktik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id`, `id_peminjaman`, `id_alat`, `jumlah`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 1),
(3, 3, 3, 2),
(4, 4, 4, 1),
(5, 5, 5, 1),
(6, 6, 6, 1),
(7, 7, 7, 2),
(8, 8, 8, 2),
(9, 9, 9, 1),
(10, 10, 10, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Laptop'),
(2, 'Komputer'),
(3, 'Proyektor'),
(4, 'Kamera'),
(5, 'Audio'),
(6, 'Jaringan'),
(7, 'Aksesoris'),
(8, 'Printer'),
(9, 'Peralatan Praktik'),
(10, 'Elektronik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `aktivitas` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `log_aktivitas`
--

INSERT INTO `log_aktivitas` (`id`, `id_user`, `aktivitas`, `deskripsi`, `waktu`) VALUES
(1, 1, 'LOGIN', 'Administrator melakukan login', '2026-09-01 07:30:00'),
(2, 2, 'PEMINJAMAN', 'Membuat transaksi PMJ001', '2026-09-01 08:15:00'),
(3, 3, 'PEMINJAMAN', 'Membuat transaksi PMJ002', '2026-09-02 08:20:00'),
(4, 4, 'TAMBAH_ALAT', 'Menambahkan Laptop ASUS VivoBook', '2026-09-03 09:00:00'),
(5, 5, 'UPDATE_ALAT', 'Mengubah data Printer Canon', '2026-09-04 09:15:00'),
(6, 6, 'PENGEMBALIAN', 'Memproses pengembalian PMJ001', '2026-09-05 10:00:00'),
(7, 7, 'PEMINJAMAN', 'Membuat transaksi PMJ007', '2026-09-07 08:10:00'),
(8, 8, 'PEMINJAMAN', 'Membuat transaksi PMJ008', '2026-09-08 08:25:00'),
(9, 9, 'PENGEMBALIAN', 'Memproses pengembalian PMJ005', '2026-09-09 11:00:00'),
(10, 10, 'LOGIN', 'Petugas melakukan login', '2026-09-10 07:45:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE `peminjam` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `identitas` varchar(50) NOT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`id`, `nama`, `identitas`, `no_telp`, `alamat`, `foto`) VALUES
(1, 'Ahmad Fauzan', '3273010101010001', '081234567801', 'Bandung', 'default.jpg'),
(2, 'Dinda Permata', '3273010101010002', '081234567802', 'Cimahi', 'default.jpg'),
(3, 'Rian Saputra', '3273010101010003', '081234567803', 'Bandung', 'default.jpg'),
(4, 'Nabila Putri', '3273010101010004', '081234567804', 'Lembang', 'default.jpg'),
(5, 'Fikri Ramadhan', '3273010101010005', '081234567805', 'Padalarang', 'default.jpg'),
(6, 'Salsa Aulia', '3273010101010006', '081234567806', 'Bandung', 'default.jpg'),
(7, 'Doni Kurniawan', '3273010101010007', '081234567807', 'Cimahi', 'default.jpg'),
(8, 'Putri Maharani', '3273010101010008', '081234567808', 'Bandung', 'default.jpg'),
(9, 'Galih Pratama', '3273010101010009', '081234567809', 'Soreang', 'default.jpg'),
(10, 'Intan Sari', '3273010101010010', '081234567810', 'Bandung', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `kode_peminjaman` varchar(50) NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Dipinjam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `kode_peminjaman`, `id_peminjam`, `id_user`, `tanggal_pinjam`, `tanggal_pengembalian`, `status`) VALUES
(1, 'PMJ001', 1, 1, '2026-09-01', '2026-09-03', 'Dikembalikan'),
(2, 'PMJ002', 2, 2, '2026-09-02', '2026-09-04', 'Dikembalikan'),
(3, 'PMJ003', 3, 3, '2026-09-03', '2026-09-05', 'Dikembalikan'),
(4, 'PMJ004', 4, 4, '2026-09-04', '2026-09-06', 'Dikembalikan'),
(5, 'PMJ005', 5, 5, '2026-09-05', '2026-09-08', 'Dikembalikan'),
(6, 'PMJ006', 6, 6, '2026-09-06', '2026-09-09', 'Dikembalikan'),
(7, 'PMJ007', 7, 7, '2026-09-07', '2026-09-10', 'Dipinjam'),
(8, 'PMJ008', 8, 8, '2026-09-08', '2026-09-11', 'Dipinjam'),
(9, 'PMJ009', 9, 9, '2026-09-09', '2026-09-12', 'Dipinjam'),
(10, 'PMJ010', 10, 10, '2026-09-10', '2026-09-13', 'Dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `kondisi_kembali` varchar(100) DEFAULT NULL,
  `denda` decimal(12,2) DEFAULT 0.00,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `id_peminjaman`, `tanggal_kembali`, `kondisi_kembali`, `denda`, `id_user`) VALUES
(1, 1, '2026-09-03', 'Baik', 0.00, 1),
(2, 2, '2026-09-04', 'Baik', 0.00, 2),
(3, 3, '2026-09-05', 'Baik', 0.00, 3),
(4, 4, '2026-09-06', 'Baik', 0.00, 4),
(5, 5, '2026-09-08', 'Baik', 0.00, 5),
(6, 6, '2026-09-09', 'Rusak ringan', 10000.00, 6),
(7, 7, '2026-09-10', 'Baik', 0.00, 7),
(8, 8, '2026-09-11', 'Baik', 0.00, 8),
(9, 9, '2026-09-12', 'Baik', 0.00, 9),
(10, 10, '2026-09-13', 'Rusak ringan', 15000.00, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Administrator', 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3g0j3Yj7J5Q8Qm2f7ZQ1YwK', 'admin'),
(2, 'Budi Santoso', 'budi', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3g0j3Yj7J5Q8Qm2f7ZQ1YwK', 'petugas'),
(3, 'Siti Aminah', 'siti', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3g0j3Yj7J5Q8Qm2f7ZQ1YwK', 'petugas'),
(4, 'Andi Wijaya', 'andi', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3g0j3Yj7J5Q8Qm2f7ZQ1YwK', 'petugas'),
(5, 'Dewi Lestari', 'dewi', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3g0j3Yj7J5Q8Qm2f7ZQ1YwK', 'petugas'),
(6, 'Rizky Maulana', 'rizky', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3g0j3Yj7J5Q8Qm2f7ZQ1YwK', 'petugas'),
(7, 'Fajar Nugraha', 'fajar', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3g0j3Yj7J5Q8Qm2f7ZQ1YwK', 'petugas'),
(8, 'Nina Kartika', 'nina', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3g0j3Yj7J5Q8Qm2f7ZQ1YwK', 'petugas'),
(9, 'Agus Setiawan', 'agus', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3g0j3Yj7J5Q8Qm2f7ZQ1YwK', 'petugas'),
(10, 'Rina Marlina', 'rina', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3g0j3Yj7J5Q8Qm2f7ZQ1YwK', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `fk_alat_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_peminjaman` (`id_peminjaman`),
  ADD KEY `fk_detail_alat` (`id_alat`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_log_user` (`id_user`);

--
-- Indeks untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_peminjaman` (`kode_peminjaman`),
  ADD KEY `fk_peminjaman_peminjam` (`id_peminjam`),
  ADD KEY `fk_peminjaman_user` (`id_user`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pengembalian_peminjaman` (`id_peminjaman`),
  ADD KEY `fk_pengembalian_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alat`
--
ALTER TABLE `alat`
  ADD CONSTRAINT `fk_alat_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `fk_detail_alat` FOREIGN KEY (`id_alat`) REFERENCES `alat` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_peminjaman` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD CONSTRAINT `fk_log_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_peminjaman_peminjam` FOREIGN KEY (`id_peminjam`) REFERENCES `peminjam` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_peminjaman_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `fk_pengembalian_peminjaman` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pengembalian_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
