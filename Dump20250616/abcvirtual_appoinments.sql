-- MySQL dump 10.13  Distrib 8.0.41, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: abcvirtual
-- ------------------------------------------------------
-- Server version	5.5.16-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `appoinments`
--

DROP TABLE IF EXISTS `appoinments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appoinments` (
  `idd` int(11) NOT NULL AUTO_INCREMENT,
  `p_nic` varchar(45) DEFAULT NULL,
  `p_name` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `doctor` varchar(45) DEFAULT NULL,
  `d_nic` varchar(45) DEFAULT NULL,
  `reason` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idd`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appoinments`
--

LOCK TABLES `appoinments` WRITE;
/*!40000 ALTER TABLE `appoinments` DISABLE KEYS */;
INSERT INTO `appoinments` VALUES (1,'345474','vishwa',22,'11111','2025-06-25','eee','1234','sick and fever now well'),(2,'555','ffff',33,'3333','2025-06-26','eee','1234','sick and fever now well'),(3,'12345','vishwa',23,'0889373','2025-06-27','john','1234','hjdjd'),(4,'12345','ddd',0,'dddd','2025-06-25','john','1234','dddd'),(5,'12345','qqq',444,'333','2025-07-02','qqq','4567','www'),(6,'12345','qqq5gggg',444,'333334444','2025-07-02','qqq','4567','www111'),(7,'12345','Vishwa',20,'077123','2025-06-20','De','','high fever'),(11,'12345','vishwa',20,'077123','2025-06-20','john','1234','high fever');
/*!40000 ALTER TABLE `appoinments` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-16 11:05:38
