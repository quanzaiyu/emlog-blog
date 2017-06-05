<?php 
/*
* 阅读日志页面
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="main">
    <div id="mainleft">
	<div class="forFlow">
		<div id="topics">
			<div class="post">
				<h1 class="postTitle">
					<?php topflg($top); ?><a class="postTitle2" href="<?php echo $value['log_url']; ?>"><?php echo $log_title; ?></a>
				</h1>
				<div class="clear"></div>
				<div class="postBody">
					<div id="cnblogs_post_body">
					<?php echo $log_content; ?>
					</div>
				<div id="MySignature">
				<div id="AllanboltSignature">    
			</font></font>
				</div>
				</div>
		<div id="blog_post_info_block">
			<div id="blog_post_info">
			<div id="BlogPostCategory"></div>
			<div id="EntryTag"><?php blog_tag($logid); ?></div>
			<div id="digg_block">
			</div>
			</div>
		<div class="clear"></div>
			<div id="post_next_prev">
				<?php neighbor_log($neighborLog); ?>
			</div>
		</div>
				</div>
	<div class="postDesc">posted @ <?php echo gmdate('Y-n-j G:i l', $date); ?> <?php blog_author($author); ?> <?php editflg($value['logid'],$value['author']); ?></div>
			</div>
	<div id="blog-comments-placeholder">
		<br>
		<div class="feedback_area_title">评论列表</div>
		<div class="feedbackNoItems"><?php blog_trackback($tb, $tb_url, $allow_tb); ?></div>
			<div class="feedbackItem">
				<div class="feedbackCon"><?php blog_comments($comments); ?><?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?></div>
			</div>
		<div id="comment_form" class="commentform"></div>
	</div>
		</div>
	</div>
	</div>
<?php
 include View::getView('side');
 include View::getView('footer');
?>