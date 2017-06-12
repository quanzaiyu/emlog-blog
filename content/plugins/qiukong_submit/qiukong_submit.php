<?php
/*
Plugin Name: 匿名投稿
Version: 13
Description: 简单的匿名投稿插件
Author:	qiukong.com
Author URL:	http://qiukong.com
*/
if(!defined('EMLOG_ROOT')){die('err');}
function qiukong_submit_menu(){echo '<div class="sidebarsubmenu"><a href="./plugin.php?plugin=qiukong_submit">匿名投稿</a></div>';}
addAction('adm_sidebar_ext', 'qiukong_submit_menu');
?>