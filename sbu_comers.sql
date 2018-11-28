-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2018 at 02:48 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbu_comers`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `Account_ID` varchar(30) NOT NULL,
  `Pass` text NOT NULL,
  `Organization` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Account_ID`, `Pass`, `Organization`) VALUES
('BITS', '$2y$12$.Nvxa0xvWjqajbKiXbLYCut2wj7QIpI2IG87SXFfb6Fa90wtvOPH6', 'Bedan Information Technology Society'),
('HRDMS', '$2y$12$4N6X0.K1JAVGyWtVXHZUse.NvvhZD7IWIc7L1Zi.FH6TpB8pw3tjy', 'Human Resource Development Management Society'),
('JBLC', 'infotech', 'Junior Bedan Law Circle'),
('JFINMA', '$2y$12$m8jmHfsLScITt54BG5pWouIyJ1t8F1vSX1b1OP0C1FVzMbSHtkgPa', 'Junior Financial Management Association'),
('JPIA', '$2y$12$25ZnYEy.4cCI18nh9YAXk.5fXaYms6vgZuTPvOD8u/68RqjbibV7a', 'Junior Philippine Institute of Accountants'),
('KASB', '$2y$12$e9jXjcxa3vTvRSXHC7VaLu4TIicCndQzD13uQhekXQHu1.TOfGbie', 'Kapisanang Agham ng San Beda'),
('ManSoc', '$2y$12$Fw3UKBs3LdUCUG5012hBZesk6zKGzSCL414p0qqyUe2YQq/3ox.Ia', 'Management and Entrepreneurship Society'),
('PSSBU', '$2y$12$dXt6UMrAsbESX1hKBAoI5uNEx1VHP8FJLebSjkg8icaU9e.ZlWpkK', 'Psychology Society of San Beda University'),
('SBES', '$2y$12$hVWw/qHcQOQJvymezxNAj.AKIiZ4SQId3pZwhE1QiRpRIYbCwt0nK', 'San Beda Economics Society'),
('SBJMA', '$2y$12$S7FAyiUOkGHTjc5TgZq5T.tIYFK6avBHeZhLFSNzCW2MKRwtcZFwO', 'San Beda Junior Marketing Association'),
('SC', '$2y$12$Q5i25i7zpxND.k10BfIK9uUhgjq5EmBCWgiTzoK/a.Hu0usrBPUrC', 'Student Council'),
('SOMS', '$2y$12$KdMYQjXr.S8nHQhUZil2AuGyG.SlYdDey69oC6.t7lOoZcPlJhFLm', 'Society of Operations Management Students');

-- --------------------------------------------------------

--
-- Table structure for table `registration_systems`
--

CREATE TABLE IF NOT EXISTS `registration_systems` (
  `System_ID` varchar(20) NOT NULL,
  `Register_Name` varchar(15) NOT NULL,
  `Account_ID` varchar(20) NOT NULL,
  `Title` text NOT NULL,
  `Logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_systems`
--

INSERT INTO `registration_systems` (`System_ID`, `Register_Name`, `Account_ID`, `Title`, `Logo`) VALUES
('108843', 'Apricot', 'BITS', 'dasdas', '003.jpg'),
('703753', 'Apricot', 'BITS', 'adsda', '0031.jpg'),
('736657', 'Bamboo', 'BITS', 'Gratitude', 'SBRL_logo.jpg'),
('740090', 'Apricot', 'BITS', 'dasdadssda', 'Gwaping.jpg'),
('801339', 'Dog', 'JFINMA', 'Body Wars', 'SC_logo.png'),
('816006', 'Chipotle', 'BITS', 'General Assembly', 'PSSBU_logo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `registration_systems`
--
ALTER TABLE `registration_systems`
  ADD PRIMARY KEY (`System_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
