-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 04:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p1`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `is_current` tinyint(1) NOT NULL DEFAULT 0,
  `province` varchar(256) NOT NULL,
  `alley` varchar(256) DEFAULT NULL,
  `zip_code` varchar(5) NOT NULL,
  `street` varchar(256) DEFAULT NULL,
  `phone_number` varchar(10) NOT NULL,
  `district` varchar(256) DEFAULT NULL,
  `sub_district` varchar(256) DEFAULT NULL,
  `no` varchar(256) NOT NULL,
  `group_no` varchar(256) DEFAULT NULL,
  `user_id` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `is_current`, `province`, `alley`, `zip_code`, `street`, `phone_number`, `district`, `sub_district`, `no`, `group_no`, `user_id`) VALUES
(8, 1, 'สมุทรสาคร', '-', '74120', '-', '0998971234', 'บ้านแพ้ว', 'หนองสองห้อง', '87', '9', '1740301210251'),
(9, 1, 'สมุทรสาคร', '-', '74120', '-', '0998971234', 'บ้านแพ้ว', 'หนองสองห้อง', '87', '9', '1740301210252'),
(10, 1, 'สมุทรสาคร', '-', '74120', '-', '0823636036', 'บ้านแพ้ว', 'หนองสองห้อง', '42', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` varchar(10) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`) VALUES
('101', 'วิทยาศาสตร์'),
('102', 'พยาบาลศาสตร์');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `id` varchar(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `faulty_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`id`, `name`, `faulty_id`) VALUES
('45', 'วิศวกรรมซอฟต์แวร์', '101'),
('46', 'เทคโนโลยีสารสนเทศ', '102');

-- --------------------------------------------------------

--
-- Table structure for table `open_register`
--

CREATE TABLE `open_register` (
  `id` int(11) NOT NULL,
  `major_id` varchar(10) NOT NULL,
  `round` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `university_year` varchar(6) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `degree` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `open_register`
--

INSERT INTO `open_register` (`id`, `major_id`, `round`, `type`, `university_year`, `start_date`, `end_date`, `degree`) VALUES
(1, '45', 1, 1, '1/2566', '2565-11-14', '2565-11-30', 'ปริณญาตรี'),
(2, '46', 1, 1, '1/2566', '2565-11-14', '2565-11-30', 'ปริณญาตรี'),
(3, '45', 1, 2, '1/2566', '2565-11-14', '2565-11-30', 'ปริณญาตรี'),
(4, '45', 2, 2, '1/2566', '2565-11-14', '2565-11-30', 'ปริณญาตรี');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `national_id` varchar(13) NOT NULL,
  `original_province` varchar(256) DEFAULT NULL,
  `nationality` varchar(256) DEFAULT NULL,
  `race` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `prefix` varchar(256) DEFAULT NULL,
  `firstname_th` varchar(256) DEFAULT NULL,
  `lastname_th` varchar(256) DEFAULT NULL,
  `firstname_en` varchar(256) DEFAULT NULL,
  `lastname_en` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `blood_group` varchar(256) DEFAULT NULL,
  `religion` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`national_id`, `original_province`, `nationality`, `race`, `email`, `prefix`, `firstname_th`, `lastname_th`, `firstname_en`, `lastname_en`, `password`, `birthday`, `blood_group`, `religion`) VALUES
('1700401323201', 'สมุทรสาคร', 'ไทย', 'ไทย', 'chetsadakorn2543@gmail.com', 'นาย', 'เจษฎากร', 'เมืองนาม', 'Chetsadakorn', 'Mueangnam', '1700401323201', '2000-08-17', 'O', 'พุทธ'),
('1740301210251', 'สมุทรสาคร', 'ไทย', 'ไทย', '624259014@webmail.npru.ac.th', 'นาย', 'ณัฐสิทธิ์ วรนิติเยาวภา', 'วรนิติเยาวภา', 'Natthasith', 'voranitiyaowapa', '12345678', '2000-09-21', 'AB', 'พุทธ'),
('1740301210252', 'สมุทรสาคร', 'ไทย', 'ไทย', '624259014@webmail.npru.ac.th', 'นาย', 'ณัฐสิทธิ์ วรนิติเยาวภา', 'วรนิติเยาวภา', 'Natthasith', 'voranitiyaowapa', '12345678', '2000-09-21', 'AB', 'พุทธ');

-- --------------------------------------------------------

--
-- Table structure for table `user_education_history`
--

CREATE TABLE `user_education_history` (
  `id` int(11) NOT NULL,
  `user_id` varchar(13) NOT NULL,
  `degree` varchar(256) DEFAULT NULL,
  `academy` varchar(512) DEFAULT NULL,
  `GPA` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `user_id` varchar(13) NOT NULL,
  `open_register_education` int(11) NOT NULL,
  `is_approve` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `user_id`, `open_register_education`, `is_approve`) VALUES
(4, '1740301210252', 1, 1),
(31, '1700401323201', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculty_id_uindex` (`id`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `major_id_uindex` (`id`);

--
-- Indexes for table `open_register`
--
ALTER TABLE `open_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`national_id`),
  ADD UNIQUE KEY `users_national_id_uindex` (`national_id`);

--
-- Indexes for table `user_education_history`
--
ALTER TABLE `user_education_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_register_user_id_open_register_education_uindex` (`user_id`,`open_register_education`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `open_register`
--
ALTER TABLE `open_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_education_history`
--
ALTER TABLE `user_education_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
