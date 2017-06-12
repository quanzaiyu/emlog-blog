<?php
/**
 * Plugin Name: 回复或分享微博可见
 * Version: 1.0
 * Plugin URL: http://www.liuzp.com/plug/7.html
 * Description: 可以将文章中任意部分内容隐藏，当访客通过评论或者腾讯微博分享后才能显示隐藏内容，为您的网站增加互动性和流量。　使用方法：[hide]这里是需要隐藏的内容[/hide]<br />
 * Author: Liuzp
 * Author Email: root@liuzp.com
 * Author URL: http://www.liuzp.com
 */

!defined('EMLOG_ROOT') && exit ('access deined!');

function share_view_list(){
	$share_view = ob_get_clean();
	$share_view = preg_replace("/\[hide\](.*)\[\/hide\]/Uims", '<p style="color:#f00;">此处内容已隐藏，请进入详细页查看</p>', $share_view);
	ob_start();
	echo $share_view;
}

function share_view($logData){
	$logid = $logData['logid'];
	$logurl = Url::log($logData['logid']);
	echo '<link href="/content/plugins/share_view/style.css" type="text/css" rel="stylesheet" />';
	$share_view = ob_get_clean();
	if($_COOKIE["shareView".$logid]=="0" || ROLE == "admin"){
		$share_view = preg_replace("/\[hide\](.*)\[\/hide\]/Uims", '<div class="hideConBox">\1</div>', $share_view);
	}else{
		$share_view = preg_replace("/\[hide\](.*)\[\/hide\]/Uims", '<div class="hideConBox">此处内容已隐藏，<a href="#comment-post">评论</a>或者<a href="'.BLOG_URL.'content/plugins/share_view/share_view_func.php?logid='.$logid.'"><img src="'.BLOG_URL.'content/plugins/share_view/images/qq.gif" /></a>即可查看</div>', $share_view);
	}
	ob_start();
	echo $share_view;
}

function comment_view(){
	setcookie("shareView".$_POST['gid'], "0", time()+36000000, "/");
}

addAction('index_footer','share_view_list');
addAction('log_related','share_view');
addAction('comment_saved', 'comment_view');