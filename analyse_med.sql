-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 11:12 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `analyse_med`
--

-- --------------------------------------------------------

--
-- Table structure for table `analyses`
--

CREATE TABLE `analyses` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `id_u` varchar(25) NOT NULL,
  `uree` varchar(25) NOT NULL,
  `glycemie` varchar(25) NOT NULL,
  `createnine` varchar(25) NOT NULL,
  `cholestirol` varchar(25) NOT NULL,
  `triglyceride` varchar(25) NOT NULL,
  `calcuim` varchar(25) NOT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `diag` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `analyses`
--

INSERT INTO `analyses` (`id`, `titre`, `id_u`, `uree`, `glycemie`, `createnine`, `cholestirol`, `triglyceride`, `calcuim`, `date_ajout`, `diag`) VALUES
(1, 'tttt', '3', '3', '12', '60', '4', '1.9', '2.0', '2019-06-21 22:10:08', 'asselama jitiededef'),
(4, 'iuoyiuyoi', '3', '8', '8', '8', '8', '8', '8', '2019-06-21 22:21:56', ''),
(3, 'aslema aslema', '7', '5', '5', '5', '5', '5', '5', '2019-06-21 22:12:09', ''),
(5, 'aslema222', '7', '3', '3', '4', '5', '6', '2.0', '2019-06-21 22:38:01', 'asqasas'),
(6, 'zzzzzzzzzzzz', '7', '1', '2', '2', '1', '2', '2', '2019-06-21 22:45:56', 'asselma jiti lalla el 3aroussa');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `np` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `np`, `type`, `login`, `pwd`, `tel`, `adresse`, `description`) VALUES
(1, 'admin', 1, 'admin@gmail.com', 'admin', '785765', 'Sidi Bouzid', 'ya3tik essa77a '),
(3, 'houcem omri', 4, 'houcem@gmail.com', 'houcem', '9999999', 'houcem adresse ', 'houcem pfe'),
(4, 'ali afi', 3, 'ali@gmail.com', 'ali', '111111', 'ali  bazda', 'ali ya mhabbalni'),
(7, 'aslema', 4, 'aslema@gmail.com', 'aslema', '986789', 'asasa', 'aslema');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analyses`
--
ALTER TABLE `analyses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analyses`
--
ALTER TABLE `analyses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
