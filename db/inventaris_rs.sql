-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 04:47 PM
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
-- Database: `inventaris_rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_BARANG` int(11) NOT NULL,
  `NAMA_BARANG` varchar(255) NOT NULL,
  `MERK_BARANG` varchar(255) NOT NULL,
  `JENIS_BARANG` varchar(255) NOT NULL,
  `JUMLAH` int(11) NOT NULL,
  `KONDISI` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_BARANG`, `NAMA_BARANG`, `MERK_BARANG`, `JENIS_BARANG`, `JUMLAH`, `KONDISI`) VALUES
(1, 'MASKER', 'KNF95', 'MEDIS', 322, 'BAIK'),
(2, 'UV STERILISATOR', 'BEKO', 'MEDIS', 20, 'BAIK'),
(3, 'LAMPU PERIKSA', 'SERENITY', 'NON MEDIS', 33, 'BAIK'),
(4, 'HEMATOLOGY ANALYZER', 'SYSMEX XP-100', 'MEDIS', 15, 'BURUK'),
(5, 'MESIN ANESTESI', 'VAPORIZER AM 831', 'MEDIS', 7, 'BAIK'),
(6, 'ULTRASONOGRAFI', 'SURESUN', 'MEDIS', 50, 'BAIK'),
(7, 'INKUBATOR BAYI', 'GEA YP 100', 'MEDIS', 12, 'BAIK'),
(8, 'INFUS SET', 'GEA ONEMED', 'MEDIS', 223, 'BAIK'),
(9, 'KURSI RODA', 'GEA MEDICALWHEEL CHAIR', 'NON MEDIS', 18, 'BURUK'),
(10, 'ALAT TEST GULA DARAH', 'ACCU-ACTIVE PACK', 'MEDIS', 23, 'BAIK'),
(11, 'MONITOR', 'AOC', 'NON MEDIS', 46, 'BAIK'),
(12, 'MOUSE', 'LOGITECH', 'NON MEDIS', 57, 'BAIK'),
(13, 'KEYBOARD', 'LOGITECH', 'NON MEDIS', 40, 'BURUK'),
(14, 'COMPUTER', 'DELL OPTIPLEX', 'NON MEDIS', 123, 'BAIK'),
(15, 'PRINTER', 'CANON', 'NON MEDIS', 28, 'BAIK');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_BARANG`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `ID_BARANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
