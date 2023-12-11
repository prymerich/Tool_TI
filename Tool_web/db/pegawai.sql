-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 03:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal_lahir` datetime DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `Email` varchar(225) NOT NULL,
  `No_HP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `Nama`, `Jenis_Kelamin`, `tanggal_lahir`, `Alamat`, `Email`, `No_HP`) VALUES
(177013, 'Acumalaka', 'Laki-laki', NULL, 'Tebak Nae', 'hiaohvai', '08969697270'),
(177014, 'Richad Krishnadana Primantara', 'Laki-laki', NULL, 'Jalan Intan', 'krishnarichad@gmail.com', '2147483647'),
(17701313, 'Acumalaka', 'Laki-laki', NULL, 'Mana aja Boleh', 'gapunyahp@gmail.com', '2147483647'),
(17701332, 'hehe2', 'Laki-laki', NULL, 'gatau pen beli truk', 'hiaohvai', '08100009000'),
(17701336, 'Richad Krishnadana Primantara', 'Perempuan', NULL, 'rumah elon musk', 'itu dah', '08969697270');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17701338;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
