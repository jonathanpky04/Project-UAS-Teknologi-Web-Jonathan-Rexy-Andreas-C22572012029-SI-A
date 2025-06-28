-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk laptop_pky
CREATE DATABASE IF NOT EXISTS `laptop_pky` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `laptop_pky`;

-- membuang struktur untuk table laptop_pky.info
CREATE TABLE IF NOT EXISTS `info` (
  `idlt` int NOT NULL AUTO_INCREMENT COMMENT 'Id Laptop',
  `nama` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'nama dari laptop',
  `id_jenis` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'id jenis laptop',
  `jenis` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'apa jenis laptop tersebut contoh: Power Effeciency Gaming Laptop',
  `produser` enum('Acer','Asus','Lenovo','HP','Dell','Apple','Samsung','MSI') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'company atau perusahaan produser laptop',
  `deskripsi` text NOT NULL COMMENT 'deskripsi dari laptop mulai dari speksifikasi laptop dan informasi lainnya',
  `foto` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'memberikan bukti atau tampilan dari laptop tersebut',
  PRIMARY KEY (`idlt`),
  KEY `id_jenis` (`id_jenis`),
  CONSTRAINT `info_ibfk_5` FOREIGN KEY (`id_jenis`) REFERENCES `jenisltp` (`id_jenis`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3;

-- Membuang data untuk tabel laptop_pky.info: ~6 rows (lebih kurang)
INSERT INTO `info` (`idlt`, `nama`, `id_jenis`, `jenis`, `produser`, `deskripsi`, `foto`) VALUES
	(37, 'Apple Macbook Pro 16 (M2 Pro)', '001-M', 'Media and AI Processing Optimized Laptop', 'Apple', 'Apple Macbook Pro 16 merupakan pilihan bagi pengguna yang kreatif dalam pekerjaannya, dikarenakan laptop ini mampu melakukan multitasking berat, rendering yang cepat, dan memiliki layar display yang tajam.Chipset  : Apple M2 ProRAM      : 96 GBStorage  : 8TB SSDScreen   : 16', 'Macbook-M2-Pro-2022.jpg'),
	(38, 'Dell XPS 15', '001-H', 'High Performance Laptop', 'Dell', 'Laptop dengan layar 4K OLED yang diperuntukkan bagi pengguna yang sering mengedit video dan membuat desain grafis.OS         : Windows 11 HomeProcessor  : Intel core i7-13700HDisplay    : 15.6', 'Dell-XPS-15.jpg'),
	(39, 'Asus Chromebook Flip C214', '001-N', 'Networking Specialized Laptop', 'Asus', 'Laptop Standar dengan harga terjangkau bagi pengguna dengan kebutuhan hanya mengetik dan browsing di internet.OS         : Chrome OSProcessor  : Intel Celeron N4020Display    : 11.6', 'Asus-Chromebook-Flip-C214.jpg'),
	(40, 'Acer Nitro 5', '001-H', 'High Performance Laptop', 'Acer', 'Laptop dengan performa tinggi bagi pengguna yang menginginkan laptopnya menampung game dengan speksifikasi tinggi sekaligus melakukan pekerjaan hariannya.OS          : Windows 11 HomeProcessor   : Intel Core i5-11400H Hexa Core Up to 4.5 GhzRAM         : 8GB DDR4Storage     : 512GB NVMe SSDGraphics    : NVIDIA GeForce RTX 3050 4GB GDDR6Battery     : 4-Cell ION LithiumPrice       : Rp 13.500.000,00', 'Acer-Nitro-5.jpg'),
	(41, 'MSI Bravo 15 B5DD', '001-H', 'High Performance Laptop', 'MSI', 'Laptop Gaming dari Produser MSI yang mempunyai layar dengan Refresh Rate 144 Hz, memiliki visual yang tajam dan mulus dimata sehingga pengalaman bermain terasa lebih lancar.OS         : Windows 11 HomeProcessor  : AMD Ryzen 7 5800H Quad Core Up To 4.4 GhzRAM        : 8GB DDR4Storage    : 512GB SSDGraphics   : AMD Radeon RX 5500M 4GB GDDR6Battery    : 51 WHrsPrice      : Rp 13.999.000,00', 'MSI-Bravo-15-B5DD.jpg'),
	(42, 'HP Victus Gaming Laptop 15', '001-H', 'High Performance Laptop', 'HP', 'Laptop Gaming HP Victus 15 memberi pengalaman gaming yang menyenangkan dan memukau dengan layar laptop yang mulus dan tajam, serta kemampuan laptop yang dapat menampung banyak game yang anda mau.OS         : Windows 11 HomeProcessor  : AMD Ryzen 5 5600H Hexa Core up to 4.2 GHzRAM        : 16GB DDR4Storage    : 512GB PCli NVMe SSDGraphics   : NVIDIA GeForce RTX 3050 4GB GDDR6Battery    : 70 WHrsPrice      : Rp 14.499.000,00', 'HP-Victus-GL-15.jpg');

-- membuang struktur untuk view laptop_pky.infoltp
-- Membuat tabel sementara untuk menangani kesalahan ketergantungan VIEW
CREATE TABLE `infoltp` (
	`nama` VARCHAR(50) NOT NULL COMMENT 'nama dari laptop' COLLATE 'utf8mb3_general_ci',
	`id_jenis` VARCHAR(20) NOT NULL COMMENT 'id jenis dari laptop' COLLATE 'utf8mb3_general_ci',
	`jenis` VARCHAR(50) NOT NULL COMMENT 'jenis laptop tersebut, contoh: Power Effeciency Gaming Laptop' COLLATE 'utf8mb3_general_ci',
	`produser` ENUM('Acer','Asus','Lenovo','HP','Dell','Apple','Samsung','MSI') NOT NULL COMMENT 'company atau perusahaan produser laptop' COLLATE 'utf8mb3_general_ci',
	`deskripsi` TEXT NOT NULL COMMENT 'deskripsi dari laptop mulai dari speksifikasi laptop dan informasi lainnya' COLLATE 'utf8mb3_general_ci',
	`foto` VARCHAR(300) NOT NULL COMMENT 'memberikan bukti atau tampilan dari laptop tersebut' COLLATE 'utf8mb3_general_ci'
) ENGINE=MyISAM;

-- membuang struktur untuk table laptop_pky.jenisltp
CREATE TABLE IF NOT EXISTS `jenisltp` (
  `id_jenis` varchar(20) NOT NULL COMMENT 'id jenis dari laptop',
  `jenis` varchar(50) NOT NULL COMMENT 'jenis laptop tersebut, contoh: Power Effeciency Gaming Laptop',
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Membuang data untuk tabel laptop_pky.jenisltp: ~9 rows (lebih kurang)
INSERT INTO `jenisltp` (`id_jenis`, `jenis`) VALUES
	('001-H', 'High Performance Laptop'),
	('001-HK', 'High Performance Laptop (Unlocked SKUs)'),
	('001-HQ', 'High Performance With Quad Core Laptop'),
	('001-HX', 'High Performance Laptop (Unlocked SKUs)'),
	('001-M', 'Media and AI Processing Optimized Laptop'),
	('001-N', 'Networking Specialized Laptop'),
	('001-P', 'Optimized Performance Laptop'),
	('001-U', 'Power Saving/Efficiency Laptop'),
	('001-Y', 'Efficient Performance Laptop');

-- membuang struktur untuk view laptop_pky.infoltp
-- Menghapus tabel sementara dan menciptakan struktur VIEW terakhir
DROP TABLE IF EXISTS `infoltp`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `infoltp` AS select `i`.`nama` AS `nama`,`j`.`id_jenis` AS `id_jenis`,`j`.`jenis` AS `jenis`,`i`.`produser` AS `produser`,`i`.`deskripsi` AS `deskripsi`,`i`.`foto` AS `foto` from (`info` `i` join `jenisltp` `j`) where (`i`.`id_jenis` = `j`.`id_jenis`);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
