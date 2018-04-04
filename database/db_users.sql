-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_users
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.26-MariaDB

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
-- Table structure for table `tbl_genre`
--

DROP TABLE IF EXISTS `tbl_genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_genre` (
  `genre_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `genre_name` text NOT NULL,
  `genre_url` text NOT NULL,
  `genre_pic` text NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_genre`
--

LOCK TABLES `tbl_genre` WRITE;
/*!40000 ALTER TABLE `tbl_genre` DISABLE KEYS */;
INSERT INTO `tbl_genre` VALUES (1,'Action','/action','images/action.jpg'),(2,'Comedy','/comedy','images/comedy.jpg'),(3,'Family','/family','images/family.jpg');
/*!40000 ALTER TABLE `tbl_genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_movies`
--

DROP TABLE IF EXISTS `tbl_movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_movies` (
  `mov_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mov_name` text NOT NULL,
  `mov_pic` text NOT NULL,
  `mov_desc` text NOT NULL,
  `mov_genre` int(11) NOT NULL,
  `mov_trailer` text NOT NULL,
  `mov_rating` text NOT NULL,
  PRIMARY KEY (`mov_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_movies`
--

LOCK TABLES `tbl_movies` WRITE;
/*!40000 ALTER TABLE `tbl_movies` DISABLE KEYS */;
INSERT INTO `tbl_movies` VALUES (1,'Dunkirk','images/dunkirk.jpg','In May 1940, Germany advanced into France, trapping Allied troops on the beaches of Dunkirk. Under air and ground cover from British and French forces, troops were slowly and methodically evacuated from the beach using every serviceable naval and civilian vessel that could be found. At the end of this heroic mission, 330,000 French, British, Belgian and Dutch soldiers were safely evacuated.',1,'https://www.youtube.com/embed/F-eMt3SrfFU','8.0/10'),(2,'Logan','images/logan.jpg','In the near future, a weary Logan cares for an ailing Professor X at a remote outpost on the Mexican border. His plan to hide from the outside world gets upended when he meets a young mutant who is very much like him. Logan must now protect the girl and battle the dark forces that want to capture her.',1,'https://www.youtube.com/embed/Div0iP65aZo','8.1/10'),(3,'The Fate of the Furious','images/ff.jpg','With Dom and Letty married, Brian and Mia retired and the rest of the crew exonerated, the globe-trotting team has found some semblance of a normal life. They soon face an unexpected challenge when a mysterious woman named Cipher forces Dom to betray them all. Now, they must unite to bring home the man who made them a family and stop Cipher from unleashing chaos.',1,'https://www.youtube.com/embed/JwMKRevYa_M','6.7/10'),(4,'Baywatch','images/baywatch.jpg','When a dangerous crime wave hits the beach, the legendary Mitch Buchannon leads his elite squad of lifeguards on a mission to prove that you don\'t have to wear a badge to save the bay. Joined by a trio of hotshot recruits, including former Olympian Matt Brody, they ditch the surf and go deep under cover to take down a ruthless businesswoman whose devious plans threaten the future of the bay.',2,'https://www.youtube.com/embed/nZ5tqzw841s','5.6/10'),(5,'Logan Lucky','images/ll.jpg','West Virginia family man Jimmy Logan teams up with his one-armed brother Clyde and sister Mellie to steal money from the Charlotte Motor Speedway in North Carolina. Jimmy also recruits demolition expert Joe Bang to help them break into the track\'s underground system. Complications arise when a mix-up forces the crew to pull off the heist during a popular NASCAR race while also trying to dodge a relentless FBI agent.',2,'https://www.youtube.com/embed/aPzvKH8AVf0','7.1/10'),(6,'Lady Bird','images/lb.jpg','A teenager navigates a loving but turbulent relationship with her strong-willed mother over the course of an eventful and poignant senior year of high school.',2,'https://www.youtube.com/embed/cNi_HC839Wo','7.6/10'),(7,'COCO','images/coco.jpg','Despite his family\'s generations-old ban on music, young Miguel dreams of becoming an accomplished musician like his idol Ernesto de la Cruz. Desperate to prove his talent, Miguel finds himself in the stunning and colorful Land of the Dead. After meeting a charming trickster named Héctor, the two new friends embark on an extraordinary journey to unlock the real story behind Miguel\'s family history.',3,'https://www.youtube.com/embed/zNCz4mQzfEI?rel=0','8.5/10'),(8,'Wonder','images/wonder.jpg','Based on the New York Times bestseller, WONDER tells the incredibly inspiring and heartwarming story of August Pullman, a boy with facial differences who enters fifth grade, attending a mainstream elementary school for the first time.',3,'https://www.youtube.com/embed/Ob7fPOzbmzE?rel=0','8.0/10'),(9,'Beauty and the Beast','images/bab.jpg','Belle, a bright, beautiful and independent young woman, is taken prisoner by a beast in its castle. Despite her fears, she befriends the castle\'s enchanted staff and learns to look beyond the beast\'s hideous exterior, allowing her to recognize the kind heart and soul of the true prince that hides on the inside.',3,'https://www.youtube.com/embed/e3Nl_TCQXuw?rel=0','7.3/10');
/*!40000 ALTER TABLE `tbl_movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_level` int(10) unsigned DEFAULT NULL,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  `user_attempts` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (16,'admin','admin','admin','admin@email.com','2018-04-04 20:28:11',0,'::1',0);
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-04 16:35:05
