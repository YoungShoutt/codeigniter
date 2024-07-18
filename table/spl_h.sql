/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 10:47:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for spl_h
-- ----------------------------
DROP TABLE IF EXISTS `spl_h`;
CREATE TABLE `spl_h` (
  `spl_key` char(6) NOT NULL DEFAULT '',
  `spl_name` char(50) NOT NULL DEFAULT '',
  `spl_jenis` char(1) NOT NULL,
  `spl_npwp` char(20) NOT NULL DEFAULT '',
  `spl_npwp_alamat` varchar(255) DEFAULT NULL,
  `spl_npwp_nama` varchar(255) DEFAULT NULL,
  `spl_pkp` char(1) NOT NULL DEFAULT '',
  `spl_address1` char(100) NOT NULL DEFAULT '',
  `spl_kpos1` char(10) NOT NULL DEFAULT '',
  `spl_kota1` char(50) NOT NULL DEFAULT '',
  `spl_prop1` char(50) NOT NULL DEFAULT '',
  `spl_negara1` char(50) NOT NULL DEFAULT '',
  `spl_telepon1` char(25) NOT NULL DEFAULT '',
  `spl_fax1` char(25) NOT NULL DEFAULT '',
  `spl_mail1` char(50) NOT NULL DEFAULT '',
  `spl_web1` char(50) NOT NULL DEFAULT '',
  `spl_address2` char(100) NOT NULL DEFAULT '',
  `spl_kpos2` char(10) NOT NULL DEFAULT '',
  `spl_kota2` char(50) NOT NULL DEFAULT '',
  `spl_prop2` char(50) NOT NULL DEFAULT '',
  `spl_negara2` char(50) NOT NULL DEFAULT '',
  `spl_telepon2` char(25) NOT NULL DEFAULT '',
  `spl_fax2` char(25) NOT NULL DEFAULT '',
  `spl_mail2` char(50) NOT NULL DEFAULT '',
  `spl_web2` char(50) NOT NULL DEFAULT '',
  `spl_cp_nama` char(50) NOT NULL DEFAULT '',
  `spl_cp_jabatan` char(50) NOT NULL DEFAULT '',
  `spl_cp_telepon` char(25) NOT NULL DEFAULT '',
  `spl_cp_hp` char(25) NOT NULL DEFAULT '',
  `spl_cp_mail` char(50) DEFAULT NULL,
  `spl_produk` char(100) DEFAULT NULL,
  `spl_date` date DEFAULT NULL,
  `spl_time` time DEFAULT NULL,
  `spl_bayar` char(1) DEFAULT NULL,
  `spl_bank1` char(50) DEFAULT NULL,
  `spl_rek1` char(30) DEFAULT NULL,
  `spl_jenis_rek1` char(1) DEFAULT NULL,
  `spl_nama_giro1` char(50) DEFAULT NULL,
  `spl_bank2` char(50) NOT NULL,
  `spl_rek2` char(30) NOT NULL,
  `spl_jenis_rek2` char(20) NOT NULL,
  `spl_nama_giro2` char(20) NOT NULL,
  `spl_eva_yy` double DEFAULT NULL,
  `spl_eva_smt` int(11) DEFAULT NULL,
  `spl_eva_nilai` char(1) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `sysdate` date DEFAULT NULL,
  `sysuser` char(25) DEFAULT NULL,
  `spl_blokir` varchar(1) DEFAULT NULL,
  `spl_blokir_date` date DEFAULT NULL,
  `spl_blokir_ket` varchar(255) DEFAULT NULL,
  `spl_bb_tol` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`spl_key`,`spl_name`,`spl_npwp`,`spl_pkp`,`spl_address1`,`spl_kpos1`,`spl_kota1`),
  KEY `spl_key` (`spl_key`,`spl_jenis`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
