/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100315
 Source Host           : localhost:3306
 Source Schema         : hansapratama

 Target Server Type    : MySQL
 Target Server Version : 100315
 File Encoding         : 65001

 Date: 29/10/2019 19:23:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for th_itemsub2
-- ----------------------------
DROP TABLE IF EXISTS `th_itemsub2`;
CREATE TABLE `th_itemsub2`  (
  `itemCode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `itemSubCode2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `itemSubName2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `itemSubSpec2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kdMainMaterial` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lastUpdate` datetime(0) NULL DEFAULT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `flagDeleted` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  `ipAddress` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`itemSubCode2`, `itemCode`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
