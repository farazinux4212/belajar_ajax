/*
 Navicat Premium Data Transfer

 Source Server         : ServerLokal
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : latihan_json

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 03/05/2021 06:27:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for identitas
-- ----------------------------
DROP TABLE IF EXISTS `identitas`;
CREATE TABLE `identitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of identitas
-- ----------------------------
BEGIN;
INSERT INTO `identitas` VALUES (1, 'Aziz', 'Demak');
INSERT INTO `identitas` VALUES (2, 'Masluh', 'Kudus');
INSERT INTO `identitas` VALUES (3, 'Herman', 'Kudus');
INSERT INTO `identitas` VALUES (4, 'Kosong', 'Mlompong');
INSERT INTO `identitas` VALUES (5, 'bambang', 'demak');
INSERT INTO `identitas` VALUES (6, 'dudung', '');
INSERT INTO `identitas` VALUES (7, 'Mohamad Abdul Azis', 'Demak');
INSERT INTO `identitas` VALUES (8, 'Paimin', 'demak');
INSERT INTO `identitas` VALUES (9, 'Aisyah', 'demak');
INSERT INTO `identitas` VALUES (10, 'Mohamad Abdul Azis', 'demak');
INSERT INTO `identitas` VALUES (11, 'Paimin', 'Cangkring B');
INSERT INTO `identitas` VALUES (12, 'Paimin', 'Cangkring B');
INSERT INTO `identitas` VALUES (13, 'Mohamad Abdul Azis', 'Cangkring B');
INSERT INTO `identitas` VALUES (14, 'Mohamad Abdul Azis', 'Cangkring B');
INSERT INTO `identitas` VALUES (15, 'Paimin', 'Cangkring B');
INSERT INTO `identitas` VALUES (16, 'Paimin', 'Cangkring B');
INSERT INTO `identitas` VALUES (17, 'Aisyah', 'Cangkring B');
INSERT INTO `identitas` VALUES (18, 'Paimin', 'Cangkring B');
INSERT INTO `identitas` VALUES (19, 'Aisyah', 'Cangkring B');
INSERT INTO `identitas` VALUES (20, 'Aisyah', 'demak');
INSERT INTO `identitas` VALUES (21, 'Aisyah', 'demak');
INSERT INTO `identitas` VALUES (22, 'Paimin', 'Cangkring B');
INSERT INTO `identitas` VALUES (23, 'Mohamad Abdul Azis', 'demak');
INSERT INTO `identitas` VALUES (24, 'BADRIDUJA, M.Ag', 'Cangkring B');
INSERT INTO `identitas` VALUES (25, 'dea', 'demak');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
