-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2025 at 06:32 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alisya_family_salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `title_one`, `title_two`, `created_at`, `updated_at`) VALUES
(1, 'images/01JGM46E4CQ2YFF4DCPR3TVMHH.jpg', 'Smooth', 'Smoothing One Step', 'Smoothing Jepang', '2024-12-27 04:33:35', '2025-01-02 11:24:41'),
(2, 'images/01JGM482AXQCDMNTQ3WED063X6.jpg', 'Gunting Rambut', 'Hair Cut', 'Gunting Rambut + Cuci + Hair Tonic', '2024-12-27 04:33:35', '2025-01-02 11:25:35'),
(3, 'images/01JGM4A5MQB2TT2F536J9D66F1.jpg', 'Inaura', 'Hair Mask', 'Matrix', '2024-12-27 04:33:35', '2025-01-02 11:26:44'),
(4, 'images/01JGM4DC06BVBSD44R7MSC4J5Z.jpg', 'Creambath', 'Creambath Treatment', 'Keratin Treatment', '2024-12-27 04:33:35', '2025-01-02 11:28:28'),
(5, 'images/01JGM4BCNW5E31JWZ27GBCMZKJ.jpg', 'Highlight', 'Highlight', 'Balayage', '2024-12-27 04:33:35', '2025-01-02 11:27:23'),
(6, 'images/01JGM4F6ZVC93E3C4H9CXSKXV1.jpg', 'Bleaching', 'Full Bleach', 'Colouring No Bleach', '2024-12-27 04:33:35', '2025-01-02 11:29:29'),
(7, 'images/01JGM4GFA3XNQGMBTSJY2XBYZJ.jpg', 'Colouring', 'Colouring by Matrix / Ilvasto', 'Colouring by Loreal', '2024-12-27 04:33:35', '2025-01-02 11:30:10'),
(8, 'images/01JG0WW5KDF4TCBDN61ZCZNQRX.jpg', 'Face', 'Face Treatment', '', '2024-12-27 04:33:35', '2024-12-27 04:33:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
