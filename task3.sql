-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2022 at 06:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task3`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`id`, `fname`, `lname`, `email`, `uname`, `pass`, `class`, `section`) VALUES
(3, 'Sampark', 'Jaiswal', 's@123', 'r@123', '12345', 'a', 'w'),
(12, 'Ankur', 'Singh', 'ar@123.com', 'aa@111', '11111', '8', 'A'),
(14, 'Vishl', 'Kuamr', 'vv@1234', 'v@12w', '22222', '6', 'G'),
(15, 'Vinay', 'Gupta', 'vvr@123', 'ry@12312', '44444', '9', 'C'),
(18, 'Vinay', 'Gupta', 'vvr@123', 'ry@12312444', '44444', '9', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `pid` int(11) NOT NULL,
  `faname` varchar(200) NOT NULL,
  `maname` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `std_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`pid`, `faname`, `maname`, `address`, `phone`, `std_id`) VALUES
(1, 'vinod', 'seema', 'dubari', '6392254020', 3),
(5, 'Rohan', 'Seema', 'Deoria', '7865432345', 12),
(7, 'Ramesh', 'Ritu', 'Mohali', '6543234567', 14),
(8, 'Ramu', 'Bandna', 'Delhi', '8745321234', 15),
(9, 'Ramu', 'Bandna', 'Delhi', '8745321234', 18);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sid` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `std_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `subject`, `std_id`) VALUES
(1, 'Hindi,English,Punjabi,Urdu,Tamil', 3),
(4, 'Hindi,English,Math,Urdu,Tamil', 12),
(6, 'Hindi,English,Math,Urdu,Tamil', 14),
(7, 'English,Math,Punjabi,Urdu,Tamil', 15),
(8, 'English,Math,Punjabi,Urdu,Tamil', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `personal_ibfk_1` (`std_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `subject_ibfk_1` (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic`
--
ALTER TABLE `basic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `basic` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `basic` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
