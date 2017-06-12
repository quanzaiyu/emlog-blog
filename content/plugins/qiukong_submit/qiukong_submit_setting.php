<?php
if(!defined('EMLOG_ROOT')){die('err');}
function plugin_setting_view(){
$qiukong_submit_set=unserialize(ltrim(file_get_contents(dirname(__FILE__).'/qiukong.com.php'),'<?php die; ?>'));
?>
<p><b>信息</b></p>
<form method="post">
请复制投稿页面地址，加至导航栏或其它位置。感谢您的使用！<br />
投稿页面：<a href="<?php echo BLOG_URL;?>?plugin=qiukong_submit" target="_blank"><?php echo BLOG_URL;?>?plugin=qiukong_submit</a><br />
作者主页：<a href="http://qiukong.com" target="_blank">http://qiukong.com</a><br />
<p><b>文章</b></p>
投稿：
<input type="radio" name="csubmit" value="0" <?php if($qiukong_submit_set['csubmit']=='0'){echo 'checked="checked"';} ?> />放入草稿
<input type="radio" name="csubmit" value="1" <?php if($qiukong_submit_set['csubmit']=='1'){echo 'checked="checked"';} ?> />文章审核
<input type="radio" name="csubmit" value="2" <?php if($qiukong_submit_set['csubmit']=='2'){echo 'checked="checked"';} ?> />直接通过
（如何处理投稿）[初始"放入草稿"]<br />
贴图：
<?php if(in_array('qiukong_tietuku/qiukong_tietuku.php',Option::get('active_plugins'))){ ?>
<input type="radio" name="ctietuku" value="0" <?php if($qiukong_submit_set['ctietuku']=='0'){echo 'checked="checked"';} ?> />关闭
<input type="radio" name="ctietuku" value="1" <?php if($qiukong_submit_set['ctietuku']=='1'){echo 'checked="checked"';} ?> />开启
（基于贴图库免费图片外链）[初始"关闭"]
<?php }else{ ?>
<input type="radio" name="ctietuku" value="0" checked="checked" />关闭
（需要安装并激活插件“<a href="http://www.emlog.net/plugin/238" target="_blank">贴图库+</a>”）
<?php } ?>
<br />
评论：
<input type="radio" name="ccomment" value="0" <?php if($qiukong_submit_set['ccomment']=='0'){echo 'checked="checked"';} ?> />关闭
<input type="radio" name="ccomment" value="1" <?php if($qiukong_submit_set['ccomment']=='1'){echo 'checked="checked"';} ?> />开启
（发布后是否允许文章评论）[初始"开启"]<br />
内容：
<input type="radio" name="ccontent" value="0" <?php if($qiukong_submit_set['ccontent']=='0'){echo 'checked="checked"';} ?> />关闭
<input type="radio" name="ccontent" value="1" <?php if($qiukong_submit_set['ccontent']=='1'){echo 'checked="checked"';} ?> />开启
<input type="radio" name="ccontent" value="2" <?php if($qiukong_submit_set['ccontent']=='2'){echo 'checked="checked"';} ?> />强制中文
（文章内容框）[初始"开启"]<br />
标签：
<input type="radio" name="ctags" value="0" <?php if($qiukong_submit_set['ctags']=='0'){echo 'checked="checked"';} ?> />关闭
<input type="radio" name="ctags" value="1" <?php if($qiukong_submit_set['ctags']=='1'){echo 'checked="checked"';} ?> />开启
<input type="radio" name="ctags" value="2" <?php if($qiukong_submit_set['ctags']=='2'){echo 'checked="checked"';} ?> />强制填写
（底部标签栏）[初始"开启"]<br />
分类：
<input name="csort" maxlength="10" style="width:80px;" value="<?php echo $qiukong_submit_set['csort']; ?>"> 
（-3强制，-2开启，-1未分类，0无分类，0以上指定分类ID）[初始"-2"]<br />
作者：
<input name="cauthor" maxlength="10" style="width:80px;" value="<?php echo $qiukong_submit_set['cauthor']; ?>">
（0为无作者，0以上指定作者ID）[初始"0"]<br />
<p><b>防护</b></p>
验证：
<input type="radio" name="ccheck" value="0" <?php if($qiukong_submit_set['ccheck']=='0'){echo 'checked="checked"';} ?> />关闭
<input type="radio" name="ccheck" value="1" <?php if($qiukong_submit_set['ccheck']=='1'){echo 'checked="checked"';} ?> />开启
（投稿验证码）[初始"开启"]<br />
间隔：
<input name="cperiod" maxlength="50" style="width:80px;" value="<?php echo $qiukong_submit_set['cperiod']; ?>">
（同IP投稿间隔，一般小于1200秒）[初始"60"]<br />
上限：
<input name="climit" maxlength="50" style="width:80px;" value="<?php echo $qiukong_submit_set['climit']; ?>">
（同IP投稿上限，0为不限制）[初始"5"]<br />
锁定：
<input name="ctotal" maxlength="50" style="width:80px;" value="<?php echo $qiukong_submit_set['ctotal']; ?>">
（日全局投稿超过指定数量后锁定，0为不限制）[初始"100"]<br />
<p><input type="submit" value="提交" /></p>
</form>
<?php }
if(!empty($_POST)){
$csubmit=isset($_POST['csubmit'])?intval($_POST['csubmit']):0;
$ctietuku=isset($_POST['ctietuku'])?intval($_POST['ctietuku']):0;
$ccomment=isset($_POST['ccomment'])?intval($_POST['ccomment']):1;
$ccontent=isset($_POST['ccontent'])?intval($_POST['ccontent']):1;
$ctags=isset($_POST['ctags'])?intval($_POST['ctags']):1;
$csort=isset($_POST['csort'])?intval($_POST['csort']):-2;
$cauthor=isset($_POST['cauthor'])?intval($_POST['cauthor']):0;
$ccheck=isset($_POST['ccheck'])?intval($_POST['ccheck']):1;
$cperiod=isset($_POST['cperiod'])?intval($_POST['cperiod']):60;
$climit=isset($_POST['climit'])?intval($_POST['climit']):5;
$ctotal=isset($_POST['ctotal'])?intval($_POST['ctotal']):100;
file_put_contents(dirname(__FILE__).'/qiukong.com.php','<?php die; ?>'.serialize(array(
'csubmit'=>$csubmit,
'ctietuku'=>$ctietuku,
'ccomment'=>$ccomment,
'ccontent'=>$ccontent,
'ctags'=>$ctags,
'csort'=>$csort,
'cauthor'=>$cauthor,
'ccheck'=>$ccheck,
'cperiod'=>$cperiod,
'climit'=>$climit,
'ctotal'=>$ctotal,
)));
header('Location:./plugin.php?plugin=qiukong_submit');
}
?>