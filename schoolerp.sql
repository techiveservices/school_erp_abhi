-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 06:45 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolerp`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class`, `created_at`, `updated_at`) VALUES
(1, 'Nursery', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(2, 'LKG', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(3, 'UKG', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(4, '1st', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(5, '2nd', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(6, '3rd', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(7, '4th', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(8, '5th', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(9, '6th', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(10, '7th', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(11, '8th', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(12, '9th', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(13, '10th', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(14, '11th', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(15, '12th', '2019-11-07 04:46:06', '2019-11-07 04:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `class_sections`
--

CREATE TABLE `class_sections` (
  `sec_id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_sections`
--

INSERT INTO `class_sections` (`sec_id`, `section`, `created_at`, `updated_at`) VALUES
(1, 'A', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(2, 'B', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(3, 'C', '2019-11-07 04:46:06', '2019-11-07 04:46:06'),
(4, 'D', '2019-11-07 04:46:06', '2019-11-07 04:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `create_students`
--

CREATE TABLE `create_students` (
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `school_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_office_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_office_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob_no1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob_no2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `create_students`
--

INSERT INTO `create_students` (`s_id`, `school_id`, `name`, `class`, `section`, `email`, `gender`, `pwd`, `father_name`, `f_office_add`, `f_mobile_no`, `mother_name`, `m_office_add`, `m_mobile_no`, `address`, `mob_no1`, `mob_no2`, `dob`, `parent_email`, `st_image`, `created_at`, `updated_at`) VALUES
(1, 3, 'dgsdf', '2nd', 'A', 'nehamittal1230@gmail.com', 'Male', '$2y$10$EVrXGsctsIqIBKnAbOfrA.oebzzZLnpbgy..rQKgRH/ebsVbVmNR6', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'dfg', 'nehamittal1230@gmail.com', '149309650.jpg', '2019-11-07 02:55:00', '2019-11-07 02:55:00'),
(2, 3, 'Abhishek', '2nd', 'A', 'nehamittal1230@gmail.com', 'Male', '$2y$10$J3e.qbX/jfqReXpY6BePlOpHz.ILYf2bkingFqR5oOg327b/oxJcy', 'ABC', 'D/106 Saket, Meerut (U.P.) 250 001', '563596', 'SDFG', 'D/106 Saket, Meerut (U.P.) 250 001', '89565985', 'D/106 Saket, Meerut (U.P.) 250 001', '895635253', '6562365', '56333', 'nehamittal1230@gmail.com', '534339295.png', '2019-11-07 02:58:11', '2019-11-07 02:58:11'),
(3, 3, 'dgsdf', '1st', 'C', 'nehamittal1230@gmail.com', 'Female', '$2y$10$yzmE7oR52Jp5ou0YejPakuIZzbEk3U1dfgjZDOf7EBpxaQ0vg1/KW', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', '6562365', 'dfg', 'nehamittal1230@gmail.com', '921143432.png', '2019-11-07 03:32:44', '2019-11-07 03:32:44'),
(4, 3, 'dgsdf', '3rd', 'C', 'nehamittal1230@gmail.com', 'Female', '$2y$10$GblZ5plygeJUU/y/F6TsM.nnhCmWXykqA/gj2j8cvGR.SC7fnff5S', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'dfg', 'nehamittal1230@gmail.com', NULL, '2019-11-07 03:35:24', '2019-11-07 03:35:24'),
(5, 3, 'Rohit', '2nd', 'C', 'nehamittal1230@gmail.com', 'Female', '$2y$10$QAjce8ndGQIGjlbA0dN24uDttO2IBLsS1SuFUXRqjM3JxfVcrooEy', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', '563596', 'SDFG', 'D/106 Saket, Meerut (U.P.) 250 001', '89565985', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', '6562365', '56333', 'nehamittal1230@gmail.com', NULL, '2019-11-07 03:37:14', '2019-11-07 03:37:14'),
(6, 4, 'Abhishek', '2nd', 'A', 'nehamittal1230@gmail.com', 'Male', '$2y$10$1eubtoNVZLjzfgqcNDohheWP3gfiLZB6TKcitQcRacrxueHNHAtqe', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', '563596', 'SDFG', 'D/106 Saket, Meerut (U.P.) 250 001', '89565985', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', '56333', 'nehamittal1230@gmail.com', NULL, '2019-11-07 03:40:05', '2019-11-07 03:40:05'),
(7, 4, 'Abhishek', '2nd', 'A', 'abhishek@techive.in', 'Male', '$2y$10$E6DlB.D8XD.fY0yF8aGpju5p63kH2.ddk36bVn4bkwP7XCUe6tp1e', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'dfg', 'nehamittal1230@gmail.com', NULL, '2019-11-07 03:40:56', '2019-11-07 03:40:56'),
(8, 5, 'Vishal', '3rd', 'B', 'vishal@gmail.com', 'Male', '$2y$10$e6ZA3Hi5koX3xFY1Sbw6W./IDb8oQtxetSk8Sj6FnsyghxJ0v0OOy', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'dfg', 'nehamittal1230@gmail.com', NULL, '2019-11-07 03:42:43', '2019-11-07 03:42:43'),
(9, 4, 'Joe', '2nd', 'B', 'abh@gmail.com', 'Male', '$2y$10$.i3vhftdRxEPov9X0bPprOMWjdRF9Tpzj0ji9LZrzkaGj9A7wWhd2', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'dfg', 'nehamittal1230@gmail.com', NULL, '2019-11-07 04:16:25', '2019-11-07 04:16:25'),
(10, 3, 'Abhishek', '2nd', 'A', 'admin@techive.in', 'Male', '$2y$10$GE1fHVO0AHRe0NGrWyCQ8Ovqzhh8mI/nqE3U47JeaQK//DTWTCtQu', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', '89565985', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', '6562365', '56333', 'nehamittal1230@gmail.com', NULL, '2019-11-07 04:27:45', '2019-11-07 04:27:45'),
(11, 3, 'Rohit', '2nd', 'D', 'rohit@gmail.com', 'Male', '$2y$10$1Oz2YaOvAUyGIDG9TMRqO.IZ1UVftLByxHSn9/xk6Jpu3FkGIG9Iu', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', '563596', 'SDFG', 'D/106 Saket, Meerut (U.P.) 250 001', '89565985', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', '6562365', '56333', 'nehamittal1230@gmail.com', '1711589602.jpg', '2019-11-07 04:34:27', '2019-11-07 04:34:27'),
(12, 3, 'Vishal', '3rd', 'C', 'vis@gmail.com', 'Male', '$2y$10$L2hx0xwp5nVzjas.A9JRl.EKVg1XvyyzCGcID70YURRAoCndUZnSm', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', '563596', 'SDFG', 'D/106 Saket, Meerut (U.P.) 250 001', '89565985', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', '6562365', '56333', 'nehamittal1230@gmail.com', '755064525.jpg', '2019-11-07 04:40:49', '2019-11-07 04:40:49'),
(13, 4, 'Abhishek', '10th', 'A', 'g@gmail.com', 'Male', '$2y$10$T0wtNvwtyj7yVxBqKdd8U.eqqy4E0vu6wIHX4H3ecI/KgkVDk8Rze', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', '563596', 'dfg', 'D/106 Saket, Meerut (U.P.) 250 001', '89565985', 'D/106 Saket, Meerut (U.P.) 250 001', 'dfg', '6562365', '56333', 'nehamittal1230@gmail.com', '1302047021.jpg', '2019-11-07 04:43:30', '2019-11-07 04:43:30'),
(14, 11, 'Vishal chabbra', '12th', 'A', 'visallal@gmail.com', 'Male', '$2y$10$X7u7zSWJXF6U2KlIPcVKIeEhiNi.wctavvU7INRcUPkf1fIL.ATTG', 'Mohan lal', 'D/106 Saket, Meerut (U.P.) 250 001', '3656625', 'Supriya', 'D/106 Saket, Meerut (U.P.) 250 001', '89565985', 'D/106 Saket, Meerut (U.P.) 250 001', '3256324856', '5624369852', '17/09/1992', 'mohanlal@gmail.com', '1391706953.jpg', '2019-11-07 06:40:58', '2019-11-07 06:40:58'),
(15, 11, 'Rohit', '5th', 'B', 'r@gmail.com', 'Male', '$2y$10$oJfTnEBJ6ZNuI9.PXzVuFOUJ3cem7mR.O9UHooKsYHHlvMDH8KBnC', 'Brain', 'D/106 Saket, Meerut (U.P.) 250 001', '3656625', 'SDFG', 'D/106 Saket, Meerut (U.P.) 250 001', '89565985', 'D/106 Saket, Meerut (U.P.) 250 001', '3256324856', '5624369852', '17/09/1992', 'nehamittal1230@gmail.com', '2080242589.jpg', '2019-11-07 23:01:39', '2019-11-07 23:01:39'),
(16, 3, 'Abhishek', 'Nursery', 'A', 'a@techive.in', 'Male', '$2y$10$sxvf5AdicKc3NQJ8r4MlLeBqO6VuOdqNJaG4WJAPyZl7RqS526Hpe', 'ABC', 'D/106 Saket, Meerut (U.P.) 250 001', '7355761869', 'SDFG', 'D/106 Saket, Meerut (U.P.) 250 001', '9125315166', 'D/106 Saket, Meerut (U.P.) 250 001', '7355761869', '9125315166', '17/09/1992', 'nehamittal1230@gmail.com', '666112334.png', '2019-11-07 23:07:07', '2019-11-07 23:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insert_schools`
--

CREATE TABLE `insert_schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schl_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schl_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ph_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `principle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schl_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insert_schools`
--

INSERT INTO `insert_schools` (`id`, `schl_name`, `class`, `schl_add`, `ph_no`, `principle_name`, `website`, `schl_logo`, `created_at`, `updated_at`) VALUES
(3, 'Techive school', '1,2,3,4', 'aSD', '3755761869', 'mudit Mittal', 'wwww.techive.in', '1736557288.png', '2019-10-25 00:51:25', '2019-10-25 00:51:25'),
(4, 'ABC Public School', '1,2,3,4,5,6,7,8,9,10,11', 'dfs', '3755761869', 'mudit Mittal', 'wwww.techive.in', '1092842387.png', '2019-10-25 00:52:33', '2019-10-25 00:52:33'),
(5, 'Delhi public School', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', 'asd', '4654635', 'mudit Mittal', 'wwww.techive.in', '1409455002.jpg', '2019-10-25 00:55:15', '2019-10-25 00:55:15'),
(6, 'Mary mothor public school', '1,2,3,4,5,6,7,8,9', 'asd', '3755761869', 'mudit Mittal', 'wwww.techive.in', '648984291.jpg', '2019-10-25 01:04:07', '2019-10-25 01:04:07'),
(7, 'Dr Ram Prasad public school', '1,2,3,4,5,6,7,8,9,10', 'sad', '3755761869', 'mudit Mittal', 'wwww.techive.in', '1866094362.jpg', '2019-10-25 01:05:47', '2019-10-25 01:05:47'),
(8, 'Brainmate public school', '1,2,3,4,5', 'd5 noida', '3755761869', 'mudit Mittal', 'wwww.techive.in', '694330406.jpg', '2019-10-25 01:09:26', '2019-10-25 01:09:26'),
(9, 'Sant. Diaogo University', '1,2,3,4,5,6,7,8', 'asd', '3755761869', 'mudit Mittal', 'wwww.techive.in', '891674280.png', '2019-10-25 01:21:04', '2019-10-25 01:21:04'),
(10, 'XYZ Public School', '1,2,3,4,5,6,7,8,9,10,11', 'asd', '3755761869', 'mudit Mittal', 'wwww.techive.in', '87255204.jpg', '2019-10-25 01:35:02', '2019-10-25 01:35:02'),
(11, 'San. Johasf School', '1,2,3,4,5,6,7,8,9,10,11,12,13', 'd 5 noida sector 10', '3659856325', 'Neha mittal', 'wwww.techive.in', '1521287038.jpg', '2019-10-25 03:48:09', '2019-10-25 03:48:09'),
(12, 'Ram kishor college', '1,2,3,4,5,6,7,8,9,10,11', 'D5', '3755761869', 'mudit Mittal', 'wwww.techive.in', '187080218.jpg', '2019-11-08 02:52:16', '2019-11-08 02:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_24_062147_create_insert_schools_table', 2),
(5, '2019_10_24_083818_create_create_students_table', 3),
(6, '2019_11_07_044403_create_classes_table', 4),
(7, '2019_11_07_050108_create_class_sections_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `login_type` int(11) NOT NULL COMMENT '1->Admin, 2->Teacher, 3->Parents, 0->students',
  `status` int(11) NOT NULL COMMENT '1->Active, 0->Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `login_type`, `status`) VALUES
(1, 'Abhishek', 'abhishek@techive.in', NULL, '$2y$10$Tlyzi76stjneoSZeQFRYTOSG0pP1T493bV6UOzqO21URck61EZ3Lu', NULL, '2019-11-05 23:40:28', '2019-11-05 23:40:28', 0, 0),
(2, 'Rohit', 'nehamittal1230@gmail.com', NULL, '$2y$10$C0PZBoP.wzy3UiAt/4IeP.hxCuLTHWYRmbcyNpos82YFWBWGInlo2', NULL, '2019-11-07 03:39:05', '2019-11-07 03:39:05', 0, 0),
(5, 'Vishal', 'vishal@gmail.com', NULL, '$2y$10$3Jz5kOW7O9nwJLo4a.TAX.92KFoSTQDWPoOZrcToY1.fUpxysQHKK', NULL, '2019-11-07 03:42:43', '2019-11-07 03:42:43', 0, 0),
(6, 'Joe', 'abh@gmail.com', NULL, '$2y$10$GCc7zYw20ZdBV4XU3hi6JOMgxddoOYcQDeTKPoi1Y9Xp1hakpZxwG', NULL, '2019-11-07 04:16:26', '2019-11-07 04:16:26', 0, 0),
(7, 'Abhishek', 'admin@techive.in', NULL, '$2y$10$lOOavwasUkjdyHKTyrQrs.sK.eRdOshMNDXBpLktwdVAa1Ci/nB4K', NULL, '2019-11-07 04:27:45', '2019-11-07 04:27:45', 0, 0),
(8, 'Rohit', 'rohit@gmail.com', NULL, '$2y$10$nHTQvcz6nf0wR2srYKagZuQnZ2lRY9Aeeelx4qSshG4Eh7VAjeaVC', NULL, '2019-11-07 04:34:28', '2019-11-07 04:34:28', 0, 0),
(9, 'Vishal', 'vis@gmail.com', NULL, '$2y$10$im93FWZhvEPUNOQxpoJVmeeluIwFOW0jatnbANBZJLOtEquK/ucJO', NULL, '2019-11-07 04:40:49', '2019-11-07 04:40:49', 0, 0),
(10, 'Abhishek', 'g@gmail.com', NULL, '$2y$10$rz7buF5YEW6HqF5/8HOVF.W6zvkt/8jWJSbFrEmYQK.BCDUWLfEG.', NULL, '2019-11-07 04:43:30', '2019-11-07 04:43:30', 0, 0),
(11, 'Vishal chabbra', 'visallal@gmail.com', NULL, '$2y$10$Ef4nNmaL3k/GwEKbpkvxHeGlGGpaBhABUi7IIJBq8Wt2RiEXzHoyG', NULL, '2019-11-07 06:40:58', '2019-11-07 06:40:58', 0, 0),
(12, 'Rohit', 'r@gmail.com', NULL, '$2y$10$CzRsH6DuA/zQm6LcNo5yz.yEpHJN3LIBFROKMeb4MjHOq0KhFNJkO', NULL, '2019-11-07 23:01:39', '2019-11-07 23:01:39', 0, 0),
(13, 'Abhishek', 'a@techive.in', NULL, '$2y$10$N.iZHWyR3N8xTcZD8aAgAuxCNVsZgRVixgYdYldkg6i8XJZ27bAZa', NULL, '2019-11-07 23:07:07', '2019-11-07 23:07:07', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_sections`
--
ALTER TABLE `class_sections`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `create_students`
--
ALTER TABLE `create_students`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insert_schools`
--
ALTER TABLE `insert_schools`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `class_sections`
--
ALTER TABLE `class_sections`
  MODIFY `sec_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `create_students`
--
ALTER TABLE `create_students`
  MODIFY `s_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insert_schools`
--
ALTER TABLE `insert_schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
