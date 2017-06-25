﻿-- phpMyAdmin SQL Dump
-- version 4.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-07-04 10:19:32
-- 服务器版本： 5.5.40-0ubuntu1
-- PHP Version: 5.5.12-2ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;



--
-- 表的结构 `tp_access`
--

CREATE TABLE IF NOT EXISTS `tp_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `tp_other` (
  `id` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `info` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

ALTER TABLE `tp_other`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tp_other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

--
-- 表的结构 `tp_activity`
--

CREATE TABLE IF NOT EXISTS `tp_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `joinnum` int(11) NOT NULL COMMENT '参与人数',
  `click` int(11) NOT NULL,
  `token` varchar(30) NOT NULL,
  `keyword` varchar(10) NOT NULL,
  `starpicurl` varchar(100) NOT NULL COMMENT '活动开始图片',
  `title` varchar(60) NOT NULL COMMENT '活动名称',
  `txt` varchar(60) NOT NULL COMMENT '兑奖信息',
  `sttxt` varchar(200) NOT NULL COMMENT '活动主题',
  `statdate` int(11) NOT NULL COMMENT '活动开始时间',
  `enddate` int(11) NOT NULL COMMENT '活动结束时间',
  `info` varchar(200) NOT NULL COMMENT '活动说明',
  `aginfo` varchar(200) NOT NULL COMMENT '活动规则',
  `endtite` varchar(60) NOT NULL COMMENT '结束公告',
  `endpicurl` varchar(100) NOT NULL COMMENT '结束图片地址',
  `endinfo` varchar(60) NOT NULL,
  `fist` varchar(50) NOT NULL COMMENT '一等奖奖品',
  `fistnums` int(4) NOT NULL COMMENT '一等奖奖品数量',
  `fistlucknums` int(1) NOT NULL COMMENT '一等奖中奖人数',
  `second` varchar(50) NOT NULL COMMENT '二等奖奖品',
  `type` tinyint(1) NOT NULL,
  `secondnums` int(4) NOT NULL COMMENT '二等奖奖品数量',
  `secondlucknums` int(1) NOT NULL COMMENT '三等奖中奖人数',
  `third` varchar(50) NOT NULL,
  `thirdnums` int(4) NOT NULL,
  `thirdlucknums` int(1) NOT NULL,
  `allpeople` int(11) NOT NULL COMMENT '预计参与人数',
  `canrqnums` int(2) NOT NULL COMMENT '个人抽奖次数限制',
  `parssword` int(15) NOT NULL,
  `renamesn` varchar(50) NOT NULL DEFAULT '',
  `renametel` varchar(60) NOT NULL,
  `displayjpnums` int(1) NOT NULL,
  `createtime` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `four` varchar(50) NOT NULL COMMENT '四等奖奖品',
  `fournums` int(11) NOT NULL COMMENT '四等奖奖品数量',
  `fourlucknums` int(11) NOT NULL COMMENT '四等奖中奖人数',
  `five` varchar(50) NOT NULL COMMENT '五等奖奖品',
  `fivenums` int(11) NOT NULL COMMENT '5奖品数量',
  `fivelucknums` int(11) NOT NULL COMMENT '5中间人数',
  `six` varchar(50) NOT NULL COMMENT '六等奖奖品',
  `sixnums` int(11) NOT NULL COMMENT '6奖品数量',
  `sixlucknums` int(11) NOT NULL COMMENT '6中奖人数',
  `zjpic` varchar(150) NOT NULL DEFAULT '',
  `daynums` mediumint(4) NOT NULL DEFAULT '0',
  `maxgetprizenum` mediumint(4) NOT NULL DEFAULT '1',
  `needreg` tinyint(1) NOT NULL DEFAULT '0',
  `backmp3` varchar(100) NOT NULL COMMENT '背景音乐',
  `hpic` varchar(150) NOT NULL COMMENT '首页背景图片',
  `xpic` varchar(150) NOT NULL COMMENT '兑奖页面宣传图片',
  `mpic` varchar(150) NOT NULL COMMENT '我的盒子背景图片',
  `optime` int(11) NOT NULL COMMENT '需要分享的次数',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_adma`
--

CREATE TABLE IF NOT EXISTS `tp_adma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `url` varchar(100) NOT NULL,
  `copyright` varchar(50) NOT NULL,
  `info` varchar(120) NOT NULL,
  `title` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_agent`
--

CREATE TABLE IF NOT EXISTS `tp_agent` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `intro` varchar(800) NOT NULL DEFAULT '',
  `mp` varchar(11) NOT NULL DEFAULT '',
  `usercount` int(10) NOT NULL DEFAULT '0',
  `wxusercount` int(10) NOT NULL DEFAULT '0',
  `sitename` varchar(50) NOT NULL DEFAULT '',
  `sitelogo` varchar(200) NOT NULL DEFAULT '',
  `qrcode` varchar(100) NOT NULL DEFAULT '',
  `sitetitle` varchar(60) NOT NULL DEFAULT '',
  `siteurl` varchar(100) NOT NULL DEFAULT '',
  `robotname` varchar(40) NOT NULL DEFAULT '',
  `connectouttip` varchar(50) NOT NULL DEFAULT '',
  `needcheckuser` tinyint(1) NOT NULL DEFAULT '0',
  `regneedmp` tinyint(1) NOT NULL DEFAULT '1',
  `reggid` int(10) NOT NULL DEFAULT '0',
  `regvaliddays` mediumint(4) NOT NULL DEFAULT '30',
  `qq` varchar(12) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `metades` varchar(300) NOT NULL DEFAULT '',
  `metakeywords` varchar(200) NOT NULL DEFAULT '',
  `statisticcode` varchar(300) NOT NULL DEFAULT '',
  `copyright` varchar(100) NOT NULL DEFAULT '',
  `alipayaccount` varchar(50) NOT NULL DEFAULT '',
  `alipaypid` varchar(100) NOT NULL DEFAULT '',
  `alipaykey` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `salt` varchar(6) NOT NULL DEFAULT '',
  `money` int(10) NOT NULL DEFAULT '0',
  `moneybalance` int(10) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL DEFAULT '0',
  `endtime` int(11) NOT NULL DEFAULT '0',
  `lastloginip` varchar(26) NOT NULL DEFAULT '',
  `lastlogintime` int(11) NOT NULL DEFAULT '0',
  `wxacountprice` mediumint(4) NOT NULL DEFAULT '0',
  `monthprice` mediumint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_agent_expenserecords`
--

CREATE TABLE IF NOT EXISTS `tp_agent_expenserecords` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `agentid` int(10) NOT NULL DEFAULT '0',
  `amount` int(10) NOT NULL DEFAULT '0',
  `orderid` varchar(60) NOT NULL DEFAULT '',
  `des` varchar(200) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `agentid` (`agentid`,`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_agent_function`
--

CREATE TABLE IF NOT EXISTS `tp_agent_function` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` tinyint(3) NOT NULL,
  `usenum` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `funname` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `isserve` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `agentid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `agentid` (`agentid`) USING BTREE,
  KEY `gid` (`gid`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1556 ;

--
-- 转存表中的数据 `tp_agent_function`
--

INSERT INTO `tp_agent_function` (`id`, `gid`, `usenum`, `name`, `funname`, `info`, `isserve`, `status`, `agentid`) VALUES
(1, 1, 0, '天气查询', 'tianqi', '天气查询服务:例  城市名+天气', 1, 1, 1),
(2, 1, 0, '糗事', 'qiushi', '糗事　直接发送糗事', 1, 1, 1),
(3, 1, 0, '计算器', 'jishuan', '计算器使用方法　例：计算50-50　，计算100*100', 1, 1, 1),
(4, 4, 0, '朗读', 'langdu', '朗读＋关键词　例：朗读weimicms多用户营销系统', 1, 1, 1),
(5, 3, 0, '健康指数查询', 'jiankang', '健康指数查询　健康＋高，＋重　例：健康170,65', 1, 1, 1),
(6, 1, 0, '快递查询', 'kuaidi', '快递＋快递名＋快递号　例：快递顺丰117215889174', 1, 1, 1),
(7, 1, 0, '笑话', 'xiaohua', '笑话　直接发送笑话', 1, 1, 1),
(8, 2, 0, '藏头诗', 'changtoushi', ' 藏头诗+关键词　例：藏头诗我爱你', 1, 1, 1),
(9, 1, 0, '陪聊', 'peiliao', '聊天　直接输入聊天关键词即可', 1, 1, 1),
(10, 1, 0, '聊天', 'liaotian', '聊天　直接输入聊天关键词即可', 1, 1, 1),
(11, 3, 0, '周公解梦', 'mengjian', '周公解梦　梦见+关键词　例如:梦见父母', 1, 1, 1),
(12, 2, 0, '语音翻译', 'yuyinfanyi', '翻译＋关键词 例：翻译你好', 1, 1, 1),
(13, 2, 0, '火车查询', 'huoche', '火车查询　火车＋城市＋目的地　例火车上海南京', 1, 1, 1),
(14, 2, 0, '公交查询', 'gongjiao', '公交＋城市＋公交编号　例：上海公交774', 1, 1, 1),
(15, 2, 0, '身份证查询', 'shenfenzheng', '身份证＋号码　　例：身份证342423198803015568', 1, 1, 1),
(16, 1, 0, '手机归属地查询', 'shouji', '手机归属地查询(吉凶 运势) 手机＋手机号码　例：手机13917778912', 1, 1, 1),
(17, 3, 0, '音乐查询', 'yinle', '音乐＋音乐名 ?例：音乐爱你一万年', 1, 1, 1),
(18, 1, 0, '附近周边信息查询', 'fujin', '附近周边信息查询(ＬＢＳ） 回复:附近+关键词  例:附近酒店', 1, 1, 1),
(19, 4, 0, '抽奖', 'lottery', '抽奖,输入抽奖即可参加幸运大转盘', 1, 1, 1),
(20, 3, 0, '淘宝店铺', 'taobao', '输入淘宝＋关键词　即可访问淘宝3g手机店铺', 2, 1, 1),
(21, 4, 0, '会员资料管理', 'userinfo', '会员资料管理　输入会员　即可参与', 2, 1, 1),
(22, 1, 0, '翻译', 'fanyi', '翻译＋关键词 例：翻译你好', 1, 1, 1),
(23, 4, 0, '第三方接口', 'api', '第三方接口整合模块，请在管理平台下载接口文件并配置接口信息，', 1, 1, 1),
(24, 1, 0, '姓名算命', 'suanming', '姓名算命 算命＋关键词　例：算命李白', 1, 1, 1),
(25, 3, 0, '百度百科', 'baike', '百度百科　使用方法：百科＋关键词　例：百科北京', 2, 1, 1),
(26, 2, 0, '彩票查询', 'caipiao', '回复内容:彩票+彩种即可查询彩票中奖信息,例：彩票双色球', 1, 1, 1),
(27, 1, 0, '幸运大转盘', 'choujiang', '输入抽奖　即可参加幸运大转盘抽奖活动', 2, 1, 1),
(28, 1, 0, '3G首页', 'shouye', '输入首页,访问微3g 网站', 1, 1, 1),
(29, 1, 0, 'DIY宣传页', 'adma', 'DIY宣传页,用于创建二维码宣传页权限开启', 1, 1, 1),
(30, 4, 0, '会员卡', 'huiyuanka', '尊贵享受vip会员卡,回复会员卡即可领取会员卡', 1, 1, 1),
(31, 4, 0, '通用预订系统', 'host_kev', '通用预订系统 可用于酒店预订，ktv订房，旅游预订等。', 2, 1, 1),
(32, 1, 0, '歌词查询', 'geci', '歌词查询 回复歌词＋歌名即可查询一首歌曲的歌词,例：歌词醉清风', 1, 1, 1),
(65, 1, 0, '糗事', 'qiushi', '糗事　直接发送糗事', 1, 1, 2),
(34, 4, 0, '自定义表单', 'diyform', '自定义表单(用于报名，预约,留言)等', 1, 1, 1),
(35, 2, 0, '无线网络订餐', 'dx', '无线网络订餐', 1, 1, 1),
(36, 2, 0, '在线商城', 'shop', '在线商城,购买系统', 1, 1, 1),
(37, 2, 0, '在线团购系统', 'etuan', '在线团购系统', 1, 1, 1),
(38, 4, 0, '自定义菜单', 'diymen_set', '自定义菜单,一键生成轻app', 1, 1, 1),
(39, 4, 0, '刮刮卡', 'gua2', '刮刮卡抽奖活动', 1, 1, 1),
(40, 4, 0, '全景', 'panorama', '', 1, 1, 1),
(41, 4, 0, '婚庆喜帖', 'wedding', '', 2, 1, 1),
(42, 4, 0, '投票', 'vote', '', 2, 1, 1),
(43, 4, 0, '房产', 'estate', '', 2, 1, 1),
(44, 4, 0, '3G相册', 'album', '', 1, 1, 1),
(45, 4, 0, '砸金蛋', 'GoldenEgg', '', 2, 1, 1),
(46, 4, 0, '水果机', 'LuckyFruit', '', 2, 1, 1),
(48, 4, 0, '微汽车', 'car', '', 2, 1, 1),
(49, 4, 0, '微信墙', 'wall', '', 1, 1, 1),
(50, 4, 0, '摇一摇', 'shake', '', 1, 1, 1),
(51, 4, 0, '微论坛', 'forum', '', 1, 1, 1),
(52, 4, 0, '微医疗', 'medical', '', 1, 1, 1),
(66, 5, 0, '计算器', 'jishuan', '计算器使用方法　例：计算50-50　，计算100*100', 1, 0, 2),
(54, 4, 0, '分享统计', 'share', '', 1, 1, 1),
(55, 4, 0, '酒店宾馆', 'hotel', '', 1, 1, 1),
(56, 4, 0, '微教育', 'school', '', 1, 1, 1),
(57, 4, 0, '照片墙', 'Zhaopianwall', '活动开启后，在聊天窗口中直接发送图片，即可图片上墙！', 2, 1, 1),
(58, 4, 0, '微名片', 'Vcard', '微名片', 2, 1, 1),
(59, 4, 0, '高级模板', 'advanceTpl', '高级模板', 2, 1, 1),
(64, 7, 0, '天气查询', 'tianqi', '天气查询服务:例  城市名+天气', 1, 1, 2),
(1335, 1, 0, '微宠物', 'affections', '', 1, 1, 2),
(62, 4, 0, '新版预约', 'Yuyue', '新版预约', 2, 1, 1),
(63, 4, 0, 'wifi', 'wifi', 'wifi', 2, 1, 1),
(67, 4, 0, '朗读', 'langdu', '朗读＋关键词　例：朗读weimicms多用户营销系统', 1, 1, 2),
(68, 3, 0, '健康指数查询', 'jiankang', '健康指数查询　健康＋高，＋重　例：健康170,65', 1, 1, 2),
(69, 1, 0, '快递查询', 'kuaidi', '快递＋快递名＋快递号　例：快递顺丰117215889174', 1, 1, 2),
(70, 1, 0, '笑话', 'xiaohua', '笑话　直接发送笑话', 1, 1, 2),
(71, 2, 0, '藏头诗', 'changtoushi', ' 藏头诗+关键词　例：藏头诗我爱你', 1, 1, 2),
(72, 1, 0, '陪聊', 'peiliao', '聊天　直接输入聊天关键词即可', 1, 1, 2),
(73, 1, 0, '聊天', 'liaotian', '聊天　直接输入聊天关键词即可', 1, 1, 2),
(74, 3, 0, '周公解梦', 'mengjian', '周公解梦　梦见+关键词　例如:梦见父母', 1, 1, 2),
(75, 2, 0, '语音翻译', 'yuyinfanyi', '翻译＋关键词 例：翻译你好', 1, 1, 2),
(76, 2, 0, '火车查询', 'huoche', '火车查询　火车＋城市＋目的地　例火车上海南京', 1, 1, 2),
(77, 2, 0, '公交查询', 'gongjiao', '公交＋城市＋公交编号　例：上海公交774', 1, 1, 2),
(78, 2, 0, '身份证查询', 'shenfenzheng', '身份证＋号码　　例：身份证342423198803015568', 1, 1, 2),
(79, 1, 0, '手机归属地查询', 'shouji', '手机归属地查询(吉凶 运势) 手机＋手机号码　例：手机13917778912', 1, 1, 2),
(80, 3, 0, '音乐查询', 'yinle', '音乐＋音乐名 ?例：音乐爱你一万年', 1, 1, 2),
(81, 1, 0, '附近周边信息查询', 'fujin', '附近周边信息查询(ＬＢＳ） 回复:附近+关键词  例:附近酒店', 1, 1, 2),
(82, 4, 0, '抽奖', 'lottery', '抽奖,输入抽奖即可参加幸运大转盘', 1, 1, 2),
(83, 6, 0, '淘宝店铺', 'taobao', '输入淘宝＋关键词　即可访问淘宝3g手机店铺', 2, 1, 2),
(84, 4, 0, '会员资料管理', 'userinfo', '会员资料管理　输入会员　即可参与', 2, 1, 2),
(85, 1, 0, '翻译', 'fanyi', '翻译＋关键词 例：翻译你好', 1, 1, 2),
(86, 4, 0, '第三方接口', 'api', '第三方接口整合模块，请在管理平台下载接口文件并配置接口信息，', 1, 1, 2),
(87, 6, 0, '姓名算命', 'suanming', '姓名算命 算命＋关键词　例：算命李白', 1, 1, 2),
(88, 3, 0, '百度百科', 'baike', '百度百科　使用方法：百科＋关键词　例：百科北京', 2, 1, 2),
(89, 2, 0, '彩票查询', 'caipiao', '回复内容:彩票+彩种即可查询彩票中奖信息,例：彩票双色球', 1, 1, 2),
(90, 1, 0, '幸运大转盘', 'choujiang', '输入抽奖　即可参加幸运大转盘抽奖活动', 2, 1, 2),
(91, 1, 0, '3G首页', 'shouye', '输入首页,访问微3g 网站', 1, 1, 2),
(92, 1, 0, 'DIY宣传页', 'adma', 'DIY宣传页,用于创建二维码宣传页权限开启', 1, 1, 2),
(93, 4, 0, '会员卡', 'huiyuanka', '尊贵享受vip会员卡,回复会员卡即可领取会员卡', 1, 1, 2),
(94, 4, 0, '通用预订系统', 'host_kev', '通用预订系统 可用于酒店预订，ktv订房，旅游预订等。', 2, 1, 2),
(95, 1, 0, '歌词查询', 'geci', '歌词查询 回复歌词＋歌名即可查询一首歌曲的歌词,例：歌词醉清风', 1, 1, 2),
(1196, 4, 0, '微场景', 'scene', '微场景', 2, 1, 2),
(97, 4, 0, '自定义表单', 'diyform', '自定义表单(用于报名，预约,留言)等', 1, 1, 2),
(98, 2, 0, '无线网络订餐', 'dx', '无线网络订餐', 1, 1, 2),
(99, 2, 0, '在线商城', 'shop', '在线商城,购买系统', 1, 1, 2),
(100, 2, 0, '在线团购系统', 'etuan', '在线团购系统', 1, 1, 2),
(101, 4, 0, '自定义菜单', 'diymen_set', '自定义菜单,一键生成轻app', 1, 1, 2),
(102, 4, 0, '刮刮卡', 'gua2', '刮刮卡抽奖活动', 1, 1, 2),
(103, 4, 0, '全景', 'panorama', '', 1, 1, 2),
(104, 4, 0, '婚庆喜帖', 'wedding', '', 2, 1, 2),
(105, 4, 0, '投票', 'vote', '', 2, 1, 2),
(106, 4, 0, '房产', 'estate', '', 2, 1, 2),
(107, 4, 0, '3G相册', 'album', '', 1, 1, 2),
(108, 4, 0, '砸金蛋', 'GoldenEgg', '', 2, 1, 2),
(109, 4, 0, '水果机', 'LuckyFruit', '', 2, 1, 2),
(1332, 1, 0, '微商圈', 'Market', '', 1, 1, 2),
(111, 4, 0, '微汽车', 'car', '', 2, 1, 2),
(112, 4, 0, '微信墙', 'wall', '', 1, 1, 2),
(113, 4, 0, '摇一摇', 'shake', '', 1, 1, 2),
(114, 4, 0, '微论坛', 'forum', '', 1, 1, 2),
(115, 4, 0, '微医疗', 'medical', '', 1, 1, 2),
(355, 4, 0, '微wifi', 'rippos', '微wifi', 2, 1, 2),
(117, 4, 0, '分享统计', 'share', '', 1, 1, 2),
(118, 4, 0, '酒店宾馆', 'hotel', '', 1, 1, 2),
(119, 4, 0, '微教育', 'school', '', 1, 1, 2),
(120, 4, 0, '照片墙', 'Zhaopianwall', '活动开启后，在聊天窗口中直接发送图片，即可图片上墙！', 2, 1, 2),
(121, 4, 0, '微名片', 'Vcard', '微名片', 2, 1, 2),
(122, 4, 0, '高级模板', 'advanceTpl', '高级模板', 2, 1, 2),
(125, 4, 0, '新版预约', 'Yuyue', '新版预约', 2, 1, 2),
(126, 4, 0, 'wifi', 'wifi', 'wifi', 2, 1, 2),
(1221, 4, 0, '公众小秘书', 'Paper', '公众小秘书', 2, 1, 2),
(1334, 1, 0, '祝福贺卡', 'Greeting_card', '', 1, 1, 2),
(1333, 1, 0, '微预约', 'Custom', '', 1, 1, 2),
(1329, 4, 0, '一战到底', 'Problem', '', 2, 1, 2),
(1330, 1, 0, '微信签到', 'Signin', '', 1, 1, 2),
(1331, 1, 0, '现场活动', 'Scene', '', 1, 1, 2),
(1336, 1, 0, '微家政', 'housekeeper', '', 1, 1, 2),
(1337, 1, 0, '微租赁', 'lease', '', 1, 1, 2),
(1338, 3, 0, '群发消息', 'groupmessage', '', 1, 1, 2),
(1339, 1, 0, '中秋吃月饼', 'Autumn', '', 1, 1, 2),
(1340, 1, 0, '摁死小情侣游戏', 'Lovers', '回复 “小情侣” 即可参加', 1, 1, 2),
(1341, 1, 0, '七夕走鹊桥', 'AppleGame', '回复 “走鹊桥” 即可参与', 1, 1, 2),
(1391, 1, 0, '糗事', 'qiushi', '糗事　直接发送糗事', 1, 1, 4),
(1383, 4, 0, '留言板', 'messageboard', '', 2, 1, 2),
(1384, 4, 0, '群发消息', 'message', '', 1, 1, 2),
(1392, 1, 0, '计算器', 'jishuan', '计算器使用方法　例：计算50-50　，计算100*100', 1, 1, 4),
(1390, 1, 0, '天气查询', 'tianqi', '天气查询服务:例  城市名+天气', 1, 1, 4),
(1393, 4, 0, '朗读', 'langdu', '朗读＋关键词　例：朗读weimicms多用户营销系统', 1, 1, 4),
(1394, 3, 0, '健康指数查询', 'jiankang', '健康指数查询　健康＋高，＋重　例：健康170,65', 1, 1, 4),
(1395, 1, 0, '快递查询', 'kuaidi', '快递＋快递名＋快递号　例：快递顺丰117215889174', 1, 1, 4),
(1396, 1, 0, '笑话', 'xiaohua', '笑话　直接发送笑话', 1, 1, 4),
(1397, 2, 0, '藏头诗', 'changtoushi', ' 藏头诗+关键词　例：藏头诗我爱你', 1, 1, 4),
(1398, 1, 0, '陪聊', 'peiliao', '聊天　直接输入聊天关键词即可', 1, 1, 4),
(1399, 1, 0, '聊天', 'liaotian', '聊天　直接输入聊天关键词即可', 1, 1, 4),
(1400, 3, 0, '周公解梦', 'mengjian', '周公解梦　梦见+关键词　例如:梦见父母', 1, 1, 4),
(1401, 2, 0, '语音翻译', 'yuyinfanyi', '翻译＋关键词 例：翻译你好', 1, 1, 4),
(1402, 2, 0, '火车查询', 'huoche', '火车查询　火车＋城市＋目的地　例火车上海南京', 1, 1, 4),
(1403, 2, 0, '公交查询', 'gongjiao', '公交＋城市＋公交编号　例：上海公交774', 1, 1, 4),
(1404, 2, 0, '身份证查询', 'shenfenzheng', '身份证＋号码　　例：身份证342423198803015568', 1, 1, 4),
(1405, 1, 0, '手机归属地查询', 'shouji', '手机归属地查询(吉凶 运势) 手机＋手机号码　例：手机13917778912', 1, 1, 4),
(1406, 3, 0, '音乐查询', 'yinle', '音乐＋音乐名 ?例：音乐爱你一万年', 1, 1, 4),
(1407, 1, 0, '附近周边信息查询', 'fujin', '附近周边信息查询(ＬＢＳ） 回复:附近+关键词  例:附近酒店', 1, 1, 4),
(1408, 4, 0, '抽奖', 'lottery', '抽奖,输入抽奖即可参加幸运大转盘', 1, 1, 4),
(1409, 3, 0, '淘宝店铺', 'taobao', '输入淘宝＋关键词　即可访问淘宝3g手机店铺', 2, 1, 4),
(1410, 4, 0, '会员资料管理', 'userinfo', '会员资料管理　输入会员　即可参与', 2, 1, 4),
(1411, 1, 0, '翻译', 'fanyi', '翻译＋关键词 例：翻译你好', 1, 1, 4),
(1412, 4, 0, '第三方接口', 'api', '第三方接口整合模块，请在管理平台下载接口文件并配置接口信息，', 1, 1, 4),
(1413, 1, 0, '姓名算命', 'suanming', '姓名算命 算命＋关键词　例：算命李白', 1, 1, 4),
(1414, 3, 0, '百度百科', 'baike', '百度百科　使用方法：百科＋关键词　例：百科北京', 2, 1, 4),
(1415, 2, 0, '彩票查询', 'caipiao', '回复内容:彩票+彩种即可查询彩票中奖信息,例：彩票双色球', 1, 1, 4),
(1416, 1, 0, '幸运大转盘', 'choujiang', '输入抽奖　即可参加幸运大转盘抽奖活动', 2, 1, 4),
(1417, 1, 0, '3G首页', 'shouye', '输入首页,访问微3g 网站', 1, 1, 4),
(1418, 1, 0, 'DIY宣传页', 'adma', 'DIY宣传页,用于创建二维码宣传页权限开启', 1, 1, 4),
(1419, 4, 0, '会员卡', 'huiyuanka', '尊贵享受vip会员卡,回复会员卡即可领取会员卡', 1, 1, 4),
(1420, 4, 0, '通用预订系统', 'host_kev', '通用预订系统 可用于酒店预订，ktv订房，旅游预订等。', 2, 1, 4),
(1421, 1, 0, '歌词查询', 'geci', '歌词查询 回复歌词＋歌名即可查询一首歌曲的歌词,例：歌词醉清风', 1, 1, 4),
(1423, 4, 0, '自定义表单', 'diyform', '自定义表单(用于报名，预约,留言)等', 1, 1, 4),
(1424, 2, 0, '无线网络订餐', 'dx', '无线网络订餐', 1, 1, 4),
(1425, 2, 0, '在线商城', 'shop', '在线商城,购买系统', 1, 1, 4),
(1426, 2, 0, '在线团购系统', 'etuan', '在线团购系统', 1, 1, 4),
(1427, 4, 0, '自定义菜单', 'diymen_set', '自定义菜单,一键生成轻app', 1, 1, 4),
(1428, 4, 0, '刮刮卡', 'gua2', '刮刮卡抽奖活动', 1, 1, 4),
(1429, 4, 0, '全景', 'panorama', '', 1, 1, 4),
(1430, 4, 0, '婚庆喜帖', 'wedding', '', 2, 1, 4),
(1431, 4, 0, '投票', 'vote', '', 2, 1, 4),
(1432, 4, 0, '房产', 'estate', '', 2, 1, 4),
(1433, 4, 0, '3G相册', 'album', '', 1, 1, 4),
(1434, 4, 0, '砸金蛋', 'GoldenEgg', '', 2, 1, 4),
(1435, 4, 0, '水果机', 'LuckyFruit', '', 2, 1, 4),
(1436, 4, 0, '留言板', 'messageboard', '', 2, 1, 4),
(1437, 4, 0, '微汽车', 'car', '', 2, 1, 4),
(1438, 4, 0, '微信墙', 'wall', '', 1, 1, 4),
(1439, 4, 0, '摇一摇', 'shake', '', 1, 1, 4),
(1440, 4, 0, '微论坛', 'forum', '', 1, 1, 4),
(1441, 4, 0, '微医疗', 'medical', '', 1, 1, 4),
(1442, 4, 0, '群发消息', 'message', '', 1, 1, 4),
(1443, 4, 0, '分享统计', 'share', '', 1, 1, 4),
(1444, 4, 0, '酒店宾馆', 'hotel', '', 1, 1, 4),
(1445, 4, 0, '微教育', 'school', '', 1, 1, 4),
(1446, 4, 0, '照片墙', 'Zhaopianwall', '活动开启后，在聊天窗口中直接发送图片，即可图片上墙！', 2, 1, 4),
(1447, 4, 0, '微名片', 'Vcard', '微名片', 2, 1, 4),
(1448, 4, 0, '高级模板', 'advanceTpl', '高级模板', 2, 1, 4),
(1450, 4, 0, '一战到底', 'Problem', '', 2, 1, 4),
(1451, 4, 0, '新版预约', 'Yuyue', '新版预约', 2, 1, 4),
(1452, 4, 0, 'wifi', 'wifi', 'wifi', 2, 1, 4),
(1453, 4, 0, '微wifi', 'rippos', '微wifi', 2, 1, 4),
(1454, 4, 0, '微场景', 'scene', '微场景', 2, 1, 4),
(1456, 4, 0, '公众小秘书', 'Paper', '公众小秘书', 2, 1, 4),
(1460, 1, 0, '微信签到', 'Signin', '', 1, 1, 4),
(1461, 1, 0, '现场活动', 'Scene', '', 1, 1, 4),
(1462, 1, 0, '微商圈', 'Market', '', 1, 1, 4),
(1463, 1, 0, '微预约', 'Custom', '', 1, 1, 4),
(1464, 1, 0, '祝福贺卡', 'Greeting_card', '', 1, 1, 4),
(1465, 1, 0, '微宠物', 'affections', '', 1, 1, 4),
(1466, 1, 0, '微家政', 'housekeeper', '', 1, 1, 4),
(1467, 1, 0, '微租赁', 'lease', '', 1, 1, 4),
(1470, 3, 0, '群发消息', 'groupmessage', '', 1, 1, 4),
(1471, 1, 0, '中秋吃月饼', 'Autumn', '', 1, 1, 4),
(1472, 1, 0, '摁死小情侣游戏', 'Lovers', '回复 “小情侣” 即可参加', 1, 1, 4),
(1473, 1, 0, '七夕走鹊桥', 'AppleGame', '回复 “走鹊桥” 即可参与', 1, 1, 4),
(1548, 2, 0, '域名whois查询', '', '域名whois查询　回复域名＋域名 可查询网站备案信息,域名whois注册时间等等 例：域名weimicms.com', 1, 1, 1),
(1475, 4, 0, '留言板', 'messageboard', '', 2, 1, 1),
(1476, 4, 0, '群发消息', 'message', '', 1, 1, 1),
(1553, 4, 0, '微场景', 'Live', '', 2, 1, 1),
(1478, 4, 0, '一战到底', 'Problem', '', 2, 1, 1),
(1479, 4, 0, '微wifi', 'rippos', '微wifi', 2, 1, 1),
(1480, 4, 0, '微场景', 'scene', '微场景', 2, 1, 1),
(1551, 4, 0, '百度直达号', 'Zhida', '', 2, 1, 1),
(1482, 4, 0, '公众小秘书', 'Paper', '公众小秘书', 2, 1, 1),
(1549, 1, 0, '', '', '', 1, 1, 1),
(1550, 4, 0, '微场景（新版）', 'Live', '', 2, 1, 1),
(1486, 1, 0, '微信签到', 'Signin', '', 1, 1, 1),
(1487, 1, 0, '现场活动', 'Scene', '', 1, 1, 1),
(1488, 1, 0, '微商圈', 'Market', '', 1, 1, 1),
(1489, 1, 0, '微预约', 'Custom', '', 1, 1, 1),
(1490, 1, 0, '祝福贺卡', 'Greeting_card', '', 1, 1, 1),
(1491, 1, 0, '微宠物', 'affections', '', 1, 1, 1),
(1492, 1, 0, '微家政', 'housekeeper', '', 1, 1, 1),
(1493, 1, 0, '微租赁', 'lease', '', 1, 1, 1),
(1552, 4, 0, '游戏中心', 'Gamecenter', '', 2, 1, 1),
(1496, 3, 0, '群发消息', 'groupmessage', '', 1, 1, 1),
(1497, 1, 0, '中秋吃月饼', 'Autumn', '', 1, 1, 1),
(1498, 1, 0, '摁死小情侣游戏', 'Lovers', '回复 “小情侣” 即可参加', 1, 1, 1),
(1499, 1, 0, '七夕走鹊桥', 'AppleGame', '回复 “走鹊桥” 即可参与', 1, 1, 1),
(1555, 1, 0, '百度直达号', 'Zhida', '', 1, 1, 1),
(1554, 1, 0, '微游戏', 'Gamecenter', '', 1, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_agent_price`
--

CREATE TABLE IF NOT EXISTS `tp_agent_price` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `agentid` int(10) NOT NULL DEFAULT '0',
  `minaccount` int(10) NOT NULL DEFAULT '0',
  `maxaccount` int(10) NOT NULL DEFAULT '0',
  `price` int(10) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `agentid` (`agentid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_alipay_config`
--

CREATE TABLE IF NOT EXISTS `tp_alipay_config` (
  `token` varchar(60) NOT NULL,
  `paytype` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(40) NOT NULL DEFAULT '',
  `pid` varchar(40) NOT NULL DEFAULT '',
  `key` varchar(200) NOT NULL DEFAULT '',
  `partnerkey` varchar(100) NOT NULL DEFAULT '',
  `appsecret` varchar(200) NOT NULL DEFAULT '',
  `appid` varchar(60) NOT NULL DEFAULT '',
  `paysignkey` varchar(200) NOT NULL DEFAULT '',
  `partnerid` varchar(200) NOT NULL DEFAULT '',
  `mchid` varchar(100) NOT NULL,
  `open` tinyint(1) NOT NULL DEFAULT '0',
  `info` text NOT NULL,
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tp_api`
--

CREATE TABLE IF NOT EXISTS `tp_api` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `token` varchar(60) NOT NULL,
  `url` varchar(100) NOT NULL,
  `apitoken` varchar(100) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL,
  `is_colation` tinyint(1) NOT NULL,
  `colation_keyword` varchar(100) NOT NULL,
  `number` tinyint(1) NOT NULL,
  `order` tinyint(1) NOT NULL,
  `time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `noanswer` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`,`token`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_api`
--

INSERT INTO `tp_api` (`id`, `uid`, `keyword`, `token`, `url`, `apitoken`, `type`, `is_colation`, `colation_keyword`, `number`, `order`, `time`, `status`, `noanswer`) VALUES
(1, 18, '电影', 'rnkmth1416117447', 'http://test.weiyuntian.com/index.php?g=User&amp;m=Api&amp;a=add', 'dddd', 1, 0, '', 0, 0, 1416283447, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_areply`
--

CREATE TABLE IF NOT EXISTS `tp_areply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `uid` int(11) NOT NULL,
  `uname` varchar(90) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `updatetime` varchar(13) NOT NULL,
  `token` char(30) NOT NULL,
  `home` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_article`
--

CREATE TABLE IF NOT EXISTS `tp_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(90) NOT NULL,
  `description` char(255) NOT NULL,
  `author` varchar(15) NOT NULL,
  `form` varchar(30) NOT NULL,
  `updatetime` varchar(13) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `content` text NOT NULL,
  `imgs` char(40) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_attribute`
--

CREATE TABLE IF NOT EXISTS `tp_attribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `token` varchar(50) NOT NULL,
  `catid` int(10) unsigned NOT NULL COMMENT '分类ID',
  `name` varchar(100) NOT NULL COMMENT '属性名',
  `value` varchar(100) NOT NULL COMMENT '属性值',
  PRIMARY KEY (`id`),
  KEY `token` (`token`,`catid`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_autumns_box`
--

CREATE TABLE IF NOT EXISTS `tp_autumns_box` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `token` varchar(50) NOT NULL,
  `bid` int(11) NOT NULL COMMENT '活动ID',
  `invite` int(11) NOT NULL,
  `boxdate` int(11) NOT NULL COMMENT '领取盒子的时间',
  `box` int(11) NOT NULL COMMENT '盒子样式',
  `wecha_id` varchar(60) NOT NULL,
  `prize` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `isprize` int(11) NOT NULL COMMENT '是否中奖',
  `isprizes` int(11) NOT NULL COMMENT '是否领奖',
  `prizedate` varchar(20) NOT NULL COMMENT '兑奖起始时间',
  `prizedates` varchar(20) NOT NULL COMMENT '兑奖结束时间',
  `lvprize` varchar(30) NOT NULL,
  `sn` varchar(13) NOT NULL,
  `sntime` int(11) NOT NULL COMMENT '奖品发放时间',
  `sendstutas` int(11) NOT NULL DEFAULT '0' COMMENT '是否发奖',
  `prtime` int(11) NOT NULL COMMENT '领奖时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_autumns_ip`
--

CREATE TABLE IF NOT EXISTS `tp_autumns_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `bid` int(11) NOT NULL COMMENT '盒子ID',
  `lid` int(11) NOT NULL COMMENT '活动ID',
  `token` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_autumns_ip`
--

INSERT INTO `tp_autumns_ip` (`id`, `ip`, `bid`, `lid`, `token`) VALUES
(1, '218.201.112.34', 7, 7, 'cayzqd1416285831');

-- --------------------------------------------------------

--
-- 表的结构 `tp_autumns_open`
--

CREATE TABLE IF NOT EXISTS `tp_autumns_open` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `bid` int(11) NOT NULL COMMENT '盒子ID',
  `lid` int(11) NOT NULL COMMENT '活动ID',
  `time` int(11) NOT NULL COMMENT '分享次数',
  `isopen` int(11) NOT NULL COMMENT '是否打开',
  `wecha_id` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_baoming`
--

CREATE TABLE IF NOT EXISTS `tp_baoming` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `token` varchar(100) NOT NULL,
  `company` varchar(100) DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL COMMENT '公司简介',
  `title` text NOT NULL,
  `jianjie` text NOT NULL,
  `tp` char(255) NOT NULL,
  `logo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_baoming_list`
--

CREATE TABLE IF NOT EXISTS `tp_baoming_list` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `token` varchar(100) NOT NULL,
  `zhuti` varchar(100) NOT NULL,
  `feiyong` text,
  `time` text,
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `banner` varchar(200) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_baoming_list`
--

INSERT INTO `tp_baoming_list` (`id`, `token`, `zhuti`, `feiyong`, `time`, `sort`, `banner`, `info`) VALUES
(1, 'dyloct1417592819', 'sadsasa', '100', '2014-12-25', 0, 'http://weimi.b2ctui.com/tpl/static/attachment/focus/default/2.jpg', '');

-- --------------------------------------------------------

--
-- 表的结构 `tp_baoming_order`
--

CREATE TABLE IF NOT EXISTS `tp_baoming_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `token` varchar(64) NOT NULL,
  `wecha_id` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `weixin` varchar(100) NOT NULL,
  `beizhu` text NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_behavior`
--

CREATE TABLE IF NOT EXISTS `tp_behavior` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `openid` varchar(60) NOT NULL,
  `date` varchar(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  `model` varchar(60) NOT NULL,
  `num` int(11) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `openid` (`openid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4136 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_access`
--

CREATE TABLE IF NOT EXISTS `tp_bl_access` (
  `role_id` int(11) NOT NULL,
  `node_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `groupId` (`role_id`) USING BTREE,
  KEY `nodeId` (`node_id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=209 ;

--
-- 转存表中的数据 `tp_bl_access`
--


-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_access_token`
--

CREATE TABLE IF NOT EXISTS `tp_bl_access_token` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `access_token` text NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_bl_access_token`
--

INSERT INTO `tp_bl_access_token` (`id`, `access_token`, `createtime`) VALUES
(1, '2B9pv5TkXP7x2ewhaOJ9ZvJgDiiIEO2b1c2byIxITT60t-QPf18WlxfrvmPF9QZIw8s8F9r-fp3hh_xKhsM5xVmrGpOugC2VWs71lYA7mc1lC3QsNMtAkejmdIwUeFiuIDNeACADYI', 1481007480);

-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_bank`
--

CREATE TABLE IF NOT EXISTS `tp_bl_bank` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=127 ;

--
-- 转存表中的数据 `tp_bl_bank`
--

INSERT INTO `tp_bl_bank` (`id`, `code`, `bank`) VALUES
(1, 'ICBC_DEBIT', '工商银行(借记卡)\r'),
(2, 'ICBC_CREDIT', '工商银行(信用卡)\r'),
(3, 'ABC_DEBIT', '农业银行(借记卡)\r'),
(4, 'ABC_CREDIT', '农业银行(信用卡)\r'),
(5, 'PSBC_DEBIT', '邮政储蓄银行(借记卡)\r'),
(6, 'PSBC_CREDIT', '邮政储蓄银行(信用卡)\r'),
(7, 'CCB_DEBIT', '建设银行(借记卡)\r'),
(8, 'CCB_CREDIT', '建设银行(信用卡)\r'),
(9, 'CMB_DEBIT', '招商银行(借记卡)\r'),
(10, 'CMB_CREDIT', '招商银行(信用卡)\r'),
(11, 'BOC_DEBIT', '中国银行(借记卡)\r'),
(12, 'BOC_CREDIT', '中国银行(信用卡)\r'),
(13, 'COMM_DEBIT', '交通银行(借记卡)\r'),
(14, 'SPDB_DEBIT', '浦发银行(借记卡)\r'),
(15, 'SPDB_CREDIT', '浦发银行(信用卡)\r'),
(16, 'GDB_DEBIT', '广发银行(借记卡)\r'),
(17, 'GDB_CREDIT', '广发银行(信用卡)\r'),
(18, 'CMBC_DEBIT', '民生银行(借记卡)\r'),
(19, 'CMBC_CREDIT', '民生银行(信用卡)\r'),
(20, 'PAB_DEBIT', '平安银行(借记卡)\r'),
(21, 'PAB_CREDIT', '平安银行(信用卡)\r'),
(22, 'CEB_DEBIT', '光大银行(借记卡)\r'),
(23, 'CEB_CREDIT', '光大银行(信用卡)\r'),
(24, 'CIB_DEBIT', '兴业银行(借记卡)\r'),
(25, 'CIB_CREDIT', '兴业银行(信用卡)\r'),
(26, 'CITIC_DEBIT', '中信银行(借记卡)\r'),
(27, 'CITIC_CREDIT', '中信银行(信用卡)\r'),
(28, 'BOSH_DEBIT', '上海银行(借记卡)\r'),
(29, 'BOSH_CREDIT', '上海银行(信用卡)\r'),
(30, 'CRB_DEBIT', '华润银行(借记卡)\r'),
(31, 'HZB_DEBIT', '杭州银行(借记卡)\r'),
(32, 'HZB_CREDIT', '杭州银行(信用卡)\r'),
(33, 'BSB_DEBIT', '包商银行(借记卡)\r'),
(34, 'BSB_CREDIT', '包商银行(信用卡)\r'),
(35, 'CQB_DEBIT', '重庆银行(借记卡)\r'),
(36, 'SDEB_DEBIT', '顺德农商行(借记卡)\r'),
(37, 'SZRCB_DEBIT', '深圳农商银行(借记卡)\r'),
(38, 'HRBB_DEBIT', '哈尔滨银行(借记卡)\r'),
(39, 'BOCD_DEBIT', '成都银行(借记卡)\r'),
(40, 'GDNYB_DEBIT', '南粤银行(借记卡)\r'),
(41, 'GDNYB_CREDIT', '南粤银行(信用卡)\r'),
(42, 'GZCB_DEBIT', '广州银行(借记卡)\r'),
(43, 'GZCB_CREDIT', '广州银行(信用卡)\r'),
(44, 'JSB_DEBIT', '江苏银行(借记卡)\r'),
(45, 'JSB_CREDIT', '江苏银行(信用卡)\r'),
(46, 'NBCB_DEBIT', '宁波银行(借记卡)\r'),
(47, 'NBCB_CREDIT', '宁波银行(信用卡)\r'),
(48, 'NJCB_DEBIT', '南京银行(借记卡)\r'),
(49, 'JZB_DEBIT', '晋中银行(借记卡)\r'),
(50, 'KRCB_DEBIT', '昆山农商(借记卡)\r'),
(51, 'LJB_DEBIT', '龙江银行(借记卡)\r'),
(52, 'LNNX_DEBIT', '辽宁农信(借记卡)\r'),
(53, 'LZB_DEBIT', '兰州银行(借记卡)\r'),
(54, 'WRCB_DEBIT', '无锡农商(借记卡)\r'),
(55, 'ZYB_DEBIT', '中原银行(借记卡)\r'),
(56, 'ZJRCUB_DEBIT', '浙江农信(借记卡)\r'),
(57, 'WZB_DEBIT', '温州银行(借记卡)\r'),
(58, 'XAB_DEBIT', '西安银行(借记卡)\r'),
(59, 'JXNXB_DEBIT', '江西农信(借记卡)\r'),
(60, 'NCB_DEBIT', '宁波通商银行(借记卡)\r'),
(61, 'NYCCB_DEBIT', '南阳村镇银行(借记卡)\r'),
(62, 'NMGNX_DEBIT', '内蒙古农信(借记卡)\r'),
(63, 'SXXH_DEBIT', '陕西信合(借记卡)\r'),
(64, 'SRCB_CREDIT', '上海农商银行(信用卡)\r'),
(65, 'SJB_DEBIT', '盛京银行(借记卡)\r'),
(66, 'SDRCU_DEBIT', '山东农信(借记卡)\r'),
(67, 'SRCB_DEBIT', '上海农商银行(借记卡)\r'),
(68, 'SCNX_DEBIT', '四川农信(借记卡)\r'),
(69, 'QLB_DEBIT', '齐鲁银行(借记卡)\r'),
(70, 'QDCCB_DEBIT', '青岛银行(借记卡)\r'),
(71, 'PZHCCB_DEBIT', '攀枝花银行(借记卡)\r'),
(72, 'ZJTLCB_DEBIT', '浙江泰隆银行(借记卡)\r'),
(73, 'TJBHB_DEBIT', '天津滨海农商行(借记卡)\r'),
(74, 'WEB_DEBIT', '微众银行(借记卡)\r'),
(75, 'YNRCCB_DEBIT', '云南农信(借记卡)\r'),
(76, 'WFB_DEBIT', '潍坊银行(借记卡)\r'),
(77, 'WHRC_DEBIT', '武汉农商行(借记卡)\r'),
(78, 'ORDOSB_DEBIT', '鄂尔多斯银行(借记卡)\r'),
(79, 'XJRCCB_DEBIT', '新疆农信银行(借记卡)\r'),
(80, 'ORDOSB_CREDIT', '鄂尔多斯银行(信用卡)\r'),
(81, 'CSRCB_DEBIT', '常熟农商银行(借记卡)\r'),
(82, 'JSNX_DEBIT', '江苏农商行(借记卡)\r'),
(83, 'GRCB_CREDIT', '广州农商银行(信用卡)\r'),
(84, 'GLB_DEBIT', '桂林银行(借记卡)\r'),
(85, 'GDRCU_DEBIT', '广东农信银行(借记卡)\r'),
(86, 'GDHX_DEBIT', '广东华兴银行(借记卡)\r'),
(87, 'FJNX_DEBIT', '福建农信银行(借记卡)\r'),
(88, 'DYCCB_DEBIT', '德阳银行(借记卡)\r'),
(89, 'DRCB_DEBIT', '东莞农商行(借记卡)\r'),
(90, 'CZCB_DEBIT', '稠州银行(借记卡)\r'),
(91, 'CZB_DEBIT', '浙商银行(借记卡)\r'),
(92, 'CZB_CREDIT', '浙商银行(信用卡)\r'),
(93, 'GRCB_DEBIT', '广州农商银行(借记卡)\r'),
(94, 'CSCB_DEBIT', '长沙银行(借记卡)\r'),
(95, 'CQRCB_DEBIT', '重庆农商银行(借记卡)\r'),
(96, 'CBHB_DEBIT', '渤海银行(借记卡)\r'),
(97, 'BOIMCB_DEBIT', '内蒙古银行(借记卡)\r'),
(98, 'BOD_DEBIT', '东莞银行(借记卡)\r'),
(99, 'BOD_CREDIT', '东莞银行(信用卡)\r'),
(100, 'BOB_DEBIT', '北京银行(借记卡)\r'),
(101, 'BNC_DEBIT', '江西银行(借记卡)\r'),
(102, 'BJRCB_DEBIT', '北京农商行(借记卡)\r'),
(103, 'AE_CREDIT', 'AE(信用卡)\r'),
(104, 'GYCB_CREDIT', '贵阳银行(信用卡)\r'),
(105, 'JSHB_DEBIT', '晋商银行(借记卡)\r'),
(106, 'JRCB_DEBIT', '江阴农商行(借记卡)\r'),
(107, 'JNRCB_DEBIT', '江南农商(借记卡)\r'),
(108, 'JLNX_DEBIT', '吉林农信(借记卡)\r'),
(109, 'JLB_DEBIT', '吉林银行(借记卡)\r'),
(110, 'JJCCB_DEBIT', '九江银行(借记卡)\r'),
(111, 'HXB_DEBIT', '华夏银行(借记卡)\r'),
(112, 'HXB_CREDIT', '华夏银行(信用卡)\r'),
(113, 'HUNNX_DEBIT', '湖南农信(借记卡)\r'),
(114, 'HSB_DEBIT', '徽商银行(借记卡)\r'),
(115, 'HSBC_DEBIT', '恒生银行(借记卡)\r'),
(116, 'HRXJB_DEBIT', '华融湘江银行(借记卡)\r'),
(117, 'HNNX_DEBIT', '河南农信(借记卡)\r'),
(118, 'HKBEA_DEBIT', '东亚银行(借记卡)\r'),
(119, 'HEBNX_DEBIT', '河北农信(借记卡)\r'),
(120, 'HBNX_DEBIT', '湖北农信(借记卡)\r'),
(121, 'HBNX_CREDIT', '湖北农信(信用卡)\r'),
(122, 'GYCB_DEBIT', '贵阳银行(借记卡)\r'),
(123, 'GSNX_DEBIT', '甘肃农信(借记卡)\r'),
(124, 'JCB_CREDIT', 'JCB(信用卡)\r'),
(125, 'MASTERCARD_CREDIT', 'MASTERCARD(信用卡)\r'),
(126, 'VISA_CREDIT', 'VISA(信用卡)');

-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_daili_order`
--

CREATE TABLE IF NOT EXISTS `tp_bl_daili_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shouhuo_id` int(10) NOT NULL COMMENT '收获地址id',
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `grade` tinyint(1) NOT NULL COMMENT '用户等级',
  `product` text NOT NULL COMMENT '产品信息,json',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tp_bl_daili_order`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_fanxian`
--

CREATE TABLE IF NOT EXISTS `tp_bl_fanxian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `time` varchar(30) NOT NULL,
  `order` varchar(31) NOT NULL,
  `jine` varchar(40) NOT NULL,
  `money` varchar(40) NOT NULL,
  `mes` text NOT NULL,
  `type` varchar(3) NOT NULL COMMENT '4:未返现，3：已成功返现到账户',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order` (`order`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_group`
--

CREATE TABLE IF NOT EXISTS `tp_bl_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `status` int(1) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_jiaoyi`
--

CREATE TABLE IF NOT EXISTS `tp_bl_jiaoyi` (
  `ids` int(10) NOT NULL AUTO_INCREMENT,
  `openid` varchar(60) DEFAULT '1',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `mobile` varchar(11) NOT NULL COMMENT '用户手机号',
  `content` text NOT NULL,
  `type` tinyint(2) NOT NULL COMMENT '交易类型1充值2提现3大转盘4购买产品5提成6退款7扣除奖励',
  `money` float(10,2) NOT NULL,
  `yue_pay` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '总余额支付',
  `coupons_money` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '卡券支付金额',
  `cash_money` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '账户现金余额支付',
  `createtime` varchar(20) NOT NULL COMMENT '发生时间',
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`ids`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=364 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_jifen_order`
--

CREATE TABLE IF NOT EXISTS `tp_bl_jifen_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(50) NOT NULL COMMENT '订单号',
  `productName` varchar(50) NOT NULL COMMENT '产品名称',
  `point` int(10) NOT NULL COMMENT '所需积分',
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `status` tinyint(1) NOT NULL COMMENT '订单状态1已支付，2已发货，3，已收获，4无货退回',
  `kuaidi_id` varchar(30) NOT NULL COMMENT '快递单号',
  `kuaidi_name` varchar(30) NOT NULL COMMENT '快递名称',
  `createtime` int(10) NOT NULL COMMENT '创建时间',
  `shouhuo_id` int(10) NOT NULL COMMENT '收获地址',
  `product_id` int(10) NOT NULL COMMENT '积分产品id',
  `pic` varchar(100) NOT NULL COMMENT '积分商品图片',
  `is_tixing` tinyint(1) NOT NULL COMMENT '0未提醒1提醒',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tp_bl_jifen_order`
--


-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_jsapi_ticket`
--

CREATE TABLE IF NOT EXISTS `tp_bl_jsapi_ticket` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `jsapi_ticket` text NOT NULL,
  `createtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_bl_jsapi_ticket`
--

INSERT INTO `tp_bl_jsapi_ticket` (`id`, `jsapi_ticket`, `createtime`) VALUES
(1, 'sM4AOVdWfPE4DxkXGEs8VCQpP2gYpHNjPti0zyMlym9rTO3-59A6PLFT4D6t-cN3bKw1_dkdkHy-eAxmuWmf6A', 1472794830);

-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_kucun`
--

CREATE TABLE IF NOT EXISTS `tp_bl_kucun` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `product_id` int(10) NOT NULL COMMENT '产品id',
  `number` int(10) NOT NULL COMMENT '剩余数量',
  `content` text NOT NULL COMMENT '具体交互信息',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_bl_kucun`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_node`
--

CREATE TABLE IF NOT EXISTS `tp_bl_node` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `level` int(1) NOT NULL,
  `sort` int(11) NOT NULL,
  `href` text,
  `display` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- 转存表中的数据 `tp_bl_node`
--

INSERT INTO `tp_bl_node` (`id`, `name`, `pid`, `title`, `level`, `sort`, `href`, `display`) VALUES
(1, 'cms', 0, '根节点', 1, 0, NULL, 1),
(2, 'Site', 1, '站点管理', 0, 1, NULL, 1),
(3, 'Email', 2, '邮箱配置', 2, 3, '', 1),
(4, 'Basics', 1, '基础设置', 0, 2, NULL, 1),
(6, 'Img', 4, '图文回复/资讯发布', 2, 3, 'User/Img/index', 1),
(7, 'Help', 4, '关注时回复与帮助', 2, 1, 'User/Areply/index', 1),
(8, 'Text', 4, '文本回复', 2, 2, 'User/Text/index', 1),
(9, 'Flash', 4, '资讯推荐位管理', 2, 4, 'User/Flash/index', 1),
(10, 'Voiceresponse', 4, '语音回复', 2, 5, 'User/Voiceresponse/index', 1),
(11, 'Message', 4, '群发消息', 2, 6, 'User/Message/index', 1),
(12, 'Marketing', 1, '营销管理', 0, 5, NULL, 1),
(13, 'Slyder', 12, '大转盘', 2, 1, 'User/Huodong/index', 1),
(14, 'Zixun', 65, '咨询列表', 2, 2, 'User/Zixun/index', 1),
(16, 'Myinfo', 2, '密码修改', 2, 5, 'User/Myinfo/index', 1),
(17, 'Guanggao', 2, '广告位修改', 2, 4, 'User/Guanggao/index', 0),
(18, 'TemplateMsg', 4, '模板消息', 2, 7, 'User/TemplateMsg/index', 0),
(19, 'Menu', 4, '微信自定义菜单', 2, 8, 'User/Diymen/index', 1),
(20, 'Ohter', 4, '回答不上来的配置', 2, 9, 'User/Other/index', 1),
(25, 'Mall', 1, '商城管理', 0, 2, NULL, 1),
(26, 'Flashs', 25, '产品推荐位管理', 2, 4, 'User/Flashs/index', 1),
(27, 'User', 1, '用户管理', 0, 4, NULL, 1),
(28, 'Registered', 27, '注册用户', 2, 4, 'User/Wechat_group/zhuce', 0),
(29, 'Unguanzhu', 27, '未关注用户', 2, 6, 'User/Wechat_group/unguanzhu', 0),
(30, 'Unregistered', 27, '未注册用户', 2, 3, 'User/Wechat_group/guanzhu', 0),
(31, 'Dingdan', 25, '订单管理', 2, 5, 'User/Dingdan/index', 1),
(32, 'All', 27, '全部用户', 2, 1, 'User/Wechat_group/index', 1),
(33, 'Grouping', 27, '分组管理', 2, 2, 'User/Wechat_group/groups', 1),
(36, 'Wechat', 2, '公众号配置', 2, 1, 'User/Wechat/index', 1),
(37, 'SMS', 2, '短信配置', 2, 2, 'User/Smsc/index', 1),
(38, 'Data', 1, '数据分析', 0, 7, NULL, 1),
(39, 'PayPal', 25, '在线支付设置', 2, 1, 'User/Alipay_config/index', 1),
(40, 'Platform', 25, '平台支付对账', 2, 2, 'User/Platform/index', 0),
(41, 'Product', 25, '产品管理', 2, 3, 'User/Blproduct/index', 1),
(42, 'jifen_order', 25, '积分商城订单管理', 2, 6, 'User/Dingdan/jifen_order', 1),
(43, 'Tixianlist', 59, '提现列表', 2, 1, 'User/Tixian/index', 1),
(44, 'Authentication', 27, '认证用户', 2, 5, 'User/Wechat_group/renzheng', 0),
(45, 'Share', 27, '分享管理', 2, 7, 'User/Share/index', 0),
(46, 'Adm', 1, '管理员管理', 0, 6, NULL, 1),
(47, 'Node', 46, ' 权限节点管理 ', 2, 1, 'User/Node/index', 1),
(48, 'Group', 46, '权限组管理', 2, 2, 'User/Group/index', 1),
(49, 'Admin', 46, '管理员管理', 2, 3, 'User/Admin/index', 1),
(50, 'Number', 38, '请求数详情', 2, 1, 'User/Requerydata/index', 1),
(51, 'Behavior', 38, '行为分析', 2, 2, 'User/Wechat_behavior/statistics', 1),
(52, 'Piwik', 38, 'PIWIK', 2, 3, 'User/Lottery/piwik', 1),
(53, 'Tongji', 38, '统计数据', 2, 4, 'User/Tongji/index', 1),
(54, 'Recognition', 12, '渠道二维码', 2, 3, 'User/Recognition/index', 0),
(55, 'Recognition', 12, '渠道二维码', 2, 3, 'User/Recognition/index', 1),
(56, 'yunai', 25, '云爱订单管理', 2, 8, 'User/Yunai/index', 0),
(57, 'Tixian', 59, '购买者', 2, 3, 'User/Tixian/index_goumai', 0),
(58, 'Baowen', 38, '报文分析', 2, 5, 'User/Baowen/index', 0),
(59, 'Tixian', 1, '提现管理', 0, 3, NULL, 1),
(60, 'Fanxian', 59, '返现列表', 2, 2, 'User/Tixian/select', 1),
(61, 'Jilu', 59, '提现记录', 2, 3, 'User/Tixian/record', 0),
(62, 'Chaxun', 59, '提现查询', 2, 4, 'User/Tixian/query', 0),
(63, 'Blacklist', 27, '黑名单', 2, 7, 'User/Wechat_group/blacklist', 0),
(64, 'Caiwu', 38, '财务数据', 2, 5, 'User/Caiwu/index', 1),
(65, 'Query', 1, '资讯管理', 0, 5, NULL, 0),
(66, 'taocan', 25, '品牌管理', 2, 3, 'User/Blproduct/taocan', 1),
(67, 'Guanliyuan', 65, '管理员设置', 2, 3, 'User/Guanliyuan/index', 0),
(68, 'Kefu', 4, '客服系统', 2, 10, 'User/Other/kefu', 1),
(69, 'question', 25, '常见问题设置', 2, 7, 'User/Question/index', 1),
(70, 'point', 25, '积分商城', 2, 8, 'User/Blproduct/point', 1),
(71, 'liuxue', 25, '留学图片管理', 2, 9, 'User/Blproduct/liuxue', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_order`
--

CREATE TABLE IF NOT EXISTS `tp_bl_order` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL COMMENT '购买人id',
  `wx_orderid` varchar(50) NOT NULL,
  `tuikuanorder` varchar(35) NOT NULL,
  `orderid` varchar(32) NOT NULL,
  `kuaidi_id` varchar(20) NOT NULL COMMENT '快递单号',
  `kuaidi_name` varchar(30) NOT NULL COMMENT '快递名称',
  `kuaidi_content` text NOT NULL COMMENT '快递进度',
  `ueq` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0不是，1是',
  `ueq_id` varchar(30) NOT NULL COMMENT 'ueq的订单号',
  `is_tixing` tinyint(1) NOT NULL COMMENT '0未提醒，1提醒',
  `total_price` float(10,2) DEFAULT NULL,
  `yue_pay` float(10,2) NOT NULL COMMENT '使用余额支付',
  `xingming` varchar(20) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `addr` varchar(50) NOT NULL COMMENT '发货地址',
  `remark` varchar(50) NOT NULL COMMENT '备注',
  `status` varchar(1) NOT NULL DEFAULT '0' COMMENT '0未支付1已支付2已发货3待评价4完成',
  `createtime` int(10) NOT NULL COMMENT '订单创建时间',
  `wx_reason` varchar(100) NOT NULL,
  `isfenxiang` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0不是通过分享链接来的1通过分享链接来的',
  `fenxiang_id` int(10) NOT NULL COMMENT '分享人的id',
  `bank` varchar(32) DEFAULT NULL COMMENT '银行',
  `shouhuo_id` int(10) NOT NULL COMMENT '收获地址',
  `zhifu_type` varchar(10) DEFAULT NULL COMMENT '支付方式',
  `xianxia_status` tinyint(1) NOT NULL COMMENT '线下支付状态0待支付，1已支付，2驳回，3完成',
  `zhifu_url` varchar(50) NOT NULL COMMENT '微信支付链接',
  `zhifu_pic` varchar(200) NOT NULL COMMENT '线下支付凭证',
  `order_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单类型0 PC订单 1手机APP订单',
  `fahuo_time` int(10) NOT NULL COMMENT '快递发货时间',
  `over_time` int(10) NOT NULL COMMENT '收到货物的时间',
  `liuyan` varchar(200) NOT NULL COMMENT '代理商下订单留言',
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderid` (`orderid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `tp_bl_order`
--


-- --------------------------------------------------------

--
-- 表的结构 `tp_bl_order_data`
--

CREATE TABLE IF NOT EXISTS `tp_bl_order_data` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `order_id` int(10) NOT NULL COMMENT '对应订单表的id',
  `product_id` int(10) NOT NULL COMMENT '对应产品表的id',
  `productName` varchar(30) NOT NULL COMMENT '产品名称',
  `number` int(10) NOT NULL COMMENT '产品数量',
  `price` float(8,2) NOT NULL COMMENT '产品价格',
  `kuaidi_price` int(11) NOT NULL COMMENT '快递费用',
  `color` varchar(10) NOT NULL COMMENT '颜色',
  `guige` varchar(30) NOT NULL COMMENT '规格',
  `pic` varchar(200) NOT NULL COMMENT '图片',
  `pingjia` tinyint(1) NOT NULL COMMENT '0未评价1已评价',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;


--
-- 表的结构 `tp_bl_product_data`
--

CREATE TABLE IF NOT EXISTS `tp_bl_product_data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `f_pic` varchar(100) NOT NULL DEFAULT '' COMMENT '列表图片',
  `f_desc_pic` varchar(100) NOT NULL DEFAULT '' COMMENT '介绍图片',
  `f_big_pic` varchar(100) NOT NULL DEFAULT '' COMMENT '大图片',
  `phone_pic` varchar(100) NOT NULL COMMENT '手机版产品图',
  `phone_instr_pic` varchar(100) NOT NULL COMMENT '手机版产品介绍',
  `phone_big_pic` varchar(100) NOT NULL COMMENT '手机版产品详情',
  `phone_bg` varchar(100) NOT NULL COMMENT '首页背景图',
  `f_guige` varchar(20) NOT NULL DEFAULT '' COMMENT '列表规格',
  `f_black` varchar(20) NOT NULL DEFAULT '' COMMENT '列表标题黑字',
  `f_red` varchar(20) NOT NULL DEFAULT '' COMMENT '列表标题红字',
  `url` varchar(100) NOT NULL DEFAULT '' COMMENT '链接',
  `f_time` varchar(20) NOT NULL COMMENT '列表活动日期',
  `f_describe` text NOT NULL COMMENT '列表描述',
  `f_price` float(8,2) NOT NULL COMMENT '列表价格',
  `productName` varchar(50) NOT NULL COMMENT '活动名',
  `tiaoxingma` varchar(50) NOT NULL COMMENT '商品条形码',
  `guige` varchar(30) NOT NULL COMMENT '产品规格',
  `addr` varchar(300) NOT NULL COMMENT '产地',
  `pro_addr` char(50) NOT NULL COMMENT '产地',
  `date_line` int(2) NOT NULL COMMENT '保质期',
  `sale` int(10) NOT NULL COMMENT '销售量',
  `photo` text NOT NULL COMMENT '所有图片参数',
  `photo_canshu` text COMMENT '产品参数图片',
  `sale_info` text NOT NULL COMMENT '售卖详情',
  `auther` varchar(10) NOT NULL COMMENT '发布者',
  `createtime` int(10) DEFAULT NULL COMMENT '活动创建时间',
  `price` float(8,2) DEFAULT NULL COMMENT '参与费用',
  `zhiyou_price` int(10) NOT NULL COMMENT '直邮报税价格',
  `kuaidi_price` int(10) NOT NULL COMMENT '快递费用',
  `remark` text NOT NULL COMMENT '备注说明',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '分类 ',
  `type_id` tinyint(3) NOT NULL COMMENT '所属分类',
  `is_shangjia` int(1) NOT NULL COMMENT '0下架1上架',
  `is_kuajing` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0非跨境，1跨境',
  `weight` varchar(25) NOT NULL COMMENT '重量',
  `bianhao` varchar(30) NOT NULL COMMENT '商品编号',
  `huohao` varchar(30) NOT NULL COMMENT '商品货号',
  `pinpai` varchar(30) NOT NULL COMMENT '品牌',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tp_bl_product_data`
--
---------------------------------------------

--
-- 表的结构 `tp_classify`
--

CREATE TABLE IF NOT EXISTS `tp_classify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL,
  `info` varchar(90) NOT NULL COMMENT '分类描述',
  `sorts` int(10) NOT NULL DEFAULT '0' COMMENT '显示顺序',
  `img` char(255) NOT NULL,
  `url` char(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  `token` varchar(30) NOT NULL,
  `path` varchar(3000) DEFAULT '0',
  `tpid` varchar(40) DEFAULT '1',
  `conttpid` tinyint(4) DEFAULT '1',
  `sonpagesize` int(2) NOT NULL DEFAULT '5' COMMENT '子类手机每页显示数',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=169 ;

--
-- 转存表中的数据 `tp_classify`
--

INSERT INTO `tp_classify` (`id`, `fid`, `name`, `info`, `sorts`, `img`, `url`, `status`, `token`, `path`, `tpid`, `conttpid`, `sonpagesize`) VALUES
(168, 0, '资讯', '', 1, 'http://localhost/tpl/static/attachment/icon/canyin/canyin_red/2.png', '', '1', 'bxousa1454659516', '0', '1', 1, 5);

-- --------------------------------------------------------

--
-- 表的结构 `tp_company`
--

CREATE TABLE IF NOT EXISTS `tp_company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `amapid` varchar(50) NOT NULL DEFAULT '',
  `display` tinyint(1) NOT NULL DEFAULT '1',
  `token` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  `shortname` varchar(50) NOT NULL DEFAULT '',
  `mp` varchar(11) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(200) NOT NULL DEFAULT '',
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `intro` text NOT NULL,
  `catid` mediumint(3) NOT NULL DEFAULT '0',
  `taxis` int(10) NOT NULL DEFAULT '0',
  `isbranch` tinyint(1) NOT NULL DEFAULT '0',
  `logourl` varchar(180) NOT NULL DEFAULT '',
  `area_id` int(11) NOT NULL DEFAULT '0',
  `cate_id` int(11) NOT NULL DEFAULT '0',
  `market_id` int(11) NOT NULL DEFAULT '0',
  `mark_url` varchar(200) NOT NULL DEFAULT '',
  `add_time` char(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_company_staff`
--

CREATE TABLE IF NOT EXISTS `tp_company_staff` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `companyid` int(10) NOT NULL,
  `token` varchar(30) NOT NULL DEFAULT '',
  `name` varchar(30) NOT NULL DEFAULT '',
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `tel` varchar(11) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `companyid` (`companyid`),
  KEY `token` (`token`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_company_staff`
--

INSERT INTO `tp_company_staff` (`id`, `companyid`, `token`, `name`, `username`, `password`, `tel`, `time`) VALUES
(1, 40, 'uqtznk1417094301', '时尚1', '123', '202cb962ac59075b964b07152d234b70', '1111', 1417095677);

-- --------------------------------------------------------

--
-- 表的结构 `tp_control`
--

CREATE TABLE IF NOT EXISTS `tp_control` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `value` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_control`
--

INSERT INTO `tp_control` (`id`, `name`, `value`) VALUES
(1, 'zixun', 5);

-- --------------------------------------------------------

--
-- 表的结构 `tp_cosmetology`
--

CREATE TABLE IF NOT EXISTS `tp_cosmetology` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(31) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `piccover` varchar(500) NOT NULL,
  `registrationtoppic` varchar(500) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lng` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sms` varchar(100) NOT NULL,
  `open_email` varchar(50) NOT NULL,
  `open_sms` varchar(50) NOT NULL,
  `checked` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_cosmetology_departments`
--

CREATE TABLE IF NOT EXISTS `tp_cosmetology_departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(31) NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_cosmetology_setup`
--

CREATE TABLE IF NOT EXISTS `tp_cosmetology_setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(31) NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` varchar(20) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `scheduled_date` datetime NOT NULL,
  `address` varchar(500) NOT NULL,
  `departments` varchar(200) NOT NULL,
  `expert` varchar(200) NOT NULL,
  `disease` varchar(500) NOT NULL,
  `process` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_cosmetology_setup_control`
--

CREATE TABLE IF NOT EXISTS `tp_cosmetology_setup_control` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(31) NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` varchar(20) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `scheduled_date` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `departments` varchar(200) NOT NULL,
  `expert` varchar(200) NOT NULL,
  `disease` varchar(500) NOT NULL,
  `process` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


-- --------------------------------------------------------

--------------------------

--
-- 表的结构 `tp_diyform_set`
--

CREATE TABLE IF NOT EXISTS `tp_diyform_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `keyword` varchar(30) NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `jion_num` int(5) NOT NULL,
  `select_name` varchar(200) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_diymen_class`
--

CREATE TABLE IF NOT EXISTS `tp_diymen_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `pid` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `keyword` varchar(30) NOT NULL,
  `url` varchar(300) NOT NULL DEFAULT '',
  `is_show` tinyint(1) NOT NULL,
  `sort` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_diymen_set`
--

CREATE TABLE IF NOT EXISTS `tp_diymen_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `appid` varchar(18) NOT NULL,
  `appsecret` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tp_diymen_set`
--

INSERT INTO `tp_diymen_set` (`id`, `token`, `appid`, `appsecret`) VALUES
(4, 'bxousa1454659516', 'wx4afc6043ae331956', 'c58d7665b25130a281339ba98bb5269f');

-- --------------------------------------------------------

--
-- 表的结构 `tp_dream`
--

CREATE TABLE IF NOT EXISTS `tp_dream` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- 表的结构 `tp_flag`
--

CREATE TABLE IF NOT EXISTS `tp_flag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `value` varchar(11) NOT NULL DEFAULT '0' COMMENT '0关闭1开启',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tp_flag`
--

INSERT INTO `tp_flag` (`id`, `name`, `value`) VALUES
(1, 'zhuce', '0'),
(2, 'renzheng', '0'),
(3, 'title', '18601380662');

-- --------------------------------------------------------

--
-- 表的结构 `tp_flash`
--

CREATE TABLE IF NOT EXISTS `tp_flash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `img` char(255) NOT NULL,
  `url` char(255) NOT NULL,
  `info` varchar(90) NOT NULL,
  `tip` int(11) NOT NULL DEFAULT '1' COMMENT ' 1是视野的推荐位  2是产品的推荐位  3是视野下面轮播的产品推荐',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `display` varchar(1) DEFAULT '0' COMMENT '0不显示1显示',
  `title` varchar(30) NOT NULL,
  `content` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tip` (`tip`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `tp_flash`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_function`
--

CREATE TABLE IF NOT EXISTS `tp_function` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` tinyint(3) NOT NULL,
  `usenum` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `funname` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `isserve` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gid` (`gid`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=114 ;

--
-- 转存表中的数据 `tp_function`
--

INSERT INTO `tp_function` (`id`, `gid`, `usenum`, `name`, `funname`, `info`, `isserve`, `status`) VALUES
(1, 1, 0, '天气查询', 'tianqi', '天气查询服务:例  城市名+天气', 1, 1),
(2, 1, 0, '糗事', 'qiushi', '糗事　直接发送糗事', 1, 1),
(3, 1, 0, '计算器', 'jishuan', '计算器使用方法　例：计算50-50　，计算100*100', 1, 1),
(4, 4, 0, '朗读', 'langdu', '朗读＋关键词　例：朗读weimicms多用户营销系统', 1, 1),
(5, 3, 0, '健康指数查询', 'jiankang', '健康指数查询　健康＋高，＋重　例：健康170,65', 1, 1),
(6, 1, 0, '快递查询', 'kuaidi', '快递＋快递名＋快递号　例：快递顺丰117215889174', 1, 1),
(7, 1, 0, '笑话', 'xiaohua', '笑话　直接发送笑话', 1, 1),
(8, 2, 0, '藏头诗', 'changtoushi', ' 藏头诗+关键词　例：藏头诗我爱你', 1, 1),
(9, 1, 0, '陪聊', 'peiliao', '聊天　直接输入聊天关键词即可', 1, 1),
(10, 1, 0, '聊天', 'liaotian', '聊天　直接输入聊天关键词即可', 1, 1),
(11, 3, 0, '周公解梦', 'mengjian', '周公解梦　梦见+关键词　例如:梦见父母', 1, 1),
(12, 2, 0, '语音翻译', 'yuyinfanyi', '翻译＋关键词 例：翻译你好', 1, 1),
(13, 2, 0, '火车查询', 'huoche', '火车查询　火车＋城市＋目的地　例火车上海南京', 1, 1),
(14, 2, 0, '公交查询', 'gongjiao', '公交＋城市＋公交编号　例：上海公交774', 1, 1),
(15, 2, 0, '身份证查询', 'shenfenzheng', '身份证＋号码　　例：身份证342423198803015568', 1, 1),
(16, 1, 0, '手机归属地查询', 'shouji', '手机归属地查询(吉凶 运势) 手机＋手机号码　例：手机13917778912', 1, 1),
(17, 3, 0, '音乐查询', 'yinle', '音乐＋音乐名 ?例：音乐爱你一万年', 1, 1),
(18, 1, 0, '附近周边信息查询', 'fujin', '附近周边信息查询(ＬＢＳ） 回复:附近+关键词  例:附近酒店', 1, 1),
(43, 4, 0, '抽奖', 'lottery', '抽奖,输入抽奖即可参加幸运大转盘', 1, 1),
(20, 3, 0, '淘宝店铺', 'taobao', '输入淘宝＋关键词　即可访问淘宝3g手机店铺', 2, 1),
(21, 4, 0, '会员资料管理', 'userinfo', '会员资料管理　输入会员　即可参与', 2, 1),
(22, 1, 0, '翻译', 'fanyi', '翻译＋关键词 例：翻译你好', 1, 1),
(23, 4, 0, '第三方接口', 'api', '第三方接口整合模块，请在管理平台下载接口文件并配置接口信息，', 1, 1),
(24, 1, 0, '姓名算命', 'suanming', '姓名算命 算命＋关键词　例：算命李白', 1, 1),
(25, 3, 0, '百度百科', 'baike', '百度百科　使用方法：百科＋关键词　例：百科北京', 2, 1),
(26, 2, 0, '彩票查询', 'caipiao', '回复内容:彩票+彩种即可查询彩票中奖信息,例：彩票双色球', 1, 1),
(42, 1, 0, '幸运大转盘', 'choujiang', '输入抽奖　即可参加幸运大转盘抽奖活动', 2, 1),
(29, 1, 0, '3G首页', 'shouye', '输入首页,访问微3g 网站', 1, 1),
(30, 1, 0, 'DIY宣传页', 'adma', 'DIY宣传页,用于创建二维码宣传页权限开启', 1, 1),
(31, 4, 0, '会员卡', 'huiyuanka', '尊贵享受vip会员卡,回复会员卡即可领取会员卡', 1, 1),
(36, 4, 0, '通用预订系统', 'host_kev', '通用预订系统 可用于酒店预订，ktv订房，旅游预订等。', 2, 1),
(34, 1, 0, '歌词查询', 'geci', '歌词查询 回复歌词＋歌名即可查询一首歌曲的歌词,例：歌词醉清风', 1, 1),
(35, 2, 0, '域名whois查询', '', '域名whois查询　回复域名＋域名 可查询网站备案信息,域名whois注册时间等等 例：域名weimicms.com', 1, 1),
(37, 4, 0, '自定义表单', 'diyform', '自定义表单(用于报名，预约,留言)等', 1, 1),
(38, 2, 0, '无线网络订餐', 'dx', '无线网络订餐', 1, 1),
(39, 2, 0, '在线商城', 'shop', '在线商城,购买系统', 1, 1),
(40, 2, 0, '在线团购系统', 'etuan', '在线团购系统', 1, 1),
(41, 4, 0, '自定义菜单', 'diymen_set', '自定义菜单,一键生成轻app', 1, 1),
(44, 4, 0, '刮刮卡', 'gua2', '刮刮卡抽奖活动', 1, 1),
(45, 4, 0, '全景', 'panorama', '', 1, 1),
(46, 4, 0, '婚庆喜帖', 'wedding', '', 2, 1),
(47, 4, 0, '投票', 'vote', '', 2, 1),
(48, 4, 0, '房产', 'estate', '', 2, 1),
(49, 4, 0, '3G相册', 'album', '', 1, 1),
(50, 4, 0, '砸金蛋', 'GoldenEgg', '', 2, 1),
(51, 4, 0, '水果机', 'LuckyFruit', '', 2, 1),
(52, 4, 0, '留言板', 'messageboard', '', 2, 1),
(53, 4, 0, '微汽车', 'car', '', 2, 1),
(54, 4, 0, '微信墙', 'wall', '', 1, 1),
(55, 4, 0, '摇一摇', 'shake', '', 1, 1),
(56, 4, 0, '微论坛', 'forum', '', 1, 1),
(57, 4, 0, '微医疗', 'medical', '', 1, 1),
(58, 4, 0, '群发消息', 'message', '', 1, 1),
(59, 4, 0, '分享统计', 'share', '', 1, 1),
(60, 4, 0, '酒店宾馆', 'hotel', '', 1, 1),
(61, 4, 0, '微教育', 'school', '', 1, 1),
(62, 4, 0, '照片墙', 'Zhaopianwall', '活动开启后，在聊天窗口中直接发送图片，即可图片上墙！', 2, 1),
(63, 4, 0, '微名片', 'Vcard', '微名片', 2, 1),
(64, 4, 0, '高级模板', 'advanceTpl', '高级模板', 2, 1),
(65, 1, 0, '', '', '', 1, 1),
(66, 4, 0, '一战到底', 'Problem', '', 2, 1),
(67, 4, 0, '新版预约', 'Yuyue', '新版预约', 2, 1),
(68, 4, 0, 'wifi', 'wifi', 'wifi', 2, 1),
(69, 4, 0, '微wifi', 'rippos', '微wifi', 2, 1),
(70, 4, 0, '微场景', 'scene', '微场景', 2, 1),
(76, 4, 0, '微场景（新版）', 'Live', '', 2, 1),
(72, 4, 0, '公众小秘书', 'Paper', '公众小秘书', 2, 1),
(75, 4, 0, '百度直达号', 'Zhida', '', 2, 1),
(77, 4, 0, '游戏中心', 'Gamecenter', '', 2, 1),
(82, 4, 0, '微场景', 'Live', '', 2, 1),
(83, 1, 0, '微信签到', 'Signin', '', 1, 1),
(84, 1, 0, '现场活动', 'Scene', '', 1, 1),
(85, 1, 0, '微商圈', 'Market', '', 1, 1),
(86, 1, 0, '微预约', 'Custom', '', 1, 1),
(87, 1, 0, '祝福贺卡', 'Greeting_card', '', 1, 1),
(88, 1, 0, '微宠物', 'affections', '', 1, 1),
(89, 1, 0, '微家政', 'housekeeper', '', 1, 1),
(90, 1, 0, '微租赁', 'lease', '', 1, 1),
(91, 1, 0, '微游戏', 'Gamecenter', '', 1, 1),
(92, 1, 0, '百度直达号', 'Zhida', '', 1, 1),
(93, 3, 0, '群发消息', 'groupmessage', '', 1, 1),
(94, 1, 0, '中秋吃月饼', 'Autumn', '', 1, 1),
(95, 1, 0, '摁死小情侣游戏', 'Lovers', '回复 “小情侣” 即可参加', 1, 1),
(96, 1, 0, '七夕走鹊桥', 'AppleGame', '回复 “走鹊桥” 即可参与', 1, 1),
(97, 4, 0, '新微房产', 'Fangchan', '', 1, 1),
(98, 4, 0, '微街景', 'jiejing', '', 1, 1),
(99, 4, 0, '微招聘', 'Zhaopin', '', 1, 1),
(100, 1, 0, '一站到底答题比赛', 'Dati', '', 1, 1),
(101, 1, 0, '主题报名', 'Baoming', '主题报名', 1, 1),
(102, 1, 0, '微竞猜', 'Jingcai', '', 1, 1),
(103, 1, 0, '场景应用', 'Yingyong', '', 1, 1),
(104, 1, 0, '分类信息', 'Fenlei', '', 1, 1),
(105, 1, 0, '微方言', 'Fanyan', '', 1, 1),
(106, 1, 0, '拆礼盒', 'Autumns', '', 1, 1),
(107, 1, 0, '微信红包', 'Red_packet', '', 1, 1),
(108, 1, 0, '惩罚台', 'Punish', '', 1, 1),
(109, 1, 0, '转发有礼', 'Hforward', '', 1, 1),
(110, 1, 0, '摇奖活动', 'Shakeprize', '', 1, 1),
(111, 1, 0, '拉票营销', 'Lapiao', '', 1, 1),
(112, 1, 0, '即刻答题', 'Jikedati', '', 1, 1),
(113, 1, 0, '一键关注引导页', 'Yjgz', '', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_funintro`
--

CREATE TABLE IF NOT EXISTS `tp_funintro` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL DEFAULT '',
  `isnew` tinyint(1) NOT NULL DEFAULT '0',
  `logo` varchar(200) NOT NULL DEFAULT '',
  `type` smallint(4) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_gouwuche`
--

CREATE TABLE IF NOT EXISTS `tp_gouwuche` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `price` float(8,2) NOT NULL COMMENT '价格',
  `kuaidi_price` int(10) NOT NULL COMMENT '快递价格',
  `number` int(10) NOT NULL COMMENT '物品数量',
  `product_id` int(10) NOT NULL COMMENT '产品的Id',
  `productName` varchar(30) NOT NULL COMMENT '产品名称',
  `color` varchar(50) NOT NULL COMMENT '产品颜色',
  `guige` varchar(50) NOT NULL COMMENT '产品规格',
  `pic` varchar(200) NOT NULL COMMENT '图片',
  `createtime` int(10) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tp_gouwuche`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_greeting_card`
--

CREATE TABLE IF NOT EXISTS `tp_greeting_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `num` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `bakcground_url` varchar(200) NOT NULL,
  `mp3` varchar(200) NOT NULL,
  `style` tinyint(2) NOT NULL,
  `name` varchar(60) NOT NULL,
  `zfname` varchar(60) NOT NULL,
  `copy` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_hforward`
--

CREATE TABLE IF NOT EXISTS `tp_hforward` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `picurl` varchar(500) NOT NULL,
  `info` text NOT NULL,
  `statdate` int(11) NOT NULL,
  `lj` varchar(255) DEFAULT NULL,
  `gz` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_home`
--

CREATE TABLE IF NOT EXISTS `tp_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL,
  `picurl` varchar(120) NOT NULL,
  `homeurl` varchar(150) NOT NULL DEFAULT '',
  `info` varchar(120) NOT NULL,
  `musicurl` varchar(180) NOT NULL DEFAULT '',
  `plugmenucolor` varchar(10) NOT NULL DEFAULT '',
  `copyright` varchar(200) NOT NULL DEFAULT '',
  `logo` varchar(200) NOT NULL DEFAULT '',
  `advancetpl` tinyint(1) NOT NULL DEFAULT '0',
  `apiurl` varchar(250) NOT NULL,
  `gzhurl` varchar(29) NOT NULL,
  `radiogroup` mediumint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_home_background`
--

CREATE TABLE IF NOT EXISTS `tp_home_background` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL DEFAULT '',
  `picurl` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL DEFAULT '',
  `taxis` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_img`
--

CREATE TABLE IF NOT EXISTS `tp_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `uname` varchar(90) NOT NULL,
  `keyword` char(255) NOT NULL,
  `precisions` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL COMMENT '简介',
  `classid` int(11) NOT NULL,
  `classname` varchar(60) NOT NULL,
  `pic` char(255) NOT NULL COMMENT '封面图片',
  `app_pic` varchar(196) NOT NULL COMMENT 'app列表展示图',
  `showpic` varchar(1) NOT NULL COMMENT '图片是否显示封面',
  `info` text NOT NULL COMMENT '图文详细内容',
  `url` char(255) NOT NULL COMMENT '图文外链地址',
  `createtime` varchar(13) NOT NULL,
  `uptatetime` varchar(13) NOT NULL,
  `click` int(11) NOT NULL,
  `token` char(30) NOT NULL,
  `title` varchar(60) NOT NULL,
  `sort` int(10) NOT NULL,
  `writer` varchar(10) NOT NULL DEFAULT '匿名',
  `usort` int(11) NOT NULL DEFAULT '1',
  `longitude` varchar(20) NOT NULL DEFAULT '0',
  `latitude` varchar(20) NOT NULL DEFAULT '0',
  `display` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `tp_img`
--


-- --------------------------------------------------------

--
-- 表的结构 `tp_img_multi`
--

CREATE TABLE IF NOT EXISTS `tp_img_multi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `keywords` varchar(100) DEFAULT '',
  `imgs` varchar(100) DEFAULT '',
  `token` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_indent`
--

CREATE TABLE IF NOT EXISTS `tp_indent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `gid` tinyint(2) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `info` int(11) NOT NULL,
  `indent_id` char(20) NOT NULL,
  `widtrade_no` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `month` mediumint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `tp_indent`
--

--
-- 表的结构 `tp_invite`
--

CREATE TABLE IF NOT EXISTS `tp_invite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `keyword` varchar(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` varchar(360) NOT NULL,
  `replypic` varchar(200) NOT NULL,
  `cover` varchar(150) NOT NULL,
  `meetpic` varchar(150) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `linkman` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `site` varchar(100) NOT NULL,
  `twopic` varchar(150) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `themeurl` varchar(150) NOT NULL,
  `warn` varchar(100) NOT NULL,
  `inback` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_invite`
--

INSERT INTO `tp_invite` (`id`, `token`, `keyword`, `title`, `content`, `replypic`, `cover`, `meetpic`, `photo`, `linkman`, `email`, `site`, `twopic`, `theme`, `themeurl`, `warn`, `inback`) VALUES
(1, 'wweeau1416538034', 'ewqewq', 'eqwewqeqw', 'ewqewqewqewq', '/tpl/static/attachment/focus/wedding/10.jpg', '/tpl/static/attachment/background/wedding/1.jpg', '/tpl/static/attachment/background/wedding/14.jpg', '3213213212', 'ewqewq', '', 'ewqewqewq', '', '', '', '', '/tpl/static/attachment/background/wedding/8.jpg');

-- --------------------------------------------------------

-
--
-- 表的结构 `tp_kefu`
--

CREATE TABLE IF NOT EXISTS `tp_kefu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `title` varchar(50) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `info2` varchar(200) NOT NULL,
  `text` varchar(50) NOT NULL,
  `status` text NOT NULL,
  `sc` text NOT NULL,
  `cy` text NOT NULL,
  `lt` text NOT NULL,
  `yy` text NOT NULL,
  `hyk` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_keyword`
--

CREATE TABLE IF NOT EXISTS `tp_keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` char(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `module` varchar(15) NOT NULL,
  `precision` tinyint(1) NOT NULL DEFAULT '0',
  `precisions` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `token` (`token`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1040 ;

--
-- 转存表中的数据 `tp_keyword`
--

INSERT INTO `tp_keyword` (`id`, `keyword`, `pid`, `token`, `module`, `precision`, `precisions`) VALUES
(1039, '', 25, 'bxousa1454659516', 'Img', 0, 0);

-- --------------------------------------------------------


--
-- 表的结构 `tp_kuaidi`
--

CREATE TABLE IF NOT EXISTS `tp_kuaidi` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL COMMENT '快递代码',
  `name` varchar(30) NOT NULL COMMENT '快递名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `tp_kuaidi`
--

INSERT INTO `tp_kuaidi` (`id`, `code`, `name`) VALUES
(1, 'huitongkuaidi', '百世汇通快递'),
(2, 'debangwuliu', '德邦物流'),
(3, 'ems', 'EMS快递'),
(4, 'lianbangkuaidi', '联邦快递'),
(5, 'sevendays', '7天连锁物流'),
(6, 'shentong', '申通快递'),
(7, 'shunfeng', '顺丰速运'),
(8, 'tiantian', '天天快递'),
(9, 'yuantong', '圆通速递'),
(10, 'yunda', '韵达快运'),
(11, 'zhongtong', '中通快递'),
(12, 'ueq', 'UEQ');

-- --------------------------------------------------------


--
-- 表的结构 `tp_liuxue_img`
--

CREATE TABLE IF NOT EXISTS `tp_liuxue_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(150) NOT NULL COMMENT '图片',
  `type_name` varchar(30) NOT NULL COMMENT '类别名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tp_liuxue_img`
--



-- --------------------------------------------------------

-------------

--
-- 表的结构 `tp_lottery_cheat`
--

CREATE TABLE IF NOT EXISTS `tp_lottery_cheat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lid` int(10) NOT NULL DEFAULT '0',
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `mp` varchar(11) NOT NULL DEFAULT '',
  `prizetype` mediumint(4) NOT NULL DEFAULT '0',
  `intro` varchar(60) NOT NULL DEFAULT '',
  `code` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `lid` (`lid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_magic_config`
--

CREATE TABLE IF NOT EXISTS `tp_magic_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `huodong_id` int(5) NOT NULL COMMENT '对应的活动',
  `praisefeild` varchar(20) NOT NULL,
  `praisename` varchar(20) NOT NULL,
  `praisecontent` text,
  `praisenumber` int(3) DEFAULT NULL,
  `chance` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `tp_magic_config`
--

INSERT INTO `tp_magic_config` (`id`, `huodong_id`, `praisefeild`, `praisename`, `praisecontent`, `praisenumber`, `chance`) VALUES
(1, 1, 'frist', '10', '￥100', 10, 1),
(2, 1, 'second', '3000', '￥30', 2929, 5190),
(3, 1, 'third', '3000', '￥20', 2941, 5190),
(4, 1, 'fourth', '6250', '￥10', 6146, 10820),
(5, 1, 'fifth', '42000', '￥5', 41212, 72720),
(6, 1, 'sixth', '3500', '￥1', 3437, 6060),
(7, 2, '', '32132', '一等奖', 228, 3213),
(8, 2, '', '23132', '二等奖', 23128, 3213),
(9, 2, '', '434', '三等奖', 2122, 434),
(10, 2, '', '234324', '四等奖', 3433, 434),
(11, 2, '', '43243', '五等奖', 34241, 4332),
(12, 2, '', '5454', '六等奖', 317, 335),
(13, 2, '', '3500', 'Ipad  Pro', 2997, 6060),
(17, 3, '', '43242', '二维', 432423, 423),
(18, 3, '', '5443', '二等奖', 54353, 123),
(26, 0, '', '', '', 1, 0),
(27, 0, '', '', '', 1, 0),
(28, 0, '', '1', '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_magic_huodong`
--

CREATE TABLE IF NOT EXISTS `tp_magic_huodong` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL COMMENT '活动名称',
  `sdate` int(10) NOT NULL COMMENT '活动开始时间',
  `edate` int(10) NOT NULL COMMENT '活动结束时间',
  `createtime` int(10) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1,关闭，2，开启',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tp_magic_huodong`
--

INSERT INTO `tp_magic_huodong` (`id`, `name`, `sdate`, `edate`, `createtime`, `flag`) VALUES
(1, '初始转盘', 1459785600, 1461168000, 0, 2),
(2, '大转盘', 1459094400, 1461945600, 1461121483, 1),
(3, '装配', 1460476800, 1461859200, 1461122323, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tp_magic_record`
--

CREATE TABLE IF NOT EXISTS `tp_magic_record` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `openid` varchar(65) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `user_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `user_phone` varchar(12) NOT NULL,
  `jiang_name` varchar(10) NOT NULL COMMENT '奖项名称',
  `money` float(10,2) DEFAULT NULL,
  `card_num` varchar(19) NOT NULL COMMENT '身份证号',
  `dizhi` text COMMENT '收货地址',
  `date` varchar(20) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `huodong_id` int(5) NOT NULL DEFAULT '1' COMMENT '对应的活动',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=138 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_magic_useraddnumber`
--

CREATE TABLE IF NOT EXISTS `tp_magic_useraddnumber` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `number` tinyint(3) DEFAULT NULL COMMENT '该用户剩余抽奖次数',
  `use_number` int(8) NOT NULL,
  `use_time` int(10) NOT NULL,
  `openid` varchar(70) DEFAULT '1',
  `mobile` varchar(12) DEFAULT '' COMMENT '手机号码',
  `user_id` varchar(50) DEFAULT NULL,
  `is_choujiang` int(1) DEFAULT NULL COMMENT '0未抽奖1已抽奖',
  `huodong_id` int(5) NOT NULL DEFAULT '1' COMMENT '对应的活动',
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_node`
--

CREATE TABLE IF NOT EXISTS `tp_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '节点名称',
  `title` varchar(50) NOT NULL COMMENT '菜单名称',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否激活 1：是 2：否',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注说明',
  `pid` smallint(6) unsigned NOT NULL COMMENT '父ID',
  `level` tinyint(1) unsigned NOT NULL COMMENT '节点等级',
  `data` varchar(255) DEFAULT NULL COMMENT '附加参数',
  `sort` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '排序权重',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '菜单显示类型 0:不显示 1:导航菜单 2:左侧菜单',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- 转存表中的数据 `tp_node`
--

INSERT INTO `tp_node` (`id`, `name`, `title`, `status`, `remark`, `pid`, `level`, `data`, `sort`, `display`) VALUES
(1, 'cms', '根节点', 1, '', 0, 1, NULL, 0, 0),
(2, 'Site', '站点管理', 1, '', 1, 0, NULL, 0, 1),
(3, 'User', '用户管理', 1, '', 1, 0, NULL, 0, 1),
(4, 'extent', '扩展管理', 1, '', 1, 0, NULL, 10, 1),
(5, 'article', '内容管理', 1, '', 1, 0, NULL, 0, 1),
(6, 'Site', '站点设置', 1, '', 2, 2, NULL, 0, 2),
(7, 'index', '基本信息设置', 1, '', 6, 3, NULL, 0, 2),
(8, 'safe', '安全设置', 1, '', 6, 3, NULL, 0, 2),
(9, 'email', '邮箱设置', 1, '', 6, 3, NULL, 0, 2),
(10, 'upfile', '附件设置', 1, '', 6, 3, NULL, 0, 2),
(11, 'Node', '节点管理', 1, NULL, 2, 2, NULL, 0, 2),
(12, 'add', '添加节点', 1, '', 11, 3, NULL, 0, 2),
(13, 'index', '节点列表', 1, '', 11, 3, NULL, 0, 0),
(14, 'insert', '写入', 1, '0', 11, 3, NULL, 0, 0),
(15, 'edit', '编辑节点', 1, '0', 11, 3, NULL, 0, 0),
(16, 'update', '更新节点', 1, '0', 11, 3, NULL, 0, 0),
(17, 'del', '删除节点', 1, '0', 11, 3, NULL, 0, 0),
(18, 'User', '站长管理', 1, '0', 3, 2, NULL, 0, 2),
(19, 'add', '添加管理', 1, '0', 18, 3, NULL, 0, 2),
(20, 'index', '站长列表', 1, '0', 18, 3, NULL, 0, 0),
(21, 'edit', '编辑站长', 1, '0', 18, 3, NULL, 0, 0),
(22, 'insert', '写入数据库', 1, '0', 18, 3, NULL, 0, 0),
(23, 'update', '更新用户', 1, '0', 18, 3, NULL, 0, 0),
(24, 'del', '删除用户', 1, '0', 18, 3, NULL, 0, 0),
(25, 'Group', '管理组', 1, '0', 3, 2, NULL, 0, 2),
(26, 'add', '创建用户组', 1, '0', 25, 3, NULL, 0, 2),
(27, 'index', '用户组列表', 1, '0', 25, 3, NULL, 0, 0),
(28, 'edit', '编辑用户组', 1, '0', 25, 3, NULL, 0, 0),
(29, 'del', '删除用户组', 1, '0', 25, 3, NULL, 0, 0),
(30, 'insert', '写入数据库', 1, '0', 25, 3, NULL, 0, 0),
(31, 'update', '更新用户组', 1, '0', 25, 3, NULL, 0, 0),
(32, 'insert', '保存测试', 1, '0', 6, 3, NULL, 0, 0),
(36, 'menu', '左侧栏', 1, '0', 35, 3, NULL, 0, 0),
(35, 'System', '首页', 1, '0', 2, 2, NULL, 0, 0),
(37, 'main', '右侧栏目', 1, '0', 35, 3, NULL, 0, 0),
(38, 'Article', '微信图文', 1, '0', 5, 2, NULL, 0, 2),
(39, 'index', '图文列表', 1, '0', 38, 3, NULL, 0, 0),
(40, 'add', '图文添加', 1, '0', 38, 3, NULL, 0, 2),
(41, 'edit', '微信图文编辑', 1, '0', 38, 3, NULL, 0, 0),
(42, 'del', '微信图文删除', 1, '0', 38, 3, NULL, 0, 0),
(80, 'token', '公众号管理', 1, '0', 1, 2, NULL, 0, 1),
(45, 'Function', '功能模块', 1, '0', 1, 0, NULL, 0, 1),
(46, 'Function', '功能模块', 1, '0', 45, 2, NULL, 0, 2),
(47, 'add', '添加模块', 1, '0', 46, 3, NULL, 0, 2),
(48, 'User_group', '套餐管理', 1, '0', 3, 2, NULL, 0, 2),
(49, 'add', '添加套餐', 1, '0', 48, 3, NULL, 0, 2),
(50, 'Users', '客户管理', 1, '0', 3, 2, NULL, 0, 2),
(51, 'index', '客户列表', 1, '0', 50, 3, NULL, 0, 0),
(52, 'add', '添加客户', 1, '0', 50, 3, NULL, 0, 2),
(53, 'edit', '编辑客户', 1, '0', 50, 3, NULL, 0, 0),
(54, 'del', '删除客户', 1, '0', 50, 3, NULL, 0, 0),
(55, 'insert', '写入数据库', 1, '0', 50, 3, NULL, 0, 0),
(56, 'upsave', '更新用户', 1, '0', 50, 3, NULL, 0, 0),
(57, 'Text', '微信文本', 1, '0', 5, 2, NULL, 0, 2),
(58, 'index', '文本列表', 1, '0', 57, 3, NULL, 0, 2),
(59, 'del', '删除', 1, '0', 57, 3, NULL, 0, 0),
(60, 'Custom', '自定义页面', 1, '0', 5, 2, NULL, 0, 2),
(61, 'index', '列表', 1, '0', 60, 3, NULL, 0, 2),
(62, 'edit', '编辑', 1, '0', 60, 3, NULL, 0, 0),
(63, 'del', '删除', 1, '0', 60, 3, NULL, 0, 0),
(64, 'Records', '充值记录', 1, '0', 4, 2, NULL, 0, 2),
(65, 'index', '充值列表', 1, '0', 64, 3, NULL, 0, 0),
(66, 'Case', '用户案例', 1, '0', 4, 2, NULL, 0, 0),
(67, 'index', '案例列表', 1, '0', 66, 3, NULL, 0, 0),
(68, 'add', '添加案例', 1, '0', 66, 3, NULL, 0, 2),
(69, 'edit', '编辑案例', 1, '0', 66, 3, NULL, 0, 0),
(70, 'del', '删除案例', 1, '0', 66, 3, NULL, 0, 0),
(71, 'insert', '写入数据库', 1, '0', 66, 3, NULL, 0, 0),
(72, 'upsave', '更新数据库', 1, '0', 66, 3, NULL, 0, 0),
(73, 'Links', '友情链接', 1, '0', 4, 2, NULL, 0, 2),
(74, 'index', '友情链接', 1, '0', 73, 3, NULL, 0, 0),
(75, 'add', '添加链接', 1, '0', 73, 3, NULL, 0, 2),
(76, 'edit', '编辑链接', 1, '0', 73, 3, NULL, 0, 0),
(77, 'insert', '插入数据库', 1, '0', 73, 3, NULL, 0, 0),
(78, 'upsave', '更新数据库', 1, '0', 73, 3, NULL, 0, 0),
(79, 'del', '删除友情链接', 1, '0', 73, 3, NULL, 0, 0),
(81, 'Token', '公众号管理', 1, '0', 80, 2, NULL, 0, 2),
(83, 'alipay', '在线支付接口', 1, '0', 6, 3, NULL, 0, 2),
(84, 'sms', '短信接口', 1, '', 6, 3, NULL, 0, 2),
(85, 'Funintro', '功能介绍', 1, '0', 45, 2, NULL, 0, 2),
(86, 'add', '添加内容', 1, '0', 85, 3, NULL, 0, 2),
(87, 'qianmoban', '模板设置', 1, '0', 6, 3, NULL, 0, 2),
(88, 'Agent', '代理商管理', 1, '0', 1, 2, NULL, 0, 1),
(89, 'Agent', '代理商管理', 1, '0', 88, 2, NULL, 0, 2),
(90, 'add', '添加代理商', 1, '0', 89, 3, NULL, 0, 2),
(91, 'AgentPrice', '优惠套餐包', 1, '0', 88, 2, NULL, 0, 2),
(92, 'add', '添加套餐包', 1, '0', 91, 3, NULL, 0, 2),
(93, 'AgentBuyRecords', '消费记录', 1, '0', 88, 2, NULL, 0, 2),
(94, 'rippleos_key', '微WIFI', 1, '0', 6, 3, NULL, 0, 2),
(95, 'Aboutus', '关于我们', 1, '0', 45, 2, NULL, 0, 2),
(96, 'add', '添加内容', 1, '0', 95, 3, NULL, 0, 2),
(97, 'Database', '数据库维护', 1, '0', 2, 2, NULL, 0, 2),
(98, 'platform', '平台支付配置', 1, '', 6, 3, NULL, 0, 2),
(99, 'Platform', '平台支付', 1, '', 4, 2, NULL, 0, 2),
(100, 'index', '平台对账', 1, '', 99, 3, NULL, 0, 2);

-- --------------------------------------------------------


--
-- 表的结构 `tp_pingjia`
--

CREATE TABLE IF NOT EXISTS `tp_pingjia` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) NOT NULL COMMENT '评价的订单id',
  `product_id` int(10) NOT NULL COMMENT '评价的产品id',
  `productName` varchar(30) NOT NULL COMMENT '产品名称',
  `color` varchar(30) NOT NULL COMMENT '颜色',
  `number` int(8) NOT NULL COMMENT '数量',
  `guige` varchar(30) NOT NULL COMMENT '规格',
  `pic` varchar(150) NOT NULL COMMENT '图片',
  `price` float(8,2) NOT NULL COMMENT '价格',
  `content` varchar(200) NOT NULL COMMENT '评价内容',
  `all` tinyint(1) NOT NULL COMMENT '总体评价1-5星',
  `meiguan` tinyint(1) NOT NULL COMMENT '美观',
  `shiyong` tinyint(1) NOT NULL COMMENT '实用性',
  `xingjiabi` tinyint(1) NOT NULL COMMENT '性价比',
  `xiaoguo` tinyint(1) NOT NULL COMMENT '效果',
  `createtime` int(10) NOT NULL COMMENT '评价时间',
  `status` tinyint(1) NOT NULL COMMENT '是否可见1可见0不可见',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tp_pingjia`
--


-- --------------------------------------------------------

--
-- 表的结构 `tp_pinpai`
--

CREATE TABLE IF NOT EXISTS `tp_pinpai` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pid` tinyint(1) NOT NULL COMMENT '品牌分类0位1级',
  `name` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '品牌名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tp_pinpai`
--

INSERT INTO `tp_pinpai` (`id`, `pid`, `name`) VALUES
(1, 0, '真珠美学'),
(2, 1, '保湿系列');

-- --------------------------------------------------------

--
-- 表的结构 `tp_point`
--

CREATE TABLE IF NOT EXISTS `tp_point` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `productName` varchar(30) NOT NULL COMMENT '积分商品名称',
  `point` int(10) NOT NULL COMMENT '购买所花费的积分',
  `kucun` int(10) NOT NULL COMMENT '产品库存',
  `pic` varchar(200) NOT NULL COMMENT '产品图片',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tp_point`
--

INSERT INTO `tp_point` (`id`, `productName`, `point`, `kucun`, `pic`) VALUES
(3, '考拉', 500, 1, './uploads/2016-11-23/5835380d0d625.jpg'),
(4, '花', 30, 2, './uploads/2016-11-23/5835392b7a9bd.jpg');

-- --------------------------------------------------------



--
-- 表的结构 `tp_query`
--

CREATE TABLE IF NOT EXISTS `tp_query` (
  `id` int(10) NOT NULL,
  `zixun_id` int(10) NOT NULL COMMENT '咨询id',
  `content` text NOT NULL COMMENT '对话内容'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tp_question`
--

CREATE TABLE IF NOT EXISTS `tp_question` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type_id` int(10) NOT NULL COMMENT '分类id',
  `question` text NOT NULL COMMENT '问题',
  `answer` text NOT NULL COMMENT '答案',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--------------------

--
-- 表的结构 `tp_question_type`
--

CREATE TABLE IF NOT EXISTS `tp_question_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '问题分类',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tp_question_type`
--


-- --------------------------------------------------------

--
-- 表的结构 `tp_relationship`
--

CREATE TABLE IF NOT EXISTS `tp_relationship` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `pid` int(10) NOT NULL COMMENT '这个人的前一级',
  `level` varchar(30) NOT NULL COMMENT '这个人现在的等级',
  `money` varchar(30) NOT NULL COMMENT '这个人的销售金额',
  `user_id` int(10) NOT NULL COMMENT '人物的id',
  `createtime` int(10) NOT NULL COMMENT '成为销售的时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_reservebook`
--

-- 表的结构 `tp_role`
--

CREATE TABLE IF NOT EXISTS `tp_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '后台组名',
  `pid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '父ID',
  `status` tinyint(1) unsigned DEFAULT '0' COMMENT '是否激活 1：是 0：否',
  `sort` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '排序权重',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注说明',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tp_role`
--

INSERT INTO `tp_role` (`id`, `name`, `pid`, `status`, `sort`, `remark`) VALUES
(1, '超级管理员', 0, 1, 0, ''),
(2, '演示组', 0, 1, 0, ''),
(3, '普通会员', 0, 1, 0, '');

-- --------------------------------------------------------

-
--
-- 表的结构 `tp_service_user`
--

CREATE TABLE IF NOT EXISTS `tp_service_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `token` varchar(60) NOT NULL,
  `userName` varchar(60) NOT NULL,
  `userPwd` varchar(32) NOT NULL,
  `endJoinDate` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_shoucang`
--

CREATE TABLE IF NOT EXISTS `tp_shoucang` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `product_id` int(10) NOT NULL COMMENT '产品id',
  `createtime` int(10) NOT NULL COMMENT '收藏的时间',
  `product_name` varchar(50) NOT NULL COMMENT '产品名称',
  `price` int(10) NOT NULL COMMENT '产品价格',
  `pic` varchar(100) NOT NULL COMMENT '图片',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tp_shoucang`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_shouhuo`
--

CREATE TABLE IF NOT EXISTS `tp_shouhuo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `xingming` varchar(20) NOT NULL COMMENT '姓名',
  `tel` varchar(11) NOT NULL COMMENT '电话',
  `youbian` varchar(10) NOT NULL COMMENT '邮政编码',
  `province` varchar(20) NOT NULL COMMENT '省份',
  `city` varchar(20) NOT NULL COMMENT '城市',
  `area` varchar(20) NOT NULL COMMENT '区/县',
  `addr` varchar(200) NOT NULL COMMENT '收货地址',
  `selected` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1默认选中0不选中',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tp_shouhuo`

-- --------------------------------------------------------

-------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `role` smallint(6) unsigned NOT NULL COMMENT '组ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 1:启用 0:禁止',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注说明',
  `last_login_time` int(11) unsigned NOT NULL COMMENT '最后登录时间',
  `last_login_ip` varchar(15) DEFAULT NULL COMMENT '最后登录IP',
  `last_location` varchar(100) DEFAULT NULL COMMENT '最后登录位置',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tp_user`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_userinfo`
--

CREATE TABLE IF NOT EXISTS `tp_userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `wecha_id` varchar(60) NOT NULL,
  `wechaname` varchar(60) NOT NULL,
  `truename` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(11) NOT NULL,
  `qq` varchar(11) NOT NULL DEFAULT '',
  `sex` tinyint(1) NOT NULL,
  `age` varchar(3) NOT NULL DEFAULT '',
  `birthday` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `info` varchar(200) NOT NULL,
  `total_score` int(11) NOT NULL,
  `expensetotal` int(10) NOT NULL DEFAULT '0',
  `sign_score` int(11) NOT NULL,
  `expend_score` int(11) NOT NULL,
  `continuous` int(11) NOT NULL,
  `add_expend` int(11) NOT NULL,
  `add_expend_time` int(11) NOT NULL,
  `live_time` int(11) NOT NULL,
  `portrait` varchar(200) NOT NULL DEFAULT '',
  `wallopen` tinyint(1) NOT NULL DEFAULT '0',
  `bornyear` varchar(4) NOT NULL DEFAULT '',
  `bornmonth` varchar(4) NOT NULL DEFAULT '',
  `bornday` varchar(4) NOT NULL DEFAULT '',
  `getcardtime` int(10) NOT NULL,
  `balance` double(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '余额',
  `paypass` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_users`
--

CREATE TABLE IF NOT EXISTS `tp_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openid` varchar(80) NOT NULL DEFAULT '',
  `gid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `mp` varchar(11) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL,
  `email` varchar(90) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `lasttime` varchar(13) NOT NULL,
  `status` varchar(1) NOT NULL,
  `createip` varchar(30) NOT NULL,
  `lastip` varchar(30) NOT NULL,
  `diynum` int(11) NOT NULL,
  `activitynum` int(11) NOT NULL,
  `card_num` int(11) NOT NULL,
  `card_create_status` tinyint(1) NOT NULL,
  `wechat_card_num` tinyint(3) NOT NULL,
  `money` int(11) NOT NULL,
  `viptime` varchar(13) NOT NULL,
  `connectnum` int(11) NOT NULL DEFAULT '0',
  `lastloginmonth` smallint(2) NOT NULL DEFAULT '0',
  `attachmentsize` int(10) NOT NULL DEFAULT '0',
  `inviter` int(10) NOT NULL DEFAULT '0',
  `agentid` int(10) NOT NULL DEFAULT '0',
  `moneybalance` int(10) NOT NULL DEFAULT '0',
  `spend` int(5) NOT NULL DEFAULT '0',
  `serviceUserNum` tinyint(3) NOT NULL,
  `invitecode` varchar(6) NOT NULL DEFAULT '',
  `remark` varchar(200) NOT NULL DEFAULT '',
  `smscount` int(10) NOT NULL DEFAULT '0',
  `usertplid` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tp_users`
--


-- --------------------------------------------------------

--
-- 表的结构 `tp_user_group`
--

CREATE TABLE IF NOT EXISTS `tp_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `diynum` int(11) NOT NULL,
  `connectnum` int(11) NOT NULL,
  `iscopyright` tinyint(1) NOT NULL,
  `activitynum` int(3) NOT NULL,
  `price` int(11) NOT NULL,
  `statistics_user` int(11) NOT NULL,
  `create_card_num` int(4) NOT NULL,
  `wechat_card_num` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `taxisid` int(10) NOT NULL DEFAULT '0',
  `agentid` int(10) NOT NULL DEFAULT '0',
  `func` varchar(3000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tp_user_group`
--

INSERT INTO `tp_user_group` (`id`, `name`, `diynum`, `connectnum`, `iscopyright`, `activitynum`, `price`, `statistics_user`, `create_card_num`, `wechat_card_num`, `status`, `taxisid`, `agentid`, `func`) VALUES
(1, 'vip0', 2000, 2000, 1, 1, 0, 0, 10, 0, 1, 1, 0, 'tianqi,qiushi,jishuan,kuaidi,xiaohua,peiliao,liaotian,shouji,fujin,fanyi,suanming,choujiang,shouye,adma,geci,Autumn,Lovers,AppleGame,Signin,Scene,Market,Custom,Greeting_card,affections,housekeeper,lease,Gamecenter,Zhida,Gamecenter'),
(2, 'vip1', 3000, 3000, 1, 2, 1, 0, 50, 1, 1, 2, 0, 'tianqi,qiushi,jishuan,kuaidi,xiaohua,changtoushi,peiliao,liaotian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,fujin,fanyi,suanming,caipiao,choujiang,shouye,adma,geci,,dx,shop,etuan,Autumn,Lovers,AppleGame,Signin,Scene,Market,Custom,Greeting_card,affections,housekeeper,lease,Gamecenter,Zhida,Gamecenter'),
(3, 'vip2', 40000, 40000, 1, 4, 50, 0, 80, 1, 1, 3, 0, 'tianqi,qiushi,jishuan,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,taobao,fanyi,suanming,baike,caipiao,choujiang,shouye,adma,geci,,dx,shop,etuan,Zhida,Gamecenter,Signin,Scene,Market,Custom,Greeting_card,affections,housekeeper,lease,Gamecenter,Zhida,Autumn,Lovers,AppleGame'),
(4, 'vip3', 50000, 500000, 1, 10000, 180, 0, 10000, 50, 1, 4, 0, 'tianqi,qiushi,jishuan,langdu,jiankang,kuaidi,xiaohua,changtoushi,peiliao,liaotian,mengjian,yuyinfanyi,huoche,gongjiao,shenfenzheng,shouji,yinle,fujin,lottery,taobao,userinfo,fanyi,api,suanming,baike,caipiao,choujiang,shouye,adma,huiyuanka,host_kev,geci,,diyform,dx,shop,etuan,diymen_set,gua2,panorama,wedding,vote,estate,album,GoldenEgg,LuckyFruit,messageboard,car,wall,shake,forum,medical,message,share,hotel,school,Zhaopianwall,Vcard,advanceTpl,,Problem,Yuyue,wifi,rippos,scene,Live,Paper,Zhida,Gamecenter,Live,Signin,Scene,Market,Custom,Greeting_card,affections,housekeeper,lease,Gamecenter,Zhida,groupmessage,Autumn,Lovers,AppleGame,Fangchan,jiejing,Zhaopin,Dati,Baoming,Jingcai,Yingyong,Fenlei,Fanyan,Autumns,Red_packet,Punish,Hforward,Shakeprize,Lapiao,Jikedati,Yjgz');

-- --------------------------------------------------------

--
-- 表的结构 `tp_user_request`
--

CREATE TABLE IF NOT EXISTS `tp_user_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(30) NOT NULL,
  `uid` varchar(32) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `msgtype` varchar(15) NOT NULL DEFAULT 'text',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `msgtype` (`msgtype`),
  KEY `token` (`token`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_wechat_group`
--

CREATE TABLE IF NOT EXISTS `tp_wechat_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `grade` varchar(10) NOT NULL COMMENT '等级',
  `price` text NOT NULL COMMENT '价格',
  `number` int(10) NOT NULL COMMENT '人数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `tp_wechat_group`
--


-- --------------------------------------------------------

--
-- 表的结构 `tp_wechat_group_list`
--

CREATE TABLE IF NOT EXISTS `tp_wechat_group_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(10) NOT NULL COMMENT '会员来源',
  `zhanghao` varchar(30) NOT NULL COMMENT '用来登录的账号',
  `weixinhao` varchar(30) NOT NULL COMMENT '微信号',
  `daili_grade` varchar(30) NOT NULL COMMENT '代理商等级',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `pid` int(8) DEFAULT NULL,
  `nickname` varchar(60) DEFAULT '真珠美学',
  `sex` tinyint(1) DEFAULT '1',
  `province` varchar(20) DEFAULT '',
  `city` varchar(30) DEFAULT NULL,
  `headimgurl` varchar(200) DEFAULT NULL,
  `subscribe_time` int(11) DEFAULT NULL,
  `openid` varchar(60) DEFAULT '1',
  `status` tinyint(1) DEFAULT '1' COMMENT '1关注2注册3审核中4认证5未通过',
  `g_id` varchar(20) DEFAULT '',
  `tel` varchar(11) DEFAULT '',
  `xingming` varchar(20) DEFAULT '',
  `birth` varchar(30) DEFAULT '',
  `home` varchar(50) DEFAULT '' COMMENT '居住地',
  `card_type` varchar(20) NOT NULL COMMENT '身份证类型',
  `card_num` varchar(20) DEFAULT '',
  `email` varchar(90) DEFAULT '',
  `createtime` varchar(13) DEFAULT NULL,
  `money` float(10,2) DEFAULT '0.00',
  `points` float(8,2) NOT NULL COMMENT '积分',
  `isfirst` tinyint(1) DEFAULT '0',
  `reason` varchar(300) DEFAULT '',
  `isbuy` tinyint(1) DEFAULT '0',
  `renzhengtime` int(11) DEFAULT NULL COMMENT '认证时间',
  `zhucetime` int(11) DEFAULT NULL COMMENT '注册时间',
  `c_ip` varchar(32) DEFAULT '' COMMENT '用户ip',
  `superior` int(10) NOT NULL COMMENT '上级，0是最高级',
  `subordinate` text NOT NULL COMMENT '下级，json集合，包括代理等级和用户id',
  `shouquan_id` varchar(30) NOT NULL COMMENT '代理授权号',
  `huiyuan` text NOT NULL COMMENT '我的会员，json',
  `card_img` varchar(100) NOT NULL COMMENT '身份证照片',
  `baozheng_img` varchar(100) NOT NULL COMMENT '保证金照片',
  PRIMARY KEY (`id`),
  KEY `tp_wechat_grop_list_openid_pid_index` (`openid`,`pid`) USING BTREE,
  KEY `tp_wechat_grop_list_openid_index` (`openid`) USING BTREE,
  KEY `tp_wechat_grop_list_pid_index` (`pid`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `tp_wechat_group_list`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_wecha_user`
--

CREATE TABLE IF NOT EXISTS `tp_wecha_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_wenjuan`
--

CREATE TABLE IF NOT EXISTS `tp_wenjuan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tel` varchar(11) NOT NULL,
  `q1` varchar(10) NOT NULL,
  `q2` varchar(10) NOT NULL,
  `q3` varchar(10) NOT NULL,
  `q4` varchar(10) NOT NULL,
  `q5` varchar(10) NOT NULL,
  `q6` varchar(10) NOT NULL,
  `q7` varchar(10) NOT NULL,
  `q8` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tp_wxuser`
--

CREATE TABLE IF NOT EXISTS `tp_wxuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `wxname` varchar(60) NOT NULL COMMENT '公众号名称',
  `wxid` varchar(20) NOT NULL COMMENT '公众号原始ID',
  `weixin` char(20) NOT NULL COMMENT '微信号',
  `headerpic` char(255) NOT NULL COMMENT '头像地址',
  `token` char(255) NOT NULL,
  `pigsecret` varchar(150) NOT NULL DEFAULT '',
  `province` varchar(30) NOT NULL COMMENT '省',
  `color_id` mediumint(4) NOT NULL DEFAULT '0',
  `city` varchar(60) NOT NULL COMMENT '市',
  `qq` char(25) NOT NULL COMMENT '公众号邮箱',
  `wxfans` int(11) NOT NULL COMMENT '微信粉丝',
  `typeid` int(11) NOT NULL COMMENT '分类ID',
  `typename` varchar(90) NOT NULL DEFAULT '0' COMMENT '分类名',
  `tongji` text NOT NULL,
  `allcardnum` int(11) NOT NULL,
  `cardisok` int(11) NOT NULL,
  `yetcardnum` int(11) NOT NULL,
  `totalcardnum` int(11) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `tpltypeid` varchar(10) NOT NULL DEFAULT '1' COMMENT '默认首页模版ID',
  `updatetime` varchar(13) NOT NULL,
  `tpltypename` varchar(20) NOT NULL COMMENT '首页模版名',
  `tpllistid` varchar(2) NOT NULL COMMENT '列表模版ID',
  `tpllistname` varchar(20) NOT NULL COMMENT '列表模版名',
  `tplcontentid` varchar(2) NOT NULL COMMENT '内容模版ID',
  `tplcontentname` varchar(20) NOT NULL COMMENT '内容模版名',
  `smsstatus` int(1) DEFAULT '0',
  `phone` varchar(20) DEFAULT NULL,
  `smsuser` varchar(20) DEFAULT NULL,
  `smspassword` varchar(20) DEFAULT NULL,
  `emailstatus` int(1) DEFAULT '0',
  `email` varchar(100) DEFAULT NULL,
  `emailuser` varchar(20) DEFAULT NULL,
  `emailpassword` varchar(20) DEFAULT NULL,
  `printstatus` int(1) DEFAULT '0',
  `member_code` varchar(50) DEFAULT NULL,
  `feiyin_key` varchar(50) DEFAULT NULL,
  `device_no` varchar(30) DEFAULT NULL,
  `agentid` int(10) NOT NULL DEFAULT '0',
  `winxintype` smallint(2) NOT NULL DEFAULT '1' COMMENT '微信号种类',
  `appid` varchar(50) NOT NULL DEFAULT '',
  `appsecret` varchar(50) NOT NULL DEFAULT '',
  `routerid` varchar(50) NOT NULL DEFAULT '',
  `transfer_customer_service` tinyint(1) NOT NULL DEFAULT '0',
  `wxun` varchar(64) NOT NULL COMMENT '公众账号用户名',
  `wxpwd` varchar(32) NOT NULL COMMENT '公众账号密码',
  `binok` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否绑定成功',
  `shoptpltypeid` int(11) NOT NULL DEFAULT '137' COMMENT '商城模板id',
  `shoptpltypename` varchar(20) NOT NULL DEFAULT '1137_index' COMMENT '商城模板模板名称',
  `wx_notify` int(1) NOT NULL DEFAULT '0',
  `ca_code` varchar(8) NOT NULL,
  `adm_openid` varchar(32) NOT NULL,
  `adm_fakeid` varchar(32) NOT NULL,
  `oauth` tinyint(1) NOT NULL DEFAULT '0',
  `openphotoprint` tinyint(1) NOT NULL DEFAULT '0',
  `freephotocount` mediumint(4) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `uid_2` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tp_wxuser`
--

INSERT INTO `tp_wxuser` (`id`, `uid`, `wxname`, `wxid`, `weixin`, `headerpic`, `token`, `pigsecret`, `province`, `color_id`, `city`, `qq`, `wxfans`, `typeid`, `typename`, `tongji`, `allcardnum`, `cardisok`, `yetcardnum`, `totalcardnum`, `createtime`, `tpltypeid`, `updatetime`, `tpltypename`, `tpllistid`, `tpllistname`, `tplcontentid`, `tplcontentname`, `smsstatus`, `phone`, `smsuser`, `smspassword`, `emailstatus`, `email`, `emailuser`, `emailpassword`, `printstatus`, `member_code`, `feiyin_key`, `device_no`, `agentid`, `winxintype`, `appid`, `appsecret`, `routerid`, `transfer_customer_service`, `wxun`, `wxpwd`, `binok`, `shoptpltypeid`, `shoptpltypename`, `wx_notify`, `ca_code`, `adm_openid`, `adm_fakeid`, `oauth`, `openphotoprint`, `freephotocount`) VALUES
(2, 1, '青峰测试号', 'gh_344af5b38fc3', 'gptesting', './tpl/User/default/common/images/portrait.jpg', 'bxousa1454659516', 'zprNswso3SEo3SajD8pk', 'p', 0, 'c', '78080315@qq.com', 0, 8, '服务', '', 0, 0, 0, 0, '1454659570', '1', '1470118708', 'ty_index', '1', 'yl_list', '1', 'ktv_content', 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, 2, 'wx4afc6043ae331956', 'c58d7665b25130a281339ba98bb5269f', '', 0, '', '', 0, 137, '1137_index', 0, '', '', '', 0, 0, 3);

-- --------------------------------------------------------

--
-- 表的结构 `tp_wxweb`
--

CREATE TABLE IF NOT EXISTS `tp_wxweb` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `token` varchar(32) DEFAULT NULL,
  `uuid` varchar(50) DEFAULT NULL,
  `htm` text,
  `tpdh` text,
  `name` varchar(255) DEFAULT NULL,
  `bgpic` varchar(255) DEFAULT NULL,
  `tpdhh` int(11) DEFAULT '170',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
