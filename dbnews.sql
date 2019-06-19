-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 08:03 PM
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
-- Database: `dbnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`) VALUES
(2, 'minh', 'c92f1d1f2619172bf87a12e5915702a6'),
(3, 'nghia', '9e87373408a6cd425ae9b19bf870d893');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `topicName` varchar(100) NOT NULL,
  `courseName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `topicName`, `courseName`) VALUES
(1, 'Web Development', 'Computing'),
(2, 'Programming', 'Computing'),
(3, 'Cloud Computing', 'Computing'),
(4, 'Business Laws', 'Business Program'),
(5, 'Management Accounting', 'Business Program'),
(6, 'Research Project', 'Business Program'),
(7, 'Printmaking', 'Graphic Design'),
(8, 'Visual Narrative', 'Graphic Design'),
(9, 'Dancing', 'Graphic Design');

-- --------------------------------------------------------

--
-- Table structure for table `topiclist`
--

CREATE TABLE `topiclist` (
  `id` int(255) NOT NULL,
  `topicName` varchar(200) DEFAULT NULL,
  `courseName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topiclist`
--

INSERT INTO `topiclist` (`id`, `topicName`, `courseName`) VALUES
(1, 'Web Development', 'Computing'),
(2, 'Programming', 'Computing'),
(3, 'Advanced Programming', 'Computing'),
(4, 'Internet Of Thing', 'Computing'),
(5, 'Security', 'Computing'),
(6, 'Business Laws', 'Business Program'),
(7, 'Management Accounting', 'Business Program'),
(8, 'Research Project', 'Business Program'),
(9, 'Printmaking', 'Graphic Design'),
(10, 'Visual Narrative', 'Graphic Design'),
(11, 'Dancing', 'Graphic Design');

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `topicName` varchar(200) DEFAULT NULL,
  `courseName` varchar(200) DEFAULT NULL,
  `trainerName` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `education` char(20) DEFAULT NULL,
  `ProgrammingLanguage` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`id`, `name`, `topicName`, `courseName`, `trainerName`, `Age`, `education`, `ProgrammingLanguage`) VALUES
(1, 'Hoang Quang Minh', 'Web Development', 'Computing', 'Lai Manh Dung', 20, 'student', 'C++'),
(2, 'Dao Chinh Nghia', 'Web Development', 'Computing', 'Lai Manh Dung', 20, 'student', 'C++'),
(3, 'Tran Xuan Bach', 'Programming', 'Computing', 'Doan Trung Tung', 20, 'student', 'C++'),
(4, 'Pham Minh Thang', 'Cloud Computing', 'Computing', 'Do Quoc Binh', 20, 'student', 'C++'),
(5, 'Pham Hoang Nam', 'Business Laws', 'Business Program', 'Lai Manh Dung', 20, 'student', 'C++'),
(6, 'Le Thanh Hung', 'Management Accounting', 'Business Program', 'Doan Trung Tung', 20, 'student', 'C++'),
(12, 'Trinh Thai Binh', 'Dancing', 'Graphic Design', 'Nguyen Hong Phuong', 20, 'student', 'C++'),
(13, 'HoÃ ng Quang Minh', 'Programming', 'Business Program', 'Nguyen Hong Phuong', 20, 'student', 'C++'),
(14, 'Thao Gum', 'Programming', 'Graphic Design', 'Doan Trung Tung', 20, 'student', 'C++');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `trainerName` varchar(200) NOT NULL,
  `degree` varchar(200) DEFAULT NULL,
  `phone` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `username`, `password`, `trainerName`, `degree`, `phone`) VALUES
(6, 'tung', 'bb7d4b236b564cf1ec27aa891331e0af', 'Doan Trung Tung', 'Ph.D', '123'),
(8, 'dung2', 'a15f7bda1cee4c151f2c93827eb75a3c', 'Lai Manh Dung', 'Master', '1');

-- --------------------------------------------------------

--
-- Table structure for table `trainerlist`
--

CREATE TABLE `trainerlist` (
  `id` int(255) NOT NULL,
  `trainerName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainerlist`
--

INSERT INTO `trainerlist` (`id`, `trainerName`) VALUES
(1, 'Lai Manh Dung'),
(2, 'Doan Trung Tung'),
(3, 'Do Quoc Binh'),
(4, 'Nguyen Hong Phuong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topiclist`
--
ALTER TABLE `topiclist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainerlist`
--
ALTER TABLE `trainerlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `topiclist`
--
ALTER TABLE `topiclist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trainee`
--
ALTER TABLE `trainee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trainerlist`
--
ALTER TABLE `trainerlist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
