-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: car_mania
-- ------------------------------------------------------
-- Server version	5.7.19-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `models`
--

DROP TABLE IF EXISTS `models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `models` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `make_id` int(10) unsigned NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `models_model_unique` (`model`),
  KEY `models_make_id_foreign` (`make_id`),
  CONSTRAINT `models_make_id_foreign` FOREIGN KEY (`make_id`) REFERENCES `makes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `models`
--

LOCK TABLES `models` WRITE;
/*!40000 ALTER TABLE `models` DISABLE KEYS */;
INSERT INTO `models` VALUES (1,1,'Aixam Inny JDM Abacca',NULL,NULL),(2,2,'Citroen C1',NULL,NULL),(3,2,'Citroen C3 Picasso',NULL,NULL),(4,2,'Citroen C4 Cactus',NULL,NULL),(5,2,'Citroen C4 Grand Picasso',NULL,NULL),(6,3,'Renault 4',NULL,NULL),(7,3,'Renault Megane',NULL,NULL),(8,4,'Volkswagen Beetle Dune',NULL,NULL),(9,4,'Volkswagen Coccinelle Neuve',NULL,NULL),(10,5,'Toyota Prius',NULL,NULL),(11,5,'Toyota Camry',NULL,NULL),(12,5,'Toyota Yaris',NULL,NULL),(13,6,'VF Holden Commodore',NULL,NULL),(14,6,'Holden Ute',NULL,NULL),(15,7,'Mitsubishi Mirage',NULL,NULL),(16,7,'Mitsubishi Lancer',NULL,NULL),(17,8,'Ford Mondeo',NULL,NULL),(18,8,'Ford Fiesta',NULL,NULL),(19,9,'Chevy Camaro',NULL,NULL),(20,9,'Chevy Malibu',NULL,NULL);
/*!40000 ALTER TABLE `models` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-21 13:29:40
