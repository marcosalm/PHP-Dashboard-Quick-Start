/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Version : 50533
 Source Host           : localhost
 Source Database       : joshua

 Target Server Version : 50533
 File Encoding         : utf-8

 Date: 01/27/2014 13:18:27 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `fields`
-- ----------------------------
DROP TABLE IF EXISTS `fields`;
CREATE TABLE `fields` (
  `field_id` int(11) NOT NULL AUTO_INCREMENT,
  `field_name` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`field_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `fields`
-- ----------------------------
BEGIN;
INSERT INTO `fields` VALUES ('3', 'Custom 2', null, '2014-01-27 12:31:26'), ('4', 'Custom 3', null, null);
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('2', ‘user’, ‘pass’, null, null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
