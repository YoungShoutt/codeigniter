/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 13:12:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jrf_d
-- ----------------------------
DROP TABLE IF EXISTS `jrf_d`;
CREATE TABLE `jrf_d` (
  `jrf_key` varchar(15) DEFAULT NULL,
  `jrf_key_lama` varchar(15) DEFAULT NULL,
  `jrf_con` varchar(5) DEFAULT NULL,
  `jrf_code_mat` varchar(10) DEFAULT NULL,
  `jrf_kel` varchar(15) DEFAULT NULL COMMENT 't_cost_ctr',
  `jrf_harga` double(20,4) DEFAULT NULL,
  `jrf_qty` double(20,4) DEFAULT NULL,
  `jrf_stock` double DEFAULT NULL,
  `jrf_used` varchar(150) DEFAULT NULL,
  `jrf_trima_date` date NOT NULL,
  `jrf_pakai` double DEFAULT NULL,
  `jrf_code_inv` varchar(20) DEFAULT NULL,
  `jrf_remarks_1` varchar(150) DEFAULT NULL,
  `jrf_remarks_2` varchar(150) DEFAULT NULL,
  `jrf_qty_act` double(13,4) DEFAULT NULL,
  `jrf_user` varchar(10) DEFAULT NULL,
  `jrf_last_date` date DEFAULT NULL,
  `jrf_last_time` time DEFAULT NULL,
  `jrf_approval` char(1) NOT NULL,
  `jrf_app_name` varchar(15) NOT NULL,
  `jrf_po_ok` char(1) DEFAULT NULL,
  `jrf_po_no` varchar(10) DEFAULT NULL,
  `jrf_po_qty` decimal(13,4) DEFAULT NULL,
  `jrf_in_qty` decimal(13,4) DEFAULT NULL,
  `jrf_sys_time` time DEFAULT NULL,
  `jrf_del` char(1) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `sysdate` date DEFAULT NULL,
  `sysuser` varchar(25) DEFAULT NULL,
  `jrf_app_date` date NOT NULL,
  `sys_app_time` time DEFAULT NULL,
  `jrf_batal_name` varchar(50) DEFAULT NULL,
  `butuh` date DEFAULT NULL,
  KEY `jrf_d_key` (`jrf_key_lama`,`jrf_key`,`jrf_code_mat`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
