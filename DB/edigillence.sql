-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2024 at 07:14 AM
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
-- Database: `edigillence`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area_management`
--

CREATE TABLE `area_management` (
  `id` int(11) UNSIGNED NOT NULL,
  `state_id` int(11) UNSIGNED DEFAULT NULL COMMENT 'from state_master table id',
  `city_id` int(11) UNSIGNED DEFAULT NULL COMMENT 'from city_master table id',
  `district_id` int(11) UNSIGNED DEFAULT NULL COMMENT 'From district table',
  `area_name` varchar(40) NOT NULL,
  `area_code` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) UNSIGNED NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` int(11) UNSIGNED NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1->active,0->inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `area_management`
--

INSERT INTO `area_management` (`id`, `state_id`, `city_id`, `district_id`, `area_name`, `area_code`, `created_date`, `created_by`, `modified_date`, `modified_by`, `status`) VALUES
(1, 1, 1, 4, 'Prahlad nagar', '', '2019-09-23 12:25:50', 0, '2021-10-06 13:04:09', 247, 1),
(2, 1, 3, 0, 'Anand nagar', '', '2019-11-09 19:58:00', 1, '2020-03-16 17:21:57', 1, 1),
(3, 1, 2, 0, 'Varacha', '', '2019-11-09 20:00:37', 1, '2020-03-16 17:21:52', 1, 1),
(4, 2, 4, 0, 'Borivali', '', '2019-11-20 15:06:25', 1, '2020-03-16 17:21:46', 1, 1),
(5, 1, 1, 0, 'Usmanpura', '', '2020-03-16 17:22:53', 1, '0000-00-00 00:00:00', 0, 1),
(6, 1, 1, 0, 'Satellite', '', '2020-03-16 17:23:25', 1, '0000-00-00 00:00:00', 0, 1),
(7, 1, 1, 0, 'Gulbai Tekra', '', '2020-03-16 17:24:02', 1, '0000-00-00 00:00:00', 0, 1),
(8, 1, 1, 0, 'Vastrapur', '', '2020-03-16 17:24:47', 1, '0000-00-00 00:00:00', 0, 1),
(9, 1, 1, 0, 'Science City', '', '2020-03-16 17:25:13', 1, '0000-00-00 00:00:00', 0, 1),
(10, 1, 1, 0, 'Ambawadi', '', '2020-03-16 17:25:37', 1, '0000-00-00 00:00:00', 0, 1),
(11, 1, 1, 0, 'Paldi', '', '2020-03-16 17:25:51', 1, '0000-00-00 00:00:00', 0, 1),
(12, 1, 1, 0, 'Navrangpura', '', '2020-03-16 17:26:39', 1, '0000-00-00 00:00:00', 0, 1),
(13, 1, 1, 0, 'Nehrunagar', '', '2020-03-16 17:27:04', 1, '0000-00-00 00:00:00', 0, 1),
(14, 1, 1, 0, 'Bopal', '', '2020-03-16 17:27:25', 1, '0000-00-00 00:00:00', 0, 1),
(15, 1, 1, 0, 'Sabarmati', '', '2020-03-16 18:01:03', 1, '0000-00-00 00:00:00', 0, 1),
(16, 1, 1, 0, 'Jodhpur Tekra', '', '2020-03-16 18:01:42', 1, '0000-00-00 00:00:00', 0, 1),
(17, 1, 1, 0, 'Naranpura', '', '2020-03-16 18:02:31', 1, '0000-00-00 00:00:00', 0, 1),
(18, 1, 1, 0, 'Kankaria', '', '2020-03-16 18:03:07', 1, '0000-00-00 00:00:00', 0, 1),
(19, 1, 1, 0, 'Gurukul', '', '2020-03-16 18:05:23', 1, '0000-00-00 00:00:00', 0, 1),
(20, 1, 1, 0, 'Thaltej', '', '2020-03-16 18:06:52', 1, '0000-00-00 00:00:00', 0, 1),
(21, 1, 1, 0, 'Bodakdev', '', '2020-03-16 18:07:10', 1, '0000-00-00 00:00:00', 0, 1),
(22, 1, 1, 0, 'Ghatlodiya', '', '2020-03-16 18:07:38', 1, '0000-00-00 00:00:00', 0, 1),
(23, 1, 1, 0, 'Shilaj', '', '2020-03-16 18:08:19', 1, '0000-00-00 00:00:00', 0, 1),
(24, 1, 1, 1, 'Nikol', '382021', '2021-05-07 09:35:55', 7, '0000-00-00 00:00:00', 0, 1),
(25, 1, 1, 2, 'South Bopal', '', '2021-06-25 20:45:19', 7, '0000-00-00 00:00:00', 0, 1),
(26, 1, 1, NULL, 'Ahmedabad Airport', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(27, 1, 1, NULL, 'Ambli', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(28, 1, 1, NULL, 'Ambli Bopal', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(29, 1, 1, NULL, 'Amraiwadi', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(30, 1, 1, NULL, 'Asarwa', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(31, 1, 1, NULL, 'Aslali', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(32, 1, 1, NULL, 'Astodia', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(33, 1, 1, NULL, 'Ayojan Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(34, 1, 1, NULL, 'Badarkha', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(35, 1, 1, NULL, 'Bagodara', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(36, 1, 1, NULL, 'Bahiyal', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(37, 1, 1, NULL, 'Bapunagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(38, 1, 1, NULL, 'Bardolpura', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(39, 1, 1, NULL, 'Barejadi', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(40, 1, 1, NULL, 'Bavla', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(41, 1, 1, NULL, 'Bayad', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(42, 1, 1, NULL, 'Behrampura', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(43, 1, 1, NULL, 'Bhadaj', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(44, 1, 1, NULL, 'Bhadiyad', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(45, 1, 1, NULL, 'Bhadra', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(46, 1, 1, NULL, 'Bhat', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(47, 1, 1, NULL, 'Bhatta', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(48, 1, 1, NULL, 'Bhojva', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(49, 1, 1, NULL, 'Bholad', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(50, 1, 1, NULL, 'Calico Mills', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(51, 1, 1, NULL, 'Chaloda', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(52, 1, 1, NULL, 'Chanakyapuri', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(53, 1, 1, NULL, 'Chandkheda', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(54, 1, 1, NULL, 'Chandlodiya', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(55, 1, 1, NULL, 'Changodar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(56, 1, 1, NULL, 'Chekhla', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(57, 1, 1, NULL, 'Chharodi', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(58, 1, 1, NULL, 'Chiloda', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(59, 1, 1, NULL, 'CTM', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(60, 1, 1, NULL, 'D Colony', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(61, 1, 1, NULL, 'Dabhoda', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(62, 1, 1, NULL, 'Dahegam', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(63, 1, 1, NULL, 'Dani Limda', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(64, 1, 1, NULL, 'Dariapur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(65, 1, 1, NULL, 'Daxini Society', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(66, 1, 1, NULL, 'Delhi Chakla', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(67, 1, 1, NULL, 'Delhi Darwaja', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(68, 1, 1, NULL, 'Detroj', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(69, 1, 1, NULL, 'Dholera', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(70, 1, 1, NULL, 'Dudheshwar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(71, 1, 1, NULL, 'Ellis Bridge', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(72, 1, 1, NULL, 'Gandhi Ashram', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(73, 1, 1, NULL, 'Geratpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(74, 1, 1, NULL, 'Gheekanta', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(75, 1, 1, NULL, 'Ghodasar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(76, 1, 1, NULL, 'Ghuma', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(77, 1, 1, NULL, 'Gift City', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(78, 1, 1, NULL, 'Girdhar Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(79, 1, 1, NULL, 'Gita Mandir', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(80, 1, 1, NULL, 'Godhavi', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(81, 1, 1, NULL, 'Gokuldham', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(82, 1, 1, NULL, 'Gomtipur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(83, 1, 1, NULL, 'Gota', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(84, 1, 1, NULL, 'Hansol', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(85, 1, 1, NULL, 'Hathijan', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(86, 1, 1, NULL, 'Hatkeshwar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(87, 1, 1, NULL, 'Isanpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(88, 1, 1, NULL, 'Jagatpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(89, 1, 1, NULL, 'Jalila', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(90, 1, 1, NULL, 'Jamalpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(91, 1, 1, NULL, 'Janta Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(92, 1, 1, NULL, 'Jashoda Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(93, 1, 1, NULL, 'Jawahar Chowk', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(94, 1, 1, NULL, 'Jetalpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(95, 1, 1, NULL, 'Jivraj Park', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(96, 1, 1, NULL, 'Jodhpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(97, 1, 1, NULL, 'Juhapura', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(98, 1, 1, NULL, 'Juna Wadaj', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(99, 1, 1, NULL, 'Kabir Chowk', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(100, 1, 1, NULL, 'Kadi', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(101, 1, 1, NULL, 'Kalapi Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(102, 1, 1, NULL, 'Kali', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(103, 1, 1, NULL, 'Kalol', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(104, 1, 1, NULL, 'Kalupur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(105, 1, 1, NULL, 'Kalyanpura', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(106, 1, 1, NULL, 'Kamiyala', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(107, 1, 1, NULL, 'Kathwada', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(108, 1, 1, NULL, 'Kauka', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(109, 1, 1, NULL, 'Keshav Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(110, 1, 1, NULL, 'Khadia', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(111, 1, 1, NULL, 'Khamasa', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(112, 1, 1, NULL, 'Khanpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(113, 1, 1, NULL, 'Kharna', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(114, 1, 1, NULL, 'Kheda', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(115, 1, 1, NULL, 'Khodiar Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(116, 1, 1, NULL, 'Khodiyar Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(117, 1, 1, NULL, 'Khokhra', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(118, 1, 1, NULL, 'Koba', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(119, 1, 1, NULL, 'Kolat', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(120, 1, 1, NULL, 'Kotarpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(121, 1, 1, NULL, 'Koteshwar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(122, 1, 1, NULL, 'Kothgangad', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(123, 1, 1, NULL, 'Krishnanagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(124, 1, 1, NULL, 'Kuber Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(125, 1, 1, NULL, 'Kudasan', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(126, 1, 1, NULL, 'Kuha', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(127, 1, 1, NULL, 'Lal Darwaza', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(128, 1, 1, NULL, 'Lambha', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(129, 1, 1, NULL, 'Law Garden', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(130, 1, 1, NULL, 'Laxmanpura', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(131, 1, 1, NULL, 'Lothal Bhurhki', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(132, 1, 1, NULL, 'Madhupura', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(133, 1, 1, NULL, 'Mahadev Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(134, 1, 1, NULL, 'Mahudara', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(135, 1, 1, NULL, 'Makarba', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(136, 1, 1, NULL, 'Mandal', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(137, 1, 1, NULL, 'Manek Chowk', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(138, 1, 1, NULL, 'Maninagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(139, 1, 1, NULL, 'Maninagar East', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(140, 1, 1, NULL, 'Manipur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(141, 1, 1, NULL, 'Mankol', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(142, 1, 1, NULL, 'Meghani Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(143, 1, 1, NULL, 'Memnagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(144, 1, 1, NULL, 'Mirzapur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(145, 1, 1, NULL, 'Mithakhali', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(146, 1, 1, NULL, 'Moraiya', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(147, 1, 1, NULL, 'Motera', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(148, 1, 1, NULL, 'Nalsarovar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(149, 1, 1, NULL, 'Nana Chiloda', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(150, 1, 1, NULL, 'Nandej', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(151, 1, 1, NULL, 'Nandol', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(152, 1, 1, NULL, 'Narayan Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(153, 1, 1, NULL, 'Naroda', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(154, 1, 1, NULL, 'Naroda GIDC', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(155, 1, 1, NULL, 'Narol', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(156, 1, 1, NULL, 'Narolgam', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(157, 1, 1, NULL, 'Nasmed', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(158, 1, 1, NULL, 'Nava Naroda', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(159, 1, 1, NULL, 'Nava Vadaj', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(160, 1, 1, NULL, 'Navarangpura Gam', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(161, 1, 1, NULL, 'Navjivan', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(162, 1, 1, NULL, 'Navrang Pura', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(163, 1, 1, NULL, 'Nehru Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(164, 1, 1, NULL, 'New Maninagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(165, 1, 1, NULL, 'New Ranip', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(166, 1, 1, NULL, 'Nirnay Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(167, 1, 1, NULL, 'Noblenagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(168, 1, 1, NULL, 'Odhav', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(169, 1, 1, NULL, 'Odhav GIDC', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(170, 1, 1, NULL, 'Ognaj', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(171, 1, 1, NULL, 'Palodia', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(172, 1, 1, NULL, 'Pankore Naka', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(173, 1, 1, NULL, 'Patthar Kuva', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(174, 1, 1, NULL, 'Pethapur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(175, 1, 1, NULL, 'Prahlad Nagar Extension', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(176, 1, 1, NULL, 'Purshottam Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(177, 1, 1, NULL, 'Raikhad', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(178, 1, 1, NULL, 'Railway Colony', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(179, 1, 1, NULL, 'Raipur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(180, 1, 1, NULL, 'Rakanpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(181, 1, 1, NULL, 'Rakhial', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(182, 1, 1, NULL, 'Ramdev Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(183, 1, 1, NULL, 'Rampura', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(184, 1, 1, NULL, 'Rancharda', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(185, 1, 1, NULL, 'Ranip', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(186, 1, 1, NULL, 'Ranna Park', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(187, 1, 1, NULL, 'Ranpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(188, 1, 1, NULL, 'Raska', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(189, 1, 1, NULL, 'Ratan Pol', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(190, 1, 1, NULL, 'Raysan', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(191, 1, 1, NULL, 'Revdi Bazar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(192, 1, 1, NULL, 'Sachana', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(193, 1, 1, NULL, 'Sadar Bazar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(194, 1, 1, NULL, 'Saffrony', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(195, 1, 1, NULL, 'Saijpur Bogha', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(196, 1, 1, NULL, 'Sanand', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(197, 1, 1, NULL, 'Sanathal', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(198, 1, 1, NULL, 'Santej', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(199, 1, 1, NULL, 'Sarangpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(200, 1, 1, NULL, 'Saraspur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(201, 1, 1, NULL, 'Sardar Colony', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(202, 1, 1, NULL, 'Sardar Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(203, 1, 1, NULL, 'Sargaasan', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(204, 1, 1, NULL, 'Sarkhej', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(205, 1, 1, NULL, 'Satadhar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(206, 1, 1, NULL, 'Satellite Extension', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(207, 1, 1, NULL, 'Satlasana', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(208, 1, 1, NULL, 'Shah E Alam Roja', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(209, 1, 1, NULL, 'Shahibaug', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(210, 1, 1, NULL, 'Shahpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(211, 1, 1, NULL, 'Shantipura', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(212, 1, 1, NULL, 'Sharda Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(213, 1, 1, NULL, 'Shastri Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(214, 1, 1, NULL, 'Shela', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(215, 1, 1, NULL, 'Shyamal', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(216, 1, 1, NULL, 'Sindhi Ambawadi', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(217, 1, 1, NULL, 'Sola', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(218, 1, 1, NULL, 'Subhash Bridge', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(219, 1, 1, NULL, 'Sughad', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(220, 1, 1, NULL, 'Sukhrampura', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(221, 1, 1, NULL, 'Tavdipura', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(222, 1, 1, NULL, 'Teen Darwaja', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(223, 1, 1, NULL, 'Thakkarbapa Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(224, 1, 1, NULL, 'Thol', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(225, 1, 1, NULL, 'Tragad', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(226, 1, 1, NULL, 'Unali', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(227, 1, 1, NULL, 'Urjanagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(228, 1, 1, NULL, 'Vadaj', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(229, 1, 1, NULL, 'Vadsar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(230, 1, 1, NULL, 'Vaishnodevi Circle', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(231, 1, 1, NULL, 'Vasna', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(232, 1, 1, NULL, 'Vastral', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(233, 1, 1, NULL, 'Vatva', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(234, 1, 1, NULL, 'Vatva GIDC', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(235, 1, 1, NULL, 'Vavol', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(236, 1, 1, NULL, 'Vejalpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(237, 1, 1, NULL, 'Vejalpur Gam', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(238, 1, 1, NULL, 'Vinchhiya', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(239, 1, 1, NULL, 'Vinzol', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(240, 1, 1, NULL, 'Virochan Nagar', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(241, 1, 1, NULL, 'Visalpur', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1),
(242, 1, 1, NULL, 'Wadaj', '', '2022-07-21 16:53:24', 1, '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `clock_in` time NOT NULL,
  `break_start` time NOT NULL,
  `break_end` time NOT NULL,
  `clock_out` time NOT NULL,
  `break_time` time NOT NULL,
  `total_time` time NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `user_id`, `date`, `clock_in`, `break_start`, `break_end`, `clock_out`, `break_time`, `total_time`, `created_at`, `updated_at`) VALUES
(6, 10, '2024-07-27', '13:13:00', '13:00:00', '14:00:00', '20:00:00', '01:00:00', '06:47:00', '2024-07-27 15:42:50', '2024-07-27 14:18:11'),
(7, 10, '2024-07-25', '00:12:00', '13:00:00', '14:00:00', '20:00:00', '01:00:00', '19:48:00', '2024-07-27 10:49:43', '2024-07-27 14:18:11'),
(8, 12, '2024-07-27', '00:12:00', '00:12:00', '02:12:00', '00:12:00', '02:00:00', '00:00:00', '2024-07-27 15:14:11', '2024-07-27 18:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `body`, `banner_image`, `is_publish`, `created_at`, `updated_at`) VALUES
(1, 'Your Partner in Technological Excellence.', 'At Edigillence Infosolutions , specialize in delivering innovative IT solutions that propel your business forward. With our expert team by your side, experience seamless integration of technology tailored to your unique needs. Together, let\'s unlock new possibilities and achieve unparalleled success in the digital landscape.', '1721283622_906275495.jpg', 1, NULL, '2024-07-20 05:02:01'),
(3, 'Empowering Your Digital Journey', 'Transforming ideas into innovative technology solutions. At Edigillence Infosolutions , we blend expertise with creativity to drive your business forward in the digital age. Discover tailored IT solutions that elevate performance and inspire growth.', '1719900692_2000702862.jpg', 1, NULL, '2024-07-20 05:02:25'),
(4, 'Innovative software solutions for a digital world', 'At Edigillence Infosolutions , we are dedicated to transforming the digital landscape through cutting-edge software solutions tailored to meet the evolving needs of businesses and individuals. Our mission is to empower organizations to thrive in a fast-paced, technology-driven world by providing innovative, reliable, and scalable software products.', '1720159913_222526521.jpg', 1, '2024-07-01 09:27:54', '2024-07-20 05:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `quote` varchar(500) NOT NULL,
  `is_publish` tinyint(4) NOT NULL,
  `upload_by` varchar(255) NOT NULL DEFAULT 'By Admin',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `date`, `image`, `quote`, `is_publish`, `upload_by`, `created_at`, `updated_at`) VALUES
(3, 'demo1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellat sed odio expedita quam ab. Repellat, accusamus sequi aut cumque sint est nisi repudiandae eum ducimus aliquid enim eaque consectetur similique saepe? Inventore animi doloribus optio architecto est cum? Culpa consectetur veniam, hic amet, tempore asperiores adipisci aut atque ipsum autem porro totam. Labore, aspernatur? Odio dolor ea nulla, quisquam dolorem quam illum fuga iure sequi laudantium, officia, eligendi nisi minus! Ad neque eos eum dolores quia atque fugit, ipsam facere culpa delectus! Praesentium a harum, ullam est iste laudantium illo quis pariatur enim modi autem dolorem magnam et dolor deleniti vel. Ratione itaque dolores velit id? Qui eos reprehenderit, quae exercitationem cum voluptas aliquam necessitatibus porro ratione ducimus nost\\nam na', '1212-12-12', '1720094035_1833926304.jpg', 'Do not go where the path may lead; go instead where there is no path and leave a trail.', 1, 'by admin', '2024-07-11 12:44:12', '0000-00-00 00:00:00'),
(4, 'demo2', 'demo desc', '1211-12-12', '1720097117_1275372308.jpg', 'Do not go where the path may lead; go instead where there is no path and leave a trail.', 1, 'by admin', '2024-07-11 12:44:01', '0000-00-00 00:00:00'),
(5, 'demo3', 'demo desc', '2111-12-21', '1720096378_820840527.jpg', 'Do not go where the path may lead; go instead where there is no path and leave a trail.', 1, 'by admin', '2024-07-11 12:43:40', '0000-00-00 00:00:00'),
(6, 'demo4', 'Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no pDo not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no pDo not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no pDo not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no pDo not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no pDo not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no pDo not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no pDo not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no p', '1212-02-12', '1720694814_1744906976.jpg', 'Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no path and leave a trail.Do not go where the path may lead; go instead where there is no p', 1, 'By Admin', '2024-07-11 12:46:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_masters`
--

CREATE TABLE `category_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_masters`
--

INSERT INTO `category_masters` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Backend Technologies', 'Backend Technologies', '', 1, '2024-07-16 10:12:25', '2024-07-20 06:23:18'),
(4, 'Frontend Technologies', 'Frontend Technologies', '', 1, '2024-07-16 10:13:22', '2024-07-20 06:23:38'),
(8, 'Mobile App Development', 'Mobile App Development', '', 1, '2024-07-20 06:24:17', NULL),
(9, 'Ecommerce Solutions', 'Ecommerce Solutions', '', 1, '2024-07-20 06:24:31', NULL),
(10, 'Frameworks', 'Frameworks', '', 1, '2024-07-20 06:24:56', NULL),
(11, 'Cloud Technologies', 'Cloud Technologies', '', 1, '2024-07-20 06:25:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_technology`
--

CREATE TABLE `category_technology` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `technology_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_technology`
--

INSERT INTO `category_technology` (`id`, `category_id`, `technology_id`, `created_at`, `updated_at`) VALUES
(14, 3, 9, NULL, NULL),
(15, 3, 10, NULL, NULL),
(16, 3, 11, NULL, NULL),
(17, 3, 12, NULL, NULL),
(18, 3, 13, NULL, NULL),
(19, 4, 14, NULL, NULL),
(20, 4, 15, NULL, NULL),
(21, 4, 16, NULL, NULL),
(22, 4, 17, NULL, NULL),
(23, 4, 18, NULL, NULL),
(24, 8, 19, NULL, NULL),
(25, 8, 20, NULL, NULL),
(26, 8, 21, NULL, NULL),
(27, 8, 22, NULL, NULL),
(28, 8, 23, NULL, NULL),
(29, 8, 24, NULL, NULL),
(30, 8, 25, NULL, NULL),
(31, 9, 26, NULL, NULL),
(32, 9, 27, NULL, NULL),
(33, 9, 28, NULL, NULL),
(34, 9, 29, NULL, NULL),
(35, 9, 30, NULL, NULL),
(36, 10, 31, NULL, NULL),
(37, 10, 32, NULL, NULL),
(38, 10, 33, NULL, NULL),
(39, 10, 34, NULL, NULL),
(40, 10, 35, NULL, NULL),
(41, 10, 36, NULL, NULL),
(42, 11, 37, NULL, NULL),
(43, 11, 39, NULL, NULL),
(44, 11, 38, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city_management`
--

CREATE TABLE `city_management` (
  `id` int(11) UNSIGNED NOT NULL,
  `state_id` int(11) UNSIGNED DEFAULT NULL COMMENT 'from state-management table id',
  `city_name` varchar(40) NOT NULL,
  `city_code` varchar(10) NOT NULL,
  `short_name` varchar(50) NOT NULL,
  `membership_rate` float(8,2) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) UNSIGNED NOT NULL COMMENT 'from user',
  `modified_date` datetime NOT NULL,
  `modified_by` int(11) UNSIGNED NOT NULL COMMENT 'from user',
  `status` tinyint(1) NOT NULL COMMENT '1->active,0->inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `city_management`
--

INSERT INTO `city_management` (`id`, `state_id`, `city_name`, `city_code`, `short_name`, `membership_rate`, `created_date`, `created_by`, `modified_date`, `modified_by`, `status`) VALUES
(1, 1, 'Ahmedabad', 'ABAD', 'ahm', 0.00, '2019-09-23 12:06:08', 0, '2021-10-08 16:25:00', 247, 1),
(2, 1, 'Surat', 'SRT', 'sur', 4000.00, '2019-09-23 12:06:27', 0, '2021-10-07 23:52:28', 7, 1),
(3, 1, 'Vadodara', 'GJ', 'vad', 5400.00, '2019-09-23 12:06:46', 0, '2021-10-08 17:02:37', 247, 1),
(4, 2, 'Mumbai', 'MH', 'mum', 0.00, '2019-11-20 15:05:40', 1, '2021-10-08 17:02:47', 247, 1),
(5, 1, 'Rajkot', 'RJK', '', 5000.00, '2021-10-06 12:12:17', 247, '2021-10-08 17:00:28', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fname`, `email`, `message`, `created_at`, `updated_at`) VALUES
(8, 'demo1', 'demo@gmail.com', 'ddcdcdddcd', '2024-07-04 12:17:38', '0000-00-00 00:00:00'),
(9, 'sw', 'sw@g.c', 'sw', '2024-07-06 07:55:03', '0000-00-00 00:00:00'),
(10, 'fr', 'fr@g.c', 'rf', '2024-07-06 12:26:54', '0000-00-00 00:00:00'),
(11, 'de', 'fr@g.c', 'frefee', '2024-07-10 08:10:40', '0000-00-00 00:00:00'),
(12, 'c', 'c@g.d', 'd', '2024-07-10 08:12:45', '0000-00-00 00:00:00'),
(13, 'de', 'de@g.d', 'de', '2024-07-10 08:13:16', '0000-00-00 00:00:00'),
(14, 'dede', 'sw@g.s', '121212', '2024-07-11 10:27:48', '0000-00-00 00:00:00'),
(15, 'dftghyuj', 'ddcrtfvgyb@gmaail.com', 'hgfdsgfdsa', '2024-07-15 16:22:12', '0000-00-00 00:00:00'),
(16, 'de', 'de@g.e', 'dedd', '2024-07-16 08:41:59', '0000-00-00 00:00:00'),
(17, '21', '1212@g.s', '121212', '2024-07-20 13:30:00', '0000-00-00 00:00:00'),
(18, 'scd', 'dc@g.c', 'def', '2024-07-27 08:48:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE `country_master` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'Primary key, Auto increment',
  `country_name` varchar(100) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `short_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) UNSIGNED NOT NULL COMMENT 'admin id',
  `modified_at` datetime NOT NULL,
  `modified_by` int(11) UNSIGNED NOT NULL COMMENT 'admin id',
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1->active,0->inactive',
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `country_master`
--

INSERT INTO `country_master` (`id`, `country_name`, `country_code`, `short_name`, `created_at`, `created_by`, `modified_at`, `modified_by`, `status`, `is_deleted`) VALUES
(1, 'India', 'Ind', '', '2019-09-23 12:05:30', 0, '2019-09-23 12:05:30', 0, 1, 0),
(2, 'Australia', 'Aus', '', '2019-09-23 12:05:30', 0, '2019-09-23 12:05:30', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Proven Track Record', 'With a track record of successfully delivering high-quality web and app solutions to a global clientele, eDigillence has established itself as a reliable and trustworthy partner.', 1, '2024-01-30 04:08:43', '2024-01-30 04:11:33'),
(2, 'What is a digital platform?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', 1, '2024-07-02 09:12:16', NULL),
(3, 'How can a digital platform helps your business grow?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', 1, '2024-07-02 09:12:52', NULL),
(4, 'How many projects have your completed so far?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', 1, '2024-07-02 09:13:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hiring`
--

CREATE TABLE `hiring` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `eduction` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `service_icon` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hiring`
--

INSERT INTO `hiring` (`id`, `title`, `description`, `eduction`, `position`, `skill`, `experience`, `image`, `service_icon`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Web Dev', 'Curabitur fringilla turpis sed nulla auctor, laoreet mollis sem maximus. Suspendisse laoreet feugiat accumsan. Sed mollis, augue a ultrices convallis, dolor metus eleifend nulla, at efficitur lacus nisi sit amet est. Morbi rutrum ullam corper orci eu auctor. In hac habitasse platea dictumst. Integer venenatis eu arcu et convallis. Vestibulum in lacinia sem, quis aliquet turpis. Fusce bibendum posuere velit, ut auctor leo ali quam vel. Suspendisse ut pharetra urna. Duis ultricies odio ullamcorper, tempor enim id, volut pat nunc.Curabitur fringilla turpis sed nulla auctor, laoreet mollis sem maximus. Suspendisse laoreet feugiat accumsan. Sed mollis, augue a ultrices convallis, dolor metus eleifend nulla, at efficitur lacus nisi sit amet est. Morbi rutrum ullam corper orci eu auctor. In hac habitasse platea dictumst. Integer venenatis eu arcu et convallis. Vestibulum in lacinia sem, quis aliquet turpis. Fusce bibendum posuere velit, ut auctor leo ali quam vel. Suspendisse ut pharetra urna', 'b.tech', 'dev', 'laravel', 'null', '1720429778_439974487.jpg', '1720429778_542933684.png', '1212-12-12', '1212-12-12', 1, '2024-07-08 11:09:38', '0000-00-00 00:00:00'),
(6, 'App Dev', 'Curabitur fringilla turpis sed nulla auctor, laoreet mollis sem maximus. Suspendisse laoreet feugiat accumsan. Sed mollis, augue a ultrices convallis, dolor metus eleifend nulla, at efficitur lacus nisi sit amet est. Morbi rutrum ullam corper orci eu auctor. In hac habitasse platea dictumst. Integer venenatis eu arcu et convallis. Vestibulum in lacinia sem, quis aliquet turpis. Fusce bibendum posuere velit, ut auctor leo ali quam vel. Suspendisse ut pharetra urna. Duis ultricies odio ullamcorper, tempor enim id, volut pat nunc.Curabitur fringilla turpis sed nulla auctor, laoreet mollis sem maximus. Suspendisse laoreet feugiat accumsan. Sed mollis, augue a ultrices convallis, dolor metus eleifend nulla, at efficitur lacus nisi sit amet est. Morbi rutrum ullam corper orci eu auctor. In hac habitasse platea dictumst. Integer venenatis eu arcu et convallis. Vestibulum in lacinia sem, quis aliquet turpis. Fusce bibendum posuere velit, ut auctor leo ali quam vel. Suspendisse ut pharetra urna', 'msc.it', 'app dev', 'basic app dev', '1 Years', '1720429746_1915558211.jpg', '1720429746_492142505.png', '0121-12-12', '1212-02-12', 1, '2024-07-08 11:09:06', '0000-00-00 00:00:00'),
(7, 'Manager', 'Curabitur fringilla turpis sed nulla auctor, laoreet mollis sem maximus. Suspendisse laoreet feugiat accumsan. Sed mollis, augue a ultrices convallis, dolor metus eleifend nulla, at efficitur lacus nisi sit amet est. Morbi rutrum ullam corper orci eu auctor. In hac habitasse platea dictumst. Integer venenatis eu arcu et convallis. Vestibulum in lacinia sem, quis aliquet turpis. Fusce bibendum posuere velit, ut auctor leo ali quam vel. Suspendisse ut pharetra urna. Duis ultricies odio ullamcorper, tempor enim id, volut pat nunc.Curabitur fringilla turpis sed nulla auctor, laoreet mollis sem maximus. Suspendisse laoreet feugiat accumsan. Sed mollis, augue a ultrices convallis, dolor metus eleifend nulla, at efficitur lacus nisi sit amet est. Morbi rutrum ullam corper orci eu auctor. In hac habitasse platea dictumst. Integer venenatis eu arcu et convallis. Vestibulum in lacinia sem, quis aliquet turpis. Fusce bibendum posuere velit, ut auctor leo ali quam vel. Suspendisse ut pharetra urna', 'any', 'Manager', 'null', '2 Years', '1720425825_318621184.jpg', '1720429657_753864822.png', '1212-12-12', '1212-12-12', 1, '2024-07-08 11:07:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hiring_info`
--

CREATE TABLE `hiring_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobile` varchar(225) NOT NULL,
  `resume` varchar(225) NOT NULL,
  `hiringfor` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hiring_info`
--

INSERT INTO `hiring_info` (`id`, `name`, `email`, `mobile`, `resume`, `hiringfor`, `created_at`, `updated_at`) VALUES
(3, 'kishan', 'demo@gmail.com', '1212', '1720696962_1272084506.pdf', 'Web Dev', '2024-07-11 13:22:42', '0000-00-00 00:00:00'),
(4, 'Jhanvi Padhiyar', 'jhanvipadhiyar@gmail.com', '5252525522', '1721053039_2015881526.pdf', 'Web Dev', '2024-07-15 16:17:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Hotel & Stays', '<p>A great trip is never complete without a great hotel stay. Hotel booking sites need to be intuitive, communicative and easy to navigate, to make the overall experience impressive for the user. Texts, visuals, cues inspired by user data, behavior and shopping psychology are transformed into fabulous designs by us. This makes people feel welcomed even with completely automated interactions.</p>', '1721468291_1564754285.jpg', 1, '2024-07-20 11:38:11', '0000-00-00 00:00:00'),
(7, 'Education', '<p>Education is the most important way to spread awareness about burning issues. Therefore the learning experience needs to be enhanced and improvised regularly. Mobility of the educational platforms and e-learning efficiency can be achieved by designing interactive websites for education and similar sources. With Edigillence Infosolutions , this would seem like a cakewalk for you.</p>', '1721468173_296622687.jpg', 1, '2024-07-20 11:36:14', '0000-00-00 00:00:00'),
(8, 'fvfffvfvfvff', '<p>demi</p>', '1721215238_1936959957.png', 0, '2024-07-17 13:20:38', '0000-00-00 00:00:00'),
(9, 'Healthcare', '<p>Healthcare as an industry has been made more accessible through various technological advances. Cloud based storage has minimized the efforts and maximized the results by getting an easy access to every solution. Regular care solutions, innovative measures to spread awareness and cure for diseases are now easily available. We provide customized mobility solutions so that you stay ahead of the masses at all steps.</p>', '1721468115_285310384.webp', 1, '2024-07-20 11:35:15', '0000-00-00 00:00:00'),
(10, 'E-commerce', '<p>The retail sector has seen immense development with e-commerce taking center stage. Logistics, tracking of shipments, analyzing target market and audience, sales, and purchases, all have taken a mobile and interactive shape. Creating a unified experience through multi-platform and omnichannel solutions provides you a customized solution for your business needs.</p>', '1721468358_1781266222.jpg', 1, '2024-07-20 11:39:18', '0000-00-00 00:00:00'),
(11, 'Travel', '<p>Traveling is one of the most adventurous things for people who want to explore. The websites have to be more than just informative and visually attractive. Interactive designs which deliver more than just the required information are developed by our IT solutions and applications. Our qualitative solutions would always be there to help you against the hospitality challenges!</p>', '1721468413_1629970035.jpg', 1, '2024-07-20 11:40:13', '0000-00-00 00:00:00'),
(12, 'Fintech', '<p>Our modern FinTech software solutions will improve and streamline your financial operations. We are frontrunners to implement innovative ways for people to deposit, invest, send, and receive money. We develop secure financial apps for commercial banks, investment banks, insurance companies, and brokerage firms.</p>', '1721468484_280726770.webp', 1, '2024-07-20 11:41:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_02_15_095032_create_permission_tables', 1),
(8, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(9, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(10, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(11, '2016_06_01_000004_create_oauth_clients_table', 2),
(12, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(13, '2024_01_22_125955_create_banners_table', 3),
(14, '2024_01_24_090851_create_teams_table', 4),
(15, '2024_01_24_150216_create_testimonials_table', 5),
(16, '2024_01_30_075831_create_faqs_table', 6),
(17, '2024_01_30_142400_create_services_table', 7),
(18, '2024_01_31_063847_create_category_masters_table', 8),
(19, '2024_01_31_134000_create_technologies_table', 9),
(20, '2024_02_01_142608_create_technologies_table', 10),
(21, '2024_02_01_142747_create_category_technology_table', 11),
(22, '2024_02_02_074240_create_pages_table', 11),
(23, '2024_02_08_071953_create_why_chooses_table', 12),
(24, '2024_02_08_074536_add_image_to_table', 13),
(25, '2024_07_15_160212_create_admins_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 2),
(5, 'App\\Models\\User', 12);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Displayplan Personal Access Client', 'jnoQzfoF0lOl7VZyrMWhabT5JMlSgNbZ5HK6AIS2', NULL, 'http://localhost', 1, 0, 0, '2022-04-07 04:09:55', '2022-04-07 04:09:55'),
(2, NULL, 'Displayplan Password Grant Client', 'LnBaSSnUA2RTSHPSxkBtb9uFBkhZAweA12P0lCU3', 'users', 'http://localhost', 0, 1, 0, '2022-04-07 04:09:55', '2022-04-07 04:09:55'),
(96012, NULL, 'Displayplan Personal Access Client', 'CkWrrGY6XPIrMrC3Wg2zb2inHDp3c9BuYqolRkhO', NULL, 'http://localhost', 1, 0, 0, '2022-04-07 04:16:10', '2022-04-07 04:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-04-07 04:09:55', '2022-04-07 04:09:55'),
(2, 96012, '2022-04-07 04:16:10', '2022-04-07 04:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About us', '<p>Welcome to <strong>eDigillence Infosolutions</strong>, where innovation meets excellence in the world of web and app solutions.</p><p>Our commitment to excellence is reflected in our core values of professionalism, skill, and expertise. We understand the importance of harnessing the power of the web to propel your business forward, and we employ these values as our tools to make that happen. With a dedicated team of experienced professionals, we strive to provide solutions that not only meet but exceed your expectations.</p><p>In the ever-evolving digital landscape, <strong>eDigillence</strong> stands as a beacon of reliability and trust. We understand the significance of time in the business world, and our streamlined processes ensure that we deliver results on time, every time. Our focus is on generating maximum returns on your investment in the shortest possible timeframe, helping your business thrive in the competitive online marketplace.</p><p>Whether you\'re looking for web development, app solutions, or a combination of both, <strong>eDigillence Infosolutions</strong> is your partner in success. Our customer-centric approach ensures that your unique requirements are not only met but are also translated into innovative and effective digital solutions.</p><p>Join hands with <strong>eDigillence Infosolutions</strong>, where we transform visions into reality, and every project is an opportunity to showcase our commitment to excellence. Your success is our success, and we are dedicated to making the web work for your business.</p>', 1, '2024-02-02 03:03:15', '2024-02-02 03:37:41'),
(3, 'customers', '80', 1, '2024-07-10 01:32:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(10) NOT NULL,
  `project_url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `category_id`, `project_url`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'VIJAY TRANS LOGISTICS', '<p><strong>VIJAY TRANS LOGISTICS</strong> is a leading provider of comprehensive logistics and transportation solutions. We specialize in freight transportation, warehousing, supply chain management, and customs brokerage. Our commitment to customer satisfaction, innovation, sustainability, and safety sets us apart. With a team of experienced professionals and a global network, we deliver reliable, efficient, and customized logistics services to meet the unique needs of our clients.</p><p>&nbsp;</p><p>&nbsp;</p><p><strong>VIJAY TRANS LOGISTICS</strong> is a leading provider of comprehensive logistics and transportation solutions. We specialize in freight transportation, warehousing, supply chain management, and customs brokerage. Our commitment to customer satisfaction, innovation, sustainability, and safety sets us apart. With a team of experienced professionals and a global network, we deliver reliable, efficient, and customized logistics services to meet the unique needs of our clients.</p>', 7, 'http://vtltransport.in/', '1721199878_526024877.png', 1, '2024-07-17 11:32:03', '2024-07-17 08:02:03'),
(12, 'Gujarat News Line', '<p><strong>Gujarat News Line</strong> is your trusted source for the latest news and updates from across Gujarat. Our dedicated team of journalists and reporters provide comprehensive coverage on a wide range of topics, including politics, business, culture, sports, and more. We are committed to delivering accurate, timely, and insightful news that keeps you informed about the issues that matter most. Stay connected with Gujarat News Line for in-depth reporting, exclusive interviews, and breaking news from every corner of Gujarat.</p><p><br>&nbsp;<br><strong>Gujarat News Line</strong> is your trusted source for the latest news and updates from across Gujarat. Our dedicated team of journalists and reporters provide comprehensive coverage on a wide range of topics, including politics, business, culture, sports, and more. We are committed to delivering accurate, timely, and insightful news that keeps you informed about the issues that matter most. Stay connected with Gujarat News Line for in-depth reporting, exclusive interviews, and breaking news from every corner of Gujarat.</p>', 3, 'https://www.gujaratnewsline.ca/', '1721200713_482283856.png', 1, '2024-07-17 08:38:06', '2024-07-17 05:08:06'),
(13, 'Cracks And Racks', '<p><strong>Cracks And Racks</strong> is your premier destination for high-quality roof racks, cargo carriers, and outdoor adventure gear. We specialize in providing durable and reliable solutions to transport your gear safely and efficiently. Whether you\'re planning a road trip, outdoor adventure, or simply need more space for your equipment, our extensive selection of racks and carriers has you covered. With a commitment to customer satisfaction and a passion for adventure, Cracks And Racks ensures you have the best equipment for your journey. Trust us to help you carry your load with ease and confidence.</p><p><strong>Cracks And Racks</strong> is your premier destination for high-quality roof racks, cargo carriers, and outdoor adventure gear. We specialize in providing durable and reliable solutions to transport your gear safely and efficiently. Whether you\'re planning a road trip, outdoor adventure, or simply need more space for your equipment, our extensive selection of racks and carriers has you covered. With a commitment to customer satisfaction and a passion for adventure, Cracks And Racks ensures you have the best equipment for your journey. Trust us to help you carry your load with ease and confidence.</p>', 4, 'https://cracksandracks.com/', '1721200919_88431212.png', 1, '2024-07-17 08:37:37', '2024-07-17 05:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2022-04-10 17:05:42', '2022-04-10 17:05:42'),
(2, 'Admin', 'web', '2022-04-10 17:05:42', '2022-04-10 17:05:42'),
(3, 'HR', 'web', '2022-04-10 17:06:23', '2022-04-10 17:06:23'),
(4, 'Office Staff', 'web', '2022-04-10 17:06:23', '2022-04-10 17:06:23'),
(5, 'User', 'web', '2024-01-19 03:14:44', '2024-01-19 03:14:44'),
(6, 'Approver', 'web', '2024-01-19 03:14:44', '2024-01-19 03:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `service_logo` varchar(255) DEFAULT NULL,
  `service_image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `service_logo`, `service_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'Boost the performance and efficiency of your websites and web apps by leveraging OUR expertise in top web frameworks like Laravel, CodeIgniter, Yii, Django, etc. We suggest the right technologies that to build robust & scalable web solutions.', '1721466862_672368792.png', '1721466862_786960054.jpg', 1, '2024-01-30 09:31:57', '2024-07-20 05:44:22'),
(2, 'Mobile Devlopment', 'Designing and building mobile applications for iOS and Android platforms, Edigillence Infosolutions is helping businesses build outstanding mobile applications for cross platforms. We are one stop shop for all your needs.', '1721466928_464882155.png', '1721466928_1814659978.jpg', 1, '2024-02-07 08:17:31', '2024-07-20 05:45:28'),
(3, 'AWS Services', 'Our Expertise in AWS (Amazon Web Services) is one of the leading cloud service providers in the market, offering a wide range of cloud-based solutions that can help organizations achieve scalability, flexibility, and cost-efficiency.', '1721467005_2123690604.png', '1721467005_89000364.webp', 1, '2024-02-07 08:18:01', '2024-07-20 05:46:45'),
(18, 'Ecommerce Solutions', 'Expertise in eCommerce & marketplace development has been one of the cornerstones of our success. Our Magento, Shopify, and WooCommerce experts have built the best solutions with the trendiest functionalities to deliver ultimate shopping experiences.', '1721467179_1324645694.png', '1721467179_1789856234.png', 1, '2024-07-20 05:24:44', '2024-07-20 05:49:39'),
(19, 'UI/UX Design', 'Design is the cornerstone of a successful software application. Our design specialists simplify the complex design process. Responsive software designs we create using skills from our palettes are being loved by global brands and their end-users.', '1721467253_1398997307.png', '1721467253_81478877.jpg', 1, '2024-07-20 05:27:44', '2024-07-20 05:50:53'),
(20, 'Search Engine optimazation', 'We understand that your business is unique, thereby we use only ethical SEO techniques and focus on organic SEO to render determined results to your business. We believe in transparency and liability to our clients. Our experts give daily updates of key performance notices for your website so that you can monitor the progress.', '1721467337_415244271.png', '1721467338_2111615665.png', 1, '2024-07-20 05:29:52', '2024-07-20 05:52:18'),
(21, 'CMS', 'Create, edit, update, or remove - manage all the content for your users in the front-end with user-friendly CMS solutions. We build the most secure, robust, powerful, and scalable CMS in the backend that adds value to your published content using the best CMS technologies.', '1721466777_719928779.png', '1721466777_1756676672.jpg', 1, '2024-07-20 05:42:57', NULL),
(22, 'Digital Marketing', 'The digital marketing experts will shape your brand’s digital presence. We use the latest tools to perform a full digital marketing service suite. Let’s talk about your business, goals, and target audience to design a holistic digital marketing plan for 360° business growth.', '1721467543_931208870.png', '1721467543_1441661532.webp', 1, '2024-07-20 05:55:43', NULL),
(23, 'QA Testing', 'The process of executing a system with the intent of finding defects. Note that QA testing involves systematic exploration of software functionalities to ensure quality, identify potential issues, and validate compliance with specifications before release. It aims to enhance user experience and mitigate risks by detecting and resolving issues early in the development lifecycle.', '1721467724_1640057065.png', '1721467724_1300023722.jpg', 1, '2024-07-20 05:58:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services_data`
--

CREATE TABLE `services_data` (
  `id` int(11) NOT NULL,
  `service_id` varchar(255) NOT NULL,
  `data` varchar(1500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services_data`
--

INSERT INTO `services_data` (`id`, `service_id`, `data`, `created_at`, `updated_at`) VALUES
(83, '', 'dem9o', '2024-07-15 08:02:37', '0000-00-00 00:00:00'),
(84, '', '123', '2024-07-15 08:10:53', '0000-00-00 00:00:00'),
(85, '', '12', '2024-07-15 08:12:04', '0000-00-00 00:00:00'),
(95, '14', '123456', '2024-07-15 08:44:51', '2024-07-15 09:28:52'),
(96, '14', '1234', '2024-07-15 08:44:51', '2024-07-15 09:28:52'),
(99, '14', '123', '2024-07-15 09:28:52', '0000-00-00 00:00:00'),
(100, '1', 'Responsive Web Design', '2024-07-15 09:29:23', '2024-07-20 11:14:22'),
(102, '1', 'User Interface (UI) Design', '2024-07-15 11:07:57', '2024-07-20 11:14:22'),
(103, '1', 'Frontend Framework Development', '2024-07-15 11:07:57', '2024-07-20 11:14:22'),
(104, '1', 'Cross-Browser Compatibility Testing', '2024-07-15 11:07:57', '2024-07-20 11:14:22'),
(105, '1', 'Performance Optimization', '2024-07-15 11:07:57', '2024-07-20 11:14:22'),
(106, '1', 'Accessibility Compliance', '2024-07-15 11:07:57', '2024-07-20 11:14:22'),
(107, '1', 'Frontend Testing and Quality Assurance', '2024-07-15 11:07:57', '2024-07-20 11:14:22'),
(108, '17', 'ewe', '2024-07-17 12:07:58', '0000-00-00 00:00:00'),
(111, '2', 'Cross-platform or native app development', '2024-07-18 11:46:46', '2024-07-20 11:15:28'),
(112, '2', 'Intuitive and engaging interfaces', '2024-07-18 11:46:46', '2024-07-20 11:15:28'),
(113, '2', 'Integration with device features', '2024-07-18 11:46:46', '2024-07-20 11:15:28'),
(114, '2', 'App submission and deployment', '2024-07-18 11:46:46', '2024-07-20 11:15:28'),
(115, '2', 'Offline functionality', '2024-07-18 11:46:46', '2024-07-20 11:15:28'),
(116, '2', 'Push notifications', '2024-07-18 11:46:46', '2024-07-20 11:15:28'),
(117, '2', 'Social media integration', '2024-07-18 11:46:46', '2024-07-20 11:15:28'),
(118, '2', 'Location-based services', '2024-07-18 11:46:46', '2024-07-20 11:15:28'),
(150, '3', 'Building scalable and secure IT products intended for organizational and redistribution (SaaS products) purposes.', '2024-07-20 10:37:08', '2024-07-20 11:16:45'),
(151, '3', 'Centralize infrastructure administration for distributed systems.', '2024-07-20 10:37:08', '2024-07-20 11:16:45'),
(152, '3', 'Swift deployment of products in various environments.', '2024-07-20 10:37:08', '2024-07-20 11:16:45'),
(153, '3', 'Swift deployment of products in various environments.', '2024-07-20 10:37:08', '2024-07-20 11:16:45'),
(154, '3', 'Modify and replace services without impacting the entire product.', '2024-07-20 10:37:08', '2024-07-20 11:16:45'),
(155, '3', 'Implement fully managed services on a pay-as-you-go model.', '2024-07-20 10:37:08', '2024-07-20 11:16:45'),
(156, '3', 'Support advanced automation capabilities within products and among other services.', '2024-07-20 10:37:08', '2024-07-20 11:16:45'),
(158, '1', 'Continuous Integration and Deployment', '2024-07-20 10:48:36', '2024-07-20 11:14:22'),
(159, '1', 'Collaboration and Communication', '2024-07-20 10:48:36', '2024-07-20 11:14:22'),
(160, '1', 'Maintenance and Support', '2024-07-20 10:48:36', '2024-07-20 11:14:22'),
(161, '2', 'App analytics and tracking', '2024-07-20 10:51:44', '2024-07-20 11:15:28'),
(162, '18', 'Product catalog management', '2024-07-20 10:54:44', '2024-07-20 11:19:39'),
(163, '18', 'Shopping cart and checkout process', '2024-07-20 10:54:44', '2024-07-20 11:19:39'),
(164, '18', 'Secure payment gateways integration', '2024-07-20 10:54:44', '2024-07-20 11:19:39'),
(165, '18', 'Order processing and fulfillment', '2024-07-20 10:54:44', '2024-07-20 11:19:39'),
(166, '18', 'Email marketing integration', '2024-07-20 10:54:44', '2024-07-20 11:19:39'),
(167, '18', 'Loyalty programs and rewards', '2024-07-20 10:54:44', '2024-07-20 11:19:39'),
(168, '18', 'Push notifications for marketing campaigns', '2024-07-20 10:54:44', '2024-07-20 11:19:39'),
(169, '18', 'Sales analytics and reporting', '2024-07-20 10:54:44', '2024-07-20 11:19:39'),
(170, '18', 'Fraud prevention and security', '2024-07-20 10:54:44', '2024-07-20 11:19:39'),
(171, '18', 'Customer support integration', '2024-07-20 10:54:44', '2024-07-20 11:19:39'),
(172, '19', 'Lower Bounce Rate.', '2024-07-20 10:57:44', '2024-07-20 11:20:53'),
(173, '19', 'Better Page Load Speed.', '2024-07-20 10:57:44', '2024-07-20 11:20:53'),
(174, '19', 'Mobile Responsiveness.', '2024-07-20 10:57:44', '2024-07-20 11:20:53'),
(175, '19', 'Quality Content Presentation.', '2024-07-20 10:57:44', '2024-07-20 11:20:53'),
(176, '19', 'Cross-Browser Compatibility.', '2024-07-20 10:57:44', '2024-07-20 11:20:53'),
(177, '19', 'Brand Credibility.', '2024-07-20 10:57:44', '2024-07-20 11:20:53'),
(178, '19', 'CTA Optimization.', '2024-07-20 10:57:44', '2024-07-20 11:20:53'),
(179, '20', 'Increase in Revenue', '2024-07-20 10:59:52', '2024-07-20 11:22:18'),
(180, '20', 'More Sales.', '2024-07-20 10:59:52', '2024-07-20 11:22:18'),
(181, '20', 'Brand Visibility.', '2024-07-20 10:59:52', '2024-07-20 11:22:18'),
(182, '20', 'More Traffic.', '2024-07-20 10:59:52', '2024-07-20 11:22:18'),
(183, '20', 'More Business Growth.', '2024-07-20 10:59:52', '2024-07-20 11:22:18'),
(184, '20', 'High ROI and Conversions.', '2024-07-20 10:59:52', '2024-07-20 11:22:18'),
(185, '20', 'Keeping up With Google’s Search Algorithm Updates.', '2024-07-20 10:59:52', '2024-07-20 11:22:18'),
(186, '20', 'More Lead Generation.', '2024-07-20 10:59:52', '2024-07-20 11:22:18'),
(187, '21', 'User-friendly interface with intuitive content management capabilities.', '2024-07-20 11:12:57', '0000-00-00 00:00:00'),
(188, '21', 'WYSIWYG editor for easy content creation and editing.', '2024-07-20 11:12:57', '0000-00-00 00:00:00'),
(189, '21', 'Efficient media management for images, videos, and documents.', '2024-07-20 11:12:57', '0000-00-00 00:00:00'),
(190, '21', 'SEO tools and plugins to optimize content for search engines.', '2024-07-20 11:12:57', '0000-00-00 00:00:00'),
(191, '21', 'Responsive design templates for seamless multi-device compatibility.', '2024-07-20 11:12:57', '0000-00-00 00:00:00'),
(192, '21', 'Role-based user permissions for controlled access.', '2024-07-20 11:12:57', '0000-00-00 00:00:00'),
(193, '21', 'Version control to track and manage content revisions.', '2024-07-20 11:12:57', '0000-00-00 00:00:00'),
(194, '21', 'Workflow management for streamlined content publishing processes.', '2024-07-20 11:12:57', '0000-00-00 00:00:00'),
(195, '21', 'E-commerce integration for managing online stores and products.', '2024-07-20 11:12:57', '0000-00-00 00:00:00'),
(196, '21', 'Analytics integration for monitoring site performance and user engagement.', '2024-07-20 11:12:57', '0000-00-00 00:00:00'),
(197, '22', 'Low-cost digital advertising', '2024-07-20 11:25:43', '0000-00-00 00:00:00'),
(198, '22', 'High ROI through social media campaigns', '2024-07-20 11:25:43', '0000-00-00 00:00:00'),
(199, '22', 'Brand development with interactive content', '2024-07-20 11:25:43', '0000-00-00 00:00:00'),
(200, '22', 'Target-specific user engagement', '2024-07-20 11:25:43', '0000-00-00 00:00:00'),
(201, '22', 'Global exposure for businesses of all sizes', '2024-07-20 11:25:43', '0000-00-00 00:00:00'),
(202, '23', 'Investigative Testing', '2024-07-20 11:28:44', '0000-00-00 00:00:00'),
(203, '23', 'Flexiblity of adapting cases', '2024-07-20 11:28:44', '0000-00-00 00:00:00'),
(204, '23', 'Exploratory testing', '2024-07-20 11:28:44', '0000-00-00 00:00:00'),
(205, '23', 'Examining complex problems', '2024-07-20 11:28:44', '0000-00-00 00:00:00'),
(206, '23', 'Testing User Interface', '2024-07-20 11:28:44', '0000-00-00 00:00:00'),
(207, '23', 'Stability in delivery of product', '2024-07-20 11:28:44', '0000-00-00 00:00:00'),
(208, '23', 'Fixing the defects', '2024-07-20 11:28:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'Auto increment (Unsigned)',
  `country_id` int(11) UNSIGNED NOT NULL COMMENT 'from country master',
  `state_name` varchar(100) NOT NULL,
  `state_code` varchar(10) NOT NULL,
  `short_name` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) UNSIGNED NOT NULL COMMENT 'From users',
  `modified_date` datetime NOT NULL,
  `modified_by` int(11) UNSIGNED NOT NULL COMMENT 'From users',
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1->active,0->inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`id`, `country_id`, `state_name`, `state_code`, `short_name`, `created_date`, `created_by`, `modified_date`, `modified_by`, `status`) VALUES
(1, 1, 'Gujarat', 'guj', '', '2019-09-23 12:05:49', 0, '2019-09-23 12:05:49', 0, 1),
(2, 1, 'Maharashtra', '', '', '2019-11-20 15:04:58', 1, '2019-11-26 13:51:07', 70, 1),
(3, 2, 'Victoria', 'vic', '', '2019-11-20 15:04:58', 1, '2019-11-26 13:51:07', 70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) NOT NULL,
  `insta_id` varchar(255) NOT NULL,
  `twitter_id` varchar(255) NOT NULL,
  `linkedin_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `photo`, `facebook_id`, `insta_id`, `twitter_id`, `linkedin_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Emp1', 'Desc1', '1720007353_494635472.jpg', '', '', '', '', 1, NULL, '2024-07-03 08:19:13'),
(3, 'Emp2', 'Desc2', '1720007334_188778903.jpg', '', '', '', '', 1, '2024-02-07 08:33:50', '2024-07-03 08:18:54'),
(4, 'Emp3', 'Desc3', '1720007207_1173885206.jpg', '', '', '', '', 1, '2024-02-07 08:35:18', '2024-07-03 08:16:47'),
(5, 'emp4', 'demo', '1721034231_256917578.jpg', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 'https://www.google.com/', 1, '2024-07-08 01:39:20', '2024-07-16 10:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `title`, `description`, `image`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Node.js', 'Node.js is an open-source and cross-platform JavaScript runtime environment. It is a popular tool for almost any kind of project! Node.js runs the V8 JavaScript engine, the core of Google Chrome, outside of the browser. This allows Node.js to be very performant.', '1721470368_488788122.svg', 3, 1, '2024-07-20 06:42:48', '2024-07-20 08:17:25'),
(10, '.NET', 'NET is an open-source platform for building desktop, web, and mobile applications that can run natively on any operating system. The . NET system includes tools, libraries, and languages that support modern, scalable, and high-performance software development. An active developer community maintains and supports the .', '1721470512_1497951032.png', 3, 1, '2024-07-20 06:45:12', '2024-07-20 08:17:23'),
(11, 'Python', 'Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically typed and garbage-collected. It supports multiple programming paradigms, including structured, object-oriented and functional programming.', '1721470614_919576299.png', 3, 1, '2024-07-20 06:46:54', '2024-07-20 08:17:20'),
(12, 'Java', 'Java is a general-purpose, object-oriented programming language known for its platform independence, reliability, and security. It’s used in enterprise applications, Android app development, and big data processing.', '1721470697_322968516.png', 3, 1, '2024-07-20 06:48:17', '2024-07-20 08:17:18'),
(13, 'PHP', 'PHP is a widely-used, open-source scripting language primarily for web development. It\'s known for its simplicity, efficiency, and large community. It powers many content management systems and e-commerce platforms.', '1721470755_99084444.png', 3, 1, '2024-07-20 06:49:15', '2024-07-20 08:17:12'),
(14, 'React.js', 'React is a JavaScript library for building user interfaces. It\'s component-based, efficient, and has a large community. Its virtual DOM and declarative style make it popular for creating complex and interactive UIs.', '1721470818_271075303.png', 4, 1, '2024-07-20 06:50:18', '2024-07-20 08:16:50'),
(15, 'Angular', 'Angular is a TypeScript-based open-source web application framework. It offers a comprehensive solution for building scalable and robust applications. Known for its dependency injection, two-way data binding, and command-line interface.', '1721470866_1256009726.png', 4, 1, '2024-07-20 06:51:06', '2024-07-20 08:16:49'),
(16, 'Vue.js', 'Vue.js is a progressive JavaScript framework for building user interfaces. It\'s known for its simplicity, flexibility, and performance. Its component-based architecture and reactivity make it a popular choice.', '1721471453_1843855434.png', 4, 1, '2024-07-20 07:00:53', '2024-07-20 08:16:47'),
(17, 'Next.js', 'Next.js is a React framework for building static and server-rendered React applications. It offers features like automatic code splitting, image optimization, and server-side rendering for improved performance and SEO.', '1721471552_1053164166.png', 4, 1, '2024-07-20 07:02:32', '2024-07-20 08:16:45'),
(18, 'HTML 5', 'HTML5 is the latest version of HTML, the standard markup language for structuring web content. It introduces new elements, APIs, and features for creating rich and interactive web experiences.', '1721471673_1902888832.jpg', 4, 1, '2024-07-20 07:04:33', '2024-07-20 08:16:43'),
(19, 'React Native', 'React Native is a framework for building native mobile apps using JavaScript and React. It allows developers to create cross-platform apps that share code while providing native-like performance.', '1721471750_905879133.png', 8, 1, '2024-07-20 07:05:51', '2024-07-20 08:16:41'),
(20, 'Flutter', 'Flutter is an open-source UI software development kit created by Google. It allows for building natively compiled applications for mobile, web, and desktop from a single codebase, known for its fast development and hot reload feature.', '1721471786_1564330742.png', 8, 1, '2024-07-20 07:06:26', '2024-07-20 08:16:39'),
(21, 'Swift', 'Swift is a programming language developed by Apple for iOS, macOS, watchOS, and tvOS app development. It\'s known for its safety, performance, and expressive syntax.', '1721471839_717183817.png', 8, 1, '2024-07-20 07:07:19', '2024-07-20 08:16:37'),
(22, 'Kotlin', 'Kotlin is a statically typed programming language for the JVM, Android, and iOS. It\'s interoperable with Java and offers features like null safety and coroutines.', '1721471873_1640828521.png', 8, 1, '2024-07-20 07:07:53', '2024-07-20 08:15:58'),
(23, 'iOS', 'iOS development involves creating native applications for Apple devices like iPhone and iPad using Swift or Objective-C. It requires knowledge of Apple\'s development tools and guidelines.', '1721471958_45834404.jpg', 8, 1, '2024-07-20 07:09:18', '2024-07-20 08:15:55'),
(24, 'Android', 'Android development focuses on building apps for Android devices using Kotlin or Java. It involves working with the Android SDK, Android Studio, and understanding Android\'s design principles.', '1721472019_1305445787.webp', 8, 1, '2024-07-20 07:10:19', '2024-07-20 08:15:53'),
(25, 'Magento', 'Magento is an open-source e-commerce platform known for its flexibility and scalability. It offers a wide range of features and customization options for online stores.', '1721472074_1805508094.png', 8, 1, '2024-07-20 07:11:14', '2024-07-20 08:15:51'),
(26, 'Shopify', 'Shopify is a cloud-based, hosted e-commerce platform. It\'s user-friendly and offers a variety of themes and apps to customize online stores.', '1721472116_1215243945.png', 9, 1, '2024-07-20 07:11:56', '2024-07-20 08:15:49'),
(27, 'WooCommerce', 'WooCommerce is a popular open-source e-commerce plugin for WordPress. It integrates seamlessly with WordPress and offers a wide range of extensions.', '1721472169_660656866.png', 9, 1, '2024-07-20 07:12:49', '2024-07-20 08:15:46'),
(28, 'OpenCart', 'OpenCart is an open-source e-commerce platform known for its ease of use and user-friendly admin interface. It\'s suitable for small to medium-sized online stores.', '1721472238_1061924760.png', 9, 1, '2024-07-20 07:13:58', '2024-07-20 08:15:44'),
(29, 'PrestaShop', 'PrestaShop is an open-source e-commerce platform with a focus on customization and scalability. It offers a wide range of features and modules for online stores.', '1721472297_1869311280.png', 9, 1, '2024-07-20 07:14:57', '2024-07-20 08:15:40'),
(30, 'Drupal', 'While primarily a content management system, Drupal can be used for e-commerce with the help of additional modules. It offers flexibility and scalability for complex online stores.', '1721472335_717601471.png', 9, 1, '2024-07-20 07:15:35', '2024-07-20 08:15:37'),
(31, 'Django', 'Django is a high-level Python web framework known for its rapid development, security, and scalability. It follows the Model-View-Controller (MVC) architectural pattern and provides a rich feature set.', '1721472370_1179857532.png', 10, 1, '2024-07-20 07:16:10', '2024-07-20 08:14:31'),
(32, 'Laravel', 'Laravel is a PHP framework known for its elegant syntax, expressive API, and focus on developer happiness. It offers features like routing, authentication, and database interactions.', '1721472496_892534458.png', 10, 1, '2024-07-20 07:18:16', '2024-07-20 08:14:34'),
(33, 'CodeIgniter', 'CodeIgniter is a PHP framework known for its simplicity and performance. It follows a leaner approach with minimal configuration, making it suitable for smaller projects.', '1721472564_1456508126.png', 10, 1, '2024-07-20 07:19:24', '2024-07-20 08:14:35'),
(34, 'WordPress', 'WordPress is a popular content management system that can also be used for e-commerce with plugins like WooCommerce. It\'s user-friendly and has a large community.', '1721472682_48749336.png', 10, 1, '2024-07-20 07:21:22', '2024-07-20 08:14:37'),
(35, 'Spring', 'Spring is a comprehensive Java-based framework for building enterprise applications. It offers modules for dependency injection, data access, web development, and more.', '1721472814_916924255.png', 10, 1, '2024-07-20 07:23:34', '2024-07-20 08:14:42'),
(36, 'Hibernate', 'Hibernate is an object-relational mapping (ORM) tool for Java. It simplifies database interactions by mapping Java objects to database tables.', '1721472914_1119576933.png', 10, 1, '2024-07-20 07:25:14', '2024-07-20 08:14:47'),
(37, 'AWS (Amazon Web Services)', 'AWS is a comprehensive cloud platform offering a wide range of services like compute, storage, database, networking, and more. It provides flexibility, scalability, and a pay-as-you-go pricing model.', '1721472989_1102241980.webp', 11, 1, '2024-07-20 07:26:29', '2024-07-20 08:13:41'),
(38, 'Azure (Microsoft Azure)', 'Azure is a cloud computing platform by Microsoft, offering infrastructure as a service (IaaS), platform as a service (PaaS), and software as a service (SaaS) solutions. It integrates well with Microsoft technologies and offers hybrid cloud options.', '1721473165_1845144407.webp', 11, 1, '2024-07-20 07:29:25', '2024-07-20 08:13:36'),
(39, 'Google Cloud Platform (GCP)', 'GCP is a cloud computing platform by Google, known for its data analytics, machine learning, and container orchestration capabilities. It offers a variety of services for building and deploying applications.', '1721473246_1741161074.jpg', 11, 1, '2024-07-20 07:30:46', '2024-07-20 08:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_company` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `client_photo` varchar(255) DEFAULT NULL,
  `stars` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `client_name`, `client_company`, `comment`, `client_photo`, `stars`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jane Smith', 'CEO, Tech Innovations Inc', 'InfoSolution has been instrumental in our company\'s digital transformation. Their team delivered a custom software solution that streamlined our operations and significantly boosted our productivity. We couldn\'t be happier with their professionalism and e', '1719923913_2012996440.png', 5, 1, '2024-01-29 09:52:35', '2024-07-18 02:52:51'),
(2, 'John Doe', 'CTO, Green Energy Solutions', 'Partnering with InfoSolution was one of the best decisions we made. Their cybersecurity services have fortified our systems against potential threats, giving us peace of mind. Their knowledgeable staff is always ready to assist, ensuring our IT infrastruc', '1719923962_334387390.jpg', 5, 1, '2024-02-07 09:00:28', '2024-07-18 02:53:23'),
(3, 'Emily Davis', 'Marketing Director, Creative Works', 'The team at InfoSolution exceeded our expectations with their innovative approach to web development. They created a user-friendly and visually stunning website that has enhanced our online presence and engagement with our audience. Their commitment to ex', '1719923886_1283264982.png', 5, 1, '2024-02-07 09:00:58', '2024-07-18 02:53:53'),
(5, 'Michael Brown', 'Operations Manager, Global Logistics Corp.', 'InfoSolution\'s cloud computing solutions have revolutionized the way we manage our data and collaborate across teams. Their seamless integration and support have made a significant impact on our efficiency and scalability. We highly recommend their servic', '1720011447_608974121.png', 5, 1, '2024-07-03 09:27:27', '2024-07-18 02:54:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` tinyint(1) NOT NULL COMMENT '1.Super Admin 2.Admin 3.HR 4. Office Staff 5.User 6.Approver',
  `address` varchar(255) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `state` int(1) DEFAULT NULL,
  `country` int(1) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `google_location` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(10,8) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobilenumber`, `email`, `email_verified_at`, `password`, `user_type`, `address`, `area`, `city`, `state`, `country`, `pincode`, `google_location`, `latitude`, `longitude`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '', 'admin@yopmail.com', NULL, '$2y$10$siDR3W0mTbYr3PdpGt0VyO5D449UZWeh2t350yavuLRCk4ErxvqaK', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 04:32:00', '2022-04-07 04:32:00'),
(8, 'Niral Patel', '324234234', 'test@gmail.com', NULL, '$2y$10$ekeGpSwkbNstVv6fQJvuSeDMyzvjQv0TnG9JBxq3MnpJo77nGnnMK', 1, 'test add', 4, 4, 2, 1, '382028', 'ttttttt', 14.46546540, 12.65465465, NULL, '2022-05-10 15:17:01', '2024-07-27 05:08:23'),
(10, 'HR', '1212121221', 'testkh@gmail.com', NULL, '$2y$10$siDR3W0mTbYr3PdpGt0VyO5D449UZWeh2t350yavuLRCk4ErxvqaK', 3, NULL, NULL, NULL, NULL, NULL, '121212', NULL, NULL, NULL, NULL, '2024-01-19 03:17:10', '2024-07-27 05:12:05'),
(12, 'Office Staff', '1212212112', '123@gmail.com', NULL, '$2y$10$LsqeOFZ6g4cIJWgZT7J1s.50uST..EUCIMyF5E2jDI8Cg0VdR3ih2', 4, '23122212121', 26, 1, 1, 1, '121212', 'dei', 99.99999999, 99.99999999, NULL, '2024-07-27 04:08:23', '2024-07-27 05:12:47'),
(15, 'office staff', '2121212121', 'office12@gmail.com', NULL, '24HbVfC_bg6zEEZ', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-27 06:13:23', '2024-07-27 06:13:23'),
(16, 'approver', '1212122121', 'approver@gmail.com', NULL, '24HbVfC_bg6zEEZ', 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-27 06:24:19', '2024-07-27 06:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `why_chooses`
--

CREATE TABLE `why_chooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_chooses`
--

INSERT INTO `why_chooses` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Proven Track Record', 'With a track record of successfully delivering high-quality web and app solutions to a global clientele, eDigillence has established itself as a reliable and trustworthy partner.', 1, '2024-02-08 02:12:28', NULL),
(2, 'Client-Centric Approach', 'We prioritize our clients and their unique needs. Our client-centric approach ensures that your vision is not only understood but also translated into innovative and effective digital solutions', 1, '2024-02-08 02:13:00', NULL),
(3, 'Expert Team', 'Our team comprises skilled professionals with expertise in various domains, ensuring that your projects are handled by experienced individuals committed to delivering top-notch results.', 1, '2024-02-08 02:13:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_management`
--
ALTER TABLE `area_management`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `modified_by` (`modified_by`),
  ADD KEY `status` (`status`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_masters`
--
ALTER TABLE `category_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_technology`
--
ALTER TABLE `category_technology`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_technology_category_id_foreign` (`category_id`),
  ADD KEY `category_technology_technology_id_foreign` (`technology_id`);

--
-- Indexes for table `city_management`
--
ALTER TABLE `city_management`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `modified_by` (`modified_by`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `modified_by` (`modified_by`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiring`
--
ALTER TABLE `hiring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiring_info`
--
ALTER TABLE `hiring_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_data`
--
ALTER TABLE `services_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `modified_by` (`modified_by`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_chooses`
--
ALTER TABLE `why_chooses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `area_management`
--
ALTER TABLE `area_management`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_masters`
--
ALTER TABLE `category_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_technology`
--
ALTER TABLE `category_technology`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `city_management`
--
ALTER TABLE `city_management`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `country_master`
--
ALTER TABLE `country_master`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key, Auto increment', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hiring`
--
ALTER TABLE `hiring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hiring_info`
--
ALTER TABLE `hiring_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96013;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services_data`
--
ALTER TABLE `services_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Auto increment (Unsigned)', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `why_chooses`
--
ALTER TABLE `why_chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_technology`
--
ALTER TABLE `category_technology`
  ADD CONSTRAINT `category_technology_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_masters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_technology_technology_id_foreign` FOREIGN KEY (`technology_id`) REFERENCES `technologies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
