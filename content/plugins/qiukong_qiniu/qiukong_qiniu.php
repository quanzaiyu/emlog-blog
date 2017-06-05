<?php
/*
Plugin Name: 七牛图床
Version: 1
Description: 把图片上传到七牛云存储
Author: qiukong.com
Author URL: http://qiukong.com
*/
if(!defined('EMLOG_ROOT')){die('err');}
function qiukong_qiniu_head(){require 'qiukong_qiniu_output.php';echo '<span onclick="qiukong_qiniu_show(this);" class="show_advset">七牛图床</span>';}
function qiukong_qiniu_menu(){echo '<div class="sidebarsubmenu"><a href="./plugin.php?plugin=qiukong_qiniu">七牛图床</a></div>';}
addAction('adm_writelog_head', 'qiukong_qiniu_head');
addAction('adm_sidebar_ext', 'qiukong_qiniu_menu');