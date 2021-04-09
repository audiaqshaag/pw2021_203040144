-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 10:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040144`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skate`
--

CREATE TABLE `tbl_skate` (
  `id_barang` int(50) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `harga` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skate`
--

INSERT INTO `tbl_skate` (`id_barang`, `foto`, `nama`, `brand`, `kategori`, `harga`) VALUES
(1, 'BakerMerah.jpg', 'BAKER TEAM BRAND LOGO 8.475\" DECK (BLACK)', 'Baker', 'deck', 54),
(2, 'flipBlack.jpg', 'FLIP SCRIPT 8.25\" DECK (BLACK)', 'Flip', 'Deck', 39),
(3, '139665-0-Independent-149Mid.jpg', 'INDEPENDENT 149 MID TRUCK (POLISHED)', 'Independent', 'Truck', 37),
(4, '134095-0-Thunder-161High.jpg', 'THUNDER 161 HIGH TRUCK (POLISHED)', 'Thunder', 'Truck', 34),
(5, '104554-0-Spitfire-FormulaFourConical252mm.jpg', 'SPITFIRE FORMULA FOUR CONICAL WHEELS (WHITE YELLOW) 52MM 99A 4 PACK', 'Spitfire', 'Wheels', 59),
(6, '135015-0-Bones-STFV5SeriesVI.jpg', 'BONES STF V5 SERIES VI WHEELS (WHITE RED) 54MM 103A 4 PACK', 'Bones', 'Wheels', 54),
(7, 'flipKuning.jpg', 'FLIP SCRIPT 8.25\" DECK (YELLOW)', 'Flip', 'Deck', 54);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_skate`
--
ALTER TABLE `tbl_skate`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_skate`
--
ALTER TABLE `tbl_skate`
  MODIFY `id_barang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
