-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2011 at 07:33 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `river view`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(40) NOT NULL AUTO_INCREMENT,
  `feedback_name` varchar(40) NOT NULL,
  `feedback_email` varchar(40) NOT NULL,
  `feedback_phone` int(15) NOT NULL,
  `feedback_address` varchar(40) NOT NULL,
  `feedback_comments` varchar(300) NOT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `feedback_phone` (`feedback_phone`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_name`, `feedback_email`, `feedback_phone`, `feedback_address`, `feedback_comments`) VALUES
(28, 'tari sha', 'tareqshaaa@gmail.com', 2147483647, 'house no 279 tariq abad khanewal', 'this is nice way to talk'),
(18, 'muhammad tariq', 'tareqshaaa@gmail.com', 2147483647, 'house', 'sfsfsfsfsfsfsa'),
(19, 'umer', 'umer@gmail.com', 222222222, 'hhhhhhhhjjjjjkkklll;;;;;''''''''''affff', 'kkfkkjkskfjskfkskfjasd'),
(20, 'umershah', 'umergmail.com', 222222222, 'hhhhhhhhjjjjjkkklll;;;;;''''''''''affff``', 'sfsfsfasfsfsafasfasf\r\n'),
(21, 'usmanshah', 'usman@gmail.com', 32316654, 'house no 279 lahore ', 'this is very ood and beautiful way to get connected to the hotel'),
(26, 'muhammad tariq shah', 'tareqshaaa@gmail.com', 2147483647, 'house no 279 lahore', 'this is the commetnt box'),
(29, 'usama', 'tareqshaw1@hotmail.com', 2147483647, 'sdfhasfasjfhj', 'HASJKF ASJKFHASJK HASJK HASFSJFSJKHFASSJ\r\n'),
(30, 'usama', 'tareqshaw1@hotmail.com', 2147483647, 'sdfhasfasjfhj', 'HASJKF ASJKFHASJK HASJK HASFSJFSJKHFASSJ\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(12) NOT NULL AUTO_INCREMENT,
  `user_id` int(12) NOT NULL,
  `login_name` varchar(40) NOT NULL,
  `login_password` int(20) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_id`, `login_name`, `login_password`) VALUES
(24, 32, 'khan', 123123),
(22, 30, 'usama', 12345),
(17, 25, 'tarishah', 12345),
(25, 33, 'HONEY', 12345),
(26, 34, 'imran', 1231234),
(28, 36, 'asad', 12345),
(29, 37, 'tariq', 1122334455),
(30, 38, 'noman', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` int(20) NOT NULL AUTO_INCREMENT,
  `menu_catag_id` int(20) NOT NULL,
  `menu_name` varchar(40) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_catag_id`, `menu_name`) VALUES
(1, 1, 'Fish cracker'),
(2, 1, 'chicken spring rolls'),
(3, 1, 'shangrila special chicken wings'),
(4, 1, 'french fries with garlic sauce'),
(5, 1, 'chicken nuggets(12 pieces)'),
(6, 2, 'shangrila special soup'),
(7, 2, 'hot N sour soup'),
(8, 2, 'chicken corn soup'),
(9, 2, 'chicken vegetable clear soup'),
(10, 2, 'chicken thai soup'),
(11, 3, 'chicken burger with french fries'),
(12, 3, 'club sandwiche'),
(13, 3, 'chicken sandwiche'),
(14, 4, 'fish pakora(per kg)'),
(15, 4, 'special qasoori tawa fish'),
(16, 4, 'shangrila special fried fish'),
(17, 5, 'chicken fried rice'),
(18, 5, 'chicken masala rice'),
(19, 5, 'egg fried rice'),
(20, 5, 'vegetable rice'),
(21, 5, 'shangrila special rice'),
(22, 5, 'plain rice'),
(23, 6, 'shangrila special chowmein'),
(24, 6, 'chicken chowmein'),
(25, 6, 'vegetable chowmein'),
(26, 7, 'shangrila special chicken'),
(27, 7, 'chicken manchurian'),
(28, 7, 'sweet N sour chicken'),
(29, 7, 'chicken with pineapple'),
(30, 7, 'chicken chilli vegetable'),
(31, 7, 'chicken black pepper wit green chilli sa'),
(32, 7, 'chicken shashlik'),
(33, 7, 'chicken cutlets(3 pieces)'),
(34, 7, 'chicken with almonds'),
(35, 7, 'Braised chicken with hot spices'),
(36, 7, 'chicken chilli dry'),
(37, 7, 'chicken chilli whole dry'),
(38, 7, 'paper chicken'),
(39, 7, 'honey chicken'),
(40, 7, 'chicken drum sticks(per piece)'),
(41, 7, 'chicken basket'),
(42, 7, 'fried chicken'),
(43, 7, 'chicken dhaka'),
(44, 7, 'chicken adobo'),
(45, 7, 'crispy chicken'),
(46, 7, 'chicken with garlic sauce'),
(47, 7, 'chicken with ayster sauce'),
(48, 7, 'chicken with green chilli sauce'),
(49, 7, 'chicken button mushroom with garlic sauc'),
(50, 7, 'fried spring chicken'),
(51, 8, 'mutton karahi'),
(52, 8, 'mutton handi'),
(53, 8, 'mutton champ masala'),
(54, 8, 'mutton gurda Qeema'),
(55, 8, 'chicken karahi'),
(56, 8, 'chicken boneless handi'),
(57, 8, 'chicken jalferezi'),
(58, 8, 'chicken Ginger'),
(59, 8, 'chicken brost piece'),
(60, 8, 'chicken desi chaoza'),
(61, 8, 'steam chargha masala'),
(62, 8, 'dall mash'),
(63, 8, 'mix vegetable'),
(64, 9, 'russian salad'),
(65, 9, 'fruit salad'),
(66, 9, 'fresh green salad'),
(67, 9, 'kachumer salad'),
(68, 9, 'Roti(per head)'),
(69, 9, 'Raita'),
(70, 9, 'Roti(per head)'),
(71, 10, 'chicken pasha boleless special (8 pieces'),
(72, 10, 'chicken seekh kabab(4 pieces)'),
(73, 10, 'chicken malai boti(10 pieces)'),
(74, 10, 'chicken kasturi boti'),
(75, 10, 'chicken tikka boti(12 pieces)'),
(76, 10, 'ckicken tikka (1 piece)'),
(77, 10, 'chicken achari boti(12 pieces)'),
(78, 10, 'chicken kalmi tikka(4 pieces)'),
(79, 10, 'Beef seekh kabab(4 pieces)'),
(80, 10, 'mutton seekh kabab(4 pieces)'),
(81, 10, 'chicken mirchi'),
(82, 11, 'Rice+Manchurian+Dhaka chicken'),
(83, 11, 'Noddles+Manchurian+dhaka chicken'),
(84, 12, 'shangrila special ice cream with almond'),
(85, 12, 'peach malba'),
(86, 12, 'Banana spilit'),
(87, 12, 'chocolate overload'),
(88, 12, 'tutti fruiti ice cream'),
(89, 12, 'single scoop'),
(90, 12, 'double scoop(mango,strawbery,chocolate,p'),
(91, 12, 'chocolate chip'),
(92, 13, 'pepsi,7up,dew,marrinda'),
(93, 13, 'diet soft drink'),
(94, 13, 'fresh lime'),
(95, 13, 'mineral water'),
(96, 13, 'lemom high'),
(97, 13, 'spunch margretta'),
(98, 13, 'pina colada'),
(99, 13, 'pink lady'),
(100, 13, 'singapure supreme'),
(101, 13, 'hawain dreams'),
(102, 13, 'cold coffee with ice cream'),
(103, 13, 'lassi jug'),
(104, 14, 'tea per cup'),
(105, 14, 'green tea');

-- --------------------------------------------------------

--
-- Table structure for table `menus_price`
--

CREATE TABLE IF NOT EXISTS `menus_price` (
  `menu_id` int(20) NOT NULL,
  `menu_type` varchar(40) NOT NULL,
  `menu_price` int(20) NOT NULL,
  PRIMARY KEY (`menu_id`,`menu_type`),
  FULLTEXT KEY `menu_type` (`menu_type`),
  FULLTEXT KEY `menu_type_2` (`menu_type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus_price`
--

INSERT INTO `menus_price` (`menu_id`, `menu_type`, `menu_price`) VALUES
(1, 'full', 180),
(1, 'half', 100),
(2, 'full', 120),
(2, 'half', 60),
(3, 'full', 260),
(3, 'half', 140),
(4, 'full', 40),
(5, 'full', 200),
(5, 'half', 120),
(6, 'full', 300),
(6, 'half', 160),
(6, 'cup', 75),
(7, 'full', 280),
(7, 'half', 150),
(7, 'cup', 60),
(8, 'full', 260),
(8, 'half', 140),
(8, 'cup', 60),
(9, 'full', 260),
(9, 'half', 140),
(9, 'cup', 60),
(10, 'full', 260),
(10, 'half', 140),
(10, 'cup', 60),
(11, 'full', 100),
(12, 'full', 150),
(13, 'full', 150),
(14, 'full', 350),
(15, 'full', 350),
(16, 'full', 350),
(17, 'full', 200),
(17, 'half', 110),
(18, 'full', 220),
(18, 'half', 120),
(19, 'full', 180),
(19, 'half', 100),
(20, 'full', 170),
(20, 'half', 90),
(21, 'full', 230),
(21, 'half', 125),
(22, 'full', 100),
(22, 'half', 60),
(23, 'full', 350),
(23, 'half', 180),
(24, 'full', 300),
(24, 'half', 160),
(25, 'full', 240),
(25, 'half', 140),
(26, 'full', 380),
(26, 'half', 200),
(27, 'full', 360),
(27, 'half', 200),
(28, 'full', 360),
(28, 'half', 200),
(29, 'full', 360),
(29, 'half', 200),
(30, 'full', 360),
(30, 'half', 200),
(31, 'full', 360),
(31, 'half', 200),
(32, 'full', 280),
(33, 'full', 200),
(34, 'full', 380),
(34, 'half', 200),
(35, 'full', 360),
(35, 'half', 200),
(36, 'full', 370),
(36, 'half', 200),
(37, 'full', 360),
(37, 'half', 200),
(38, 'full', 370),
(38, 'half', 200),
(39, 'full', 370),
(39, 'half', 200),
(40, 'full', 55),
(41, 'full', 460),
(42, 'full', 370),
(42, 'half', 200),
(43, 'full', 400),
(43, 'half', 200),
(44, 'full', 390),
(44, 'half', 200),
(45, 'full', 360),
(45, 'half', 200),
(46, 'full', 370),
(46, 'half', 200),
(47, 'full', 380),
(47, 'half', 200),
(48, 'full', 370),
(48, 'half', 200),
(49, 'full', 370),
(49, 'half', 200),
(50, 'full', 370),
(50, 'half', 200),
(51, 'full', 690),
(51, 'half', 390),
(52, 'full', 750),
(52, 'half', 425),
(53, 'full', 290),
(54, 'full', 300),
(55, 'full', 430),
(55, 'half', 230),
(56, 'full', 530),
(56, 'half', 290),
(57, 'full', 290),
(58, 'full', 290),
(60, 'full', 450),
(61, 'full', 400),
(61, 'half', 210),
(62, 'full', 120),
(63, 'full', 120),
(64, 'full', 80),
(65, 'full', 90),
(66, 'full', 25),
(67, 'full', 30),
(68, 'full', 20),
(69, 'full', 30),
(70, 'per piece', 5),
(71, 'full', 280),
(71, 'half', 150),
(72, 'full', 200),
(72, 'half', 120),
(73, 'full', 300),
(73, 'half', 180),
(74, 'full', 240),
(74, 'half', 130),
(75, 'full', 350),
(75, 'half', 180),
(76, 'full', 250),
(76, 'half', 130),
(77, 'full', 90),
(78, 'full', 300),
(78, 'half', 180),
(79, 'full', 250),
(79, 'half', 125),
(80, 'full', 180),
(80, 'half', 100),
(81, 'full', 250),
(81, 'half', 140),
(82, 'full', 340),
(83, 'full', 340),
(84, 'full', 90),
(85, 'full', 80),
(86, 'full', 80),
(87, 'full', 80),
(88, 'full', 70),
(89, 'full', 20),
(90, 'full', 40),
(91, 'full', 40),
(92, 'full', 20),
(93, 'full', 25),
(94, 'full', 25),
(95, 'full', 40),
(96, 'full', 40),
(97, 'full', 50),
(98, 'full', 80),
(99, 'full', 80),
(100, 'full', 80),
(101, 'full', 80),
(102, 'full', 80),
(103, 'full', 100),
(104, 'full', 20),
(105, 'full', 20);

-- --------------------------------------------------------

--
-- Table structure for table `menu_catagory`
--

CREATE TABLE IF NOT EXISTS `menu_catagory` (
  `menu_catag_id` int(20) NOT NULL AUTO_INCREMENT,
  `menu_catag_name` varchar(40) NOT NULL,
  `menu_catag_desc` varchar(60) NOT NULL,
  PRIMARY KEY (`menu_catag_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `menu_catagory`
--

INSERT INTO `menu_catagory` (`menu_catag_id`, `menu_catag_name`, `menu_catag_desc`) VALUES
(1, 'Appetizers', ''),
(2, 'Soups', ''),
(3, 'Sandwiches & Burgers', ''),
(4, 'Fish Corner', ''),
(5, 'Rice', ''),
(6, 'Chowmein / Noddles', ''),
(7, 'Chinese Chicken', ''),
(8, 'mutton', ''),
(9, 'Salad', ''),
(10, 'Bar_be_Cue', ''),
(11, 'shangrila Special 3 in 1 Offer', ''),
(12, 'Desserts', ''),
(13, 'Cold Drinks', ''),
(14, 'Hot Drinks', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE IF NOT EXISTS `order_user` (
  `order_id` int(20) NOT NULL AUTO_INCREMENT,
  `order_no` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `menu_catag_name` varchar(100) NOT NULL,
  `qty` int(12) NOT NULL,
  `price` varchar(100) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`order_id`, `order_no`, `user_id`, `menu_catag_name`, `qty`, `price`, `menu_name`, `date`) VALUES
(1, 1, 37, 'Cold Drinks', 12, 'full- Price:!40!', 'mineral water', '0000-00-00'),
(2, 2, 37, 'Soups', 2, 'full- Price:!280!', 'hot N sour soup', '0000-00-00'),
(3, 3, 37, 'Appetizers', 1, 'full- Price:!40!', 'french fries with garlic sauce', '2011-11-18'),
(4, 4, 30, 'Appetizers', 2, 'full- Price:!260!', 'shangrila special chicken wings', '2011-11-30'),
(5, 5, 30, 'Sandwiches & Burgers', 3, 'full- Price:!150!', 'club sandwiche', '2011-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hall`
--

CREATE TABLE IF NOT EXISTS `tbl_hall` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_hall`
--

INSERT INTO `tbl_hall` (`ID`, `Name`) VALUES
(1, 'Marriage'),
(2, 'Function Hall');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meal`
--

CREATE TABLE IF NOT EXISTS `tbl_meal` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_meal`
--

INSERT INTO `tbl_meal` (`ID`, `Name`) VALUES
(1, 'Lunch'),
(2, 'Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservations`
--

CREATE TABLE IF NOT EXISTS `tbl_reservations` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tbl_reservations`
--

INSERT INTO `tbl_reservations` (`ID`, `Name`, `Email`, `Address`, `Phone`, `Cell`, `Hall_ID`, `Booking_Date_in`, `Booking_Date_out`, `Meal_ID`, `Payment`) VALUES
(9, 'efvwefv w', 'fvdfv sdfv sdf', 'v dfvadfvfasd', 'vsavsafvs', 'avsavasv', 1, 'Select Day/Select Month/Select Year', 'Select Day/Select Month/Select Year', 1, 'cash'),
(32, 'massab ', 'usama@gmail.com', 'house no 83498394', '64373653756', '84958349', 1, '25/01/2012', '27/01/2012', 1, 'cash'),
(29, 'tariq', 'tahsgfshgfash', 'sgshgsfgh', '64373653756', '3634754537', 1, 'Select Day/Select Month/Select Year', 'Select Day/Select Month/Select Year', 1, 'Online Bank Transfer'),
(30, 'rsashuu', 'rasgu@sjfhsjfhsf', 'hsdfjsfhashj', '6278346278', '234723894', 1, '02/02/2011', '15/02/2011', 1, 'cash'),
(31, 'usama', 'usama@gmail.com', 'house no 83498394', '85938539548', '84958349', 1, '04/03/2011', '05/03/2011', 1, 'cheque');

-- --------------------------------------------------------

--
-- Table structure for table `user_catagory`
--

CREATE TABLE IF NOT EXISTS `user_catagory` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `user_catagory`
--

INSERT INTO `user_catagory` (`user_id`, `user_Fname`, `user_Lname`, `user_Gender`, `user_Birthday`, `user_Email`, `user_Tph`, `user_Mbile`, `user_AdressL1`, `user_AdressL2`, `user_Pcode`) VALUES
(17, 'tareq', 'shah', 'male', 'January 01,January', 'tareqshaw@ymail', 33665898, 3077442900, 'jkhjksfhsjkfhsfjshfh', 'lsjslsjsj', 0),
(19, 'Shahbaz', 'Ahmed', 'male', 'December 15,December', 'shahbazahmed9@h', 923217317430, 923078879966, 'Bosan road Multan', 'Near 6', 60000),
(20, 'tariq', 'shah', 'male', 'January 01,January', 'tareqshaw@ymail', 654215566, 3077442900, 'hsl afhasl fhasl; hf asfhas', 'sskjfhas fj', 6522),
(24, 'umer', 'chand', 'male', 'January 01,January', 'umer@gmail.com', 654215566, 923078879966, 'hsl afhasl fhasl; hf asfhas', 'sskjfhas fj', 60000),
(28, 'tariq', 'shah', 'male', 'February 02,February', 'khaldachoudhary', 654215566, 3336171559, 'hsl afhasl fhasl; hf asfhas', 'Near 6', 60000),
(30, 'usama', 'shah', 'male', 'January 01,January', 'khaldachoudhary', 654215566, 923078879966, 'hsl afhasl fhasl; hf asfhas', 'sskjfhas fj', 6522),
(32, 'khan', 'khan', 'male', 'January 01,January', 'khaldachoudhary', 654215566, 923078879966, 'hsl afhasl fhasl; hf asfhas', 'sskjfhas fj', 6522),
(34, 'majeed', 'imran', 'male', 'March 17,March', 'imran@gmail.com', 654215566, 3336171559, 'Bosan road Multan', 'sskjfhas fj', 60000),
(37, 'tariq', 'asdsa', 'male', 'January 01,January', 'smaaartmaaan@gm', 123131, 13123, 'qadfad', 'DDF', 0),
(38, 'SHJSJFJA', 'JSDFJSAFJ', 'male', 'January 01,January', 'numan@gmail.com', 123455, 2346541, 'hkksfkjsfjkasfjk', 'jfskfjsfksj', 56787);
