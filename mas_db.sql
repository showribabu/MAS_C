-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 03:48 PM
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
-- Database: `mas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_alt` varchar(255) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `question_1` varchar(255) NOT NULL,
  `answer_1` varchar(255) NOT NULL,
  `question_2` varchar(255) NOT NULL,
  `answer_2` varchar(255) NOT NULL,
  `question_3` varchar(255) NOT NULL,
  `answer_3` varchar(255) NOT NULL,
  `secret` varchar(255) NOT NULL,
  `photo_location` varchar(255) NOT NULL,
  `doj` varchar(255) NOT NULL,
  `activity_status` varchar(9) DEFAULT 'active',
  `login_status` varchar(1) DEFAULT '0',
  `login_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`first_name`, `middle_name`, `last_name`, `dob`, `email`, `email_alt`, `contact`, `user_id`, `question_1`, `answer_1`, `question_2`, `answer_2`, `question_3`, `answer_3`, `secret`, `photo_location`, `doj`, `activity_status`, `login_status`, `login_time`) VALUES
('Nilanjan_', '', 'Sinhababu', '2023-05-30', 'nilanjansb@kgpian.iitkgp.ac.in', 'nilanjansb@kgpian.iitkgp.ac.in', '1234567890', 'deep_1111', 'What is your father\'s middle name?', 'none', 'What is your favorite season of the year?', 'winter', 'What is your favorite fictional character?', 'shinchan', '4493795394', '#images/userimage.png', '27 06 2023', 'active', '0', '15:27:40-2023-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `backup_data`
--

CREATE TABLE `backup_data` (
  `group_number` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `group_type` varchar(600) NOT NULL,
  `admin_id` varchar(600) NOT NULL,
  `group_id` varchar(255) NOT NULL,
  `mv` varchar(255) NOT NULL,
  `member_id` varchar(255) NOT NULL,
  `pgk` varchar(255) NOT NULL,
  `bi` varchar(255) NOT NULL,
  `privilege` varchar(255) NOT NULL,
  `activity_status` varchar(255) NOT NULL,
  `creation_time` datetime NOT NULL,
  `serial` int(11) NOT NULL,
  `enc_key` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backup_data`
--

INSERT INTO `backup_data` (`group_number`, `user_id`, `group_type`, `admin_id`, `group_id`, `mv`, `member_id`, `pgk`, `bi`, `privilege`, `activity_status`, `creation_time`, `serial`, `enc_key`) VALUES
('B4', 'showri_2023', 'B', '7d2f2c2a0137c3ba556d305eea69d6179736faebfaa71cc891dac12417a192134c72f8335dee243ec00588bee5dbb1e21a3203bd6dab331469de00a73150dab1', '261bce57147c26eaa796ec4f495c2bd22b2ebcde2e63af8662d4082856bf7a57a8c0a20940ea88056010d64cca7de3b719da79b3ef52c97d375b8e5a2bef2040', '55119996753219060656', '686fda0a3c81846f867cb0ff38992b37ebc23e1c4c8639be7e900e925c0f5dde2c3b3ce45709711d809041e7f1e8c1fd524f17378ae7a2d4ece78ee9977c25ea', '3.0855586575727E+29', '883816d2735acd370186aa6e15a34b17032719d610f37c4fadad468c45263a324702b5a81210973f49a7de474db667f360e5f19e94ad297b7f8629eaafdd5ac6', 'member', 'active', '0000-00-00 00:00:00', 1, 'b60IBU2jTRrIIl/OwWnj1g=='),
('B1', 'Showri_143', 'B', '7d2f2c2a0137c3ba556d305eea69d6179736faebfaa71cc891dac12417a192134c72f8335dee243ec00588bee5dbb1e21a3203bd6dab331469de00a73150dab1', '261bce57147c26eaa796ec4f495c2bd22b2ebcde2e63af8662d4082856bf7a57a8c0a20940ea88056010d64cca7de3b719da79b3ef52c97d375b8e5a2bef2040', '63939725304492147144', '6a65fa8f7bbbd1307fe1e0067a179de554a14bea89098fc29d1f4abfbd5b2b9c0fabde56e38f12c3aea1bcd8938d39aed1853fa55104d6b3e32d2e80728056b7', '3.4621923358689E+39', 'b789525c9c9736f78af5052bcbaf802b07348949a58ef6341ce4092f59624d7a51d825a93abba9d980c8c13a8f30229ef900287051288a2af0c65735c7f9004a', 'member', 'active', '0000-00-00 00:00:00', 2, 'vZQ4dE5Fu/n+w2cXW8z5BQ==');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `serial_no` int(255) NOT NULL,
  `file_id` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_location` varchar(255) NOT NULL,
  `group_type` varchar(255) NOT NULL,
  `group_num` varchar(255) NOT NULL,
  `userid_mark` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`userid_mark`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_data`
--

CREATE TABLE `group_data` (
  `group_number` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `group_type` varchar(600) NOT NULL,
  `admin_id` varchar(600) NOT NULL,
  `group_id` varchar(255) NOT NULL,
  `mv` varchar(255) NOT NULL,
  `member_id` varchar(255) NOT NULL,
  `pgk` varchar(255) NOT NULL,
  `bi` varchar(255) NOT NULL,
  `privilege` varchar(255) NOT NULL,
  `activity_status` varchar(255) NOT NULL,
  `creation_time` datetime NOT NULL,
  `enc_key` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `group_data`
--

INSERT INTO `group_data` (`group_number`, `user_id`, `group_type`, `admin_id`, `group_id`, `mv`, `member_id`, `pgk`, `bi`, `privilege`, `activity_status`, `creation_time`, `enc_key`) VALUES
('A5', 'deep_11111', 'A', 'e540c0caa27eff06182a019f675ab3c7b6540d6b5f2e8bfebf859bfcc152078148acc05b37b36435e0dcf08ca690231c09c856c5ad336f860b9177d7b7882778', 'e540c0caa27eff06182a019f675ab3c7b6540d6b5f2e8bfebf859bfcc152078148acc05b37b36435e0dcf08ca690231c09c856c5ad336f860b9177d7b7882778', '1175320619351344715', '', '', '', 'member', '', '2023-06-29 11:30:16', ''),
('B1', 'deep_11111', 'B', '7d2f2c2a0137c3ba556d305eea69d6179736faebfaa71cc891dac12417a192134c72f8335dee243ec00588bee5dbb1e21a3203bd6dab331469de00a73150dab1', '261bce57147c26eaa796ec4f495c2bd22b2ebcde2e63af8662d4082856bf7a57a8c0a20940ea88056010d64cca7de3b719da79b3ef52c97d375b8e5a2bef2040', '63939725304492147144', '6df8301cd5d6526d361a90ede958513fb2bd5a70e64d5761f3c62e3732005b5f4e43cc3c7d981fea611e22774fda560609f7117ecbdfb5150476f65c1e0489ce', '3.4621923358689E+39', '9fd9176430a2b671aa295770a6c67bc3a600ee369ead62dcf5daff67c4159128839ce8bf959b66bcf33cf92fb2c33b0201fe6935b2cde7e7403aef7502554445', 'gm', 'active', '0000-00-00 00:00:00', ''),
('B4', 'deep_11111', 'B', '7d2f2c2a0137c3ba556d305eea69d6179736faebfaa71cc891dac12417a192134c72f8335dee243ec00588bee5dbb1e21a3203bd6dab331469de00a73150dab1', '261bce57147c26eaa796ec4f495c2bd22b2ebcde2e63af8662d4082856bf7a57a8c0a20940ea88056010d64cca7de3b719da79b3ef52c97d375b8e5a2bef2040', '55119996753219060656', 'a839e2b36ab2f0ec532fb4ee262ab2c729525dd3b37a2e850667a9a6526e156cb9933da09fc691d6e332bad097a489cbfa94b48aa1599eff1bd479d035b498d1', '3.0855586575727E+29', '5970f1df694ba2c9fb0020ce704130632f211c9ba92be9906553045fdac00dc0103d625dedf8c92ee405b2638324014bf09125dc71cfea431873b653fd0dba80', 'gm', 'active', '0000-00-00 00:00:00', 'FM9pIEnEskz5c9DM1m5QVQ=='),
('A14', 'deep_222', 'A', '3b0722156a26c4947005d39ea1c14cf87475492f5d262fde4603f377e97c400912c7eddda72b8423296c2832fa2807c89d1493e36b8ed7055e074dcbebe32443', '3b0722156a26c4947005d39ea1c14cf87475492f5d262fde4603f377e97c400912c7eddda72b8423296c2832fa2807c89d1493e36b8ed7055e074dcbebe32443', '7885277702', '', '', '', '', '', '2023-06-29 15:58:19', ''),
('A15', 'deep_222', 'A', '3b0722156a26c4947005d39ea1c14cf87475492f5d262fde4603f377e97c400912c7eddda72b8423296c2832fa2807c89d1493e36b8ed7055e074dcbebe32443', '3b0722156a26c4947005d39ea1c14cf87475492f5d262fde4603f377e97c400912c7eddda72b8423296c2832fa2807c89d1493e36b8ed7055e074dcbebe32443', '7885277702', '', '', '', '', '', '2023-06-29 15:58:45', ''),
('A16', 'deep_222', 'A', '3b0722156a26c4947005d39ea1c14cf87475492f5d262fde4603f377e97c400912c7eddda72b8423296c2832fa2807c89d1493e36b8ed7055e074dcbebe32443', '3b0722156a26c4947005d39ea1c14cf87475492f5d262fde4603f377e97c400912c7eddda72b8423296c2832fa2807c89d1493e36b8ed7055e074dcbebe32443', '7885277702', '', '', '', '', '', '2023-06-29 15:58:47', ''),
('A6', 'deep_333', 'A', '08c035b983678a2e08fb2324f31d88bb93a40ff33e903d6d214c7b2a990fb8090033daf3b3ce3bfd785706d13a96064260156fd6cbe678a9537b670fdce3cf22', '08c035b983678a2e08fb2324f31d88bb93a40ff33e903d6d214c7b2a990fb8090033daf3b3ce3bfd785706d13a96064260156fd6cbe678a9537b670fdce3cf22', '1', '', '', '', '', '', '2023-06-29 14:46:12', ''),
('A8', 'deep_333', 'A', '08c035b983678a2e08fb2324f31d88bb93a40ff33e903d6d214c7b2a990fb8090033daf3b3ce3bfd785706d13a96064260156fd6cbe678a9537b670fdce3cf22', '08c035b983678a2e08fb2324f31d88bb93a40ff33e903d6d214c7b2a990fb8090033daf3b3ce3bfd785706d13a96064260156fd6cbe678a9537b670fdce3cf22', '1', '', '', '', '', '', '2023-06-29 15:28:10', ''),
('A9', 'deep_333', 'A', '08c035b983678a2e08fb2324f31d88bb93a40ff33e903d6d214c7b2a990fb8090033daf3b3ce3bfd785706d13a96064260156fd6cbe678a9537b670fdce3cf22', '08c035b983678a2e08fb2324f31d88bb93a40ff33e903d6d214c7b2a990fb8090033daf3b3ce3bfd785706d13a96064260156fd6cbe678a9537b670fdce3cf22', '1', '', '', '', '', '', '2023-06-29 15:29:01', ''),
('2', 'hari_123', '', '1d9f3f2aa5606142ec937b1b4c1cf99b2be26402a0acad1b1f25aead3f5a9616cce3809baa02a8e2102523f3e9439622e06756103f8cc6ffc1884ffd4ba2ea18', '1d9f3f2aa5606142ec937b1b4c1cf99b2be26402a0acad1b1f25aead3f5a9616cce3809baa02a8e2102523f3e9439622e06756103f8cc6ffc1884ffd4ba2ea18', '443115368', '', '', '', '', '', '2023-06-29 14:46:56', ''),
('A11', 'johndoe_1', 'A', '4c6433d8abea46d8469fa7ba53098e8149d1a734b09283dbce4621858501f0474e5e986b54c3dbdbe90fea6955e725fe139c435e630e229935902f272fb6fd34', 'df99bc36a00684af90cfa4eac6b9bc20d199f04879522722be3626166d72660ced94e73f623fa790b513825e2404667f434c820cb96c79082aec3f0fdd064668', '7178785544', '', '', '', '', '', '2023-06-29 18:57:55', ''),
('A3', 'madan_123', 'A', 'b4a081472c439374ceb6e6aa8cd81531de9a9c7d8ddad9ea31a5e0f6aca79d4f371859794274847925f529b4fc3bf4af7af91485ffe812e1f53fa66f51285b5f', 'b4a081472c439374ceb6e6aa8cd81531de9a9c7d8ddad9ea31a5e0f6aca79d4f371859794274847925f529b4fc3bf4af7af91485ffe812e1f53fa66f51285b5f', '5421773251392720355893099209139845450', '', '', '', 'member', '', '2023-06-29 10:32:18', ''),
('A4', 'madan_123', 'A', 'b4a081472c439374ceb6e6aa8cd81531de9a9c7d8ddad9ea31a5e0f6aca79d4f371859794274847925f529b4fc3bf4af7af91485ffe812e1f53fa66f51285b5f', 'b4a081472c439374ceb6e6aa8cd81531de9a9c7d8ddad9ea31a5e0f6aca79d4f371859794274847925f529b4fc3bf4af7af91485ffe812e1f53fa66f51285b5f', '5421773251392720355893099209139845450', '', '', '', 'member', '', '2023-06-29 11:30:03', ''),
('A3', 'roop_111', 'A', 'e540c0caa27eff06182a019f675ab3c7b6540d6b5f2e8bfebf859bfcc152078148acc05b37b36435e0dcf08ca690231c09c856c5ad336f860b9177d7b7882778', 'e540c0caa27eff06182a019f675ab3c7b6540d6b5f2e8bfebf859bfcc152078148acc05b37b36435e0dcf08ca690231c09c856c5ad336f860b9177d7b7882778', '1175320619351344715', '', '', '', 'member', '', '2023-06-29 10:29:39', ''),
('B1', 'Showri_143', 'B', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'inactive', '0000-00-00 00:00:00', 'NULL'),
('B4', 'showri_2023', 'B', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'inactive', '0000-00-00 00:00:00', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_from` varchar(255) NOT NULL,
  `request_to` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `r_status` varchar(255) NOT NULL,
  `request_id` varchar(255) NOT NULL,
  `group_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_from`, `request_to`, `message`, `r_status`, `request_id`, `group_type`) VALUES
('deep_11111', 'Showri_143', 'You are selected as a group member: from Group manager - check status table..!!!', 'a', 'CW757r', ''),
('deep_11111', 'Showri_143', 'You are selected as a group member: from Group manager - check status table..!!!', 'p', 'dS284c', ''),
('deep_11111', 'showri_2023', 'You are selected as a group member: from Group manager - check status table..!!!', 'a', 'kP414x', ''),
('Showri_143', 'deep_11111', 'I request you please add me in your group', 'a', 'Ksb62u', 'B'),
('deep_11111', 'Showri_143', 'You are selected as a group member: from Group manager - check status table..!!!', 'p', 'tA405v', '');

-- --------------------------------------------------------

--
-- Table structure for table `server_parameters`
--

CREATE TABLE `server_parameters` (
  `q` varchar(1000) NOT NULL,
  `kv` varchar(255) NOT NULL,
  `r` varchar(255) NOT NULL,
  `s` varchar(255) NOT NULL,
  `spk` varchar(255) NOT NULL,
  `ix` varchar(255) NOT NULL,
  `p` varchar(1000) NOT NULL,
  `serial` int(3) NOT NULL,
  `ac` varchar(1000) NOT NULL,
  `bc` varchar(1000) NOT NULL,
  `cc` varchar(1000) NOT NULL,
  `dc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `server_parameters`
--

INSERT INTO `server_parameters` (`q`, `kv`, `r`, `s`, `spk`, `ix`, `p`, `serial`, `ac`, `bc`, `cc`, `dc`) VALUES
('82238207339508009110677067069584448553696914622083', '11334091189611704183', '', '6865087501', '91816336562086688957529828844377572959610444572727', '7781345447', '8248623707', 3, '0', '4', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_alt` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `question_1` varchar(255) NOT NULL,
  `answer_1` varchar(255) NOT NULL,
  `question_2` varchar(255) NOT NULL,
  `answer_2` varchar(255) NOT NULL,
  `question_3` varchar(255) NOT NULL,
  `answer_3` varchar(255) NOT NULL,
  `secret` varchar(255) NOT NULL,
  `photo_location` varchar(255) NOT NULL,
  `doj` varchar(255) NOT NULL,
  `activity_status` varchar(255) NOT NULL DEFAULT 'active',
  `login_status` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `middle_name`, `last_name`, `dob`, `email`, `email_alt`, `contact`, `user_id`, `question_1`, `answer_1`, `question_2`, `answer_2`, `question_3`, `answer_3`, `secret`, `photo_location`, `doj`, `activity_status`, `login_status`, `login_time`) VALUES
('Deepanshu', '', '', '2023-06-07', 'nit@gmail.com', 'nit@gmail.com', '6375261911', 'deep_11111', 'What is your father\'s middle name?', 'none', 'What is your favorite color?', 'red', 'What is your favorite fictional character?', 'shinchan', '7609528612', '#images/userimage.png', '29 06 2023', 'active', '', '15:17:41-2023-06-29'),
('Deepanshu', '', '', '2023-05-29', 'bansaldeepanshu2003@gmail.com', '', '6375261911', 'deep_222', 'What is your favorite food?', 'burger', 'What is your favorite fictional character?', 'shinchan', 'What is your favorite color?', 'red', '1752711193', '#images/Dog glasses pic for dp.jpg', '29 06 2023', 'active', '', ''),
('Deepanshu', '', '', '2023-06-09', 'bansaldeepanshu2003@gmail.com', 'bansaldeepanshu2003@gmail.com', '6375261911', 'deep_333', 'What is your favorite food?', 'red', 'What is your favorite TV show?', 'shinchan', 'What is your favorite hobby?', 'reading', '81106099704260716591376678877899898486092193801818', '#images/userimage.png', '29 06 2023', 'active', '', '07:39:06-2023-06-29'),
('Hari', '', 'kumar', '04/01/2002', 'hari@gmail.com', '', '9434413674', 'hari_123', '', '', '', '', '', '', 'asdfkhisdfsd34', '', '27/06/2023', '', '', ''),
('John', '', 'Doe', '1780-01-02', 'johndoe@gmail.com', '', '9876543210', 'johndoe_1', 'What was the name of your first school?', 'school', 'What is the name of your childhood best friend?', 'friend', 'What is your favorite music band/artist?', 'music', '512901741', '#images/userimage.png', '29 06 2023', 'active', '', '15:28:47-2023-06-29'),
('Madan ', '', 'Mohan', '06/02/1994', 'madan@gmail.com', '', '9434413671', 'madan_123', '', '', '', '', '', '', 'asdfkhiwe23423434', '', '27/06/2023', '', '', ''),
('Deepanshu', '', 'Bansal', '2023-06-05', 'bansaldeepanshu2003@gmail.com', '', '9609635236', 'mukesh_1', 'What is your favorite food?', 'burger', 'What is your favorite color?', 'red', 'What is your favorite music band/artist?', 'arijit', '3613960093', '#images/Dog glasses pic for dp.jpg', '29 06 2023', 'active', '', '14:11:37-2023-06-29'),
('Deepanshu', '', '', '2023-06-01', 'bansaldeepanshu2003@gmail.com', 'bansaldeepanshu2003@gmail.com', '6375261911', 'nitish_1', 'What is the name of your childhood best friend?', 'xyz', 'What is your favorite music band/artist?', 'arijit', 'What is your father\'s middle name?', 'none', '3563611394', '#images/userimage.png', '29 06 2023', 'active', '', '11:41:44-2023-06-29'),
('Rajiv', '', 'Kumar', '05/10/1998', 'rajiv@gmail.com', '', '9876543210', 'rajiv_123', '', '', '', '', '', '', 'asoifjsodijf9wure', '', '27/06/2023', '', '', ''),
('Roopak', '', '', '2023-05-31', 'roop@gmail.com', '', '1232454566', 'roop_111', 'What is your favorite season of the year?', 'winter', 'What is your favorite hobby?', 'reading', 'What is your favorite music band/artist?', 'arijit', '4269755915', '#images/userimage.png', '29 06 2023', 'active', '', '12:30:48-2023-06-29'),
('KANTA', '', 'SHOWRIBABU', '2023-06-29', 'rajubai6419@gmail.com', '', '9392393052', 'Showri_143', 'What is the name of your childhood best friend?', 'shiva', 'What is your favorite TV show?', 'cn', 'What was the name of your first school?', 'xaviers', '7807562113', '#images/userimage.png', '29 06 2023', 'active', '', '14:45:31-2023-06-29'),
('Deepanshu', '', '', '2023-05-30', 'bansaldeepanshu2003@gmail.com', '', '6375261911', 'showri_2023', 'What is your father\'s middle name?', 'none', 'What is your favorite music band/artist?', 'arijit', 'What is your favorite fictional character?', 'shinchan', '4425233400', '#images/Dog glasses pic for dp.jpg', '29 06 2023', 'active', '', ''),
('Deepanshu', '', '', '2023-05-29', 'bansaldeepanshu2003@gmail.com', '', '6375261911', 'spider_1', 'What is your favorite fictional character?', 'burger', 'What is your favorite season of the year?', 'shinchan', 'What is your favorite color?', 'red', '1721304853', '#images/Dog glasses pic for dp.jpg', '29 06 2023', 'active', '', ''),
('Vijay', '', 'Kumar', '02/10/2000', 'vijay@gmail.com', '', '9432413671', 'vijay_123', '', '', '', '', '', '', 'sdfjo3223432434', '', '27/06/2023', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `backup_data`
--
ALTER TABLE `backup_data`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `group_data`
--
ALTER TABLE `group_data`
  ADD PRIMARY KEY (`user_id`,`group_number`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `server_parameters`
--
ALTER TABLE `server_parameters`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backup_data`
--
ALTER TABLE `backup_data`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `serial_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `server_parameters`
--
ALTER TABLE `server_parameters`
  MODIFY `serial` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
