-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 04:26 PM
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
-- Database: `dormy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '2016-04-04 20:31:45', '2019-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `course_sn` varchar(255) DEFAULT NULL,
  `course_fn` varchar(255) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(11, 'MS', 'MS', 'Masters', '2019-10-24 21:42:28'),
(12, 'BS', 'BS', 'Bachelors', '2019-10-24 21:42:38'),
(13, 'PhD', 'PhD', 'PhD', '2019-10-24 21:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) DEFAULT NULL,
  `seater` int(11) DEFAULT NULL,
  `feespm` int(11) DEFAULT NULL,
  `foodstatus` int(11) DEFAULT NULL,
  `stayfrom` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `course` varchar(500) DEFAULT NULL,
  `regno` int(11) DEFAULT NULL,
  `firstName` varchar(500) DEFAULT NULL,
  `middleName` varchar(500) DEFAULT NULL,
  `lastName` varchar(500) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `emailid` varchar(500) DEFAULT NULL,
  `egycontactno` bigint(11) DEFAULT NULL,
  `guardianName` varchar(500) DEFAULT NULL,
  `guardianRelation` varchar(500) DEFAULT NULL,
  `guardianContactno` bigint(11) DEFAULT NULL,
  `corresAddress` varchar(500) DEFAULT NULL,
  `corresCIty` varchar(500) DEFAULT NULL,
  `corresState` varchar(500) DEFAULT NULL,
  `corresPincode` int(11) DEFAULT NULL,
  `pmntAddress` varchar(500) DEFAULT NULL,
  `pmntCity` varchar(500) DEFAULT NULL,
  `pmnatetState` varchar(500) DEFAULT NULL,
  `pmntPincode` int(11) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `course`, `regno`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(7, 100, 5, 8000, 1, '2016-06-17', 4, 'Bachelor of Engineering', 108061211, 'Test', 'test', 'kumar', 'male', 8467067344, 'test@gmail.com', 123456789, 'test', 'test', 1236547890, 'New Delhi India', 'Aligarh', 'Uttar Pradesh', 202001, 'New Delhi India', 'Delhi', 'Delhi (NCT)', 202001, '2016-06-23 11:54:35', ''),
(8, 112, 3, 4000, 0, '2016-06-27', 5, 'Bachelor  of Science', 102355, 'rahul', 'kumar', 'Singh', 'male', 6786786786, 'rahul@gmail.com', 789632587, 'demo', 'demo', 1234567890, 'New Delhi', 'Delhi', 'Delhi (NCT)', 110001, 'New Delhi', 'Delhi', 'Delhi (NCT)', 110001, '2016-06-26 16:31:08', ''),
(9, 132, 5, 2000, 1, '2016-06-28', 6, 'Bachelor of Engineering', 586952, 'Ajay', '', 'kumar', 'male', 8596185625, 'ajay@gmail.com', 8285703354, 'demo', 'demo', 8285703354, 'New Delhi India', 'Aligarh', 'Uttar Pradesh', 202001, 'New Delhi India', 'Delhi', 'Delhi (NCT)', 202001, '2016-06-26 16:40:07', ''),
(10, 8, 2, 12000, 0, '2024-03-15', 4, 'Bachelors', 0, 'Daphy', 'Neksa', 'Daphine', 'female', 79941457799, 'daphydaphine247@gmail.com', 799765678, 'kish', 'mum', 755543224, 'Embu', 'Nairobi', 'Kerala', 0, 'kenya', 'embu', 'Himachal Pradesh', 60100, '2024-03-07 13:44:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL,
  `fees` int(11) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`) VALUES
(1, 5, 100, 8000, '2016-04-11 22:45:43'),
(2, 2, 201, 6000, '2016-04-12 01:30:47'),
(3, 2, 200, 6000, '2016-04-12 01:30:58'),
(4, 3, 112, 4000, '2016-04-12 01:31:07'),
(5, 5, 132, 2000, '2016-04-12 01:31:15'),
(6, 2, 8, 12000, '2024-03-07 13:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(1, 10, 'test@gmail.com', '', '', '', '2016-06-22 06:16:42'),
(2, 10, 'test@gmail.com', '', '', '', '2016-06-24 11:20:28'),
(4, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-24 11:22:47'),
(5, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-26 15:37:40'),
(6, 20, 'ajay@gmail.com', 0x3a3a31, '', '', '2016-06-26 16:40:57'),
(7, 10, 'test@gmail.com', 0x3a3a31, '', '', '2019-06-10 05:02:51'),
(8, 10, 'test@gmail.com', 0x3a3a31, '', '', '2019-06-10 05:49:42'),
(9, 10, 'test@gmail.com', 0x3a3a31, '', '', '2019-06-10 07:17:32'),
(10, 10, 'test@gmail.com', 0x3a3a31, '', '', '2019-06-10 08:08:59'),
(11, 21, 'dchandra@mail.umkc.edu', 0x3a3a31, '', '', '2019-10-24 21:49:00'),
(12, 23, 'dchandra@mail.umkc.edu', 0x3a3a31, '', '', '2019-10-28 05:32:30'),
(13, 24, 'akkipant@gmail.com', 0x3a3a31, '', '', '2019-10-28 05:42:14'),
(14, 41, 'neksasmiyu@gmail.com', 0x3a3a31, '', '', '2024-02-28 19:21:03'),
(15, 41, 'neksasmiyu@gmail.com', 0x3a3a31, '', '', '2024-02-28 19:25:16'),
(16, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-01 10:01:48'),
(17, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-04 18:51:38'),
(18, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-04 19:03:26'),
(19, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-06 06:02:46'),
(20, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-06 06:03:50'),
(21, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-06 06:06:30'),
(22, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-06 06:17:06'),
(23, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-06 13:29:49'),
(24, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-06 13:49:04'),
(25, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-06 13:54:04'),
(26, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-06 13:55:32'),
(27, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-06 13:57:13'),
(28, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-06 14:05:30'),
(29, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-07 10:52:16'),
(30, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-07 11:59:13'),
(31, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-07 12:52:09'),
(32, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-07 13:00:03'),
(33, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-07 13:25:48'),
(34, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-07 13:42:19'),
(35, 42, 'daphydaphine247@gmail.com', 0x3a3a31, '', '', '2024-03-07 13:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `contactNo` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `food` varchar(10000) DEFAULT NULL,
  `work` varchar(10000) DEFAULT NULL,
  `course` varchar(10000) NOT NULL,
  `sports` varchar(10000) NOT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) DEFAULT NULL,
  `passUdateDate` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `food`, `work`, `course`, `sports`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(29, '9753892', 'Nikita ', '', 'Goel', 'female', 72528358, 'ng@gmil.com', '1234', 'Vegetarian', 'Late Night', 'Graduate', 'American Football', '2019-10-30 17:05:44', NULL, NULL),
(31, '1736789', 'Zeal', '', 'Patel', 'male', 73672935, 'zp@gmail.com', '1234', 'Vegetarian', 'Early Morning', 'Graduate', 'Baseball', '2019-10-30 17:07:21', NULL, NULL),
(38, '68543', 'Sneha', '', 'Singh', 'female', 85758874, 'ss@gmail.com', '1234', 'Vegetarian', 'Late Night', 'Medical', 'Baseball', '2019-10-30 17:50:43', NULL, NULL),
(41, 'b14/70054', 'Evie', 'neksa', 'Percy', 'female', 799764323, 'neksasmiyu@gmail.com', '1234', 'Vegetarian', 'Late Night', 'Under Graduate', 'None', '2024-02-28 19:20:46', NULL, NULL),
(42, 'B141/20075/2020', 'Daphy', 'Neksa', 'Daphine', 'female', 79941457799, 'daphydaphine247@gmail.com', '1234', 'Vegetarian', 'Late Night', 'Under Graduate', 'Baseball', '2024-03-01 10:01:23', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_no` (`room_no`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
