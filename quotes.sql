/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT IGNORE INTO `authors` (`id`, `created_at`, `updated_at`, `name`) VALUES
	(9, '2016-12-26 22:14:20', '2016-12-26 22:14:20', 'Ss'),
	(11, '2016-12-26 22:14:41', '2016-12-26 22:14:41', 'S'),
	(12, '2016-12-26 22:36:49', '2016-12-26 22:36:49', 'Qq'),
	(14, '2016-12-26 22:37:24', '2016-12-26 22:37:24', 'Q'),
	(16, '2016-12-28 18:22:32', '2016-12-28 18:22:32', 'Sdf'),
	(17, '2016-12-28 18:28:17', '2016-12-28 18:28:17', 'Asd'),
	(18, '2016-12-28 18:29:39', '2016-12-28 18:29:39', 'Qe'),
	(19, '2016-12-28 18:29:42', '2016-12-28 18:29:42', 'Qwe'),
	(20, '2016-12-28 18:29:47', '2016-12-28 18:29:47', 'Qqe'),
	(21, '2016-12-28 18:29:53', '2016-12-28 18:29:53', 'Qew');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2016_12_23_182925_create_authors_table', 1),
	(4, '2016_12_23_182945_create_quotes_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quote` text COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
INSERT IGNORE INTO `quotes` (`id`, `created_at`, `updated_at`, `quote`, `author_id`) VALUES
	(15, '2016-12-26 22:14:20', '2016-12-26 22:14:20', 's', 9),
	(18, '2016-12-26 22:14:54', '2016-12-26 22:14:54', 'asd', 11),
	(19, '2016-12-26 22:36:49', '2016-12-26 22:36:49', 'q', 12),
	(21, '2016-12-26 22:37:24', '2016-12-26 22:37:24', 'q', 14),
	(23, '2016-12-28 18:22:32', '2016-12-28 18:22:32', 'sdf', 16),
	(24, '2016-12-28 18:28:17', '2016-12-28 18:28:17', 'asd', 17),
	(25, '2016-12-28 18:28:31', '2016-12-28 18:28:31', 'asd', 17),
	(26, '2016-12-28 18:29:39', '2016-12-28 18:29:39', 'qwe', 18),
	(27, '2016-12-28 18:29:43', '2016-12-28 18:29:43', 'qew', 19),
	(28, '2016-12-28 18:29:47', '2016-12-28 18:29:47', 'qwe', 20),
	(29, '2016-12-28 18:29:53', '2016-12-28 18:29:53', 'w', 21),
	(30, '2016-12-28 18:29:57', '2016-12-28 18:29:57', 'q', 12),
	(31, '2016-12-28 18:30:02', '2016-12-28 18:30:02', 'q', 21);
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
