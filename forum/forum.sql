-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 14, 2021 at 07:49 AM
-- Server version: 5.7.35
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) NOT NULL,
  `student` varchar(1000) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(132, '130', 'Andrew', 'So, kindly, hurry and sign up', '2021-08-05 10:27:43'),
(131, '130', 'Andrew', 'I will be playing in here soon.', '2021-08-05 10:27:33'),
(130, '0', 'Andrew', 'Hello, anyone interested in Mahomes ?', '2021-08-05 10:27:07'),
(129, '126', 'Hamza', 'Success', '2021-08-03 11:35:25'),
(128, '121', 'Hamza', 'No', '2021-08-03 11:34:33'),
(127, '126', 'Hamza', 'it will definitely become a fan favoritue ', '2021-08-03 11:33:58'),
(126, '0', 'Hamza', 'What is the future of AHJ?\n', '2021-08-03 11:33:28'),
(125, '121', 'Jarrett', 'Maybe Jets due to star players', '2021-08-03 11:28:57'),
(124, '104', 'Jarrett', 'on which subject?', '2021-08-03 11:28:30'),
(123, '116', 'Jarrett', 'Patriots', '2021-08-03 11:28:09'),
(122, '121', 'Jarrett', 'I know there are many leagues', '2021-08-03 11:27:27'),
(121, '0', 'Jarrett', 'Is AHJ the best league on the globe', '2021-08-03 11:26:53'),
(120, '116', 'Jarrett', 'i just know of Minnesota ', '2021-07-22 08:32:27'),
(119, '93', 'Jarrett', 'being new makes it better', '2021-07-22 08:32:01'),
(118, '104', 'Jarrett', 'get in touch, i can help', '2021-07-22 08:31:40'),
(117, '107', 'Jarrett', 'try windows 11', '2021-07-22 08:31:17'),
(115, '104', 'Hamza', 'i can do it for you. can i give you my contact.', '2021-07-22 08:23:22'),
(116, '0', 'Jarrett', 'What are your fav teams', '2021-07-22 08:30:58'),
(114, '99', 'Hamza', 'yes', '2021-07-22 08:22:33'),
(113, '95', 'Hamza', 'depends with personal prefference', '2021-07-22 08:20:50'),
(112, '93', 'Hamza', 'its fast', '2021-07-22 08:20:28'),
(111, '104', 'Jack', 'For which position', '2021-07-21 21:11:58'),
(110, '107', 'John', 'For which team', '2021-07-21 21:11:25'),
(109, '107', 'Jane', 'I also need Cook', '2021-07-21 21:10:38'),
(108, '107', 'Jemoh', 'Which one', '2021-07-21 21:09:55'),
(107, '0', 'Jarrett', 'I could use help', '2021-07-19 03:55:00'),
(106, '104', 'Jarrett', 'or any other name of your choice', '2021-07-19 03:54:39'),
(105, '104', 'Jarrett', 'The team title can be GOATS', '2021-07-19 03:54:15'),
(104, '0', 'Jarrett', 'Who can develop a good team for me?', '2021-07-19 03:53:31'),
(103, '99', 'Hamza', 'of what capacity', '2021-07-09 08:44:14'),
(102, '93', 'Hamza', 'enhanced security as compared to previous versions.', '2021-07-09 08:43:19'),
(101, '99', 'Jarrett', 'you can buy it at any computer shop', '2021-07-09 08:27:36'),
(100, '99', 'Hamza', 'But also the old version its okey', '2021-07-05 19:55:09'),
(99, '0', 'Hamza', 'True', '2021-07-05 19:54:50'),
(98, '95', 'Hamza', 'also Murray its also popular', '2021-07-05 19:54:01'),
(97, '95', 'Hamza', 'Saquon is so far the best', '2021-07-05 19:53:35'),
(96, '93', 'Nick', 'I agree', '2021-07-05 19:53:04'),
(95, '0', 'Nick', 'Who is the best RB?', '2021-07-05 19:52:22'),
(94, '93', 'Hamza', 'It looks more attractive', '2021-07-05 19:43:18'),
(93, '0', 'Hamza', 'What are some of the improved features of AHJ?', '2021-07-05 19:42:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
