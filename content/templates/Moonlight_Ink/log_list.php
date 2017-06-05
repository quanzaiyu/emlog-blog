<?php 
/*
* 首页日志列表部分
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="main">
    <div id="mainContent">
	<div class="forFlow">		
<?php doAction('index_loglist_top'); ?>
<?php foreach($logs as $value): ?>	
		<div class="day">
		<div class="postTitle"><?php topflg($value['top']); ?><a class="postTitle2" href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></div>
		<div class="postCon"><?php echo ''.subString(strip_tags($value['log_description'],$img),0,600).''; ?>...</div>
		<div class="clear"></div>
		<div class="postDesc">posted @ <?php echo gmdate('Y-n-j G:i l', $value['date']); ?>  <?php blog_author($value['author']); ?> 阅读(<?php echo $value['views']; ?>) 评论(<?php echo $value['comnum']; ?>)  <?php editflg($value['logid'],$value['author']); ?></div>
		<div class="clear"></div>	
		</div>
<?php endforeach; ?>
	<div class="topicListFooter">
		<?php echo $page_url;?>
	</div>
	</div>
	</div>
<?php
 include View::getView('side');
 include View::getView('footer');
?>