<?php
!defined('EMLOG_ROOT') && exit('出错了！！！!');

function plugin_setting_view(){
require_once 'zgboke_config.php';
?>
<div class="sl_zgboke">
<span style=" font-size:18px; font-weight:bold;">配置文件</span><?php if(isset($_GET['setting'])){echo "<span class='actived'>设置保存成功!</span>";}?><br />
<br />
<link href="<?php echo BLOG_URL;?>content/plugins/zgboke/zgboke.css" rel="stylesheet" type="text/css" />
<form action="plugin.php?plugin=zgboke&action=setting" method="post">
<ul>
<li><h4>显示位置</h4>
<div class="radio"><input type="radio" name="sloff" value="no" <?php if($config["sloff"]=='no'){echo 'checked="checked"';}?> /><label>指定文章显示</label></div>
<div class="radio"><input type="radio" name="sloff" value="yes" <?php if($config["sloff"]=='yes'){echo 'checked="checked"';}?> /><label>所有文章显示</label></div>
<p><?php if($config["sloff"] == 'no'){echo '<b>请正确填写下面需要显示的文章ID</b>';}else{echo '所有文章页面将显示本排行榜';}?></p>
</li>
<?php if($config["sloff"] == 'no'){?>
<li><h4>需要显示的文章ID</h4>
<div class="duo"><input type="text" class="wzid" name="wzid" value="<?php echo $config["wzid"];?>" size="1"/></div>
<div class="duo"><input type="text" class="wzid" name="wzid1" value="<?php echo $config["wzid1"];?>" size="1"/></div>
<div class="duo"><input type="text" class="wzid" name="wzid2" value="<?php echo $config["wzid2"];?>" size="1"/></div>
<div class="duo"><input type="text" class="wzid" name="wzid3" value="<?php echo $config["wzid3"];?>" size="1"/></div>
<div class="duo"><input type="text" class="wzid" name="wzid4" value="<?php echo $config["wzid4"];?>" size="1"/></div>
<p>每框仅限一个，不填写将不显示</p>
</li><?php }?>
<div class="sl">
注意事项：<br />
1、文章页(echo_log.php)和页面(page.php)模板必须含有挂载点：&lt;?php doAction('log_related',$logData);?&gt;<br />
如果没有，请在文章页(echo_log.php)和页面(page.php)你想要放入的位置加入代码：&lt;?php doAction('log_related',$logData);?&gt;即可；<br /><br />
2、插件问题反馈地址(其他途径反馈将不受理)：<a href="http://www.shuyong.net/zhidao.html" target="_blank">http://www.shuyong.net/zhidao.html</a><br /><br />
</ul>
<input type="submit" class="button" name="submit" value="保存设置" />
</form>
<?php }?>
<?php 
function plugin_setting(){
	require_once 'zgboke_config.php';
	$newConfig = '<?php
$config = array(
	"sloff" => "'.$_POST["sloff"].'",
	"wzid" => "'.$_POST["wzid"].'",
	"wzid1" => "'.$_POST["wzid1"].'",
	"wzid2" => "'.$_POST["wzid2"].'",
	"wzid3" => "'.$_POST["wzid3"].'",
	"wzid4" => "'.$_POST["wzid4"].'",
);';
	echo $newConfig;
	@file_put_contents(EMLOG_ROOT.'/content/plugins/zgboke/zgboke_config.php', $newConfig);
}
?>