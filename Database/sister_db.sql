-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2016 at 07:05 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sister_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `atk`
--

CREATE TABLE `atk` (
  `aid` varchar(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `stok_min` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atk`
--

INSERT INTO `atk` (`aid`, `jenis`, `stok`, `stok_min`) VALUES
('ATK1', 'Spidol Hitam', 34, 15),
('ATK2', 'Kertas HVS', 393, 500),
('ATK3', 'Gunting', 19, 5),
('ATK4', 'Ballpoint', 30, 10),
('ATK5', 'Spidol Merah', 12, 10),
('ATK6', 'Pensil', 5, 5),
('ATK7', 'Penghapus Whiteboard', 12, 5),
('ATK8', 'Kertas Folio', 200, 100);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `b_uid` varchar(11) NOT NULL,
  `b_aid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `jumlah`, `tanggal`, `b_uid`, `b_aid`) VALUES
('Book1', 5, '2016-02-20', 'User4', 'ATK6');

-- --------------------------------------------------------

--
-- Table structure for table `pemakaian`
--

CREATE TABLE `pemakaian` (
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `p_uid` varchar(11) NOT NULL,
  `p_aid` varchar(11) NOT NULL,
  `pid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemakaian`
--

INSERT INTO `pemakaian` (`jumlah`, `tanggal`, `p_uid`, `p_aid`, `pid`) VALUES
(15, '2016-02-16', 'User1', 'ATK2', 'Pakai1'),
(1, '2016-02-16', 'User1', 'ATK3', 'Pakai2'),
(3, '2016-02-10', 'User2', 'ATK5', 'Pakai3'),
(10, '2016-02-16', 'User3', 'ATK5', 'Pakai4'),
(2, '2016-02-15', 'User1', 'ATK2', 'Pakai5'),
(1, '2016-02-16', 'User4', 'ATK1', 'Pakai6'),
(3, '2016-02-17', 'User2', 'ATK7', 'Pakai7');

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE `pengadaan` (
  `aid` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_datang` date NOT NULL,
  `a_sid` varchar(11) NOT NULL,
  `a_aid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengadaan`
--

INSERT INTO `pengadaan` (`aid`, `jumlah`, `tgl_pesan`, `tgl_datang`, `a_sid`, `a_aid`) VALUES
('Pesan1', 5, '2016-01-01', '2016-02-01', 'Supplier1', 'ATK1');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sid` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `perusahaan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sid`, `nama`, `perusahaan`) VALUES
('Supplier1', 'X', 'PaperOne'),
('Supplier2', 'Y', 'Snowman');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `nama`) VALUES
('User1', 'Raka'),
('User2', 'Nitho'),
('User3', 'Edwin'),
('User4', 'Levanji');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atk`
--
ALTER TABLE `atk`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `uid` (`b_uid`,`b_aid`),
  ADD KEY `aid` (`b_aid`);

--
-- Indexes for table `pemakaian`
--
ALTER TABLE `pemakaian`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `uid` (`p_uid`,`p_aid`);

--
-- Indexes for table `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `a_sid` (`a_sid`,`a_aid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
