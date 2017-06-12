<?php if(!defined('EMLOG_ROOT')){die('err');} ?>
<?php
require 'head.php';
$log_content.='<div class="cline">';
switch($msg){
case '1':$log_content.='<a href="javascript:history.back();">标题为空</a>';break;
case '2':$log_content.='<a href="javascript:history.back();">内容缺少中文</a>';break;
case '3':$log_content.='<a href="javascript:history.back();">标签错误</a>';break;
case '4':$log_content.='<a href="javascript:history.back();">分类错误</a>';break;
case '5':$log_content.='<a href="javascript:history.back();">验证错误</a>';unset($_SESSION['code']);break;
case '100':$log_content.='<a href="'.BLOG_URL.'?plugin=qiukong_submit">感谢您的投稿！内容审核后发表。</a>';break;
case '101':$log_content.='<a href="'.BLOG_URL.'?plugin=qiukong_submit">投稿间隔小于'.$qiukong_submit_set['cperiod'].'秒，请稍后再试。</a>';break;
case '102':$log_content.='<a href="'.BLOG_URL.'?plugin=qiukong_submit">投稿数量超过'.$qiukong_submit_set['climit'].'篇，请明天再试。</a>';break;
case '103':$log_content.='<a href="'.BLOG_URL.'?plugin=qiukong_submit">全局超限，系统锁定。</a>';break;
default:$log_content.='<a href="http://qiukong.com">qiukong.com</a>';break;
}
$log_content.='</div>';
require 'foot.php';
?>