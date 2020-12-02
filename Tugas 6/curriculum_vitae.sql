-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 12.11
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curriculum_vitae`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `rumah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `telepon`, `gmail`, `rumah`) VALUES
(1, '+6285730135991', 'meikehardianti25@gmail.com', 'Sumberaji Kabuh Jombang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE `organisasi` (
  `No` int(10) NOT NULL,
  `Tahun` int(20) NOT NULL,
  `Organisasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`No`, `Tahun`, `Organisasi`) VALUES
(1, 2017, 'OSIS SMAN KABUH <br>Senior High School'),
(2, 2019, 'Member of Informatic Learning Community G-14 <br>Informatic UPN \"Veteran\" Jawa Timur'),
(3, 2019, 'Member of UKM Badminton <br>UPN \"Veteran\"  Jawa Timur'),
(4, 2020, 'Member of UKM UKKI <br>UPN \"Veteran\" Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `Tahun` varchar(30) NOT NULL,
  `Jenjang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`Tahun`, `Jenjang`) VALUES
('(2006-2012)', 'SDN SUMBERAJI 1 Elementary School      '),
('(2015-2018)', 'SMAN KABUH Senior High School'),
('(2012-2015)', 'SMPN 1 KABUH Junior High School'),
('(2018-Now)', 'INFORMATIC UPN \"Veteran\" Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(1) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Instansi` varchar(50) NOT NULL,
  `Profil_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `Nama`, `Jurusan`, `Instansi`, `Profil_lengkap`) VALUES
(1, 'MEIKE HARDIANTI', 'INFORMATIC\'18', 'UPN \"VETERAN\" JAWA TIMUR', 'Hi! My name is Meike Hardianti, you can call me Meike, I was born in Jombang, Indonesia on 25 May 20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosial_media`
--

CREATE TABLE `sosial_media` (
  `id_sosmed` int(11) NOT NULL,
  `fb` varchar(20) NOT NULL,
  `ig` varchar(20) NOT NULL,
  `line` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sosial_media`
--

INSERT INTO `sosial_media` (`id_sosmed`, `fb`, `ig`, `line`) VALUES
(1, 'Meike Hardianti', 'meikehardianti', 'Meike25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `sosial_media`
--
ALTER TABLE `sosial_media`
  ADD PRIMARY KEY (`id_sosmed`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
