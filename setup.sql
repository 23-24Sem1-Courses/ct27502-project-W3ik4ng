-- MySQL dump 10.13  Distrib 5.7.12, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: phonebook
-- ------------------------------------------------------
-- Server version	5.5.5-10.0.27-MariaDB-0ubuntu0.16.04.1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` boolean NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,'Admin','admin@cit.ctu.edu.vn','$2y$10$Use.MHRzGdW3IVu0dqVNT.Wnmibj0eNPr8q7RFlclQlbAWNUQtvPu','2016-10-08 15:20:51','2016-10-08 15:20:51','1');
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

--
-- Table structure for table `contacts`
--
DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Thriller','2016-10-09 03:12:25','2016-10-13 08:43:21'),(2,'Fantasy','2016-10-09 03:12:25','2016-10-13 08:43:21'),('3','Mystery','2016-10-09 03:12:25','2016-10-13 08:43:21');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(15) NOT NULL,
  `notes` varchar(1000) COLLATE utf8_unicode_ci NULL,
  `hot` boolean NULL DEFAULT 0,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `books_category_id_foreign` (`category_id`),
  CONSTRAINT `books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'The Da Vinci Code','Dan Brown','https://bizweb.dktcdn.net/100/378/470/products/the-da-vinci-code-robert-langdon-paperback-march-31-2009-us.jpg?v=1607750115053','200000','While in Paris, Harvard symbologist Robert Langdon is awakened by a phone call in the dead of the night. The elderly curator of the Louvre has been murdered inside the museum, his body covered in baffling symbols. As Langdon and gifted French cryptologist Sophie Neveu sort through the bizarre riddles, they are stunned to discover a trail of clues hidden in the works of Leonardo da Vinci—clues visible for all to see and yet ingeniously disguised by the painter.
Even more startling, the late curator was involved in the Priory of Sion—a secret society whose members included Sir Isaac Newton, Victor Hugo, and Da Vinci—and he guarded a breathtaking historical secret. Unless Langdon and Neveu can decipher the labyrinthine puzzle—while avoiding the faceless adversary who shadows their every move—the explosive, ancient truth will be lost forever.',0, 1,'2016-10-09 03:12:25','2016-10-13 08:43:21');
INSERT INTO `books` VALUES (2,'The Big Sleep', 'Raymond Chandler ', 'https://m.media-amazon.com/images/I/61FfXqRj9OL._SY522_.jpg', 	'311563', ' The Big Sleep is no ordinary story: private eye Philip Marlowe gets hired to investigate the blackmailing of Carmen Sternwood, the second daughter of a wealthy general', 1, 3, '2019-08-09 08:08:34', '2019-08-10 10:08:34');
INSERT INTO `books` (name, author, image, price, notes, hot,category_id ) 
 VALUES ('The Big Sleep', 'Raymond Chandler', 'https://m.media-amazon.com/images/I/71TRHm+Gf0L._SY522_.jpg',' 433616', 'Los Angeles PI Philip Marlowe is working for the Sternwood family. Old man Sternwood, crippled and wheelchair-bound, is being given the squeeze by a blackmailer and he wants Marlowe to make the problem go away. But with Sternwoods two wild, devil-may-care daughters prowling LAs seedy backstreets, Marlowes got his work cut out - and thats before he stumbles over the first corpse... ', 1, 3);
INSERT INTO `books` (name, author, image, price, notes, hot,category_id ) 
 VALUES  
( 'The Girl with the Dragon Tattoo', 'Stieg Larsson', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1684638853i/2429135.jpg', '169000',' Harriet Vanger, a scion of one of Sweden’s wealthiest families disappeared over forty years ago. All these years later, her aged uncle continues to seek the truth. He hires Mikael Blomkvist, a crusading journalist recently trapped by a libel conviction, to investigate. He is aided by the pierced and tattooed punk prodigy Lisbeth Salander. Together they tap into a vein of unfathomable iniquity and astonishing corruption.', 1, 1),
( 'A Haunting on the Hill', 'Elizabeth Hand', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1675879522i/102188677.jpg', '363000', 'From three-time Shirley Jackson, World Fantasy, and Nebula Award-winning author Elizabeth Hand comes the first-ever authorized novel to return to the world of Shirley Jacksons  The Haunting of Hill House:  a suspenseful, contemporary, and terrifying story of longing and isolation all its own.', 1, 1 ),
( 'What the River Knows', 'Isabel Ibañez', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1674234543i/65213381.jpg', '290000', 'Bolivian-Argentinian Inez Olivera belongs to the glittering upper society of nineteenth century Buenos Aires, and like the rest of the world, the town is steeped in old world magic that’s been largely left behind or forgotten. Inez has everything a girl might want, except for the one thing she yearns the most: her globetrotting parents—who frequently leave her behind.',1,3),
('A Traitor in Whitehall', 'Julia Kelly', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1687140970i/65214072.jpg' , 363000, 'From Julia Kelly, internationally bestselling author of The Last Dance of the Debutante, comes the first in the mysterious and immersive Parisian Orphan series, A Traitor in Whitehall.', 0, 3),
( 'A Curse for True Love', 'Stephanie Garber', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1674501506i/62816044.jpg', '291000', 'Evangeline Fox ventured to the Magnificent North in search of her happy ending, and it seems as if she has it. She’s married to a handsome prince and lives in a legendary castle. But Evangeline has no idea of the devastating price she’s paid for this fairytale. She doesn’t know what she has lost, and her husband is determined to make sure she never finds out . . . but first he must kill Jacks, the Prince of Hearts.', 1, 2),
('Starling House', 'Alix E. Harrow', 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1682447293i/65213595.jpg', 363000, 'A grim and gothic new tale from author Alix E. Harrow about a small town haunted by secrets that can not stay buried and the sinister house that sits at the crossroads of it all.', 0, 2);

UNLOCK TABLES;

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `book_id` int(10) unsigned NOT NULL,
  `amount`	int(3) NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_user_id_foreign` (`user_id`),
  CONSTRAINT `cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  KEY `cart_books_id_foreign` (`book_id`),
  CONSTRAINT `cart_books_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (1,'6','1','1','2016-10-09 03:12:25','2016-10-13 08:43:21');
booksbooksbooksbooksbooksbooks
/*!40000 ALTER TABLE `v` ENABLE KEYS */;
UNLOCKbooks TABLES;

-- Dump completed on 2016-10-17 13:27:44
booksbooksbooks