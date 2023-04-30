-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 10:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nid` int(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dept` varchar(100) NOT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `pid`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`, `nid`, `address`, `dept`, `degree`, `pic`) VALUES
(104, 1, 'Guthrie', 'Govan', 'guthrie@xyz.corp', '1234', '1971-12-01', 'Male', '9595', 5959, 'TCS', 'IT', 'MSc', 'images/test.jpg'),
(105, 5, 'Elon', 'Musk', 'elon@spacex.com', '1234', '1971-06-28', 'Male', '8585', 5858, 'WIPRO', 'IT', 'BSc', 'images/330px-Elon_Musk_Royal_Society.jpg'),
(106, 1, 'Hacker', 'Man', 'hackerman@xyz.corp', '1234', '1990-02-02', 'Male', '7575', 5757, 'Honeywell', 'IT', 'MSc', 'images/hacker.png'),
(107, 0, 'Wonder ', 'Woman', 'woman@xyz.corp', '1234', '1993-03-03', 'Female', '4545', 5454, 'PTC', 'IT ', 'MS', 'images/no.jpg'),
(108, 0, 'Andrew', ' Ng', 'andrew@xyz.corp', '1234', '1976-04-16', 'Male', '758758', 857857, 'Accenture', 'IT', 'PhD', 'images/download.jpeg'),
(109, 1, 'Ian ', 'Goodfellow', 'ian@xyz.corp', '1234', '1985-01-01', 'Male', '852852', 258258, 'UBS', 'IT', 'PhD', 'images/1-5.jpg'),
(110, 1, 'Christopher ', 'Manning', 'christopher@xyz.corp', '1234', '1965-09-18', 'Male', '147147', 741741, 'Bajaj finserv', 'IT', 'PhD', 'images/download (1).jpeg'),
(111, 1, 'Jon', 'Snow', 'john@xyz.corp', '1234', '2011-02-01', 'Male', '0187282', 112233, 'Amezon', 'IT', 'BSc.', 'images/jon-snow.jpg'),
(22010150, 3, 'Siddharth', 'Rakshe', 'sid@gmail.com', 'sid123', NULL, 'Male', '1122334455', NULL, 'Barclays', 'IT', NULL, 'images/gettyimages-539840861-170667a.jpg'),
(22120033, 5, 'Siddhesh', 'D', 'sid2@gmail.com', '1234', NULL, 'Male', '95175346', NULL, 'Amezon', 'IT', NULL, 'images/120468.jpg'),
(22120085, 0, 'Virat', 'Joshi', 'virat@gmail.com', 'v123', NULL, 'Male', '7845129636', NULL, 'UBS', 'IT', NULL, 'images/wallpaperflare.com_wallpaper (1).jpg'),
(22120089, 0, 'Vishal', 'K', 'vishal@gmail.com', '1234', NULL, 'Male', '789456', NULL, 'NVIDIA', 'IT', NULL, 'images/163415.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `id` int(11) DEFAULT NULL,
  `token` int(11) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `reason` char(100) DEFAULT NULL,
  `status` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`id`, `token`, `start`, `end`, `reason`, `status`) VALUES
(105, 308, '2019-04-26', '2019-04-30', 'Launching Tesla Model Y', 'Pending'),
(111, 309, '2019-04-09', '2019-04-13', 'Visit to Kings Landing', 'Pending'),
(104, 310, '2019-04-08', '2019-04-09', 'Emergency Leave', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `flogin`
--

CREATE TABLE `flogin` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `dept` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flogin`
--

INSERT INTO `flogin` (`pid`, `pname`, `email`, `password`, `gender`, `contact`, `dept`) VALUES
(1, 'Priya Shelke', 'priya@gmail.com', 'priya@123', 'Female', '78945612', 'IT'),
(3, 'om', 'om@gmail.com', 'om123', 'Male', '789456123', 'IT'),
(5, 'mohit', 'mohit@gmail.com', 'mohit123', 'Male', '894561237', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(11) NOT NULL,
  `eid` int(11) DEFAULT 101,
  `pname` varchar(100) DEFAULT NULL,
  `duedate` date DEFAULT '2003-03-04',
  `subdate` date DEFAULT '2003-03-04',
  `mark` int(11) DEFAULT 0,
  `status` varchar(50) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `eid`, `pname`, `duedate`, `subdate`, `mark`, `status`) VALUES
(215, 105, 'Tesla Model Y', '2019-04-19', '2019-04-06', 10, 'Submitted'),
(216, 106, 'Hack', '2019-05-04', '2019-04-05', 5, 'Submitted'),
(217, 111, 'Do Nothing', '2019-04-02', '2019-04-01', 8, 'Submitted'),
(218, 105, 'Tesla Model X', '2019-04-03', '2019-04-03', 10, 'Submitted'),
(220, 110, 'Data Analysis', '2019-04-16', '2019-04-04', 8, 'Submitted'),
(221, 110, 'Data Analysis', '2019-04-16', '2019-04-04', 7, 'Submitted'),
(223, 108, 'Software Scema', '2019-04-09', '2019-04-02', 3, 'Submitted'),
(224, 107, 'Security Check', '2019-04-26', '2019-04-05', 9, 'Submitted'),
(225, 109, 'ML', '2019-04-03', '2019-04-04', 6, 'Submitted'),
(245, 105, 'UBS Projk', '2023-04-22', '2003-03-04', 0, 'Due');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `eid` int(11) NOT NULL,
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`eid`, `points`) VALUES
(104, 0),
(105, 20),
(106, 5),
(107, 9),
(108, 3),
(109, 6),
(110, 15),
(111, 8),
(22010150, 0),
(22120033, 0),
(22120085, 0),
(22120089, 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `base` int(11) NOT NULL,
  `bonus` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `base`, `bonus`, `total`) VALUES
(104, 78000, 0, 78000),
(105, 105000, 20, 126000),
(106, 60000, 5, 63000),
(107, 77000, 9, 83930),
(108, 50000, 3, 51500),
(109, 85000, 6, 90100),
(110, 47000, 15, 54050),
(111, 45000, 8, 48600),
(22010150, 0, 0, 0),
(22120033, 0, 0, 0),
(22120085, 0, 0, 0),
(22120089, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`token`),
  ADD KEY `employee_leave_ibfk_1` (`id`);

--
-- Indexes for table `flogin`
--
ALTER TABLE `flogin`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `project_ibfk_1` (`eid`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22120090;

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;

--
-- AUTO_INCREMENT for table `flogin`
--
ALTER TABLE `flogin`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD CONSTRAINT `employee_leave_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rank`
--
ALTER TABLE `rank`
  ADD CONSTRAINT `rank_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
