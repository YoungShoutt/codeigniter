/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 13:21:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_cost_ctr
-- ----------------------------
DROP TABLE IF EXISTS `t_cost_ctr`;
CREATE TABLE `t_cost_ctr` (
  `dept_besar` varchar(3) DEFAULT NULL,
  `t_cost_key` varchar(15) NOT NULL,
  `nick_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`t_cost_key`),
  KEY `t_cost_key` (`t_cost_key`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
