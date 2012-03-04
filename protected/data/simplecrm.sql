-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2012 年 03 月 05 日 04:15
-- 服务器版本: 5.5.21
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `simplecrm`
--

-- --------------------------------------------------------

--
-- 表的结构 `contracts`
--

CREATE TABLE IF NOT EXISTS `contracts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `amount` varchar(128) NOT NULL,
  `contract_number` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `contracts`
--

INSERT INTO `contracts` (`id`, `customer_id`, `amount`, `contract_number`, `content`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, '111', '222', '444', '2012-03-05 02:33:34', 1, '2012-03-05 02:33:34', 1),
(2, 1, 'fda', 'fda', 'ffff', '2012-03-05 02:38:30', 1, '2012-03-05 02:38:30', 1),
(3, 1, '12', 'fdsa', 'fda', '2012-03-05 02:42:32', 1, '2012-03-05 02:42:32', 1),
(4, 1, '111', '222', '333', '2012-03-05 02:51:32', 1, '2012-03-05 02:51:32', 1),
(5, 1, '111', '222', '333', '2012-03-05 02:54:06', 1, '2012-03-05 02:54:06', 1),
(6, 1, 'bb', 'cc', 'dd', '2012-03-05 02:56:13', 1, '2012-03-05 02:56:13', 1),
(7, 1, '1', '2', '1232f', '2012-03-05 03:14:55', 1, '2012-03-05 03:14:55', 1),
(8, 1, '1', '2', '1232f', '2012-03-05 03:17:35', 1, '2012-03-05 03:17:35', 1),
(9, 1, '1', '2', '1232f', '2012-03-05 03:17:47', 1, '2012-03-05 03:17:47', 1),
(10, 1, '1', '2', '1232f', '2012-03-05 03:18:35', 1, '2012-03-05 03:18:35', 1),
(11, 1, '1', '2', '1232f', '2012-03-05 03:20:22', 1, '2012-03-05 03:20:22', 1),
(12, 1, '1', '2', '1232f', '2012-03-05 03:22:54', 1, '2012-03-05 03:22:54', 1),
(13, 1, '1', '2', '1232f', '2012-03-05 03:23:48', 1, '2012-03-05 03:23:48', 1),
(14, 1, '1', '2', '1232f', '2012-03-05 03:24:35', 1, '2012-03-05 03:24:35', 1),
(15, 1, '1', '2', '1232f', '2012-03-05 03:25:09', 1, '2012-03-05 03:25:09', 1),
(16, 1, '1', '2', '1232f', '2012-03-05 03:26:49', 1, '2012-03-05 03:26:49', 1),
(17, 1, '1', '2', '1232f', '2012-03-05 03:27:35', 1, '2012-03-05 03:27:35', 1),
(18, 1, '1', '2', '1232f', '2012-03-05 03:30:29', 1, '2012-03-05 03:30:29', 1),
(19, 1, '1', '2', '1232f', '2012-03-05 03:30:38', 1, '2012-03-05 03:30:38', 1),
(20, 1, '1', '2', '1232f', '2012-03-05 03:31:05', 1, '2012-03-05 03:31:05', 1),
(21, 1, '1', '2', '1232f', '2012-03-05 03:32:02', 1, '2012-03-05 03:32:02', 1),
(22, 1, '1', '2', '1232f', '2012-03-05 03:32:41', 1, '2012-03-05 03:32:41', 1),
(23, 1, '1', '2', '1232f', '2012-03-05 03:34:06', 1, '2012-03-05 03:34:06', 1),
(24, 1, '1', '2', '1232f', '2012-03-05 03:34:52', 1, '2012-03-05 03:34:52', 1),
(25, 1, '1', '2', '1232f', '2012-03-05 03:35:26', 1, '2012-03-05 03:35:26', 1),
(26, 1, '1', '2', '1232f', '2012-03-05 03:35:59', 1, '2012-03-05 03:35:59', 1),
(27, 1, '1', '2', '1232f', '2012-03-05 03:37:06', 1, '2012-03-05 03:37:06', 1),
(28, 1, '1', '2', '1232f', '2012-03-05 03:37:52', 1, '2012-03-05 03:37:52', 1),
(29, 1, '1', '2', '1232f', '2012-03-05 03:44:12', 1, '2012-03-05 03:44:12', 1),
(30, 1, '1', '2', '1232f', '2012-03-05 03:59:45', 1, '2012-03-05 03:59:45', 1),
(31, 1, '1', '2', '1232f', '2012-03-05 04:00:52', 1, '2012-03-05 04:06:11', 1);

-- --------------------------------------------------------

--
-- 表的结构 `contract_status`
--

CREATE TABLE IF NOT EXISTS `contract_status` (
  `contract_id` int(10) unsigned NOT NULL,
  `status_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`contract_id`,`status_id`),
  KEY `contract_status_ibfk_4` (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `contract_status`
--

INSERT INTO `contract_status` (`contract_id`, `status_id`) VALUES
(31, 16),
(31, 17),
(31, 18),
(30, 22),
(30, 23);

-- --------------------------------------------------------

--
-- 表的结构 `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_card` varchar(64) NOT NULL,
  `name` varchar(10) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `source` varchar(128) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `customers`
--

INSERT INTO `customers` (`id`, `id_card`, `name`, `phone`, `address`, `source`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '011', '李贺', '010', '大屯路东', 'street', '2012-03-04 15:32:53', 1, '2012-03-04 15:32:53', 1);

-- --------------------------------------------------------

--
-- 表的结构 `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` int(10) unsigned NOT NULL,
  `url` varchar(128) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `files`
--

INSERT INTO `files` (`id`, `property_id`, `url`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, '3476dab64ca456a3a5427f0748cc8b69.png', '2012-03-04 20:56:39', 1, '2012-03-04 20:56:39', 1),
(2, 1, '2a4393c5e38787cb18134de264b057e6.png', '2012-03-04 20:56:47', 1, '2012-03-04 20:56:47', 1),
(3, 1, 'dd3d8e4e0dfd4467ff25a066e06ed9d0.png', '2012-03-04 21:08:53', 1, '2012-03-04 21:08:53', 1);

-- --------------------------------------------------------

--
-- 表的结构 `histories`
--

CREATE TABLE IF NOT EXISTS `histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contract_id` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remark` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contract_id` (`contract_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(64) NOT NULL,
  `address` varchar(128) NOT NULL,
  `area` varchar(64) NOT NULL,
  `unit_price` varchar(64) NOT NULL,
  `age` varchar(64) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `properties`
--

INSERT INTO `properties` (`id`, `code`, `address`, `area`, `unit_price`, `age`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '物业001', '大屯路1号院1号楼1门101', '100平方', '2.3万', '95年', '2012-03-04 15:37:00', 1, '2012-03-04 21:08:57', 1);

-- --------------------------------------------------------

--
-- 表的结构 `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(128) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `statuses`
--

INSERT INTO `statuses` (`id`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '签约', NULL, NULL, NULL, NULL),
(2, '后端收件', NULL, NULL, NULL, NULL),
(3, '风控审核', NULL, NULL, NULL, NULL),
(4, '送评估', NULL, NULL, NULL, NULL),
(5, '评估返回', NULL, NULL, NULL, NULL),
(6, '贷款面签', NULL, NULL, NULL, NULL),
(7, '银行批贷', NULL, NULL, NULL, NULL),
(8, '客服回访', NULL, NULL, NULL, NULL),
(9, '收齐佣金', NULL, NULL, NULL, NULL),
(10, '权证房产证原件收取', NULL, NULL, NULL, NULL),
(11, '房产证自带', NULL, NULL, NULL, NULL),
(12, '收齐银行抵押材料', NULL, NULL, NULL, NULL),
(13, '房屋抵押登记报送', NULL, NULL, NULL, NULL),
(14, '房屋抵押登记完成', NULL, NULL, NULL, NULL),
(15, '土地抵押登记报送', NULL, NULL, NULL, NULL),
(16, '土地抵押登记完成', NULL, NULL, NULL, NULL),
(17, '移交银行他项证', NULL, NULL, NULL, NULL),
(18, '贷款到账确认', NULL, NULL, NULL, NULL),
(19, '房产证移交客户', NULL, NULL, NULL, NULL),
(20, '土地证移交客户', NULL, NULL, NULL, NULL),
(21, '客服最后回访', NULL, NULL, NULL, NULL),
(22, '业务完结', NULL, NULL, NULL, NULL),
(23, '退单', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `job_title` varchar(64) NOT NULL,
  `superior` varchar(64) DEFAULT NULL,
  `department` varchar(64) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `code`, `name`, `birthday`, `phone`, `email`, `job_title`, `superior`, `department`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'admin', '731ed4d4e62822167a6afd7260a350c3', '000', '李贺', '1982-01-01', '861013800138000', 'li.he@brightac.com.cn', 'tech', 'jasonlee', 'tech', '0000-00-00 00:00:00', NULL, '2012-03-04 15:23:43', 1),
(2, 'lijiwei', 'c1dd2c79317ce79eb37277fece38acf5', '001', 'jasonlee', '1983', '01088886666', 'jiwei_li@1anjie.com', 'CEO', '', '', '2012-03-04 15:25:59', 1, '2012-03-04 15:26:42', 1);

--
-- 限制导出的表
--

--
-- 限制表 `contract_status`
--
ALTER TABLE `contract_status`
  ADD CONSTRAINT `cs_ibfk_3` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cs_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `h_ibfk_1` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
