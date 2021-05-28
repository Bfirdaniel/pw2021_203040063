-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 07:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
-- Table structure for table `rokok`
--

CREATE TABLE `rokok` (
  `id` int(11) NOT NULL,
  `Opsi` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rokok`
--

INSERT INTO `rokok` (`id`, `Opsi`, `nama`, `merk`, `price`, `color`, `quantity`, `picture`) VALUES
(1, '↑', 'SAMPOERNA MILD', 'SAMPOERNA', 'Rp.260.000', 'WHITE', '3 slop', '1a.jpg'),
(2, '↑', 'MARLBORO FILTER', 'Philip Morris International', 'Rp. 300.000', 'RED AND WHITE', '2 slop', '2.jpg'),
(3, '↑', 'GUDANG GARAM FILTER', 'GUDANG GARAM', 'Rp.200.000', 'MAROON AND BROWN	', '2 slop', '12a.jpg'),
(4, '↑', 'MAGNUM MILD', 'DJI SAMSOE 234', 'Rp.210.000', 'BLUE', '4 slop', '4.jpg'),
(5, '↑', 'ESSE change grape ed', 'Korea Tomorrow & Global Corporation	', 'Rp.270.000', 'PURPLE', '5 slop', '5b.jpg'),
(6, '↑', 'MAGNUM FILTER', 'DJI SAMSOE 234', 'Rp.200.000', 'BLACK', '1 slop', '13a.jpg'),
(7, '↑', 'GUDANG GARAM PATRA	', 'GUDANG GARAM', 'Rp.110.000	', 'BROWN', '1 slop', '7a.jpg'),
(8, '↑', 'CLAS MILD', 'Nojorono Tobacco International', 'Rp.220.000', 'BLUE AND WHITE', '2 slop', '8.jpg'),
(9, '↑', 'U-MILD', 'SAMPOERNA	', 'Rp.210.000', 'BLUE AND WHITE	', '1 slop', '9.jpg'),
(10, '↑', 'DJARUM COKLAT KRETEK', 'DJARUM', 'Rp.130.000', 'BROWN', '2 sLOP', '10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rokok`
--
ALTER TABLE `rokok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rokok`
--
ALTER TABLE `rokok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
