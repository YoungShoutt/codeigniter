/*
 Navicat Premium Data Transfer

 Source Server         : hansapratama
 Source Server Type    : MySQL
 Source Server Version : 100316
 Source Host           : localhost:3306
 Source Schema         : hansapratama

 Target Server Type    : MySQL
 Target Server Version : 100316
 File Encoding         : 65001

 Date: 19/10/2019 17:29:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_hutcustomer
-- ----------------------------
DROP TABLE IF EXISTS `t_hutcustomer`;
CREATE TABLE `t_hutcustomer`  (
  `cdCust` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NamaPejabat` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Jabatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `UltahPejabat` date NULL DEFAULT NULL,
  `HutPlant` date NULL DEFAULT NULL,
  `LastUpdate` date NULL DEFAULT NULL,
  `userName` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `FlagDeleted` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ipAddress` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`cdCust`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
