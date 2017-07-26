-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for go_girl
CREATE DATABASE IF NOT EXISTS `go_girl` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `go_girl`;


-- Dumping structure for table go_girl.about
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cerita` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table go_girl.about: ~1 rows (approximately)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` (`id`, `cerita`) VALUES
	(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;


-- Dumping structure for table go_girl.banner
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `images` varchar(100) DEFAULT NULL,
  `link` char(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `n_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table go_girl.banner: ~2 rows (approximately)
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` (`id`, `images`, `link`, `date`, `n_status`) VALUES
	(1, 'slide1.jpg', 'www.google.com', '2015-04-13 16:26:56', 1),
	(2, 'slide2.jpg', 'www.facebook.com', '2015-04-13 16:26:56', 1);
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;


-- Dumping structure for table go_girl.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` char(50) DEFAULT NULL,
  `view_count` int(11) DEFAULT '0',
  `n_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table go_girl.category: ~5 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `category`, `view_count`, `n_status`) VALUES
	(1, 'style', 1, 1),
	(2, 'events', 0, 1),
	(3, 'Skin 101', 0, 1),
	(4, 'D.I.Y', 0, 1),
	(5, 'Quiz', 0, 1);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Dumping structure for table go_girl.comment
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `id_cerita` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `n_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table go_girl.comment: ~7 rows (approximately)
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` (`id`, `name`, `email`, `comment`, `id_cerita`, `date`, `n_status`) VALUES
	(1, 'imam', 'imam.maulana2011@gmail.com', 'coba jadi nonton ga', 4, '2015-04-15 17:10:12', 1),
	(2, 'asdas', 'asdas', 'asdasd', 3, '2015-04-15 17:10:12', 1),
	(9, 'asdas', 'asdas', 'asdasd', 3, '2015-04-15 17:10:13', 1),
	(10, 'asdas', 'asdas', 'asdasd', 3, '2015-04-15 17:10:14', 1),
	(11, 'sad', 'sad', 'asd', 3, '2015-04-15 17:10:49', 1),
	(12, 'ceki', 'ceki', 'ngga jadi ikan sakit', 4, '2015-04-15 17:14:05', 1),
	(13, 'boni', 'boni', 'cobaken dei', 4, '2015-04-16 09:16:53', 1);
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;


-- Dumping structure for table go_girl.regalfa
CREATE TABLE IF NOT EXISTS `regalfa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telp` char(50) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `n_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table go_girl.regalfa: ~4 rows (approximately)
/*!40000 ALTER TABLE `regalfa` DISABLE KEYS */;
INSERT INTO `regalfa` (`id`, `nama`, `alamat`, `telp`, `email`, `n_status`) VALUES
	(1, 'asd', 'asd', '32423', 'asdsa@kaskdas.com', 0),
	(2, 'sd', 'as', '234234', 'admin@binfar-depkes.com', 0),
	(3, 'asdasdasda', 'asd', '213213', 'asdasd@asdas.com', 0),
	(4, 'asd', 'asd', '213', 'sad@asdasdas.com', 0);
/*!40000 ALTER TABLE `regalfa` ENABLE KEYS */;


-- Dumping structure for table go_girl.register
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipe` char(50) DEFAULT NULL,
  `name` char(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `story` text,
  `resume` varchar(100) DEFAULT NULL,
  `avatar` char(50) DEFAULT NULL,
  `n_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table go_girl.register: ~4 rows (approximately)
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` (`id`, `tipe`, `name`, `alamat`, `telp`, `email`, `story`, `resume`, `avatar`, `n_status`) VALUES
	(1, 'a:2:{i:0;s:5:"model";i:1;s:6:"editor";}', 'bang dedy', 'asda', '32423', 'asdsa@kaskdas.com', ' asdasd', 'c2750102e3cec8a16f8c55ac29e588a5.jpg', 'b262a677813966cc63be1008611525e5.jpg', 1),
	(2, 'a:2:{i:0;s:6:"editor";i:1;s:5:"other";}', 'imam', 'sdsad', '213123', 'asdasd@asdas.com', ' asd', '17feef8e9aeab42806acc25258e8b38e.jpg', 'syHmshQp_400x400.jpg', 1),
	(3, 'a:2:{i:0;s:5:"model";i:1;s:6:"editor";}', 'ahmad', 'asdas', '34234', 'admin@binfar-depkes.com', ' asdasdasd', '65a978f363ae4753fad37f23fd3f9587.jpg', 'b262a677813966cc63be1008611525e5.jpg', 1),
	(4, 'a:2:{i:0;s:5:"model";i:1;s:6:"editor";}', 'wahyu', 'asdas', '34234', 'admin@binfar-depkes.com', ' asdasdasd', 'c9b64ab7e62519f5458a18c25fe19ee4.jpg', 'syHmshQp_400x400.jpg', 1);
/*!40000 ALTER TABLE `register` ENABLE KEYS */;


-- Dumping structure for table go_girl.social_member
CREATE TABLE IF NOT EXISTS `social_member` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(46) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `files` varchar(200) DEFAULT NULL,
  `bukti_pembayaran` varchar(200) DEFAULT NULL,
  `username` varchar(46) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `provincy` varchar(70) DEFAULT NULL,
  `city` varchar(110) DEFAULT NULL,
  `sex` varchar(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `phone_number` bigint(15) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `submit_count` int(3) NOT NULL DEFAULT '0',
  `try_to_login` int(11) NOT NULL,
  `salt` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `n_status` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table go_girl.social_member: ~0 rows (approximately)
/*!40000 ALTER TABLE `social_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_member` ENABLE KEYS */;


-- Dumping structure for table go_girl.story_article
CREATE TABLE IF NOT EXISTS `story_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_category` int(10) DEFAULT NULL,
  `title` char(50) DEFAULT NULL,
  `content` text,
  `img` char(200) DEFAULT NULL,
  `img_home` char(200) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `like` int(20) DEFAULT '0',
  `view_count` int(20) DEFAULT '0',
  `id_user` int(20) DEFAULT NULL,
  `n_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Dumping data for table go_girl.story_article: ~29 rows (approximately)
/*!40000 ALTER TABLE `story_article` DISABLE KEYS */;
INSERT INTO `story_article` (`id`, `id_category`, `title`, `content`, `img`, `img_home`, `date`, `like`, `view_count`, `id_user`, `n_status`) VALUES
	(1, 1, 'title1', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium.jpg', NULL, '2015-04-14 15:36:27', 0, 0, 1, 1),
	(2, 1, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', 'medium-4.jpg', '2015-04-14 10:24:12', 2, 0, 2, 1),
	(3, 1, 'title3', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-3.jpg', 'medium-4.jpg', '2015-04-14 15:36:28', 2, 0, 3, 1),
	(4, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-4.jpg', NULL, '2015-04-14 15:36:29', 1, 1, 4, 1),
	(5, 2, 'title1', 'content body 1 ', 'medium.jpg', NULL, '2015-04-14 15:36:27', 1, 0, 1, 1),
	(6, 2, 'titsdas', 'content body 2', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 1, 2, 1),
	(7, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-4.jpg', NULL, '2015-04-14 15:36:29', 0, 1, 4, 1),
	(8, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-4.jpg', NULL, '2015-04-14 15:36:29', 0, 1, 4, 1),
	(9, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 15:36:29', 0, 0, 4, 1),
	(10, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 0, 2, 1),
	(11, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 1, 0, 2, 1),
	(12, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 0, 2, 1),
	(13, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 0, 2, 1),
	(14, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 0, 2, 1),
	(15, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 2, 0, 2, 1),
	(16, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 0, 2, 1),
	(17, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 3, 0, 2, 1),
	(18, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', 'medium-4.jpg', '2015-04-14 10:24:12', 5, 0, 2, 1),
	(19, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 3, 0, 2, 1),
	(22, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 0, 2, 1),
	(23, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 0, 2, 1),
	(24, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 0, 2, 1),
	(25, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 0, 2, 1),
	(26, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 0, 2, 1),
	(27, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 0, 2, 1),
	(28, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 1, 0, 2, 1),
	(29, 5, 'title2', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.', 'medium-2.jpg', NULL, '2015-04-14 10:24:12', 0, 1, 2, 1);
/*!40000 ALTER TABLE `story_article` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
