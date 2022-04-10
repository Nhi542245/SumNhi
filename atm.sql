-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 06:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_banking`
--

CREATE TABLE `account_banking` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `code_card` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_balance` int(10) NOT NULL DEFAULT 0,
  `SDT` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_banking`
--

INSERT INTO `account_banking` (`id`, `username`, `code_card`, `password`, `account_balance`, `SDT`, `name`) VALUES
(1, 'thien', '1014355102', '01a384f233a45b8a055e628187b26e02', 10000000, '0585253470', 'Nguyễn Đăng Thiên'),
(2, 'hoc', '1014355103', '01a384f233a45b8a055e628187b26e02', 10000000, '0585253470', 'Phạm Hoàng Học');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`) VALUES
(1, 'Rút tiền'),
(2, 'Nạp tiền'),
(3, 'Chuyển tiền');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id_session` int(10) NOT NULL,
  `id_customer` varchar(10) NOT NULL,
  `id_service` int(10) NOT NULL,
  `id_opponent` varchar(10) DEFAULT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id_session`, `id_customer`, `id_service`, `id_opponent`, `money`) VALUES
(1, 'thien', 3, 'hoc', 340000),
(2, 'thien', 2, NULL, 5000),
(3, 'thien', 3, 'hoc', 500000),
(4, 'hoc', 2, NULL, 500000),
(5, 'hoc', 2, NULL, 500000),
(6, 'hoc', 3, 'thien', 500000),
(7, 'hoc', 3, 'thien', 500000),
(8, 'hoc', 1, NULL, 500000),
(9, 'thien', 2, NULL, 5670000),
(10, 'hoc', 3, 'thien', 560000),
(11, 'thien', 1, NULL, 560000),
(12, 'thien', 1, NULL, 560000),
(13, 'thien', 1, NULL, 560000),
(14, 'thien', 1, NULL, 360000),
(15, 'thien', 1, NULL, 360000),
(16, 'thien', 1, NULL, 770000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_banking`
--
ALTER TABLE `account_banking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id_session`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_banking`
--
ALTER TABLE `account_banking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id_session` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
