-- MySQL dump 10.16  Distrib 10.1.31-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: artikel
-- ------------------------------------------------------
-- Server version	10.1.31-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artikel` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `topic` varchar(30) NOT NULL,
  `confidence` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES (2,'Mantan Presiden AS Meninggal Dunia','WASHINGTON DC, KOMPAS.com - Kabar duka datang dari Amerika Serikat (AS) di mana mantan Presiden George Herbert Walker Bush meninggal dunia dalam usia 94 tahun Jumat (30/11/2018). Pengumuman itu disampaikan anaknya yang juga mantan Presiden George W Bush, yang kemudian diperkuat juru bicara Jim McGrath, dilansir CNN Sabtu (1/12/2018). Kematian George HW Bush terjadi setelah istrinya yang sudah bersamanya selama 73 tahun, Barbara Bush, meninggal dunia dalam usia 92 tahun pada 17 April lalu. George Bush Senior, begitu dia dipanggil, adalah presiden ke-41 AS yang menjabat pada 20 Januari 1989 hingga 20 Januari 1993. Selama memerintah, Bush dianggap tidak punya kharisma seperti pendahulunya, Ronald Reagan, di mana dia pernah menjadi wakilnya pada periode 1981 hingga 1989. Namun, Bush dihormati karena begitu tenang menghadapi gejolak dunia yang terjadi pada akhir dekade 1980 dan awal 1990-an. Diawali dengan runtuhnya Tembok Berlin yang kemudian berlanjut dengan bubarnya Uni Soviet dan membuat AS menjadi satu-satunya negara adikuasa saat itu. Kebijakan luar negeri Bush yang paling terkenal adalah intervensi AS ke Kuwait untuk mengusir Irak di bawah komando Saddam Hussein yang dikenal sebagai Perang Teluk. Kemudian dia juga mengerahkan militer untuk menginvasi pada 1989-1990 setelah Marinir yang sedang tak bertugas dibunuh pasukan diktator Manuel Noriega. Pasukan AS yang dibantu oposisi pimpinan Guillermo Endara sukses menggulingkan Noriega di mana sang diktator dihukum 40 tahun penjara. Dia juga terkenal ketika dalam konvensi Demokrat 1988 dia menjanjikan tidak akan ada pajak. \'Baca bibir saya. Tidak akan ada pajak baru,\' katanya saat itu.','Governments',0.17208179831505);
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-09 19:42:13
