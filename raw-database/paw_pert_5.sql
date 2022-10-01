-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Okt 2022 pada 09.06
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paw_pert_5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id_mhs` int(11) NOT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `nama_mhs` varchar(40) DEFAULT NULL,
  `alamat_mhs` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id_mhs`, `id_prodi`, `nama_mhs`, `alamat_mhs`) VALUES
(17, 2, 'Alfi Danialin Nur', 'Sampang'),
(18, 5, 'Asep Muhamed', 'Cikarang'),
(19, 2, 'Dio Mahardiansyah', 'Sidoarjo'),
(20, 5, 'Yanuar Pratama', 'Sampang'),
(21, 2, 'David Maulana', 'Pamekasan'),
(23, 3, 'Dicksy Aditya', 'Surabaya'),
(24, 3, 'Reza Gunawan', 'Banten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `id_prdi` int(11) DEFAULT NULL,
  `nama_prodi` varchar(40) DEFAULT NULL,
  `status_prodi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_prodi`
--

INSERT INTO `tbl_prodi` (`id_prdi`, `nama_prodi`, `status_prodi`) VALUES
(1, 'T. Informatika', 'aktif'),
(2, 'Sistem Informasi', 'aktif'),
(3, 'Teknik Industri', 'non aktif'),
(4, 'Teknik Mesin', 'aktif'),
(5, 'Teknik Elektronika', 'non aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
