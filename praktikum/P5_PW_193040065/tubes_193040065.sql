-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 17.59
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040065`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `gambar`, `jenis`, `merk`, `price`) VALUES
(1, 'gambar.png', 'Hoodie', 'bape', 'Rp: 3.500.000'),
(2, 'gambar1.png', 'Shirt V-neck', 'Under Armour', 'Rp: 1.500.000'),
(3, 'gambar2.png', 'T-Shirt', 'Supreme', 'Rp: 2.000.000'),
(4, 'gambar3.png', 'T-Shirt', 'Blood4Mercy', 'Rp: 1.520.000'),
(5, 'gambar4.png', 'Kemeja', 'Pull n\' Bear', 'Rp: 760.000'),
(6, 'gambar5.png', 'Denim', 'Moofeat', 'Rp: 340.000'),
(7, 'gambar6.png', 'Kemeja', 'Levi\'s', 'Rp: 690.000'),
(8, 'gambar7.png', 'Gamis', 'H&M', 'Rp: 420.000'),
(9, 'gambar8.png', 'Sweater', 'Chill Bro', 'Rp: 370.000'),
(10, 'gambar9.png', 'Hoodie', 'AHHA', 'Rp: 600.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
