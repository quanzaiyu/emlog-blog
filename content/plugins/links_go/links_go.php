<?php
/*
Plugin Name: 外链跳转
Version: 1.3
Plugin URL：http://www.xlonewolf.net
Description: 这是一款外链管理系统，让您创建、管理，并通过使用自定义文章类型和301重定向跟踪从您的网站出站链接。
Author: lonewolf
Author URL: http://www.xemlog.net
*/

!defined('EMLOG_ROOT') && exit('access deined!');

mysql_query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."go` (
  `id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `siteurl` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");

define('PLUGINS_GO', BLOG_URL.'content/plugins/links_go/');

function go_menu(){
	echo '<div class="sidebarsubmenu" id="links_go"><a href="./plugin.php?plugin=links_go">外链跳转</a></div>';
}
addAction('adm_sidebar_ext', 'go_menu');