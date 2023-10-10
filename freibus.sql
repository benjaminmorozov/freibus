-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: freibus
-- ------------------------------------------------------
-- Server version	8.0.34-0ubuntu0.22.04.1

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
-- Table structure for table `carousels`
--

DROP TABLE IF EXISTS `carousels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carousels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carousels`
--

LOCK TABLES `carousels` WRITE;
/*!40000 ALTER TABLE `carousels` DISABLE KEYS */;
INSERT INTO `carousels` VALUES (8,'sfQ5f6ZevYvnofoDB1vNYPtQBc3o5X-metaZG9tb3ZfYjdiNmQ0MGQzZTZiY2E0NC5qcGc=-.jpg',2,'2023-09-15 15:47:59','2023-10-03 08:27:47'),(9,'T4FHahbCJJJvtoAHarZ5uZzICykeNC-metaZG9tb3ZfZTFkMWZhMzRjMjA1YzVmMC5qcGc=-.jpg',3,'2023-09-15 15:48:07','2023-10-03 08:27:47'),(10,'0PMkOoJeI8MHfL8wQZ1qI5xz6dpxHP-metaZG9tb3ZfZGFjODQxYjc0MjIwYzlmYi5qcGc=-.jpg',1,'2023-09-15 16:56:51','2023-10-03 08:27:47'),(11,'LNqLUkh3RkuapB9fgA2jfHPaiOXv04-metaZG9tb3ZfZTJmNzc1NzM4NWFkYmEyZS5qcGc=-.jpg',5,'2023-09-15 16:57:34','2023-10-03 08:27:47'),(12,'zMfvTJTB3toBiv4Pl8hBJA24Zu8ftJ-metaZG9tb3ZfYTUwNjA1OWM0ODk2OGRiYy5qcGc=-.jpg',4,'2023-09-15 16:57:42','2023-10-03 08:27:47');
/*!40000 ALTER TABLE `carousels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `colour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Praha','praha','2023-09-14 20:54:17','2023-09-14 20:54:17','#fcba03'),(2,'Viedeň','vieden','2023-09-14 20:54:21','2023-09-14 20:54:21','#cc1fac'),(3,'Varšava','varsava','2023-09-14 20:54:27','2023-09-14 20:54:27','#16bedb'),(5,'Poprad','poprad','2023-10-02 21:14:02','2023-10-02 21:14:02','#e80e0e');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_tour`
--

DROP TABLE IF EXISTS `category_tour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_tour` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `tour_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_tour_category_id_foreign` (`category_id`),
  KEY `category_tour_tour_id_foreign` (`tour_id`),
  CONSTRAINT `category_tour_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_tour_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_tour`
--

LOCK TABLES `category_tour` WRITE;
/*!40000 ALTER TABLE `category_tour` DISABLE KEYS */;
INSERT INTO `category_tour` VALUES (1,1,1,NULL,NULL),(2,2,2,NULL,NULL),(3,3,5,NULL,NULL),(5,3,4,NULL,NULL),(6,2,3,NULL,NULL),(9,5,6,NULL,NULL);
/*!40000 ALTER TABLE `category_tour` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (6,'Benjamín Morozov','benjaminmorozov@gmail.com','fdsaf','fasdfads','2023-09-29 20:53:00'),(7,'Benjamín Morozov','benjaminmorozov@gmail.com','fdsaf','fasdfads','2023-09-29 20:57:24'),(8,'Benjamín Morozov','benjaminmorozov@gmail.com','fdsaf','fasdfads','2023-09-29 20:57:51'),(9,'Benjamín Morozov','benjaminmorozov@gmail.com','fdsaf','fasdfads','2023-09-29 20:58:08'),(10,'Benjamín Morozov','benjaminmorozov@gmail.com','Deaktivácia účtu','dsasadas','2023-09-29 20:58:40'),(11,'Benjamín Morozov','benjaminmorozov@gmail.com','sfs','subject','2023-09-29 21:00:28'),(14,'Benjamín Morozov','benjaminmorozov@gmail.com','Zrušenie objednávky','Dobrý deň, chcel by som zrušiť objednávku č. 8252. Predom ďakujem.','2023-09-29 21:20:30');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_09_13_190527_create_categories_table',1),(6,'2023_09_13_190536_create_posts_table',1),(7,'2023_09_13_190544_create_category_posts_table',1),(8,'2023_09_14_091928_create_tours_table',1),(11,'2023_09_15_152411_create_carousels_table',2),(12,'2023_09_16_192802_add_colour_to_categories_table',3),(13,'2023_09_16_202400_create_settings_table',4),(15,'2023_09_16_223248_create_category_tours_table',5),(20,'2023_09_20_055857_create_permission_tables',10),(22,'2023_09_23_131651_create_settings_table',11),(24,'2023_09_23_145851_create_socials_table',12),(28,'2023_09_14_174317_create_text_widgets_table',14),(31,'2023_09_16_222435_create_tours_table',16),(32,'2023_09_16_223248_create_category_tour_table',17),(35,'2023_09_23_220127_create_orders_table',18),(36,'2023_09_27_201200_create_base_pages_table',19),(40,'2023_09_28_181443_create_pages_table',20),(41,'2023_09_29_165502_create_contacts_table',21),(43,'2023_10_02_144946_create_reviews_table',22);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(1,'App\\Models\\User',5);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `tour_id` bigint unsigned NOT NULL,
  `login_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,'Adam Hruška','email@gmail.com','Spievankovo 10, Poprad 05801',100.00,1,522012,'2023-09-24 22:24:17'),(2,2,'Ján Jablko','email@email.com','test, test 05901',100.00,1,327118,'2023-09-24 22:26:58'),(3,2,'Peter Egreš','email@email.com','test, test 05901',260.00,1,773916,'2023-09-24 22:27:10'),(4,1,'Martin Avokádo','email@gmail.com','Starý Smokovec 13, Vysoké Tatry 06201',580.00,1,228819,'2023-09-25 12:15:43'),(88,7,'test test','qknzuwpdbmbgqsrydo@cazlv.com','sdfsdf, sdfsdf 92939',30.00,6,594021,'2023-10-02 18:19:53'),(89,NULL,'adam','rest@test.com','test 1, Poprad 05801',30.00,1,443901,'2023-10-02 20:30:48'),(90,8,'test','yagiresrinclovvwas@cazlp.com','poprad, poprad 05801',30.00,6,952574,'2023-10-02 20:32:00'),(91,5,'Benjamín Morozov','benjaminmorozov@gmail.com','Krížová Ves 168, Krížová Ves 05901',30.00,1,241959,'2023-10-02 20:52:07'),(92,5,'Benjamín Morozov','benjaminmorozov@gmail.com','Krížová Ves 168, Krížová Ves 05901',30.00,1,992589,'2023-10-02 20:54:01'),(93,5,'Adam Hruška','mail@stvorka.cloud','Veselá 10, Poprad 05801',30.00,1,418089,'2023-10-03 07:10:48'),(94,5,'Benjamín Morozov','mail@stvorka.cloud','Krásna 10, Poprad 05801',80.00,1,847280,'2023-10-03 08:26:07'),(95,NULL,'Adam Hruška','maros.mincak11@gmail.com','Ul.29 Augusta, Poprad 058 01',30.00,1,835213,'2023-10-03 08:48:37');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (2,'Všeobecné zmluvné podmienky','termsconditions',NULL,'<h3><strong>CK FREIBUS SLOVAKIA Tour (dalej len FST)</strong></h3><p>Všeobecné zmluvné podmienky účasti na zájazdoch cestovnej kancelárie FST a reklamačný poriadok (ďalej len VZP obstarávateľa) sú platné pre všetky zájazdy, pobyty a služby cestovného ruchu organizované cestovnou kanceláriou FST. Všeobecné podmienky CK FST sú neoddeliteľnou súčasťou Zmluvy o obstaraní zájazdu, ktorú CK FST uzatvára s objednávateľom zájazdu. Podpisom zmluvy alebo zaplatením zálohy za dohodnuté služby objednávateľ potvrdzuje, že tieto informácie a podmienky sú mu známe, uznáva ich a súhlasí s nimi.</p><h3><strong>VZNIK ZMLUVNÉHO VZŤAHU A OBJEDNÁVKA ZÁJAZDU RESP. REZERVÁCIA ZÁJAZDU</strong></h3><ol><li>Účastníkmi zmluvného vzťahu sú: Cestovná kancelária Freibus SLOVAKIA Tour, s r.o. so sídlom na nám. Ľ.Štúra 2357, 955 01 Topoľčanoch (ďalej len obstarávateľ), ktorá do zmluvného vzťahu vstupuje prostredníctvom externých autorizovaných predajcov (ďalej iba CK (cestovná kancelária) resp. CA (cestovná agentúra)) alebo siete vlastných predajných miest a objednávateľ, ktorým môže byť fyzická alebo právnická osoba.</li><li>Zmluvný vzťah medzi obstarávateľom a objednávateľom vzniká uzatvorením zmluvy o obstaraní zájazdu, t.j. prijatím objednávateľom podpísanej zmluvy o zájazde a jej potvrdením zo strany CK. Zmluva o zájazde platí pre všetky ďalšie osoby na nej uvedené. Za plnenie zmluvných záväzkov osôb uvedených v zmluve ručí objednávateľ ako za plnenie svojich vlastných záväzkov. Za neplnoletú osobu podpisuje zmluvu jej zákonný zástupca. Osoby do 18 rokov môžu cestovať len v sprievode dospelých osôb alebo s písomným súhlasom zákonného zástupcu. Ak vek klienta prekročil 65 rokov, alebo je v lekárskej starostlivosti odporúčame mu poradiť sa s lekárom. V prípade dlhodobého užívania liekov (napr. inzulínu), je potrebné vziať si so sebou dostatočnú zásobu liekov. Pri všetkých zájazdoch do klimaticky a epidemiologicky náročných oblastí je účasť klienta na zájazde podmienená predložením lekárskeho potvrdenia o zdravotnej spôsobilosti.</li><li>Obsah Zmlúv o zájazde sa určuje podľa katalógu, cenníka a dodatočných ponúk obstarávateľa, zákazníkom potvrdených objednávok, týchto Všeobecných podmienok, príp. osobitných podmienok priložených k zmluve o zájazde.</li><li>Potvrdením zmluvy o obstaraní zájazdu sa obstarávateľ objednávateľovi zaväzuje zabezpečiť služby v dohodnutom rozsahu, kvalite a v súlade s dohodnutými podmienkami.</li><li>Rezervácia miest - rezervovať miesta v určitom zájazde je možné telefonicky (dĺžka rezervácie max. 3 pracovné dni) alebo osobne. Ak nie je vo výnimočných prípadoch dohodnuté inak. Obstarávateľ má právo zrušiť rezerváciu pokiaľ prihláška na zájazd nebola doručená do CK najneskôr do 7 pracovných dní odo dňa rezervovania miest.</li></ol><h3><strong>PLATOBNÉ PODMIENKY</strong></h3><ol><li>Záloha za zájazd - Obstarávateľ je oprávnený požadovať od objednávateľa zálohu vo výške 50 % z dohodnutej ceny a to najneskôr do 3 pracovných dní odo dňa podpísania zmluvy o obstaraní zájazdu. Pokiaľ obstarávateľ neobdrží zálohu od objednávateľa v dohodnutom termíne, obstarávateľ je oprávnený zrušiť zmluvu resp. rezerváciu miest bez ďalšieho upomínania objednávateľa.</li><li>Doplatok za zájazd - Doplatok dohodnutej ceny služieb je objednávateľ povinný zaplatiť obstarávateľovi najneskôr 30 dní pred dohodnutým termínom poskytovanej služby.</li><li>V prípade vzniku zmluvného vzťahu v lehote kratšej ako 30 dní pred začiatkom zájazdu je objednávateľ povinný ihneď uhradiť 100 % ceny dosiaľ objednaných služieb, ak nebolo dohodnuté inak.</li><li>Objednávateľ má nárok na poskytnutie služieb len po zaplatení celej ceny objednaných služieb. V prípade, že objednávateľ z akýchkoľvek dôvodov nedodrží splátkový kalendár úhrady dosiaľ objednaných služieb, je obstarávateľ oprávnený odstúpiť od uzavretej zmluvy o zájazde a požadovať zaplatenie zmluvnej pokuty podľa článku 7 VZP obstarávateľa.</li></ol><h3><strong>CENA</strong></h3><p>Ceny zájazdov obstarávateľa sú zmluvnými cenami dohodnutými písomnou dohodou medzi obstarávateľom a objednávateľom. Záväzná a dohodnutá cena je uvedená v Zmluve o obstaraní zájazdu. V cenníku obstarávateľa sú uvedené orientačné ceny. Pre určenie cien zájazdov, služieb a poplatkov bol použitý kurz meny platnej v SR oproti cudzím menám podľa oficiálneho kurzového lístka NBS zo dňa uvedenom v cenníku.</p><p>Obstarávateľ je oprávnený jednostranne zvýšiť dohodnutú cenu služieb v prípade, že dôjde k:</p><ul><li>zvýšeniu dopravných nákladov (vrátane cien pohonných látok),</li><li>zvýšeniu poplatkov spojených s dopravou (napr. letiskové poplatky, dopravné poistenie, prístavné poplatky a diaľničné poplatky zahrnuté v cene zájazdu),</li><li>zmene kurzu meny platnej v SR použitého na určenie dohodnutej ceny v priemere o viac ako 5%, ak k tomuto zvýšeniu dôjde do 21. Dňa pred dohodnutým termínom poskytnutia služby.</li></ul><p>Ak dôjde k uvedeným zmenám do 21. dňa pred začiatkom zájazdu, je obstarávateľ oprávnený cenu zájazdu uvedenú v Zmluve o zájazde jednostranne zvýšiť o čiastku, o ktorú sa zvýši cena alebo platba podľa odst. 2) písmena a) a b) oproti cene služieb a platieb zahrnutých v cene zájazdu. V prípade zmeny kurzu meny platnej v SR použitého pri kalkulácii ceny zájazdu v priemere o viac ako 5 % je obstarávateľ oprávnený zvýšiť jednostranne cenu zájazdu maximálne o čiastku zodpovedajúcu percentuálnej výške zmeny kurzu. Ak dôjde k takémuto jednostrannému zvýšeniu ceny, objednávateľ môže od zmluvy odstúpiť a obstarávateľ je oprávnený požadovať zaplatenie zmluvnej pokuty podľa článku 7 VZP obstarávateľa.</p><p>Písomné oznámenie o zvýšení ceny musí obstarávateľ odoslať objednávateľovi najneskôr 21 dní pred začiatkom zájazdu, inak obstarávateľovi nevznikne právo na zaplatenie rozdielu v cene zájazdu.</p><p>Objednávateľ má právo:</p><ul><li>na riadne poskytnutie zmluvne dohodnutých a zaplatených služieb, vyžadovať od obstarávateľa informácie o všetkých skutočnostiach, ktoré sa týkajú zmluvne dohodnutých a zaplatených služieb,</li><li>byť oboznámený v zmluvne dohodnutých alebo zákonných lehotách s prípadnými zmenami v zmluvne dohodnutých službách, odstúpiť od zmluvy kedykoľvek pred začiatkom čerpania služieb podľa článku 7 VZP obstarávateľa</li><li>na reklamáciu nedostatkov a jej vybavenie v súlade s článkom 8 VZP obstarávateľa</li><li>obdržať najneskôr 7 dní pred začiatkom zájazdu ďalšie písomné podrobné informácie o všetkých skutočnostiach, ktoré sú pre objednávateľa dôležité, a ktoré sú obstarávateľovi známe, pokiaľ nie sú už obsiahnuté v Zmluve o zájazde alebo v katalógu, ktorý bol objednávateľovi odovzdaný. Tieto písomné informácie o zájazde posiela obstarávateľ poštou len na jednu adresu, uvedenú objednávateľom. V prípade, že 7 dní pred odchodom objednávateľ ešte tieto informácie o zájazde nemá, je povinný bezodkladne o tom informovať cestovnú kanceláriu, aby zabezpečila nápravu. Inak obstarávateľ považuje pokyny za správne, kompletne a včas doručené na objednávateľom uvedenú adresu. V prípade predaja prostredníctvom partnerskej CK a CA sa pokyny zasielajú na adresu CK alebo CA, pokiaľ nebolo dohodnuté inak</li><li>písomne oznámiť obstarávateľovi pred začiatkom zájazdu, že zájazdu sa namiesto neho zúčastní iná osoba uvedená v oznámení. Toto právo však môže objednávateľ uplatniť iba v lehote do 3 dní pred začiatkom zájazdu, po uplynutí tejto lehoty toto právo objednávateľa zaniká, oznámenie musí obsahovať aj vyhlásenie nového objednávateľa, že súhlasí s uzatvorenou zmluvou a spĺňa všetky dohodnuté podmienky účasti na zájazde. Dňom doručenia oznámenia sa v ňom uvedená osoba stáva objednávateľom. Pôvodný a nový objednávateľ spoločne a nerozdielne zodpovedajú za zaplatenie ceny zájazdu a úhradu základnej zmluvnej pokuty.</li></ul><p><br></p><p>4.2. Objednávateľ má povinnosť:</p><p>a.) poskytnúť obstarávateľovi potrebnú súčinnosť k riadnemu zabezpečeniu a poskytnutiu služieb, predovšetkým pravdivo a úplne uvádzať požadované údaje v zmluve o zájazde vrátane akýchkoľvek zmien týchto údajov a predložiť ďalšie doklady podľa požiadavky obstarávateľa, v prípade že objednávateľ neuvedie pravdivo informácie /vek detí a podobne / a pokiaľ tým dôjde k zmene cenovej kalkulácie, je povinný okamžite uhradiť rozdiel v cene</p><p>b.) zabezpečiť u osôb mladších ako 15 rokov sprevádzanie a dohľad dospelého účastníka, obdobne zabezpečiť sprevádzanie a dohľad u osôb, ktorých zdravotný stav si to vyžaduje</p><p>c.) nahlásiť účasť cudzích štátnych príslušníkov</p><p>d.) zaplatiť cenu zájazdu v súlade s článkom 2 a 3 VZP obstarávateľa</p><p>e.) bez zbytočného odkladu oznamovať obstarávateľovi svoje stanovisko k prípadným zmenám v podmienkach a obsahu dohodnutých služieb</p><p>f.) prevziať od CK doklady potrebné na čerpanie služieb</p><p>g.) mať u seba platný cestovný doklad, prípadne vízum (pokiaľ je vyžadované), dodržiavať colné a pasové predpisy krajín, do ktorých cestuje. Všetky náklady, ktoré vzniknú nedodržaním týchto predpisov, znáša účastník zájazdu. Každý občan vrátane maloletého dieťaťa môže vycestovať do zahraničia len s platným cestovným dokladom. Odporúčame overiť na zastupiteľskom úrade štátu návštevy, či okrem cestovného dokladu nebude vyžadovaný tiež písomný súhlas rodičov (zákonného zástupcu), v akej forme a jazyku, a či podpis musí byť overený notárom, alebo je postačujúci len jednoduchý súhlas rodiča (zákonného zástupcu)</p><p>h.) splniť očkovacie, príp. ďalšie zdravotné formality, pri cestách do krajín, pre ktoré sú stanovené medzinárodnými zdravotníckymi predpismi</p><p>i.) riadiť sa pokynmi sprievodcu, delegáta alebo iného určeného zástupcu obstarávateľa a dodržiavať stanovený program</p><p>j.) počínať si tak, aby nedochádzalo k škodám na zdraví alebo majetku na úkor ostatných zákazníkov, dodávateľov služieb alebo obstarávateľa</p><p>k.) dbať o včasné a riadne uplatnenie prípadných nárokov voči dodávateľom služieb podľa článku 8 VZP obstarávateľa</p><p>l.) dostaviť sa na miesto odchodu v stanovenom čase</p><p><br></p><h3><strong>PRÁVA A POVINNOSTI OBSTARÁVATEĽA</strong></h3><p>5.1. K právam a povinnostiam objednávateľa uvedeným v článku 4 VZP obstarávateľa sa vzťahujú im zodpovedajúce práva a povinnosti obstarávateľa.</p><p>5.2. Obstarávateľ je povinný pred uzatvorením Zmluvy o zájazde presne informovať o všetkých skutočnostiach, ktoré sú mu známe, a ktoré môžu mať vplyv na rozhodnutie záujemcu o kúpu zájazdu.</p><p>5.3. Obstarávateľ nie je povinný poskytnúť objednávateľovi plnenia nad rámec vopred potvrdených a zaplatených služieb.</p><p>5.4. Obstarávateľ je povinný mať uzatvorenú Zmluvu o poistení zájazdov pre prípad úpadku CK, na základe ktorej vzniká objednávateľovi právo na poistné plnenie:</p><p>a.) v prípade neposkytnutia objednaného a zaplateného zájazdu poistné plnenie vo výške ceny neposkytnutého zájazdu, ktorú objednávateľ zaplatil,</p><p>b.) v prípade neposkytnutia objednávateľovi objednanej a zaplatenej dopravy z miesta pobytu v zahraničí na územie Slovenskej republiky t. z. uhradenie nákladov na túto dopravu,</p><p>ak je doprava súčasťou zájazdu</p><p>c.) v prípade nevrátenia rozdielu medzi zaplatenou cenou za zájazd a cenou čiastočne poskytnutého zájazdu objednávateľovi t. z. uhradenie rozdielu v cene medzi skutočne poskytnutými službami a zaplatenou cenou zájazdu</p><p>5.5. Obstarávateľ je povinný odovzdať objednávateľovi súčasne so zmluvou o zájazde aj doklady určené objednávateľovi, ktoré musia obsahovať informácie o uzatvorenom povinnom zmluvnom poistení zájazdu, najmä však označenie poisťovne, podmienky poistenia a spôsob oznámenia poistnej udalosti. Nároky objednávateľa, ktoré mu vznikli voči obstarávateľovi v dôsledku neplnenia Zmluvy o obstaraní zájazdu, prechádzajú na poisťovňu, a to až do výšky plnenia, ktoré mu poisťovňa poskytla.</p><p>5.6. Obstarávateľ nezodpovedá za meškanie prenajatého dopravného prostriedku (lietadlo, autobus, vlak). V prípade meškania dopravného prostriedku CK postupuje podľa zákona a zmluvy uzatvorenej medzi obstarávateľom a prepravcom.</p><p>5.7. Obstarávateľ má právo na odstúpenie od Zmluvy o obstaraní zájazdu s objednávateľom, ktorý svojim správaním a konaním znemožňuje realizáciu zájazdu podľa vopred dohodnutých podmienok, alebo ohrozuje bezpečnosť ostatných účastníkov zájazdu. Objednávateľ v takýchto prípadoch nemá nárok na náhradu neposkytnutých služieb.</p><p><br></p><p>6.1. Ak je obstarávateľ nútený pred začiatkom zájazdu zmeniť podstatnú podmienku zmluvy (napr. termín, kvalitu, cenu a rozsah objednaných služieb), obstarávateľ navrhne objednávateľovi telefonicky alebo písomne zmenu objednaných služieb v zmluve o obstaraní zájazdu dojednaných medzi obstarávateľom a objednávateľom a to zákonom stanovenej lehote t.j. najneskôr 7 dní pred začatím čerpania služieb. Zároveň obstarávateľ uvedie novú cenu v prípade, ak zmena zmluvy vedie aj k zmene dohodnutej ceny. Objednávateľ oznámi obstarávateľovi písomne svoje rozhodnutie v lehote určenej obstarávateľom. Ak objednávateľ neoznámi obstarávateľovi svoje rozhodnutie k navrhovanej zmene písomnou formou v stanovenej lehote obstarávateľom, obstarávateľ uplatní zmenu podmienok a rozsahu dohodnutých služieb dojednaných v Zmluve o obstaraní zájazdu a objednávateľovi zaniká právo na uplatnenie reklamácie.</p><p>6.2. Obstarávateľ má právo zrušiť zájazd, ktorý je predmetom zmluvného vzťahu uzavretého medzi obstarávateľom a objednávateľom, ak v lehote do 21 dní pred jeho začiatkom nebude dosiahnutý minimálny počet účastníkov zájazdu alebo v iných prípadoch, ak jeho uskutočnenie je pre obstarávateľa ekonomicky neúnosné. Obstarávateľ oznámi písomne objednávateľovi zrušenie zájazdu už pri vzniku predpokladu, najneskôr však v lehote 7 dní pred dohodnutým termínom poskytovania služieb.</p><p>6.3. Obstarávateľ si ďalej vyhradzuje právo zrušiť zájazd v dôsledku udalostí, ktorým nie je možné zabrániť ani pri vynaložení všetkého úsilia, alebo v dôsledku neobvyklých a nepredvídateľných okolností (živelné pohromy, teroristické útoky a pod.).</p><p>6.4. Ak obstarávateľ odstúpi od zmluvy z dôvodu zrušenia zájazdu pred jeho začiatkom alebo ak objednávateľ nesúhlasí s navrhovanou zmenou zmluvy podľa ods. 1, má objednávateľ právo žiadať, aby mu obstarávateľ na základe novej zmluvy poskytol iný zájazd najmenej v kvalite, ktorá zodpovedá službám dohodnutým v pôvodnej zmluve, ak obstarávateľ môže takýto zájazd ponúknuť. Pri uzatvorení novej zmluvy sa platby uskutočnené na základe pôvodnej zmluvy považujú za platby podľa novej zmluvy. Ak je cena nového zájazdu nižšia ako už uskutočnené platby, je obstarávateľ povinný tento rozdiel objednávateľovi bezodkladne vrátiť.</p><p>6.5. Na základe individuálneho želania objednávateľa je obstarávateľ pripravený, pokiaľ je to možné, urobiť zmeny podmienok dohodnutých v zmluve o obstaraní zájazdu. Vykonanie takýchto zmien podlieha zaplateniu základnej zmluvnej pokuty za jednu zmenu resp. osobu. Ide o zmenu mena účastníka, počtu osôb, termínu, nástupného miesta, typu ubytovacieho zariadenia a pod. V prípade takejto zmeny požadovanej v lehote kratšej než 45 dní pred začiatkom zájazdu, je takáto zmena považovaná za odstúpenie od zmluvy zo strany objednávateľa a objednávateľ je povinný zaplatiť cestovnej kancelárii zmluvnú pokutu v súlade s článkom 7 VZP obstarávateľa.</p><p>6.6. Obstarávateľ si vyhradzuje právo na drobné zmeny v poskytovaných službách (zmena nástupného miesta, trasy, termínu, ubytovania, dopravy).</p><p><br></p><h3><strong>ODSTÚPENIE OD ZMLUVY, ZMLUVNÁ POKUTA</strong></h3><p>7.1. Obstarávateľ môže pred začiatkom zájazdu od zmluvy odstúpiť len z dôvodu zrušenia zájazdu alebo z dôvodu porušenia zmluvne dohodnutých povinností objednávateľom. Písomné oznámenie o odstúpení od zmluvy s uvedením dôvodov zasiela obstarávateľ písomne naadresu objednávateľa uvedenú v zmluve o obstaraní zájazdu. Ukončenie zmluvného vzťahu nastáva dňom doručenia oznámenia.</p><p>7.2. V prípade, že objednávateľ odstúpi od zmluvy, je povinný oznámiť to obstarávateľovi písomne a zároveň zaplatiť zmluvnú pokutu (storno poplatok). Účasť je zrušená ku dňu, kedy objednávateľ písomne s podpisom, podá zrušenie účasti u obstarávateľa. Objednávateľ môže odstúpiť od zmluvy bez udania dôvodu. Zmluva o obstaraní v tom prípade v tejto časti nezaniká. V prípade, ak nenastúpi zákazník na zájazd, alebo nevyčerpá službu CK bez predchádzajúceho odstúpenia od zmluvy alebo nezabezpečil správne údaje a platné doklady k vycestovaniu, je povinný uhradiť 100% z vopred stanovenej celkovej ceny (sumy).</p><p>7.3. Zmluvná pokuta je v prípade odstúpenia:</p><p>do 46 dní pred dohodnutým termínom poskytovania služieb obstarávateľ účtuje základnú zmluvnú pokutu:</p><p>1.) 30 €/osoba – autobusová a individuálna doprava</p><p>2.) 50 €/osoba – letecká doprava</p><p>od 45 do 31 dní pred dohodnutým termínom poskytovania služieb je zmluvná pokuta 25 % z celkovej ceny objednaných služieb</p><p>od 30 do 22 dní pred dohodnutým termínom poskytovania služieb je zmluvná pokuta 50 % z celkovej ceny objednaných služieb</p><p>od 21 do 15 dní pred dohodnutým termínom poskytovania služieb je zmluvná pokuta 70 % z celkovej ceny objednaných služieb</p><p>od 14 do 7 dní pred dohodnutým termínom poskytovania služieb je zmluvná pokuta 90 % z celkovej ceny objednaných služieb</p><p>menej ako 7 dní pred dohodnutým termínom poskytovania služieb je zmluvná pokuta 100 % z celkovej ceny objednaných služieb</p><p>7.4. Obstarávateľ je povinný do 14 dní po obdržaní písomného zrušenia zmluvy vrátiť zaplatenú sumu objednávateľom, zníženú o príslušnú zmluvnú pokutu.</p><p>7.5. Zmluvná pokuta platí i pre všetky ostatné zmeny okrem výmeny cestujúceho, kde obstarávateľ ma právo účtovať základnú zmluvnú pokutu.</p><p>7.6. Ak objednávateľ zmení rozsah služieb, resp. ak zrušia zájazd iba niektoré zo spolucestujúcich osôb a vplyvom zmeny dôjde k zmene napr. typu ubytovania atď. a cena služieb sa zmení, rozdiel musia zmluvné strany vyrovnať v prospech objednávateľa alebo obstarávateľa, pričom osoby ktoré zrušili objednané služby, sú povinné zaplatiť zmluvnú pokutu podľa článku 7 odst. 3 VZP obstarávateľa.</p><p>7.7. Pri určení počtu dní pre výpočet zmluvnej pokuty je rozhodujúci deň, ktorým objednávateľ odstupuje od zmluvy. Tento deň sa tiež započítava do stanoveného počtu dní. Do počtu dní sa nezapočítava deň odjazdu, odletu alebo nástupu na zájazd</p><p>7.8. V prípade, ak suma zmluvnej pokuty je vyššia ako suma ktorá bola uhradená obstarávateľovi objednávateľom, objednávateľ je povinný tento rozdiel ihneď uhradiť obstarávateľovi.</p><p><br></p><p>8.1. V prípade, že rozsah alebo kvalita služieb je nižšia, ako bolo dohodnuté v Zmluve o obstaraní zájazdu, vzniká objednávateľovi právo na reklamáciu. Zákazník je povinný uplatniť právo na odstránenie chybne poskytnutej služby bez zbytočného odkladu, a to priamo na mieste u dodávateľa služby alebo u povereného zástupcu obstarávateľa (delegát, sprievodca) tak, aby mohla byť vykonaná okamžitá náprava. Zástupca obstarávateľa je povinný rozhodnúť o reklamácii ihneď, v rámci svojej kompetencie.</p><p>8.2. Ak nie je možné okamžite vybaviť reklamáciu a vykonať nápravu, spíše zástupca obstarávateľa s reklamujúcim reklamačný protokol s označením zájazdu, reklamujúcej osoby a predmetu reklamácie. Protokol podpíše zástupca obstarávateľa alebo dodávateľa služby a reklamujúci, ktorý obdrží jeden exemplár reklamačného protokolu. Tento potvrdený reklamačný protokol je zákazník povinný predložiť pri reklamácii.</p><p>8.3. Svoje nároky z reklamácie musí zákazník uplatniť u obstarávateľa bez odkladne, najneskôr však do troch mesiacov od skončenia zájazdu, inak právo zaniká. Na všetky reklamácie podané v súlade s uvedenými podmienkami, je obstarávateľ povinný odpovedať písomnou formou, a to naj neskôr do 30 dní od obdržania reklamácie.</p><p>8.4. Obstarávateľ zodpovedá objednávateľovi za porušenie záväzkov vyplývajúcich z uzatvorenej zmluvy bez ohľadu na to, či tieto záväzky má splniť obstarávateľ alebo iní dodávatelia služieb s výnimkou komplexného cestovného poistenia viď článok 9, ktoré sa poskytujú v rámci zájazdu. Obstarávateľ nezodpovedá za úroveň cudzích služieb a akcií mimo rámec zájazdu, ktoré si zákazník objedná na mieste u delegáta, hotela alebo inej organizácie.</p><p>8.5. Za predmet reklamácie sa nepovažujú také škody a majetkové ujmy spôsobené zákazníkovi, ktoré sú predmetom zmluvnej úpravy poistného krytia poisťovne na základe poistnej zmluvy o cestovnom poistení, ani také škody a majetkové ujmy, ktoré sú z rozsahu poistného krytia výslovne vyňaté.</p><p>8.6. Ak nastanú okolnosti, ktorých vznik, priebeh a následok nie je závislý na činnosti a postupe obstarávateľa alebo okolnosti na strane zákazníka, na základe ktorých zákazník úplne alebo z časti nevyužije objednané, zaplatené a obstarávateľom zabezpečené služby, nevzniká zákazníkovi nárok na úhradu alebo zľavu z ceny týchto služieb.</p><p>8.7. Obstarávateľ nezodpovedá za prípadné meškanie dopravných prostriedkov a upozorňuje na možnosť jeho vzniku z dôvodov problémov v cestnej premávke a na hraničných prechodoch, preplnených vzdušných koridorov, z dôvodov nepriaznivého počasia, príp. z technických a prevádzkových dôvodov. Obstarávateľ nezodpovedá za škody, ktoré môžu vzniknúť následkom meškania dopravného prostriedku. V prípade meškania dopravného prostriedku z uvedených dôvodov vzniká zákazníkovi právo na odstúpenie od zmluvy podľa bodu 7.3. VZP CK FST.</p><p>8.8. Obstarávateľ nezodpovedá za škodu, ktorú nezavinil ani on, ani jeho dodávatelia služieb a škoda bola spôsobená zákazníkom, treťou osobou, ktorá nie je spojená s poskytovaním zájazdu alebo udalosťou, ktorej nebolo možné zabrániť ani pri vynaložení všetkého úsilia, alebo v dôsledku neobvyklých a nepredvídateľných okolností.</p><p>8.9. Objednávateľ, ktorý použije vlastnú dopravu, je sám zodpovedný za dodržanie termínu nástupu a ukončenia pobytu, ktorý obstarávateľ uvádza v pokynoch na zájazd.</p><p>8.10. Za riadne poskytnutie dopravy sa považuje aj poskytnutie dopravy so zmenenou trasou, zmenenými prestupnými miestami aj s prípadným časovým nesúladom jednotlivých liniek. Obstarávateľ sa však zaväzuje dodržať dohodnutý druh dopravy, zmeniť ho len vo výnimočných prípadoch na náklady obstarávateľa, a v prípade poskytnutia lacnejšej dopravy, vráti CK cenový rozdiel objednávateľovi bezodkladne po návrate.</p><p>8.11. Zmeny a odchýlky jednotlivých služieb sú v nevyhnutných prípadoch možné. Ide najmä o zmeny miesta odletu, príletu, trasy, leteckej spoločnosti, medzipristátia, typu lietadla, letových časov, termínu letu, programu zájazdu a pod. V prípade vyššie uvedených zmien bude obstarávateľ bez odkladne informovať objednávateľa. Uvedené zmeny programu nemôžu byť predmetom reklamácie a obstarávateľ neručí za škody, ktoré môžu vzniknúť zákazníkovi z týchto dôvodov, ani nekompenzuje služby, ktoré z týchto dôvodov nečerpali.</p><p>8.12. Pri posudzovaní poctu dní dovolenky treba počítať s tým, že do prvého a posledného dňa čerpania služieb v rôznej miere zasahujú dopravné a ubytovacie služby. Aj v prípade obsadenia izby v ranných hodinách sa predchádzajúca noc počíta ako poskytnuté ubytovanie. Obstarávateľ neručí za škody, ktoré môžu vzniknúť objednávateľovi z týchto dôvodov a nekompenzuje služby, ktoré sa z týchto dôvodov nečerpali.</p><p>8.13. Zmeny letových časov sa môžu uskutočniť aj krátko pred plánovaným odletom. Obstarávateľ neručí za meškanie lietadla, resp.za skorší odlet alebo prílet (z technických, resp. prevádzkových dôvodov, z dôvodu nepriaznivých poveternostných podmienok, preťaženia leteckých ciest a pod.) a za škody tým spôsobené. V prípade omeškania resp. skoršieho odletu alebo príletu lietadla vzniká objednávateľovi právo na kompenzáciu za dobu čakania na letisku alebo nevyčerpané služby súvisiace s pobytom v rozsahu medzinárodne platných predpisov, pričom náhradné plnenie poskytuje a za poskytnutie zodpovedá letecká spoločnosť. Prípadné neposkytnutie náhradného plnenia zo strany leteckej spoločnosti nie je dôvodom na odstúpenie od zmluvy o zájazde.</p><p>8.14. Každý zákazník je osobne zodpovedný za dodržiavanie pasových, devízových, tranzitných, zdravotných, dopravných a ďalších predpisov Slovenskej republiky ako aj predpisov, zákonov a zvyklosti krajiny, do ktorej cestuje, resp. cez ňu tranzituje. Obstarávateľ nenesie zodpovednosť za prípadné problémy vzniknuté neudelením víza alebo chybnými úkonmi zákazníka. Všetky náklady, ktoré vzniknú nedodržaním vyššie uvedených predpisov sú na ťarchu zákazníka.</p><p><br></p><h3><strong>CESTOVNÉ POISTENIE</strong></h3><p>9.1. Obstarávateľ je oprávnený sprostredkovať a uzatvárať zmluvu o komplexnom cestovnom poistení pre účastníkov zájazdu na základe zmluvy podpísanej medzi obstarávateľom a poisťovňou. Poistná zmluva je súčasťou zmluvy o obstaraní zájazdu. Poistná zmluva na zmluve o obstaraní zájazdu zaniká (neplatí) v prípade, ak objednávateľ nežiada sprostredkovanie kúpy cestovného poistenia. V rámci rozsahu komplexného cestovného poistenia je okrem iného zahrnuté aj poistenie pre prípad, že objednávateľovi vzniknú náklady v súvislosti s jeho odstúpením od zmluvy o obstaraní zájazdu v prípade nehody alebo ochorenia. Obsah a cena komplexného cestovného poistenia sú uvedené v zmluve o obstaraní zájazdu, presný rozsah krytia a podmienky sú uvedené v informáciách poisťovacej spoločnosti, ktoré objednávateľ obdrží od obstarávateľa.</p><p>9.2. Poistný vzťah vzniká priamo medzi účastníkom zájazdu a poisťovacou spoločnosťou. V jednaní o odškodnení poistnej udalosti je poisťovňa v priamom vzťahu k účastníkovi zájazdu a obstarávateľovi neprináleží posudzovať existenciu, prípadne výšku uplatňovaných nárokov z tohto vzťahu.</p><p><br></p><h3><strong>ZÁVEREČNÉ USTANOVENIA</strong></h3><p>10.1. Platnosť týchto Všeobecných zmluvných podmienok sa vzťahuje na zájazdy a služby poskytované obstarávateľom po 01.03.2015, ak nie je obstarávateľom stanovený, či vopred dohodnutý rozsah vzájomných práv a povinností inak, a to vždy písomnou formou.</p><p>10.2. Objednávateľ potvrdzuje podpisom zmluvy o obstaraní zájazdu resp. zaplatením zálohy za dojednané služby v zmluve, že sú mu VZP obstarávateľa známe, rozumie im, súhlasí s nimi a v plnom rozsahu ich prijíma.</p><p>10.3. Objednávateľ potvrdzuje podpisom zmluvy o obstaraní zájazdu svoj súhlas s tým, aby CK FST spracovávala jeho osobné údaje uvedené v zmluve o obstaraní zájazdu vrátane rodného čísla a č. pasu za účelom ponúkania služieb poskytovaných a sprostredkovaných CK FST a pre akvizičnú činnosť. Objednávateľ zároveň prehlasuje, že je splnomocnený podpisom zmluvy o obstaraní zájazdu udeliť súhlas aj na spracovanie osobných údajov všetkých osôb uvedených v Zmluve o obstaraní zájazdu. Poskytované údaje môžu byť sprístupnené iba zamestnancom CK FST a ďalej osobám, ktoré sú oprávnené služby zabezpečované CK FST ponúkať a poskytovať.</p><p>10.4. Všetky údaje a pokyny obsiahnuté v katalógu, letákoch a cenníku obstarávateľa o službách, cenách a cestovných podmienkach zodpovedajú informáciám známym k 01.03.2015 a obstarávateľ si vyhradzuje právo ich zmeny do doby uzatvorenia zmluvy o obstaraní zájazdu s objednávateľom.</p><p>V prípade, že údaje v katalógu, letákoch a v zmluve sa rozchádzajú, záväznými sú údaje obsiahnuté v Zmluve o obstaraní zájazdu. Podpisom Zmluvy o obstaraní zájazdu alebo zaplatením zálohy za objednané služby zákazník potvrdzuje, že bol oboznámený so všeobecnými podmienkami CK Freibus SLOVAKIA Tour, s.r.o., rozumie im, súhlasí s nimi a prijíma ich v plnom rozsahu.</p><p><br></p>'),(3,'Prepravný poriadok','prepravnyporiadok',NULL,'<h3><strong>Freibus SLOVAKIA, Námestie Ľudovíta Štúra 2357, 955 01 Topoľčany,</strong></h3><p>podľa § 5 zákona Národnej rady Slovenskej republiky č. 186 /1996 Z.z. o cestnej doprave v znení zákona NR SR č. 386 /1996Z.z. a zákona NR č. 58/1997 Z.z. a podľa § 1,2 a 5 vyhlášky Ministerstva dopravy, pôšt a telekomunikácií Slovenskej republiky č. 363/1996 Z.z. o vzore na vyhotovenie prepravného poriadku v cestnej doprave</p><p>vydáva</p><h3>PREPRAVNÝ PORIADOK AUTOBUSOVEJ DOPRAVY</h3><p><br></p><h3>OBSAH</h3><p>Čl. 1 Základné ustanovenia</p><p>Čl. 2 Rozsah autobusovej dopravy</p><p>Čl. 3 Povinnosti a zodpovednosť dopravcu</p><p>Čl. 4 Práva a povinnosti cestujúcich</p><p>Čl. 5 Zmluva o preprave osôb</p><p>Čl. 6 Zmena a zrušenie zmluvy o preprave osôb</p><p>Čl. 7 Preprava batožiny cestujúcich</p><p>Čl. 8 Nájdené veci</p><p>Čl. 9 Mimoriadne udalosti počas prepravy</p><p>Čl. 10 Odstúpenie od zmluvy v nepravidelnej autobusovej doprave</p><p>Čl. 11 Reklamácie</p><p>Čl. 12 Osobitná pravidelná autobusová doprava</p><p><span style=\"text-decoration: underline;\">Medzinárodná autobusová doprava</span></p><p>Čl. 13 Osobitné ustanovenia pre nepravidelnú medzinárodnú autobusovú dopravu</p><p>Čl. 14 Povinnosti objednávateľa medzinárodnej nepravidelnej autobusovej dopravy</p><p>Čl. 15 Záverečné ustanovenia</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 1 Základné ustanovenia</span></h3><p>1. Tento prepravný poriadok upravuje podmienky, za ktorých dopravca vykonáva prepravu osôb, príručnej batožiny, cestovnej batožiny a drobné domáce zvieratá.</p><p>2. Dopravca podľa tohto prepravného poriadku je Freibus SLOVAKIA, s.r.o., Námestie Ľudovíta Štúra 2357, 955 01 Topoľčany.</p><p>3. Preprava podľa tohto prepravného poriadku je premiestnenie osôb a ich batožiny, prípadne drobných domácich zvierat.</p><p>4. Prepravná povinnosť vykonať prepravu, ak sú splnené podmienky podľa tohto prepravného poriadku a umožňujú to prepravné podmienky, najmä technický stav, obsaditeľnosť vozidla a spôsobilosť vodiča a nebránia tomu príčiny, ktoré nemožno odvrátiť.</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 2 Rozsah autobusovej dopravy</span></h3><p>1. Dopravca vykonáva autobusovú dopravu v tomto rozsahu:</p><p>a) nepravidelná vnútroštátna autobusová doprava</p><p>b) nepravidelná medzinárodná autobusová doprava</p><p>c) osobitná pravidelná autobusová doprava</p><p>2. Nepravidelná autobusová doprava sa vykonáva na uspokojenie prepravných potrieb iba určitej skupiny cestujúcich po dohodnutej trase dopravnej cesty s dohodnutými zastávkami v dohodnutom čase, ktorých dopravca prepravuje podľa vopred uzavretej zmluvy o preprave osôb za dohodnuté cestovné. Je ňou každá príležitostná alebo opakovaná preprava, najmä zájazdová, kyvadlová, okružná a vyhliadková.</p><p>3. Dopravca nemá prevádzkovú ani tarifnú povinnosť.</p><p>4. Z nepravidelnej autobusovej dopravy je vylúčená preprava autobusových zásielok a preprava stojacich cestujúcich mimo obce.</p><p>5. Osobitná pravidelná autobusová doprava je najmä preprava zamestnancov zmluvného prepravcu, preprava žiakov škôl, preprava cestujúcich leteckého dopravcu na letisko a z letiska, ak sa vykonáva na autobusovej linke.</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 3 Povinnosti a zodpovednosť dopravcu</span></h3><p><span style=\"text-decoration: underline;\">1. Všeobecné povinnosti dopravcu:</span></p><p>a) vykonávať cestnú dopravu podľa tohto prepravného poriadku,</p><p>b) zabezpečiť v rozsahu poskytovaných dopravných a súvisiacich činností ďalšie vybavenie potrebné na prevádzku, údržbu, technickú kontrolu, parkovanie a garážovanie vozidiel a na starostlivosť o osádky vozidiel.</p><p>c) byť poistený pre prípad zodpovednosti za škodu spôsobenú prevádzkou vozidiel a činnosťou osádok vozidiel, odosielateľom, príjemcom vecí a tretím osobám.</p><p><br></p><p><span style=\"text-decoration: underline;\">2. Dopravca je ďalej povinný:</span></p><p>a) starať sa o bezpečnosť, pohodlie a pokojnú prepravu cestujúcich a o prepravu batožiny,</p><p>b) starať sa, aby vozidlá použité na prepravu cestujúcich boli čisté, v riadnom technickom stave a označené a na pravom boku tabuľkou veľkosti najmenej 600 x 150 mm s nápisom „ Zájazd“, Freibus SLOVAKIA. Prípadne iným vhodným nápisom vyjadrujúcim povahu uskutočňovanej prepravy, napríklad Zmluvná preprava, Kyvadlová preprava, Okružná jazda alebo Vyhliadková jazda, doplnená názvom zmluvného prepravcu alebo cieľovou zastávkou. Veľkosť písma nápisu je najmenej 75 mm, veľkosť písma dopĺňajúceho nápisu je najmenej 30 mm</p><p><br></p><p>c) zariadenie dopravcu v autobuse ( napr. rozhlasové zariadenie) používať takým spôsobom, aby nebolo na ťarchu cestujúcim,</p><p>d) zreteľne označiť sedadlá, na ktorých je zakázaná preprava určitého okruhu osôb,</p><p>e) postarať sa o bezpečnosť a zdravie cestujúcich a o ochranu ich batožiny, o zabezpečenie prvej pomoci a o náhradnú prepravu, ak sú účastníkmi dopravnej nehody,</p><p>f) zabezpečiť, aby osádka autobusu alebo iné oprávnené osoby dopravcu poskytli cestujúcim potrebné informácie týkajúce sa podmienok ich prepravy,</p><p>g) pri nepravidelnej preprave osôb je dopravca povinný nahradiť škodu vzniknutú tým, že preprava nebola vykonaná včas.</p><p><span style=\"text-decoration: underline;\">3. Ak sú splnené podmienky podľa prepravného poriadku a umožňujú to prepravné podmienky, najmä technický stav, obsaditeľnosť alebo vyťažiteľnosť vozidla a spôsobilosť vodiča a nebránia tomu príčiny ktoré nemožno odvrátiť, dopravca je povinný vykonať prepravu ( ďalej len „prepravná povinnosť“).</span></p><p><br></p><h3>&nbsp;</h3><p><span style=\"text-decoration: underline;\">4. Zodpovednosť dopravcu za škodu spôsobenú prevádzkou autobusu vychádza z ustanovení § 427 až 431 Občianskeho zákonníka:</span></p><p>a) fyzické a právnické osoby vykonávajúce dopravu zodpovedajú za škodu vyvolanú osobitnou povahou tejto prevádzky,</p><p>b) svojej zodpovednosti sa nemôže dopravca zbaviť, ak škoda spôsobená okolnosťami, ktoré majú pôvod v prevádzke</p><p>c) inak sa zodpovednosti zbaví, len ak preukáže, že škode nemohol zabrániť ani pri vynaložení všetkého úsilia, ktoré možno požadovať,</p><p>d) dopravca zodpovedá za škodu spôsobenú na zdraví, tak za spôsobenú odcudzením alebo stratou vecí, ak stratila fyzická osoba pri poškodení možnosť ich opatrovať,</p><p>e) namiesto prevádzkovateľa dopravného prostriedku zodpovedá ten, kto použije dopravný prostriedok bez vedomia alebo proti vôli prevádzkovateľa, prevádzkovateľ zodpovedá spoločne s ním, ak takéto použitie dopravného prostriedku svojou nedbanlivosťou umožnil,</p><p>f) ak je dopravný prostriedok v oprave, zodpovedá počas opravy prevádzkovateľ podniku, v ktorom sa oprava vykonáva, a to rovnako ako prevádzkovateľ dopravného prostriedku.</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 4 Práva a povinnosti cestujúcich</span></h3><p>1. Cestujúci má právo:</p><p>a) na bezpečnú, pokojnú a pohodlnú prepravu autobusom,</p><p>b) na prepravu príručnej batožiny, ak to umožňujú prepravné podmienky alebo zmluva o preprave osôb, aj cestovnej batožiny tým istým autobusom,</p><p>c) požadovať od osádky autobusu potrebné informácie týkajúce sa podmienok jeho prepravy.</p><p>2. Ak cestujúcemu vznikne počas prepravy škoda na zdraví alebo škoda na batožinách prepravovaných spoločne s ním alebo na veciach, ktoré mali pri sebe, zodpovedá za ňu dopravca podľa ustanovení o zodpovednosti za škodu spôsobenú prevádzkou dopravných prostriedkov podľa čl.3 ods.4.</p><p>3. Za škodu spôsobenú na batožinách prepravovaných oddelene od cestujúceho zodpovedá dopravca podľa ustanovení o zodpovednosti pri nákladnej doprave.</p><p>4. Cestujúci sú povinní zachovávať opatrnosť primeranú povahe prevádzky autobusovej dopravy a poslúchnuť pokyny, ktoré im dávajú oprávnení pracovníci dopravcu.</p><p>5. Cestujúci sa musí zdržať všetkého, čo by mohlo ohroziť bezpečnosť a plynulosť dopravy, poriadok vo vozidle alebo pôsobiť rušivo na pracovníkov dopravcu pri výkone ich služby alebo spôsobiť škodu cestujúcim.</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 5 Zmluva o preprave osôb</span></h3><p>1. Zmluvou o preprave osôb vzniká cestujúcemu, ktorý za určené cestovné použije dopravný prostriedok, má právo, aby ho dopravca prepravil do miesta určenia riadne a včas.</p><p>2. Základné náležitosti zmluvy o preprave osôb vychádzajú z ustanovení § 760 až 764 Občianskeho zákonníka.</p><p>3. V nepravidelnej autobusovej doprave prepravuje určitú skupinu cestujúcich podľa vopred uzavretej zmluvy o preprave osôb.</p><p>4. V nepravidelnej autobusovej doprave prepravná povinnosť vyplýva z vopred uzavretej zmluvy o preprave osôb.</p><p>5. Ak odpadne potreba dojednanej prepravy, je to objednávateľ prepravy povinný okamžite oznámiť dopravcovi.</p><p>6. V nepravidelnej autobusovej doprave dopravca nemá prevádzkovú povinnosť.</p><p>7. K vykonaniu nepravidelnej autobusovej dopravy musí byť autobus objednaný. Ak ide o krátkodobú prepravu, je možná aj telefonická objednávka, ktorá však musí byť potvrdená písomne alebo faxom. Ak ide o prepravu, ktorá si vyžaduje určité prípravy na strane dopravcu (napr. viacdenná preprava, preprava prekračujúca hranice štátu a pod.), je nutné autobus objednať vopred tak, aby dopravca mohol včas vykonať potrebnú prípravu.</p><p>8. Objednávka nepravidelnej autobusovej dopravy musí obsahovať všetky údaje potrebné k vykonaniu prepravy a fakturácii prepravy, hlavne názov (obchodné meno), adresu, číslo telefónu a faxu objednávateľa, bankové spojenie, presné určenie miesta a čas pristavenia vozidla, smer cieľa, dobu trvania prepravy a počet účastníkov prepravy.</p><p>9. Ak dopravca nemôže objednávku prijať, je povinný o tom objednávateľa bez meškania vyrozumieť.</p><p>10. Prijatím objednávky sa dopravca zaväzuje vykonať prepravu podľa dojednaných a prepravným poriadkom stanovených podmienok.</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 6 Zmena a zrušenie zmluvy o preprave osôb</span></h3><p>1. Objednávateľ prepravy alebo vedúci výpravy ním určený môže navrhnúť zmenu zmluvy pred začatím prepravy aj počas jej vykonávania, dopravca vyhovie návrhu, ak to dovoľuje prevádzka jeho firmy a nie je tým ohrozená bezpečnosť prepravy alebo iný všeobecný záujem.</p><p>2. Ak nemôže dopravca vykonať prepravu alebo ju nemôže vykonať za dojednaných podmienok, je povinný objednávateľa o tom bez meškania vyrozumieť. Ak objednávateľovi nevyhovujú dopravcom novo navrhnuté podmienky, je oprávnený od prepravnej zmluvy odstúpiť. Objednávateľ je oprávnený odstúpiť od zmluvy o preprave osôb tiež v prípade, ak dopravca nezačne s prepravou do jednej hodiny od dojednaného času pristavenia vozidla na prepravu.</p><p>3. Ak odpadne potreba dojednanej prepravy, je objednávateľ povinný oznámiť to bez meškania dopravcovi. Ak odvolaná preprava vyžadovala už určitú prípravu a táto príprava bola vykonaná, je objednávateľ povinný nahradiť dopravcovi výdavky s tým spojené. Ak bola preprava odvolaná až po odchode vozidla na dojednané miesto jeho pristavenia alebo už vozidlo bolo na takéto miesto pristavené a k preprave nedošlo z príčiny na strane objednávateľa, prináležia dopravcovi ešte náhrady za vykonané výkony spojené s pristavením vozidla a jeho návratom na stanovište (garáže).</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 7 Preprava batožiny cestujúceho</span></h3><p>1. Ak má cestujúci batožinu, prepravuje ju dopravca buď spoločne alebo oddelene, a to za podmienok stanovených týmto prepravným poriadkom.</p><p>2. Príručná batožina sa prepravuje spoločne s cestujúcim a pod jeho dohľadom v odkladacom priestore nad sedadlom.</p><p>3. Cestovná batožina sa prepravuje oddelene od cestujúceho. Za oddelenú prepravu sa považuje preprava batožín uložených na mieste určenom dopravcom alebo pokynom vodiča mimo priestoru určeného na prepravu cestujúcich alebo v tomto priestore, ale na takom mieste, že cestujúci nemá možnosť na svoju batožinu dohliadať.</p><p>4. Cestujúci má právo vziať so sebou ako batožinu veci, ktoré vzhľadom na ich objem, dĺžku, úpravu alebo hmotnosť možno rýchlo a bez ťažkostí umiestniť vo vozidle alebo v osobitnom priestore pre batožiny a živé zvieratá, pokiaľ sú splnené osobitné podmienky ustanovené pre ich prepravu.</p><p><br></p><p>5. Z prepravy sú vylúčené:</p><p>a) veci, preprava ktorých je zakázaná právnymi predpismi,</p><p>b) nabité zbrane, s výnimkou strelných zbraní príslušníkov ozbrojených síl a polície, pre prepravu ktorých platia osobitné predpisy,</p><p>c) veci ktoré môžu ohroziť bezpečnosť prevádzky alebo poškodiť, prípadne znečistiť cestujúcich alebo autobus, najmä pre nevhodný spôsob balenia,</p><p>d) veci, ktoré svojim zápachom, odpudzujúcim vzhľadom a pod. by mohli byť cestujúcim na ťarchu,</p><p>e) batožiny, ktorých celková hmotnosť prevyšuje 50 kg,</p><p><br></p><p>f) cestovná batožina, ktorej hodnota presahuje 331,94 Eur.</p><p>6. Osoby oprávnené na nosenie strelnej zbrane môžu vziať so sebou do autobusu zároveň so zbraňou primerané množstvo nábojov, pokiaľ sú uložené v opaskoch na náboje, v poľovníckych kapsách, skrinkách a podobných obaloch.</p><p>7. Ako batožinu môže cestujúci vziať so sebou drobné domáce a iné malé zvieratá, pokiaľ tomu nebránia osobitné predpisy, ak ich preprava nie je cestujúcim na ťarchu, neohrozujú ich zdravie a ak sú v uzavretých klietkach, košoch alebo iných vhodných schránkach s nepriepustným dnom. Pre prepravu schránok so zvieratami platia ustanovenia o preprave batožín.</p><p>8. Bez schránky možno vziať do autobusu psa, ktorý má bezpečný náhubok a drží sa na krátkom vodítku. V jednom autobuse sa smie prepravovať najviac jeden pes bez schránky.</p><p>9. Ako batožinu môže cestujúci vziať so sebou iba jeden pár lyží s jedným párom lyžiarskych palíc, pokiaľ sú v prepravnom obale (púzdre) a umožňujú to prevádzkové podmienky dopravcu.</p><p>10. Cestujúci môžu vziať do vozidla so sebou najviac tri cestovné batožiny, ak to možnosti danej prepravy dovoľujú so súhlasom vodiča aj ďalšie batožiny.</p><p>11. Vodič určí, či sa batožina prepraví ako príručná alebo ako cestovná batožina, mimo priestoru pre cestujúcich. V prípade ak vodič určí ako miesto prepravy batožinový priestor, je cestujúci povinný upozorniť na osobitnú povahu batožiny, najmä na jej obsah a hodnotu, a ak vyžaduje, aby sa s ňou určitým spôsobom zaobchádzalo alebo aby sa ukladala v určitej polohe.</p><p>12. Cestujúci je povinný na požiadanie poskytnúť dopravcovi pri nakladaní a vykladaní batožiny primeranú pomoc.</p><p>13. Batožinu musí cestujúci uložiť v autobuse tak, aby neohrozovala bezpečnosť, nesťažovala výkon služby vodičom a neobmedzovala nastupovanie a vystupovanie cestujúcich. Ak to vyžaduje bezpečnosť alebo pohodlie cestujúcich, batožina sa musí uložiť podľa pokynov vodiča.</p><p>14. Ak sa batožina prepravuje mimo priestoru cestujúceho, cestujúci je povinný pri skončení prepravy hlásiť sa o jej vydanie.</p><p>15. Ak vodič má pochybnosti o tom, či batožina cestujúceho spĺňa podmienky stanovené týmto prepravným poriadkom, je oprávnený sa presvedčiť v prítomnosti cestujúceho o ich povahe a obsahu.</p><p>16. Ak cestujúci odmietne preskúmanie batožiny alebo ak sa pri jej preskúmaní zistí, že veci prípadne zvieratá, ktoré cestujúci chce prepravovať, sú z prepravy vylúčené, cestujúci je ich povinný z autobusu odstrániť. Ak cestujúci neuposlúchne pokyn, odstránenie batožiny zabezpečí oprávnená osoba. V takomto prípade môže oprávnená osoba cestujúceho vylúčiť z ďalšej cesty.</p><p>17. Ak vodič zistí, že vo vozidle zostala opustená batožina, oznámi to dopravcovi a zabezpečí, aby bola táto batožina odovzdaná dopravcovi v jeho sídle, napr. v oddelení strát a nálezov, oproti potvrdeniu o jej odovzdaní.</p><p>18. Za stratu alebo odcudzenie príručnej batožiny dopravca zodpovedá v rozsahu stanovených v § 427 a nasl. Občianskeho zákonníka.</p><p>19. Dopravca zodpovedá za škodu, ktorá vznikla na cestovnej batožine prepravovanej oddelene od cestujúceho v čase od prevzatia do jej vydania pri skončení prepravy cestujúceho. Ak bola škoda spôsobená cestujúcim, chybou batožiny, jej obalu alebo balenia, osobitnou povahou batožiny alebo okolnosťou, ktorú dopravca nemohol odvrátiť alebo preto, že cestujúci neupozornil vodiča na potrebu osobitného nakladania s batožinou, dopravca za škodu nezodpovedá. Rovnako dopravca nezodpovedá za škodu, ktorá vznikla na opustenej batožine.</p><p>20. Pri strate alebo zničení cestovnej batožiny prepravovanej oddelene od cestujúceho je dopravca povinný nahradiť cenu, ktorú mala stratená alebo zničená batožina v čase, keď bola prevzatá na prepravu, najviac však do výšky 70,- Eur.</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 8 Nájdené veci</span></h3><p>1. Veci, ktoré sa nájdu po odchode všetkých cestujúcich v autobuse a opustenú batožinu odovzdá vodič alebo iný člen osádky dopravcovi v sídle dopravcu.</p><p>2. Ak je medzi nájdenými vecami občiansky preukaz alebo cestovný pas, dopravca je povinný zabezpečiť jeho bezodkladné odovzdanie najbližšiemu policajnému útvaru oproti potvrdeniu.</p><p>3. Osoba, ktorá si nájdené veci vyzdvihne najneskôr do 30 dní po ich nájdení je povinná zaplatiť poplatok za uskladnenie podľa batožinového poriadku dopravcu.</p><p>4. Ak si vlastník veci nevyzdvihne ani do 30 dní odo dňa kedy boli nájdené, odovzdá ich dopravca príslušnému miestnemu orgánu štátnej správy postupom podľa § 135 ods. 1 Občianskeho zákonníka.</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 9 Mimoriadne udalosti počas prepravy</span></h3><p>1. Postup pri dopravných nehodách a likvidácii následkov je závislá na rozsahu nehody, t.j. na stupni poškodenia vlastného vozidla a prípadných ďalších vozidiel iných účastníkov dopravnej nehody, poškodenia iného majetku (cestovného zariadenia a pod.) a hlavne na zaradení osôb a ich schopnosti jednať bezprostredne po nehode spôsobom, ktorý zodpovedá stavu po nehode.</p><p>2. Ak bolo nevyhnutné k vyprosteniu zranených osôb pohybovať po nehode vozidlami, je nutné zaistiť stopy konečného postavenia vozidiel po nehode a zapísať si mená a adresy svedkov nehody, prípadne čísla ich vozidiel.</p><p>3. Postup vodiča resp. osádky vozidla, ktorá sa zúčastnila dopravnej nehody vychádza z § 50 zákona č. 315/1996 Z.z. o premávke na pozemných komunikáciách. Základnou povinnosťou vodiča, ktorý sa zúčastnil dopravnej nehody:</p><p>a) bezodkladne zastaviť vozidlo,</p><p>b) zdržať sa požitia alkoholického nápoja alebo užitia inej návykovej látky po nehode v čase, ak by bolo na ujmu zistenia či pred jazdou alebo počas jazdy požil alkoholický nápoj alebo užil inú návykovú látku,</p><p><br></p><p>4. Povinnosti účastníka dopravnej nehody sú nasledovné:</p><p>a) urobiť vhodné opatrenia, aby nebola ohrozená bezpečnosť cestnej premávky na mieste dopravnej nehody,</p><p>b) poskytnúť podľa svojich schopností a možností zranenej osobe potrebnú prvú pomoc a bezodkladne privolať odbornú zdravotnícku pomoc,</p><p>c) urobiť potrebné opatrenia na záchranu osoby alebo majetku ohrozeného dopravnou nehodou,</p><p>d) umožniť obnovenie cestnej premávky, najmä premávky vozidiel verejnej hromadnej dopravy osôb,</p><p>e) preukázať svoju totožnosť na požiadanie iného účastníka dopravnej nehody,</p><p>f) bezodkladne, a pokiaľ možno na mieste, upovedomiť fyzickú osobu, ktorá nie je účastníkom dopravnej nehody alebo právnickú osobu, ak týmto osobám bola pri nehode spôsobená hmotná škoda , a oznámiť im svoje osobné údaje, a ak to nie je možné, oznámiť ich prostredníctvom Policajného zboru, nemusí to oznámiť, ak hmotná škoda bola spôsobená na vozidle vrátane prepravovaných vecí a účastníkom dopravnej nehody je jeho vodič, ktorý je spôsobilý také upovedomenie vykonať.</p><p><br></p><p>5. Ak pri dopravnej nehode došlo k usmrteniu osoby alebo k jej zraneniu, ak došlo k poškodeniu cesty alebo všeobecne prospešného zariadenia, ak unikli nebezpečné veci alebo ak na niektorom zo zúčastnených vozidiel vrátane prepravovaných vecí alebo ak na inom majetku vznikla hmotná škoda zrejme prevyšujúca desať násobok minimálnej mzdy zamestnanca odmeňovaného mesačnou mzdou ustanovenou osobitným predpisom (Zákonom národnej rady SR č. 90/1996 Z.z. o minimálnej mzde v znení neskorších predpisov), účastník dopravnej nehody je povinný:</p><p>a) ohlásiť bezodkladne dopravnú nehodu policajtovi,</p><p>b) zdržať sa konania, ktoré by bolo na ujmu vyšetrovania dopravnej nehody, najmä premiestnenia vozidiel, ak sa situácia, ktorá vznikla dopravnou nehodou musí zmeniť, najmä ak je to potrebné na uvoľnenie alebo na ošetrenie zranenej osoby alebo na obnovenie premávky predovšetkým vozidiel verejnej hromadnej dopravy osôb, účastník dopravnej nehody je povinný vyznačiť situáciu a stopy,</p><p>c) zotrvať na mieste dopravnej nehody až do príchodu policajta alebo sa na toto miesto bezodkladne vrátiť po poskytnutí alebo privolaní pomoci, alebo po ohlásení dopravnej nehody.</p><p><br></p><p>6. Ak škoda spôsobená pri dopravnej nehode na žiadnom zo zúčastnených vozidiel vrátane prepravovaných vecí ani na inom majetku nedosiahla výšku ustanovenú v odseku 5 účastníci dopravnej nehody sú povinní postupovať podľa odseku 5 len ak sa výslovne nedohodli inak.</p><p>7. Osádka je náležite poučená ako postupovať v prípade požiaru vozidla. Vozidlá dopravcu sú vybavené predpísanými hasiacimi prístrojmi.</p><p>8. Dopravca v prípade znečistenia alebo poškodenia komunikácie jeho vozidlami, má za povinnosť bez meškania odstrániť znečistenie alebo poškodenie a uviesť komunikáciu do pôvodného stavu. Ak odstránenie, znečistenie alebo poškodenie komunikácie nie je v jeho možnostiach je povinný to nahlásiť správcovi komunikácie a uhradiť mu následne náklady spojené s odstránením znečistenia a s uvedením do pôvodného stavu.</p><p><br></p><p>9. Členovia osádky autobusu sú v prípade dopravnej nehody alebo požiaru autobusu, úrazu alebo náhleho ochorenia cestujúceho alebo inej mimoriadnej udalosti počas prepravy, pri ktorej sú ohrozené životy alebo zdravie cestujúcich, osádky autobusu alebo iných osôb povinní:</p><p>a) poskytnúť podľa svojich schopností a možností postihnutej osobe prvú pomoc a bezodkladne privolať odbornú zdravotnícku pomoc,</p><p>b) urobiť vhodné opatrenia, aby mimoriadnou udalosťou nebola ohrozená bezpečnosť cestnej premávky,</p><p>c) urobiť potrebné opatrenia na záchranu osôb a majetku ohrozeného mimoriadnou udalosťou.</p><p>10. Cestujúci, ktorých život a zdravie nie je mimoriadnou udalosťou ohrozené, sú povinní pomáhať členom osádky vozidla pri konaní podľa ods. 9</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 10 Odstúpenie od zmluvy v nepravidelnej autobusovej doprave</span></h3><p>1. Od zmluvy o preprave osôb v nepravidelnej autobusovej doprave je možné odstúpiť ak je to účastníkmi zmluvy dohodnuté v písomne uzavretej zmluve.</p><p>2. Dôvody odstúpenia od zmluvy o preprave osôb účastníci zmluvy dohodnú so zreteľom na konkrétny prípad.</p><p>3. Odstúpením od zmluvy sa zmluva od začiatku ruší, ak nie je účastníkmi dohodnuté inak.</p><p>4. Ak nebola zmluva o nepravidelnej autobusovej doprave uzavretá písomne, je možné od zmluvy odstúpiť v lehote 48 hodín pred dojednaným časom odchodu podľa objednávky bez úhrady, a to iba z dôvodov mimoriadnych okolností, ktoré si zmluvné strany preukážu. Na strane objednávateľa je to napr. náhle ochorenie, úmrtie v rodine a pod. Na strane dopravcu je to napr. dopravná nehoda autobusu a jeho neschopnosť ďalšej prevádzky a odmietnutie náhradného vozidla objednávateľom, neudelenie vstupných víz osádke vozidla, neudelenie prepravného povolenia cudzieho štátu a pod.</p><p>5. Ak niektorá zo zmluvných strán odstúpi od zmluvy v lehote kratšej ako 48 hodín je povinná uhradiť druhej strane náklady, ktoré táto preukázateľne vynaložila na plnenie zmluvy.</p><p>6. Ak dôjde k odstúpeniu od zmluvy po pristavení vozidla na dohodnuté miesto a v dohodnutom čase z dôvodu, že cestujúci nerešpektovali zákaz prepravy stojacich cestujúcich mimo obce, uhradí objednávateľ dopravcovi všetky náklady dopravcu v súvislosti s plnením zmluvy, vrátane prístavnej jazdy autobusom z miesta garážovania na dohodnuté miesto pristavenia a späť.</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 11 Reklamácie</span></h3><p>1. Práva, ktoré má oprávnený z prepravy alebo v súvislosti s prepravou, sa musia uplatniť u dopravcu, inak zanikajú. To neplatí, ak ide o právo na náhradu škody na zdraví alebo batožinách prepravovaných spoločne s cestujúcim alebo na veciach, ktoré mal pri sebe, toto právo sa môže uplatniť priamo na súde.</p><p>2. Ak sa žiada o vrátenie súm zaplatených dopravcovi, na podanie reklamácie je oprávnený ten, kto sumu zaplatil. V ostatných prípadoch je oprávnený v nepravidelnej autobusovej doprave objednávateľ prepravy. Ak reklamuje ten, kto nie je podľa prechádzajúcej vety na reklamáciu oprávnený, musí pripojiť písomný súhlas oprávneného.</p><p>3. Objednávatelia prepravy (prepravcovia) môžu podať reklamáciu len písomne. V reklamácii musí oprávnený vymedziť svoje požiadavky a stručne ich zdôvodniť. Ďalej musí pripojiť doklady osvedčujúce oprávnenosť jeho nároku a správnosť výšky požadovanej sumy, vrátenie ktorej sa požaduje, rovnopis vyhotovenej zápisnice.</p><p>4. Oprávnený musí uplatniť právo u dopravcu bez zbytočných odkladov najneskoršie do šiestich mesiacov, ak ide o objednávateľa v nepravidelnej preprave osôb, odo dňa, keď sa preprava vykonala, alebo sa mala vykonať.</p><p>5. Ak reklamácia nemá náležitosti uvedené v ods. 3, dopravca ihneď vyzve reklamujúceho ne jej doplnenie a určí primeranú lehotu nie kratšiu ako 8 dní. Ak sa reklamácia doplní v určenej lehote platí, že reklamácia sa riadne podala.</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 12 Osobitná pravidelná autobusová doprava</span></h3><p>Dopravca sa v súčasnosti zameriava na osobitnú pravidelnú autobusovú dopravu, pri ktorej na stanovenej autobusovej linke prepravuje zamestnancov zmluvného prepravcu.</p><p><span style=\"text-decoration: underline;\">1. Povinnosti dopravcu:</span></p><p>a) Dopravca sa zaväzuje vykonávať prepravu zamestnancov zmluvného prepravcu do zamestnania podľa vopred dohodnutého harmonogramu príchodov a odchodov a na stanovené miesto a podľa dohodnutej trasy na základe prepravnej zmluvy.</p><p>b) Dopravca je povinný vykonávať osobitnú pravidelnú autobusovú dopravu s odbornou starostlivosťou, na dohodnutej autobusovej linke a v dohodnutom čase.</p><p>c) Dopravca zodpovedá za to, že ak dôjde k poruche na dopravnom prostriedku bude bezodkladne použitý náhradný dopravný prostriedok.</p><p>d) Dopravca zodpovedá za to, že bude vykonávať osobitnú pravidelnú autobusovú dopravu na základe zmluvy o preprave osôb uzavretej s prepravcom pre vymedzený okruh cestujúcich stanovený v tejto zmluve.</p><p>e) Dopravca je povinný podľa vyhlášky MDPT SR č. 311/1996 Z.z. ktorou sa vykonáva zákon NR SR č. 168/1996 Z.z. o cestnej doprave označiť autobus v osobitnej pravidelnej autobusovej doprave tabuľkou s označením autobusovej linky veľkosti najmenej 600 x 150 mm. Písmo názvu východiskovej zastávky má výšku najmenej 30 mm a písmo názvu cieľovej zastávky má výšku najmenej 70 mm a hrúbku najmenej 10 mm. Tabuľka má modrý podklad a biele písmená.</p><p>2. Povinnosti cestujúceho:</p><p>a) Preukázať sa, že patrí do vymedzeného okruhu cestujúcich, pre ktorých je určená autobusová linka osobitnej autobusovej dopravy napríklad zamestnaneckým preukazom zamestnávateľa, pre ktorého je tento druh autobusovej dopravy vykonávaný.</p><p>b) Byť v stanovenom čase max. 10 minút a min. 5 minút pred odchodom autobusu na autobusovej zastávke pripravený k nastúpeniu do autobusu.</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 13 Osobitné ustanovenia pre nepravidelnú medzinárodnú autobusovú dopravu</span></h3><p>1. Pre medzinárodnú nepravidelnú autobusovú dopravu platia ustanovenia predchádzajúcich článkov primerane, pokiaľ v tomto článku nie je stanovené inak.</p><p>2. Medzinárodná autobusová doprava je vykonávaná dopravcom podľa medzinárodných zmlúv, dohôd a dohovoroch o cestnej doprave</p><p>a) Európska dohoda o práci osádok vozidiel v medzinárodnej cestnej doprave ( AETR ) vyhláška č. 108/1976 Zb. v znení neskorších predpisov</p><p>b) Dohoda o preprave osôb v príležitostnej doprave prekračujúcej hranice štátu ( ASOR )</p><p>3. Je dovolené prepravovať najviac dva kusy cestovnej batožiny. Tretia a ďalšia batožina sa prevezme na prepravu iba v prípade voľného miesta v batožinovom priestore.</p><p>4. Jedna batožina nesmie presahovať hmotnosť 25 kg.</p><p>5. Z prepravy sú vylúčené veci, ktorých preprava do zahraničia podlieha osobitným predpisom.</p><p>6. Ak nebude dopravcovi udelené niektoré z príslušných zahraničných prepravných povolení potrebných k vykonaniu napríklad kyvadlovej prepravy zmluva o preprave sa ruší.</p><p>7. Dopravca Freibus SLOVAKIA, Námestie Ľudovíta Štúra 2357, 955 01 Topoľčany, má poistené osádky vozidiel pre prípad lekárskeho vyšetrenia ( poistenie liečebných nákladov v cudzine ), pre prípad zodpovednosti za škodu spôsobenú prevádzkou vozidiel a činnosťou osádok autobusov cestujúcim a tretím osobám. Poistné zmluvy a poistné podmienky sú súčasťou prepravného poriadku ako príloha č. 1.</p><p><br></p><h3>Čl. 14 Povinnosti objednávateľa medzinárodnej nepravidelnej autobusovej dopravy</h3><p>Objednávateľ medzinárodnej nepravidelnej autobusovej dopravy je povinný:</p><p>a) určiť vedúceho výpravy, ktorý počas prepravy zastupuje objednávateľa a potvrdzuje dopravcovi správnosť údajov o priebehu prepravy v prepravnom doklade a rozhoduje o ďalšom postupe v prípade prekážky, pre ktorú nemôže pokračovať v preprave,</p><p>b) zaistiť vodičovi vozidla potrebný odpočinok, nocľah, vhodné garážovanie vozidla a prípadne stravovanie,</p><p>c) zaistiť dodržiavanie bezpečnostných predpisov a poriadku vo vozidle účastníkmi prepravy,</p><p>d) zaistiť, aby účastníci prepravy boli vždy načas vo vozidle,</p><p>e) poskytnúť dopravcovi v dostatočnom predstihu pred začatím napr. kyvadlovej prepravy kópiu zmluvy o rozsahu zaistenia poskytovaných služieb v mieste ubytovania skupín, ktoré sú pre dopravcu dôležité pre zaistenie príslušného zahraničného povolenia,</p><p>f) zaistiť pre potreby dopravcu zoznam cestujúcich, ktorý obsahuje priezvisko a začiatočné písmeno mena cestujúcich a poradové číslo,</p><p>g) zaistiť potrebnú súčinnosť účastníkov prepravy k tomu, aby preprava mohla byť načas a riadne uskutočnená, zoznámiť účastníkov prepravy s podmienkami prepravy, časovým harmonogramom prepravy, miestom a časom odchodu autobusu, zaistiť kontrolu cestovných dokladov pred výjazdom.</p><p><br></p><h3><span style=\"text-decoration: underline;\">Čl. 15 Záverečné ustanovenia</span></h3><p>1. Obsah tohto prepravného poriadku je voči obchodným partnerom odo dňa jeho zverejnenia a sprístupnenia súčasťou návrhu na uzavretie zmluvy na prepravu osôb.</p><p>2. Tento prepravný poriadok je účinný dňom september 2005.</p><p>3. Všetky zmeny a doplnky prepravného poriadku môžu nadobudnúť účinnosť najskôr dňom ich zverejnenia a sprístupnenia.</p><p>4. Ak bude prepravný poriadok podstatne zmenený alebo podstatne doplnený, dopravca je povinný zabezpečiť jeho zverejnenie a sprístupnenie v úplnom znení.</p><p><br></p><p><strong>V Topoľčanoch 01.01.2018</strong></p><p><br></p>'),(4,'Poistenie CK','poistenie',NULL,'<p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:537,&quot;url&quot;:&quot;https://www.freibus.sk/images/poistenie_ck_3b67fd4d8798bb26.png&quot;,&quot;width&quot;:860}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://www.freibus.sk/images/poistenie_ck_3b67fd4d8798bb26.png\" width=\"860\" height=\"537\"><figcaption class=\"attachment__caption\"></figcaption></figure></p>'),(5,'Storno podmienky','storno',NULL,'<h3><strong>ODSTÚPENIE OD ZMLUVY, ZMLUVNÁ POKUTA</strong></h3><p>7.1. Obstarávateľ môže pred začiatkom zájazdu od zmluvy odstúpiť len z dôvodu zrušenia zájazdu alebo z dôvodu porušenia zmluvne dohodnutých povinností objednávateľom. Písomné oznámenie o odstúpení od zmluvy s uvedením dôvodov zasiela obstarávateľ písomne naadresu objednávateľa uvedenú v zmluve o obstaraní zájazdu. Ukončenie zmluvného vzťahu nastáva dňom doručenia oznámenia.</p><p>7.2. V prípade, že objednávateľ odstúpi od zmluvy, je povinný oznámiť to obstarávateľovi písomne a zároveň zaplatiť zmluvnú pokutu (storno poplatok). Účasť je zrušená ku dňu, kedy objednávateľ písomne s podpisom, podá zrušenie účasti u obstarávateľa. Objednávateľ môže odstúpiť od zmluvy bez udania dôvodu. Zmluva o obstaraní v tom prípade v tejto časti nezaniká. V prípade, ak nenastúpi zákazník na zájazd, alebo nevyčerpá službu CK bez predchádzajúceho odstúpenia od zmluvy alebo nezabezpečil správne údaje a platné doklady k vycestovaniu, je povinný uhradiť 100% z vopred stanovenej celkovej ceny (sumy).</p><p>7.3. Zmluvná pokuta je v prípade odstúpenia:</p><p>do 46 dní pred dohodnutým termínom poskytovania služieb obstarávateľ účtuje základnú zmluvnú pokutu:</p><p>1.) 30 €/osoba – autobusová a individuálna doprava</p><p>2.) 50 €/osoba – letecká doprava</p><p>od 45 do 31 dní pred dohodnutým termínom poskytovania služieb je zmluvná pokuta 25 % z celkovej ceny objednaných služieb</p><p>od 30 do 22 dní pred dohodnutým termínom poskytovania služieb je zmluvná pokuta 50 % z celkovej ceny objednaných služieb</p><p>od 21 do 15 dní pred dohodnutým termínom poskytovania služieb je zmluvná pokuta 70 % z celkovej ceny objednaných služieb</p><p>od 14 do 7 dní pred dohodnutým termínom poskytovania služieb je zmluvná pokuta 90 % z celkovej ceny objednaných služieb</p><p>menej ako 7 dní pred dohodnutým termínom poskytovania služieb je zmluvná pokuta 100 % z celkovej ceny objednaných služieb</p><p>7.4. Obstarávateľ je povinný do 14 dní po obdržaní písomného zrušenia zmluvy vrátiť zaplatenú sumu objednávateľom, zníženú o príslušnú zmluvnú pokutu.</p><p>7.5. Zmluvná pokuta platí i pre všetky ostatné zmeny okrem výmeny cestujúceho, kde obstarávateľ ma právo účtovať základnú zmluvnú pokutu.</p><p>7.6. Ak objednávateľ zmení rozsah služieb, resp. ak zrušia zájazd iba niektoré zo spolucestujúcich osôb a vplyvom zmeny dôjde k zmene napr. typu ubytovania atď. a cena služieb sa zmení, rozdiel musia zmluvné strany vyrovnať v prospech objednávateľa alebo obstarávateľa, pričom osoby ktoré zrušili objednané služby, sú povinné zaplatiť zmluvnú pokutu podľa článku 7 odst. 3 VZP obstarávateľa.</p><p>7.7. Pri určení počtu dní pre výpočet zmluvnej pokuty je rozhodujúci deň, ktorým objednávateľ odstupuje od zmluvy. Tento deň sa tiež započítava do stanoveného počtu dní. Do počtu dní sa nezapočítava deň odjazdu, odletu alebo nástupu na zájazd</p><p>7.8. V prípade, ak suma zmluvnej pokuty je vyššia ako suma ktorá bola uhradená obstarávateľovi objednávateľom, objednávateľ je povinný tento rozdiel ihneď uhradiť obstarávateľovi.</p><p><br></p>'),(6,'Ochrana osobných údajov','privacypolicy',NULL,'<h2>Robíme všetko preto, aby ste sa u nás cítili bezpečne a prehlasujeme, že sme prijali všetky vhodné technické a organizačné opatrenia k zabezpečeniu osobných údajov. <strong>Vaše osobné údaje sú na našich serveroch šifrované.</strong></h2><p><br></p><h2>PREVÁDZKOVATEĽ</h2><p><br></p><p>Prevádzkovateľom osobných údajov podľa § 5 písm. o) zákona č. 18/2018 Z.z. o ochrane osobných údajov v znení neskorších predpisov (ďalej len „Zákon“) je Freibus SLOVAKIA, s.r.o. IČO: 46153055 so sídlom Nam.L.Stura 2357, 95501 Topolcany Slovensko (ďalej len: „prevádzkovateľ“).<br><br>Kontaktné údaje prevádzkovateľa sú:<br>adresa: Nam.L.Stura 2357, 95501 Topolcany Slovensko<br>email: <a href=\"mailto:ckfreibus@gmail.com?Subject=Privacy%20policy\">ckfreibus@gmail.com</a><br><br></p><h2>AKÉ TYPY OSOBNÝCH ÚDAJOV ZBIERAME A NAČO ICH POTREBUJEME</h2><p><br></p><p><br></p><h3><strong>Žiadosti</strong>,<br>cenové ponuky a dopyty z webových formulárov<br><br></h3><ul><li>Meno a priezvisko</li><li>Telefónné číslo</li><li>E-mail</li></ul><p><br></p><p><br></p><h3><strong>Newsletter</strong><br><br></h3><ul><li>E-mail</li></ul><p><br></p><h2>AKÉ TYPY OSOBNÝCH ÚDAJOV ZBIERAME A NAČO ICH POTREBUJEME PLATÍ PRE E-SHOP</h2><p><br></p><p><br></p><h3><strong>Prihlásenie</strong><br>na webstránku<br><br><br></h3><ul><li>E-mail</li><li>Heslo</li></ul><p><br></p><p><br></p><h3><strong>Registrácia</strong><br>a nákup na webstránke<br><br></h3><ul><li>Meno a priezvisko</li><li>Adresa dodania</li><li>Telefónne číslo</li><li>E-mail</li></ul><p><br></p><p><br></p><h3><strong>Fakturácia</strong><br>a ekonomické náležitosti<br><br></h3><ul><li>Obchodný názov</li><li>Fakturačná adresa</li><li>IČO</li><li>DIČ</li><li>IČ DPH</li></ul><p><br></p><h2>NEWSLETTER</h2><p><br></p><p>Môžete sa prihlásiť k odoberaniu newslettera poskytnutím osobných údajov a tým vyjadríte súhlas s ich spracovaním na tieto marketingové účely (informácie o akciách, novinkách, výpredajoch, či súťažiach). Pre odhlásenie sa z odberu newslettera môžete požiadať kedykoľvek zaslaním emailu.</p><h2>PRENOS ÚDAJOV DO TRETÍCH KRAJÍN</h2><p><br></p><p>Prevádzkovateľ nemá v úmysle odovzdať osobné údaje do tretej krajiny (do krajiny mimo EU) alebo medzinárodnej organizácii.</p><h2>ZABEZPEČENIE OSOBNÝCH ÚDAJOV</h2><p><br></p><p>Aby boli vaše osobné údaje u nás chránené, vykonali sme primerané technické, bezpečnostné a organizačné opatrenia v súlade s požiadavkami a nariadeniami platnej legislatívy. Všetky vaše osobné údaje v elektronickej podobe sú uložené na zabezpečených dátových serveroch. &nbsp;</p><h2>AKO DLHO VAŠE OSOBNÉ ÚDAJE UCHOVÁVAME</h2><p><br></p><p>Vaše osobné údaje uchovávame po dobu nevyhnutnú k výkonu práv a povinností vyplývajúcich zo zmluvného vzťahu medzi nami a uplatňovanie nárokov z tohto zmluvného vzťahu.&nbsp;</p><p>Osobné údaje, ktorých uchovávanie je nevyhnutné pre splnenie všetkých našich povinností vyplývajúcich zo zákonného nariadenia musíme uchovávať po dobu stanovenú príslušným právnym predpisom a to bez ohľadu na vami udelený súhlas. Pri daňových a účtovných dokladoch je spravidla táto doba 10 rokov.</p><p>V prípade marketingových aktivít alebo v iných prípadoch, na ktoré ste nám udelili súhlas, uchovávame vaše údaje do doby odvolania vášho súhlasu.&nbsp;</p><h2>VAŠE PRÁVA</h2><h2>V súvislosti s ochranou osobných údajov máte viaceré práva, ktoré si môžete uplatniť: - právo kedykoľvek odvolať váš súhlas so spracovaním osobných údajov</h2><p><br></p><ul><li>právo doplniť alebo opraviť osobné údaje</li><li>právo na prístup k údajom</li><li>právo na vymazanie osobných údajov</li><li>právo na obmedzenie spracúvania</li><li>právo vniesť námietku</li><li>právo na podanie sťažnosti</li><li>právo na prenos údajov</li></ul><p><br></p><h3>Právo na doplnenie a opravu<br><br><br></h3><p>Ak sú vaše údaje nesprávne uvedené, môžete ich upraviť priamo v nastaveniach vášho užívateľského účtu alebo nás môžete priamo kontaktovať na e-mailovú adresu <a href=\"mailto:ckfreibus@gmail.com?Subject=Privacy%20policy\">ckfreibus@gmail.com</a> a požiadať o ich opravu a doplnenie.&nbsp;</p><p><br></p><h3>Prístup k údajom<br><br></h3><p>Máte právo požiadať nás o prehľad údajov, ktoré o vás spracúvame, za akým účelom, komu ich poskytujeme, ako dlho ich budeme uchovávať a to prostredníctvom e-mailovej adresy <a href=\"mailto:ckfreibus@gmail.com?Subject=Privacy%20policy\">ckfreibus@gmail.com</a>.&nbsp;</p><p><br></p><h3>Právo na vymazanie osobných údajov<br><br></h3><p>Máte právo požiadať nás o vymazanie vašich osobných údajov, ktoré spracúvame a to v prípade, že sú splnené nasledovné podmienky a nedotkne sa to údajov, ktoré musíme podľa zákona uchovávať (napr. faktúry):<br><br></p><p><br></p><ul><li>Osobné údaje už nie sú potrebné na účely, na ktoré sa získali a boli spracované</li><li>Odvoláte svoj súhlas, na základe ktorého boli osobné údaje spracované a neexistuje iný právny základ pre spracovanie osobných údajov</li><li>Osobné údaje boli spracované nezákonne</li><li>Dôvodom pre výmaz je splnenie povinnosti podľa zákona, osobitného predpisu alebo medzinárodnej zmluvy</li><li>Ide o osobné údaje osoby mladšej ako 16 rokov</li></ul><p><br></p><h3>Právo na obmedzenie spracúvania</h3><ul><li>Máte právo požiadať nás o obmedzenie spracovania vašich osobných údajov v nsledovných prípadoch:</li><li>namietate správnosť osobných údajov, a to do doby než sa overí správnosť osobných údajov</li><li>spracovanie vašich osobných údajov je nezákonné</li><li>vaše osobné údaje už nepotrebujeme na účel spracúvania, avšak vy ich potrebujete pre uplatnenie, výkon alebo obranu vašich právnych nárokov</li><li>namietate podľa predchádzajúceho bodu so spracovaním vašich osobných údajov</li></ul><p><br></p><h3>Právo na vznesenie námietky</h3><p>Máte právo namietať spracovanie vašich osobných údajov z dôvodu týkajúceho sa vašej konkrétnej situácie, ktoré je vykonané na základe nášho oprávneného záujmu vrátane profilovania založeného na týchto ustanoveniach. Máte tiež právo namietať voči spracovaniu vašich osobných údajov na účel priameho marketingu.</p><p><br></p><h3>Právo na podanie sťažnosti</h3><p>Máte právo podať sťažnosť na Úrad na ochranu osobných údajov v prípade, že sa domnievate, že vaše osobné údaje boli spracované v rozpore s platnými právnymi predpismi na ochranu osobných údajov. Kontaktné údaje nájdete tu https://dataprotection.gov.sk/uoou/sk/content/kontakt-0.<br><br></p><h2>SÚBORY COOKIES</h2><h2>S cieľom zabezpečiť riadne fungovanie tejto webovej lokality ukladáme niekedy na vašom zariadení malé dátové súbory, tzv. cookie. Je to bežná prax väčšiny veľkých webových lokalít.</h2><p><br></p><h3>Čo sú súbory cookie?<br><br></h3><p>Súbor cookie je malý textový súbor, ktorý webová lokalita ukladá vo vašom počítači alebo mobilnom zariadení pri jej prehliadaní. Vďaka tomuto súboru si webová lokalita na určitý čas uchováva informácie o vašich krokoch a preferenciách (ako sú e-mail, jazyk, filtrovanie, zoradenie, vyhľadávanie, nakupovanie), takže ich pri ďalšej návšteve lokality alebo prehliadaní jej jednotlivých stránok nemusíte opätovne uvádzať.</p><p><br></p><h3>Ako používame súbory cookie?<br><br></h3><p>Tieto webstránky používajú súbory cookies na zapamätanie si prihlásenia, produktov vložených do nákupného košíka, pre lepšie prispôsobenie reklám záujmom návštevníkov, pre nevyhnutnú funkcionalitu webstránok a štatistických údajov o návšteve web stránky.</p><p><br></p><h3>Ako kontrolovať súbory cookie<br><br></h3><p>Súbory cookie môžete kontrolovať alebo zmazať podľa uváženia – podrobnosti si pozrite na stránke wikipedia.org. Môžete vymazať všetky súbory cookie uložené vo svojom počítači a väčšinu prehliadačov môžete nastaviť tak, aby ste im znemožnili ich ukladanie. V takomto prípade však pravdepodobne budete musieť pri každej návšteve webovej lokality manuálne upravovať niektoré nastavenia a niektoré služby a funkcie nebudú fungovať.</p><p><br></p><h3>Ako odmietnuť používanie súborov cookie<br><br></h3><p>Používanie súborov cookie je možné nastaviť pomocou Vášho internetového prehliadača. Väčšina prehliadačov súbory cookie automaticky prijíma už v úvodnom nastavení.</p><p><br></p><h3>Analytické Cookies<br><br></h3><p>Táto stránka používa službu Google Analytics, ktorú poskytuje spoločnosť Google, Inc. (Ďalej len \"Google\"). Služba Google Analytics používa súbory cookies.<br><br></p><p>Služba Google Analytics&nbsp; je rozšírená o súvisiace reklamné funkcie poskytované spoločnosťou Google, a to:<br>- prehľady zobrazení v reklamnej sieti Google,<br>- remarketing (zobrazovanie reklám v obsahovej sieti na základe videných produktov),<br>- rozšírené demografické prehľady (reportovanie anonymných demografických údajov).<br><br></p><p>Bližšie informácie o ochrane súkromia nájdete tu https://support.google.com/analytics/topic/2919631?hl=sk&amp;ref_topic=1008008, pre odmietnutie týchto cookies si môžete inštalovať softvérový doplnok dostupný tu https://tools.google.com/dlpage/gaoptout.</p><p><br></p>'),(7,'Zberný dvor','zbernydvor',NULL,'<h3>Objednávky:&nbsp; Kontajner Tel.: 0904 300 542</h3><p>Odvoz a dovoz kontajnerov.<br>&nbsp;Pristavíme až na Vašu stavbu naša spoločnosť sa zaoberá dovozom a odvozom kontajnerov.&nbsp;<br>Máme k dispozícii reťazové kontajnery v objeme 5m3, 7m3 a 10m3. Kontajner pristavíme na Vami určené miesto. Odvoz stavebného odpadu skládkujeme na našom zbernom dvore.&nbsp;<br>Pracujeme od pondelka do soboty.&nbsp;<br>Pozor: Cena za odvoz zmiešaného odpadu sa odvíja od množstva a druhu odpadu.</p><h3>Zberný dvor na stavebný odpad</h3><p>Súhlas oprávňuje prevádzkovateľa zariadenia na zber odpadov zbierať, triediť a dočasne zhromažďovať nasledovnédruhy odpadov zaradené podľa vyhlášky MŽP SR č. 365/2015 Z. z., ktorou sa ustanovuje Katalóg odpadov v zneníneskorších predpisov (ďalej len Katalóg odpadov):</p><p><br>Číslo druhu odpadu - Názov druhu odpadu - Kategória odpadu&nbsp;<br>15 01 06 - Zmiešané obaly - O&nbsp;<br>17 01 01 - Betón - O &nbsp;<br>17 01 02 - Tehly - O&nbsp;<br>17 01 03 - Obkladačky, dlaždice a keramika - O&nbsp;<br>17 01 07 - Zmesi betónu, tehál, obkladačiek, dlaždíc a keramiky iné ako uvedené v 17 01 06 - O&nbsp;<br>17 03 02 - Bitúmenové zmesi iné ako uvedené v 17 03 01 - O&nbsp;<br>17 05 04 - Zemina a kamenivo iné ako uvedené v 17 05 03 - O&nbsp;<br>17 05 06 - Výkopová zemina iná ako uvedená v 17 05 05 - O&nbsp;<br>17 06 04 - Izolačné materiály iné ako uvedené v 17 06 01 a 17 06 03 - O&nbsp;<br>17 09 04 - Zmiešané odpady zo stavieb a demolácií iné ako uvedené v 17 09 01, 17 09 02 a 17 09 03 - O&nbsp;<br>20 03 08 - Drobný stavebný odpad - O</p><p><br></p>');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` date NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Nová destinácia - Tatry','nova-destinacia-tatry','/Q3d53QChgBwGfQimvkdHhf3317EmzL-metabWhkLXBvcHJhZC12eXNva8OpLXRhdHJ5LmpwZw==-.webp','<p>S radosťou vám oznamujeme nový prírastok do našej ponuky - exkluzívnu túru do nádherných Vysokých Tatier! Ako vaša obľúbená autobusová spoločnosť sme sa rozhodli vás zaviesť do jedného z najkrajších kútov Slovenska.</p><p>Náš nový výlet do Tatier nie je len cesta, je to zážitok na výške. S pohodlnými autobusmi a odborným sprievodcom vás vezmeme na nezabudnuteľnú cestu cez scenické horské cesty. Budete mať príležitosť obdivovať impozantné panorámy, malebné dedinky a prírodu v celej jej nádhere.</p><p>Naša trasa je starostlivo zvolená tak, aby ponúkala pestrosť zážitkov pre všetkých. Od nenáročných prechádzok s výhľadmi na vodopády a jazerá po náročnejšie túry, ktoré smerujú k najvyšším štítom Tatier - všetko je na dosah ruky.</p><p>Nezabudnite si so sebou vziať foťák, pretože vás čakajú fotografické okamihy, ktoré budete chcieť zachytiť a zachovať navždy.</p><p>Pripojte sa k nám na tomto dobrodružstve v Tatrách a zažite krásy, ktoré vám vyčaria úsmev na tvári. Tešíme sa na to, že vám predvedieme krásy tejto novej destinácie a poskytneme vám nezabudnuteľné zážitky z výletu do Vysokých Tatier.</p>','2023-09-12',1,'2023-09-14 20:54:58','2023-09-30 20:15:44'),(2,'Spolupráca s SAD Poprad','spolupraca-s-sad-poprad','/DZILpRTdk4Y91s9uRiNInrd3deNKT3-metabWhkMDAyLmpwZw==-.webp','<p>S hrdosťou oznamujeme vzrušujúcu novinku v živote našej autobusovej spoločnosti! Naša firma sa teší na úzku spoluprácu so spoločnosťou SAD Poprad, pionierom v oblasti dopravy, ktorá nám predstaví revolučné elektronické systémy na vydávanie lístkov.</p><p>SAD Poprad nám prináša nejen bohatú históriu v autobusovej doprave, ale aj inovačný prístup k moderným technológiám. S ich pomocou plánujeme zaviesť efektívny a bezpečný systém elektronických lístkov, ktorý zjednoduší procesy pre našich cestujúcich.</p><p>Táto moderná technológia umožní našim zákazníkom pohodlné zakúpenie lístkov online, sledovanie aktuálneho stavu svojho spoja a získať informácie o svojej ceste kedykoľvek a kdekoľvek. Elektronické lístky prinesú nielen ekologické výhody, ale aj pohodlie a rýchlosť využívania našich služieb.</p><p>Sme presvedčení, že táto spolupráca nám otvára dvere k lepšej budúcnosti pre našich cestujúcich. Vítame túto novú éru elektronických lístkov so SAD Poprad a tešíme sa na to, ako spoločne posúvame naše služby na vyššiu úroveň pohodlia a efektivity. Ďakujeme za dôveru a veríme, že spolu dosiahneme nové výšky v poskytovaní prepravy.</p>','2023-09-13',1,'2023-09-14 20:55:28','2023-09-30 20:15:54'),(4,'10 nových SMART autobusov','10-novych-smart-autobusov','/U13LTKHXeCasFUORvb5ZK0XZP5uEPr-metaSU1HXzc5NDEuanBn-.webp','<p>Spoločnosť Freibus Slovakia s radosťou oznamuje spoluprácu s nemeckou spoločnosťou SmartBus. Dlhodobý líder v smart vozidlách nám poskytol 10 50-miestnych vozov s plne inteligentným vybavením. Autobusy disponujú WiFi prístupovým bodom, inteligentnou klimatizáciou, osvetlením, integrovanými televíziami a internetovým overovaním lístkov.</p><p>Vozidlá sú plne elektrické, pričom dojazd ich batérie je 500km. To nám umožní poskytnúť Vám čo najpohodlnejšiu cestu bez akýchkoľvek obmedzení.</p><p>Prvé tesovanie vozidiel prebehne na týchto zájazdoch:</p><ol><li>Berlín - mesto kultúry</li><li>Krakow - mesto budúcnosti</li></ol><p>Už sa na Vás tešíme!</p>','2023-09-16',1,'2023-09-16 22:35:15','2023-09-30 20:16:09');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,'Benjamín Morozov','benjaminmorozov@gmail.com','Skvelá služba, úžasné destinácia, perfektný personál. Odporúčam!','2023-10-02 18:23:11'),(2,'Adam Hruška','benjaminmorozov@gmail.com','Milujem Freibus!','2023-10-02 18:30:13');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web','2023-09-20 06:04:56','2023-09-20 06:04:56');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'accentColour','#e36e34'),(3,'secondaryColour','#1fa7d9'),(4,'modifierColour','#b0572a'),(5,'secondaryModifierColour','#126482');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socials`
--

DROP TABLE IF EXISTS `socials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `socials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socials`
--

LOCK TABLES `socials` WRITE;
/*!40000 ALTER TABLE `socials` DISABLE KEYS */;
INSERT INTO `socials` VALUES (2,'facebook','https://www.facebook.com/profile.php?id=100038883616884');
/*!40000 ALTER TABLE `socials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `text_widgets`
--

DROP TABLE IF EXISTS `text_widgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `text_widgets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order` int NOT NULL DEFAULT '1',
  `title` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `text_widgets`
--

LOCK TABLES `text_widgets` WRITE;
/*!40000 ALTER TABLE `text_widgets` DISABLE KEYS */;
INSERT INTO `text_widgets` VALUES (1,1,'O nás',NULL,'Freibus SLOVAKIA, s.r.o. pôsobí na trhu cestnej dopravy už od roku 1994. Zakladateľom firmy je živnostník  Miroslav Freivald.',1,'/about','2023-09-24 18:40:24','2023-09-30 20:39:42');
/*!40000 ALTER TABLE `text_widgets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tours`
--

DROP TABLE IF EXISTS `tours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tours` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priceadults` decimal(8,2) NOT NULL,
  `pricestudents` decimal(8,2) NOT NULL,
  `pricechildren` decimal(8,2) NOT NULL,
  `places` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` json NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tours`
--

LOCK TABLES `tours` WRITE;
/*!40000 ALTER TABLE `tours` DISABLE KEYS */;
INSERT INTO `tours` VALUES (1,'Pražský výlet','prazsky-vylet',30.00,20.00,10.00,'Pražská katedrála, Karlov most, Pražské námestie, Pražský hrad','[\"f5OsD6g0RI0cJe38rq9Ns2oYC2ydgs-metaODRkNDQ3NDAtZjU4NS0xMWU4LWI1N2EtMDI0MmFjMTEwMDA2LmpwZw==-.jpg\", \"XXlmxS2RviggqADjMsS8CFA3qfpPTU-metaUHJhZ3VlLWJhbmtzLVZsdGF2YS1SaXZlci5qcGc=-.jpg\", \"xog00UlaW1umoaWdkaI0VCIglcURzt-metaQ2hhcmxlcy1CcmlkZ2UtVmx0YXZhLVJpdmVyLVByYWd1ZS5qcGc=-.jpg\", \"76pNWu2Ep57SYp2VUpRZecI8wCm3CX-metaMjEyMDNkY2UtZmVlYi00MGYzLThjOTMtZmMxYTk4Zjc1NDlhLmpwZw==-.jpg\"]','<p>Vitajte na stránke nášho nezabudnuteľného \'Pražského výletu\'! 🏰🇨🇿 Zážitok plný histórie, kultúry a krásy českého hlavného mesta čaká na vás. Už teraz si zabezpečte svoje miesto na tomto úžasnom dobrodružstve! 🌆</p><p>V cene zahrnuté:<br>🔵 Prehliadka Pražského hradu<br>🔵 Prochádzka po Malej Strane<br>🔵 Návšteva Karlovho mosta<br>🔵 Historické reštaurácie s tradičnou českou kuchyňou</p><p>Nemáme pochybnosti, že tento výlet vám zostane v pamäti navždy. Nechajte sa unášať krásou Prahy a rezervujte si svoje miesto ešte dnes! 🌟 #PražskýVýlet #NeskutočnáPraha #DovolenkaVStrednejEurópe</p>','2024-03-06','2023-09-24 22:08:54','2023-10-02 14:11:51'),(2,'Viedenská káva','viedenska-kava',50.00,20.00,5.00,'Dóm svätého Štefana, Zámok Schönbrunn, Vienna Operahouse, St. Charles\'s Church','[\"OwlcsprPDtG1uMd0lW9Zfi8iwjiIUL-metadGh1bWJfNTM4N19kZWZhdWx0X2hlYWRlcl9iaWcuanBlZw==-.jpg\"]','<p>Vitajte na našom \'Viedenskom kávovom\' dobrodružstve! ☕🍰 Už ste niekedy snívali o tom, že si vychutnáte pravú viedenskú kávu v historickej kaviarni, obklopení eleganciou Viedne? Teraz máte príležitosť túto skutočnosť premeniť na realitu. Rezervujte si svoje miesto na tejto kávovej ceste ešte dnes! 🏰</p><p>Čo zahrňuje naša ponuka:<br>🔷 Návšteva slávnych viedenských kaviarní<br>🔷 Degustácia tradičných viedenských dezertov<br>🔷 Prehliadka historických pamiatok a múzeí<br>🔷 Odborné vedenie a interpretácia viedenskej kávovej kultúry</p><p>Staňte sa súčasťou tejto exkluzívnej cesty do sveta viedenskej kávy a kultúry. Už teraz si zarezervujte svoje miesto a pripravte sa na nezabudnuteľné chuťové zážitky v srdci Viedne! ☕🏛️ #ViedenskáKáva #KávaAVídeň #ChuťováExkurzia</p>','2023-10-18','2023-09-24 22:32:01','2023-09-29 14:18:26'),(3,'Štrasburská brána','strasburksa-brana',50.00,20.00,5.00,'Dóm svätého Štefana, Zámok Schönbrunn, Vienna Operahouse, St. Charles\'s Church','[\"OwlcsprPDtG1uMd0lW9Zfi8iwjiIUL-metadGh1bWJfNTM4N19kZWZhdWx0X2hlYWRlcl9iaWcuanBlZw==-.jpg\", \"Jhe4Jq3XfhbdeNkdT28DJiVWvRB5Yy-metadmllbm5hLWF1c3RyaWEtVklFTk5BVEcwNjIxLWVjYjBlZTkyNmMyZDQ5YzRiY2U2MTBkYjU5NGY3NDA1LmpwZw==-.jpg\"]','<p>Vitajte na našom \'Viedenskom kávovom\' dobrodružstve! ☕? Už ste niekedy snívali o tom, že si vychutnáte pravú viedenskú kávu v historickej kaviarni, obklopení eleganciou Viedne? Teraz máte príležitosť túto skutočnosť premeniť na realitu. Rezervujte si svoje miesto na tejto kávovej ceste ešte dnes! ?</p><p>Čo zahrňuje naša ponuka:<br>? Návšteva slávnych viedenských kaviarní<br>? Degustácia tradičných viedenských dezertov<br>? Prehliadka historických pamiatok a múzeí<br>? Odborné vedenie a interpretácia viedenskej kávovej kultúry</p><p>Staňte sa súčasťou tejto exkluzívnej cesty do sveta viedenskej kávy a kultúry. Už teraz si zarezervujte svoje miesto a pripravte sa na nezabudnuteľné chuťové zážitky v srdci Viedne! ☕?️ #ViedenskáKáva #KávaAVídeň #ChuťováExkurzia</p>','2023-10-26','2023-09-24 22:32:01','2023-09-29 14:23:30'),(4,'Varšavské tobogány','varsavske-tobogany',50.00,20.00,5.00,'Galéria Zachęta, Łazienki Królewskie, Staromestské námestie vo Varšave, Warszawianka Water Park','[\"/9goBlgvkzIXCkkuAuXtnTIzNrn1v2G-metaxYFhemllbmtpLUtyw7NsZXdza2llLVBhxYJhYy1uYS1XeXNwaWVfZm90Li16LWFyY2hpd3VtLVdhcnN6YXdza2llai1Pcmdhbml6YWNqaS1UdXJ5c3R5Y3puZWouanBn-.webp\", \"/Up4F13Td1hilPacEH9sRELZBfxFNwi-metaMDkuMTUuMjAyM18xMC41MS4zMS5qcGc=-.webp\", \"/TblWJfLpnFrGGTcxe3EVbrG5O7VBL5-metaMTY1NTg0NDg5ODU4OC5qcGc=-.webp\"]','<p>Víta vás náš nezabudnuteľný zážitok - \'Varšavské tobogány\'! 🎢🇵🇱 Pripravte sa na adrenalínovú jazdu, ktorá vás dostane na výšky. Teraz máte jedinečnú príležitosť zabezpečiť si miesto na túto vzrušujúcu dovolenku! 🌆</p><p>Čo môžete očakávať:<br>🔵 Nekonečná zábava na tobogánoch<br>🔵 Sledovanie nádherných výhľadov na mesto<br>🔵 Výborné stravovanie a občerstvenie<br>🔵 Skvelé spoločenské aktivity pre všetky vekové kategórie</p><p>Nemôžeme sa dočkať, až vás privítame na tejto úžasnej dovolenke plnej vzrušenia a zábavy. Zarezervujte si svoje miesto ešte dnes a pripravte sa na nezabudnuteľný zážitok vo Varšave! 🌟 #VaršavskéTobogány #AdrenalínováDovolenka #ZábavaVVaršave</p>','2023-11-06','2023-09-24 22:32:01','2023-10-02 21:16:22'),(5,'Bratislavský most','bratislavsky-most',30.00,20.00,10.00,'Pražská katedrála, Karlov most, Pražské námestie, Pražský hrad','[\"xog00UlaW1umoaWdkaI0VCIglcURzt-metaQ2hhcmxlcy1CcmlkZ2UtVmx0YXZhLVJpdmVyLVByYWd1ZS5qcGc=-.jpg\", \"76pNWu2Ep57SYp2VUpRZecI8wCm3CX-metaMjEyMDNkY2UtZmVlYi00MGYzLThjOTMtZmMxYTk4Zjc1NDlhLmpwZw==-.jpg\"]','<p>V cene zahrnuté:<br>🔵 Prehliadka Pražského hradu<br>🔵 Prochádzka po Malej Strane<br>🔵 Návšteva Karlovho mosta<br>🔵 Historické reštaurácie s tradičnou českou kuchyňou</p><p>Nemáme pochybnosti, že tento výlet vám zostane v pamäti navždy. Nechajte sa unášať krásou Prahy a rezervujte si svoje miesto ešte dnes! 🌟 #PražskýVýlet #NeskutočnáPraha #DovolenkaVStrednejEurópe</p>','2023-10-23','2023-09-24 22:08:54','2023-09-29 13:43:44'),(6,'Popradská nemocnica','popradska-nemocnica',30.00,20.00,10.00,'Nemocnica Poprad, Forum Poprad, Súkromná stredná odborná škola Poprad, AquaCity Poprad','[\"/o67qUEQqYn6JeE2CqN8A7Y3aVDvGDL-metaVmNob2RfQXF1YUNpdHlfOTAwcHguanBn-.webp\", \"/14GaYhgm9004lsU6nJGCWH76DMTUGt-metaeWFYd0NPdDJ4OGtRa0Y4YjYyNDgwNWFlNWExYjUuanBn-.webp\", \"/0ylYUBzhlrjH4fAu1Tl04AfOAxMnJb-metacG9wcmFkLmpwZw==-.webp\"]','<p>Vitajte na stránke nášho nezabudnuteľného výletu do Popradskej nemocnice! Zážitok plný histórie, kultúry a krásy čaká na vás. Už teraz si zabezpečte svoje miesto na tomto úžasnom dobrodružstve!</p><p>V cene zahrnuté:<br>🔵 Nemocnica Poprad<br>🔵 Forum Poprad<br>🔵 Súkromná stredná odborná škola Poprad<br>🔵 AquaCity Poprad</p><p>Nemáme pochybnosti, že tento výlet vám zostane v pamäti navždy. Nechajte sa unášať krásou Popradu a rezervujte si svoje miesto ešte dnes! 🌟 #Poprad #Surprise #SSOSTA</p>','2023-11-27','2023-09-24 22:08:54','2023-10-02 21:13:53');
/*!40000 ALTER TABLE `tours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'freibus','benjaminmorozov@gmail.com','2023-09-23 21:54:49','$2y$10$t70r8j5AqDPinvRXcYvFvOXHlyEckwvdh4/o38r7yTvhE7Hm40W5a',NULL,'2023-09-14 20:52:23','2023-09-23 19:47:46'),(4,'androgra','andromaticgraphics@gmail.com',NULL,'$2y$10$AaPgd5DqJVKj8L8MwcbxQOKx69F2p6a9bVZ/Cv31p1j/wLWpZRqMW',NULL,'2023-09-19 06:29:52','2023-09-19 06:29:52'),(5,'SSOSTA','mail@stvorka.cloud','2023-10-02 09:38:39','$2y$10$vgUeDZjZcv6xGNwsRAEFjeTmyCr08.6d0c3EH85Z5167lLuaJhEOy',NULL,'2023-10-01 15:53:01','2023-10-02 09:38:39'),(6,'test','test@gmail.com',NULL,'$2y$10$mbI7oBbibbvWOzEavDIl0OZDHO9Be6.paXz.L1gd2yRfyBn.7Kw6G',NULL,'2023-10-02 18:17:33','2023-10-02 18:17:33'),(7,'test','qknzuwpdbmbgqsrydo@cazlv.com','2023-10-02 18:19:19','$2y$10$KeWmatvw8zindm2m/npQUOubR2udOK1KCn5WdlGcikd3bbGd2YGdu',NULL,'2023-10-02 18:19:02','2023-10-02 18:19:19'),(8,'test','yagiresrinclovvwas@cazlp.com','2023-10-02 20:31:32','$2y$10$HrG9sP.bApcDPPH1FBk3e.s7d0UnDL5mprO5URYrBQ4IN1H7NcHt6',NULL,'2023-10-02 20:31:18','2023-10-02 20:31:32');
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

-- Dump completed on 2023-10-10 18:09:11
