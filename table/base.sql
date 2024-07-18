/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 10:50:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for base
-- ----------------------------
DROP TABLE IF EXISTS `base`;
CREATE TABLE `base` (
  `base_no` varchar(10) NOT NULL,
  `base_name` varchar(50) DEFAULT NULL,
  `base_name_pendek` varchar(15) DEFAULT NULL,
  `base_dept` varchar(5) DEFAULT NULL,
  `base_status` char(1) DEFAULT NULL,
  `base_tki` char(1) DEFAULT NULL,
  `base_no_ktp` varchar(30) DEFAULT NULL,
  `base_in_dept` varchar(5) NOT NULL,
  `base_in_date` date DEFAULT NULL,
  `base_in_type` int(1) DEFAULT NULL,
  `base_in_remarks` varchar(30) DEFAULT NULL,
  `base_end_kontrak` date DEFAULT NULL,
  `base_out_date` date DEFAULT NULL,
  `base_out_type` int(1) DEFAULT NULL,
  `base_out_remarks` varchar(25) DEFAULT NULL,
  `base_birth` date DEFAULT NULL,
  `base_birth_place` varchar(25) DEFAULT NULL,
  `base_alamat_asal` varchar(255) NOT NULL,
  `base_alamat_ktp` varchar(255) DEFAULT NULL,
  `base_kode_pos` varchar(6) DEFAULT NULL,
  `base_alamat_tinggal` varchar(255) DEFAULT NULL,
  `base_telepon` varchar(20) DEFAULT NULL,
  `base_mariage` varchar(2) DEFAULT NULL,
  `base_mariage_pajak` varchar(2) DEFAULT NULL,
  `base_sex` varchar(1) DEFAULT NULL,
  `base_religion` varchar(15) DEFAULT NULL,
  `base_hobby` varchar(25) DEFAULT NULL,
  `base_talent` varchar(25) DEFAULT NULL,
  `base_height` decimal(5,2) DEFAULT NULL,
  `base_weight` decimal(5,2) DEFAULT NULL,
  `base_blood` varchar(2) DEFAULT NULL,
  `base_color_eye` varchar(15) DEFAULT NULL,
  `base_health_eye` varchar(25) DEFAULT NULL,
  `base_organisasi` varchar(25) DEFAULT NULL,
  `base_nama_wali` varchar(25) DEFAULT NULL,
  `base_hub_wali` varchar(25) DEFAULT NULL,
  `base_addr_wali` varchar(255) DEFAULT NULL,
  `base_kode_pos_wali` varchar(6) DEFAULT NULL,
  `base_telp_wali` varchar(20) DEFAULT NULL,
  `base_skkb_date` date DEFAULT NULL,
  `base_skkb_from` varchar(40) DEFAULT NULL,
  `base_skkb_remarks` varchar(50) DEFAULT NULL,
  `base_skkb_need` varchar(50) DEFAULT NULL,
  `base_npwp_jenis` varchar(1) DEFAULT NULL,
  `base_npwp` varchar(15) DEFAULT NULL,
  `base_rekening_1` varchar(20) DEFAULT NULL,
  `base_rekening_2` varchar(20) DEFAULT NULL,
  `base_stat_rumah` varchar(1) DEFAULT NULL,
  `base_stat_date` date DEFAULT NULL,
  `base_stat_type` varchar(3) DEFAULT NULL,
  `base_passport_no` varchar(30) DEFAULT NULL,
  `base_passport_date` date DEFAULT NULL,
  `base_passport_date1` date DEFAULT NULL,
  `base_passport_date2` date DEFAULT NULL,
  `base_id_lama` varchar(10) DEFAULT NULL,
  `base_foto` varchar(255) DEFAULT NULL,
  `base_foto_file` longblob,
  `base_datetime` datetime NOT NULL,
  `base_user` varchar(30) NOT NULL,
  `base_ip` varchar(20) NOT NULL,
  `base_hp` varchar(25) NOT NULL,
  `base_barcode` varchar(5) NOT NULL,
  `base_ibu_kandung` varchar(50) DEFAULT NULL,
  `base_jabatan` varchar(3) DEFAULT NULL,
  `base_absensi_area` varchar(3) DEFAULT NULL COMMENT 'RM1,RM2,RM3,STM',
  `base_alamat_ktp_rt` varchar(3) DEFAULT NULL,
  `base_alamat_ktp_rw` varchar(3) DEFAULT NULL,
  `base_alamat_ktp_kel` varchar(50) DEFAULT NULL,
  `base_alamat_ktp_kec` varchar(50) DEFAULT NULL,
  `base_alamat_ktp_kota` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`base_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
