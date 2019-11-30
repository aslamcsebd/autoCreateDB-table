-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 01:39 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imtiaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `apple`
--

CREATE TABLE `apple` (
  `id` int(11) NOT NULL,
  `first` varchar(20) DEFAULT NULL,
  `second` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banana`
--

CREATE TABLE `banana` (
  `id` int(11) NOT NULL,
  `first` varchar(20) DEFAULT NULL,
  `second` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coconut`
--

CREATE TABLE `coconut` (
  `id` int(11) NOT NULL,
  `first` varchar(20) DEFAULT NULL,
  `second` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE `item_list` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`id`, `item_name`) VALUES
(9, 'Apple'),
(13, 'Apple'),
(14, 'Banana'),
(15, 'Coconut');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apple`
--
ALTER TABLE `apple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banana`
--
ALTER TABLE `banana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coconut`
--
ALTER TABLE `coconut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_list`
--
ALTER TABLE `item_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apple`
--
ALTER TABLE `apple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banana`
--
ALTER TABLE `banana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coconut`
--
ALTER TABLE `coconut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_list`
--
ALTER TABLE `item_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
