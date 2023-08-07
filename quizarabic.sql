-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 05:20 PM
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
-- Database: `quizarabic`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'في الصباح', 1),
(2, 'من الظهر حتى المساء', 1),
(3, 'ليلا', 1),
(4, '\r\nببطء شديد', 1),
(5, 'بسرعة نسبياً وبخطوات واسعة ', 2),
(6, '\r\nبسرعة نسبياً وبخطوات صغيرة', 2),
(7, ' \r\nأقل سرعة ورأسك مرفوع تنظر إلى ماحولك مواجهة', 2),
(8, 'أقل سرعة ورأسك منخفض', 2),
(9, 'ذراعاك مكتفتين', 3),
(10, 'يداك متشابكتين', 3),
(11, 'يدك أو يداك على خصرك', 3),
(12, 'تلمس أو تدفع الشخص الذي تكلمه', 3),
(13, 'تلعب بإذنك أو تلمس ذقنك أو ترتب شعرك', 4),
(14, '\r\nالركبتان مثنية والساقان جنباً إلى جنب بشكل مرتب', 4),
(15, 'الساقان متصالبتين ( رجل فوق الأخرى )', 4),
(16, ' \r\nالساقان ممتدتين أو بشكل مستقيم', 4),
(17, ' \r\nإحدى الرجلين مثنية تحتك', 5),
(18, 'تضحك ضحكة تقديرية عالية ( صاخبة )', 5),
(19, 'تضحك ولكن ضحكة غير عالية', 5),
(20, 'ضحكة خافتة', 5);

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
(1, '\r\nمتى تكون في أحسن أحوالك ؟', 4),
(2, '\r\nتمشي عادة', 7),
(3, 'عندما تتكلم مع الآخرين تكون', 10),
(4, 'عندما تسترخي تكون', 16),
(5, 'عندما يمتعك حقاً شيئ ما', 19);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `total` int(250) DEFAULT NULL,
  `answers` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
