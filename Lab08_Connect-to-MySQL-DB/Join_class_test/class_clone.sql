-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2020 at 10:22 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class_clone`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL COMMENT 'class id for each class',
  `class_name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'name for class '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`) VALUES
(37, 'Harry Potter and the Goblet of Fire'),
(39, 'Harry Potter và phòng ngủ của Darwin'),
(40, 'Harry potter '),
(41, 'Home alone fuck fuck '),
(42, 'sdsdsdsdds');

-- --------------------------------------------------------

--
-- Table structure for table `class_list`
--

CREATE TABLE `class_list` (
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_list`
--

INSERT INTO `class_list` (`class_id`, `user_id`) VALUES
(37, 13),
(39, 13),
(40, 13),
(41, 14),
(42, 14),
(39, 15),
(39, 17);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL COMMENT 'id for each post',
  `post_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `class_id` int(11) NOT NULL COMMENT 'what post belongs to what class'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `class_id`) VALUES
(40, 'Hôm nay lớp củ chuối ', 40),
(41, 'dfdfdfdf', 39);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'ID for each user',
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `fullname` varchar(120) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT 'check email verification '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `birthdate`, `email`, `phone`, `role`, `status`) VALUES
(13, 'nhut', '123', 'Nguyen Minh Nhut', '2020-12-16', 'nhut_teacher@gmail.com', '343434', 2, 1),
(14, 'nhut_admin', '123', 'Nhut Admin', '2020-12-16', 'nhut_admin@gmail.com', 'admin_phone', 2, 1),
(15, 'nhut_test', '123', 'Nhut Is A Good Student', '2020-12-19', 'nhutnguyenf330@gmail.com ', '232323', 1, 1),
(17, 'someone1', '123', 'Le Phuc Long', '2020-12-08', '232323', '232323', 1, 1),
(18, 'someone1', '123', 'Le Phuc Long', '2020-12-08', '232323', '232323', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_list`
--
ALTER TABLE `class_list`
  ADD PRIMARY KEY (`class_id`,`user_id`),
  ADD KEY `FK_user` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `FK_post` (`class_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'class id for each class', AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id for each post', AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID for each user', AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_list`
--
ALTER TABLE `class_list`
  ADD CONSTRAINT `FK_class` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_post` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
