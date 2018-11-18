/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : wepay

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-06-28 12:38:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `we_admin`
-- ----------------------------
DROP TABLE IF EXISTS `we_admin`;
CREATE TABLE `we_admin` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL COMMENT '用户名称',
  `username` varchar(16) NOT NULL COMMENT '注册用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `age` enum('女','男') NOT NULL DEFAULT '男' COMMENT '性别',
  `state` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0默认 1禁止',
  `add_time` int(11) unsigned NOT NULL COMMENT '添加时间',
  `role_id` varchar(11) NOT NULL DEFAULT '1' COMMENT '角色id',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of we_admin
-- ----------------------------
INSERT INTO `we_admin` VALUES ('1', 'name', 'bool', 'bool', '男', '0', '1494903110', '1');
INSERT INTO `we_admin` VALUES ('2', '姓名', 'admin', '21232f297a57a5a743894a0e4a801fc3', '男', '0', '1494903250', '1');

-- ----------------------------
-- Table structure for `we_agent_user`
-- ----------------------------
DROP TABLE IF EXISTS `we_agent_user`;
CREATE TABLE `we_agent_user` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `pid` mediumint(9) unsigned NOT NULL COMMENT '上级代理id',
  `name` varchar(20) NOT NULL COMMENT '用户名称',
  `state` tinyint(1) unsigned NOT NULL COMMENT '状态 0默认 1禁止',
  `username` varchar(16) NOT NULL COMMENT '注册用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `add_time` int(11) unsigned NOT NULL COMMENT '添加时间',
  `age` enum('女','男') NOT NULL DEFAULT '男' COMMENT '性别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='代理';

-- ----------------------------
-- Records of we_agent_user
-- ----------------------------

-- ----------------------------
-- Table structure for `we_agent_userinfo`
-- ----------------------------
DROP TABLE IF EXISTS `we_agent_userinfo`;
CREATE TABLE `we_agent_userinfo` (
  `uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bank_account_name` varchar(16) NOT NULL COMMENT '开户人',
  `bank_name` varchar(100) NOT NULL COMMENT '开户银行名称',
  `bank_branch` varchar(100) NOT NULL COMMENT '支行名称',
  `bank_line` varchar(100) NOT NULL COMMENT '开户行行号',
  `bank_number` varchar(100) NOT NULL COMMENT '银行号码',
  `province` varchar(100) NOT NULL COMMENT '省份',
  `city` varchar(100) NOT NULL COMMENT '城市',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `phone` int(12) unsigned NOT NULL COMMENT '手机',
  `address` varchar(150) NOT NULL COMMENT '地址',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='代理者信息';

-- ----------------------------
-- Records of we_agent_userinfo
-- ----------------------------

-- ----------------------------
-- Table structure for `we_bet`
-- ----------------------------
DROP TABLE IF EXISTS `we_bet`;
CREATE TABLE `we_bet` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `gid` mediumint(9) DEFAULT NULL,
  `money` decimal(10,2) DEFAULT NULL,
  `rate` decimal(10,4) DEFAULT NULL,
  `type` tinyint(1) unsigned DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `uid` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='交易明细，下注 涨或者跌';

-- ----------------------------
-- Records of we_bet
-- ----------------------------
INSERT INTO `we_bet` VALUES ('13', '29', '500.00', '5.1816', '0', '1498622536', '20');
INSERT INTO `we_bet` VALUES ('14', '28', '10.00', '0.0060', '0', '1498622701', '20');
INSERT INTO `we_bet` VALUES ('15', '27', '1000.00', '8.6852', '1', '1498622714', '20');
INSERT INTO `we_bet` VALUES ('16', '25', '200.00', '0.0609', '1', '1498623107', '20');
INSERT INTO `we_bet` VALUES ('17', '26', '500.00', '0.2240', '1', '1498623784', '20');
INSERT INTO `we_bet` VALUES ('18', '24', '1000.00', '7.6645', '0', '1498623873', '20');
INSERT INTO `we_bet` VALUES ('19', '17', '1000.00', '0.8732', '0', '1498624078', '20');

-- ----------------------------
-- Table structure for `we_menu`
-- ----------------------------
DROP TABLE IF EXISTS `we_menu`;
CREATE TABLE `we_menu` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `pid` mediumint(9) unsigned NOT NULL COMMENT '父级id',
  `name` varchar(40) NOT NULL COMMENT '菜单名称',
  `ico` varchar(40) NOT NULL COMMENT '菜单图标',
  `route` varchar(60) NOT NULL COMMENT '路由',
  `sort` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `state` tinyint(1) unsigned NOT NULL COMMENT '状态 0默认 1禁用',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='菜单';

-- ----------------------------
-- Records of we_menu
-- ----------------------------
INSERT INTO `we_menu` VALUES ('1', '0', '首页', 'glyphicon-home', 'Index/index', '0', '0');
INSERT INTO `we_menu` VALUES ('2', '0', '产品管理', 'glyphicon-align-left', 'Product/index', '0', '0');
INSERT INTO `we_menu` VALUES ('3', '0', '订单管理', 'glyphicon-pushpin', '', '0', '0');
INSERT INTO `we_menu` VALUES ('4', '0', '用户管理', 'glyphicon-user', '', '0', '0');
INSERT INTO `we_menu` VALUES ('5', '4', '会员管理', '', '', '0', '0');
INSERT INTO `we_menu` VALUES ('6', '4', '系统管理员', '', 'Admin/index', '0', '0');
INSERT INTO `we_menu` VALUES ('7', '2', '产品列表', '', 'Product/index', '0', '0');
INSERT INTO `we_menu` VALUES ('8', '0', '系统设置', 'glyphicon-cog', '', '0', '0');
INSERT INTO `we_menu` VALUES ('9', '8', '基本设置', '', '', '0', '0');
INSERT INTO `we_menu` VALUES ('10', '0', '报表管理', 'glyphicon-list-alt', '', '0', '0');
INSERT INTO `we_menu` VALUES ('11', '1', '信息', '', 'Index/intro', '0', '0');
INSERT INTO `we_menu` VALUES ('12', '2', '产品分类', '', 'Product/cate', '0', '0');
INSERT INTO `we_menu` VALUES ('13', '3', '订单列表', '', '', '0', '0');
INSERT INTO `we_menu` VALUES ('14', '3', '资金流水', '', '', '0', '0');
INSERT INTO `we_menu` VALUES ('15', '4', '代理商管理', '', '', '0', '0');
INSERT INTO `we_menu` VALUES ('16', '8', '微信设置', '', '', '0', '0');
INSERT INTO `we_menu` VALUES ('17', '8', '支付设置', '', '', '0', '0');
INSERT INTO `we_menu` VALUES ('18', '8', '推广设置', '', '', '0', '0');
INSERT INTO `we_menu` VALUES ('19', '8', '代理设置', '', '', '0', '0');
INSERT INTO `we_menu` VALUES ('20', '10', '佣金报表', '', '', '0', '0');
INSERT INTO `we_menu` VALUES ('21', '10', '资金报表', '', '', '0', '0');
INSERT INTO `we_menu` VALUES ('22', '10', '红利报表', '', '', '0', '0');

-- ----------------------------
-- Table structure for `we_pay_recharge`
-- ----------------------------
DROP TABLE IF EXISTS `we_pay_recharge`;
CREATE TABLE `we_pay_recharge` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(9) NOT NULL,
  `no` varchar(60) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `add_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='记录充值的表';

-- ----------------------------
-- Records of we_pay_recharge
-- ----------------------------
INSERT INTO `we_pay_recharge` VALUES ('2', '20', '2017062721001004440200159484', '100.00', '127.0.0.1', '1498542381');
INSERT INTO `we_pay_recharge` VALUES ('3', '20', '2017062721001004440200159298', '100.00', '127.0.0.1', '1498542415');
INSERT INTO `we_pay_recharge` VALUES ('6', '20', '2017062721001004440200159299', '100.00', '127.0.0.1', '1498542473');
INSERT INTO `we_pay_recharge` VALUES ('8', '20', '2017062721001004440200159485', '1.00', '127.0.0.1', '1498558260');
INSERT INTO `we_pay_recharge` VALUES ('12', '20', '2017062721001004440200159495', '1.00', '127.0.0.1', '1498568919');
INSERT INTO `we_pay_recharge` VALUES ('13', '20', '2017062721001004440200159496', '5.00', '127.0.0.1', '1498568980');
INSERT INTO `we_pay_recharge` VALUES ('14', '8388607', '14985691653750', '10.00', '127.0.0.1', '1498569165');
INSERT INTO `we_pay_recharge` VALUES ('15', '8388607', '14985691701016', '5.00', '127.0.0.1', '1498569170');
INSERT INTO `we_pay_recharge` VALUES ('16', '8388607', '14985691942048', '5.00', '127.0.0.1', '1498569194');
INSERT INTO `we_pay_recharge` VALUES ('17', '8388607', '14985693617036', '10.00', '127.0.0.1', '1498569361');
INSERT INTO `we_pay_recharge` VALUES ('18', '8388607', '14985693759470', '10.00', '127.0.0.1', '1498569375');
INSERT INTO `we_pay_recharge` VALUES ('19', '8388607', '14985693774204', '10.00', '127.0.0.1', '1498569377');
INSERT INTO `we_pay_recharge` VALUES ('20', '20', '2017062721001004440200159313', '1.00', '127.0.0.1', '1498569686');
INSERT INTO `we_pay_recharge` VALUES ('21', '20', '2017062721001004440200159315', '9.00', '127.0.0.1', '1498569746');

-- ----------------------------
-- Table structure for `we_product`
-- ----------------------------
DROP TABLE IF EXISTS `we_product`;
CREATE TABLE `we_product` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '名称',
  `pid` mediumint(9) unsigned NOT NULL COMMENT '分类',
  `api` mediumtext COMMENT 'api接口',
  `desc` varchar(200) NOT NULL COMMENT '描述',
  `sort` tinyint(4) unsigned NOT NULL COMMENT '排序',
  `state` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0默认 1禁用',
  `add_time` int(11) unsigned NOT NULL,
  `pay_num` mediumint(9) unsigned NOT NULL COMMENT '0',
  `pay_money` decimal(10,2) unsigned NOT NULL COMMENT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT='产品';

-- ----------------------------
-- Records of we_product
-- ----------------------------
INSERT INTO `we_product` VALUES ('1', '美元/人民币', '1', 'USDCNY', '美元对人民币', '1', '0', '1494841811', '0', '0.00');
INSERT INTO `we_product` VALUES ('17', '港元/人民币', '1', 'HKDCNY', '港元/人民币', '1', '0', '1494842001', '1', '1000.00');
INSERT INTO `we_product` VALUES ('24', '欧元/人民币', '1', 'EURCNY', '人民币/欧元', '1', '0', '1498102873', '1', '1000.00');
INSERT INTO `we_product` VALUES ('25', '日元/人民币', '1', 'JPYCNY', '人民币/日元', '1', '0', '1498297564', '1', '200.00');
INSERT INTO `we_product` VALUES ('26', '台币/人民币', '1', 'TWDCNY', '台币/人民币', '1', '0', '1498447169', '1', '500.00');
INSERT INTO `we_product` VALUES ('27', '英镑/人民币', '1', 'GBPCNY', '英镑/人民币', '1', '0', '1498447297', '1', '1000.00');
INSERT INTO `we_product` VALUES ('28', '韩元/人民币', '1', 'KRWCNY', '韩元/人民币', '1', '0', '1498447374', '1', '10.00');
INSERT INTO `we_product` VALUES ('29', '澳元/人民币', '1', 'AUDCNY', '澳元/人民币', '1', '0', '1498447486', '1', '500.00');

-- ----------------------------
-- Table structure for `we_product_cate`
-- ----------------------------
DROP TABLE IF EXISTS `we_product_cate`;
CREATE TABLE `we_product_cate` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '名称',
  `desc` varchar(200) NOT NULL COMMENT '描述',
  `add_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='产品分类';

-- ----------------------------
-- Records of we_product_cate
-- ----------------------------
INSERT INTO `we_product_cate` VALUES ('1', '货币', '我是33', '1494776499');
INSERT INTO `we_product_cate` VALUES ('2', '贵金属', '贵金属交易描述....', '1494690722');

-- ----------------------------
-- Table structure for `we_user`
-- ----------------------------
DROP TABLE IF EXISTS `we_user`;
CREATE TABLE `we_user` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL COMMENT '用户名称',
  `phone` varchar(12) NOT NULL COMMENT '手机',
  `password` varchar(62) NOT NULL COMMENT '密码',
  `state` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 0默认 1禁止',
  `add_time` int(11) unsigned NOT NULL COMMENT '添加时间',
  `inviter` mediumint(9) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of we_user
-- ----------------------------
INSERT INTO `we_user` VALUES ('20', 'bool', '18101565682', '21232f297a57a5a743894a0e4a801fc3', '0', '1498187022', '25');
INSERT INTO `we_user` VALUES ('21', '18101565683', '18101565683', '21232f297a57a5a743894a0e4a801fc3', '0', '1498187093', '24');
INSERT INTO `we_user` VALUES ('22', '18101565684', '18101565684', '21232f297a57a5a743894a0e4a801fc3', '0', '1498187162', '23');
INSERT INTO `we_user` VALUES ('23', '17052850083', '17052850083', '21232f297a57a5a743894a0e4a801fc3', '0', '1498187309', '22');
INSERT INTO `we_user` VALUES ('24', '18101565685', '18101565685', '21232f297a57a5a743894a0e4a801fc3', '0', '1498187368', '22');
INSERT INTO `we_user` VALUES ('25', '18101565689', '18101565689', '21232f297a57a5a743894a0e4a801fc3', '0', '1498194410', '21');
INSERT INTO `we_user` VALUES ('26', '18101565680', '18101565680', '21232f297a57a5a743894a0e4a801fc3', '0', '1498194549', '20');
INSERT INTO `we_user` VALUES ('27', '17052850085', '17052850085', '21232f297a57a5a743894a0e4a801fc3', '0', '1498194746', '21');
INSERT INTO `we_user` VALUES ('28', '18101565670', '18101565670', '21232f297a57a5a743894a0e4a801fc3', '0', '1498194852', '0');
INSERT INTO `we_user` VALUES ('29', '18101565671', '18101565671', '21232f297a57a5a743894a0e4a801fc3', '0', '1498194906', '0');
INSERT INTO `we_user` VALUES ('30', '18101565672', '18101565672', '21232f297a57a5a743894a0e4a801fc3', '0', '1498194934', '0');
INSERT INTO `we_user` VALUES ('31', '18101565673', '18101565673', '21232f297a57a5a743894a0e4a801fc3', '0', '1498195013', '20');
INSERT INTO `we_user` VALUES ('32', '18101565688', '18101565688', '21232f297a57a5a743894a0e4a801fc3', '0', '1498195434', '20');

-- ----------------------------
-- Table structure for `we_user_info`
-- ----------------------------
DROP TABLE IF EXISTS `we_user_info`;
CREATE TABLE `we_user_info` (
  `id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `age` enum('保密','男','女') DEFAULT '保密' COMMENT '性别',
  `email` varchar(30) DEFAULT NULL COMMENT '邮箱',
  `money` decimal(12,2) DEFAULT '0.00',
  `head_img` varchar(200) DEFAULT '',
  `card` int(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `uid` mediumint(10) unsigned DEFAULT '0',
  `alipay` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='用户表信息表';

-- ----------------------------
-- Records of we_user_info
-- ----------------------------
INSERT INTO `we_user_info` VALUES ('20', '保密', null, '5240.00', '', null, null, '20', 'tljmgs8626@sandbox.com');
INSERT INTO `we_user_info` VALUES ('21', '保密', null, '0.00', '', null, null, '21', null);
INSERT INTO `we_user_info` VALUES ('22', '保密', null, '0.00', '', null, null, '22', null);
INSERT INTO `we_user_info` VALUES ('23', '保密', null, '0.00', '', null, null, '23', null);
INSERT INTO `we_user_info` VALUES ('24', '保密', null, '0.00', '', null, null, '24', null);
INSERT INTO `we_user_info` VALUES ('25', '保密', null, '0.00', '', null, null, '25', null);
INSERT INTO `we_user_info` VALUES ('26', '保密', null, '0.00', '', null, null, '26', null);
INSERT INTO `we_user_info` VALUES ('27', '保密', null, '0.00', '', null, null, '27', null);
INSERT INTO `we_user_info` VALUES ('28', '保密', null, '0.00', '', null, null, '28', null);
INSERT INTO `we_user_info` VALUES ('29', '保密', null, '0.00', '', null, null, '29', null);
INSERT INTO `we_user_info` VALUES ('30', '保密', null, '0.00', '', null, null, '30', null);
INSERT INTO `we_user_info` VALUES ('31', '保密', null, '0.00', '', null, null, '31', null);
INSERT INTO `we_user_info` VALUES ('32', '保密', null, '0.00', '', null, null, '32', null);
