/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80027
 Source Host           : localhost:3306
 Source Schema         : dulieu999

 Target Server Type    : MySQL
 Target Server Version : 80027
 File Encoding         : 65001

 Date: 03/11/2022 17:48:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'Admin', 'khoa');
INSERT INTO `admin` VALUES (2, 'Admin', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for nhanvien
-- ----------------------------
DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE `nhanvien`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `IDNV` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IDPB` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  UNIQUE INDEX `IDNV`(`IDNV` ASC) USING BTREE,
  INDEX `IDPB`(`IDPB` ASC) USING BTREE,
  CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`IDPB`) REFERENCES `phongban` (`IDPB`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nhanvien
-- ----------------------------
INSERT INTO `nhanvien` VALUES (43, 'NV01', 'Nguy???n V??n Khoa', 'PB01', '???? N???ng');
INSERT INTO `nhanvien` VALUES (48, 'NV02', 'Nguy???n V??n Ho??ng', 'PB022', 'Qu???ng Tr???');
INSERT INTO `nhanvien` VALUES (50, 'NV03', 'Ng?? T???n D??ng', 'PB03', '???? N???ng');
INSERT INTO `nhanvien` VALUES (51, 'NV04', 'Hu???nh Thu Ng??n', 'PB05', '???? N???ng');
INSERT INTO `nhanvien` VALUES (52, 'NV05', 'Ng?? Th??? H???nh', 'PB03', 'Hu???');
INSERT INTO `nhanvien` VALUES (53, 'NV06', 'Tr???n Nh???t Minh', 'PB05', '???? N???ng');
INSERT INTO `nhanvien` VALUES (54, 'NV07', 'Ph???m Ti???n H???u', 'PB04', '???? N???ng');
INSERT INTO `nhanvien` VALUES (55, 'NV08', 'Hu???nh Th??? Ly Ca', 'PB06', 'H?? N???i');
INSERT INTO `nhanvien` VALUES (56, 'NV10', 'Tr???n Quan ?????i B???o ', 'PB05', 'Thanh H??a');
INSERT INTO `nhanvien` VALUES (57, 'NV11', 'L?? Ti???n ?????t', 'PB022', 'Thanh H??a');
INSERT INTO `nhanvien` VALUES (58, 'NV12', 'Ng?? Th???a Th??i', 'PB02', 'TP HCM');
INSERT INTO `nhanvien` VALUES (59, 'NV13', '?????ng Ng???c Kh??nh', 'PB03', 'Qu???ng Nam');
INSERT INTO `nhanvien` VALUES (60, 'NV007', 'Will Smith', 'PB03', 'US');
INSERT INTO `nhanvien` VALUES (62, 'NV14', 'Joji', 'PB02', 'Japan');

-- ----------------------------
-- Table structure for phongban
-- ----------------------------
DROP TABLE IF EXISTS `phongban`;
CREATE TABLE `phongban`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `IDPB` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenPB` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  UNIQUE INDEX `IDPB`(`IDPB` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 70 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of phongban
-- ----------------------------
INSERT INTO `phongban` VALUES (1, 'PB01', 'Ph??ng Admin', 'phong cho Admin');
INSERT INTO `phongban` VALUES (2, 'PB022', 'Ph??ng Thu ??m', 'phong thu am cho ca si');
INSERT INTO `phongban` VALUES (70, 'PB02', 'Ph??ng Ch??? T???ch', 'Ph??ng D??nh Cho Ch??? T???ch ');
INSERT INTO `phongban` VALUES (71, 'PB03', 'Ph??ng Qu???n L?? Nh??n S???', 'Ph??ng Cho Nh??n Vi??n C??ng Ty Qu???n L?? Nh??n S???');
INSERT INTO `phongban` VALUES (72, 'PB04', 'Ph??ng ??n', 'Ph??ng Cho ??n U???ng V?? T??? Ch???c Ti???c T??ng');
INSERT INTO `phongban` VALUES (74, 'PB05', 'Ph??ng Ti???p Kh??ch', 'Ph??ng D??nh Cho Ti???p Kh??ch (ph??? huynh, kh??ch qu??...)');
INSERT INTO `phongban` VALUES (75, 'PB06', 'Ph??ng H???i ?????ng Qu???n Tr???', 'Ph??ng H??QT');

SET FOREIGN_KEY_CHECKS = 1;
