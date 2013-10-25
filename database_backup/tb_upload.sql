-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `db_thep`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `tb_upload`
-- 

CREATE TABLE `tb_upload` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `type` varchar(255) collate utf8_unicode_ci NOT NULL,
  `size` float NOT NULL,
  `folder` varchar(255) collate utf8_unicode_ci NOT NULL,
  `modified` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

-- 
-- dump ตาราง `tb_upload`
-- 

INSERT INTO `tb_upload` VALUES (1, '460650b3.doc', 'application/msword', 51712, 'upload', '07/16/2013 10:19:23 am');
INSERT INTO `tb_upload` VALUES (2, '15a34239.doc', 'application/msword', 51712, 'upload', '07/16/2013 10:29:20 am');
INSERT INTO `tb_upload` VALUES (3, '99987c40.pdf', 'application/pdf', 84939, 'upload', '07/16/2013 10:31:09 am');
INSERT INTO `tb_upload` VALUES (4, '14f3b457.doc', 'application/msword', 113152, 'upload', '07/16/2013 12:34:26 pm');
INSERT INTO `tb_upload` VALUES (5, '1a92ff5e.jpg', 'image/jpeg', 50671, 'upload', '07/16/2013 04:26:40 pm');
INSERT INTO `tb_upload` VALUES (6, '8b14ef80.jpg', 'image/jpeg', 67158, 'upload', '08/14/2013 09:46:50 am');
INSERT INTO `tb_upload` VALUES (7, '0af4c7c3.xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 18384, 'upload', '08/20/2013 04:05:35 pm');
INSERT INTO `tb_upload` VALUES (8, '86f1101e74.xls', 'application/vnd.ms-excel', 93184, 'upload', '08/20/2013 04:11:54 pm');
INSERT INTO `tb_upload` VALUES (9, '6366fef2f3.xls', 'application/vnd.ms-excel', 36352, 'upload', '2013-08-28 11:01:41');
INSERT INTO `tb_upload` VALUES (10, '4f8d79e6.xls', 'application/vnd.ms-excel', 36352, 'upload', '2013-08-28 15:51:04');
INSERT INTO `tb_upload` VALUES (11, '7dff1e1e47.jpg', 'image/jpeg', 154009, 'upload', '2013-09-18 13:13:51');
INSERT INTO `tb_upload` VALUES (12, 'b003b8838f.sql', 'application/octet-stream', 134001, 'upload', '2013-10-16 16:24:36');
INSERT INTO `tb_upload` VALUES (13, 'e6018cd.gif', 'image/gif', 43, 'upload', '2013-10-22 12:21:12');
INSERT INTO `tb_upload` VALUES (14, 'eafa813295.doc', 'application/msword', 109568, 'upload', '2013-10-22 14:11:55');
INSERT INTO `tb_upload` VALUES (15, 'e42b6154de.doc', 'application/msword', 109568, 'upload', '2013-10-22 14:12:56');
INSERT INTO `tb_upload` VALUES (16, 'nano-crystal-glass.doc', 'application/msword', 109568, 'upload', '2013-10-22 16:18:42');
INSERT INTO `tb_upload` VALUES (17, '06fb5bd931.doc', 'application/msword', 109568, 'upload', '2013-10-22 16:19:57');
