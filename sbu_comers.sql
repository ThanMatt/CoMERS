-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 03:33 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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

CREATE TABLE `accounts` (
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
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(11) NOT NULL,
  `Student_ID` varchar(10) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Initial` varchar(20) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Section` varchar(10) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `System_ID` varchar(20) NOT NULL,
  `Title` varchar(70) NOT NULL,
  `Time_In` time NOT NULL,
  `Date_In` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('odpablvo8mfbasvmgd6gc46asle5cahs', '::1', 1551755938, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313735353735343b),
('rpugvmeuknj1bfjn83jq9vl204bbfe31', '::1', 1551756294, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313735363039393b6163636f756e745f69647c733a343a2242495453223b6f7267616e697a6174696f6e7c733a33363a22426564616e20496e666f726d6174696f6e20546563686e6f6c6f677920536f6369657479223b6c6f676765645f696e7c623a313b),
('pcre4otemu4h1ad81ktu34lnt67jdoif', '::1', 1551756272, 0x5f5f63695f6c6173745f726567656e65726174657c693a313535313735363236313b6163636f756e745f69647c733a353a225053534255223b6f7267616e697a6174696f6e7c733a34313a2250737963686f6c6f677920536f6369657479206f662053616e204265646120556e6976657273697479223b6c6f676765645f696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `registration_systems`
--

CREATE TABLE `registration_systems` (
  `System_ID` varchar(20) NOT NULL,
  `Register_Name` varchar(15) NOT NULL,
  `Account_ID` varchar(20) NOT NULL,
  `Title` text NOT NULL,
  `Logo` text NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_systems`
--

INSERT INTO `registration_systems` (`System_ID`, `Register_Name`, `Account_ID`, `Title`, `Logo`, `Status`) VALUES
('189291', 'Flap', 'PSSBU', 'General Assembly (Psych)', 'PSSBU_logo2.png', 0),
('224942', 'Dog', 'BITS', 'ShareIT', 'BITS_Logo2.png', 0),
('428051', 'Bamboo', 'BITS', 'hi', 'SBES_logo.jpg', 0),
('514129', 'Chipotle', 'HRDMS', 'Yoshi: The HUMAN ZONE', 'HRDMS1.png', 0),
('622509', 'Dog', 'PSSBU', 'Yoga', 'PSSBU_logo1.png', 0),
('719821', 'Bamboo', 'SBES', 'Economic Zones', 'SBU.png', 0),
('801339', 'Dog', 'JFINMA', 'Body Wars', 'SC_logo.png', 0),
('904611', 'Ellie', 'HRDMS', 'Human Resources Zone 101', 'HRDMS.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` varchar(10) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Initial` varchar(20) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Section` varchar(10) NOT NULL,
  `Course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `Last_Name`, `First_Name`, `Middle_Initial`, `Year`, `Section`, `Course`) VALUES
('C-123456', 'Pedro', 'Don Juan', 'B.', '2', 'APS', 'Psychology'),
('C-150623', 'Ilagan', 'Aethan Matthew', 'A', '4', 'AIT', 'Information Technology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration_systems`
--
ALTER TABLE `registration_systems`
  ADD PRIMARY KEY (`System_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
