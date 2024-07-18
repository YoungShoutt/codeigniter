/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 13:13:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jpf_f_dtl_tawar
-- ----------------------------
DROP TABLE IF EXISTS `jpf_f_dtl_tawar`;
CREATE TABLE `jpf_f_dtl_tawar` (
  `jpf_key` char(13) DEFAULT NULL,
  `jpf_code` char(10) DEFAULT NULL,
  `jpf_no_regs` char(15) DEFAULT NULL,
  `jpf_po_ke` char(3) NOT NULL,
  `jpf_con` char(3) NOT NULL,
  `jpf_tawar_supp` char(50) DEFAULT NULL,
  `jpf_tawar_harga` double(13,4) DEFAULT NULL,
  `jpf_tawar_supp1` char(50) DEFAULT NULL,
  `jpf_tawar_harga1` double(13,4) DEFAULT NULL,
  `jpf_no_regslam` char(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
