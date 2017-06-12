<?php
if(!defined('EMLOG_ROOT')){die('err');}
if(!in_array('qiukong_submit/qiukong_submit.php',Option::get('active_plugins'))){die('off');}
$qiukong_submit_set=unserialize(ltrim(file_get_contents(dirname(__FILE__).'/qiukong.com.php'),'<?php die; ?>'));
date_default_timezone_set(Option::get('timezone'));
function msg($var){header('Location:'.BLOG_URL.'?plugin=qiukong_submit&msg='.$var);die;}
function scu($var){$var=str_replace(array('&','<','>'),array('&amp;','&lt;','&gt;'),$var);$var=preg_replace('/(&#*\w+)[\x00-\x20]+;/u','$1;',$var);$var=preg_replace('/(&#x*[0-9A-F]+);*/iu','$1;',$var);$var=html_entity_decode($var,ENT_COMPAT,'UTF-8');$var=preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu','$1>',$var);$var=preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu','$1=$2nojavascript...',$var);$var=preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu','$1=$2novbscript...',$var);$var=preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u','$1=$2nomozbinding...',$var);$var=preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i','$1>',$var);$var=preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i','$1>',$var);$var=preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu','$1>',$var);$var=preg_replace('#</*\w+:\w[^>]*+>#i','',$var);do{$old=$var;$var=preg_replace('#</*(?:applet|b(?:ase|gsound|link)|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|s(?:cript|tyle)|title|xml)[^>]*+>#i','',$var);}while($old!==$var);return addslashes(trim($var));}
$uwdir=dirname(__FILE__).'/uwall';$uwymd=date('Ymd');$uwsav=$uwdir.'/'.$uwymd;$uwdat=$uwsav.'/'.str_replace(':','-',$_SERVER['REMOTE_ADDR']).'.php';if(file_exists($uwdat)){require $uwdat;}else{$uwarr=array('time'=>'1000000000','post'=>'0');}if(!file_exists($uwdir)){mkdir($uwdir);}if(!file_exists($uwsav)){mkdir($uwsav);$uwcld=array_diff(scandir($uwdir),array('.','..',$uwymd));foreach($uwcld as $sbv){$uwclf=array_diff(scandir($uwdir.'/'.$sbv),array('.','..'));foreach($uwclf as $sbw){unlink($uwdir.'/'.$sbv.'/'.$sbw);}if(file_exists($uwdir.'/'.$sbv.'/total.txt')){unlink($uwdir.'/'.$sbv.'/total.txt');}rmdir($uwdir.'/'.$sbv);}}$total=file_exists($uwsav.'/total.txt')?file_get_contents($uwsav.'/total.txt'):0; //uwall4emlog@qiukong.com
$msg=empty($_GET['msg'])?0:intval($_GET['msg']);
if(!empty($msg)){require 'front/shit.php';}
elseif(!empty($_POST)){
session_start();
$Log_Model=new Log_Model();
$Tag_Model=new Tag_Model();
$title=isset($_POST['title'])?scu($_POST['title']):'';
if($title==''){msg('1');}
$content=isset($_POST['content'])?scu($_POST['content']):'';
if($qiukong_submit_set['ccontent']==2 && !preg_match('/[\x{4e00}-\x{9fa5}]/iu',$content)){msg('2');}
$tags=isset($_POST['tags'])?scu($_POST['tags']):'';
if($qiukong_submit_set['ctags']==2 && $tags==''){msg('3');}
$author=$qiukong_submit_set['cauthor'];
if($qiukong_submit_set['csort']>=-1){$sortid=$qiukong_submit_set['csort'];}
else{$sortid=isset($_POST['sortid'])?intval($_POST['sortid']):0;}
if($qiukong_submit_set['csort']==-3 && $sortid<=0){msg('4');}
$remark=($qiukong_submit_set['ccomment']==0)?'n':'y';
$hide=($qiukong_submit_set['csubmit']==0)?'y':'n';
$checked=($qiukong_submit_set['csubmit']==1)?'n':'y';
$code=isset($_POST['code'])?trim(htmlspecialchars(strip_tags(strtoupper($_POST['code'])))):'qiukong.com';
if($qiukong_submit_set['ccheck']==1 && $code!=$_SESSION['code']){msg('5');}
unset($_SESSION['code']);
$logData=array(
'title'=>$title,
'alias'=>'',
'content'=>$content,
'excerpt'=>'',
'author'=>$author,
'sortid'=>$sortid,
'date'=>time(),
'top'=>'n',
'sortop'=>'n',
'allow_remark'=>$remark,
'hide'=>$hide,
'checked'=>$checked,
'password'=>'',
);
$blogid=$Log_Model->addlog($logData);
$Tag_Model->addTag($tags,$blogid);
global $CACHE;$CACHE->updateCache();
file_put_contents($uwdat,'<?php $uwarr='.var_export(array('time'=>time(),'post'=>$uwarr['post']+1),true).'; ?>');
file_put_contents($uwsav.'/total.txt',$total+1);
msg('100');
}
else{
if(time()-$uwarr['time']<$qiukong_submit_set['cperiod']){msg('101');}
if($qiukong_submit_set['climit']>0 && $uwarr['post']>=$qiukong_submit_set['climit']){msg('102');}
if($total>=$qiukong_submit_set['ctotal']){msg('103');}
require 'front/show.php';
}
?>