CREATE TABLE `tracking_coords` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tracking_number` bigint DEFAULT NULL,
  `lat` float NOT NULL,
  `lon` float NOT NULL,
  `accuracy` float NOT NULL,
  `heading` float DEFAULT NULL,
  `timestamp` bigint NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;