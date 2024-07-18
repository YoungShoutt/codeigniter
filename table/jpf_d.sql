/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 13:13:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jpf_d
-- ----------------------------
DROP TABLE IF EXISTS `jpf_d`;
CREATE TABLE `jpf_d` (
  `jpf_key` char(13) DEFAULT NULL,
  `jpf_no_regs` varchar(15) DEFAULT NULL,
  `jpf_po_ke` char(3) NOT NULL,
  `jpf_con` char(3) NOT NULL,
  `jpf_no_regs_occ` char(2) DEFAULT NULL,
  `jpf_regs_date` date DEFAULT NULL,
  `jpf_code` char(10) DEFAULT NULL,
  `jpf_qty` double(20,4) DEFAULT NULL,
  `jpf_harga` double(20,6) DEFAULT NULL,
  `jpf_pokok` double(20,6) DEFAULT NULL,
  `jpf_ppn` double(20,6) DEFAULT NULL,
  `jpf_jumlah` double(20,6) DEFAULT NULL,
  `jpf_stock` double DEFAULT NULL,
  `jpf_in_mat` double(20,4) DEFAULT NULL,
  `jpf_balance` double(13,4) DEFAULT NULL,
  `jpf_terima` date DEFAULT NULL,
  `jpf_inspeksi` date DEFAULT NULL,
  `jpf_buku` date DEFAULT NULL,
  `jpf_wkt_pakai` double DEFAULT NULL,
  `jpf_code_inv` varchar(20) DEFAULT NULL,
  `jpf_remarks` varchar(250) DEFAULT NULL,
  `jpf_pph` double(13,4) DEFAULT NULL,
  `jpf_lain` double(20,6) DEFAULT NULL,
  `jpf_ppn_lain` double(20,6) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `sysdate` date DEFAULT NULL,
  `sysuser` varchar(25) DEFAULT '',
  `systime` time DEFAULT NULL,
  `jpf_no_regs_lama` varchar(15) DEFAULT NULL,
  KEY `pod_key` (`jpf_key`,`jpf_no_regs`,`jpf_code`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
