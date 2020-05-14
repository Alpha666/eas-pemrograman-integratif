-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 01:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eas`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `jenis_bantuan` varchar(30) NOT NULL,
  `nama_bantuan` varchar(50) NOT NULL,
  `jumlah_bantuan` int(30) NOT NULL,
  `id_penyumbang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyumbang`
--

CREATE TABLE `penyumbang` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_bantuan` varchar(50) NOT NULL,
  `jumlah_bantuan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyumbang`
--

INSERT INTO `penyumbang` (`id`, `nama`, `nama_bantuan`, `jumlah_bantuan`) VALUES
(5, 'Christian Andrew', 'Beras', 100),
(6, 'Christian Andrew 2', 'Uang', 500000),
(7, 'Christian Andrew 3', 'Beras', 200),
(8, 'Christian Andrew 4', 'Masker', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_penyumbang` (`id_penyumbang`);

--
-- Indexes for table `penyumbang`
--
ALTER TABLE `penyumbang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyumbang`
--
ALTER TABLE `penyumbang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `id_penyumbang` FOREIGN KEY (`id_penyumbang`) REFERENCES `penyumbang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
