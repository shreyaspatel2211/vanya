-- MySQL dump 10.13  Distrib 8.0.41, for Linux (x86_64)
--
-- Host: localhost    Database: vanya
-- ------------------------------------------------------
-- Server version	8.0.41-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `breeds`
--

DROP TABLE IF EXISTS `breeds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `breeds` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breed_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `breeds`
--

LOCK TABLES `breeds` WRITE;
/*!40000 ALTER TABLE `breeds` DISABLE KEYS */;
INSERT INTO `breeds` VALUES (1,'3','German Shepherd','dog','2025-03-07 10:15:00','2025-03-12 10:12:12','breeds/March2025/yeq9XCA6mPRqsGy7vO7i.jpeg'),(3,'3','Bull Dog','dog','2025-03-11 05:04:00','2025-03-12 10:12:55','breeds/March2025/E4QXy67N9GlC7bQ5ijAT.jpeg'),(4,'3','Labrodor Retriever','dog','2025-03-11 05:05:00','2025-03-12 10:13:24','breeds/March2025/1UROTQYA2AMlbYd8jnh2.jpeg'),(5,'3','Golden Retriever','dog','2025-03-11 05:06:00','2025-03-12 10:13:56','breeds/March2025/Q5r0mDCPlgkmefCiVtGE.jpeg'),(6,'3','French Bulldog','dog','2025-03-11 05:06:00','2025-03-12 10:14:31','breeds/March2025/QXy6rZ9jC9W9L0AX92zH.jpeg'),(7,'3','Siberian Husky','dog','2025-03-11 05:06:00','2025-03-12 10:15:04','breeds/March2025/WKGmzHz9d8Lkt9SqQkMA.jpeg'),(8,'3','Beagle','dog','2025-03-11 05:07:00','2025-03-12 10:15:38','breeds/March2025/jc3DbuA1OqhZYCY9Mn81.jpeg'),(9,'3','Alaskan Malamute','dog','2025-03-11 05:07:00','2025-03-12 10:11:43','breeds/March2025/g8arBltarxi0JvXG59q0.jpeg'),(10,'3','Poodle','dog','2025-03-11 05:08:00','2025-03-12 10:16:08','breeds/March2025/sqRYKjq0MwSAz4gttHeQ.jpeg'),(11,'3','Chihuahua','dog','2025-03-11 05:08:00','2025-03-12 10:16:38','breeds/March2025/PM10RShARfhxBkw6rD62.jpeg'),(12,'3','Australian Cattle Dog','dog','2025-03-11 05:08:00','2025-03-12 10:17:34','breeds/March2025/NekXZwsn2nzaLCoazq12.jpeg'),(13,'3','Dachshund','dog','2025-03-11 05:09:00','2025-03-12 10:35:57','breeds/March2025/xDevkXF86U54M6mD6wNf.jpeg'),(14,'3','Pug','dog','2025-03-11 05:09:00','2025-03-12 10:26:58','breeds/March2025/WyKTLm7KgpQsQyyY5SkO.jpeg'),(15,'3','Rotweiler','dog','2025-03-11 05:10:00','2025-03-12 10:26:29','breeds/March2025/oERSdC5NymB5lV83KmR3.jpeg'),(16,'3','Airedale terrior','dog','2025-03-11 05:11:00','2025-03-12 10:11:14','breeds/March2025/8rM6eZNfXuW6MITOmZkd.jpeg'),(17,'3','Border Collie','dog','2025-03-11 05:11:00','2025-03-12 10:23:47','breeds/March2025/uzl0WWEBOvKIdgbyFVog.jpeg'),(18,'3','Australian Shepherd','dog','2025-03-11 05:12:00','2025-03-12 10:20:56','breeds/March2025/M2KtHG1XHOpWtnloQDzp.jpeg'),(19,'3','Affenpinscher','dog','2025-03-11 05:12:00','2025-03-12 10:10:05','breeds/March2025/A7nqNkJbKRegqwkJ3OnF.jpeg'),(20,'3','Americon Steffordshire Terrior','dog','2025-03-11 05:13:00','2025-03-12 10:19:22','breeds/March2025/zYimtzjg5RR5gfGDZ5wx.jpeg'),(21,'3','Boxer','dog','2025-03-11 05:13:00','2025-03-12 10:25:08','breeds/March2025/ZoCLVp3tP6BDGwSlXc8j.jpeg'),(22,'3','Maltese Dog','dog','2025-03-11 05:13:00','2025-03-12 10:31:49','breeds/March2025/hAERmC88O5ZCc3wLxe4Q.jpeg'),(23,'3','Bichon Frise','dog','2025-03-11 05:14:00','2025-03-12 10:23:13','breeds/March2025/yxYKAw46hxHFBwhFBm5D.jpeg'),(24,'3','English Cocker Spenial','dog','2025-03-11 05:14:00','2025-03-12 10:37:19','breeds/March2025/MN9JM88HJInXiK0GaHD8.jpeg'),(25,'3','Afghan Hound','dog','2025-03-11 05:15:00','2025-03-12 10:10:46','breeds/March2025/80q0YH1cFW1iJshb03OJ.jpeg'),(26,'3','American Eskimo Dog','dog','2025-03-11 05:15:00','2025-03-12 10:18:44','breeds/March2025/MPBkLVGS2NhtzjxA3hR8.jpeg'),(27,'3','Anatolian Shepherd Dog','dog','2025-03-11 05:16:00','2025-03-12 10:20:02','breeds/March2025/xlcO6JDlPuisdw3ZvFsq.jpeg'),(28,'3','Yorkshire terrier','dog','2025-03-11 05:16:00','2025-03-12 10:18:11','breeds/March2025/TWET4a4NlpAY46i9JzkU.jpeg'),(29,'3','Chow Chow','dog','2025-03-11 05:17:00','2025-03-12 10:32:54','breeds/March2025/wLEaA9TZtzQIIGuHIOXF.jpeg'),(30,'3','Pomeranian','dog','2025-03-11 05:17:00','2025-03-12 10:27:36','breeds/March2025/dHY32Bmj08cS1IaSyXAh.jpeg'),(31,'3','Cavalier King Charles Spaniel','dog','2025-03-11 05:18:00','2025-03-12 10:32:24','breeds/March2025/awUAGu6Dp5DEsbRIrTwh.jpeg'),(32,'3','Pembroke Welsh Corgi','dog','2025-03-11 05:18:00','2025-03-12 10:30:30','breeds/March2025/LS9XQYYr8ZpmzfizEmGT.jpeg'),(33,'3','Basset Hound','dog','2025-03-11 05:19:00','2025-03-12 10:22:00','breeds/March2025/XwNbS2ldoTi6zqnfWk88.jpeg'),(34,'3','Basenji','dog','2025-03-11 05:19:00','2025-03-12 10:21:29','breeds/March2025/KbC1NvSLQcP6o4v1sZGR.jpeg'),(35,'3','Havanese','dog','2025-03-11 05:19:00','2025-03-12 10:34:44','breeds/March2025/fPwu2tZ9p3TXU3MxKr6o.jpeg'),(36,'3','St. Bernard','dog','2025-03-11 05:20:00','2025-03-12 10:25:50','breeds/March2025/TP8uuQXNn1MtzVjpvL1u.jpeg'),(37,'3','Belgian Shepherd','dog','2025-03-11 05:21:00','2025-03-12 10:22:40','breeds/March2025/nTFts9OmOfVBX6w5VjYC.jpeg'),(38,'3','Newfoundland dog','dog','2025-03-11 05:21:00','2025-03-12 10:31:08','breeds/March2025/QyL6e6ABkCuNRPcISv9W.jpeg'),(39,'3','Boston Terrier','dog','2025-03-11 05:22:00','2025-03-12 10:24:27','breeds/March2025/kR6w3d3o7h9k9J5r8wAr.jpeg'),(40,'3','Clain Terrier','dog','2025-03-11 05:22:00','2025-03-12 10:35:23','breeds/March2025/3cwYNycAwMVTn1PppHU9.jpeg'),(41,'3','Brittany Spaniel','dog','2025-03-11 05:23:00','2025-03-12 10:29:32','breeds/March2025/0ZvQ6cypG4vvZLTYrUwl.jpeg'),(42,'3','Shaltie','dog','2025-03-11 05:23:00','2025-03-12 10:09:32','breeds/March2025/0VjA0b1v0IhhGi0O2TIS.jpeg'),(43,'3','Black Russian Terrier','dog','2025-03-11 05:23:00','2025-03-12 10:08:39','breeds/March2025/6KXVJ46TwmXlVhMzwjKJ.jpeg'),(44,'3','Bullmustiff','dog','2025-03-11 05:24:00','2025-03-12 10:07:58','breeds/March2025/9feUJe6u9rteh8YpjX13.jpeg'),(45,'3','Bedlington Terrier','dog','2025-03-11 05:24:00','2025-03-12 10:07:23','breeds/March2025/um7qWVOjlpm52ZpeSr9I.jpeg'),(46,'3','Americal Pit Bull Terrier','dog','2025-03-11 05:24:00','2025-03-12 10:06:42','breeds/March2025/MvigTES3v09Id3GWjnZ9.jpeg'),(48,'3','Cane Corso','dog','2025-03-11 05:25:00','2025-03-12 10:06:11','breeds/March2025/b5K8DmtGC6b6gWQXiJ1o.jpeg'),(49,'3','Shih Tzu','dog','2025-03-11 05:25:00','2025-03-12 10:05:39','breeds/March2025/3MNRiw6V1pTsmJyRNG8j.jpeg'),(50,'3','Dobermann','dog','2025-03-11 05:25:00','2025-03-12 10:05:11','breeds/March2025/2DTOQdb0Y9B8VvAD53G2.jpeg'),(51,'3','Shiba Inu','dog','2025-03-11 05:26:00','2025-03-12 10:04:40','breeds/March2025/221jD6PLASL8QtByQrWa.jpeg'),(52,'3','Samoyed','dog','2025-03-11 05:26:00','2025-03-12 10:04:08','breeds/March2025/2eqpaoGOBVMdEb2l6j9m.jpeg'),(53,'3','Sarabi Dog','dog','2025-03-11 05:26:00','2025-03-12 10:03:43','breeds/March2025/3yTtOoQQkBTUZiwJadk0.jpeg'),(54,'4','Siamese Cat','cat','2025-03-11 05:27:00','2025-03-12 10:02:55','breeds/March2025/sGVVTvRi4uf1jKRVCpK4.jpeg'),(55,'4','British Shorthair','cat','2025-03-11 05:28:00','2025-03-12 10:02:11','breeds/March2025/uvqoxLQrstIOqCcIbh0s.jpeg'),(56,'4','Maine Coon','cat','2025-03-11 05:28:00','2025-03-12 10:01:38','breeds/March2025/C9iEOme6abgwOu7Q6lj2.jpeg'),(57,'4','Persian Cat','cat','2025-03-11 05:28:00','2025-03-12 10:01:05','breeds/March2025/J4yuDkC90PQZAbApMeLn.jpeg'),(58,'4','Ragdoll','cat','2025-03-11 05:28:00','2025-03-12 10:00:25','breeds/March2025/bHKyXTGaZaJ92bPIbUSL.jpeg'),(59,'4','Sphynx Cat','cat','2025-03-11 05:29:00','2025-03-12 09:59:51','breeds/March2025/IhyOLszoAa5WM5eivuEO.jpeg'),(60,'4','Abyssinian','cat','2025-03-11 05:29:00','2025-03-12 09:40:09','breeds/March2025/OvpytXFD7T05QSZ71hml.jpeg'),(61,'4','Siberian cat','cat','2025-03-11 05:29:00','2025-03-12 09:59:20','breeds/March2025/7jwcVDI9fKQFzLcDVyLL.jpeg'),(62,'4','Russian Blue','cat','2025-03-11 05:30:00','2025-03-12 09:58:41','breeds/March2025/Fr8emMR5xJjYtKq6sylu.jpeg'),(63,'4','Norwegian Forest Cat','cat','2025-03-11 05:30:00','2025-03-12 09:58:07','breeds/March2025/z2Acgfxqyu9S4lJn6J62.jpeg'),(64,'4','Devon Rex','cat','2025-03-11 05:30:00','2025-03-12 09:57:32','breeds/March2025/9PxsESBAnQ7mLBBf3CEI.jpeg'),(65,'4','Munchkin cat','cat','2025-03-11 05:31:00','2025-03-12 09:56:59','breeds/March2025/7qnpTVDxllErbEeCr5PY.jpeg'),(66,'4','American Shorthair','cat','2025-03-11 05:31:00','2025-03-12 09:55:52','breeds/March2025/6o5amnTO4aBWfYNmEY8z.jpeg'),(67,'4','Burmese cat','cat','2025-03-11 05:32:00','2025-03-12 09:56:28','breeds/March2025/gBl3FSeG9YwD5zCDfono.jpeg'),(68,'4','Exotic Shorthair','cat','2025-03-11 05:32:00','2025-03-12 09:55:23','breeds/March2025/Gto2YUYXrN0x5MGYvgfj.jpeg'),(69,'4','Birman','cat','2025-03-11 05:32:00','2025-03-12 09:54:09','breeds/March2025/ps8h8p22perm8MkRJLKq.jpeg'),(70,'4','Scottish Fold','cat','2025-03-11 05:33:00','2025-03-12 09:54:42','breeds/March2025/dIWdrFBn4syFP6byalu5.jpeg'),(71,'4','Bombay cat','cat','2025-03-11 05:33:00','2025-03-12 09:53:36','breeds/March2025/UHXSusWgEHYi9hGMkXZE.jpeg'),(72,'4','American Curl','cat','2025-03-11 05:33:00','2025-03-12 09:53:04','breeds/March2025/cq1t12UZqZr8RaAhmTLW.jpeg'),(73,'4','American Bobtail','cat','2025-03-11 05:34:00','2025-03-12 09:52:27','breeds/March2025/4QyHJ8MUU15Lw3PHweEc.jpeg'),(74,'4','Balinese cat','cat','2025-03-11 05:34:00','2025-03-12 09:51:39','breeds/March2025/9k55cKGmft7SgxJiQJkq.jpeg'),(75,'4','Oriental Shorthair','cat','2025-03-11 05:35:00','2025-03-12 09:51:01','breeds/March2025/a5qJAMs5RUt4XJLt87Sb.jpeg'),(76,'4','Chartreux','cat','2025-03-11 05:35:00','2025-03-12 09:50:33','breeds/March2025/m9CJCu1RVsHN22WHlTD3.jpeg'),(77,'4','Turkish Angora','cat','2025-03-11 05:35:00','2025-03-12 09:50:04','breeds/March2025/bm58tfpgP65y2T5S6WVf.jpeg'),(78,'4','Japanese Bobtail','cat','2025-03-11 05:36:00','2025-03-12 09:49:30','breeds/March2025/RgEgdC128w2MKGqYAHko.jpeg'),(79,'4','Ragamuffin','cat','2025-03-11 05:36:00','2025-03-12 09:49:00','breeds/March2025/V8ftegwOmJyVUmEFAbT2.jpeg'),(80,'4','Manx Cat','cat','2025-03-11 05:36:00','2025-03-12 09:48:19','breeds/March2025/z9YDdzUmULNkAnPuLXPv.jpeg'),(81,'4','American Wirehair','cat','2025-03-11 05:37:00','2025-03-12 09:47:40','breeds/March2025/ixeP2YyRSsePuxwa2R2D.jpeg'),(82,'4','Egyptian Mau','cat','2025-03-11 05:37:00','2025-03-12 09:47:02','breeds/March2025/LAwesiGHJgPJXITx0DbJ.jpeg'),(83,'4','Cornish Rex','cat','2025-03-11 05:37:00','2025-03-12 09:46:32','breeds/March2025/eh5LdkOsDVzQDlt7yqad.jpeg'),(84,'4','Somali cat','cat','2025-03-11 05:38:00','2025-03-12 09:46:02','breeds/March2025/are2R3KJJ6GTmZcRTjCT.jpeg'),(85,'4','Himalayan cat','cat','2025-03-11 05:38:00','2025-03-12 09:45:34','breeds/March2025/GnI2X91ngzmO5msMJUEG.jpeg'),(86,'4','Selkirk Rex','cat','2025-03-11 05:39:00','2025-03-12 09:41:38','breeds/March2025/1GnicZGnHPXlXNfVllml.jpeg'),(88,'4','Tonkinese cat','cat','2025-03-11 05:39:00','2025-03-12 09:41:10','breeds/March2025/9bqt8JG32ajmCKksJEnh.jpeg'),(89,'4','Korat','cat','2025-03-11 05:39:00','2025-03-12 09:40:40','breeds/March2025/6g6DwhKYGUDaHdFlpnvw.jpeg'),(90,'4','Ocicat','cat','2025-03-11 05:40:00','2025-03-12 09:39:39','breeds/March2025/J6yrITgj7ZFNxRWnAzRs.jpeg'),(91,'4','Singapura cat','cat','2025-03-11 05:40:00','2025-03-12 09:39:07','breeds/March2025/F4Q2mZ8T9hBIPvfME7vp.jpeg'),(92,'4','Turkish Van','cat','2025-03-11 05:40:00','2025-03-12 09:38:34','breeds/March2025/Hnfcmuyz7rW16NJVMtFB.jpeg'),(93,'4','British Longhair','cat','2025-03-11 05:41:00','2025-03-12 09:37:14','breeds/March2025/tTczW1DNQYlzxs9L5gXo.jpeg'),(94,'4','Havana Brown','cat','2025-03-11 05:41:00','2025-03-12 09:36:40','breeds/March2025/gIEe6mVhQMJbZpVvsyu4.jpeg'),(95,'4','Chausie','cat','2025-03-11 05:41:00','2025-03-12 09:35:58','breeds/March2025/CdkzV180ObrSoAizlJvq.jpeg'),(96,'4','LaPerm','cat','2025-03-11 05:42:00','2025-03-12 09:35:20','breeds/March2025/NjY0ZLq9JtUs8lHkOgw5.jpeg'),(97,'4','Burmilla','cat','2025-03-11 05:42:00','2025-03-12 09:34:50','breeds/March2025/NmcEpXoWVdW0PgMokPnT.jpeg'),(98,'4','Snowshoe cat','cat','2025-03-11 05:42:00','2025-03-12 09:34:22','breeds/March2025/HfM2vw1xxtV50Pf8i8z9.jpeg'),(99,'4','Lykoi','cat','2025-03-11 05:43:00','2025-03-12 09:33:20','breeds/March2025/4S2Vg2jAKxTphmSwyx4g.jpeg'),(100,'4','Toyger','cat','2025-03-11 05:43:00','2025-03-12 09:32:33','breeds/March2025/9tiCnIJ3aEz7GYuIFhFB.jpeg'),(101,'4','Colorpoint Shorthair','cat','2025-03-11 05:44:00','2025-03-12 09:32:04','breeds/March2025/xfBBZj6gHT7mhmgs5Aqn.jpeg'),(102,'4','Javanese cat','cat','2025-03-11 05:44:00','2025-03-12 09:31:37','breeds/March2025/rNfNkNwLz5nmp9IQXelA.jpeg'),(103,'4','Australian Mist','cat','2025-03-11 05:44:00','2025-03-12 09:31:09','breeds/March2025/nZKENNhwngwoDhXMMHTg.jpeg'),(104,'4','Sokoke','cat','2025-03-11 05:44:00','2025-03-12 09:30:32','breeds/March2025/aoc07Y0Qu5gtD7JnjXDT.jpeg'),(105,'4','Khao Manee','cat','2025-03-11 05:45:00','2025-03-12 09:28:56','breeds/March2025/md938y2V3uzS98KjO4VV.jpeg'),(106,'5','Parrot','companion_pet','2025-03-11 05:45:00','2025-03-11 05:52:16','breeds/March2025/TE07gpsj3FUijYgSV9zu.png');
/*!40000 ALTER TABLE `breeds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int unsigned DEFAULT NULL,
  `order` int NOT NULL DEFAULT '1',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,NULL,1,'Dog','dog','2025-03-07 10:14:28','2025-03-07 10:14:28'),(4,NULL,1,'Cat','cat','2025-03-07 10:14:36','2025-03-07 10:14:36'),(5,NULL,1,'Campanion pet','companion_pet','2025-03-07 10:15:03','2025-03-11 05:58:44');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Shreyas','shreyas.vikartr@gmail.com','test','2025-03-03 04:45:18','2025-03-03 04:45:18'),(2,'Shreyas','shreyas.vikartr@gmail.com','test','2025-03-03 04:47:03','2025-03-03 04:47:03'),(3,'Shreyas','shreyas.vikartr@gmail.com','test','2025-03-03 04:47:53','2025-03-03 04:47:53'),(4,'test','your@email.com','test','2025-03-03 04:48:14','2025-03-03 04:48:14'),(5,'test','your@email.com','test','2025-03-03 05:05:15','2025-03-03 05:05:15'),(6,'jhfdhgsdf','superadmin@gmail.com','ahfdjsahfdg','2025-03-03 09:54:10','2025-03-03 09:54:10'),(7,'Ronak','ronak@gmail.com','heyy, this is ronak.','2025-03-03 10:01:40','2025-03-03 10:01:40'),(8,'Ronak','ronak@gmail.com','heyy, this is ronak.','2025-03-03 10:02:35','2025-03-03 10:02:35'),(9,'Ronak','ronak@gmail.com','heyy, this is ronak.','2025-03-03 10:02:52','2025-03-03 10:02:52'),(10,'Ronak','ronak@gmail.com','heyy, this is ronak.','2025-03-03 10:07:24','2025-03-03 10:07:24'),(11,'Harsh','harsh@gmail.com','test','2025-03-03 10:22:10','2025-03-03 10:22:10'),(12,'Test','bhavikchudasama1701@gmail.com','hello','2025-03-07 10:59:54','2025-03-07 10:59:54'),(13,'sss','sss@gmail.ccom','sss','2025-03-11 06:04:57','2025-03-11 06:04:57'),(14,'kjafakjshfds','ksjfdhsakjh@kjhekj.sdfkjs','jhsaghgfa','2025-03-12 07:58:27','2025-03-12 07:58:27'),(15,'aaaa','bbb@ccc.ddd','eee','2025-03-12 08:04:02','2025-03-12 08:04:02'),(16,'aaaa','bbb@ccc.ddd','eee','2025-03-12 08:05:55','2025-03-12 08:05:55'),(17,'aaaa','bbb@ccc.ddd','eee','2025-03-12 08:07:13','2025-03-12 08:07:13'),(18,'aaaa','bbb@ccc.ddd','eee','2025-03-12 08:08:31','2025-03-12 08:08:31'),(19,'sdkhs','hakjsdh@kjadf.dsf','afsadf','2025-03-12 08:08:45','2025-03-12 08:08:45');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_rows` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int unsigned NOT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Name',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Password',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',1,1,1,1,1,1,NULL,9),(22,4,'id','number','ID',1,0,0,0,0,0,'{}',1),(23,4,'parent_id','select_dropdown','Parent',0,0,0,0,0,0,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(24,4,'order','text','Order',1,1,1,1,1,1,'{\"default\":1}',3),(25,4,'name','text','Name',1,1,1,1,1,1,'{}',4),(26,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',5),(27,4,'created_at','timestamp','Created At',0,0,1,0,0,0,'{}',6),(28,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7),(29,5,'id','number','ID',1,0,0,0,0,0,NULL,1),(30,5,'author_id','text','Author',1,0,1,1,0,1,NULL,2),(31,5,'category_id','text','Category',1,0,1,1,1,0,NULL,3),(32,5,'title','text','Title',1,1,1,1,1,1,NULL,4),(33,5,'excerpt','text_area','Excerpt',1,0,1,1,1,1,NULL,5),(34,5,'body','rich_text_box','Body',1,0,1,1,1,1,NULL,6),(35,5,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(36,5,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',8),(37,5,'meta_description','text_area','Meta Description',1,0,1,1,1,1,NULL,9),(38,5,'meta_keywords','text_area','Meta Keywords',1,0,1,1,1,1,NULL,10),(39,5,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(40,5,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,12),(41,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,13),(42,5,'seo_title','text','SEO Title',0,1,1,1,1,1,NULL,14),(43,5,'featured','checkbox','Featured',1,1,1,1,1,1,NULL,15),(44,6,'id','number','ID',1,0,0,0,0,0,NULL,1),(45,6,'author_id','text','Author',1,0,0,0,0,0,NULL,2),(46,6,'title','text','Title',1,1,1,1,1,1,NULL,3),(47,6,'excerpt','text_area','Excerpt',1,0,1,1,1,1,NULL,4),(48,6,'body','rich_text_box','Body',1,0,1,1,1,1,NULL,5),(49,6,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}',6),(50,6,'meta_description','text','Meta Description',1,0,1,1,1,1,NULL,7),(51,6,'meta_keywords','text','Meta Keywords',1,0,1,1,1,1,NULL,8),(52,6,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(53,6,'created_at','timestamp','Created At',1,1,1,0,0,0,NULL,10),(54,6,'updated_at','timestamp','Updated At',1,0,0,0,0,0,NULL,11),(55,6,'image','image','Page Image',0,1,1,1,1,1,NULL,12),(56,7,'id','text','Id',1,0,0,0,0,0,'{}',1),(57,7,'banner_title','text','Banner Title',0,1,1,1,1,1,'{}',3),(58,7,'banner_description','text','Banner Description',0,1,1,1,1,1,'{}',4),(59,7,'title','text','Title',0,1,1,1,1,1,'{}',5),(60,7,'short_description','text','Short Description',0,1,1,1,1,1,'{}',6),(61,7,'description','rich_text_box','Description',0,1,1,1,1,1,'{}',7),(62,7,'home_page_desc','text','Home Page Desc',0,1,1,1,1,1,'{}',8),(63,7,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',9),(64,7,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',10),(65,7,'image','image','Image',0,1,1,1,1,1,'{}',11),(66,7,'home_page_image','image','Home Page Image',0,1,1,1,1,1,'{}',12),(67,7,'service_name','text','Service Name',0,1,1,1,1,1,'{}',2),(68,8,'id','text','Id',1,0,0,0,0,0,'{}',1),(69,8,'title','text','Title',0,1,1,1,1,1,'{}',2),(70,8,'description','rich_text_box','Description',0,1,1,1,1,1,'{}',3),(71,8,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',4),(72,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(73,8,'image','image','Image',0,1,1,1,1,1,'{}',6),(74,9,'id','text','Id',1,0,0,0,0,0,'{}',1),(75,9,'title','text','Title',0,1,1,1,1,1,'{}',2),(76,9,'description','text','Description',0,1,1,1,1,1,'{}',3),(77,9,'image','image','Image',0,1,1,1,1,1,'{}',4),(78,9,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',5),(79,9,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',6),(80,10,'id','text','Id',1,0,0,0,0,0,'{}',1),(81,10,'name','text','Name',0,1,1,1,1,1,'{}',2),(82,10,'review','text','Review',0,1,1,1,1,1,'{}',3),(83,10,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',4),(84,10,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(85,11,'id','text','Id',1,0,0,0,0,0,'{}',1),(86,11,'question','text','Question',0,1,1,1,1,1,'{}',2),(87,11,'answer','text','Answer',0,1,1,1,1,1,'{}',3),(88,11,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',4),(89,11,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(90,12,'id','text','Id',1,0,0,0,0,0,'{}',1),(91,12,'title','text','Title',0,1,1,1,1,1,'{}',2),(92,12,'short_description','text','Short Description',0,1,1,1,1,1,'{}',3),(93,12,'coverage_include','select_multiple','Coverage Include',0,1,1,1,1,1,'{\"default\":\"Hospitalisation Covered\",\"options\":{\"Hospitalisation Covered\":\"Hospitalisation Covered\",\"OPD Cover\":\"OPD Cover\",\"Terminal Diseases Cover\":\"Terminal Diseases Cover\",\"Theft\\/Lost\\/Straying Cover\":\"Theft\\/Lost\\/Straying Cover\"}}',4),(94,12,'key_feature','select_multiple','Key Feature',0,1,1,1,1,1,'{\"default\":\"Comprehensive Coverage\",\"options\":{\"Comprehensive Coverage\":\"Comprehensive Coverage\",\"Affordable Premiums\":\"Affordable Premiums\",\"Emergency Care Support\":\"Emergency Care Support\",\"Multiple pets covered\":\"Multiple pets covered\"}}',5),(95,12,'price','text','Price',0,1,1,1,1,1,'{}',6),(96,12,'long_description','rich_text_box','Long Description',0,1,1,1,1,1,'{}',7),(97,12,'include_1_title','text','Include 1 Title',0,1,1,1,1,1,'{}',8),(98,12,'include_1_desc','text','Include 1 Desc',0,1,1,1,1,1,'{}',9),(99,12,'include_1_image','image','Include 1 Image',0,1,1,1,1,1,'{}',10),(100,12,'include_2_title','text','Include 2 Title',0,1,1,1,1,1,'{}',11),(101,12,'include_2_desc','text','Include 2 Desc',0,1,1,1,1,1,'{}',12),(102,12,'include_2_image','image','Include 2 Image',0,1,1,1,1,1,'{}',13),(103,12,'include_3_title','text','Include 3 Title',0,1,1,1,1,1,'{}',14),(104,12,'include_3_desc','text','Include 3 Desc',0,1,1,1,1,1,'{}',15),(105,12,'include_3_image','image','Include 3 Image',0,1,1,1,1,1,'{}',16),(106,12,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',17),(107,12,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',18),(108,14,'id','text','Id',1,0,0,0,0,0,'{}',1),(109,14,'name','text','Name',0,1,1,1,1,1,'{}',2),(110,14,'email','text','Email',0,1,1,1,1,1,'{}',3),(111,14,'message','text','Message',0,1,1,1,1,1,'{}',4),(112,14,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',5),(113,14,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',6),(114,15,'id','text','Id',1,0,0,0,0,0,'{}',1),(115,15,'name','text','Name',0,1,1,1,1,1,'{}',2),(116,15,'category','text','Category',0,1,1,1,1,1,'{}',3),(117,15,'breed','text','Breed',0,1,1,1,1,1,'{}',4),(118,15,'age','text','Age',0,1,1,1,1,1,'{}',5),(119,15,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',6),(120,15,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7),(121,16,'id','text','Id',1,0,0,0,0,0,'{}',1),(122,16,'category_id','select_dropdown','Category Id',0,1,1,1,1,1,'{}',2),(123,16,'name','text','Breed Name',0,1,1,1,1,1,'{}',3),(124,16,'breed_type','text','Breed Type',0,1,1,1,1,1,'{}',4),(125,16,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',5),(126,16,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',6),(127,16,'breed_belongsto_category_relationship','relationship','Category name',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"breeds\",\"pivot\":\"0\",\"taggable\":\"0\"}',7),(128,16,'image','image','Image',0,1,1,1,1,1,'{}',7);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2025-02-24 03:52:36','2025-02-24 03:52:36'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2025-02-24 03:52:36','2025-02-24 03:52:36'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2025-02-24 03:52:36','2025-02-24 03:52:36'),(4,'categories','categories','Category','Categories','voyager-categories','App\\Models\\Category',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2025-02-24 03:52:37','2025-03-07 10:13:20'),(5,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy','','',1,0,NULL,'2025-02-24 03:52:37','2025-02-24 03:52:37'),(6,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,NULL,'2025-02-24 03:52:37','2025-02-24 03:52:37'),(7,'services','services','Service','Services',NULL,'App\\Models\\Service',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2025-02-24 04:30:43','2025-02-24 04:31:42'),(8,'insurance_covers','insurance-covers','Insurance Cover','Insurance Covers',NULL,'App\\Models\\InsuranceCover',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2025-02-24 04:38:22','2025-02-27 08:11:41'),(9,'features','features','Feature','Features',NULL,'App\\Models\\Feature',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2025-02-24 05:33:34','2025-02-24 05:33:34'),(10,'reviews','reviews','Review','Reviews',NULL,'App\\Models\\Review',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2025-02-24 05:41:16','2025-02-24 05:41:16'),(11,'faqs','faqs','Faq','Faqs',NULL,'App\\Models\\Faq',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2025-02-24 05:46:47','2025-02-24 05:46:47'),(12,'plans','plans','Plan','Plans',NULL,'App\\Models\\Plan',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2025-02-24 07:22:58','2025-02-27 06:43:21'),(14,'contacts','contacts','Contact','Contacts',NULL,'App\\Models\\Contact',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2025-03-03 04:32:37','2025-03-03 04:32:37'),(15,'get_quotes','get-quotes','Get Quote','Get Quotes',NULL,'App\\Models\\GetQuote',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2025-03-03 05:12:23','2025-03-03 05:12:23'),(16,'breeds','breeds','Breed','Breeds',NULL,'App\\Models\\Breed',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2025-03-07 10:10:19','2025-03-11 06:14:37');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'Is There a Cover for Commercial Use of Pets?','Upon payment of additional premium, pet insurance coverage may be extended to cover the pets for business, occupational, or professional uses. However, this will not be available for those pets who are engaged in any hazardous activity/sports or hunting.','2025-02-24 05:47:00','2025-02-27 06:10:58'),(2,'What is Pet Insurance?','A pet insurance plan offers those ‘PAWS’ the ultimate care against unexpected and expensive medical bills. If you are a pet parent, and look forward to safeguarding your pet against uncertainties, opt for a pet insurance policy.','2025-02-24 05:47:00','2025-02-27 06:11:33'),(3,'What Does Pet Insurance Typically Cover?','Pet insurance generally covers accidents, illnesses, surgeries, prescriptions, and sometimes preventive care, depending on the policy.','2025-02-24 05:47:00','2025-02-27 06:10:04'),(4,'Who Should Buy Pet Insurance Policy?','If you are a pet parent and look forward to having adequate protection against various expenses in case of an accident or illness. Multiple pets under the ownership of a single individual will be covered under the pet insurance.','2025-02-27 06:12:49','2025-02-27 06:12:49'),(5,'How Does Reimbursement Work in Pet Insurance?','After paying the vet bill, you submit a claim to your insurer. They\'ll reimburse you based on your plan\'s coverage percentage and deductibles.','2025-02-27 06:13:31','2025-02-27 06:13:31');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `features` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `features`
--

LOCK TABLES `features` WRITE;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` VALUES (2,'Multiple pets covered','Our plans cover multiple pets, providing all-round protection for your beloved cats and dogs','features/February2025/SzmHVtXsTpRpgtL72ZDz.png','2025-02-24 05:35:00','2025-02-27 06:52:49'),(3,'Emergency Care Support','Coverage for emergencies and unexpected treatments','features/February2025/VfShQ3I1yTpgIauL95C9.png','2025-02-24 05:35:00','2025-02-27 06:52:31'),(4,'Affordable Premiums','Flexible and tailored plans for pets of all types','features/February2025/xZjvjaWaMxV6AAoefjSo.png','2025-02-24 05:35:00','2025-02-27 06:52:09'),(5,'Comprehensive Coverage','Includes vet fees, surgeries, and illness-related treatments','features/February2025/g1NkcDb9grLyiG5sYGBB.png','2025-02-24 05:36:00','2025-02-27 06:51:51');
/*!40000 ALTER TABLE `features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `get_quotes`
--

DROP TABLE IF EXISTS `get_quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `get_quotes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `get_quotes`
--

LOCK TABLES `get_quotes` WRITE;
/*!40000 ALTER TABLE `get_quotes` DISABLE KEYS */;
INSERT INTO `get_quotes` VALUES (1,'Test','dog','b','1','2025-03-03 05:13:16','2025-03-03 05:13:16',NULL),(2,'Jay','cat','b','1','2025-03-03 10:16:33','2025-03-03 10:16:33','jay@gmail.com'),(3,'Jay','cat','b','1','2025-03-03 10:17:51','2025-03-03 10:17:51','jay@gmail.com'),(4,'Mann','dog','c','3','2025-03-03 10:21:41','2025-03-03 10:21:41','mann@gmail.com'),(5,'Test','cat','2','3','2025-03-07 11:35:28','2025-03-07 11:35:28','bhavikchudasama1701@gmail.com'),(6,'admin','dog','1','3','2025-03-07 11:35:57','2025-03-07 11:35:57','bhavikchudasama1701@gmail.com'),(7,'Test','dog','1','3','2025-03-07 11:40:46','2025-03-07 11:40:46','bhavikchudasama1701@gmail.com'),(8,'ds','dog','1','3','2025-03-07 12:12:10','2025-03-07 12:12:10','datamonkapp23@gmail.com'),(9,'ds','dog','1','3','2025-03-07 12:16:37','2025-03-07 12:16:37','datamonkapp23@gmail.com'),(10,'Shreyas','companion_pet','106','5','2025-03-11 05:59:46','2025-03-11 05:59:46','ahdfj@adfjhs.dsaf'),(11,'Shreyas','companion_pet','106','5','2025-03-11 06:00:30','2025-03-11 06:00:30','ahdfj@adfjhs.dsaf'),(12,'Shreyas','dog','7','3','2025-03-11 06:01:04','2025-03-11 06:01:04','sss@gmail.ccom');
/*!40000 ALTER TABLE `get_quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insurance_covers`
--

DROP TABLE IF EXISTS `insurance_covers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `insurance_covers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insurance_covers`
--

LOCK TABLES `insurance_covers` WRITE;
/*!40000 ALTER TABLE `insurance_covers` DISABLE KEYS */;
INSERT INTO `insurance_covers` VALUES (1,'Surgery','<p class=\"group-hover:text-white text-sm text-[#808380]\">In the unfortunate event that your pet requires surgery, our policy covers a comprehensive list of surgeries, providing financial assistance for necessary medical interventions.</p>','2025-02-24 04:39:00','2025-02-28 09:29:52',NULL),(2,'Illness','<p class=\"group-hover:text-white text-sm text-[#808380]\">Our policy extends coverage to both major and minor illnesses, ensuring your pet\'s well-being by addressing a variety of health concerns diagnosed by veterinary professionals.</p>','2025-02-24 04:40:00','2025-02-27 08:09:36',NULL),(3,'Injury','<p class=\"group-hover:text-white text-sm text-[#808380]\">Protect your pet from unexpected accidents and bites by covering the costs associated with injuries caused by other animals or accidental incidents.</p>','2025-02-24 04:40:00','2025-02-28 09:29:00',NULL),(4,'Treatment Expenses','<p class=\"group-hover:text-white text-sm text-[#808380]\">This coverage includes diagnostics, a broad spectrum of procedures from Outpatient to Emergency care, and comprehensive medical coverage, including Injections, ensuring your pet\'s overall well-being.</p>','2025-02-28 09:30:24','2025-02-28 09:30:24',NULL),(5,'Illness Or Injury From Commercial Activities','<p class=\"group-hover:text-white text-sm text-[#808380]\">This coverage insures injuries and illnesses arising out of racing, coursing, commercial guarding, and any occupational, professional, or business use of the insured pet.</p>','2025-02-28 09:31:34','2025-02-28 09:31:34',NULL),(6,'Trip Cancellation','<p class=\"group-hover:text-white text-sm text-[#808380]\">This coverage includes financial loss incurred for domestic travel on non-refundable travel &amp; accommodation costs, as well as rescheduling by the pet owner and their spouse in case of an admissible claim.</p>','2025-02-28 09:32:11','2025-02-28 09:32:11',NULL),(7,'Funeral Expenses','<p class=\"group-hover:text-white text-sm text-[#808380]\">In case of the death of the pet, this coverage provides reimbursement if a claim was admissible in the same policy year.</p>','2025-02-28 09:32:44','2025-02-28 09:32:44',NULL),(8,'Veterinary Consultation','<p class=\"group-hover:text-white text-sm text-[#808380]\">This coverage includes four vet-on-call and two video call services per policy.</p>','2025-02-28 09:33:13','2025-02-28 09:33:13',NULL),(9,'Third-Party Liability','<p class=\"group-hover:text-white text-sm text-[#808380]\">This coverage includes expenses incurred by the pet owner for legal claims or lawsuits for bodily injury or property damage caused by the pet.</p>','2025-02-28 09:33:40','2025-02-28 09:33:40',NULL);
/*!40000 ALTER TABLE `insurance_covers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2025-02-24 03:52:36','2025-02-24 03:52:36','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,5,'2025-02-24 03:52:36','2025-02-24 03:52:36','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2025-02-24 03:52:36','2025-02-24 03:52:36','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2025-02-24 03:52:36','2025-02-24 03:52:36','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,9,'2025-02-24 03:52:36','2025-02-24 03:52:36',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,10,'2025-02-24 03:52:36','2025-02-24 03:52:36','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,11,'2025-02-24 03:52:36','2025-02-24 03:52:36','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,12,'2025-02-24 03:52:36','2025-02-24 03:52:36','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,13,'2025-02-24 03:52:36','2025-02-24 03:52:36','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,14,'2025-02-24 03:52:36','2025-02-24 03:52:36','voyager.settings.index',NULL),(11,1,'Categories','','_self','voyager-categories',NULL,NULL,8,'2025-02-24 03:52:37','2025-02-24 03:52:37','voyager.categories.index',NULL),(12,1,'Posts','','_self','voyager-news',NULL,NULL,6,'2025-02-24 03:52:37','2025-02-24 03:52:37','voyager.posts.index',NULL),(13,1,'Pages','','_self','voyager-file-text',NULL,NULL,7,'2025-02-24 03:52:37','2025-02-24 03:52:37','voyager.pages.index',NULL),(14,1,'Services','','_self',NULL,NULL,NULL,15,'2025-02-24 04:30:43','2025-02-24 04:30:43','voyager.services.index',NULL),(15,1,'Insurance Covers','','_self',NULL,NULL,NULL,16,'2025-02-24 04:38:22','2025-02-24 04:38:22','voyager.insurance-covers.index',NULL),(16,1,'Features','','_self',NULL,NULL,NULL,17,'2025-02-24 05:33:34','2025-02-24 05:33:34','voyager.features.index',NULL),(17,1,'Reviews','','_self',NULL,NULL,NULL,18,'2025-02-24 05:41:16','2025-02-24 05:41:16','voyager.reviews.index',NULL),(18,1,'Faqs','','_self',NULL,NULL,NULL,19,'2025-02-24 05:46:47','2025-02-24 05:46:47','voyager.faqs.index',NULL),(19,1,'Plans','','_self',NULL,NULL,NULL,20,'2025-02-24 07:22:58','2025-02-24 07:22:58','voyager.plans.index',NULL),(20,1,'Contacts','','_self',NULL,NULL,NULL,21,'2025-03-03 04:32:37','2025-03-03 04:32:37','voyager.contacts.index',NULL),(21,1,'Get Quotes','','_self',NULL,NULL,NULL,22,'2025-03-03 05:12:23','2025-03-03 05:12:23','voyager.get-quotes.index',NULL),(22,1,'Breeds','','_self',NULL,NULL,NULL,23,'2025-03-07 10:10:19','2025-03-07 10:10:19','voyager.breeds.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2025-02-24 03:52:36','2025-02-24 03:52:36');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2019_08_19_000000_create_failed_jobs_table',1),(24,'2019_12_14_000001_create_personal_access_tokens_table',1),(25,'2016_01_01_000000_create_pages_table',2),(26,'2016_01_01_000000_create_posts_table',2),(27,'2016_02_15_204651_create_categories_table',2),(28,'2017_04_11_000000_alter_post_nullable_fields_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,0,'Hello World','Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.','<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','pages/page1.jpg','hello-world','Yar Meta Description','Keyword1, Keyword2','ACTIVE','2025-02-24 03:52:37','2025-02-24 03:52:37');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1),(75,1),(76,1),(77,1),(78,1),(79,1),(80,1),(81,1),(82,1),(83,1),(84,1),(85,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2025-02-24 03:52:36','2025-02-24 03:52:36'),(2,'browse_bread',NULL,'2025-02-24 03:52:36','2025-02-24 03:52:36'),(3,'browse_database',NULL,'2025-02-24 03:52:36','2025-02-24 03:52:36'),(4,'browse_media',NULL,'2025-02-24 03:52:36','2025-02-24 03:52:36'),(5,'browse_compass',NULL,'2025-02-24 03:52:36','2025-02-24 03:52:36'),(6,'browse_menus','menus','2025-02-24 03:52:36','2025-02-24 03:52:36'),(7,'read_menus','menus','2025-02-24 03:52:36','2025-02-24 03:52:36'),(8,'edit_menus','menus','2025-02-24 03:52:36','2025-02-24 03:52:36'),(9,'add_menus','menus','2025-02-24 03:52:36','2025-02-24 03:52:36'),(10,'delete_menus','menus','2025-02-24 03:52:36','2025-02-24 03:52:36'),(11,'browse_roles','roles','2025-02-24 03:52:36','2025-02-24 03:52:36'),(12,'read_roles','roles','2025-02-24 03:52:36','2025-02-24 03:52:36'),(13,'edit_roles','roles','2025-02-24 03:52:36','2025-02-24 03:52:36'),(14,'add_roles','roles','2025-02-24 03:52:36','2025-02-24 03:52:36'),(15,'delete_roles','roles','2025-02-24 03:52:36','2025-02-24 03:52:36'),(16,'browse_users','users','2025-02-24 03:52:36','2025-02-24 03:52:36'),(17,'read_users','users','2025-02-24 03:52:36','2025-02-24 03:52:36'),(18,'edit_users','users','2025-02-24 03:52:36','2025-02-24 03:52:36'),(19,'add_users','users','2025-02-24 03:52:36','2025-02-24 03:52:36'),(20,'delete_users','users','2025-02-24 03:52:36','2025-02-24 03:52:36'),(21,'browse_settings','settings','2025-02-24 03:52:36','2025-02-24 03:52:36'),(22,'read_settings','settings','2025-02-24 03:52:36','2025-02-24 03:52:36'),(23,'edit_settings','settings','2025-02-24 03:52:36','2025-02-24 03:52:36'),(24,'add_settings','settings','2025-02-24 03:52:36','2025-02-24 03:52:36'),(25,'delete_settings','settings','2025-02-24 03:52:36','2025-02-24 03:52:36'),(26,'browse_categories','categories','2025-02-24 03:52:37','2025-02-24 03:52:37'),(27,'read_categories','categories','2025-02-24 03:52:37','2025-02-24 03:52:37'),(28,'edit_categories','categories','2025-02-24 03:52:37','2025-02-24 03:52:37'),(29,'add_categories','categories','2025-02-24 03:52:37','2025-02-24 03:52:37'),(30,'delete_categories','categories','2025-02-24 03:52:37','2025-02-24 03:52:37'),(31,'browse_posts','posts','2025-02-24 03:52:37','2025-02-24 03:52:37'),(32,'read_posts','posts','2025-02-24 03:52:37','2025-02-24 03:52:37'),(33,'edit_posts','posts','2025-02-24 03:52:37','2025-02-24 03:52:37'),(34,'add_posts','posts','2025-02-24 03:52:37','2025-02-24 03:52:37'),(35,'delete_posts','posts','2025-02-24 03:52:37','2025-02-24 03:52:37'),(36,'browse_pages','pages','2025-02-24 03:52:37','2025-02-24 03:52:37'),(37,'read_pages','pages','2025-02-24 03:52:37','2025-02-24 03:52:37'),(38,'edit_pages','pages','2025-02-24 03:52:37','2025-02-24 03:52:37'),(39,'add_pages','pages','2025-02-24 03:52:37','2025-02-24 03:52:37'),(40,'delete_pages','pages','2025-02-24 03:52:37','2025-02-24 03:52:37'),(41,'browse_services','services','2025-02-24 04:30:43','2025-02-24 04:30:43'),(42,'read_services','services','2025-02-24 04:30:43','2025-02-24 04:30:43'),(43,'edit_services','services','2025-02-24 04:30:43','2025-02-24 04:30:43'),(44,'add_services','services','2025-02-24 04:30:43','2025-02-24 04:30:43'),(45,'delete_services','services','2025-02-24 04:30:43','2025-02-24 04:30:43'),(46,'browse_insurance_covers','insurance_covers','2025-02-24 04:38:22','2025-02-24 04:38:22'),(47,'read_insurance_covers','insurance_covers','2025-02-24 04:38:22','2025-02-24 04:38:22'),(48,'edit_insurance_covers','insurance_covers','2025-02-24 04:38:22','2025-02-24 04:38:22'),(49,'add_insurance_covers','insurance_covers','2025-02-24 04:38:22','2025-02-24 04:38:22'),(50,'delete_insurance_covers','insurance_covers','2025-02-24 04:38:22','2025-02-24 04:38:22'),(51,'browse_features','features','2025-02-24 05:33:34','2025-02-24 05:33:34'),(52,'read_features','features','2025-02-24 05:33:34','2025-02-24 05:33:34'),(53,'edit_features','features','2025-02-24 05:33:34','2025-02-24 05:33:34'),(54,'add_features','features','2025-02-24 05:33:34','2025-02-24 05:33:34'),(55,'delete_features','features','2025-02-24 05:33:34','2025-02-24 05:33:34'),(56,'browse_reviews','reviews','2025-02-24 05:41:16','2025-02-24 05:41:16'),(57,'read_reviews','reviews','2025-02-24 05:41:16','2025-02-24 05:41:16'),(58,'edit_reviews','reviews','2025-02-24 05:41:16','2025-02-24 05:41:16'),(59,'add_reviews','reviews','2025-02-24 05:41:16','2025-02-24 05:41:16'),(60,'delete_reviews','reviews','2025-02-24 05:41:16','2025-02-24 05:41:16'),(61,'browse_faqs','faqs','2025-02-24 05:46:47','2025-02-24 05:46:47'),(62,'read_faqs','faqs','2025-02-24 05:46:47','2025-02-24 05:46:47'),(63,'edit_faqs','faqs','2025-02-24 05:46:47','2025-02-24 05:46:47'),(64,'add_faqs','faqs','2025-02-24 05:46:47','2025-02-24 05:46:47'),(65,'delete_faqs','faqs','2025-02-24 05:46:47','2025-02-24 05:46:47'),(66,'browse_plans','plans','2025-02-24 07:22:58','2025-02-24 07:22:58'),(67,'read_plans','plans','2025-02-24 07:22:58','2025-02-24 07:22:58'),(68,'edit_plans','plans','2025-02-24 07:22:58','2025-02-24 07:22:58'),(69,'add_plans','plans','2025-02-24 07:22:58','2025-02-24 07:22:58'),(70,'delete_plans','plans','2025-02-24 07:22:58','2025-02-24 07:22:58'),(71,'browse_contacts','contacts','2025-03-03 04:32:37','2025-03-03 04:32:37'),(72,'read_contacts','contacts','2025-03-03 04:32:37','2025-03-03 04:32:37'),(73,'edit_contacts','contacts','2025-03-03 04:32:37','2025-03-03 04:32:37'),(74,'add_contacts','contacts','2025-03-03 04:32:37','2025-03-03 04:32:37'),(75,'delete_contacts','contacts','2025-03-03 04:32:37','2025-03-03 04:32:37'),(76,'browse_get_quotes','get_quotes','2025-03-03 05:12:23','2025-03-03 05:12:23'),(77,'read_get_quotes','get_quotes','2025-03-03 05:12:23','2025-03-03 05:12:23'),(78,'edit_get_quotes','get_quotes','2025-03-03 05:12:23','2025-03-03 05:12:23'),(79,'add_get_quotes','get_quotes','2025-03-03 05:12:23','2025-03-03 05:12:23'),(80,'delete_get_quotes','get_quotes','2025-03-03 05:12:23','2025-03-03 05:12:23'),(81,'browse_breeds','breeds','2025-03-07 10:10:19','2025-03-07 10:10:19'),(82,'read_breeds','breeds','2025-03-07 10:10:19','2025-03-07 10:10:19'),(83,'edit_breeds','breeds','2025-03-07 10:10:19','2025-03-07 10:10:19'),(84,'add_breeds','breeds','2025-03-07 10:10:19','2025-03-07 10:10:19'),(85,'delete_breeds','breeds','2025-03-07 10:10:19','2025-03-07 10:10:19');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plans` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverage_include` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_feature` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `include_1_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_1_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_1_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_2_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_2_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_2_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_3_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_3_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include_3_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plans`
--

LOCK TABLES `plans` WRITE;
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
INSERT INTO `plans` VALUES (1,'Basic Plan','Comprehensive coverage with higher reimbursements, wellness benefits, and advanced medical treatments.','[\"Hospitalisation Covered\",\"OPD Cover\",\"Terminal Diseases Cover\",\"Theft\\/Lost\\/Straying Cover\"]','[\"Comprehensive Coverage\",\"Affordable Premiums\",\"Emergency Care Support\",\"Multiple pets covered\"]','3500','<p class=\"text-theme2 text-2xl mb-3\">The Basic Plan offers essential coverage for unexpected accidents and emergencies, ensuring your pet receives immediate medical attention when needed. It covers veterinary consultations, diagnostic tests, surgeries, and hospitalization related to accidents. Ideal for pet owners looking for affordable protection against unforeseen events, this plan provides peace of mind without breaking the bank.</p>','Funeral Expenses','In case of the death of the pet, this coverage provides reimbursement if a claim was admissible in the same policy year.',NULL,'Veterinary Consultation','This coverage includes four vet-on-call and two video call services per policy.',NULL,'Third-Party Liability','This coverage includes expenses incurred by the pet owner for legal claims or lawsuits for bodily injury or property damage caused by the pet.',NULL,'2025-02-24 07:29:00','2025-02-27 07:54:28'),(2,'Standard Plan','Includes accident, illness, and routine care coverage for complete pet health protection.','[\"Hospitalisation Covered\",\"OPD Cover\",\"Terminal Diseases Cover\",\"Theft\\/Lost\\/Straying Cover\"]','[\"Comprehensive Coverage\",\"Affordable Premiums\",\"Emergency Care Support\",\"Multiple pets covered\"]','3700','<p class=\"text-theme2 text-2xl mb-3\">The Standard Plan provides a balanced mix of accident and illness coverage, including treatment for common illnesses, infections, and hereditary conditions. In addition to emergency care, it covers medications, diagnostic tests, and specialist consultations. This plan is perfect for pet owners who want more comprehensive protection while maintaining affordability.</p>','Treatment Expenses','This coverage includes diagnostics, a broad spectrum of procedures from Outpatient to Emergency care, and comprehensive medical coverage, including Injections, ensuring your pet\'s overall well-being.',NULL,'Illness Or Injury From Commercial Activities','This coverage insures injuries and illnesses arising out of racing, coursing, commercial guarding, and any occupational, professional, or business use of the insured pet.',NULL,'Trip Cancellation','This coverage includes financial loss incurred for domestic travel on non-refundable travel & accommodation costs, as well as rescheduling by the pet owner and their spouse in case of an admissible claim.',NULL,'2025-02-24 07:30:00','2025-02-27 07:53:07'),(3,'Premium Plan','Covers accidents and emergencies with affordable premiums for essential pet protection.','[\"Hospitalisation Covered\",\"OPD Cover\",\"Terminal Diseases Cover\",\"Theft\\/Lost\\/Straying Cover\"]','[\"Comprehensive Coverage\",\"Affordable Premiums\",\"Emergency Care Support\",\"Multiple pets covered\"]','3900','<p class=\"text-theme2 text-lg lg:text-2xl mb-3\">Our most comprehensive plan, the Premium Plan, includes all benefits from the Basic and Standard plans while adding routine wellness care, vaccinations, dental treatments, and preventive screenings. It also offers higher reimbursement limits and additional perks such as alternative therapies and rehabilitation. This plan is designed for pet owners who want complete protection and the highest level of care for their furry companions.</p>','Illness','Our policy extends coverage to both major and minor illnesses, ensuring your pet\'s well-being by addressing a variety of health concerns diagnosed by veterinary professionals.',NULL,'Injury','Protect your pet from unexpected accidents and bites by covering the costs associated with injuries caused by other animals or accidental incidents.',NULL,'Surgery','In the unfortunate event that your pet requires surgery, our policy covers a comprehensive list of surgeries, providing financial assistance for necessary medical interventions.',NULL,'2025-02-27 05:26:00','2025-02-27 07:54:39');
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int NOT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,0,NULL,'Lorem Ipsum Post',NULL,'This is the excerpt for the Lorem Ipsum Post','<p>This is the body of the lorem ipsum post</p>','posts/post1.jpg','lorem-ipsum-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2025-02-24 03:52:37','2025-02-24 03:52:37'),(2,0,NULL,'My Sample Post',NULL,'This is the excerpt for the sample Post','<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>','posts/post2.jpg','my-sample-post','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2025-02-24 03:52:37','2025-02-24 03:52:37'),(3,0,NULL,'Latest Post',NULL,'This is the excerpt for the latest post','<p>This is the body for the latest post</p>','posts/post3.jpg','latest-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2025-02-24 03:52:37','2025-02-24 03:52:37'),(4,0,NULL,'Yarr Post',NULL,'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','posts/post4.jpg','yarr-post','this be a meta descript','keyword1, keyword2, keyword3','PUBLISHED',0,'2025-02-24 03:52:37','2025-02-24 03:52:37');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,'Divya Jain','I\'ve never had any issues with the claims I\'ve submitted or with coverage. Claim processing times are very quick. Will keep being their client!','2025-02-24 05:41:00','2025-02-27 06:56:59'),(2,'Ankit Patel','Great customer service, very reasonably priced coverage plans, and quick turnaround processing claims','2025-02-24 05:42:00','2025-02-27 06:56:01'),(3,'Jay Shah','Easy process to add my new pet and the rates are within my budget. The process to submit a claim was fast. I recommend it.','2025-02-24 05:42:00','2025-02-27 06:56:13');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2025-02-24 03:52:36','2025-02-24 03:52:36'),(2,'user','Normal User','2025-02-24 03:52:36','2025-02-24 03:52:36');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_page_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Protect Your Dog with Comprehensive Insurance','Give your furry friend the best care with our flexible dog insurance plans. Cover accidents, illnesses, and routine checkups for a happy, healthy pup!','Comprehensive Coverage for Your Dog’s Health','Protect your dog from unexpected medical expenses with our flexible insurance plans. Cover accidents, illnesses, and routine care to ensure your furry friend stays happy and healthy.','<p class=\"text-lg lg:text-2xl text-theme2 pb-10\">Get peace of mind with reliable dog insurance. From emergency treatments to regular vet visits, our plans provide financial security so you can focus on your pet&rsquo;s well-being.</p>','Health care plans for dogs & puppies','2025-02-24 04:33:00','2025-02-27 08:01:02','services/February2025/hZSjjEWBVVNxjALrIAZ9.png','services/February2025/83qFaZsUf88YJQsSUDlP.png','DOG INSURANCE'),(2,'Affordable Cat Insurance for Peace of Mind','Ensure your cat’s health and well-being with our reliable insurance plans. Get coverage for accidents, illnesses, and vet visits with quick, hassle-free claims.','Affordable & Reliable Insurance for Your Cat','Keep your cat safe with insurance that covers accidents, illnesses, and preventive care. Enjoy stress-free pet ownership with quick claim processing and flexible plans.','<p class=\"text-lg lg:text-2xl text-theme2 pb-10\">From routine checkups to unexpected emergencies, our cat insurance plans provide the protection your feline companion deserves&mdash;ensuring lifelong health and happiness.</p>','Health care plans for cats & kittens','2025-02-24 04:34:00','2025-02-27 08:04:28','services/February2025/5cHPaudJQS7kA9jWmwV2.png','services/February2025/MZ6WuotGWZZjA16mH1dU.png','CAT INSURANCE'),(3,'Complete Protection for Your Beloved Pet','Whether you have a dog, cat, or other companion pet, our insurance plans offer the best coverage for their health and happiness. Get a quote today!','Complete Protection for Your Beloved Pet','Whether you have a dog, cat, or other companion pet, our insurance covers accidents, illnesses, and vet visits—keeping your pet protected at all times.','<p class=\"text-lg lg:text-2xl text-theme2 pb-10\">Give your companion pet the best care with our all-in-one insurance plans. Affordable, flexible, and designed to provide peace of mind for pet owners.</p>','Health care plans for companion pet','2025-02-24 04:35:00','2025-02-27 08:04:16','services/February2025/dyAutrwYFlZfivb9kRk5.png','services/February2025/FfZsZLlirZqIDMpOzbjN.png','COMPANION PET INSURANCE');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Vanya Risk Management Consultants','','text',1,'Site'),(2,'site.description','Site Description','Because your pet deserves the happiest and healthiest life','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin'),(13,'home-page.banner_slogan','Banner Slogan','\"Unleash Worry-Free Pet Care.\"',NULL,'text',8,'Home Page'),(16,'home-page.guide_1_titel','Guide 1 Title','Choose a Plan',NULL,'text',11,'Home Page'),(18,'home-page.guide_2_title','Guide 2 Title','Enroll Your Pet',NULL,'text',13,'Home Page'),(19,'home-page.guide_3_title','Guide 3 Title','Enjoy Worry-Free Coverage',NULL,'text',14,'Home Page'),(20,'home-page.guide_1_desc','Guide 1 Descrption','<p>Compare coverage options, premiums, and deductibles to find the best plan for your pet&rsquo;s needs. Ensure it covers accidents, illnesses, and routine care.</p>',NULL,'rich_text_box',15,'Home Page'),(21,'home-page.guide_2_desc','Guide 2 Description','<p>Provide your pet&rsquo;s details, review policy terms, and complete the signup process. Pay your first premium to activate coverage instantly.</p>',NULL,'rich_text_box',16,'Home Page'),(22,'home-page.guide_3_desc','Guide 3 Description','<p>Visit any licensed vet, submit claims easily, and get reimbursed for eligible expenses. Focus on your pet&rsquo;s health without financial stress.</p>',NULL,'rich_text_box',17,'Home Page'),(23,'home-page.choose_us_title','Choose Us Title','Why VANYA Risk Management Consultant Stands Out in the Pet Insurance Industry',NULL,'text',18,'Home Page'),(25,'home-page.choose_us_subtitle_1','Choose Us Subtitle 1','Comprehensive Coverage',NULL,'text',19,'Home Page'),(26,'home-page.choose_us_subtitle_2','Choose Us Subtitle 2','Hassle-Free Claims',NULL,'text',20,'Home Page'),(27,'home-page.choose_us_subtitle_3','Choose Us Subtitle 3','Affordable Plans',NULL,'text',21,'Home Page'),(28,'home-page.choose_us_desc_1','Choose Us Decription 1','Get protection for accidents, illnesses, and routine care, ensuring your pet receives the best medical attention when needed.',NULL,'text',22,'Home Page'),(29,'home-page.choose_us_desc_2','Choose Us Description 2','Easily submit claims online and get quick reimbursements, so you can focus on your pet’s health without financial worries.',NULL,'text',23,'Home Page'),(30,'home-page.choose_us_desc_3','Choose Us Description 3','Flexible and budget-friendly plans designed to fit your needs, providing quality coverage without breaking the bank.',NULL,'text',24,'Home Page'),(31,'contact.mobile_number','Mobile Number','95749 53131',NULL,'text',25,'Contact'),(32,'contact.email','Email','support@vanya.com',NULL,'text',26,'Contact'),(33,'contact.address','Address','E-828, Radhe Infinity, Raksha Shakti Circle, Gandhinagar',NULL,'text',27,'Contact'),(34,'contact.banner_title','Banner Title','We’re here to help—because your pet’s health is our priority!',NULL,'text',28,'Contact'),(35,'contact.banner_description','Banner Description','Have questions or need assistance? Contact our friendly support team for help with plans, claims, or inquiries. We’re here to ensure the best care for your pet!',NULL,'text',29,'Contact'),(36,'contact.facebook_link','Facebook Link','www.facebook.com',NULL,'text',30,'Contact'),(37,'contact.instagram_link','Instagram Link','www.instagram.com',NULL,'text',31,'Contact'),(38,'contact.twitter_link','Twitter Link','www.x.com',NULL,'text',32,'Contact'),(39,'contact.youtube_link','YouTube Link','www.youtube.com',NULL,'text',33,'Contact'),(40,'site.footer_logo','Footer Logo','',NULL,'image',34,'Site'),(41,'submit-claim.banner_title','Banner Title','Submit a claim',NULL,'text',35,'Submit Claim'),(42,'submit-claim.banner_description','Banner Description','Easily submit your pet insurance claim online in just a few steps. Upload documents, track your claim status, and get fast reimbursements—hassle-free and convenient for your peace of mind!',NULL,'text',36,'Submit Claim'),(43,'submit-claim.steps_title_1','Steps Title 1','Visit the Vet',NULL,'text',37,'Submit Claim'),(44,'submit-claim.steps_title_2','Steps Title 2','Gather Documents',NULL,'text',38,'Submit Claim'),(45,'submit-claim.steps_title_3','Steps Title 3','Submit Your Claim',NULL,'text',39,'Submit Claim'),(46,'submit-claim.steps_title_4','Steps Title 4','Get Reimbursed',NULL,'text',40,'Submit Claim'),(47,'submit-claim.steps_desc_1','Steps Description 1','Take your pet to any licensed veterinarian for treatment. Keep all invoices, medical records, and receipts for your claim submission.',NULL,'text',41,'Submit Claim'),(48,'submit-claim.steps_desc_2','Steps Description 2','Collect your pet’s medical records, itemized invoices, and proof of payment to ensure a smooth and quick claims process.',NULL,'text',42,'Submit Claim'),(49,'submit-claim.steps_desc_3','Steps Description 3','Upload your documents through our online portal or mobile app. Fill in the required details and submit your claim in minutes.',NULL,'text',43,'Submit Claim'),(50,'submit-claim.steps_desc_4','Steps Description 4','Our team will review your claim quickly, and once approved, you’ll receive your reimbursement via direct deposit or check.',NULL,'text',44,'Submit Claim'),(51,'about.banner_title','Banner Title','About us',NULL,'text',45,'About'),(54,'about.banner_description','Banner Description','We provide reliable pet insurance with flexible plans, hassle-free claims, and quick reimbursements, ensuring your furry friend gets the best care without financial stress. Protect your pet’s health with confidence!',NULL,'text',46,'About'),(55,'about.logo','Logo','',NULL,'image',47,'About'),(56,'about.logo_description','Logo Description','<p class=\"text-white text-lg lg:text-2xl\">At VANYA risk management consultant, we know that pets are more than just animals&mdash;they&rsquo;re family. That&rsquo;s why we&rsquo;re dedicated to providing pet owners with reliable, affordable, and comprehensive pet insurance. Our mission is to help you give your furry friends the best care possible without the stress of unexpected veterinary costs.</p>',NULL,'rich_text_box',48,'About'),(57,'about.description','Description','<p class=\"text-theme2 text-lg lg:text-2xl pb-10\">That&rsquo;s where we come in. Our mission is simple: to provide pet owners with affordable, reliable, and comprehensive pet insurance so that financial worries never stand in the way of quality veterinary care. Whether it&rsquo;s a routine checkup, an unexpected emergency, or long-term treatment, we ensure your pet gets the medical attention they need&mdash;without the stress of costly bills.</p>',NULL,'rich_text_box',49,'About'),(58,'about.question','Question','Why Choose us ?',NULL,'text',50,'About'),(59,'about.answer','Answer','<p class=\"text-theme2 text-lg lg:text-2xl\">At Vanya, we provide reliable and comprehensive pet insurance to ensure your furry friend gets the best care without financial stress. Our flexible plans cover accidents, illnesses, and routine checkups, giving you peace of mind. With a hassle-free claims process and quick reimbursements, we make it easy for you to focus on your pet&rsquo;s health. You can visit any licensed veterinarian nationwide without restrictions, ensuring the best care possible. Our affordable plans are designed to fit different budgets, and our dedicated customer support team is always ready to assist you. Choose Vanya for trusted, stress-free pet insurance!</p>',NULL,'rich_text_box',51,'About'),(60,'about.feature_1_image','Feature 1 Image','',NULL,'image',52,'About'),(61,'about.feature_2_image','Feature 2 Image','',NULL,'image',53,'About'),(62,'about.feature_3_image','Feature 3 Image','',NULL,'image',54,'About'),(63,'about.feature_4_image','Feature 4 Image','',NULL,'image',55,'About'),(64,'about.feature_5_image','Feature 5 Image','',NULL,'image',56,'About'),(65,'about.feature_1_title','Feature 1 Title','Comprehensive Coverage',NULL,'text',57,'About'),(66,'about.feature_2_title','Feature 2 Title','Flexible Plans',NULL,'text',58,'About'),(67,'about.feature_3_title','Feature 3 Title','Fast & Hassle-Free Claims',NULL,'text',59,'About'),(68,'about.feature_4_title','Feature 4 Title','Dedicated Support Team',NULL,'text',60,'About'),(69,'about.feature_5_title','Feature 5 Title','Trusted by Pet Owners Nationwide',NULL,'text',61,'About'),(70,'about.feature_1_desc','Feature 1 Description','<p class=\"text-theme2 text-lg lg:text-2xl pb-0 lg:pb-10\">From accidents and illnesses to preventive care and alternative treatments, our plans are designed to fit your pet&rsquo;s unique needs.</p>',NULL,'rich_text_box',62,'About'),(71,'about.feature_2_desc','Feature 2 Description','<p class=\"text-theme2 text-lg lg:text-2xl pb-0 lg:pb-10\">We offer customizable coverage options, so you only pay for what you need.</p>',NULL,'rich_text_box',63,'About'),(72,'about.feature_3_desc','Feature 3 Description','<p class=\"text-theme2 text-lg lg:text-2xl pb-0 lg:pb-10\">We make the claims process quick and easy, so you can focus on what matters most&mdash;your pet.</p>',NULL,'rich_text_box',64,'About'),(73,'about.feature_4_desc','Feature 4 Description','<p class=\"text-theme2 text-lg lg:text-2xl pb-0 lg:pb-10\">Our compassionate pet-loving team is always here to help you navigate your policy and answer any questions.</p>',NULL,'rich_text_box',65,'About'),(74,'about.feature_5_desc','Feature 5 Description','<p class=\"text-theme2 text-lg lg:text-2xl pb-0 lg:pb-10\">Thousands of pet parents trust us to protect their furry companions.</p>',NULL,'rich_text_box',66,'About'),(75,'plan.banner_title','Banner Title','Protect Your Pet with the Right Insurance Plan',NULL,'text',67,'Plan'),(76,'plan.banner_description','Banner Description','Explore our flexible pet insurance plans designed to fit your budget and needs. Choose from Basic, Standard, or Premium coverage to keep your pet protected and healthy.',NULL,'text',68,'Plan'),(77,'terms-and-condition.banner_title','Banner Title','Terms & Conditions',NULL,'text',69,'Terms And Condition'),(78,'terms-and-condition.banner_description','Banner Description','Please Read Below T & C Policies.',NULL,'text',70,'Terms And Condition'),(79,'terms-and-condition.description','Description','<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">By accessing this websites/App/wallet (all together referred to as the \"Vanya Risk Management Consultants\") and using its content, you acknowledge and expressly agree that you have read and understood the following terms of use [&ldquo;Terms of use&rdquo;] and you agree to be bound by Terms of Use. Do not use the Vanya Risk Management Consultants Website, if you do not agree with these Terms of Use. As used below, the terms \"we\", \"us\" and \"our\" refer to Vanya Risk Management Consultants and its Group Companies.</p>\r\n<p>&nbsp;</p>',NULL,'rich_text_box',71,'Terms And Condition'),(80,'terms-and-condition.term_1','Term 1','Use of Content',NULL,'text',72,'Terms And Condition'),(81,'terms-and-condition.term_1_detail','Term 1 Detail','<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">The content/information/blogs/facilitation services are available only for informational purposes. The posting/display of content/blogs/opinions/expressions/ notes/comments/criticism on/at Vanya Risk Management Consultants Website are only informative and personal to respective author/s and is not necessarily the opinion and recommendation of Vanya Risk Management Consultants and access to this Vanya Risk Management Consultants Website and reading of content/blogs/opinions/expressions on/at Vanya Risk Management Consultants Website does not in any way render and bind Vanya Risk Management Consultants for such posting/display of content/blogs/opinions/expressions/ notes/comments/criticism and also same shall not be taken as to render, either explicitly or implicitly, any provision of services or products by us. Therefore Information concerning financial products or services (including insurance, asset management and banking) is only available through the respective Vanya Risk Management Consultants Website.</p>\r\n<p>&nbsp;</p>',NULL,'rich_text_box',73,'Terms And Condition'),(82,'terms-and-condition.term_2','Term 2','Changes in Terms',NULL,'text',74,'Terms And Condition'),(83,'terms-and-condition.term_2_detail','Term 2 Detail','<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">PTZ reserves the right to change these terms or cancel the text services service at any time. Please check these SMS Terms on a regular basis for changes. Subject to the &ldquo;Changes&rdquo; section below, your continued use of the use and acceptance of text services after changes to the SMS Terms are posted shall be deemed acceptance of the modified terms.</p>\r\n<p>&nbsp;</p>',NULL,'rich_text_box',75,'Terms And Condition'),(84,'terms-and-condition.term_3','Term 3','Limitation of Liability',NULL,'text',76,'Terms And Condition'),(85,'terms-and-condition.term_3_detail','Term 3 Detail','<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">To the fullest extent permitted by law, Vanya or its vendors or their respective affiliates, officers, directors, customers, members, employees or authorized agents (collectively, the &ldquo;providers&rdquo;), or your mobile phone carrier(s), shall not be held liable for any damages, claims or losses incurred (including direct, compensatory, incidental, indirect, special, consequential or exemplary damages), however caused and under any theory of liability, including negligence, arising from or in connection with text service services, and/or these terms, even if a provider is advised of the possibility of such damages, claims or losses.</p>',NULL,'rich_text_box',77,'Terms And Condition'),(86,'terms-and-condition.term_4','Term 4','Governing Law',NULL,'text',78,'Terms And Condition'),(87,'terms-and-condition.term_4_detail','Term 4 Detail','<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">These SMS Terms shall be construed in accordance with the laws of the Union of India without reference to its conflict of law provisions. All disputes between you and Vanya shall be governed by the laws of the Union of India, without reference to its conflict of law provisions, whether or not such disputes arise under these SMS Terms.</p>\r\n<p>&nbsp;</p>',NULL,'rich_text_box',79,'Terms And Condition'),(88,'terms-and-condition.term_5','Term 5','Copyright',NULL,'text',80,'Terms And Condition'),(89,'terms-and-condition.term_5_detail','Term 5 Detail','<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">All content of the Vanya Risk Management Consultants Website is protected by copyright and Intellectual Property Rights [IPR] with all rights reserved with Vanya Risk Management Consultants. All rights in the pages, site content and arrangement are owned by Vanya Risk Management Consultants and/or the respective Vanya Risk Management Consultants Group companies/Affiliates. You are expressly prohibited from copying, modifying, displaying, distributing, transmitting, redelivering through the use of \"framing\" technology or otherwise, publishing, selling, licensing, creating derivative works or using any site content for any purpose without the prior written approval of Vanya Risk Management Consultants and/or the respective Vanya Risk Management Consultants Group Companies. While on/in/using the Vanya Risk Management Consultants Website you are bound by the Privacy Policy of Vanya Risk Management Consultants which is published/displayed in/on Vanya Risk Management Consultants Website</p>\r\n<p>&nbsp;</p>',NULL,'rich_text_box',81,'Terms And Condition'),(90,'service.question','Question','What\'s Choose us?',NULL,'text',82,'Service'),(91,'service.answer','Answer','<p class=\"text-theme2 text-lg lg:text-2xl mb-3\">At Vanya, we understand that your pet is more than just an animal&mdash;they&rsquo;re family. That&rsquo;s why we offer reliable and comprehensive insurance for dogs, cats, and other companion pets, ensuring they receive the best care without financial stress. Our flexible plans cover accidents, illnesses, and routine checkups, giving you peace of mind no matter what life brings. With a simple claims process and fast reimbursements, you can focus on your pet&rsquo;s well-being instead of worrying about expenses. Plus, you can visit any licensed veterinarian nationwide, giving you complete freedom to choose the best care for your furry friend. Our affordable plans are designed to fit different budgets, and our dedicated customer support team is always here to assist you. Whether you have a playful pup, a curious cat, or another beloved companion, trust Vanya to provide the protection they deserve.</p>',NULL,'rich_text_box',83,'Service'),(92,'contact.whatsapp_number','Whatsapp Number','9574953131',NULL,'text',84,'Contact'),(93,'get-quote.banner_title','Banner Title','Protect Your Pet Today – Get a Free Quote!',NULL,'text',85,'Get Quote'),(94,'get-quote.banner_description','Banner Description','Get a personalized pet insurance quote in minutes! Choose a plan that fits your budget and protect your furry friend with comprehensive coverage today.',NULL,'text',86,'Get Quote'),(95,'get-quote.long_description','Long Description','<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">Finding the right pet insurance has never been easier! At Vanya, we offer customized plans to fit your pet&rsquo;s unique needs and your budget. With just a few simple details, you can receive a personalized quote in minutes. Our flexible coverage options include protection for accidents, illnesses, and routine care, ensuring your furry friend gets the best medical attention without financial worries. Whether you have a playful puppy, a senior cat, or an exotic pet, we have a plan designed for you. Get started today and secure peace of mind knowing your pet is protected!</p>',NULL,'rich_text_box',87,'Get Quote'),(96,'get-quote.description','Description','<p class=\"text-theme2 text-lg lg:text-2xl mb-5\">Protecting your pet has never been easier! With Vanya, you can get a personalized pet insurance quote in just a few steps. Our flexible and affordable plans cover accidents, illnesses, and routine care, ensuring your furry friend gets the best medical attention without unexpected costs. Simply provide a few details about your pet, choose a plan that fits your budget, and receive a customized quote instantly. No hidden fees, no complicated processes&mdash;just straightforward coverage designed to keep your pet happy and healthy. Start today and give your pet the protection they deserve!</p>',NULL,'rich_text_box',88,'Get Quote');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int unsigned NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',5,'pt','Post','2025-02-24 03:52:37','2025-02-24 03:52:37'),(2,'data_types','display_name_singular',6,'pt','Página','2025-02-24 03:52:37','2025-02-24 03:52:37'),(3,'data_types','display_name_singular',1,'pt','Utilizador','2025-02-24 03:52:37','2025-02-24 03:52:37'),(4,'data_types','display_name_singular',4,'pt','Categoria','2025-02-24 03:52:37','2025-02-24 03:52:37'),(5,'data_types','display_name_singular',2,'pt','Menu','2025-02-24 03:52:37','2025-02-24 03:52:37'),(6,'data_types','display_name_singular',3,'pt','Função','2025-02-24 03:52:37','2025-02-24 03:52:37'),(7,'data_types','display_name_plural',5,'pt','Posts','2025-02-24 03:52:37','2025-02-24 03:52:37'),(8,'data_types','display_name_plural',6,'pt','Páginas','2025-02-24 03:52:37','2025-02-24 03:52:37'),(9,'data_types','display_name_plural',1,'pt','Utilizadores','2025-02-24 03:52:37','2025-02-24 03:52:37'),(10,'data_types','display_name_plural',4,'pt','Categorias','2025-02-24 03:52:37','2025-02-24 03:52:37'),(11,'data_types','display_name_plural',2,'pt','Menus','2025-02-24 03:52:37','2025-02-24 03:52:37'),(12,'data_types','display_name_plural',3,'pt','Funções','2025-02-24 03:52:37','2025-02-24 03:52:37'),(13,'categories','slug',1,'pt','categoria-1','2025-02-24 03:52:37','2025-02-24 03:52:37'),(14,'categories','name',1,'pt','Categoria 1','2025-02-24 03:52:37','2025-02-24 03:52:37'),(15,'categories','slug',2,'pt','categoria-2','2025-02-24 03:52:37','2025-02-24 03:52:37'),(16,'categories','name',2,'pt','Categoria 2','2025-02-24 03:52:37','2025-02-24 03:52:37'),(17,'pages','title',1,'pt','Olá Mundo','2025-02-24 03:52:37','2025-02-24 03:52:37'),(18,'pages','slug',1,'pt','ola-mundo','2025-02-24 03:52:37','2025-02-24 03:52:37'),(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2025-02-24 03:52:37','2025-02-24 03:52:37'),(20,'menu_items','title',1,'pt','Painel de Controle','2025-02-24 03:52:37','2025-02-24 03:52:37'),(21,'menu_items','title',2,'pt','Media','2025-02-24 03:52:37','2025-02-24 03:52:37'),(22,'menu_items','title',12,'pt','Publicações','2025-02-24 03:52:37','2025-02-24 03:52:37'),(23,'menu_items','title',3,'pt','Utilizadores','2025-02-24 03:52:37','2025-02-24 03:52:37'),(24,'menu_items','title',11,'pt','Categorias','2025-02-24 03:52:37','2025-02-24 03:52:37'),(25,'menu_items','title',13,'pt','Páginas','2025-02-24 03:52:37','2025-02-24 03:52:37'),(26,'menu_items','title',4,'pt','Funções','2025-02-24 03:52:37','2025-02-24 03:52:37'),(27,'menu_items','title',5,'pt','Ferramentas','2025-02-24 03:52:37','2025-02-24 03:52:37'),(28,'menu_items','title',6,'pt','Menus','2025-02-24 03:52:37','2025-02-24 03:52:37'),(29,'menu_items','title',7,'pt','Base de dados','2025-02-24 03:52:37','2025-02-24 03:52:37'),(30,'menu_items','title',10,'pt','Configurações','2025-02-24 03:52:37','2025-02-24 03:52:37');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png',NULL,'$2y$10$jv7IV1/MeLwnH8ov5PiFwO8I7dPGS2nZ6V76JEbDqJveRReaMvtSq','Ro83tjVh8dtBih81LWFZixwl502ApqGsBwbXyf7Od29O20pxgu5xrzCr8tQI',NULL,'2025-02-24 03:52:37','2025-02-24 03:52:37');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-21  8:01:58
