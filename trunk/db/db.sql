/*
SQLyog Community v11.28 (64 bit)
MySQL - 5.6.16 : Database - gogril
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gogril` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gogril`;

/*Table structure for table `gogirl_banner` */

DROP TABLE IF EXISTS `gogirl_banner`;

CREATE TABLE `gogirl_banner` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `position` int(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `n_status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gogirl_banner` */

/*Table structure for table `gogirl_comment` */

DROP TABLE IF EXISTS `gogirl_comment`;

CREATE TABLE `gogirl_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_content` int(10) DEFAULT NULL,
  `comment` text,
  `date` datetime DEFAULT NULL,
  `n_status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gogirl_comment` */

/*Table structure for table `gogirl_content` */

DROP TABLE IF EXISTS `gogirl_content`;

CREATE TABLE `gogirl_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `content` text,
  `images` varchar(100) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `type` int(1) DEFAULT NULL COMMENT '1:Fashion Talk,2:Event Updates,3:beuty box,4:DIY project,5:love and life,6:quiz',
  `date` datetime DEFAULT NULL,
  `like_count` int(10) DEFAULT NULL,
  `view_count` int(10) DEFAULT NULL,
  `share_count` int(10) DEFAULT NULL,
  `n_status` int(1) DEFAULT NULL,
  `winner` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gogirl_content` */

/*Table structure for table `gogirl_user` */

DROP TABLE IF EXISTS `gogirl_user`;

CREATE TABLE `gogirl_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `address` text,
  `phone` char(20) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `n_status` int(1) DEFAULT NULL,
  `referal` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gogirl_user` */

/*Table structure for table `gogril_beauty` */

DROP TABLE IF EXISTS `gogril_beauty`;

CREATE TABLE `gogril_beauty` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `content` text,
  `like_count` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `n_status` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gogril_beauty` */

/*Table structure for table `gogril_diy` */

DROP TABLE IF EXISTS `gogril_diy`;

CREATE TABLE `gogril_diy` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `content` text,
  `images` varchar(100) DEFAULT NULL,
  `like_count` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `n_status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gogril_diy` */

/*Table structure for table `gogril_event` */

DROP TABLE IF EXISTS `gogril_event`;

CREATE TABLE `gogril_event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `content` text,
  `images` varchar(100) DEFAULT NULL,
  `like_count` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `n_status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gogril_event` */

/*Table structure for table `gogril_fashion` */

DROP TABLE IF EXISTS `gogril_fashion`;

CREATE TABLE `gogril_fashion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `content` text,
  `like_count` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `n_status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gogril_fashion` */

/*Table structure for table `gogril_love_life` */

DROP TABLE IF EXISTS `gogril_love_life`;

CREATE TABLE `gogril_love_life` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `content` text,
  `images` varchar(100) DEFAULT NULL,
  `like_count` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `n_status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gogril_love_life` */

/*Table structure for table `gogril_quiz` */

DROP TABLE IF EXISTS `gogril_quiz`;

CREATE TABLE `gogril_quiz` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `content` text,
  `images` varchar(100) DEFAULT NULL,
  `like_count` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `n_status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gogril_quiz` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
