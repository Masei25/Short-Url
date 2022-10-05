-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 01:33 AM
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
-- Database: `short_url`
--

-- --------------------------------------------------------

--
-- Table structure for table `short_urls`
--

CREATE TABLE `short_urls` (
  `id` int(11) NOT NULL,
  `long_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_code` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `short_urls`
--

INSERT INTO `short_urls` (`id`, `long_url`, `short_code`, `created`) VALUES
(1, 'https://www.w3schools.com/php/php_form_url_email.asp', 'CwGjtHnVgiNRg6Cvkdpo', '2022-10-06 01:18:41'),
(2, 'https://www.tailwindcsscompone', 'CwGjtHnVgiNRg7eTodUi', '2022-10-06 01:18:59'),
(3, 'https://www.tailwindcsscomponess', 'CwGjtHnVgiNRg7erkPY0', '2022-10-06 01:19:41'),
(4, 'https://www.tailwindcsscomponess/pp', 'CwGjtHnVgiNRg46ahNgE', '2022-10-06 01:20:04'),
(5, 'https://www.tailwindcssco.you', 'CwGjtHnVgiNRg7a0wf9h', '2022-10-06 01:23:51'),
(6, 'https://en-gb.facebook.com/login.php', 'CwGjtHnVgiNRg9/vsKcf', '2022-10-06 01:32:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `short_urls`
--
ALTER TABLE `short_urls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `short_urls`
--
ALTER TABLE `short_urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
