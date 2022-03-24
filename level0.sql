-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2022 at 08:43 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `level0`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ansid` int(250) NOT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL,
  `a_bit` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ansid`, `answer`, `ans_id`, `a_bit`) VALUES
(1, 'Hypertext Preprocessor', 1, 1),
(2, 'Pretext Hypertext Preprocessor\n', 1, 0),
(3, 'Personal Home Processor\n', 1, 0),
(4, 'None of the above\n', 1, 0),
(5, 'Drek Kolkevi', 2, 0),
(6, 'List Barely', 2, 0),
(7, 'Rasmus Lerdrof', 2, 1),
(8, 'None of the above', 2, 0),
(9, '! (Exclamation)', 3, 0),
(10, '$ (Dollar)', 3, 1),
(11, '& (Ampersand)', 3, 0),
(12, '# (Hash)', 3, 0),
(13, '.php', 4, 1),
(14, '.hphp', 4, 0),
(15, '.xml\n', 4, 0),
(16, '.html', 4, 0),
(17, 'Extern\n', 5, 1),
(18, 'Local', 5, 0),
(19, 'Static', 5, 0),
(20, 'Global', 5, 0),
(21, '& .. &', 6, 0),
(22, '// ..\n', 6, 0),
(23, '/* .. */', 6, 0),
(24, 'Both (b) and (c)', 6, 1),
(25, 'Echo', 7, 0),
(26, 'Write', 7, 0),
(27, 'Print', 7, 0),
(28, 'Both (a) and (c)', 7, 1),
(29, 'The strlen() function returns the type of string\n', 8, 0),
(30, 'The strlen() function returns the length of string\n', 8, 1),
(31, 'The strlen() function returns the value of string\n', 8, 0),
(32, 'The strlen() function returns both value and type of string\n', 8, 0),
(33, '+ (plus)\n', 9, 0),
(34, '*(Asterisk)\n', 9, 0),
(35, '. (dot)\n', 9, 1),
(36, 'Append()\n', 9, 0),
(37, 'Inbuilt constants\n', 10, 0),
(38, 'User-defined constants\n', 10, 0),
(39, 'Magic constants\n', 10, 1),
(40, 'Default constants\n', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'PHP stands for ?', 1),
(2, 'Who is known as the father of PHP?', 7),
(3, 'Variable name in PHP starts with?', 10),
(4, 'Which of the following is the default file extension of PHP?', 13),
(5, 'Which of the following is not a variable scope in PHP?', 17),
(6, 'Which of the following is correct to add a comment in php?', 24),
(7, 'Which of the following is used to display the output in PHP?', 28),
(8, 'Which of the following is the use of strlen() function in PHP?', 30),
(9, 'Which of the following is used for concatenation in PHP?', 35),
(10, 'Which of the following starts with __ (double underscore) in PHP?', 39);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ansid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ansid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
