-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 05:12 PM
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
-- Database: `omrdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`Id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_details`
--

CREATE TABLE `buyer_details` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyer_details`
--

INSERT INTO `buyer_details` (`Id`, `Name`, `Username`, `Password`, `Address`, `Contact`) VALUES
(1, 'Solomon', 'solo', '123', '14/961,Kamaraj Nagar', '6382826910'),
(2, 'Rajadurai', 'raju', '987', '22/madurai', '6549873215');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`Id`, `Name`, `Email`, `Message`) VALUES
(1, 'Solomon raja', 'solomonr117@gmail.com', 'Hi admin, I would like to meet you '),
(2, 'Regson', 'rex@gmail.com', 'Change your UI ');

-- --------------------------------------------------------

--
-- Table structure for table `david_table`
--

CREATE TABLE `david_table` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Pic` varchar(255) DEFAULT NULL,
  `Seller_name` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `david_table`
--

INSERT INTO `david_table` (`Id`, `Name`, `Price`, `Type`, `Pic`, `Seller_name`, `Quantity`) VALUES
(1, 'Piano', '50000', 'wind', '64062b6dece3d7.25991373.jpg', 'stains', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inst_details`
--

CREATE TABLE `inst_details` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Pic` varchar(50) NOT NULL,
  `Seller_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inst_details`
--

INSERT INTO `inst_details` (`Id`, `Name`, `Price`, `Type`, `Pic`, `Seller_name`) VALUES
(6, 'Guitar', 5500, 'string', '64062b50bf3551.16827666.jpg', 'stains'),
(7, 'Piano', 50000, 'wind', '64062b6dece3d7.25991373.jpg', 'stains'),
(8, 'Pick ', 250, 'string', '64062b9aa69ea4.21767643.jpg', 'raju'),
(9, 'Strings', 25, 'string', '64062bb5f05b59.42238177.jpg', 'raju'),
(10, 'Xylophone', 3500, 'wind', '64062bf2cc9809.48995835.jpg', 'jack'),
(11, 'Drums ', 60000, 'wind', '64062c02f3c4a7.37747521.jpg', 'jack'),
(12, 'Condenser', 12000, 'electric', '64076068cee878.71361931.jpg', 'rex');

-- --------------------------------------------------------

--
-- Table structure for table `rajadurai_table`
--

CREATE TABLE `rajadurai_table` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Pic` varchar(255) DEFAULT NULL,
  `Seller_name` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rajadurai_table`
--

INSERT INTO `rajadurai_table` (`Id`, `Name`, `Price`, `Type`, `Pic`, `Seller_name`, `Quantity`) VALUES
(1, 'Condenser', '12000', 'electric', '64076068cee878.71361931.jpg', 'rex', 1),
(2, 'Strings', '25', 'string', '64062bb5f05b59.42238177.jpg', 'raju', 3),
(3, 'Pick ', '250', 'string', '64062b9aa69ea4.21767643.jpg', 'raju', 1),
(4, 'Xylophone', '3500', 'wind', '64062bf2cc9809.48995835.jpg', 'jack', 2);

-- --------------------------------------------------------

--
-- Table structure for table `seller_details`
--

CREATE TABLE `seller_details` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller_details`
--

INSERT INTO `seller_details` (`Id`, `Name`, `Username`, `Password`, `Contact`) VALUES
(1, 'Solomon', 'solo', '123', '6382826910'),
(6, 'Stains', 'stains', '1234', '9876543215'),
(7, 'Rajadurai', 'raju', '789', '9876543215'),
(8, 'Jackulin', 'jack', '123456', '6549873215');

-- --------------------------------------------------------

--
-- Table structure for table `solomon_table`
--

CREATE TABLE `solomon_table` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Price` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Pic` varchar(255) DEFAULT NULL,
  `Seller_name` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `buyer_details`
--
ALTER TABLE `buyer_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `david_table`
--
ALTER TABLE `david_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `inst_details`
--
ALTER TABLE `inst_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rajadurai_table`
--
ALTER TABLE `rajadurai_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `seller_details`
--
ALTER TABLE `seller_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `solomon_table`
--
ALTER TABLE `solomon_table`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyer_details`
--
ALTER TABLE `buyer_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `david_table`
--
ALTER TABLE `david_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inst_details`
--
ALTER TABLE `inst_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rajadurai_table`
--
ALTER TABLE `rajadurai_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seller_details`
--
ALTER TABLE `seller_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `solomon_table`
--
ALTER TABLE `solomon_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
