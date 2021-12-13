-- MySQL dump 10.13  Distrib 8.0.12, for macos10.13 (x86_64)
--
-- Host: localhost    Database: twiitit
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `twiitit`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `twiitit` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;

USE `twiitit`;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL DEFAULT 'Momo',
  `date_posted` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Raja','2021-12-12 15:22:38','nouveau contenu',1),(2,'Vero','2021-12-12 15:34:35','Test numeri12675616846',2),(3,'Momo','2021-12-12 15:35:45','',3),(4,'Raja','2021-12-12 15:35:18','',1),(5,'Momo','2021-12-12 15:36:06','',3),(6,'Momo','2021-12-12 15:40:13','',3),(7,'Vero','2021-12-12 15:52:49','',2),(8,'Raja','2021-12-12 15:55:33','',1),(9,'Raja','2021-12-12 15:55:20','',1),(10,'Raja','2021-12-12 15:40:20','',1),(11,'Momo','2021-12-12 00:00:00','Hello aujourdhui il fait beau, cest topr cool la vie',2),(12,'Momo','2021-12-12 00:00:00','Hello aujourdhui il fait beau, cest topr cool la vie',2),(13,'Vero','2021-12-12 15:28:11','Test numeri12675616846',2),(14,'Vero','2021-12-12 15:27:56','Salut tout le monde',2),(15,'Momo','2021-12-11 00:00:00','jk;dfgkjhdfsghjkdfgskjgdfksjdf',2),(16,'Momo','2021-12-11 00:00:00','jk;dfgkjhdfsghjkdfgskjgdfksjdf',2),(17,'Momo','2021-12-11 00:00:00','jk;dfgkjhdfsghjkdfgskjgdfksjdf',2),(18,'Momo','2021-12-12 15:58:19','',2),(19,'Raja','2021-12-12 00:00:00','Salut tout le monde',2),(20,'Raja','2021-12-12 00:00:00','Salut tout le monde',2),(21,'Raja','2021-12-12 00:00:00','Salut tout le monde',2),(22,'Raja','2021-12-12 00:00:00','Salut tout le monde',2),(23,'Raja','2021-12-12 00:00:00','Salut tout le monde',2);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `usermail` varchar(100) DEFAULT NULL,
  `avatar_url` varchar(500) DEFAULT NULL,
  `year_of_birth` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usermail` (`usermail`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Momo','momo@twiitmail.fr','assets/momo.jpg',1985),(2,'Vero','vero@gogo.com','assets/vero.jpg',1992),(3,'Raja','raja@indi.it','assets/raja.jpg',1983);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-12 16:47:11
