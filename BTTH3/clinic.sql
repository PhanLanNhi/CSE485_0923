-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.1.2-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for clinic
CREATE DATABASE IF NOT EXISTS `clinic` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `clinic`;

-- Dumping structure for table clinic.doctor
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameDoctor` varchar(255) NOT NULL DEFAULT '0',
  `specialist` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table clinic.doctor: ~10 rows (approximately)
INSERT INTO `doctor` (`id`, `nameDoctor`, `specialist`) VALUES
	(3, 'Linet Mohamed', 'São Miguel do Araguaia Airport'),
	(4, 'Alonzo Salmons', 'Singita Safari Lodge Airport'),
	(5, 'Rab Meneer', 'Gustavo Vargas Airport'),
	(6, 'Anitra McIlwraith', 'Huesca/Pirineos Airport'),
	(7, 'Nyssa Couroy', 'Jurien Bay Airport'),
	(8, 'Marietta Lydster', 'Easton Newnam Field'),
	(9, 'Malchy Neissen', 'Tongliao Airport'),
	(10, 'Doris Loges', 'Ponta Porã Airport'),
	(11, 'dsgqawf', 'super'),
	(14, 'Yannnn', 'Spider');

-- Dumping structure for table clinic.patient
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namePatient` varchar(255) NOT NULL DEFAULT '0',
  `day` date NOT NULL,
  `symptom` text NOT NULL,
  `idDoctor` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `FK1_doctor_patient` (`idDoctor`),
  CONSTRAINT `FK1_doctor_patient` FOREIGN KEY (`idDoctor`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table clinic.patient: ~9 rows (approximately)
INSERT INTO `patient` (`id`, `namePatient`, `day`, `symptom`, `idDoctor`) VALUES
	(1, 'Maxi Leivers', '2023-04-27', 'Maximum', 10),
	(3, 'Bobbe Tasseler', '2023-03-22', 'Bobbe', 4),
	(4, 'Suzette Larn', '2023-06-09', 'Suzette', 6),
	(5, 'Candice Byrde', '2023-05-16', 'Candice', 4),
	(6, 'Emmaline Forgie', '2023-09-01', 'Emmaline', 10),
	(7, 'Elsinore Hanburry', '2023-03-09', 'Elsinore', 3),
	(8, 'Letty Mecozzi', '2023-05-15', 'Letty', 8),
	(9, 'Starlene Wagerfield', '2022-12-04', 'Starlene', 7),
	(11, 'Lan Nhie', '2023-12-13', 'shs', 4);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
