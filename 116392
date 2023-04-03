-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 06:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btech_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `risks`
--

CREATE TABLE `risks` (
  `risk_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `likelihood` float DEFAULT NULL,
  `impact` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `risks`
--

INSERT INTO `risks` (`risk_id`, `name`, `description`, `status`, `likelihood`, `impact`) VALUES
(1, 'Cybersecurity Breach', 'A data breach in the company’s cybersecurity systems', 'Open', 0.8, 0.9),
(2, 'Natural Disaster', 'A natural disaster such as a flood or earthquake', 'Open', 0.5, 0.8),
(3, 'Market Volatility', 'Changes in the market that could negatively affect the company’s stock prices', 'Open', 0.6, 0.7),
(4, 'Supply Chain Disruption', 'Delays or disruptions in the company’s supply chain', 'Open', 0.7, 0.6),
(5, 'Talent Retention', 'Difficulty in retaining top talent', 'Open', 0.4, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `risk_factors`
--

CREATE TABLE `risk_factors` (
  `riskfactor_id` varchar(11) NOT NULL,
  `risk_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `risk_factors`
--

INSERT INTO `risk_factors` (`riskfactor_id`, `risk_id`, `name`, `weight`, `value`) VALUES
('RF1', 1, 'Security Controls', 0.4, 0.9),
('RF10', 4, 'Supplier Risk', 0.4, 0.7),
('RF11', 4, 'Inventory Management', 0.3, 0.8),
('RF12', 4, 'Business Continuity Plan', 0.3, 0.9),
('RF13', 5, 'Employee Satisfaction', 0.5, 0.6),
('RF14', 5, 'Competition for Talent', 0.3, 0.5),
('RF15', 5, 'Industry Trends', 0.2, 0.7),
('RF2', 1, 'Data Encryption', 0.3, 0.8),
('RF3', 1, 'Employee Training', 0.3, 0.7),
('RF4', 2, 'Location of Offices', 0.4, 0.9),
('RF5', 2, 'Disaster Recovery Plan', 0.3, 0.8),
('RF6', 2, 'Insurance Coverage', 0.3, 0.7),
('RF7', 3, 'Product Diversification', 0.5, 0.8),
('RF8', 3, 'Financial Stability', 0.3, 0.7),
('RF9', 3, 'Market Analysis', 0.2, 0.6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `risks`
--
ALTER TABLE `risks`
  ADD PRIMARY KEY (`risk_id`);

--
-- Indexes for table `risk_factors`
--
ALTER TABLE `risk_factors`
  ADD PRIMARY KEY (`riskfactor_id`),
  ADD KEY `risk_id` (`risk_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `risk_factors`
--
ALTER TABLE `risk_factors`
  ADD CONSTRAINT `risk_factors_ibfk_1` FOREIGN KEY (`risk_id`) REFERENCES `risks` (`risk_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
