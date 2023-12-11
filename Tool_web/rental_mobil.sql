-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 03:58 AM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `umur` int(150) NOT NULL,
  `Alamat` text NOT NULL,
  `Email` text NOT NULL,
  `No_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `no` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Alamat` text NOT NULL,
  `umur` int(11) NOT NULL,
  `No_HP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`no`, `username`, `password`, `Nama`, `Jenis_Kelamin`, `Alamat`, `umur`, `No_HP`) VALUES
(2, 'krishnarichad@gmail.com', 'YAH KELIATAN', '', 'Laki-laki', '', 0, ''),
(3, 'krishnarichad@gmail.com', '$2y$10$F7rIcvbiVqBe5P9AGtYi/OtuW39hpyrSlkoWiOwyxXiztvMcO1jqa', '', 'Laki-laki', '', 0, ''),
(4, 'krishnarichad@gmail.com', '$2y$10$H77Y1sI6sLUVMaVFRLzAPepSIDnpS0nHBWIUOiLpOXAc11Z4F2ouK', '', 'Laki-laki', '', 0, ''),
(5, 'krishnarichad@gmail.com', '$2y$10$BTqZukb71wfXHSoGodXWlOa6MIcsybtctt8XPUgGfbRRI3IrFF1pi', '', 'Laki-laki', '', 0, ''),
(6, 'krishnarichad@gmail.com', '$2y$10$tq6g1rezr/zJIb602AyXGO4bEOYWOulT5LFUDilBedTdKqxd.kyl.', '', 'Laki-laki', '', 0, ''),
(7, '2305551151', '$2y$10$3xSIWiRqC8JhJZ9FVfPem.N9pv7opVMH7anVxl.iQCvGqfNoI19pu', '', 'Laki-laki', '', 0, ''),
(8, 'krishnarich@gmail.com', '$2y$10$sykSw5EnYQSXwAHezkOWV.zynRWx.0W5a.HJelHVWX44u0fU28hMO', '', 'Laki-laki', '', 0, ''),
(9, 'krishnarich@gmail.com', '$2y$10$BqSVTk5iowlTQQGn/NoFKeDcfORO8O0PKLL5D5WJilgCabz7xw/m.', '', 'Laki-laki', '', 0, ''),
(10, 'krishnarich@gmail.com', 'tau', '', 'Laki-laki', '', 0, ''),
(11, 'krishnarich@gmail.com', '$2y$10$Vw5eZ5AR36fCukVvTDZIBu4fmNOgkMhKNhUlu0kTS0fhwta/ejLw.', '', 'Laki-laki', '', 0, ''),
(12, 'apaje@gmail.com', '$2y$10$dJsqJQX7HR87LVAHLvc0beCNRv9JDiHdAjxfyUS4M0apNey5kaY9e', '', 'Laki-laki', '', 0, ''),
(13, 'apaje@gmail.com', '$2y$10$XmerwdG.8PYtQ/XZCtS9eenrZIhny0EvMUqpcaBBlus8EMhK3Ymzq', '', 'Laki-laki', '', 0, ''),
(14, 'apaje@gmail.com', '$2y$10$hrJlwNWnW3QZhlBray1guuaMZ1ex51U3s5l9cJA6suAs.bMcs1phi', '', 'Laki-laki', '', 0, ''),
(15, 'apaje@gmail.com', '$2y$10$YBXHQFeQeiP7Qt3Ep8DLf.SNFpYJQ6PG0cpR3NAz9X9tEXeuuzvt6', '', 'Laki-laki', '', 0, ''),
(16, 'semogabenar', '$2y$10$8z.3blIlSgJGSAKrdyV3.OSrIM0784gpuVVwgs3KwMxDHtn/LJwLm', '', 'Laki-laki', '', 0, ''),
(17, 'semogabenar', '$2y$10$SNjvFWacSlJxcjH1q2MXPe1w1zSlAJIj.1LhcmiD8OtWc9rmU2ar6', '', 'Laki-laki', '', 0, ''),
(18, 'apaboleh', '$2y$10$5Yuu0Tdo8FC4oQaQ9Fhbf.EMhCZt8w.BphDLZt1CguOO4wVkhJPrm', '', 'Laki-laki', '', 0, ''),
(30, 'semogabenar', '$2y$10$PEqdHC8lbbrqns/OYxfV0OtmOq9lDYBqeLecs4GsMTFTJK/1npb4W', '', 'Laki-laki', '', 0, ''),
(31, 'semogabenar1', '$2y$10$G79UBsTb.nP9kRndHvK./Ohzmnc1sFWhyc4Nc4rbwrl5FQEm25WSW', '', 'Laki-laki', '', 0, ''),
(32, 'semogabenar1', '$2y$10$3IZSu3XpxNKLL/g7isKNyeOTdaaueAZrwwpVzErdbaW/fmGU9kHkK', '', 'Laki-laki', '', 0, ''),
(33, 'apaje@gmail.com', '$2y$10$O/bUokwzx9drNk.rVBOgl.e04G7QQ0y38rpIWJls9lBbOEtXirbnG', '', 'Laki-laki', '', 0, ''),
(34, 'apamen@gmail.com', '$2y$10$lrBtGwo5dzyxfGvhQXLLS.jaZNqQuf6kAIkjKm5OI/ZLSHKAT.rzK', '', 'Laki-laki', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `pelanggan` varchar(50) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL DEFAULT current_timestamp(),
  `alamat` text NOT NULL,
  `lama` int(10) NOT NULL,
  `mobil_sewa` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `KTP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17701338;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
