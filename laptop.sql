-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: toko_laptop
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fitur_laptop`
--

DROP TABLE IF EXISTS `fitur_laptop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fitur_laptop` (
  `id_fitur` int NOT NULL AUTO_INCREMENT,
  `jenis_fitur` varchar(50) NOT NULL,
  `nama_fitur` varchar(50) NOT NULL,
  PRIMARY KEY (`id_fitur`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fitur_laptop`
--

LOCK TABLES `fitur_laptop` WRITE;
/*!40000 ALTER TABLE `fitur_laptop` DISABLE KEYS */;
INSERT INTO `fitur_laptop` VALUES (1,'RAM','8GB RAM'),(2,'Processor','Intel Core I7 Gen. 10'),(3,'Storage','V-Gen HDD 512GB'),(4,'VGA','GeForce RTX 128GB'),(5,'Screen','14 Inchi'),(9,'RAM','16GB RAM'),(10,'Processor','Intel Core I5 Gen. 5'),(11,'Storage','SATA 512GB SSD'),(12,'RAM','4GB RAM'),(13,'Screen','12 Inchi'),(14,'Screen','10 Inchi');
/*!40000 ALTER TABLE `fitur_laptop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_laptop`
--

DROP TABLE IF EXISTS `kategori_laptop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kategori_laptop` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_laptop`
--

LOCK TABLES `kategori_laptop` WRITE;
/*!40000 ALTER TABLE `kategori_laptop` DISABLE KEYS */;
INSERT INTO `kategori_laptop` VALUES (1,'Laptop Gaming'),(2,'All in One'),(7,'Tablet Laptop');
/*!40000 ALTER TABLE `kategori_laptop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laptop`
--

DROP TABLE IF EXISTS `laptop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `laptop` (
  `id_laptop` int NOT NULL AUTO_INCREMENT,
  `kategori_id` int NOT NULL,
  `merk_laptop` varchar(100) NOT NULL,
  `no_serial` varchar(50) NOT NULL,
  `harga_laptop` int DEFAULT NULL,
  `ram_laptop` int NOT NULL,
  `prosesor_laptop` int NOT NULL,
  `storage_laptop` int NOT NULL,
  `vga_laptop` int NOT NULL,
  `screen_laptop` int NOT NULL,
  `gambar_laptop` varchar(40) NOT NULL,
  `model_laptop` varchar(50) NOT NULL,
  PRIMARY KEY (`id_laptop`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laptop`
--

LOCK TABLES `laptop` WRITE;
/*!40000 ALTER TABLE `laptop` DISABLE KEYS */;
INSERT INTO `laptop` VALUES (4,2,'Asus','998AXS',12000000,9,10,11,4,14,'64fc9d392963a.png','Asus Vivobook 14'),(5,1,'asdsa','kl;',4500000,1,2,3,4,5,'64d2739e1cb42.png','dfg'),(6,2,'ad','oip',560000,1,2,3,4,5,'64d2fc22a9e2a.png','dfg'),(10,2,'sdf','sdf',780000,1,2,3,4,5,'tes.png','fds'),(13,2,'Lenovo','12345XYZ',5100000,9,10,11,4,5,'64fcaa10d5cdf.jpg','Thinkpad T480S');
/*!40000 ALTER TABLE `laptop` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-10 18:00:35
