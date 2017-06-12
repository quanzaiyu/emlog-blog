<?php if(!defined('EMLOG_ROOT')){die('err');} ?>
<?php
global $CACHE;
$options_cache=$CACHE->readCache('options');
$navibar=unserialize($options_cache['navibar']);
$blogname=$options_cache['blogname'];
$bloginfo=$options_cache['bloginfo'];
$blogtitle=$options_cache['blogname'];
$description=$options_cache['bloginfo'];
$site_key=$options_cache['site_key'];
$icp=$options_cache['icp'];
$footer_info=$options_cache['footer_info'];
$site_title='匿名投稿 - '.$blogname;
$comments=array('commentStacks'=>array(),'commentPageUrl'=>'');
$log_content='
<style>
#ctitle{width:99%;}
#ccontent{width:99%;height:300px;}
#ctags{width:99%;}
#cimg{vertical-align:middle;}
#tietuku_pick{max-width:35%;}
#tietuku_list{margin:2px 0;font-size:12px;}
.tietuku_pic{margin:2px;width:200px;height:150px;display:inline-block;}
.tietuku_act{padding-top:55px;width:200px;height:95px;background:rgba(0,0,0,0.2);text-align:center;}
.tietuku_act a{color:#FFF;font-weight:bold;text-shadow:1px 1px 3px #000;}
.cline{margin:6px 0;}
</style>
';
?>