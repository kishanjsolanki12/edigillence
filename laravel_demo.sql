-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 11:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_demo`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_master`
--

INSERT INTO `country_master` (`id`, `country_name`, `country_code`, `short_name`, `created_at`, `created_by`, `modified_at`, `modified_by`, `status`, `is_deleted`) VALUES
(1, 'India', 'Ind', '', '2019-09-23 12:05:30', 0, '2019-09-23 12:05:30', 0, 1, 0),
(2, 'Australia', 'Aus', '', '2019-09-23 12:05:30', 0, '2019-09-23 12:05:30', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_02_15_095032_create_permission_tables', 1),
(8, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(9, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(10, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(11, '2016_06_01_000004_create_oauth_clients_table', 2),
(12, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, 'Office Staff', 'web', '2022-04-10 17:06:23', '2022-04-10 17:06:23');

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
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL COMMENT 'from patient',
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`id`, `country_id`, `state_name`, `state_code`, `short_name`, `created_date`, `created_by`, `modified_date`, `modified_by`, `status`) VALUES
(1, 1, 'Gujarat', 'guj', '', '2019-09-23 12:05:49', 0, '2019-09-23 12:05:49', 0, 1),
(2, 1, 'Maharashtra', '', '', '2019-11-20 15:04:58', 1, '2019-11-26 13:51:07', 70, 1),
(3, 2, 'Victoria', 'vic', '', '2019-11-20 15:04:58', 1, '2019-11-26 13:51:07', 70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobilenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` tinyint(1) NOT NULL COMMENT '1.Super Admin 2.Admin 3.Therapist 4.HR 5. Office Staff 6.Patients	',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `state` int(1) DEFAULT NULL,
  `country` int(1) DEFAULT NULL,
  `pincode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(10,8) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobilenumber`, `email`, `email_verified_at`, `password`, `user_type`, `address`, `area`, `city`, `state`, `country`, `pincode`, `google_location`, `latitude`, `longitude`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '', 'admin@yopmail.com', NULL, '$2y$10$uui1x8sw97vWVjnK4uweOOpumL44Pa9DwFhTbnYt7jl3ipzAPJbiS', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 04:32:00', '2022-04-07 04:32:00'),
(3, 'Therapiest', '', 'therapiest@yopmail.com', NULL, '$2y$10$d2CXuB7DmtzrcSFZpQuKKeA6SCSt6NmgofpuyZHCMWwdcwWP9Ph8i', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-07 04:32:49', '2022-04-07 04:32:49'),
(8, 'Niral Patel', '324234234', 'test@gmail.com', NULL, '$2y$10$ekeGpSwkbNstVv6fQJvuSeDMyzvjQv0TnG9JBxq3MnpJo77nGnnMK', 0, 'test add', 4, 4, 2, 1, '382028', 'ttttttt', '14.46546540', '12.65465465', NULL, '2022-05-10 15:17:01', '2022-05-25 07:59:05');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `city_management`
--
ALTER TABLE `city_management`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `modified_by` (`modified_by`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `modified_by` (`modified_by`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `modified_by` (`modified_by`),
  ADD KEY `status` (`status`);

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
-- AUTO_INCREMENT for table `area_management`
--
ALTER TABLE `area_management`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `city_management`
--
ALTER TABLE `city_management`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `country_master`
--
ALTER TABLE `country_master`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary key, Auto increment', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Auto increment (Unsigned)', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

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
