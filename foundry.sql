-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 11:04 AM
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
-- Table structure for table `core_shop_details`
--

CREATE TABLE `core_shop_details` (
  `sno` int(11) NOT NULL,
  `core_type` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `core_weight` int(11) NOT NULL,
  `no_of_core_produced` int(11) NOT NULL,
  `no_of_defect_cores` int(11) NOT NULL,
  `Date` date NOT NULL,
  `shift` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `core_shop_details`
--

INSERT INTO `core_shop_details` (`sno`, `core_type`, `product_name`, `core_weight`, `no_of_core_produced`, `no_of_defect_cores`, `Date`, `shift`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'Key component', 452, 500, 20, '2023-06-08', 2, '2023-06-02 11:11:30', '0000-00-00 00:00:00', 1),
(2, 1, 'bridge tame', 452, 500, 20, '2023-06-14', 1, '2023-06-02 11:12:36', '0000-00-00 00:00:00', 1);

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
(8, '3q45', 1, 765, 345, 34, 546, 43, 543, '2023-01-14 12:26:02', '0000-00-00 00:00:00', 1),
(9, 'sdfth546', 2, 45, 54, 56, 23, 43, 4545, '2023-01-16 04:33:25', '0000-00-00 00:00:00', 1),
(10, 'drtyj', 2, 45, 456, 6, 65, 5, 67, '2023-01-16 04:34:17', '0000-00-00 00:00:00', 1);

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
  `defects` int(11) NOT NULL,
  `location` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quality_inspection_master`
--

INSERT INTO `quality_inspection_master` (`sno`, `product_id`, `casting_weight`, `defects`, `location`, `created_at`, `updated_at`, `status`) VALUES
(1, '12jhgvf122', 50, 1, 'public_html/Laballocator/ajax', '2023-01-13 04:36:57', '0000-00-00 00:00:00', 1),
(2, 'bnh20230115', 50, 1, 'road way', '2023-01-13 04:49:10', '0000-00-00 00:00:00', 1),
(3, 'bnh20230115', 50, 1, 'road way', '2023-01-13 04:49:46', '0000-00-00 00:00:00', 1),
(4, '12jhgvf122', 50, 2, 'public_html/Laballocator/ajax', '2023-01-13 04:55:58', '0000-00-00 00:00:00', 1),
(5, '12jhgvf122', 100, 2, 'casting', '2023-01-13 04:56:53', '0000-00-00 00:00:00', 1),
(6, '210389bnvrd', 65, 2, 'casting', '2023-01-13 04:58:00', '0000-00-00 00:00:00', 1),
(7, 'sgbvf456', 100, 1, 'melting', '2023-01-13 04:58:54', '0000-00-00 00:00:00', 1),
(8, '2108202110A', 25, 2, 'near the core', '2023-06-01 10:35:58', '0000-00-00 00:00:00', 1),
(9, 'ery45', 50, 1, 'near the core', '2023-06-01 02:33:04', '0000-00-00 00:00:00', 1),
(10, '12jhgvf122', 50, 2, 'dxfb', '2023-06-01 02:33:31', '0000-00-00 00:00:00', 1),
(11, '12jhgvf122', 50, 1, 'df', '2023-06-01 02:34:08', '0000-00-00 00:00:00', 1),
(12, '123testing', 50, 1, 'casting', '2023-06-01 02:37:51', '0000-00-00 00:00:00', 1),
(13, '123testing', 50, 3, 'casting', '2023-06-01 02:37:51', '0000-00-00 00:00:00', 1),
(14, '20123429hqig4', 100, 11, 'casting', '2023-06-01 03:19:20', '0000-00-00 00:00:00', 1),
(15, '20123429hqig4', 100, 12, 'casting', '2023-06-01 03:19:20', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sand_testing_details_master`
--

CREATE TABLE `sand_testing_details_master` (
  `sno` int(11) NOT NULL,
  `per_moisture` int(11) NOT NULL,
  `per_clay` int(11) NOT NULL,
  `other_additives` int(11) NOT NULL,
  `shear_strength` int(11) NOT NULL,
  `permiability` int(11) NOT NULL,
  `active_clay` int(11) NOT NULL,
  `dead_clay` int(11) NOT NULL,
  `GFN` int(11) NOT NULL,
  `GCS` int(11) NOT NULL,
  `compatibility` int(11) NOT NULL,
  `mould_hardness` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sand_testing_details_master`
--

INSERT INTO `sand_testing_details_master` (`sno`, `per_moisture`, `per_clay`, `other_additives`, `shear_strength`, `permiability`, `active_clay`, `dead_clay`, `GFN`, `GCS`, `compatibility`, `mould_hardness`, `created_at`, `updated_at`, `status`) VALUES
(1, 54, 5, 4, 85, 684, 5284, 68, 65, 654, 64, 654, '2023-01-17 12:20:06', '0000-00-00 00:00:00', 1),
(2, 57, 6543, 365, 6, 544, 65, 564, 654, 564, 564, 8597, '2023-01-17 12:21:16', '0000-00-00 00:00:00', 1);

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
-- Indexes for table `core_shop_details`
--
ALTER TABLE `core_shop_details`
  ADD PRIMARY KEY (`sno`);

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
-- Indexes for table `sand_testing_details_master`
--
ALTER TABLE `sand_testing_details_master`
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
-- AUTO_INCREMENT for table `core_shop_details`
--
ALTER TABLE `core_shop_details`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department_master`
--
ALTER TABLE `department_master`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `melting_details_master`
--
ALTER TABLE `melting_details_master`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sand_testing_details_master`
--
ALTER TABLE `sand_testing_details_master`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
