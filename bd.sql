/*
SQLyog Community v13.1.0 (64 bit)
MySQL - 10.1.38-MariaDB : Database - web
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`web` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `web`;

/*Table structure for table `web_banner` */

DROP TABLE IF EXISTS `web_banner`;

CREATE TABLE `web_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `fuente` varchar(100) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `carru_bgcolor` varchar(20) DEFAULT NULL,
  `carru_bgimg` varchar(255) DEFAULT NULL,
  `card_bgcolor` varchar(20) DEFAULT NULL,
  `btn1` varchar(20) DEFAULT NULL,
  `btn2` varchar(20) DEFAULT NULL,
  `btn_bgcolor` varchar(20) DEFAULT NULL,
  `btn_bordercolor` varchar(20) DEFAULT NULL,
  `btn_fuente` varchar(100) DEFAULT NULL,
  `btn3` varchar(20) DEFAULT NULL,
  `btn4` varchar(20) DEFAULT NULL,
  `color_hf` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `web_banner` */

insert  into `web_banner`(`id`,`titulo`,`fuente`,`color`,`size`,`carru_bgcolor`,`carru_bgimg`,`card_bgcolor`,`btn1`,`btn2`,`btn_bgcolor`,`btn_bordercolor`,`btn_fuente`,`btn3`,`btn4`,`color_hf`) values 
(1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'#e3f2fd','#007BFF',NULL,NULL,'Search',NULL);

/*Table structure for table `web_historia` */

DROP TABLE IF EXISTS `web_historia`;

CREATE TABLE `web_historia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `web_historia` */

/*Table structure for table `web_navbar` */

DROP TABLE IF EXISTS `web_navbar`;

CREATE TABLE `web_navbar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `op1` varchar(20) DEFAULT NULL,
  `op2` varchar(20) DEFAULT NULL,
  `op3` varchar(20) DEFAULT NULL,
  `op31` varchar(20) DEFAULT NULL,
  `op32` varchar(20) DEFAULT NULL,
  `op33` varchar(20) DEFAULT NULL,
  `bg_color` varchar(20) DEFAULT NULL,
  `fuente` varchar(100) DEFAULT NULL,
  `op4` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `search` varchar(50) DEFAULT NULL,
  `nombre_web` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `web_navbar` */

insert  into `web_navbar`(`id`,`nombre`,`logo`,`op1`,`op2`,`op3`,`op31`,`op32`,`op33`,`bg_color`,`fuente`,`op4`,`size`,`search`,`nombre_web`) values 
(1,'JeffPi','images/moto.png','Inicio','Productos','¿Quienes somos?','Historia','Contacto','Nuestros Proveedores','#e3f2fd','hughs','Repuestos 100% Garantizados',18,'Buscar...','MotoPartes - JeffPi');

/*Table structure for table `web_productos` */

DROP TABLE IF EXISTS `web_productos`;

CREATE TABLE `web_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `parte` varchar(100) DEFAULT NULL,
  `ubicacion` varchar(100) DEFAULT NULL,
  `precio` float(11,2) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `referencia` varchar(50) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `web_productos` */

/*Table structure for table `web_users` */

DROP TABLE IF EXISTS `web_users`;

CREATE TABLE `web_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `rol` varchar(15) DEFAULT NULL,
  `security` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `web_users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
