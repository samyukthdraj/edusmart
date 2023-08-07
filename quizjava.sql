-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 05:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizjava`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `ans_id` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'Guido van Rossum', '1'),
(2, 'James Gosling', '1'),
(3, 'Dennis Ritchie', '1'),
(4, 'Bjarne Stroustrup', '1'),
(5, ' Java is a sequence-dependent programming language', '2'),
(6, 'Java is a code dependent programming language', '2'),
(7, 'Java is a platform-dependent programming language', '2'),
(8, ' Java is a platform-independent programming language', '2'),
(9, 'JRE', '3'),
(10, 'JIT', '3'),
(11, 'JDK', '3'),
(12, 'JVM', '3'),
(13, 'Object-oriented', '4'),
(14, 'Use of pointers', '4'),
(15, 'Portable', '4'),
(16, 'Dynamic and Extensible', '4'),
(17, 'identifier & keyword', '5'),
(18, 'identifier', '5'),
(19, 'keyword', '5'),
(20, 'none of the mentioned', '5');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'Who invented Java Programming?', 2),
(2, ' Which statement is true about Java?', 8),
(3, 'Which component is used to compile, debug and execute the java programs?', 11),
(4, ' Which one of the following is not a Java feature?', 14),
(5, 'Which of these cannot be used for a variable name in Java?', 19);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `total` int(250) NOT NULL,
  `answers` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `total`, `answers`) VALUES
(1, '1', 5, 0),
(2, '1', 5, 0),
(3, '1', 5, 0),
(4, '1', 5, 0),
(5, '1', 5, 0),
(6, '1', 5, 0),
(7, '1', 5, 0),
(8, '1', 5, 0),
(9, '1', 5, 0),
(10, '1', 5, 0),
(11, '1', 5, 0),
(12, '1', 5, 0),
(13, '1', 5, 0),
(14, '1', 5, 0),
(15, '1', 5, 0),
(16, '1', 5, 0),
(17, '1', 5, 0),
(18, '1', 5, 0),
(19, '1', 5, 0),
(20, '1', 5, 0),
(21, '1', 5, 0),
(22, '1', 5, 0),
(23, '1', 5, 0),
(24, '1', 5, 0),
(25, '1', 5, 0),
(26, '1', 5, 0),
(27, '1', 5, 0),
(28, '1', 5, 0),
(29, '1', 5, 0),
(30, '1', 5, 0),
(31, '1', 5, 0),
(32, '1', 5, 0),
(33, '1', 5, 0),
(34, '1', 5, 0),
(35, '1', 5, 0),
(36, '1', 5, 0),
(37, '1', 5, 0),
(38, '1', 5, 0),
(39, '1', 5, 0),
(40, '1', 5, 0),
(41, '1', 5, 0),
(42, '1', 5, 0),
(43, '1', 5, 0),
(44, '1', 5, 0),
(45, '1', 5, 0),
(46, '1', 5, 0),
(47, '1', 5, 0),
(48, '1', 5, 0),
(49, '1', 5, 0),
(50, '1', 5, 0),
(51, '1', 5, 0),
(52, '1', 5, 0),
(53, '1', 5, 0),
(54, '1', 5, 0),
(55, '1', 5, 0),
(56, '1', 5, 0),
(57, '1', 5, 0),
(58, '1', 5, 0),
(59, '1', 5, 0),
(60, '1', 5, 0),
(61, '1', 5, 0),
(62, '1', 5, 0),
(63, '1', 5, 0),
(64, '1', 5, 0),
(65, '1', 5, 0),
(66, '1', 5, 0),
(67, '1', 5, 0),
(68, '1', 5, 0),
(69, '1', 5, 0),
(70, '1', 5, 0),
(71, '1', 5, 0),
(72, '1', 5, 0),
(73, '1', 5, 0),
(74, '1', 5, 0),
(75, '1', 5, 0),
(76, '1', 5, 0),
(77, '1', 5, 0),
(78, '1', 5, 0),
(79, '1', 5, 0),
(80, '1', 5, 0),
(81, '1', 5, 0),
(82, '1', 5, 0),
(83, '1', 5, 0),
(84, '1', 5, 0),
(85, '1', 5, 0),
(86, '1', 5, 0),
(87, '1', 5, 0),
(88, '1', 5, 0),
(89, '1', 5, 0),
(90, '1', 5, 2),
(91, '1', 5, 0),
(92, '1', 5, 2),
(93, '1', 5, 0),
(94, '1', 5, 2),
(95, '1', 5, 0),
(96, '1', 5, 2),
(97, '1', 5, 0),
(98, '1', 5, 2),
(99, '1', 5, 0),
(100, '1', 5, 2),
(101, '1', 5, 0),
(102, '1', 5, 3),
(103, '1', 5, 0),
(104, '1', 5, 3),
(105, '1', 5, 0),
(106, '1', 5, 3),
(107, '1', 5, 0),
(108, '1', 5, 1),
(109, '1', 5, 0),
(110, '1', 5, 2),
(111, '1', 5, 0),
(112, '1', 5, 1),
(113, '1', 5, 0),
(114, '1', 5, 0),
(115, '1', 5, 0),
(116, '1', 5, 5),
(117, '1', 5, 0),
(118, '1', 5, 2),
(119, '1', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
