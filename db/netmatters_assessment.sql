-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 02:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters_assessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `fullName` varchar(100) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `contactMail` varchar(100) NOT NULL,
  `phoneNumber` varchar(14) NOT NULL,
  `textMessage` text NOT NULL,
  `subscribed` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`fullName`, `company`, `contactMail`, `phoneNumber`, `textMessage`, `subscribed`, `created_at`) VALUES
('Joyce Meadowcroft', '', 'joyce.meadow@thursday.com', '04439268192', 'Good afternoon dear Netmatters, I was recently interested in turning my diary into an online blog and was wondering if you could help me.', 1, '2023-11-06 13:18:56'),
('Elizabeth Best', 'Coopers Chase TMC', 'best@thursday.com', '+442917389021', 'Hello, I am enquiring about your services and would like to discuss it further.', 0, '2023-11-06 13:22:28'),
('Ibrahim Arif', '', 'Ibra_arif@thursday.com', '+402892719312', 'Good afternoon, based on the assumption this prompt offered, I would like to talk to you about the possibility of creating a software to store old patient files. I am trying to move away from the use of paper.', 1, '2023-11-06 13:25:57'),
('Ron Ritchie', 'Union', 'redron@thursday.com', '04402927362', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0, '2023-11-06 13:28:34'),
('Chris Hudson', 'Fairhaven Police', 'DCI_Hudson@thursday.com', '04485297654', 'The Fairhaven Police Station could use assistance to update the systems.', 1, '2023-11-06 13:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `title` varchar(100) NOT NULL,
  `read_time` varchar(30) NOT NULL,
  `description` varchar(150) NOT NULL,
  `author` varchar(30) NOT NULL,
  `date_posted` date NOT NULL,
  `article_img` varchar(150) NOT NULL,
  `author_img` varchar(150) NOT NULL DEFAULT 'images/netmatters-ltd-VXAv.png',
  `nav_category` varchar(30) NOT NULL,
  `article_category` varchar(30) NOT NULL,
  `link_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`title`, `read_time`, `description`, `author`, `date_posted`, `article_img`, `author_img`, `nav_category`, `article_category`, `link_url`) VALUES
('New Langley Web Design Project Won', '4 Minute Read', 'The Client Langley is a co-educational, inclusive, day and boarding school based in Norfolk. Establi', 'Netmatters', '2023-10-31', 'images/new-langley-web-bhUy.png', 'images/netmatters-ltd-VXAv.png', 'web_design', 'news', '#'),
('Netmatters Victories at the Spire Solicitor C...', '2 Minute Read', 'There were celebrations at the Netmatters offices following the finale of the Spire Solicitors LLP C', 'Netmatters', '2023-10-30', 'images/netmatters-victories-at-hnbr.jpg', 'images/netmatters-ltd-VXAv.png', 'digital_marketing', 'news', '#'),
('IT Office Administrator', '', 'Salary Range £21,675 - £25,000 + Bonuses + Pension Hours 40 hours per week, Monday - Friday Location', 'Bethany Shakespeare', '2023-10-23', 'images/it-office-administrator-4v7i.jpg', 'images/bethany-shakespeare-F6Iu.jpg', 'it_support', 'careers', '#'),
('How are Mobile Applications Benefitting the T...', '4 Minute Read', 'In the modern world, it is common practice that our days are becoming filled with short breaks in wh', 'Netmatters', '2023-10-12', 'images/how-are-mobile-Zikv.jpg', 'images/netmatters-ltd-VXAv.png', 'bespoke_software', 'news', '#'),
('September Notables 2023', '3 Minute Read', 'Celebrating the achievements and dedication of our staff, at Netmatters, we put aside some time each', 'Netmatters', '2023-10-03', 'images/september-notables-2023-OjVE.png', 'images/netmatters-ltd-VXAv.png', 'digital_marketing', 'news', '#'),
('Mid-Level Web Developer', '', 'Salary Range 25-37k DOE + Bonus + Benefits Hours 40 hours per week, Mon - Fri. Flexible working hour', 'Rebecca Moore', '2023-09-27', 'images/mid-level-web-developer-HAEH.jpg', 'images/rebecca-moore-1fh7.jpg', 'web_design', 'careers', '#');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
