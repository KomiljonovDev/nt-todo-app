-- MySQL dump 10.13  Distrib 8.3.0, for macos14.2 (arm64)
--
-- Host: localhost    Database: todo_app
-- ------------------------------------------------------
-- Server version	8.3.0

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
-- Table structure for table `todos`
--

DROP TABLE IF EXISTS `todos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `todos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `status` enum('pending','in_progress','completed') DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `todos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todos`
--

LOCK TABLES `todos` WRITE;
/*!40000 ALTER TABLE `todos` DISABLE KEYS */;
INSERT INTO `todos` VALUES (10,'Task 5','in_progress','2024-11-26 12:21:00','2024-11-26 19:09:12','2024-11-26 19:09:12',4),(11,'Task 6','completed','2024-11-26 12:02:00','2024-11-26 19:16:09','2024-12-02 16:09:23',NULL),(12,'Task 7','pending','2024-11-26 12:02:00','2024-11-26 19:18:39','2024-11-26 19:18:39',NULL),(15,'Todo From Route: todos','pending','2024-11-29 12:02:00','2024-11-29 17:41:48','2024-11-29 17:41:48',NULL),(16,'Todo From Route: todos 2','in_progress','2024-11-29 12:02:00','2024-11-29 17:43:29','2024-11-29 17:43:29',NULL),(17,'Todo From Route: todos 3','completed','2024-11-29 12:02:00','2024-11-29 17:46:05','2024-12-02 16:09:48',NULL),(18,' Todo From Route: todos 4','pending','2024-11-29 12:12:00','2024-11-29 17:46:46','2024-11-29 17:46:46',NULL),(19,' Todo From Route: todos 5','in_progress','2024-11-29 12:02:00','2024-11-29 19:50:57','2024-11-29 19:50:57',NULL),(20,' Todo From Route: todos 6','pending','2024-11-29 12:02:00','2024-11-29 19:51:17','2024-11-29 19:51:17',NULL),(21,'Test todo from Controller','completed','2024-12-10 12:12:00','2024-12-09 15:19:05','2024-12-09 15:19:19',NULL),(23,'Task 8','pending','2024-12-14 12:12:00','2024-12-13 16:07:39','2024-12-13 16:07:39',2),(24,'Task 9','pending','2024-12-13 12:12:00','2024-12-13 18:44:12','2024-12-13 18:44:12',2),(25,'Task 10 update','in_progress','2024-12-13 12:01:00','2024-12-13 18:45:07','2024-12-13 18:46:30',2);
/*!40000 ALTER TABLE `todos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Avazbek Hasanov','avazbekh366@gmail.com','1234'),(2,'Abdullajon','admin@admin.com','1234'),(4,'Fazliddin','fazliddin@admin.com','1234'),(5,'Abdullajon','test@admin.com','1234'),(6,'Bobomurod','bobomurod@admin.com','1234'),(7,'Avazbek','avazbek@admin.com','1234');
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

-- Dump completed on 2024-12-16 16:36:24
