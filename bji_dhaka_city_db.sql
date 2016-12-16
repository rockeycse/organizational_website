-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2016 at 04:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bji_dhaka_city_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`admin_id` int(20) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_image` varchar(300) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_designation` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_image`, `admin_email`, `admin_password`, `admin_designation`) VALUES
(1, 'rockey', 'sadfdsfxzgragfdgfadvg', 'rockeycse@gmail.com', '12345678', 'master_admin'),
(2, 'rockey ahmed', 'trutyiyuporui;tdfgtrft', 'rockeycse110136@gmail.com', '12345678', 'admin'),
(3, 'Jamil Bin Hussain', '13528898_1267489529935882_1293115505412070098_n.jpg', 'jamil.cse.iiuc@gmail.com', '123456789', 'admin'),
(4, 'Jamil Bin Hussain', '13528898_1267489529935882_1293115505412070098_n.jpg', 'jamil.cse.iiuc@gmail.com', '123456789', 'admin'),
(11, 'Jamil Bin Hussain', 'N/A', 'jamil.cse.iiuc@gmail.com', '123456789', 'admin'),
(12, 'ede', 'N/A', 'rockeycse@gmail.com', 'ecedc', 'eced'),
(13, 'rrrr', 'N/A', 'rockeycse@gmail.com', 'erererer', 'eerer'),
(14, 'ededdee', 'N/A', 'rockeycse@gmail.com', 'weeded', 'edee'),
(15, 'ecfce', 'N/A', 'jamil.cse.iiuc@gmail.com', 'cedcedcedced', 'edcdce');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_post`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_post` (
  `admin_post_id` int(20) NOT NULL,
  `admin_post_title` varchar(300) NOT NULL,
  `admin_post_description` longtext NOT NULL,
  `admin_post_thumb_img` text NOT NULL,
  `admin_post_type` int(50) NOT NULL,
  `admin_post_link` varchar(100) NOT NULL,
  `amin_post_date` varchar(50) NOT NULL,
  `admin_post_catagory` int(20) NOT NULL,
  `admin_post_author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_breaking_news`
--

CREATE TABLE IF NOT EXISTS `tbl_breaking_news` (
`breaking_news_id` int(20) NOT NULL,
  `breaking_news_admin_post_id` int(20) NOT NULL,
  `breaking_news_post_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
`d_menu_id` int(11) NOT NULL,
  `d_menu_name` varchar(200) NOT NULL,
  `d_menu_link` varchar(200) NOT NULL,
  `d_menu_sub_exist` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_member`
--

CREATE TABLE IF NOT EXISTS `tbl_new_member` (
`new_member_id` int(20) NOT NULL,
  `new_member_name` varchar(100) NOT NULL,
  `new_member_fath_or_hasband_name` varchar(100) NOT NULL,
  `new_member_email` varchar(100) NOT NULL,
  `new_member_mobile` varchar(50) NOT NULL,
  `new_member_age` varchar(20) NOT NULL,
  `new_member_education` varchar(200) NOT NULL,
  `new_member_street_address` varchar(200) NOT NULL,
  `new_member_house_no` varchar(200) NOT NULL,
  `new_member_vill_colony` varchar(200) NOT NULL,
  `new_member_word` varchar(200) NOT NULL,
  `new_member_post_office` varchar(200) NOT NULL,
  `new_member_post_code` varchar(100) NOT NULL,
  `new_member_union` varchar(200) NOT NULL,
  `new_member_sub_dis` varchar(200) NOT NULL,
  `new_member_dis` varchar(200) NOT NULL,
  `new_member_country` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_new_member`
--

INSERT INTO `tbl_new_member` (`new_member_id`, `new_member_name`, `new_member_fath_or_hasband_name`, `new_member_email`, `new_member_mobile`, `new_member_age`, `new_member_education`, `new_member_street_address`, `new_member_house_no`, `new_member_vill_colony`, `new_member_word`, `new_member_post_office`, `new_member_post_code`, `new_member_union`, `new_member_sub_dis`, `new_member_dis`, `new_member_country`) VALUES
(1, 'rockey ahmed', 'tofazzal molla', 'rockeycse@gmail.com', '017358964', '25', 'BSc Engineering', 'solimullah road', '4/29', 'Mohammadpur', '1', 'Mohammadpur', '1205', 'Mohammadpur', 'Mohammadpur', 'Dhaka', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_catagory`
--

CREATE TABLE IF NOT EXISTS `tbl_post_catagory` (
`post_catagory_id` int(20) NOT NULL,
  `post_catagory_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_type`
--

CREATE TABLE IF NOT EXISTS `tbl_post_type` (
`post_type_id` int(20) NOT NULL,
  `post_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pub_question`
--

CREATE TABLE IF NOT EXISTS `tbl_pub_question` (
`pub_question_id` int(50) NOT NULL,
  `pub_question_asker_name` varchar(200) NOT NULL,
  `pub_question_asker_email` varchar(200) NOT NULL,
  `pub_question_asker_question` longtext NOT NULL,
  `pub_question_answer_statement` varchar(100) NOT NULL,
  `pub_question_answer_description` longtext NOT NULL,
  `pub_question_answer_author_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_sub_menu` (
`d_sub_menu_id` int(20) NOT NULL,
  `d_sub_menu_d_menu_id` int(20) NOT NULL,
  `d_sub_menu_name` varchar(200) NOT NULL,
  `d_sub_menu_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_admin_post`
--
ALTER TABLE `tbl_admin_post`
 ADD PRIMARY KEY (`admin_post_id`);

--
-- Indexes for table `tbl_breaking_news`
--
ALTER TABLE `tbl_breaking_news`
 ADD PRIMARY KEY (`breaking_news_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
 ADD PRIMARY KEY (`d_menu_id`);

--
-- Indexes for table `tbl_new_member`
--
ALTER TABLE `tbl_new_member`
 ADD PRIMARY KEY (`new_member_id`);

--
-- Indexes for table `tbl_post_catagory`
--
ALTER TABLE `tbl_post_catagory`
 ADD PRIMARY KEY (`post_catagory_id`);

--
-- Indexes for table `tbl_post_type`
--
ALTER TABLE `tbl_post_type`
 ADD PRIMARY KEY (`post_type_id`);

--
-- Indexes for table `tbl_pub_question`
--
ALTER TABLE `tbl_pub_question`
 ADD PRIMARY KEY (`pub_question_id`);

--
-- Indexes for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
 ADD PRIMARY KEY (`d_sub_menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_breaking_news`
--
ALTER TABLE `tbl_breaking_news`
MODIFY `breaking_news_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
MODIFY `d_menu_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_new_member`
--
ALTER TABLE `tbl_new_member`
MODIFY `new_member_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_post_catagory`
--
ALTER TABLE `tbl_post_catagory`
MODIFY `post_catagory_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_post_type`
--
ALTER TABLE `tbl_post_type`
MODIFY `post_type_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pub_question`
--
ALTER TABLE `tbl_pub_question`
MODIFY `pub_question_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
MODIFY `d_sub_menu_id` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
