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

/*Table structure for table `productos_pedidos` */

DROP TABLE IF EXISTS `productos_pedidos`;

CREATE TABLE `productos_pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) DEFAULT NULL,
  `cod_pedido` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

/*Data for the table `productos_pedidos` */

insert  into `productos_pedidos`(`id`,`id_producto`,`cod_pedido`,`cantidad`) values 
(46,NULL,'COD_PEDRtuCp61',1),
(47,NULL,'COD_PEDTftEuD2',1),
(48,NULL,'COD_PEDTdBLzX3',1),
(49,NULL,'COD_PED1OhFx74',1),
(50,NULL,'COD_PEDGAy3RH5',1),
(51,NULL,'COD_PED5JWLvR6',1),
(52,NULL,'COD_PEDwXm6HO7',1),
(53,7,'COD_PEDKAc4sR8',1),
(54,3,'COD_PED1uvqhA9',1),
(55,1,'COD_PED1uvqhA9',1),
(56,7,'COD_PED1uvqhA9',3),
(57,1,'COD_PEDeNHGlS10',1),
(58,3,'COD_PEDeNHGlS10',2),
(59,7,'COD_PEDeNHGlS10',3);

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
  `btn_bgcolor` varchar(20) DEFAULT NULL,
  `btn_bordercolor` varchar(20) DEFAULT NULL,
  `paypal` varchar(255) DEFAULT NULL,
  `pr900` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `web_navbar` */

insert  into `web_navbar`(`id`,`nombre`,`logo`,`op1`,`op2`,`op3`,`op31`,`op32`,`op33`,`bg_color`,`fuente`,`op4`,`size`,`search`,`nombre_web`,`btn_bgcolor`,`btn_bordercolor`,`paypal`,`pr900`) values 
(1,'JeffPi','images/moto.png','Inicio','Productos','¿Quienes somos?','Historia','Contacto','Nuestros Proveedores','#e3f2fd','hughs','Repuestos 100% Garantizados',18,'Buscar...','MotoPartes - JeffPi','#e3f2fd','#007BFF','leo_empresas@gmail.com',11);

/*Table structure for table `web_pagos` */

DROP TABLE IF EXISTS `web_pagos`;

CREATE TABLE `web_pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_pedido` varchar(100) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `fecha_pago` datetime DEFAULT NULL,
  `fecha_pedido` datetime DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `estado_pedido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `web_pagos` */

insert  into `web_pagos`(`id`,`cod_pedido`,`monto`,`fecha_pago`,`fecha_pedido`,`id_usuario`,`estado_pedido`) values 
(11,'COD_PEDKAc4sR8',33,'2019-05-20 01:47:09','2019-05-20 01:46:18',1,2),
(12,'COD_PED1uvqhA9',1299,'2019-05-20 01:48:32','2019-05-20 01:47:34',1,1),
(13,'COD_PEDeNHGlS10',1499,'2019-05-20 08:33:40','2019-05-20 08:33:13',1,1);

/*Table structure for table `web_pedidos` */

DROP TABLE IF EXISTS `web_pedidos`;

CREATE TABLE `web_pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(255) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `celular` double DEFAULT NULL,
  `cedula` double DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `cod_pedido` varchar(200) DEFAULT NULL,
  `fecha_pedido` datetime DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `web_pedidos` */

insert  into `web_pedidos`(`id`,`correo`,`nombre`,`celular`,`cedula`,`direccion`,`departamento`,`ciudad`,`monto`,`cod_pedido`,`fecha_pedido`,`id_usuario`) values 
(33,'jeffreydiazaya@outlook.com','Jeff Diaz',3134863691,1003810787,'Calle 71 A # 1 b 33','Huila','Neiva',33,'COD_PEDRtuCp61','2019-05-20 01:42:47',1),
(34,'jeffreydiazaya@outlook.com','Jeff Diaz',3134863691,1003810787,'Calle 71 A # 1 b 33','Huila','Neiva',33,'COD_PEDTftEuD2','2019-05-20 01:42:55',1),
(35,'jeffreydiazaya@outlook.com','Jeff Diaz',3134863691,1003810787,'Calle 71 A # 1 b 33','Huila','Neiva',33,'COD_PEDTdBLzX3','2019-05-20 01:43:01',1),
(36,'jeffreydiazaya@outlook.com','Jeff Diaz',3134863691,1003810787,'Calle 71 A # 1 b 33','Huila','Neiva',33,'COD_PED1OhFx74','2019-05-20 01:43:09',1),
(37,'jeffreydiazaya@outlook.com','Jeff Diaz',3134863691,1003810787,'Calle 71 A # 1 b 33','Huila','Neiva',33,'COD_PEDGAy3RH5','2019-05-20 01:43:13',1),
(38,'jeffreydiazaya@outlook.com','Jeff Diaz',3134863691,1003810787,'Calle 71 A # 1 b 33','Huila','Neiva',33,'COD_PED5JWLvR6','2019-05-20 01:43:23',1),
(39,'jeffreydiazaya@outlook.com','Jeff Diaz',3134863691,1003810787,'Calle 71 A # 1 b 33','Huila','Neiva',33,'COD_PEDwXm6HO7','2019-05-20 01:44:08',1),
(40,'support@cathefitness.com','Jeff Diaz',3134863691,1003810787,'Calle 71 A # 1 b 33','Huila','Neiva',33,'COD_PEDKAc4sR8','2019-05-20 01:46:18',1),
(41,'jeffreydiazaya@outlook.com','Jeff Diaz',3134863691,1003810787,'Calle 71 A # 1 b 33','Huila','Neiva',1299,'COD_PED1uvqhA9','2019-05-20 01:47:34',1),
(42,'jeffreydiazaya@outlook.com','Novelly',3134863691,1003810787,'Calle 71 A # 1 b 33','Huila','Neiva',1499,'COD_PEDeNHGlS10','2019-05-20 08:33:13',1);

/*Table structure for table `web_productos` */

DROP TABLE IF EXISTS `web_productos`;

CREATE TABLE `web_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `parte` varchar(100) DEFAULT NULL,
  `ubicacion` varchar(100) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `referencia` varchar(50) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `web_productos` */

insert  into `web_productos`(`id`,`nombre`,`descripcion`,`parte`,`ubicacion`,`precio`,`marca`,`referencia`,`year`,`color`,`img`) values 
(1,'ninja','chasis de Ninja 300 kawasaki','chasis','centro',1000,'Kawasaki','Jdka11',2016,'negro','images/p2.jpg'),
(3,'Farola MT-09','Farola MT-09 Negra','Farola','Frente',200,'Yamaha','qqpaaa',2019,NULL,'/images/093abcaa41ef046757d9d4c54ee6fb6c.jpg'),
(7,'aa','aaa','aa','aa',33,'aa','aa',33,'aa','/images/53eec17ef15c60983f25a4ab7b3d9524.jpg');

/*Table structure for table `web_users` */

DROP TABLE IF EXISTS `web_users`;

CREATE TABLE `web_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `rol` varchar(15) DEFAULT NULL,
  `security` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `web_users` */

insert  into `web_users`(`id`,`user`,`pass`,`rol`,`security`) values 
(1,'jeff','456','Admin','789');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
