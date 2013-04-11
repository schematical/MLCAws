/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50529
Source Host           : localhost:3306
Source Database       : mde

Target Server Type    : MYSQL
Target Server Version : 50529
File Encoding         : 65001

Date: 2013-03-05 19:09:33
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `AWSInstance`
-- ----------------------------
DROP TABLE IF EXISTS `AWSInstance`;
CREATE TABLE `AWSInstance` (
  `idInstance` int(11) NOT NULL AUTO_INCREMENT,
  `namespace` varchar(64) DEFAULT NULL,
  `ip_address` varchar(16) DEFAULT NULL,
  `creDate` datetime DEFAULT NULL,
  `idAccount` int(11) DEFAULT NULL,
  PRIMARY KEY (`idInstance`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of AWSInstance
-- ----------------------------
