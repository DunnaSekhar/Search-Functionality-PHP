-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2023 at 07:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fanworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `Employee_Document` varchar(255) NOT NULL,
  `Employee_Name` varchar(255) NOT NULL,
  `Actual_Birthday` varchar(255) NOT NULL,
  `Age_Range` varchar(255) NOT NULL,
  `Blood_Group` varchar(255) NOT NULL,
  `Date_Of_Birth` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Emergency_Contact_Name` varchar(255) NOT NULL,
  `Emergency_Contact_Number` varchar(255) NOT NULL,
  `Employee_Age` varchar(255) NOT NULL,
  `Employee_Number` varchar(255) NOT NULL,
  `Employee_Personal_Email` varchar(255) NOT NULL,
  `Employee_Relation` varchar(255) NOT NULL,
  `Has_Left_The_Organization` varchar(255) NOT NULL,
  `Fathers_Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Has_ESS_Login` varchar(255) NOT NULL,
  `Is_ESI_Eligible` varchar(255) NOT NULL,
  `Is_PF_Eligible` varchar(255) NOT NULL,
  `Is_LWF_Eligible` varchar(255) NOT NULL,
  `Is_Physically_Challenged` varchar(255) NOT NULL,
  `Joined_On` varchar(255) NOT NULL,
  `Manager_Email_Id` varchar(255) NOT NULL,
  `Manager_Employee_Name` varchar(255) NOT NULL,
  `Manager_Employee_No` varchar(255) NOT NULL,
  `Managers_Manager_Name` varchar(255) NOT NULL,
  `Marital_Status` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `PAN_Number` varchar(255) NOT NULL,
  `PF_Number` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Reporting_To` varchar(255) NOT NULL,
  `UAN` varchar(255) NOT NULL,
  `Years_In_Service` varchar(255) NOT NULL,
  `Years_In_Service_Range` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
