-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 10:52 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_medis`
--

CREATE TABLE `barang_medis` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barang_nonmedis`
--

CREATE TABLE `barang_nonmedis` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_nonmedis`
--

INSERT INTO `barang_nonmedis` (`no`, `nama`, `merk`, `satuan`, `jumlah`, `kondisi`) VALUES
(1, 'monitor', 'LENOVO L24i-40', 'unit', 32, 'A'),
(2, 'keyboard', 'Logitech K120', 'unit', 44, 'A'),
(3, 'mouse', 'LOGITECH B100', 'unit', 58, 'A'),
(4, 'printer', 'Canon PIXMA MG2570S', 'unit', 11, 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_medis`
--
ALTER TABLE `barang_medis`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `barang_nonmedis`
--
ALTER TABLE `barang_nonmedis`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_medis`
--
ALTER TABLE `barang_medis`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_nonmedis`
--
ALTER TABLE `barang_nonmedis`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
