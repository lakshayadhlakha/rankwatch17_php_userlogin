-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 09:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rwdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(300) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `password`, `contact`, `age`, `gender`, `address`, `country`, `state`) VALUES
('aditya', 'aditya@gmail.com', 'efw', '1802660032', 12, 'male', 'wefq', 'India', 'Haryana'),
('komal', 'komal@gmail.com', 'komal', '45323', 21, 'female', 'verv', 'India', 'Haryana'),
('laksh', 'laksh@gmail.com', 'adsf', '4512', 12, 'male', 'fvsaefv', 'India', 'Lakshadweep'),
('Lakshay adhlakha', 'lakshayadh239@gmail.com', 'lakshay', '+918930130360', 43, 'male', 'H.No- 914 huda sector-12\r\nnear d.a.v public school', 'India', 'Haryana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
