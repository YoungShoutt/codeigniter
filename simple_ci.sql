/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100417 (10.4.17-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : simple_ci

 Target Server Type    : MySQL
 Target Server Version : 100417 (10.4.17-MariaDB)
 File Encoding         : 65001

 Date: 23/01/2024 13:21:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ang_dataijintrayek
-- ----------------------------
DROP TABLE IF EXISTS `ang_dataijintrayek`;
CREATE TABLE `ang_dataijintrayek`  (
  `tgl` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_ijin_trayek` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `di_berikan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_kendaraan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `daya_angkut` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kd_trayek` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trayek` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rute_berangkat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rute_kembali` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_mulai_berlaku` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sempat_tgl` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ang_dataijintrayek
-- ----------------------------

-- ----------------------------
-- Table structure for dyn_groups
-- ----------------------------
DROP TABLE IF EXISTS `dyn_groups`;
CREATE TABLE `dyn_groups`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `urut` int NULL DEFAULT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `abbrev` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of dyn_groups
-- ----------------------------
INSERT INTO `dyn_groups` VALUES (1, 1, 'MASTER DATA', '');

-- ----------------------------
-- Table structure for dyn_menu
-- ----------------------------
DROP TABLE IF EXISTS `dyn_menu`;
CREATE TABLE `dyn_menu`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `urut` int NULL DEFAULT NULL,
  `grup_id` int NULL DEFAULT NULL,
  `parent_id` int NULL DEFAULT NULL,
  `is_parent` int NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `module_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1030 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of dyn_menu
-- ----------------------------
INSERT INTO `dyn_menu` VALUES (1029, 1, 1, 0, 0, 'Master Data', '#', 'index.php/admin/mst_karyawan');

-- ----------------------------
-- Table structure for log_activity
-- ----------------------------
DROP TABLE IF EXISTS `log_activity`;
CREATE TABLE `log_activity`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `type` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `log_activity` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `datetime` datetime NULL DEFAULT NULL,
  `ipaddress` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 48118 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of log_activity
-- ----------------------------
INSERT INTO `log_activity` VALUES (47912, 'admin', 'Login', 'User Telah Login', '2023-11-21 13:13:10', '::1');
INSERT INTO `log_activity` VALUES (47913, 'admin', 'Login', 'User Telah Login', '2023-11-22 06:18:10', '::1');
INSERT INTO `log_activity` VALUES (47914, NULL, 'Logout', 'User Telah Logout', '2023-11-22 10:14:53', '::1');
INSERT INTO `log_activity` VALUES (47915, 'admin', 'Login', 'User Telah Login', '2023-11-28 04:21:25', '::1');
INSERT INTO `log_activity` VALUES (47916, 'admin', 'Login', 'User Telah Login', '2023-11-28 04:22:06', '::1');
INSERT INTO `log_activity` VALUES (47917, 'admin', 'Logout', 'User Telah Logout', '2023-11-28 04:23:53', '::1');
INSERT INTO `log_activity` VALUES (47918, 'admin', 'Login', 'User Telah Login', '2023-11-28 04:25:20', '::1');
INSERT INTO `log_activity` VALUES (47919, 'admin', 'Logout', 'User Telah Logout', '2023-11-28 04:29:52', '::1');
INSERT INTO `log_activity` VALUES (47920, 'admin', 'Login', 'User Telah Login', '2023-11-28 04:30:24', '::1');
INSERT INTO `log_activity` VALUES (47921, 'admin', 'Logout', 'User Telah Logout', '2023-11-28 04:36:45', '::1');
INSERT INTO `log_activity` VALUES (47922, 'admin', 'Login', 'User Telah Login', '2023-11-28 04:36:54', '::1');
INSERT INTO `log_activity` VALUES (47923, 'admin', 'Login', 'User Telah Login', '2023-11-28 05:19:39', '::1');
INSERT INTO `log_activity` VALUES (47924, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =01', '2023-11-28 06:16:54', '::1');
INSERT INTO `log_activity` VALUES (47925, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =012', '2023-11-28 06:17:21', '::1');
INSERT INTO `log_activity` VALUES (47926, 'admin', 'Login', 'User Telah Login', '2023-11-28 06:26:47', '::1');
INSERT INTO `log_activity` VALUES (47927, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =KD01', '2023-11-28 06:31:26', '::1');
INSERT INTO `log_activity` VALUES (47928, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =011', '2023-11-28 06:39:59', '::1');
INSERT INTO `log_activity` VALUES (47929, 'admin', 'Hapus', 'admin Telah menghapus data di Master provinsi dengan Kode provinsi =01', '2023-11-28 06:44:36', '::1');
INSERT INTO `log_activity` VALUES (47930, 'admin', 'Hapus', 'admin Telah menghapus data di Master provinsi dengan Kode provinsi =011', '2023-11-28 06:44:41', '::1');
INSERT INTO `log_activity` VALUES (47931, 'admin', 'Hapus', 'admin Telah menghapus data di Master provinsi dengan Kode provinsi =012', '2023-11-28 06:44:45', '::1');
INSERT INTO `log_activity` VALUES (47932, 'admin', 'Edit', 'admin Telah telah mengedit data di Master provinsi dengan Kode provinsi =KD01', '2023-11-28 06:45:32', '::1');
INSERT INTO `log_activity` VALUES (47933, 'admin', 'Logout', 'User Telah Logout', '2023-11-28 07:53:57', '::1');
INSERT INTO `log_activity` VALUES (47934, 'admin', 'Login', 'User Telah Login', '2023-11-28 07:55:44', '::1');
INSERT INTO `log_activity` VALUES (47935, 'admin', 'Logout', 'User Telah Logout', '2023-11-28 08:01:01', '::1');
INSERT INTO `log_activity` VALUES (47936, 'admin', 'Login', 'User Telah Login', '2023-11-28 08:01:08', '::1');
INSERT INTO `log_activity` VALUES (47937, 'admin', 'Edit', 'admin Telah telah mengedit data di Master provinsi dengan Kode provinsi =KD01', '2023-11-28 08:31:27', '::1');
INSERT INTO `log_activity` VALUES (47938, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =KD02', '2023-11-28 08:31:44', '::1');
INSERT INTO `log_activity` VALUES (47939, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =KD03', '2023-11-28 08:31:54', '::1');
INSERT INTO `log_activity` VALUES (47940, 'admin', 'Edit', 'admin Telah telah mengedit data di Master provinsi dengan Kode provinsi =KD01', '2023-11-28 08:32:05', '::1');
INSERT INTO `log_activity` VALUES (47941, 'admin', 'Hapus', 'admin Telah menghapus data di Master provinsi dengan Kode provinsi =KD01', '2023-11-28 08:32:14', '::1');
INSERT INTO `log_activity` VALUES (47942, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =KD01', '2023-11-28 08:32:36', '::1');
INSERT INTO `log_activity` VALUES (47943, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =KD01', '2023-11-28 08:33:47', '::1');
INSERT INTO `log_activity` VALUES (47944, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =KD02', '2023-11-28 08:34:17', '::1');
INSERT INTO `log_activity` VALUES (47945, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =KD03', '2023-11-28 08:34:29', '::1');
INSERT INTO `log_activity` VALUES (47946, 'admin', 'Logout', 'User Telah Logout', '2023-11-28 12:23:21', '::1');
INSERT INTO `log_activity` VALUES (47947, 'admin', 'Login', 'User Telah Login', '2023-11-28 15:59:12', '::1');
INSERT INTO `log_activity` VALUES (47948, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KD0101', '2023-11-28 18:11:26', '::1');
INSERT INTO `log_activity` VALUES (47949, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =02', '2023-11-28 18:15:25', '::1');
INSERT INTO `log_activity` VALUES (47950, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =12', '2023-11-28 18:21:09', '::1');
INSERT INTO `log_activity` VALUES (47951, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =23', '2023-11-28 18:24:56', '::1');
INSERT INTO `log_activity` VALUES (47952, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =213', '2023-11-28 18:27:50', '::1');
INSERT INTO `log_activity` VALUES (47953, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =124', '2023-11-28 18:32:51', '::1');
INSERT INTO `log_activity` VALUES (47954, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =1312', '2023-11-28 18:35:26', '::1');
INSERT INTO `log_activity` VALUES (47955, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =14124', '2023-11-28 18:38:55', '::1');
INSERT INTO `log_activity` VALUES (47956, 'admin', 'Edit', 'admin Telah telah mengedit data di Master kabupaten dengan Kode kabupaten =02', '2023-11-28 18:42:08', '::1');
INSERT INTO `log_activity` VALUES (47957, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =12', '2023-11-28 18:42:17', '::1');
INSERT INTO `log_activity` VALUES (47958, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =02', '2023-11-28 18:42:26', '::1');
INSERT INTO `log_activity` VALUES (47959, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =124', '2023-11-28 18:42:33', '::1');
INSERT INTO `log_activity` VALUES (47960, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =1312', '2023-11-28 18:42:37', '::1');
INSERT INTO `log_activity` VALUES (47961, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =14124', '2023-11-28 18:42:41', '::1');
INSERT INTO `log_activity` VALUES (47962, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =213', '2023-11-28 18:42:44', '::1');
INSERT INTO `log_activity` VALUES (47963, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =23', '2023-11-28 18:42:48', '::1');
INSERT INTO `log_activity` VALUES (47964, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =KD0101', '2023-11-28 18:42:52', '::1');
INSERT INTO `log_activity` VALUES (47965, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KD0101', '2023-11-28 18:44:08', '::1');
INSERT INTO `log_activity` VALUES (47966, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KD0102', '2023-11-28 18:44:40', '::1');
INSERT INTO `log_activity` VALUES (47967, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KD0103', '2023-11-28 18:44:52', '::1');
INSERT INTO `log_activity` VALUES (47968, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KD0104', '2023-11-28 18:45:10', '::1');
INSERT INTO `log_activity` VALUES (47969, NULL, 'Logout', 'User Telah Logout', '2023-11-29 05:18:59', '::1');
INSERT INTO `log_activity` VALUES (47970, NULL, 'Logout', 'User Telah Logout', '2023-11-29 05:50:18', '::1');
INSERT INTO `log_activity` VALUES (47971, 'admin', 'Login', 'User Telah Login', '2023-11-29 07:48:49', '::1');
INSERT INTO `log_activity` VALUES (47972, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =KD0104', '2023-11-29 07:49:16', '::1');
INSERT INTO `log_activity` VALUES (47973, 'admin', 'Logout', 'User Telah Logout', '2023-11-29 08:51:21', '::1');
INSERT INTO `log_activity` VALUES (47974, 'admin', 'Login', 'User Telah Login', '2023-11-29 08:52:25', '::1');
INSERT INTO `log_activity` VALUES (47975, NULL, 'Logout', 'User Telah Logout', '2023-11-29 11:36:19', '::1');
INSERT INTO `log_activity` VALUES (47976, NULL, 'Logout', 'User Telah Logout', '2023-11-29 11:36:20', '::1');
INSERT INTO `log_activity` VALUES (47977, 'admin', 'Login', 'User Telah Login', '2023-11-29 11:36:41', '::1');
INSERT INTO `log_activity` VALUES (47978, 'admin', 'Login', 'User Telah Login', '2023-11-29 15:23:39', '::1');
INSERT INTO `log_activity` VALUES (47979, 'admin', 'Logout', 'User Telah Logout', '2023-11-29 16:38:16', '::1');
INSERT INTO `log_activity` VALUES (47980, 'admin', 'Logout', 'User Telah Logout', '2023-11-29 16:38:16', '::1');
INSERT INTO `log_activity` VALUES (47981, 'admin', 'Login', 'User Telah Login', '2023-11-30 10:04:15', '::1');
INSERT INTO `log_activity` VALUES (47982, 'admin', 'Logout', 'User Telah Logout', '2023-11-30 11:05:19', '::1');
INSERT INTO `log_activity` VALUES (47983, 'admin', 'Login', 'User Telah Login', '2023-12-05 03:57:16', '::1');
INSERT INTO `log_activity` VALUES (47984, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =0101', '2023-12-05 07:42:13', '::1');
INSERT INTO `log_activity` VALUES (47985, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =12321', '2023-12-05 07:45:56', '::1');
INSERT INTO `log_activity` VALUES (47986, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =998', '2023-12-05 07:49:02', '::1');
INSERT INTO `log_activity` VALUES (47987, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =998', '2023-12-05 07:49:35', '::1');
INSERT INTO `log_activity` VALUES (47988, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =123', '2023-12-05 08:00:12', '::1');
INSERT INTO `log_activity` VALUES (47989, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =12312', '2023-12-05 08:01:23', '::1');
INSERT INTO `log_activity` VALUES (47990, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =12312R', '2023-12-05 08:30:46', '::1');
INSERT INTO `log_activity` VALUES (47991, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =2132', '2023-12-05 08:31:42', '::1');
INSERT INTO `log_activity` VALUES (47992, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =2132', '2023-12-05 08:31:55', '::1');
INSERT INTO `log_activity` VALUES (47993, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =0101', '2023-12-05 09:21:51', '::1');
INSERT INTO `log_activity` VALUES (47994, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =0201', '2023-12-05 10:07:47', '::1');
INSERT INTO `log_activity` VALUES (47995, 'admin', 'Edit', 'admin Telah telah mengedit data di Master kabupaten dengan Kode kabupaten =0101', '2023-12-05 10:07:56', '::1');
INSERT INTO `log_activity` VALUES (47996, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =0301', '2023-12-05 10:08:08', '::1');
INSERT INTO `log_activity` VALUES (47997, 'admin', 'Edit', 'admin Telah telah mengedit data di Master kabupaten dengan Kode kabupaten =0101', '2023-12-05 10:08:36', '::1');
INSERT INTO `log_activity` VALUES (47998, 'admin', 'Hapus', 'admin Telah menghapus data di Master kabupaten dengan Kode kabupaten =0101', '2023-12-05 10:10:57', '::1');
INSERT INTO `log_activity` VALUES (47999, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =0101', '2023-12-05 10:24:17', '::1');
INSERT INTO `log_activity` VALUES (48000, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =0102', '2023-12-05 10:24:30', '::1');
INSERT INTO `log_activity` VALUES (48001, 'admin', 'Login', 'User Telah Login', '2023-12-05 11:05:50', '::1');
INSERT INTO `log_activity` VALUES (48002, 'admin', 'Logout', 'User Telah Logout', '2023-12-05 12:35:15', '::1');
INSERT INTO `log_activity` VALUES (48003, 'admin', 'Logout', 'User Telah Logout', '2023-12-05 12:35:15', '::1');
INSERT INTO `log_activity` VALUES (48004, NULL, 'Logout', 'User Telah Logout', '2023-12-05 12:35:15', '::1');
INSERT INTO `log_activity` VALUES (48005, 'admin', 'Login', 'User Telah Login', '2023-12-05 12:44:11', '::1');
INSERT INTO `log_activity` VALUES (48006, 'admin', 'Logout', 'User Telah Logout', '2023-12-05 14:00:18', '::1');
INSERT INTO `log_activity` VALUES (48007, 'admin', 'Login', 'User Telah Login', '2023-12-07 16:36:21', '::1');
INSERT INTO `log_activity` VALUES (48008, NULL, 'Logout', 'User Telah Logout', '2023-12-08 05:41:51', '::1');
INSERT INTO `log_activity` VALUES (48009, 'admin', 'Login', 'User Telah Login', '2023-12-11 18:16:18', '::1');
INSERT INTO `log_activity` VALUES (48010, NULL, 'Logout', 'User Telah Logout', '2023-12-12 08:08:09', '::1');
INSERT INTO `log_activity` VALUES (48011, 'admin', 'Login', 'User Telah Login', '2023-12-12 12:22:59', '::1');
INSERT INTO `log_activity` VALUES (48012, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =010101', '2023-12-12 12:30:31', '::1');
INSERT INTO `log_activity` VALUES (48013, 'admin', 'Logout', 'User Telah Logout', '2023-12-12 13:38:53', '::1');
INSERT INTO `log_activity` VALUES (48014, 'admin', 'Login', 'User Telah Login', '2023-12-16 13:17:50', '::1');
INSERT INTO `log_activity` VALUES (48015, 'admin', 'Logout', 'User Telah Logout', '2023-12-16 14:27:17', '::1');
INSERT INTO `log_activity` VALUES (48016, 'admin', 'Login', 'User Telah Login', '2023-12-16 17:17:36', '::1');
INSERT INTO `log_activity` VALUES (48017, 'admin', 'Hapus', 'admin Telah menghapus data di Master kecamatan dengan Kode kecamatan =010101', '2023-12-16 17:28:48', '::1');
INSERT INTO `log_activity` VALUES (48018, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =010101', '2023-12-16 17:59:12', '::1');
INSERT INTO `log_activity` VALUES (48019, NULL, 'Logout', 'User Telah Logout', '2023-12-17 12:29:19', '::1');
INSERT INTO `log_activity` VALUES (48020, 'admin', 'Login', 'User Telah Login', '2023-12-18 13:35:09', '::1');
INSERT INTO `log_activity` VALUES (48021, 'admin', 'Login', 'User Telah Login', '2023-12-18 16:41:40', '::1');
INSERT INTO `log_activity` VALUES (48022, NULL, 'Logout', 'User Telah Logout', '2023-12-19 04:40:18', '::1');
INSERT INTO `log_activity` VALUES (48023, NULL, 'Logout', 'User Telah Logout', '2023-12-19 04:40:18', '::1');
INSERT INTO `log_activity` VALUES (48024, NULL, 'Logout', 'User Telah Logout', '2023-12-19 04:40:18', '::1');
INSERT INTO `log_activity` VALUES (48025, NULL, 'Logout', 'User Telah Logout', '2023-12-19 04:40:19', '::1');
INSERT INTO `log_activity` VALUES (48026, 'admin', 'Login', 'User Telah Login', '2023-12-19 04:45:06', '::1');
INSERT INTO `log_activity` VALUES (48027, NULL, 'Logout', 'User Telah Logout', '2023-12-19 10:23:00', '::1');
INSERT INTO `log_activity` VALUES (48028, 'admin', 'Login', 'User Telah Login', '2023-12-19 10:35:09', '::1');
INSERT INTO `log_activity` VALUES (48029, NULL, 'Logout', 'User Telah Logout', '2023-12-19 12:39:15', '::1');
INSERT INTO `log_activity` VALUES (48030, 'admin', 'Login', 'User Telah Login', '2023-12-19 14:48:29', '::1');
INSERT INTO `log_activity` VALUES (48031, 'admin', 'Logout', 'User Telah Logout', '2023-12-19 16:30:10', '::1');
INSERT INTO `log_activity` VALUES (48032, 'admin', 'Login', 'User Telah Login', '2023-12-20 09:18:53', '::1');
INSERT INTO `log_activity` VALUES (48033, 'admin', 'Logout', 'User Telah Logout', '2023-12-20 10:51:10', '::1');
INSERT INTO `log_activity` VALUES (48034, 'admin', 'Login', 'User Telah Login', '2023-12-20 11:02:56', '::1');
INSERT INTO `log_activity` VALUES (48035, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =020101', '2023-12-20 11:28:04', '::1');
INSERT INTO `log_activity` VALUES (48036, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =030301', '2023-12-20 11:28:21', '::1');
INSERT INTO `log_activity` VALUES (48037, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =01010101', '2023-12-20 12:01:29', '::1');
INSERT INTO `log_activity` VALUES (48038, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =02010101', '2023-12-20 12:02:32', '::1');
INSERT INTO `log_activity` VALUES (48039, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =030101', '2023-12-20 12:04:48', '::1');
INSERT INTO `log_activity` VALUES (48040, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =03010101', '2023-12-20 12:05:14', '::1');
INSERT INTO `log_activity` VALUES (48041, 'admin', 'Simpan', 'admin Telah menyimpan data di Master rtrw dengan Kode rtrw =01', '2023-12-20 12:53:38', '::1');
INSERT INTO `log_activity` VALUES (48042, NULL, 'Logout', 'User Telah Logout', '2023-12-21 11:29:33', '::1');
INSERT INTO `log_activity` VALUES (48043, NULL, 'Logout', 'User Telah Logout', '2023-12-21 11:29:33', '::1');
INSERT INTO `log_activity` VALUES (48044, 'admin', 'Login', 'User Telah Login', '2023-12-21 11:47:31', '::1');
INSERT INTO `log_activity` VALUES (48045, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =PR01', '2023-12-21 13:34:57', '::1');
INSERT INTO `log_activity` VALUES (48046, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =PR02', '2023-12-21 13:36:51', '::1');
INSERT INTO `log_activity` VALUES (48047, 'admin', 'Simpan', 'admin Telah menyimpan data di Master provinsi dengan Kode provinsi =PR03', '2023-12-21 13:37:01', '::1');
INSERT INTO `log_activity` VALUES (48048, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KB01', '2023-12-21 13:37:48', '::1');
INSERT INTO `log_activity` VALUES (48049, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KB02', '2023-12-21 13:37:59', '::1');
INSERT INTO `log_activity` VALUES (48050, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KB0101', '2023-12-21 13:39:14', '::1');
INSERT INTO `log_activity` VALUES (48051, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KB0102', '2023-12-21 13:39:29', '::1');
INSERT INTO `log_activity` VALUES (48052, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KB0201', '2023-12-21 13:39:49', '::1');
INSERT INTO `log_activity` VALUES (48053, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KB0202', '2023-12-21 13:40:08', '::1');
INSERT INTO `log_activity` VALUES (48054, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KB0301', '2023-12-21 13:40:18', '::1');
INSERT INTO `log_activity` VALUES (48055, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =KB0302', '2023-12-21 13:40:42', '::1');
INSERT INTO `log_activity` VALUES (48056, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KC010101', '2023-12-21 13:41:12', '::1');
INSERT INTO `log_activity` VALUES (48057, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KC010102', '2023-12-21 13:41:39', '::1');
INSERT INTO `log_activity` VALUES (48058, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KB0201', '2023-12-21 13:42:41', '::1');
INSERT INTO `log_activity` VALUES (48059, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KB020101', '2023-12-21 13:44:41', '::1');
INSERT INTO `log_activity` VALUES (48060, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KC020101', '2023-12-21 13:45:35', '::1');
INSERT INTO `log_activity` VALUES (48061, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KC020102', '2023-12-21 13:48:59', '::1');
INSERT INTO `log_activity` VALUES (48062, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KC020201', '2023-12-21 13:50:06', '::1');
INSERT INTO `log_activity` VALUES (48063, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KB020202', '2023-12-21 13:50:28', '::1');
INSERT INTO `log_activity` VALUES (48064, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KC030101', '2023-12-21 13:51:03', '::1');
INSERT INTO `log_activity` VALUES (48065, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KC030102', '2023-12-21 13:51:13', '::1');
INSERT INTO `log_activity` VALUES (48066, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KC030201', '2023-12-21 13:51:52', '::1');
INSERT INTO `log_activity` VALUES (48067, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KC030202', '2023-12-21 13:52:09', '::1');
INSERT INTO `log_activity` VALUES (48068, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS01010101', '2023-12-21 13:54:19', '::1');
INSERT INTO `log_activity` VALUES (48069, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS01010102', '2023-12-21 13:54:29', '::1');
INSERT INTO `log_activity` VALUES (48070, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KC010201', '2023-12-21 13:55:47', '::1');
INSERT INTO `log_activity` VALUES (48071, 'admin', 'Simpan', 'admin Telah menyimpan data di Master kecamatan dengan Kode kecamatan =KC010202', '2023-12-21 13:56:06', '::1');
INSERT INTO `log_activity` VALUES (48072, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS01020101', '2023-12-21 13:57:35', '::1');
INSERT INTO `log_activity` VALUES (48073, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS01020202', '2023-12-21 13:59:57', '::1');
INSERT INTO `log_activity` VALUES (48074, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS02020201', '2023-12-21 14:00:16', '::1');
INSERT INTO `log_activity` VALUES (48075, 'admin', 'Hapus', 'admin Telah menghapus data di Master desa dengan Kode desa =DS02020201', '2023-12-21 14:02:15', '::1');
INSERT INTO `log_activity` VALUES (48076, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS02010101', '2023-12-21 14:03:39', '::1');
INSERT INTO `log_activity` VALUES (48077, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS02010201', '2023-12-21 14:04:01', '::1');
INSERT INTO `log_activity` VALUES (48078, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS02020101', '2023-12-21 14:05:45', '::1');
INSERT INTO `log_activity` VALUES (48079, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS02020202', '2023-12-21 14:06:03', '::1');
INSERT INTO `log_activity` VALUES (48080, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS03010101', '2023-12-21 14:06:34', '::1');
INSERT INTO `log_activity` VALUES (48081, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS03010201', '2023-12-21 14:06:57', '::1');
INSERT INTO `log_activity` VALUES (48082, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS03020101', '2023-12-21 14:07:18', '::1');
INSERT INTO `log_activity` VALUES (48083, 'admin', 'Simpan', 'admin Telah menyimpan data di Master desa dengan Kode desa =DS03020201', '2023-12-21 14:07:40', '::1');
INSERT INTO `log_activity` VALUES (48084, 'admin', 'Simpan', 'admin Telah menyimpan data di Master rtrw dengan Kode rtrw =01', '2023-12-21 14:27:43', '::1');
INSERT INTO `log_activity` VALUES (48085, 'admin', 'Simpan', 'admin Telah menyimpan data di Master rtrw dengan Kode rtrw =02', '2023-12-21 14:27:49', '::1');
INSERT INTO `log_activity` VALUES (48086, 'admin', 'Simpan', 'admin Telah menyimpan data di Master rtrw dengan Kode rtrw =03', '2023-12-21 14:30:14', '::1');
INSERT INTO `log_activity` VALUES (48087, 'admin', 'Simpan', 'admin Telah menyimpan data di Master rtrw dengan Kode rtrw =05', '2023-12-21 14:30:41', '::1');
INSERT INTO `log_activity` VALUES (48088, 'admin', 'Simpan', 'admin Telah menyimpan data di Master rtrw dengan Kode rtrw =01', '2023-12-21 14:32:21', '::1');
INSERT INTO `log_activity` VALUES (48089, 'admin', 'Logout', 'User Telah Logout', '2023-12-21 15:38:54', '::1');
INSERT INTO `log_activity` VALUES (48090, 'admin', 'Logout', 'User Telah Logout', '2023-12-21 15:38:54', '::1');
INSERT INTO `log_activity` VALUES (48091, 'admin', 'Login', 'User Telah Login', '2023-12-21 16:41:55', '::1');
INSERT INTO `log_activity` VALUES (48092, 'admin', 'Logout', 'User Telah Logout', '2023-12-21 17:43:09', '::1');
INSERT INTO `log_activity` VALUES (48093, 'admin', 'Login', 'User Telah Login', '2023-12-22 03:41:01', '::1');
INSERT INTO `log_activity` VALUES (48094, 'admin', 'Login', 'User Telah Login', '2023-12-22 07:02:23', '::1');
INSERT INTO `log_activity` VALUES (48095, NULL, 'Logout', 'User Telah Logout', '2023-12-22 10:13:52', '::1');
INSERT INTO `log_activity` VALUES (48096, 'admin', 'Login', 'User Telah Login', '2023-12-30 15:26:54', '::1');
INSERT INTO `log_activity` VALUES (48097, 'admin', 'Logout', 'User Telah Logout', '2023-12-30 16:28:28', '::1');
INSERT INTO `log_activity` VALUES (48098, 'admin', 'Login', 'User Telah Login', '2024-01-01 16:42:39', '::1');
INSERT INTO `log_activity` VALUES (48099, 'admin', 'Logout', 'User Telah Logout', '2024-01-01 17:44:15', '::1');
INSERT INTO `log_activity` VALUES (48100, 'admin', 'Login', 'User Telah Login', '2024-01-09 03:58:26', '::1');
INSERT INTO `log_activity` VALUES (48101, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =JK01', '2024-01-09 05:12:44', '::1');
INSERT INTO `log_activity` VALUES (48102, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =JK02', '2024-01-09 05:13:26', '::1');
INSERT INTO `log_activity` VALUES (48103, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =JK03', '2024-01-09 05:16:32', '::1');
INSERT INTO `log_activity` VALUES (48104, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =KK01', '2024-01-09 05:50:21', '::1');
INSERT INTO `log_activity` VALUES (48105, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =KK02', '2024-01-09 05:55:14', '::1');
INSERT INTO `log_activity` VALUES (48106, NULL, 'Logout', 'User Telah Logout', '2024-01-09 08:03:50', '::1');
INSERT INTO `log_activity` VALUES (48107, 'admin', 'Login', 'User Telah Login', '2024-01-19 09:25:46', '::1');
INSERT INTO `log_activity` VALUES (48108, 'admin', 'Logout', 'User Telah Logout', '2024-01-19 10:28:47', '::1');
INSERT INTO `log_activity` VALUES (48109, 'admin', 'Login', 'User Telah Login', '2024-01-23 03:54:50', '::1');
INSERT INTO `log_activity` VALUES (48110, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =BJ01', '2024-01-23 04:30:24', '::1');
INSERT INTO `log_activity` VALUES (48111, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =BJ02', '2024-01-23 04:30:38', '::1');
INSERT INTO `log_activity` VALUES (48112, 'admin', 'Edit', 'admin Telah telah mengedit data di Master Jenis Kulit dengan Kode Jenis Kulit =BJ02', '2024-01-23 04:31:07', '::1');
INSERT INTO `log_activity` VALUES (48113, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =BK01', '2024-01-23 04:47:49', '::1');
INSERT INTO `log_activity` VALUES (48114, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =BK02', '2024-01-23 04:48:02', '::1');
INSERT INTO `log_activity` VALUES (48115, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =KI01', '2024-01-23 04:55:47', '::1');
INSERT INTO `log_activity` VALUES (48116, 'admin', 'Simpan', 'admin Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =KI02', '2024-01-23 04:55:56', '::1');
INSERT INTO `log_activity` VALUES (48117, NULL, 'Logout', 'User Telah Logout', '2024-01-23 07:20:14', '::1');

-- ----------------------------
-- Table structure for m_bentukjari
-- ----------------------------
DROP TABLE IF EXISTS `m_bentukjari`;
CREATE TABLE `m_bentukjari`  (
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bentukjari` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_bentukjari
-- ----------------------------
INSERT INTO `m_bentukjari` VALUES ('BJ01', 'Panjang', '2024-01-23 04:30:24', 'admin', '0', '::1');
INSERT INTO `m_bentukjari` VALUES ('BJ02', 'Kecil', '2024-01-23 04:31:07', 'admin', '0', '::1');

-- ----------------------------
-- Table structure for m_bentukkuku
-- ----------------------------
DROP TABLE IF EXISTS `m_bentukkuku`;
CREATE TABLE `m_bentukkuku`  (
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bentukkuku` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_bentukkuku
-- ----------------------------
INSERT INTO `m_bentukkuku` VALUES ('BK01', 'Besar', '2024-01-23 04:47:49', 'admin', '0', '::1');
INSERT INTO `m_bentukkuku` VALUES ('BK02', 'Kecil', '2024-01-23 04:48:02', 'admin', '0', '::1');

-- ----------------------------
-- Table structure for m_jnskulit
-- ----------------------------
DROP TABLE IF EXISTS `m_jnskulit`;
CREATE TABLE `m_jnskulit`  (
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jnskulit` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_jnskulit
-- ----------------------------
INSERT INTO `m_jnskulit` VALUES ('JK01', 'Basah', '2024-01-09 05:12:44', 'admin', '0', '::1');
INSERT INTO `m_jnskulit` VALUES ('JK02', 'Kering', '2024-01-09 05:13:25', 'admin', '0', '::1');
INSERT INTO `m_jnskulit` VALUES ('JK03', 'Sensitif', '2024-01-09 05:16:32', 'admin', '0', '::1');

-- ----------------------------
-- Table structure for m_kelainankulit
-- ----------------------------
DROP TABLE IF EXISTS `m_kelainankulit`;
CREATE TABLE `m_kelainankulit`  (
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelainankulit` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_kelainankulit
-- ----------------------------
INSERT INTO `m_kelainankulit` VALUES ('KK01', 'Berminyak', '2024-01-09 05:50:21', 'admin', '0', '::1');
INSERT INTO `m_kelainankulit` VALUES ('KK02', 'Kasar', '2024-01-09 05:55:14', 'admin', '0', '::1');

-- ----------------------------
-- Table structure for m_kontraindikasi
-- ----------------------------
DROP TABLE IF EXISTS `m_kontraindikasi`;
CREATE TABLE `m_kontraindikasi`  (
  `kode` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kontraindikasi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of m_kontraindikasi
-- ----------------------------
INSERT INTO `m_kontraindikasi` VALUES ('KI01', 'Kulit', '2024-01-23 04:55:47', 'admin', '0', '::1');
INSERT INTO `m_kontraindikasi` VALUES ('KI02', 'Kuku', '2024-01-23 04:55:56', 'admin', '0', '::1');

-- ----------------------------
-- Table structure for t_desa
-- ----------------------------
DROP TABLE IF EXISTS `t_desa`;
CREATE TABLE `t_desa`  (
  `kdprov` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kdkab` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kdkec` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kddes` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nmdes` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_desa
-- ----------------------------
INSERT INTO `t_desa` VALUES ('PR01', 'KB0101', 'KC010101', 'DS01010101', 'MOJOLANGU', '2023-12-21 13:54:19', 'admin', '0', '::1');
INSERT INTO `t_desa` VALUES ('PR01', 'KB0101', 'KC010101', 'DS01010102', 'SUMBERSARI', '2023-12-21 13:54:29', 'admin', '0', '::1');
INSERT INTO `t_desa` VALUES ('PR01', 'KB0102', 'KC010201', 'DS01020101', 'GUNDIH', '2023-12-21 13:57:34', 'admin', '0', '::1');
INSERT INTO `t_desa` VALUES ('PR01', 'KB0102', 'KC010202', 'DS01020202', 'JAMBANGAN TIMUR', '2023-12-21 13:59:57', 'admin', '0', '::1');
INSERT INTO `t_desa` VALUES ('PR02', 'KB0201', 'KC020101', 'DS02010101', 'KAMULAN', '2023-12-21 14:03:39', 'admin', '0', '::1');
INSERT INTO `t_desa` VALUES ('PR02', 'KB0201', 'KC020102', 'DS02010201', 'GANDUSARI', '2023-12-21 14:04:01', 'admin', '0', '::1');
INSERT INTO `t_desa` VALUES ('PR02', 'KB0202', 'KC020201', 'DS02020101', 'GONDANG BARAT', '2023-12-21 14:05:45', 'admin', '0', '::1');
INSERT INTO `t_desa` VALUES ('PR02', 'KB0201', 'KC020202', 'DS02020202', 'GANDU', '2023-12-21 14:06:03', 'admin', '0', '::1');
INSERT INTO `t_desa` VALUES ('PR03', 'KB0301', 'KC030101', 'DS03010101', 'LEMABANG SELATAN', '2023-12-21 14:06:34', 'admin', '0', '::1');
INSERT INTO `t_desa` VALUES ('PR02', 'KB0301', 'KC030102', 'DS03010201', 'PADALA', '2023-12-21 14:06:57', 'admin', '0', '::1');
INSERT INTO `t_desa` VALUES ('PR02', 'KB0302', 'KC030201', 'DS03020101', 'CIANAK', '2023-12-21 14:07:18', 'admin', '0', '::1');
INSERT INTO `t_desa` VALUES ('PR02', 'KB0301', 'KC030202', 'DS03020201', 'RAJASA', '2023-12-21 14:07:40', 'admin', '0', '::1');

-- ----------------------------
-- Table structure for t_empl
-- ----------------------------
DROP TABLE IF EXISTS `t_empl`;
CREATE TABLE `t_empl`  (
  `kddept` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `subdept` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jabatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `division_code` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `team_code` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `position_code` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of t_empl
-- ----------------------------

-- ----------------------------
-- Table structure for t_kabupaten
-- ----------------------------
DROP TABLE IF EXISTS `t_kabupaten`;
CREATE TABLE `t_kabupaten`  (
  `kdprov` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kdkab` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nmkab` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_kabupaten
-- ----------------------------
INSERT INTO `t_kabupaten` VALUES ('PR01', 'KB0101', 'MALANG', '2023-12-21 13:39:14', 'admin', '0', '::1');
INSERT INTO `t_kabupaten` VALUES ('PR01', 'KB0102', 'SURABAYA', '2023-12-21 13:39:29', 'admin', '0', '::1');
INSERT INTO `t_kabupaten` VALUES ('PR02', 'KB0201', 'SEMARANG', '2023-12-21 13:39:49', 'admin', '0', '::1');
INSERT INTO `t_kabupaten` VALUES ('PR02', 'KB0202', 'SRAGEN', '2023-12-21 13:40:08', 'admin', '0', '::1');
INSERT INTO `t_kabupaten` VALUES ('PR03', 'KB0301', 'BANDUNG', '2023-12-21 13:40:18', 'admin', '0', '::1');
INSERT INTO `t_kabupaten` VALUES ('PR03', 'KB0302', 'SUMEDANG', '2023-12-21 13:40:42', 'admin', '0', '::1');

-- ----------------------------
-- Table structure for t_kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `t_kecamatan`;
CREATE TABLE `t_kecamatan`  (
  `kdprov` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kdkab` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kdkec` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nmkec` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_kecamatan
-- ----------------------------
INSERT INTO `t_kecamatan` VALUES ('PR01', 'KB0101', 'KC010101', 'LOWOKWARU', '2023-12-21 13:41:12', 'admin', '0', '::1');
INSERT INTO `t_kecamatan` VALUES ('PR01', 'KB0101', 'KC010102', 'SAWOJAJAR', '2023-12-21 13:41:39', 'admin', '0', '::1');
INSERT INTO `t_kecamatan` VALUES ('PR02', 'KB0201', 'KC020101', 'CANDISARI', '2023-12-21 13:45:35', 'admin', '0', '::1');
INSERT INTO `t_kecamatan` VALUES ('PR02', 'KB0201', 'KC020102', 'GUNUNGJATI', '2023-12-21 13:48:59', 'admin', '0', '::1');
INSERT INTO `t_kecamatan` VALUES ('PR02', 'KB0202', 'KC020201', 'GONDANG', '2023-12-21 13:50:06', 'admin', '0', '::1');
INSERT INTO `t_kecamatan` VALUES ('PR02', 'KB0202', 'KC020202', 'SIDOHARJO', '2023-12-21 13:50:28', 'admin', '0', '::1');
INSERT INTO `t_kecamatan` VALUES ('PR03', 'KB0301', 'KC030101', 'LEMBANG', '2023-12-21 13:51:03', 'admin', '0', '::1');
INSERT INTO `t_kecamatan` VALUES ('PR02', 'KB0301', 'KC030102', 'PADALARANG', '2023-12-21 13:51:13', 'admin', '0', '::1');
INSERT INTO `t_kecamatan` VALUES ('PR02', 'KB0302', 'KC030201', 'CISITU', '2023-12-21 13:51:52', 'admin', '0', '::1');
INSERT INTO `t_kecamatan` VALUES ('PR02', 'KB0302', 'KC030202', 'SITURAJA', '2023-12-21 13:52:09', 'admin', '0', '::1');
INSERT INTO `t_kecamatan` VALUES ('PR01', 'KB0102', 'KC010201', 'BUBUTAN', '2023-12-21 13:55:47', 'admin', '0', '::1');
INSERT INTO `t_kecamatan` VALUES ('PR01', 'KB0102', 'KC010202', 'JAMBANGAN', '2023-12-21 13:56:06', 'admin', '0', '::1');

-- ----------------------------
-- Table structure for t_provinsi
-- ----------------------------
DROP TABLE IF EXISTS `t_provinsi`;
CREATE TABLE `t_provinsi`  (
  `kdprov` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nmprov` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_provinsi
-- ----------------------------
INSERT INTO `t_provinsi` VALUES ('PR01', 'JAWA TIMUR', '2023-12-21 13:34:57', 'admin', '0', '::1');
INSERT INTO `t_provinsi` VALUES ('PR02', 'JAWA TENGAH', '2023-12-21 13:36:51', 'admin', '0', '::1');
INSERT INTO `t_provinsi` VALUES ('PR03', 'JAWA BARAT', '2023-12-21 13:37:01', 'admin', '0', '::1');

-- ----------------------------
-- Table structure for t_reminder
-- ----------------------------
DROP TABLE IF EXISTS `t_reminder`;
CREATE TABLE `t_reminder`  (
  `no_transaction` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type_transaction` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `target_reminder` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastupdate` datetime NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `flagdeleted` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ipaddress` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of t_reminder
-- ----------------------------

-- ----------------------------
-- Table structure for t_rtrw
-- ----------------------------
DROP TABLE IF EXISTS `t_rtrw`;
CREATE TABLE `t_rtrw`  (
  `kdprov` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kdkab` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kdkec` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kddes` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rt` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rw` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lastupdate` datetime NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flagdeleted` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipaddress` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_rtrw
-- ----------------------------
INSERT INTO `t_rtrw` VALUES ('PR01', 'KB0101', 'KC010101', 'DS01010101', '01', '01', '2023-12-21 14:27:43', 'admin', '0', '::1');
INSERT INTO `t_rtrw` VALUES ('PR01', 'KB0101', 'KC010101', 'DS01010101', '02', '01', '2023-12-21 14:27:49', 'admin', '0', '::1');
INSERT INTO `t_rtrw` VALUES ('PR02', 'KB0201', 'KC020101', 'DS02010101', '03', '02', '2023-12-21 14:30:14', 'admin', '0', '::1');
INSERT INTO `t_rtrw` VALUES ('PR03', 'KB0301', 'KC030102', 'DS03010201', '05', '10', '2023-12-21 14:30:41', 'admin', '0', '::1');
INSERT INTO `t_rtrw` VALUES ('PR02', 'KB0202', 'KC020201', 'DS02020101', '01', '02', '2023-12-21 14:32:21', 'admin', '0', '::1');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_kary` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_login` datetime NULL DEFAULT NULL,
  `last_logout` datetime NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '-', '2024-01-23 03:54:50', '2024-01-19 10:28:47', 'Online');

-- ----------------------------
-- Table structure for user_dyn_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_dyn_menu`;
CREATE TABLE `user_dyn_menu`  (
  `user_id` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `show_menu` enum('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`, `user_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1030 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = FIXED;

-- ----------------------------
-- Records of user_dyn_menu
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
