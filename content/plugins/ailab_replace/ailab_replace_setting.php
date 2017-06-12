<?php
!defined('EMLOG_ROOT') && exit('access deined!');

function plugin_setting_view() {
	if($_POST){
		LoginAuth::checkToken();
		$map=array(
			'blog'=>array(
				'table'=>'blog',
				'word'=>'content',
				),
			'blog_title'=>array(
				'table'=>'blog',
				'word'=>'title',
				),
			'comment'=>array(
				'table'=>'comment',
				'word'=>'comment',
				),
			'twitter'=>array(
				'table'=>'twitter',
				'word'=>'content',
				),
		);
		$find=addslashes(trim($_POST['find']));
		$replace=addslashes(trim($_POST['replace']));
		foreach($map as $k=>$con){
			if(isset($_POST[$k])){
				ailab_replace_fun($find,$replace,$con['table'],$con['word']);
			}
		}
		ailab_replace_updateCache();
		emMsg("执行成功！","plugin.php?plugin=ailab_replace");
	}else{
		include(EMLOG_ROOT . '/content/plugins/ailab_replace/ailab_replace_setting_view.php');
	}
}
function plugin_setting() {
   
}

function ailab_replace_fun($find,$replace,$table,$word){
	global $DB;
	$DB = MySql::getInstance();
	$DB->query("UPDATE ".DB_PREFIX."$table SET `$word`=replace(`$word`,'$find','$replace') WHERE 1");
}

function ailab_replace_updateCache(){
	global $CACHE;
	$CACHE->updateCache(array('blog', 'comment', 'newlog', 'newtw'));
}
?>