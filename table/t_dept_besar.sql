/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 10:49:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_dept_besar
-- ----------------------------
DROP TABLE IF EXISTS `t_dept_besar`;
CREATE TABLE `t_dept_besar` (
  `t_dept_besar_key` char(3) NOT NULL,
  `t_dept_besar_nama` varchar(50) NOT NULL,
  `t_dept_besar_dir` varchar(10) DEFAULT NULL,
  `t_dept_besar_gm` varchar(10) DEFAULT NULL,
  `t_dept_besar_gp` varchar(10) DEFAULT NULL,
  `t_dept_besar_man` varchar(10) DEFAULT NULL,
  `t_dept_besar_asman` varchar(10) DEFAULT NULL,
  `t_dept_besar_spv` varchar(10) DEFAULT NULL,
  `t_dept_man_opr` varchar(10) DEFAULT NULL,
  `t_dept_man_mec` varchar(10) DEFAULT NULL,
  `t_dept_man_elc` varchar(10) DEFAULT NULL,
  `t_dept_besar_eng` varchar(10) DEFAULT NULL,
  `t_dept_asman_opr` varchar(10) DEFAULT NULL,
  `t_dept_asman_mec` varchar(10) DEFAULT NULL,
  `t_dept_asman_elc` varchar(10) DEFAULT NULL,
  `t_dept_eng_opr` varchar(10) DEFAULT NULL,
  `t_dept_eng_mec` varchar(10) DEFAULT NULL,
  `t_dept_eng_elc` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`t_dept_besar_key`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
