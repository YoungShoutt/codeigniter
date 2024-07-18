/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 10:46:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_konversi_sat
-- ----------------------------
DROP TABLE IF EXISTS `t_konversi_sat`;
CREATE TABLE `t_konversi_sat` (
  `kd_prd` char(10) DEFAULT NULL,
  `kd_sat1` char(1) DEFAULT NULL,
  `kd_sat2` char(1) DEFAULT NULL,
  `nil_konversi` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
