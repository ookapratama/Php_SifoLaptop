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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Administrator','admin','admin');
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
  `nama_fitur` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_fitur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fitur_laptop`
--

LOCK TABLES `fitur_laptop` WRITE;
/*!40000 ALTER TABLE `fitur_laptop` DISABLE KEYS */;
INSERT INTO `fitur_laptop` VALUES (1,'RAM','8GB RAM'),(5,'Screen','14 Inchi'),(9,'RAM','16GB RAM'),(12,'RAM','4GB RAM'),(13,'Screen','12 Inchi'),(14,'Screen','10 Inchi'),(15,'Processor','Intel Celeron N4020 Processor (1.1GHz Up to 2.8GHz, 4M Cache)'),(16,'VGA','Intel® UHD Graphics'),(17,'Storage','256GB SSD'),(18,'RAM','24GB RAM'),(19,'RAM','2GB RAM'),(20,'RAM','32GB RAM'),(21,'Processor','Intel® Core™ i3-1115G4 Processor 3.0 GHz (6M Cache, up to 4.1 GHz, 2 cores)'),(22,'Processor','AMD Ryzen 3-3250U Processor (2.6GHz Up to 3.5GHz, 4MB Cache)'),(23,'Processor','AMD Ryzen™ 5 5600H'),(24,'Processor','AMD Ryzen™ 7-5800H Processor (8-core/16-thread, 20MB cache'),(25,'Processor','Intel® Core™ i3-1215U Processor (up to 4.4 GHz with Intel® Turbo Boost Technology'),(26,'Processor','AMD Ryzen™ 3-7320U Processor ((4-core/8-thread, 4MB cache'),(27,'Processor','	 Intel® Core™ i7-1215G4 Processor 3.0 GHz (6M Cache, up to 4.1 GHz, 2 cores)'),(28,'Storage','512GB HDD'),(29,'Storage','128GB SSD'),(30,'Storage','512GB SSD'),(31,'Storage','512GB SSD'),(32,'Storage','1TB SSD'),(33,'Storage','128GB HDD'),(34,'Storage','128GB HDD'),(35,'Storage','256GB HDD'),(36,'Storage','1TB HDD'),(37,'VGA','Intel Iris Xe Graphics'),(38,'VGA','Intel HD Graphics'),(39,'VGA','Intel Iris Plus Graphics'),(40,'VGA','Intel Xe MAX Graphics'),(41,'VGA','NVIDIA GeForce RTX 3080 Series'),(42,'VGA','NVIDIA GeForce GTX 1660 Series'),(43,'VGA','NVIDIA GeForce RTX 2080 Series'),(44,'VGA','NVIDIA GeForce GTX 1080 Series'),(45,'VGA','NVIDIA GeForce MX450 Series'),(46,'VGA','AMD Radeon RX 6000 Series '),(47,'VGA','AMD Radeon RX 5700 Series'),(48,'VGA','AMD Radeon RX 570 Series'),(49,'VGA','AMD Radeon Vega 10 Series'),(50,'VGA','AMD Radeon R7 M445 Series'),(51,'Screen','11,6 Inchi'),(52,'Screen','12,3 Inchi'),(53,'Screen','13,3 Inchi'),(54,'Screen','15,6 Inchi'),(55,'Processor','Intel® Core i5-1135G7 Processor (4C/8T, 2.4GHz Up to 4.2GHz, 8MB Cache)'),(56,'Processor','Intel Core i7-1165G7'),(57,'Processor','Apple M1 Chip'),(58,'Processor','Intel Core i5-10210U'),(59,'VGA','GPU terintegrasi (Apple M1)'),(60,'VGA','AMD Radeon Graphics');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_laptop`
--

LOCK TABLES `kategori_laptop` WRITE;
/*!40000 ALTER TABLE `kategori_laptop` DISABLE KEYS */;
INSERT INTO `kategori_laptop` VALUES (8,'Notebook'),(9,'Gaming'),(12,'Ultrabooks'),(13,'Bisnis'),(14,'2-in-1');
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
  `model_laptop` varchar(100) NOT NULL,
  PRIMARY KEY (`id_laptop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laptop`
--

LOCK TABLES `laptop` WRITE;
/*!40000 ALTER TABLE `laptop` DISABLE KEYS */;
INSERT INTO `laptop` VALUES (15,8,'HP','00005684',6500000,1,22,30,49,5,'651e59401fe20.png','14-em0014AU'),(16,8,'HP','00007623',12895000,9,27,30,37,5,'651e599a65d32.jpg','14-ep0018TU'),(17,8,'HP','00007650',12135000,9,24,30,46,53,'651e59e7e2df3.jpg','Pavilion Aero 13-be1002AU'),(18,8,'HP','00007654',5559000,12,22,30,47,5,'651e5a3d6ffd9.jpg','14s-fq0564AU'),(19,8,'Asus','00007692',5999000,1,21,17,16,5,'651e5b6fa4c88.jpeg','Vivobook 14 A1400EA-FHD323'),(20,8,'Asus','00007684',5869000,12,21,17,16,5,'651e5c17304b8.jpg','Vivobook 14 A1400EA-VIPS322'),(21,8,'Asus','00007689',7699000,12,25,30,16,54,'651e5c76a8642.jpg','Vivobook 15 A1502ZA-VIPS351'),(22,8,'Asus','00007680',6159000,1,22,17,47,5,'651e5cf8f1e9f.jpg','Vivobook Go 14 E1404FA-FHD321'),(23,8,'Dell','00006837',13279000,1,55,31,45,54,'651e5da992eb8.jpg','Inspiron 15-3501 [i5 | VGA]'),(24,8,'Dell','00007165',6635000,12,23,17,46,5,'651e5e1691f1c.jpg','Vostro V3405-R5 [Win 10]'),(25,9,'Asus','00006951',17500000,1,24,30,41,54,'651e65c56bec4.jpg','ROG Strix G15 G513RC-R735B6G-O'),(26,9,'Asus','00007173',32000000,1,27,32,41,54,'651e660b228ad.jpg','ROG Zephyrus M16 GU603ZM-I736G6T-O'),(27,9,'Lenovo','00007590',17049000,1,23,30,41,54,'651e66557fbd3.jpg','Gaming 3 15ARH7- 82SB00JKID'),(28,9,'Lenovo','00007626',13485000,1,55,30,41,54,'651e669d50b24.jpg','Gaming 3 15IAH7 - 82S900LQID'),(31,9,'Lenovo','00006813',29100000,9,27,30,43,54,'651e69623cfda.jfif','Legion Y740s-15IMH-81YX001YID'),(32,12,'Dell','00008974',11999000,9,56,30,40,53,'65292bd9155a3.jpg','XPS 13'),(33,12,'Apple','00007629',12999000,1,57,17,59,53,'65292c45bbacd.jpg','MacBook Air'),(34,12,'HP','00006811',9499000,9,56,30,37,53,'65292cbb6dd32.jpg','Spectre x360'),(35,12,'Asus','000066820',16200000,9,24,30,60,54,'65292d25e166d.jpg','ZenBook 14'),(36,12,'Lenovo','00012813',10999000,9,27,28,37,53,'65292d953f0fe.jpg','Yoga C940'),(37,13,'Lenovo','00007567',7190000,9,56,30,39,5,'65292e3f150ee.jpg','ThinkPad X1 Carbon'),(38,13,'Lenovo','00007913',8599000,9,58,31,38,5,'65292ea162483.jpg','Latitude 7410'),(39,13,'HP','00002813',11400000,1,58,17,38,5,'65292f451e8cc.jpg','EliteBook 840 G7'),(40,13,'Acer','00001129',7999000,9,56,30,16,5,'65292fa8554c5.jpg','TravelMate P6'),(41,13,'Microsift','00005782',6750000,9,24,30,60,53,'65293007c1efc.jpg','Surface Laptop 4'),(42,14,'Lenovo','00002213',8190000,9,56,30,37,5,'6529305b9ff9b.jpg','Yoga C940'),(43,14,'Dell','00004884',8499000,1,55,17,16,5,'652930c8db07a.jpg','Inspiron 14 2-in-1'),(44,14,'HP','00004991',11299000,9,56,30,37,53,'65293111819d5.png','Spectre x360 13'),(45,14,'Asus','00009813',12999000,1,23,17,60,5,'6529314feba72.jpeg','VivoBook Flip 14'),(46,14,'Microsoft','00006813',13999000,1,55,29,39,52,'652933471033d.jpg','Surface Pro 7');
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

-- Dump completed on 2023-10-13 20:12:28
