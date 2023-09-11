-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 10:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `completion_date` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `description`, `due_date`, `completion_date`, `status`) VALUES
(18, 'Hello Sanju', '2023-08-02 18:00:00', '2023-08-02 20:30:01', 1),
(19, 'Hello World', '2023-08-23 18:00:00', '2023-08-02 20:30:26', 1),
(20, 'Hello world one', '2023-08-15 18:00:00', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `dob` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `dob`, `address`, `password`) VALUES
(17, 'Md Hasan Ali', 'hasancseiu16@gmail.com', 1738385467, '2023-07-10 18:00:00', 'Sukrabad, Dhanmondi', '$2y$10$Q0cyTXAxmdATcwN5Rje61.kaaa4RHkpPC.EvlSUsH74QMVSBBEzUu'),
(18, 'Md Hasan Ali', 'hasancseg16@gmail.com', 1738388467, '2023-07-25 18:00:00', 'Sukrabad, Dhanmondi', '$2y$10$1Ctoqu46JW7jfVXWF8j1QuqhxvdcyKd3hqOj89poIweHQaoikGsnm'),
(19, 'Sanjoy Kumar Biswas', 'sanjoy.se1996@gmail.com', 1720130615, '1996-09-14 18:00:00', '387  Village: Mahendropur; Post: Baniakandi-7010; Upazila/Thana: Kumarkhali ; District: Kushtia', '$2y$10$eFt.0hHecih3PNjXRs0/L.GKT8nVGVucDvGTvXM/vCd9AEk4T/iDu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
