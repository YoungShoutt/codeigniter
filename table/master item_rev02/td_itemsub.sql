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

 Date: 29/10/2019 19:22:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for td_itemsub
-- ----------------------------
DROP TABLE IF EXISTS `td_itemsub`;
CREATE TABLE `td_itemsub`  (
  `itemCode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `itemSubCode` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `subItemCustNo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namaAliasSubItem` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `subItemDWGNo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `unitWeightEstimasi` double(20, 6) NULL DEFAULT NULL,
  `unitWeightDelivery` double(20, 6) NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pict` longblob NULL,
  `fileDrawing` longblob NULL,
  `validFrom` date NULL DEFAULT NULL,
  `validUntil` date NULL DEFAULT NULL,
  `lastUpdate` datetime(0) NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `flagDeleted` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ipAddress` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`itemCode`, `itemSubCode`, `subItemCustNo`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
