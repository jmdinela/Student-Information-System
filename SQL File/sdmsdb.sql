-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 10:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `studentno` varchar(255) NOT NULL,
  `studentName` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `stream` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` int(10) DEFAULT NULL,
  `nextphone` int(10) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `studentImage` varchar(255) DEFAULT NULL,
  `parentName` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `class`, `studentno`, `studentName`, `age`, `stream`, `gender`, `email`, `contactno`, `nextphone`, `country`, `district`, `state`, `village`, `studentImage`, `parentName`, `relation`, `occupation`, `postingDate`, `updationDate`) VALUES
(10, 'S3', 'U0001', 'Betty Gloria', 15, 'West', 'Female', 'gloria@gmail.com', 770546590, 757537271, 'United States', 'Kenburg', 'United State', 'Andrea', 'face5.jpg', 'Ketty Perry', 'Mother', 'Doctor', '2021-01-19 13:22:01', NULL),
(16, 'S4', 'U0002', 'Harry Morgan', 16, 'East', 'Male', 'morgan@gmail.com', 770546590, 775456789, 'Chaina', 'Hongkong', 'Kongoh', 'Kongberry', 'face22.jpg', 'Agaba James', 'Father', 'Lecture', '2021-05-05 19:58:04', NULL),
(20, 'S6', 'U0003', 'George Williams ', 20, 'West', 'Male', 'williams@gmail.com', 770546590, 770546598, 'Uganda', 'Kampala', 'Kampala', 'Muyenga', 'face3.jpg', 'Toney  Rushford', 'Father', 'Engineer', '2021-07-06 12:58:19', NULL),
(21, 'S4', 'U004', 'Mickie Dorothy ', 17, 'West', 'Female', 'gerald@gmail.com', 770546590, 757537271, 'Uganda', 'Kampala', 'Kampala', 'Muyenga', 'face26.jpg', 'Arinaitwe Gerald', 'Father', 'Engineer', '2021-07-20 20:37:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `userimage` varchar(255) NOT NULL DEFAULT 'but.jpg',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`, `lastname`, `username`, `email`, `sex`, `permission`, `password`, `mobile`, `userimage`, `status`) VALUES
(15, 'John', 'Smith', 'admin', 'john@gmail.com', 'Male', 'Super User', '81dc9bdb52d04dc20036dbd8313ed055', 770546590, 'face19.jpg', 1),
(20, 'Rihanna', 'Gloria ', 'gloria', 'gloria@gmail.com', 'Female', 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', 770546590, 'face23.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `userEmail` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `username`, `name`, `lastname`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(204, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-20 20:55:14', '20-07-2021 11:55:31 PM', 1),
(205, 'gloria', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2021-07-20 20:55:45', NULL, 0),
(207, 'gloria', 'Rihanna', 'Gloria ', 'gloria@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-20 20:57:48', '20-07-2021 11:57:52 PM', 1),
(208, 'mike', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2021-07-20 20:58:17', NULL, 0),
(209, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-20 20:58:26', '20-07-2021 11:59:20 PM', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
