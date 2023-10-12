/*
SQLyog Enterprise - MySQL GUI v8.2 RC2
MySQL - 5.5.5-10.4.21-MariaDB-log : Database - db_cinema
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_cinema` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_cinema`;

/*Table structure for table `category_name` */

DROP TABLE IF EXISTS `category_name`;

CREATE TABLE `category_name` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) DEFAULT NULL,
  `create_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `category_name` */

insert  into `category_name`(`id`,`name`,`create_date`) values (1,'Horor','2023-10-04 10:17:57'),(2,'Drama','2023-10-04 10:18:03'),(3,'Musikal','2023-10-04 10:18:08');

/*Table structure for table `count_videos` */

DROP TABLE IF EXISTS `count_videos`;

CREATE TABLE `count_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_video` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `count_videos` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `role` varchar(21) DEFAULT NULL,
  `noId` varchar(21) DEFAULT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `username` varchar(33) DEFAULT NULL,
  `password` varchar(33) DEFAULT NULL,
  `datetime` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`role`,`noId`,`nama`,`username`,`password`,`datetime`) values (1,'admin','123','Heri','admin','admin',NULL),(2,'uploader','12','Iran','uploader','uploader','0000-00-00 00:00:00'),(3,'viewer','1','heri','viewer','viewer','2023-09-01 14:48:12'),(4,'superadmin','0410117304','yayan','0410117304','0410117304','2023-09-07 14:10:36');

/*Table structure for table `video_uploads` */

DROP TABLE IF EXISTS `video_uploads`;

CREATE TABLE `video_uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_img` text DEFAULT NULL,
  `url_video` text DEFAULT NULL,
  `cast` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date_create` datetime DEFAULT current_timestamp(),
  `id_category` int(11) DEFAULT NULL,
  `visibility` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `video_uploads` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
