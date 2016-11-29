-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2016 at 07:46 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sarah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cek_bau`
--

CREATE TABLE `tb_cek_bau` (
  `id_bau` tinyint(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cek_bau`
--

INSERT INTO `tb_cek_bau` (`id_bau`, `nama`, `keterangan`) VALUES
(1, 'tidak berbau', 'normal'),
(2, 'busuk', 'terkontaminasi mikroba pembusuk'),
(3, 'asam', 'bakteri / infeksi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cek_kualitas`
--

CREATE TABLE `tb_cek_kualitas` (
  `id_cek` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cek_warna` tinyint(1) NOT NULL,
  `cek_bau` tinyint(1) NOT NULL,
  `cek_rasa` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cek_kualitas`
--

INSERT INTO `tb_cek_kualitas` (`id_cek`, `created_at`, `cek_warna`, `cek_bau`, `cek_rasa`, `updated_at`) VALUES
(20, '2016-11-28 09:38:20', 1, 2, 1, '2016-11-28 09:38:20'),
(21, '2016-11-28 09:42:52', 2, 1, 1, '2016-11-28 09:42:52'),
(22, '2016-11-28 10:06:37', 1, 1, 2, '2016-11-28 10:06:37'),
(23, '2016-11-28 10:22:17', 1, 1, 1, '2016-11-28 10:22:17'),
(24, '2016-11-28 10:34:39', 1, 1, 1, '2016-11-28 10:34:39'),
(25, '2016-11-28 10:59:05', 1, 2, 3, '2016-11-28 10:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cek_rasa`
--

CREATE TABLE `tb_cek_rasa` (
  `id_rasa` tinyint(1) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cek_rasa`
--

INSERT INTO `tb_cek_rasa` (`id_rasa`, `nama`, `keterangan`) VALUES
(1, 'Agak manis', 'Normal'),
(2, 'Asam', 'terkontaminasi mikroba asam'),
(3, 'Pahit', 'Terkontaminasi mikroba');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cek_warna`
--

CREATE TABLE `tb_cek_warna` (
  `id_warna` tinyint(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cek_warna`
--

INSERT INTO `tb_cek_warna` (`id_warna`, `nama`, `keterangan`) VALUES
(1, 'Putih', 'normal'),
(2, 'Kebiru-biruan', 'dicampur air'),
(3, 'Kuning', 'Terdapat caroten/provitamin A'),
(4, 'Merah', 'Kemungkinan darah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `status`, `updated_at`) VALUES
(1, 'hudalaily', 'hudalaily', 'd7cbdba5aafc58b27b4a99917ef1e79b', 1, '2016-11-28 11:04:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cek_bau`
--
ALTER TABLE `tb_cek_bau`
  ADD PRIMARY KEY (`id_bau`);

--
-- Indexes for table `tb_cek_kualitas`
--
ALTER TABLE `tb_cek_kualitas`
  ADD PRIMARY KEY (`id_cek`);

--
-- Indexes for table `tb_cek_rasa`
--
ALTER TABLE `tb_cek_rasa`
  ADD PRIMARY KEY (`id_rasa`);

--
-- Indexes for table `tb_cek_warna`
--
ALTER TABLE `tb_cek_warna`
  ADD PRIMARY KEY (`id_warna`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cek_bau`
--
ALTER TABLE `tb_cek_bau`
  MODIFY `id_bau` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_cek_kualitas`
--
ALTER TABLE `tb_cek_kualitas`
  MODIFY `id_cek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_cek_rasa`
--
ALTER TABLE `tb_cek_rasa`
  MODIFY `id_rasa` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_cek_warna`
--
ALTER TABLE `tb_cek_warna`
  MODIFY `id_warna` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
