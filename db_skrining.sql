-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2024 pada 10.49
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skrining`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `no_hp`, `email`, `password`) VALUES
('adm-230801', 'admin', 12, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasilskrining`
--

CREATE TABLE `tb_hasilskrining` (
  `nik` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_skrining` date NOT NULL,
  `hipertensi` varchar(30) NOT NULL,
  `ginjal` varchar(30) NOT NULL,
  `diabetes` varchar(30) NOT NULL,
  `jantung` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `nik` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hipertensi` int(2) NOT NULL,
  `ginjal` int(2) NOT NULL,
  `diabetes` int(2) NOT NULL,
  `jantung` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `nik` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `domisili` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl_skrining` date NOT NULL,
  `nama_keluarga` varchar(50) NOT NULL,
  `alamat_keluarga` varchar(50) NOT NULL,
  `nohp_keluarga` int(13) NOT NULL,
  `email_keluarga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_hasilskrining`
--
ALTER TABLE `tb_hasilskrining`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`nik`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_hasilskrining`
--
ALTER TABLE `tb_hasilskrining`
  ADD CONSTRAINT `tb_hasilskrining_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_peserta` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD CONSTRAINT `tb_penyakit_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_peserta` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
