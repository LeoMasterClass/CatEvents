-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour catevents
CREATE DATABASE IF NOT EXISTS `catevents` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `catevents`;

-- Listage de la structure de la table catevents. articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `title_desc` varchar(50) NOT NULL,
  `extract` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_pres` varchar(255) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Listage des données de la table catevents.articles : ~5 rows (environ)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `title_desc`, `extract`, `content`, `image`, `image_pres`, `alt`, `created_at`) VALUES
	(1, 'DIY - Un bouquet pour maman', 'Un bouquet pour maman', 'Comme tous les ans, il est temps de célébrer toutes les mamans du monde ! Pour l’occasion voici un petit DIY qui ne vous coûtera presque rien et fera plaisir à tous les coups !', 'Comme chaque année, la fête des grand-mères arrive ce Dimanche 1er Mars.\r\n\r\nPour l’occasion, je vous propose un petit DIY à faire en dernière minute afin de créer une jolie cage en papier ornée de fleurs à offrir à votre Mamie, grand-mère, Oma ou quel que soit son joli surnom. Cette activité coûte moins de cinq euros, ne nécessite que du matériel que vous avez déjà chez-vous, ou presque et vous donnera le plaisir de dire« c’est nous qui l’avons fait ! » ', 'app\\public\\img\\DIY\\2_DIY-Un_bouquet_pour_maman\\Bannière_-_Un_bouquet_pour_maman_avec_texte.jpg', 'app\\public\\img\\DIY\\2_DIY-Un_bouquet_pour_maman\\Carre.jpg', 'Bouquet en papier', '2020-05-13 22:27:24'),
	(2, 'DIY - Sac Lapin', 'Sac Lapin', 'En ce mois de janvier bien gris, ajoutez un peu de couleur à vos événements avec cette collection arrivée tout droit de la ménagerie !', 'En ce mois de janvier bien gris, ajoutez un peu de couleur à vos événements avec cette collection arrivée tout droit de la ménagerie ! Que vous soyez plutôt traditionnel avec le bleu et rouge ou plutôt girly avec des nuances de rose, vous enchanterez vos invités avec ce joli thème coloré qui regroupe à la fois le cirque et la fête foraine ! Alors n’oubliez pas les ballons et les pop-corns car la représentation va bientôt commencer et elle promet d’être inoubliable ! Bien sûr, chacune de mes créations est personnalisable selon vos goûts.', 'app\\public\\img\\DIY\\1_DIY-Sac_Lapin\\Banniere-Sac_Lapin_texte.jpg', 'app\\public\\img\\DIY\\1_DIY-Sac_Lapin\\Carre.jpg', 'Sac lapin en papier', '2020-05-13 22:27:24'),
	(3, 'DIY - Les citrouilles de papier', 'Les citrouilles de papier', 'Choisissez le thème qui vous plaît & laissez-vous surprendre !', 'Choisissez le thème qui vous plaît & laissez-vous surprendre !Choisissez le thème qui vous plaît & laissez-vous surprendre !Choisissez le thème qui vous plaît & laissez-vous surprendre !Choisissez le thème qui vous plaît & laissez-vous surprendre !Choisissez le thème qui vous plaît & laissez-vous surprendre !', 'app\\public\\img\\DIY\\3_DIY-Les_citrouilles_de_papier\\Banniere-Les_citrouilles_de_papier_avec_texte.jpg', 'app\\public\\img\\DIY\\3_DIY-Les_citrouilles_de_papier\\Carre.jpg', 'Citrouilles en papier', '2020-05-13 22:27:25'),
	(4, 'Une cage illumin&eacute;e pour mamie', 'Une cage illumin&eacute;e pour mamie', 'Une jolie cage qui brille', 'Voici la pr&eacute;sentation de mon DIY', 'app/public/img/image/banniere_une_cage_pour_mamie_avec_texte.jpg', 'app/public/img/image/carre.jpg', 'Cage Illumin&eacute;e en papier', '2020-05-13 22:27:25');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Listage de la structure de la table catevents. articles_ventes
CREATE TABLE IF NOT EXISTS `articles_ventes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL,
  `alt` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table catevents.articles_ventes : ~3 rows (environ)
/*!40000 ALTER TABLE `articles_ventes` DISABLE KEYS */;
INSERT INTO `articles_ventes` (`id`, `image`, `title`, `prix`, `desc`, `id_category`, `alt`) VALUES
	(1, 'app\\public\\img\\image\\IMG_20190602_085729.jpg', 'Paille Superman', 5, 'Une super paille superman', 0, 'Paille Superman'),
	(2, 'app\\public\\img\\image\\IMG_20190410_165528bis.jpg', 'Lego Papier', 5, 'Super lego en papier', 0, 'Lego Papier'),
	(3, 'app\\public\\img\\image\\IMG_20190530_213623_886.jpg\r\n', 'Guirlande Superman', 10, 'Des guirllandes superman', 0, 'Guirlande Superman');
/*!40000 ALTER TABLE `articles_ventes` ENABLE KEYS */;

-- Listage de la structure de la table catevents. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table catevents.categorie : ~3 rows (environ)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`id`, `title`, `image`) VALUES
	(1, 'guirllande', 'app\\public\\img\\image\\IMG_20190530_213623_886.jpg'),
	(2, 'decoration_table', 'app\\public\\img\\image\\IMG_20190618_211254_053.jpg'),
	(3, 'paille', 'app\\public\\img\\image\\IMG_20190602_085729.jpg');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table catevents. images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '0',
  `alt` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table catevents.images : ~1 rows (environ)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `name`, `img`, `alt`) VALUES
	(1, 'photo-quisje', 'app/public/img/image/presentation.jpg', 'hpoto julia');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Listage de la structure de la table catevents. inspirations
CREATE TABLE IF NOT EXISTS `inspirations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `alt` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Listage des données de la table catevents.inspirations : ~9 rows (environ)
/*!40000 ALTER TABLE `inspirations` DISABLE KEYS */;
INSERT INTO `inspirations` (`id`, `image`, `description`, `alt`) VALUES
	(1, 'app/public/img/inspiration/image1.jpg', '0', 'image 1'),
	(2, 'app/public/img/inspiration/image2.png', '0', 'image 2'),
	(3, 'app/public/img/inspiration/image3.jpg', '0', 'image 3'),
	(4, 'app/public/img/inspiration/image4.jpg', '0', 'image 4'),
	(5, 'app/public/img/inspiration/image5.jpg', '0', 'image 5'),
	(6, 'app/public/img/inspiration/image6.jpg', '0', 'image 6'),
	(7, 'app/public/img/inspiration/image7.jpg', '0', 'image 7'),
	(8, 'app/public/img/inspiration/image8.jpg', '0', 'image 8'),
	(9, 'app/public/img/inspiration/image2.png', '0', 'image 2');
/*!40000 ALTER TABLE `inspirations` ENABLE KEYS */;

-- Listage de la structure de la table catevents. post_contact
CREATE TABLE IF NOT EXISTS `post_contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- Listage des données de la table catevents.post_contact : ~9 rows (environ)
/*!40000 ALTER TABLE `post_contact` DISABLE KEYS */;
INSERT INTO `post_contact` (`id`, `name`, `email`, `objet`, `content`, `created_at`) VALUES
	(38, 'leo', 'leolorin9@gmail.com', 'leo', 'leo', '2020-07-13 19:18:37');
/*!40000 ALTER TABLE `post_contact` ENABLE KEYS */;

-- Listage de la structure de la table catevents. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) DEFAULT '0',
  `adress` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- Listage des données de la table catevents.users : ~2 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `firstName`, `name`, `password`, `admin`, `adress`, `postal_code`, `created_at`) VALUES
	(1, 'leo@leo.com', 'lorin', 'leo', '$2y$10$enAQSSJm16YsGDAZxy7Zpuug4BFKF23Zh9s3kZOYh3ha/AC8TF73C', 1, NULL, NULL, '2020-05-20 17:20:04'),
	(67, 'admin@admin.fr', 'Test', 'Test', '$2y$10$ireziaRLnOSCRqCOYW3RVuzMq24zz8m4ew3diUCipi0zWj00.IGmC', 1, NULL, NULL, '2020-06-28 19:00:59');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
