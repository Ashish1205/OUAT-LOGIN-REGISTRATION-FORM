-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 03:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ouat`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(30) NOT NULL,
  `department` varchar(100) NOT NULL,
  `passing_year` int(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `department`, `passing_year`, `password`, `gender`) VALUES
(1, 'Ganapati', 'Majhi', 'majhi@gmail.com', 801884051, 'Arts', 2020, 'majhi123', 'male'),
(2, 'hhkh', 'kkhkh ', 'hkjhn@gmail.com', 0, 'Sanskrit', 2020, 'hkjhkjhkj', 'male'),
(3, 'hkjhkjhk', 'kkhkhh ', 'ouoou@gmail.com', 2147483647, 'Sanskrit', 2020, 'khkhkhkhkh', 'male'),
(4, 'Ashish', 'Mhjgg ', 'asis@gmail.com', 2147483647, 'Law', 2020, 'abcdef', 'male'),
(5, 'Nimesh', 'Abc ', 'Abcs@gmail.com', 2147483647, 'History', 2020, '808909', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
