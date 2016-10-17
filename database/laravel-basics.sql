-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2016 at 02:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-basics`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_10_06_162159_create_users_table', 1),
('2016_10_17_121311_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `name`, `email`, `password`, `remember_token`) VALUES
(1, '2016-10-15 11:52:42', '2016-10-15 11:52:42', 'zahid', 'emtiazzahid@gmail.com', '$2y$10$xvVxf3/CUYLK2x632Ow7kePo0093MM4OE5mlXBck0/HcZF4HvjQ92', NULL),
(2, '2016-10-15 13:26:08', '2016-10-15 13:26:08', 'antora', 'estiaknishat@gmail.com', '$2y$10$kUD5Ua.s4vOnUsKzYwCIo.0AfcKSe97C3y6XVmhL5vyklyX85Ev8W', NULL),
(3, '2016-10-15 13:55:26', '2016-10-15 13:55:26', 'zahid', 'emtiazzahid@gmail.com', '$2y$10$y7hhNc89lV3dwj5T.uueMeZAeJvZzICaPg.9OZs1EmjTEzyG95iFm', NULL),
(4, '2016-10-15 14:00:03', '2016-10-15 14:00:03', 'zahid', 'emtiazzahid@gmail.com', '$2y$10$kJrp8BcYu72lZSDAusCJ4u4YYGYg.k36nHefgGIFXqIkgnEGgWSD6', NULL),
(5, '2016-10-15 15:07:55', '2016-10-15 15:07:55', 'zahid', 'emtiazzahid@gmail.com', '11111', NULL),
(6, '2016-10-16 00:58:41', '2016-10-16 00:58:41', 'test2', 'imu@gmail.com', '22', NULL),
(7, '2016-10-16 13:35:12', '2016-10-17 05:38:14', 'test', 't@mail.com', '$2y$10$E0oNnA0GXxZcadiBWzLnleWQOR/4405MPi0rXzqU2PIf4uZYfv.Pe', 'dcN7WSI8lYnFS6mu1rxiqwTCoC1WZ6UvBewOw61GzsJxHYZbn5XYwtP7MuP4'),
(8, '2016-10-16 13:38:30', '2016-10-16 13:38:30', 'test2', 't@mail.com', '$2y$10$WLt4MXQEaTnedZ4y/Zd26ee2n/oxmVbplQX6k6O6ZglF0SmUqiibe', NULL),
(9, '2016-10-16 13:39:17', '2016-10-16 13:39:17', 'test2', 't@mail.com', '$2y$10$lP2PYPy0af7.tgSt2jT2x.eaQqO1SVHr5brPF2R.grhV1PQnMiWye', NULL),
(10, '2016-10-16 14:22:39', '2016-10-16 14:22:53', 'test2', 't2@mail.com', '$2y$10$MWKkgwd/ETMgcAKfjaZ5yO1MmNuYCJARvpTqbdyKN6YiJZpBCdL9G', 'Yex3ydrPkn3XqDVCefWSjLWBehJuYL6vSWRz9iugDffDkiD5GGzR85feiz8I');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
