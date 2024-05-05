-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 12:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `handouts`
--

CREATE TABLE `handouts` (
  `handout_id` int(11) NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `handout_title` varchar(255) NOT NULL,
  `handout_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `handouts`
--

INSERT INTO `handouts` (`handout_id`, `module_id`, `handout_title`, `handout_content`) VALUES
(4, 1, '00 LCD Slides', '00 LCD Slides.pps'),
(5, 1, '00 Instructor\'s Guide', '00 Instructor\'s Guide.pdf'),
(6, 1, '00 LCD Slide Handout 1', '00 LCD Slide Handout 1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `module_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `subject_id`, `module_title`) VALUES
(1, 1, '00 Course Orientation'),
(2, 1, '01 Number Systems'),
(3, 1, '02 Arithmetic Operations'),
(4, 1, '03 Boolean Algebra'),
(5, 1, '04 Logic Gates'),
(6, 1, '05 Simplification of Boolean Expression Through K-Map Method'),
(7, 1, '06 Combination Logic');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_title`) VALUES
(1, 'Logic Circuits and Designs'),
(2, 'Advance Logic Circuits and Designs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'shitshit', 'namo@panget.com', 'password', 'student'),
(3, 'gabpau', 'gabpau@gmail.com', '123456789', 'student'),
(4, 'jl', 'jlbernabe@gmail.com', 'Pawala103100', 'student'),
(5, 'Sherwin Ostria', 'Sherwin@gmail.com', '123456789', 'Teacher'),
(6, 'Jlbernabe', 'jlbernabe123@gmail.com', '123456789', 'Teacher'),
(7, 'Steven', 'steven@gmail.com', '12345678', 'student'),
(8, 'russel', 'russel@gmail.com', '123456789', 'Teacher'),
(9, 'jelly', 'jelai@gmail.com', '11111111', 'student'),
(10, 'Jelly', 'JelaiOriosa@gmail.com', '123456789', 'Teacher'),
(11, 'JelaiOriosa', 'Jelly@gmail.com', '123456789', 'student'),
(12, 'Jay El', 'Jay_el@gmail.com', '123456789', 'student'),
(13, 'Heart', 'Heart@nanay.com', 'nanay12345', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `handouts`
--
ALTER TABLE `handouts`
  ADD PRIMARY KEY (`handout_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `handouts`
--
ALTER TABLE `handouts`
  MODIFY `handout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `handouts`
--
ALTER TABLE `handouts`
  ADD CONSTRAINT `handouts_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
