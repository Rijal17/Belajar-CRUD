-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 09:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siramtanaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `mid_test`
--

CREATE TABLE `mid_test` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_tanaman` varchar(255) NOT NULL,
  `kelembapan` double NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mid_test`
--

INSERT INTO `mid_test` (`id`, `nama`, `jenis_tanaman`, `kelembapan`, `waktu`) VALUES
(13, 'rijal', 'Bunga Anggrek', 55.77, '2022-11-09 12:17:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mid_test`
--
ALTER TABLE `mid_test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mid_test`
--
ALTER TABLE `mid_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
