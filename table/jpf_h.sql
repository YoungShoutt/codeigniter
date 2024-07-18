/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 13:13:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jpf_h
-- ----------------------------
DROP TABLE IF EXISTS `jpf_h`;
CREATE TABLE `jpf_h` (
  `jpf_key` char(13) NOT NULL DEFAULT '',
  `jpf_po_date` date DEFAULT NULL,
  `jpf_acc_date` date DEFAULT NULL,
  `jpf_supp_kode` char(6) DEFAULT NULL,
  `jpf_kirim` char(3) DEFAULT NULL,
  `jpf_ongkos` char(1) DEFAULT NULL,
  `jpf_jenis` int(11) DEFAULT NULL,
  `jpf_surat` int(3) DEFAULT NULL,
  `jpf_gambar` int(3) DEFAULT NULL,
  `jpf_beestek` int(3) DEFAULT NULL,
  `jpf_bayar` int(4) DEFAULT NULL,
  `jpf_model` int(1) DEFAULT NULL,
  `jpf_um` double(13,4) DEFAULT NULL,
  `jpf_ket1` varchar(80) DEFAULT NULL,
  `jpf_ket2` varchar(80) DEFAULT NULL,
  `jpf_sys_time` time DEFAULT NULL,
  `jpf_sys_date` date DEFAULT NULL,
  `jpf_del_ok` char(1) DEFAULT NULL,
  `jpf_print` char(1) DEFAULT NULL,
  `jpf_jth_tempo` date DEFAULT NULL,
  `jpf_mu` char(4) DEFAULT NULL,
  `jpf_kurs` double(16,4) DEFAULT NULL,
  `jpf_dp` double(20,4) DEFAULT NULL,
  `jpf_pokok_h` double(20,6) DEFAULT NULL,
  `jpf_ppn_h` double(20,6) DEFAULT NULL,
  `jpf_ppn_lain` double(20,6) DEFAULT NULL,
  `jpf_pph_h` double(20,6) DEFAULT NULL,
  `jpf_lain2_h` double(20,6) DEFAULT NULL,
  `jpf_lain` double(20,6) DEFAULT NULL,
  `jpf_flat` enum('1','2','3','4') DEFAULT NULL COMMENT '1=2%,2=4%,3=0.3%',
  `jpf_biaya_lain` double(20,4) NOT NULL,
  `jpf_rd` date NOT NULL,
  `jpf_pbbkb` double(13,4) DEFAULT NULL,
  `total` double(20,4) DEFAULT NULL,
  `pokok` double(20,4) DEFAULT NULL,
  `jasa` double(20,4) DEFAULT NULL,
  `ppn_pokok` double(20,4) DEFAULT NULL,
  `ppn_jasa` double(20,4) DEFAULT NULL,
  `retensi` double(20,4) DEFAULT NULL,
  PRIMARY KEY (`jpf_key`),
  KEY `po_key` (`jpf_key`,`jpf_po_date`,`jpf_supp_kode`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
