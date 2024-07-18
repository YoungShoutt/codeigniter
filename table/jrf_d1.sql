/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 13:13:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jrf_d1
-- ----------------------------
DROP TABLE IF EXISTS `jrf_d1`;
CREATE TABLE `jrf_d1` (
  `jrf_key` varchar(15) DEFAULT NULL,
  `jrf_con` char(3) DEFAULT NULL,
  `jrf_po_ok` char(1) DEFAULT NULL,
  `jrf_po_no` varchar(13) DEFAULT NULL,
  `jrf_po_qty` decimal(13,4) DEFAULT NULL,
  `jrf_m_qty` decimal(13,4) DEFAULT NULL,
  `jrf_code_mat` char(10) DEFAULT NULL,
  `jrf_m_date` date DEFAULT NULL,
  `jrf_spb_no` varchar(16) DEFAULT NULL,
  `jrf_po_ke` char(3) NOT NULL,
  `jrf_no_regs_occ` char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
