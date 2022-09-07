-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2019 at 06:10 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medicounsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `ansid` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `date` int(10) NOT NULL,
  PRIMARY KEY (`ansid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`ansid`, `qid`, `pat_id`, `answer`, `date`) VALUES
(2, 3, 8, 'php is a programming language.', 2019),
(34, 3, 5, 'Php is a scripting language', 2019),
(25, 0, 4, 'Php is a scripting language', 2019),
(24, 0, 1, 'I am Shashwat Mishra', 2019),
(21, 3, 1, 'php is atechnology in develop website.', 2019),
(22, 4, 1, 'Dr.AK Mishra is a best serjon in jaunpur. ', 2019),
(23, 7, 1, 'The purpose of website that it provides all people to good facility', 2019),
(33, 9, 1, 'Softpro is istuated near Gudamba thana, Janki puram Sector H', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE IF NOT EXISTS `tbl_appointment` (
  `appid` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `doa` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appid`, `doc_id`, `pat_id`, `doa`, `status`, `date`) VALUES
(2, 2, 1, '2019-08-06', 'N', '2019-08-03'),
(4, 2, 1, '2019-08-14', 'Y', '2019-08-06'),
(5, 2, 1, '2019-08-08', 'N', '2019-08-06'),
(144, 10, 1, '2019-08-15', 'N', '2019-08-11'),
(140, 4, 4, '2019-08-15', 'N', '2019-08-10'),
(141, 7, 4, '2019-08-17', 'N', '2019-08-10'),
(142, 1, 1, '2019-08-15', 'Y', '2019-08-10'),
(143, 1, 1, '2019-08-21', 'N', '2019-08-11'),
(133, 1, 1, '2019-08-23', 'Y', '2019-08-10'),
(139, 4, 4, '2019-08-14', 'N', '2019-08-10'),
(138, 2, 4, '2019-08-11', 'N', '2019-08-10'),
(137, 1, 4, '2019-08-20', 'N', '2019-08-10'),
(135, 1, 4, '2019-08-15', 'Y', '2019-08-10'),
(136, 10, 4, '2019-08-22', 'N', '2019-08-10'),
(134, 1, 1, '2019-08-15', 'N', '2019-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`con_id`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(1, 'Shashwat', 'sm@gmail.com', '7860205937', 'hello', '2019-08-01 15:46:30'),
(2, 'PS', 'ps@gmail.com', '9129716295', 'this is my feedback\r\n', '2019-08-01 15:47:37'),
(3, 'satya', 'satya@gmail.com', '7309989401', 'this is my next feedback', '2019-08-01 15:48:26'),
(5, 'Shashwat ', 'shashwatmishra2608@gmail.com', '9140167608', 'I like this website', '2019-08-10 08:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE IF NOT EXISTS `tbl_doctor` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fees` int(6) NOT NULL,
  `timing` varchar(20) NOT NULL,
  `specialty` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`doc_id`, `name`, `fname`, `gender`, `email`, `password`, `fees`, `timing`, `specialty`, `address`, `mobile`, `photo`, `date`) VALUES
(1, 'Dr. Shashwat', 'RK Mishar', 'male', 'sp@gmail.com', 'sp123', 200, '10:00 AM - 1:00 PM', 'Neuro Surgon', 'Jaunpur', '7860205937', 'e1.jpg', '2019-08-10 06:54:37'),
(2, 'Dr. Anuj Kumar', 'Sataya Prakash Dwivedi', 'male', 'dwivedinauj9118@gmail.com', '0000', 200, '12-35 Pm to 05-00 Pm', 'Eye Specialist', 'Allahabad', '', 'user.png', '2019-08-10 08:58:44'),
(3, 'Dr. Ak Singh', 'Shivam singh', 'male', 'aksingh@gmail.com', 'aksing', 400, '7:00 am-10:00am', 'Surgeon', 'Lucknow', '9987554432', 'mb.jpg', '2019-08-10 10:30:12'),
(4, 'Dr. Ujjwal', 'Arvind Mishra', 'male', 'ujala@gmail.com', 'ujala', 300, '10:00am -12:00pm', 'Ortho Physician', 'Pratapgarh', '7860205937', 'bg4.jpg', '2019-08-10 10:32:51'),
(5, 'Dr. SK Shrivastav', 'aman', 'male', 'aman@gmail.com', 'aman', 100, '12:00pm - 3:00pm', 'Physician', 'Lucknow', '7860205937', 'sm.jpg', '2019-08-10 10:34:34'),
(6, 'Dr. Satya', 'Ashok', 'male', 'satya@gmail.com', 'satya1', 300, '2:00pm - 5:00pm', 'Surgeon', 'Pratapgarh', '9140167608', 'user.png', '2019-08-10 10:35:59'),
(7, 'Dr. Shivam Yadav', 'Satyam Yadav', 'male', 'shiv@gmail.com', 'shiv12', 200, '11:00 am - 2:00 pm', 'Surgeon', 'Agra', '7860205937', 'IMG-20170820-WA0034.jpg', '2019-08-10 10:38:20'),
(8, 'Dr. Suraj', 'Deepak', 'male', 'suraj@gmail.com', 'suraj1', 400, '11:00 AM - 1:00 PM', 'Physician', 'SULTANPUR', '7309989401', '_20170803_154234.jpg', '2019-08-10 10:40:07'),
(9, 'Dr. Shivani', 'Shiv', 'female', 'shiva@gmail.com', 'shiva1', 200, '1:00 pm - 4:00 pm', 'Eye Specialist', 'Varanasi', '7860205937', 'img-phone-1st-screen.png', '2019-08-10 10:41:43'),
(10, 'Dr. Priya', 'Arvind', 'male', 'priya26@gmail.com', 'priya26', 400, '11:00 am - 1:00 pm', 'Neuro Surgon', 'Azamgarh', '91297162295', 'doc.jpg', '2019-08-10 10:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feedid` int(11) NOT NULL AUTO_INCREMENT,
  `pat_id` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`feedid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedid`, `pat_id`, `feedback`, `date`) VALUES
(1, 1, 'feedback success ful', '2019-08-04 15:46:19'),
(2, 4, 'this is my second feedback', '2019-08-04 15:48:50'),
(3, 4, 'THIS IS ANOTHER FEEDBACK', '2019-08-04 15:58:28'),
(4, 4, 'feedback success ful', '2019-08-04 17:08:47'),
(5, 1, 'I found this website so useful. This saves my time.', '2019-08-07 16:20:02'),
(6, 8, 'here i feel very good.', '2019-08-08 16:50:33'),
(7, 1, 'This is a best website which i have visited.', '2019-08-09 01:47:08'),
(8, 5, 'I found this website so useful. It helps me alot.', '2019-08-11 09:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE IF NOT EXISTS `tbl_patient` (
  `pat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `pin` int(6) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`pat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`pat_id`, `name`, `fname`, `email`, `password`, `address`, `mobile`, `pin`, `age`, `gender`, `date`) VALUES
(1, 'Shashwat', 'RKM', 'sm@gmail.com', 'sm123', 'Azamgarh', '7860205937', 276288, 20, 'male', '2019-08-01 15:09:24'),
(5, 'shiva mauriya', 'shivam mauriya', 'shiva@gmail.com', 'shiv', 'Azamgarh', '9129714532', 276136, 22, 'male', '2019-08-08 16:30:07'),
(4, 'priya', 'arvind', 'pm@gmail.com', 'pm123', 'Azamgarh', '9129716295', 276288, 21, 'female', '2019-08-04 15:15:36'),
(6, 'kritika bind', 'anshuman bind', 'kritika@gmail.com', 'k123', 'Gorakhpur', '9988756229', 453216, 19, 'female', '2019-08-08 16:32:02'),
(7, 'Mamta yadav', 'Pradeep yadav', 'mamta@gmail.com', 'mmm', 'Varanshi', '9971629576', 321455, 25, 'female', '2019-08-08 16:34:13'),
(8, 'Ekta singh', 'Suraj singh', 'ekta@gmail.com', 'ekta', 'Baliya', '6532195595', 556673, 24, 'female', '2019-08-08 16:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `pat_id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`qid`, `pat_id`, `question`, `date`) VALUES
(9, 1, 'How reach Softpro India ?\r\n', '2019-08-11'),
(3, 4, 'what is PHP ?\r\n', '2019-08-04'),
(4, 4, 'Who is best ortho surgon in Jaunpr ??\r\n', '2019-08-04'),
(10, 1, 'How reach Softpro India ?\r\n', '2019-08-11'),
(6, 1, 'this is answer', '2019-08-04'),
(7, 1, 'What is the purpose of this Website?', '2019-08-09'),
(11, 1, 'Who is the director of softpro India ?', '2019-08-11');
