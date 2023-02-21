-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: fdb28.awardspace.net
-- Generation Time: Feb 21, 2023 at 10:26 AM
-- Server version: 5.7.40-log
-- PHP Version: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4254088_studentinfo`
--
CREATE DATABASE IF NOT EXISTS `4254088_studentinfo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `4254088_studentinfo`;

-- --------------------------------------------------------

--
-- Table structure for table `cabinet`
--

CREATE TABLE `cabinet` (
  `id` int(100) NOT NULL,
  `cabinet_no` varchar(100) NOT NULL,
  `cabinet_name` varchar(100) NOT NULL,
  `capacity` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabinet`
--

INSERT INTO `cabinet` (`id`, `cabinet_no`, `cabinet_name`, `capacity`) VALUES
(1, '101', '3A-1', 50),
(2, '102', '3B-1', 50),
(3, '103', '3B-2', 50),
(4, '104', '3C-2', 50),
(5, '105', ' 4A-1', 50);

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
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `cabinet` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` int(10) DEFAULT NULL,
  `studentImage` varchar(255) DEFAULT NULL,
  `parentName` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `class`, `studentno`, `studentName`, `age`, `course`, `year`, `status`, `cabinet`, `gender`, `email`, `contactno`, `studentImage`, `parentName`, `relation`, `occupation`, `postingDate`, `updationDate`) VALUES
(26, NULL, '2040148', 'Dinela, John Moren T.', 22, 'BSIT', '3A', 'Active', '3A-1', 'Male', 'dinela.jm.bsinfotech@gmail.com', 917254539, '54DE0D6D-5B3E-4CB3-97FE-B2C408FC3831.jpeg', 'Marilyne Dinela', 'Mother', 'tAMBAY', '2023-01-31 10:59:27', NULL),
(27, NULL, '204-0351', 'Vargas, Marylyne L.', 22, 'BSIT', '3A', 'Active', '3A-1', 'Female', 'vargas.m.bsinfotech@gmail.com', 9204835, 'id pic.jpg', 'Vargas, Ma .Amparo L.', 'Mother', 'none', '2023-02-01 06:10:27', NULL),
(29, NULL, '202-2002', 'Kim, Seon Woo', 21, 'BSCS', '3B', 'Dropout', '3B-1', 'Male', 'sunoo@mail.com', 957439659, '33d125086066ae461ba11224e07f9bfc.jpg', 'Kim, Suwon', 'Mother', 'Manager', '2023-02-01 06:41:47', NULL),
(30, NULL, '202-2003', 'Kang, Tae Hyun', 21, 'BSCS', '3B', 'Inactive', '3B-2', 'Male', 'taetae@mail.com', 306734863, '8e16de1cf051417c41e5f05f709083ca.jpg', 'Kang, Terry', 'Father', 'none', '2023-02-01 07:02:10', NULL),
(31, NULL, '202-1999', 'Choi, Yeon Jun', 23, 'BSIT', '3A', 'Dropout', '3A-1', 'Male', 'choiee@mail.com', 2043025748, '7cb0811f4d4fffffcb69f4c45e7d4c77.jpg', 'Choi, Yura', 'Mother', 'Seller', '2023-02-01 07:04:13', NULL),
(32, NULL, '202-2004', 'Manoban, Lalisa ', 22, 'BSCS', '3C', 'Transferee', '3C-2', 'Female', 'lisalisa@mail.com', 39534895, '91536d85a0ccc4ab21c7ce4d690e81a7.jpg', 'Kim, Jennie', 'Mother', 'boss', '2023-02-01 07:10:52', NULL),
(33, NULL, '202-2005', 'Park, Roseanne ', 22, 'BSCS', '3C', 'Transferee', '3C-2', 'Female', 'roseee@mail.com', 2035784395, '3e8503c5aa9d73dc16f7c3f77d885438.jpg', 'Kim, Jennie', 'Mother', 'boss', '2023-02-01 07:12:00', NULL),
(34, NULL, '202-2006', 'Kim, Jennie', 22, 'BSCS', '3C', 'Transferee', '3C-2', 'Female', 'jenjen@mail.com', 3597435, '4d23efedb923e6677e0620b055f1fe46.jpg', 'Kim, Jisoo', 'Mother', 'boss', '2023-02-01 07:12:58', NULL),
(35, NULL, '202-2007', 'Kim, Jisoo', 22, 'BSCS', '3C', 'Transferee', '3C-2', 'Female', 'jiji@mail.com', 5974396, '007cff9224c56ba60fd51d6ce0624ddf.jpg', 'Kim, Jennie', 'Mother', 'Model', '2023-02-01 07:17:28', NULL),
(38, NULL, '202-2001', 'Kim, Seokjin', 24, 'BSIT', '3A', 'Graduate', '4A-1', 'Male', 'kimseokjin@gmail.com', 359658658, 'c970c85260fc850f72b8f6be98c0e8d1.jpg', 'Kim, Namjoon', 'Father', 'Artist', '2023-02-08 06:39:08', NULL),
(39, NULL, '202-2001', 'Jeon, Jungkook', 23, 'BSIT', '4A', 'Graduate', '4A-1', 'Male', 'kookie@mail.com', 2147483647, '295c3abdd12b5144a814b2041929388b.jpg', 'Kim, Namjoon', 'Father', 'Painter', '2023-02-08 06:50:10', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`, `lastname`, `username`, `email`, `sex`, `permission`, `password`, `mobile`, `userimage`, `status`) VALUES
(15, 'John', 'Moren ', 'admin', 'john@gmail.com', 'Male', 'Super User', '81dc9bdb52d04dc20036dbd8313ed055', '00770546590', 'IMG_4394.JPG', 1),
(20, 'Sample', 'User', 'user', 'user@gmail.com', 'Female', 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', '770546590', 'face23.jpg', 1),
(21, 'John Moren', 'Dinela', 'morendinela', 'dinela.jm.bsinfotech@gmail.com', 'male', 'admin', '12345', '09760036382', 'but.jpg', 1),
(22, 'John Moren', 'Dinela ', 'morendinela', 'dinela.jm.bsinfotech@gmail.com', 'Male', 'Admin', '827ccb0eea8a706c4c34a16891f84e7b', '09172545319', '1447DDC2-3675-420B-97AB-2460D2726DF0.jpeg', 1),
(23, 'JameS', 'Gulles', 'James', 'james@gmail.com', 'Male', 'Admin', '7c6f5bdc16b3748b481fb5ea98bd4ace', '78287273737', 'jm.jpg', 1),
(24, 'Marylyne', 'Vargas', 'Mary Vargas', 'vargas.m.bsinfotech@gmail.com', 'Female', 'Admin', '510df334876eff9522f030cc7c087e95', '0909090909', 'Logo2.png', 1),
(25, 'Neil Joshua', 'Gime', 'Gime', 'Gemi@gmail.com', 'Male', 'Admin', '827ccb0eea8a706c4c34a16891f84e7b', '09292560869', 'IDPhoto_20210820_153441.jpg', 1),
(26, 'Juliet', 'Estrada', 'Hulyet', 'estrada.j.bsinfotech@gmail.com', 'Female', 'Admin', '7f5780ff97766ec9595c4ec79297e7c8', '09123456789', '20230201_011815_3.png', 1);

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
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `username`, `name`, `lastname`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(340, 'Mary Vargas', 'Marylyne', 'Vargas', 'vargas.m.bsinfotech@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-08 06:35:07', NULL, 1),
(341, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-08 06:38:03', NULL, 1),
(342, 'Gime', 'Neil Joshua', 'Gime', 'Gemi@gmail.com', 0x3133362e3135382e31302e3133320000, '2023-02-08 06:52:05', NULL, 1),
(343, 'James', 'James', 'Gulles', 'james@gmail.com', 0x3133362e3135382e35392e3132380000, '2023-02-08 06:52:05', NULL, 1),
(344, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e34382e3233380000, '2023-02-08 06:53:34', NULL, 1),
(345, 'Hulyet', 'Juliet', 'Estrada', 'estrada.j.bsinfotech@gmail.com', 0x3131302e35342e3135312e3434000000, '2023-02-08 06:53:45', NULL, 1),
(346, 'admin', 'Potential Hacker', NULL, 'Not registered in system', 0x3133362e3135382e35392e3000000000, '2023-02-08 06:54:55', NULL, 0),
(347, 'Admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e33372e3231340000, '2023-02-08 06:54:56', NULL, 1),
(348, 'admin', 'Potential Hacker', NULL, 'Not registered in system', 0x3133362e3135382e35392e3000000000, '2023-02-08 06:55:04', NULL, 0),
(349, 'Mary Vargas', 'Marylyne', 'Vargas', 'vargas.m.bsinfotech@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-08 07:04:41', NULL, 1),
(350, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-08 07:04:50', NULL, 1),
(351, 'Mary Vargas', 'Marylyne', 'Vargas', 'vargas.m.bsinfotech@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-09 14:23:55', NULL, 1),
(352, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-10 05:17:20', NULL, 1),
(353, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-10 06:07:47', NULL, 1),
(354, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-10 06:07:48', NULL, 1),
(355, 'James', 'James', 'Gulles', 'james@gmail.com', 0x3133362e3135382e35392e3132380000, '2023-02-10 08:44:45', NULL, 1),
(356, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-10 09:08:56', NULL, 1),
(357, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-11 00:52:23', NULL, 1),
(358, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-11 01:01:13', NULL, 1),
(359, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-11 01:01:14', NULL, 1),
(360, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-11 06:26:21', NULL, 1),
(361, 'James', 'JameS', 'Gulles', 'james@gmail.com', 0x3133362e3135382e35392e3132380000, '2023-02-11 06:31:24', NULL, 1),
(362, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-11 06:39:36', NULL, 1),
(363, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-11 06:43:44', NULL, 1),
(364, 'Mary Vargas', 'Marylyne', 'Vargas', 'vargas.m.bsinfotech@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-11 10:03:59', NULL, 1),
(365, 'Mary Vargas', 'Marylyne', 'Vargas', 'vargas.m.bsinfotech@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-11 10:07:29', NULL, 1),
(366, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3131302e35342e3135312e3434000000, '2023-02-11 10:53:08', NULL, 1),
(367, 'admin ', 'John', 'Moren', 'john@gmail.com', 0x3131302e35342e3135312e3434000000, '2023-02-11 10:58:02', NULL, 1),
(368, 'admin', 'Potential Hacker', NULL, 'Not registered in system', 0x3130352e3131322e3132312e36370000, '2023-02-11 17:29:53', NULL, 0),
(369, 'admin', 'Potential Hacker', NULL, 'Not registered in system', 0x3130352e3131322e3132312e36370000, '2023-02-11 17:30:58', NULL, 0),
(370, 'admin', 'Potential Hacker', NULL, 'Not registered in system', 0x3130352e3131322e3132312e36370000, '2023-02-11 17:31:13', NULL, 0),
(371, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-12 13:13:36', NULL, 1),
(372, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-13 07:12:43', NULL, 1),
(373, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-13 07:12:44', NULL, 1),
(374, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e31302e3133320000, '2023-02-14 04:52:43', NULL, 1),
(375, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e31302e3133320000, '2023-02-14 04:54:08', NULL, 1),
(376, 'morendinela', 'Potential Hacker', NULL, 'Not registered in system', 0x3131322e3230312e3137312e35320000, '2023-02-16 03:42:08', NULL, 0),
(377, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-16 03:42:19', NULL, 1),
(378, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-16 03:56:32', NULL, 1),
(379, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-16 04:00:56', NULL, 1),
(380, 'James', 'JameS', 'Gulles', 'james@gmail.com', 0x3133362e3135382e35392e3132380000, '2023-02-16 04:03:21', NULL, 1),
(381, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-16 04:10:20', NULL, 1),
(382, 'James', 'JameS', 'Gulles', 'james@gmail.com', 0x3133362e3135382e35392e3132380000, '2023-02-16 04:10:24', NULL, 1),
(383, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e31302e3133320000, '2023-02-16 04:16:08', NULL, 1),
(384, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e35392e3232300000, '2023-02-16 04:16:38', NULL, 1),
(385, 'Mary Vargas', 'Marylyne', 'Vargas', 'vargas.m.bsinfotech@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-16 04:30:51', NULL, 1),
(386, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e31302e3133320000, '2023-02-16 04:35:15', NULL, 1),
(387, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e31302e3133320000, '2023-02-16 08:05:43', NULL, 1),
(388, 'Mary Vargas', 'Marylyne', 'Vargas', 'vargas.m.bsinfotech@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-16 08:18:08', NULL, 1),
(389, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-16 09:28:41', NULL, 1),
(390, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-16 09:36:42', NULL, 1),
(391, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-16 12:46:43', NULL, 1),
(392, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-16 12:46:44', NULL, 1),
(393, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-16 12:54:05', NULL, 1),
(394, 'admin', 'Potential Hacker', NULL, 'Not registered in system', 0x34312e3234322e35372e313036000000, '2023-02-16 13:14:10', NULL, 0),
(395, 'admin', 'Potential Hacker', NULL, 'Not registered in system', 0x34312e3234322e35372e313036000000, '2023-02-16 13:45:17', NULL, 0),
(396, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-16 13:58:36', NULL, 1),
(397, 'morendinela', 'John Moren', 'Dinela ', 'dinela.jm.bsinfotech@gmail.com', 0x3131322e3230312e3137312e35320000, '2023-02-16 18:07:42', NULL, 1),
(398, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-17 11:44:47', NULL, 1),
(399, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-18 08:46:56', NULL, 1),
(400, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e35392e3130300000, '2023-02-18 11:54:48', NULL, 1),
(401, 'Admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e34382e3233380000, '2023-02-20 01:04:50', NULL, 1),
(402, 'Admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e34382e3233380000, '2023-02-20 02:28:24', NULL, 1),
(403, 'Admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e34382e3233380000, '2023-02-20 02:31:50', NULL, 1),
(404, 'admin', 'Potential Hacker', NULL, 'Not registered in system', 0x3133362e3135382e35392e3130300000, '2023-02-20 07:35:02', NULL, 0),
(405, 'admin', 'John', 'Moren', 'john@gmail.com', 0x3133362e3135382e35392e3130300000, '2023-02-20 07:35:18', NULL, 1),
(406, 'admin', 'John', 'Moren ', 'john@gmail.com', 0x3133362e3135382e33372e3231340000, '2023-02-21 03:29:45', NULL, 1),
(407, 'admin', 'John', 'Moren ', 'john@gmail.com', 0x3133362e3135382e33372e3231340000, '2023-02-21 03:31:14', NULL, 1),
(408, 'admin', 'John', 'Moren ', 'john@gmail.com', 0x3133362e3135382e33372e3231340000, '2023-02-21 03:31:44', NULL, 1),
(409, 'admin', 'John', 'Moren ', 'john@gmail.com', 0x3133362e3135382e33372e3231340000, '2023-02-21 03:36:42', NULL, 1),
(410, 'admin', 'John', 'Moren ', 'john@gmail.com', 0x3133362e3135382e34382e3233380000, '2023-02-21 06:04:12', NULL, 1),
(411, 'James ', 'JameS', 'Gulles', 'james@gmail.com', 0x3133362e3135382e35392e3234380000, '2023-02-21 07:38:40', NULL, 1),
(412, 'James', 'JameS', 'Gulles', 'james@gmail.com', 0x3133362e3135382e35392e3234380000, '2023-02-21 07:50:57', NULL, 1),
(413, 'James', 'JameS', 'Gulles', 'james@gmail.com', 0x3133362e3135382e35392e3234380000, '2023-02-21 08:08:41', NULL, 1),
(414, 'Mary Vargas', 'Marylyne', 'Vargas', 'vargas.m.bsinfotech@gmail.com', 0x3133362e3135382e312e313436000000, '2023-02-21 10:12:20', NULL, 1);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=415;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
