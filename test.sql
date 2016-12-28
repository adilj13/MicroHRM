-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2016 at 12:12 ش
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`` PROCEDURE `AddGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64), `t_srid` INT)  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' ADD ', geometry_column,' GEOMETRY REF_SYSTEM_ID=', t_srid); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

CREATE DEFINER=`` PROCEDURE `DropGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64))  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' DROP ', geometry_column); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `atd_id` bigint(20) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `atd_date` date NOT NULL,
  `atd_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`atd_id`, `emp_id`, `atd_date`, `atd_status`) VALUES
(1, 1, '2016-04-21', 'P'),
(2, 3, '2016-04-21', 'A'),
(3, 2, '2016-04-21', 'L'),
(4, 5, '2016-04-21', 'A'),
(5, 4, '2016-04-21', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `emp_salary` int(10) NOT NULL,
  `emp_avatar` varchar(30) DEFAULT 'img/employee/profile.jpg',
  `emp_hiredate` date DEFAULT NULL,
  `emp_contact_num` varchar(11) DEFAULT NULL,
  `emp_cnic` varchar(13) DEFAULT NULL,
  `emp_address` varchar(50) DEFAULT NULL,
  `emp_nick` varchar(20) DEFAULT NULL,
  `emp_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_salary`, `emp_avatar`, `emp_hiredate`, `emp_contact_num`, `emp_cnic`, `emp_address`, `emp_nick`, `emp_status`) VALUES
(1, 'Adil', 30000, 'img/employee/profile.jpg', '2016-04-20', '03457112921', '3530226362631', 'Lahore, Pakistan', 'Adi', 1),
(2, 'Fasih Haider', 54666, 'img/employee/profile.jpg', '2016-04-13', '2211', '3127686', 'kjsns kknqs  12n jmkn', 'biu', 1),
(3, 'Arslan', 25000, 'img/employee/profile.jpg', '2016-04-15', '0345561231', '353028721893', 'Okara, Pakistan', 'Arsl', 1),
(4, 'Sufyan Raza', 15000, 'img/employee/profile.jpg', '2016-04-20', '030106181', '353031312312', 'TT Singh, Pakistan', 'Chota', 1),
(5, 'Shehriyar Imtiaz', 123000, 'img/employee/profile.jpg', '2016-04-21', '12312313123', '123123131231', 'Lahore, Pakistan', 'Sherry', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` int(50) NOT NULL,
  `emp_id` int(50) NOT NULL,
  `trans_date` date NOT NULL,
  `trans_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `emp_id`, `trans_date`, `trans_amount`) VALUES
(2, 2, '2016-04-20', 1231),
(3, 5, '2016-04-21', 2333);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`atd_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `atd_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
