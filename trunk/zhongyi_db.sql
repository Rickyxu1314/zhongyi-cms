/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : zhongyi_db

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-10-17 00:16:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `about_us`
-- ----------------------------
DROP TABLE IF EXISTS `about_us`;
CREATE TABLE `about_us` (
  `id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `addtime` datetime NOT NULL,
  `type` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of about_us
-- ----------------------------
INSERT INTO `about_us` VALUES ('1', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中义防水工程集团成立于2000年的世纪之交，坐落于华南著名的现代化大都市——广州，是一个年轻而朝气蓬勃的现代化防水工程集团。2002年本集团塑造出世界品牌&quot;速格尔&quot;，并隆重的推向国际市场。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中义旗下设有：广州中义防水保温工程有限公司，2000年成为中国建筑防水协会常务理事，中国防水材料工业协会资深理事；香港国际中义防水（集团）公司，2005年已在香港注册登记，成为世界名牌理事会常务理事会员；广东中义防水保温材料有限公司，2008年通过ISO9001-2008国际质量管理体系认证；。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;今天的中义，已发展成为防水保温材料的研发、生产、销售；防水工程设计、施工；防水技术咨询、服务于一体的高新技术企业，企业经济效益和综合实力在华南地区名列前茅，备受行业瞩目。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;技术创新是中义赖以生存、发展的基础，作为&quot;中国建筑防水行业科技创新企业&quot;，中义努力研制开发先进合理的配方，不断推出满足市场需求的新技术产品。目前，集团共拥有包括防水涂料、改性沥青类防水卷材、自粘类防水卷材、高分子类防水卷材等在内的12大类，100多种规格的防水材料，使&quot;速格尔&quot;产品始终成为同一领域上的先行者和倡导者，确保在行业的技术领先地位。是华南地区防水行业的龙头企业之一。企业已经实现了管理现代化、生产规模化、产品系列化、设备技术国际化。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;近十二年的积累和沉淀，中义不断发展壮大，凭借高新的技术、优质的产品、配套工程施工和及时到位的售后服务，奠定了企业在防水保温行业中的领先地位。中义拥有高素质的员工队伍，80%以上的管理人员受过高等教育，务实的企业文化，完善的质量管理体系，先进的设备，为企业的飞速发展打下了坚实的基础。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中义成立十多年来，&quot;速格尔&quot;产品应用硕果累累，与保利地产、万科地产、恒大地产、时代地产、富力地产、合生创展、雅居乐等国内外知名大型房产商建立了广泛合作关系。同时积极参与国家重点工程、市政工程、重大项目建设，如白云国际机场、琶洲会展中心、广州地铁、广州新光快速干线、沈阳地铁、武汉地铁、福建莆田人防、猎德污水处理厂、沥滘污水处理厂等重大工程。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司秉承&quot;以人为本&quot;的信条，恪守&quot;品质出品牌&quot;的原则，竭诚为广大客户服务，为您提供更完善的服务，生产更优质的产品，为您塑造无渗漏的温馨世界！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中义，将继续在防水领域高歌猛进•••••••••••', '2012-10-10 13:50:44', '0');
INSERT INTO `about_us` VALUES ('3', '<p>香港中义国际股份集团地址：香港九龙旺角弥敦道678号华侨商业中心20楼</p><p>电话：（00852）30780628</p><p>传真：（00852）83430012</p><hr /><p>广州中义防水保温材料有限公司地址：广州市从化太平镇中义工业园</p><p>邮编：510990电话：+86-20-87809808</p><p>传真：+86-20-82313498</p><hr /><p>广州中义防水保温工程有限公司地址：广州市中山大道130号汇诚大厦8楼</p><p>邮编：510660</p><p>电话：+86-20-82528797</p><p>传真：+86-20-82313498<br /></p>', '2012-10-13 15:59:05', '1');

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `u_id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for `cases`
-- ----------------------------
DROP TABLE IF EXISTS `cases`;
CREATE TABLE `cases` (
  `id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `img` varchar(25) NOT NULL,
  `small_img` varchar(25) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cases
-- ----------------------------
INSERT INTO `cases` VALUES ('1', '番禺雅居乐花园1', '20121013165146.png', '', '番禺雅居乐花园', 'case', '2012-10-13 16:51:46');
INSERT INTO `cases` VALUES ('2', '番禺雅居乐花园2', '20121013165513.png', '', '番禺雅居乐花园', 'case', '2012-10-13 16:55:13');
INSERT INTO `cases` VALUES ('3', '番禺雅居乐花园3', '20121013170059.png', '', '番禺雅居乐花园', 'case', '2012-10-13 17:00:59');
INSERT INTO `cases` VALUES ('4', '会员证书', '20121013172832.png', '', '会员证书', 'honor', '2012-10-13 17:28:32');
INSERT INTO `cases` VALUES ('5', '会员证书', '20121013174325.png', '', '会员证书', 'honor', '2012-10-13 17:43:25');
INSERT INTO `cases` VALUES ('6', '荣誉证书', '20121016131254.png', '', '荣誉证书', 'honor', '2012-10-16 13:12:54');
INSERT INTO `cases` VALUES ('7', '资质认证', '20121016132456.png', '', '资质认证', 'credentials', '2012-10-16 13:24:56');
INSERT INTO `cases` VALUES ('8', '资质认证', '20121016132914.png', '', '资质认证', 'credentials', '2012-10-16 13:29:14');
INSERT INTO `cases` VALUES ('9', '资质认证', '20121016132943.png', '', '资质认证', 'credentials', '2012-10-16 13:29:43');
INSERT INTO `cases` VALUES ('10', '资质认证', '20121016132953.png', '', '资质认证', 'credentials', '2012-10-16 13:29:53');
INSERT INTO `cases` VALUES ('11', '资质认证', '20121016133010.png', '', '资质认证', 'credentials', '2012-10-16 13:30:10');
INSERT INTO `cases` VALUES ('12', '资质认证', '20121016133019.png', '', '资质认证', 'credentials', '2012-10-16 13:30:19');
INSERT INTO `cases` VALUES ('13', '品牌合作', '20121016135204.png', '', '品牌合作', 'cooperate', '2012-10-16 13:52:04');
INSERT INTO `cases` VALUES ('14', '品牌合作', '20121016135400.png', '', '品牌合作', 'cooperate', '2012-10-16 13:54:00');
INSERT INTO `cases` VALUES ('15', '品牌合作', '20121016135411.png', '', '品牌合作', 'cooperate', '2012-10-16 13:54:11');
INSERT INTO `cases` VALUES ('16', '品牌合作', '20121016144138.png', '', '品牌合作', 'cooperate', '2012-10-16 14:33:02');
INSERT INTO `cases` VALUES ('17', '品牌合作', '20121016144543.png', '', '品牌合作', 'cooperate', '2012-10-16 14:45:43');
INSERT INTO `cases` VALUES ('18', '品牌合作', '20121016144700.png', '', '品牌合作', 'cooperate', '2012-10-16 14:47:00');

-- ----------------------------
-- Table structure for `friend_links`
-- ----------------------------
DROP TABLE IF EXISTS `friend_links`;
CREATE TABLE `friend_links` (
  `id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(30) NOT NULL,
  `link_name` varchar(20) NOT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friend_links
-- ----------------------------
INSERT INTO `friend_links` VALUES ('2', 'http://www.google.cn', '谷歌', '2012-10-13 18:21:54');
INSERT INTO `friend_links` VALUES ('3', 'http://www.baidu.com', '百度', '2012-10-13 18:23:05');

-- ----------------------------
-- Table structure for `messages`
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `m_id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `m_nickname` tinyint(10) NOT NULL,
  `m_sex` tinyint(2) NOT NULL COMMENT '0为男,1为女',
  `company_name` varchar(50) NOT NULL,
  `contact_type` tinyint(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `home_page` varchar(25) NOT NULL,
  `m_title` varchar(30) NOT NULL,
  `m_content` varchar(255) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of messages
-- ----------------------------

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `n_id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `n_title` varchar(20) NOT NULL,
  `n_content` varchar(255) NOT NULL,
  `n_type` varchar(10) NOT NULL,
  `n_addtime` datetime NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '行内新闻1', '行内新闻1行内新闻1行内新闻1行内新闻1行内新闻1行内新闻1行内新闻1', '行内新闻', '2012-10-09 06:21:35');
INSERT INTO `news` VALUES ('2', '行外新闻1', '行外新闻1行外新闻1行外新闻1行外新闻1行外新闻1行外新闻1行外新闻1行外新闻1行外新闻1行外新闻1行外新闻1行外新闻1行外新闻1', '行外新闻', '2012-10-09 06:22:10');

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `p_id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `p_name` varchar(20) NOT NULL,
  `p_content` varchar(255) NOT NULL,
  `p_type` varchar(20) NOT NULL,
  `p_addtime` datetime NOT NULL,
  `img_path` varchar(50) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'ZY-01单组份水固化聚氨脂防水涂料', 'ZY-01单组份水固化聚氨脂防水涂料', '防水材料', '2012-10-13 13:48:58', '20121016152217.png');
INSERT INTO `products` VALUES ('2', 'ZY-01单组份水固化聚氨脂防水涂料', 'ZY-01单组份水固化聚氨脂防水涂料', '防水材料', '2012-10-13 13:53:37', '20121013135337.png');
INSERT INTO `products` VALUES ('3', 'ZY-01单组份水固化聚氨脂防水涂料', 'ZY-01单组份水固化聚氨脂防水涂料', '防水材料', '2012-10-16 15:15:15', '20121016151515.png');

-- ----------------------------
-- Table structure for `recruitment`
-- ----------------------------
DROP TABLE IF EXISTS `recruitment`;
CREATE TABLE `recruitment` (
  `id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of recruitment
-- ----------------------------
INSERT INTO `recruitment` VALUES ('4', '<p><strong>工程业务经理</strong><br /></p><p>工作地点：广州&nbsp;年龄要求：20周岁&nbsp;至&nbsp;35周岁<br />最低月薪：面议&nbsp;性别要求：不限<br />学历要求：中专及以上&nbsp;工作经验：不限<br />外语要求：不限&nbsp;专业要求：土建类&nbsp;市场营销、化工、工商管理类<br />招聘人数：10人&nbsp;招聘方式：全职</p><p><br /></p><p><strong>要求</strong></p><p>形象好、气质佳、开朗大方、善于与人沟通，有团队精神；热心工程业务行业，勤奋、敬业、乐观、积极，勇于承担责任，适应出差。善于和建筑工程界的人士沟通，承接防水工程、推荐公司产品，进行客服工作；热爱销售工作，具备良好的市场开拓能力及敏锐的市场觉察力。<br /></p>', '2012-10-13 16:43:13');
