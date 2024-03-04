-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Apr 26, 2022 at 08:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ADMIN', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `Em_id` int(6) NOT NULL,
  `joining_date` date NOT NULL,
  `depatment` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `lead` varchar(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `Em_id`, `joining_date`, `depatment`, `designation`, `lead`, `username`, `password`, `email`) VALUES
(1002, 'DIK', 0, '2021-05-01', 'IT', 'intern', 'no', '', '', ''),
(1003, 'dikshu', 0, '2022-04-01', 'WEB DEV', 'intern', 'yes', '', '', ''),
(1005, 'dikshu', 0, '2002-01-19', 'WEB DEV', 'intern', 'no', '', '', ''),
(1006, 'rajesh', 0, '2022-01-20', 'IT', 'intern', 'No', '', '', ''),
(1007, 'rajesh', 0, '2022-04-13', 'IT', 'intern', 'No', '', '', ''),
(1008, 'dikshu', 0, '2022-04-15', 'IT', 'TECH HEAD', 'No', '', '', ''),
(1009, 'CHINUU', 6666, '2022-04-18', 'IT', 'intern', 'No', 'CHINU', '123', 'dk@010.gmail.com'),
(1010, 'VS', 1010, '2022-04-01', 'IT', 'lead', 'YES', 'VIS', '123456', 'vis@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `depatment` varchar(200) NOT NULL,
  `start_leave` date NOT NULL,
  `end_leave` date NOT NULL,
  `reason` varchar(500) NOT NULL,
  `noofdays` int(6) NOT NULL,
  `Action` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `name`, `depatment`, `start_leave`, `end_leave`, `reason`, `noofdays`, `Action`, `username`) VALUES
(1, 'dik', 'IT', '2022-04-14', '2022-04-17', 'Bihu Adventure', 4, 'REJECTED', ''),
(2, 'dikshu', 'Web-Tech', '2022-04-14', '2022-04-17', 'To watch KGF2', 4, '', ''),
(3, 'Raj', 'hr', '2022-04-15', '2022-04-16', 'To watch KGF2', 2, '', ''),
(4, 'rajesh', 'it', '2022-04-13', '2022-04-17', 'bihu', 4, '', ''),
(5, 'dikshu', 'hr', '2022-04-09', '2022-04-11', 'hospital', 3, 'Rejected', ''),
(7, 'dikshu', 'hr', '2022-04-15', '2022-04-21', 'Start of a fresh year', 6, 'Approved', 'dik'),
(8, 'dikshu', 'accounts', '2022-04-07', '2022-04-09', 'Start of a fresh year', 2, 'Approved', 'dik'),
(9, 'dikshu', 'hr', '2022-04-15', '2022-04-17', 'Bihu Adventure', 2, 'Approved', 'dik'),
(10, 'dikshu', 'hr', '2022-04-01', '2022-04-15', 'Start of a fresh year', 0, 'APPROVED', ''),
(11, 'dikshu', 'hr', '2022-04-08', '2022-04-17', 'Start of a fresh year', 9, '', ''),
(12, 'di', 'accounts', '2022-04-08', '2022-04-16', 'Mood nahi hai', 8, 'Requested', 'admin'),
(13, 'dikshu', 'hr', '2022-04-15', '2022-04-17', 'Bihu Adventure', 2, 'Requested', 'dik'),
(16, 'v', 'hr', '2022-04-15', '2022-04-19', 'Start of a fresh year', 3, 'Requested', 'admin'),
(17, 'vi', 'accounts', '2022-04-16', '2022-04-18', 'Start of a fresh year', 1, 'Requested', 'admin'),
(18, 'vs', 'IT head', '2022-04-22', '2022-04-26', 'a', 2, 'Requested', 'vis'),
(19, 'vs', 'IT', '2022-04-24', '2022-04-27', 'AWOL', 1, 'REQUESTED', 'VIS'),
(20, 'vs', 'IT', '2022-04-22', '2022-04-27', 'AWOL', 3, 'REQUESTED', 'VIS'),
(21, 'VS', 'IT', '2022-04-22', '2022-04-27', 'AWOL', 3, 'REQUESTED', 'ADMIN'),
(22, 'VS', 'IT', '2022-04-24', '2022-04-27', 'AWOL', 1, 'REJECTED', 'ADMIN'),
(23, 'VS', 'IT', '2022-04-23', '2022-04-26', 'AWOL', 1, 'REQUESTED', 'ADMIN'),
(24, 'VS', 'IT', '2022-04-22', '2022-04-28', 'AWOL', 4, 'REJECTED', 'ADMIN'),
(26, 'VS', 'IT', '2022-04-24', '2022-04-27', 'AWOL', 2, 'REQUESTED', 'ADMIN'),
(27, 'VS', 'IT', '2022-04-22', '2022-04-27', 'AWOL', 4, 'APPROVED', 'ADMIN'),
(28, 'VS', 'IT', '2022-04-23', '2022-04-27', 'AWOL', 3, 'REQUESTED', 'ADMIN'),
(29, 'VS', 'IT', '2022-04-22', '2022-04-28', 'AWOL', 5, 'REQUESTED', 'ADMIN'),
(30, 'chinuu', 'HR', '2022-04-23', '2022-04-26', 'AWOL', 1, 'REQUESTED', 'CHINU'),
(31, 'VS', 'IT', '2022-04-22', '2022-04-26', 'START OF A FRESH YEAR', 3, 'REQUESTED', 'VIS'),
(32, 'CHINU', 'IT', '2022-04-22', '2022-04-25', 'START OF A FRESH YEAR', 2, 'APPROVED', 'ADMIN'),
(33, 'chinuu', 'IT', '2022-04-22', '2022-04-25', 'START OF A FRESH YEAR', 1, 'APPROVED', 'CHINU');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(6) NOT NULL,
  `name` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `info` varchar(10000) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `name`, `title`, `info`, `type`) VALUES
(1, 0, 'CHECK', 'YOU HAVE TO CHECK ALL TYPES AT NIGHT 12.47 OR I SAY MORNING  ', 'success'),
(2, 0, 'CHECK2', 'YOU HAVE TO CHECK ALL TYPES AT NIGHT 1.38 OR I SAY MORNING  ', 'Warning'),
(3, 0, 'ADDDSSS', 'YOU HAVE TO CHECK ALL TYPES AT NIGHT 2.10 OR I SAY MORNING  ', 'info'),
(4, 0, 'CHECKING', 'IN OFFICE', 'Warning'),
(5, 0, 'MEATING IN 10 MIN', 'SHORT MEET WITH CLIENT', 'danger');

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `id` int(6) NOT NULL,
  `name` varchar(200) NOT NULL,
  `Em_id` int(10) NOT NULL,
  `role` varchar(200) NOT NULL,
  `OT_date` date NOT NULL,
  `OT_hours` int(5) NOT NULL,
  `OT_type` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`id`, `name`, `Em_id`, `role`, `OT_date`, `OT_hours`, `OT_type`, `description`) VALUES
(1, 'dikshu', 1004, 'IT', '2022-04-01', 3, 'normal', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `tasks_open` int(5) NOT NULL,
  `task_complete` int(5) NOT NULL,
  `descriptin` varchar(1000) NOT NULL,
  `deadline` date NOT NULL,
  `leader` varchar(100) NOT NULL,
  `member1` varchar(100) NOT NULL,
  `member2` varchar(100) NOT NULL,
  `member3` varchar(100) NOT NULL,
  `member4` varchar(100) NOT NULL,
  `member5` varchar(100) NOT NULL,
  `member6` varchar(100) NOT NULL,
  `member7` varchar(100) NOT NULL,
  `member8` varchar(100) NOT NULL,
  `member9` varchar(100) NOT NULL,
  `member10` varchar(100) NOT NULL,
  `progress` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `tasks_open`, `task_complete`, `descriptin`, `deadline`, `leader`, `member1`, `member2`, `member3`, `member4`, `member5`, `member6`, `member7`, `member8`, `member9`, `member10`, `progress`) VALUES
(1, 'hms', 0, 6, 'human resource management system is a software for type management of the people working and all', '0000-00-00', 'Madhurjya Bora', 'Dik Sharma', 'CHINUU', '', 'Dik Sharma', '', '', 'CHINU', 'Dikshu', '', '', '80%'),
(2, 'CMS', 10, 0, 'CMS is for the payment management of the employees and the working of a team and the overtime management ', '2022-04-30', 'MdJ bora', 'Dikshu', 'Dik ', 'VS', 'Chinu', '', '', '', '', '', '', '20%'),
(4, 'CMS', 10, 0, 'CMS is for the payment management of the employees and the working of a team and the overtime management ', '2022-04-30', 'MdJ bora', 'Dikshu', 'Dik ', '', 'Chinu', '', '', '', '', '', '', '20%'),
(5, 'app', 15, 1, 'an app for the webpage', '2022-08-16', 'Md', 'Dikshu', '', '', '', '', '', '', '', '', '', '10%');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Em_id` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `password`, `Em_id`, `email`, `Department`) VALUES
(1, 'dikshu', 'dik', 'dik123', 1203, 'dk@010.gmail.com', 'IT'),
(2, 'dikshu', 'dikshu', 'dik123', 0, 'dk@010.gmail.com', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `salay`
--

CREATE TABLE `salay` (
  `id` int(6) NOT NULL,
  `name` varchar(200) NOT NULL,
  `Em_id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `joining_date` date NOT NULL,
  `role` varchar(200) NOT NULL,
  `salary` int(10) NOT NULL,
  `action` varchar(100) NOT NULL,
  `month` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salay`
--

INSERT INTO `salay` (`id`, `name`, `Em_id`, `email`, `joining_date`, `role`, `salary`, `action`, `month`) VALUES
(1, 'raj', 1002, 'example@123.gmail.com', '2021-12-09', 'HR', 20000, '', '0000-00-00'),
(2, 'sikshu', 1004, 'example@321.com', '2022-04-01', 'Director', 80000, 'pending', '2022-04-01'),
(4, 'dikshu', 1341, 'dk@010.gmail.com', '2022-04-16', '', 10000, 'pending', '0000-00-00'),
(5, 'dikshu', 1021, 'dk@010.gmail.com', '2022-04-16', 'IT', 20000, 'pending', '2022-04-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salay`
--
ALTER TABLE `salay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salay`
--
ALTER TABLE `salay`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
