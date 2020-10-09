-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2020 pada 07.43
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `modul_id` int(5) NOT NULL,
  `modul_nama` varchar(50) NOT NULL,
  `modul_keterangan` text NOT NULL,
  `modul_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`modul_id`, `modul_nama`, `modul_keterangan`, `modul_file`) VALUES
(1, 'Perangkat Lunak Akuntansi 1', '', 'assets/Modul%20Praktikum/01.%20MODUL%20PRAKTIKUM%20PLA%201%20PTA%202020-2021.pdf'),
(2, 'Akuntansi Keuangan Menengah 1', '', 'assets/Modul%20Praktikum/04.%20MODUL%20PRAKTIKUM%20AKM%20PTA%202020-2021.pdf'),
(3, 'Pemeriksaan Akuntansi', '', 'assets/Modul%20Praktikum/05.%20MODUL%20PRAKTIKUM%20KAK%20PTA%202020-2021.pdf'),
(4, 'Akuntansi Keuangan Lanjut', '', 'assets/Modul%20Praktikum/02.%20MODUL%20PRAKTIKUM%20AKLAN%20PTA%202020-2021.pdf'),
(5, 'Auditing', '', 'assets/Modul%20Praktikum/03.%20MODUL%20PRAKTIKUM%20AUDITING%20PTA%202020-2021.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `praktikum`
--

CREATE TABLE `praktikum` (
  `praktikum_id` int(5) NOT NULL,
  `praktikum_nama` varchar(50) NOT NULL,
  `praktikum_file` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `praktikum`
--

INSERT INTO `praktikum` (`praktikum_id`, `praktikum_nama`, `praktikum_file`) VALUES
(1, 'Perangkat Lunak Akuntansi 1', 'assets/img/2BARIS_FIX.jpg'),
(2, 'Akuntansi Keuangan Menengah 1', 'assets/img/2BARIS_FIX.jpg'),
(3, 'Pemeriksaan Akuntansi 1', 'assets/img/2BARIS_FIX.jpg'),
(4, 'Akuntansi Keuangan Lanjut', 'assets/img/2BARIS_FIX.jpg'),
(5, 'Auditing 1', 'assets/img/2BARIS_FIX.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(1) NOT NULL,
  `peraturan_laboratorium` varchar(150) NOT NULL,
  `format_laboratorium` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `peraturan_laboratorium`, `format_laboratorium`) VALUES
(1, 'assets/img/2BARIS_FIX.jpg', 'assets/buku_tugas/contoh_cover_001.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `software`
--

CREATE TABLE `software` (
  `software_id` int(5) NOT NULL,
  `software_nama` varchar(50) NOT NULL,
  `software_keterangan` text NOT NULL,
  `software_logo` varchar(100) NOT NULL,
  `software_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `software`
--

INSERT INTO `software` (`software_id`, `software_nama`, `software_keterangan`, `software_logo`, `software_file`) VALUES
(1, 'MYOB', 'MYOB Software', 'assets/img/gallery/Logo_Software_MYOB.jpg', 'https://drive.google.com/file/d/1ZPCP40QPYl6Mo8BMXK5kKG5J3olPbVcH/view'),
(2, 'DacEasy', 'DacEasy Software', 'assets/img/gallery/Logo_Software_DACEASY.jpg', 'https://drive.google.com/file/d/1v7D9VXOdAvg-wFTdew6uilMW2ZbNRzo6/view'),
(3, 'ACL', 'ACL Software', 'assets/img/gallery/Logo_Software_ACL.jpg', 'https://drive.google.com/file/d/1CiR1rlfIHV1k-vSBHnL2eOGDgc5AsIfe/view'),
(4, 'Zahir', 'Zahir', 'assets/img/gallery/Logo_Software_Zahir.jpg', 'https://drive.google.com/file/d/1ZPCP40QPYl6Mo8BMXK5kKG5J3olPbVcH/view');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`modul_id`);

--
-- Indeks untuk tabel `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`praktikum_id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`software_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `modul`
--
ALTER TABLE `modul`
  MODIFY `modul_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `praktikum`
--
ALTER TABLE `praktikum`
  MODIFY `praktikum_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `software`
--
ALTER TABLE `software`
  MODIFY `software_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
