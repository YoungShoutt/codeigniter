/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 10:50:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gdg_lokasi_brg
-- ----------------------------
DROP TABLE IF EXISTS `gdg_lokasi_brg`;
CREATE TABLE `gdg_lokasi_brg` (
  `lokbrg_key` varchar(6) NOT NULL,
  `lokbrg_gudang` varchar(30) DEFAULT NULL,
  `lokbrg_ruang` varchar(30) DEFAULT NULL,
  `lokbrg_rak` varchar(30) DEFAULT NULL,
  `lokbrg_sisi` varchar(30) NOT NULL,
  `lokbrg_baris` varchar(30) NOT NULL,
  `lokbrg_kolom` varchar(30) NOT NULL,
  `lokbrg_mat` varchar(2) NOT NULL,
  `lokbrg_keterangan` varchar(100) NOT NULL,
  `lokbrg_jenis` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`lokbrg_key`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
