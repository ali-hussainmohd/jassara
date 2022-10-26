-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 12:48 AM
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
  `ID` varchar(40) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Fname`, `Lname`, `Password`, `Email`) VALUES
('1001', 'Ali', 'Hassan', '123456', 'aliHassan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `challenge`
--

CREATE TABLE `challenge` (
  `challenge_num` int(10) NOT NULL,
  `challenge_name` text COLLATE utf8_unicode_ci NOT NULL,
  `challenge_level` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `challenge_date` date NOT NULL,
  `Deadline` date NOT NULL,
  `Points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `challenge`
--

INSERT INTO `challenge` (`challenge_num`, `challenge_name`, `challenge_level`, `challenge_date`, `Deadline`, `Points`) VALUES
(100, 'Business Analyst ', 'hard', '2022-09-30', '2022-10-31', 180),
(110, 'Microsoft Excel ', 'Basic', '2022-10-15', '2022-10-22', 10),
(120, 'Microsoft Access DB', 'Basic', '2022-10-22', '2022-10-28', 5),
(121, 'Accounting', 'EASY', '2022-10-17', '2022-10-24', 10),
(122, 'CISA', 'Hard', '2022-10-17', '2022-10-24', 480),
(123, 'Data Basics', 'Basic', '2022-10-27', '2022-10-14', 180),
(130, 'Microsoft Power BI', 'Advanced', '2022-10-15', '2022-10-29', 1800),
(140, 'Microsoft Azure fundamental data', 'Middle', '2022-10-22', '2022-10-29', 180),
(150, 'Microsoft Word specialist ', 'Advanced', '2022-10-15', '2022-10-29', 95),
(160, 'Microsoft Azure Lamda functions', 'Advanced', '2022-10-08', '2022-12-31', 180),
(200, 'Php Programmiing', 'hard', '2022-09-28', '2022-11-16', 78),
(300, 'design ', 'Easy', '2022-09-30', '2022-11-23', 405),
(500, 'ewe', 'hard', '2022-10-21', '2022-11-30', 120);

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

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `tname`, `password`, `challenge_num`) VALUES
(4008, 'Ahlam', '123456', 100);

-- --------------------------------------------------------

--
-- Table structure for table `previous_challenge`
--

CREATE TABLE `previous_challenge` (
  `id` int(11) NOT NULL,
  `uni_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `challenge_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `previous_challenge`
--

INSERT INTO `previous_challenge` (`id`, `uni_id`, `challenge_num`) VALUES
(9, '2190006174', 122),
(10, '2190006175', 122),
(11, '2190006175', 123),
(12, '2190006175', 160),
(14, '2190006173', 500),
(15, '2190006173', 300),
(16, '2190006173', 300),
(17, '2190006173', 100);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `stname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `point` int(11) NOT NULL,
  `challenge_num` int(10) NOT NULL,
  `challenge_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `stname`, `point`, `challenge_num`, `challenge_name`) VALUES
(1, 'Sara', 120, 121, 'Business Analyst'),
(2, 'Mareem', 195, 300, 'Business Analyst'),
(3, 'Rehab', 620, 40, 'Business Analyst'),
(4, 'SARA', 34, 50, 'Business Analyst'),
(5, 'SARA', 544, 140, 'Business Analyst'),
(6, 'ZMOR', 100, 147, 'Business Analyst'),
(7, 'DEEA', 34, 71, 'Business Analyst'),
(8, 'REEM', 52, 17, 'Business Analyst'),
(9, 'SALMA', 365, 7, 'Business Analyst'),
(10, 'AHLAM', 14, 8, 'Business Analyst'),
(11, 'NOOR', 28, 47, 'Business Analyst'),
(12, 'RETAJ', 96, 5, 'Business Analyst'),
(13, 'JALIL', 1800, 57, 'Business Analyst'),
(14, 'SALMAN', 125, 87, 'Business Analyst'),
(15, 'SULIMAN', 369, 58, 'Business Analyst'),
(16, 'NOOF', 98, 85, 'Business Analyst');

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
  `date_birth` date NOT NULL,
  `uni_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `full_name`, `stname`, `uni_id`, `password`, `major`, `date_birth`, `uni_level`) VALUES
(1, 'SARA ALMUTARI', 'SARA', '2190006173', '123456', 'IT', '2022-10-19', 'SENIOR'),
(3, 'AMIRA AHLAM', 'AMIRA', '2190006174', '123456', 'IT', '2000-08-01', 'SENIOR'),
(4, 'RADA AHLAM', 'RADA', '2190006175', '123456', 'IT', '2000-08-01', 'SENIOR'),
(6, 'Mai Ahmed', 'Mai', '24554544', '123456', 'ce', '2002-08-24', 'senuor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `previous_challenge`
--
ALTER TABLE `previous_challenge`
  ADD PRIMARY KEY (`id`),
  ADD KEY `challage_id` (`challenge_num`),
  ADD KEY `uni_id_2` (`uni_id`) USING BTREE;

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stname` (`stname`),
  ADD KEY `challenge_num` (`challenge_num`),
  ADD KEY `challenge_name` (`challenge_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stname` (`stname`),
  ADD UNIQUE KEY `uni_id` (`uni_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4009;

--
-- AUTO_INCREMENT for table `previous_challenge`
--
ALTER TABLE `previous_challenge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `previous_challenge`
--
ALTER TABLE `previous_challenge`
  ADD CONSTRAINT `challage_id` FOREIGN KEY (`challenge_num`) REFERENCES `challenge` (`challenge_num`),
  ADD CONSTRAINT `student_id` FOREIGN KEY (`uni_id`) REFERENCES `student` (`uni_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
