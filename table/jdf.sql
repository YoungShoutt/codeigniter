/*
Navicat MySQL Data Transfer

Source Server         : dbfix
Source Server Version : 50622
Source Host           : 192.168.0.9:3306
Source Database       : HANIL

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2019-09-23 10:47:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jdf
-- ----------------------------
DROP TABLE IF EXISTS `jdf`;
CREATE TABLE `jdf` (
  `jdf_key` varchar(16) NOT NULL DEFAULT '',
  `jdf_jenis` char(1) DEFAULT NULL COMMENT '1:masuk,2:keluar,3:masuk cwo,4:keluar Cwo,5:return pembelian,6:SOP,7:pengeluaran material jual',
  `jdf_date` date DEFAULT NULL,
  `jdf_spb_key` varchar(16) DEFAULT NULL,
  `jdf_po_no` varchar(14) DEFAULT NULL,
  `jdf_no_pr` varchar(16) DEFAULT NULL,
  `jdf_spl` varchar(6) DEFAULT NULL,
  `jdf_code` char(10) NOT NULL,
  `jdf_stock` double(20,4) DEFAULT NULL,
  `jdf_bon_qty` double(20,4) NOT NULL,
  `jdf_qty` double(20,4) NOT NULL,
  `jdf_kg` double(20,4) DEFAULT NULL,
  `jdf_mu` varchar(5) DEFAULT NULL,
  `jdf_harga` double(20,6) DEFAULT NULL,
  `jdf_amt` double(20,6) DEFAULT NULL,
  `jdf_kurs` double(20,4) DEFAULT NULL,
  `jdf_harga_rupiah` double(20,6) DEFAULT NULL,
  `jdf_rupiah` double(20,6) DEFAULT NULL,
  `jdf_ppn` double DEFAULT NULL,
  `jdf_pph` double DEFAULT NULL,
  `jdf_biaya_lain` double DEFAULT NULL,
  `jdf_jenis_cost` char(1) DEFAULT NULL,
  `jdf_t_cost` varchar(15) DEFAULT NULL,
  `jdf_use` varchar(80) DEFAULT NULL,
  `jdf_fp` char(1) DEFAULT NULL,
  `jdf_fp_terima` date DEFAULT NULL,
  `jdf_fp_nomer` varchar(20) DEFAULT NULL,
  `jdf_pph_no` varchar(20) DEFAULT NULL,
  `jdf_dept` varchar(5) DEFAULT NULL,
  `jdf_cwo` varchar(15) DEFAULT NULL,
  `jdf_kel` varchar(15) DEFAULT NULL,
  `jdf_check` char(1) DEFAULT NULL,
  `jdf_print` int(11) DEFAULT NULL,
  `jdf_acc_update` char(1) DEFAULT NULL,
  `jdf_aktiva_kode` varchar(20) DEFAULT NULL,
  `jdf_gudang` varchar(2) DEFAULT NULL,
  `jdf_approval_gdg` char(1) DEFAULT NULL,
  `jdf_approval_user` varchar(25) NOT NULL,
  `jdf_sys_user` varchar(25) DEFAULT NULL,
  `jdf_sysdate` date DEFAULT NULL,
  `jdf_systime` time DEFAULT NULL,
  `jdf_tiket` char(10) DEFAULT NULL,
  `jdf_last_out_date` date DEFAULT NULL,
  `jdf_last_out_qty` double(13,4) DEFAULT NULL,
  `jdf_last_out_user` varchar(25) DEFAULT NULL,
  `jdf_id_peminta` varchar(30) NOT NULL,
  `con` varchar(3) DEFAULT NULL,
  `reg_occ` varchar(3) DEFAULT NULL,
  `po_ke` varchar(5) DEFAULT NULL,
  `jdf_id_pemberi` varchar(50) DEFAULT NULL,
  `jdf_id_penerima` varchar(50) DEFAULT NULL,
  `jdf_area_bongkar` char(1) DEFAULT NULL,
  `jdf_status_serah` varchar(50) DEFAULT NULL,
  `jdf_sysip` varchar(15) DEFAULT NULL,
  KEY `jdf_key` (`jdf_key`,`jdf_code`,`jdf_spb_key`,`jdf_po_no`,`jdf_no_pr`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
