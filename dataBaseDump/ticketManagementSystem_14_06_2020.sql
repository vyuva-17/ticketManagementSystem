-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: ticketManagementSystem_13_06_2020
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `category_master`
--

DROP TABLE IF EXISTS `category_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_master` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_master`
--

LOCK TABLES `category_master` WRITE;
/*!40000 ALTER TABLE `category_master` DISABLE KEYS */;
INSERT INTO `category_master` VALUES (1,'Basic'),(2,'Intermediate'),(3,'Advanced');
/*!40000 ALTER TABLE `category_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department_master`
--

DROP TABLE IF EXISTS `department_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department_master`
--

LOCK TABLES `department_master` WRITE;
/*!40000 ALTER TABLE `department_master` DISABLE KEYS */;
INSERT INTO `department_master` VALUES (1,'Development'),(2,'Testing'),(3,'Deployment'),(4,'Business Development');
/*!40000 ALTER TABLE `department_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `priority_master`
--

DROP TABLE IF EXISTS `priority_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `priority_master` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `priority` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `priority_master`
--

LOCK TABLES `priority_master` WRITE;
/*!40000 ALTER TABLE `priority_master` DISABLE KEYS */;
INSERT INTO `priority_master` VALUES (1,'Highest'),(2,'High'),(3,'Medium'),(4,'Low');
/*!40000 ALTER TABLE `priority_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_account`
--

DROP TABLE IF EXISTS `user_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_account` (
  `user_id` int(30) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `contact_name` text NOT NULL,
  `mobile_number` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_account`
--

LOCK TABLES `user_account` WRITE;
/*!40000 ALTER TABLE `user_account` DISABLE KEYS */;
INSERT INTO `user_account` VALUES (1,'','','Yuvanesh','2147483647'),(2,'','','Yuvanesh','2147483647'),(3,'','','Yuvanesh','2147483647'),(4,'','','Yuvanesh','2147483647'),(5,'vyuva17@gmail.com','123','Yuvanesh','2147483647'),(6,'vyuva17@gmail.com','17101996','Yuvanesh','2147483647'),(7,'','','Yuvanesh','2147483647'),(8,'vyuva17@gmail.com','17101996','Yuvanesh','2147483647'),(9,'vyuva17@gmail.com','17101996','Yuvanesh','2147483647'),(10,'','','Yuvanesh','2147483647'),(11,'','','Yuvanesh','2147483647'),(12,'','','Yuvanesh','2147483647'),(13,'','','Yuvanesh','8668032131'),(14,'vyuva17@gmail.com','17101996','Yuvanesh','8668032131'),(15,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(16,'vyuva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(17,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(18,'vyuva17@gmail.com','250cf8b51c773f3f8dc8b4be867a9a02','Yuvanesh','8668032131'),(19,'vyuva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(20,'vyuva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(21,'vyuva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(22,'vyuva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(23,'vyuva@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(24,'vyuva@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(25,'vyuva@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(26,'vyuva@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(27,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(28,'vyuva@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(29,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(30,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(31,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(32,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(33,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(34,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(35,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(36,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(37,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(38,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(39,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(40,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(41,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(42,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(43,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(44,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(45,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(46,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(47,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(48,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(49,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(50,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(51,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(52,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(53,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(54,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(55,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(56,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(57,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(58,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(59,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(60,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(61,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(62,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(63,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(64,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(65,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(66,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(67,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(68,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(69,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(70,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(71,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(72,'vyuva@gmail.com','c215e801a0380b24d742cb4d924953d9','Yuvanesh','8668032131'),(73,'vyuva@gmail.com','c215e801a0380b24d742cb4d924953d9','Yuvanesh','8668032131'),(74,'vyuva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(75,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(76,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(77,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(78,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(79,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(80,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(81,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(82,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(83,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(84,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(85,'vyuva17@gmail.com','827ccb0eea8a706c4c34a16891f84e7b','Yuvanesh','8668032131'),(86,'vyuva17@gmail.com','2e033e82794e11fea8b2a046f79631eb','Yuvanesh','8668032131'),(87,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(88,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(89,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(90,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(91,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(92,'jiojoijojoi@456','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(93,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(94,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(95,'vyuva17@gmail.com','f5c150afbfbcef941def203e85cf40bc','Yuvanesh','8668032131'),(96,'vyuva17@gmail.com','caf1a3dfb505ffed0d024130f58c5cfa','Yuvanesh','8668032131'),(97,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(98,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(99,'vyva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(100,'vyuva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(101,'vyuva18@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(102,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(103,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(104,'','d41d8cd98f00b204e9800998ecf8427e','Yuvanesh','8668032131'),(105,'vyuva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(106,'vyuva19@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(107,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(108,'vyuva11@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(109,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(110,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(111,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(112,'vyuva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(113,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(114,'vyuva17@gmail.com','827ccb0eea8a706c4c34a16891f84e7b','Yuvanesh','8668032131'),(115,'vyuva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(116,'vyuva17@gmail.com','70efdf2ec9b086079795c442636b55fb','Yuvanesh','8668032131'),(117,'yuiyuiyuiyui@gmail.co.in','81dc9bdb52d04dc20036dbd8313ed055','Yuvanesh','8668032131'),(118,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(119,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(120,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(121,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(122,'yiuyuiyiu@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131'),(123,'vyuva17@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','Yuvanesh','8668032131'),(124,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(125,'vyuva17@gmail.com','202cb962ac59075b964b07152d234b70','Yuvanesh','8668032131'),(126,'vyuva17@gmail.com','468f063901f104824d3da48c110da865','Yuvanesh','8668032131');
/*!40000 ALTER TABLE `user_account` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-14  3:54:01
