-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 06:07 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c9`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `is_active`, `name`, `description`, `created_at`, `updated_at`) VALUES
(4, 1, 'BSIT', 'BSIT', '2017-12-21 05:24:13', '2017-12-21 12:18:16'),
(5, 1, 'BSCS', 'BSCS', '2017-12-21 05:24:23', '2017-12-21 05:24:23'),
(6, 1, 'BSBA', 'BSBA', '2017-12-21 05:24:33', '2017-12-21 05:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(11) NOT NULL,
  `question` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `correct_count` int(11) DEFAULT '0',
  `wrong_count` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `subject_id`, `question`, `description`, `created_at`, `updated_at`, `correct_count`, `wrong_count`) VALUES
(1, 12, 'Choose integer data type', NULL, '2017-12-21 18:44:37', '2017-12-21 20:38:46', 0, 8),
(2, 12, 'Choose String data type', NULL, '2017-12-21 18:45:10', '2017-12-21 20:38:45', 0, 9),
(3, 12, 'Choose float data type.', NULL, '2017-12-21 18:45:39', '2017-12-21 20:24:17', 0, 7),
(4, 12, 'what is a variable?', NULL, '2017-12-21 18:47:18', '2017-12-21 20:14:23', 0, 9),
(5, 12, 'What is array', NULL, '2017-12-21 18:48:06', '2017-12-21 20:19:37', 0, 8),
(6, 12, 'acronym meaning of OOP?', NULL, '2017-12-21 18:49:42', '2017-12-21 20:24:17', 0, 8),
(7, 12, 'what is database?', NULL, '2017-12-21 18:50:57', '2017-12-21 20:18:47', 0, 11),
(8, 12, 'Choose a type of loop.', NULL, '2017-12-21 18:54:41', '2017-12-21 20:38:45', 0, 11),
(9, 12, 'Choose a type of loop', NULL, '2017-12-21 18:55:23', '2017-12-21 20:38:45', 0, 10),
(10, 12, 'Choose a type of loop', NULL, '2017-12-21 18:56:06', '2017-12-21 20:38:45', 0, 6),
(11, 12, 'int a=10; what is the value of a?', NULL, '2017-12-21 18:57:16', '2017-12-21 20:18:38', 0, 8),
(12, 12, 'String name; what is tha datatype of the variable name', NULL, '2017-12-21 18:58:03', '2017-12-21 20:18:48', 0, 5),
(13, 12, 'int x[10] ; what is the side of the array?', NULL, '2017-12-21 18:58:48', '2017-12-21 20:19:38', 0, 11),
(14, 12, 'Is there such as multi dimenssional array?', NULL, '2017-12-21 18:59:45', '2017-12-21 20:38:45', 0, 9),
(15, 12, 'what is the shape of start in flowchart?', NULL, '2017-12-21 19:00:29', '2017-12-21 20:19:38', 0, 9),
(16, 12, 'What is the shape of decision in flowchart?', NULL, '2017-12-21 19:01:19', '2017-12-21 20:38:45', 0, 12),
(17, 12, 'what is the shape of input/output in flowchart?', NULL, '2017-12-21 19:02:42', '2017-12-21 20:24:17', 0, 10),
(18, 12, 'What is flowchart?', NULL, '2017-12-21 19:05:07', '2017-12-21 20:24:17', 0, 8),
(19, 12, 'What is algorithm?', NULL, '2017-12-21 19:06:27', '2017-12-21 20:38:45', 0, 9),
(20, 12, 'What is logic?', NULL, '2017-12-21 19:07:32', '2017-12-21 20:24:17', 0, 8),
(21, 12, 'what is function?', NULL, '2017-12-21 19:09:26', '2017-12-21 20:38:45', 0, 10),
(22, 12, 'what is parameter?', NULL, '2017-12-21 19:10:21', '2017-12-21 20:38:45', 0, 8),
(23, 12, 'what is programming language?', NULL, '2017-12-21 19:12:40', '2017-12-21 20:38:45', 0, 13),
(24, 12, 'how to declare an array?', NULL, '2017-12-21 19:15:57', '2017-12-21 20:38:45', 0, 7),
(25, 12, 'how to declare a float?', NULL, '2017-12-21 19:16:34', '2017-12-21 20:24:17', 0, 10),
(26, 12, 'choose variable with initial value', NULL, '2017-12-21 19:17:39', '2017-12-21 20:19:37', 0, 11),
(27, 12, 'choose String', NULL, '2017-12-21 19:18:08', '2017-12-21 20:38:45', 0, 8),
(28, 12, 'what is data type?', NULL, '2017-12-21 19:18:58', '2017-12-21 20:19:38', 0, 9),
(29, 12, 'what is a data?', NULL, '2017-12-21 19:19:43', '2017-12-21 20:38:45', 0, 12),
(30, 12, 'what is a value?', NULL, '2017-12-21 19:21:15', '2017-12-21 20:38:46', 0, 8),
(31, 12, 'plf meaning?', NULL, '2017-12-21 19:22:04', '2017-12-21 20:19:38', 0, 8),
(32, 12, 'what is input in the flowchart', NULL, '2017-12-21 19:23:49', '2017-12-21 20:38:45', 0, 9),
(33, 12, 'choose Integer', NULL, '2017-12-21 19:24:25', '2017-12-21 20:38:45', 0, 10),
(34, 12, 'choose array', NULL, '2017-12-21 19:24:48', '2017-12-21 20:24:17', 0, 7),
(35, 12, 'choose a loop', NULL, '2017-12-21 19:25:17', '2017-12-21 20:38:46', 0, 9),
(36, 12, 'what variable has a different data type?', NULL, '2017-12-21 19:26:24', '2017-12-21 20:38:46', 0, 9),
(37, 12, 'what is string data type here', NULL, '2017-12-21 19:27:16', '2017-12-21 20:19:38', 0, 11),
(38, 12, 'what is a loop?', NULL, '2017-12-21 19:28:23', '2017-12-21 20:24:17', 0, 6),
(39, 12, 'what is a condition', NULL, '2017-12-21 19:29:10', '2017-12-21 20:24:17', 0, 12),
(40, 12, 'choose array', NULL, '2017-12-21 19:30:24', '2017-12-21 20:38:45', 0, 10),
(41, 13, 'Rock, Paper or Scissor?', NULL, '2017-12-21 20:24:48', '2017-12-21 20:24:48', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam_choices`
--

CREATE TABLE `exam_choices` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(11) NOT NULL,
  `choices` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_correct` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam_choices`
--

INSERT INTO `exam_choices` (`id`, `exam_id`, `choices`, `is_correct`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'true', '2017-12-21 18:44:37', '2017-12-21 18:44:37'),
(2, 1, 'a', 'false', '2017-12-21 18:44:37', '2017-12-21 18:44:37'),
(3, 1, 'X', 'false', '2017-12-21 18:44:37', '2017-12-21 18:44:37'),
(4, 2, '\"Hello World\"', 'true', '2017-12-21 18:45:10', '2017-12-21 18:45:10'),
(5, 2, '123434', 'false', '2017-12-21 18:45:10', '2017-12-21 18:45:10'),
(6, 2, '!@#', 'false', '2017-12-21 18:45:11', '2017-12-21 18:45:11'),
(7, 3, '12.35', 'true', '2017-12-21 18:45:39', '2017-12-21 18:45:39'),
(8, 3, '000', 'false', '2017-12-21 18:45:39', '2017-12-21 18:45:39'),
(9, 3, '12', 'false', '2017-12-21 18:45:39', '2017-12-21 18:45:39'),
(10, 4, 'holds a value', 'false', '2017-12-21 18:47:18', '2017-12-21 18:47:18'),
(11, 4, 'string datatype', 'true', '2017-12-21 18:47:18', '2017-12-21 18:47:18'),
(12, 4, 'integer datatype', 'false', '2017-12-21 18:47:18', '2017-12-21 18:47:18'),
(13, 5, 'storage of multiple value', 'true', '2017-12-21 18:48:07', '2017-12-21 18:48:07'),
(14, 5, 'holds a value', 'false', '2017-12-21 18:48:07', '2017-12-21 18:48:07'),
(15, 5, 'accepts a value', 'false', '2017-12-21 18:48:07', '2017-12-21 18:48:07'),
(16, 6, 'Over Obvious Programmer', 'false', '2017-12-21 18:49:42', '2017-12-21 18:49:42'),
(17, 6, 'Object Oriented Programming', 'true', '2017-12-21 18:49:43', '2017-12-21 18:49:43'),
(18, 6, 'Oriented Object Programming', 'false', '2017-12-21 18:49:43', '2017-12-21 18:49:43'),
(19, 7, 'A collection of data', 'true', '2017-12-21 18:50:57', '2017-12-21 18:50:57'),
(20, 7, 'Data', 'false', '2017-12-21 18:50:57', '2017-12-21 18:50:57'),
(21, 7, 'A collection of String data', 'false', '2017-12-21 18:50:57', '2017-12-21 18:50:57'),
(22, 8, 'String name;', 'false', '2017-12-21 18:54:41', '2017-12-21 18:54:41'),
(23, 8, 'for(int a=0; a<10; a++)', 'true', '2017-12-21 18:54:42', '2017-12-21 18:54:42'),
(24, 8, 'array[]', 'false', '2017-12-21 18:54:42', '2017-12-21 18:54:42'),
(25, 9, 'qwe[]', 'false', '2017-12-21 18:55:23', '2017-12-21 18:55:23'),
(26, 9, 'do{} while{}', 'true', '2017-12-21 18:55:23', '2017-12-21 18:55:23'),
(27, 9, '\"Hello World\"', 'false', '2017-12-21 18:55:23', '2017-12-21 18:55:23'),
(28, 10, '12.52', 'false', '2017-12-21 18:56:06', '2017-12-21 18:56:06'),
(29, 10, 'while{}', 'true', '2017-12-21 18:56:06', '2017-12-21 18:56:06'),
(30, 10, '\"Loop\"', 'false', '2017-12-21 18:56:06', '2017-12-21 18:56:06'),
(31, 11, '10.00', 'false', '2017-12-21 18:57:16', '2017-12-21 18:57:16'),
(32, 11, '10', 'true', '2017-12-21 18:57:16', '2017-12-21 18:57:16'),
(33, 11, '10.0000', 'false', '2017-12-21 18:57:16', '2017-12-21 18:57:16'),
(34, 12, 'String', 'true', '2017-12-21 18:58:04', '2017-12-21 18:58:04'),
(35, 12, 'integer', 'false', '2017-12-21 18:58:04', '2017-12-21 18:58:04'),
(36, 12, 'float', 'false', '2017-12-21 18:58:04', '2017-12-21 18:58:04'),
(37, 13, '100', 'false', '2017-12-21 18:58:48', '2017-12-21 18:58:48'),
(38, 13, '01', 'false', '2017-12-21 18:58:48', '2017-12-21 18:58:48'),
(39, 13, '10', 'true', '2017-12-21 18:58:48', '2017-12-21 18:58:48'),
(40, 14, 'TRUE', 'true', '2017-12-21 18:59:45', '2017-12-21 18:59:45'),
(41, 14, 'FALSE', 'false', '2017-12-21 18:59:46', '2017-12-21 18:59:46'),
(42, 14, 'None of the above', 'false', '2017-12-21 18:59:46', '2017-12-21 18:59:46'),
(43, 15, 'circle', 'true', '2017-12-21 19:00:29', '2017-12-21 19:00:29'),
(44, 15, 'square', 'false', '2017-12-21 19:00:29', '2017-12-21 19:00:29'),
(45, 15, 'rectangle', 'false', '2017-12-21 19:00:29', '2017-12-21 19:00:29'),
(46, 16, 'circle', 'false', '2017-12-21 19:01:19', '2017-12-21 19:01:19'),
(47, 16, 'square', 'false', '2017-12-21 19:01:19', '2017-12-21 19:01:19'),
(48, 16, 'diamond', 'true', '2017-12-21 19:01:19', '2017-12-21 19:01:19'),
(49, 17, 'rectangle with 2 sides slant', 'true', '2017-12-21 19:02:42', '2017-12-21 19:02:42'),
(50, 17, 'diamond', 'false', '2017-12-21 19:02:42', '2017-12-21 19:02:42'),
(51, 17, 'square', 'false', '2017-12-21 19:02:42', '2017-12-21 19:02:42'),
(52, 18, 'A diagram of the sequence of movements or actions of people or things involved in a complex system or activity.', 'true', '2017-12-21 19:05:07', '2017-12-21 19:05:07'),
(53, 18, 'A diagram with shapes and values', 'false', '2017-12-21 19:05:07', '2017-12-21 19:05:07'),
(54, 18, 'A diagram for system planning', 'false', '2017-12-21 19:05:07', '2017-12-21 19:05:07'),
(55, 19, 'none of the above', 'false', '2017-12-21 19:06:27', '2017-12-21 19:06:27'),
(56, 19, 'A process with start and end', 'false', '2017-12-21 19:06:27', '2017-12-21 19:06:27'),
(57, 19, 'A process or set of rules to be followed in calculations or other problem-solving operations, especially by a computer.', 'true', '2017-12-21 19:06:27', '2017-12-21 19:06:27'),
(58, 20, 'Reasoning principles with no vallidity.', 'false', '2017-12-21 19:07:33', '2017-12-21 19:07:33'),
(59, 20, 'Reasoning conducted or assessed according to strict principles of validity.', 'true', '2017-12-21 19:07:33', '2017-12-21 19:07:33'),
(60, 20, 'none of the above', 'false', '2017-12-21 19:07:33', '2017-12-21 19:07:33'),
(61, 21, 'it executes a task', 'false', '2017-12-21 19:09:26', '2017-12-21 19:09:26'),
(62, 21, 'A named section of a program that performs a specific task', 'true', '2017-12-21 19:09:26', '2017-12-21 19:09:26'),
(63, 21, 'none of the above', 'false', '2017-12-21 19:09:26', '2017-12-21 19:09:26'),
(64, 22, 'a variable with data', 'false', '2017-12-21 19:10:21', '2017-12-21 19:10:21'),
(65, 22, 'These pieces of data are called arguments.', 'true', '2017-12-21 19:10:21', '2017-12-21 19:10:21'),
(66, 22, 'none of the above', 'false', '2017-12-21 19:10:21', '2017-12-21 19:10:21'),
(67, 23, 'language with syntax', 'false', '2017-12-21 19:12:41', '2017-12-21 19:12:41'),
(68, 23, 'none of the above', 'false', '2017-12-21 19:12:41', '2017-12-21 19:12:41'),
(69, 23, 'formal language that specifies a set of instructions that can be used to produce various kinds of output.', 'true', '2017-12-21 19:12:41', '2017-12-21 19:12:41'),
(70, 24, '[]x =integer;', 'false', '2017-12-21 19:15:57', '2017-12-21 19:15:57'),
(71, 24, 'integer x[];', 'true', '2017-12-21 19:15:57', '2017-12-21 19:15:57'),
(72, 24, 'x[integer];', 'false', '2017-12-21 19:15:57', '2017-12-21 19:15:57'),
(73, 25, 'number float;', 'false', '2017-12-21 19:16:34', '2017-12-21 19:16:34'),
(74, 25, 'float number;', 'true', '2017-12-21 19:16:34', '2017-12-21 19:16:34'),
(75, 25, 'none of the above', 'false', '2017-12-21 19:16:34', '2017-12-21 19:16:34'),
(76, 26, 'x=1;', 'false', '2017-12-21 19:17:39', '2017-12-21 19:17:39'),
(77, 26, 'd=!;', 'true', '2017-12-21 19:17:39', '2017-12-21 19:17:39'),
(78, 26, 'none of the above', 'false', '2017-12-21 19:17:39', '2017-12-21 19:17:39'),
(79, 27, 'none of the above', 'true', '2017-12-21 19:18:08', '2017-12-21 19:18:08'),
(80, 27, '12', 'false', '2017-12-21 19:18:08', '2017-12-21 19:18:08'),
(81, 27, '12.6888', 'false', '2017-12-21 19:18:08', '2017-12-21 19:18:08'),
(82, 28, 'none of the above', 'false', '2017-12-21 19:18:58', '2017-12-21 19:18:58'),
(83, 28, 'a data', 'false', '2017-12-21 19:18:59', '2017-12-21 19:18:59'),
(84, 28, 'a classification of data', 'true', '2017-12-21 19:18:59', '2017-12-21 19:18:59'),
(85, 29, 'none of the above', 'false', '2017-12-21 19:19:43', '2017-12-21 19:19:43'),
(86, 29, 'distinct information that is formatted in a special way.', 'true', '2017-12-21 19:19:44', '2017-12-21 19:19:44'),
(87, 29, 'a value', 'false', '2017-12-21 19:19:44', '2017-12-21 19:19:44'),
(88, 30, 'a data after the equal sign', 'false', '2017-12-21 19:21:15', '2017-12-21 19:21:15'),
(89, 30, 'The representation of some entity that can be manipulated by a program.', 'true', '2017-12-21 19:21:15', '2017-12-21 19:21:15'),
(90, 30, 'none of the above', 'false', '2017-12-21 19:21:15', '2017-12-21 19:21:15'),
(91, 31, 'program logic formulation', 'true', '2017-12-21 19:22:04', '2017-12-21 19:22:04'),
(92, 31, 'process logic formula', 'false', '2017-12-21 19:22:05', '2017-12-21 19:22:05'),
(93, 31, 'none of the above', 'false', '2017-12-21 19:22:05', '2017-12-21 19:22:05'),
(94, 32, 'it is where we declare a value', 'false', '2017-12-21 19:23:49', '2017-12-21 19:23:49'),
(95, 32, 'it is a data', 'false', '2017-12-21 19:23:49', '2017-12-21 19:23:49'),
(96, 32, 'none of the above', 'true', '2017-12-21 19:23:49', '2017-12-21 19:23:49'),
(97, 33, '100', 'true', '2017-12-21 19:24:25', '2017-12-21 19:24:25'),
(98, 33, '100.100', 'false', '2017-12-21 19:24:25', '2017-12-21 19:24:25'),
(99, 33, 'x[100]', 'false', '2017-12-21 19:24:25', '2017-12-21 19:24:25'),
(100, 34, '\"Hello World\"', 'false', '2017-12-21 19:24:48', '2017-12-21 19:24:48'),
(101, 34, 'none of the above', 'true', '2017-12-21 19:24:48', '2017-12-21 19:24:48'),
(102, 34, '12.69', 'false', '2017-12-21 19:24:48', '2017-12-21 19:24:48'),
(103, 35, 'for loop', 'false', '2017-12-21 19:25:17', '2017-12-21 19:25:17'),
(104, 35, 'while loop', 'false', '2017-12-21 19:25:17', '2017-12-21 19:25:17'),
(105, 35, 'all of the above', 'true', '2017-12-21 19:25:17', '2017-12-21 19:25:17'),
(106, 36, 'int a;', 'false', '2017-12-21 19:26:24', '2017-12-21 19:26:24'),
(107, 36, 'int b;', 'false', '2017-12-21 19:26:24', '2017-12-21 19:26:24'),
(108, 36, 'string c;', 'true', '2017-12-21 19:26:24', '2017-12-21 19:26:24'),
(109, 37, 'name=\"glory\"', 'true', '2017-12-21 19:27:16', '2017-12-21 19:27:16'),
(110, 37, 'x[\"glory\"]', 'false', '2017-12-21 19:27:16', '2017-12-21 19:27:16'),
(111, 37, 'none of the above', 'false', '2017-12-21 19:27:16', '2017-12-21 19:27:16'),
(112, 38, 'sequence of instruction s that is continually repeated until a certain condition is reached.', 'true', '2017-12-21 19:28:23', '2017-12-21 19:28:23'),
(113, 38, 'its a sequence with infinite loop.', 'false', '2017-12-21 19:28:23', '2017-12-21 19:28:23'),
(114, 38, 'none of the above', 'false', '2017-12-21 19:28:23', '2017-12-21 19:28:23'),
(115, 39, 'true or false', 'false', '2017-12-21 19:29:10', '2017-12-21 19:29:10'),
(116, 39, 'perform different computations or actions depending on whether a programmer-specified boolean condition evaluates to true or false.', 'true', '2017-12-21 19:29:10', '2017-12-21 19:29:10'),
(117, 39, 'none of the above', 'false', '2017-12-21 19:29:10', '2017-12-21 19:29:10'),
(118, 40, 'int x[]', 'true', '2017-12-21 19:30:24', '2017-12-21 19:30:24'),
(119, 40, 'x=0;', 'false', '2017-12-21 19:30:24', '2017-12-21 19:30:24'),
(120, 40, 'none of the above', 'false', '2017-12-21 19:30:24', '2017-12-21 19:30:24'),
(121, 41, 'Rock', 'true', '2017-12-21 20:24:48', '2017-12-21 20:24:48'),
(122, 41, 'Paper', 'false', '2017-12-21 20:24:48', '2017-12-21 20:24:48'),
(123, 41, 'Scissor', 'false', '2017-12-21 20:24:48', '2017-12-21 20:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `exam_records`
--

CREATE TABLE `exam_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `pass_fail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam_records`
--

INSERT INTO `exam_records` (`id`, `quiz_id`, `student_id`, `lecturer_id`, `pass_fail`, `created_at`, `updated_at`) VALUES
(1, 12, 7, 8, 'fail', '2017-12-21 20:38:46', '2017-12-21 20:38:46'),
(2, 12, 10, 8, 'pass', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_09_10_064323_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2017_12_10_070852_create_courses_table', 1),
(5, '2017_12_10_071110_create_subjects_table', 1),
(6, '2017_12_10_072148_create_syllabi_table', 1),
(7, '2017_12_10_131416_create_subject_courses_table', 1),
(8, '2017_12_11_043002_create_topics_table', 1),
(9, '2017_12_14_141729_create_subject_topics_table', 1),
(10, '2017_12_15_071145_create_topic_videos_table', 1),
(11, '2017_12_17_091445_create_exams_table', 2),
(12, '2017_12_17_091503_create_quizzes_table', 2),
(13, '2017_12_17_113144_create_exam_choices_table', 3),
(14, '2017_12_17_113207_create_quiz_choices_table', 3),
(16, '2017_12_18_191200_create_quiz_records_table', 4),
(17, '2017_12_19_163427_create_exam_records_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(10) UNSIGNED NOT NULL,
  `syllabus_id` int(11) NOT NULL,
  `question` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correct_count` int(11) DEFAULT '0',
  `wrong_count` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `syllabus_id`, `question`, `created_at`, `updated_at`, `description`, `correct_count`, `wrong_count`) VALUES
(1, 1, 'The most important parts of software development, requirement gathering or requirement analysis are usually done by the most skilled and experienced software engineers in the organization. After the requirements are gathered from the client, a scope document is created in which the scope of the project is determined and documented.', '2017-12-21 06:58:03', '2017-12-21 06:58:03', NULL, 0, 0),
(2, 1, 'what is datatype?', '2017-12-21 19:32:11', '2017-12-21 19:32:11', NULL, 0, 0),
(3, 1, 'choose a loop', '2017-12-21 19:32:59', '2017-12-21 19:32:59', NULL, 0, 0),
(4, 1, 'what is the shape of deccision in flowchart?', '2017-12-21 19:33:38', '2017-12-21 19:33:38', NULL, 0, 0),
(5, 1, 'what is the shape of start and end in a flowchart?', '2017-12-21 19:34:19', '2017-12-21 19:34:19', NULL, 0, 0),
(6, 1, 'declare a variable string', '2017-12-21 19:34:56', '2017-12-21 19:34:56', NULL, 0, 0),
(7, 1, 'declare a variable array', '2017-12-21 19:35:35', '2017-12-21 19:35:35', NULL, 0, 0),
(8, 1, 'choose a float value', '2017-12-21 19:36:12', '2017-12-21 19:36:12', NULL, 0, 0),
(9, 1, 'declare a for loop', '2017-12-21 19:36:59', '2017-12-21 19:36:59', NULL, 0, 0),
(10, 1, 'what is boolen', '2017-12-21 19:38:12', '2017-12-21 19:38:12', NULL, 0, 0),
(11, 1, 'choose string value', '2017-12-21 19:38:58', '2017-12-21 19:38:58', NULL, 0, 0),
(12, 1, 'choose string value', '2017-12-21 19:39:52', '2017-12-21 19:39:52', NULL, 0, 0),
(13, 1, 'choose float value', '2017-12-21 19:40:26', '2017-12-21 19:40:26', NULL, 0, 0),
(14, 1, 'choose integer value', '2017-12-21 19:40:47', '2017-12-21 19:40:47', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_choices`
--

CREATE TABLE `quiz_choices` (
  `id` int(10) UNSIGNED NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `choices` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_correct` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quiz_choices`
--

INSERT INTO `quiz_choices` (`id`, `quiz_id`, `choices`, `is_correct`, `created_at`, `updated_at`) VALUES
(1, 1, 'Planning', 'true', '2017-12-21 06:58:03', '2017-12-21 06:58:03'),
(2, 1, 'Implementation', 'false', '2017-12-21 06:58:03', '2017-12-21 06:58:03'),
(3, 1, 'Testing', 'false', '2017-12-21 06:58:03', '2017-12-21 06:58:03'),
(4, 2, 'an attribute that tells what kind of data that value can have.', 'true', '2017-12-21 19:32:11', '2017-12-21 19:32:11'),
(5, 2, 'a name of variable', 'false', '2017-12-21 19:32:11', '2017-12-21 19:32:11'),
(6, 2, 'none of the above', 'false', '2017-12-21 19:32:11', '2017-12-21 19:32:11'),
(7, 3, 'for loop', 'false', '2017-12-21 19:32:59', '2017-12-21 19:32:59'),
(8, 3, 'while loop', 'false', '2017-12-21 19:32:59', '2017-12-21 19:32:59'),
(9, 3, 'all of the above', 'true', '2017-12-21 19:32:59', '2017-12-21 19:32:59'),
(10, 4, 'square', 'false', '2017-12-21 19:33:38', '2017-12-21 19:33:38'),
(11, 4, 'circle', 'false', '2017-12-21 19:33:38', '2017-12-21 19:33:38'),
(12, 4, 'diamond', 'true', '2017-12-21 19:33:38', '2017-12-21 19:33:38'),
(13, 5, 'cirlce', 'true', '2017-12-21 19:34:19', '2017-12-21 19:34:19'),
(14, 5, 'rectangle', 'false', '2017-12-21 19:34:19', '2017-12-21 19:34:19'),
(15, 5, 'square', 'false', '2017-12-21 19:34:19', '2017-12-21 19:34:19'),
(16, 6, 'name string;', 'false', '2017-12-21 19:34:56', '2017-12-21 19:34:56'),
(17, 6, 'string name;', 'true', '2017-12-21 19:34:56', '2017-12-21 19:34:56'),
(18, 6, 'none of the above', 'false', '2017-12-21 19:34:56', '2017-12-21 19:34:56'),
(19, 7, 'x[array];', 'false', '2017-12-21 19:35:35', '2017-12-21 19:35:35'),
(20, 7, 'string x[];', 'true', '2017-12-21 19:35:36', '2017-12-21 19:35:36'),
(21, 7, 'x[] string;', 'false', '2017-12-21 19:35:36', '2017-12-21 19:35:36'),
(22, 8, '78.36', 'true', '2017-12-21 19:36:12', '2017-12-21 19:36:12'),
(23, 8, '12222', 'false', '2017-12-21 19:36:12', '2017-12-21 19:36:12'),
(24, 8, '00000', 'false', '2017-12-21 19:36:12', '2017-12-21 19:36:12'),
(25, 9, 'for(int a=0; a<10; a++)', 'true', '2017-12-21 19:36:59', '2017-12-21 19:36:59'),
(26, 9, 'for(a=0; a++)', 'false', '2017-12-21 19:36:59', '2017-12-21 19:36:59'),
(27, 9, 'none of the above', 'false', '2017-12-21 19:36:59', '2017-12-21 19:36:59'),
(28, 10, '2,3', 'false', '2017-12-21 19:38:12', '2017-12-21 19:38:12'),
(29, 10, '0, 1', 'false', '2017-12-21 19:38:12', '2017-12-21 19:38:12'),
(30, 10, 'having two values usually denoted true and false.', 'false', '2017-12-21 19:38:12', '2017-12-21 19:38:12'),
(31, 11, '\"Hello World\"', 'false', '2017-12-21 19:38:58', '2017-12-21 19:38:58'),
(32, 11, '1111', 'false', '2017-12-21 19:38:58', '2017-12-21 19:38:58'),
(33, 11, '!@#$', 'false', '2017-12-21 19:38:58', '2017-12-21 19:38:58'),
(34, 12, 'x[100]', 'false', '2017-12-21 19:39:52', '2017-12-21 19:39:52'),
(35, 12, '\"12.333\"', 'true', '2017-12-21 19:39:52', '2017-12-21 19:39:52'),
(36, 12, '12.33', 'false', '2017-12-21 19:39:52', '2017-12-21 19:39:52'),
(37, 13, '\"500.12\"', 'false', '2017-12-21 19:40:26', '2017-12-21 19:40:26'),
(38, 13, '500', 'false', '2017-12-21 19:40:26', '2017-12-21 19:40:26'),
(39, 13, '5.364', 'true', '2017-12-21 19:40:26', '2017-12-21 19:40:26'),
(40, 14, '100', 'true', '2017-12-21 19:40:47', '2017-12-21 19:40:47'),
(41, 14, '\"100\"', 'false', '2017-12-21 19:40:48', '2017-12-21 19:40:48'),
(42, 14, '100.100', 'false', '2017-12-21 19:40:48', '2017-12-21 19:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_records`
--

CREATE TABLE `quiz_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `pass_fail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Registrar', '', NULL, NULL),
(2, 'Academic Head', '', NULL, NULL),
(3, 'Lecturer', '', NULL, NULL),
(4, 'Student', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `year_level` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `description`, `year_level`, `user_id`, `is_active`, `created_at`, `updated_at`) VALUES
(12, 'Program Logic Formulation', 'This course is designed for beginners who want a stepping stone to the programmer’s world. Students will be taught the basic problem solving techniques, flow charting, writing pseudo code. The students will be exposed to several problem solving activities involving the three basic programming constructs – selection, sequence and iteration – that will prepare for succeeding programming courses.', 1, 8, 1, '2017-12-21 05:29:18', '2017-12-21 20:00:22'),
(13, 'COMPUTER PROGRAMMING', 'This programming course provides an opportunity for the students to apply the concepts learned in Program Logic Formulation using a structured programming language such as C. It allows students to write program that utilize the three major programming constructs – sequence, selection, and iteration. It introduces students to the process of writing compiling and debugging computer programs.', 1, 9, 0, '2017-12-21 05:31:52', '2017-12-21 05:50:35'),
(14, 'Object Oriented Programming', 'This course allows the student to learn and apply the basic language syntax and principles of object-oriented programming to solve computational problems adhering to the standards and guidelines of documentation. It introduces students to the key object-oriented principles – polymorphism, inheritance and encapsulation', 2, 8, 0, '2017-12-21 05:37:31', '2017-12-21 17:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `subject_courses`
--

CREATE TABLE `subject_courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_courses`
--

INSERT INTO `subject_courses` (`id`, `subject_id`, `course_id`, `created_at`, `updated_at`) VALUES
(29, 12, 4, '2017-12-21 05:29:18', '2017-12-21 05:29:18'),
(30, 12, 5, '2017-12-21 05:29:18', '2017-12-21 05:29:18'),
(31, 13, 4, '2017-12-21 05:31:52', '2017-12-21 05:31:52'),
(32, 13, 5, '2017-12-21 05:31:52', '2017-12-21 05:31:52'),
(33, 14, 4, '2017-12-21 05:37:32', '2017-12-21 05:37:32'),
(34, 14, 5, '2017-12-21 05:37:32', '2017-12-21 05:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `subject_topics`
--

CREATE TABLE `subject_topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `topic_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `syllabus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject_topics`
--

INSERT INTO `subject_topics` (`id`, `subject_id`, `topic_title`, `note`, `user_id`, `created_at`, `updated_at`, `syllabus_id`) VALUES
(1, 12, 'adwdwd', 'awdwdawd', 8, '2017-12-21 09:45:25', '2017-12-21 09:45:25', 1),
(2, 12, 'ad', 'aw', 8, '2017-12-21 09:47:54', '2017-12-21 09:47:54', 1),
(3, 12, 'test', 'test', 8, '2017-12-21 09:57:35', '2017-12-21 09:57:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `syllabi`
--

CREATE TABLE `syllabi` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `subject_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 12, 'Systems Development Life Cycle', 'Fusce tempus mattis nibh nec hendrerit. Etiam porta odio vel lorem fringilla vestibulum. Sed mattis sollicitudin lorem, eget facilisis libero sodales id. Aliquam et semper quam.', '2017-12-21 06:05:34', '2017-12-21 06:08:27'),
(2, 12, 'Flowcharting Symbols', 'Ut lorem sapien, consectetur sodales sem sit amet, tristique varius purus. Nullam ut risus posuere, congue tellus eget, tincidunt eros.', '2017-12-21 06:07:51', '2017-12-21 06:07:51'),
(3, 12, 'Pseudocode', 'Nunc vulputate justo at libero auctor dictum. Donec luctus purus ante, nec ultricies mi commodo vitae. Morbi malesuada pharetra nibh.', '2017-12-21 06:08:12', '2017-12-21 06:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `topic_videos`
--

CREATE TABLE `topic_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject_topic_id` int(11) DEFAULT NULL,
  `link` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topic_videos`
--

INSERT INTO `topic_videos` (`id`, `created_at`, `updated_at`, `subject_topic_id`, `link`) VALUES
(1, '2017-12-21 09:45:26', '2017-12-21 09:45:26', 1, NULL),
(2, '2017-12-21 09:47:54', '2017-12-21 09:47:54', 2, 'https://www.youtube.com/embed/WS7f5xpGYn8'),
(3, '2017-12-21 09:57:35', '2017-12-21 09:57:35', 3, 'https://www.youtube.com/embed/Mjlsmets--0'),
(4, '2017-12-21 09:57:35', '2017-12-21 09:57:35', 3, 'https://www.youtube.com/embed/515lLZS082U');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `course` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N/A',
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `is_active`, `course`, `firstname`, `middlename`, `lastname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 1, 1, '0', 'Lorelei', 'Pasco', 'Tupas', 'lptupas@info.com', '$2y$10$jqUhmbbSFUKdQB0qQPEYIePdyzavH.mBdnMb7v36n/4yMAO.WDP/y', 'zczVYixqKZnj6TJGa2hvgCNqci3CvLEX55jrWOe3fwpqsTW6EpmEZPc9PSYz', '2017-12-16 02:13:14', '2017-12-21 12:55:53'),
(6, 2, 1, '0', 'Richard', 'V', 'Gonzales', 'rvgonzales@info.com', '$2y$10$BTBi3t9iqWYKPCtzoHlNxOPuqKkxhJYxj.QRFzU1HIbkrsbW8ymn2', 'Fn6u2MLYnUJ8t9XSSDVNAJrqJ8vrfT5jspKpZdqTzdeCNEoD1uJi7HT49kK0', '2017-12-16 02:13:53', '2017-12-16 02:13:53'),
(7, 4, 1, '4', 'Jerome', 'R', 'Adriano', 'jradriano@info.com', '$2y$10$3qwqXb5Px4iM/WluGw2UTekJGKemA8M.2SSfs96n8/ykRJUGhjQXu', 'TvfTb5Y7hql27xWv1o47Ob8NTz7juJzznHRuAxqe41ajqLIEC8zsmhG9JcbU', '2017-12-16 02:14:38', '2017-12-16 02:23:28'),
(8, 3, 1, '0', 'Danica', 'V', 'Armamento', 'dvarmamento@info.com', '$2y$10$NowDVXn7YH/0kx.tf3MbiO9ILvfVf4ZNlzY61dOKi.HnTvPOWhVgS', 'nfws67ypzQNzTG6boFmhilpSI6dyIuzb4r7AodgTOismpxvhO7sQtIbnKJuQ', '2017-12-16 02:22:31', '2017-12-16 02:22:31'),
(9, 3, 1, '0', 'jem', 'm', 'mejia', 'jmmejia@info.com', '$2y$10$gcfqJ82L2EkG74mlGqP/eu3Ko1TbcYh89c78Pw/WrQIBLpgJYLvPS', 'l6GiSur2b10j3tRgqpk7DEpCS5halFoEBaZkjpocBAUoZoaucRf322QLWHm2', '2017-12-16 08:44:08', '2017-12-16 08:44:08'),
(10, 4, 1, '5', 'ricky', 'm', 'galang', 'rmgalang@info.com', '$2y$10$h0tccuSy9PivLDvBkEPyNe0QtPsueMerAQrqKei2uuNrNKlBoSsG2', '3Hyzbz8OuHQqJc4en9kZREaWs3y4CSN3Y20pUA95v2nlF9myVKWubpWssKrK', '2017-12-16 14:24:26', '2017-12-20 16:43:12'),
(11, 1, 0, '0', 'awdawd', 'awdaw', 'dawdaw', 'dawdawd@info.com', '$2y$10$6jvp09a7.0nwuzBNqlPfx.td97nVVmYRDNujFpF6bqBjnWamlurhG', 'a0NrB30eVHLl3PtkuqqXGSEaZVdwVpHUDVtnMZ13eWbwPAyfmHTCaVDFyqW3', '2017-12-21 15:39:09', '2017-12-21 15:39:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_choices`
--
ALTER TABLE `exam_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_records`
--
ALTER TABLE `exam_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_choices`
--
ALTER TABLE `quiz_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_records`
--
ALTER TABLE `quiz_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_user_id_foreign` (`user_id`);

--
-- Indexes for table `subject_courses`
--
ALTER TABLE `subject_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_courses_subject_id_foreign` (`subject_id`),
  ADD KEY `subject_courses_course_id_foreign` (`course_id`);

--
-- Indexes for table `subject_topics`
--
ALTER TABLE `subject_topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_topics_subject_id_foreign` (`subject_id`),
  ADD KEY `subject_topics_user_id_foreign` (`user_id`);

--
-- Indexes for table `syllabi`
--
ALTER TABLE `syllabi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `topic_videos`
--
ALTER TABLE `topic_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `exam_choices`
--
ALTER TABLE `exam_choices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `exam_records`
--
ALTER TABLE `exam_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `quiz_choices`
--
ALTER TABLE `quiz_choices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `quiz_records`
--
ALTER TABLE `quiz_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `subject_courses`
--
ALTER TABLE `subject_courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `subject_topics`
--
ALTER TABLE `subject_topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `syllabi`
--
ALTER TABLE `syllabi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `topic_videos`
--
ALTER TABLE `topic_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subject_courses`
--
ALTER TABLE `subject_courses`
  ADD CONSTRAINT `subject_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_courses_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subject_topics`
--
ALTER TABLE `subject_topics`
  ADD CONSTRAINT `subject_topics_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_topics_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD CONSTRAINT `topics_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
