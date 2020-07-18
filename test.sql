-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 05:20 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_request`
--

CREATE TABLE `file_request` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `filename` text NOT NULL,
  `key_GEN` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_request`
--

INSERT INTO `file_request` (`id`, `userid`, `filename`, `key_GEN`, `status`) VALUES
(4, 1, '2', 'NjI1MDM=', 3),
(5, 5, '1', 'MTk3NDU=', 3),
(6, 6, '4', 'MTkzNQ==', 3),
(7, 6, '5', 'ODc5Njk=', 3),
(8, 2, '1', 'MjMwMzg=', 3),
(9, 2, '3', 'ODY1Nw==', 3),
(10, 2, '1', 'NzI2MDc=', 3),
(11, 7, '4', 'NjIxMjI=', 3),
(12, 8, '1', 'OTQwNjc=', 3),
(13, 10, '6', 'MTAyNg==', 3),
(14, 10, '4', 'NDE5Njc=', 3),
(15, 10, '6', 'NzAwNzA=', 3),
(16, 19, '4', 'NzY3ODQ=', 3),
(17, 18, '3', 'ODkxMTY=', 3);

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`id`, `name`, `file`) VALUES
(1, 'digital art', '52724-Digital art.docx'),
(3, 'Identity based remote data', '64337-Identity-based Remote Data.rar'),
(4, 'wearable computer document', '5873-WEARABLE COMPUTER.docx'),
(5, 'wearable computer pdf', '32638-wearable computer research.pdf'),
(6, 'login form', '26197-Screenshot (12).png');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` text NOT NULL,
  `role` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `gender`, `role`, `state`, `country`, `status`) VALUES
(1, 'varalakshmi', 'varalakshmi@gmail.com', '1234', 'Female', 'Admin', 'Andhra Pradesh', 'india', 0),
(2, 'lakshmi', 'lakshmi@gmail.com', '123', 'Female', 'User', 'Andhra Pradesh', 'india', 3),
(3, 'ajay', 'ajay@gmail.com', 'ajay', 'Male', 'attribute_authority', 'Andhra Pradesh', 'india', 1),
(4, 'user', 'user@gmail.com', 'user', 'Male', 'User', 'Andhra Pradesh', 'india', 3),
(5, 'sushma', 'sushma.cse2@gmail.com', 'sushma', 'Female', 'User', 'ANDHRA PRADESH', 'india', 3),
(6, 'Ajay teja', 'ajayteja@gmail.com', 'ajay', 'Male', 'User', 'Andrapradesh', 'India', 3),
(7, 'samyuktha', 'samyuktha@gmail.com', 'samyuktha', 'Female', 'User', 'Andhra Pradesh', 'India', 3),
(8, 'madhu', 'madhupriya@gmail.com', 'madhu', 'Female', 'User', 'ap', 'india', 3),
(9, 'admin', 'admin@gmail.com', '1234', 'Male', 'User', 'ap', 'india', 0),
(10, 'janu', 'janu@gmail.com', '123', 'Female', 'User', 'Andhra Pradesh', 'india', 0),
(18, 'siva', 'siva@gmail.com', 'siva', 'Male', 'User', 'ap', 'india', 3),
(19, 'cccc', 'cccc@gmail.com', '123', 'Male', 'User', 'ap', 'ind', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_request`
--
ALTER TABLE `file_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_request`
--
ALTER TABLE `file_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
