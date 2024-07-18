/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 10:48:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for spl_d
-- ----------------------------
DROP TABLE IF EXISTS `spl_d`;
CREATE TABLE `spl_d` (
  `spl_key` char(6) DEFAULT NULL,
  `spl_code` char(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
