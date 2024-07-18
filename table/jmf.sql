/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 10:44:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jmf
-- ----------------------------
DROP TABLE IF EXISTS `jmf`;
CREATE TABLE `jmf` (
  `jmf_key` varchar(10) NOT NULL DEFAULT '',
  `jmf_name` varchar(255) NOT NULL,
  `jmf_size` varchar(255) NOT NULL,
  `jmf_unit` varchar(10) NOT NULL,
  `jmf_use` varchar(60) DEFAULT NULL,
  `jmf_dept` varchar(3) DEFAULT NULL,
  `jmf_year_qty` double DEFAULT NULL,
  `jmf_stok_min` double(13,4) DEFAULT NULL,
  `jmf_last_price` double(20,4) DEFAULT NULL,
  `jmf_jego_qty` double DEFAULT NULL,
  `jmf_jego_amt` double DEFAULT NULL,
  `jmf_kg` decimal(13,4) DEFAULT NULL,
  `jmf_old_price` double(13,4) DEFAULT NULL,
  `jmf_pakai` varchar(1) DEFAULT NULL,
  `jmf_tahun` date DEFAULT NULL,
  `jmf_currency` varchar(10) DEFAULT NULL,
  `jmf_kurs` double DEFAULT NULL,
  `jmf_cod_prod` varchar(10) NOT NULL,
  `jmf_bilet_size` varchar(10) NOT NULL,
  `jmf_key_besar` varchar(2) NOT NULL,
  `jmf_key_tengah` varchar(4) NOT NULL,
  `jmf_key_kecil` varchar(4) NOT NULL,
  `jmf_spl_key` varchar(6) NOT NULL,
  `jmf_account_dr` varchar(10) NOT NULL,
  `jmf_account_tmp` varchar(10) NOT NULL,
  `Jmf_id_gambar` varchar(50) NOT NULL,
  `jmf_account_ap` varchar(10) DEFAULT NULL,
  `jmf_repair` varchar(1) DEFAULT NULL,
  `jmf_foto` varchar(255) DEFAULT NULL,
  `jmf_sysdate` date DEFAULT NULL,
  `jmf_sysuser` varchar(25) DEFAULT NULL,
  `jmf_resiko` varchar(1) DEFAULT NULL,
  `jmf_last_po_date` date DEFAULT NULL,
  `jmf_last_in_date` date DEFAULT NULL,
  `jmf_last_out_date` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `jmf_systime` time DEFAULT NULL,
  `jmf_aktiva` char(1) DEFAULT NULL,
  `jmf_tempat` varchar(6) DEFAULT NULL,
  `jmf_key_lama` varchar(10) DEFAULT NULL,
  `jmf_foto_file` longblob,
  `jmf_time_limit_order` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`jmf_key`),
  KEY `jmf_kunci` (`jmf_key`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
