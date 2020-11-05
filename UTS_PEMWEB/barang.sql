-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2020 pada 13.17
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
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `sku` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `harga_satuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`sku`, `nama_barang`, `kategori`, `jumlah_stok`, `harga_satuan`) VALUES
('ATK1', 'Pensil', 'ATK', 19, '5000'),
('ATK2', 'Penghapus', 'ATK', 8, '5000'),
('ATK3', 'Pulpen', 'ATK', 10, '15.000'),
('ATK4', 'Tipe x', 'ATK', 4, '10.000'),
('ATK5', 'Jangka', 'ATK', 5, '10.000'),
('ATK6', 'Penggaris', 'ATK', 13, '10.000'),
('MK01', 'Biskuat', 'Makanan', 30, '8000'),
('MK02', 'Oreo', 'Makanan', 16, '8000'),
('MK03', 'Lays', 'Makanan', 18, '10.000'),
('MK04', 'Pringless', 'Makanan', 13, '15.000'),
('MK05', 'Twisco', 'Makanan', 9, '8000'),
('MK06', 'Beng-beng', 'Makanan', 8, '6000'),
('MN01', 'Pocari', 'Minuman', 9, '8000'),
('MN02', 'Yoyic', 'Minuman', 14, '8000'),
('MN03', 'Teh kotak', 'Minuman', 10, '4000'),
('MN04', 'Good day', 'Minuman', 9, '10.000'),
('MN05', 'Teh pucuk', 'Minuman', 3, '5000'),
('MN06', 'Yakult', 'Minuman', 2, '10.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`sku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
