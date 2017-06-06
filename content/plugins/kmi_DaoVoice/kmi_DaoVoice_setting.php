<?php
!defined('EMLOG_ROOT') && exit('出错了！！！!');

function plugin_setting_view(){
require_once 'kmi_DaoVoice_config.php';
?>
<div class="kmi_DaoVoice">
<span style=" font-size:18px; font-weight:bold;">配置文件</span><?php if(isset($_GET['setting'])){echo "<span class='actived'>设置保存成功!</span>";}?><br />
<br />
<form action="plugin.php?plugin=kmi_DaoVoice&action=setting" method="post">
<ul>
<li><h4>app_id</h4>
<div class="one"><input type="text" class="txt" name="app_id" value="<?php echo $config["app_id"];?>" size="33"/></div>
<p>填写app_id自己去<a href="http://www.daocloud.io/dcv" target="_blank">http://www.daocloud.io/dcv</a>注册一个账号登陆，里面会有的。</p></li>
<div class="sl">注意事项：<br />
模板必须含有挂载点(没有请自行加上)：&lt;?php doAction('index_footer');?&gt;<br />
查看当前插件挂载点及说明：<a href="http://wiki.emlog.net/doku.php?id=plugindev" target="_blank">wiki.emlog.net/doku.php?id=plugindev</a><br /><br />
</div>
</ul>
<input type="submit" class="button" name="submit" value="保存设置" />
</form></div>
<?php }?>
<?php 
function plugin_setting(){
	require_once 'kmi_DaoVoice_config.php';
	$app_id = $_POST["app_id"]==""?"":$_POST["app_id"];
	$off = $_POST["off"]==""?"no":$_POST["off"];
	$newConfig = '<?php
$config = array(
    "app_id" => "'.$app_id.'",
	"off" => "'.$off.'",
);';
	echo $newConfig;
	@file_put_contents(EMLOG_ROOT.'/content/plugins/kmi_DaoVoice/kmi_DaoVoice_config.php', $newConfig);
}
?>