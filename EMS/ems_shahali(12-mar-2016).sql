-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2016 at 04:27 AM
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
('001', 'Shahali', 'shahali@ct.com', '202cb962ac59075b964b07152d234b70', 'Employee', 'Male', '2016-03-16', 'O+', 'Narayangonj', '01681659817', 0x53637265656e73686f74202831292e706e67, 2147483647, 'Baba', 'Ma'),
('002', 'Nasir', 'nasir@ct.com', '202cb962ac59075b964b07152d234b70', 'Admin', 'Male', '2016-03-17', 'O+', 'Narayangonj', '01515845121', 0x53637265656e73686f74202832292e706e67, 2147483647, 'Baba', 'Ma'),
('003', 'Burhan', 'burhan@ct.com', 'b59c67bf196a4758191e42f76670ceba', 'Employee', 'Male', '2016-03-24', 'A+', 'Narayangonj', '01720420420', 0x53637265656e73686f74202833292e706e67, 2147483647, 'Baba', 'Ma'),
('004', 'Sobuj', 'sobuj@ct.com', '111', 'Admin', 'Male', '2016-03-23', 'O+', 'Dhaka', '01215412541', 0x53637265656e73686f74202834292e706e67, 2147483647, 'Baba', 'Ma'),
('005', 'Dewan', 'dewan@ct.com', '123', 'Employee', 'Male', '2016-03-17', 'ABC+', 'Dhaka', '+880 420 42', 0x53637265656e73686f74202835292e706e67, 2147483647, 'Baba', 'Ma');

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

--
-- Dumping data for table `employee_status`
--

INSERT INTO `employee_status` (`sl_no`, `e_id`, `department`, `designation`, `status`, `salary`, `leave_reamin`, `working_hour`) VALUES
(6, NULL, 'Accounting', 'Student', 'Active', 52000, NULL, NULL),
(7, NULL, 'Marketing', 'Student', 'Active', 52222, NULL, NULL),
(8, NULL, 'HRM', 'Bog Brother', 'Active', 84000, NULL, NULL),
(9, NULL, 'Marketing', 'Student', 'Active', 120000, NULL, NULL),
(10, NULL, 'HRM', 'Bhi brother', 'Active', 420000, NULL, NULL);

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
  ADD PRIMARY KEY (`e_id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
