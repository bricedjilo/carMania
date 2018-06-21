

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_category_unique` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


LOCK TABLES `categories` WRITE;
INSERT INTO `categories` VALUES (1,'Pony car',NULL,NULL),
(2,'Muscle car',NULL,NULL),(3,'Supercar car',NULL,NULL),
(4,'Grand tourer',NULL,NULL),(5,'Sports car',NULL,NULL),
(6,'Sports sedan',NULL,NULL),(7,'Hot hatch',NULL,NULL),
(8,'Estate car',NULL,NULL),(9,'Full-size luxury',NULL,NULL),
(10,'Executive',NULL,NULL),(11,'Compact executive',NULL,NULL),
(12,'Minivans',NULL,NULL),(13,'Full size',NULL,NULL),
(14,'Large family',NULL,NULL),(15,'Small family',NULL,NULL),
(16,'City car',NULL,NULL),(17,'Microcar',NULL,NULL);
