-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2015 at 11:42 AM
-- Server version: 5.5.42-37.1
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wxy116zz_Jun`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `aa`
--
CREATE TABLE IF NOT EXISTS `aa` (
`id` int(11)
,`subject` varchar(100)
,`likes` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bb`
--
CREATE TABLE IF NOT EXISTS `bb` (
`id` int(11)
,`subject` varchar(100)
,`unlikes` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cc`
--
CREATE TABLE IF NOT EXISTS `cc` (
`id` int(11)
,`subject` varchar(100)
,`likes` bigint(21)
,`unlikes` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment1`
--

CREATE TABLE IF NOT EXISTS `comment1` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment1`
--

INSERT INTO `comment1` (`id`, `ip`, `time`, `info`, `reply`, `audit`) VALUES
(1, '155.246.201.', '1437150091', 'Machine Learning', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment10`
--

CREATE TABLE IF NOT EXISTS `comment10` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment11`
--

CREATE TABLE IF NOT EXISTS `comment11` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment12`
--

CREATE TABLE IF NOT EXISTS `comment12` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment13`
--

CREATE TABLE IF NOT EXISTS `comment13` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment14`
--

CREATE TABLE IF NOT EXISTS `comment14` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment2`
--

CREATE TABLE IF NOT EXISTS `comment2` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment2`
--

INSERT INTO `comment2` (`id`, `ip`, `time`, `info`, `reply`, `audit`) VALUES
(1, '155.246.201.', '1437151070', 'C++', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment3`
--

CREATE TABLE IF NOT EXISTS `comment3` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment4`
--

CREATE TABLE IF NOT EXISTS `comment4` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment5`
--

CREATE TABLE IF NOT EXISTS `comment5` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment6`
--

CREATE TABLE IF NOT EXISTS `comment6` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment7`
--

CREATE TABLE IF NOT EXISTS `comment7` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment8`
--

CREATE TABLE IF NOT EXISTS `comment8` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment9`
--

CREATE TABLE IF NOT EXISTS `comment9` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci,
  `reply` text COLLATE utf8_unicode_ci,
  `audit` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `ip`, `time`, `info`, `reply`, `audit`) VALUES
(1, '155.246.201.', '1437146524', 'jshanggu', 'stevens', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `ID` int(11) NOT NULL,
  `SUBJECT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DEPARTMENT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SLIDES` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BOOK` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LINK` text COLLATE utf8_unicode_ci NOT NULL,
  `AUTHOR` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SCHOOL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PROFESSOR` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `CREATED` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `SUBJECT`, `DEPARTMENT`, `SLIDES`, `BOOK`, `LINK`, `AUTHOR`, `SCHOOL`, `PROFESSOR`, `CREATED`) VALUES
(1, 'Machine Learing', 'CPE', 'uploads/Machine Learning.pdf', 'Machine Learning', 'http://www.amazon.com/Machine-Learning-Tom-M-Mitchell/dp/0070428077/ref=sr_1_fkmr0_1?ie=UTF8&amp;qid=1433185788&amp;sr=8-1-fkmr0&amp;keywords=T.+M.+Mitchell%2C+Machine+Learning%2C+McGraw+Hill%2C+1997.+ISBN%3A+978-0-07-042807-2', 'Tom M. Mitchell', 'Stevens Institute of Technology', 'Rong Duan', '0000-00-00 00:00:00'),
(2, 'C++', 'CS', 'uploads/c++Syllabus.pdf', 'Problem Solving with', 'http://www.amazon.com/Problem-Solving-8th-Walter-Savitch/dp/0132162733/ref=sr_1_1?ie=UTF8&amp;qid=1433186305&amp;sr=8-1&amp;keywords=0132162733', 'Walter Savitch', 'Stevens Institue of Technology', 'Daniel Katz', '0000-00-00 00:00:00'),
(3, 'Data modeling and analysis', 'EE', 'uploads/Data modeling and analysis.pdf', 'Data mining:The Textbook', 'http://www.amazon.com/Data-Mining-Textbook-Charu-Aggarwal/dp/3319141414/ref=sr_1_3?ie=UTF8&amp;qid=1433190535&amp;sr=8-3&amp;keywords=Data+mining', ' Foster Provost', 'Stevens Institue of Technology', 'Rensheng Wang', '0000-00-00 00:00:00'),
(4, 'Wireless System Security', '', NULL, 'Wireless Security: Models, Threats, and Solutions', 'http://www.amazon.com/Wireless-Security-Models-Threats-Solutions/dp/0071380388/ref=sr_1_1?ie=UTF8&amp;qid=1433188562&amp;sr=8-1&amp;keywords=wireless+security+models', 'Randall K.Nichols ', 'Stevens Institue of Technology', 'Bruce McNair', '0000-00-00 00:00:00'),
(5, 'Probability', 'EE', 'uploads/probability----Syllabus.doc', 'A First Course in Probability', 'http://www.amazon.com/First-Course-Probability-9th/dp/032179477X/ref=sr_1_1?ie=UTF8&amp;qid=1433186091&amp;sr=8-1&amp;keywords=A+First+Course+in+Probability++by+Sheldon+Ross', 'Sheldon Ross', 'Stevens Institue of Technology', 'Larry Russ', '0000-00-00 00:00:00'),
(6, 'Signal and System', 'EE', 'uploads/signal and system----syllabus.pdf', 'Signals and Systems', 'http://www.amazon.com/Signals-Systems-2nd-Alan-Oppenheim/dp/0138147574/ref=sr_1_1?ie=UTF8&amp;qid=1433185949&amp;sr=8-1&amp;keywords=A.V.+Oppenheim%2C+A.S.+Willsky%2C+%26+S.H.+Nawab%2C+Signals+and+Systems%2C+2nd+Ed.%2C+Prentice+Hall%2C+1997', 'A.V. Oppenheim', 'Stevens Institue of Technology', 'Negar Tavassolian', '0000-00-00 00:00:00'),
(7, 'VLSI', '', NULL, 'CMOS VLSI Design: A Circuits and Systems Perspective', 'http://www.amazon.com/CMOS-VLSI-Design-Circuits-Perspective/dp/0321547748/ref=sr_1_1?ie=UTF8&amp;qid=1432744780&amp;sr=8-1&amp;keywords=CMOS+VLSI+Design%3A+A+Circuits+and+Systems+Perspective', ' Neil Weste', 'Stevens Institue of Technology', 'Bryan Ackland', '0000-00-00 00:00:00'),
(8, 'Introduction to Microelectronics and Photonics', 'PEP', 'uploads/CourseSyllabusforMP507IntroductiontoMicroelectronicsandPhotonics.doc', 'Semiconductor Devices: Physics and Technology', 'http://www.amazon.com/Semiconductor-Devices-Technology-Simon-Sze/dp/0470537949/ref=sr_1_1?ie=UTF8&qid=1437404029&sr=8-1&keywords=Semiconductor+Devices%3A+Physics+and+Technology', 'Simon M. Sze,Ming-Kwei Lee', 'Stevens Institute of Technology', 'Robert Pastore', '2015-07-20 09:57:21'),
(9, 'Principles of Inorganic Materials Synthesis', 'MT', 'uploads/Principles of Inorganic Materials Synthesis.doc', 'Phase Transformations in Metals and Alloys', 'http://www.amazon.com/Transformations-Metals-Alloys-Revised-Reprint/dp/1420062107/ref=sr_1_1?ie=UTF8&qid=1437404679&sr=8-1&keywords=Phase+Transformations+in+Metals+and+Alloys', 'David A. Porter', 'Stevens Institute of Technology', 'Woo Lee', '2015-07-20 10:05:36'),
(10, 'Autonomous Mobile Robotic Systems', 'CPE', 'uploads/CpE521Fall2014.pdf', 'Introduction to Autonomous Mobile Robots', 'http://www.amazon.com/Introduction-Autonomous-Mobile-Intelligent-Robotics/dp/0262015358/ref=sr_1_1?ie=UTF8&qid=1437404856&sr=8-1&keywords=Introduction+to+Autonomous+Mobile+Robots', 'Roland Siegwart', 'Stevens Institute of Technology', 'Yi Guo', '2015-07-20 10:08:30'),
(11, 'Digital Signal Processing', 'EE', 'uploads/EE 548 Syllabus Sp 15.pdf', 'Digital Signal Processing: A Computer Based Approach', 'http://www.amazon.com/Digital-Signal-Processing-Computer-Approach/dp/0071289461/ref=sr_1_3?ie=UTF8&qid=1437405152&sr=8-3&keywords=DIGITAL+SIGNAL+PROCESSING+A+COMPUTER+BASED+APPROACH', 'Sanjit K. Mitra', 'Stevens Institute of Technology', 'DR JOHN SANTAPIETRO', '2015-07-20 10:13:07'),
(12, 'Cooperating Autonomous Mobile Robots', 'EE', 'uploads/EE631Spring2015.pdf', 'None', '', 'None', 'Stevens Institute of Technology', 'Yi Guo', '2015-07-20 10:14:47'),
(13, 'Problem Solving with C++', 'CS', 'uploads/C++Syllabus2.pdf', 'Problem Solving with C++', 'http://www.amazon.com/Problem-Solving-8th-Walter-Savitch/dp/0132162733/ref=sr_1_2?ie=UTF8&qid=1437405343&sr=8-2&keywords=Problem+Solving+with+C%2B%2B', 'Walter Savitch', 'Stevens Institute of Technology', 'David Pfeffer', '2015-07-20 10:18:36'),
(14, 'Introduction to Control Theory', 'EE', 'uploads/EE575_syllabus.doc', 'Feedback Control of Dynamic Systems', 'http://www.amazon.com/Feedback-Control-Dynamic-Systems-7th/dp/0133496597/ref=sr_1_1?ie=UTF8&qid=1437496637&sr=8-1&keywords=Feedback+Control+of+Dynamic+Systems&pebp=1437496709226&perid=185NQA59R9AS6CW5D9WP', 'Gene F. Franklin', 'Stevens Institute of Technology', 'Bahman KhosraviÂ ', '2015-07-21 11:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `info_like_unlike`
--

CREATE TABLE IF NOT EXISTS `info_like_unlike` (
  `id` int(11) NOT NULL,
  `userip` int(20) unsigned DEFAULT NULL,
  `xihuan` int(11) DEFAULT NULL,
  `buxihuan` int(11) DEFAULT NULL,
  `add_time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `info_like_unlike`
--

INSERT INTO `info_like_unlike` (`id`, `userip`, `xihuan`, `buxihuan`, `add_time`) VALUES
(10, 1123632459, 5, NULL, '2015-07-20 13:38:21'),
(9, 2616644154, 1, NULL, '2015-07-20 11:17:05'),
(8, 2616644154, NULL, 11, '2015-07-20 11:16:59'),
(7, 644093245, 2, NULL, '2015-07-19 10:12:46'),
(6, 1814256036, NULL, 1, '2015-07-19 09:24:08'),
(11, 644093262, NULL, 1, '2015-07-21 05:38:25'),
(12, 1123632451, 2, NULL, '2015-07-21 10:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `userip` int(20) unsigned DEFAULT NULL,
  `last_visit` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userip`, `last_visit`) VALUES
(1, 2616641828, '2015-07-17 16:34:50'),
(2, 1032306395, '2015-07-17 22:56:25'),
(3, 1123633998, '2015-07-18 00:51:36'),
(4, 1500117448, '2015-07-18 11:08:11'),
(5, 1123632491, '2015-07-18 21:10:07'),
(50, 1244978178, '2015-07-21 02:57:55'),
(7, 1053976995, '2015-07-19 05:35:56'),
(8, 2071807765, '2015-07-19 07:47:04'),
(55, 1814256036, '2015-07-21 08:59:18'),
(10, 644093245, '2015-07-19 10:12:46'),
(11, 2006160067, '2015-07-19 12:21:05'),
(22, 3024883616, '2015-07-19 15:50:11'),
(23, 2071807813, '2015-07-19 16:24:09'),
(26, 2071807818, '2015-07-20 00:22:36'),
(27, 1123634006, '2015-07-20 05:37:52'),
(32, 2616637509, '2015-07-20 10:01:32'),
(33, 2616642063, '2015-07-20 10:31:27'),
(46, 2616644154, '2015-07-20 11:17:25'),
(47, 3227740997, '2015-07-20 12:56:17'),
(48, 1123632459, '2015-07-20 13:38:21'),
(49, 2071807819, '2015-07-20 19:23:42'),
(51, 3024883597, '2015-07-21 04:22:39'),
(54, 644093262, '2015-07-21 05:38:25'),
(56, 3183130237, '2015-07-21 10:25:56'),
(57, 1123632451, '2015-07-21 10:44:33'),
(58, 2616642339, '2015-07-21 11:29:54'),
(63, 2616644879, '2015-07-21 11:35:13');

-- --------------------------------------------------------

--
-- Structure for view `aa`
--
DROP TABLE IF EXISTS `aa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`wxy116zz_jun`@`localhost` SQL SECURITY DEFINER VIEW `aa` AS select `info`.`ID` AS `id`,`info`.`SUBJECT` AS `subject`,count(`info_like_unlike`.`id`) AS `likes` from (`info` left join `info_like_unlike` on((`info`.`ID` = `info_like_unlike`.`xihuan`))) group by `info`.`ID`;

-- --------------------------------------------------------

--
-- Structure for view `bb`
--
DROP TABLE IF EXISTS `bb`;

CREATE ALGORITHM=UNDEFINED DEFINER=`wxy116zz_jun`@`localhost` SQL SECURITY DEFINER VIEW `bb` AS select `info`.`ID` AS `id`,`info`.`SUBJECT` AS `subject`,count(`info_like_unlike`.`id`) AS `unlikes` from (`info` left join `info_like_unlike` on((`info`.`ID` = `info_like_unlike`.`buxihuan`))) group by `info`.`ID`;

-- --------------------------------------------------------

--
-- Structure for view `cc`
--
DROP TABLE IF EXISTS `cc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`wxy116zz_jun`@`localhost` SQL SECURITY DEFINER VIEW `cc` AS select `aa`.`id` AS `id`,`aa`.`subject` AS `subject`,`aa`.`likes` AS `likes`,`bb`.`unlikes` AS `unlikes` from (`aa` join `bb`) where (`aa`.`id` = `bb`.`id`);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment1`
--
ALTER TABLE `comment1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment10`
--
ALTER TABLE `comment10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment11`
--
ALTER TABLE `comment11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment12`
--
ALTER TABLE `comment12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment13`
--
ALTER TABLE `comment13`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment14`
--
ALTER TABLE `comment14`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment2`
--
ALTER TABLE `comment2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment3`
--
ALTER TABLE `comment3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment4`
--
ALTER TABLE `comment4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment5`
--
ALTER TABLE `comment5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment6`
--
ALTER TABLE `comment6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment7`
--
ALTER TABLE `comment7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment8`
--
ALTER TABLE `comment8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment9`
--
ALTER TABLE `comment9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`), ADD KEY `ID` (`ID`), ADD KEY `ID_2` (`ID`);

--
-- Indexes for table `info_like_unlike`
--
ALTER TABLE `info_like_unlike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `userip` (`userip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment1`
--
ALTER TABLE `comment1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment10`
--
ALTER TABLE `comment10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment11`
--
ALTER TABLE `comment11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment12`
--
ALTER TABLE `comment12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment13`
--
ALTER TABLE `comment13`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment14`
--
ALTER TABLE `comment14`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment2`
--
ALTER TABLE `comment2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment3`
--
ALTER TABLE `comment3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment4`
--
ALTER TABLE `comment4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment5`
--
ALTER TABLE `comment5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment6`
--
ALTER TABLE `comment6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment7`
--
ALTER TABLE `comment7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment8`
--
ALTER TABLE `comment8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment9`
--
ALTER TABLE `comment9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `info_like_unlike`
--
ALTER TABLE `info_like_unlike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
