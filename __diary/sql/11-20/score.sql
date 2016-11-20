-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 11 月 20 日 15:10
-- 服务器版本: 5.0.45
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `score`
--

-- --------------------------------------------------------

--
-- 表的结构 `db_diary`
--

CREATE TABLE IF NOT EXISTS `db_diary` (
  `id` int(11) NOT NULL auto_increment,
  `s101` varchar(300) default NULL,
  `s102` varchar(300) default NULL,
  `s103` varchar(300) default NULL,
  `s4` varchar(300) default NULL,
  `s5` varchar(300) default NULL,
  `s6` varchar(300) default NULL,
  `s7` varchar(300) default NULL,
  `s8` varchar(300) default NULL,
  `s9` varchar(300) default NULL,
  `s10` varchar(300) default NULL,
  `s11` varchar(300) default NULL,
  `s12` varchar(300) default NULL,
  `s13` varchar(300) default NULL,
  `s14` varchar(300) default NULL,
  `s15` varchar(300) default NULL,
  `s16` varchar(300) default NULL,
  `s17` varchar(300) default NULL,
  `s18` varchar(300) default NULL,
  `s19` varchar(300) default NULL,
  `s20` varchar(300) default NULL,
  `s21` varchar(300) default NULL,
  `s22` varchar(300) default NULL,
  `s23` varchar(300) default NULL,
  `s24` varchar(300) default NULL,
  `diary` text,
  `input_time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `db_diary`
--

INSERT INTO `db_diary` (`id`, `s101`, `s102`, `s103`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`, `s21`, `s22`, `s23`, `s24`, `diary`, `input_time`) VALUES
(1, '  1^  ', '  ^  ', '  ^  ', '  4^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  9^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  18^Srt  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  23^  ', '  ^S24qqq  ', 'Www', '2014-05-03 22:18:34'),
(2, ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', '1．swipe touch \r\n2. Pic8\r\n3.隐藏滚动轴', '2015-07-04 16:12:10'),
(3, NULL, NULL, NULL, ' ^ ', ' ^ ', ' 6^ ', ' 7^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', '', '2016-04-14 02:28:54'),
(4, ' 2^ ', ' -3^ ', ' 4^ ', ' ^ ', ' ^ ', ' 9^ ', ' 8^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', '', '2016-04-14 02:33:34'),
(5, ' 0^ ', ' 0^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', '久违的江水的味道，江边的风给了我力量。人总需要勇敢生存，因为你没有退路，前面的路就让它更积极一点吧，说不定还有希望呢', '2016-08-29 23:55:20');
