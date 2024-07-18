/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 13:12:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jrf_h
-- ----------------------------
DROP TABLE IF EXISTS `jrf_h`;
CREATE TABLE `jrf_h` (
  `jrf_key` varchar(15) DEFAULT NULL,
  `jrf_key_lama` varchar(15) DEFAULT NULL,
  `jrf_jenis` char(1) DEFAULT NULL,
  `jrf_dept` varchar(3) DEFAULT NULL,
  `jrf_man` char(1) DEFAULT NULL,
  `jrf_date` date DEFAULT NULL,
  `jrf_need_date` date DEFAULT NULL,
  `jrf_agree_date` date DEFAULT NULL,
  `jrf_exp_date` date DEFAULT NULL,
  `jrf_jenis_cost` char(1) DEFAULT NULL,
  `jrf_t_cost` varchar(15) DEFAULT NULL,
  `jrf_sys_date` date DEFAULT NULL,
  `jrf_level1` char(1) DEFAULT NULL,
  `jrf_opr1` varchar(10) DEFAULT NULL,
  `jrf_level2` char(1) DEFAULT NULL,
  `jrf_opr2` varchar(10) DEFAULT NULL,
  `jrf_level3` char(1) DEFAULT NULL,
  `jrf_opr3` varchar(10) DEFAULT NULL,
  `jrf_level4` char(1) DEFAULT NULL,
  `jrf_opr4` varchar(10) DEFAULT NULL,
  `jrf_level5` char(1) DEFAULT NULL,
  `jrf_opr5` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `sysdate` date DEFAULT NULL,
  `sysuser` varchar(25) DEFAULT NULL COMMENT '1 = 2%,2=0.3%3=4%',
  `jpf_flat` enum('1','2','3') DEFAULT '1',
  `systime` time DEFAULT NULL,
  `user_persetujuan` varchar(50) DEFAULT NULL,
  `jrf_terima_pembelian` datetime DEFAULT NULL,
  `jrf_cost_ctr` varchar(1) DEFAULT NULL,
  KEY `jrf_key` (`jrf_key_lama`,`jrf_key`,`jrf_date`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
