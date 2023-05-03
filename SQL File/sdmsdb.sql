-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 04:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
-- Table structure for table `cabinet`
--

CREATE TABLE `cabinet` (
  `id` int(100) NOT NULL,
  `cabinet_no` varchar(100) NOT NULL,
  `cabinet_name` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cabinet`
--

INSERT INTO `cabinet` (`id`, `cabinet_no`, `cabinet_name`, `capacity`) VALUES
(24, '101', 'IT3A', 100),
(26, '102', 'IT3B', 50),
(27, '105', 'CS3A', 50),
(28, '101', '1', 50);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studentno` varchar(255) NOT NULL,
  `studentName` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `cabinet` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` varchar(22) NOT NULL,
  `studentImage` varchar(255) DEFAULT NULL,
  `parentName` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studentno`, `studentName`, `age`, `course`, `year`, `status`, `cabinet`, `sex`, `email`, `contactno`, `studentImage`, `parentName`, `relation`, `occupation`, `postingDate`, `updationDate`) VALUES
(31, '2040148', 'Dinela, John Moren T.', 0, 'BSIT', '1A', 'Active', 'IT3A', 'Male', 'dinela.jm.bsinfotech@gmail.com', '2147483647', '1807F0E0-0E35-4D18-9181-4154093048CF.jpeg', 'Marilyn', 'Mother', 'tambay', '2023-02-11 11:56:06', NULL),
(32, '2040148', 'Dinela, John Moren T..', 22, 'BSCS', '3B', 'Active', 'CS3B', 'Male', 'dinelajohnmoren@gmail.com', '2147483647', '1807F0E0-0E35-4D18-9181-4154093048CF.jpeg', 'Marilyn', 'Mother', 'tambay', '2023-02-11 14:29:47', NULL),
(33, '2040148', 'Dinela, John Moren T.', 22, 'BSIT', '1A', 'Active', 'IT3B', 'Male', 'dinelajohnmoren@gmail.com', '2147483647', 'File_000 (1).jpeg', 'Marilyn', 'Mother', 'tambay', '2023-02-11 14:32:14', NULL),
(34, '2040148', 'Dinela, John Moren T.', 21, 'BSIT', '1A', 'Active', 'IT3B', 'Male', 'dinela.jm.bsinfotech@gmail.com', '12345', '1807F0E0-0E35-4D18-9181-4154093048CF.jpeg', 'Marylyn', 'Mother', '12', '2023-02-12 13:11:53', NULL),
(38, '2040148', 'Dinela, John Moren T.', 0, 'BSIT', '1A', 'Active', 'IT3A', 'Male', 'dinelajohnmoren@gmail.com', '+639760036382', '274832836_109173715041937_1011308038561082518_n.jpg', 'Marilyn', 'Mother', 'tambay', '2023-02-13 09:36:21', NULL),
(39, '2040148', 'Dinela, John Moren T.', 22, 'BSIT', '1A', 'Active', 'CS3A', 'Male', 'dinelajohnmoren@gmail.com', '+639760036382', '274832836_109173715041937_1011308038561082518_n.jpg', 'Marilyn', 'Select Relationship', 'tambay', '2023-02-13 09:55:49', NULL),
(40, '2040148', 'Dinela, John Moren T..', 22, 'BSIT', '1A', 'Active', 'IT3B', 'Male', 'dinela.jm.bsinfotech@gmail.com', '09172545319', 'logo.jfif', 'Marilyn', 'Select Relationship', 'tambay', '2023-02-13 14:57:48', NULL),
(41, '2040148', 'Dinela, John Moren T..', 22, 'BSCS', '3A', 'Active', 'CS3A', 'Male', 'dinelajohnmoren@gmail.com', '+639760036382', 'IMG_4394.JPG', 'Marilyn', 'Select Relationship', 'tambay', '2023-02-14 09:44:35', NULL);

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
  `mobile` varchar(11) NOT NULL,
  `userimage` varchar(255) NOT NULL DEFAULT 'but.jpg',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`, `lastname`, `username`, `email`, `sex`, `permission`, `password`, `mobile`, `userimage`, `status`) VALUES
(15, 'John', 'Smith', 'admin', 'john@gmail.com', 'Male', 'Super User', '81dc9bdb52d04dc20036dbd8313ed055', '770546590', 'face19.jpg', 1),
(20, 'Rihanna', 'Gloria ', 'gloria', 'gloria@gmail.com', 'Female', 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', '770546590', 'face23.jpg', 1),
(21, 'John Moren', 'Dinela', 'morendinela', 'dinela.jm.bsinfotech@gmail.com', 'male', 'admin', '12345', '09760036382', 'but.jpg', 1),
(22, 'John Moren', 'Dinela ', 'morendinela', 'dinela.jm.bsinfotech@gmail.com', 'Male', 'Admin', '827ccb0eea8a706c4c34a16891f84e7b', '09172545319', 'Picture-Dinela, John Moren.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `userEmail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `username`, `name`, `lastname`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(204, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-20 20:55:14', '20-07-2021 11:55:31 PM', 1),
(205, 'gloria', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2021-07-20 20:55:45', NULL, 0),
(207, 'gloria', 'Rihanna', 'Gloria ', 'gloria@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-20 20:57:48', '20-07-2021 11:57:52 PM', 1),
(208, 'mike', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2021-07-20 20:58:17', NULL, 0),
(209, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2021-07-20 20:58:26', '31-01-2023 12:41:21 PM', 1),
(210, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-01-31 09:42:16', '31-01-2023 01:39:13 PM', 1),
(211, 'morendinela', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2023-01-31 10:44:38', NULL, 0),
(212, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-01-31 10:45:27', '31-01-2023 01:46:43 PM', 1),
(213, 'morendinela', 'John Moren', 'Dinela', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-01-31 10:46:50', '31-01-2023 01:55:24 PM', 1),
(214, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-01-31 10:52:22', NULL, 1),
(215, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-01-31 10:52:54', '31-01-2023 01:54:00 PM', 1),
(216, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-01-31 10:54:08', '31-01-2023 02:00:27 PM', 1),
(217, 'morendinela', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2023-01-31 11:00:39', NULL, 0),
(218, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-01-31 11:00:47', '31-01-2023 02:22:15 PM', 1),
(219, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-01-31 11:03:25', '31-01-2023 02:17:13 PM', 1),
(220, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-01-31 11:22:58', '31-01-2023 02:38:53 PM', 1),
(221, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-10 03:43:29', '10-02-2023 10:05:19 AM', 1),
(222, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-10 09:15:45', NULL, 1),
(223, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-10 23:07:42', NULL, 1),
(224, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-11 06:11:37', NULL, 1),
(225, 'morendinela', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2023-02-12 12:18:51', NULL, 0),
(226, 'morendinela', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2023-02-12 12:18:57', NULL, 0),
(227, 'morendinela', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2023-02-12 12:19:05', NULL, 0),
(228, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-12 12:19:26', NULL, 1),
(229, 'admin', 'John', 'Smith', 'john@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-12 13:10:15', NULL, 1),
(230, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-12 16:04:59', NULL, 1),
(231, 'morendinela', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2023-02-13 07:00:55', NULL, 0),
(232, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-13 07:01:02', NULL, 1),
(233, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-14 09:06:10', NULL, 1),
(234, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-14 10:19:36', NULL, 1),
(235, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-14 16:19:46', NULL, 1),
(236, 'morendinela', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2023-02-16 01:35:07', NULL, 0),
(237, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-16 01:35:14', '16-02-2023 05:45:59 AM', 1),
(238, 'morendinela', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2023-02-16 09:25:15', NULL, 0),
(239, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-16 09:25:25', NULL, 1),
(240, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-17 09:14:59', NULL, 1),
(241, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-21 14:25:17', NULL, 1),
(242, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-04-21 14:48:20', NULL, 1),
(243, 'morendinela', 'Potential Hacker', NULL, 'Not registered in system', 0x3a3a3100000000000000000000000000, '2023-05-03 02:01:01', NULL, 0),
(244, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3a3a3100000000000000000000000000, '2023-05-03 02:01:07', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabinet`
--
ALTER TABLE `cabinet`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cabinet`
--
ALTER TABLE `cabinet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
