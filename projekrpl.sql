-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 03:04 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekrpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_akun`
--

CREATE TABLE `data_akun` (
  `id` int(15) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `user_nama` varchar(60) DEFAULT NULL,
  `nomor_hp` varchar(18) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_fakultas` varchar(30) DEFAULT NULL,
  `user_jurusan` varchar(30) DEFAULT NULL,
  `npm` varchar(16) DEFAULT NULL,
  `angkatan` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_akun`
--

INSERT INTO `data_akun` (`id`, `username`, `password`, `user_nama`, `nomor_hp`, `email`, `user_fakultas`, `user_jurusan`, `npm`, `angkatan`) VALUES
(1, 'admin', 'admin', 'administrator', '0', '0', '0', '0', '0', '0'),
(12, 'muflih23', '4F1R250286', 'Fadli', '081283029409', 'mfadli.muflih23@gmail.com', 'FMIPA', 'Teknik Informatika', '140810170006', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `data_master`
--

CREATE TABLE `data_master` (
  `master_id` int(16) NOT NULL,
  `master_username` varchar(40) NOT NULL,
  `password` varchar(16) NOT NULL,
  `master_nama` varchar(60) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `master_fakultas` varchar(60) NOT NULL,
  `master_nip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_ruangan`
--

CREATE TABLE `data_ruangan` (
  `id_ruangan` int(20) NOT NULL,
  `nama_ruangan` varchar(40) NOT NULL,
  `id_master` int(16) NOT NULL,
  `status_ruangan` varchar(20) NOT NULL DEFAULT 'AVAILABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_akun`
--
ALTER TABLE `data_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_master`
--
ALTER TABLE `data_master`
  ADD PRIMARY KEY (`master_id`);

--
-- Indexes for table `data_ruangan`
--
ALTER TABLE `data_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_akun`
--
ALTER TABLE `data_akun`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_master`
--
ALTER TABLE `data_master`
  MODIFY `master_id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_ruangan`
--
ALTER TABLE `data_ruangan`
  MODIFY `id_ruangan` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
