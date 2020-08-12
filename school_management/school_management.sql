-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 02, 2020 at 07:24 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int(20) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'IT'),
(2, 'CS'),
(3, 'MECH'),
(4, 'CIVIL'),
(5, 'EC');

-- --------------------------------------------------------

--
-- Table structure for table `dept_subject_relation`
--

DROP TABLE IF EXISTS `dept_subject_relation`;
CREATE TABLE IF NOT EXISTS `dept_subject_relation` (
  `dept_id` int(11) NOT NULL,
  `sub_code` varchar(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_subject_relation`
--

INSERT INTO `dept_subject_relation` (`dept_id`, `sub_code`, `year`) VALUES
(1, 'IT-101', 1),
(1, 'IT-102', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `father` varchar(20) NOT NULL,
  `mother` varchar(20) NOT NULL,
  `parentsalary` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `tenth` varchar(20) NOT NULL,
  `twelveth` varchar(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `sub_code` varchar(20) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  PRIMARY KEY (`sub_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_code`, `sub_name`) VALUES
('IT-101', 'BCE'),
('IT-102', 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `t_firstname` varchar(20) NOT NULL,
  `t_lastname` varchar(20) NOT NULL,
  `t_email` varchar(20) NOT NULL,
  `t_gender` varchar(20) NOT NULL,
  `t_qualification` varchar(20) NOT NULL,
  `t_phone` varchar(20) NOT NULL,
  `t_dept` varchar(11) NOT NULL,
  `t_address` varchar(80) NOT NULL,
  `t_salary` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`username`, `password`, `t_firstname`, `t_lastname`, `t_email`, `t_gender`, `t_qualification`, `t_phone`, `t_dept`, `t_address`, `t_salary`) VALUES
('teach', '', 'fn', 'ln', 'teacher@gmail.com', 'male', 'MTECH', '9977405041', 'IT', 'sdf', 1022100);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class_relation`
--

DROP TABLE IF EXISTS `teacher_class_relation`;
CREATE TABLE IF NOT EXISTS `teacher_class_relation` (
  `username` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_class_relation`
--

INSERT INTO `teacher_class_relation` (`username`, `year`) VALUES
('teach', 2),
('teach', 3),
('teach', 3),
('teach', 4),
('teach', 3),
('teach', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
