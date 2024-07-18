/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 10:44:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jmf_d
-- ----------------------------
DROP TABLE IF EXISTS `jmf_d`;
CREATE TABLE `jmf_d` (
  `jmf_area` varchar(5) DEFAULT NULL,
  `jmf_kode_area` varchar(10) DEFAULT NULL,
  `jmf_kode_master` varchar(10) DEFAULT NULL,
  `jmf_nama` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
