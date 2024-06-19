-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 05:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evalify`
--

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

CREATE TABLE `contestants` (
  `contestant_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `subevent_id` int(11) NOT NULL,
  `contestant_ctr` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `txt_code` varchar(255) NOT NULL,
  `rand_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`contestant_id`, `fullname`, `subevent_id`, `contestant_ctr`, `status`, `txt_code`, `rand_code`) VALUES
(1, 'constestant No. 1', 1, 1, 'finish', '', 520058),
(2, 'Contestant No. 2', 1, 2, 'finish', '', 514799),
(3, 'Contestant No. 3', 1, 3, 'finish', '', 2245823);

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `criteria_id` int(11) NOT NULL,
  `subevent_id` int(11) NOT NULL,
  `criteria` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL,
  `criteria_ctr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`criteria_id`, `subevent_id`, `criteria`, `percentage`, `criteria_ctr`) VALUES
(1, 1, 'c1', 20, 1),
(2, 1, 'c2', 20, 2),
(3, 1, 'c3', 20, 3),
(4, 1, 'c4', 20, 4),
(5, 1, 'c5', 20, 5);

-- --------------------------------------------------------

--
-- Table structure for table `judges`
--

CREATE TABLE `judges` (
  `judge_id` int(11) NOT NULL,
  `subevent_id` int(11) NOT NULL,
  `judge_ctr` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `code` varchar(6) NOT NULL,
  `jtype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `judges`
--

INSERT INTO `judges` (`judge_id`, `subevent_id`, `judge_ctr`, `fullname`, `code`, `jtype`) VALUES
(1, 1, 1, 'jude 1', 'd3hgg3', ''),
(2, 1, 2, 'judge 2', 'f05puk', ''),
(3, 1, 3, 'judge 3', 'dgyru5', '');

-- --------------------------------------------------------

--
-- Table structure for table `main_event`
--

CREATE TABLE `main_event` (
  `mainevent_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `organizer_id` int(11) NOT NULL,
  `sy` varchar(9) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `main_event`
--

INSERT INTO `main_event` (`mainevent_id`, `event_name`, `status`, `organizer_id`, `sy`, `date_start`, `date_end`, `place`) VALUES
(1, 'Aljayve', 'activated', 1, '2024', '2024-05-21', '2024-05-22', 'Balagtas, Bulacan'),
(2, 'Test 101', 'activated', 1, '2023', '2024-06-03', '2024-06-04', 'fgdcjhgdfhgfhg');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `organizer_id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `access` varchar(25) NOT NULL,
  `org_id` varchar(12) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`organizer_id`, `firstname`, `lastname`, `username`, `password`, `access`, `org_id`, `status`) VALUES
(1, 'Aljayve', 'Capara', 'admin', '1234', 'Organizer', '', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `rank_system`
--

CREATE TABLE `rank_system` (
  `rs_id` int(11) NOT NULL,
  `subevent_id` int(11) NOT NULL,
  `contestant_id` int(11) NOT NULL,
  `total_rank` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rank_system`
--

INSERT INTO `rank_system` (`rs_id`, `subevent_id`, `contestant_id`, `total_rank`) VALUES
(1, 1, 1, 5.0),
(2, 1, 2, 2.0),
(3, 1, 3, 1.0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_event`
--

CREATE TABLE `sub_event` (
  `subevent_id` int(11) NOT NULL,
  `mainevent_id` int(11) NOT NULL,
  `organizer_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `eventdate` date NOT NULL,
  `eventtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_event`
--

INSERT INTO `sub_event` (`subevent_id`, `mainevent_id`, `organizer_id`, `event_name`, `status`, `eventdate`, `eventtime`) VALUES
(1, 1, 1, 'Aljayve', 'activated', '2024-05-21', '10:30:00'),
(2, 2, 1, 'Aljayve', 'activated', '2024-06-03', '10:30:00'),
(4, 1, 1, 'dancing', 'activated', '2024-06-19', '08:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_results`
--

CREATE TABLE `sub_results` (
  `subresult_id` int(11) NOT NULL,
  `subevent_id` int(11) NOT NULL,
  `mainevent_id` int(11) NOT NULL,
  `contestant_id` int(11) NOT NULL,
  `judge_id` int(11) NOT NULL,
  `total_score` decimal(11,1) NOT NULL,
  `deduction` decimal(11,1) NOT NULL,
  `criteria_ctr1` decimal(11,1) NOT NULL,
  `criteria_ctr2` decimal(11,1) NOT NULL,
  `criteria_ctr3` decimal(11,1) NOT NULL,
  `criteria_ctr4` decimal(11,1) NOT NULL,
  `criteria_ctr5` decimal(11,1) NOT NULL,
  `criteria_ctr6` decimal(11,1) NOT NULL,
  `criteria_ctr7` decimal(11,1) NOT NULL,
  `criteria_ctr8` decimal(11,1) NOT NULL,
  `criteria_ctr9` decimal(11,1) NOT NULL,
  `criteria_ctr10` decimal(11,1) NOT NULL,
  `comments` text NOT NULL,
  `rank` varchar(11) NOT NULL,
  `judge_rank_stat` varchar(15) NOT NULL,
  `place_title` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_results`
--

INSERT INTO `sub_results` (`subresult_id`, `subevent_id`, `mainevent_id`, `contestant_id`, `judge_id`, `total_score`, `deduction`, `criteria_ctr1`, `criteria_ctr2`, `criteria_ctr3`, `criteria_ctr4`, `criteria_ctr5`, `criteria_ctr6`, `criteria_ctr7`, `criteria_ctr8`, `criteria_ctr9`, `criteria_ctr10`, `comments`, `rank`, `judge_rank_stat`, `place_title`) VALUES
(1, 1, 1, 1, 1, 38.0, 0.0, 15.0, 5.5, 4.0, 8.0, 5.5, 0.0, 0.0, 0.0, 0.0, 0.0, 'ito ay testing lang ', '3', '', '3rd'),
(2, 1, 1, 2, 1, 60.0, 0.0, 6.0, 9.0, 9.0, 18.5, 17.5, 0.0, 0.0, 0.0, 0.0, 0.0, 'ito ay testing lang', '2', '', '2nd'),
(3, 1, 1, 3, 1, 77.5, 0.0, 16.5, 9.0, 18.0, 17.0, 17.0, 0.0, 0.0, 0.0, 0.0, 0.0, 'ito ay testing lang\r\n', '1', '', '1st'),
(4, 1, 1, 1, 2, 57.0, 0.0, 4.5, 8.0, 12.0, 16.5, 16.0, 0.0, 0.0, 0.0, 0.0, 0.0, 'asnfdjnashdklasjdasd', '1', '', '3rd'),
(5, 1, 1, 1, 3, 56.5, 0.0, 11.0, 7.0, 16.5, 7.0, 15.0, 0.0, 0.0, 0.0, 0.0, 0.0, 'testing', '1', '', '3rd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`contestant_id`),
  ADD KEY `subevent_id` (`subevent_id`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`criteria_id`),
  ADD KEY `subevent_id` (`subevent_id`);

--
-- Indexes for table `judges`
--
ALTER TABLE `judges`
  ADD PRIMARY KEY (`judge_id`),
  ADD KEY `subevent_id` (`subevent_id`);

--
-- Indexes for table `main_event`
--
ALTER TABLE `main_event`
  ADD PRIMARY KEY (`mainevent_id`),
  ADD KEY `organizer_id` (`organizer_id`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`organizer_id`);

--
-- Indexes for table `rank_system`
--
ALTER TABLE `rank_system`
  ADD PRIMARY KEY (`rs_id`),
  ADD KEY `subevent_id` (`subevent_id`),
  ADD KEY `contestant_id` (`contestant_id`);

--
-- Indexes for table `sub_event`
--
ALTER TABLE `sub_event`
  ADD PRIMARY KEY (`subevent_id`),
  ADD KEY `mainevent_id` (`mainevent_id`),
  ADD KEY `organizer_id` (`organizer_id`);

--
-- Indexes for table `sub_results`
--
ALTER TABLE `sub_results`
  ADD PRIMARY KEY (`subresult_id`),
  ADD KEY `subevent_id` (`subevent_id`),
  ADD KEY `mainevent_id` (`mainevent_id`),
  ADD KEY `contestant_id` (`contestant_id`),
  ADD KEY `judge_id` (`judge_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contestants`
--
ALTER TABLE `contestants`
  MODIFY `contestant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `criteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `judges`
--
ALTER TABLE `judges`
  MODIFY `judge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `main_event`
--
ALTER TABLE `main_event`
  MODIFY `mainevent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `organizer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rank_system`
--
ALTER TABLE `rank_system`
  MODIFY `rs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_event`
--
ALTER TABLE `sub_event`
  MODIFY `subevent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_results`
--
ALTER TABLE `sub_results`
  MODIFY `subresult_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contestants`
--
ALTER TABLE `contestants`
  ADD CONSTRAINT `contestants_ibfk_1` FOREIGN KEY (`subevent_id`) REFERENCES `sub_event` (`subevent_id`) ON DELETE CASCADE;

--
-- Constraints for table `criteria`
--
ALTER TABLE `criteria`
  ADD CONSTRAINT `criteria_ibfk_1` FOREIGN KEY (`subevent_id`) REFERENCES `sub_event` (`subevent_id`) ON DELETE CASCADE;

--
-- Constraints for table `judges`
--
ALTER TABLE `judges`
  ADD CONSTRAINT `judges_ibfk_1` FOREIGN KEY (`subevent_id`) REFERENCES `sub_event` (`subevent_id`) ON DELETE CASCADE;

--
-- Constraints for table `main_event`
--
ALTER TABLE `main_event`
  ADD CONSTRAINT `main_event_ibfk_1` FOREIGN KEY (`organizer_id`) REFERENCES `organizer` (`organizer_id`) ON DELETE CASCADE;

--
-- Constraints for table `rank_system`
--
ALTER TABLE `rank_system`
  ADD CONSTRAINT `rank_system_ibfk_1` FOREIGN KEY (`subevent_id`) REFERENCES `sub_event` (`subevent_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rank_system_ibfk_2` FOREIGN KEY (`contestant_id`) REFERENCES `contestants` (`contestant_id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_event`
--
ALTER TABLE `sub_event`
  ADD CONSTRAINT `sub_event_ibfk_1` FOREIGN KEY (`mainevent_id`) REFERENCES `main_event` (`mainevent_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_event_ibfk_2` FOREIGN KEY (`organizer_id`) REFERENCES `organizer` (`organizer_id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_results`
--
ALTER TABLE `sub_results`
  ADD CONSTRAINT `sub_results_ibfk_1` FOREIGN KEY (`subevent_id`) REFERENCES `sub_event` (`subevent_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_results_ibfk_2` FOREIGN KEY (`mainevent_id`) REFERENCES `main_event` (`mainevent_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_results_ibfk_3` FOREIGN KEY (`contestant_id`) REFERENCES `contestants` (`contestant_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_results_ibfk_4` FOREIGN KEY (`judge_id`) REFERENCES `judges` (`judge_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
