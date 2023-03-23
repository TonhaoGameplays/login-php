CREATE DATABASE IF NOT EXISTS `registro`;
USE `registro`;

CREATE TABLE IF NOT EXISTS `dados` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `nomeusuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `tipo_de_usuario` varchar(50) NOT NULL,
	PRIMARY KEY (ID)
	);

REPLACE INTO `dados` (`ID`, `nomeusuario`, `senha`, `email`, `avatar`, `tipo_de_usuario`) VALUES
	(1, 'anthony', '123456', 'abc@hotmail.com', 'ETECJA_Logo.png', 'Usuario');

INSERT INTO `dados` (`ID`, `nomeusuario`, `senha`, `email`, `avatar`, `tipo_de_usuario`) VALUES
	(2, 'anthony', '12345678', 'anthony@hotmail.com', 'ETECJA_Logo.png', 'Usuario');

