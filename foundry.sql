-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 09:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_master`
--

CREATE TABLE `department_master` (
  `sno` int(11) NOT NULL,
  `dept_name` varchar(64) NOT NULL,
  `short_name` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_master`
--

INSERT INTO `department_master` (`sno`, `dept_name`, `short_name`, `status`) VALUES
(1, 'Quality Inspection', 'QI', 1),
(2, 'Melting', 'MEL', 1),
(3, 'Sand Testing Lab', 'STL', 1),
(4, 'Core Shop', 'CS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `melting_details_master`
--

CREATE TABLE `melting_details_master` (
  `sno` int(11) NOT NULL,
  `heat_no` varchar(64) NOT NULL,
  `type_of_melting` int(11) NOT NULL,
  `rr` int(11) NOT NULL,
  `pigiran` int(11) NOT NULL,
  `crc_scrap` int(11) NOT NULL,
  `rejected_castings` int(11) NOT NULL,
  `ferrosilicon` int(11) NOT NULL,
  `tap_temp` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `melting_details_master`
--

INSERT INTO `melting_details_master` (`sno`, `heat_no`, `type_of_melting`, `rr`, `pigiran`, `crc_scrap`, `rejected_castings`, `ferrosilicon`, `tap_temp`, `created_at`, `updated_at`, `status`) VALUES
(1, 'srty454', 1, 564, 45, 43, 56, 76, 6534, '2023-01-14 12:14:46', '0000-00-00 00:00:00', 1),
(2, 'srty454', 1, 564, 45, 43, 56, 76, 6534, '2023-01-14 12:14:46', '0000-00-00 00:00:00', 1),
(3, '654fhjyf', 1, 54, 65, 45, 34, 76, 653, '2023-01-14 12:17:54', '0000-00-00 00:00:00', 1),
(4, '654fhjyf', 1, 54, 65, 45, 34, 76, 653, '2023-01-14 12:17:54', '0000-00-00 00:00:00', 1),
(5, '32456', 1, 45, 34, 87, 56, 49, 65423, '2023-01-14 12:24:48', '0000-00-00 00:00:00', 1),
(6, '32456', 1, 45, 34, 87, 56, 49, 65423, '2023-01-14 12:24:48', '0000-00-00 00:00:00', 1),
(7, '3q45', 1, 765, 345, 34, 546, 43, 543, '2023-01-14 12:26:02', '0000-00-00 00:00:00', 1),
(8, '3q45', 1, 765, 345, 34, 546, 43, 543, '2023-01-14 12:26:02', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meta_core_type`
--

CREATE TABLE `meta_core_type` (
  `sno` int(11) NOT NULL,
  `core_type` varchar(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meta_core_type`
--

INSERT INTO `meta_core_type` (`sno`, `core_type`, `status`) VALUES
(1, 'Cold Box', 1),
(2, 'No bake', 1),
(3, 'CO2 Core', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meta_defect_type`
--

CREATE TABLE `meta_defect_type` (
  `sno` int(11) NOT NULL,
  `defect_type` int(11) NOT NULL,
  `defect_name` varchar(24) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meta_defect_type`
--

INSERT INTO `meta_defect_type` (`sno`, `defect_type`, `defect_name`, `status`) VALUES
(1, 1, 'Flash', 1),
(2, 1, 'Mismatch', 1),
(3, 1, 'Core Shift', 1),
(4, 1, 'Distortion', 1),
(5, 2, 'Blow Hole', 1),
(6, 2, 'Cold Shut', 1),
(7, 2, 'Gas Porosity', 1),
(8, 2, 'Inclusions', 1),
(9, 3, 'Shrinkage', 1),
(10, 3, 'Sink Mark', 1),
(11, 3, 'Hot Tear', 1),
(12, 3, 'Fettling', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quality_inspection_master`
--

CREATE TABLE `quality_inspection_master` (
  `sno` int(11) NOT NULL,
  `product_id` varchar(128) NOT NULL,
  `casting_weight` int(11) NOT NULL,
  `defects` varchar(32) NOT NULL,
  `location` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quality_inspection_master`
--

INSERT INTO `quality_inspection_master` (`sno`, `product_id`, `casting_weight`, `defects`, `location`, `created_at`, `updated_at`, `status`) VALUES
(1, '12jhgvf122', 50, '1-2', 'public_html/Laballocator/ajax', '2023-01-13 04:36:57', '0000-00-00 00:00:00', 1),
(2, 'bnh20230115', 50, '1-2', 'road way', '2023-01-13 04:49:10', '0000-00-00 00:00:00', 1),
(3, 'bnh20230115', 50, '1-2', 'road way', '2023-01-13 04:49:46', '0000-00-00 00:00:00', 1),
(4, '12jhgvf122', 50, '2-3', 'public_html/Laballocator/ajax', '2023-01-13 04:55:58', '0000-00-00 00:00:00', 1),
(5, '12jhgvf122', 100, '2-3', 'casting', '2023-01-13 04:56:53', '0000-00-00 00:00:00', 1),
(6, '210389bnvrd', 65, '2', 'casting', '2023-01-13 04:58:00', '0000-00-00 00:00:00', 1),
(7, 'sgbvf456', 100, '1-2', 'melting', '2023-01-13 04:58:54', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `sno` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`sno`, `user_type`, `name`, `username`, `password`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'Manager', 'manager@foundry.in', '48f1f1916f0417eab7c6de18260f8a1b', '2023-01-03 16:26:22', '2023-01-03 16:26:22', 1),
(2, 2, 'supervisor', 'supervisor@foundry.in', '48f1f1916f0417eab7c6de18260f8a1b', '2023-01-03 16:26:22', '2023-01-03 16:26:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `sno` int(11) NOT NULL,
  `u_type` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`sno`, `u_type`, `status`) VALUES
(1, 'Super Admin', 1),
(2, 'Admin', 1),
(3, 'Manager', 1),
(4, 'Supervisor', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_master`
--
ALTER TABLE `department_master`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `melting_details_master`
--
ALTER TABLE `melting_details_master`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `meta_core_type`
--
ALTER TABLE `meta_core_type`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `meta_defect_type`
--
ALTER TABLE `meta_defect_type`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `quality_inspection_master`
--
ALTER TABLE `quality_inspection_master`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_master`
--
ALTER TABLE `department_master`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `melting_details_master`
--
ALTER TABLE `melting_details_master`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `meta_core_type`
--
ALTER TABLE `meta_core_type`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meta_defect_type`
--
ALTER TABLE `meta_defect_type`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quality_inspection_master`
--
ALTER TABLE `quality_inspection_master`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
