-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306:3306
-- Waktu pembuatan: 27 Jan 2024 pada 05.11
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `no_hp`, `email`, `password`) VALUES
('adm-230801', 'admin', 12, 'admin@gmail.com', 'admin'),
('adm-240180', 'M Faisal Basri', 2, 'faisal.basri.fbs@gmail.com', '1111');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hasilskrining`
--

INSERT INTO `tb_hasilskrining` (`nik`, `nama`, `tgl_skrining`, `hipertensi`, `ginjal`, `diabetes`, `jantung`) VALUES
(0, '', '2024-01-25', 'Resiko Rendah', 'Resiko Rendah', 'Resiko Rendah', 'Resiko Tinggi'),
(6, '', '2024-01-25', 'Resiko Tinggi', 'Resiko Rendah', 'Resiko Tinggi', 'Resiko Tinggi'),
(78, 'New York', '2024-01-25', 'Resiko Sedang', 'Resiko Sedang', 'Resiko Sedang', 'Resiko Sedang'),
(200, 'M Faisal Basri', '2024-01-25', 'Resiko Tinggi', 'Resiko Tinggi', 'Resiko Tinggi', 'Resiko Tinggi'),
(300, 'Rifki Maulana', '2024-01-25', 'Resiko Rendah', 'Resiko Rendah', 'Resiko Rendah', 'Resiko Rendah'),
(303, 'New York', '2024-01-25', 'Resiko Rendah', 'Resiko Rendah', 'Resiko Rendah', 'Resiko Rendah'),
(9000, 'M Faisal Basri', '0000-00-00', 'Resiko Tinggi', 'Resiko Tinggi', 'Resiko Tinggi', 'Resiko Tinggi');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`nik`, `nama`, `hipertensi`, `ginjal`, `diabetes`, `jantung`) VALUES
(4, 'saya  n', 29, 29, 20, 26),
(5, 'David ', 29, 29, 20, 26),
(6, 'David maulana', 29, 29, 20, 26),
(7, 'saya  n', 2, 2, 2, 2),
(9000, 'M Faisal Basri', 12, 14, 8, 14),
(0, 'Edrick', 13, 15, 13, 12),
(78, 'New York', 12, 13, 11, 11),
(9, 'Alif Nayandra', 25, 23, 16, 20),
(200, 'M Faisal Basri', 29, 29, 20, 26),
(300, 'Rifki Maulana', 2, 3, 3, 2),
(303, 'New York', 3, 4, 4, 3);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`nik`, `nama`, `tgl_lahir`, `domisili`, `alamat`, `rt`, `rw`, `no_hp`, `email`, `tgl_skrining`, `nama_keluarga`, `alamat_keluarga`, `nohp_keluarga`, `email_keluarga`) VALUES
(0, 'Edrick', '2024-01-01', 'Ya', 'Bogor', 7, 101, 89, 'Internets420@gmail.com', '2024-01-25', 'agus', 'Bandung', 2147483647, 'tes@yahoo.com'),
(1, 'Faisal B', '2024-01-26', 'Ya', 'Jakarta IDN', 10, 10, 89, 'admin@gmail.com', '2024-01-01', 'nama ', 'alamat ', 222, 'keluarga@gmail.com'),
(2, 'Faisal', '2023-06-06', 'Bekasi', 'bekasi', 9, 1, 821, 'admin@gmail.com', '2024-01-01', 'Faisal', 'Jakarta', 89, 'admin@gmail.com'),
(3, 'fahri', '2023-06-06', 'Bekasi', 'bekasi', 9, 1, 821, 'admin@gmail.com', '2024-01-01', 'Faisal', 'Jakarta', 89, 'admin@gmail.com'),
(4, 'saya  n', '2024-01-04', 'Tidak', 'Jogja', 10, 6, 10, 'internets@gmail.com', '2024-01-22', 'agus', 'Bandung', 2147483647, 'tes@yahoo.com'),
(5, 'David ', '2024-01-08', 'Ya', 'Jakarta IDN', 7, 10, 211, 'internets420@gmail.com', '2024-01-20', 'agus', 'Bandung', 2147483647, 'tes@yahoo.com'),
(6, 'David maulana', '2024-01-07', 'Ya', 'Jogja', 7, 10, 211, 'faisal.basri.usni@gmail.com', '2024-01-04', 'agus', 'Bandung', 2147483647, 'tes@yahoo.com'),
(7, 'saya  n', '2024-01-07', 'Ya', 'Jakarta bekasi', 7, 101, 10, 'internets@gmail.com', '2024-01-23', 'agus', 'Bandung', 2147483647, 'tes@yahoo.com'),
(9, 'Alif Nayandra', '2024-01-27', 'Ya', 'Bogor', 10, 10, 211, 'faisal.basri.fbs@gmail.com', '2024-01-27', '', '', 0, ''),
(78, 'New York', '2024-01-18', 'Tidak', 'Bogor', 10, 10, 101, 'aditya@gmail.com', '2024-01-03', 'agus', 'Bandung', 2147483647, 'tes@yahoo.com'),
(200, 'M Faisal Basri', '2024-01-27', 'Ya', 'Bogor', 10, 10, 10, 'Internets420@gmail.com', '2024-01-27', '', '', 0, ''),
(202, '', '2024-01-25', 'Ya', '', 0, 0, 0, '', '2024-01-05', '', '', 0, ''),
(300, 'Rifki Maulana', '2024-01-27', 'Ya', 'Kp Jati', 10, 10, 101, 'aditya@gmail.com', '2024-01-28', '', '', 0, ''),
(303, 'New York', '2024-01-24', 'Ya', 'Bogor', 7, 10, 21, 'aditya@gmail.com', '2024-01-25', '', '', 0, ''),
(400, 'New York', '2024-01-26', 'Ya', 'Bogor', 0, 0, 0, '', '2024-01-13', '', '', 0, ''),
(500, 'Rifki Maulana', '2024-01-25', 'Ya', '', 0, 0, 0, '', '2024-01-18', '', '', 0, ''),
(600, '', '2024-02-01', 'Ya', '', 0, 0, 0, '', '2024-01-18', '', '', 0, ''),
(9000, 'M Faisal Basri', '2024-01-25', 'Ya', 'Bogor', 10, 10, 2, 'faisal@gmail.com', '2024-01-26', 'agus', 'Bandung', 2147483647, 'tes@yahoo.com');

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
