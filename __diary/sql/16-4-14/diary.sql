-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2016 年 04 月 13 日 18:23
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `diary`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `db_diary`
-- 

CREATE TABLE `db_diary` (
  `id` int(11) NOT NULL auto_increment,
  `s1` varchar(300) default NULL,
  `s2` varchar(300) default NULL,
  `s3` varchar(300) default NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `db_diary`
-- 

INSERT INTO `db_diary` VALUES (1, '  1^  ', '  ^  ', '  ^  ', '  4^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  9^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  18^Srt  ', '  ^  ', '  ^  ', '  ^  ', '  ^  ', '  23^  ', '  ^S24qqq  ', 'Www', '2014-05-03 22:18:34');
INSERT INTO `db_diary` VALUES (2, ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', ' ^ ', '1．swipe touch \r\n2. Pic8\r\n3.隐藏滚动轴', '2015-07-04 16:12:10');
