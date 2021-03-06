-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE `cart_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(62,	'2014_10_12_000000_create_users_table',	1),
(63,	'2014_10_12_100000_create_password_resets_table',	1),
(64,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(65,	'2019_08_19_000000_create_failed_jobs_table',	1),
(66,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(67,	'2021_12_22_014908_create_sessions_table',	1),
(68,	'2022_01_03_135840_create_products_table',	1),
(69,	'2022_01_03_142317_create_orders_table',	1),
(70,	'2022_01_03_142431_create_order_details_table',	1),
(71,	'2022_01_09_100052_create_cart_items_table',	1);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `member_id`, `description`, `category`, `image`, `price`, `stock`, `status`, `created_at`, `updated_at`) VALUES
(1,	'airpod',	1,	'123',	'3C',	'airpod.png',	6999,	20,	0,	'2022-01-11 11:17:01',	'2022-01-11 11:40:26'),
(2,	'????????????',	2,	'123',	'??????',	'MEILUI.png',	30,	10,	0,	'2022-01-11 11:18:58',	'2022-01-11 11:18:58'),
(3,	'???Q??????',	2,	'?????????????????????\r\n???????????????????????????~~~',	'??????',	'AQ.png',	35,	200,	0,	'2022-01-11 11:36:43',	'2022-01-11 11:36:43'),
(4,	'?????????',	2,	'?????? ??????\r\n????????????~~',	'3C',	'ban.png',	1399,	5,	0,	'2022-01-11 11:38:02',	'2022-01-11 11:38:38'),
(5,	'??????',	2,	'?????????30??????\r\n?????????????????????????????????~~~',	'??????',	'dog.jpg',	50,	10,	0,	'2022-01-11 11:40:00',	'2022-01-11 11:40:00'),
(6,	'??????????????????',	2,	'???????????????????????????\r\n??????????????????~~~',	'???',	'HANGUO.png',	599,	1,	0,	'2022-01-11 11:42:34',	'2022-01-11 11:42:34'),
(7,	'HyperX Alloy Origins ??????',	2,	'HyperX Alloy Origins ???????????? ????????????\r\n??????????????? ??????????????????~~',	'3C',	'HyperX Alloy Origins.png',	2399,	5,	0,	'2022-01-11 11:44:53',	'2022-01-11 11:44:53'),
(8,	'?????????',	2,	'???????????????????????? ?????????\r\n??????????????????????????????',	'??????',	'KIMLAMEN.png',	40,	95,	0,	'2022-01-11 11:47:07',	'2022-01-11 11:47:07'),
(9,	'??????',	2,	'????????????????????????\r\n?????????????????????',	'??????',	'??????.png',	10,	999,	0,	'2022-01-11 11:48:17',	'2022-01-11 11:48:17'),
(10,	'logitech ?????? ????????????',	2,	'???????????????\r\n????????????????????????',	'??????',	'logi.png',	1099,	20,	0,	'2022-01-11 11:50:17',	'2022-01-11 11:50:17'),
(11,	'????????????????????????',	2,	'???????????????????????????????????????\r\n?????????????????????????????????\r\n????????????????????????',	'???',	'????????????.jfif',	300,	10,	0,	'2022-01-11 11:52:11',	'2022-01-11 11:52:11'),
(12,	'????????????????????????',	2,	'??????????????? ??????\r\n????????????',	'???',	'????????????????????????.png',	599,	50,	0,	'2022-01-11 11:54:05',	'2022-01-11 11:54:05'),
(13,	'????????????',	2,	'?????????????????????\r\n???????????????????????????',	'??????',	'image1.jpg',	10,	100,	0,	'2022-01-11 11:55:43',	'2022-01-11 11:55:43'),
(14,	'??????????????? ??????',	2,	'??????????????? ???????????????\r\n????????????????????? ???????????????\r\n',	'??????',	'WUHUO.png',	40,	30,	0,	'2022-01-11 11:57:53',	'2022-01-11 11:57:53'),
(15,	'??????????????????',	2,	'?????????????????????????\r\n????????????????????????',	'???',	'??????????????????.png',	599,	5,	0,	'2022-01-11 11:59:14',	'2022-01-11 11:59:14'),
(16,	'?????????',	2,	'?????????????????????\r\n????????????\r\n????????????????????????',	'??????',	'?????????.png',	59,	100,	0,	'2022-01-11 12:00:22',	'2022-01-11 12:00:22');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kXNQ13ftRcUKrJeCh3v3Wjc9PVJYEGjiloou4ooK',	NULL,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36',	'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTnF3SVd1YTVkV1BjU3ljcEh5MFVhM3loYzVrNDNuWnZLZndpd3cxNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fX0=',	1641902593);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `phone`, `address`, `remember_token`, `current_team_id`, `profile_photo_path`, `auth`, `created_at`, `updated_at`) VALUES
(1,	'123',	'234@email.com',	NULL,	'$2y$10$uwVv8j/WIsU.Xy8o1OG0PuhNnhmiC0UbCAa/4XrJY55T8DfxUs2mG',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	3,	'2022-01-11 03:07:18',	'2022-01-11 11:10:55'),
(2,	'taisan',	'taisan@shsh.ttt',	NULL,	'$2y$10$WH/rGyvEczTEglKnX0WTA.Bldctjg9cE1LxvzE5Fx.N0HNWZwBn62',	NULL,	NULL,	NULL,	'??????????????????',	NULL,	NULL,	NULL,	2,	'2022-01-11 03:11:23',	'2022-01-11 11:18:05'),
(3,	'456',	'4566@email.com',	NULL,	'$2y$10$TcLnSyofXBB1sTcHbdLrP.sDhDSQ.22avTSKEUAevokfoYiVd23Oy',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	0,	'2022-01-11 03:30:49',	'2022-01-11 03:30:49');

-- 2022-01-11 12:06:00
