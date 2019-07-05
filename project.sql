-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 11:29 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_complain`
--

CREATE TABLE `admin_add_complain` (
  `complain_id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` char(1) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `incident_date` date NOT NULL,
  `incident_time` time NOT NULL,
  `incident_place` varchar(200) NOT NULL,
  `incident_type` varchar(200) NOT NULL,
  `incident_detail` varchar(200) NOT NULL,
  `incident_district` varchar(200) NOT NULL,
  `police_station` varchar(100) NOT NULL,
  `visit` char(1) NOT NULL,
  `visit_detail` varchar(200) NOT NULL,
  `visit_time` time NOT NULL,
  `visit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_manger`
--

CREATE TABLE `admin_add_manger` (
  `manager_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` char(1) NOT NULL,
  `officer_designation` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_add_manger`
--

INSERT INTO `admin_add_manger` (`manager_id`, `username`, `password`, `email`, `mobile_no`, `date_of_birth`, `gender`, `officer_designation`, `city`, `address`) VALUES
(1, 'amir', 'subadmin123', 'subadmin@gmail.com', 3017398584, '2012-12-12', 'M', 'SSA', 'Sahiwal', 'sahiwal');

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_missperson`
--

CREATE TABLE `admin_add_missperson` (
  `missperson_id` int(50) NOT NULL,
  `police_station` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `skin_tone` varchar(100) NOT NULL,
  `height` float NOT NULL,
  `hair` varchar(100) NOT NULL,
  `body_type` varchar(100) NOT NULL,
  `mental_ability` char(1) NOT NULL,
  `wearing` varchar(100) NOT NULL,
  `missing_date` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_wantedperson`
--

CREATE TABLE `admin_add_wantedperson` (
  `criminal_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `address` varchar(200) NOT NULL,
  `skin_tone` varchar(100) NOT NULL,
  `hair` varchar(100) NOT NULL,
  `body_type` varchar(100) NOT NULL,
  `height` float NOT NULL,
  `crime_description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `user_email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `admin_receive_notification`
--

CREATE TABLE `admin_receive_notification` (
  `complain_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `cnic` int(100) NOT NULL,
  `crime_type` varchar(100) NOT NULL,
  `crime_description` varchar(100) NOT NULL,
  `officer_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL,
  `read_n` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_receive_notification`
--

INSERT INTO `admin_receive_notification` (`complain_id`, `c_name`, `f_name`, `cnic`, `crime_type`, `crime_description`, `officer_name`, `designation`, `report`, `read_n`) VALUES
(1, 'amir', 'yaseen', 1234, 'Murder', 'aasdfdfd', 'ali', 'ASI', 'asdffg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_reply_investigation`
--

CREATE TABLE `admin_reply_investigation` (
  `report_id` int(11) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `remarks_description` varchar(100) NOT NULL,
  `sign` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subadmin_add_complain`
--

CREATE TABLE `subadmin_add_complain` (
  `complain_id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` char(1) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `incident_date` date NOT NULL,
  `incident_time` time NOT NULL,
  `incident_place` varchar(200) NOT NULL,
  `incident_type` varchar(100) NOT NULL,
  `incident_detail` varchar(200) NOT NULL,
  `incident_district` varchar(100) NOT NULL,
  `police_station` varchar(100) NOT NULL,
  `visit` char(1) NOT NULL,
  `visit_detail` varchar(200) NOT NULL,
  `visit_time` time NOT NULL,
  `visit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin_add_complain`
--

INSERT INTO `subadmin_add_complain` (`complain_id`, `username`, `password`, `confirm_password`, `email`, `mobile_no`, `date_of_birth`, `gender`, `city`, `address`, `incident_date`, `incident_time`, `incident_place`, `incident_type`, `incident_detail`, `incident_district`, `police_station`, `visit`, `visit_detail`, `visit_time`, `visit_date`) VALUES
(1, 'amir', 'abc', 'abc', 'amirji56@gmail.com', 1233, '2012-12-12', 'M', 'Lahore', 'askdahskd', '2012-12-12', '12:12:00', 'sahiwal', 'ddas', 'Murder', 'Islamabad', 'thana dara raheem', 'Y', 'klcjsddfkldjf', '12:12:00', '2012-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `subadmin_add_fir`
--

CREATE TABLE `subadmin_add_fir` (
  `fir_id` int(11) NOT NULL,
  `serial_no` varchar(100) NOT NULL,
  `form_no` varchar(100) NOT NULL,
  `police_station` varchar(100) NOT NULL,
  `e_tag_no` varchar(100) NOT NULL,
  `complain_date` date NOT NULL,
  `police_date` date NOT NULL,
  `complainer_detail` varchar(100) NOT NULL,
  `crime_condition` varchar(100) NOT NULL,
  `police_station_distance` varchar(100) NOT NULL,
  `delay_reason` varchar(100) NOT NULL,
  `officer_name` varchar(100) NOT NULL,
  `belt_no` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `fir_detail` varchar(200) NOT NULL,
  `sign` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin_add_fir`
--

INSERT INTO `subadmin_add_fir` (`fir_id`, `serial_no`, `form_no`, `police_station`, `e_tag_no`, `complain_date`, `police_date`, `complainer_detail`, `crime_condition`, `police_station_distance`, `delay_reason`, `officer_name`, `belt_no`, `designation`, `fir_detail`, `sign`) VALUES
(1, '123', '1333dd', 'abc', '123', '2012-12-12', '2012-12-23', 'jsdjasdjaskdfhsd', 'ksdidweywy', 'nmcncmcm', 'chsjkd', 'ali', 123445567, 'ASI', 'jksdfhsdjkfhksk', 123345);

-- --------------------------------------------------------

--
-- Table structure for table `subadmin_add_investigation`
--

CREATE TABLE `subadmin_add_investigation` (
  `report_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `cnic` bigint(20) NOT NULL,
  `crime_type` varchar(200) NOT NULL,
  `crime_description` varchar(100) NOT NULL,
  `officer_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin_add_investigation`
--

INSERT INTO `subadmin_add_investigation` (`report_id`, `c_name`, `f_name`, `cnic`, `crime_type`, `crime_description`, `officer_name`, `designation`, `report`) VALUES
(1, 'amir', 'yaseen', 1234, 'Murder', 'aasdfdfd', 'ali', 'ASI', 'asdffg');

-- --------------------------------------------------------

--
-- Table structure for table `subadmin_add_misperson`
--

CREATE TABLE `subadmin_add_misperson` (
  `missperson_id` int(50) NOT NULL,
  `police_station` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `skin_tone` varchar(200) NOT NULL,
  `height` float NOT NULL,
  `hair` varchar(100) NOT NULL,
  `body_type` varchar(100) NOT NULL,
  `mental_ability` char(1) NOT NULL,
  `wearing` varchar(100) NOT NULL,
  `missing_date` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin_add_misperson`
--

INSERT INTO `subadmin_add_misperson` (`missperson_id`, `police_station`, `name`, `age`, `gender`, `skin_tone`, `height`, `hair`, `body_type`, `mental_ability`, `wearing`, `missing_date`, `image`) VALUES
(1, 'Thana Dara Raheem', 'ali', 24, 'M', 'Sahiwal', 5, 'Pompadour', 'Mesomorph', 'N', 'pent', '2012-12-12', 'Screenshot (61).png');

-- --------------------------------------------------------

--
-- Table structure for table `subadmin_add_wantedperson`
--

CREATE TABLE `subadmin_add_wantedperson` (
  `criminal_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `address` varchar(200) NOT NULL,
  `skin_tone` varchar(100) NOT NULL,
  `hair` varchar(100) NOT NULL,
  `body_type` varchar(100) NOT NULL,
  `height` float NOT NULL,
  `crime_description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin_add_wantedperson`
--

INSERT INTO `subadmin_add_wantedperson` (`criminal_id`, `name`, `age`, `gender`, `address`, `skin_tone`, `hair`, `body_type`, `height`, `crime_description`, `image`) VALUES
(1, 'ali', 24, 'M', 'asjkdjaskdj', 'Sahiwal', 'Bob/Finger Wave', 'Mesomorph', 5, 'aaskdkasdh', 'Screenshot (62).png');

-- --------------------------------------------------------

--
-- Table structure for table `subadmin_mark_complain`
--

CREATE TABLE `subadmin_mark_complain` (
  `complain_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `crime_type` varchar(100) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `officer_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `officer_mobile_no` bigint(20) NOT NULL,
  `complain_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin_mark_complain`
--

INSERT INTO `subadmin_mark_complain` (`complain_id`, `username`, `crime_type`, `mobile_no`, `officer_name`, `designation`, `officer_mobile_no`, `complain_status`) VALUES
(1, 'amir', 'Murder', 12345, 'ali', 'ASI', 987654, 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `subadmin_receive_notification`
--

CREATE TABLE `subadmin_receive_notification` (
  `report_id` int(11) NOT NULL,
  `remarks` int(100) NOT NULL,
  `remarks_description` int(100) NOT NULL,
  `sign` int(11) NOT NULL,
  `read_n` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_add_complain`
--

CREATE TABLE `user_add_complain` (
  `complain_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `incident_date` date NOT NULL,
  `incident_time` time NOT NULL,
  `incident_place` varchar(100) NOT NULL,
  `incident_type` varchar(200) NOT NULL,
  `incident_detail` varchar(100) NOT NULL,
  `incident_district` varchar(100) NOT NULL,
  `police_station` varchar(100) NOT NULL,
  `visit` char(1) NOT NULL,
  `visit_detail` varchar(100) NOT NULL,
  `visit_time` time NOT NULL,
  `visit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_add_complain`
--

INSERT INTO `user_add_complain` (`complain_id`, `user_id`, `incident_date`, `incident_time`, `incident_place`, `incident_type`, `incident_detail`, `incident_district`, `police_station`, `visit`, `visit_detail`, `visit_time`, `visit_date`) VALUES
(1, 1, '2012-12-12', '00:12:00', 'sahiwal', 'Murder', 'asmdlasdml;as', 'Islamabad', 'thana dara raheem', 'N', '', '00:00:00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_add_misperson`
--

CREATE TABLE `user_add_misperson` (
  `mperson_id` int(50) NOT NULL,
  `police_station` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `skin_tone` varchar(100) NOT NULL,
  `height` float NOT NULL,
  `hair` varchar(100) NOT NULL,
  `body_type` varchar(100) NOT NULL,
  `mental_ability` char(1) NOT NULL,
  `wearing` varchar(100) NOT NULL,
  `missing_date` date NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_complain_notification`
--

CREATE TABLE `user_complain_notification` (
  `complain_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `incident_date` date NOT NULL,
  `incident_time` time NOT NULL,
  `incident_place` varchar(100) NOT NULL,
  `incident_type` varchar(100) NOT NULL,
  `incident_detail` varchar(100) NOT NULL,
  `incident_district` varchar(100) NOT NULL,
  `police_station` varchar(100) NOT NULL,
  `visit` char(1) NOT NULL,
  `visit_detail` varchar(100) NOT NULL,
  `visit_time` time NOT NULL,
  `visit_date` date NOT NULL,
  `read_n` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_complain_notification`
--

INSERT INTO `user_complain_notification` (`complain_id`, `user_id`, `incident_date`, `incident_time`, `incident_place`, `incident_type`, `incident_detail`, `incident_district`, `police_station`, `visit`, `visit_detail`, `visit_time`, `visit_date`, `read_n`) VALUES
(1, 0, '2012-12-12', '00:12:00', 'sahiwal', 'Murder', 'asasdsf', 'Islamabad', 'thana dara raheem', 'N', '', '00:00:00', '0000-00-00', 1),
(2, 0, '2012-12-12', '00:12:00', 'sahiwal', 'Murder', 'asmdlasdml;as', 'Islamabad', 'thana dara raheem', 'N', '', '00:00:00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `cnic` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` char(1) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `username`, `fname`, `cnic`, `password`, `email`, `mobile_no`, `date_of_birth`, `gender`, `city`, `address`) VALUES
(1, 'amir', 'yaseen', 123456, '1234567', 'amir@gmail.com', 124123, '2012-12-12', 'M', 'Multan', 'XAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_add_complain`
--
ALTER TABLE `admin_add_complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `admin_add_manger`
--
ALTER TABLE `admin_add_manger`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `admin_add_missperson`
--
ALTER TABLE `admin_add_missperson`
  ADD PRIMARY KEY (`missperson_id`);

--
-- Indexes for table `admin_add_wantedperson`
--
ALTER TABLE `admin_add_wantedperson`
  ADD PRIMARY KEY (`criminal_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_receive_notification`
--
ALTER TABLE `admin_receive_notification`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `admin_reply_investigation`
--
ALTER TABLE `admin_reply_investigation`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `subadmin_add_complain`
--
ALTER TABLE `subadmin_add_complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `subadmin_add_fir`
--
ALTER TABLE `subadmin_add_fir`
  ADD PRIMARY KEY (`fir_id`);

--
-- Indexes for table `subadmin_add_investigation`
--
ALTER TABLE `subadmin_add_investigation`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `subadmin_add_misperson`
--
ALTER TABLE `subadmin_add_misperson`
  ADD PRIMARY KEY (`missperson_id`);

--
-- Indexes for table `subadmin_add_wantedperson`
--
ALTER TABLE `subadmin_add_wantedperson`
  ADD PRIMARY KEY (`criminal_id`);

--
-- Indexes for table `subadmin_mark_complain`
--
ALTER TABLE `subadmin_mark_complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `subadmin_receive_notification`
--
ALTER TABLE `subadmin_receive_notification`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `user_add_complain`
--
ALTER TABLE `user_add_complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `user_add_misperson`
--
ALTER TABLE `user_add_misperson`
  ADD PRIMARY KEY (`mperson_id`);

--
-- Indexes for table `user_complain_notification`
--
ALTER TABLE `user_complain_notification`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_add_complain`
--
ALTER TABLE `admin_add_complain`
  MODIFY `complain_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_add_manger`
--
ALTER TABLE `admin_add_manger`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_add_missperson`
--
ALTER TABLE `admin_add_missperson`
  MODIFY `missperson_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_add_wantedperson`
--
ALTER TABLE `admin_add_wantedperson`
  MODIFY `criminal_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_receive_notification`
--
ALTER TABLE `admin_receive_notification`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_reply_investigation`
--
ALTER TABLE `admin_reply_investigation`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subadmin_add_complain`
--
ALTER TABLE `subadmin_add_complain`
  MODIFY `complain_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subadmin_add_fir`
--
ALTER TABLE `subadmin_add_fir`
  MODIFY `fir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subadmin_add_investigation`
--
ALTER TABLE `subadmin_add_investigation`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subadmin_add_misperson`
--
ALTER TABLE `subadmin_add_misperson`
  MODIFY `missperson_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subadmin_add_wantedperson`
--
ALTER TABLE `subadmin_add_wantedperson`
  MODIFY `criminal_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subadmin_mark_complain`
--
ALTER TABLE `subadmin_mark_complain`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subadmin_receive_notification`
--
ALTER TABLE `subadmin_receive_notification`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_add_complain`
--
ALTER TABLE `user_add_complain`
  MODIFY `complain_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_add_misperson`
--
ALTER TABLE `user_add_misperson`
  MODIFY `mperson_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_complain_notification`
--
ALTER TABLE `user_complain_notification`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
