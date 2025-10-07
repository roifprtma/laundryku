-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2025 at 04:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serverlk`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '11111', 'admin'),
(2, 'roif', '12345', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_user` int(255) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `pesanan` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layananlaundry`
--

CREATE TABLE `layananlaundry` (
  `id` int(255) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `layanan` varchar(250) NOT NULL,
  `berat` int(100) NOT NULL,
  `total` int(120) NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layananlaundry`
--

INSERT INTO `layananlaundry` (`id`, `nama_pelanggan`, `layanan`, `berat`, `total`, `tgl_pesanan`, `telepon`, `status`) VALUES
(1, 'arhab', 'Cuci Setrika', 6, 0, '2025-10-07', '088222401359', ' dalam proses'),
(2, 'roif', 'Cuci Kering', 5, 0, '2025-10-07', '088222401359', ' dalam proses'),
(3, 'arhab', 'reguler', 2, 0, '2025-10-07', '081211223355', ' dalam proses'),
(4, 'pratama', 'reguler', 3, 0, '2025-10-07', '081211223355', ' dalam proses');

-- --------------------------------------------------------

--
-- Table structure for table `paket_laundry`
--

CREATE TABLE `paket_laundry` (
  `id` int(255) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga_paket` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket_laundry`
--

INSERT INTO `paket_laundry` (`id`, `nama_paket`, `harga_paket`) VALUES
(1, 'regular', 12000),
(2, 'expres', 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `layananlaundry`
--
ALTER TABLE `layananlaundry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_laundry`
--
ALTER TABLE `paket_laundry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layananlaundry`
--
ALTER TABLE `layananlaundry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paket_laundry`
--
ALTER TABLE `paket_laundry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
