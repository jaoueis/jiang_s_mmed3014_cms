-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: db_users
-- ------------------------------------------------------
-- Server version	5.6.38

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_genre`
--

LOCK TABLES `tbl_genre` WRITE;
/*!40000 ALTER TABLE `tbl_genre` DISABLE KEYS */;
INSERT INTO `tbl_genre` VALUES (1,'Action','/action','images/action.jpg'),(2,'Comedy','/comedy','images/comedy.jpg'),(3,'Family','/family','images/family.jpg'),(4,'Drama','',''),(5,'Horror','',''),(6,'Romance','','');
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
  `mov_year` year(4) NOT NULL,
  `mov_rating` varchar(10) NOT NULL,
  `mov_genre` int(10) NOT NULL,
  `mov_desc` text NOT NULL,
  `mov_pic` varchar(1000) NOT NULL,
  `mov_trailer` varchar(1000) NOT NULL,
  PRIMARY KEY (`mov_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_movies`
--

LOCK TABLES `tbl_movies` WRITE;
/*!40000 ALTER TABLE `tbl_movies` DISABLE KEYS */;
INSERT INTO `tbl_movies` VALUES (1,'Dunkirk',2017,'8/10',1,'In May 1940, Germany advanced into France, trapping Allied troops on the beaches of Dunkirk. Under air and ground cover from British and French forces, troops were slowly and methodically evacuated from the beach using every serviceable naval and civilian vessel that could be found. At the end of this heroic mission, 330,000 French, British, Belgian and Dutch soldiers were safely evacuated.','dunkirk.jpg','https://www.youtube.com/embed/F-eMt3SrfFU'),(2,'Logan',2017,'8/10',1,'In the near future, a weary Logan cares for an ailing Professor X at a remote outpost on the Mexican border. His plan to hide from the outside world gets upended when he meets a young mutant who is very much like him. Logan must now protect the girl and battle the dark forces that want to capture her.','logan.jpg','https://www.youtube.com/embed/Div0iP65aZo'),(3,'The Fate of the Furious',2017,'7/10',1,'With Dom and Letty married, Brian and Mia retired and the rest of the crew exonerated, the globe-trotting team has found some semblance of a normal life. They soon face an unexpected challenge when a mysterious woman named Cipher forces Dom to betray them all. Now, they must unite to bring home the man who made them a family and stop Cipher from unleashing chaos.','ff.jpg','https://www.youtube.com/embed/JwMKRevYa_M'),(4,'Baywatch',2017,'6/10',2,'When a dangerous crime wave hits the beach, the legendary Mitch Buchannon leads his elite squad of lifeguards on a mission to prove that you don\'t have to wear a badge to save the bay. Joined by a trio of hotshot recruits, including former Olympian Matt Brody, they ditch the surf and go deep under cover to take down a ruthless businesswoman whose devious plans threaten the future of the bay.','baywatch.jpg','https://www.youtube.com/embed/nZ5tqzw841s'),(5,'Logan Lucky',2017,'7/10',2,'West Virginia family man Jimmy Logan teams up with his one-armed brother Clyde and sister Mellie to steal money from the Charlotte Motor Speedway in North Carolina. Jimmy also recruits demolition expert Joe Bang to help them break into the track\'s underground system. Complications arise when a mix-up forces the crew to pull off the heist during a popular NASCAR race while also trying to dodge a relentless FBI agent.','ll.jpg','https://www.youtube.com/embed/aPzvKH8AVf0'),(6,'Lady Bird',2017,'8/10',2,'A teenager navigates a loving but turbulent relationship with her strong-willed mother over the course of an eventful and poignant senior year of high school.','lb.jpg','https://www.youtube.com/embed/cNi_HC839Wo'),(7,'COCO',2017,'9/10',3,'Despite his family\'s generations-old ban on music, young Miguel dreams of becoming an accomplished musician like his idol Ernesto de la Cruz. Desperate to prove his talent, Miguel finds himself in the stunning and colorful Land of the Dead. After meeting a charming trickster named Héctor, the two new friends embark on an extraordinary journey to unlock the real story behind Miguel\'s family history.','coco.jpg','https://www.youtube.com/embed/zNCz4mQzfEI?rel=0'),(8,'Wonder',2017,'8/10',3,'Based on the New York Times bestseller, WONDER tells the incredibly inspiring and heartwarming story of August Pullman, a boy with facial differences who enters fifth grade, attending a mainstream elementary school for the first time.','wonder.jpg','https://www.youtube.com/embed/Ob7fPOzbmzE?rel=0'),(9,'Beauty and the Beast',2017,'7/10',3,'Belle, a bright, beautiful and independent young woman, is taken prisoner by a beast in its castle. Despite her fears, she befriends the castle\'s enchanted staff and learns to look beyond the beast\'s hideous exterior, allowing her to recognize the kind heart and soul of the true prince that hides on the inside.','bab.jpg','https://www.youtube.com/embed/e3Nl_TCQXuw?rel=0'),(17,'War for the Planet of the Apes',2017,'8/10',1,'Caesar (Andy Serkis) and his apes are forced into a deadly conflict with an army of humans led by a ruthless colonel (Woody Harrelson). After the apes suffer unimaginable losses, Caesar wrestles with his darker instincts and begins his own mythic quest to avenge his kind. As the journey finally brings them face to face, Caesar and the colonel are pitted against each other in an epic battle that will determine the fate of both of their species and the future of the planet.','wpa.jpg','https://www.youtube.com/embed/UEP1Mk6Un98'),(18,'Personal Shopper',2017,'6/10',4,'A young American in Paris works as a personal shopper for a celebrity. She seems to have the ability to communicate with spirits, like her recently deceased twin brother. Soon, she starts to receive ambiguous messages from an unknown source.','ps.jpg','https://www.youtube.com/embed/dSqMpkGOW9g'),(33,'It',2017,'7.5/10',5,'Seven young outcasts in Derry, Maine, are about to face their worst nightmare -- an ancient, shape-shifting evil that emerges from the sewer every 27 years to prey on the town\'s children. Banding together over the course of one horrifying summer, the friends must overcome their own personal fears to battle the murderous, bloodthirsty clown known as Pennywise.','it.jpg','https://www.youtube.com/embed/7no56Zw1e20'),(34,'Call Me by Your Name',2017,'8/10',6,'It\'s the summer of 1983, and precocious 17-year-old Elio Perlman is spending the days with his family at their 17th-century villa in Lombardy, Italy. He soon meets Oliver, a handsome doctoral student who\'s working as an intern for Elio\'s father. Amid the sun-drenched splendor of their surroundings, Elio and Oliver discover the heady beauty of awakening desire over the course of a summer that will alter their lives forever.','cmbyn.jpg','https://www.youtube.com/embed/Z9AYPxH5NTM'),(35,'Wonder Woman',2017,'7.5/10',1,'Before she was Wonder Woman (Gal Gadot), she was Diana, princess of the Amazons, trained to be an unconquerable warrior. Raised on a sheltered island paradise, Diana meets an American pilot (Chris Pine) who tells her about the massive conflict that\'s raging in the outside world. Convinced that she can stop the threat, Diana leaves her home for the first time. Fighting alongside men in a war to end all wars, she finally discovers her full powers and true destiny.','ww.jpg','https://www.youtube.com/embed/VSB4wGIdDwo'),(36,'The Shape of Water',2017,'7.5/10',5,'Elisa is a mute, isolated woman who works as a cleaning lady in a hidden, high-security government laboratory in 1962 Baltimore. Her life changes forever when she discovers the lab\'s classified secret -- a mysterious, scaled creature from South America that lives in a water tank. As Elisa develops a unique bond with her new friend, she soon learns that its fate and very survival lies in the hands of a hostile government agent and a marine biologist.','tsow.jpg','https://www.youtube.com/embed/XFYWazblaUA'),(37,'Thor: Ragnarok',2017,'7.9/10',1,'Imprisoned on the other side of the universe, the mighty Thor finds himself in a deadly gladiatorial contest that pits him against the Hulk, his former ally and fellow Avenger. Thor\'s quest for survival leads him in a race against time to prevent the all-powerful Hela from destroying his home world and the Asgardian civilization.','thor.jpg','https://www.youtube.com/embed/ue80QwXMRHg'),(38,'Three Billboards Outside Ebbing, Missouri',2017,'8.2/10',2,'After months have passed without a culprit in her daughter\'s murder case, Mildred Hayes makes a bold move, painting three signs leading into her town with a controversial message directed at William Willoughby, the town\'s revered chief of police. When his second-in-command, Officer Dixon -- an immature mother\'s boy with a penchant for violence -- gets involved, the battle is only exacerbated.','tboem.jpg','https://www.youtube.com/embed/Jit3YhGx5pU'),(39,'BPM (Beats per Minute)',2017,'7.6/10',4,'Nathan is a young man who joins an AIDS activist group in 1990s Paris. As he attends the weekly meetings, he learns that some members prefer a more radical approach to their protests.','120bpm.jpg','https://www.youtube.com/embed/VBPdx_iaQbg'),(40,'Downsizing',2017,'5.7/10',2,'When scientists discover how to shrink humans to five inches tall as a solution to overpopulation, Paul (Matt Damon) and his wife Audrey (Kristen Wiig) decide to abandon their stressed lives in order to get small and move to a new downsized community — a choice that triggers life-changing adventures.','downsizing.jpg','https://www.youtube.com/embed/UCrBICYM0yM'),(41,'Atomic Blonde',2017,'6.7/10',1,'Sensual and savage, Lorraine Broughton is the most elite spy in MI6, an agent who\'s willing to use all of her lethal skills to stay alive during an impossible mission. With the Berlin Wall about to fall, she travels into the heart of the city to retrieve a priceless dossier and take down a ruthless espionage ring. Once there, she teams up with an embedded station chief to navigate her way through the deadliest game of spies.','atomicblonde.jpg','https://www.youtube.com/embed/yIUube1pSC0'),(42,'Valerian and the City of a Thousand Planets',2017,'6.5/10',1,'In the 28th century, special operatives Valerian (Dane DeHaan) and Laureline work together to maintain order throughout the human territories. Under assignment from the minister of defense, the duo embarks on a mission to Alpha, an ever-expanding metropolis where diverse species gather to share knowledge and culture. When a dark force threatens the peaceful city, Valerian and Laureline must race against time to identify the menace that also jeopardizes the future of the universe.','valerian.jpg','https://www.youtube.com/embed/NNrK7xVG3PM'),(43,'Girls Trip',2017,'6.3/10',2,'Best friends Ryan, Sasha, Lisa and Dina are in for the adventure of a lifetime when they travel to New Orleans for the annual Essence Festival. Along the way, they rekindle their sisterhood and rediscover their wild side by doing enough dancing, drinking, brawling and romancing to make the Big Easy blush.','gt.jpg','https://www.youtube.com/embed/7jE61BzKmgQ'),(44,'The Lego Batman Movie',2017,'7.3/10',3,'There are big changes brewing in Gotham, but if Batman (Will Arnett) wants to save the city from the Joker\'s (Zach Galifianakis) hostile takeover, he may have to drop the lone vigilante thing, try to work with others and maybe, just maybe, learn to lighten up. Maybe his superhero sidekick Robin (Michael Cera) and loyal butler Alfred (Ralph Fiennes) can show him a thing or two.','legobatman.jpg','https://www.youtube.com/embed/rGQUKzSDhrg'),(45,'Justice League',2017,'6.7/10',1,'Fueled by his restored faith in humanity and inspired by Superman\'s selfless act, Bruce Wayne enlists newfound ally Diana Prince to face an even greater threat. Together, Batman and Wonder Woman work quickly to recruit a team to stand against this newly awakened enemy. Despite the formation of an unprecedented league of heroes -- Batman, Wonder Woman, Aquaman, Cyborg and the Flash -- it may be too late to save the planet from an assault of catastrophic proportions.','jl.jpg','https://www.youtube.com/embed/r9-DM9uBtVI'),(46,'Captain America: Civil War',2016,'7.8/10',1,'Political pressure mounts to install a system of accountability when the actions of the Avengers lead to collateral damage. The new status quo deeply divides members of the team. Captain America (Chris Evans) believes superheroes should remain free to defend humanity without government interference. Iron Man (Robert Downey Jr.) sharply disagrees and supports oversight. As the debate escalates into an all-out feud, Black Widow (Scarlett Johansson) and Hawkeye (Jeremy Renner) must pick a side.','civilwar.jpg','https://www.youtube.com/embed/dKrVegVI0Us'),(47,'La La Land',2016,'8.1/10',6,'Sebastian (Ryan Gosling) and Mia (Emma Stone) are drawn together by their common desire to do what they love. But as success mounts they are faced with decisions that begin to fray the fragile fabric of their love affair, and the dreams they worked so hard to maintain in each other threaten to rip them apart.','lalaland.jpg','https://www.youtube.com/embed/0pdqf4P9MB8'),(48,'Ready Player One',2018,'8/10',1,'When the creator of a virtual reality world called the OASIS dies, he releases a video in which he challenges all OASIS users to find his Easter Egg, which will give the finder his fortune.','rpo.jpg','https://www.youtube.com/embed/cSp1dM2Vj48'),(49,'Deadpool',2016,'8/10',1,'Wade Wilson (Ryan Reynolds) is a former Special Forces operative who now works as a mercenary. His world comes crashing down when evil scientist Ajax (Ed Skrein) tortures, disfigures and transforms him into Deadpool. The rogue experiment leaves Deadpool with accelerated healing powers and a twisted sense of humor. With help from mutant allies Colossus and Negasonic Teenage Warhead (Brianna Hildebrand), Deadpool uses his new skills to hunt down the man who nearly destroyed his life.','deadpool.jpg','https://www.youtube.com/embed/9vN6DHB6bJc');
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (16,'admin','admin','admin','admin@email.com','2018-04-07 23:50:20',0,'::1',0),(17,'a','a','0cc175b9c0f1b6a831c399e269772661','a@test.com','2018-04-07 22:24:32',2,'::1',0);
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

-- Dump completed on 2018-04-07 20:04:12
