-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- المزود: localhost
-- أنشئ في: 16 مايو 2016 الساعة 14:03
-- إصدارة المزود: 5.5.8
--  PHP إصدارة: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- قاعدة البيانات: `project`
--

-- --------------------------------------------------------

--
-- بنية الجدول `good`
--

CREATE TABLE IF NOT EXISTS `good` (
  `log_id` int(5) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- إرجاع أو استيراد بيانات الجدول `good`
--

INSERT INTO `good` (`log_id`, `name`, `price`, `quantity`) VALUES
(0, 'Necklace', 550, 2),
(0, 'Necklace', 440, 1),
(0, 'Necklace', 440, 2),
(0, 'Necklace', 550, 3),
(0, 'Bracelet', 80, 2),
(0, 'Necklace', 550, 3),
(0, 'Bracelet', 80, 2),
(0, 'Ring', 320, 6),
(0, 'Necklace', 440, 2);

-- --------------------------------------------------------

--
-- بنية الجدول `informition`
--

CREATE TABLE IF NOT EXISTS `informition` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `Country` varchar(30) COLLATE utf8_bin NOT NULL,
  `Visacard` int(10) NOT NULL,
  `ssnnumber` int(15) NOT NULL,
  `Phonenumber` varchar(10) COLLATE utf8_bin NOT NULL,
  `Housenumber` int(10) NOT NULL,
  `Guaranteebank` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `Chargingcompany` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- إرجاع أو استيراد بيانات الجدول `informition`
--

INSERT INTO `informition` (`id`, `name`, `Country`, `Visacard`, `ssnnumber`, `Phonenumber`, `Housenumber`, `Guaranteebank`, `Chargingcompany`) VALUES
(2, 'maimona mohammed', 'yemen', 1111111111, 222222222, '777-222-44', 98765, NULL, NULL),
(3, 'maimona mohammed', 'yemen', 111111, 44444, '738-124-89', 12343, NULL, NULL),
(4, 'maimona mohammed', 'yemen', 9877, 5677, '777-9999-4', 234326, NULL, NULL),
(5, 'samira', 'yemen', 7788899, 3445667, '777-909-67', 766554, 'sddfew', 'cvfgh'),
(6, 'samira', 'hhhh', 45654566, 898909, '777-777-77', 98987, 'mjjghf', 'ddffgg'),
(7, 'mao', 'err', 2147483647, 2147483647, '777-777-77', 989898765, 'jhgyui', 'kjhgrtyu'),
(8, 'maimona mohammed', 'yemen', 666666, 444444, '777-777-77', 22222222, 'sddfew', 'rfgxch'),
(9, 'afnan', 'yemen', 5555555, 99999999, '777-777-77', 999999, 'sddfew', 'jkghfgty'),
(10, 'aisha ', 'yemen', 666, 66666, '290', 567, 'ebay', 'hhhujuh');

-- --------------------------------------------------------

--
-- بنية الجدول `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `pass` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- إرجاع أو استيراد بيانات الجدول `log`
--

INSERT INTO `log` (`ID`, `email`, `pass`) VALUES
(1, 'kjhhgfty', 'hgfds8899'),
(2, 'sm.alsafhe@gmail.com', '114477'),
(3, 'sm.alsafhe@gmail.com', '22334455');

-- --------------------------------------------------------

--
-- بنية الجدول `prodect`
--

CREATE TABLE IF NOT EXISTS `prodect` (
  `id` int(2) NOT NULL,
  `img` varchar(20) COLLATE utf8_bin NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `detils` varchar(200) COLLATE utf8_bin NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- إرجاع أو استيراد بيانات الجدول `prodect`
--

INSERT INTO `prodect` (`id`, `img`, `name`, `detils`, `price`) VALUES
(1, 'anoma img/19.jpg', 'Necklace', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 440),
(2, 'anoma img/171.jpg', 'Necklace', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 550),
(3, 'anoma img/187.jpg', 'Necklace', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 350),
(4, 'anoma img/169.jpg', 'Necklace', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 450),
(5, 'anoma img/96.jpg', 'Bracelet', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 100),
(6, 'anoma img/17.jpg', 'Bracelet', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 80),
(7, 'anoma img/179.jpg', 'Bracelet', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 150),
(8, 'anoma img/176.jpg', 'Bracelet', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 200),
(9, 'anoma img/180.jpg', 'Earrings', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 170),
(10, 'anoma img/92.jpg', 'Earrings', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 140),
(11, 'anoma img/181.gif', 'Earrings', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 200),
(12, 'anoma img/2.jpg', 'Earrings', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 120),
(13, 'anoma img/3.jpg', 'Ring', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 300),
(14, 'anoma img/91.jpg', 'Ring', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 220),
(15, 'anoma img/13.jpg', 'Ring', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 280),
(16, 'anoma img/158.jpg', 'Ring', 'This product is from lool company of Golnar designer ,it consists of gold pieces and good quality crystal.for buying offline visit our market in the main location France.', 320);

-- --------------------------------------------------------

--
-- بنية الجدول `use1`
--

CREATE TABLE IF NOT EXISTS `use1` (
  `comment` varchar(400) COLLATE utf8_bin DEFAULT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `Name` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- إرجاع أو استيراد بيانات الجدول `use1`
--

INSERT INTO `use1` (`comment`, `id`, `email`, `Name`, `phone`) VALUES
(NULL, 1, 'samira', '', ''),
(NULL, 2, '', '', 'eeeeeeeeee'),
('fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 3, '', '', ''),
('', 4, 'sm.alsafhe@gmail.com', 'afnan', ''),
('ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 5, '', '', ''),
('', 6, 'sm.alsafhe@gmail.com', 'afnan', ''),
('hhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 7, '', '', '');
