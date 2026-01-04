-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2025 at 07:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrustalent`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` enum('image','video') NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED DEFAULT NULL,
  `disk` varchar(255) NOT NULL DEFAULT 'public',
  `original_name` varchar(255) DEFAULT NULL,
  `width` smallint(5) UNSIGNED DEFAULT NULL,
  `height` smallint(5) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `model_id`, `name`, `path`, `url`, `type`, `mime_type`, `size`, `disk`, `original_name`, `width`, `height`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 48, 'close_up_image', 'https://drive.google.com/file/d/1niLsNUrUsKsXCUsMftAL-ZijJzfEIO_3/view?usp=sharing', 'https://drive.google.com/file/d/1niLsNUrUsKsXCUsMftAL-ZijJzfEIO_3/view?usp=sharing', 'image', 'image/jpeg', 1276952, 'google_drive', '395313-sukuna-jujutsu-kaisen-4k-pc-wallpaper.jpg', NULL, NULL, '2025-10-20 05:49:17', '2025-10-20 05:49:17', NULL),
(2, 48, 'full_body_image', 'https://drive.google.com/file/d/1H2CiRHJ810WWHS_9cemjwTKr9GPgUhlh/view?usp=sharing', 'https://drive.google.com/file/d/1H2CiRHJ810WWHS_9cemjwTKr9GPgUhlh/view?usp=sharing', 'image', 'image/png', 984486, 'google_drive', '1.PNG', NULL, NULL, '2025-10-20 05:49:24', '2025-10-20 05:49:24', NULL),
(3, 48, 'half_body_image', 'https://drive.google.com/file/d/1U5wFx488KKD0d6ggiqpvWwsQj5Kb_DMb/view?usp=sharing', 'https://drive.google.com/file/d/1U5wFx488KKD0d6ggiqpvWwsQj5Kb_DMb/view?usp=sharing', 'image', 'image/jpeg', 1522347, 'google_drive', 'satoru-gojo-jujutsu-kaisen-79.jpg', NULL, NULL, '2025-10-20 05:49:31', '2025-10-20 05:49:31', NULL),
(4, 48, 'side_body_image', 'https://drive.google.com/file/d/1Rb7UQSi9EzJfN1X5IMLZEFDuawyW78Si/view?usp=sharing', 'https://drive.google.com/file/d/1Rb7UQSi9EzJfN1X5IMLZEFDuawyW78Si/view?usp=sharing', 'image', 'image/jpeg', 2585408, 'google_drive', 'wallpapersden.com_satoru-gojo-manga-jujutsu-kaisen_2563x1355.jpg', NULL, NULL, '2025-10-20 05:49:41', '2025-10-20 05:49:41', NULL),
(5, 48, 'signature_image', 'https://drive.google.com/file/d/1Q16Scs0uOC_kQaRQf1Z6NUUepAV4CIJq/view?usp=sharing', 'https://drive.google.com/file/d/1Q16Scs0uOC_kQaRQf1Z6NUUepAV4CIJq/view?usp=sharing', 'image', 'image/jpeg', 73643, 'google_drive', 'desktop-wallpaper-ultra-sukuna-jujutsu-kaisen-and-background-jujutsu-kaisen-minimal.jpg', NULL, NULL, '2025-10-20 05:49:45', '2025-10-20 05:49:45', NULL),
(6, 48, 'video', 'https://drive.google.com/file/d/1pCBQHr0xnlPV4VAd6a9MJ8knYA2meU1x/view?usp=sharing', 'https://drive.google.com/file/d/1pCBQHr0xnlPV4VAd6a9MJ8knYA2meU1x/view?usp=sharing', 'video', 'video/mp4', 663117, 'google_drive', 'jjk 2 .mp4', NULL, NULL, '2025-10-20 05:49:50', '2025-10-20 05:49:50', NULL),
(7, 49, 'close_up_image', 'https://drive.google.com/file/d/1_RZS2zeOPNq93_JWOnykBfbeQ01OntbI/view?usp=sharing', 'https://drive.google.com/file/d/1_RZS2zeOPNq93_JWOnykBfbeQ01OntbI/view?usp=sharing', 'image', 'image/jpeg', 1276952, 'google_drive', '395313-sukuna-jujutsu-kaisen-4k-pc-wallpaper.jpg', NULL, NULL, '2025-10-20 05:50:41', '2025-10-20 05:50:41', NULL),
(8, 49, 'full_body_image', 'https://drive.google.com/file/d/1c2OWU1TK62enizsujCIOpizSisXncKGP/view?usp=sharing', 'https://drive.google.com/file/d/1c2OWU1TK62enizsujCIOpizSisXncKGP/view?usp=sharing', 'image', 'image/png', 984486, 'google_drive', '1.PNG', NULL, NULL, '2025-10-20 05:50:47', '2025-10-20 05:50:47', NULL),
(9, 49, 'half_body_image', 'https://drive.google.com/file/d/1p58MXS7JhL2HAfGpYYdIHZ9vDqOjwdtq/view?usp=sharing', 'https://drive.google.com/file/d/1p58MXS7JhL2HAfGpYYdIHZ9vDqOjwdtq/view?usp=sharing', 'image', 'image/jpeg', 1522347, 'google_drive', 'satoru-gojo-jujutsu-kaisen-79.jpg', NULL, NULL, '2025-10-20 05:50:54', '2025-10-20 05:50:54', NULL),
(10, 49, 'side_body_image', 'https://drive.google.com/file/d/1C5gjnPaqgPfmRfVEOOSEU6vKD7aK-iI8/view?usp=sharing', 'https://drive.google.com/file/d/1C5gjnPaqgPfmRfVEOOSEU6vKD7aK-iI8/view?usp=sharing', 'image', 'image/jpeg', 2585408, 'google_drive', 'wallpapersden.com_satoru-gojo-manga-jujutsu-kaisen_2563x1355.jpg', NULL, NULL, '2025-10-20 05:51:01', '2025-10-20 05:51:01', NULL),
(11, 49, 'signature_image', 'https://drive.google.com/file/d/14881mR5cmELxeVR2ek3bbw5YyXXobqtZ/view?usp=sharing', 'https://drive.google.com/file/d/14881mR5cmELxeVR2ek3bbw5YyXXobqtZ/view?usp=sharing', 'image', 'image/jpeg', 73643, 'google_drive', 'desktop-wallpaper-ultra-sukuna-jujutsu-kaisen-and-background-jujutsu-kaisen-minimal.jpg', NULL, NULL, '2025-10-20 05:51:06', '2025-10-20 05:51:06', NULL),
(12, 49, 'video', 'https://drive.google.com/file/d/1AH2rY8Dv3rrNzPhm9_sF2kwsykCBMSWl/view?usp=sharing', 'https://drive.google.com/file/d/1AH2rY8Dv3rrNzPhm9_sF2kwsykCBMSWl/view?usp=sharing', 'video', 'video/mp4', 663117, 'google_drive', 'jjk 2 .mp4', NULL, NULL, '2025-10-20 05:51:10', '2025-10-20 05:51:10', NULL),
(13, 50, 'close_up_image', 'https://drive.google.com/file/d/1AG32FCamYXkBe9f8UsfD6KGFSbhHuD4L/view?usp=sharing', 'https://drive.google.com/file/d/1AG32FCamYXkBe9f8UsfD6KGFSbhHuD4L/view?usp=sharing', 'image', 'image/png', 984486, 'google_drive', '1.PNG', NULL, NULL, '2025-10-20 05:54:05', '2025-10-20 05:54:05', NULL),
(14, 50, 'full_body_image', 'https://drive.google.com/file/d/1iWdTindQ46q2XFVAWyavaQcJF2xqaCBi/view?usp=sharing', 'https://drive.google.com/file/d/1iWdTindQ46q2XFVAWyavaQcJF2xqaCBi/view?usp=sharing', 'image', 'image/jpeg', 1276952, 'google_drive', '395313-sukuna-jujutsu-kaisen-4k-pc-wallpaper.jpg', NULL, NULL, '2025-10-20 05:54:11', '2025-10-20 05:54:11', NULL),
(15, 50, 'half_body_image', 'https://drive.google.com/file/d/1Aks0ad0YZPw2M_9hVwQhSgHPVxTeZJiK/view?usp=sharing', 'https://drive.google.com/file/d/1Aks0ad0YZPw2M_9hVwQhSgHPVxTeZJiK/view?usp=sharing', 'image', 'image/jpeg', 167727, 'google_drive', 'thumb-1920-1352902.jpeg', NULL, NULL, '2025-10-20 05:54:15', '2025-10-20 05:54:15', NULL),
(16, 50, 'side_body_image', 'https://drive.google.com/file/d/1OXyjHmbv7mXaeGA3p5Vo1ZCeqpPbGUCb/view?usp=sharing', 'https://drive.google.com/file/d/1OXyjHmbv7mXaeGA3p5Vo1ZCeqpPbGUCb/view?usp=sharing', 'image', 'image/jpeg', 73643, 'google_drive', 'desktop-wallpaper-ultra-sukuna-jujutsu-kaisen-and-background-jujutsu-kaisen-minimal.jpg', NULL, NULL, '2025-10-20 05:54:19', '2025-10-20 05:54:19', NULL),
(17, 50, 'signature_image', 'https://drive.google.com/file/d/1lfJmeBBa5Fsz3Z1AwAqhwWVcPP79ksic/view?usp=sharing', 'https://drive.google.com/file/d/1lfJmeBBa5Fsz3Z1AwAqhwWVcPP79ksic/view?usp=sharing', 'image', 'image/jpeg', 28707, 'google_drive', '84d76bfcbd71d6802547b0d6607a43ca.jpg', NULL, NULL, '2025-10-20 05:54:24', '2025-10-20 05:54:24', NULL),
(18, 50, 'video', 'https://drive.google.com/file/d/1vVDdWkRGuBmIrnfr6SViaeYGMv7mA5LS/view?usp=sharing', 'https://drive.google.com/file/d/1vVDdWkRGuBmIrnfr6SViaeYGMv7mA5LS/view?usp=sharing', 'video', 'video/mp4', 663117, 'google_drive', 'jjk 2 .mp4', NULL, NULL, '2025-10-20 05:54:29', '2025-10-20 05:54:29', NULL),
(19, 51, 'full_body_image', 'https://drive.google.com/file/d/11PBCZhuI9lq-cvUqDBKsgrXOxv43pabh/view?usp=sharing', 'https://drive.google.com/file/d/11PBCZhuI9lq-cvUqDBKsgrXOxv43pabh/view?usp=sharing', 'image', 'image/jpeg', 60092, 'google_drive', '295147_311585.jpg', NULL, NULL, '2025-10-20 09:10:30', '2025-10-20 09:10:30', NULL),
(20, 51, 'half_body_image', 'https://drive.google.com/file/d/1g9WWtAyeXqJs8e4U28UjtYm2oTJcWpie/view?usp=sharing', 'https://drive.google.com/file/d/1g9WWtAyeXqJs8e4U28UjtYm2oTJcWpie/view?usp=sharing', 'image', 'image/jpeg', 1276952, 'google_drive', '395313-sukuna-jujutsu-kaisen-4k-pc-wallpaper.jpg', NULL, NULL, '2025-10-20 09:10:37', '2025-10-20 09:10:37', NULL),
(21, 51, 'side_body_image', 'https://drive.google.com/file/d/1braRXbRFvoqbJckGd-rhbjfGX6B7oSLF/view?usp=sharing', 'https://drive.google.com/file/d/1braRXbRFvoqbJckGd-rhbjfGX6B7oSLF/view?usp=sharing', 'image', 'image/jpeg', 28707, 'google_drive', '84d76bfcbd71d6802547b0d6607a43ca.jpg', NULL, NULL, '2025-10-20 09:10:46', '2025-10-20 09:10:46', NULL),
(22, 51, 'signature_image', 'https://drive.google.com/file/d/1EOYA2saItZLYS3-Lo6hv2zaNSyi26h4U/view?usp=sharing', 'https://drive.google.com/file/d/1EOYA2saItZLYS3-Lo6hv2zaNSyi26h4U/view?usp=sharing', 'image', 'image/png', 2883494, 'google_drive', 'ChatGPT Image Aug 16, 2025, 10_12_13 PM.png', NULL, NULL, '2025-10-20 09:10:53', '2025-10-20 09:10:53', NULL),
(23, 51, 'video', 'https://drive.google.com/file/d/1WsqzgzcMBa4ayIMWtF89Z-B_zivXpjTd/view?usp=sharing', 'https://drive.google.com/file/d/1WsqzgzcMBa4ayIMWtF89Z-B_zivXpjTd/view?usp=sharing', 'video', 'video/mp4', 663117, 'google_drive', 'jjk 2 .mp4', NULL, NULL, '2025-10-20 09:10:58', '2025-10-20 09:10:58', NULL),
(24, 54, 'close_up_image', 'https://drive.google.com/file/d/1I6E-HBoAr9M_57kf3mO3jhLHNDp41WgT/view?usp=sharing', 'https://drive.google.com/file/d/1I6E-HBoAr9M_57kf3mO3jhLHNDp41WgT/view?usp=sharing', 'image', 'image/jpeg', 31881, 'google_drive', 'baking 1.jpg', NULL, NULL, '2025-10-20 11:45:23', '2025-10-20 11:45:23', NULL),
(25, 54, 'full_body_image', 'https://drive.google.com/file/d/17USf8yKE8ioQn3hO2zBSYiUQR0f-81wV/view?usp=sharing', 'https://drive.google.com/file/d/17USf8yKE8ioQn3hO2zBSYiUQR0f-81wV/view?usp=sharing', 'image', 'image/jpeg', 254987, 'google_drive', 'Branch - Copy.jpg', NULL, NULL, '2025-10-20 11:45:28', '2025-10-20 11:45:28', NULL),
(26, 54, 'half_body_image', 'https://drive.google.com/file/d/1PGXFHZR0ssF3vIIJ9Wq2-gp2KCpfBPjO/view?usp=sharing', 'https://drive.google.com/file/d/1PGXFHZR0ssF3vIIJ9Wq2-gp2KCpfBPjO/view?usp=sharing', 'image', 'image/jpeg', 254987, 'google_drive', 'Branch - Copy.jpg', NULL, NULL, '2025-10-20 11:45:32', '2025-10-20 11:45:32', NULL),
(27, 54, 'side_body_image', 'https://drive.google.com/file/d/17xwt36Q81sh0myrb_fZvbPci4UYmUO1I/view?usp=sharing', 'https://drive.google.com/file/d/17xwt36Q81sh0myrb_fZvbPci4UYmUO1I/view?usp=sharing', 'image', 'image/png', 16338, 'google_drive', 'App_Update.png', NULL, NULL, '2025-10-20 11:45:36', '2025-10-20 11:45:36', NULL),
(28, 54, 'signature_image', 'https://drive.google.com/file/d/1ajx-ScAU3chd_ATKevYSxf2Q6ba0Cdvj/view?usp=sharing', 'https://drive.google.com/file/d/1ajx-ScAU3chd_ATKevYSxf2Q6ba0Cdvj/view?usp=sharing', 'image', 'image/png', 97078, 'google_drive', 'movie.PNG', NULL, NULL, '2025-10-20 11:45:41', '2025-10-20 11:45:41', NULL),
(29, 54, 'video', 'https://drive.google.com/file/d/1aSTcjICGpXu1pVFxn_Lyj19tyyVUjYer/view?usp=sharing', 'https://drive.google.com/file/d/1aSTcjICGpXu1pVFxn_Lyj19tyyVUjYer/view?usp=sharing', 'video', 'video/mp4', 450133, 'google_drive', 'jjk.mp4', NULL, NULL, '2025-10-20 11:45:45', '2025-10-20 11:45:45', NULL),
(30, 54, 'cnic_front', 'https://drive.google.com/file/d/1u7_5oA6FZHP1JwQRjiN52zhF5cCYZY0x/view?usp=sharing', 'https://drive.google.com/file/d/1u7_5oA6FZHP1JwQRjiN52zhF5cCYZY0x/view?usp=sharing', 'image', 'image/jpeg', 254987, 'google_drive', 'Branch - Copy.jpg', NULL, NULL, '2025-10-20 11:45:49', '2025-10-20 11:45:49', NULL),
(31, 54, 'cnic_back', 'https://drive.google.com/file/d/1IHy5jV6sDD-zyN-XamPT4I7xOSIeX0oN/view?usp=sharing', 'https://drive.google.com/file/d/1IHy5jV6sDD-zyN-XamPT4I7xOSIeX0oN/view?usp=sharing', 'image', 'image/jpeg', 31881, 'google_drive', 'baking 1.jpg', NULL, NULL, '2025-10-20 11:45:52', '2025-10-20 11:45:52', NULL),
(32, 55, 'close_up_image', 'https://drive.google.com/file/d/1FcnSQeVtZkuRFs_puM5eGqj0qDGTG1cT/view?usp=sharing', 'https://drive.google.com/file/d/1FcnSQeVtZkuRFs_puM5eGqj0qDGTG1cT/view?usp=sharing', 'image', 'image/png', 2883494, 'google_drive', 'ChatGPT Image Aug 16, 2025, 10_12_13 PM.png', NULL, NULL, '2025-10-20 12:01:35', '2025-10-20 12:01:35', NULL),
(33, 55, 'full_body_image', 'https://drive.google.com/file/d/1BqNiJkqiT_zg5PMlGzD5voB8RSG0ALvy/view?usp=sharing', 'https://drive.google.com/file/d/1BqNiJkqiT_zg5PMlGzD5voB8RSG0ALvy/view?usp=sharing', 'image', 'image/jpeg', 73643, 'google_drive', 'desktop-wallpaper-ultra-sukuna-jujutsu-kaisen-and-background-jujutsu-kaisen-minimal.jpg', NULL, NULL, '2025-10-20 12:01:40', '2025-10-20 12:01:40', NULL),
(34, 55, 'half_body_image', 'https://drive.google.com/file/d/1v_JONj6_EAGPGxkRRHtRKsmEjodsgidV/view?usp=sharing', 'https://drive.google.com/file/d/1v_JONj6_EAGPGxkRRHtRKsmEjodsgidV/view?usp=sharing', 'image', 'image/jpeg', 167727, 'google_drive', 'thumb-1920-1352902.jpeg', NULL, NULL, '2025-10-20 12:01:44', '2025-10-20 12:01:44', NULL),
(35, 55, 'side_body_image', 'https://drive.google.com/file/d/1g03w3uGojUSxscVaQxCcX5rp5tJeTmnt/view?usp=sharing', 'https://drive.google.com/file/d/1g03w3uGojUSxscVaQxCcX5rp5tJeTmnt/view?usp=sharing', 'image', 'image/jpeg', 32834, 'google_drive', 'jujutsu-kaisen-satoru-gojo-blood-white-hair-blue-eyes-hd-wallpaper-preview.jpg', NULL, NULL, '2025-10-20 12:01:49', '2025-10-20 12:01:49', NULL),
(36, 55, 'signature_image', 'https://drive.google.com/file/d/14gq844ALjekk0_YnrjyZ0Cc6feXXCKvs/view?usp=sharing', 'https://drive.google.com/file/d/14gq844ALjekk0_YnrjyZ0Cc6feXXCKvs/view?usp=sharing', 'image', 'image/jpeg', 2585408, 'google_drive', 'wallpapersden.com_satoru-gojo-manga-jujutsu-kaisen_2563x1355.jpg', NULL, NULL, '2025-10-20 12:01:58', '2025-10-20 12:01:58', NULL),
(37, 55, 'video', 'https://drive.google.com/file/d/1L7SHqw5zglgeMJGApYkP8CCY9fS7RVht/view?usp=sharing', 'https://drive.google.com/file/d/1L7SHqw5zglgeMJGApYkP8CCY9fS7RVht/view?usp=sharing', 'video', 'video/mp4', 663117, 'google_drive', 'jjk 2 .mp4', NULL, NULL, '2025-10-20 12:02:02', '2025-10-20 12:02:02', NULL),
(38, 55, 'cnic_front', 'https://drive.google.com/file/d/1a4K2RcrtnmrhyxZ1a8ZhKz3ImXtIolBq/view?usp=sharing', 'https://drive.google.com/file/d/1a4K2RcrtnmrhyxZ1a8ZhKz3ImXtIolBq/view?usp=sharing', 'image', 'image/jpeg', 28707, 'google_drive', '84d76bfcbd71d6802547b0d6607a43ca.jpg', NULL, NULL, '2025-10-20 12:02:07', '2025-10-20 12:02:07', NULL),
(39, 55, 'cnic_back', 'https://drive.google.com/file/d/1pH42eubnJAPBDheJ1sk7Gv_01blqQ_cM/view?usp=sharing', 'https://drive.google.com/file/d/1pH42eubnJAPBDheJ1sk7Gv_01blqQ_cM/view?usp=sharing', 'image', 'image/jpeg', 60092, 'google_drive', '295147_311585.jpg', NULL, NULL, '2025-10-20 12:02:12', '2025-10-20 12:02:12', NULL),
(40, 70, 'close_up_image', 'https://drive.google.com/file/d/1jhdzsF0Xh9-menqVQATUAxsbC4tBuy-e/view?usp=sharing', 'https://drive.google.com/file/d/1jhdzsF0Xh9-menqVQATUAxsbC4tBuy-e/view?usp=sharing', 'image', 'image/jpeg', 28707, 'google_drive', '84d76bfcbd71d6802547b0d6607a43ca.jpg', NULL, NULL, '2025-11-30 04:16:11', '2025-11-30 04:16:11', NULL),
(41, 70, 'full_body_image', 'https://drive.google.com/file/d/1nCWoAJ1GFmh4bPnHUdCOIEgjnKIJpmw1/view?usp=sharing', 'https://drive.google.com/file/d/1nCWoAJ1GFmh4bPnHUdCOIEgjnKIJpmw1/view?usp=sharing', 'image', 'image/jpeg', 1276952, 'google_drive', '395313-sukuna-jujutsu-kaisen-4k-pc-wallpaper.jpg', NULL, NULL, '2025-11-30 04:16:16', '2025-11-30 04:16:16', NULL),
(42, 70, 'half_body_image', 'https://drive.google.com/file/d/1WCz3S6CNCc6Nj5fnB1etVprwhij6IrNg/view?usp=sharing', 'https://drive.google.com/file/d/1WCz3S6CNCc6Nj5fnB1etVprwhij6IrNg/view?usp=sharing', 'image', 'image/jpeg', 2585408, 'google_drive', 'wallpapersden.com_satoru-gojo-manga-jujutsu-kaisen_2563x1355.jpg', NULL, NULL, '2025-11-30 04:16:21', '2025-11-30 04:16:21', NULL),
(43, 70, 'side_body_image', 'https://drive.google.com/file/d/19xNmm1zbgRPm6_3dCLaJG4eh9q3kQhwh/view?usp=sharing', 'https://drive.google.com/file/d/19xNmm1zbgRPm6_3dCLaJG4eh9q3kQhwh/view?usp=sharing', 'image', 'image/jpeg', 167727, 'google_drive', 'thumb-1920-1352902.jpeg', NULL, NULL, '2025-11-30 04:16:25', '2025-11-30 04:16:25', NULL),
(44, 70, 'video', 'https://drive.google.com/file/d/1AjMTF1j7hMg4g3pNFAf3EyIozSwghGlG/view?usp=sharing', 'https://drive.google.com/file/d/1AjMTF1j7hMg4g3pNFAf3EyIozSwghGlG/view?usp=sharing', 'video', 'video/mp4', 450133, 'google_drive', 'jjk.mp4', NULL, NULL, '2025-11-30 04:16:30', '2025-11-30 04:16:30', NULL),
(45, 70, 'cnic_front', 'https://drive.google.com/file/d/1H00WzZkSMu1-PWGTGQmPEZYAj73_h43a/view?usp=sharing', 'https://drive.google.com/file/d/1H00WzZkSMu1-PWGTGQmPEZYAj73_h43a/view?usp=sharing', 'image', 'image/png', 2883494, 'google_drive', 'ChatGPT Image Aug 16, 2025, 10_12_13 PM.png', NULL, NULL, '2025-11-30 04:16:35', '2025-11-30 04:16:35', NULL),
(46, 70, 'cnic_back', 'https://drive.google.com/file/d/1QTtzDPDCFvbCTfoiDWI5fAxjv8i88Hrm/view?usp=sharing', 'https://drive.google.com/file/d/1QTtzDPDCFvbCTfoiDWI5fAxjv8i88Hrm/view?usp=sharing', 'image', 'image/jpeg', 1276952, 'google_drive', '395313-sukuna-jujutsu-kaisen-4k-pc-wallpaper.jpg', NULL, NULL, '2025-11-30 04:16:40', '2025-11-30 04:16:40', NULL),
(47, 72, 'close_up_image', 'https://drive.google.com/file/d/1oh4t_6Psn_GZPgIu_InriO2B5cuQDjeB/view?usp=sharing', 'https://drive.google.com/file/d/1oh4t_6Psn_GZPgIu_InriO2B5cuQDjeB/view?usp=sharing', 'image', 'image/jpeg', 28707, 'google_drive', '84d76bfcbd71d6802547b0d6607a43ca.jpg', NULL, NULL, '2025-11-30 04:32:19', '2025-11-30 04:32:19', NULL),
(48, 72, 'full_body_image', 'https://drive.google.com/file/d/1ZSTxmOZxJXYbjwwH_FkPSSHM4-7zWPM4/view?usp=sharing', 'https://drive.google.com/file/d/1ZSTxmOZxJXYbjwwH_FkPSSHM4-7zWPM4/view?usp=sharing', 'image', 'image/jpeg', 1276952, 'google_drive', '395313-sukuna-jujutsu-kaisen-4k-pc-wallpaper.jpg', NULL, NULL, '2025-11-30 04:32:24', '2025-11-30 04:32:24', NULL),
(49, 72, 'half_body_image', 'https://drive.google.com/file/d/1c7dNEz7L18rWqYFsE02F8S-uvfY_F9Gf/view?usp=sharing', 'https://drive.google.com/file/d/1c7dNEz7L18rWqYFsE02F8S-uvfY_F9Gf/view?usp=sharing', 'image', 'image/jpeg', 167727, 'google_drive', 'thumb-1920-1352902.jpeg', NULL, NULL, '2025-11-30 04:32:27', '2025-11-30 04:32:27', NULL),
(50, 72, 'side_body_image', 'https://drive.google.com/file/d/146TMrv7NRCGyP8jXuOB7eH2D36NIU97G/view?usp=sharing', 'https://drive.google.com/file/d/146TMrv7NRCGyP8jXuOB7eH2D36NIU97G/view?usp=sharing', 'image', 'image/jpeg', 2585408, 'google_drive', 'wallpapersden.com_satoru-gojo-manga-jujutsu-kaisen_2563x1355.jpg', NULL, NULL, '2025-11-30 04:32:33', '2025-11-30 04:32:33', NULL),
(51, 72, 'video', 'https://drive.google.com/file/d/14Qj6SZG-eS94m5cal-fR05mLf6iyTl7b/view?usp=sharing', 'https://drive.google.com/file/d/14Qj6SZG-eS94m5cal-fR05mLf6iyTl7b/view?usp=sharing', 'video', 'video/mp4', 450133, 'google_drive', 'jjk.mp4', NULL, NULL, '2025-11-30 04:32:36', '2025-11-30 04:32:36', NULL),
(52, 72, 'cnic_front', 'https://drive.google.com/file/d/1ea7cIZMNMiB2R0qvZuaKyR8I7Jl2K2kV/view?usp=sharing', 'https://drive.google.com/file/d/1ea7cIZMNMiB2R0qvZuaKyR8I7Jl2K2kV/view?usp=sharing', 'image', 'image/png', 984486, 'google_drive', '1.PNG', NULL, NULL, '2025-11-30 04:32:41', '2025-11-30 04:32:41', NULL),
(53, 72, 'cnic_back', 'https://drive.google.com/file/d/1IN6Ga4d06Q54SROrSAF-Ap98CLbIfZGu/view?usp=sharing', 'https://drive.google.com/file/d/1IN6Ga4d06Q54SROrSAF-Ap98CLbIfZGu/view?usp=sharing', 'image', 'image/jpeg', 2585408, 'google_drive', 'wallpapersden.com_satoru-gojo-manga-jujutsu-kaisen_2563x1355.jpg', NULL, NULL, '2025-11-30 04:32:46', '2025-11-30 04:32:46', NULL),
(54, 73, 'close_up_image', 'https://drive.google.com/file/d/1PBZu5ZyD-XM71W-RIlJGkEYkNaebl432/view?usp=sharing', 'https://drive.google.com/file/d/1PBZu5ZyD-XM71W-RIlJGkEYkNaebl432/view?usp=sharing', 'image', 'image/png', 984486, 'google_drive', '1.PNG', NULL, NULL, '2025-11-30 04:36:11', '2025-11-30 04:36:11', NULL),
(55, 73, 'full_body_image', 'https://drive.google.com/file/d/1YVKs_tRBhs08f-OMjvsU3f-pQM1I_1Y0/view?usp=sharing', 'https://drive.google.com/file/d/1YVKs_tRBhs08f-OMjvsU3f-pQM1I_1Y0/view?usp=sharing', 'image', 'image/jpeg', 60092, 'google_drive', '295147_311585.jpg', NULL, NULL, '2025-11-30 04:36:15', '2025-11-30 04:36:15', NULL),
(56, 73, 'half_body_image', 'https://drive.google.com/file/d/1dvw28zfw7EzwczseFt0jiiyWgYdUPeca/view?usp=sharing', 'https://drive.google.com/file/d/1dvw28zfw7EzwczseFt0jiiyWgYdUPeca/view?usp=sharing', 'image', 'image/jpeg', 1276952, 'google_drive', '395313-sukuna-jujutsu-kaisen-4k-pc-wallpaper.jpg', NULL, NULL, '2025-11-30 04:36:20', '2025-11-30 04:36:20', NULL),
(57, 73, 'side_body_image', 'https://drive.google.com/file/d/1xQ6QbyaaKLC0dCLFct1q37IawUznxB1F/view?usp=sharing', 'https://drive.google.com/file/d/1xQ6QbyaaKLC0dCLFct1q37IawUznxB1F/view?usp=sharing', 'image', 'image/jpeg', 2585408, 'google_drive', 'wallpapersden.com_satoru-gojo-manga-jujutsu-kaisen_2563x1355.jpg', NULL, NULL, '2025-11-30 04:36:26', '2025-11-30 04:36:26', NULL),
(58, 73, 'video', 'https://drive.google.com/file/d/1E6go3t7r-l5St7lAUNvWlAkMxlhvwHoo/view?usp=sharing', 'https://drive.google.com/file/d/1E6go3t7r-l5St7lAUNvWlAkMxlhvwHoo/view?usp=sharing', 'video', 'video/mp4', 450133, 'google_drive', 'jjk.mp4', NULL, NULL, '2025-11-30 04:36:30', '2025-11-30 04:36:30', NULL),
(59, 73, 'cnic_front', 'https://drive.google.com/file/d/1W6QSTStMQ0OxQLISCh_y6VtSA1wleu1r/view?usp=sharing', 'https://drive.google.com/file/d/1W6QSTStMQ0OxQLISCh_y6VtSA1wleu1r/view?usp=sharing', 'image', 'image/png', 2883494, 'google_drive', 'ChatGPT Image Aug 16, 2025, 10_12_13 PM.png', NULL, NULL, '2025-11-30 04:36:35', '2025-11-30 04:36:35', NULL),
(60, 73, 'cnic_back', 'https://drive.google.com/file/d/1b-SMhFjzC_RgXodgKZMNIl59S3t23SUo/view?usp=sharing', 'https://drive.google.com/file/d/1b-SMhFjzC_RgXodgKZMNIl59S3t23SUo/view?usp=sharing', 'image', 'image/jpeg', 28707, 'google_drive', '84d76bfcbd71d6802547b0d6607a43ca.jpg', NULL, NULL, '2025-11-30 04:36:39', '2025-11-30 04:36:39', NULL),
(61, 77, 'close_up_image', 'https://drive.google.com/file/d/128wWOOwGV6S3Ze0fBVCCnYz0d6RiRZay/view?usp=sharing', 'https://drive.google.com/file/d/128wWOOwGV6S3Ze0fBVCCnYz0d6RiRZay/view?usp=sharing', 'image', 'image/jpeg', 2585408, 'google_drive', 'wallpapersden.com_satoru-gojo-manga-jujutsu-kaisen_2563x1355.jpg', NULL, NULL, '2025-12-07 10:32:23', '2025-12-07 10:32:23', NULL),
(62, 77, 'full_body_image', 'https://drive.google.com/file/d/1-8ftGqDAJMmg3ydJom8uuR4B2ID_wLlM/view?usp=sharing', 'https://drive.google.com/file/d/1-8ftGqDAJMmg3ydJom8uuR4B2ID_wLlM/view?usp=sharing', 'image', 'image/jpeg', 1276952, 'google_drive', '395313-sukuna-jujutsu-kaisen-4k-pc-wallpaper.jpg', NULL, NULL, '2025-12-07 10:32:28', '2025-12-07 10:32:28', NULL),
(63, 77, 'half_body_image', 'https://drive.google.com/file/d/1PKT0S5dk8pFY0xqat68iHnfyiCgcm0jP/view?usp=sharing', 'https://drive.google.com/file/d/1PKT0S5dk8pFY0xqat68iHnfyiCgcm0jP/view?usp=sharing', 'image', 'image/jpeg', 963618, 'google_drive', 'spider - Copy.jpg', NULL, NULL, '2025-12-07 10:32:33', '2025-12-07 10:32:33', NULL),
(64, 77, 'side_body_image', 'https://drive.google.com/file/d/1HSobhkfKornS_DylMkxwGCRV15qJIiYf/view?usp=sharing', 'https://drive.google.com/file/d/1HSobhkfKornS_DylMkxwGCRV15qJIiYf/view?usp=sharing', 'image', 'image/jpeg', 1522347, 'google_drive', 'satoru-gojo-jujutsu-kaisen-79.jpg', NULL, NULL, '2025-12-07 10:32:38', '2025-12-07 10:32:38', NULL),
(65, 77, 'video', 'https://drive.google.com/file/d/1c17oTROMH6e51VrNHpDH-t6r84Vozx6M/view?usp=sharing', 'https://drive.google.com/file/d/1c17oTROMH6e51VrNHpDH-t6r84Vozx6M/view?usp=sharing', 'video', 'video/mp4', 450133, 'google_drive', 'jjk.mp4', NULL, NULL, '2025-12-07 10:32:43', '2025-12-07 10:32:43', NULL),
(66, 78, 'close_up_image', 'https://drive.google.com/file/d/1QuqUdBBZ9MatPx95l6KmQYf3w3YYT57a/view?usp=sharing', 'https://drive.google.com/file/d/1QuqUdBBZ9MatPx95l6KmQYf3w3YYT57a/view?usp=sharing', 'image', 'image/jpeg', 28707, 'google_drive', '84d76bfcbd71d6802547b0d6607a43ca.jpg', NULL, NULL, '2025-12-07 10:41:03', '2025-12-07 10:41:03', NULL),
(67, 78, 'full_body_image', 'https://drive.google.com/file/d/1x2bHg6hRDGSM0e8DOYWkGW1B5FkLhke5/view?usp=sharing', 'https://drive.google.com/file/d/1x2bHg6hRDGSM0e8DOYWkGW1B5FkLhke5/view?usp=sharing', 'image', 'image/jpeg', 60092, 'google_drive', '295147_311585.jpg', NULL, NULL, '2025-12-07 10:41:06', '2025-12-07 10:41:06', NULL),
(68, 78, 'half_body_image', 'https://drive.google.com/file/d/1w9m194g0mW9R-NHtXUsG3JGiYjYoD_NO/view?usp=sharing', 'https://drive.google.com/file/d/1w9m194g0mW9R-NHtXUsG3JGiYjYoD_NO/view?usp=sharing', 'image', 'image/jpeg', 1276952, 'google_drive', '395313-sukuna-jujutsu-kaisen-4k-pc-wallpaper.jpg', NULL, NULL, '2025-12-07 10:41:11', '2025-12-07 10:41:11', NULL),
(69, 78, 'side_body_image', 'https://drive.google.com/file/d/1rC8virMpWtn_X644aF9heNl65zOJItVX/view?usp=sharing', 'https://drive.google.com/file/d/1rC8virMpWtn_X644aF9heNl65zOJItVX/view?usp=sharing', 'image', 'image/jpeg', 73643, 'google_drive', 'desktop-wallpaper-ultra-sukuna-jujutsu-kaisen-and-background-jujutsu-kaisen-minimal.jpg', NULL, NULL, '2025-12-07 10:41:15', '2025-12-07 10:41:15', NULL),
(70, 78, 'video', 'https://drive.google.com/file/d/1bci0We9y8_2VSS0IdztcD2uRXKgIUpA5/view?usp=sharing', 'https://drive.google.com/file/d/1bci0We9y8_2VSS0IdztcD2uRXKgIUpA5/view?usp=sharing', 'video', 'video/mp4', 450133, 'google_drive', 'jjk.mp4', NULL, NULL, '2025-12-07 10:41:19', '2025-12-07 10:41:19', NULL),
(71, 91, 'close_up_image', 'models/91/HmfWsXZfCbtgtjhBJNYFo0WGHTVaxBy9QCX1VOaS.jpg', 'http://localhost/storage/models/91/HmfWsXZfCbtgtjhBJNYFo0WGHTVaxBy9QCX1VOaS.jpg', 'image', 'image/jpeg', 60092, 'public', '295147_311585.jpg', NULL, NULL, '2025-12-21 11:14:55', '2025-12-21 11:14:55', NULL),
(72, 91, 'full_body_image', 'models/91/n9jD5GFtaxsnoq2tVXkYH6NJjqedjZM3QV3ZbXzu.jpg', 'http://localhost/storage/models/91/n9jD5GFtaxsnoq2tVXkYH6NJjqedjZM3QV3ZbXzu.jpg', 'image', 'image/jpeg', 48756, 'public', 'b51fb585-f6a2-4af2-be8d-b47ec4c42c20.jfif', NULL, NULL, '2025-12-21 11:14:55', '2025-12-21 11:14:55', NULL),
(73, 91, 'half_body_image', 'models/91/TJRnSBOhSBdwYOZ6d1h9VktIFFHGO93xnMulrUhx.jpg', 'http://localhost/storage/models/91/TJRnSBOhSBdwYOZ6d1h9VktIFFHGO93xnMulrUhx.jpg', 'image', 'image/jpeg', 167727, 'public', 'thumb-1920-1352902.jpeg', NULL, NULL, '2025-12-21 11:14:55', '2025-12-21 11:14:55', NULL),
(74, 91, 'side_body_image', 'models/91/FI6D8UXE0qHBcu1o1fCpa2YlyLTySNheg1QnJM9v.jpg', 'http://localhost/storage/models/91/FI6D8UXE0qHBcu1o1fCpa2YlyLTySNheg1QnJM9v.jpg', 'image', 'image/jpeg', 2585408, 'public', 'wallpapersden.com_satoru-gojo-manga-jujutsu-kaisen_2563x1355.jpg', NULL, NULL, '2025-12-21 11:14:55', '2025-12-21 11:14:55', NULL),
(75, 91, 'video', 'models/91/QELWBFRksY3nMTkqvF8ENgqmixAxg3YdD8dmqbBP.mp4', 'http://localhost/storage/models/91/QELWBFRksY3nMTkqvF8ENgqmixAxg3YdD8dmqbBP.mp4', 'video', 'video/mp4', 450133, 'public', 'jjk.mp4', NULL, NULL, '2025-12-21 11:14:55', '2025-12-21 11:14:55', NULL),
(76, 92, 'close_up_image', 'models/92/1KV6N6vhwFfzQSgzK821L8QhmWIeDzEQ9833v9hI.jpg', 'http://localhost/storage/models/92/1KV6N6vhwFfzQSgzK821L8QhmWIeDzEQ9833v9hI.jpg', 'image', 'image/jpeg', 60092, 'public', '295147_311585.jpg', NULL, NULL, '2025-12-21 12:14:18', '2025-12-21 12:14:18', NULL),
(77, 92, 'full_body_image', 'models/92/eeKlPMi8R0gGHiGArIySjt0aWf1vQa0WItpFYHjm.jpg', 'http://localhost/storage/models/92/eeKlPMi8R0gGHiGArIySjt0aWf1vQa0WItpFYHjm.jpg', 'image', 'image/jpeg', 1276952, 'public', '395313-sukuna-jujutsu-kaisen-4k-pc-wallpaper.jpg', NULL, NULL, '2025-12-21 12:14:18', '2025-12-21 12:14:18', NULL),
(78, 92, 'half_body_image', 'models/92/GqqBPVCfGPzZuMZFcrjDWrYsSU4f9Dy9tIA0jMYf.jpg', 'http://localhost/storage/models/92/GqqBPVCfGPzZuMZFcrjDWrYsSU4f9Dy9tIA0jMYf.jpg', 'image', 'image/jpeg', 167727, 'public', 'thumb-1920-1352902.jpeg', NULL, NULL, '2025-12-21 12:14:18', '2025-12-21 12:14:18', NULL),
(79, 92, 'side_body_image', 'models/92/MaYDOHZRrLYKvrxNLt6bS7W3YyEeUUM2O6JJfWUP.jpg', 'http://localhost/storage/models/92/MaYDOHZRrLYKvrxNLt6bS7W3YyEeUUM2O6JJfWUP.jpg', 'image', 'image/jpeg', 2585408, 'public', 'wallpapersden.com_satoru-gojo-manga-jujutsu-kaisen_2563x1355.jpg', NULL, NULL, '2025-12-21 12:14:18', '2025-12-21 12:14:18', NULL),
(80, 92, 'video', 'models/92/ebIJBjrPR5BJzanvOvprKGn8xyexJ155d0oNXEa0.mp4', 'http://localhost/storage/models/92/ebIJBjrPR5BJzanvOvprKGn8xyexJ155d0oNXEa0.mp4', 'video', 'video/mp4', 450133, 'public', 'jjk.mp4', NULL, NULL, '2025-12-21 12:14:18', '2025-12-21 12:14:18', NULL),
(81, 92, 'cnic_front', 'models/92/eTnJlJBoT26r0t9su1aMvI8MVnfrd2wEczi8qc1E.png', 'http://localhost/storage/models/92/eTnJlJBoT26r0t9su1aMvI8MVnfrd2wEczi8qc1E.png', 'image', 'image/png', 984486, 'public', '1.PNG', NULL, NULL, '2025-12-21 12:14:18', '2025-12-21 12:14:18', NULL),
(82, 92, 'cnic_back', 'models/92/knOGUnaUyUGqU5W4xiFKaQ4qrnQ5HHAS3kyGy893.jpg', 'http://localhost/storage/models/92/knOGUnaUyUGqU5W4xiFKaQ4qrnQ5HHAS3kyGy893.jpg', 'image', 'image/jpeg', 28707, 'public', '84d76bfcbd71d6802547b0d6607a43ca.jpg', NULL, NULL, '2025-12-21 12:14:18', '2025-12-21 12:14:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:8:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:10:\"users.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:12:\"users.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:10:\"users.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:12:\"users.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:10:\"roles.view\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:12:\"roles.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:10:\"roles.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:12:\"roles.delete\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:7:\"manager\";s:1:\"c\";s:3:\"web\";}}}', 1765197327);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_06_164304_create_permission_tables', 1),
(5, '2025_09_06_210323_create_models_table', 1),
(6, '2025_09_06_210523_create_assets_table', 1),
(7, '2025_09_06_210716_remove_file_columns_from_models_table', 1),
(8, '2025_10_12_144316_add_status_to_models_table', 2),
(9, '2025_10_15_171604_add_is_verified_to_models_table', 3),
(10, '2025_11_29_135448_remove_father_home_from_models_table', 4),
(11, '2025_11_29_141136_add_availability_to_models_table', 5),
(12, '2025_11_29_141230_add_availability_to_models_table', 5),
(13, '2025_11_29_142504_add_name_as_per_cnic_to_models_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_as_per_cnic` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` smallint(5) UNSIGNED DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `instagram_id` varchar(255) DEFAULT NULL,
  `snapchat_id` varchar(255) DEFAULT NULL,
  `tiktok_id` varchar(255) DEFAULT NULL,
  `youtube_id` varchar(255) DEFAULT NULL,
  `passport_no` varchar(255) DEFAULT NULL,
  `passport_expiry` date DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `country_of_passport` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `cnic_expiry` date DEFAULT NULL,
  `backup_contact_name` varchar(255) DEFAULT NULL,
  `backup_number` varchar(255) DEFAULT NULL,
  `languages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`languages`)),
  `other_languages` text DEFAULT NULL,
  `special_talent` text DEFAULT NULL,
  `measurements` text DEFAULT NULL,
  `signed_date` date DEFAULT NULL,
  `status` enum('pending','new-request','on-hold','approved','rejected') NOT NULL DEFAULT 'pending',
  `isVerified` tinyint(1) NOT NULL DEFAULT 0,
  `availability` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `name`, `name_as_per_cnic`, `dob`, `age`, `gender`, `occupation`, `mobile_no`, `address`, `email`, `facebook_id`, `instagram_id`, `snapchat_id`, `tiktok_id`, `youtube_id`, `passport_no`, `passport_expiry`, `nationality`, `country_of_passport`, `cnic`, `cnic_expiry`, `backup_contact_name`, `backup_number`, `languages`, `other_languages`, `special_talent`, `measurements`, `signed_date`, `status`, `isVerified`, `availability`, `created_at`, `updated_at`) VALUES
(1, 'Huzaifa', NULL, '2025-11-01', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', NULL, 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-08', 'ssa', 'Iran', '4240941488215', '2025-10-30', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', NULL, 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"21\",\"waist\":\"21\",\"trouser\":\"12\",\"shoe\":\"12\"}', '2025-10-08', 'on-hold', 0, NULL, '2025-10-11 11:51:45', '2025-10-12 13:09:50'),
(2, 'Huzaifa', NULL, '2025-11-01', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'techno@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-08', 'ssa', 'Iran', '4240941488215', '2025-10-30', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', NULL, 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"21\",\"waist\":\"21\",\"trouser\":\"12\",\"shoe\":\"12\"}', '2025-10-08', 'on-hold', 0, NULL, '2025-10-11 12:01:23', '2025-10-12 13:09:39'),
(3, 'ss', NULL, '2025-10-25', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'techno@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-09', 'ssa', 'Pakistan', '4240941488215', '2025-09-30', '122121', '2121', '\"[\\\"English\\\"]\"', NULL, 'aS', '{\"hair_color\":\"red\",\"height\":\"12\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'on-hold', 0, NULL, '2025-10-11 13:21:22', '2025-10-13 13:28:20'),
(4, 'ss', NULL, '2025-10-25', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'techno@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-09', 'ssa', 'Pakistan', '4240941488215', '2025-09-30', '122121', '2121', '\"[\\\"English\\\"]\"', NULL, 'aS', '{\"hair_color\":\"red\",\"height\":\"12\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'approved', 0, NULL, '2025-10-11 13:22:09', '2025-12-10 16:07:42'),
(5, 'ss', NULL, '2025-10-25', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-09', 'ssa', 'Pakistan', '4240941488215', '2025-09-30', '122121', '2121', '\"[\\\"English\\\"]\"', NULL, 'aS', '{\"hair_color\":\"red\",\"height\":\"12\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'on-hold', 0, NULL, '2025-10-11 13:22:41', '2025-10-13 13:33:17'),
(6, 'ss', NULL, '2025-10-25', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-09', 'ssa', 'Pakistan', '4240941488215', '2025-09-30', '122121', '2121', '\"[\\\"English\\\"]\"', NULL, 'aS', '{\"hair_color\":\"red\",\"height\":\"12\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'on-hold', 0, NULL, '2025-10-11 13:25:09', '2025-10-13 13:38:06'),
(7, 'ss', NULL, '2025-10-25', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-09', 'ssa', 'Pakistan', '4240941488215', '2025-09-30', '122121', '2121', '\"[\\\"English\\\"]\"', NULL, 'aS', '{\"hair_color\":\"red\",\"height\":\"12\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'approved', 0, NULL, '2025-10-11 13:52:26', '2025-10-20 09:59:49'),
(8, 'ss', NULL, '2025-10-25', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-09', 'ssa', 'Pakistan', '4240941488215', '2025-09-30', '122121', '2121', '\"[\\\"English\\\"]\"', NULL, 'aS', '{\"hair_color\":\"red\",\"height\":\"12\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'on-hold', 0, NULL, '2025-10-11 13:55:39', '2025-10-20 10:15:30'),
(9, 'sasa', NULL, '2025-10-15', 20, 'Male', 'wqwq', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-21', 'ssa', 'Pakistan', '4240941488215', '2025-10-14', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"21\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'approved', 0, NULL, '2025-10-12 02:11:52', '2025-10-12 12:59:05'),
(10, 'sasa', NULL, '2025-10-15', 20, 'Male', 'wqwq', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-21', 'ssa', 'Pakistan', '4240941488215', '2025-10-14', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"21\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'on-hold', 0, NULL, '2025-10-12 02:36:13', '2025-10-20 10:04:52'),
(11, 'sasa', NULL, '2025-10-15', 20, 'Male', 'wqwq', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-21', 'ssa', 'Pakistan', '4240941488215', '2025-10-14', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"21\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'on-hold', 0, NULL, '2025-10-12 02:39:51', '2025-10-20 10:17:18'),
(12, 'sasa', NULL, '2025-10-15', 20, 'Male', 'wqwq', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-21', 'ssa', 'Pakistan', '4240941488215', '2025-10-14', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"21\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'approved', 0, NULL, '2025-10-12 02:41:31', '2025-12-10 16:10:27'),
(13, 'sasa', NULL, '2025-10-15', 20, 'Male', 'wqwq', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-21', 'ssa', 'Pakistan', '4240941488215', '2025-10-14', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"21\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'approved', 0, NULL, '2025-10-12 02:44:10', '2025-12-12 03:01:23'),
(14, 'sasa', NULL, '2025-10-30', 2112, 'Female', 'wqwq', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-07', 'ssa', 'Iran', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"2121\",\"shoulder\":\"21121\",\"bust\":\"12\",\"hip\":\"12\",\"dress\":\"1221\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"12121\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"12\"}', NULL, 'approved', 0, NULL, '2025-10-12 05:14:00', '2025-12-12 03:03:22'),
(15, 'sasa', NULL, '2025-10-30', 2112, 'Female', 'wqwq', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-07', 'ssa', 'Iran', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"2121\",\"shoulder\":\"21121\",\"bust\":\"12\",\"hip\":\"12\",\"dress\":\"1221\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"12121\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"12\"}', NULL, 'new-request', 0, NULL, '2025-10-12 05:14:07', '2025-10-12 05:14:07'),
(16, 'wqwqwqwq', NULL, '2025-10-24', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-11-05', 'ssa', 'Iran', '4240941488215', NULL, '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"21\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'rejected', 0, NULL, '2025-10-12 09:59:07', '2025-10-20 10:01:02'),
(17, 'test1', NULL, '2025-10-30', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-23', 'ssa', 'Iran', '4240941488215', '2025-10-20', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"12\"}', NULL, 'new-request', 0, NULL, '2025-10-12 11:41:22', '2025-10-12 11:41:22'),
(18, 'test2', NULL, '2025-10-31', 20, 'Female', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-04', 'ssa', 'Pakistan', NULL, '2025-11-05', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"1321\",\"shoulder\":\"21\",\"bust\":\"23\",\"hip\":\"132\",\"dress\":\"123\",\"eye_color\":\"red\",\"collar\":\"321\",\"top\":\"123\",\"waist\":\"213\",\"trouser\":\"123\",\"shoe\":\"213\"}', NULL, 'new-request', 0, NULL, '2025-10-12 12:20:55', '2025-10-12 12:20:55'),
(19, 'test3', NULL, NULL, 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-10', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', NULL, '{\"hair_color\":\"red\",\"height\":\"221\",\"shoulder\":\"21\",\"bust\":\"2121\",\"hip\":\"2121\",\"dress\":\"2121\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"2121\",\"waist\":\"2121\",\"trouser\":\"12\",\"shoe\":\"21\"}', '2025-10-01', 'on-hold', 0, NULL, '2025-10-12 12:43:32', '2025-10-20 10:17:24'),
(20, 'test3', NULL, NULL, 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-10', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', NULL, '{\"hair_color\":\"red\",\"height\":\"221\",\"shoulder\":\"21\",\"bust\":\"2121\",\"hip\":\"2121\",\"dress\":\"2121\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"2121\",\"waist\":\"2121\",\"trouser\":\"12\",\"shoe\":\"21\"}', '2025-10-01', 'new-request', 0, NULL, '2025-10-12 12:53:26', '2025-10-12 12:56:38'),
(21, 'test4', NULL, '2025-10-31', 20, 'Female', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-23', 'ssa', 'Pakistan', '4240941488215', '2025-10-31', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"212\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"12\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', '2025-10-31', 'pending', 0, NULL, '2025-10-15 11:39:59', '2025-10-15 11:39:59'),
(22, 'test5', NULL, '2025-10-23', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-31', 'ssa', 'Pakistan', '4240941488215', '2025-10-30', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"12\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', '2025-10-30', 'pending', 0, NULL, '2025-10-15 12:22:54', '2025-10-15 12:22:54'),
(23, 'test5', NULL, '2025-10-31', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', NULL, 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-31', 'ssa', 'Pakistan', NULL, '2025-10-23', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"2121\",\"shoulder\":\"12\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"21\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"21\"}', '2025-10-30', 'pending', 0, NULL, '2025-10-15 12:24:15', '2025-10-15 12:24:15'),
(24, 'test5', NULL, '2025-10-31', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', NULL, 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-31', 'ssa', 'Pakistan', NULL, '2025-10-23', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"2121\",\"shoulder\":\"12\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"21\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"21\"}', '2025-10-30', 'pending', 0, NULL, '2025-10-15 12:40:07', '2025-10-15 12:40:07'),
(25, 'sasa', NULL, '2025-11-07', 20, 'Female', 'asa', '44424222', NULL, 'mhuzaifa05302@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"hair_color\":null,\"height\":null,\"shoulder\":null,\"bust\":null,\"hip\":null,\"dress\":null,\"eye_color\":null,\"collar\":null,\"top\":null,\"waist\":null,\"trouser\":null,\"shoe\":null}', NULL, 'pending', 0, NULL, '2025-10-15 12:41:15', '2025-10-15 12:41:15'),
(26, 'assa', NULL, '2025-11-01', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"hair_color\":null,\"height\":null,\"shoulder\":null,\"bust\":null,\"hip\":null,\"dress\":null,\"eye_color\":null,\"collar\":null,\"top\":null,\"waist\":null,\"trouser\":null,\"shoe\":null}', NULL, 'pending', 0, NULL, '2025-10-15 12:55:39', '2025-10-15 12:55:39'),
(27, 'assa', NULL, '2025-11-01', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"hair_color\":null,\"height\":null,\"shoulder\":null,\"bust\":null,\"hip\":null,\"dress\":null,\"eye_color\":null,\"collar\":null,\"top\":null,\"waist\":null,\"trouser\":null,\"shoe\":null}', NULL, 'pending', 0, NULL, '2025-10-15 12:58:02', '2025-10-15 12:58:02'),
(28, 'ssa', NULL, '2025-10-31', NULL, 'Female', 'asa', 'sasa', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-11-04', 'ssa', NULL, '4240941488215', '2025-10-15', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"21\"}', '2025-10-16', 'pending', 0, NULL, '2025-10-15 13:14:29', '2025-10-15 13:14:29'),
(29, 'ssa', NULL, '2025-10-31', NULL, 'Female', 'asa', 'sasa', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-11-04', 'ssa', NULL, '4240941488215', '2025-10-15', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"21\"}', '2025-10-16', 'pending', 0, NULL, '2025-10-15 13:29:24', '2025-10-15 13:29:24'),
(30, 'ssa', NULL, '2025-10-31', NULL, 'Female', 'asa', 'sasa', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-11-04', 'ssa', NULL, '4240941488215', '2025-10-15', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"21\"}', '2025-10-16', 'pending', 0, NULL, '2025-10-15 13:36:23', '2025-10-15 13:36:23'),
(31, 'ssa', NULL, '2025-10-31', NULL, 'Female', 'asa', 'sasa', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-11-04', 'ssa', NULL, '4240941488215', '2025-10-15', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"21\"}', '2025-10-16', 'pending', 0, NULL, '2025-10-15 13:39:36', '2025-10-15 13:39:36'),
(32, 'aa', NULL, '2025-10-22', 22, 'Male', 'sss', '212121', 'asas', 'mhuzaifa05302@gmail.com', '32332', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"hair_color\":null,\"height\":null,\"shoulder\":null,\"bust\":null,\"hip\":null,\"dress\":null,\"eye_color\":null,\"collar\":null,\"top\":null,\"waist\":null,\"trouser\":null,\"shoe\":null}', NULL, 'pending', 0, NULL, '2025-10-15 13:41:29', '2025-10-15 13:41:29'),
(33, 'aa', NULL, '2025-10-22', 22, 'Male', 'sss', '212121', 'asas', 'mhuzaifa05302@gmail.com', '32332', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"hair_color\":null,\"height\":null,\"shoulder\":null,\"bust\":null,\"hip\":null,\"dress\":null,\"eye_color\":null,\"collar\":null,\"top\":null,\"waist\":null,\"trouser\":null,\"shoe\":null}', NULL, 'pending', 0, NULL, '2025-10-15 13:54:16', '2025-10-15 13:54:16'),
(34, 'wqwq', NULL, '2025-11-01', 20, 'Female', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"hair_color\":null,\"height\":null,\"shoulder\":null,\"bust\":null,\"hip\":null,\"dress\":null,\"eye_color\":null,\"collar\":null,\"top\":null,\"waist\":null,\"trouser\":null,\"shoe\":null}', NULL, 'pending', 0, NULL, '2025-10-15 14:00:52', '2025-10-15 14:00:52'),
(35, 'wqwq', NULL, '2025-11-01', 20, 'Female', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"hair_color\":null,\"height\":null,\"shoulder\":null,\"bust\":null,\"hip\":null,\"dress\":null,\"eye_color\":null,\"collar\":null,\"top\":null,\"waist\":null,\"trouser\":null,\"shoe\":null}', NULL, 'new-request', 1, NULL, '2025-10-15 14:01:41', '2025-10-15 14:10:10'),
(36, 'test6', NULL, '2025-10-07', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-29', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"212121\",\"hip\":\"2121\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"212121\",\"waist\":\"2121\",\"trouser\":\"21\",\"shoe\":\"2121\"}', '2025-10-31', 'pending', 0, NULL, '2025-10-20 02:29:01', '2025-10-20 02:29:01'),
(37, 'test6', NULL, '2025-10-07', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-29', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"212121\",\"hip\":\"2121\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"212121\",\"waist\":\"2121\",\"trouser\":\"21\",\"shoe\":\"2121\"}', '2025-10-31', 'pending', 0, NULL, '2025-10-20 02:37:27', '2025-10-20 02:37:27'),
(38, 'test6', NULL, '2025-10-07', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-29', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"212121\",\"hip\":\"2121\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"212121\",\"waist\":\"2121\",\"trouser\":\"21\",\"shoe\":\"2121\"}', '2025-10-31', 'pending', 0, NULL, '2025-10-20 02:46:05', '2025-10-20 02:46:05'),
(39, 'test6', NULL, '2025-10-07', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-29', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"212121\",\"hip\":\"2121\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"212121\",\"waist\":\"2121\",\"trouser\":\"21\",\"shoe\":\"2121\"}', '2025-10-31', 'pending', 0, NULL, '2025-10-20 02:48:36', '2025-10-20 02:48:36'),
(40, 'test6', NULL, '2025-10-07', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-29', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"212121\",\"hip\":\"2121\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"212121\",\"waist\":\"2121\",\"trouser\":\"21\",\"shoe\":\"2121\"}', '2025-10-31', 'pending', 0, NULL, '2025-10-20 02:51:50', '2025-10-20 02:51:50'),
(41, 'test6', NULL, '2025-10-07', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-29', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"212121\",\"hip\":\"2121\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"212121\",\"waist\":\"2121\",\"trouser\":\"21\",\"shoe\":\"2121\"}', '2025-10-31', 'pending', 0, NULL, '2025-10-20 02:53:21', '2025-10-20 02:53:21'),
(42, 'test6', NULL, '2025-10-07', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-29', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"212121\",\"hip\":\"2121\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"212121\",\"waist\":\"2121\",\"trouser\":\"21\",\"shoe\":\"2121\"}', '2025-10-31', 'pending', 0, NULL, '2025-10-20 03:58:35', '2025-10-20 03:58:35'),
(43, 'test6', NULL, '2025-10-07', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-29', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"212121\",\"hip\":\"2121\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"212121\",\"waist\":\"2121\",\"trouser\":\"21\",\"shoe\":\"2121\"}', '2025-10-31', 'pending', 0, NULL, '2025-10-20 04:02:03', '2025-10-20 04:02:03'),
(44, 'test6', NULL, '2025-10-07', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa05302@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-29', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'aS', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"212121\",\"hip\":\"2121\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"212121\",\"waist\":\"2121\",\"trouser\":\"21\",\"shoe\":\"2121\"}', '2025-10-31', 'pending', 0, NULL, '2025-10-20 04:12:28', '2025-10-20 04:12:28'),
(45, 'test7', NULL, '2025-10-24', 20, 'Female', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', NULL, 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-31', 'ssa', 'Pakistan', '4240941488215', '2025-10-25', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"hair_color\":\"red\",\"height\":\"32\",\"shoulder\":\"32\",\"bust\":\"32\",\"hip\":\"32\",\"dress\":\"32\",\"eye_color\":\"red\",\"collar\":\"32\",\"top\":\"32\",\"waist\":\"32\",\"trouser\":\"32\",\"shoe\":\"32\"}', NULL, 'pending', 0, NULL, '2025-10-20 05:19:24', '2025-10-20 05:19:24'),
(46, 'sasa', NULL, '2025-10-30', 20, 'Male', 'wqwq', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-31', 'ssa', 'Pakistan', '4240941488215', '2025-10-29', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', NULL, 'dds', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"12\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"12\"}', '2025-10-29', 'pending', 0, NULL, '2025-10-20 05:28:54', '2025-10-20 05:28:54'),
(47, 'xz', NULL, '2025-10-23', 20, 'Female', 'wqwq', NULL, '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-31', 'ssa', 'Pakistan', '4240941488215', NULL, '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"12\",\"dress\":\"1221\",\"eye_color\":\"red\",\"collar\":\"12\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"32\"}', '2025-10-29', 'pending', 0, NULL, '2025-10-20 05:36:03', '2025-10-20 05:36:03'),
(48, 'haseeb', NULL, '2025-10-24', 20, 'Female', 'wqwq', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, 'http://127.0.0.1:8000/dashboard', '23123213', '2025-11-01', 'ssa', 'Pakistan', '4240941488215', '2025-10-31', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"2121\",\"hip\":\"1212\",\"dress\":\"2121\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"12\",\"waist\":\"221\",\"trouser\":\"212121\",\"shoe\":\"21\"}', '2025-11-07', 'pending', 0, NULL, '2025-10-20 05:49:10', '2025-10-20 05:49:10'),
(49, 'haseeb', NULL, '2025-10-24', 20, 'Female', 'wqwq', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, 'http://127.0.0.1:8000/dashboard', '23123213', '2025-11-01', 'ssa', 'Pakistan', '4240941488215', '2025-10-31', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"2121\",\"hip\":\"1212\",\"dress\":\"2121\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"12\",\"waist\":\"221\",\"trouser\":\"212121\",\"shoe\":\"21\"}', '2025-11-07', 'approved', 1, NULL, '2025-10-20 05:50:34', '2025-10-20 10:26:14'),
(50, 'Huzaifa', NULL, '2025-10-31', 20, 'Female', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-30', 'ssa', 'Pakistan', '4240941488215', '2025-10-31', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"12\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', '2025-10-31', 'new-request', 1, NULL, '2025-10-20 05:53:59', '2025-10-20 05:55:14'),
(51, 'sdds', NULL, '2025-10-15', 20, 'Male', 'asa', '44424222', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-24', 'ssa', 'Pakistan', '4240941488215', '2025-10-08', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"hair_color\":\"red\",\"height\":\"12\",\"shoulder\":\"2121\",\"bust\":\"1221\",\"hip\":\"21\",\"dress\":\"21\",\"eye_color\":\"red\",\"collar\":\"2121\",\"top\":\"21\",\"waist\":\"2121\",\"trouser\":\"2121\",\"shoe\":\"2121\"}', '2025-11-08', 'on-hold', 1, NULL, '2025-10-20 09:10:19', '2025-10-20 10:22:08'),
(52, 'haseeb', NULL, '2025-10-15', 20, 'Male', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-23', 'ssa', 'Iran', '4240141388217', '2025-10-29', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"21\",\"eye_color\":\"eed\",\"collar\":\"21\",\"top\":\"21\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"12\"}', '2025-10-21', 'new-request', 0, NULL, '2025-10-20 11:15:06', '2025-10-20 11:15:06'),
(53, 'sasa', NULL, '2025-10-16', 20, 'Male', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-23', 'ssa', 'Pakistan', '4240141388217', '2025-10-08', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"12112\",\"dress\":\"2121\",\"eye_color\":\"eed\",\"collar\":\"21\",\"top\":\"21\",\"waist\":\"12\",\"trouser\":\"21\",\"shoe\":\"12\"}', '2025-10-24', 'pending', 0, NULL, '2025-10-20 11:26:57', '2025-10-20 11:26:57'),
(54, 'sasa', NULL, '2025-10-16', 20, 'Male', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-23', 'ssa', 'Pakistan', '4240141388217', '2025-10-08', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"12112\",\"dress\":\"2121\",\"eye_color\":\"eed\",\"collar\":\"21\",\"top\":\"21\",\"waist\":\"12\",\"trouser\":\"21\",\"shoe\":\"12\"}', '2025-10-24', 'new-request', 1, NULL, '2025-10-20 11:45:19', '2025-10-20 11:47:56'),
(55, 'haseeb', NULL, '2025-10-10', 20, 'Male', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-23', 'ssa', 'Iran', '4240141388217', '2025-10-23', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"hair_color\":\"red\",\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"12\",\"hip\":\"12\",\"dress\":\"12\",\"eye_color\":\"red\",\"collar\":\"21\",\"top\":\"21\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"12\"}', '2025-10-23', 'new-request', 1, NULL, '2025-10-20 12:01:27', '2025-10-20 12:04:15'),
(56, 'haseeb', NULL, '2025-11-29', 20, 'Other', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'najam@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Austria', 'Australia', '4240941488215', '2025-11-21', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"22\",\"bust\":\"22\",\"hip\":\"22\",\"dress\":\"22\",\"collar\":\"22\",\"top\":\"S\",\"waist\":null,\"trouser\":\"22\",\"shoe\":\"22\"}', '2025-11-27', 'pending', 0, '22121', '2025-11-29 11:54:39', '2025-11-29 11:54:39'),
(57, 'test9', NULL, '2025-11-28', 20, 'Other', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Bahamas', 'Andorra', '4240941488215', '2025-11-27', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"2121\",\"dress\":\"sasasasa\",\"collar\":\"23\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"21\"}', '2025-11-27', 'pending', 0, '22121', '2025-11-29 12:17:15', '2025-11-29 12:17:15'),
(58, 'dsdds', NULL, '2025-12-06', 20, 'Male', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Belarus', 'Barbados', '4244141484214', '2025-11-29', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"21\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"xz\",\"collar\":\"21\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"12\",\"shoe\":\"12\"}', '2025-11-11', 'pending', 0, '22121', '2025-11-29 12:37:57', '2025-11-29 12:37:57'),
(59, 'dsdds', NULL, '2025-12-06', 20, 'Male', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Belarus', 'Barbados', '4244141484214', '2025-11-29', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"21\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"xz\",\"collar\":\"21\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"12\",\"shoe\":\"12\"}', '2025-11-11', 'pending', 0, '22121', '2025-11-29 12:38:44', '2025-11-29 12:38:44'),
(60, 'haseeb', NULL, '2025-11-19', 20, 'Female', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Bangladesh', 'Bangladesh', '4240941488215', '2025-11-27', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"sasa\",\"collar\":null,\"top\":\"M\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"21\"}', '2025-11-26', 'pending', 0, '22121', '2025-11-29 12:40:25', '2025-11-29 12:40:25'),
(61, 'haseeb', NULL, '2025-11-19', 20, 'Female', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Bangladesh', 'Bangladesh', '4240941488215', '2025-11-27', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"sasa\",\"collar\":null,\"top\":\"M\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"21\"}', '2025-11-26', 'pending', 0, '22121', '2025-11-29 12:42:07', '2025-11-29 12:42:07'),
(62, 'haseeb', NULL, '2025-11-19', 20, 'Female', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Bangladesh', 'Bangladesh', '4240941488215', '2025-11-27', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"sasa\",\"collar\":null,\"top\":\"M\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"21\"}', '2025-11-26', 'pending', 0, '22121', '2025-11-29 12:49:46', '2025-11-29 12:49:46'),
(63, 'sasa', NULL, '2025-11-25', 20, 'Female', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Afghanistan', 'Albania', '4240941488215', '2025-11-05', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"32\",\"shoulder\":\"32\",\"bust\":\"23\",\"hip\":\"32\",\"dress\":\"sa\",\"collar\":\"32\",\"top\":\"S\",\"waist\":\"23\",\"trouser\":\"23\",\"shoe\":\"32\"}', '2025-11-27', 'pending', 0, '22121', '2025-11-29 12:52:37', '2025-11-29 12:52:37'),
(64, 'sasa', NULL, '2025-11-25', 20, 'Female', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Afghanistan', 'Albania', '4240941488215', '2025-11-05', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"32\",\"shoulder\":\"32\",\"bust\":\"23\",\"hip\":\"32\",\"dress\":\"sa\",\"collar\":\"32\",\"top\":\"S\",\"waist\":\"23\",\"trouser\":\"23\",\"shoe\":\"32\"}', '2025-11-27', 'pending', 0, '22121', '2025-11-29 13:03:23', '2025-11-29 13:03:23'),
(65, 'as', NULL, '2025-12-04', 21, 'Female', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Bahrain', 'Azerbaijan', '4240941488215', '2025-12-02', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"21\",\"collar\":\"21\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"21\"}', '2025-12-03', 'pending', 0, '22121', '2025-11-29 13:05:15', '2025-11-29 13:05:15'),
(66, 'haseeb', NULL, '2025-11-19', 20, 'Male', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Bahamas', 'Bahrain', '4240941488215', '2025-11-28', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"12\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"saa\",\"collar\":\"21\",\"top\":\"XL\",\"waist\":\"12\",\"trouser\":\"21\",\"shoe\":\"12\"}', '2025-11-28', 'pending', 0, '22121', '2025-11-29 14:20:21', '2025-11-29 14:20:21'),
(67, 'haseeb', NULL, '2025-11-19', 20, 'Male', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Bahamas', 'Bahrain', '4240941488215', '2025-11-28', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"12\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"saa\",\"collar\":\"21\",\"top\":\"XL\",\"waist\":\"12\",\"trouser\":\"21\",\"shoe\":\"12\"}', '2025-11-28', 'pending', 0, '22121', '2025-11-29 14:26:01', '2025-11-29 14:26:01'),
(68, 'haseeb', NULL, '2025-12-05', 20, 'Male', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, '23123213', '2025-11-14', 'Afghanistan', 'Algeria', '4240941488215', '2025-11-06', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"21\",\"bust\":\"1221\",\"hip\":\"12\",\"dress\":\"21\",\"collar\":\"21\",\"top\":\"S\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', '2025-11-26', 'pending', 0, '22121', '2025-11-29 14:28:44', '2025-11-29 14:28:44'),
(69, 'haseeb', NULL, '2025-11-24', 20, 'Other', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-03', 'Austria', 'Aruba', '4240941488215', '2025-11-25', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"21\",\"collar\":\"12\",\"top\":\"S\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"21\"}', '2025-11-27', 'pending', 0, '22121', '2025-11-30 04:03:42', '2025-11-30 04:03:42');
INSERT INTO `models` (`id`, `name`, `name_as_per_cnic`, `dob`, `age`, `gender`, `occupation`, `mobile_no`, `address`, `email`, `facebook_id`, `instagram_id`, `snapchat_id`, `tiktok_id`, `youtube_id`, `passport_no`, `passport_expiry`, `nationality`, `country_of_passport`, `cnic`, `cnic_expiry`, `backup_contact_name`, `backup_number`, `languages`, `other_languages`, `special_talent`, `measurements`, `signed_date`, `status`, `isVerified`, `availability`, `created_at`, `updated_at`) VALUES
(70, 'haseeb', NULL, '2025-11-27', 20, 'Female', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, '23123213', '2025-11-25', 'Algeria', 'Algeria', '4240941488215', '2025-12-04', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"21\",\"dress\":\"21\",\"collar\":\"21\",\"top\":\"M\",\"waist\":\"21\",\"trouser\":\"12\",\"shoe\":\"21\"}', '2025-12-03', 'new-request', 1, '22121', '2025-11-30 04:16:05', '2025-11-30 04:18:10'),
(71, 'sami', NULL, '2025-12-04', 20, 'Other', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Austria', 'Azerbaijan', '4240941488215', NULL, '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"12\",\"dress\":\"12\",\"collar\":\"12\",\"top\":\"S\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', '2025-11-25', 'pending', 0, '22121', '2025-11-30 04:23:28', '2025-11-30 04:23:28'),
(72, 'test 8', 'assas', '2025-12-04', 20, 'Other', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', NULL, NULL, 'Austria', 'Azerbaijan', '4240941488215', NULL, '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"12\",\"dress\":\"12\",\"collar\":\"12\",\"top\":\"S\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', '2025-11-25', 'pending', 0, '22121', '2025-11-30 04:32:15', '2025-11-30 04:32:15'),
(73, 'test11', 'assas', '2025-12-06', 21, 'Male', 'asa', '03422112090', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-10-31', 'Andorra', 'Algeria', '4244141484214', '2025-11-26', '122121', '2121', '\"[\\\"Urdu\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"12\",\"hip\":\"12\",\"dress\":\"12\",\"collar\":\"21\",\"top\":\"L\",\"waist\":\"12\",\"trouser\":\"21\",\"shoe\":\"21\"}', '2025-12-03', 'new-request', 1, '22121', '2025-11-30 04:36:07', '2025-11-30 04:38:07'),
(74, 'sasa', 'sasasa', '2025-12-17', 20, 'Male', 'asa', '03422112090', 'XX9P+86Q', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-19', 'Afghanistan', 'Pakistan', '4244141484214', '2025-12-16', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"21\",\"hip\":\"2121\",\"dress\":\"sasa\",\"collar\":\"21\",\"top\":\"S\",\"waist\":\"12\",\"trouser\":\"12\",\"shoe\":\"12\"}', NULL, 'pending', 0, '22121', '2025-12-07 10:03:05', '2025-12-07 10:03:05'),
(75, 'haseeb', 'assas', '2025-12-31', 20, 'Female', 'asa', '03422112090', 'XX9P+86Q', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-20', 'Albania', 'Pakistan', '4244141484214', '2025-12-18', '122121', '2121', '\"[\\\"Urdu\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"21\",\"hip\":\"1212\",\"dress\":\"xzxz\",\"collar\":\"12\",\"top\":\"M\",\"waist\":\"12\",\"trouser\":\"21\",\"shoe\":\"12\"}', '2026-01-01', 'pending', 0, '22121', '2025-12-07 10:06:38', '2025-12-07 10:06:38'),
(76, 'haseeb', 'assas', '2025-12-31', 20, 'Female', 'asa', '03422112090', 'XX9P+86Q', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-20', 'Albania', 'Pakistan', '4244141484214', '2025-12-18', '122121', '2121', '\"[\\\"Urdu\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"21\",\"hip\":\"1212\",\"dress\":\"xzxz\",\"collar\":\"12\",\"top\":\"M\",\"waist\":\"12\",\"trouser\":\"21\",\"shoe\":\"12\"}', '2026-01-01', 'pending', 0, '22121', '2025-12-07 10:22:15', '2025-12-07 10:22:15'),
(77, 'haseeb', NULL, '2025-12-31', 20, 'Female', 'asa', '03422112090', 'XX9P+86Q', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-20', 'Albania', 'Pakistan', '4244141484214', '2025-12-18', '122121', '2121', '\"[\\\"Urdu\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"12\",\"bust\":\"21\",\"hip\":\"1212\",\"dress\":\"xzxz\",\"collar\":\"12\",\"top\":\"M\",\"waist\":\"12\",\"trouser\":\"21\",\"shoe\":\"12\"}', '2026-01-01', 'new-request', 1, NULL, '2025-12-07 10:32:13', '2025-12-07 10:36:03'),
(78, 'nigga', NULL, '2025-12-24', 20, 'Male', 'asa', '03422112090', 'XX9P+86Q', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-26', 'Australia', 'Pakistan', '4240141388217', NULL, '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"12\",\"dress\":\"xcx\",\"collar\":\"12\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"12\",\"shoe\":\"12\"}', '2025-12-31', 'new-request', 1, NULL, '2025-12-07 10:40:57', '2025-12-07 10:42:07'),
(79, 'haseeb', NULL, '2026-01-02', 20, 'Male', 'asa', '03422112090', 'XX9P+86Q', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-31', 'Bangladesh', 'Pakistan', '4244141484214', '2025-12-25', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"2\",\"hip\":\"2\",\"dress\":\"assa\",\"collar\":\"21\",\"top\":\"S\",\"waist\":\"22\",\"trouser\":\"22\",\"shoe\":\"2\"}', '2025-12-26', 'pending', 0, NULL, '2025-12-16 11:04:19', '2025-12-16 11:04:19'),
(80, 'haseeb', NULL, '2026-01-02', 20, 'Male', 'asa', '03422112090', 'XX9P+86Q', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-31', 'Bangladesh', 'Pakistan', '4244141484214', '2025-12-25', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"2\",\"hip\":\"2\",\"dress\":\"assa\",\"collar\":\"21\",\"top\":\"S\",\"waist\":\"22\",\"trouser\":\"22\",\"shoe\":\"2\"}', '2025-12-26', 'pending', 0, NULL, '2025-12-16 11:08:22', '2025-12-16 11:08:22'),
(81, 'haseeb', NULL, '2026-01-02', 20, 'Male', 'asa', '03422112090', 'XX9P+86Q', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-31', 'Bangladesh', 'Pakistan', '4244141484214', '2025-12-25', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"2\",\"hip\":\"2\",\"dress\":\"assa\",\"collar\":\"21\",\"top\":\"S\",\"waist\":\"22\",\"trouser\":\"22\",\"shoe\":\"2\"}', '2025-12-26', 'pending', 0, NULL, '2025-12-16 12:01:34', '2025-12-16 12:01:34'),
(82, 'haseeb', NULL, '2026-01-02', 20, 'Male', 'asa', '03422112090', 'XX9P+86Q', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-31', 'Bangladesh', 'Pakistan', '4244141484214', '2025-12-25', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"2\",\"bust\":\"2\",\"hip\":\"2\",\"dress\":\"assa\",\"collar\":\"21\",\"top\":\"S\",\"waist\":\"22\",\"trouser\":\"22\",\"shoe\":\"2\"}', '2025-12-26', 'pending', 0, NULL, '2025-12-16 12:04:48', '2025-12-16 12:04:48'),
(83, 'test115', NULL, '2026-01-09', 20, 'Male', 'asa', '03422112595', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-19', 'Bangladesh', 'Bangladesh', '4244141484214', '2026-01-06', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"21\",\"bust\":\"12\",\"hip\":\"1212\",\"dress\":\"1221\",\"collar\":\"12\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"212121\",\"shoe\":\"21\"}', '2026-01-02', 'pending', 0, NULL, '2025-12-21 07:48:19', '2025-12-21 07:48:19'),
(84, 'test115', NULL, '2026-01-09', 20, 'Male', 'asa', '03422112595', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-19', 'Bangladesh', 'Bangladesh', '4244141484214', '2026-01-06', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"21\",\"bust\":\"12\",\"hip\":\"1212\",\"dress\":\"1221\",\"collar\":\"12\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"212121\",\"shoe\":\"21\"}', '2026-01-02', 'pending', 0, NULL, '2025-12-21 08:02:42', '2025-12-21 08:02:42'),
(85, 'test115', NULL, '2026-01-09', 20, 'Male', 'asa', '03422112595', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-19', 'Bangladesh', 'Bangladesh', '4244141484214', '2026-01-06', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"21\",\"bust\":\"12\",\"hip\":\"1212\",\"dress\":\"1221\",\"collar\":\"12\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"212121\",\"shoe\":\"21\"}', '2026-01-02', 'pending', 0, NULL, '2025-12-21 08:06:04', '2025-12-21 08:06:04'),
(86, 'test115', NULL, '2026-01-09', 20, 'Male', 'asa', '03422112595', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-19', 'Bangladesh', 'Bangladesh', '4244141484214', '2026-01-06', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"21\",\"bust\":\"12\",\"hip\":\"1212\",\"dress\":\"1221\",\"collar\":\"12\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"212121\",\"shoe\":\"21\"}', '2026-01-02', 'pending', 0, NULL, '2025-12-21 08:16:00', '2025-12-21 08:16:00'),
(87, 'test115', NULL, '2026-01-09', 20, 'Male', 'asa', '03422112595', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-19', 'Bangladesh', 'Bangladesh', '4244141484214', '2026-01-06', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"21\",\"bust\":\"12\",\"hip\":\"1212\",\"dress\":\"1221\",\"collar\":\"12\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"212121\",\"shoe\":\"21\"}', '2026-01-02', 'pending', 0, NULL, '2025-12-21 08:17:45', '2025-12-21 08:17:45'),
(88, 'test115', NULL, '2026-01-09', 20, 'Male', 'asa', '03422112595', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-19', 'Bangladesh', 'Bangladesh', '4244141484214', '2026-01-06', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"21\",\"bust\":\"12\",\"hip\":\"1212\",\"dress\":\"1221\",\"collar\":\"12\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"212121\",\"shoe\":\"21\"}', '2026-01-02', 'pending', 0, NULL, '2025-12-21 08:21:28', '2025-12-21 08:21:28'),
(89, 'test115', NULL, '2025-12-31', 20, 'Male', 'asa', '03422112595', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-26', 'Bahrain', 'Bangladesh', '4244141484214', '2025-12-24', '122121', '2121', '\"[\\\"Urdu\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"21\",\"bust\":\"12\",\"hip\":\"1212\",\"dress\":\"1221\",\"collar\":\"12\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"212121\",\"shoe\":\"21\"}', '2025-12-25', 'pending', 0, NULL, '2025-12-21 08:25:07', '2025-12-21 08:25:07'),
(90, 'test117', NULL, '2026-01-01', 20, 'Male', 'asa', '03422112595', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-27', 'Azerbaijan', 'Azerbaijan', '4244141484214', '2026-01-09', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"12\",\"shoulder\":\"21\",\"bust\":\"2121\",\"hip\":\"2121\",\"dress\":\"zzz\",\"collar\":\"21\",\"top\":\"S\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"21\"}', '2026-01-03', 'pending', 0, NULL, '2025-12-21 08:29:09', '2025-12-21 08:29:09'),
(91, 'test113', NULL, '2025-12-31', 20, 'Female', 'asa', '03422112595', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-30', 'Bangladesh', 'Austria', '4244141484214', '2026-01-01', '122121', '2121', '\"[\\\"Urdu\\\",\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"21\",\"shoulder\":\"21\",\"bust\":\"21\",\"hip\":\"21\",\"dress\":\"saas\",\"collar\":\"12\",\"top\":\"L\",\"waist\":\"21\",\"trouser\":\"21\",\"shoe\":\"21\"}', '2026-01-01', 'new-request', 1, NULL, '2025-12-21 11:14:52', '2025-12-21 11:20:30'),
(92, 'test116', NULL, '2026-01-01', 20, 'Other', 'wqwq', '03422112595', '1 Merchant Place, Marden, Tonbridge, UK', 'mhuzaifa0530@gmail.com', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', 'http://127.0.0.1:8000/dashboard', '23123213', '2025-12-31', 'Austria', 'Algeria', '4244141484214', '2026-01-02', '122121', '2121', '\"[\\\"English\\\"]\"', 'sasAS', 'dds', '{\"height\":\"32\",\"shoulder\":\"32\",\"bust\":\"32\",\"hip\":\"32\",\"dress\":\"32\",\"collar\":\"32\",\"top\":\"M\",\"waist\":\"32\",\"trouser\":\"32\",\"shoe\":\"32\"}', '2025-12-30', 'new-request', 1, NULL, '2025-12-21 12:14:17', '2025-12-21 12:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'users.view', 'web', '2025-09-08 04:51:25', '2025-09-08 04:51:25'),
(2, 'users.create', 'web', '2025-09-08 04:51:25', '2025-09-08 04:51:25'),
(3, 'users.edit', 'web', '2025-09-08 04:51:25', '2025-09-08 04:51:25'),
(4, 'users.delete', 'web', '2025-09-08 04:51:25', '2025-09-08 04:51:25'),
(5, 'roles.view', 'web', '2025-09-08 04:51:25', '2025-09-08 04:51:25'),
(6, 'roles.create', 'web', '2025-09-08 04:51:25', '2025-09-08 04:51:25'),
(7, 'roles.edit', 'web', '2025-09-08 04:51:25', '2025-09-08 04:51:25'),
(8, 'roles.delete', 'web', '2025-09-08 04:51:25', '2025-09-08 04:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2025-09-08 04:51:25', '2025-09-08 04:51:25'),
(2, 'manager', 'web', '2025-09-08 04:51:25', '2025-09-08 04:51:25'),
(3, 'Brand', 'web', '2025-10-13 11:01:46', '2025-10-13 11:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HopDxnkC0HydnN99PTh0QcIDY6KSFJVdi2NKQq0g', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRjlvYWhIaDJnV1RpaUhJYzNESDFqdHJmMlo1dHZNRGtrR0prcGVCMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sYXRlc3QtbW9kZWxzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1766341650);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-09-08 04:50:36', '$2y$12$HjnIaMHS3qno2ZhG.84h7.vLRPewlgMsbqfKitwww2ekXQ8maqzHm', 'xf9LZ1Vlkl', '2025-09-08 04:50:36', '2025-09-08 04:50:36'),
(2, 'Admin User3', 'abdjav2002@gmail.com', NULL, '$2y$12$YYXpSBPocY9c6W1RGHlAfOUIHgLcWxqRpzBXHG0xaZhfRqltOr29u', NULL, '2025-09-08 04:51:26', '2025-09-08 07:31:06'),
(3, 'admin', 'mhuzaifa0530@gmail.com', '2025-10-12 12:56:38', '$2y$12$fma6on6A.nvMlH75Az3nfOk0J.sTOMhijTnu.Qid3WDtflAMRab9e', NULL, '2025-09-08 05:15:11', '2025-10-12 12:56:38'),
(4, 'test brand', 'brand@gmail.com', NULL, '$2y$12$2MikHpmLAD9a57End88h9eN83lglc9y8HpQp27kYv5NrqOvOTtD1q', NULL, '2025-10-13 11:41:17', '2025-10-13 11:41:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `assets_model_id_name_unique` (`model_id`,`name`),
  ADD KEY `assets_model_id_type_index` (`model_id`,`type`),
  ADD KEY `assets_type_index` (`type`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assets`
--
ALTER TABLE `assets`
  ADD CONSTRAINT `assets_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
