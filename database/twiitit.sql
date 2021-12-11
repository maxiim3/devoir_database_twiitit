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
-- Table structure for table `twiit`
--

DROP TABLE IF EXISTS `twiit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `twiit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(70) NOT NULL DEFAULT 'Coco',
  `date_posted` varchar(10) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `twiit`
--

LOCK TABLES `twiit` WRITE;
/*!40000 ALTER TABLE `twiit` DISABLE KEYS */;
INSERT INTO `twiit` VALUES (1,'Raja','2021/12/01','Cest moi ou twiit!t censure de + en + ?'),(2,'Vero','2021/12/02','Salut tout le monde cest mon premier twiit'),(3,'Momo','2021/12/03','Vivement le match de ce soir:  Allez le ParisClaquetteClub!!'),(4,'Raja','2021/12/03','Ca y est l\'hiver est la'),(5,'Momo','2021/12/04','Une belle journee pour aller se promener.'),(6,'Momo','2021/12/05','Il dit nimporte quoi, moi pas content!'),(7,'Vero','2021/12/06','Bientot noel, ma liste est pret'),(8,'Raja','2021/12/09','Me revoila, ca faisait un bail !');
/*!40000 ALTER TABLE `twiit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(70) NOT NULL DEFAULT 'Coco',
  `usermail` varchar(100) DEFAULT NULL,
  `userpicture` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Momo','momo@twiitmail.fr',NULL),(2,'Vero','vero@gogo.com',NULL),(3,'Raja','raja@indi.it',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `user_twiit`
--

DROP TABLE IF EXISTS `user_twiit`;
/*!50001 DROP VIEW IF EXISTS `user_twiit`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `user_twiit` AS SELECT 
 1 AS `id`,
 1 AS `userpicture`,
 1 AS `username`,
 1 AS `date_posted`,
 1 AS `content`*/;
SET character_set_client = @saved_cs_client;

--
-- Current Database: `twiitit`
--

USE `twiitit`;

--
-- Final view structure for view `user_twiit`
--

/*!50001 DROP VIEW IF EXISTS `user_twiit`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `user_twiit` AS select `user`.`id` AS `id`,`user`.`userpicture` AS `userpicture`,`user`.`username` AS `username`,`twiit`.`date_posted` AS `date_posted`,`twiit`.`content` AS `content` from (`user` join `twiit` on((`user`.`username` = `twiit`.`username`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-11 15:45:58
