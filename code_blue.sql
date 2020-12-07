-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 12:55 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_blue`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `check_login` (`un` VARCHAR(52), `pw` VARCHAR(52)) RETURNS INT(11) BEGIN
    if EXISTS (SELECT user_name FROM users WHERE un = user_name AND pw = users.password and role  like 'admin')
		then  return 1 ;
	elseif EXISTS (SELECT user_name FROM users WHERE un = user_name AND pw = users.password and role  like 'user')
		then return 2;
	elseif EXISTS (SELECT user_name FROM users WHERE un = user_name AND pw = users.password and role  like 'pendding')
		then return 3;
	else return 0;
    end if;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `announcment`
--

CREATE TABLE `announcment` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `announ_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `announcment_users`
--

CREATE TABLE `announcment_users` (
  `id` int(11) NOT NULL,
  `announ_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_opened` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin','pendding') DEFAULT 'pendding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `role`) VALUES
(1, 'ahmed', '123', 'admin'),
(2, 'mohamed', '123', 'user'),
(3, 'ali', '123', 'pendding');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcment`
--
ALTER TABLE `announcment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcment_users`
--
ALTER TABLE `announcment_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announ_id` (`announ_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcment`
--
ALTER TABLE `announcment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `announcment_users`
--
ALTER TABLE `announcment_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcment_users`
--
ALTER TABLE `announcment_users`
  ADD CONSTRAINT `announcment_users_ibfk_1` FOREIGN KEY (`announ_id`) REFERENCES `announcment` (`id`),
  ADD CONSTRAINT `announcment_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
