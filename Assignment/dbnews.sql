-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2019 lúc 11:17 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbnews`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `id` int(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`) VALUES
(1, 'staff', 'staff');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `topicName` varchar(100) NOT NULL,
  `courseName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `topic`
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
-- Cấu trúc bảng cho bảng `topiclist`
--

CREATE TABLE `topiclist` (
  `id` int(255) NOT NULL,
  `topicName` varchar(200) DEFAULT NULL,
  `courseName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `topiclist`
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
-- Cấu trúc bảng cho bảng `trainee`
--

CREATE TABLE `trainee` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `topicName` varchar(200) DEFAULT NULL,
  `courseName` varchar(200) DEFAULT NULL,
  `trainerName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `trainee`
--

INSERT INTO `trainee` (`id`, `name`, `topicName`, `courseName`, `trainerName`) VALUES
(1, 'Hoang Quang Minh', 'Web Development', 'Computing', 'Lai Manh Dung'),
(2, 'Dao Chinh Nghia', 'Web Development', 'Computing', 'Lai Manh Dung'),
(3, 'Tran Xuan Bach', 'Programming', 'Computing', 'Doan Trung Tung'),
(4, 'Pham Minh Thang', 'Cloud Computing', 'Computing', 'Do Quoc Binh'),
(5, 'Pham Hoang Nam', 'Business Laws', 'Business Program', 'Lai Manh Dung'),
(6, 'Le Thanh Hung', 'Management Accounting', 'Business Program', 'Doan Trung Tung'),
(7, 'Trinh Thai Binh', 'Research Project', 'Business Program', 'Do Quoc Binh'),
(8, 'Pham Tuan Anh', 'Printmaking', 'Graphic Design', 'Lai Manh Dung'),
(9, 'Pham Hong Quan', 'Visual Narrative', 'Graphic Design', 'Doan Trung Tung'),
(10, 'Nghiem Hoang Duy Anh', 'Dancing', 'Graphic Design', 'Do Quoc Binh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trainer`
--

CREATE TABLE `trainer` (
  `id` int(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `trainer`
--

INSERT INTO `trainer` (`id`, `username`, `password`) VALUES
(1, 'minhminhxyzz', 'nghiadeptrai'),
(2, 'minh', 'minhdeptrai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trainerlist`
--

CREATE TABLE `trainerlist` (
  `id` int(255) NOT NULL,
  `trainerName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `trainerlist`
--

INSERT INTO `trainerlist` (`id`, `trainerName`) VALUES
(1, 'Lai Manh Dung'),
(2, 'Doan Trung Tung'),
(3, 'Do Quoc Binh'),
(4, 'Nguyen Hong Phuong');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `topiclist`
--
ALTER TABLE `topiclist`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trainerlist`
--
ALTER TABLE `trainerlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `topiclist`
--
ALTER TABLE `topiclist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `trainee`
--
ALTER TABLE `trainee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `trainerlist`
--
ALTER TABLE `trainerlist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;