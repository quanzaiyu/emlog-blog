<?php
/*
Template Name:水乡墨雅1.4 完美兼容版
Description:Mountain Ink 1.4 FOR EMLOG 5.0
Version:1.4
Author:LaoLuo
Author Url:http://blog.11ri.net/
Sidebar Amount:1
ForEmlog:5.1.2
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
<link href="<?php echo TEMPLATE_URL; ?>style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<?php doAction('index_head'); ?>
</head>
<body>
<!--done-->
<div id="home">
<div id="header">
	<div id="blogTitle">
	<h1><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></h1>
    <h2><?php echo $bloginfo; ?></h2>
<!--done-->
	</div>
	<div id="navigator">
	<?php blog_navi();?>
	</div>
</div><!--end: header 头部 -->