-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 01:42 PM
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
-- Database: `jassara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `challenge_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `challenge_num`) VALUES
(20010, '12345', 100);

-- --------------------------------------------------------

--
-- Table structure for table `challenge`
--

CREATE TABLE `challenge` (
  `challenge_num` int(10) NOT NULL,
  `challenge_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `challenge_level` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `challenge_date` date NOT NULL,
  `Point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `challenge`
--

INSERT INTO `challenge` (`challenge_num`, `challenge_name`, `challenge_level`, `challenge_date`, `Point`) VALUES
(100, 'Business', 'hard', '2022-09-30', 0),
(200, 'program_php', 'hard', '2022-09-28', 0),
(300, 'design ', 'Easy', '2022-09-30', 0),
(400, 'Draw', 'hard', '2022-10-19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(10) NOT NULL,
  `tname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `challenge_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `stname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `challenge_num` int(10) NOT NULL,
  `challenge_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uni_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major` text COLLATE utf8_unicode_ci NOT NULL,
  `challenge_num` int(10) NOT NULL,
  `date_birth` date NOT NULL,
  `uni_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `full_name`, `stname`, `uni_id`, `password`, `major`, `challenge_num`, `date_birth`, `uni_level`) VALUES
(1, 'maryam Mohd', 'maryam', '2190006173', '123456', 'it', 100, '2000-11-18', 'SENIOR'),
(2, 'Noor Yousif', 'noor', '2190006179', '123456', 'it', 300, '2001-07-06', 'JUNIOR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `challenge_num` (`challenge_num`);

--
-- Indexes for table `challenge`
--
ALTER TABLE `challenge`
  ADD PRIMARY KEY (`challenge_num`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tname` (`tname`),
  ADD KEY `challenge_num` (`challenge_num`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD KEY `stname` (`stname`),
  ADD KEY `challenge_num` (`challenge_num`),
  ADD KEY `challenge_name` (`challenge_name`),
  ADD KEY `tname` (`tname`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stname` (`stname`),
  ADD UNIQUE KEY `uni_id` (`uni_id`),
  ADD KEY `challenge_num` (`challenge_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`challenge_num`) REFERENCES `challenge` (`challenge_num`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`challenge_num`) REFERENCES `challenge` (`challenge_num`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`tname`) REFERENCES `faculty` (`tname`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`stname`) REFERENCES `student` (`stname`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`challenge_num`) REFERENCES `challenge` (`challenge_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
