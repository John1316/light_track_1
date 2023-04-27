-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 01:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `light_track`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'besho', 'besho@gmail.com', '789456'),
(3, 'john', 'john@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `advisors`
--

CREATE TABLE `advisors` (
  `advisor_id` int(255) NOT NULL,
  `sub_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `linkidin_profile` varchar(255) NOT NULL,
  `work_experience` text NOT NULL,
  `availability` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advisors`
--

INSERT INTO `advisors` (`advisor_id`, `sub_id`, `name`, `email`, `password`, `phone_no`, `bio`, `linkidin_profile`, `work_experience`, `availability`, `gender`, `status`) VALUES
(1, 0, 'john', 'john@gmail.com', '789', '01235845551', 'hhhhhhhhhhhh', 'https://www.linkedin.com/feed/', 'hhhhhhhhhhhhh', 'hhhhhhhhhhhhh', 'male', 1),
(3, 0, 'johbishjn', 'bissho@gmail.com', '789', '01235845551', 'hhhhhhhhhhhh', 'https://www.linkedin.com/feed/', 'hhhhhhhhhhhhh', 'hhhhhhhhhhhhh', 'male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `session_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `session_field` varchar(255) NOT NULL,
  `preferred_date` date NOT NULL,
  `preferred_time` time NOT NULL,
  `screenshot` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `advisor_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `faculty_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `job_fields` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`faculty_id`, `name`, `description`, `job_fields`) VALUES
(1, 'bis', 'mix of it & bussines', 'Network Engineer'),
(2, 'commerce', 'deal with market ', 'Marketeer  Analysis ');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(255) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `soft_skills` varchar(255) NOT NULL,
  `technical_skills` varchar(255) NOT NULL,
  `average_salary` int(255) NOT NULL,
  `courses` varchar(255) NOT NULL,
  `respons` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `sub_id`, `title`, `description`, `soft_skills`, `technical_skills`, `average_salary`, `courses`, `respons`, `photo`) VALUES
(1, 33, '     Brand manager    ', ' waiting', 'waiting', 'waiting   ', 40, '  Marketing courses in areas like content marketing. \r\nCourses in product management and other marketing-related areas.  \r\nBrand manager certifications like this Certified Brand Manager credential. \r\nMarketing certifications like this digital marketing tr', 'â€¢	Analyze brand positioning and consumer insights\r\nâ€¢	Shape and communicate our vision and mission\r\nâ€¢	Translate brand elements into plans and go-to-market strategies\r\nâ€¢	Manage a team of marketing people working on brand initiatives\r\nâ€¢	Lead creative development to motivate the target audience to â€œtake actionâ€\r\nâ€¢	Establish performance specifications, cost and price parameters, market applications and sales estimates\r\nâ€¢	Measure and report performance of all marketing campaigns, and assess ROI and KPIs\r\nâ€¢	Monitor market trends, research consumer markets and competitorsâ€™ activities\r\nâ€¢	Oversee new and ongoing marketing and advertising activities\r\nâ€¢	Monitor product distribution and consumer reactions\r\nâ€¢	Devise innovative growth strategies\r\nâ€¢	Align the company around the brandâ€™s direction, choices and tactics', '');

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `major_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`major_id`, `title`) VALUES
(1, 'IT'),
(3, 'Buisness'),
(14, 'Medicine'),
(15, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `advisor_id` int(11) NOT NULL,
  `consultation_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_majors`
--

CREATE TABLE `sub_majors` (
  `sub_id` int(11) NOT NULL,
  `major_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_majors`
--

INSERT INTO `sub_majors` (`sub_id`, `major_id`, `title`) VALUES
(1, 1, 'Network'),
(2, 3, 'finance'),
(4, 1, 'web develpment'),
(7, 0, 'full stuck'),
(31, 14, '  physical therapy'),
(33, 15, 'Brand Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(191) NOT NULL,
  `statues` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `phone_no`, `password`, `confirm_password`, `address`, `birthdate`, `gender`, `statues`) VALUES
(4, 'feloooo', 'maged', 'felo@gmail.com', 58242555, '456', '456', 'shobraaa', '1899-12-31', 'male', 'college student'),
(5, 'marianne', 'narouz', 'fayroz@gmail.com', 2147483647, '785', '785', 'ramses', '1899-12-31', 'female', 'college student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `advisors`
--
ALTER TABLE `advisors`
  ADD PRIMARY KEY (`advisor_id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`major_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `sub_majors`
--
ALTER TABLE `sub_majors`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `advisors`
--
ALTER TABLE `advisors`
  MODIFY `advisor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `session_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `faculty_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `major_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_majors`
--
ALTER TABLE `sub_majors`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
