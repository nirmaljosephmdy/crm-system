-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2026 at 07:18 PM
-- Server version: 8.0.30
-- PHP Version: 8.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `optimized_table`
--

CREATE TABLE `optimized_table` (
  `id` bigint UNSIGNED NOT NULL,
  `account_id` smallint UNSIGNED NOT NULL,
  `organisation_id` int UNSIGNED DEFAULT NULL,
  `team_id` int UNSIGNED DEFAULT NULL,
  `activity` varchar(70) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `postcode` varchar(6) DEFAULT NULL,
  `housenumber` varchar(5) DEFAULT NULL,
  `suffix` varchar(6) DEFAULT NULL,
  `streetname` varchar(80) DEFAULT NULL,
  `city` varchar(80) DEFAULT NULL,
  `country` varchar(2) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `business` enum('0','1') NOT NULL DEFAULT '0',
  `company_name` varchar(120) DEFAULT NULL,
  `contact_person` varchar(20) DEFAULT NULL,
  `data` text,
  `attachments` text,
  `history` text,
  `created_by` int UNSIGNED DEFAULT NULL,
  `created_ip` varchar(45) DEFAULT NULL,
  `planned_user_id` int UNSIGNED DEFAULT NULL,
  `planned_by` int UNSIGNED DEFAULT NULL,
  `planned_at` timestamp NULL DEFAULT NULL,
  `planned_from` timestamp NULL DEFAULT NULL,
  `planned_to` timestamp NULL DEFAULT NULL,
  `planned_duration` smallint DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `completed_team_id` int UNSIGNED DEFAULT NULL,
  `completed_by` int UNSIGNED DEFAULT NULL,
  `started_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `optimized_table`
--
ALTER TABLE `optimized_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_account_deleted` (`account_id`,`deleted_at`),
  ADD KEY `idx_account_id_desc` (`account_id`,`id` DESC),
  ADD KEY `idx_planned_user` (`planned_user_id`),
  ADD KEY `idx_organisation` (`organisation_id`),
  ADD KEY `idx_team` (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `optimized_table`
--
ALTER TABLE `optimized_table`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
