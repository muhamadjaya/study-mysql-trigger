-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 11:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `ID` varchar(6) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Saldo` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`ID`, `Nama`, `Saldo`) VALUES
('ID-1', 'Budi', '50000'),
('ID-2', 'Dudi', '500000'),
('ID-3', 'Aldos', '900000'),
('ID-4', 'Zilong GGWP', '700000'),
('ID-5', 'Jaya', '1800000');

--
-- Triggers `saldo`
--
DELIMITER $$
CREATE TRIGGER `delete_transaksi` BEFORE DELETE ON `saldo` FOR EACH ROW BEGIN
  DELETE FROM transaksi WHERE ID = OLD.ID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID` varchar(6) NOT NULL,
  `Nominal` decimal(10,0) NOT NULL,
  `Jenis` varchar(6) NOT NULL,
  `Tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID`, `Nominal`, `Jenis`, `Tanggal`) VALUES
('ID-1', '100000', 'Debet', '2018-09-10 16:00:00'),
('ID-2', '500000', 'Kredit', '2018-09-11 17:00:00'),
('ID-1', '50000', 'Kredit', '2018-09-11 17:00:00'),
('ID-3', '100000', 'Kredit', '2023-05-26 15:31:00');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `update_saldo` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
  IF NEW.Jenis = 'Debet' THEN
    UPDATE saldo SET Saldo = Saldo + NEW.Nominal WHERE ID = NEW.ID;
  ELSEIF NEW.Jenis = 'Kredit' THEN
    UPDATE saldo SET Saldo = Saldo - NEW.Nominal WHERE ID = NEW.ID;
  END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_saldo2` AFTER UPDATE ON `transaksi` FOR EACH ROW BEGIN
  IF NEW.Jenis = 'Debet' THEN
    UPDATE saldo SET Saldo = Saldo + NEW.Nominal WHERE ID = NEW.ID;
  ELSEIF NEW.Jenis = 'Kredit' THEN
    UPDATE saldo SET Saldo = Saldo - NEW.Nominal WHERE ID = NEW.ID;
  END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
