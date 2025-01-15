-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 11:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `old`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'iswarya', 'iswaryavk99@gmail.com', 'hello iswarya'),
(2, 'ish', 'ish@123', 'your website..is very nice keep it up..'),
(3, 'nivesh', 'nivesh@gmail.com', 'hii.. this website is very usefully to us.. thank you'),
(4, '', '', ''),
(5, '', '', ''),
(6, 'iswarya', 'iswaryavk99@gmail.com', 'poog'),
(7, 'sarn', 'sanr@43re.com', 'welldon..'),
(8, 'iswarya', 'iswaryavk99@gmail.com', 'hiii'),
(9, 'iswarya', 'iswaryavk99@gmail.com', 'now start');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `payments` varchar(100) NOT NULL,
  `card` bigint(200) NOT NULL,
  `cvc` int(100) NOT NULL,
  `EXP_Month` int(200) NOT NULL,
  `EXP_Year` smallint(100) NOT NULL,
  `dates` int(100) NOT NULL,
  `months` varchar(100) NOT NULL,
  `years` varchar(100) NOT NULL,
  `payment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `payments`, `card`, `cvc`, `EXP_Month`, `EXP_Year`, `dates`, `months`, `years`, `payment`) VALUES
(1, 'iswarya', 'credit', 564565434, 675, 0, 0, 10, 'October', '2021', '0'),
(2, 'iswarya', 'credit', 564565434, 675, 0, 0, 10, 'October', '2021', '0'),
(3, 'iswarya', 'credit', 564565434, 675, 0, 0, 10, 'October', '2021', '0'),
(4, 'iswarya', 'credit', 564565434, 675, 0, 0, 10, 'October', '2021', '0'),
(5, 'iswarya', 'credit', 564565434, 675, 0, 2121, 10, 'October', '2021', '0'),
(6, 'furvin', 'credit', 234891, 675, 0, 2121, 15, 'December', '2021', '0'),
(7, 'rin', '', 123, 222, 0, 222, 0, '--MONTH--', '--YEAR--', '0'),
(8, 'sharma', 'paypal', 656, 45433, 0, 2021, 15, 'June', '2021', '0'),
(9, 'iswarya', 'credit', 5456, 45433, 0, 2021, 10, 'December', '2021', '0'),
(10, 'iswarya', 'credit', 5456, 45433, 0, 2021, 10, 'December', '2021', '0'),
(11, 'iswarya', 'credit', 1234, 890, 0, 2021, 1, 'July', '2021', '0'),
(12, 'iya', 'paypal', 1234, 890, 0, 222, 15, 'December', '2021', '0'),
(13, 'iya', 'paypal', 1234, 890, 0, 222, 15, 'December', '2021', '0'),
(14, 'sun', '', 234891, 222, 0, 222, 15, 'December', '2021', '0'),
(15, 'sun', '', 234891, 222, 0, 222, 15, 'December', '2021', '0'),
(16, 'sun', '', 234891, 222, 0, 222, 15, 'December', '2021', '0'),
(17, 'sun', '', 234891, 222, 0, 222, 15, 'December', '2021', '0'),
(18, 'ishr', 'credit', 5456, 878, 0, 2121, 14, 'August', '2021', '0'),
(19, 'ishr', 'credit', 5456, 878, 0, 2121, 14, 'August', '2021', '0'),
(112, 'ramya', 'credit', 8789876789876789, 767, 9, 2000, 12, 'June', '2021', 'Rs.2000 pay'),
(113, 'thulasi', 'credit', 8976787678765678, 768, 5, 1777, 10, 'March', '2021', 'Rs.2000 pay'),
(122, 'thulasi', 'credit', 8976787678765678, 768, 5, 1777, 10, 'March', '2021', 'Rs.2000 pay'),
(124, 'iswarya', 'credit', 1234567898765432, 234, 1, 2003, 3, 'March', '2021', 'Rs.2000 pay'),
(133, 'iswarya', 'credit', 6756767898767898, 989, 6, 1999, 12, 'June', '2021', 'Rs.2000 pay'),
(136, 'iswarya', 'credit', 6756767898767898, 989, 6, 1999, 12, 'June', '2021', 'Rs.2000 pay'),
(138, 'iswarya', 'credit', 6756767898767898, 989, 6, 1999, 12, 'June', '2021', 'Rs.2000 pay'),
(144, 'iswaet', 'credit', 7676767677777777, 777, 9, 1998, 8, 'October', '2021', 'Rs.2000 pay'),
(145, 'iswaet', 'credit', 7676767677777777, 777, 9, 1998, 8, 'October', '2021', 'Rs.2000 pay'),
(154, 'iswarya', 'credit', 7867876789878678, 876, 7, 2004, 9, 'October', '2021', 'Rs.2000 pay'),
(155, 'iswarya', 'credit', 7867876789878678, 876, 7, 2004, 9, 'October', '2021', 'Rs.2000 pay'),
(157, 'ratha', 'credit', 9878676565454343, 876, 1, 1999, 14, 'September', '2021', 'Rs.2000 pay'),
(164, 'ratha', 'credit', 9878676565454343, 876, 1, 1999, 14, 'September', '2021', 'Rs.2000 pay'),
(165, 'ratha', 'credit', 9878676565454343, 876, 1, 1999, 14, 'September', '2021', 'Rs.2000 pay'),
(166, 'ramya', 'Gpay', 4563756767654348, 434, 7, 1888, 10, 'July', '2021', 'Rs.2000 pay'),
(167, 'ramya', 'Gpay', 4563756767654348, 434, 7, 1888, 10, 'July', '2021', 'Rs.2000 pay'),
(168, 'ratha', 'Gpay', 8978987678987676, 876, 4, 2000, 10, 'June', '2021', 'Rs.2000 pay'),
(172, 'iswarya', 'Gpay', 5676564789876543, 543, 5, 2000, 10, 'March', '2021', 'Rs.2000 pay'),
(174, 'ratha', 'Gpay', 7678765678765678, 678, 7, 2009, 7, 'August', '2021', 'Rs.2000 pay'),
(175, 'iswarya', 'paypal', 6565656565656565, 565, 6, 2009, 7, 'September', '2021', 'Rs.2000 pay'),
(176, 'iswarya', 'paypal', 6565656565656565, 565, 6, 2009, 7, 'September', '2021', 'Rs.2000 pay'),
(186, 'ganagavel', 'credit', 2345676546765453, 453, 11, 1999, 9, 'October', '2021', 'Rs.2000 pay'),
(187, 'kilop', 'credit', 7658789897867876, 675, 7, 2000, 13, 'October', '2022', 'Rs.2000 pay'),
(188, 'iswaet', 'credit', 9876789876789876, 234, 9, 2020, 10, 'August', '2021', 'Rs.2000 pay'),
(190, 'iswaet', 'credit', 8789878987898789, 988, 9, 2002, 13, 'March', '2021', 'Rs.2000 pay'),
(191, 'iswarya', 'credit', 5656565656565656, 867, 6, 2020, 14, 'September', '2021', 'Rs.2000 pay'),
(192, 'iswaet', 'credit', 7777777777777777, 777, 7, 2000, 13, 'August', '2021', 'Rs.2000 pay'),
(193, 'iswarya', 'Gpay', 3453876895867812, 812, 1, 1999, 13, 'July', '2021', 'Rs.2000 pay'),
(194, 'iswarya', 'credit', 1234567891234511, 123, 7, 2021, 2, 'June', '2023', 'Rs.2000 pay');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `Brothers` varchar(100) NOT NULL,
  `Systers` varchar(100) NOT NULL,
  `Fstatus` varchar(100) NOT NULL,
  `Homeat` varchar(100) NOT NULL,
  `Home` varchar(100) NOT NULL,
  `HouseOwner` varchar(100) NOT NULL,
  `Marital` varchar(100) NOT NULL,
  `Physical_challenged` varchar(100) NOT NULL,
  `height` bigint(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `Bdate` varchar(100) NOT NULL,
  `Btime` varchar(100) NOT NULL,
  `Bplace` varchar(100) NOT NULL,
  `zodic` varchar(100) NOT NULL,
  `star` varchar(100) NOT NULL,
  `diagonal` varchar(100) NOT NULL,
  `yogam` varchar(100) NOT NULL,
  `Dosh` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `workLocation` varchar(100) NOT NULL,
  `livingPlace` varchar(100) NOT NULL,
  `annualIncome` varchar(100) NOT NULL,
  `jobType` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `fathername`, `mothername`, `Brothers`, `Systers`, `Fstatus`, `Homeat`, `Home`, `HouseOwner`, `Marital`, `Physical_challenged`, `height`, `age`, `Bdate`, `Btime`, `Bplace`, `zodic`, `star`, `diagonal`, `yogam`, `Dosh`, `education`, `workLocation`, `livingPlace`, `annualIncome`, `jobType`, `position`, `img`, `cast`, `religion`, `address`) VALUES
(125, 'ramya', 'sarath', 'yamuna', 'Nill', 'Nill', 'Middle class', 'City', 'Terraced house', 'Own house', 'Single', 'No', 180, '25', '2022-12-31', '20:50', 'france', 'Aries', 'thiruvonam', 'pogan', 'keerthi subam', 'No', 'B,sc(cs)', 'WORK FROM HOME', 'thiruvarur', 'below 50,000', 'Government Employee', 'Permanent', 'a3.jfif', 'BC', 'Hindu', '298/usman road, chennai, 6100003'),
(132, 'suthan', 'ali', 'manih', 'Nill', 'Nill', 'Middle class', 'City', 'Terraced house', 'Own house', 'Single', 'No', 180, '25', '2022-12-31', '23:59', 'America', 'Aries', 'thiruvonam', 'pogan', 'keerthi subam', 'No', 'B,sc(cs)', 'WORK FROM HOME', 'thiruvarur', 'below 50,000', 'Government Employee', 'Permanent', '8.jpeg', 'OBC', 'hindu', '54/south street,ootty.'),
(154, 'arjuna', 'kanagavel', 'mathavi', 'Nill', 'Nill', 'Middle class', 'City', 'Terraced house', 'Own house', 'Single', 'No', 180, '25', '1996-12-12', '06:50', 'Tamil Nadu', 'Aries', 'thiruvonam', 'i do know', 'ayush', 'No', 'B,TECH', 'London', 'delhi', 'below 50 Lakhs', 'Marine Engineer', 'Permanent', 'b1.jfif', 'BC', 'Hindu', '901/South street,\r\nDelhi,\r\ncall:1234567891'),
(172, 'iswarya', 'ali', 'manih', 'Nill', 'Nill', 'Middle class', 'City', 'Terraced house', 'Own house', 'Single', 'No', 180, '25', '2022-01-31', '23:59', 'france', 'Aries', 'thiruvonam', 'pogan', 'keerthi subam', 'No', 'BE', 'USA', 'thiruvarur', 'below 50,000', 'Government Employee', 'Permanent', 'a11.jpg', 'BC', 'Hindu', 'jiuk'),
(173, 'suryan', 'ali', 'manih', 'Nill', 'Nill', 'Middle class', 'Village', 'Terraced house', 'Own house', 'Single', 'No', 180, '25', '1997-09-01', '09:46', 'united kingdom', 'Scorpio', 'hastham', 'polam', 'ayush', 'No', 'ME', 'India', 'delhi', '3 Lakhs', 'Private Employee', 'Permanent', 'user3.jpg', 'BC', 'Hindu', 'jillu'),
(174, 'thulasi', 'ali', 'valima', 'Nill', 'Nill', 'Middle class', 'City', 'Terraced house', 'Own house', 'Single', 'No', 180, '25', '1992-12-31', '06:59', 'france', 'Aries', 'thiruvonam', 'pogan', 'keerthi subam', 'Yes', 'M,Sc(IT)', 'WORK FROM HOME', 'thiruvarur', 'below 50,000', 'Government Employee', 'Permanent', 'zoho.jpg', 'BC', 'Hindu', 'no 12/3, north to ver, norvey, canada 456 788.  call : 4357-8976-87'),
(175, 'iswarya', 'thil', 'kio', 'Nill', '1 sister', 'Middle class', 'Village', 'Form house', 'Own house', 'Single', 'No', 50, '25', '1999-05-17', '08:59', 'thiruvarur', 'Aries', 'thiruvonam', 'pogan', 'keerthi subam', 'Yes', 'B,Sc(IT)', 'USA', 'ooty', '9 Lakhs', 'Software', 'Permanent', '8.jpeg', 'BC', 'Hindu', 'i would like thank you for you helping...');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'iswarya', 'iswaryavk99@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'uj.jfif'),
(2, 'arjun', 'arjun@12345', '827ccb0eea8a706c4c34a16891f84e7b', '8.jpeg'),
(3, 'kavin', 'kavin@1212gmail.com', 'a01610228fe998f515a72dd730294d87', 'user3.jpg'),
(4, 'kavink', 'kavin1212@gmail.com', '93279e3308bdbbeed946fc965017f67a', 'user1.jpg'),
(5, 'mnc', 'mnc@gmail.com', '137ba32f5287e91476419770adedaa2a', 'aa.jfif'),
(6, 'arjuna', 'arjuna@12345', '827ccb0eea8a706c4c34a16891f84e7b', 'b1.jfif'),
(7, 'arjunaas', 'arjunaas@123', '202cb962ac59075b964b07152d234b70', 'user1.jpg'),
(8, 'iswarya', 'iswaryavk99@gmail.com', '1bc54e0d032e3ffd462314d7c459d9d3', 'user3.jpg'),
(9, 'ishu', 'iswaryavk99@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'zoho.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `view_payment`
--

CREATE TABLE `view_payment` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `payments` varchar(200) NOT NULL,
  `card` bigint(200) NOT NULL,
  `cvc` int(200) NOT NULL,
  `EXP_Month` int(200) NOT NULL,
  `EXP_Year` smallint(200) NOT NULL,
  `dates` int(200) NOT NULL,
  `months` varchar(200) NOT NULL,
  `years` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `PAYid` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view_payment`
--

INSERT INTO `view_payment` (`id`, `name`, `payments`, `card`, `cvc`, `EXP_Month`, `EXP_Year`, `dates`, `months`, `years`, `payment`, `PAYid`) VALUES
(1, 'uik', 'gpay', 1234567898765432, 876, 8, 2001, 12, 'june', '2000', '2000', 0),
(2, 'iswarya', 'credit', 6578789876765456, 344, 6, 2002, 2, 'January', '2021', 'Rs.2000 pay', 0),
(3, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(4, 'ratha', 'credit', 6765676787678767, 667, 6, 1999, 12, 'November', '2021', 'Rs.2000 pay', 0),
(5, 'ratha', 'credit', 6767676767676767, 987, 7, 609, 11, 'September', '2021', 'Rs.2000 pay', 0),
(6, 'iswarya', 'credit', 6765676567656787, 987, 7, 2002, 12, 'January', '2021', 'Rs.2000 pay', 0),
(7, 'iswarya', 'credit', 7676767676767676, 676, 8, 5555, 12, 'November', '2021', 'Rs.2000 pay', 0),
(8, 'ramya', 'credit', 8788999999999999, 989, 7, 7777, 11, 'October', '2021', 'Rs.2000 pay', 0),
(9, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(10, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(11, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(12, 'gender', 'credit', 8789878999999977, 999, 6, 2000, 15, 'October', '2021', 'Rs.2000 pay', 0),
(13, 'iswarya', 'credit', 1234323432222222, 321, 9, 2000, 13, 'July', '2021', 'Rs.2000 pay', 0),
(14, 'iswarya', 'credit', 8888888888888888, 767, 7, 990, 12, 'Febrary', '2021', 'Rs.2000 pay', 0),
(15, 'theeri', 'paytm', 8978787878989898, 987, 5, 1999, 1, 'January', '2021', 'Rs.2000 pay', 0),
(16, 'thig', 'credit', 7676567656765454, 876, 7, 3454, 13, 'March', '2021', 'Rs.2000 pay', 0),
(17, 'tyuo', 'Gpay', 8765432343434354, 765, 6, 5432, 11, 'September', '2021', 'Rs.2000 pay', 0),
(18, 'sun', 'paytm', 6753429647587234, 765, 7, 6787, 13, 'September', '2021', 'Rs.2000 pay', 0),
(19, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(20, 'ramyaj', 'credit', 987878676765556, 876, 7, 1222, 14, 'September', '2021', 'Rs.2000 pay', 0),
(21, '989999999999999', 'credit', 7, 565, 9, 3333, 10, 'October', '2021', 'Rs.2000 pay', 0),
(22, '989999999999999', 'credit', 0, 565, 9, 3333, 10, 'October', '2021', 'Rs.2000 pay', 0),
(23, '', '', 0, 0, 0, 0, 0, '', '', 'Rs.2000 pay', 0),
(24, '', '', 0, 0, 0, 0, 0, '', '', 'Rs.2000 pay', 0),
(25, '', '', 0, 0, 0, 0, 0, '', '', 'Rs.2000 pay', 0),
(26, 'kui', 'credit', 7676767676767676, 998, 7, 1999, 7, 'June', '2021', 'Rs.2000 pay', 0),
(27, 'sivakami', 'credit', 5678456710983290, 567, 5, 1200, 2, 'May', '2021', 'Rs.2000 pay', 0),
(28, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(29, 'rio', 'credit', 6785676756456787, 678, 9, 2999, 9, 'October', '2021', 'Rs.2000 pay', 0),
(30, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(31, 'jio', 'credit', 8787898989878789, 897, 9, 1999, 13, 'January', '2021', 'Rs.2000 pay', 0),
(32, 'jio', 'credit', 8787898989878789, 897, 9, 1999, 13, 'January', '2021', 'Rs.2000 pay', 0),
(33, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(34, 'mio', 'credit', 8987897676789878, 897, 9, 2899, 10, 'Febrary', '2021', 'Rs.2000 pay', 0),
(35, 'mio', 'credit', 8987897676789878, 897, 9, 2899, 10, 'Febrary', '2021', 'Rs.2000 pay', 0),
(36, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(37, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(38, 'gender', 'credit', 8888888888888888, 878, 9, 1999, 11, 'January', '2021', 'Rs.2000 pay', 0),
(39, 'gender', 'credit', 8888888888888888, 878, 9, 1999, 11, 'January', '2021', 'Rs.2000 pay', 0),
(46, 'yio', 'credit', 9876543212345678, 765, 5, 1999, 6, 'March', '2021', 'Rs.2000 pay', 0),
(50, 'ramya', 'credit', 3212323432343234, 321, 4, 2998, 14, 'October', '2021', 'Rs.2000 pay', 0),
(68, 'genderhyu', 'paytm', 1543526785478988, 876, 11, 2002, 2, 'January', '2021', 'Rs.2000 pay', 0),
(69, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(70, 'yazhu', 'credit', 8786756666667777, 777, 2, 2121, 2, 'March', '2021', 'Rs.2000 pay', 0),
(71, 'iswaryaki', 'credit', 9878989898989898, 988, 7, 2000, 13, 'Febrary', '2021', 'Rs.2000 pay', 0),
(72, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(73, 'ratha', 'credit', 7878787877777777, 787, 9, 2021, 1, 'Febrary', '2021', 'Rs.2000 pay', 0),
(74, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(75, 'nuji', 'credit', 7656765678767898, 876, 5, 2000, 2, 'January', '2021', 'Rs.2000 pay', 0),
(76, 'thibbm', 'credit', 4564676747898765, 786, 11, 1999, 9, 'October', '2021', 'Rs.2000 pay', 0),
(77, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(78, 'genderuuu', 'credit', 7777777777777777, 876, 9, 6566, 10, 'November', '2022', 'Rs.2000 pay', 0),
(79, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(80, 'amman', 'Gpay', 2347867678767876, 98, 22, 1222, 3, 'September', '2021', 'Rs.2000 pay', 0),
(81, 'amman', 'Gpay', 2347867678767876, 98, 22, 1222, 3, 'September', '2021', 'Rs.2000 pay', 0),
(82, 'ramyahu', 'credit', 7867867876787678, 877, 9, 1222, 12, 'October', '2021', 'Rs.2000 pay', 0),
(83, 'ramyahu', 'credit', 7867867876787678, 877, 9, 1222, 12, 'October', '2021', 'Rs.2000 pay', 0),
(84, '', '', 0, 0, 0, 0, 0, '', '', '', 0),
(85, 'can', 'credit', 7676767676767676, 876, 9, 8976, 9, 'May', '2021', 'Rs.2000 pay', 0),
(87, 'can', 'credit', 7676767676767676, 876, 9, 8976, 9, 'May', '2021', 'Rs.2000 pay', 0),
(88, 'jaanu', 'credit', 8789098767898765, 987, 9, 2000, 13, 'January', '2021', 'Rs.2000 pay', 0),
(89, 'jaanu', 'credit', 8789098767898765, 987, 9, 2000, 13, 'January', '2021', 'Rs.2000 pay', 0),
(90, 'jaanu', 'credit', 8789098767898765, 987, 9, 2000, 13, 'January', '2021', 'Rs.2000 pay', 0),
(91, 'jaanu', 'credit', 8789098767898765, 987, 9, 2000, 13, 'January', '2021', 'Rs.2000 pay', 0),
(92, 'jaanuumaaaa', 'credit', 8789098767898765, 987, 9, 2000, 13, 'January', '2021', 'Rs.2000 pay', 0),
(93, 'jaanuumaaaa', 'credit', 8789098767898765, 987, 9, 2000, 13, 'January', '2021', 'Rs.2000 pay', 0),
(94, 'jaanuumaaaa', 'credit', 8789098767898765, 987, 9, 2000, 13, 'January', '2021', 'Rs.2000 pay', 0),
(95, 'jaanuumaaaammmm', 'credit', 8789098767898765, 987, 9, 2000, 13, 'January', '2021', 'Rs.2000 pay', 0),
(99, 'kayal', 'credit', 7654323456787654, 898, 9, 2021, 12, 'July', '2021', 'Rs.2000 pay', 0),
(108, 'ratha', 'credit', 3456765456765434, 876, 9, 9876, 9, 'January', '2021', 'Rs.2000 pay', 0),
(109, 'ratik', 'credit', 3456765456765434, 876, 9, 9876, 9, 'January', '2021', 'Rs.2000 pay', 0),
(110, 'yojana', 'credit', 3456765456788434, 876, 9, 9876, 9, 'January', '2021', 'Rs.2000 pay', 0),
(111, 'ramyagy', 'credit', 4357435676543212, 876, 8, 1222, 12, 'August', '2021', 'Rs.2000 pay', 0),
(112, 'thilaja', 'credit', 5467876543234567, 765, 8, 1222, 12, 'July', '2021', 'Rs.2000 pay', 0),
(113, 'hunji', 'credit', 9876789876545434, 987, 7, 987, 10, 'October', '2021', 'Rs.2000 pay', 0),
(114, 'tuntun', 'credit', 8767876787678765, 876, 5, 6757, 11, 'October', '2021', 'Rs.2000 pay', 0),
(115, 'tuntun', 'credit', 8767876787678765, 876, 5, 6757, 11, 'October', '2021', 'Rs.2000 pay', 0),
(116, 'trish', 'credit', 8767876787678765, 876, 5, 6757, 11, 'October', '2021', 'Rs.2000 pay', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_payment`
--
ALTER TABLE `view_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `view_payment`
--
ALTER TABLE `view_payment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
