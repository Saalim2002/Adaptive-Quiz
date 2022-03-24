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
-- Database: `level1`
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
(1, 'Abstract', 1, 0),
(2, 'Protected', 1, 0),
(3, 'Final', 1, 1),
(4, 'Static', 1, 0),
(5, 'classname()', 2, 0),
(6, '_construct()', 2, 0),
(7, 'Function _construct()', 2, 0),
(8, 'Function __construct()', 2, 1),
(9, 'PHP 4', 3, 0),
(10, 'PHP 5', 3, 1),
(11, 'PHP 5.3', 3, 0),
(12, 'PHP 6', 3, 0),
(13, 'exist()', 4, 0),
(14, 'Exist_class()', 4, 0),
(15, 'Class_exist()', 4, 1),
(16, '__exist()', 4, 0),
(17, 'Normal class l', 5, 0),
(18, 'Static class', 5, 0),
(19, 'Abstract class', 5, 1),
(20, 'Interface', 5, 0),
(21, 'Interface', 6, 1),
(22, 'Object', 6, 0),
(23, 'Abstract class', 6, 0),
(24, 'Static class', 6, 0),
(25, 'clone()', 7, 0),
(26, '__clone()\n', 7, 1),
(27, '_clone', 7, 0),
(28, 'Object_clone()', 7, 0),
(29, 'Typecasting', 8, 0),
(30, 'Method Including', 8, 0),
(31, 'Method adding', 8, 0),
(32, 'Method chaining', 8, 1),
(33, '__call', 9, 1),
(34, '__invoke', 9, 0),
(35, '__wakeup', 9, 0),
(36, '__unset', 9, 0),
(37, '$_BOTH', 10, 0),
(38, '$REQUEST', 10, 0),
(39, '$_REQUEST', 10, 1),
(40, '$BOTH', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `questtion` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `questtion`, `ans_id`) VALUES
(1, 'Which method scope prevents a method from being overridden by a subclass?', 3),
(2, 'PHP recognizes constructors by the name.', 8),
(3, 'Which version of PHP introduced the instanceof keyword?', 10),
(4, 'Which one of the following functions is used to determine whether a class exists?', 15),
(5, 'If one intends to create a model that will be assumed by a number of closely related objects, which class must be used?', 19),
(6, 'If your object must inherit behavior from a number of sources you must use a/an', 21),
(7, 'Which method is used to tweak an object\'s cloning behavior?', 26),
(8, 'Which feature allows us to call more than one method or function of the class in single instruction?', 32),
(9, 'Which magic method is used to implement overloading in PHP?', 33),
(10, 'Which of the following is used to collect form data sent with both the GET and POST methods?', 39);

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
