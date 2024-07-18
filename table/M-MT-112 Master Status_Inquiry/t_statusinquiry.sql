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

 Date: 19/10/2019 17:31:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_statusinquiry
-- ----------------------------
DROP TABLE IF EXISTS `t_statusinquiry`;
CREATE TABLE `t_statusinquiry`  (
  `StsInquiryCode` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `StsInquiryName` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `LastUpdate` date NULL DEFAULT NULL,
  `userName` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `FlagDeleted` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ipAddress` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`StsInquiryCode`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
