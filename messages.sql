SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- -------------------------------------------------
-- Estructura de tabla para la tabla `mensajes`
-- -------------------------------------------------

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(255)  NOT NULL,
  `EMAIL` varchar(255)  NOT NULL,
  `MESSAGE` varchar(1255)  NOT NULL DEFAULT '--',
  `DATE` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Registros `mensajes`
-- ----------------------------




