-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 04:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `thought` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `user_name`, `email`, `thought`, `created`) VALUES
(9, 'rakesh', 'rakesh@gmail.com', '\"Happy rose day.\"', '2022-02-09 10:06:08'),
(10, 'saurabh', 'saurabh@gmail.com', '\"Old is gold.\"', '2022-02-08 10:06:38'),
(11, 'nandini', 'nandini@gmail.com', '\"Negative mind never give you positive life.\" ', '2022-02-08 10:08:01'),
(12, 'chetakshi', 'chetakshi@gmail.com', '\"Stay happy healthy.\"', '2022-02-08 10:09:41'),
(13, 'Mamta', 'mamta@gmail.com', '\"For acchive a bigg gole, set your bigg aim.\"', '2022-02-08 10:11:18'),
(14, 'avneet', 'avneet@gmail.com', 'f hjk jbkk kjblknl ,nl', '2022-02-11 10:03:41'),
(16, 'harshal', 'harshal@gmail.com', 'fh ygi g rdytfi', '2022-02-12 08:18:10'),
(17, 'mamta', 'mamta@gmail.com', 'dbf n', '2022-02-12 08:26:29'),
(18, 'rudra', 'rudra@gmail.com', 'sdcjashdvld dfjv ldfjvldfjdffg', '2022-02-15 12:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `token` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `dob`, `token`, `email`, `password`, `college_name`, `branch_name`, `Mobile`, `updated_at`, `created_at`) VALUES
(1, 'Nandini', 'kose', 'female', '2022-02-08', '', 'nandinikose@gmail.co', '12345678', 'Priyadarshini', 'electrical', '0', '0000-00-00 00:00:00', '2022-02-13 15:24:12'),
(13, 'chetakshi', 'khot', 'female', '2022-02-09', '', 'chetakshi@gmail.com', '78945612', 'bhagwati', 'electrical', '0', '0000-00-00 00:00:00', '2022-02-19 04:05:53'),
(14, 'gopal', 'padadhan', 'male', '2022-02-24', '', 'gopal@gmail.com', '5575776', 'Priyadarshini', 'computer', '0', '0000-00-00 00:00:00', '2022-02-22 11:39:18'),
(16, 'joti', 'motemate', 'male', '2022-03-11', 'RSnC3U6qmZTKxcngnxhZwxn7NMtihHRGt5ke2rJY', 'harshal@gmail.com', '$2y$10$1ph8.kqp0LCQMGNOIbKdyekbXadCS2M6CqQ9mvC0dWujF0qYE3QfC', 'bhagwati', 'electronics', '4578913578', '2022-03-02 04:35:30', '2022-03-02 04:35:30'),
(17, 'Gaurav', 'yande', 'male', '2022-03-24', 'RSnC3U6qmZTKxcngnxhZwxn7NMtihHRGt5ke2rJY', 'gaurav@gmail.com', '$2y$10$8sJZBUGQsjhgm0HpIi1DVuLMQJ/p6wOfMIS.tZTnrVriIfunOphOK', 'Priyadarshini', 'electronics', '4578913556', '2022-03-02 04:37:05', '2022-03-02 04:37:05'),
(18, 'saurabh', 'kuhikar', 'male', '2022-03-17', 'RSnC3U6qmZTKxcngnxhZwxn7NMtihHRGt5ke2rJY', 'saurabh@gmail.com', '$2y$10$w6BUQ/MEFyPZaNlzX3S.aeJwq2ntchN9N2TKF/..jXeuHQugDl4Sy', 'kdk', 'electronics', '4578913556', '2022-03-02 04:40:03', '2022-03-02 04:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `w3school`
--

CREATE TABLE `w3school` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `w3school`
--

INSERT INTO `w3school` (`id`, `firstname`, `lastname`, `email`, `created`) VALUES
(1, 'John', 'Doe', 'john@example.com', '2022-02-16 10:37:34'),
(3, 'nikki', '', '', '2022-02-18 09:24:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `w3school`
--
ALTER TABLE `w3school`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `w3school`
--
ALTER TABLE `w3school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
