-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 09:33 PM
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
(3, 'john', 'john@gmail.com', '123456'),
(6, 'Fady Fawzy', 'fady.fawzy.10@gmail.com', ''),
(7, 'Fady Fawzy', 'fady.fawzy.10@gmail.com', '');

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
(1, 1, 'john', 'john@gmail.com', '789', '01235845551', 'hhhhhhhhhhhh', 'https://www.linkedin.com/feed/', 'hhhhhhhhhhhhh', 'hhhhhhhhhhhhh', 'male', 1),
(3, 4, 'johbishjn', 'bissho@gmail.com', '789', '01235845551', 'hhhhhhhhhhhh', 'https://www.linkedin.com/feed/', 'hhhhhhhhhhhhh', 'hhhhhhhhhhhhh', 'male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `consultation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `advisor_id` int(11) DEFAULT NULL,
  `session_field` int(11) NOT NULL,
  `preferred_date` date NOT NULL,
  `preferred_time` time NOT NULL,
  `screenshot` varchar(255) NOT NULL,
  `session_fees` int(11) NOT NULL DEFAULT 50,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`consultation_id`, `user_id`, `advisor_id`, `session_field`, `preferred_date`, `preferred_time`, `screenshot`, `session_fees`, `status`) VALUES
(2, 4, 1, 2, '2023-04-05', '05:08:00', 'assasa', 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `faculty_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `job_fields` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`faculty_id`, `name`, `major`, `description`, `job_fields`) VALUES
(1, 'Bis', '        IT\r\nbusiness', '  waiting', '   Software developer\r\nAnalyst'),
(2, 'commerce', '   Accounting\r\nPartnershsps', ' waiting', '    Marketeer  Analysis ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` int(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone_no`, `subject`, `message`) VALUES
(1, 'besho', 'besho@gmail.com', 0, 'face a problem in the website.', 'the website is very slow between pages.'),
(2, 'marinia', 'marinia@gmail.com', 0, 'i face the issue in register.', 'can you help me in this problem?\r\nand tell me how can i solve it?\r\n '),
(4, 'besho medhat', 'besho.medhat232@gmail.com', 7845854, 'hhhh', 'hhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(255) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `soft_skills` text NOT NULL,
  `technical_skills` text NOT NULL,
  `average_salary` int(255) NOT NULL,
  `courses` text NOT NULL,
  `respons` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `sub_id`, `title`, `description`, `soft_skills`, `technical_skills`, `average_salary`, `courses`, `respons`, `image`) VALUES
(1, 33, '           Brand manager          ', ' Brand Master Secrets (Editorâ€™s Choice)\r\nCORE\r\nActivate Your Strategic Brain\r\neResonaid\r\nStory Brand\r\nLEVEL C\r\nMark Pollardâ€™s Brand Strategy Class\r\nBranding Masterplan\r\nBrand Consulting Mastery\r\nBrand Strategy Fundamentals\r\n Brand Master Secrets (Editorâ€™s Choice)\r\nCORE\r\nActivate Your Strategic Brain\r\neResonaid\r\nStory Brand\r\nLEVEL C\r\nMark Pollardâ€™s Brand Strategy Class\r\nBranding Masterplan\r\nBrand Consulting Mastery\r\nBrand Strategy Fundamentals\r\n Brand Master Secrets (Editorâ€™s Choice)\r\nCORE\r\nActivate Your Strategic Brain\r\neResonaid\r\nStory Brand\r\nLEVEL C\r\nMark Pollardâ€™s Brand Strategy Class\r\nBranding Masterplan\r\nBrand Consulting Mastery\r\nBrand Strategy Fundamentals\r\nffffffffffffffffffffffffddffffffffffff\r\nfffffffffffffffffffffffffffffffff\r\nhhhhhhhhhhhhhhhhhhhh\r\nhhhhhhhhhhhhhhh\r\nhhhhhhhhhhh\r\nhhhhhhhhhhhhhhhhhhhh\r\n Brand Master Secrets (Editorâ€™s Choice)\r\nCORE\r\nActivate Your Strategic Brain\r\neResonaid\r\nStory Brand\r\nLEVEL C\r\nMark Pollardâ€™s Brand Strategy Class\r\nBranding Masterplan\r\nBrand Consulting Mastery\r\nBrand Strategy Fundamentals\r\n Brand Master Secrets (Editorâ€™s Choice)\r\nCORE\r\nActivate Your Strategic Brain\r\neResonaid\r\nStory Brand\r\nLEVEL C\r\nMark Pollardâ€™s Brand Strategy Class\r\nBranding Masterplan\r\nBrand Consulting Mastery\r\nBrand Strategy Fundamentals\r\n Brand Master Secrets (Editorâ€™s Choice)\r\nCORE\r\nActivate Your Strategic Brain\r\neResonaid\r\nStory Brand\r\nLEVEL C\r\nMark Pollardâ€™s Brand Strategy Class\r\nBranding Masterplan\r\nBrand Consulting Mastery\r\nBrand Strategy Fundamentals\r\nffffffffffffffffffffffffddffffffffffff\r\nfffffffffffffffffffffffffffffffff\r\nhhhhhhhhhhhhhhhhhhhh\r\nhhhhhhhhhhhhhhh\r\nhhhhhhhhhhh\r\nhhhhhhhhhhhhhhhhhhhh', 'waiting', 'waiting         ', 5000, '        Marketing courses in areas like content marketing. \r\nCourses in product management and other marketing-related areas.  \r\nBrand manager certifications like this Certified Brand Manager credential. \r\nMarketing certifications like this digital marketing tr\"\"\"\"\"\"', 'Analyze brand positioning and consumer insights\r\nShape and communicate our vision and mission\r\nTranslate brand elements into plans and go-to-market strategies\r\nManage a team of marketing people working on brand initiatives\r\nLead creative development to motivate the target audience to â€œtake actionâ€\r\nEstablish performance specifications, cost and price parameters, market applications and sales estimates\r\nMeasure and report performance of all marketing campaigns, and assess ROI and KPIs\r\nMonitor market trends, research consumer markets and competitorsâ€™ activities\r\nOversee new and ongoing marketing and advertising activities\r\nMonitor product distribution and consumer reactions\r\nDevise innovative growth strategies\r\nAlign the company around the brandâ€™s direction, choices and tactics', '');

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
  ADD PRIMARY KEY (`advisor_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`consultation_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `advisor_id` (`advisor_id`),
  ADD KEY `session_field` (`session_field`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`major_id`);

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
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `advisors`
--
ALTER TABLE `advisors`
  MODIFY `advisor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `consultation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `faculty_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `major_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sub_majors`
--
ALTER TABLE `sub_majors`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advisors`
--
ALTER TABLE `advisors`
  ADD CONSTRAINT `advisors_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `sub_majors` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `consultations`
--
ALTER TABLE `consultations`
  ADD CONSTRAINT `consultations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `consultations_ibfk_2` FOREIGN KEY (`advisor_id`) REFERENCES `advisors` (`advisor_id`),
  ADD CONSTRAINT `consultations_ibfk_3` FOREIGN KEY (`session_field`) REFERENCES `sub_majors` (`sub_id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `sub_majors` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
