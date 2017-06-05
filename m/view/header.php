<?php 
/**
 *
 * @copyright (c) Xiaoyulive All Rights Reserved
 * 
 */

if(!defined('EMLOG_ROOT')) {exit('error!');}
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $log_title; ?> <?php echo Option::get('blogname'); ?></title>
<style type="text/css" id="internalStyle">
body{background-color:#f2f2f2;font-size:14px;margin:0;padding:0;font-family:Helvetica, Arial, sans-serif;-webkit-text-size-adjust:none;background-image:url('<?php echo BLOG_URL; ?>m/view/bg.jpg');background-repeat:repeat;background-position:top center;background-attachment:scroll;}
a:link,a:visited,a:hover,a:active{text-decoration:none;color:#333;}
input{margin-right:10px;border:1px solid #ccf;background-color:transparent;font-size:12px;}
textarea{margin-right:10px;border:1px solid #ccf;background-color:transparent;font-size:12px;}
#top{padding:10px 8px;}
#footer{font-weight:700;padding:8px;border:1px solid #aaa;-webkit-box-shadow:#aaa 0 0 5px;-moz-box-shadow:#aaa 0 0 5px;box-shadow:#aaa 0 0 5px;margin:5px;}
.footer{color:#333;}
#page{text-align:center;padding:6px 0;}
#page span{color:#1BA1E2;border-bottom:5px solid #1BA1E2;padding: 2px;margin-right: 2px;margin-left: 2px;}
#page a{border-bottom:5px solid #ccc;padding:2px;margin-top: 0;margin-right: 2px;margin-bottom: 0;margin-left: 2px;}
#m{padding:10px;border:1px solid #aaa;-webkit-box-shadow:#aaa 0 0 5px;-moz-box-shadow:#aaa 0 0 5px;box-shadow:#aaa 0 0 5px;margin:5px;}
#blogname{font-weight:bolder;color:#1BA1E2;font-size:20px;}
#blogname span{font-size:12px;color:#F09609;font-weight:400;}
#navi{padding:3px;text-align:right;border:1px solid #999;margin:5px;-webkit-box-shadow:#ccc 0 0 5px;-moz-box-shadow:#CCC 0 0 5px;box-shadow:#aaa 0 0 5px;}
#navi2{color:#F09609;border-bottom-width:1px;border-bottom-style:dashed;border-bottom-color:#CCC;margin-bottom:5px;padding-bottom:3px;}
#active{font-weight:700;font-size:16px;color:#1BA1E2;}
.title{font-weight:700;margin:10px 0 5px;}
.title a:link,a:active,a:visited,a:hover{color:#333360;text-decoration:none;}
.title span{color:#1BA1E2;text-shadow:1px 1px 2px #ccc;margin:0;padding:2px 40px 2px 0;}
.info{font-size:12px;color:#999;}
.info2{font-size:12px;border-bottom:#CCC dotted 1px;text-align:right;color:#666;margin:5px 0;padding:5px;}
.posttitle{font-size:16px;color:#1BA1E2;font-weight:700;text-shadow:1px 1px 2px #ccc;margin:0;padding:2px 40px 2px 0;}
.postinfo{font-size:12px;color:#999;border-bottom-width:thin;border-bottom-style:dashed;border-bottom-color:#ddd;padding-bottom:5px;}
.postcont{margin-bottom:5px;padding-right:0;padding-bottom:6px;padding-left:0;}
.t{padding:5px;border:1px solid #aaa;-webkit-box-shadow:#aaa 0 0 5px;-moz-box-shadow:#aaa 0 0 5px;box-shadow:#aaa 0 0 5px;margin:5px;}
.c{padding-top:5px;padding-right:10px;padding-bottom:10px;padding-left:10px;}
.l{border-bottom:1px solid #DDD;padding:10px 0;}
.twcont{color:#333;padding-top:12px;}
.twinfo{text-align:right;color:#999;border-bottom:1px solid #DDD;padding:8px 0;font-size:12px;}
.comcont{color:#333;padding:6px 0;}
.reply{color:#F30;font-size:12px;}
.cominfo{text-align:right;color:#999;border-bottom:1px solid #DDD;padding:8px 0;font-size:12px;}
.texts{width:92%;height:200px;}
.excerpt{width:92%;height:100px;}
.postcont img {max-width: 100%;height:auto}
.postcont embed {max-width: 100%;height:auto}
</style>
</head>
<body>
<div id="top" name="top">
  <div id="blogname"><?php echo Option::get('blogname'); ?><br />
    <span><?php echo Option::get('bloginfo'); ?></span></div>
</div>
