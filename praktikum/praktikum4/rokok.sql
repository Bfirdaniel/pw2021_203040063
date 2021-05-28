-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2021 pada 12.50
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040063`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rokok`
--

CREATE TABLE `rokok` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rokok`
--

INSERT INTO `rokok` (`id`, `nama`, `merk`, `price`, `color`, `quantity`, `picture`) VALUES
(1, 'SAMPOERNA MILD', 'SAMPOERNA', 'Rp.26.000', 'WHITE', '3 slop', '1a.jpg'),
(2, 'MARLBORO FILTER', 'Philip Morris International', 'Rp. 30.000', 'RED AND WHITE', '2 slop', '2.jpg'),
(3, 'GUDANG GARAM FILTER', 'GUDANG GARAM', 'Rp.20.000', 'MAROON AND BROWN	', '2 slop', '12a.jpg'),
(4, 'MAGNUM MILD', 'DJI SAMSOE 234', 'Rp.21.000', 'BLUE', '4 slop', '4.jpg'),
(5, 'ESSE change grape ed', 'Korea Tomorrow & Global Corporation	', 'Rp.27.000', 'PURPLE', '5 slop', '5b.jpg'),
(6, 'MAGNUM FILTER', 'DJI SAMSOE 234', 'Rp.20.000', 'BLACK', '1 slop', '13a.jpg'),
(7, 'GUDANG GARAM PATRA	', 'GUDANG GARAM', 'Rp.11.000	', 'BROWN', '1 slop', '7a.jpg'),
(8, 'CLAS MILD', 'Nojorono Tobacco International', 'Rp.22.000', 'BLUE AND WHITE', '2 slop', '8.jpg'),
(9, 'U-MILD', 'SAMPOERNA	', 'Rp.21.000', 'BLUE AND WHITE	', '1 slop', '9.jpg'),
(10, 'DJARUM COKLAT KRETEK', 'DJARUM', 'Rp.13.000', 'BROWN', '2 sLOP', '10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rokok`
--
ALTER TABLE `rokok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rokok`
--
ALTER TABLE `rokok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
