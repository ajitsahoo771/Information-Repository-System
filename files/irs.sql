-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2016 at 03:25 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `irs`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(8) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name_unique` (`cat_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Automobile', 'Cars and Bikes.'),
(11, 'Nature', 'Hills, Rivers, Seas, Landscapes.');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(1, 'Project Report'),
(2, 'Documents & Files'),
(3, 'Questionnaires'),
(4, 'Lectures & Notes'),
(5, 'Videos'),
(6, 'Journals'),
(7, 'Magazines'),
(8, 'Thesis & Dissertation');

-- --------------------------------------------------------

--
-- Table structure for table `facstaff`
--

CREATE TABLE IF NOT EXISTS `facstaff` (
  `Fid` int(11) NOT NULL AUTO_INCREMENT,
  `Designation` varchar(100) NOT NULL,
  `Regdno` varchar(15) NOT NULL,
  `RegdMail` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Contact` bigint(11) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  PRIMARY KEY (`Fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `facstaff`
--

INSERT INTO `facstaff` (`Fid`, `Designation`, `Regdno`, `RegdMail`, `Name`, `Gender`, `Password`, `Contact`, `Dept`) VALUES
(1, 'Faculty', 'P00140', 'kabita.sahoo@cutm.ac.in', 'Kabita Sahoo', 'Female', 'kabita', 123154854, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Fid` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Feedback` text NOT NULL,
  PRIMARY KEY (`Fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Fid`, `Name`, `Email`, `Feedback`) VALUES
(1, 'Nisha Agarwal', '130301csr030@cutm.ac.in', 'Easy to understand.\r\n'),
(2, 'Salman', '130301CSR018@cutm.ac.in', 'I want Lecture notes.');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `Mid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Mid`, `Name`, `Password`) VALUES
(1, 'IRS Manager', 'irs');

-- --------------------------------------------------------

--
-- Table structure for table `managerqueue`
--

CREATE TABLE IF NOT EXISTS `managerqueue` (
  `MQid` int(11) NOT NULL AUTO_INCREMENT,
  `Regdno` varchar(15) NOT NULL,
  `RegdMail` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Contact` bigint(11) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `AccType` varchar(50) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `FileName` varchar(100) NOT NULL,
  `Extension` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`MQid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `managerqueue`
--

INSERT INTO `managerqueue` (`MQid`, `Regdno`, `RegdMail`, `Name`, `Contact`, `Dept`, `AccType`, `Category`, `FileName`, `Extension`, `Date`) VALUES
(11, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 1234567890, 'CSE', 'Student', 'Documents & Files', 'Syllabus', 'SoET (B.Tech.)Academic Calendar (2015-16).pdf', '2016-03-13'),
(12, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 1234567890, 'CSE', 'Student', 'Documents & Files', 'Cocubes Syllabus', 'CoCubes_Syllabus.pdf', '2016-03-13'),
(13, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 1234567890, 'CSE', 'Student', 'Documents & Files', 'Javascript Expt', 'gui.html', '2016-03-13'),
(14, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 1234567890, 'CSE', 'Student', 'Project Report', 'Seminar Report', '0001013.pdf', '2016-03-13'),
(15, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 1234567890, 'CSE', 'Student', 'Project Report', 'Technology Seminar Report', 'MEC10078.March14.18.pdf', '2016-03-13'),
(16, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 1234567890, 'CSE', 'Student', 'Project Report', 'IRS Report', 'IRS Review 14-3-16.pdf', '2016-03-13'),
(17, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 1234567890, 'CSE', 'Student', 'Project Report', 'Custom Project 2 Report', 'IRS Review 14-3-16.pdf', '2016-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(8) NOT NULL AUTO_INCREMENT,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `post_topic` (`post_topic`),
  KEY `post_by` (`post_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`) VALUES
(50, 'Koenigsegg Regera or the Bugatti Veyron.', '2016-03-12 12:42:10', 9, 1),
(51, 'I think Koenigsegg Regera is faster.', '2016-03-12 12:42:53', 9, 1),
(52, 'Help me out.', '2016-03-12 12:45:26', 10, 1),
(53, 'Kasmir. The heaven on earth is better. ', '2016-03-12 12:45:58', 10, 1),
(54, 'Help me select', '2016-03-12 12:47:49', 11, 1),
(55, 'KUV 100. value for money.', '2016-03-12 12:48:14', 11, 1),
(56, 'Thank You for your opinion.', '2016-03-12 21:57:14', 9, 1),
(57, 'Thank You for your opinion.', '2016-03-12 21:58:11', 9, 1),
(58, 'Maruti Vitara', '2016-03-12 22:02:54', 11, 1),
(60, 'North India Or South India', '2016-03-12 22:54:39', 13, 1),
(61, 'KUV 100 is the fastest car', '2016-03-13 13:18:43', 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Sid` int(11) NOT NULL AUTO_INCREMENT,
  `Regdno` varchar(15) NOT NULL,
  `RegdMail` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Contact` bigint(11) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Sec` varchar(10) NOT NULL,
  `Batch` int(11) NOT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Sid`, `Regdno`, `RegdMail`, `Name`, `Gender`, `Password`, `Contact`, `Dept`, `Sec`, `Batch`) VALUES
(3, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 'Female', 'nisha', 1234567890, 'CSE', 'A', 2013),
(4, '130301CSR031', '130301csr030@cutm.ac.in', 'Aswini', 'Female', '1234567', 123456789, 'CSE', 'A', 2013),
(5, '130301CSR018', '130301CSR018@cutm.ac.in', 'Salman', 'Male', '1234567', 1234567890, 'CSE', 'A', 2013),
(6, '130301CSR017', '130301CSR017@cutm.ac.in', 'Ajit Kumar', 'Male', '123456789', 1234567890, 'CSE', 'A', 2008);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(8) NOT NULL AUTO_INCREMENT,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `topic_cat` (`topic_cat`),
  KEY `topic_by` (`topic_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(9, 'Which car is faster ? ', '2016-03-12 12:42:10', 1, 1),
(10, 'Which place in India is better ? Kashmir or Kerela ?', '2016-03-12 12:45:26', 11, 1),
(11, 'KUV 100 or Maruti Vitara ?', '2016-03-12 12:47:49', 1, 1),
(13, 'Best tourist place in India.', '2016-03-12 22:54:39', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uploaded`
--

CREATE TABLE IF NOT EXISTS `uploaded` (
  `Uid` int(11) NOT NULL AUTO_INCREMENT,
  `Regdno` varchar(15) NOT NULL,
  `RegdMail` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `AccType` varchar(20) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Contact` bigint(11) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `FileName` varchar(1000) NOT NULL,
  `Extension` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `uploaded`
--

INSERT INTO `uploaded` (`Uid`, `Regdno`, `RegdMail`, `Name`, `AccType`, `Dept`, `Contact`, `Category`, `FileName`, `Extension`, `Date`) VALUES
(14, '130301CSR018', '130301CSR018@cutm.ac.in', 'Salman', 'Student', 'CSE', 1234567890, 'Documents & Files', 'Compiler Design', 'vid.l', '2016-03-12'),
(17, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 'Student', 'CSE', 1234567890, 'Documents & Files', 'Event Handling', 'checkbox.html', '2016-03-13'),
(20, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 'Student', 'CSE', 1234567890, 'Documents & Files', 'Compiler Design  Lab ', 'vid.y', '2016-03-13'),
(21, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 'Student', 'CSE', 1234567890, 'Documents & Files', 'IWT ', 'array.html', '2016-03-13'),
(22, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 'Student', 'CSE', 1234567890, 'Lectures & Notes', 'Java', 'Module-3.pdf', '2016-03-13'),
(23, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha', 'Student', 'CSE', 1234567890, 'Documents & Files', 'Javascript', 'vowels.html', '2016-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_date` datetime NOT NULL,
  `user_level` int(8) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name_unique` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_level`) VALUES
(1, 'Ajit Kumar', '123456789', '130301CSR017@cutm.ac.in', '2016-03-02 15:30:46', 0),
(2, 'IRS Manager', 'irs', 'feedback.irs.cutm@gmail.com', '2016-03-13 13:00:00', 0),
(3, 'Nisha', 'nisha', '130301csr030@cutm.ac.in', '2016-03-13 13:00:00', 0),
(4, 'Salman', '1234567', '130301csr018@cutm.ac.in', '2016-03-13 12:00:00', 0),
(5, 'n', '1234567', '130301csr030@cutm.ac.in', '2016-03-13 16:58:43', 0),
(6, '7', '1234567', '130301csr030@cutm.ac.in', '2016-03-13 17:24:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userstore`
--

CREATE TABLE IF NOT EXISTS `userstore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Regdno` varchar(15) NOT NULL,
  `RegdMail` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `AccType` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `userstore`
--

INSERT INTO `userstore` (`id`, `Regdno`, `RegdMail`, `Name`, `AccType`) VALUES
(1, '130301CSR017', '130301csr017@cutm.ac.in', 'Ajit Kumar Sahoo', 'Student'),
(2, '130301CSR018', '130301csr018@cutm.ac.in', 'Mohammad Salman Haider', 'Student'),
(3, '130301CSR030', '130301csr030@cutm.ac.in', 'Nisha Agarwal', 'Student'),
(4, 'P00140', 'kabita.sahoo@cutm.ac.in', 'Kabita Sahoo', 'Faculty'),
(5, 'P00142', 'ajit.pasayat@cutm.ac.in', 'Ajit Kumar Pasayat', 'Faculty'),
(7, 'P00004', 'sangram@cutm.ac.in', 'Sangram Keshari Swain', 'Faculty'),
(8, 'P00142', 'agrwlnisa95@gmail.com\r\n', 'Nisha Agarwal', 'Faculty');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_topic`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`post_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`topic_by`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
