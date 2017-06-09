#version:emlog 5.3.1
#date:2017-06-08 22:31
#tableprefix:xiaoyublog_
DROP TABLE IF EXISTS xiaoyublog_attachment;
CREATE TABLE `xiaoyublog_attachment` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blogid` int(10) unsigned NOT NULL DEFAULT '0',
  `filename` varchar(255) NOT NULL DEFAULT '',
  `filesize` int(10) NOT NULL DEFAULT '0',
  `filepath` varchar(255) NOT NULL DEFAULT '',
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `width` int(10) NOT NULL DEFAULT '0',
  `height` int(10) NOT NULL DEFAULT '0',
  `mimetype` varchar(40) NOT NULL DEFAULT '',
  `thumfor` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`),
  KEY `blogid` (`blogid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_attachment VALUES('2','8','搜狗截图20160804002236.png','399965','../content/uploadfile/201608/19e91470241510.png','1470241510','809','245','image/png','0');
INSERT INTO xiaoyublog_attachment VALUES('3','8','搜狗截图20160804002236.png','97633','../content/uploadfile/201608/thum-19e91470241510.png','1470241510','420','128','image/png','2');
INSERT INTO xiaoyublog_attachment VALUES('4','8','搜狗截图20160804002522.png','1416393','../content/uploadfile/201608/d0931470241602.png','1470241602','1254','611','image/png','0');
INSERT INTO xiaoyublog_attachment VALUES('5','8','搜狗截图20160804002522.png','134183','../content/uploadfile/201608/thum-d0931470241602.png','1470241602','420','205','image/png','4');
INSERT INTO xiaoyublog_attachment VALUES('6','8','搜狗截图20160804002706.png','859667','../content/uploadfile/201608/3aa61470241809.png','1470241809','1354','609','image/png','0');
INSERT INTO xiaoyublog_attachment VALUES('7','8','搜狗截图20160804002706.png','79340','../content/uploadfile/201608/thum-3aa61470241809.png','1470241809','420','189','image/png','6');
INSERT INTO xiaoyublog_attachment VALUES('8','8','搜狗截图20160804002734.png','1518745','../content/uploadfile/201608/79291470241809.png','1470241809','1335','628','image/png','0');
INSERT INTO xiaoyublog_attachment VALUES('9','8','搜狗截图20160804002734.png','143045','../content/uploadfile/201608/thum-79291470241809.png','1470241809','420','198','image/png','8');
INSERT INTO xiaoyublog_attachment VALUES('10','8','搜狗截图20160804002753.png','870290','../content/uploadfile/201608/cbb71470241809.png','1470241809','1357','624','image/png','0');
INSERT INTO xiaoyublog_attachment VALUES('11','8','搜狗截图20160804002753.png','114707','../content/uploadfile/201608/thum-cbb71470241809.png','1470241809','420','194','image/png','10');
INSERT INTO xiaoyublog_attachment VALUES('12','8','搜狗截图20160804003145.png','240865','../content/uploadfile/201608/9d741470241932.png','1470241932','1262','607','image/png','0');
INSERT INTO xiaoyublog_attachment VALUES('13','8','搜狗截图20160804003145.png','67320','../content/uploadfile/201608/thum-9d741470241932.png','1470241932','420','203','image/png','12');
INSERT INTO xiaoyublog_attachment VALUES('14','11','037582025aafa40f135ed8e4ac64034f79f019f7.jpg','26944','../content/uploadfile/201609/ca931473433437.jpg','1473433437','510','516','image/jpeg','0');
INSERT INTO xiaoyublog_attachment VALUES('15','11','037582025aafa40f135ed8e4ac64034f79f019f7.jpg','18700','../content/uploadfile/201609/thum-ca931473433437.jpg','1473433437','420','425','image/jpeg','14');
INSERT INTO xiaoyublog_attachment VALUES('16','11','ebd54fc2d56285350b44c41897ef76c6a6ef63ec.jpg','17882','../content/uploadfile/201609/de541473433443.jpg','1473433443','580','580','image/jpeg','0');
INSERT INTO xiaoyublog_attachment VALUES('17','11','ebd54fc2d56285350b44c41897ef76c6a6ef63ec.jpg','11022','../content/uploadfile/201609/thum-de541473433443.jpg','1473433443','420','420','image/jpeg','16');
INSERT INTO xiaoyublog_attachment VALUES('22','21','list_image.zip','1542','../content/uploadfile/201610/f7e61477569623.zip','1477569623','0','0','application/zip','0');

DROP TABLE IF EXISTS xiaoyublog_blog;
CREATE TABLE `xiaoyublog_blog` (
  `gid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `date` bigint(20) NOT NULL,
  `content` longtext NOT NULL,
  `excerpt` longtext NOT NULL,
  `alias` varchar(200) NOT NULL DEFAULT '',
  `author` int(10) NOT NULL DEFAULT '1',
  `sortid` int(10) NOT NULL DEFAULT '-1',
  `type` varchar(20) NOT NULL DEFAULT 'blog',
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  `comnum` int(10) unsigned NOT NULL DEFAULT '0',
  `attnum` int(10) unsigned NOT NULL DEFAULT '0',
  `top` enum('n','y') NOT NULL DEFAULT 'n',
  `sortop` enum('n','y') NOT NULL DEFAULT 'n',
  `hide` enum('n','y') NOT NULL DEFAULT 'n',
  `checked` enum('n','y') NOT NULL DEFAULT 'y',
  `allow_remark` enum('n','y') NOT NULL DEFAULT 'y',
  `password` varchar(255) NOT NULL DEFAULT '',
  `template` varchar(255) NOT NULL DEFAULT '',
  `zsshare` int(10) unsigned NOT NULL DEFAULT '0',
  `digg` varchar(10) NOT NULL DEFAULT '0,0',
  PRIMARY KEY (`gid`),
  KEY `date` (`date`) USING BTREE,
  KEY `author` (`author`) USING BTREE,
  KEY `sortid` (`sortid`) USING BTREE,
  KEY `type` (`type`) USING BTREE,
  KEY `views` (`views`) USING BTREE,
  KEY `comnum` (`comnum`) USING BTREE,
  KEY `hide` (`hide`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_blog VALUES('1','欢迎来到小昱的世�\� \\(^o^)/','1469610083','<span style=\"font-size:16px;\">欢迎来到</span><span style=\"font-size:32px;color:#E53333;\">小昱的世�\�</span>\\(^o^)/&nbsp;\r\n<p>\r\n	<span style=\"font-size:16px;\">这里有我�\�<span style=\"font-size:18px;color:#64451D;\">故事</span>，我�\�<span style=\"font-size:18px;color:#009900;\">生活</span>，还�\�......我的<span style=\"font-size:24px;color:#FF9900;\">心情</span>�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\"><span style=\"font-size:16px;\">让我们一起创�\�</span><span style=\"font-size:18px;color:#009900;\">�\�</span><span style=\"font-size:24px;color:#003399;\">�\�</span>�\�<span style=\"font-size:32px;color:#E53333;\">明天</span>！！�\�</span> \r\n</p>\r\n<br />','<p>\r\n	小昱的世�\�\r\n</p>\r\n<p>\r\n	<br />\r\n</p>','','1','7','blog','73','0','0','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('2','注册','1469687575','<a href=\"http://qxu1590370181.my3w.com/?plugin=yls_reg\">立即注册</a>','','','1','-1','page','0','0','0','n','n','y','y','n','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('7','说说为什么我对编程那么痴�\�','1470125845','<p>\r\n	当初从来没想过自己会对编程如此感兴趣。从小时候的梦想是当一名科学家，那个时期最喜欢看的一部漫画是《哆啦Ａ梦》，到了初中高中对物理的痴迷，但万万没想到，到了大学，却跳进了IT的漩涡�\�\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	可能谁都不会想到，我第一次接触的编程语言，不是宝刀不老的C，不是功能强悍的JAVA，也不是简单易懂的VB，而是Ruby，可能很多人连她的名字都每桶说过�\�\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	要说缘由，其实初衷并不复杂。由于家庭情况并不是太好，小的时候从来没进过网吧或者是游戏厅，但发现身边的同学朋友都喜欢往里面跑，不清楚到底是什么东西吸引着他们，渐渐地对里面到底是些什么东西非常的好奇。很幸运，高中的时候，我有了我的第一台电脑，配置并不是太�\�(但我当时并不知道)，那个时候对电脑这种东西非常的感兴趣。最初笨得连鼠标都拿不稳，键盘也不会敲^_^\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	不知什么时候，喜欢上了电脑游戏。但由于家里没有联网，从来都是玩单机游戏。我玩的第一款电脑游戏是《植物大战僵尸》。渐渐地，玩的游戏种类越来越多，《真三国无双》系列，《最终幻想》系列，《仙剑奇侠传》系列，《帝国时代》系列，《鬼泣》系列，《魔兽：冰封王座》，《侠盗猎车手》系�\�......终于有些明白那些朋友同学为什么会喜欢网吧了，但我却只喜欢单机游戏，所以还是没去过网吧�\�\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	之后一直有一件事很困扰我：这些游戏是怎么做出来的呢？\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	具体是怎么知道游戏是编程编出来的我已经忘了，我只记得我玩过一款游戏叫做《格斗纹章》，是一名名�\� 柳柳 的开发者做的，相当不错。当时已经开�\�(我当时并不知�\�\"开�\�\"二字的意义，只知道源代码已经全部给了我们)。经过一段时间的摸索，发现《格斗纹章》是用一款名为RGP Maker的游戏制作工具写的。我很兴奋，就去下载了XP版本的，打算学习一下�\�\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	开始看见都是图形化界面，非常的高兴。后来听说了\"脚本\"的概念，知道�\�\"脚本语言\"是个什么东西，并初次认识了ruby。是一个日本人写的一款脚本语言，非常的不错�\�\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	从此，我便一发不可收拾，爱上了编程。高考完填报志愿的时候，父母亲戚都不太愿意我往IT方面发展，他们更希望我成为一名教师或者是医生。但我对IT这个领域的热情已经无可抹灭，最终不顾所有人的反对，我填报了计算机方面的专业�\�\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	我的初衷是能够自己开发出自己喜欢的游戏。到了大学，发现编程并不是那么容易的世青，要学的东西很多。从最基本的C语言开始，慢慢的，学习了C++，Matlab，HTML，CSS，JavaScript，ASP.NET，SQL Server数据库，计算机组成原理，计算机网络等等，学得很杂。我发现这些都不是我追求的东西，于是只能利用课余时间补充自己的知识储量了。我自学了PHP，Java SE，Java EE，MySQL数据库，Android，还有一些框架比如ThinkPHP，Struts2，Spring，Hibernate等等等等。到阿里云万网中购买了一个虚拟主机，买了自己的域名并备案开通，当时挺有成就感的。但学习游戏编程，路还很远，刚刚上手的Cocos2d-X，使用Lua脚本开发，感觉并不简单�\�\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	兴趣与热情，是引领我前进的动力，这就是我从事IT行业的无尽源泉！\r\n</p>','','','1','-1','blog','52','0','0','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('6','Windows Live Writer 离线发布工具','1469696440','<p>\r\n	Windows Live Writer 离线发布工具\r\n</p>\r\n<p>\r\n	&nbsp;\r\n</p>\r\n<p>\r\n	<a href=\"http://blog.emlog.net/content/uploadfile/201008/d7cffd06a6fc031051f8a71cd072a9d420100826090934.gif\"><img title=\"clip_image001\" style=\"border-top:0px;border-right:0px;background-image:none;border-bottom:0px;padding-top:0px;padding-left:0px;border-left:0px;margin:0px;display:inline;padding-right:0px;\" alt=\"clip_image001\" src=\"http://xiaoyulive.top/blog/content/uploadfile/201607/c4caab01718a8e1d842d2add88284f6b20160728090035.gif\" align=\"\" border=\"0\" height=\"71\" width=\"244\" /></a> \r\n</p>\r\n<p>\r\n	离线编辑 ：不用在写博客时费心应对各种网络突发状况，离线编辑随时保存，撰写博客更安心！\r\n</p>\r\n<p>\r\n	所见即所�\� ：字体、颜色、背景等等与博客界面轻松同步，让你撰写博客时所见即所得，发布效果一目了然！\r\n</p>\r\n<p>\r\n	丰富多媒�\� ：轻松插入照片、链接、表格、地图等等多媒体内容，让您的博客更丰富多彩！\r\n</p>\r\n<p>\r\n	设定发布日期 ：您可以随需设定博客发布显示日期，在上网不方便的旅途中、忘记发布的日子里也能轻松补发！\r\n</p>\r\n<p>\r\n	1、请先进入后台博客设置中开启离线写作支�\�\r\n</p>\r\n<p>\r\n	2、点�\� <a href=\"https://support.microsoft.com/zh-cn/help/17779\">这里</a> 下载Windows Live Writer\r\n</p>\r\n<p>\r\n	3、安�\�\r\n</p>\r\n<p>\r\n	<a href=\"http://blog.emlog.net/content/uploadfile/201008/f3ccdd27d2000e3f9255a7e3e2c4880020100826091107.jpg\"><img title=\"clip_image002\" style=\"border-top:0px;border-right:0px;background-image:none;border-bottom:0px;padding-top:0px;padding-left:0px;border-left:0px;margin:0px;display:inline;padding-right:0px;\" alt=\"clip_image002\" src=\"http://xiaoyulive.top/blog/content/uploadfile/201607/a543b01f94e27b1e44039fd6d2b4a19f20160728090035.jpg\" align=\"\" border=\"0\" height=\"208\" width=\"244\" /></a> \r\n</p>\r\n<p>\r\n	4、配�\�\r\n</p>\r\n<p>\r\n	<a href=\"http://blog.emlog.net/content/uploadfile/201008/156005c5baf40ff51a327f1c34f2975b20100826092611.jpg\"><img title=\"clip_image003\" style=\"border-top:0px;border-right:0px;background-image:none;border-bottom:0px;padding-top:0px;padding-left:0px;border-left:0px;margin:0px;display:inline;padding-right:0px;\" alt=\"clip_image003\" src=\"http://xiaoyulive.top/blog/content/uploadfile/201607/079929acd83d77ba16b2016648bd384820160728090036.jpg\" align=\"\" border=\"0\" height=\"211\" width=\"244\" /></a> \r\n</p>\r\n<p>\r\n	<a href=\"http://blog.emlog.net/content/uploadfile/201008/799bad5a3b514f096e69bbc4a7896cd920100826092611.jpg\"><img title=\"clip_image004\" style=\"border-top:0px;border-right:0px;background-image:none;border-bottom:0px;padding-top:0px;padding-left:0px;border-left:0px;margin:0px;display:inline;padding-right:0px;\" alt=\"clip_image004\" src=\"http://xiaoyulive.top/blog/content/uploadfile/201607/0e3962a7bdc85ad9f1b5d01fab7bc83e20160728090036.jpg\" align=\"\" border=\"0\" height=\"208\" width=\"244\" /></a> \r\n</p>\r\n<p>\r\n	4.1 在这里选择 其他日志服务\r\n</p>\r\n<p>\r\n	<a href=\"http://blog.emlog.net/content/uploadfile/201008/d0096ec6c83575373e3a21d129ff8fef20100826092611.jpg\"><img title=\"clip_image005\" style=\"border-top:0px;border-right:0px;background-image:none;border-bottom:0px;padding-top:0px;padding-left:0px;border-left:0px;margin:0px;display:inline;padding-right:0px;\" alt=\"clip_image005\" src=\"http://xiaoyulive.top/blog/content/uploadfile/201607/6de58476f6880851bb9d320ba672a9d920160728090037.jpg\" align=\"\" border=\"0\" height=\"209\" width=\"244\" /></a> \r\n</p>\r\n<p>\r\n	4.2 填写你博客的地址及用户名密码\r\n</p>\r\n<p>\r\n	<a href=\"http://blog.emlog.net/content/uploadfile/201008/032b2cc936860b03048302d991c3498f20100826092611.jpg\"><img title=\"clip_image006\" style=\"border-top:0px;border-right:0px;background-image:none;border-bottom:0px;padding-top:0px;padding-left:0px;border-left:0px;margin:0px;display:inline;padding-right:0px;\" alt=\"clip_image006\" src=\"http://xiaoyulive.top/blog/content/uploadfile/201607/46fc5bc0f3691eeb590c61401694d59820160728090038.jpg\" align=\"\" border=\"0\" height=\"207\" width=\"244\" /></a> \r\n</p>\r\n<p>\r\n	4.3 在点击下一步后出现此页面，中途会弹出一个对话框，点确定即可\r\n</p>\r\n<p>\r\n	<a href=\"http://blog.emlog.net/content/uploadfile/201008/18e2999891374a475d0687ca9f989d8320100826092611.jpg\"><img title=\"clip_image007\" style=\"border-top:0px;border-right:0px;background-image:none;border-bottom:0px;padding-top:0px;padding-left:0px;border-left:0px;margin:0px;display:inline;padding-right:0px;\" alt=\"clip_image007\" src=\"http://xiaoyulive.top/blog/content/uploadfile/201607/67707390d9d64d8403f907de3085354620160728090038.jpg\" align=\"\" border=\"0\" height=\"211\" width=\"244\" /></a> \r\n</p>\r\n<p>\r\n	4.4 配置完成\r\n</p>\r\n<p>\r\n	5、应�\�\r\n</p>\r\n<p>\r\n	5.1 现在我们就可以开始用WLW发表日志，在此做个测�\�\r\n</p>\r\n<p>\r\n	下图是WLW日志编辑页面�\�\r\n</p>\r\n<p>\r\n	<a href=\"http://blog.emlog.net/content/uploadfile/201008/ea01ad55ab9cf5fe6d2e9197c5084f9920100826093745.jpg\"><img title=\"clip_image008\" style=\"border-top:0px;border-right:0px;background-image:none;border-bottom:0px;padding-top:0px;padding-left:0px;border-left:0px;margin:0px;display:inline;padding-right:0px;\" alt=\"clip_image008\" src=\"http://xiaoyulive.top/blog/content/uploadfile/201607/352c95da1f43f7b26a28dade6786feb820160728090039.jpg\" align=\"\" border=\"0\" height=\"138\" width=\"244\" /></a> \r\n</p>\r\n<p>\r\n	下图是WLW日志发布后浏览器中显示的页面\r\n</p>\r\n<p>\r\n	<a href=\"http://blog.emlog.net/content/uploadfile/201008/fe5df232cafa4c4e0f1a0294418e566020100826093912.jpg\"><img title=\"clip_image009\" style=\"border-top:0px;border-right:0px;background-image:none;border-bottom:0px;padding-top:0px;padding-left:0px;border-left:0px;display:inline;padding-right:0px;\" alt=\"clip_image009\" src=\"http://xiaoyulive.top/blog/content/uploadfile/201607/99185aa4f0008220a667facc85b91e7c20160728090039.jpg\" align=\"\" border=\"0\" height=\"187\" width=\"244\" /></a> \r\n</p>\r\n<p>\r\n	6、教程结�\�\r\n</p>\r\n<p>\r\n	更多功能请详阅WLW帮助文档�\�\r\n</p>','','','1','7','blog','24','0','0','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('8','终于做好了个人首页，哈哈','1470241433','<p>\r\n	别的不多说了，先看看效果\r\n</p>\r\n<p>\r\n	<a href=\"http://xiaoyulive.top/blog/content/uploadfile/201608/3aa61470241809.png\" target=\"_blank\" title=\"搜狗截图20160804002706.png\"><img src=\"http://xiaoyulive.top/blog/content/uploadfile/201608/3aa61470241809.png\" align=\"absmiddle\" border=\"0\" height=\"273\" width=\"502\" /></a> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<a href=\"http://xiaoyulive.top/blog/content/uploadfile/201608/79291470241809.png\" target=\"_blank\" title=\"搜狗截图20160804002734.png\"><img src=\"http://xiaoyulive.top/blog/content/uploadfile/201608/79291470241809.png\" align=\"absmiddle\" border=\"0\" height=\"277\" width=\"501\" /></a>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<a href=\"http://xiaoyulive.top/blog/content/uploadfile/201608/9d741470241932.png\" target=\"_blank\" title=\"搜狗截图20160804003145.png\"><img src=\"http://xiaoyulive.top/blog/content/uploadfile/201608/9d741470241932.png\" align=\"absmiddle\" border=\"0\" height=\"278\" width=\"502\" /></a> \r\n</p>\r\n<p>\r\n	<a href=\"http://xiaoyulive.top/blog/content/uploadfile/201608/cbb71470241809.png\" target=\"_blank\" title=\"搜狗截图20160804002753.png\"><img src=\"http://xiaoyulive.top/blog/content/uploadfile/201608/cbb71470241809.png\" align=\"absmiddle\" border=\"0\" height=\"277\" width=\"501\" /></a> \r\n</p>\r\n<p>\r\n	<a href=\"http://xiaoyulive.top/blog/content/uploadfile/201608/d0931470241602.png\" target=\"_blank\" title=\"搜狗截图20160804002522.png\"><img src=\"http://xiaoyulive.top/blog/content/uploadfile/201608/d0931470241602.png\" align=\"absmiddle\" border=\"0\" height=\"278\" width=\"502\" /></a> \r\n</p>\r\n<p>\r\n	<a href=\"http://xiaoyulive.top/blog/content/uploadfile/201608/19e91470241510.png\" target=\"_blank\" title=\"搜狗截图20160804002236.png\"><img src=\"http://xiaoyulive.top/blog/content/uploadfile/201608/19e91470241510.png\" align=\"absmiddle\" border=\"0\" height=\"163\" width=\"501\" /></a> \r\n</p>\r\n<p>\r\n	样子看起开还不错，哈哈\r\n</p>\r\n<p>\r\n	找图片，找素材，写代码，改样式，也是一天的辛苦劳动果实啊，哈哈，睡�\� !<a href=\"http://qxu1590370181.my3w.com/blog/content/uploadfile/201608/19e91470241510.png\" target=\"_blank\" title=\"搜狗截图20160804002236.png\"><br />\r\n</a> \r\n</p>\r\n<p>\r\n	<a target=\"_blank\" href=\"http://www.xiaoyulive.top\" style=\"color:red;\">个人首页链接</a> \r\n</p>','','','1','7','blog','26','0','6','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('9','遇到烦心事，为什么受伤的总是自己 ?','1472919927','<p>\r\n	<span style=\"font-size:16px;\">如果你讨厌一个人，想躲开，你会发现，不管躲到哪里，总是还会遇到类似的人。如果你讨厌一件事，想逃避，你会发现，不管逃到哪里，总是还会遇到类似事情�\�</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">人们对事件的看法是怎么产生的呢 ? 从事件发生到看法形成，这中间又经历了什�\� ? 有没有办法快速改变一个人的看�\� ? </span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">打个比方吧。此刻你发了一条重要的短信给某人，结果迟迟不见某人回复。不同的人就会有截然不同的看法、情绪，并做出不同的决定�\�\r\n有人生气愤怒，发誓再也不给某人发短信了 ; 有人平静从容，决定等会儿再说 ; 有人着急忙慌，立刻发更多的短信。从发短信不回复到做出各种决定，这中间一定有一个像催化剂一样的东西起到激发作用。心理学家把这个东西命名为归因方式，也就是解释风格，通俗的讲真正伤害你的是你对事情的看法�\�</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\"> 《庄子》中有一则故事，大意是这样：\r\n在一个烟雾弥漫的早晨，有一个人划着船逆流而上。突然之间，他看见一只小船顺流直冲向他。眼看小船就要撞上他的船，他高声大叫�\�\" 小心 ! 小心 !\"\r\n但船还是直接撞了上来，他的船几乎就要沉了。于是他暴跳如雷，开始向对方怒吼，口无遮拦地谩骂。但是当他仔细一瞧，发现是条空船，于是气也就消了�\�</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\"> 如果你被楼上的人洒了一身水，你很可能会对他大声叫喊，甚至大骂。如果天空忽然下雨把你淋湿，即便你是一个脾气不好的人，也不会大发雷霆�\�</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\"> 可能并不是这个人，或者这件事本身出了问题，而是我们看待人和事的心境出了问题。只有改变自己的心境，才能彻底摆脱那些讨厌的人和事。或者，不是摆脱，是你懂得和他们和谐相处了，那么，他们就不会再成为困扰你的问题了�\�\r\n放下别人的错，解脱自己的心。正如文中年轻的士兵，人生不过这短短的几十年，我们到底该如何度过�\� ? </span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">有些人，遇到一些事，就把自己的心锁�\� \" 牢笼 \" 之中，整天愁眉紧锁，甚至苦大仇深，甚至生不如�\� ......\r\n是的，真正伤害你的，往往不是事情本身，而是你对事情的看法。与其怀恨在心、终苦一生，不如立即放下、让心自�\� ! </span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">—————————————————�\� </span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">每个人的心里都有个黑洞，因此快乐并苦恼着</span>\r\n</p>','','','1','4','blog','27','0','0','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('10','《微微一笑很倾城》摘�\�','1472958201','<p>\r\n	肖奈:我的女孩,为什么不信任\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	贝微�\�:曹光,我不想一而再再而三的浪费时间时间来拯救你的世界�\�\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	赵二�\�:薇薇,你比我漂�\�,比我聪明,比我讨人喜欢,这一切我一直都心知肚明,我也从来没有想过要跟你争什�\�,可是为什么这一�\�,我都必须依靠你的名字才能得到,我的工作,我所享受的待�\�,我所喜欢的人,都是因为误把我当成了�\�,才会降临到我的头�\�,我不怪你,但我真的不知道该怎么面对�\�\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	肖奈:薇薇,她只是你人生中很小的一部分,我才是你的全�\�\r\n</p>\r\n<br />','','','1','8','blog','17','0','0','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('11','关于摩羯的探�\�','1473433268','<p>\r\n	<span style=\"font-size:16px;\">摩羯座一旦相爱，都会毫无保留...</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;line-height:1.5;\">摩羯座人认定的事，认定的人，就会坚定不移的走下去，不会中途放弃，也不会给自己留什么后路。在摩羯座人眼里，爱就是爱，没有多少强弱之分，既然选择了相爱，那么就会把对方当成自己的家人，毫无保留的付出和照顾�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">双子配摩羯～天才变白�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">踩到铁板的典型组合，当双子以为能掌控摩羯为他做事时，最好搞清楚，其实是摩羯自己觉得这样做没什么不好，谁被谁用还不知道�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;line-height:1.5;\">双子的迷恋原因：</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\"> 摩羯的智慧与稳定感，让双子觉得很自由�\�<br />\r\n</span><img src=\"http://xiaoyulive.top/blog/content/uploadfile/201609/de541473433443.jpg\" width=\"90\" height=\"90\" border=\"0\" align=\"absmiddle\" /><img src=\"http://xiaoyulive.top/blog/content/uploadfile/201609/ca931473433437.jpg\" width=\"90\" height=\"90\" border=\"0\" align=\"absmiddle\" style=\"line-height:1.5;\" /> \r\n</p>','','','1','-1','blog','14','0','2','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('12','【魔族】摩羯是双子注定的桃花！！！','1473433328','<p>\r\n	<span style=\"font-size:16px;\">不知道从什么时候起，突然就开始喜欢上了摩羯座。我是一个善变的双子，但摩羯座的身上总有股神奇的力量吸引着我，或许因为好奇，或许因为她的与众不同。总觉得她身上有一种我无法抗拒的磁场，是我想要的那种感觉�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;line-height:1.5;\">双子座是一个极度缺乏安全感的星座，之所以很多人觉得双子座的人花心，能够在同一时间跟很多异性暧昧的相处，其实不过都是双子座的一种自我保护的方式罢了。因为双子座太敏感，能觉察到许多细微的事物，所以总习惯在事物走向灭亡的前一刻先放弃它，充当那个坏人，也是阻止别人有机会伤害自己�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;line-height:1.5;\">而摩羯座则是一个极度自卑的星座，当爱一个人够深的时候，就会开始否定自己，总觉得自己配不上他，他值得拥有更好的，觉得自己给不了他想要的未来，当她无法平衡这一切的时候，就会躲起来，不去面对这一切，直到对方先投降放弃�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\"> 星座总说这两个星座不配，因为摩羯是土象星座，而双子是风象星座。其实不然，我觉得双子座才是更能走进摩羯内心的人�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">双子喜欢交流，但摩羯又属于把什么事都埋在心里的人，然而双子座充满好奇，就喜欢摩羯这么深沉的神秘，就喜欢打探。虽然双子缺乏耐心，但在自己喜欢的事情上总是倔强的坚持，所以终究可以撬开摩羯的心。我也正是因为喜欢上了摩羯，甘愿做一个配角，想进入她的世界，想读懂她，想把自己的阳光带给她。摩羯因为太早读懂了世界的冷暖，总是有一种悲观的情绪，像只刺猬，竖起了满身的刺不让人接近。但就是这种感觉，让双子有种感同身受的感觉，因为双子也是那么缺乏安全感，竖起层层防备来保护自己�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\"> 摩羯外冷内热，双子外热内冷。他们正好是完美的互补。我觉得这种魔力的牵引，应该就是所谓的宿命罢～因为彼此从对方的身上找到了自己的影子，同时又发现了对方身上的闪光点�\�</span> \r\n</p>\r\n<span style=\"font-size:16px;\"> 双子真正爱上一个人的时候，就会为他收起所有的玩心，变得患得患失。双子爱上一个人的时候，就想把所有的快乐带给她，让她的脸上充满笑容。而摩羯爱上一个人的时候，会想象一个有你的以后，给你一个坚定的承诺，会把忙碌的时间抽空腾给你很多。双子和摩羯都是付出的类型，把幸福留给对方，痛苦自己扛。最合适的爱情就是不止懂对方，在性格上还互补，如同摩羯和双子�\�</span><br />\r\n<p>\r\n	<br />\r\n</p>','','','1','-1','blog','20','0','0','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('13','【魔族】当双子遇上摩羯','1473434252','<p>\r\n	<span style=\"font-size:16px;line-height:1.5;\">&nbsp;&nbsp;&nbsp;&nbsp;冬天的记忆永远不会消失。她是安静的，内心的起伏如地火一样燃烧。她却明白岩浆喷出之后，仍然是冷却的冬天。当你拥有全世界时，魔羯如同空气一样不存在，但是在你极度需要照顾时，她会安静在你旁边。很多人记得魔羯，是因为病了的时候，她是你的一杯水，痛苦的时候，她是不多的朋友。很多人因此爱上魔羯。但他们会被魔羯弄得要疯掉，因为她们一惯的冷漠会让你饱受伤害，你急于印证爱情的热情在她看来，不过是在发烧——而发烧总有过去的一天。她宁可让雪烧化在心底�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;双子弄不懂魔羯，因为她回避他的热情，在她看来，双子的来去无踪和热情似火，就象揣着一个随时都会熄灭的灯笼。魔羯不喜欢这种感觉，干脆连灯笼一起扔掉�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;魔羯也弄不懂双子，双子对这个世界有永远的好奇心，他居然可以不断的受伤不断的重来，双子的真心到底是怎样的构造？</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;魔羯的善良支撑着这个在她看来随时都会凋零的世界，双子的适应性是这个世界一道热闹的风景�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;做为朋友和同事，魔羯的冷静足以掌控大局，而双子的热闹和配合让会让这种关系稳定而美好。当双子焦头烂额在各种不能平衡的困境之时，魔羯会适时给与帮助。魔羯也需要双子夏天样的情怀，缓解极度压力下内心的脆弱�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;年轻时候的双子和魔羯可能是一对水火不容的对头。当随着时间的推移，他们基于孤独和需要互相分享对方，并有着不为人知的默契。但总有一个区域他们各自保留着。那就是他们最孤独的内心。其实大家都知道那种含义。只是不能也不愿意进去。双子总会怀疑魔羯内心另有其人，而魔羯知道双子永远在诱惑和回归之间打转。做为恋情，这是最伤人脑筋的一种，但做为家人，却让人留念�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;对于双子来说，这世界可能会有一种爱情让他们稳定。于是他们不断去追寻，直到找到为止。对于魔羯而讲，感情永远只是内心的感触，有很多人都值得她爱，但她只看中那个最后留在她身边的人�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;也许爱情这个字，对于双子和魔羯是个不能多说的话题。双子无法在魔羯面前不断的重复，我爱你。因为那是没有太多回应的。而魔羯只在分开之后，告诉双子，我一直都在用心爱你�\�</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;双子在离开魔羯之后，才会明白他失去了天下最好的女孩。他只是弄错了珍惜的方式�\�</span> \r\n</p>\r\n<span style=\"font-size:16px;\">&nbsp;&nbsp;&nbsp;&nbsp;魔羯在离开双子后，会想，还有多少人善待那个多变的男孩？她已经无能为�\�</span><br />\r\n<br />','','','1','-1','blog','53','0','0','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('15','第一次出省的所见所�\�(未完待续)','1474986371','<p>\r\n	经过29小时的车程，终于到达了深圳。第一次出省，而且就来到一个梦寐以求的一线城市，心中难免有很多感慨，也有很多感受�\�\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	我是第一次坐火车。而这次旅行是我到目前为止最愉快的一次旅行，旅途中的所见所闻令我至生难忘。全车一片和谐，除了我坐的是上铺之外一切都挺好�\�(上铺空间很小，难爬，身体坐不直，容易撞到�\�)�\�\r\n</p>','','','1','1','blog','9','0','0','n','n','y','y','y','0','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('20','[学习案例]使用锚点实线Tab跳转','1477568977','<pre class=\"prettyprint lang-html linenums\">&lt;!DOCTYPE html&gt;\r\n&lt;html lang=\"en\"&gt;\r\n&lt;head&gt;\r\n	&lt;meta charset=\"UTF-8\" /&gt;\r\n	&lt;title&gt;demo&lt;/title&gt;\r\n	&lt;style&gt;\r\n	*{\r\n		margin: 0;\r\n		padding: 0;\r\n	}\r\n	a{\r\n		text-decoration: none;\r\n		display: inline-block;\r\n		width: inherit;\r\n		height: inherit;\r\n	}\r\n	li{\r\n		list-style: none;\r\n	}\r\n	ul{\r\n		font-size: 0;\r\n		width: 300px;\r\n	}\r\n	ul li{\r\n		display: inline-block;\r\n		width: 100px;\r\n		height: 30px;\r\n		line-height: 30px;\r\n		text-align: center;\r\n		border-radius: 20px 20px 0 0;\r\n	}\r\n	ul li a{\r\n		font-size: 16px;\r\n		color: #fff;\r\n	}\r\n	ul li:nth-child(1){\r\n		background-color: #f00;\r\n	}\r\n	ul li:nth-child(2){\r\n		background-color: #0f0;\r\n	}\r\n	ul li:nth-child(3){\r\n		background-color: #00f;\r\n	}\r\n	ul li:hover {\r\n		background-color: #000;\r\n	}\r\n	.content{\r\n		height: 202px;\r\n		font-size: 28px;\r\n		overflow: hidden;\r\n		/*overflow-y: scroll;*/\r\n	}\r\n	.a{\r\n		height:	200px;\r\n		border: 1px solid #000;\r\n		border-radius: 0 0 20px 20px;\r\n	}\r\n	.a p{\r\n		border-radius: 20px;\r\n		border: 1px solid #eee;\r\n	}\r\n	.a p:nth-of-type(1){\r\n		background-color: #efc;\r\n	}\r\n	.a p:nth-of-type(2){\r\n		background-color: #fce;\r\n	}\r\n	.a p:nth-of-type(3){\r\n		background-color: #cef;\r\n	}\r\n	&lt;/style&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n	&lt;ul&gt;\r\n		&lt;li&gt;&lt;a href=\"#a1\"&gt;早餐&lt;/a&gt;&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"#a2\"&gt;午餐&lt;/a&gt;&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"#a3\"&gt;晚餐&lt;/a&gt;&lt;/li&gt;\r\n		&lt;div class=\"content\"&gt;\r\n			&lt;div id=\"a1\" class=\"a\"&gt;\r\n			&lt;br /&gt;\r\n				&lt;p&gt;豆浆&lt;/p&gt;\r\n				&lt;p&gt;油条&lt;/p&gt;\r\n				&lt;p&gt;包子&lt;/p&gt;\r\n			&lt;/div&gt;\r\n			&lt;div id=\"a2\" class=\"a\"&gt;\r\n			&lt;br /&gt;\r\n				&lt;p&gt;拉面&lt;/p&gt;\r\n				&lt;p&gt;木桶�\�&lt;/p&gt;\r\n				&lt;p&gt;快餐&lt;/p&gt;\r\n			&lt;/div&gt;\r\n			&lt;div id=\"a3\" class=\"a\"&gt;\r\n			&lt;br /&gt;\r\n				&lt;p&gt;鱼香肉丝&lt;/p&gt;\r\n				&lt;p&gt;方便�\�&lt;/p&gt;\r\n				&lt;p&gt;猪脚�\�&lt;/p&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n	&lt;/ul&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;</pre>\r\n<br />','','','1','-1','blog','7','0','0','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('21','[学习案例]使用hover显示隐藏','1477569041','<pre class=\"prettyprint lang-html linenums\">\r\n<pre class=\"prettyprint lang-html linenums\">&lt;!DOCTYPE html&gt;\r\n&lt;html lang=\"en\"&gt;\r\n&lt;head&gt;\r\n	&lt;meta charset=\"UTF-8\" /&gt;\r\n	&lt;title&gt;demo&lt;/title&gt;\r\n	&lt;style&gt;\r\n		*{\r\n			margin: 0;\r\n			padding: 0;\r\n		}\r\n		a{\r\n			text-decoration: none;\r\n		}\r\n		ul{\r\n			width: 200px;\r\n			height: auto;\r\n			margin: 0 auto;\r\n			list-style: none;\r\n		}\r\n		ul li{\r\n			width: 200px;\r\n			line-height: 34px;\r\n			text-align: center;\r\n		}\r\n		ul&gt;li{\r\n			/*border: 1px solid #000;*/\r\n		}\r\n		ul&gt;li&gt;a{\r\n			background-image: url(list_image/03.png) ;\r\n			background-size: 80% 100%;\r\n			display: block;\r\n			height: 40px;\r\n		}\r\n		ul&gt;li:hover ol{\r\n			display: block;\r\n		}\r\n		ol{\r\n			list-style: none;\r\n			display: none;\r\n		}\r\n		ol&gt;li{\r\n			line-height: 20px;\r\n			/*border: 1px solid blue;*/\r\n			text-align: left;\r\n			text-indent: 2em;\r\n			background-color: #f4f4f6;\r\n		}\r\n		ol&gt;li&gt;a{\r\n			display: inline;\r\n			background-color: transparent;\r\n		}\r\n	&lt;/style&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n	&lt;ul&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;智达神鼎&lt;/a&gt;\r\n			&lt;ol&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num1&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num2&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num3&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num4&lt;/a&gt;&lt;/li&gt;\r\n			&lt;/ol&gt;\r\n		&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;智达理念&lt;/a&gt;\r\n			&lt;ol&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num1&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num2&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num3&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num4&lt;/a&gt;&lt;/li&gt;\r\n			&lt;/ol&gt;\r\n			\r\n		&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;知道问价&lt;/a&gt;\r\n			&lt;ol&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num1&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num2&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num3&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num4&lt;/a&gt;&lt;/li&gt;\r\n			&lt;/ol&gt;\r\n		&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;才艺舞台&lt;/a&gt;\r\n			&lt;ol&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num1&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num2&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num3&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num4&lt;/a&gt;&lt;/li&gt;\r\n			&lt;/ol&gt;\r\n		&lt;/li&gt;\r\n	&lt;/ul&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;</pre>\r\n<br />\r\n<a href=\"http://xiaoyulive.top/blog/content/uploadfile/201610/f7e61477569623.zip\" target=\"_blank\">附件下载</a></pre>','','','1','-1','blog','9','0','1','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('22','[学习案例]手风琴特效的简单制�\�','1477569113','<div>\r\n<pre class=\"prettyprint lang-html linenums\">&lt;!DOCTYPE html&gt;\r\n&lt;html lang=\"en\"&gt;\r\n&lt;head&gt;\r\n	&lt;meta charset=\"UTF-8\" /&gt;\r\n	&lt;title&gt;demo&lt;/title&gt;\r\n	&lt;style&gt;\r\n		*{\r\n			margin: 0;\r\n			padding: 0;\r\n			font-size: 0;\r\n		}\r\n		a{\r\n			text-decoration: none;\r\n			font-size: 16px;\r\n		}\r\n		li{\r\n			list-style: none;\r\n		}\r\n		ul{\r\n			width: 400px;\r\n			margin: 10px auto;\r\n		}\r\n		ul&gt;li{\r\n			display: inline-block;\r\n			height: 150px;\r\n			text-align: center;\r\n			border: 1px solid #f00;\r\n			border-right: none;\r\n		}\r\n		ul&gt;li&gt;a{\r\n			display: inline-block;\r\n			height: 150px;\r\n			width: 1.8em;\r\n			color:#333;\r\n			background-color: lightblue;\r\n			text-align: center;\r\n			vertical-align: top;\r\n		}\r\n		ol{\r\n			vertical-align: top;\r\n			display: none;\r\n			height: 150px;\r\n			width: 100px;\r\n			background-color: #999;\r\n			text-align: left;\r\n			border: 1px solid #f00;\r\n			border-right: none;\r\n			border-top: none;\r\n		}\r\n		ol&gt;li{\r\n			height: 36px;\r\n			line-height: 36px;\r\n		}\r\n		ol&gt;li&gt;a{\r\n		}\r\n		ul&gt;li:hover ol{\r\n			display: inline-block;\r\n		}\r\n		.last{\r\n			border-right: 1px solid #f00;\r\n		}\r\n	&lt;/style&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n	&lt;ul&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;&lt;br /&gt;智达神鼎&lt;/a&gt;\r\n			&lt;ol&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num1&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num2&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num3&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num4&lt;/a&gt;&lt;/li&gt;\r\n			&lt;/ol&gt;\r\n		&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;&lt;br /&gt;智达理念&lt;/a&gt;\r\n			&lt;ol&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num1&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num2&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num3&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num4&lt;/a&gt;&lt;/li&gt;\r\n			&lt;/ol&gt;\r\n			\r\n		&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;&lt;br /&gt;知道问价&lt;/a&gt;\r\n			&lt;ol&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num1&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num2&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num3&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num4&lt;/a&gt;&lt;/li&gt;\r\n			&lt;/ol&gt;\r\n		&lt;/li&gt;\r\n		&lt;li class=\"last\"&gt;&lt;a href=\"\"&gt;&lt;br /&gt;才艺舞台&lt;/a&gt;\r\n			&lt;ol&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num1&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num2&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num3&lt;/a&gt;&lt;/li&gt;\r\n				&lt;li&gt;&lt;a href=\"\"&gt;num4&lt;/a&gt;&lt;/li&gt;\r\n			&lt;/ol&gt;\r\n		&lt;/li&gt;\r\n	&lt;/ul&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;\r\n</pre>\r\n<br />\r\n</div>','','','1','-1','blog','5','0','0','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('26','[学习案例]导航nav的制�\�','1477570442','<pre class=\"prettyprint lang-js linenums\">&lt;!DOCTYPE html&gt;\r\n&lt;html lang=\"en\"&gt;\r\n&lt;head&gt;\r\n	&lt;meta charset=\"UTF-8\" /&gt;\r\n	&lt;title&gt;Document&lt;/title&gt;\r\n	&lt;style&gt;\r\n	*{\r\n		margin: 0;\r\n		padding: 0;\r\n	}\r\n	.nav{\r\n		width: 100%;\r\n		padding-left: 10%;\r\n		padding-right: 10%;\r\n		overflow: hidden;\r\n		text-align: center;\r\n		list-style: none;\r\n		background-color: green;\r\n	}\r\n	.nav&gt;li{\r\n		width: 10%;\r\n		height: 36px;\r\n		line-height: 36px;\r\n		float: left;\r\n	}\r\n	.nav&gt;li&gt;a{\r\n		color: #fff;\r\n		font-size: 12px;\r\n		text-decoration: none;\r\n	}\r\n	.nav&gt;li:hover{\r\n		cursor: pointer;\r\n		background-color: black;\r\n	}\r\n	.nav&gt;li:hover a{\r\n		color: white;\r\n	}\r\n	&lt;/style&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n	&lt;ul class=\"nav\"&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;首页&lt;/a&gt;&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;首页&lt;/a&gt;&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;首页&lt;/a&gt;&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;首页&lt;/a&gt;&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;首页&lt;/a&gt;&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;首页&lt;/a&gt;&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;首页&lt;/a&gt;&lt;/li&gt;\r\n		&lt;li&gt;&lt;a href=\"\"&gt;首页&lt;/a&gt;&lt;/li&gt;\r\n	&lt;/ul&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;</pre>','','','1','-1','blog','23','0','0','n','n','y','y','y','','','0','0,0');
INSERT INTO xiaoyublog_blog VALUES('62','CSS常用技�\�','1465394977','<h3 id=\"h3--\"><a name=\"一、关于浮动后盒子坍塌的解�\�\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>一、关于浮动后盒子坍塌的解�\�</h3><h4 id=\"h4-1-\"><a name=\"1.给父元素设置高度\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>1.给父元素设置高度</h4><h4 id=\"h4-2-overflow-hidden\"><a name=\"2.父元素使用overflow: hidden\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>2.父元素使用overflow: hidden</h4><p>父元素没有设置高度，本来只由padding-top撑起盒子的高度，子代浮动，只需在父元素设置overflow:hidden;即可避免盒子坍塌，如:</p>\r\n<pre><code class=\"lang-html\">&lt;style&gt;\r\ndiv{\r\n    width:200px;\r\n    border:1px solid red;\r\n    padding-top:30px;\r\n    overflow:hidden;\r\n}\r\np{\r\n    width:200px;\r\n    height:500px;\r\n    float:left;\r\n    background:green;\r\n}\r\n&lt;/style&gt;\r\n\r\n&lt;div&gt;&lt;p&gt;&lt;/p&gt;&lt;/div&gt;\r\n</code></pre>\r\n<h3 id=\"h3--\"><a name=\"二、清除浮动的几种技�\�\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>二、清除浮动的几种技�\�</h3><p>处理浮动带来的问题，可以通过清除浮动属性来解决</p>\r\n<h4 id=\"h4-1-\"><a name=\"1.给父元素设置固定的宽�\�\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>1.给父元素设置固定的宽�\�</h4><h4 id=\"h4-2-overflow-hidden-auto-\"><a name=\"2.给父元素设置overflow:hidden | auto;\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>2.给父元素设置overflow:hidden | auto;</h4><h4 id=\"h4-3-4-clear-both-\"><a name=\"3.可以在父�\�4素末尾添加一个空的块标签，设置clear: both;\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>3.可以在父�\�4素末尾添加一个空的块标签，设置clear: both;</h4><pre><code class=\"lang-html\">&lt;div&gt;\r\n    &lt;p&gt;&lt;/p&gt;\r\n    &lt;p&gt;&lt;/p&gt;\r\n    &lt;div style=\"clear:both;\"&gt;&lt;/div&gt;\r\n&lt;/div&gt;\r\n也可以在父元素之外添加一个空标签，先定义一个clear类，添加此类即可\r\n&lt;style&gt;\r\n    .clear{\r\n        clear:both;\r\n    }\r\n&lt;/style&gt;\r\n&lt;div&gt;\r\n    &lt;p&gt;&lt;/p&gt;\r\n    &lt;p&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;div class=\"clear\"&gt;&lt;/div&gt;\r\n</code></pre>\r\n<h4 id=\"h4-4-\"><a name=\"4.给父元素添加一个结构伪�\�\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>4.给父元素添加一个结构伪�\�</h4><pre><code class=\"lang-css\">父元�\�:after{\r\n    content: \"\";\r\n      width: 0;\r\n      height: 0;\r\n    clear: both;\r\n    display: block;\r\n      zoom: 1;\r\n}\r\n</code></pre>\r\n<h3 id=\"h3--inline-block-\"><a name=\"三、两个inline-block的元素之间产生空白原�\�\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>三、两个inline-block的元素之间产生空白原�\�</h3><p>两个元素之间有换行，当一个空格处理，如果连续写两个此元素不存在此问题<br>\r\n<h3 id=\"h3--\"><a name=\"四、内容放不下时出现省略符号�\�\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>四、内容放不下时出现省略符号�\�</h3><pre><code class=\"lang-css\">white-space:nowrap;\r\ntext-overflow:ellipsis;\r\noverflow:hidden;\r\n</code></pre>\r\n<h4 id=\"h4-\"><a name=\"\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span> </h4><h3 id=\"h3--\"><a name=\"五、左侧固定，右侧自适应\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>五、左侧固定，右侧自适应</h3><p>左边块固定宽度，右边块设置定位即可�\�</p>\r\n<p>html</p>\r\n<pre><code class=\"lang-html\">&lt;div class=\"box\"&gt;\r\n  &lt;div class=\"left\"&gt;&lt;/div&gt;\r\n  &lt;div class=\"right\"&gt;&lt;/div&gt;\r\n&lt;/div&gt;\r\n</code></pre>\r\n<p>css</p>\r\n<pre><code class=\"lang-css\">.box{\r\n  height: 200px;\r\n  position: relative;\r\n}\r\n.box&gt;div{\r\n  height: 100%;\r\n}\r\n.left{\r\n  width: 100px;\r\n  background-color: #f00;\r\n}\r\n.right{\r\n  background-color: #0f0;\r\n  position: absolute;\r\n  top: 0;\r\n  left: 100px;\r\n  right: 0;\r\n}\r\n</code></pre>\r\n<h3 id=\"h3--\"><a name=\"六、图片下方空�\�\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>六、图片下方空�\�</h3><pre><code>1. img{display:block;}\r\n2. img{vertical-align : top | middle | bottom}\r\n3. 给父容器设置固定高与img的高一�\�\r\n</code></pre><p>css</p>\r\n<pre><code class=\"lang-css\">div{\r\n  background: #f00;\r\n}\r\nimg{\r\n  display: block;\r\n  /*vertical-align: top;*/\r\n}\r\n</code></pre>\r\n<p>html</p>\r\n<pre><code class=\"lang-html\">&lt;div&gt;\r\n  &lt;img src=\"http://i0.itc.cn/20170608/3728_69209e22_5ace_2eb7_41ee_f842395e14e3_1.jpg\" alt=\"\"&gt;\r\n&lt;/div&gt;\r\n</code></pre>\r\n<h3 id=\"h3--\"><a name=\"七、两个行内元素之间的水平间距\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>七、两个行内元素之间的水平间距</h3><p>出现原因:水平间距其实就是元素之间的空�\�</p>\r\n<pre><code>1. 让元素之间不要有空格和换行，即让标签紧挨着标签\r\n2. 给父元素设置font-size:0;但要注意给元素内部所有元素字体大小都�\�0\r\n3. 给元素添加浮动属�\�(推荐使用float)\r\n</code></pre><h3 id=\"h3--img-input-\"><a name=\"八、两个行内块对不�\� (img与input)\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>八、两个行内块对不�\� (img与input)</h3><pre><code>1. vertical-align : top | middle | bottom\r\n2. 添加浮动属�\�\r\n</code></pre><h3 id=\"h3--\"><a name=\"九、层叠样式问�\�\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>九、层叠样式问�\�</h3><p>给子元素margin-top时，浏览器中是给父元素添加了margin-top的�\�<br>\r\n<pre><code>解决方法:\r\n1. 给父元素添加 overflow:hidden | auto;\r\n2. 给父元素设置 padding-top:0.1px;\r\n3. 给父元素设置 padding-top值代替子元素�\� margin-top\r\n4. 给父元素添加一个上边框 border-top\r\n5. 给父元素或者子元素添加浮动属�\�\r\n</code></pre><p>html</p>\r\n<pre><code class=\"lang-html\">&lt;div class=\"fu\"&gt;\r\n  &lt;div class=\"zi\"&gt;&lt;/div&gt;\r\n&lt;/div&gt;\r\n</code></pre>\r\n<p>css</p>\r\n<pre><code class=\"lang-css\">.fu{\r\n  background-color: #f00;\r\n  width: 200px;\r\n  overflow: hidden;\r\n}\r\n.zi{\r\n  background-color: #0f0;\r\n  width: 100px;\r\n  height: 100px;\r\n  margin-top: 200px;\r\n}\r\n</code></pre>\r\n<h3 id=\"h3--\"><a name=\"十、代码写三角�\�\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>十、代码写三角�\�</h3><pre><code class=\"lang-css\">element{\r\n    width:0;\r\n    height:0;\r\n    display:block;\r\n    border-top:20px solid transparent;\r\n    border-bottom:20px solid red;\r\n    border-left:20px solid transparent;\r\n    border-right:20px solid transparent;\r\n}\r\n// 将生成一个尖向上的三角形\r\n</code></pre>\r\n<h3 id=\"h3--ie9-hack\"><a name=\"十一、IE9- 注释hack\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>十一、IE9- 注释hack</h3><pre><code>&lt;!--[if IE]&gt;\r\n    此处写的代码只有IE9-浏览器能够解�\�\r\n    其他浏览器解析为注释\r\n&lt;![end if]--&gt;\r\n\r\n指定版本的IE(5,6,7,8)\r\n&lt;!--[if IE 版本号]&gt;\r\n&lt;![end if]--&gt;\r\n版本号可以省略，省略后代表所有IE版本\r\n</code></pre>','','','1','17','blog','3','0','0','n','n','n','y','y','','','0','0,0');

DROP TABLE IF EXISTS xiaoyublog_comment;
CREATE TABLE `xiaoyublog_comment` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(10) unsigned NOT NULL DEFAULT '0',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `date` bigint(20) NOT NULL,
  `poster` varchar(20) NOT NULL DEFAULT '',
  `comment` text NOT NULL,
  `mail` varchar(60) NOT NULL DEFAULT '',
  `url` varchar(75) NOT NULL DEFAULT '',
  `ip` varchar(128) NOT NULL DEFAULT '',
  `hide` enum('n','y') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`cid`),
  KEY `gid` (`gid`) USING BTREE,
  KEY `date` (`date`) USING BTREE,
  KEY `hide` (`hide`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_comment VALUES('1','1','0','1469617453','小昱','么么�\�(づ￣ 3�\�)�\�','731734107@qq.com','http://qxu1590370181.my3w.com/','116.53.253.202','y');
INSERT INTO xiaoyublog_comment VALUES('2','1','1','1469619478','小昱','@小昱：O(∩_�\�)O哈哈~','731734107@qq.com','http://qxu1590370181.my3w.com/','116.53.253.202','y');
INSERT INTO xiaoyublog_comment VALUES('3','7','0','1470140037','聆听','�\�','3087410749@qq.com','http://user.qzone.qq.com/3087410749','182.242.246.205','y');

DROP TABLE IF EXISTS xiaoyublog_options;
CREATE TABLE `xiaoyublog_options` (
  `option_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) NOT NULL,
  `option_value` longtext NOT NULL,
  PRIMARY KEY (`option_id`),
  KEY `option_name` (`option_name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_options VALUES('1','blogname','小昱个人博客');
INSERT INTO xiaoyublog_options VALUES('2','bloginfo','欢迎来到小昱的世�\�');
INSERT INTO xiaoyublog_options VALUES('3','site_title','小昱个人博客');
INSERT INTO xiaoyublog_options VALUES('4','site_description','小昱的个人博客，欢迎大家访问�\�');
INSERT INTO xiaoyublog_options VALUES('5','site_key','全在�\�,小昱,小昱个人网站,小昱个人博客,小昱之家');
INSERT INTO xiaoyublog_options VALUES('6','log_title_style','1');
INSERT INTO xiaoyublog_options VALUES('7','blogurl','http://localhost/www.xiaoyulive.top/');
INSERT INTO xiaoyublog_options VALUES('8','icp','');
INSERT INTO xiaoyublog_options VALUES('9','footer_info','小昱之家');
INSERT INTO xiaoyublog_options VALUES('10','admin_perpage_num','15');
INSERT INTO xiaoyublog_options VALUES('11','rss_output_num','0');
INSERT INTO xiaoyublog_options VALUES('12','rss_output_fulltext','y');
INSERT INTO xiaoyublog_options VALUES('13','index_lognum','20');
INSERT INTO xiaoyublog_options VALUES('14','index_comnum','10');
INSERT INTO xiaoyublog_options VALUES('15','index_twnum','10');
INSERT INTO xiaoyublog_options VALUES('16','index_newtwnum','5');
INSERT INTO xiaoyublog_options VALUES('17','index_newlognum','5');
INSERT INTO xiaoyublog_options VALUES('18','index_randlognum','5');
INSERT INTO xiaoyublog_options VALUES('19','index_hotlognum','5');
INSERT INTO xiaoyublog_options VALUES('20','comment_subnum','20');
INSERT INTO xiaoyublog_options VALUES('21','nonce_templet','bowenguangji');
INSERT INTO xiaoyublog_options VALUES('22','admin_style','green');
INSERT INTO xiaoyublog_options VALUES('23','tpl_sidenum','1');
INSERT INTO xiaoyublog_options VALUES('24','comment_code','n');
INSERT INTO xiaoyublog_options VALUES('25','comment_needchinese','y');
INSERT INTO xiaoyublog_options VALUES('26','comment_interval','60');
INSERT INTO xiaoyublog_options VALUES('27','isgravatar','y');
INSERT INTO xiaoyublog_options VALUES('28','isthumbnail','y');
INSERT INTO xiaoyublog_options VALUES('29','att_maxsize','20480');
INSERT INTO xiaoyublog_options VALUES('30','att_type','rar,zip,gif,jpg,jpeg,png,txt,pdf,docx,doc,xls,xlsx');
INSERT INTO xiaoyublog_options VALUES('31','att_imgmaxw','420');
INSERT INTO xiaoyublog_options VALUES('32','att_imgmaxh','460');
INSERT INTO xiaoyublog_options VALUES('33','comment_paging','y');
INSERT INTO xiaoyublog_options VALUES('34','comment_pnum','10');
INSERT INTO xiaoyublog_options VALUES('35','comment_order','newer');
INSERT INTO xiaoyublog_options VALUES('36','login_code','n');
INSERT INTO xiaoyublog_options VALUES('37','reply_code','n');
INSERT INTO xiaoyublog_options VALUES('38','iscomment','y');
INSERT INTO xiaoyublog_options VALUES('39','ischkcomment','y');
INSERT INTO xiaoyublog_options VALUES('40','ischkreply','n');
INSERT INTO xiaoyublog_options VALUES('41','isurlrewrite','0');
INSERT INTO xiaoyublog_options VALUES('42','isalias','y');
INSERT INTO xiaoyublog_options VALUES('43','isalias_html','y');
INSERT INTO xiaoyublog_options VALUES('44','isgzipenable','y');
INSERT INTO xiaoyublog_options VALUES('45','isxmlrpcenable','y');
INSERT INTO xiaoyublog_options VALUES('46','ismobile','n');
INSERT INTO xiaoyublog_options VALUES('47','isexcerpt','y');
INSERT INTO xiaoyublog_options VALUES('48','excerpt_subnum','300');
INSERT INTO xiaoyublog_options VALUES('49','istwitter','y');
INSERT INTO xiaoyublog_options VALUES('50','istreply','y');
INSERT INTO xiaoyublog_options VALUES('51','topimg','');
INSERT INTO xiaoyublog_options VALUES('52','custom_topimgs','a:0:{}');
INSERT INTO xiaoyublog_options VALUES('53','timezone','8');
INSERT INTO xiaoyublog_options VALUES('54','active_plugins','a:15:{i:0;s:27:\"tpl_options/tpl_options.php\";i:5;s:31:\"qiukong_qiniu/qiukong_qiniu.php\";i:6;s:19:\"sitemap/sitemap.php\";i:11;s:21:\"kl_album/kl_album.php\";i:13;s:29:\"kmi_DaoVoice/kmi_DaoVoice.php\";i:17;s:23:\"bd_submit/bd_submit.php\";i:19;s:17:\"zgboke/zgboke.php\";i:21;s:21:\"links_go/links_go.php\";i:24;s:17:\"cpdown/cpdown.php\";i:26;s:13:\"digg/digg.php\";i:27;s:31:\"Liang_zsshare/Liang_zsshare.php\";i:30;s:35:\"advancemarkdown/advancemarkdown.php\";i:32;s:33:\"emlog_markdown/emlog_markdown.php\";i:33;s:25:\"githubsync/githubsync.php\";i:34;s:15:\"gbook/gbook.php\";}');
INSERT INTO xiaoyublog_options VALUES('55','widget_title','a:13:{s:7:\"blogger\";s:12:\"个人资料\";s:8:\"calendar\";s:6:\"日历\";s:7:\"twitter\";s:12:\"最新微�\�\";s:3:\"tag\";s:6:\"标签\";s:4:\"sort\";s:6:\"分类\";s:7:\"archive\";s:6:\"存档\";s:7:\"newcomm\";s:12:\"最新评�\�\";s:6:\"newlog\";s:12:\"最新文�\�\";s:10:\"random_log\";s:12:\"随机文章\";s:6:\"hotlog\";s:12:\"热门文章\";s:4:\"link\";s:6:\"链接\";s:6:\"search\";s:6:\"搜索\";s:11:\"custom_text\";s:15:\"自定义组�\�\";}');
INSERT INTO xiaoyublog_options VALUES('56','custom_widget','a:0:{}');
INSERT INTO xiaoyublog_options VALUES('57','widgets1','a:8:{i:0;s:7:\"blogger\";i:1;s:6:\"search\";i:2;s:4:\"sort\";i:3;s:3:\"tag\";i:4;s:8:\"calendar\";i:5;s:7:\"archive\";i:6;s:7:\"newcomm\";i:7;s:4:\"link\";}');
INSERT INTO xiaoyublog_options VALUES('58','widgets2','');
INSERT INTO xiaoyublog_options VALUES('59','widgets3','');
INSERT INTO xiaoyublog_options VALUES('60','widgets4','');
INSERT INTO xiaoyublog_options VALUES('61','yls_reg_enable','n');
INSERT INTO xiaoyublog_options VALUES('62','kl_album_config','a:0:{}');
INSERT INTO xiaoyublog_options VALUES('63','kl_album_info','a:1:{i:0;a:4:{s:4:\"name\";s:9:\"新相�\�\";s:11:\"description\";s:10:\"2017-06-05\";s:8:\"restrict\";s:6:\"public\";s:7:\"addtime\";i:1496659195;}}');
INSERT INTO xiaoyublog_options VALUES('64','gbook_active','1');

DROP TABLE IF EXISTS xiaoyublog_navi;
CREATE TABLE `xiaoyublog_navi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naviname` varchar(30) NOT NULL DEFAULT '',
  `url` varchar(75) NOT NULL DEFAULT '',
  `newtab` enum('n','y') NOT NULL DEFAULT 'n',
  `hide` enum('n','y') NOT NULL DEFAULT 'n',
  `taxis` int(10) unsigned NOT NULL DEFAULT '0',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `isdefault` enum('n','y') NOT NULL DEFAULT 'n',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `type_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_navi VALUES('1','首页','','n','n','1','0','y','1','0');
INSERT INTO xiaoyublog_navi VALUES('2','微语','t','n','n','2','0','y','2','0');
INSERT INTO xiaoyublog_navi VALUES('3','登录','admin','n','y','900','0','y','3','0');
INSERT INTO xiaoyublog_navi VALUES('13','Node.js','','n','y','40','0','n','4','14');
INSERT INTO xiaoyublog_navi VALUES('5','注册','http://localhost/xiaoyulive.top/blog/?plugin=yls_reg','n','y','900','0','n','0','0');
INSERT INTO xiaoyublog_navi VALUES('12','JAVA','','n','y','30','0','n','4','13');
INSERT INTO xiaoyublog_navi VALUES('11','PHP','','n','y','20','0','n','4','10');
INSERT INTO xiaoyublog_navi VALUES('10','前端','','n','n','10','0','n','4','9');
INSERT INTO xiaoyublog_navi VALUES('9','相册','?plugin=kl_album','n','n','3','0','y','2','0');
INSERT INTO xiaoyublog_navi VALUES('14','运维','','n','y','60','0','n','4','15');
INSERT INTO xiaoyublog_navi VALUES('18','数据�\�','','n','y','70','0','n','4','16');
INSERT INTO xiaoyublog_navi VALUES('16','开发工�\�','','n','y','80','0','n','4','31');
INSERT INTO xiaoyublog_navi VALUES('17','博文','','n','n','90','0','n','4','11');

DROP TABLE IF EXISTS xiaoyublog_reply;
CREATE TABLE `xiaoyublog_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(10) unsigned NOT NULL DEFAULT '0',
  `date` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `hide` enum('n','y') NOT NULL DEFAULT 'n',
  `ip` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `gid` (`tid`) USING BTREE,
  KEY `hide` (`hide`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_reply VALUES('1','18','1484401526','小昱','哈哈','n','');
INSERT INTO xiaoyublog_reply VALUES('2','18','1484401591','测试','123','n','');

DROP TABLE IF EXISTS xiaoyublog_sort;
CREATE TABLE `xiaoyublog_sort` (
  `sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sortname` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(200) NOT NULL DEFAULT '',
  `taxis` int(10) unsigned NOT NULL DEFAULT '0',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_sort VALUES('1','日志','category9-5','905','11','','');
INSERT INTO xiaoyublog_sort VALUES('12','心语','category9-1','901','11','','');
INSERT INTO xiaoyublog_sort VALUES('4','美文','category9-2','902','11','','');
INSERT INTO xiaoyublog_sort VALUES('5','禅语','category9-3','903','11','','');
INSERT INTO xiaoyublog_sort VALUES('7','动�\�','category9-6','906','11','','');
INSERT INTO xiaoyublog_sort VALUES('8','摘录','category9-4','904','11','','');
INSERT INTO xiaoyublog_sort VALUES('9','前端','category1','100','0','前端开�\�','');
INSERT INTO xiaoyublog_sort VALUES('10','PHP','category2','200','0','PHP开�\�','');
INSERT INTO xiaoyublog_sort VALUES('11','博文','category9','900','0','','');
INSERT INTO xiaoyublog_sort VALUES('13','JAVA','category3','300','0','JAVA开�\�','');
INSERT INTO xiaoyublog_sort VALUES('14','Node.js','category4','400','0','Node.js开�\�','');
INSERT INTO xiaoyublog_sort VALUES('15','运维','category5','500','0','运维','');
INSERT INTO xiaoyublog_sort VALUES('16','数据�\�','category6','600','0','数据�\�','');
INSERT INTO xiaoyublog_sort VALUES('17','HTML+CSS','category1-1','101','9','','');
INSERT INTO xiaoyublog_sort VALUES('18','HTML5','category1-2','102','9','','');
INSERT INTO xiaoyublog_sort VALUES('19','CSS3','category1-3','103','9','','');
INSERT INTO xiaoyublog_sort VALUES('20','jQuery','category1-4','104','9','','');
INSERT INTO xiaoyublog_sort VALUES('21','Bootstrap','category1-5','105','9','','');
INSERT INTO xiaoyublog_sort VALUES('22','移动�\�','category1-6','106','9','','');
INSERT INTO xiaoyublog_sort VALUES('23','自动构建','category1-7','107','9','','');
INSERT INTO xiaoyublog_sort VALUES('24','Vue','category1-8','108','9','','');
INSERT INTO xiaoyublog_sort VALUES('25','Angular','category1-9','109','9','','');
INSERT INTO xiaoyublog_sort VALUES('26','React','category1-10','110','9','','');
INSERT INTO xiaoyublog_sort VALUES('27','smarty','category2-1','201','10','','');
INSERT INTO xiaoyublog_sort VALUES('28','ThinkPHP','category2-2','202','10','','');
INSERT INTO xiaoyublog_sort VALUES('31','开发工�\�','category7','700','0','','');
INSERT INTO xiaoyublog_sort VALUES('30','JavaSE','category3-1','301','13','','');
INSERT INTO xiaoyublog_sort VALUES('32','sublime','category7-1','701','31','','');
INSERT INTO xiaoyublog_sort VALUES('33','WebStrom','category7-2','702','31','','');
INSERT INTO xiaoyublog_sort VALUES('34','HBuilder','category7-3','703','31','','');
INSERT INTO xiaoyublog_sort VALUES('35','Eclipse','category7-4','704','31','','');
INSERT INTO xiaoyublog_sort VALUES('36','阿里�\�','category5-1','501','15','','');
INSERT INTO xiaoyublog_sort VALUES('37','Linux','category5-2','502','15','','');
INSERT INTO xiaoyublog_sort VALUES('38','Windows','category5-3','503','15','','');
INSERT INTO xiaoyublog_sort VALUES('39','JavaEE','category3-2','302','13','','');
INSERT INTO xiaoyublog_sort VALUES('40','SSH','category3-3','303','13','','');

DROP TABLE IF EXISTS xiaoyublog_link;
CREATE TABLE `xiaoyublog_link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` varchar(30) NOT NULL DEFAULT '',
  `siteurl` varchar(75) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `hide` enum('n','y') NOT NULL DEFAULT 'n',
  `taxis` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_link VALUES('2','小昱个人博客','http://www.xiaoyulive.top','小昱个人博客','n','0');
INSERT INTO xiaoyublog_link VALUES('3','小昱个人介绍','http://www.xiaoyulive.top/welcome','小昱个人介绍','n','0');
INSERT INTO xiaoyublog_link VALUES('4','阮一峰个人网�\�','http://www.ruanyifeng.com/home.html','阮一峰个人网�\�','n','0');
INSERT INTO xiaoyublog_link VALUES('5','汤姆大叔 - 博客�\�','http://www.cnblogs.com/TomXu/','汤姆大叔 - 博客�\�','n','0');
INSERT INTO xiaoyublog_link VALUES('7','廖雪峰个人网�\�','http://www.liaoxuefeng.com','廖雪峰个人网�\�','n','0');
INSERT INTO xiaoyublog_link VALUES('8','孔壹学院','http://kongyixueyuan.cn','孔壹学院','n','0');
INSERT INTO xiaoyublog_link VALUES('9','余鹏个人网站','http://www.52learn.wang','余鹏个人网站','n','0');

DROP TABLE IF EXISTS xiaoyublog_tag;
CREATE TABLE `xiaoyublog_tag` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagname` varchar(60) NOT NULL DEFAULT '',
  `gid` text NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `tagname` (`tagname`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_tag VALUES('1','welcome',',1,');
INSERT INTO xiaoyublog_tag VALUES('2','IT',',7,');
INSERT INTO xiaoyublog_tag VALUES('3','双子',',11,12,13,');
INSERT INTO xiaoyublog_tag VALUES('4','摩羯',',11,12,13,');
INSERT INTO xiaoyublog_tag VALUES('6','前端',',19,20,21,22,26,62,');
INSERT INTO xiaoyublog_tag VALUES('7','HTML',',19,26,62,');
INSERT INTO xiaoyublog_tag VALUES('8','CSS',',19,26,62,');
INSERT INTO xiaoyublog_tag VALUES('9','案例',',20,21,22,');
INSERT INTO xiaoyublog_tag VALUES('11','兼容�\�',',62,');

DROP TABLE IF EXISTS xiaoyublog_twitter;
CREATE TABLE `xiaoyublog_twitter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `author` int(10) NOT NULL DEFAULT '1',
  `date` bigint(20) NOT NULL,
  `replynum` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `author` (`author`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_twitter VALUES('4','女人可以无脑，但不可以无胸�\�\r\n男人可以无钱，但不可以无志�\�','','1','1470145903','0');
INSERT INTO xiaoyublog_twitter VALUES('3','不忘初心，方得始�\�!','','1','1469618087','0');
INSERT INTO xiaoyublog_twitter VALUES('5','不以物喜，不以己悲�\�','','1','1470153493','0');
INSERT INTO xiaoyublog_twitter VALUES('6','充满鲜花的世界到底在哪里,如果它真的存在那么我一定会�\�','content/uploadfile/201609/thum-a03f1472906266.jpg','1','1472906268','0');
INSERT INTO xiaoyublog_twitter VALUES('7','不慕繁华，不避尘世，创造自己稳稳的幸福[呵呵]','','1','1472919611','0');
INSERT INTO xiaoyublog_twitter VALUES('8','真正的朋友，是能够伴你度过寂寞、孤独以及沉默的那个�\�','','1','1472920720','0');
INSERT INTO xiaoyublog_twitter VALUES('9','一次就好，我带你去看天荒地�\�','','1','1472920789','0');
INSERT INTO xiaoyublog_twitter VALUES('10','富不学习富不长，穷不学习穷不�\�','','1','1472920890','0');
INSERT INTO xiaoyublog_twitter VALUES('11','有志不在年高，无志空活百�\�','','1','1472920975','0');
INSERT INTO xiaoyublog_twitter VALUES('12','别人不能曾为阻碍你做选择的理由，考虑清楚自己究竟想要怎样的生�\�','','1','1472921123','0');
INSERT INTO xiaoyublog_twitter VALUES('13','待我若初见，葬我以时�\�','','1','1472921182','0');
INSERT INTO xiaoyublog_twitter VALUES('14','我们可以平凡，但绝对不可以平�\�','','1','1472921255','0');
INSERT INTO xiaoyublog_twitter VALUES('15','路可以回头看，却不可以回头走，不求尽如我意，但求无愧于心','','1','1472921377','0');
INSERT INTO xiaoyublog_twitter VALUES('16','你只闻到我的香水，却没看到我的汗�\�; 你有你的规则，我有我的选择; 哪怕遍体鳞伤，也要活的漂亮�\�','','1','1472921577','0');
INSERT INTO xiaoyublog_twitter VALUES('17','真正的朋友，是能够伴你度过寂寞、孤独以及沉默的那个�\�','content/uploadfile/201609/thum-212b1472956671.jpg','1','1472956673','0');
INSERT INTO xiaoyublog_twitter VALUES('18','每一个看似风平浪静的现在都有一个暗潮汹涌的曾经','content/uploadfile/201609/thum-47611473046457.jpg','1','1473046459','2');

DROP TABLE IF EXISTS xiaoyublog_user;
CREATE TABLE `xiaoyublog_user` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL DEFAULT '',
  `nickname` varchar(20) NOT NULL DEFAULT '',
  `role` varchar(60) NOT NULL DEFAULT '',
  `ischeck` enum('n','y') NOT NULL DEFAULT 'n',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`uid`),
  KEY `username` (`username`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_user VALUES('1','admin','$P$Bar4tCSC9n0bb.FST7bVfrCVoekeCU1','小昱','admin','n','../content/uploadfile/201607/369b1469610556.jpeg','731734107@qq.com','不忘初心 方得始终');
INSERT INTO xiaoyublog_user VALUES('2','test','$P$BqaQ.Ds0nfCab8hQaSotJCuNVKaiPA0','','writer','y','','','');

DROP TABLE IF EXISTS xiaoyublog_tpl_options_data;
CREATE TABLE `xiaoyublog_tpl_options_data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `template` char(64) NOT NULL,
  `name` char(64) NOT NULL,
  `depend` char(64) NOT NULL DEFAULT '',
  `data` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `template` (`template`,`name`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=774 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_tpl_options_data VALUES('235','heiseyouhuo','index_logo','','s:46:\"content/uploadfile/tpl_options//index_logo.jpg\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('236','heiseyouhuo','side_logo','','s:47:\"content/templates/heiseyouhuo/images/photos.jpg\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('237','heiseyouhuo','index_baner','','s:162:\"<p>\r\n	The best life is use of willing attitude, a happy-go-lucky life.\r\n</p>\r\n<p>\r\n	最好的生活是用心甘情愿的态度，过随遇而安的生活�\�\r\n</p>\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('238','heiseyouhuo','side_zl','','s:202:\"<p>\r\n	网名：世纪的�\�\r\n</p>\r\n<p>\r\n	学校：云南师范大�\�\r\n</p>\r\n<p>\r\n	籍贯：云南省昭通市巧家�\�\r\n</p>\r\n<p>\r\n	电话�\�183********\r\n</p>\r\n<p>\r\n	邮箱：quanzaiyu@outlook.com\r\n</p>\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('239','heiseyouhuo','index_so','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('240','heiseyouhuo','echo_so','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('343','xiaoyu','index_logo','','s:40:\"content/templates/xiaoyu/images/logo.png\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('344','xiaoyu','side_logo','','s:42:\"content/templates/xiaoyu/images/photos.jpg\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('345','xiaoyu','index_baner','','s:162:\"<p>\r\n	The best life is use of willing attitude, a happy-go-lucky life.\r\n</p>\r\n<p>\r\n	最好的生活是用心甘情愿的态度，过随遇而安的生活�\�\r\n</p>\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('346','xiaoyu','side_zl','','s:209:\"<p>\r\n	网名：世纪的�\�\r\n</p>\r\n<p>\r\n	职业：Web前端工程师、全栈工程师\r\n</p>\r\n<p>\r\n	籍贯：云南昭通巧�\�\r\n</p>\r\n<p>\r\n	电话�\�183****9782\r\n</p>\r\n<p>\r\n	邮箱：quanzaiyu@gmail.com\r\n</p>\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('347','xiaoyu','index_so','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('348','xiaoyu','echo_so','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('749','bowenguangji','logo','','s:46:\"content/templates/bowenguangji/images/logo.png\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('750','bowenguangji','bwgj_cur','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('751','bowenguangji','bwgj_logo2','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('752','bowenguangji','nav_shouqi','','s:2:\"no\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('753','bowenguangji','sygg','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('754','bowenguangji','ad_1','','s:2:\"no\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('755','bowenguangji','ad1_dm','','s:95:\"<img src=\"http://www.xiaoyulive.top/content/templates/bowenguangji/images/ad.png\" alt=\"广告\">\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('756','bowenguangji','ad_2','','s:2:\"no\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('757','bowenguangji','ad2_dm','','s:96:\"<img src=\"http://www.xiaoyulive.top/content/templates/bowenguangji/images/ad2.png\" alt=\"广告\">\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('758','bowenguangji','sy_pinglun','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('759','bowenguangji','rz_pinglun','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('760','bowenguangji','dibuhf','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('761','bowenguangji','bowen_book','','s:8:\"/welcome\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('762','bowenguangji','xgrz-kh','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('763','bowenguangji','banquan-kh','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('764','bowenguangji','music-kh','','s:2:\"no\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('765','bowenguangji','music','','s:178:\"<iframe frameborder=\"no\" border=\"0\" marginwidth=\"0\" marginheight=\"0\" width=296 height=450 src=\"http://music.163.com/outchain/player?type=1&id=3164858&auto=0&height=430\"></iframe>\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('766','bowenguangji','music-bt','','s:12:\"推荐音乐\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('767','bowenguangji','tongji-kh','','s:3:\"yes\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('768','bowenguangji','tjrq','','s:10:\"2014-04-24\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('769','bowenguangji','dibu_tj','','s:9:\"2015-2017\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('770','bowenguangji','ad-kh','','s:2:\"no\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('771','bowenguangji','cbl_adgg','','s:733:\"<a href=\"JavaScript:;\" title=\"图片广告招租�\�50�\�1月�\�\" target=\"_blank\"><img src=\"http://localhost/xiaoyulive.top/blog/content/templates/bowenguangji/images/guanggao.gif\"></a><br>\r\n<li class=\"wzgg1\"><a href=\"JavaScript:;\" class=\"shake shake-little\" title=\"文字招租�\�1�\�10元起\" target=\"_blank\">\r\n文字招租1�\�1�\�10元起\r\n</a></li>\r\n<li class=\"wzgg2\"><a href=\"JavaScript:;\" title=\"文字招租�\�1�\�10元起\" target=\"_blank\">\r\n文字招租2�\�1�\�10元起\r\n</a></li>\r\n<li class=\"wzgg3\"><a href=\"JavaScript:;\" title=\"本广告文字招�\�\" target=\"_blank\">\r\n文字招租3�\�1�\�10元起\r\n</a></li>\r\n<li class=\"wzgg4\"><a href=\"JavaScript:;\" title=\"文字招租�\�1�\�10元起\">文字招租4�\�1�\�10元起</a></li>\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('772','bowenguangji','dibu-zdy','','s:368:\"<!--\r\n<a href=\"http://www.qpjk.cc/19\" title=\"喜欢本站，捐赠支持！\">捐赠支持</a>|\r\n<a href=\"http://#\" title=\"自定义链�\�\">自定义链�\�</a>|\r\n<a href=\"http://#\" title=\"自定义链接！\">自定义链�\�</a>|\r\n<a href=\"http://#\" title=\"站长到底是何方人物！�\�\">自定义链�\�</a>|\r\n-->\r\n<a href=\"m/\" title=\"手机版本\">手机版本</a>|\";');
INSERT INTO xiaoyublog_tpl_options_data VALUES('773','bowenguangji','cbl_link','','s:3:\"yes\";');

DROP TABLE IF EXISTS xiaoyublog_kl_album;
CREATE TABLE `xiaoyublog_kl_album` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `truename` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` text,
  `album` varchar(255) NOT NULL,
  `addtime` int(10) NOT NULL DEFAULT '0',
  `w` smallint(5) NOT NULL DEFAULT '0',
  `h` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO xiaoyublog_kl_album VALUES('1','03.png','../content/plugins/kl_album/upload/201706/thum-9a11768d2c2eea7c331011b06a7d4eb2201706051915451292292854.png','2017-06-05','1496659195','1496661345','100','75');
INSERT INTO xiaoyublog_kl_album VALUES('2','012.png','../content/plugins/kl_album/upload/201706/thum-b87e47157502b85496141a4fd2b38b7020170605192040673074689.png','2017-06-05','1496659195','1496661640','100','88');

DROP TABLE IF EXISTS xiaoyublog_gbook;
CREATE TABLE `xiaoyublog_gbook` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `time` bigint(20) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(20) NOT NULL DEFAULT '',
  `siteurl` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `sex` varchar(4) NOT NULL DEFAULT '未知',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `pass` tinyint(2) NOT NULL DEFAULT '1',
  `uid` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='EMLOG独立留言表';

INSERT INTO xiaoyublog_gbook VALUES('1','1496741986','0','秦时明月','kurly@foxmail.com','http://www.myemlog.com/','','87419525','�\�','','欢迎使用EMLOG独立留言�\�','1','0');

DROP TABLE IF EXISTS xiaoyublog_gbook_opts;
CREATE TABLE `xiaoyublog_gbook_opts` (
  `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `value` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='留言设置';

INSERT INTO xiaoyublog_gbook_opts VALUES('1','duration','15');
INSERT INTO xiaoyublog_gbook_opts VALUES('2','indexPerPageNum','10');
INSERT INTO xiaoyublog_gbook_opts VALUES('3','adminPerPageNum','10');
INSERT INTO xiaoyublog_gbook_opts VALUES('4','formpos','0');
INSERT INTO xiaoyublog_gbook_opts VALUES('5','emlypage','0');
INSERT INTO xiaoyublog_gbook_opts VALUES('6','show_form','1');
INSERT INTO xiaoyublog_gbook_opts VALUES('7','show_front','1');
INSERT INTO xiaoyublog_gbook_opts VALUES('8','show_verify','1');
INSERT INTO xiaoyublog_gbook_opts VALUES('9','show_nickname','1');
INSERT INTO xiaoyublog_gbook_opts VALUES('10','show_time','1');
INSERT INTO xiaoyublog_gbook_opts VALUES('11','show_siteurl','1');
INSERT INTO xiaoyublog_gbook_opts VALUES('12','show_sex','0');
INSERT INTO xiaoyublog_gbook_opts VALUES('13','show_content','1');
INSERT INTO xiaoyublog_gbook_opts VALUES('14','need_check','1');
INSERT INTO xiaoyublog_gbook_opts VALUES('15','need_login','0');
INSERT INTO xiaoyublog_gbook_opts VALUES('16','is_nickname','1');
INSERT INTO xiaoyublog_gbook_opts VALUES('17','is_email','2');
INSERT INTO xiaoyublog_gbook_opts VALUES('18','is_siteurl','2');
INSERT INTO xiaoyublog_gbook_opts VALUES('19','is_phone','2');
INSERT INTO xiaoyublog_gbook_opts VALUES('20','is_qq','2');
INSERT INTO xiaoyublog_gbook_opts VALUES('21','is_sex','2');
INSERT INTO xiaoyublog_gbook_opts VALUES('22','is_content','1');


#the end of backup