-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 05:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fullname`) VALUES
(4, 'admin', 'admin', 'Moh. Setiawan Modeong');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `br_id` int(6) NOT NULL,
  `br_nm` varchar(50) NOT NULL,
  `br_hrg` int(10) NOT NULL,
  `ket` varchar(250) NOT NULL,
  `br_sts` varchar(2) NOT NULL,
  `br_gbr` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`br_id`, `br_nm`, `br_hrg`, `ket`, `br_sts`, `br_gbr`) VALUES
(1, 'Kerupuk', 12000, 'kerpik balado', 'Y', '4.png'),
(2, 'Karupuak taleh', 13000, 'berasal dari talas', 'Y', '7.png'),
(9, 'Lalapan', 20000, 'enak', 'Y', '22.png');

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `br_id` int(6) NOT NULL,
  `br_nm` varchar(50) NOT NULL,
  `br_hrg` int(10) NOT NULL,
  `br_stok` int(9) NOT NULL,
  `ket` varchar(250) NOT NULL,
  `br_sts` varchar(2) NOT NULL,
  `br_gbr` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`br_id`, `br_nm`, `br_hrg`, `br_stok`, `ket`, `br_sts`, `br_gbr`) VALUES
(2, 'Kaos Skaters', 65000, 24, 'Bahan Cotton Combed 24s built up', 'Y', '9.jpg'),
(3, 'Kaos Emwe', 80000, 30, 'Bahan cvc bandung build up tanpa jahitan samping', 'Y', '6.jpg'),
(5, 'Kaos Man City', 60000, 30, 'Bahan Cotton Combed 20s Jahitan samping', 'Y', '2.jpg'),
(8, 'Kaos Feed Me', 65000, 12, 'Bahan Cotton Combed 24s built up', 'Y', '3.jpg'),
(9, 'Kaos Art Hitam ', 100000, 20, 'Bahan cvc bandung build up tanpa jahitan samping ', 'Y', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `kode_user` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `level` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kode_user`, `nama`, `username`, `password`, `pass`, `level`, `img`) VALUES
('U004', 'Moh. Setiawan Modeong', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Administrator', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `alamat` text NOT NULL,
  `pos` int(6) NOT NULL,
  `kota` varchar(60) NOT NULL,
  `hp` int(12) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `nama_rek` varchar(60) NOT NULL,
  `bank` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama`, `email`, `alamat`, `pos`, `kota`, `hp`, `no_rek`, `nama_rek`, `bank`) VALUES
(1, 'Moh. Setiawan Modeong', 'setiawan.modeong99@gmail.com', 'buyat', 95872, 'Manado ', 2147483647, '93849234', 'BRI', 'BRI'),
(2, 'Uyo Mamonto', 'uyoboltim@gmail.com', 'Kotabunan', 98752, 'Boltim', 2147483647, '988898988778', 'Uyo Span', 'BNI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kode_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `br_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `br_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
