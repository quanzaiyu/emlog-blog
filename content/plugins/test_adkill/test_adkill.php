<?php
/*
Plugin Name: 测试 - adkill
Version: 1.0
Plugin URL: http://www.xiaoyulive.top/
Description: 测试 - adkill
ForEmlog: 5.3.1
Author: 小昱
Author Email: 731734107@qq.com
Author URL: http://测试 - adkill/
*/

!defined('EMLOG_ROOT') && exit('access deined!');

addAction('comment_post', 'adshielding');

function adshielding(){
  $adkill_string = addslashes(trim($_POST['comment']));
  $adkill_keyword = array('联系','手机','QQ');
  $adkill_str = str_replace($adkill_keyword,'', $adkill_string ,$adkill_count);
  if($adkill_count>0){emMsg('评论失败：该评论包涵广告字符!');}
}
?>