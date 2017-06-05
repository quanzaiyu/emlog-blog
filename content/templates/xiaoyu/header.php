<?php
/*
Template Name:小昱博客炫酷主题
Description:黑色炫酷主题<br/>主题说明：<a href="http://xiaoyulive.top" target="_blank">http://xiaoyulive.top</a>
Author:<a href="http://xiaoyulive.top/welcome" target="_blank">全在昱</a> 设计:<a href="http://xiaoyulive.top/welcome" target="_blank">小昱</a>
Version:1.0
Author Url:http://xiaoyulive.top/welcome
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<link href="<?php echo TEMPLATE_URL; ?>css/base.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>css/index.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="<?php echo TEMPLATE_URL; ?>js/modernizr.js"></script>
<![endif]-->

<!--[if  IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_URL; ?>css/ie.css" />
<![endif]-->

<!--[if  IE 7]>
<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_URL; ?>css/ie.css" />
<![endif]-->
<?php doAction('index_head',$logid); ?>
</head>
<body>
<div class="ibody">
  <header>
    <h1><?php echo $blogname; ?></h1>
    <h2>欢迎来到小昱的世界</h2>
    <div class="logo"><a href="<?php echo BLOG_URL; ?>"></a></div>
    <nav id="topnav">
<?php blog_navi();?>
    </nav>
  </header>

