-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2014 年 12 月 30 日 12:48
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `diary`
--

-- --------------------------------------------------------

--
-- 表的结构 `db_diary`
--

CREATE TABLE IF NOT EXISTS `db_diary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s1` varchar(300) DEFAULT NULL,
  `s2` varchar(300) DEFAULT NULL,
  `s3` varchar(300) DEFAULT NULL,
  `s4` varchar(300) DEFAULT NULL,
  `s5` varchar(300) DEFAULT NULL,
  `s6` varchar(300) DEFAULT NULL,
  `s7` varchar(300) DEFAULT NULL,
  `s8` varchar(300) DEFAULT NULL,
  `s9` varchar(300) DEFAULT NULL,
  `s10` varchar(300) DEFAULT NULL,
  `s11` varchar(300) DEFAULT NULL,
  `s12` varchar(300) DEFAULT NULL,
  `s13` varchar(300) DEFAULT NULL,
  `s14` varchar(300) DEFAULT NULL,
  `s15` varchar(300) DEFAULT NULL,
  `s16` varchar(300) DEFAULT NULL,
  `s17` varchar(300) DEFAULT NULL,
  `s18` varchar(300) DEFAULT NULL,
  `s19` varchar(300) DEFAULT NULL,
  `s20` varchar(300) DEFAULT NULL,
  `s21` varchar(300) DEFAULT NULL,
  `s22` varchar(300) DEFAULT NULL,
  `s23` varchar(300) DEFAULT NULL,
  `s24` varchar(300) DEFAULT NULL,
  `diary` text,
  `input_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `db_diary`
--

INSERT INTO `db_diary` (`id`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`, `s21`, `s22`, `s23`, `s24`, `diary`, `input_time`) VALUES
(1, '  1^  ', '  ^  ', '  ^  ', '  4^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  9^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  18^Srt  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  23^  ', '  ^S24qqq  ', 'Www', '2014-05-03 22:18:34');
