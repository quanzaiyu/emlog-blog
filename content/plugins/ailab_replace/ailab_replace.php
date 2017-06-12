<?php
/*
Plugin Name: 内容批量替换
Version: 1.0
ForEmlog:5.0.0+
Plugin URL:
Description: 为站长提供一个快速批量替换网站内容的小工具。
Author: 土著人宁巴
Author URL: http://blog.ailab.cn/
Author Email: lih062624@126.com
*/
!defined('EMLOG_ROOT') && exit('access deined!');
function ailab_replace(){
	 echo '<div class="sidebarsubmenu" id="ailab_replace"><a href="./plugin.php?plugin=ailab_replace">内容批量替换</a></div>';
}
addAction('adm_sidebar_ext','ailab_replace');
?>