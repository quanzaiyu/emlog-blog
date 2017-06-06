<?php
/*
Plugin Name: DaoVoice在线客服
Version: 1.0
Plugin URL: http://www.daocloud.io/
Description:给博客加入悬浮DaoVoice客服！
ForEmlog:5.3.x
Author: 左南
Author URL: http://www.kmiwz.com
*/

!defined('EMLOG_ROOT') && exit('access deined!');
function kmi_DaoVoice(){require_once 'kmi_DaoVoice_config.php';if($config["app_id"]){?>
<script>(function(i,s,o,g,r,a,m){i["DaoVoiceObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;a.charset="utf-8";m.parentNode.insertBefore(a,m)})(window,document,"script",
"https://widget.daovoice.io/widget/APP_ID.js","daovoice");</script>
<script>
  daovoice('init', {
    app_id: "<?php echo $config["app_id"];?>",
  });
  daovoice('update');
</script>
<?php }}?>

<?php 
function kmi_DaoVoice_menu(){
	echo '<div class="sidebarsubmenu"><a href="./plugin.php?plugin=kmi_DaoVoice">DaoVoice</a></div>';
}?>

<?php 
addAction('index_footer','kmi_DaoVoice');
addAction('adm_sidebar_ext', 'kmi_DaoVoice_menu');
?>
<style>
  #daodream-launcher{
    top: 20px!important;
  }
</style>
