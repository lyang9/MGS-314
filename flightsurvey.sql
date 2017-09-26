CREATE DATABASE  IF NOT EXISTS `flightSurvey`;
USE `flightSurvey`;

DROP TABLE IF EXISTS `survey`;

CREATE TABLE `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flightnum` varchar(45) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `friendliness` varchar(10) DEFAULT NULL,
  `storage` varchar(10) DEFAULT NULL,
  `seating` varchar(10) DEFAULT NULL,
  `cleaness` varchar(10) DEFAULT NULL,
  `noise` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;


LOCK TABLES `survey` WRITE;

INSERT INTO `survey` VALUES (1,'FU4567','2000-12-12','23:00','Poor','Poor','Fair','Good','Poor'),(7,'FU1567','2200-12-12','11:00','Excellent','Excellent','Good','Good','Good');

UNLOCK TABLES;
