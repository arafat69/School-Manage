-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 04:13 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SchoolManagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(200) NOT NULL,
  `name` varchar(40) NOT NULL,
  `status` int(11) DEFAULT 1,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `status`, `date`) VALUES
(1, 'Computer', 1, '10-9-2021'),
(3, 'Electrical', 1, '2021-10-15 38:59:06'),
(4, 'Civil', 1, '2021-10-19 08:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `roll` int(20) NOT NULL,
  `reg` int(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `reg`, `department`, `semester`, `shift`, `status`) VALUES
(1, 'Arafat Ali', 913439, 886601, 'Computer', '7th', '2nd', 1),
(8, 'Md, Sagor Ali', 913436, 886604, 'Computer', '7th', '1st', 1),
(9, 'Md. Sohag Sheke', 913440, 886600, 'Computer', '7th', '1st', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_id` int(255) NOT NULL,
  `father` varchar(30) NOT NULL,
  `mother` varchar(30) NOT NULL,
  `session` varchar(20) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `photo` varchar(100) DEFAULT 'empty	',
  `address` varchar(100) DEFAULT 'Empty'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `father`, `mother`, `session`, `phone`, `email`, `photo`, `address`) VALUES
(1, 'Romjan Ali', 'Forida Begum', '2017-18', '01704039173', 'arafataliar69@gmail.com', '2021-10-18-05-10-54.jpg', 'Moheshpur,Jhenaidah,Bangladesh'),
(7, 'Md. Ezarul Islam', 'Mis. Nazma khatun', '2017-18', '017166517', 'stavensagorcse@gmail.com', '2021-10-18-10-59-53.png', NULL),
(8, 'Md. Ezarul Islam', 'Mis. Nazma khatun', '2017-18', '01716651721', 'stavensagorcse@gmail.com', '2021-10-18-05-45-37.jpg', 'Meher Pur, Bangladesh'),
(9, 'Md. Kamal Sheke', 'mst. Shahanara Begum', '2017-18', '01708643808', 'mdsohag.3808@gmail.com', '2021-10-19-12-06-40.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `photo` varchar(30) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `qualification`, `department`, `email`, `phone`, `address`, `photo`, `status`) VALUES
(1, 'A.B.M SiddikUllah', 'Junior Instructor', 'Computer', NULL, '01712345678', NULL, '2021-10-18-07-09-15.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `photo`, `status`) VALUES
(1, 'arafat', 'arafat123', 'arafataliar69@gmail.com', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
