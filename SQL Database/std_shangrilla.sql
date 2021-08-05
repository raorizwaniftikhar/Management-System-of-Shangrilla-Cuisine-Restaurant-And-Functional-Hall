/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : std_shangrilla

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2012-12-01 13:26:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `feedback`
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `feedback_id` int(40) NOT NULL AUTO_INCREMENT,
  `feedback_name` varchar(40) NOT NULL,
  `feedback_email` varchar(40) NOT NULL,
  `feedback_phone` int(15) NOT NULL,
  `feedback_address` varchar(40) NOT NULL,
  `feedback_comments` varchar(300) NOT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `feedback_phone` (`feedback_phone`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of feedback
-- ----------------------------
INSERT INTO `feedback` VALUES ('28', 'tari sha', 'tareqshaaa@gmail.com', '2147483647', 'house no 279 tariq abad khanewal', 'this is nice way to talk');
INSERT INTO `feedback` VALUES ('18', 'muhammad tariq', 'tareqshaaa@gmail.com', '2147483647', 'house', 'sfsfsfsfsfsfsa');
INSERT INTO `feedback` VALUES ('19', 'umer', 'umer@gmail.com', '222222222', 'hhhhhhhhjjjjjkkklll;;;;;\'\'\'\'\'affff', 'kkfkkjkskfjskfkskfjasd');
INSERT INTO `feedback` VALUES ('20', 'umershah', 'umergmail.com', '222222222', 'hhhhhhhhjjjjjkkklll;;;;;\'\'\'\'\'affff``', 'sfsfsfasfsfsafasfasf\r\n');
INSERT INTO `feedback` VALUES ('21', 'usmanshah', 'usman@gmail.com', '32316654', 'house no 279 lahore ', 'this is very ood and beautiful way to get connected to the hotel');
INSERT INTO `feedback` VALUES ('26', 'muhammad tariq shah', 'tareqshaaa@gmail.com', '2147483647', 'house no 279 lahore', 'this is the commetnt box');
INSERT INTO `feedback` VALUES ('29', 'usama', 'tareqshaw1@hotmail.com', '2147483647', 'sdfhasfasjfhj', 'HASJKF ASJKFHASJK HASJK HASFSJFSJKHFASSJ\r\n');
INSERT INTO `feedback` VALUES ('30', 'usama', 'tareqshaw1@hotmail.com', '2147483647', 'sdfhasfasjfhj', 'HASJKF ASJKFHASJK HASJK HASFSJFSJKHFASSJ\r\n');

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `login_id` int(12) NOT NULL AUTO_INCREMENT,
  `user_id` int(12) NOT NULL,
  `login_name` varchar(40) NOT NULL,
  `login_password` int(20) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('24', '32', 'khan', '123123');
INSERT INTO `login` VALUES ('22', '30', 'usama', '12345');
INSERT INTO `login` VALUES ('17', '25', 'tarishah', '12345');
INSERT INTO `login` VALUES ('25', '33', 'HONEY', '12345');
INSERT INTO `login` VALUES ('26', '34', 'imran', '1231234');
INSERT INTO `login` VALUES ('28', '36', 'asad', '12345');
INSERT INTO `login` VALUES ('29', '37', 'tariq', '1122334455');
INSERT INTO `login` VALUES ('30', '38', 'noman', '1234');

-- ----------------------------
-- Table structure for `menus`
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `menu_id` int(20) NOT NULL AUTO_INCREMENT,
  `menu_catag_id` int(20) NOT NULL,
  `menu_name` varchar(40) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', '1', 'Fish cracker');
INSERT INTO `menus` VALUES ('2', '1', 'chicken spring rolls');
INSERT INTO `menus` VALUES ('3', '1', 'shangrila special chicken wings');
INSERT INTO `menus` VALUES ('4', '1', 'french fries with garlic sauce');
INSERT INTO `menus` VALUES ('5', '1', 'chicken nuggets(12 pieces)');
INSERT INTO `menus` VALUES ('6', '2', 'shangrila special soup');
INSERT INTO `menus` VALUES ('7', '2', 'hot N sour soup');
INSERT INTO `menus` VALUES ('8', '2', 'chicken corn soup');
INSERT INTO `menus` VALUES ('9', '2', 'chicken vegetable clear soup');
INSERT INTO `menus` VALUES ('10', '2', 'chicken thai soup');
INSERT INTO `menus` VALUES ('11', '3', 'chicken burger with french fries');
INSERT INTO `menus` VALUES ('12', '3', 'club sandwiche');
INSERT INTO `menus` VALUES ('13', '3', 'chicken sandwiche');
INSERT INTO `menus` VALUES ('14', '4', 'fish pakora(per kg)');
INSERT INTO `menus` VALUES ('15', '4', 'special qasoori tawa fish');
INSERT INTO `menus` VALUES ('16', '4', 'shangrila special fried fish');
INSERT INTO `menus` VALUES ('17', '5', 'chicken fried rice');
INSERT INTO `menus` VALUES ('18', '5', 'chicken masala rice');
INSERT INTO `menus` VALUES ('19', '5', 'egg fried rice');
INSERT INTO `menus` VALUES ('20', '5', 'vegetable rice');
INSERT INTO `menus` VALUES ('21', '5', 'shangrila special rice');
INSERT INTO `menus` VALUES ('22', '5', 'plain rice');
INSERT INTO `menus` VALUES ('23', '6', 'shangrila special chowmein');
INSERT INTO `menus` VALUES ('24', '6', 'chicken chowmein');
INSERT INTO `menus` VALUES ('25', '6', 'vegetable chowmein');
INSERT INTO `menus` VALUES ('26', '7', 'shangrila special chicken');
INSERT INTO `menus` VALUES ('27', '7', 'chicken manchurian');
INSERT INTO `menus` VALUES ('28', '7', 'sweet N sour chicken');
INSERT INTO `menus` VALUES ('29', '7', 'chicken with pineapple');
INSERT INTO `menus` VALUES ('30', '7', 'chicken chilli vegetable');
INSERT INTO `menus` VALUES ('31', '7', 'chicken black pepper wit green chilli sa');
INSERT INTO `menus` VALUES ('32', '7', 'chicken shashlik');
INSERT INTO `menus` VALUES ('33', '7', 'chicken cutlets(3 pieces)');
INSERT INTO `menus` VALUES ('34', '7', 'chicken with almonds');
INSERT INTO `menus` VALUES ('35', '7', 'Braised chicken with hot spices');
INSERT INTO `menus` VALUES ('36', '7', 'chicken chilli dry');
INSERT INTO `menus` VALUES ('37', '7', 'chicken chilli whole dry');
INSERT INTO `menus` VALUES ('38', '7', 'paper chicken');
INSERT INTO `menus` VALUES ('39', '7', 'honey chicken');
INSERT INTO `menus` VALUES ('40', '7', 'chicken drum sticks(per piece)');
INSERT INTO `menus` VALUES ('41', '7', 'chicken basket');
INSERT INTO `menus` VALUES ('42', '7', 'fried chicken');
INSERT INTO `menus` VALUES ('43', '7', 'chicken dhaka');
INSERT INTO `menus` VALUES ('44', '7', 'chicken adobo');
INSERT INTO `menus` VALUES ('45', '7', 'crispy chicken');
INSERT INTO `menus` VALUES ('46', '7', 'chicken with garlic sauce');
INSERT INTO `menus` VALUES ('47', '7', 'chicken with ayster sauce');
INSERT INTO `menus` VALUES ('48', '7', 'chicken with green chilli sauce');
INSERT INTO `menus` VALUES ('49', '7', 'chicken button mushroom with garlic sauc');
INSERT INTO `menus` VALUES ('50', '7', 'fried spring chicken');
INSERT INTO `menus` VALUES ('51', '8', 'mutton karahi');
INSERT INTO `menus` VALUES ('52', '8', 'mutton handi');
INSERT INTO `menus` VALUES ('53', '8', 'mutton champ masala');
INSERT INTO `menus` VALUES ('54', '8', 'mutton gurda Qeema');
INSERT INTO `menus` VALUES ('55', '8', 'chicken karahi');
INSERT INTO `menus` VALUES ('56', '8', 'chicken boneless handi');
INSERT INTO `menus` VALUES ('57', '8', 'chicken jalferezi');
INSERT INTO `menus` VALUES ('58', '8', 'chicken Ginger');
INSERT INTO `menus` VALUES ('59', '8', 'chicken brost piece');
INSERT INTO `menus` VALUES ('60', '8', 'chicken desi chaoza');
INSERT INTO `menus` VALUES ('61', '8', 'steam chargha masala');
INSERT INTO `menus` VALUES ('62', '8', 'dall mash');
INSERT INTO `menus` VALUES ('63', '8', 'mix vegetable');
INSERT INTO `menus` VALUES ('64', '9', 'russian salad');
INSERT INTO `menus` VALUES ('65', '9', 'fruit salad');
INSERT INTO `menus` VALUES ('66', '9', 'fresh green salad');
INSERT INTO `menus` VALUES ('67', '9', 'kachumer salad');
INSERT INTO `menus` VALUES ('68', '9', 'Roti(per head)');
INSERT INTO `menus` VALUES ('69', '9', 'Raita');
INSERT INTO `menus` VALUES ('70', '9', 'Roti(per head)');
INSERT INTO `menus` VALUES ('71', '10', 'chicken pasha boleless special (8 pieces');
INSERT INTO `menus` VALUES ('72', '10', 'chicken seekh kabab(4 pieces)');
INSERT INTO `menus` VALUES ('73', '10', 'chicken malai boti(10 pieces)');
INSERT INTO `menus` VALUES ('74', '10', 'chicken kasturi boti');
INSERT INTO `menus` VALUES ('75', '10', 'chicken tikka boti(12 pieces)');
INSERT INTO `menus` VALUES ('76', '10', 'ckicken tikka (1 piece)');
INSERT INTO `menus` VALUES ('77', '10', 'chicken achari boti(12 pieces)');
INSERT INTO `menus` VALUES ('78', '10', 'chicken kalmi tikka(4 pieces)');
INSERT INTO `menus` VALUES ('79', '10', 'Beef seekh kabab(4 pieces)');
INSERT INTO `menus` VALUES ('80', '10', 'mutton seekh kabab(4 pieces)');
INSERT INTO `menus` VALUES ('81', '10', 'chicken mirchi');
INSERT INTO `menus` VALUES ('82', '11', 'Rice+Manchurian+Dhaka chicken');
INSERT INTO `menus` VALUES ('83', '11', 'Noddles+Manchurian+dhaka chicken');
INSERT INTO `menus` VALUES ('84', '12', 'shangrila special ice cream with almond');
INSERT INTO `menus` VALUES ('85', '12', 'peach malba');
INSERT INTO `menus` VALUES ('86', '12', 'Banana spilit');
INSERT INTO `menus` VALUES ('87', '12', 'chocolate overload');
INSERT INTO `menus` VALUES ('88', '12', 'tutti fruiti ice cream');
INSERT INTO `menus` VALUES ('89', '12', 'single scoop');
INSERT INTO `menus` VALUES ('90', '12', 'double scoop(mango,strawbery,chocolate,p');
INSERT INTO `menus` VALUES ('91', '12', 'chocolate chip');
INSERT INTO `menus` VALUES ('92', '13', 'pepsi,7up,dew,marrinda');
INSERT INTO `menus` VALUES ('93', '13', 'diet soft drink');
INSERT INTO `menus` VALUES ('94', '13', 'fresh lime');
INSERT INTO `menus` VALUES ('95', '13', 'mineral water');
INSERT INTO `menus` VALUES ('96', '13', 'lemom high');
INSERT INTO `menus` VALUES ('97', '13', 'spunch margretta');
INSERT INTO `menus` VALUES ('98', '13', 'pina colada');
INSERT INTO `menus` VALUES ('99', '13', 'pink lady');
INSERT INTO `menus` VALUES ('100', '13', 'singapure supreme');
INSERT INTO `menus` VALUES ('101', '13', 'hawain dreams');
INSERT INTO `menus` VALUES ('102', '13', 'cold coffee with ice cream');
INSERT INTO `menus` VALUES ('103', '13', 'lassi jug');
INSERT INTO `menus` VALUES ('104', '14', 'tea per cup');
INSERT INTO `menus` VALUES ('105', '14', 'green tea');

-- ----------------------------
-- Table structure for `menus_price`
-- ----------------------------
DROP TABLE IF EXISTS `menus_price`;
CREATE TABLE `menus_price` (
  `menu_id` int(20) NOT NULL,
  `menu_type` varchar(40) NOT NULL,
  `menu_price` int(20) NOT NULL,
  PRIMARY KEY (`menu_id`,`menu_type`),
  FULLTEXT KEY `menu_type` (`menu_type`),
  FULLTEXT KEY `menu_type_2` (`menu_type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menus_price
-- ----------------------------
INSERT INTO `menus_price` VALUES ('1', 'full', '180');
INSERT INTO `menus_price` VALUES ('1', 'half', '100');
INSERT INTO `menus_price` VALUES ('2', 'full', '120');
INSERT INTO `menus_price` VALUES ('2', 'half', '60');
INSERT INTO `menus_price` VALUES ('3', 'full', '260');
INSERT INTO `menus_price` VALUES ('3', 'half', '140');
INSERT INTO `menus_price` VALUES ('4', 'full', '40');
INSERT INTO `menus_price` VALUES ('5', 'full', '200');
INSERT INTO `menus_price` VALUES ('5', 'half', '120');
INSERT INTO `menus_price` VALUES ('6', 'full', '300');
INSERT INTO `menus_price` VALUES ('6', 'half', '160');
INSERT INTO `menus_price` VALUES ('6', 'cup', '75');
INSERT INTO `menus_price` VALUES ('7', 'full', '280');
INSERT INTO `menus_price` VALUES ('7', 'half', '150');
INSERT INTO `menus_price` VALUES ('7', 'cup', '60');
INSERT INTO `menus_price` VALUES ('8', 'full', '260');
INSERT INTO `menus_price` VALUES ('8', 'half', '140');
INSERT INTO `menus_price` VALUES ('8', 'cup', '60');
INSERT INTO `menus_price` VALUES ('9', 'full', '260');
INSERT INTO `menus_price` VALUES ('9', 'half', '140');
INSERT INTO `menus_price` VALUES ('9', 'cup', '60');
INSERT INTO `menus_price` VALUES ('10', 'full', '260');
INSERT INTO `menus_price` VALUES ('10', 'half', '140');
INSERT INTO `menus_price` VALUES ('10', 'cup', '60');
INSERT INTO `menus_price` VALUES ('11', 'full', '100');
INSERT INTO `menus_price` VALUES ('12', 'full', '150');
INSERT INTO `menus_price` VALUES ('13', 'full', '150');
INSERT INTO `menus_price` VALUES ('14', 'full', '350');
INSERT INTO `menus_price` VALUES ('15', 'full', '350');
INSERT INTO `menus_price` VALUES ('16', 'full', '350');
INSERT INTO `menus_price` VALUES ('17', 'full', '200');
INSERT INTO `menus_price` VALUES ('17', 'half', '110');
INSERT INTO `menus_price` VALUES ('18', 'full', '220');
INSERT INTO `menus_price` VALUES ('18', 'half', '120');
INSERT INTO `menus_price` VALUES ('19', 'full', '180');
INSERT INTO `menus_price` VALUES ('19', 'half', '100');
INSERT INTO `menus_price` VALUES ('20', 'full', '170');
INSERT INTO `menus_price` VALUES ('20', 'half', '90');
INSERT INTO `menus_price` VALUES ('21', 'full', '230');
INSERT INTO `menus_price` VALUES ('21', 'half', '125');
INSERT INTO `menus_price` VALUES ('22', 'full', '100');
INSERT INTO `menus_price` VALUES ('22', 'half', '60');
INSERT INTO `menus_price` VALUES ('23', 'full', '350');
INSERT INTO `menus_price` VALUES ('23', 'half', '180');
INSERT INTO `menus_price` VALUES ('24', 'full', '300');
INSERT INTO `menus_price` VALUES ('24', 'half', '160');
INSERT INTO `menus_price` VALUES ('25', 'full', '240');
INSERT INTO `menus_price` VALUES ('25', 'half', '140');
INSERT INTO `menus_price` VALUES ('26', 'full', '380');
INSERT INTO `menus_price` VALUES ('26', 'half', '200');
INSERT INTO `menus_price` VALUES ('27', 'full', '360');
INSERT INTO `menus_price` VALUES ('27', 'half', '200');
INSERT INTO `menus_price` VALUES ('28', 'full', '360');
INSERT INTO `menus_price` VALUES ('28', 'half', '200');
INSERT INTO `menus_price` VALUES ('29', 'full', '360');
INSERT INTO `menus_price` VALUES ('29', 'half', '200');
INSERT INTO `menus_price` VALUES ('30', 'full', '360');
INSERT INTO `menus_price` VALUES ('30', 'half', '200');
INSERT INTO `menus_price` VALUES ('31', 'full', '360');
INSERT INTO `menus_price` VALUES ('31', 'half', '200');
INSERT INTO `menus_price` VALUES ('32', 'full', '280');
INSERT INTO `menus_price` VALUES ('33', 'full', '200');
INSERT INTO `menus_price` VALUES ('34', 'full', '380');
INSERT INTO `menus_price` VALUES ('34', 'half', '200');
INSERT INTO `menus_price` VALUES ('35', 'full', '360');
INSERT INTO `menus_price` VALUES ('35', 'half', '200');
INSERT INTO `menus_price` VALUES ('36', 'full', '370');
INSERT INTO `menus_price` VALUES ('36', 'half', '200');
INSERT INTO `menus_price` VALUES ('37', 'full', '360');
INSERT INTO `menus_price` VALUES ('37', 'half', '200');
INSERT INTO `menus_price` VALUES ('38', 'full', '370');
INSERT INTO `menus_price` VALUES ('38', 'half', '200');
INSERT INTO `menus_price` VALUES ('39', 'full', '370');
INSERT INTO `menus_price` VALUES ('39', 'half', '200');
INSERT INTO `menus_price` VALUES ('40', 'full', '55');
INSERT INTO `menus_price` VALUES ('41', 'full', '460');
INSERT INTO `menus_price` VALUES ('42', 'full', '370');
INSERT INTO `menus_price` VALUES ('42', 'half', '200');
INSERT INTO `menus_price` VALUES ('43', 'full', '400');
INSERT INTO `menus_price` VALUES ('43', 'half', '200');
INSERT INTO `menus_price` VALUES ('44', 'full', '390');
INSERT INTO `menus_price` VALUES ('44', 'half', '200');
INSERT INTO `menus_price` VALUES ('45', 'full', '360');
INSERT INTO `menus_price` VALUES ('45', 'half', '200');
INSERT INTO `menus_price` VALUES ('46', 'full', '370');
INSERT INTO `menus_price` VALUES ('46', 'half', '200');
INSERT INTO `menus_price` VALUES ('47', 'full', '380');
INSERT INTO `menus_price` VALUES ('47', 'half', '200');
INSERT INTO `menus_price` VALUES ('48', 'full', '370');
INSERT INTO `menus_price` VALUES ('48', 'half', '200');
INSERT INTO `menus_price` VALUES ('49', 'full', '370');
INSERT INTO `menus_price` VALUES ('49', 'half', '200');
INSERT INTO `menus_price` VALUES ('50', 'full', '370');
INSERT INTO `menus_price` VALUES ('50', 'half', '200');
INSERT INTO `menus_price` VALUES ('51', 'full', '690');
INSERT INTO `menus_price` VALUES ('51', 'half', '390');
INSERT INTO `menus_price` VALUES ('52', 'full', '750');
INSERT INTO `menus_price` VALUES ('52', 'half', '425');
INSERT INTO `menus_price` VALUES ('53', 'full', '290');
INSERT INTO `menus_price` VALUES ('54', 'full', '300');
INSERT INTO `menus_price` VALUES ('55', 'full', '430');
INSERT INTO `menus_price` VALUES ('55', 'half', '230');
INSERT INTO `menus_price` VALUES ('56', 'full', '530');
INSERT INTO `menus_price` VALUES ('56', 'half', '290');
INSERT INTO `menus_price` VALUES ('57', 'full', '290');
INSERT INTO `menus_price` VALUES ('58', 'full', '290');
INSERT INTO `menus_price` VALUES ('60', 'full', '450');
INSERT INTO `menus_price` VALUES ('61', 'full', '400');
INSERT INTO `menus_price` VALUES ('61', 'half', '210');
INSERT INTO `menus_price` VALUES ('62', 'full', '120');
INSERT INTO `menus_price` VALUES ('63', 'full', '120');
INSERT INTO `menus_price` VALUES ('64', 'full', '80');
INSERT INTO `menus_price` VALUES ('65', 'full', '90');
INSERT INTO `menus_price` VALUES ('66', 'full', '25');
INSERT INTO `menus_price` VALUES ('67', 'full', '30');
INSERT INTO `menus_price` VALUES ('68', 'full', '20');
INSERT INTO `menus_price` VALUES ('69', 'full', '30');
INSERT INTO `menus_price` VALUES ('70', 'per piece', '5');
INSERT INTO `menus_price` VALUES ('71', 'full', '280');
INSERT INTO `menus_price` VALUES ('71', 'half', '150');
INSERT INTO `menus_price` VALUES ('72', 'full', '200');
INSERT INTO `menus_price` VALUES ('72', 'half', '120');
INSERT INTO `menus_price` VALUES ('73', 'full', '300');
INSERT INTO `menus_price` VALUES ('73', 'half', '180');
INSERT INTO `menus_price` VALUES ('74', 'full', '240');
INSERT INTO `menus_price` VALUES ('74', 'half', '130');
INSERT INTO `menus_price` VALUES ('75', 'full', '350');
INSERT INTO `menus_price` VALUES ('75', 'half', '180');
INSERT INTO `menus_price` VALUES ('76', 'full', '250');
INSERT INTO `menus_price` VALUES ('76', 'half', '130');
INSERT INTO `menus_price` VALUES ('77', 'full', '90');
INSERT INTO `menus_price` VALUES ('78', 'full', '300');
INSERT INTO `menus_price` VALUES ('78', 'half', '180');
INSERT INTO `menus_price` VALUES ('79', 'full', '250');
INSERT INTO `menus_price` VALUES ('79', 'half', '125');
INSERT INTO `menus_price` VALUES ('80', 'full', '180');
INSERT INTO `menus_price` VALUES ('80', 'half', '100');
INSERT INTO `menus_price` VALUES ('81', 'full', '250');
INSERT INTO `menus_price` VALUES ('81', 'half', '140');
INSERT INTO `menus_price` VALUES ('82', 'full', '340');
INSERT INTO `menus_price` VALUES ('83', 'full', '340');
INSERT INTO `menus_price` VALUES ('84', 'full', '90');
INSERT INTO `menus_price` VALUES ('85', 'full', '80');
INSERT INTO `menus_price` VALUES ('86', 'full', '80');
INSERT INTO `menus_price` VALUES ('87', 'full', '80');
INSERT INTO `menus_price` VALUES ('88', 'full', '70');
INSERT INTO `menus_price` VALUES ('89', 'full', '20');
INSERT INTO `menus_price` VALUES ('90', 'full', '40');
INSERT INTO `menus_price` VALUES ('91', 'full', '40');
INSERT INTO `menus_price` VALUES ('92', 'full', '20');
INSERT INTO `menus_price` VALUES ('93', 'full', '25');
INSERT INTO `menus_price` VALUES ('94', 'full', '25');
INSERT INTO `menus_price` VALUES ('95', 'full', '40');
INSERT INTO `menus_price` VALUES ('96', 'full', '40');
INSERT INTO `menus_price` VALUES ('97', 'full', '50');
INSERT INTO `menus_price` VALUES ('98', 'full', '80');
INSERT INTO `menus_price` VALUES ('99', 'full', '80');
INSERT INTO `menus_price` VALUES ('100', 'full', '80');
INSERT INTO `menus_price` VALUES ('101', 'full', '80');
INSERT INTO `menus_price` VALUES ('102', 'full', '80');
INSERT INTO `menus_price` VALUES ('103', 'full', '100');
INSERT INTO `menus_price` VALUES ('104', 'full', '20');
INSERT INTO `menus_price` VALUES ('105', 'full', '20');

-- ----------------------------
-- Table structure for `menu_catagory`
-- ----------------------------
DROP TABLE IF EXISTS `menu_catagory`;
CREATE TABLE `menu_catagory` (
  `menu_catag_id` int(20) NOT NULL AUTO_INCREMENT,
  `menu_catag_name` varchar(40) NOT NULL,
  `menu_catag_desc` varchar(60) NOT NULL,
  PRIMARY KEY (`menu_catag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu_catagory
-- ----------------------------
INSERT INTO `menu_catagory` VALUES ('1', 'Appetizers', '');
INSERT INTO `menu_catagory` VALUES ('2', 'Soups', '');
INSERT INTO `menu_catagory` VALUES ('3', 'Sandwiches & Burgers', '');
INSERT INTO `menu_catagory` VALUES ('4', 'Fish Corner', '');
INSERT INTO `menu_catagory` VALUES ('5', 'Rice', '');
INSERT INTO `menu_catagory` VALUES ('6', 'Chowmein / Noddles', '');
INSERT INTO `menu_catagory` VALUES ('7', 'Chinese Chicken', '');
INSERT INTO `menu_catagory` VALUES ('8', 'mutton', '');
INSERT INTO `menu_catagory` VALUES ('9', 'Salad', '');
INSERT INTO `menu_catagory` VALUES ('10', 'Bar_be_Cue', '');
INSERT INTO `menu_catagory` VALUES ('11', 'shangrila Special 3 in 1 Offer', '');
INSERT INTO `menu_catagory` VALUES ('12', 'Desserts', '');
INSERT INTO `menu_catagory` VALUES ('13', 'Cold Drinks', '');
INSERT INTO `menu_catagory` VALUES ('14', 'Hot Drinks', '');

-- ----------------------------
-- Table structure for `order_user`
-- ----------------------------
DROP TABLE IF EXISTS `order_user`;
CREATE TABLE `order_user` (
  `order_id` int(20) NOT NULL AUTO_INCREMENT,
  `order_no` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `menu_catag_name` varchar(100) NOT NULL,
  `qty` int(12) NOT NULL,
  `price` varchar(100) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of order_user
-- ----------------------------
INSERT INTO `order_user` VALUES ('1', '1', '37', 'Cold Drinks', '12', 'full- Price:!40!', 'mineral water', '0000-00-00');
INSERT INTO `order_user` VALUES ('2', '2', '37', 'Soups', '2', 'full- Price:!280!', 'hot N sour soup', '0000-00-00');
INSERT INTO `order_user` VALUES ('3', '3', '37', 'Appetizers', '1', 'full- Price:!40!', 'french fries with garlic sauce', '2011-11-18');
INSERT INTO `order_user` VALUES ('4', '4', '30', 'Appetizers', '2', 'full- Price:!260!', 'shangrila special chicken wings', '2011-11-30');
INSERT INTO `order_user` VALUES ('5', '5', '30', 'Sandwiches & Burgers', '3', 'full- Price:!150!', 'club sandwiche', '2011-11-30');

-- ----------------------------
-- Table structure for `tbl_hall`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_hall`;
CREATE TABLE `tbl_hall` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_hall
-- ----------------------------
INSERT INTO `tbl_hall` VALUES ('1', 'Marriage');
INSERT INTO `tbl_hall` VALUES ('2', 'Function Hall');

-- ----------------------------
-- Table structure for `tbl_meal`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_meal`;
CREATE TABLE `tbl_meal` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_meal
-- ----------------------------
INSERT INTO `tbl_meal` VALUES ('1', 'Lunch');
INSERT INTO `tbl_meal` VALUES ('2', 'Dinner');

-- ----------------------------
-- Table structure for `tbl_reservations`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_reservations`;
CREATE TABLE `tbl_reservations` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Phone` varchar(225) NOT NULL,
  `Cell` varchar(225) NOT NULL,
  `Hall_ID` int(225) NOT NULL,
  `Booking_Date_in` varchar(225) NOT NULL,
  `Booking_Date_out` varchar(225) NOT NULL,
  `Meal_ID` int(225) NOT NULL,
  `Payment` varchar(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_reservations
-- ----------------------------
INSERT INTO `tbl_reservations` VALUES ('9', 'efvwefv w', 'fvdfv sdfv sdf', 'v dfvadfvfasd', 'vsavsafvs', 'avsavasv', '1', 'Select Day/Select Month/Select Year', 'Select Day/Select Month/Select Year', '1', 'cash');
INSERT INTO `tbl_reservations` VALUES ('32', 'massab ', 'usama@gmail.com', 'house no 83498394', '64373653756', '84958349', '1', '25/01/2012', '27/01/2012', '1', 'cash');
INSERT INTO `tbl_reservations` VALUES ('29', 'tariq', 'tahsgfshgfash', 'sgshgsfgh', '64373653756', '3634754537', '1', 'Select Day/Select Month/Select Year', 'Select Day/Select Month/Select Year', '1', 'Online Bank Transfer');
INSERT INTO `tbl_reservations` VALUES ('30', 'rsashuu', 'rasgu@sjfhsjfhsf', 'hsdfjsfhashj', '6278346278', '234723894', '1', '02/02/2011', '15/02/2011', '1', 'cash');
INSERT INTO `tbl_reservations` VALUES ('31', 'usama', 'usama@gmail.com', 'house no 83498394', '85938539548', '84958349', '1', '04/03/2011', '05/03/2011', '1', 'cheque');

-- ----------------------------
-- Table structure for `user_catagory`
-- ----------------------------
DROP TABLE IF EXISTS `user_catagory`;
CREATE TABLE `user_catagory` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_Fname` varchar(20) NOT NULL,
  `user_Lname` varchar(20) NOT NULL,
  `user_Gender` varchar(20) NOT NULL,
  `user_Birthday` varchar(40) NOT NULL,
  `user_Email` varchar(15) NOT NULL,
  `user_Tph` bigint(15) NOT NULL,
  `user_Mbile` bigint(40) NOT NULL,
  `user_AdressL1` varchar(40) NOT NULL,
  `user_AdressL2` varchar(20) NOT NULL,
  `user_Pcode` bigint(20) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_catagory
-- ----------------------------
INSERT INTO `user_catagory` VALUES ('19', 'Shahbaz', 'Ahmed', 'male', 'December 15,December', 'shahbazahmed9@h', '923217317430', '923078879966', 'Bosan road Multan', 'Near 6', '60000');
INSERT INTO `user_catagory` VALUES ('20', 'tariq', 'shah', 'male', 'January 01,January', 'tareqshaw@ymail', '654215566', '3077442900', 'hsl afhasl fhasl; hf asfhas', 'sskjfhas fj', '6522');
INSERT INTO `user_catagory` VALUES ('24', 'umer', 'chand', 'male', 'January 01,January', 'umer@gmail.com', '654215566', '923078879966', 'hsl afhasl fhasl; hf asfhas', 'sskjfhas fj', '60000');
INSERT INTO `user_catagory` VALUES ('28', 'tariq', 'shah', 'male', 'February 02,February', 'khaldachoudhary', '654215566', '3336171559', 'hsl afhasl fhasl; hf asfhas', 'Near 6', '60000');
INSERT INTO `user_catagory` VALUES ('30', 'usama', 'shah', 'male', 'January 01,January', 'khaldachoudhary', '654215566', '923078879966', 'hsl afhasl fhasl; hf asfhas', 'sskjfhas fj', '6522');
INSERT INTO `user_catagory` VALUES ('32', 'khan', 'khan', 'male', 'January 01,January', 'khaldachoudhary', '654215566', '923078879966', 'hsl afhasl fhasl; hf asfhas', 'sskjfhas fj', '6522');
INSERT INTO `user_catagory` VALUES ('34', 'majeed', 'imran', 'male', 'March 17,March', 'imran@gmail.com', '654215566', '3336171559', 'Bosan road Multan', 'sskjfhas fj', '60000');
INSERT INTO `user_catagory` VALUES ('37', 'tariq', 'asdsa', 'male', 'January 01,January', 'smaaartmaaan@gm', '123131', '13123', 'qadfad', 'DDF', '0');
INSERT INTO `user_catagory` VALUES ('38', 'SHJSJFJA', 'JSDFJSAFJ', 'male', 'January 01,January', 'numan@gmail.com', '123455', '2346541', 'hkksfkjsfjkasfjk', 'jfskfjsfksj', '56787');
