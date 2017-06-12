<?php
/*
Plugin Name: 播放器
Version: 1.0
Plugin URL:http:/www.gw269.com/Technology/player
Description: 为博客添加音乐和视频播放器。<br/>使用方法：音乐播放器：[mp3]音乐地址[/mp3]，大视频播放器：[video]视频地址[/video]，小视频播放器(侧边栏使用)：[smallvideo]视频地址[/smallvideo]。<br/>
Author: GW
Author Email: cnczgw@gmail.com
Author URL: http://www.gw269.com
*/
!defined('EMLOG_ROOT') && exit('access deined!');

addAction('index_head', 'palyer');
function palyer() {
	$pluginurl = "content/plugins/player/player.swf";
	$pluginurl2 = "content/plugins/player/spbf.swf";
	$output = ob_get_clean();
	$output = preg_replace("|\[mp3\]|i",' <object type="application/x-shockwave-flash" data="'.BLOG_URL.''.$pluginurl.'?son=',$output);
	$output = preg_replace("|\[\/mp3\]|i",'&autoplay=1&autoreplay=1" width="180" height="20"></object>    ',$output);
	
	$output = preg_replace("|\[video\]|i",'<embed src="'.BLOG_URL.''.$pluginurl2.'?vcastr_file=',$output);
	$output = preg_replace("|\[\/video\]|i",'" type="application/x-shockwave-flash" width="550" height="400" quality="high',$output);
	$output = preg_replace("|\[smallvideo\]|i",'<embed src="'.BLOG_URL.''.$pluginurl2.'?vcastr_file=',$output);
	$output = preg_replace("|\[\/smallvideo\]|i",'" type="application/x-shockwave-flash" width="180" height="150" quality="high',$output);
	ob_start();
	echo $output;
}
addAction('index_footer','palyer');