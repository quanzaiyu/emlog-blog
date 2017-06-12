<?php if(!defined('EMLOG_ROOT')){die('err');} ?>
<?php
if($qiukong_submit_set['csort']<-1){
$Sort_Model=new Sort_Model();
$sortfind=$Sort_Model->getSorts();
$sortshow='<option value="-1">选择分类...</option>';
foreach($sortfind as $row){$sortshow.='<option value='.$row['sid'].'>'.$row['sortname'].'</option>';}
}
if($qiukong_submit_set['ctietuku']==1){
$ttkinit=EMLOG_ROOT.'/content/plugins/qiukong_tietuku/qiukong.com.php';
if(!in_array('qiukong_tietuku/qiukong_tietuku.php',Option::get('active_plugins')) or !file_exists($ttkinit)){$ttkshow='“贴图库+”插件未开启';}
else{
$ttkconf=unserialize(ltrim(file_get_contents($ttkinit),'<?php die; ?>'));
$ttkshow='
<input type="file" onchange="tietuku_cpick()" id="tietuku_pick" multiple="multiple" accept="image/jpeg,image/png,image/gif" />
<input type="button" onclick="tietuku_cpush()" id="tietuku_push" value="开始" />
<input type="button" onclick="tietuku_cpall(\'t\')" value="封面" />
<input type="button" onclick="tietuku_cpall(\'s\')" value="展示" />
<input type="button" onclick="tietuku_cpall(\'l\')" value="原图" />
<div id="tietuku_list"></div>
<script>
var tietuku_token="'.$ttkconf['token'].'";
var tietuku_upurl="'.$ttkconf['upurl'].'";
function tietuku_cpone(numb,mode){
KindEditor.insertHtml(\'#ccontent\',\'<a href="\'+tietuku_skep[numb][\'l\']+\'" target="_blank"><img src="\'+tietuku_skep[numb][mode]+\'" alt="" /></a><br />\');
}
function tietuku_cpall(mode){
if(!tietuku_skep.length){alert("队列为空");}
for(var numb=0;numb<tietuku_skep.length;numb++){tietuku_cpone(numb,mode);}
}
</script>
<script src="'.BLOG_URL.'content/plugins/qiukong_tietuku/tietukuplus.js"></script>
';
}
}
require 'head.php';
$log_content.='
<script>
function before(){
if(document.getElementById("ctitle").value==""){alert("请填写标题");return false;}
'.(($qiukong_submit_set['ctags']==2)?'if(document.getElementById("ctags").value==""){alert("请填写标签");return false;}':'').'
'.(($qiukong_submit_set['csort']==-3)?'if(document.getElementById("csort").value=="-1"){alert("请选择分类");return false;}':'').'
'.(($qiukong_submit_set['ccheck']==1)?'if(document.getElementById("ccode").value==""){alert("验证码为空");return false;}':'').'
return checkform();
}
</script>
<form method="post">
<div class="cline"><input maxlength="200" id="ctitle" name="title" placeholder="文章标题" /></div>
'.(($qiukong_submit_set['ctietuku']==1)?'<div class="cline">'.$ttkshow.'</div>':'').'
'.(($qiukong_submit_set['ccontent']!=0)?'<div class="cline"><textarea id="ccontent" name="content"></textarea><script src="'.BLOG_URL.'admin/editor/kindeditor.js"></script><script>loadEditor(\'ccontent\');</script></div>':'').'
'.(($qiukong_submit_set['ctags']!=0)?'<div class="cline"><input id="ctags" name="tags" maxlength="200" placeholder="文章标签，逗号或空格分隔" /></div>':'').'
<div class="cline">
'.(($qiukong_submit_set['csort']<-1)?'<select id="csort" name="sortid" >'.$sortshow.'</select> ':'').'
'.(($qiukong_submit_set['ccheck']!=0)?'<img id="cimg" src="'.BLOG_URL.'include/lib/checkcode.php" onclick="this.src=this.src+\'?\'" /> <input id="ccode" name="code" placeholder="验证码" />':'').'
<input type="submit" onclick="return before();" value="提交" />
</div>
</form>
';
require 'foot.php';
?>