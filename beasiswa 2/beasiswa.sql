-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 11:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id` int(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `smtr` varchar(1) NOT NULL,
  `ipk` float NOT NULL,
  `pilihan` varchar(30) NOT NULL,
  `berkas` varchar(255) NOT NULL,
  `status_ajuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id`, `nama`, `email`, `telp`, `smtr`, `ipk`, `pilihan`, `berkas`, `status_ajuan`) VALUES
(1, 'Deaz', 'tes@gmail.com', '08123456', '1', 3.9, 'Beasiswa Akademik', 'IMG_20220514_152943.jpg', 0),
(2, 'Deaz', 'tes@gmail.com', '08123456', '2', 3.01, 'Beasiswa Non-Akademik', 'IMG_20220514_152943.jpg', 0),
(3, 'Captain', 'captain@gmail.com', '141', '3', 3.45, 'Beasiswa Akademik', 'IMG_20220514_152919.jpg', 0),
(4, 'Deaz', 'tes@gmail.com', '081234567890', '8', 3.15, 'Beasiswa Akademik', 'IMG_20220514_152919.jpg', 0),
(5, 'Deaz', 'deaz@gmail.com', '08123456', '4', 3.51, 'Beasiswa Akademik', 'IMG_20220514_152943.jpg', 0),
(6, 'Deaz', 'tes@gmail.com', '08123456', '2', 3.13, 'Beasiswa Non-Akademik', 'IMG_20220514_152919.jpg', 0),
(7, 'Deaz', 'daa@gmail.com', '080808', '6', 3.65, 'Beasiswa Non-Akademik', 'IMG_20220514_152933.jpg', 0),
(8, 'Banana', 'banana@gmail.com', '092109210', '4', 3.38, 'Beasiswa Akademik', 'IMG_20220514_152919.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
