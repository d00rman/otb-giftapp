-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    osx10.11
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table otb.gift_requests
CREATE TABLE IF NOT EXISTS `gift_requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `recipient_name` varchar(255) NOT NULL,
  `recipient_age` int(2) NOT NULL,
  `gift_name` varchar(255) NOT NULL,
  `wishlist_id` int(10) unsigned DEFAULT NULL,
  `status_id` int(10) unsigned DEFAULT NULL,
  `request_type_id` int(10) unsigned DEFAULT NULL,
  `total_count` int(10) NOT NULL,
  KEY `Index 1` (`id`),
  KEY `FK_gift_requests_wishlist` (`wishlist_id`),
  KEY `FK_gift_requests_status` (`status_id`),
  KEY `FK_gift_requests_request_type` (`request_type_id`),
  CONSTRAINT `FK_gift_requests_request_type` FOREIGN KEY (`request_type_id`) REFERENCES `request_type` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_gift_requests_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_gift_requests_wishlist` FOREIGN KEY (`wishlist_id`) REFERENCES `wishlist` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table otb.gift_requests: ~0 rows (approximately)
/*!40000 ALTER TABLE `gift_requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `gift_requests` ENABLE KEYS */;


-- Dumping structure for table otb.institutions
CREATE TABLE IF NOT EXISTS `institutions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '0',
  `type_id` int(10) unsigned DEFAULT '0',
  `region_id` int(10) unsigned DEFAULT '0',
  KEY `Index 1` (`id`),
  KEY `FK_institutions_regions` (`region_id`),
  KEY `FK_institutions_institution_type` (`type_id`),
  CONSTRAINT `FK_institutions_institution_type` FOREIGN KEY (`type_id`) REFERENCES `institution_type` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_institutions_regions` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table otb.institutions: ~0 rows (approximately)
/*!40000 ALTER TABLE `institutions` DISABLE KEYS */;
/*!40000 ALTER TABLE `institutions` ENABLE KEYS */;


-- Dumping structure for table otb.institution_type
CREATE TABLE IF NOT EXISTS `institution_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table otb.institution_type: ~0 rows (approximately)
/*!40000 ALTER TABLE `institution_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `institution_type` ENABLE KEYS */;


-- Dumping structure for table otb.regions
CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '0',
  KEY `Index 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table otb.regions: ~0 rows (approximately)
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;


-- Dumping structure for table otb.request_type
CREATE TABLE IF NOT EXISTS `request_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table otb.request_type: ~0 rows (approximately)
/*!40000 ALTER TABLE `request_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `request_type` ENABLE KEYS */;


-- Dumping structure for table otb.status
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table otb.status: ~0 rows (approximately)
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
/*!40000 ALTER TABLE `status` ENABLE KEYS */;


-- Dumping structure for table otb.wishlist
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `end_date` datetime DEFAULT NULL,
  `address_drop_of` text,
  `instructions` text,
  `visitation_time` datetime DEFAULT NULL,
  `status_id` int(10) unsigned DEFAULT NULL,
  `announce_text` text,
  `institution_id` int(10) unsigned DEFAULT NULL,
  `year` year(4) NOT NULL,
  KEY `Index 1` (`id`),
  KEY `FK_wishlist_status` (`status_id`),
  KEY `FK_wishlist_institutions` (`institution_id`),
  CONSTRAINT `FK_wishlist_institutions` FOREIGN KEY (`institution_id`) REFERENCES `institutions` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_wishlist_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table otb.wishlist: ~0 rows (approximately)
/*!40000 ALTER TABLE `wishlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `wishlist` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
