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


-- Dumping database structure for btth01_cse485_ex02
CREATE DATABASE IF NOT EXISTS `btth01_cse485_ex02` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `btth01_cse485_ex02`;

-- Dumping structure for table btth01_cse485_ex02.baiviet
CREATE TABLE IF NOT EXISTS `baiviet` (
  `ma_bviet` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) unsigned NOT NULL,
  `tomtat` varchar(200) NOT NULL,
  `noidung` varchar(200) DEFAULT NULL,
  `ma_tgia` int(10) unsigned NOT NULL,
  `ngayviet` datetime NOT NULL DEFAULT current_timestamp(),
  `hinhanh` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`ma_bviet`),
  KEY `ma_tloai` (`ma_tloai`),
  KEY `ma_tgia` (`ma_tgia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=UTF8MB4_GENERAL_CI;

-- Dumping data for table btth01_cse485_ex02.baiviet: ~0 rows (approximately)
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(1, 'Cảm nhận bài hát Nơi tình yêu bắt đầu', 'Nơi tình yêu bắt đầu', 2, 'Tóm tắt bài Nơi Tình Yêu Bắt Đầu', 'Nội dung bài hát Nơi Tình Yêu Bắt Đầu', 1, '2016-05-09 00:00:00', 'https://i.ytimg.com/vi/tEoVdgQ2L-0/maxresdefault.jpg'),
	(2, 'Cảm nhận bài hát Tâm lặng như nước', 'Tâm lặng như nước', 4, 'Tóm tắt Tâm lặng như nước', 'Nội dung bài hát Tâm lặng như nước', 3, '2019-08-09 00:00:00', 'https://i.ytimg.com/vi/UVR8Pd1t9f0/maxresdefault.jpg'),
	(3, 'Cảm nhận bài hát Yêu một người có lẽ', 'Yêu một người có lẽ', 2, 'Tóm tắt Yêu một người có lẽ', 'Nội dung yêu một người có lẽ', 2, '2016-10-19 00:00:00', 'https://i.scdn.co/image/ab67616d0000b273d28b4546b16fc8e0000f277e'),
	(4, 'Cảm nhận bài hát Đáy biển', 'Đáy biển', 4, 'Tóm tắt Đáy biển', 'Nội dung Đáy biển', 2, '2017-02-24 00:00:00', 'https://i.ytimg.com/vi/SWecf5gAEVk/maxresdefault.jpg'),
	(5, 'Cảm nhận bài hát Tuổi trẻ', 'Tuổi trẻ', 2, 'Tóm tắt bài Tuổi trẻ', 'Nội dung bài hát Tuổi trẻ', 1, '2012-01-10 08:40:00', 'https://evan.com.vn/wp-content/uploads/2022/04/tuoi-tre-nhu-mot-con-mua-rao.jpg'),
	(6, '', 'Lỡ duyên', 1, 'Tóm tắt bài', 'Nội dung bài Lỡ duyên', 4, '2020-12-10 04:00:00', 'https://i.ytimg.com/vi/fq_H4A3HgD4/maxresdefault.jpg')
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(7, 'Cây và gió', 'Cây và gió', 1, 'Em và anh, hai đứa quen nhau thật tình cờ', 'Em thương anh', 4, '2005-02-07 07:07:00', 'https://media.blogradio.vn/Upload/CMS/Nam_2011/Thang_9/Ngay_8/Images/Avatar/images592143_Gio_1.jpg');
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(8, '', 'Xứ thanh hoa', 4, 'Tóm tắt bài Xú thanh hoa', 'Nội dung bài yêu thương nàng', 1, '2000-02-11 05:00:00', 'https://i.ytimg.com/vi/fq_H4A3HgD4/maxresdefault.jpg')
	
-- Dumping structure for table btth01_cse485_ex02.tacgia
CREATE TABLE IF NOT EXISTS `tacgia` (
  `ma_tgia` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ten_tgia` varchar(100) NOT NULL DEFAULT '',
  `hinh_tgia` varchar(100) DEFAULT '',
  PRIMARY KEY (`ma_tgia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table btth01_cse485_ex02.tacgia: ~4 rows (approximately)
INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
	(1, 'Châu Kiệt Luân', ''),
	(2, 'Nhacvietplus', 'https://i.rada.vn/Data/image/2012/Thang11/20/Nhacvietplus-2.jpg'),
	(3, 'Phi Nhung', 'https://picsum.photos/seed/picsum/200/300'),
	(4, 'Trần Lập Nông', 'https://i.pinimg.com/736x/30/03/43/300343a6735c7b5c3137a866b08aa7c9.jpg');
	-- Delete

-- Dumping structure for table btth01_cse485_ex02.theloai
CREATE TABLE IF NOT EXISTS `theloai` (
  `ma_tloai` int(10) unsigned NOT NULL,
  `ten_tloai` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`ma_tloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table btth01_cse485_ex02.theloai: ~4 rows (approximately)
INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`) VALUES
	(1, 'Nhạc trữ tình'),
	(2, 'Nhạc trẻ'),
	(3, 'USK'),
	(4, 'C-POP');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
nha_san_xuat