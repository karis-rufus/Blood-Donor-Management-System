-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2024 at 12:47 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

DROP TABLE IF EXISTS `announce`;
CREATE TABLE IF NOT EXISTS `announce` (
  `id` int NOT NULL AUTO_INCREMENT,
  `bloodneed` varchar(255) NOT NULL,
  `bloodbank` varchar(30) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `annoucement` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `bloodneed`, `bloodbank`, `requirement`, `date`, `annoucement`) VALUES
(1, 'B-', 'Gataka BLood Bank', 'Weight at least 50kg, No alcohol intake in 24hrs prior to donation, light meal should be taken before donation, be in good health, must be 18 years old and must have at least 3 month interval than the last donation.', '2024-02-09 15:27:45', 'Emmergency Annoucement!'),
(2, '0+', 'Karen_bloodbank', 'Must be in good health and feeling very well. Must weigh at least 110 lbs.', '2024-02-09 17:14:43', 'URGENT!!!\r\nSerious accident condition.'),
(3, 'AB+', 'Hardy bloodbank ', 'Donors should be in good health and feeling well on the day of donation. They should not have any acute or chronic medical conditions that could pose a risk to themselves or the recipient.', '2024-02-28 00:00:00', 'Emergency Announcement!!');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

DROP TABLE IF EXISTS `blood`;
CREATE TABLE IF NOT EXISTS `blood` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` int NOT NULL,
  `bloodqty` int NOT NULL,
  `collection` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `name`, `gender`, `dob`, `weight`, `bloodgroup`, `address`, `contact`, `bloodqty`, `collection`) VALUES
(4, 'Joseph Kamanja', 'M', '1999-05-03', 74, 'B+', 'Kericho', 716432112, 320, '2024-02-09 00:00:00'),
(2, 'Dancan mwangi', 'M', '1990-01-01', 82, 'A+', 'kiserian', 712234567, 320, '2024-02-08 00:00:00'),
(6, 'Eve Njeri', 'M', '2003-03-12', 65, 'AB', 'mamba', 1123456897, 250, '2024-02-13 00:00:00'),
(7, 'Alice Mwenyewe', 'F', '2000-06-28', 62, 'AB', 'Olerai', 732234567, 300, '2024-02-20 00:00:00'),
(9, 'daniel mugoja', 'M', '1900-07-23', 45, 'O-', 'Twiga', 765432123, 320, '2024-03-21 00:00:00'),
(11, 'Simeon Ochanda', 'M', '2024-03-07', 65, 'A-', 'Karen', 711761391, 143, '2024-03-07 00:00:00'),
(10, 'victor Moses', 'M', '1998-07-23', 81, 'AB', 'limuru', 765432123, 300, '2024-03-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `campagindb`
--

DROP TABLE IF EXISTS `campagindb`;
CREATE TABLE IF NOT EXISTS `campagindb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `oname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phn` int NOT NULL,
  `cdate` date NOT NULL,
  `descp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `campagindb`
--

INSERT INTO `campagindb` (`id`, `cname`, `oname`, `phn`, `cdate`, `descp`) VALUES
(1, 'Saving lives Together', 'Trust Fund', 110174707, '2024-03-21', 'Help save a life. Come willingly and you will be blessed.'),
(2, 'Blood Donation Drive', '\r\nVolunteer Health Organization', 715456987, '2024-03-28', 'We are excited to announce our upcoming Blood Donation Drive organized by the Volunteer Health Organization. This campaign aims to collect blood donations to support patients in need and save lives.'),
(9, 'Blood Donation Drive', ' Red Cross Society', 9877666, '2024-03-02', 'mansa musa 400 billion dollars in africa only.');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `guardianname` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `weight` int NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `guardianname`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `contact`, `username`, `password`) VALUES
(1, 'Simion Ochanda', 'Onguka samuel', 'M', '2002-05-02', 68, 'B+', 'ochandasimion167@gma', 'Gataka', 789765654, 'ochanda', '1234'),
(2, 'Antony Wawira', 'Samuel Wawira', 'M', '1990-03-23', 80, '0', 'antonywawira23@gmail', 'Kericho', 798764345, 'anto', '1234'),
(3, 'Nancy Murage maina', 'Edward Murage', 'M', '1998-04-23', 70, 'O-', 'nancym34@gmail.com', 'Upendo', 788987654, 'murage', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `donorname` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `donorname`) VALUES
(1, 'karis', '1234', 'Rufus mwangi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
