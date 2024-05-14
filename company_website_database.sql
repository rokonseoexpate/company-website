-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2024 at 10:12 AM
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
-- Database: `php_admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_developments`
--

CREATE TABLE `app_developments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `app_developments`
--

INSERT INTO `app_developments` (`id`, `name`, `images`, `created_at`, `updated_at`) VALUES
(2, 'Facebook 2', '[\"../uploads/1715237437-istockphoto-1072652414-612x612.jpg\", \"../uploads/1715237437-istockphoto-1190909215-612x612.jpg\", \"../uploads/1715237437-istockphoto-910633906-612x612.jpg\", \"../uploads/1715237437-istockphoto-511991248-612x612.jpg\", \"../uploads/1715237437-istockphoto-1301455711-612x612.jpg\"]', '2024-05-09 06:00:47', '2024-05-09 06:00:47'),
(3, 'Amal Torres', '[\"../uploads/1715234477-three-39116_1280.webp\", \"../uploads/1715234477-8068017.png\", \"../uploads/1715234477-png-clipart-number-2-image-file-formats-text-thumbnail.png\"]', '2024-05-09 06:01:17', '2024-05-09 06:01:17'),
(4, 'Travel Booking', '[\"../uploads/1715659721-S0b4a3b80140f4a16907ce801eeecbb791.jpg_188x188.jpg_.webp\",\"../uploads/1715659721-seo_multivendor_ecommerce.test-EcommerceProductDetails.png\",\"../uploads/1715659737-10018.webp\",\"../uploads/1715659737-10028.webp\",\"../uploads/1715659737-10039.webp\",\"../uploads/1715659737-10049.webp\"]', '2024-05-14 04:08:41', '2024-05-14 04:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `title`, `description`, `image`, `alt_tag`, `alt_description`, `created_at`, `updated_at`) VALUES
(5, 'Award 2023', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">SEO Expate became the champion and won the National Mobile Application Award 2014 in the ‘Entertainment &amp; Lifestyle’ category from ICT Division of Bangladesh on 18th April, 2013.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">National Mobile Application Award was a unique program held for the first time in Bangladesh. 212 participants were in the same group for the competition across the country. SEO Expate won the competion and became the champion for developing innovative games.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">Winning the National Mobile Application Award SEO Expate showed the whole nation that they are capable of doing anything. It was a big achievement for SEO Expate which inspired its team to expand globally.</p>', '../uploads/award-2023-36846.png', NULL, NULL, '2024-05-08 03:59:13', '2024-05-08 05:30:46'),
(6, 'Award 2023', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">SEO Expate became the champion and won the National Mobile Application Award 2014 in the ‘Entertainment & Lifestyle’ category from ICT Division of Bangladesh on 18th April, 2013.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">National Mobile Application Award was a unique program held for the first time in Bangladesh. 212 participants were in the same group for the competition across the country. SEO Expate won the competion and became the champion for developing innovative games.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">Winning the National Mobile Application Award SEO Expate showed the whole nation that they are capable of doing anything. It was a big achievement for SEO Expate which inspired its team to expand globally.</p>', '../uploads/award-2023-93946.png', NULL, NULL, '2024-05-08 04:11:26', '2024-05-08 05:30:27'),
(7, 'FBCCI Body Member Award 2023-2025', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">SEO Expate became the champion and won the National Mobile Application Award 2014 in the ‘Entertainment & Lifestyle’ category from ICT Division of Bangladesh on 18th April, 2013.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">National Mobile Application Award was a unique program held for the first time in Bangladesh. 212 participants were in the same group for the competition across the country. SEO Expate won the competion and became the champion for developing innovative games.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">Winning the National Mobile Application Award SEO Expate showed the whole nation that they are capable of doing anything. It was a big achievement for SEO Expate which inspired its team to expand globally.</p>', '../uploads/fbcci-body-member-award-2023-2025-52920.png', NULL, NULL, '2024-05-08 04:11:43', '2024-05-08 05:30:10'),
(8, 'Smart Bangladesh Award 2023', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">SEO Expate became the champion and won the National Mobile Application Award 2014 in the ‘Entertainment &amp; Lifestyle’ category from ICT Division of Bangladesh on 18th April, 2013.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">National Mobile Application Award was a unique program held for the first time in Bangladesh. 212 participants were in the same group for the competition across the country. SEO Expate won the competion and became the champion for developing innovative games.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">Winning the National Mobile Application Award SEO Expate showed the whole nation that they are capable of doing anything. It was a big achievement for SEO Expate which inspired its team to expand globally.</p>', '../uploads/smart-bangladesh-award-2023-16137.png', NULL, NULL, '2024-05-08 04:12:01', '2024-05-08 05:29:53'),
(9, 'FBCCI Intro Smart Bangladesh Award 2023', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">SEO Expate became the champion and won the National Mobile Application Award 2014 in the ‘Entertainment & Lifestyle’ category from ICT Division of Bangladesh on 18th April, 2013.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">National Mobile Application Award was a unique program held for the first time in Bangladesh. 212 participants were in the same group for the competition across the country. SEO Expate won the competion and became the champion for developing innovative games.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">Winning the National Mobile Application Award SEO Expate showed the whole nation that they are capable of doing anything. It was a big achievement for SEO Expate which inspired its team to expand globally.</p>', '../uploads/fbcci-intro-smart-bangladesh-award-2023-66480.png', NULL, NULL, '2024-05-08 04:12:16', '2024-05-08 05:27:54'),
(10, 'Science Fair Award 2023', 'The Global Economics Award program identifies business enterprises that deliver best quality work and practice good culture towards their regional and global economies.\r\n\r\nThe Global Economics Award program identifies business enterprises that deliver best quality work and practice good culture towards their regional and global economies.\r\n\r\nSEO Expate fulfill all the requirements and recognized as winner of the Global Economic Award 2022 in technology category. The award added a new dimension to enhance the growth of SEO Expate.', '../uploads/science-fair-award-2023-36264.png', NULL, NULL, '2024-05-08 04:12:40', '2024-05-08 05:28:51'),
(11, 'Basis Soft Expo 2023', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">SEO Expate became the champion and won the National Mobile Application Award 2014 in the ‘Entertainment & Lifestyle’ category from ICT Division of Bangladesh on 18th April, 2013.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">National Mobile Application Award was a unique program held for the first time in Bangladesh. 212 participants were in the same group for the competition across the country. SEO Expate won the competion and became the champion for developing innovative games.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">Winning the National Mobile Application Award SEO Expate showed the whole nation that they are capable of doing anything. It was a big achievement for SEO Expate which inspired its team to expand globally.</p>', '../uploads/basis-soft-expo-2023-29409.png', NULL, NULL, '2024-05-08 04:12:56', '2024-05-08 05:28:19'),
(12, 'Digital Bangladesh Award 2023', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">The ICT DIvision of Bangladesh has awarded SEO Expate the Digital Bangladesh Award 2022 as the Best Software & Technology Company in the private institution category in recognition of its unique contribution to the ICT sector.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">Md. Mizanur Rahman, Founder of SEO Expate, received the award from Sheikh Hasina, Honorable Prime Minister of the People’s Republic of Bangladesh at the award giving ceremony at Bangabandhu International Conference Centre (BICC) in Dhaka, Bangladesh on Monday, 12th December 2023.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 18px; text-align: justify; line-height: 30px; font-family: tahoma; background-color: rgb(245, 245, 245);\">The ICT Division organized the event with the theme “Advanced Technology & Inclusive Development.”</p>', '../uploads/digital-bangladesh-award-2023-22097.png', NULL, NULL, '2024-05-08 04:13:12', '2024-05-08 05:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `page` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `page`, `title`, `description`, `image`, `alt_tag`, `alt_description`, `created_at`, `updated_at`) VALUES
(30, 'certificate', 'this  is certificate page banner', '<p>this is des sdfs</p>', '../uploads/this--is-certificate-page-banner-12521.webp', NULL, NULL, '2024-05-14 04:12:53', '2024-05-14 04:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_category_id` bigint DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `title`, `slug`, `type`, `short_description`, `description`, `image`, `alt_tag`, `alt_description`, `created_at`, `updated_at`) VALUES
(2, 4, 'International Women\'s Day', 'international-womens-day68454', NULL, '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '../uploads/international-women\'s-day-76684.jpg', NULL, NULL, '2024-05-07 10:24:10', '2024-05-07 10:58:52'),
(3, 4, 'Iftar Mahfil', 'iftar-mahfil55290', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '../uploads/iftar-mahfil29909-52384.jpg', NULL, NULL, '2024-05-07 11:01:23', '2024-05-07 11:02:54'),
(4, 4, 'Waz Mahfil', 'waz-mahfil52197', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '../uploads/waz-mahfil52197-79709.jpg', NULL, NULL, '2024-05-07 11:04:05', '2024-05-07 11:04:05'),
(5, 5, 'Blod Donet', 'blod-donet29346', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '../uploads/blod-donet29346-42434.jpg', NULL, NULL, '2024-05-07 11:15:48', '2024-05-07 11:15:48'),
(6, 5, 'Child Marriges', 'child-marriges21297', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '../uploads/child-marriges21297-36176.jpeg', NULL, NULL, '2024-05-07 11:16:13', '2024-05-07 11:16:13'),
(7, 5, 'Atim and gorib sikkhartir majhe taka bitoron', 'atim-and-gorib-sikkhartir-majhe-taka-bitoron54090', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '../uploads/atim-and-gorib-sikkhartir-majhe-taka-bitoron54090-48451.jpg', NULL, NULL, '2024-05-07 11:17:13', '2024-05-07 11:17:13'),
(8, 6, 'Iftar Mahfil', 'iftar-mahfil17662', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '../uploads/iftar-mahfil-55998.jpg', NULL, NULL, '2024-05-07 11:22:15', '2024-05-08 11:37:01'),
(9, 6, 'Udbodhoni Onusthan', 'udbodhoni-onusthan59640', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '../uploads/udbodhoni-onusthan59640-90746.jpg', NULL, NULL, '2024-05-07 11:22:33', '2024-05-07 11:22:33'),
(10, 6, 'Smart Bangladesh', 'smart-bangladesh26327', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '../uploads/smart-bangladesh26327-82490.jpg', NULL, NULL, '2024-05-07 11:22:55', '2024-05-07 11:22:55'),
(11, 6, 'Songbordhona Onusthan', 'songbordhona-onusthan48179', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '../uploads/songbordhona-onusthan48179-13798.jpg', NULL, NULL, '2024-05-07 11:23:47', '2024-05-07 11:23:47'),
(12, 5, 'Rerum dolorem facere', 'rerum-dolorem-facere32739', NULL, 'Fugit, sit, doloremq.g gd h', 'Sint, deserunt volup.df gfd gfd', '../uploads/rerum-dolorem-facere60847-14038.jpg', 'Do molestiae ex nequdf gfd g up', 'Nostrud magni aliquidf gdf gdf up', '2024-05-09 06:15:41', '2024-05-09 06:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Culture and Engagement', 'culture-and-engagement88876', '2024-05-07 08:55:35', '2024-05-07 10:19:23'),
(5, 'CSR', 'add-blog-category53498', '2024-05-07 08:55:40', '2024-05-07 08:55:40'),
(6, 'Event', 'add-blog-category76548', '2024-05-07 08:55:53', '2024-05-07 08:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_description` longtext COLLATE utf8mb4_unicode_ci,
  `map` longtext COLLATE utf8mb4_unicode_ci,
  `video_link` longtext COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `image`, `alt_tag`, `alt_description`, `map`, `video_link`, `address`, `created_at`, `updated_at`) VALUES
(16, 'Pirganj Branch (Rangpur)', 'SEO-Expate-Pirganj-Branch.jpg', '', '', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14414.504885475113!2d89.3151111!3d25.4173194!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fcdb007cf6dc07%3A0x51731e36c84f7c21!2sSEO%20Expate%20Bangladesh%20Limited%2C%20Pirganj%20Branch!5e0!3m2!1sen!2sbd!4v1714979239719!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:5px solid #fff;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '<iframe width=\"354\" height=\"313\" src=\"https://www.youtube.com/embed/5Ahe4uz3BrE\" title=\"Head Office | Bogura | SEO Expate Bangladesh Ltd\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'East side of Islami Bank S, B Plaza, Pirganj, Rangpur', '2024-05-11 06:04:16', '2024-05-11 06:04:16'),
(17, 'Palashbari Branch (Gaibandha)', 'SEO-Expate-Palashbari-Branch-Gaibandha-Branch--1-.jpg', '', '', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14428.664734005948!2d89.4150669!3d25.2986201!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd21739fac11a3%3A0x2fa35f2554560469!2sSEO%20Expate%20Bangladesh%20Ltd.%20(Palashbari%20Branch)!5e0!3m2!1sen!2sbd!4v1714979195140!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:5px solid #fff;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '<iframe width=\"354\" height=\"313\" src=\"https://www.youtube.com/embed/5Ahe4uz3BrE\" title=\"Head Office | Bogura | SEO Expate Bangladesh Ltd\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'Palashbari RDRS Bazar, SEO Expate Tower, Palashbari, Gaibandha – 5730, Bangladesh', '2024-05-11 06:05:11', '2024-05-11 06:05:11'),
(18, 'Ullapara Second Branch (Sirajganj)', 'SEO-Expate-Ullapara-2nd-Branch-1.jpg', '', '', ' ', '', 'Science College Road, Jhikira, Ullapara, Sirajganj – 6760, Bangladesh', '2024-05-11 06:30:27', '2024-05-11 06:30:27'),
(19, 'Ullapara Branch (Sirajganj)', 'SEO-Expate-Ullapara-Branch--1-.jpg', '', '', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14543.713951081956!2d89.5708516!3d24.3141294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fddbddce9d3cd7%3A0xd5bb934064df5339!2sSEO%20Expate%20Bangladesh%20Ltd%20(Ullapara%20Branch)!5e0!3m2!1sen!2sbd!4v1714979120073!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:5px solid #fff;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', 'Science College Road, Jhikira, Ullapara, Sirajganj – 6760, Bangladesh', '2024-05-11 06:31:00', '2024-05-11 06:31:00'),
(20, 'Second Branch (Naogaon)', 'SEO-Expate-Naogaon-Second-Branch.jpg', '', '', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14473.442307695166!2d88.7518353!3d24.9197835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb7fdf7a7630e3%3A0x79e9258f0c2e1a5!2sSEO%20Expate%20Bangladesh%20Ltd%20(%20Naogaon%20Branch)!5e0!3m2!1sen!2sbd!4v1714979058007!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:5px solid #fff;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', 'Mohadevpur Upazila Gate number 04, Hannan Tower 3rd floor, Mohadevpur, Naogaon – 6530, Bangladesh', '2024-05-11 06:31:38', '2024-05-11 06:31:38'),
(21, 'Naogaon Branch (Naogaon)', 'SEO-Expate-Naogaon-Branch-1.jpg', '', '', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14473.442307695166!2d88.7518353!3d24.9197835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb7fdf7a7630e3%3A0x79e9258f0c2e1a5!2sSEO%20Expate%20Bangladesh%20Ltd%20(%20Naogaon%20Branch)!5e0!3m2!1sen!2sbd!4v1714979058007!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:5px solid #fff;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', 'Mohadevpur Upazila Gate number 04, Hannan Tower 1st floor, Mohadevpur, Naogaon – 6530, Bangladesh', '2024-05-11 06:32:29', '2024-05-11 06:32:29'),
(22, 'Sherpur Branch (Bogura)', 'SEO-Expate-Sherpur-Branch-1--1-.jpg', '', '', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14503.173115076665!2d89.4193984!3d24.6652429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fdb3e28219a68d%3A0xe3fc6aa5cca9080a!2sSEO%20Expate%20Bangladesh%20Ltd.%20(Sherpur%20Branch)!5e0!3m2!1sen!2sbd!4v1714979318319!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:5px solid #fff;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', 'Sherpur Bus Stand, Sherpur Bazar, SEO Expate Tower, Sherpur, Bogura – 5840, Bangladesh', '2024-05-11 06:33:03', '2024-05-11 06:33:03'),
(23, 'Jalesharitola Branch (Bogura)', 'SEO-Expate-Jalesharitola-Branch.jpg', '', '', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14482.106951074984!2d89.3761003!3d24.8458533!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc55f311f064c9%3A0xcccf3b81a63cf3a2!2sSEO%20Expate%20Bangladesh%20Ltd%20(Jalesharitola%20Branch)!5e0!3m2!1sen!2sbd!4v1714979388336!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:5px solid #fff;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', 'Romena Afaz Complex, 2nd floor, Romena Afaz Road, Jalesharitola, Bogura -5800, Bangladesh', '2024-05-11 06:33:41', '2024-05-11 06:33:41'),
(24, 'Third Branch (Bogura)', 'SEO-Expate-3rd-Branch-1.jpg', '', '', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14490.648871887286!2d89.3980751!3d24.772768!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc531d5ea1640d%3A0xf19f6922f3bc02f!2sSEO%20Expate%20Bangladesh%20Ltd.%20(Second%20%26%20Third%20Branch)!5e0!3m2!1sen!2sbd!4v1714979275811!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:5px solid #fff;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', 'Floor 4 & 5, Mofazzal Tower, Majhira Bazar, Shahajanpur, Bogura-5801, Bangladesh', '2024-05-11 06:34:18', '2024-05-11 06:34:18'),
(25, 'Second Branch (Bogura)', 'SEO-Expate-2nd-Branch.jpg', '', '', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14490.648871887286!2d89.3980751!3d24.772768!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc531d5ea1640d%3A0xf19f6922f3bc02f!2sSEO%20Expate%20Bangladesh%20Ltd.%20(Second%20%26%20Third%20Branch)!5e0!3m2!1sen!2sbd!4v1714979275811!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:5px solid #fff;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', 'Floor 2, Mofazzal Tower, Majhira Bazar, Shahajanpur, Bogura-5801, Bangladesh', '2024-05-11 06:35:08', '2024-05-11 06:35:08'),
(26, 'Corporate Office (Dhaka)', 'SEO-Expate-Dhaka-Corporet-office.jpg', '', '', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14600.643503507843!2d90.4136593!3d23.8128777!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7007111992f%3A0x4a05864d5f212784!2sSEO%20Expate%20Bangladesh%20Ltd%20(Dhaka%20Corporate%20Branch)!5e0!3m2!1sen!2sbd!4v1714979353960!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:5px solid #fff;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', 'House – 386, Level-2, Road-6, Baridhara DOHS, Dhaka – 1212, Bangladesh', '2024-05-11 06:35:46', '2024-05-11 06:35:46'),
(27, 'Head Office (Bogura)', 'SEO-Expate-Head-Office.jpg', '', '', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14600.643503507843!2d90.4136593!3d23.8128777!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7007111992f%3A0x4a05864d5f212784!2sSEO%20Expate%20Bangladesh%20Ltd%20(Dhaka%20Corporate%20Branch)!5e0!3m2!1sen!2sbd!4v1714979353960!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:5px solid #fff;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', 'Floor 1, Kagjipara, SEO Expate Tower, Majhira, Shahajanpur, Bogura-5801, Bangladesh', '2024-05-11 06:36:20', '2024-05-11 06:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `title`, `description`, `image`, `alt_tag`, `alt_description`, `created_at`, `updated_at`) VALUES
(9, 'Digital Bangladesh Award 2023', 'The ICT DIvision of Bangladesh has awarded SEO Expate the Digital Bangladesh Award 2022 as the Best Software & Technology Company in the private institution category in recognition of its unique contribution to the ICT sector.\r\n\r\nMd. Mizanur Rahman, Founder of SEO Expate, received the award from Sheikh Hasina, Honorable Prime Minister of the People’s Republic of Bangladesh at the award giving ceremony at Bangabandhu International Conference Centre (BICC) in Dhaka, Bangladesh on Monday, 12th December 2023.\r\n\r\nThe ICT Division organized the event with the theme “Advanced Technology & Inclusive Development.”', '../uploads/40717.jpg', NULL, NULL, NULL, NULL),
(10, 'Basis Soft Expo 2023', 'SEO Expate became the champion and won the National Mobile Application Award 2014 in the ‘Entertainment & Lifestyle’ category from ICT Division of Bangladesh on 18th April, 2013.\r\n\r\nNational Mobile Application Award was a unique program held for the first time in Bangladesh. 212 participants were in the same group for the competition across the country. SEO Expate won the competion and became the champion for developing innovative games.\r\n\r\nWinning the National Mobile Application Award SEO Expate showed the whole nation that they are capable of doing anything. It was a big achievement for SEO Expate which inspired its team to expand globally.', '../uploads/37580.jpg', NULL, NULL, NULL, NULL),
(11, 'Science Fair Award 2023', 'The Global Economics Award program identifies business enterprises that deliver best quality work and practice good culture towards their regional and global economies.\r\n\r\nThe Global Economics Award program identifies business enterprises that deliver best quality work and practice good culture towards their regional and global economies.\r\n\r\nSEO Expate fulfill all the requirements and recognized as winner of the Global Economic Award 2022 in technology category. The award added a new dimension to enhance the growth of SEO Expate.', '../uploads/96296.jpg', NULL, NULL, NULL, NULL),
(12, ' FBCCI Intro Smart Bangladesh Award 2023', 'SEO Expate became the champion and won the National Mobile Application Award 2014 in the ‘Entertainment & Lifestyle’ category from ICT Division of Bangladesh on 18th April, 2013.\r\n\r\nNational Mobile Application Award was a unique program held for the first time in Bangladesh. 212 participants were in the same group for the competition across the country. SEO Expate won the competion and became the champion for developing innovative games.\r\n\r\nWinning the National Mobile Application Award SEO Expate showed the whole nation that they are capable of doing anything. It was a big achievement for SEO Expate which inspired its team to expand globally.', '../uploads/80461.jpg', NULL, NULL, NULL, NULL),
(13, 'Smart Bangladesh Award 2023', 'SEO Expate became the champion and won the National Mobile Application Award 2014 in the ‘Entertainment & Lifestyle’ category from ICT Division of Bangladesh on 18th April, 2013.\r\n\r\nNational Mobile Application Award was a unique program held for the first time in Bangladesh. 212 participants were in the same group for the competition across the country. SEO Expate won the competion and became the champion for developing innovative games.\r\n\r\nWinning the National Mobile Application Award SEO Expate showed the whole nation that they are capable of doing anything. It was a big achievement for SEO Expate which inspired its team to expand globally.', '../uploads/77583.jpg', NULL, NULL, NULL, NULL),
(14, 'FBCCI Body Member Award 2023-2025', 'SEO Expate became the champion and won the National Mobile Application Award 2014 in the ‘Entertainment & Lifestyle’ category from ICT Division of Bangladesh on 18th April, 2013.\r\n\r\nNational Mobile Application Award was a unique program held for the first time in Bangladesh. 212 participants were in the same group for the competition across the country. SEO Expate won the competion and became the champion for developing innovative games.\r\n\r\nWinning the National Mobile Application Award SEO Expate showed the whole nation that they are capable of doing anything. It was a big achievement for SEO Expate which inspired its team to expand globally.', '../uploads/61062.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stuf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `type`, `email`, `phone`, `stuf`, `company_name`, `company_website`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Merritt Massey', 'hire', 'huwof@mailinator.com', '+1 (717) 303-8263', '745', 'West and Tyler LLC', 'Monroe Johnston Traders', 'Dignissimos voluptas', NULL, NULL),
(2, 'Ava Vincent', 'hire', 'rycu@mailinator.com', '+1 (307) 331-3865', '776', 'Pena and Trevino Plc', 'House Le Plc', 'Alias similique impe', NULL, NULL),
(3, 'Jared Erickson', 'project', 'zoqajo@mailinator.com', '+1 (517) 448-2762', '', 'Shepherd Horne LLC', 'Haney and Hunt Associates', 'Quae dolore iusto al', NULL, NULL),
(4, 'Meredith Mcknight', 'partnership', 'pyweremexi@mailinator.com', '+1 (738) 959-3398', '', 'Guerrero Trevino Co', 'Rosario Pollard Trading', 'Sint eos exercitat', NULL, NULL),
(5, '', 'hire', '', '', '', '', '', '', NULL, NULL),
(6, 'Joy Harrington', 'hire', 'xyjavamuri@mailinator.com', '+1 (617) 434-5545', '417', 'Leonard Campos Inc', 'Mendoza Waters Trading', 'Corrupti quia sit e', NULL, NULL),
(7, 'Shelly Mays', 'project', 'weqacaqafu@mailinator.com', '+1 (963) 379-6274', '', 'Guthrie Whitney LLC', 'Marks and Horne Inc', 'Sapiente velit in pr', NULL, NULL),
(8, 'dfgdfg', 'hire', 'dfgdfg', 'dfgfdg', 'dfgdfg', '', '', 'dfgfdg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `image`, `alt_tag`, `alt_description`, `created_at`, `updated_at`) VALUES
(13, 'Finance Department', '../uploads/illustration-financial-concept_53876-37658.jpg', '', '', '2024-05-10 13:00:25', '2024-05-10 13:00:25'),
(14, 'Operation Department', '../uploads/61465747-operations-management-chart-with-keywords-and-icons-sketch.jpg', '', '', '2024-05-10 13:18:40', '2024-05-10 13:18:40'),
(15, 'Human Resources (HR) Department', '../uploads/HR_main_2-1.jpg', '', '', '2024-05-10 13:19:41', '2024-05-10 13:19:41'),
(16, 'Audit Department', '../uploads/audit-image-1-540x238-1.jpg', '', '', '2024-05-10 13:20:52', '2024-05-10 13:20:52'),
(17, 'Govt Project and Tender submission Department', '../uploads/tender-flow.png', '', '', '2024-05-10 13:21:53', '2024-05-10 13:21:53'),
(18, 'Customer Support Department', '../uploads/5fb10aac5da65965468139.jpg', '', '', '2024-05-10 14:22:13', '2024-05-10 14:22:13'),
(19, 'Research and Development Department', '../uploads/insights-2022-research-and-development-tax-credit-960x600-1.jpg', '', '', '2024-05-10 14:26:08', '2024-05-10 14:26:08'),
(20, 'Training Department', '../uploads/VS-Team-working-collaboratively-on-a-graphic-Header--1-.jpg', '', '', '2024-05-11 05:05:39', '2024-05-11 05:05:39'),
(21, 'IT Department', '../uploads/images.jpg', '', '', '2024-05-11 05:11:12', '2024-05-11 05:11:12'),
(22, 'Web and Software Development Department', '../uploads/Web-Development-Software.jpg', '', '', '2024-05-11 05:15:49', '2024-05-11 05:15:49'),
(23, 'SEO and Digital Marketing Department', '../uploads/SEO-Digital-Marketing.jpg', '', '', '2024-05-11 05:52:36', '2024-05-11 05:52:36'),
(24, 'Content Writing Department', '../uploads/1520156545851.jpg', '', '', '2024-05-11 05:52:47', '2024-05-11 05:52:47'),
(25, 'Graphics Design Department', '../uploads/11.jpg', '', '', '2024-05-11 05:53:02', '2024-05-11 05:53:02'),
(26, 'Graphics ( Direct Marketing Department )', '../uploads/55910139-direct-marketing-business-graphics-sign-concept-illustration-design-graphic.jpg', '', '', '2024-05-11 05:53:34', '2024-05-11 05:53:34'),
(27, 'Web ( Direct Marketing Department)', '../uploads/bentuk-direct-marketing-1.png', '', '', '2024-05-11 05:53:47', '2024-05-11 05:53:47'),
(28, 'WordPress Design Depertment', '../uploads/2b1ad69a63e6a81124e40cac3cd284c6.jpg', '', '', '2024-05-11 05:54:38', '2024-05-11 05:54:38'),
(29, 'Local Marketing Department', '../uploads/local-marketing-agency.jpg', '', '', '2024-05-11 05:54:49', '2024-05-11 05:54:49'),
(30, 'Event Management Department', '../uploads/event-management-strategy.png', '', '', '2024-05-11 05:54:58', '2024-05-11 05:54:58'),
(31, 'Office Maintenance Department', '../uploads/images-1.jpg', '', '', '2024-05-11 05:55:09', '2024-05-11 05:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ein_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `designation`, `branch_id`, `department_id`, `ein_no`, `team_no`, `phone`, `email`, `image`, `alt_tag`, `alt_description`, `created_at`, `updated_at`) VALUES
(37, 'Md. Abdur Razzak', 'CFO', '4', '13', '', '', '', '', '../uploads/Md.-Abdur-Razzak-CFO-135.jpg', '', '', '2024-05-10 13:43:28', '2024-05-10 13:43:28'),
(38, 'Md. Monirul lslam', 'Accountant', '4', '13', '', '', '', '', '../uploads/Md.-Monirul-lslam-Accountant-357.jpg', '', '', '2024-05-10 14:04:33', '2024-05-10 14:04:33'),
(39, 'Md. Jakaria Islam', 'CFO PS', '4', '13', '', '', '', '', '../uploads/Md.-Jakaria-Islam-CFO-PS-143-(1).png', '', '', '2024-05-10 14:05:54', '2024-05-10 14:05:54'),
(40, 'Md. Fazle Rabbi', ' Asst. Accountant', '4', '13', '', '', '', '', '../uploads/Md.-Fazle-Rabbi-Asst.-Accountant-156.jpg', '', '', '2024-05-10 14:08:40', '2024-05-10 14:08:40'),
(41, 'Santo Babu', 'Asst. Accountant', '4', '13', '', '', '', '', '../uploads/Santo-Babu-Asst.-Accountant-158.jpg', '', '', '2024-05-10 14:09:13', '2024-05-10 14:09:13'),
(42, 'Md. Faisal Hossain', 'Asst. Accountant', '4', '13', '', '', '', '', '../uploads/Md.-Faisal-Hossain-Asst.-Accountant-163.jpg', '', '', '2024-05-10 14:09:37', '2024-05-10 14:09:37'),
(43, 'Md. Rezwan (Rifat)', 'Operation Head', '11', '14', '', '', '', '', '../uploads/Md.-Rezwan--Rifat--Operation-Head-136.jpg', '', '', '2024-05-10 14:13:41', '2024-05-10 14:13:41'),
(44, 'Md. Robiul Hasan', 'Operation PS', '11', '14', '', '', '', '', '../uploads/Md.-Robiul-Hasan--Operation-PS--141.png', '', '', '2024-05-10 14:14:19', '2024-05-10 14:14:19'),
(45, 'Mst. Sima Aktar', 'Senior Assistant Operation', '11', '14', '', '', '', '', '../uploads/Mst.-Sima-Aktar-Senior-Assistant-Operation-153.jpg', '', '', '2024-05-10 14:14:43', '2024-05-10 14:14:43'),
(46, 'Mehedi Hasan', 'Assistant Operation', '11', '14', '', '', '', '', '../uploads/Mehedi-Hasan-Assistant-Operation-162.png', '', '', '2024-05-10 14:15:04', '2024-05-10 14:15:04'),
(47, 'Sadikur Rahman (Sadik)', 'Assistant Operation', '11', '14', '', '', '', '', '../uploads/Sadikur-Rahman-Sadik-Assistant-Operation-370.jpg', '', '', '2024-05-10 14:15:28', '2024-05-10 14:15:28'),
(48, 'Hasan Mahmud', 'HR PS', '11', '15', '', '', '', '', '../uploads/Hasan-Mahmud-HR-PS-160.jpg', '', '', '2024-05-10 14:16:56', '2024-05-10 14:16:56'),
(49, 'Md. Yesin Ali', 'Senior Assistant HR', '11', '15', '', '', '', '', '../uploads/Md.-Yesin-Ali-Senior-Assistant-HR-152.png', '', '', '2024-05-10 14:17:20', '2024-05-10 14:17:20'),
(50, 'Mst. Monira Khatun', 'Assistant HR', '11', '15', '', '', '', '', '../uploads/Mst.Monira-Khatun-Assistant-HR-220.jpg', '', '', '2024-05-10 14:17:40', '2024-05-10 14:17:40'),
(51, 'Md.Shakhawat Hossain', 'Assistant HR', '11', '15', '', '', '', '', '../uploads/Md.Shakhawat-Hossain-Assistant-HR-197.jpeg', '', '', '2024-05-10 14:17:59', '2024-05-10 14:17:59'),
(52, 'Abu Rayhan', 'Assistant HR', '11', '15', '', '', '', '', '../uploads/Abu-Rayhan-Assistant-HR-670.jpeg', '', '', '2024-05-10 14:18:18', '2024-05-10 14:18:18'),
(53, 'Mosaraf Hossain', 'Head of Audit', '11', '16', '', '', '', '', '../uploads/Mosaraf-Hossain-Head-of-Audit-620.png', '', '', '2024-05-10 14:18:40', '2024-05-10 14:18:40'),
(54, 'Mst. Razia Sultana', 'Auditor Incharge', '11', '16', '', '', '', '', '../uploads/Mst.-Razia-Sultana--Auditor-Incharge--149.jpg', '', '', '2024-05-10 14:19:01', '2024-05-10 14:19:01'),
(55, 'Sharmin Akter', 'Additional Incharge', '11', '16', '', '', '', '', '../uploads/Sharmin-Akter-Additional-Incharge-352.png', '', '', '2024-05-10 14:19:22', '2024-05-10 14:19:22'),
(56, 'Shammi Akter', 'Head of Audit PS', '11', '16', '', '', '', '', '../uploads/Shammi-Akter-Head-of-Audit-PS-147.jpg', '', '', '2024-05-10 14:19:46', '2024-05-10 14:19:46'),
(57, 'Md. Abdullah Al Amin', 'Auditor', '11', '16', '', '', '', '', '../uploads/Md.-Abdullah-Al-Amin-Auditor-427.png', '', '', '2024-05-10 14:20:16', '2024-05-10 14:20:16'),
(58, 'Md. Arman Ali', 'Auditor', '11', '16', '', '', '', '', '../uploads/Md.-Arman-Ali-Auditor-212.jpg', '', '', '2024-05-10 14:20:40', '2024-05-10 14:20:40'),
(59, 'Atiqur Rahman', 'Project Director', '11', '17', '', '', '', '', '../uploads/Atiqur-Rahman-Project-Director-401.jpg', '', '', '2024-05-10 14:21:03', '2024-05-10 14:21:03'),
(60, 'Jisan Al Mahmud Ornob', 'Proposal Writer', '11', '17', '', '', '', '', '../uploads/Jisan-Al-Mahmud-Ornob-Proposal-Writer-657.png', '', '', '2024-05-10 14:21:26', '2024-05-10 14:21:26'),
(61, 'Sadia Afrin', 'CRM', '11', '18', '', '', '', '', '../uploads/Sadia-Afrin-CRM-170.jpg', '', '', '2024-05-10 14:22:48', '2024-05-10 14:22:48'),
(62, 'Fariha Nawrin', 'Customer Support Team Incharge', '11', '18', '', '', '', '', '../uploads/Fariha-Nawrin-Customer-Support-Team-Incharge-482.jpg', '', '', '2024-05-10 14:23:39', '2024-05-10 14:23:39'),
(63, 'Mst. Sumaiya Akter', 'CRM PS', '11', '18', '', '', '', '', '../uploads/Mst.-Sumaiya-Akter-CRM-PS-104.jpg', '', '', '2024-05-10 14:24:12', '2024-05-10 14:24:12'),
(64, 'Tasrima Yeasmin', 'Customer Support Specialist', '11', '18', '', '', '', '', '../uploads/Tasrima-Yeasmin--Customer-Support-Specialist-634.png', '', '', '2024-05-10 14:24:36', '2024-05-10 14:24:36'),
(65, 'Subah Tasnim', 'Customer Support Specialist', '11', '18', '', '', '', '', '../uploads/Subah-Tasnim-Customer-Support-Specialist-635.png', '', '', '2024-05-10 14:24:54', '2024-05-10 14:24:54'),
(66, 'Susmita Karmokar', 'Customer Support Specialist', '11', '18', '', '', '', '', '../uploads/Susmita-Karmokar-Customer-Support-Specialist-637.png', '', '', '2024-05-10 14:25:12', '2024-05-10 14:25:12'),
(67, 'Md. Anikuzzaman', 'Customer Support Specialist', '11', '18', '', '', '', '', '../uploads/Md.Anikuzzaman--Customer-Support-Specialist-630.jpeg', '', '', '2024-05-10 14:25:37', '2024-05-10 14:25:37'),
(68, 'Shakil Ahmmed', 'CEO', '11', '19', '', '', '', '', '../uploads/Shakil-Ahmmed-CEO-189.jpg', '', '', '2024-05-10 14:26:35', '2024-05-10 14:26:35'),
(69, 'ATM. Meshkat Hasan', 'Head Of Web Developer', '11', '19', '', '', '', '', '../uploads/ATM.-Meshkat-Hasan-Head-Of-Web-Developer-266.png', '', '', '2024-05-10 14:26:53', '2024-05-10 14:26:53'),
(70, 'Md. Rokunuzzaman', 'Web Developer', '11', '19', '', '', '', '', '../uploads/Md.Rokunuzzaman-Web-Developer-626.png', '', '', '2024-05-10 14:27:44', '2024-05-10 14:27:44'),
(71, 'Md. Tusar Molla', 'Flutter Developer', '11', '19', '', '', '', '', '../uploads/Md.-Tusar-Molla-Flutter-Developer-666.png', '', '', '2024-05-10 14:28:35', '2024-05-10 14:28:35'),
(72, 'Md. Anikuzzaman', 'Customer Support Specialist', '11', '19', '', '', '', '', '../uploads/Md.Anikuzzaman--Customer-Support-Specialist-630.jpeg', '', '', '2024-05-10 14:28:53', '2024-05-10 14:28:53'),
(73, 'Md. Asaduzzaman', 'Content Writer', '11', '19', '', '', '', '', '../uploads/Md.-Asaduzzaman-Content-Writer-629.png', '', '', '2024-05-11 05:04:04', '2024-05-11 05:04:04'),
(74, 'Omar Faruk', 'Head Of Trainer', '11', '19', '', '', '', '', '../uploads/Omar-Faruk-Head-Of-Trainer-256.jpg', '', '', '2024-05-11 05:04:29', '2024-05-11 05:04:29'),
(75, 'Md. Talha Jubaier Towhid', 'Content Writer Incharge', '11', '19', '', '', '', '', '../uploads/Md.-Talha-Jubaier-Towhid-Content-Writer--Incharge-486.png', '', '', '2024-05-11 05:04:47', '2024-05-11 05:04:47'),
(76, 'Fariha Nawrin', 'Customer Support Team Incharge', '11', '19', '', '', '', '', '../uploads/Fariha-Nawrin-Customer-Support-Team-Incharge-482--1-.jpg', '', '', '2024-05-11 05:05:04', '2024-05-11 05:05:04'),
(77, 'Omar Faruk', 'Head Of Trainer', '11', '20', '', '', '', '', '../uploads/Omar-Faruk-Head-Of-Trainer-256.jpg', '', '', '2024-05-11 05:05:58', '2024-05-11 05:05:58'),
(78, 'Mst. Sharmin Akter', 'Assistant Traniner', '11', '20', '', '', '', '', '../uploads/Mst.-Sharmin-Akter-Assistant-Traniner-150.jpg', '', '', '2024-05-11 05:06:19', '2024-05-11 05:06:19'),
(79, 'Nadim Mahmud', 'Assistant Traniner', '11', '20', '', '', '', '', '../uploads/Nadim-Mahmud-Assistant-Traniner-159.jpg', '', '', '2024-05-11 05:06:47', '2024-05-11 05:06:47'),
(80, 'Md. Rabbi Hossain', 'CTO', '11', '21', '', '', '', '', '../uploads/Md.-Rabbi-Hossain-CTO-137.jpg', '', '', '2024-05-11 05:11:43', '2024-05-11 05:11:43'),
(81, 'Nur Mohammad', 'IT Specialist', '11', '21', '', '', '', '', '../uploads/Nur-Mohammad-IT-Specialist-356.jpg', '', '', '2024-05-11 05:13:08', '2024-05-11 05:13:08'),
(82, 'Md. Naim Hasan', 'Assistant IT Hardware', '11', '21', '', '', '', '', '../uploads/Md.-Naim-Hasan-Assistant-IT-Hardware--274.jpg', '', '', '2024-05-11 05:13:38', '2024-05-11 05:13:38'),
(83, 'Rajia Sultana', 'CTO PS', '11', '21', '', '', '', '', '../uploads/Rajia-Sultana-CTO-PS-102.jpg', '', '', '2024-05-11 05:14:01', '2024-05-11 05:14:01'),
(84, 'ATM. Meshkat Hasan', 'Head Of Web Developer', '11', '22', '', '', '', '', '../uploads/ATM.-Meshkat-Hasan-Head-Of-Web-Developer-266.png', '', '', '2024-05-11 05:16:20', '2024-05-11 05:16:20'),
(85, 'Md. Rokunuzzaman', 'Web Developer', '11', '22', '', '', '', '', '../uploads/Md.Rokunuzzaman-Web-Developer-626.png', '', '', '2024-05-11 05:16:39', '2024-05-11 05:16:39'),
(86, 'Shamim Reza', 'Web Developer', '11', '22', '', '', '', '', '../uploads/Shamim-Reza-Web-Developer-555.png', '', '', '2024-05-11 05:17:11', '2024-05-11 05:17:11'),
(87, 'Durjay Ghosh', 'Web Developer', '11', '22', '', '', '', '', '../uploads/Durjay-Ghosh-Web-Developer-474.jpg', '', '', '2024-05-11 05:17:32', '2024-05-11 05:17:32'),
(88, 'Maksuda Akter', 'Web Developer', '11', '22', '', '', '', '', '../uploads/Maksuda-Akter-Web-Developer-471.png', '', '', '2024-05-11 05:17:51', '2024-05-11 05:17:51'),
(89, 'Nahin Fardous Badhon', 'WordPress Developer', '11', '22', '', '', '', '', '../uploads/Nahin-Fardous-Badhon-WordPress-Developer-398.png', '', '', '2024-05-11 05:18:08', '2024-05-11 05:18:08'),
(90, 'Md. Tusar Molla', 'Flutter Developer', '25', '22', '', '', '', '', '../uploads/Md.-Tusar-Molla-Flutter-Developer-666--1-.png', '', '', '2024-05-11 05:18:29', '2024-05-11 05:18:29'),
(91, 'Afrin Sultana', 'Junior Web Developer', '11', '22', '', '', '', '', '../uploads/Afrin-Sultana-Junior-Web-Developer-667.jpg', '', '', '2024-05-11 05:20:26', '2024-05-11 05:20:26'),
(92, 'Eftakhar Mahmud Shikat', 'Junior Web Developer', '11', '22', '', '', '', '', '../uploads/Eftakhar-Mahmud-Shikat-Junior-Web-Developer-668.jpg', '', '', '2024-05-11 05:20:48', '2024-05-11 05:20:48'),
(93, 'Md. Ali Hasan', 'Junior Web Developer', '11', '22', '', '', '', '', '../uploads/Md.-Ali-Hasan-Junior-Web-Developer-669.png', '', '', '2024-05-11 05:21:12', '2024-05-11 05:21:12'),
(94, 'Md.Shanto Hossain', 'Junior Web Developer', '11', '22', '', '', '', '', '../uploads/Md.-Shanto-Hossain-Junior-Web-Developer-713.png', '', '', '2024-05-11 05:21:36', '2024-05-11 05:21:36'),
(95, 'Md. Maksud Bhuiyan', 'Junior Web Developer', '11', '22', '', '', '', '', '../uploads/Md.-Maksud-Bhuiyan--Junior-Developer--624.png', '', '', '2024-05-11 05:21:56', '2024-05-11 05:21:56'),
(96, 'Md.Tanvir Hashan Nahid', 'Junior Web Developer', '11', '22', '', '', '', '', '../uploads/Md.Tanvir-Hashan-Nahid-Junior-Developer--625.jpg', '', '', '2024-05-11 05:22:17', '2024-05-11 05:22:17'),
(97, 'Donald Jerry Corraya', 'Junior Web Develope', '11', '22', '', '', '', '', '../uploads/Donald-Jerry-Corraya-Junior-Web-Developer-628.jpeg', '', '', '2024-05-11 05:22:36', '2024-05-11 05:22:36'),
(98, 'Mehedi Hasan', 'Assistant Traniner', '11', '20', '', '', '', '', '../uploads/Mehedi-Hasan-Assistant-Traniner-353.jpg', '', '', '2024-05-11 05:24:29', '2024-05-11 05:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `featured_youtubes`
--

CREATE TABLE `featured_youtubes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `sort_by` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_youtubes`
--

INSERT INTO `featured_youtubes` (`id`, `title`, `link`, `sort_by`, `created_at`, `updated_at`) VALUES
(5, 'ডিজিটাল বাংলাদেশ একটি প্রত্যয় একটি স্বপ্ন আর সেটাই বাস্তবায়ন করেছে  ', 'https://www.youtube.com/embed/ha2rO-rjLNA?si=wonWf8QZWF1YQawf', '1', '2024-05-07 08:48:11', '2024-05-07 08:48:11'),
(6, 'School Management Mobile App | Bangla TV News | 21 Sep 22', 'https://www.youtube.com/embed/bSYexSp8Ybs?si=RIss4wWbk_YONtYm', '2', '2024-05-07 08:48:39', '2024-05-07 08:48:39'),
(7, 'ডিজিটাল বাংলাদেশ গড়ার লক্ষে অবিরত কাজ করে যাচ্ছে SEO Expate Bangladesh Ltd.', 'https://www.youtube.com/embed/EIXp39hWU2w?si=Wa3a30NuN4rrhHOF', '3', '2024-05-07 08:49:39', '2024-05-07 08:49:39'),
(8, 'জাতীয় কম্পিউটার প্রশিক্ষন ও গবেষণা কেন্দ্রের পরিচালককে SEO Expate Bangladesh Ltd এর সংবর্ধনা।', 'https://www.youtube.com/embed/Inx2v2z7G0Q?si=iiR08XJOOmD0-fQU', '4', '2024-05-07 08:59:37', '2024-05-07 08:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `free_trials`
--

CREATE TABLE `free_trials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `image_file_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `free_trials`
--

INSERT INTO `free_trials` (`id`, `name`, `company_name`, `company_website`, `phone`, `email`, `address`, `service_type`, `files`, `image_file_link`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Slade', 'Kane and Vasquez Plc', 'Higgins and Harper Associates', '+1 (118) 772-6816', 'xical@mailinator.com', 'Non modi culpa nulla', 'E-Commerce Photo Editing', '[\"uploads/Levels.pdf\", \"uploads/three-39116_1280.webp\", \"uploads/8068017.png\", \"uploads/png-clipart-number-2-image-file-formats-text-thumbnail.png\"]', 'Soluta ducimus anim', 'Ut quos blanditiis d', NULL, NULL),
(2, 'Darryl', 'Russell and Lang Inc', 'Lott and Trevino Associates', '+1 (479) 411-8274', 'dumosiv@mailinator.com', 'Nam dolor ipsum eos', 'Shadow Making', '[\"uploads/Levels.pdf\", \"uploads/three-39116_1280.webp\", \"uploads/8068017.png\", \"uploads/png-clipart-number-2-image-file-formats-text-thumbnail.png\"]', 'Ut nobis dignissimos', 'Excepturi rerum sunt', NULL, NULL),
(3, 'Ciara', 'Ramirez Garner Traders', 'Vega Hendrix Co', '+1 (204) 916-3874', 'ryses@mailinator.com', 'Nisi delectus qui e', 'Photo Retouching', '[\"uploads/1714993617-Levels.pdf\", \"uploads/1714993617-three-39116_1280.webp\", \"uploads/1714993617-8068017.png\", \"uploads/1714993617-png-clipart-number-2-image-file-formats-text-thumbnail.png\"]', 'Nesciunt explicabo', 'Voluptate alias reic', NULL, NULL),
(4, 'Olga', 'Camacho Pierce Traders', 'Parker and Reid Associates', '+1 (861) 633-4681', 'bypufih@mailinator.com', 'Quis accusantium sed', 'Color Correction', '[\"uploads/1714994526-20240430110044_png-clipart-number-2-image-file-formats-text-thumbnail.png\"]', 'Voluptas sequi conse', 'Voluptas non iste in', '2024-05-06 11:22:06', '2024-05-06 11:22:06'),
(5, 'James', 'Greer and Norman Co', 'Mitchell and Rasmussen Associates', '+1 (503) 747-1314', 'lafefi@mailinator.com', 'Sequi ut est ut odio', 'E-Commerce Photo Editing', '[\"uploads/1714994542-20240430110044_png-clipart-number-2-image-file-formats-text-thumbnail.png\"]', 'Voluptates mollitia ', 'Accusantium sint con', '2024-05-06 11:22:22', '2024-05-06 11:22:22'),
(6, 'Jonah', 'Guzman Macdonald Associates', 'Deleon and Merrill Inc', '+1 (358) 981-7112', 'wawy@mailinator.com', 'Et facilis inventore', 'Clipping Path', '[\"uploads/1714994704-Payment-Gateways.pdf\"]', 'Facilis alias tempor', 'Delectus nemo ipsa', '2024-05-06 11:25:04', '2024-05-06 11:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `get_quotes`
--

CREATE TABLE `get_quotes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `image_file_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci,
  `title_tagline` longtext COLLATE utf8mb4_unicode_ci,
  `title_tagline_after` longtext COLLATE utf8mb4_unicode_ci,
  `title_tagline_after_details` longtext COLLATE utf8mb4_unicode_ci,
  `hero_button_link` longtext COLLATE utf8mb4_unicode_ci,
  `accelerating_title` longtext COLLATE utf8mb4_unicode_ci,
  `accelerating_year` longtext COLLATE utf8mb4_unicode_ci,
  `accelerating_details` longtext COLLATE utf8mb4_unicode_ci,
  `accelerating_image` longtext COLLATE utf8mb4_unicode_ci,
  `accelerating_image_alt_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accelerating_image_alt_description` longtext COLLATE utf8mb4_unicode_ci,
  `accelerating_button_link` longtext COLLATE utf8mb4_unicode_ci,
  `journey_title` longtext COLLATE utf8mb4_unicode_ci,
  `journey_title_tagline` longtext COLLATE utf8mb4_unicode_ci,
  `journey_title_details` longtext COLLATE utf8mb4_unicode_ci,
  `overview_success` longtext COLLATE utf8mb4_unicode_ci,
  `overview_success_details` longtext COLLATE utf8mb4_unicode_ci,
  `great_success` longtext COLLATE utf8mb4_unicode_ci,
  `great_success_details` longtext COLLATE utf8mb4_unicode_ci,
  `introduction_title` longtext COLLATE utf8mb4_unicode_ci,
  `introduction_title_tagline` longtext COLLATE utf8mb4_unicode_ci,
  `introduction_details` longtext COLLATE utf8mb4_unicode_ci,
  `introduction_year` longtext COLLATE utf8mb4_unicode_ci,
  `introduction_country` longtext COLLATE utf8mb4_unicode_ci,
  `introduction_projects` longtext COLLATE utf8mb4_unicode_ci,
  `introduction_clients` longtext COLLATE utf8mb4_unicode_ci,
  `customers_title` longtext COLLATE utf8mb4_unicode_ci,
  `customers_details` longtext COLLATE utf8mb4_unicode_ci,
  `highlighted_title` longtext COLLATE utf8mb4_unicode_ci,
  `highlighted_details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `title`, `title_tagline`, `title_tagline_after`, `title_tagline_after_details`, `hero_button_link`, `accelerating_title`, `accelerating_year`, `accelerating_details`, `accelerating_image`, `accelerating_image_alt_text`, `accelerating_image_alt_description`, `accelerating_button_link`, `journey_title`, `journey_title_tagline`, `journey_title_details`, `overview_success`, `overview_success_details`, `great_success`, `great_success_details`, `introduction_title`, `introduction_title_tagline`, `introduction_details`, `introduction_year`, `introduction_country`, `introduction_projects`, `introduction_clients`, `customers_title`, `customers_details`, `highlighted_title`, `highlighted_details`, `created_at`, `updated_at`) VALUES
(1, 'History', 'of SEO Expate', 'To the Endless Possibilities', 'The journey of SEO Expate started in 2013. Riseup Labs has provided technology solutions to global businesses for over 10 years. It has been established as a next-generation global IT service and technology solution provider company to help enterprises reimagine their business and navigate digital transformation. Let’s explore our long history of success!', 'https://seoexpate.com/', 'Accelerating Innovation', 'Since 2013', 'The year 2013. A great Information Technology platform was born with a team of genius minds. From the beginning of our journey, SEO Expate has championed in every step by supporting new and better ideas to reach the next level.\r\n\r\nIn the journey of SEO Expate, it has become a major technology solution provider for brands like UNICEF Bangladesh, Robi Axiata Limited, BBC Media Action, Ministry of Women and Children Affairs, ICT Division and many large corporations globally.', '../uploads/awardd.png', ' fdgdf gdf', '                                        value=\"<p>df gdf dfg fdg df g</p>\"\r\n                                        ', 'https://seoexpate.com/', 'Timeline Of Our', 'Successful Journey', 'SEO Expate Bangladesh Ltd. started the journey in Game Development and after a successful journey, we have established as a next-generation globnal IT service and technology solutions provider company. Explore our journey of success since 2009.', 'Overview of SEO Expate Success', 'SEO Expate is an ISO-certified leading technology solution and next-generation global IT services provider that helps enterprises reimagine their business and navigate digital transformation. SEO Expate won the Digital Bangladesh Award 2022 from the ICT Division of Bangladesh as the best technology company in the private sector for using emerging technologies and its unique contribution to the Information Technology Sector.\r\n<br>\r\nWith over 10 years of experience managing 700+ projects and working with global enterprises, like – UNICEF, UNDP, USAID, FAO, WHO, ATEC, BBC, Fhi360, Axiata, Murka, Safe-Guard, Swiss Marketing Systems, we are expertly steering our clients through their digital journey.\r\n<br>\r\nExplore the best moments and achievements of SEO Expate throughout the last era.', 'Our Great Start', 'Successful Solutions Developed by SEO Expate in the Last Era. We have started our journey with the game Tap Tap Ants, which has millions of downloads in the App Store and received the top-ranking position worldwide. Explore more solutions developed by SEO Expate throughout its journey.', 'A Short Introduction to Our Approach', 'Delivering IT Solutions Globally', 'In addition to creating a stress-free and sustainable IT environment, SEO Expate Bangladesh Ltd. produces outcomes that help our clients stay ahead of the competition. By utilizing the newest and most widely used technologies, our IT specialists continuously deliver user-centric IT solutions that are customized to the needs of the business. We have been assisting clients all over the world to boost engagement, sales, and conversions for more than ten years. Take a peek at the reliable numbers!', '10', '25', '150', '75', 'Our Reliable Customers and Associates', 'SEO Expate Bangladesh Ltd. takes great pride in collaborating with businesses, firms, service providers, corporations, government departments, and other organizations as a top information technology company. Here take a look at some of the top companies and institutions that SEO Expate Bangladesh Ltd. has already worked with.', 'We are Highlighted On', 'In this category, SEO Expate Bangladesh Ltd. stands out as the most popular in the first place. Numerous local and international (offline and online) TV networks, newspapers, journals, TV channels, and other well-known platforms have highlighted our imaginative and inventive works! Also, we are one of the most followed companies on various social media platforms. Again, we are going like a bullet train in other media as well.', '2024-05-06 05:40:38', '2024-05-05 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `history_galleries`
--

CREATE TABLE `history_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `image_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=overview_success, 2=customers_associates, 3=Highlighted, 4=Achievements',
  `image` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `short_title` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_galleries`
--

INSERT INTO `history_galleries` (`id`, `image_type`, `image`, `title`, `short_title`, `created_at`, `updated_at`, `alt_tag`, `alt_description`) VALUES
(3, '3', '../uploads/News--1-.jpg', 'Mukto Sokal', 'optional', '2024-05-07 09:21:16', '2024-05-07 09:21:16', NULL, NULL),
(4, '3', '../uploads/News--1-.PNG', 'korotoa', 'kortoa', '2024-05-07 09:21:59', '2024-05-07 09:21:59', NULL, NULL),
(5, '3', '../uploads/News--2-.jpg', 'daily Bangladesh', 'daily Bangladesh', '2024-05-07 09:22:29', '2024-05-07 09:22:29', NULL, NULL),
(6, '3', '../uploads/News--4-.jpg', 'Chandni Bazar', 'Chandni Bazar', '2024-05-07 09:23:06', '2024-05-07 09:23:06', NULL, NULL),
(7, '4', '../uploads/04.png', 'Basis Soft Expo 2023', 'Exhibitor', '2024-05-07 11:11:22', '2024-05-07 11:11:22', NULL, NULL),
(8, '4', '../uploads/03.png', 'Science Fair 20XX', 'Science Fair', '2024-05-07 11:13:30', '2024-05-07 11:13:30', NULL, NULL),
(9, '4', '../uploads/1.png', 'Digital Smart Bangladesh Award 2023', 'Winner', '2024-05-07 11:14:19', '2024-05-07 11:14:19', NULL, NULL),
(10, '4', '../uploads/07.png', ' FBCCI Intro Smart Bangladesh', 'FBCCI ', '2024-05-07 11:15:05', '2024-05-07 11:15:05', NULL, NULL),
(12, '2', '../uploads/slide2.png', 'Customers and Associates slider 2', 'Customers and Associates', '2024-05-08 07:25:23', '2024-05-08 07:25:23', NULL, NULL),
(13, '2', '../uploads/slide3.png', 'Customers and Associates slider 2', 'Customers and Associates', '2024-05-08 07:25:42', '2024-05-08 07:25:42', NULL, NULL),
(14, '2', '../uploads/slide3.png', 'Customers and Associates slider 3', 'Customers and Associates ', '2024-05-08 07:26:01', '2024-05-08 07:26:01', NULL, NULL),
(15, '2', '../uploads/slide4.png', 'Customers and Associates slider 4', 'Customers and Associates', '2024-05-08 07:27:23', '2024-05-08 07:27:23', NULL, NULL),
(23, '1', '../uploads/success-6.jpg', 'success-6 ', '', '2024-05-11 05:35:43', '2024-05-11 05:35:43', NULL, NULL),
(24, '1', '../uploads/success-5.jpg', 'success-5', '', '2024-05-11 05:36:01', '2024-05-11 05:36:01', NULL, NULL),
(25, '1', '../uploads/success-4.jpg', 'success-4', '', '2024-05-11 05:36:13', '2024-05-11 05:36:13', NULL, NULL),
(26, '1', '../uploads/success-3.jpg', 'success-3', '', '2024-05-11 05:36:36', '2024-05-11 05:36:36', NULL, NULL),
(27, '1', '../uploads/success-2.jpg', 'success-2', '', '2024-05-11 05:36:49', '2024-05-11 05:36:49', NULL, NULL),
(28, '1', '../uploads/success-1.jpg', 'success-1', '', '2024-05-11 05:37:00', '2024-05-11 05:37:00', NULL, NULL),
(29, '1', '../uploads/success-img.jpg', 'success', '', '2024-05-11 05:37:09', '2024-05-11 05:37:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history_journeys`
--

CREATE TABLE `history_journeys` (
  `id` bigint UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_journeys`
--

INSERT INTO `history_journeys` (`id`, `year`, `details`, `created_at`, `updated_at`) VALUES
(4, '2012', '<span style=\"color: rgba(33, 37, 41, 0.75); font-family: tahoma; font-size: 18px;\">SEO Expate Bangladesh Ltd, a provider of technology solutions, offers advice on how to create solutions for your issues. We help businesses become more inventive and flexible by meeting customer needs and working together to develop ground-breaking goods and services.</span>', NULL, NULL),
(5, '2013', '<span style=\"color: rgba(33, 37, 41, 0.75); font-family: tahoma; font-size: 18px;\">SEO Expate Bangladesh Ltd, a provider of technology solutions, offers advice on how to create solutions for your issues. We help businesses become more inventive and flexible by meeting customer needs and working together to develop ground-breaking goods and services.</span><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; float: right; color: rgb(0, 0, 0); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"></div>', '2024-05-06 06:33:26', '2024-05-06 06:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `history_projects`
--

CREATE TABLE `history_projects` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_projects`
--

INSERT INTO `history_projects` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(5, 'Treasure Wars', '../uploads/2c87e8e9f5d5373176b6772216da16a6.jpeg', '<h5 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 600; color: rgb(33, 37, 41); font-size: 25px; font-family: tahoma;\"><span style=\"font-size: 18px; font-weight: 400;\">Action and adventure game developed by SEO Expate! Rooftop Frenzy is a free action-based rooftop run game, not just for kids of all ages!</span><br></h5>', NULL, NULL),
(6, 'Rooftop Frenzy', '../uploads/fuzionfrenzy-r-image5.jpg', '<h5 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 600; color: rgb(33, 37, 41); font-size: 25px; font-family: tahoma;\"><span style=\"font-size: 18px; font-weight: 400;\">Action and adventure game developed by SEO Expate! Rooftop Frenzy is a free action-based rooftop run game, not just for kids of all ages!</span><br></h5>', NULL, NULL),
(7, '7th March Speech', '../uploads/observerbd.com-1583518813.jpg', '<h5 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 600; color: rgb(33, 37, 41); font-size: 25px; font-family: tahoma;\"><span style=\"font-size: 18px; font-weight: 400;\">A VR experience based on the historic 7th March speech of Bangabandhu Sheikh Mujibur Rahman of 1971 at the Racecourse Ground.</span><br></h5>', NULL, NULL),
(8, 'Fun Basket', '../uploads/280492.jpg', '<h5 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 600; color: rgb(33, 37, 41); font-size: 25px; font-family: tahoma;\"><span style=\"font-size: 18px; font-weight: 400;\">An edutainment game developed by SEO Expate for BBC Media Action greatly reduces gender-based violence and improves life skills.</span><br></h5>', NULL, NULL),
(9, '1952 AR App', '../uploads/app.jpg', '<h5 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 600; color: rgb(33, 37, 41); font-size: 25px; font-family: tahoma;\"><span style=\"font-size: 18px; font-weight: 400;\">SEO Expate developed the “1952” app, a history-based educational AR app on the Language Movement of 21st February 1952.</span><br></h5>', NULL, NULL),
(10, 'Meena Game 2 3D', '../uploads/meena-two.png', '<h5 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 600; color: rgb(33, 37, 41); font-size: 25px; font-family: tahoma;\"><span style=\"font-size: 18px; font-weight: 400;\">The 3D version of Meena Game with a new story of caring for a mother and a newborn baby. Another big success for SEO Expate.</span><br></h5>', NULL, NULL),
(11, 'Meena Game', '../uploads/maxresdefault.jpg', '<h5 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 600; color: rgb(33, 37, 41); font-size: 25px; font-family: tahoma;\"><span style=\"font-size: 18px; font-weight: 400;\">An adventure edutainment game developed by SEO Expate for UNICEF Bangladesh impact significantly in promoting child rights.</span><br></h5>', NULL, NULL),
(12, 'Tap Tap Ants', '../uploads/25373f0b4622aae50be59d5f0aa27537.jpg', '<h5 style=\"margin-right: 0px; margin-left: 0px; padding: 0px; font-weight: 600; color: rgb(33, 37, 41); font-size: 25px; font-family: tahoma;\"><span style=\"font-size: 18px; font-weight: 400;\">The first game developed by SEO Expate was Tap Tap Ants, one of the most popular tapping games with millions of downloads in the App Store.</span><br></h5>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_link` text COLLATE utf8mb4_unicode_ci,
  `job_details` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `job_type`, `vacancies`, `deadline`, `apply_link`, `job_details`, `created_at`, `updated_at`) VALUES
(6, 'Senior Laravel Developer', 'Full time', '4', '2024-06-25', 'https://jobs.bdjobs.com/jobdetails.asp?id=1251667&fcatId=8&ln=1&JobKeyword=laravel%20developer', '<div class=\"col-sm-12\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" id=\"req\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Requirements</h4></div><div class=\"col-sm-12 mb-3\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h5 class=\"subheading\" id=\"req\" style=\"font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Experience</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">8 to 16 years</li><li style=\"line-height: 24px; padding-bottom: 5px;\">The applicants should have experience in the following business area(s):<br>Developer</li></ul></div><div class=\"col-sm-12\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h5 class=\"subheading\" id=\"req\" style=\"font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Additional Requirements</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">This FULL-TIME ROLE will only suit someone who also meets the following requirements:</p><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Has a passion for excelling in all they do, and this is evidenced with excellent references</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Can be analytical, strategic, and creative when the role requires it</li><li style=\"line-height: 24px; padding-bottom: 5px;\">At least 8-10 years of experience with PHP development, and is specifically experienced in the Laravel framework</li><li style=\"line-height: 24px; padding-bottom: 5px;\">PostgreSQL, Gulp, Composer, npm, Pug, Blade, JavaScript, CSS, JQuery, HTML</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Git/Github (repos, commits, branching, pull requests, merging etc)</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Hands on experience with SQL schema design, SOLID principles and REST API design</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Software testing experience using tools like PHPUnit.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Experience managing multiple versions, deployments and customisations of PHP software and API’s simultaneously.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Extensive experience designing, initialising and deploying dev, staging and production servers for the team’s code to run on.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Proven ability to plan and manage schedules, technical documentation and code repositories</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Has excellent spoken &amp; written English</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Have their own tech and office set up conducive to fast, focused and productive remote work (e.g. high spec computers, monitors, internet over 50Mbps, back up solutions, etc.)</li></ul><hr style=\"border-top-color: rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div><div class=\"col-sm-12\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" id=\"job_resp\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Responsibilities &amp; Context</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">COMPANY:</span>&nbsp;SMILE (smile.com.au)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">REPORTS TO:</span>&nbsp;Head of IT</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">DIVISIONS:</span>&nbsp;Retail Dental Cover + Corporate Dental Cover</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">LOCATION:</span>&nbsp;100% Remote, Work from home</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">COMMITMENT:</span>&nbsp;40hrs/wk. Mon-Fri, At least 4hr worked b/w 8 am-5 pm GMT+10 (Brisbane, Australia)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">ROLE OBJECTIVES</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">The Senior PHP Developer plays a pivotal role in leading the technical aspects of software development projects.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">ABOUT SMILE</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Smile is a national digital health company, comprising 5 divisions including the National Dental Network, Health Fund Partnerships, Projects &amp; Investments plus more recently, Retail Dental Cover and Corporate Dental Cover. Smile is committed to revolutionising quality healthcare accessibility and affordability for the people of Australia. Smile is the top-rated dental cover in the country, offering Retail Dental Cover to the public and Corporate Dental Cover to companies and their teams across Australia. Smile has had a globally distributed team for 7+ years &amp; maintained a 5-star rating on Upwork.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">KEY RESPONSIBILITIES:</span></p><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Develop new features, fix bugs, and manage hosting infrastructure for our member and partner portals</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Write clean, efficient code with high test coverage using the PHP Laravel framework</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Comprehensively document/comment on code for readability and future modification</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Manage git repositories, flows, and code releases in collaboration with other team members and external vendors</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Manage PostgreSQL databases to create and run data queries and reports</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Create, update, document, and manage a REST API for use in other applications and integrations with high availability</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Collaborate on both front-end and back-end development to optimize software for Google SEO, CRO, PPC, and pass or exceed Google Core Web Vitals assessments</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Identify new technologies, platforms, and tools that can increase the efficiency of development and team management</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Participate in long-term planning activities such as product roadmaps, backlog estimation, prioritisation, and strategy.</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Coordinate with third-party system managers to coordinate integrations where relevant</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Develop and execute secure and effective data procedures</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Ensure data is handled in line with security best practices and Smile privacy expectations</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"font-weight: 700;\">KEY PERFORMANCE INDICATORS</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Code Quality:</p><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Measure code quality metrics such as code reviews, code coverage, and static code analysis results.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Delivery Time:</p><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Track the time to deliver features or bug fixes from initial implementation to deployment.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Customer Satisfaction:</p><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Monitoring of customer feedback related to the quality and performance of software products.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">API Performance:</p><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Measure the performance and reliability of the REST API, including response times and error rates.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">System Uptime:</p><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Track the uptime of hosting infrastructure and systems, ensuring they meet uptime targets.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Innovation Impact:</p><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Evaluate the impact of adopting innovative technologies on development efficiency and team productivity.</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Compliance Adherence:</p><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Ensure adherence to legal norms and regulations related to data security and privacy throughout all project executions.</li></ul><hr style=\"border-top-color: rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div><div class=\"col-sm-12 mb-3\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Workplace</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Work from home</p></div><div class=\"col-sm-12 mb-3\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Employment Status</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Full Time</p></div><div class=\"col-sm-12 mb-3\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Job Location</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Anywhere in Bangladesh</p></div>', '2024-05-12 04:07:14', '2024-05-12 04:07:14'),
(7, 'Senior App Developer', 'Full time', '2', '2024-06-28', 'https://jobs.bdjobs.com/jobdetails.asp?id=1250290&fcatId=8&ln=1&JobKeyword=App%20Developer', '<div class=\"col-sm-12\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" id=\"req\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Requirements</h4></div><div class=\"col-sm-12 mb-3\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h5 class=\"subheading\" id=\"req\" style=\"font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Education</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Bachelor of Science (BSc)</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Diploma in Computer</li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"></ul></div><div class=\"col-sm-12 mb-3\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h5 class=\"subheading\" id=\"req\" style=\"font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Experience</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">2 to 3 years</li><li style=\"line-height: 24px; padding-bottom: 5px;\">The applicants should have experience in the following business area(s):<br>Software Company</li></ul></div><div class=\"col-sm-12\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h5 class=\"subheading\" id=\"req\" style=\"font-weight: 600; line-height: 1.1; color: rgb(51, 51, 51); margin-bottom: 6px; font-size: 14px; margin-right: 0px; margin-left: 0px;\">Additional Requirements</h5><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Age 20 to 35 years</li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Strong proficiency in Dart programming language.</p></li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Experience with third-party libraries and APIs.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Familiarity with cloud message APIs and push notifications.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Solid understanding of the full mobile development lifecycle of both IOS and Android.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Excellent problem-solving skills and attention to detail.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Ability to work in a fast-paced environment and adapt to changing priorities.</p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Familiarity with version control systems (e.g., Git).</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"></p></li></ul><hr style=\"border-top-color: rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div><div class=\"col-sm-12\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" id=\"job_resp\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Responsibilities &amp; Context</h4><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Proven experience as a Flutter Developer or similar role.</span></p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Solid understanding of Dart programming language and Flutter framework. Familiarity with integrating third-party SDKs into mobile applications.</span></p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Strong knowledge of RESTful APIs and their integration.</span></p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Experience in building and deploying mobile applications for both Android and iOS platforms.</span></p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Proficient in version control systems such as Git.</span></p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Ability to collaborate effectively with cross-functional teams.</span></p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Strong problem-solving skills and attention to detail.</span></p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Excellent communication and interpersonal skills.</span></p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Experience with integrating router device SDKs into mobile applications.</span></p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Familiarity with e-commerce platforms and REST APIs.</span></p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Knowledge of state management solutions such as Provider or BLoC.</span></p></li><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\"><span style=\"color: rgb(0, 0, 0);\">Understanding of agile development methodologies.</span></p></li></ul><hr style=\"border-top-color: rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div><div class=\"col-sm-12\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" id=\"skill_exp\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Skills &amp; Expertise</h4><div class=\"skills\" style=\"display: flex; align-items: center; flex-wrap: wrap; gap: 10px;\"><button class=\"skill\" style=\"font-style: inherit; font-variant: inherit; font-weight: 400; font-stretch: inherit; font-size: 12px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(51, 51, 51); border-radius: 100px; border-width: 0.5px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(244, 244, 244); padding: 7px 10px !important;\">Mobile App Development</button><button class=\"skill\" style=\"font-style: inherit; font-variant: inherit; font-weight: 400; font-stretch: inherit; font-size: 12px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(51, 51, 51); border-radius: 100px; border-width: 0.5px; border-style: solid; border-color: rgb(221, 221, 221); background: rgb(244, 244, 244); padding: 7px 10px !important;\">Software Development</button></div><hr style=\"border-top-color: rgb(238, 238, 238); margin-top: 10px !important; margin-bottom: 10px !important;\"></div><div class=\"col-sm-12 mb-3\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" id=\"benefits\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Compensation &amp; Other Benefits</h4><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\">Performance bonus, Profit share</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Salary Review: Yearly</li><li style=\"line-height: 24px; padding-bottom: 5px;\">Festival Bonus: 2</li></ul><ul style=\"padding: 0px; margin-right: 0px !important; margin-bottom: 0px !important; margin-left: 24px !important;\"><li style=\"line-height: 24px; padding-bottom: 5px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Service Benefits, EL Encasement</p></li></ul></div><div class=\"col-sm-12 mb-3\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Workplace</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Work at office</p></div><div class=\"col-sm-12 mb-3\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Employment Status</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Full Time</p></div><div class=\"col-sm-12 mb-3\" style=\"min-height: 1px; padding-right: 15px; padding-left: 15px; float: left; width: 886px; color: rgb(51, 51, 51); font-family: Inter, &quot;Noto Sans Bengali UI&quot;, ui-icon, sans-serif; font-size: 14px;\"><h4 class=\"sectxt\" style=\"font-weight: 600; line-height: 1.1; color: rgb(179, 45, 125); margin-bottom: 10px; margin-right: 0px; margin-left: 0px; font-size: 16px !important;\">Job Location</h4><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; line-height: 24px; padding-left: 0px !important;\">Dhaka (Banasree)</p></div>', '2024-05-12 04:11:17', '2024-05-12 04:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_05_073941_create_employees_table', 2),
(6, '2024_05_05_085701_create_jobs_table', 3),
(7, '2024_05_05_100258_create_departments_table', 4),
(8, '2024_05_05_105304_create_notices_table', 5),
(11, '2024_05_06_034846_create_histories_table', 6),
(12, '2024_05_06_035817_create_history_journeys_table', 6),
(14, '2024_05_06_084714_create_history_projects_table', 8),
(17, '2024_05_06_092216_create_web_portfolios_table', 9),
(18, '2024_05_06_092245_create_web_portfolio_categories_table', 9),
(19, '2024_05_06_104240_create_free_trials_table', 10),
(20, '2024_05_06_113947_create_get_quotes_table', 11),
(21, '2024_05_07_033809_create_branches_table', 12),
(22, '2024_05_07_060349_create_featured_youtubes_table', 13),
(23, '2024_05_06_071104_create_history_galleries_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_description` longtext COLLATE utf8mb4_unicode_ci,
  `files` text COLLATE utf8mb4_unicode_ci,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `image`, `alt_tag`, `alt_description`, `files`, `date`, `created_at`, `updated_at`) VALUES
(9, 'test apppp', '../uploads/01699100224.png', NULL, NULL, '../uploads/Branch-list.pdf', '2024-05-08', NULL, NULL),
(10, 'Odit qui consequat ', '../uploads/8068017.png', NULL, NULL, 'Freelancer Verification.pdf', '1995-05-20', NULL, NULL),
(14, 'Eiusmod cupidatat al', '../uploads/Screenshot-27.png', 'Mollit error sunt i dfsdf', 'Non non corporis sit.sdfsdf ds fs', '../uploads/durjoy.pdf', '1978-01-22', '2024-05-09 10:56:28', '2024-05-09 10:56:28'),
(15, 'Pariatur Eos labore', '../uploads/imageedit-1-7267037658.jpg', 'Consequatur repudia', '', '../uploads/Preston-Salas.pdf', '1981-08-13', '2024-05-14 04:59:08', '2024-05-14 04:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `our_offices`
--

CREATE TABLE `our_offices` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` text,
  `location` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `our_offices`
--

INSERT INTO `our_offices` (`id`, `name`, `address`, `location`, `created_at`, `updated_at`) VALUES
(16, 'Dahlia Mosley', 'A voluptate obcaecat', 'Voluptas nesciunt c', '2024-05-06 03:40:37', '2024-05-06 03:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` int DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `type`, `order_by`, `designation`, `website`, `facebook`, `linkedin`, `image`, `alt_tag`, `alt_description`, `created_at`, `updated_at`) VALUES
(2, 'Md Mizanur Rahman', 'core_team', 1, 'Managing Director', '', '', '', '../uploads/md-mizanur-rahman-99368.jpg', NULL, NULL, '2024-05-07 09:21:54', '2024-05-07 09:26:56'),
(3, 'Mst Razia Sultana', 'core_team', 2, 'Director', '', '', '', '../uploads/mst-razia-sultana-20840.jpg', NULL, NULL, '2024-05-07 09:22:54', '2024-05-07 09:26:53'),
(4, 'Shajahan Ali', 'core_team', 3, 'Director (Admin)', '', '', '', '../uploads/shajahan-ali-15297.jpg', NULL, NULL, '2024-05-07 09:23:19', '2024-05-07 09:26:58'),
(5, 'Shakil Ahmmed', 'core_team', 4, 'CEO', '', '', '', '../uploads/shakil-ahmmed-67939.jpg', NULL, NULL, '2024-05-07 09:23:47', '2024-05-07 09:27:01'),
(6, 'Md Abdur Razzak', 'core_team', 5, 'CFO', '', '', '', '../uploads/md-abdur-razzak-55955.jpg', NULL, NULL, '2024-05-07 10:08:41', '2024-05-07 10:11:32'),
(7, 'Atiqur Rahman', 'core_team', 6, 'Project Director', '', '', '', '../uploads/atiqur-rahman-67776.jpg', NULL, NULL, '2024-05-07 10:12:24', '2024-05-07 10:12:24'),
(8, 'Basudeb Acharjee', 'advisor', 1, 'Advisor', '', '', '', '../uploads/basudeb-acharjee-93886.jpg', NULL, NULL, '2024-05-07 10:13:07', '2024-05-07 10:13:07'),
(9, 'Md.Azharul Islam Khan', 'advisor', 2, 'Advisor', '', '', '', '../uploads/md.azharul-islam-khan-40761.jpg', NULL, NULL, '2024-05-07 10:13:30', '2024-05-07 10:13:30'),
(10, 'Ragebul Ahsan Ripu', 'advisor', 3, 'Advisor', '', '', '', '../uploads/ragebul-ahsan-ripu-29315.jpg', 'img text', '<p>img description</p>', '2024-05-07 10:13:48', '2024-05-14 04:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `trusted_bies`
--

CREATE TABLE `trusted_bies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint DEFAULT NULL,
  `orderBy` int DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trusted_bies`
--

INSERT INTO `trusted_bies` (`id`, `name`, `status`, `orderBy`, `image`, `alt_tag`, `alt_description`, `created_at`, `updated_at`) VALUES
(6, 'usaid', NULL, 2, '../uploads/usaid-83474.png', 'df gfd gfddf ', '<p>fd gdf gfd gfd fd&nbsp;</p>', '2024-05-08 06:22:47', '2024-05-09 05:39:40'),
(7, 'undp', NULL, 3, '../uploads/undp-55540.png', NULL, NULL, '2024-05-08 06:23:46', '2024-05-08 06:23:46'),
(8, 'un women', NULL, 4, '../uploads/un-women-40130.png', NULL, NULL, '2024-05-08 06:24:06', '2024-05-08 06:24:06'),
(9, 'world health', NULL, 5, '../uploads/world-health-73866.png', NULL, NULL, '2024-05-08 06:24:32', '2024-05-08 06:24:32'),
(10, 'food and agree', NULL, 6, '../uploads/food-and-agree-89738.png', NULL, NULL, '2024-05-08 06:24:54', '2024-05-08 06:24:54'),
(11, 'sands', NULL, 7, '../uploads/sands-90518.png', NULL, NULL, '2024-05-08 06:25:10', '2024-05-08 06:25:36'),
(12, 'murka', NULL, 8, '../uploads/murka-75252.png', NULL, NULL, '2024-05-08 06:25:29', '2024-05-08 06:25:29'),
(13, 'safe guard', NULL, 9, '../uploads/safe-guard-30638.png', NULL, NULL, '2024-05-08 06:25:58', '2024-05-08 06:25:58'),
(14, 'atec', NULL, 10, '../uploads/atec-27854.png', NULL, NULL, '2024-05-08 06:26:11', '2024-05-08 06:26:11'),
(15, 'BBC', NULL, 11, '../uploads/bbc-24687.png', NULL, NULL, '2024-05-08 06:26:47', '2024-05-08 06:26:47'),
(16, 'sesame', NULL, 12, '../uploads/sesame-46698.png', NULL, NULL, '2024-05-08 06:27:05', '2024-05-08 06:27:05'),
(17, 'ifrc', NULL, 13, '../uploads/ifrc-73365.png', NULL, NULL, '2024-05-08 06:27:18', '2024-05-08 06:27:18'),
(18, 'crazylabs', NULL, 14, '../uploads/crazylabs-36685.png', NULL, NULL, '2024-05-08 06:27:57', '2024-05-08 06:27:57'),
(19, 'voodooo', NULL, 15, '../uploads/voodooo-47445.png', NULL, NULL, '2024-05-08 06:28:17', '2024-05-08 06:28:17'),
(20, 'swiss', NULL, 16, '../uploads/swiss-51448.png', NULL, NULL, '2024-05-08 06:28:38', '2024-05-08 06:28:38'),
(21, 'Price Tech', NULL, 17, '../uploads/price-tech-76493.png', NULL, NULL, '2024-05-08 06:29:02', '2024-05-08 06:29:02'),
(22, 'Fhi 360', NULL, 18, '../uploads/fhi-360-45625.png', NULL, NULL, '2024-05-08 06:29:21', '2024-05-08 06:29:21'),
(23, 'finanncial found', NULL, 19, '../uploads/finanncial-found-69931.png', NULL, NULL, '2024-05-08 06:29:52', '2024-05-08 06:29:52'),
(24, 'rp', NULL, 20, '../uploads/rp-40986.png', NULL, NULL, '2024-05-08 06:30:15', '2024-05-08 06:30:15'),
(25, 'Pink Lime', NULL, 21, '../uploads/pink-lime-33181.png', NULL, NULL, '2024-05-08 06:30:34', '2024-05-08 06:30:34'),
(26, 'Mc AFEE ', NULL, 22, '../uploads/mc-afee--40314.png', NULL, NULL, '2024-05-08 06:31:06', '2024-05-08 06:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `web_portfolios`
--

CREATE TABLE `web_portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_portfolios`
--

INSERT INTO `web_portfolios` (`id`, `title`, `category_id`, `link`, `image`, `created_at`, `updated_at`) VALUES
(5, 'SAF BD', '2', 'https://bn.nordfx.com/', '../uploads/safbd.png', '2024-05-11 09:52:56', '2024-05-11 09:52:56'),
(6, 'ISP', '2', 'http://isp.devseoebd.com/', '../uploads/isp.png', '2024-05-11 09:53:30', '2024-05-11 09:53:30'),
(7, 'Amir Recruiting Agency S.R.L', '2', 'https://amirrecruitingagencysrl.com/', '../uploads/amirrecruitingagencysrl.png', '2024-05-11 09:53:51', '2024-05-11 09:53:51'),
(8, 'Construction', '2', 'https://constructions.devseoebd.com/', '../uploads/construction.png', '2024-05-11 09:54:18', '2024-05-11 09:54:18'),
(9, 'NGO', '', 'https://ngo.devseoebd.com/', '../uploads/ngo.png', '2024-05-11 09:54:40', '2024-05-11 09:54:40'),
(10, 'ISP', '3', 'https://amirrecruitingagencysrl.com/', '../uploads/construction.png', '2024-05-11 10:18:36', '2024-05-11 10:18:36'),
(11, 'Amir Recruiting Agency S.R.L', '4', 'https://amirrecruitingagencysrl.com/', '../uploads/isp.png', '2024-05-11 10:19:01', '2024-05-11 10:19:01'),
(12, 'Construction', '5', 'https://amirrecruitingagencysrl.com/', '../uploads/safbd.png', '2024-05-11 10:24:30', '2024-05-11 10:24:30'),
(13, 'NGO', '6', 'https://amirrecruitingagencysrl.com/', '../uploads/ngo.png', '2024-05-11 10:24:52', '2024-05-11 10:24:52'),
(14, 'SAF BD', '7', 'https://amirrecruitingagencysrl.com/', '../uploads/isp.png', '2024-05-11 10:25:07', '2024-05-11 10:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `web_portfolio_categories`
--

CREATE TABLE `web_portfolio_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_portfolio_categories`
--

INSERT INTO `web_portfolio_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Ecommerce Website', '2', NULL, NULL),
(3, 'Corporate Website', '1', NULL, NULL),
(4, 'LMS Website', '1', NULL, NULL),
(5, 'Educational Website', '1', NULL, NULL),
(6, 'News Portal Website', '1', NULL, NULL),
(7, 'Travel Agency Website', '1', NULL, NULL),
(8, 'Real Estate Website', '1', '2024-05-11 09:36:28', '2024-05-11 09:36:28'),
(9, 'Job Portal Website', '1', '2024-05-11 09:36:40', '2024-05-11 09:36:40'),
(10, 'Online Booking Website', '1', '2024-05-11 09:36:48', '2024-05-11 09:36:48'),
(11, 'Rental Website', '1', '2024-05-11 09:36:55', '2024-05-11 09:36:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_developments`
--
ALTER TABLE `app_developments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_youtubes`
--
ALTER TABLE `featured_youtubes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_trials`
--
ALTER TABLE `free_trials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_quotes`
--
ALTER TABLE `get_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_galleries`
--
ALTER TABLE `history_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_journeys`
--
ALTER TABLE `history_journeys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_projects`
--
ALTER TABLE `history_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_offices`
--
ALTER TABLE `our_offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trusted_bies`
--
ALTER TABLE `trusted_bies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_portfolios`
--
ALTER TABLE `web_portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_portfolio_categories`
--
ALTER TABLE `web_portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_developments`
--
ALTER TABLE `app_developments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `featured_youtubes`
--
ALTER TABLE `featured_youtubes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `free_trials`
--
ALTER TABLE `free_trials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `get_quotes`
--
ALTER TABLE `get_quotes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history_galleries`
--
ALTER TABLE `history_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `history_journeys`
--
ALTER TABLE `history_journeys`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history_projects`
--
ALTER TABLE `history_projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `our_offices`
--
ALTER TABLE `our_offices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trusted_bies`
--
ALTER TABLE `trusted_bies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `web_portfolios`
--
ALTER TABLE `web_portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `web_portfolio_categories`
--
ALTER TABLE `web_portfolio_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
