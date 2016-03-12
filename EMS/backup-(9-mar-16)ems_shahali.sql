-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2016 at 07:07 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems_shahali`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
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
('001', 'Nasir Uddin', 'nasir@ctcoders.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Accounting', 'Male', '2016-03-10', '0+', 'Narayangonj', '01681659817', 0x53637265656e73686f74202831292e706e67, 2147483647, 'Baba', 'Ma'),
('002', 'Sobuj Nokkhotro', 'sobuj@ctcoders.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Accounting', 'Male', '2016-03-22', 'A+', 'Dhaka', '01681659817', 0x53637265656e73686f74202831292e706e67, 2147483647, 'Baba', 'Ma');

-- --------------------------------------------------------

--
-- Table structure for table `employee_status`
--

CREATE TABLE `employee_status` (
  `sl_no` int(10) NOT NULL,
  `e_id` varchar(10) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `leave_reamin` int(3) DEFAULT NULL,
  `working_hour` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `working_hour`
--

CREATE TABLE `working_hour` (
  `sl_no` int(10) NOT NULL,
  `e_id` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `check_in_time` time DEFAULT NULL,
  `check_out_time` time DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `employee_status`
--
ALTER TABLE `employee_status`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `working_hour`
--
ALTER TABLE `working_hour`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `e_id` (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_status`
--
ALTER TABLE `employee_status`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `working_hour`
--
ALTER TABLE `working_hour`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT;
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
