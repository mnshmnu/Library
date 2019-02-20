-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 12:51 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_staff`
--

CREATE TABLE `log_staff` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `employee_code` varchar(15) NOT NULL,
  `datetime_in` datetime NOT NULL,
  `datetime_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_staff`
--

INSERT INTO `log_staff` (`id`, `staff_id`, `employee_code`, `datetime_in`, `datetime_out`) VALUES
(1, 2, 'JEC2', '2018-07-18 23:24:40', '2018-07-27 00:12:00'),
(2, 1, 'JEC1', '2018-07-18 23:25:50', '2019-01-17 12:07:36'),
(3, 2, 'JEC2', '2018-07-18 23:35:48', '2018-07-27 00:12:00'),
(4, 3, 'JEC3', '2018-07-20 11:43:01', '2018-07-20 11:55:03'),
(5, 1, 'JEC1', '2018-07-23 16:45:39', '2019-01-17 12:07:36'),
(6, 2, 'JEC2', '2018-07-23 16:46:25', '2018-07-27 00:12:00'),
(7, 1, 'JEC1', '2018-07-26 21:17:46', '2019-01-17 12:07:36'),
(8, 1, 'JEC1', '2018-07-27 00:11:17', '2019-01-17 12:07:36'),
(9, 1, 'JEC1', '2019-01-17 12:07:22', '2019-01-17 12:07:36'),
(10, 2, 'JEC2', '2019-01-17 12:07:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `log_student`
--

CREATE TABLE `log_student` (
  `id` int(11) NOT NULL,
  `students_id` int(11) NOT NULL,
  `admission_no` varchar(16) NOT NULL,
  `datetime_in` datetime NOT NULL,
  `datetime_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_student`
--

INSERT INTO `log_student` (`id`, `students_id`, `admission_no`, `datetime_in`, `datetime_out`) VALUES
(1, 1, '1111', '2018-07-18 23:21:59', '2019-01-16 20:20:52'),
(2, 2, '2222', '2018-07-18 23:22:28', '2019-01-16 20:21:15'),
(3, 1, '1111', '2018-07-18 23:35:33', '2019-01-16 20:20:52'),
(4, 1, '1111', '2018-07-20 11:44:16', '2019-01-16 20:20:52'),
(5, 1, '1111', '2018-07-20 12:08:05', '2019-01-16 20:20:52'),
(6, 2, '2222', '2018-07-20 12:10:53', '2019-01-16 20:21:15'),
(7, 1, '1111', '2018-07-20 12:11:13', '2019-01-16 20:20:52'),
(9, 1, '1111', '2018-07-18 15:16:27', '2019-01-16 20:20:52'),
(10, 1, '1111', '2018-07-22 20:51:29', '2019-01-16 20:20:52'),
(11, 2, '2222', '2018-07-22 20:51:56', '2019-01-16 20:21:15'),
(12, 1, '1111', '2018-07-22 20:52:02', '2019-01-16 20:20:52'),
(13, 1, '1111', '2018-07-22 20:52:26', '2019-01-16 20:20:52'),
(14, 2, '2222', '2018-07-22 20:59:29', '2019-01-16 20:21:15'),
(15, 1, '1111', '2018-07-22 21:17:37', '2019-01-16 20:20:52'),
(16, 1, '1111', '2018-07-22 21:17:37', '2019-01-16 20:20:52'),
(17, 1, '1111', '2018-07-22 21:18:51', '2019-01-16 20:20:52'),
(18, 1, '1111', '2018-07-22 21:19:18', '2019-01-16 20:20:52'),
(19, 1, '1111', '2018-07-22 21:20:31', '2019-01-16 20:20:52'),
(20, 1, '1111', '2018-07-22 21:22:49', '2019-01-16 20:20:52'),
(21, 1, '1111', '2018-07-23 11:39:53', '2019-01-16 20:20:52'),
(22, 1, '1111', '2018-07-23 11:40:09', '2019-01-16 20:20:52'),
(23, 2, '2222', '2018-07-23 11:42:11', '2019-01-16 20:21:15'),
(24, 1, '1111', '2018-07-23 11:49:22', '2019-01-16 20:20:52'),
(25, 1, '1111', '2018-07-23 11:58:37', '2019-01-16 20:20:52'),
(26, 2, '2222', '2018-07-23 11:59:32', '2019-01-16 20:21:15'),
(27, 1, '1111', '2018-07-23 12:04:54', '2019-01-16 20:20:52'),
(28, 2, '2222', '2018-07-23 12:05:41', '2019-01-16 20:21:15'),
(29, 1, '1111', '2018-07-23 16:45:33', '2019-01-16 20:20:52'),
(30, 2, '2222', '2018-07-23 16:46:40', '2019-01-16 20:21:15'),
(31, 1, '1111', '2018-07-23 17:30:10', '2019-01-16 20:20:52'),
(32, 1, '1111', '2018-07-26 16:19:04', '2019-01-16 20:20:52'),
(33, 1, '1111', '2018-07-26 16:23:52', '2019-01-16 20:20:52'),
(34, 2, '2222', '2018-07-26 21:17:02', '2019-01-16 20:21:15'),
(35, 1, '1111', '2018-07-26 21:17:11', '2019-01-16 20:20:52'),
(36, 1, '1111', '2018-07-26 21:18:48', '2019-01-16 20:20:52'),
(37, 1, '1111', '2018-07-26 21:19:34', '2019-01-16 20:20:52'),
(38, 1, '1111', '2018-07-26 21:31:42', '2019-01-16 20:20:52'),
(39, 1, '1111', '2018-07-26 21:33:52', '2019-01-16 20:20:52'),
(40, 1, '1111', '2018-07-26 21:37:40', '2019-01-16 20:20:52'),
(41, 1, '1111', '2018-07-27 00:10:59', '2019-01-16 20:20:52'),
(42, 2, '2222', '2018-07-27 00:11:07', '2019-01-16 20:21:15'),
(43, 1, '1111', '2018-07-27 00:20:01', '2019-01-16 20:20:52'),
(44, 1, '1111', '2018-07-27 01:31:54', '2019-01-16 20:20:52'),
(45, 1, '1111', '2018-07-27 01:33:07', '2019-01-16 20:20:52'),
(46, 1, '1111', '2018-07-27 01:33:16', '2019-01-16 20:20:52'),
(47, 1, '1111', '2018-07-27 12:37:49', '2019-01-16 20:20:52'),
(48, 1, '1111', '2018-07-28 11:43:03', '2019-01-16 20:20:52'),
(49, 2, '2222', '2018-09-16 22:15:58', '2019-01-16 20:21:15'),
(50, 1, '1111', '2018-09-30 21:00:49', '2019-01-16 20:20:52'),
(51, 2, '2222', '2018-09-30 21:51:36', '2019-01-16 20:21:15'),
(52, 1, '1111', '2018-09-30 21:51:44', '2019-01-16 20:20:52'),
(53, 1, '1111', '2018-11-29 18:39:12', '2019-01-16 20:20:52'),
(54, 1, '1111', '2019-01-16 20:20:56', '0000-00-00 00:00:00'),
(55, 2, '2222', '2019-01-16 20:21:00', '2019-01-16 20:21:15'),
(56, 2, '2222', '2019-01-16 20:21:11', '2019-01-16 20:21:15'),
(57, 4, '4444', '2019-01-16 20:26:53', '0000-00-00 00:00:00'),
(58, 3, '3333', '2019-01-16 20:37:56', '2019-01-16 20:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `employee_code` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `employee_code`, `name`, `department`) VALUES
(1, 'JEC1', 'VADAKKAN', 'MGM'),
(2, 'JEC2', 'maneesh', 'CSE'),
(3, 'JEC3', 'VADAKKAN', 'ME');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `admission_no` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(5) NOT NULL,
  `sem` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `admission_no`, `name`, `dept`, `sem`) VALUES
(1, '1111', 'sreerag', 'MRE', 'S2'),
(2, '2222', 'maneesh', 'CSE', 'S3'),
(3, '3333', 'Hero', 'CSE', 'S4'),
(4, '4444', 'Hero', 'ME', 'S3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_staff`
--
ALTER TABLE `log_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_student`
--
ALTER TABLE `log_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admission_no` (`admission_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_staff`
--
ALTER TABLE `log_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `log_student`
--
ALTER TABLE `log_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
