CREATE DATABASE IF NOT EXISTS `finnet_user_api` ;

USE `finnet_user_api`;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  PRIMARY KEY (`id`)
);

insert  into `usuario`(`id`,`nome`,`data_nascimento`) values 
(1,'Alisson Andrade','1997-03-01');