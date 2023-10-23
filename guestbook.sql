-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table guestbook.books
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `asal_perusahaan` varchar(255) NOT NULL,
  `nama_pic` varchar(255) NOT NULL,
  `departemen` varchar(255) NOT NULL,
  `tujuan_lokasi` varchar(255) NOT NULL,
  `tujuan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table guestbook.books: ~7 rows (approximately)
INSERT INTO `books` (`id`, `nik`, `nama`, `asal_perusahaan`, `nama_pic`, `departemen`, `tujuan_lokasi`, `tujuan`, `created_at`, `updated_at`) VALUES
	(1, '095858', 'Rohmat', 'PT Aisin', 'Rohmat', 'Belum Ada', 'Belum Ada', 'TEst', '2023-10-23 04:08:31', '2023-10-23 04:08:31'),
	(2, '095858', 'Penyerahan Barang', 'PT Aisin', 'Rohmat', 'Belum Ada', 'Belum Ada', 'Hanya Percobaan', '2023-10-23 06:15:10', '2023-10-23 06:15:10'),
	(3, '095858', 'feefe', 'PT Aisin', 'Rohmat', 'Belum Ada', 'Belum Ada', 'Test', '2023-10-23 06:19:53', '2023-10-23 06:19:53'),
	(4, '095858', 'Penyerahan Barang', 'PT Aisin', 'Rohmat', 'Belum Ada', 'Belum Ada', 'Test', '2023-10-23 06:20:14', '2023-10-23 06:20:14'),
	(5, '095858', 'feefe', 'PT Aisin', 'Rohmat', 'Belum Ada', 'Belum Ada', 'Test', '2023-10-23 06:21:16', '2023-10-23 06:21:16'),
	(6, '095858', 'feefe', 'PT Aisin', 'Rohmat', 'Belum Ada', 'Belum Ada', 'Bismillah', '2023-10-23 06:21:36', '2023-10-23 06:21:36'),
	(7, '095858', 'feefe', 'PT Aisin', 'Rohmat', 'Belum Ada', 'Belum Ada', 'Test', '2023-10-23 13:58:00', '2023-10-23 13:58:00');

-- Dumping structure for table guestbook.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table guestbook.migrations: ~2 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2023_09_20_162121_create_books_table', 1);

-- Dumping structure for table guestbook.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table guestbook.personal_access_tokens: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
