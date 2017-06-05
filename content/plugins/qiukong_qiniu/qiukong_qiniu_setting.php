<?php
if(!defined('EMLOG_ROOT')){die('err');}
function plugin_setting_view(){
$qiukong_qiniu_set=unserialize(ltrim(file_get_contents(dirname(__FILE__).'/qiukong.com.php'),'<?php die; ?>'));
?>
<form method="post">
AK：<input name="ak" value="<?php echo $qiukong_qiniu_set['ak']; ?>" /><br />
SK：<input name="sk" value="<?php echo $qiukong_qiniu_set['sk']; ?>" /><br />
Bucket：<input name="bk" value="<?php echo $qiukong_qiniu_set['bk']; ?>" /><br />
上传接口：<input name="up" value="<?php echo $qiukong_qiniu_set['up']; ?>" /><br />
下载接口：<input name="dn" value="<?php echo $qiukong_qiniu_set['dn']; ?>" /><br />
缩略宽度：<input name="th" value="<?php echo $qiukong_qiniu_set['th']; ?>" /><br />
回调函数：（初学者请勿修改）<br />
<textarea name="callback" style="width:300px;height:60px;"><?php echo $qiukong_qiniu_set['callback']; ?></textarea><br />
<br />
<input type="submit" value="提交" />
</form>
<?php }
if(!empty($_POST)){
$ak=empty($_POST['ak'])?'':trim($_POST['ak']);
$sk=empty($_POST['sk'])?'':trim($_POST['sk']);
$bk=empty($_POST['bk'])?'':trim($_POST['bk']);
$up=empty($_POST['up'])?'':trim($_POST['up']);
$dn=empty($_POST['dn'])?'':trim($_POST['dn']);
$th=empty($_POST['th'])?'':trim($_POST['th']);
$callback=empty($_POST['callback'])?'':trim($_POST['callback']);
if(get_magic_quotes_gpc()){
$ak=stripslashes($ak);
$sk=stripslashes($sk);
$bk=stripslashes($bk);
$up=stripslashes($up);
$dn=stripslashes($dn);
$th=stripslashes($th);
$callback=stripslashes($callback);
}
file_put_contents(dirname(__FILE__).'/qiukong.com.php','<?php die; ?>'.serialize(array(
'ak'=>$ak,
'sk'=>$sk,
'bk'=>$bk,
'up'=>$up,
'dn'=>$dn,
'th'=>$th,
'callback'=>$callback,
)));
header('Location:./plugin.php?plugin=qiukong_qiniu');
}
?>