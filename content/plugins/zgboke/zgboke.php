<?php
/*
Plugin Name: 中国博客联盟
Version: 1.1
Plugin URL: http://www.shuyong.net/
Description:博客可以通过安装zgboke插件快速部署联盟导航，简单高效！
ForEmlog:5.3.x
Author: 舍力
Author URL: http://www.shuyong.net/
*/

!defined('EMLOG_ROOT') && exit('access deined!');
function zgboke($logid){require_once 'zgboke_config.php';
if($config["sloff"]=='yes'){//所有文章页显示?>
<link href="<?php echo BLOG_URL;?>content/plugins/zgboke/zgboke.css" rel="stylesheet" type="text/css" />
<div class="zgboke"><script type="text/javascript" src="http://static.zgboke.com/hutui.js"></script></div>
<?php }//指定文章显示
if($config["sloff"]=='no'){if(in_array($logid['logid'],array($config['wzid'],$config['wzid1'],$config['wzid2'],$config['wzid3'],$config['wzid4']))){?>
<link href="<?php echo BLOG_URL;?>content/plugins/zgboke/zgboke.css" rel="stylesheet" type="text/css" />
<div class="zgboke"><script type="text/javascript" src="http://static.zgboke.com/hutui.js"></script></div>
<?php }}}?>

<?php 
function zgboke_menu(){
	echo '<div class="sidebarsubmenu"><a href="./plugin.php?plugin=zgboke">中国博客联盟</a></div>';
}?>

<?php 
addAction('log_related','zgboke');
addAction('adm_sidebar_ext', 'zgboke_menu');
?>