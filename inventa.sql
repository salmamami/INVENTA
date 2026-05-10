-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 09:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventa`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_kamar`
--

CREATE TABLE `barang_kamar` (
  `id` int(11) NOT NULL,
  `Kamar` varchar(8) NOT NULL,
  `Loker` int(3) NOT NULL,
  `Gantungan_tas` int(3) NOT NULL,
  `Gantungan_baju` int(3) NOT NULL,
  `Stopkontak` int(3) NOT NULL,
  `Gorden` int(3) NOT NULL,
  `Cermin` int(3) NOT NULL,
  `Lampu_putih` int(3) NOT NULL,
  `Lampu_kuning` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_kamar`
--

INSERT INTO `barang_kamar` (`id`, `Kamar`, `Loker`, `Gantungan_tas`, `Gantungan_baju`, `Stopkontak`, `Gorden`, `Cermin`, `Lampu_putih`, `Lampu_kuning`) VALUES
(1, 'DN 1.1', 36, 2, 2, 2, 4, 2, 2, 1),
(2, 'DN 1.2', 36, 2, 2, 2, 4, 2, 2, 2),
(3, 'DN 1.3', 36, 2, 2, 2, 4, 1, 2, 2),
(4, 'DN 1.4', 18, 1, 1, 1, 2, 1, 1, 1),
(5, 'DN 1.5', 18, 1, 1, 1, 2, 1, 1, 1),
(6, 'DN 1.6', 18, 1, 1, 1, 2, 1, 1, 1),
(7, 'DN 1.7', 18, 1, 1, 1, 4, 1, 2, 1),
(8, 'DN 1.8', 18, 1, 1, 1, 4, 1, 1, 1),
(9, 'DN 1.9', 18, 2, 2, 1, 2, 1, 1, 1),
(10, 'DN 1.10', 36, 2, 2, 1, 1, 1, 1, 1),
(11, 'DN 1.11', 36, 2, 2, 2, 4, 1, 2, 2),
(12, 'DN 1.12', 36, 2, 2, 2, 4, 1, 2, 2),
(13, 'DN 1.13', 36, 2, 2, 2, 2, 1, 2, 2),
(14, 'DN 1.14', 36, 2, 2, 2, 2, 1, 2, 2),
(15, 'DN 1.15', 36, 2, 2, 2, 2, 1, 2, 2),
(17, 'DN 1.17', 36, 2, 2, 2, 2, 1, 2, 2),
(18, 'DN 1.18', 36, 2, 2, 2, 2, 1, 2, 2),
(19, 'DN 1.19', 36, 2, 2, 2, 2, 1, 2, 2),
(20, 'DN 1.20', 36, 2, 2, 2, 2, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `barang_lt2`
--

CREATE TABLE `barang_lt2` (
  `id` int(11) NOT NULL,
  `Kamar` varchar(8) NOT NULL,
  `Loker` int(3) NOT NULL,
  `Gantungan_tas` int(3) NOT NULL,
  `Gantungan_baju` int(3) NOT NULL,
  `Stopkontak` int(3) NOT NULL,
  `Gorden` int(3) NOT NULL,
  `Cermin` int(3) NOT NULL,
  `Lampu_putih` int(3) NOT NULL,
  `Lampu_kuning` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_lt2`
--

INSERT INTO `barang_lt2` (`id`, `Kamar`, `Loker`, `Gantungan_tas`, `Gantungan_baju`, `Stopkontak`, `Gorden`, `Cermin`, `Lampu_putih`, `Lampu_kuning`) VALUES
(1, 'DN 2.2', 36, 2, 2, 2, 2, 2, 2, 2),
(2, 'DN 2.3', 36, 2, 2, 2, 2, 2, 2, 2),
(3, 'DN 2.4', 36, 2, 2, 2, 2, 1, 2, 2),
(11, 'DN 2.5', 36, 2, 2, 3, 2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `barang_lt3`
--

CREATE TABLE `barang_lt3` (
  `id` int(11) NOT NULL,
  `Kamar` varchar(8) NOT NULL,
  `Loker` int(3) NOT NULL,
  `Gantungan_tas` int(3) NOT NULL,
  `Gantungan_baju` int(3) NOT NULL,
  `Stopkontak` int(3) NOT NULL,
  `Gorden` int(3) NOT NULL,
  `Cermin` int(3) NOT NULL,
  `Lampu_putih` int(3) NOT NULL,
  `Lampu_kuning` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_lt3`
--

INSERT INTO `barang_lt3` (`id`, `Kamar`, `Loker`, `Gantungan_tas`, `Gantungan_baju`, `Stopkontak`, `Gorden`, `Cermin`, `Lampu_putih`, `Lampu_kuning`) VALUES
(1, 'DN 3.1', 36, 2, 2, 2, 2, 2, 2, 1),
(2, 'DN 3.2', 32, 2, 2, 2, 2, 2, 2, 2),
(3, 'DN 3.3', 32, 2, 2, 2, 2, 2, 2, 2),
(4, 'DN 3.4', 36, 2, 2, 2, 4, 2, 2, 2),
(5, 'DN 3.5', 36, 2, 2, 2, 4, 2, 2, 2),
(6, 'DN 3.6', 36, 2, 2, 2, 4, 2, 2, 2),
(7, 'DN 3.7', 36, 2, 2, 2, 4, 2, 2, 2),
(8, 'DN 3.8', 36, 2, 2, 2, 4, 2, 2, 2),
(9, 'DN 3.9', 36, 2, 2, 2, 4, 2, 2, 2),
(10, 'DN 3.10', 36, 2, 2, 2, 4, 2, 2, 2),
(11, 'DN 3.11', 36, 2, 2, 2, 4, 2, 2, 2),
(12, 'DN 3.12', 36, 2, 2, 2, 4, 2, 2, 2),
(13, 'DN 3.13', 36, 2, 2, 2, 4, 2, 2, 2),
(14, 'DN 3.14', 36, 2, 2, 2, 4, 2, 2, 2),
(15, 'DN 3.15', 36, 2, 2, 2, 4, 2, 2, 1),
(16, 'DN 3.3', 2, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `barang_rusak`
--

CREATE TABLE `barang_rusak` (
  `id` int(3) NOT NULL,
  `kamar` varchar(8) NOT NULL,
  `tanggal_rusak` date NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_diperbaiki` date NOT NULL,
  `diperbaiki` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_rusak`
--

INSERT INTO `barang_rusak` (`id`, `kamar`, `tanggal_rusak`, `nama_barang`, `kategori`, `keterangan`, `jumlah`, `tanggal_diperbaiki`, `diperbaiki`) VALUES
(7, 'DN 1.2', '2023-08-13', 'cermin', 'barang', 'pecah', 4, '2023-08-30', 'sudah'),
(11, 'DN 1.15', '2023-08-24', 'hatinya vira', 'soft', 'sepi', 1, '2023-09-02', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `datakamar`
--

CREATE TABLE `datakamar` (
  `id` int(3) NOT NULL,
  `lt1` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakamar`
--

INSERT INTO `datakamar` (`id`, `lt1`) VALUES
(1, 'DN 1.1'),
(2, 'DN 1.2'),
(3, 'DN 1.3'),
(4, 'DN 1.4'),
(5, 'DN 1.5'),
(6, 'DN 1.6'),
(7, 'DN 1.7'),
(8, 'DN 1.8'),
(9, 'DN 1.9'),
(10, 'DN 1.10'),
(11, 'DN 1.11'),
(12, 'DN 1.12'),
(13, 'DN 1.13'),
(14, 'DN 1.13');

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id` int(3) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `catatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id`, `nama_barang`, `jumlah`, `keterangan`, `catatan`) VALUES
(2, 'lengser', 50, 'tdk lengkap', ''),
(4, 'taplak meja', 26, 'lengkap', ''),
(5, 'piring', 60, 'lengkap', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'walikamar', 'walikamar@gmail.com', 'darunisa'),
(5, 'Kartika', 'kartika@gmail.com', 'vira'),
(6, 'Ibu Anisa Siti', 'sarpraspondok@gmail.com', 'admin'),
(7, 'Pak Djayus', 'dudi@gmail.com', 'dudidam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_kamar`
--
ALTER TABLE `barang_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_lt2`
--
ALTER TABLE `barang_lt2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_lt3`
--
ALTER TABLE `barang_lt3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_rusak`
--
ALTER TABLE `barang_rusak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datakamar`
--
ALTER TABLE `datakamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_kamar`
--
ALTER TABLE `barang_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `barang_lt2`
--
ALTER TABLE `barang_lt2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `barang_lt3`
--
ALTER TABLE `barang_lt3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `barang_rusak`
--
ALTER TABLE `barang_rusak`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `datakamar`
--
ALTER TABLE `datakamar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
