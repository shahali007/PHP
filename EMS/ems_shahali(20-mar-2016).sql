-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2016 at 07:48 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ems_shahali`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE IF NOT EXISTS `employee_details` (
  `e_id` varchar(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_role` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `image` blob,
  `NID` int(25) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`e_id`, `name`, `email`, `password`, `user_role`, `gender`, `date_of_birth`, `blood_group`, `address`, `contact`, `image`, `NID`, `father_name`, `mother_name`) VALUES
('001', 'Shahali bogdadi', 'shahali@ct.com', '123', 'Employee', 'Male', '2016-03-16', 'O+', 'Narayangonj, Bangladesh', '01681659817', 0x53637265656e73686f74202831292e706e67, 2147483647, 'Baba', 'Ma'),
('002', 'Nasir Uddin', 'nasir@ct.com', '111', 'Admin', 'Male', '2016-03-17', 'O+', 'Dhaka', '01515845121', 0x53637265656e73686f74202832292e706e67, 2147483647, 'Baba', 'Ma'),
('003', 'Burhan Apa', 'burhan@ct.com', '123', 'Employee', 'Male', '2016-03-24', 'A+', 'Bangladesh', '01720420420', 0x53637265656e73686f74202833292e706e67, 2147483647, 'Baba', 'Ma'),
('004', 'Sobuj', 'sobuj@ct.com', '123', 'Admin', 'Male', '2016-03-23', 'O+', 'Dhaka', '01215412541', 0x53637265656e73686f74202834292e706e67, 2147483647, 'Baba', 'Ma'),
('005', 'Dewan', 'dewan@ct.com', '123', 'Employee', 'Male', '2016-03-17', 'ABC+', 'Dhaka', '+880 420 42', 0x53637265656e73686f74202835292e706e67, 2147483647, 'Baba', 'Ma'),
('006', 'AL', 'helal@ct.com', '123', 'Employee', 'Male', '2016-02-10', 'O+', 'Singapore', '01222000022', '', 2147483647, 'Baba', 'Maa'),
('007', 'Saiful', 'saiful@ct.com', '123', 'Employee', 'Male', '2016-03-11', 'O+', 'Naryangonj', '01658921455', '', 2147483647, 'Baba', 'Maa'),
('100', 'Robbani', 'robbani@st.com', '123', 'Employee', 'Male', '2016-03-16', 'O+', 'Narayangonj', '01215412541', 0x53637265656e73686f74202832292e706e67, 2147483647, 'Baba', 'MA');

-- --------------------------------------------------------

--
-- Table structure for table `employee_status`
--

CREATE TABLE IF NOT EXISTS `employee_status` (
  `sl_no` int(10) NOT NULL,
  `e_id` varchar(10) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `leave_reamin` int(3) DEFAULT NULL,
  `working_hour` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_status`
--

INSERT INTO `employee_status` (`sl_no`, `e_id`, `department`, `designation`, `status`, `salary`, `leave_reamin`, `working_hour`) VALUES
(6, '001', 'Accounting', 'Student', 'Active', 52000, NULL, NULL),
(7, '002', 'Marketing', 'Student', 'Active', 52222, NULL, NULL),
(8, '003', 'HRM', 'Bog Brother', 'Active', 84000, NULL, NULL),
(9, '004', 'Marketing', 'Student', 'Active', 120000, NULL, NULL),
(10, '005', 'HRM', 'Bhi brother', 'Active', 420000, NULL, NULL),
(11, NULL, 'Marketing', 'Student', 'Active', 50000, NULL, NULL),
(12, '006', 'HRM', 'Marine Engineer', 'Active', 65000, NULL, NULL),
(13, '007', 'Marketing', 'Textile Engineer', 'Active', 25000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `working_hour`
--

CREATE TABLE IF NOT EXISTS `working_hour` (
  `sl_no` int(10) NOT NULL,
  `e_id` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `check_in_time` time DEFAULT NULL,
  `check_out_time` time DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `working_hour`
--

INSERT INTO `working_hour` (`sl_no`, `e_id`, `date`, `check_in_time`, `check_out_time`, `reason`) VALUES
(1, '004', '2016-03-15', '06:37:00', '00:00:00', ''),
(2, '004', '2016-03-15', '06:38:00', '00:00:00', ''),
(3, '005', '2016-03-15', '06:41:00', '06:51:00', ''),
(4, '100', '2016-03-15', '07:09:00', '00:00:00', ''),
(5, '100', '2016-03-19', '04:50:00', '00:00:00', ''),
(6, '005', '2016-03-19', '05:36:00', '05:38:00', ''),
(7, '004', '2016-03-19', '05:47:00', '00:00:00', ''),
(8, '002', '2016-03-19', '13:28:00', '00:00:00', ''),
(9, '003', '2016-03-19', '14:17:00', '00:00:00', ''),
(10, '001', '2016-03-19', '19:18:00', '00:00:00', ''),
(11, '006', '2016-03-19', '19:33:00', '00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`e_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_status`
--
ALTER TABLE `employee_status`
  ADD PRIMARY KEY (`sl_no`), ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `working_hour`
--
ALTER TABLE `working_hour`
  ADD PRIMARY KEY (`sl_no`), ADD KEY `e_id` (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_status`
--
ALTER TABLE `employee_status`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `working_hour`
--
ALTER TABLE `working_hour`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_status`
--
ALTER TABLE `employee_status`
ADD CONSTRAINT `employee_status_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee_details` (`e_id`);

--
-- Constraints for table `working_hour`
--
ALTER TABLE `working_hour`
ADD CONSTRAINT `working_hour_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `employee_details` (`e_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
