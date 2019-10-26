-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jul 2019 pada 07.32
-- Versi Server: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobilsaya`
--

CREATE TABLE `mobilsaya` (
  `id` int(11) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `warna` varchar(25) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobilsaya`
--

INSERT INTO `mobilsaya` (`id`, `merk`, `warna`, `jenis`, `tahun`, `harga`, `gambar`) VALUES
(1, 'Lamborgini', 'Black', 'Mobil Sport', 2017, '12M', 'mobil1.jpg'),
(2, 'Lamborgini', 'Red', 'Mobil Sport', 2018, '22M', 'mobil2.jpg'),
(3, 'Lamborgini', 'Yellow', 'Mobil Sport', 2019, '10M', 'mobil3.jpg'),
(4, 'BMW', 'Grey', 'Mobil Sport', 2018, '15M', 'mobil4.jpg'),
(24, 'BMW', 'Merah Maron', 'Mobil Sport', 2010, '20M', 'mobil5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobilsaya`
--
ALTER TABLE `mobilsaya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobilsaya`
--
ALTER TABLE `mobilsaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
