-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 03:44 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `rdate` varchar(5) NOT NULL,
  `runtime` varchar(4) NOT NULL,
  `decription` varchar(100) NOT NULL,
  `viewers` int(10) DEFAULT 1,
  `imgpath` varchar(50) NOT NULL,
  `videopath` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `name`, `genre`, `rdate`, `runtime`, `decription`, `viewers`, `imgpath`, `videopath`) VALUES
(1, 'Spiderman homecoming', 'english', '2018', '110', 'Marvel Super Hero Movie', 16, 'Spider-man-homecoming.jpg', 'Spider-Man Homecoming.mp4'),
(2, 'The conjuring 2', 'english,fiction', '2015', '115', 'cursed family', 11, 'conjuring2.jpg', 'The Conjuring 2.mp4'),
(3, 'Avenger:Infinity wars ', 'english,fiction', '2018', '123', 'Collaboration of all marvel characters', 12, 'infinity war.jpg', 'Avengers Infinity War.mp4'),
(11, 'tiktok 001', 'tiktok', '2021', '2', 'Tiktok is a Video content platfrom. Funny videos are available there. This is Editing video.', 49, 'tiktok.jpg', 'tiktok.mp4'),
(12, 'vinny threate [song]', 'music', '2021', '4', 'Music Video powered by Vinny. Leatest Music', 3, 'vinnt.jpg', 'Viny Theatre.mp4'),
(15, 'make your day', 'tiktok', '2021', '2', 'Tiktok is a Video content platfrom. Funny videos are available there. This is Editing video.', 50, 'Make Your.jpg', 'Make Your Day.mp4'),
(17, 'kgf 2 - final chapter', 'hindi', '2021', '6', 'KGF 2 is south indian movie. Actress is Yash who perform a great deal.', 37, 'kgf2.jpg', 'KGF2.mp4'),
(20, 'wordpress complete a-z', 'web', '2021', '186', 'Wordpress complete tutorial in bangla language. Easy way to learn wordpress in few steps', 34, 'wordpress complete.jpg', 'WordPress Complete.mp4'),
(21, 'github project upload', 'cse', '2021', '34', 'GitHub Tutorial for upload project and sync project with team-member.', 28, 'git.jpg', 'Git Tutorial.mp4'),
(22, 'fryday 2018', 'hindi', '2018', '136', 'Fiday Full Movie Hindi, File type Mp4.', 61, 'fryday.jpg', 'FryDay 2018 Hindi.mp4'),
(24, 'cse course intro', 'cse', '2021', '15', 'CSE course details with proper explanation.', 67, 'cse.jpg', 'Into.mp4'),
(25, 'intoduction dbms', 'cse', '2021', '24', 'Database Introduction with proper explanation. DBMS is key in every system.', 19, 'dbms.jpg', 'Introduction to DBMSm.mp4'),
(26, 'operating system into', 'cse', '2021', '34', 'Operationg system is course. In this videos you can learn abou OS.', 45, 'os.jpg', 'Operating System.mp4'),
(27, 'intoduction java', 'cse', '2021', '12', 'Java complete beginer course for all cse students.', 31, 'java.png', 'Introduction to Java.mp4'),
(28, 'how to learn code', 'cse', '2021', '17', 'How to start coding with proper step. Coding tutorials.', 52, 'how learn.png', 'How to learn to code.mp4'),
(29, 'tomorrow 2019', 'animation', '2019', '25', 'Tomorrow a animated serise. Bangla deshi animated movie.', 2, 'tomorroe.jpg', 'TOMORROW.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(10) NOT NULL,
  `mid` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `rate_count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `mid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `username`, `passwd`, `name`, `phone`, `email`, `DOB`, `mid`) VALUES
(1, 'nofstudio@gmail.com', '1234', 'nof studio', '+8801781886507', 'nofstudio@gmail.com', '25/04/1998', 26),
(4, 'oleraj@gmail.com', '1234', 'Administrator', '8622849041', 'oleraj@gmail.com', '16/10/1995', 2),
(6, 'olerajmondol2522000@gmail.com', '1234', 'oleraj mondol', '01781886507', 'olerajmondol2522000@gmail.com', '14/08/1994', 2),
(7, 'Nuri@gmail.com', '1234', 'ishmoth aura', '45345453', 'Nuri@gmail.com', '17/11/1997', 17),
(8, 'olerajhossin@gmail.com', '1234', 'kathleen m murray', '01781886507', 'olerajhossin@gmail.com', '17/11/1998', 1),
(9, 'Feha@gmail.com', '1234', 'fahmida feha', '01676320406', 'Feha@gmail.com', '10/07/2000', 22),
(19, 'najmul@gmail.com', '12345', 'najmul hossen', '2734343', 'najmul@gmail.com', '2012-11-21', 15),
(20, 'xxxxxx@gmail.com', '1234', 'xxxxx yyyyyy', '454535', 'xxxxxx@gmail.com', '2021-11-18', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `mid` (`mid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `mid` (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user1` (`id`);

--
-- Constraints for table `user1`
--
ALTER TABLE `user1`
  ADD CONSTRAINT `user1_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
