<?php
/*
Plugin Name: 蓝叶代码复制插件
Version: 2.0
Plugin URL: http://lanyes.org
Description: 为代码高亮添加复制功能
Author: 蓝叶
Author Email: w@lanyes.org
Author URL: http://lanyes.org
*/
!defined('EMLOG_ROOT') && exit('access deined!');
function lanye_zclip(){?>
<script type="text/javascript" src="<?php echo BLOG_URL;?>content/plugins/lanye_zclip/jquery.zclip.min.js"></script>
<style>pre .copy_code{position:absolute;top:0;right:0;padding:5px 10px;background:#EA5A47;color:#fff;cursor:pointer;}pre .copy_code:after{content:"复制"};</style>
<script>$(document).ready(function(){$("pre").css('position','relative').append("<span class='copy_code'></span>");$('.copy_code').zclip({path: "<?php echo BLOG_URL;?>content/plugins/lanye_zclip/ZeroClipboard.swf",copy: function(){return $(this).parent().text();}});});</script>
<?php }
addAction('log_related', 'lanye_zclip');