/*
SQLyog Community v12.4.3 (64 bit)
MySQL - 10.1.21-MariaDB : Database - diamond
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`diamond` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `diamond`;

/*Table structure for table `adviser` */

DROP TABLE IF EXISTS `adviser`;

CREATE TABLE `adviser` (
  `id_asesor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_asesor` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_asesor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `adviser` */

insert  into `adviser`(`id_asesor`,`nombre_asesor`) values 
(1,'Omar'),
(2,'David'),
(3,'Fernando');

/*Table structure for table `cities` */

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id_cities` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ciudades` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cities`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cities` */

insert  into `cities`(`id_cities`,`ciudades`) values 
(1,'Mazatlán'),
(2,'Rosario');

/*Table structure for table `colonies` */

DROP TABLE IF EXISTS `colonies`;

CREATE TABLE `colonies` (
  `id_colonies` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `colonia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_colonies`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `colonies` */

insert  into `colonies`(`id_colonies`,`colonia`) values 
(1,'Puesta del Sol'),
(2,'Prados del Sol'),
(3,'Terranova'),
(4,'Alarcon');

/*Table structure for table `commissions` */

DROP TABLE IF EXISTS `commissions`;

CREATE TABLE `commissions` (
  `id_commissions` int(11) NOT NULL AUTO_INCREMENT,
  `comision` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_commissions`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `commissions` */

insert  into `commissions`(`id_commissions`,`comision`) values 
(1,7),
(2,6),
(3,5),
(4,4);

/*Table structure for table `credits` */

DROP TABLE IF EXISTS `credits`;

CREATE TABLE `credits` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `creditos` char(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `credits` */

insert  into `credits`(`id`,`creditos`) values 
(1,'Bancario'),
(2,'Scotiabank'),
(3,'Infonavit'),
(4,'Fovissste'),
(5,'Isfam'),
(6,'Otra');

/*Table structure for table `documents_property` */

DROP TABLE IF EXISTS `documents_property`;

CREATE TABLE `documents_property` (
  `id_doc_property` int(20) NOT NULL AUTO_INCREMENT,
  `doc_ine1` varchar(300) DEFAULT NULL,
  `doc_ine2` varchar(300) DEFAULT NULL,
  `doc_rfc1` varchar(300) DEFAULT NULL,
  `doc_rfc2` varchar(300) DEFAULT NULL,
  `doc_TipoPersona1` varchar(300) DEFAULT NULL,
  `doc_TipoPersona2` varchar(300) DEFAULT NULL,
  `doc_ActaNacimiento1` varchar(300) DEFAULT NULL,
  `doc_ActaNacimiento2` varchar(300) DEFAULT NULL,
  `doc_curp1` varchar(300) DEFAULT NULL,
  `doc_curp2` varchar(300) DEFAULT NULL,
  `doc_escritura` varchar(600) DEFAULT NULL,
  `doc_titulo` varchar(600) DEFAULT NULL,
  `doc_registro` varchar(600) DEFAULT NULL,
  `doc_aviso` varchar(600) DEFAULT NULL,
  `doc_recibo_luz` varchar(600) DEFAULT NULL,
  `doc_recibo_agua` varchar(600) DEFAULT NULL,
  `doc_predial` varchar(600) DEFAULT NULL,
  `doc_planos` varchar(600) DEFAULT NULL,
  `doc_regimen_matrimonial` varchar(600) DEFAULT NULL,
  `doc_acta_matrimonio` varchar(600) DEFAULT NULL,
  `doc_regimen_propiedad_condo` varchar(600) DEFAULT NULL,
  `nombre_doc_ine1` varchar(600) DEFAULT NULL,
  `nombre_doc_ine2` varchar(600) DEFAULT NULL,
  `nombre_doc_rfc1` varchar(600) DEFAULT NULL,
  `nombre_doc_rfc2` varchar(600) DEFAULT NULL,
  `nombre_doc_TipoPersona1` varchar(600) DEFAULT NULL,
  `nombre_doc_TipoPersona2` varchar(600) DEFAULT NULL,
  `nombre_doc_ActaNacimiento1` varchar(600) DEFAULT NULL,
  `nombre_doc_ActaNacimiento2` varchar(600) DEFAULT NULL,
  `nombre_doc_curp1` varchar(600) DEFAULT NULL,
  `nombre_doc_curp2` varchar(600) DEFAULT NULL,
  `nombre_doc_escritura` varchar(600) DEFAULT NULL,
  `nombre_doc_titulo` varchar(600) DEFAULT NULL,
  `nombre_doc_registro` varchar(600) DEFAULT NULL,
  `nombre_doc_aviso` varchar(600) DEFAULT NULL,
  `nombre_doc_recibo_luz` varchar(600) DEFAULT NULL,
  `nombre_doc_predial` varchar(600) DEFAULT NULL,
  `nombre_doc_planos` varchar(600) DEFAULT NULL,
  `nombre_doc_regimen_matrimonial` varchar(600) DEFAULT NULL,
  `nombre_doc_acta_matrimonio` varchar(600) DEFAULT NULL,
  `nombre_doc_regimen_propiedad_condo` varchar(600) DEFAULT NULL,
  `nombre_doc_recibo_agua` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`id_doc_property`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `documents_property` */

insert  into `documents_property`(`id_doc_property`,`doc_ine1`,`doc_ine2`,`doc_rfc1`,`doc_rfc2`,`doc_TipoPersona1`,`doc_TipoPersona2`,`doc_ActaNacimiento1`,`doc_ActaNacimiento2`,`doc_curp1`,`doc_curp2`,`doc_escritura`,`doc_titulo`,`doc_registro`,`doc_aviso`,`doc_recibo_luz`,`doc_recibo_agua`,`doc_predial`,`doc_planos`,`doc_regimen_matrimonial`,`doc_acta_matrimonio`,`doc_regimen_propiedad_condo`,`nombre_doc_ine1`,`nombre_doc_ine2`,`nombre_doc_rfc1`,`nombre_doc_rfc2`,`nombre_doc_TipoPersona1`,`nombre_doc_TipoPersona2`,`nombre_doc_ActaNacimiento1`,`nombre_doc_ActaNacimiento2`,`nombre_doc_curp1`,`nombre_doc_curp2`,`nombre_doc_escritura`,`nombre_doc_titulo`,`nombre_doc_registro`,`nombre_doc_aviso`,`nombre_doc_recibo_luz`,`nombre_doc_predial`,`nombre_doc_planos`,`nombre_doc_regimen_matrimonial`,`nombre_doc_acta_matrimonio`,`nombre_doc_regimen_propiedad_condo`,`nombre_doc_recibo_agua`) values 
(9,NULL,'C:\\xampp\\htdocs\\diamond\\public/documents/OP7n6OG-INE-1 - copia (9).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/OP7n6OG-RFC-1 - copia (13).pdf',NULL,'C:\\xampp\\htdocs\\diamond\\public/documents/OP7n6OG-TipoPersona-1 - copia (10).pdf',NULL,'',NULL,'',NULL,'','','','C:\\xampp\\htdocs\\diamond\\public/documents/OP7n6OG-AVISO-1 - copia (7).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/OP7n6OG-ReciboLuz-1 - copia (14).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/OP7n6OG-ReciboAgua-1 - copia (4).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/OP7n6OG-PREDIAL-1 - copia (2).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/OP7n6OG-PLANOS-1 - copia (14).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/OP7n6OG-RegimenMatrimonial-1 - copia (12).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/OP7n6OG-ActaMatrimono-1 - copia (14).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/OP7n6OG-RegimenCondo-1 - copia (17).pdf',NULL,'copia (9)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(10,NULL,'C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-INE-1 - copia (9).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-RFC-1 - copia (13).pdf',NULL,'C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-TipoPersona-1 - copia (10).pdf','a','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-ActaNacimiento-1 - copia (13).pdf','sdada','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-CURP-1 - copia (7).pdf',NULL,'C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-ESCRITURA-1 - copia (12).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-TITULO-1 - copia (12).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-REGISTRO-1 - copia (4).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-AVISO-1 - copia (7).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-ReciboLuz-1 - copia (14).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-ReciboAgua-1 - copia (4).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-PREDIAL-1 - copia (2).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-PLANOS-1 - copia (14).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-RegimenMatrimonial-1 - copia (12).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-ActaMatrimono-1 - copia (14).pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PNEP7Cr-RegimenCondo-1 - copia (17).pdf',NULL,'copia (9)',NULL,NULL,NULL,'sada',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(11,'/documents/INE-oi8yZz400.pdf','http://localhost/diamond/public/home/register_property','https://www.youtube.com/watch?v=hPjcqR7kHws','','C:\\xampp\\htdocs\\diamond\\public/documents/TipoPersona-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/TipoPersona-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ActaNacimiento-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ActaNacimiento-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/CURP-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/CURP-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ESCRITURA-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/TITULO-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/REGISTRO-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/AVISO-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ReciboLuz-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ReciboAgua-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PREDIAL-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PLANOS-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/RegimenMatrimonial-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ActaMatrimono-yR55PEH00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/RegimenCondo-yR55PEH00.pdf','INE-yR55PEH00.pdf','INE-yR55PEH00.pdf','RFC-yR55PEH00.pdf','','TipoPersona-yR55PEH00.pdf','TipoPersona-yR55PEH00.pdf','ActaNacimiento-yR55PEH00.pdf','ActaNacimiento-yR55PEH00.pdf','CURP-yR55PEH00.pdf','CURP-yR55PEH00.pdf','ESCRITURA-yR55PEH00.pdf','TITULO-yR55PEH00.pdf','REGISTRO-yR55PEH00.pdf','AVISO-yR55PEH00.pdf','ReciboLuz-yR55PEH00.pdf','PREDIAL-yR55PEH00.pdf','PLANOS-yR55PEH00.pdf','RegimenMatrimonial-yR55PEH00.pdf','ActaMatrimono-yR55PEH00.pdf','RegimenCondo-yR55PEH00.pdf','ReciboAgua-yR55PEH00.pdf'),
(12,'/documents/INE-oi8yZz400.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/INE-uAMQtHf1 - copia (12).pdf','https://www.youtube.com/watch?v=hPjcqR7kHws','C:\\xampp\\htdocs\\diamond\\public/documents/RFC-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/TipoPersona-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/TipoPersona-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ActaNacimiento-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ActaNacimiento-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/CURP-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/CURP-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ESCRITURA-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/TITULO-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/REGISTRO-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/AVISO-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ReciboLuz-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ReciboAgua-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PREDIAL-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/PLANOS-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/RegimenMatrimonial-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/ActaMatrimono-nvwOgyA00.pdf','C:\\xampp\\htdocs\\diamond\\public/documents/RegimenCondo-yR55PEH00.pdf','INE-oi8yZz400.pdf','INE-uAMQtHf1 - copia (12).pdf','RFC-nvwOgyA00.pdf','RFC-nvwOgyA00.pdf','TipoPersona-nvwOgyA00.pdf','TipoPersona-nvwOgyA00.pdf','ActaNacimiento-nvwOgyA00.pdf','ActaNacimiento-nvwOgyA00.pdf','CURP-nvwOgyA00.pdf','CURP-nvwOgyA00.pdf','ESCRITURA-nvwOgyA00.pdf','TITULO-nvwOgyA00.pdf','REGISTRO-nvwOgyA00.pdf','AVISO-nvwOgyA00.pdf',NULL,'PREDIAL-nvwOgyA00.pdf','PLANOS-nvwOgyA00.pdf','RegimenMatrimonial-nvwOgyA00.pdf','ActaMatrimono-nvwOgyA00.pdf','RegimenCondo-yR55PEH00.pdf','ReciboAgua-nvwOgyA00.pdf'),
(13,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',''),
(14,'/documents/INE-AVT09Gz1 - copia (11).pdf','','/documents/RFC-uAvG3AO1 - copia (12).pdf','','/documents/TipoPersona-uAvG3AO1 - copia (11).pdf','','/documents/ActaNacimiento-uAvG3AO1 - copia (11).pdf','','/documents/CURP-uAvG3AO1 - copia (12).pdf','','/documents/ESCRITURA-uAvG3AO1 - copia (12).pdf','/documents/TITULO-uAvG3AO1 - copia (12).pdf','/documents/REGISTRO-uAvG3AO1 - copia (13).pdf','/documents/AVISO-uAvG3AO1 - copia (10).pdf','/documents/ReciboLuz-uAvG3AO1 - copia (11).pdf','/documents/ReciboAgua-uAvG3AO1 - copia (8).pdf','/documents/PREDIAL-uAvG3AO1 - copia (15).pdf','/documents/PLANOS-uAvG3AO1 - copia (11).pdf','/documents/RegimenMatrimonial-uAvG3AO1 - copia (2).pdf','/documents/ActaMatrimono-uAvG3AO00.pdf','/documents/RegimenCondo-uAvG3AO1 - copia (10).pdf','INE-AVT09Gz1 - copia (11).pdf','','RFC-uAvG3AO1 - copia (12).pdf','','TipoPersona-uAvG3AO1 - copia (11).pdf','','ActaNacimiento-uAvG3AO1 - copia (11).pdf','','CURP-uAvG3AO1 - copia (12).pdf','','ESCRITURA-uAvG3AO1 - copia (12).pdf','TITULO-uAvG3AO1 - copia (12).pdf','REGISTRO-uAvG3AO1 - copia (13).pdf','AVISO-uAvG3AO1 - copia (10).pdf',NULL,'PREDIAL-uAvG3AO1 - copia (15).pdf','PLANOS-uAvG3AO1 - copia (11).pdf','RegimenMatrimonial-uAvG3AO1 - copia (2).pdf','ActaMatrimono-uAvG3AO00.pdf','RegimenCondo-uAvG3AO1 - copia (10).pdf','ReciboAgua-uAvG3AO1 - copia (8).pdf');

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `id_employees` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(3) DEFAULT NULL,
  `curp` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` int(25) DEFAULT NULL,
  `celular` int(25) DEFAULT NULL,
  `puesto` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `equipo` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_roles` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT '1',
  `fecha_nacimiento` varchar(11) COLLATE utf8_unicode_ci DEFAULT '00-00-0000',
  `fecha_ingreso` varchar(11) COLLATE utf8_unicode_ci DEFAULT '00-00-0000',
  `fecha_salida` varchar(11) COLLATE utf8_unicode_ci DEFAULT '00-00-0000',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_user` int(11) DEFAULT '0',
  PRIMARY KEY (`id_employees`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `employees` */

insert  into `employees`(`id_employees`,`name`,`edad`,`curp`,`telefono`,`celular`,`puesto`,`email`,`sexo`,`equipo`,`id_roles`,`status`,`fecha_nacimiento`,`fecha_ingreso`,`fecha_salida`,`created_at`,`updated_at`,`id_user`) values 
(4,'mario',27,'156asd561',456156,15656,'asdasd','mario@mail.com','M','1',1,1,'25-12-1990','12-07-2017','00-00-0000','2017-07-12 13:36:28','2017-07-12 13:37:36',18);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values 
('2014_10_12_000000_create_users_table',1),
('2014_10_12_100000_create_password_resets_table',1),
('2017_06_28_162406_create_colonies_table',1),
('2017_06_28_170446_create_cities_table',2),
('2017_06_28_170704_create_states_table',3);

/*Table structure for table `offices` */

DROP TABLE IF EXISTS `offices`;

CREATE TABLE `offices` (
  `id_oficina` int(11) NOT NULL AUTO_INCREMENT,
  `oficina` varchar(35) DEFAULT NULL,
  `cod_oficina` varchar(10) DEFAULT NULL,
  `id_states` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_oficina`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `offices` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `prospector` */

DROP TABLE IF EXISTS `prospector`;

CREATE TABLE `prospector` (
  `id_prospectador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_prospectador` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_prospectador`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `prospector` */

insert  into `prospector`(`id_prospectador`,`nombre_prospectador`) values 
(1,'Norma'),
(2,'Ale'),
(3,'Caro'),
(4,'Alma');

/*Table structure for table `reason_to_delete` */

DROP TABLE IF EXISTS `reason_to_delete`;

CREATE TABLE `reason_to_delete` (
  `id_reason` int(11) NOT NULL AUTO_INCREMENT,
  `reason` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_reason`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `reason_to_delete` */

insert  into `reason_to_delete`(`id_reason`,`reason`) values 
(1,'cliente');

/*Table structure for table `registro_de_propiedad` */

DROP TABLE IF EXISTS `registro_de_propiedad`;

CREATE TABLE `registro_de_propiedad` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre_dueno` varchar(60) DEFAULT NULL,
  `direccion_dueno` varchar(50) DEFAULT NULL,
  `id_colonia_dueno` int(10) DEFAULT NULL,
  `tel_casa` int(20) DEFAULT NULL,
  `tel_oficina` int(20) DEFAULT NULL,
  `celular` int(20) DEFAULT NULL,
  `estado_civil` varchar(25) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `es_dueno_propiedad` varchar(10) DEFAULT NULL,
  `relacion_con_dueno` varchar(30) DEFAULT NULL,
  `calle_propiedad` varchar(30) DEFAULT NULL,
  `numero_ext_propiedad` int(11) DEFAULT NULL,
  `numero_int_propiedad` int(11) DEFAULT NULL,
  `id_colonia_propiedad` int(10) DEFAULT NULL,
  `id_ciudad_propiedad` int(10) DEFAULT NULL,
  `id_estado_propiedad` int(10) DEFAULT NULL,
  `codigo_postal_propiedad` int(11) DEFAULT NULL,
  `uso_de_suelo` varchar(20) DEFAULT NULL,
  `frente` varchar(40) DEFAULT NULL,
  `fondo` varchar(40) DEFAULT NULL,
  `unidad_medida` varchar(5) DEFAULT NULL,
  `mcuadrado_terreno` int(10) DEFAULT NULL,
  `mcuadrado_construccion` int(10) DEFAULT NULL,
  `recamaras` int(10) DEFAULT NULL,
  `banos_completos` int(10) DEFAULT NULL,
  `medios_banos` int(10) DEFAULT NULL,
  `cochera` int(10) DEFAULT NULL,
  `niveles` int(10) DEFAULT NULL,
  `piso_condo` varchar(10) DEFAULT NULL,
  `conservacion` varchar(15) DEFAULT NULL,
  `duenos_originales` varchar(10) DEFAULT NULL,
  `vestidor` varchar(10) DEFAULT NULL,
  `sala` varchar(10) DEFAULT NULL,
  `comedor` varchar(10) DEFAULT NULL,
  `cocina_integral` varchar(10) DEFAULT NULL,
  `estudio` varchar(10) DEFAULT NULL,
  `cuarto_tv` varchar(10) DEFAULT NULL,
  `patio` varchar(10) DEFAULT NULL,
  `cuarto_servicio` varchar(10) DEFAULT NULL,
  `bodega` varchar(10) DEFAULT NULL,
  `cisterna` varchar(10) DEFAULT NULL,
  `aire_acondicionado` varchar(10) DEFAULT NULL,
  `instalaciones_minisplit` varchar(10) DEFAULT NULL,
  `boyler` varchar(10) DEFAULT NULL,
  `bardeado` varchar(10) DEFAULT NULL,
  `protecciones` varchar(10) DEFAULT NULL,
  `terraza` varchar(10) DEFAULT NULL,
  `aljiber` varchar(10) DEFAULT NULL,
  `closet` varchar(10) DEFAULT NULL,
  `balcon` varchar(10) DEFAULT NULL,
  `cuarto_lavado` varchar(10) DEFAULT NULL,
  `jacuzzi` varchar(10) DEFAULT NULL,
  `casa_club` varchar(10) DEFAULT NULL,
  `parrilla` varchar(10) DEFAULT NULL,
  `elevador` varchar(10) DEFAULT NULL,
  `acceso_playa` varchar(10) DEFAULT NULL,
  `muelle` varchar(10) DEFAULT NULL,
  `urbanizado` varchar(10) DEFAULT NULL,
  `jardin` varchar(10) DEFAULT NULL,
  `areas_verdes` varchar(10) DEFAULT NULL,
  `alberca_comun` varchar(10) DEFAULT NULL,
  `piscina_privada` varchar(10) DEFAULT NULL,
  `canchas` varchar(10) DEFAULT NULL,
  `seguridad_todo_dia` varchar(10) DEFAULT NULL,
  `sistema_seguridad` varchar(10) DEFAULT NULL,
  `amueblado` varchar(10) DEFAULT NULL,
  `vista_mar` varchar(10) DEFAULT NULL,
  `vista_marina` varchar(10) DEFAULT NULL,
  `vista_panoramica` varchar(10) DEFAULT NULL,
  `vista_campo_golf` varchar(10) DEFAULT NULL,
  `agua` varchar(10) DEFAULT NULL,
  `luz` varchar(10) DEFAULT NULL,
  `drenaje` varchar(10) DEFAULT NULL,
  `tiene_adeudo` varchar(10) DEFAULT NULL,
  `cuanto_adeudo` double DEFAULT NULL,
  `tipo_adeudo` varchar(10) DEFAULT NULL,
  `ofrece_financiamiento` varchar(10) DEFAULT NULL,
  `aplica_credito` varchar(10) DEFAULT NULL,
  `tipo_credito` varchar(255) DEFAULT NULL,
  `tipo_contrato` varchar(50) DEFAULT NULL,
  `ine` varchar(10) DEFAULT NULL,
  `rfc` varchar(10) DEFAULT NULL,
  `tipo_personaSra` varchar(10) DEFAULT NULL,
  `tipo_personaSr` varchar(10) DEFAULT NULL,
  `tipo_persona` varchar(10) DEFAULT NULL,
  `acta_nacimiento` varchar(10) DEFAULT NULL,
  `curp` varchar(10) DEFAULT NULL,
  `escritura_propiedad` varchar(10) DEFAULT NULL,
  `titulo_propiedad` varchar(30) DEFAULT NULL,
  `registro_propiedad` varchar(10) DEFAULT NULL,
  `aviso_privacidad` varchar(10) DEFAULT NULL,
  `recibo_luz` varchar(10) DEFAULT NULL,
  `recibo_agua` varchar(10) DEFAULT NULL,
  `predial` varchar(10) DEFAULT NULL,
  `planos` varchar(10) DEFAULT NULL,
  `clave_castatral` varchar(25) DEFAULT NULL,
  `valor_castatral` int(30) DEFAULT NULL,
  `regimen_matrimonial` varchar(10) DEFAULT NULL,
  `acta_matrimonio` varchar(10) DEFAULT NULL,
  `regimen_propiedad_condo` varchar(10) DEFAULT NULL,
  `id_asesores` int(10) DEFAULT NULL,
  `id_prospectores` int(10) DEFAULT NULL,
  `fecha_asesor` varchar(20) DEFAULT NULL,
  `exclusiva` varchar(15) DEFAULT NULL,
  `tipo_convenio` varchar(15) DEFAULT NULL,
  `id_tipo_propiedad` int(15) DEFAULT NULL,
  `id_comision` int(15) DEFAULT NULL,
  `referido` varchar(90) DEFAULT NULL,
  `llaves` varchar(15) DEFAULT NULL,
  `fotos` varchar(15) DEFAULT NULL,
  `amueblada_renta_venta` varchar(15) DEFAULT NULL,
  `estructura` varchar(5) DEFAULT NULL,
  `tipo_anuncio` varchar(15) DEFAULT NULL,
  `precio_venta` double DEFAULT NULL,
  `precio_renta` double DEFAULT NULL,
  `precio_minimo` double DEFAULT NULL,
  `tipo_moneda` varchar(10) DEFAULT NULL,
  `cuota_mantenimiento` double DEFAULT NULL,
  `inclu_cuota_mantenimiento` varchar(20) DEFAULT NULL,
  `precio_mcuadrado` double DEFAULT NULL,
  `fecha_inicio` varchar(40) DEFAULT NULL,
  `fecha_termino` varchar(40) DEFAULT NULL,
  `restricciones_renta_venta` varchar(35) DEFAULT NULL,
  `defecto_estructural` varchar(10) DEFAULT NULL,
  `defecto_especifico` varchar(70) DEFAULT NULL,
  `folio` varchar(20) DEFAULT NULL,
  `expediente_completo` varchar(10) DEFAULT NULL,
  `responsable_llenado` varchar(50) DEFAULT NULL,
  `responsable_revision` varchar(50) DEFAULT NULL,
  `director_aprobo_listing_comision` varchar(50) DEFAULT NULL,
  `observaciones` text,
  `revision_auditoria` text,
  `estado_registro` varchar(20) DEFAULT NULL,
  `status_propiedad` varchar(30) DEFAULT 'Disponible',
  `codigo` varchar(50) DEFAULT NULL,
  `status` int(5) DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` varchar(60) DEFAULT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(60) DEFAULT NULL,
  `delete_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_by` varchar(60) DEFAULT NULL,
  `delete_reason` int(10) DEFAULT NULL,
  `id_doc_propertys` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

/*Data for the table `registro_de_propiedad` */

insert  into `registro_de_propiedad`(`id`,`nombre_dueno`,`direccion_dueno`,`id_colonia_dueno`,`tel_casa`,`tel_oficina`,`celular`,`estado_civil`,`email`,`es_dueno_propiedad`,`relacion_con_dueno`,`calle_propiedad`,`numero_ext_propiedad`,`numero_int_propiedad`,`id_colonia_propiedad`,`id_ciudad_propiedad`,`id_estado_propiedad`,`codigo_postal_propiedad`,`uso_de_suelo`,`frente`,`fondo`,`unidad_medida`,`mcuadrado_terreno`,`mcuadrado_construccion`,`recamaras`,`banos_completos`,`medios_banos`,`cochera`,`niveles`,`piso_condo`,`conservacion`,`duenos_originales`,`vestidor`,`sala`,`comedor`,`cocina_integral`,`estudio`,`cuarto_tv`,`patio`,`cuarto_servicio`,`bodega`,`cisterna`,`aire_acondicionado`,`instalaciones_minisplit`,`boyler`,`bardeado`,`protecciones`,`terraza`,`aljiber`,`closet`,`balcon`,`cuarto_lavado`,`jacuzzi`,`casa_club`,`parrilla`,`elevador`,`acceso_playa`,`muelle`,`urbanizado`,`jardin`,`areas_verdes`,`alberca_comun`,`piscina_privada`,`canchas`,`seguridad_todo_dia`,`sistema_seguridad`,`amueblado`,`vista_mar`,`vista_marina`,`vista_panoramica`,`vista_campo_golf`,`agua`,`luz`,`drenaje`,`tiene_adeudo`,`cuanto_adeudo`,`tipo_adeudo`,`ofrece_financiamiento`,`aplica_credito`,`tipo_credito`,`tipo_contrato`,`ine`,`rfc`,`tipo_personaSra`,`tipo_personaSr`,`tipo_persona`,`acta_nacimiento`,`curp`,`escritura_propiedad`,`titulo_propiedad`,`registro_propiedad`,`aviso_privacidad`,`recibo_luz`,`recibo_agua`,`predial`,`planos`,`clave_castatral`,`valor_castatral`,`regimen_matrimonial`,`acta_matrimonio`,`regimen_propiedad_condo`,`id_asesores`,`id_prospectores`,`fecha_asesor`,`exclusiva`,`tipo_convenio`,`id_tipo_propiedad`,`id_comision`,`referido`,`llaves`,`fotos`,`amueblada_renta_venta`,`estructura`,`tipo_anuncio`,`precio_venta`,`precio_renta`,`precio_minimo`,`tipo_moneda`,`cuota_mantenimiento`,`inclu_cuota_mantenimiento`,`precio_mcuadrado`,`fecha_inicio`,`fecha_termino`,`restricciones_renta_venta`,`defecto_estructural`,`defecto_especifico`,`folio`,`expediente_completo`,`responsable_llenado`,`responsable_revision`,`director_aprobo_listing_comision`,`observaciones`,`revision_auditoria`,`estado_registro`,`status_propiedad`,`codigo`,`status`,`create_at`,`create_by`,`update_at`,`update_by`,`delete_at`,`delete_by`,`delete_reason`,`id_doc_propertys`) values 
(6,'adminis','ghea',1,2653,123123,51653,'Casado Bienes Mancomunado','asdasd@mail','Si','asdasd','sadasd',5163,123,1,1,1,5153,'Mixto','4561','321',NULL,12231,1233,0,0,0,0,0,'74561','En Proyecto','No','No','Si','No','No','No','No','No','No','Si','No','No','No','No','No','No','No','Si','Si','No','Si','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','Si',265115,'asdasd','asdasd','Todos','Bancario, Infonavit','6 Meses','Sra','Sr','Moral','Moral','Sr, Sra','Sra','Sr','Si','Si','Si','Si','Si','Si','Si','Si','5461',516,'Si','Si','Si',1,1,'07/04/2017','No','Venta',1,1,'Si','Si','Si','Sin',NULL,'Lona',415623,5215613,562323,'MXN',0,'Si',5162,'07/04/2017','07/05/2017','Sólo Familias, Sólo ejecutivos','Si','23123','47474','Si','asdasd','asdasdasd','Pedro Juarez','asdasd','asdasd','Completo','Fuera de Promoción','17C65-1G0E07-01',1,'2017-07-05 09:21:51','admin','2017-07-14 09:31:49','admin','2017-07-11 13:07:55','admin',1,'C:\\xampp\\tmp\\php2F04.tmp'),
(7,'hola','',2,0,0,0,'','','','','',0,0,0,0,0,0,'Selecciona una opcio','','',NULL,0,0,0,0,0,0,0,'','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona',NULL,NULL,'Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','','Selecciona','Selecciona',0,'','Selecciona','Selecciona','','Selecciona una opción','no','no',NULL,NULL,'No','No','No','No','No','','','','','','No','',0,'','','',0,0,'','Selecciona una ','Selecciona una ',2,0,'Selecciona una ','Selecciona una ','Selecciona una ','Selecciona una ',NULL,NULL,0,0,0,'Selecciona',0,'Selecciona una opció',0,'','','','Selecciona','','','','','','',NULL,NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00',NULL,'0000-00-00 00:00:00',NULL,'2017-07-05 11:41:21','1',1,NULL),
(9,'sadasd','sadasd',4,0,0,0,'Casado Bienes Separados','','No','','asdasd',0,0,0,0,0,541,'Selecciona una opcio','','',NULL,0,0,2,0,0,0,2,'','Selecciona','Si','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona',NULL,NULL,'Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','No','Si','No',0,'','No','Selecciona','Scotiabank, Infonavit','3 Meses','no','no',NULL,NULL,'No','No','No','No','No','','','','','','No','sdada',0,'','','',0,0,'06/22/2017','Selecciona una ','Renta',0,7,'No','Si','Selecciona una ','Selecciona una ',NULL,NULL,0,0,0,'USD',0,'Selecciona una opció',0,'06/30/2017','06/30/2017','','Si','','','Si','asdasd','asdasd','Pedro Juarez',NULL,NULL,NULL,NULL,NULL,1,'0000-00-00 00:00:00',NULL,'0000-00-00 00:00:00',NULL,'0000-00-00 00:00:00',NULL,NULL,NULL),
(46,'1','1',1,1,1,1,'Soltero','1@asdas.com','Si','1','1asdasd',1,1,1,2,1,1,'Comercial','1','1',NULL,1,1,2,2,2,2,2,'1','En Proyecto','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No',NULL,NULL,'No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No',1,'1','1','Todos','Infonavit','Selecciona una opción','Sra','Sr',NULL,NULL,'Sr','Sra','Sr','Si','Si','Si','Si','Si','No','Si','Si','1',1,'Si','No','Si',2,1,'07/11/2017','Si','Renta',4,1,'Si','No','Si','Sin',NULL,NULL,155,1,1,'MXN',0,'No',11,'07/06/2017','07/13/2017','No animales','No','1263','1','No','1','1','Rodolfo Pardo',NULL,NULL,NULL,NULL,'17L47-0G1E07-01',1,'2017-07-06 11:43:56','admin','2017-07-06 12:51:59','admin','2017-07-06 11:51:47','Admin',1,NULL),
(47,'sa','123',1,0,0,0,'Casado Bienes Mancomunado','','Si','','123',0,0,1,1,1,513,'Habitacional','','',NULL,0,0,0,0,0,0,0,'','En Proyecto','No','No','No','No','No','No','No','No','No','No','No','No','No','Selecciona','Selecciona','No','Si',NULL,NULL,'No','Si','No','Si','No','No','Si','Si','No','Si','No','No','Si','No','No','Si','No','No','Si','No','No','No','Si','No','No',0,'','Si','Todos','Bancario, Infonavit, Fovissste','6 Meses','Sr','Sra',NULL,NULL,'Sr','Sr','Sr','Si','Si','Si','Si','Si','Si','Si','Si','1',23032,'Si','Si','Si',1,1,'07/21/2017','Si','Renta',2,1,'Si','Si','Si','Sin',NULL,NULL,0,0,0,'MXN',0,'Si',0,'07/07/2017','07/27/2017','','Si','','','Si','sadasdasd','515615615656','Pedro Juarez',NULL,NULL,NULL,NULL,'17T47-0G1E07-01',1,'2017-07-07 11:51:29','admin','2017-07-07 11:51:29',NULL,'2017-07-07 11:51:29',NULL,NULL,'Array'),
(48,'sa','123',1,0,0,0,'Casado Bienes Mancomunado','','Si','','123',0,0,1,1,1,513,'Habitacional','','',NULL,0,0,0,0,0,0,0,'','En Proyecto','No','No','No','No','No','No','No','No','No','No','No','No','No','Selecciona','Selecciona','No','Si',NULL,NULL,'No','Si','No','Si','No','No','Si','Si','No','Si','No','No','Si','No','No','Si','No','No','Si','No','No','No','Si','No','No',0,'','Si','Todos','Bancario, Infonavit, Fovissste','6 Meses','Sr','Sra',NULL,NULL,'Sr','Sr','Sr','Si','Si','Si','Si','Si','Si','Si','Si','1',23032,'Si','Si','Si',1,1,'07/21/2017','Si','Renta',2,1,'Si','Si','Si','Sin',NULL,NULL,0,0,0,'MXN',0,'Si',0,'07/07/2017','07/27/2017','','Si','','','Si','sadasdasd','515615615656','Pedro Juarez',NULL,NULL,NULL,NULL,'17T48-0G1E07-01',1,'2017-07-07 11:52:40','admin','2017-07-07 11:52:40',NULL,'2017-07-07 11:52:40',NULL,NULL,'Array'),
(58,'asdas','123',1,123,123,123,'Casado Bienes Mancomunado','1asdasd@gma.com','Si','123','123',123,123,1,1,1,123,'Habitacional','23','',NULL,12,12,2,2,2,2,2,'123','En Proyecto','No','Si','No','No','No','Selecciona','No','No','No','No','No','No','No','No','No','No','No',NULL,NULL,'No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No',123,'123','No','Todos','','Anual','Sr','no',NULL,NULL,'Sr','Sra','Sra','Si','Si','Si','No','No','Si','Si','Si','123',123,'Si','Si','Si',1,1,'07/07/2017','Si','Venta',1,1,'Si','Si','Si','Sin',NULL,NULL,123,123,123,'MXN',123,'Si',123,'07/14/2017','07/14/2017','Sólo Familias, Sólo ejecutivos','Si','123','123','Si','123','123','Pedro Juarez',NULL,NULL,NULL,NULL,'17C49-0G1E07-01',1,'2017-07-07 13:05:20','admin','2017-07-07 13:05:20',NULL,'2017-07-07 13:05:20',NULL,NULL,NULL),
(59,'asdas','123',1,123,123,123,'Casado Bienes Mancomunado','1asdasd@gma.com','Si','123','123',123,123,1,1,1,123,'Habitacional','23','',NULL,12,12,2,2,2,2,2,'123','En Proyecto','No','Si','No','No','No','Selecciona','No','No','No','No','No','No','No','No','No','No','No',NULL,NULL,'No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No','No',123,'123','123','Todos','','Anual','no','no',NULL,NULL,'No','No','Sra','No','No','No','No','No','No','No','No','123',123,'No','No','No',1,1,'07/07/2017','Si','Venta',1,1,'Si','Si','Si','Sin',NULL,NULL,123,123,123,'MXN',0,'Si',123,'07/14/2017','07/14/2017','Sólo Familias, Sólo ejecutivos','Si','123','123','Si','123','123','Pedro Juarez',NULL,NULL,NULL,NULL,'17C60-0G1E07-01',0,'2017-07-07 13:06:08','admin','2017-07-10 13:36:52','admin','2017-07-13 13:39:12','admin',1,'10'),
(60,'asdasdas','asdasd',1,0,0,0,'Casado Bienes Separados','','Si','','asdasd',0,0,1,2,1,15613,'Habitacional','','',NULL,0,0,2,1,1,2,5,'','Selecciona una ','No','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona',NULL,NULL,'Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Si','Si','No','No',0,'','No','Todos','Scotiabank','Selecciona una opción','Sr, Sra','Sr, Sra',NULL,NULL,'Sr, Sra','Sr, Sra','Sr, Sra','Si','Si','Si','Si','Si','Si','Si','Si','xz<x',0,'Si','Si','Si',2,2,'07/19/2017','Si','Venta',2,2,'Si','Si','No','Sin',NULL,NULL,0,0,0,'MXN',0,'Selecciona una opció',0,'07/17/2017','07/10/2017','','Si','','','Si','sadasd','asdasd','Pedro Juarez',NULL,NULL,NULL,NULL,'17T60-0G1E06-02',1,'2017-07-10 13:40:35','admin','2017-07-10 13:40:35',NULL,'2017-07-10 13:40:35',NULL,NULL,'11'),
(61,'aaaaas','asdasd',1,0,0,0,'Casado Bienes Separados','','Si','','asdasd',0,0,1,2,1,15613,'Habitacional','','',NULL,0,0,2,1,1,2,5,'','Selecciona una ','No','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona',NULL,NULL,'Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Si','Si','No','No',0,'','','Todos','Scotiabank','Selecciona una opción','Sra','Sr, Sra',NULL,NULL,'Sr, Sra','Sr, Sra','Sr, Sra','Si','Si','Si','Si','Si','Si','Si','Si','xz<x',0,'Si','Si','Si',2,2,'07/19/2017','Si','Venta',2,2,'Si','Si','No','Sin',NULL,NULL,0,0,0,'MXN',0,'Selecciona una opció',0,'07/17/2017','07/10/2017','','Si','','','Si','sadasd','asdasd','Pedro Juarez',NULL,NULL,NULL,NULL,'17T64-0G1E06-02',1,'2017-07-10 13:41:29','admin','2017-07-10 17:00:10','admin','2017-07-10 13:41:29',NULL,NULL,'12'),
(62,'asdasd','',0,0,0,0,'','','','','',0,0,0,0,0,0,'','','',NULL,0,0,0,0,0,0,0,'','Selecciona una ','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona',NULL,NULL,'Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','','Selecciona','Selecciona',0,'','Selecciona','Selecciona','','Selecciona una opción','no','no',NULL,NULL,'No','No','No','No','No','','','','','','No','',0,'','','',0,0,'','Selecciona una ','Selecciona una ',1,1,'Selecciona una ','Selecciona una ','Selecciona una ','Selecciona una ',NULL,NULL,0,0,0,'Selecciona',0,'Selecciona una opció',0,'','','','Selecciona','','','','','','',NULL,NULL,NULL,NULL,'17C62-0G0E07-0Selecciona una opción',1,'2017-07-10 13:48:58','admin','2017-07-10 13:48:58',NULL,'2017-07-10 13:48:58',NULL,NULL,'13'),
(63,'asdasd','',0,0,0,0,'','','','','',0,0,0,0,0,0,'','','',NULL,0,0,0,0,0,0,0,'','Selecciona una ','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona',NULL,NULL,'Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','Selecciona','','Selecciona','Selecciona',0,'','Selecciona','Selecciona','','Selecciona una opción','no','no',NULL,NULL,'No','No','No','No','No','','','','','','No','',0,'','','',0,0,'','Selecciona una ','Selecciona una ',1,1,'Selecciona una ','Selecciona una ','Selecciona una ','Selecciona una ',NULL,NULL,0,0,0,'Selecciona',0,'Selecciona una opció',0,'','','','Selecciona','','','','','','',NULL,NULL,NULL,NULL,'17C63-0G0E07-0Selecciona una opción',1,'2017-07-10 13:51:20','admin','2017-07-10 13:51:20',NULL,'2017-07-10 13:51:20',NULL,NULL,'13'),
(64,'11111','1111',1,0,0,0,'Casado Bienes Mancomunado','','Si','','11111',0,0,1,1,1,51321,'Habitacional','','',NULL,0,0,5,3,2,1,4,'','','No','','','','','','','','','','','','','','','','',NULL,NULL,'','','','','','','','','','','','','Selecciona','','','','','','','','','Si','Si','No','No',0,'','','Ninguno','Scotiabank, Infonavit, Fovissste','6 Meses','Sr','Sr',NULL,NULL,'Sr','Sr','Sr','Si','Si','Si','Si','Si','Si','Si','No','156',156,'Si','Si','Si',1,2,'07/11/2017','Si','Venta',3,2,'Si','Si','Si','Con',NULL,NULL,0,0,0,'USD',0,'Si',0,'07/29/2017','07/11/2017','No animales, Sólo Familias','Si','','','Si','asdasd','168sdaasd','Rodolfo Pardo',NULL,'asdasdasdasd',NULL,NULL,'17D65-0G1E06-02',1,'2017-07-11 09:19:06','admin','2017-07-11 09:24:33','admin','2017-07-11 09:19:06',NULL,NULL,'14');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

insert  into `roles`(`id_rol`,`rol`) values 
(1,'Administrador');

/*Table structure for table `states` */

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id_state` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `estados` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_state`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `states` */

insert  into `states`(`id_state`,`estados`) values 
(1,'Sinaloa');

/*Table structure for table `type_propertys` */

DROP TABLE IF EXISTS `type_propertys`;

CREATE TABLE `type_propertys` (
  `id_type_propertys` int(10) NOT NULL AUTO_INCREMENT,
  `tipo_propiedad` varchar(20) DEFAULT NULL,
  `iden_propiedad` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_type_propertys`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `type_propertys` */

insert  into `type_propertys`(`id_type_propertys`,`tipo_propiedad`,`iden_propiedad`) values 
(1,'Casa','C'),
(2,'Terreno','T'),
(3,'Condominio','D'),
(4,'Comercial','L'),
(5,'Renta','R');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`password`,`email`,`status`,`remember_token`,`created_at`,`updated_at`) values 
(1,'admin','$2y$10$eaq.BV8Qy/.Fn5d4.fSBp.YFeGHGKuV9aUvhZRlhMzllM85UcTAru','admin@mail.com',1,'BepZbye6hyNWEEaHmWU0FhH0imAr0a5fbwdwceb12vx1uLWNEmPiH6QGLJEl','2017-06-29 09:04:41','2017-07-12 12:03:07'),
(2,'adasd','hola1234','asda@mail.com',1,'Cut86mxVqUP1Fnk2dNpJmk9nVLqHDeOfcyFYwuzn','2017-07-12 09:53:37','2017-07-12 11:58:31'),
(3,'asdasdbjk','$2y$10$j8.rOVTKeHMDLVpS9LYoaOM273rNRaCCGkA8wjny2zrpr8tcQPTem','asd@gmail.com',0,'Cut86mxVqUP1Fnk2dNpJmk9nVLqHDeOfcyFYwuzn','2017-07-12 10:02:10','0000-00-00 00:00:00'),
(18,'mario','$2y$10$3rv7dnWxXM55c1NeCKeCBuCY6g9uKq7D9fx3cemQM.1WxHdAMTH9.','mario@mail.com',1,'Cut86mxVqUP1Fnk2dNpJmk9nVLqHDeOfcyFYwuzn','2017-07-12 17:20:13','2017-07-12 17:20:13');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
