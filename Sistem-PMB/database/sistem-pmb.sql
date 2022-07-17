-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2022 pada 15.46
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem-pmb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mhs`
--

CREATE TABLE `data_mhs` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `status` int(1) NOT NULL,
  `jk` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_tlp` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_mhs`
--

INSERT INTO `data_mhs` (`nik`, `nama`, `status`, `jk`, `alamat`, `no_tlp`, `email`, `jurusan`, `password`) VALUES
('1234123512361237', 'Ari', 1, 'laki-laki', 'Tangerang', '083719731', 'hh@gmail.com', 'Teknik Industri', '$2y$10$XbyKsK2NEUOIuI0X2cC64OsCXDJX4PM6CieaUrR.K2DOxuThIHQnK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informatika`
--

CREATE TABLE `informatika` (
  `id` int(6) UNSIGNED NOT NULL,
  `soal` varchar(512) DEFAULT NULL,
  `jawaban_1` varchar(512) DEFAULT NULL,
  `jawaban_2` varchar(512) DEFAULT NULL,
  `jawaban_3` varchar(512) DEFAULT NULL,
  `jawaban_4` varchar(512) DEFAULT NULL,
  `jawaban_benar` varchar(512) DEFAULT NULL,
  `temp` varchar(512) DEFAULT NULL,
  `temp2` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informatika`
--

INSERT INTO `informatika` (`id`, `soal`, `jawaban_1`, `jawaban_2`, `jawaban_3`, `jawaban_4`, `jawaban_benar`, `temp`, `temp2`) VALUES
(1, '1+1x0=...', '0', '2', '1', '-1', '$2y$10$FGWamkjtop0e4mluulmUqOkT0PSAP8rdQlYcXl4m0gUD/iAaI9iHu', 'Informatika', '80'),
(2, 'sapi minumnya??', 'teh', 'susu', 'jus', 'air', '$2y$10$9hYkzTxfufRcZ0iNwMdtY.KgigiFuSIwQmWRhd/WWQUuQLc0RC5OK', 'Informatika', '80');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_detail`
--

CREATE TABLE `soal_detail` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `jumlah_soal` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `lama_waktu` int(11) NOT NULL,
  `nilai_minimal` varchar(3) NOT NULL,
  `diedit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal_detail`
--

INSERT INTO `soal_detail` (`id`, `jurusan`, `jumlah_soal`, `status`, `lama_waktu`, `nilai_minimal`, `diedit`) VALUES
(2062, 'Informatika', 2, 1, 10, '80', '2022-07-17 11:02:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `nik` varchar(16) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`nik`, `username`, `nama`, `password`) VALUES
('1234123512361237', 'hhhg', '<div style=\"position: absolute;top:0;bottom: 0;left: 0;right', '$2y$10$1nfGSF7aHg1Au7QA5lAW8Ot2ZxgOHQf3k0HwPZRC5CnLOgWjzUFOO'),
('3603122910000006', 'hh', 'Bagus Qori F', '$2y$10$7AHfta1skUGwXNByg2odb.nHLPP1PrUuHpKEXDfJ4VNPhIDox7FwK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_mhs`
--

CREATE TABLE `user_mhs` (
  `username` int(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_mhs`
--

INSERT INTO `user_mhs` (`username`, `password`, `status`) VALUES
(2000, 'bagus123', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `informatika`
--
ALTER TABLE `informatika`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal_detail`
--
ALTER TABLE `soal_detail`
  ADD PRIMARY KEY (`jurusan`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `user_mhs`
--
ALTER TABLE `user_mhs`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `informatika`
--
ALTER TABLE `informatika`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `soal_detail`
--
ALTER TABLE `soal_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2066;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
