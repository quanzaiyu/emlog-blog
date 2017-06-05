<?php 
/**
 * 站点首页
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<article>
    <div class="banner">
      <ul class="texts">
        <?php echo _g('index_baner'); ?>
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
<!--文章循环-->
<?php if (!empty($logs)):foreach($logs as $value): ?>
        <div class="blogs">
        <h3><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h3>
        <figure>
    <?php
$thum_src = getThumbnail($value['logid']);
 $imgFileArray = TEMPLATE_URL.'images/random/'.rand(1,9).'.jpg';
 if(!empty($thum_src)){ ?>
 <img width="173" height="116" src="<?php echo $thum_src; ?>" alt="<?php echo $value['log_title']; ?>" title="<?php echo $value['log_title'] ?>" />
<?php
 }else{
 ?>
 <img src="<?php echo $imgFileArray; ?>" alt="<?php echo $value['log_title']; ?>" title="<?php echo $value['log_title'] ?>" />
 <?php
 }
 ?>
</figure>
        <ul>
          <p><?php echo subString(strip_tags($value['log_description']),0,170,"..."); ?></p>
          <a href="<?php echo $value['log_url']; ?>" class="readmore">阅读全文>></a>
        </ul>
			<p class="autor"><span>作者：<?php blog_author($value['author']); ?></span><span>分类：【<?php blog_sort($value['logid']); ?>】</span><span>浏览（<a href="#"><?php echo $value['views']; ?></a>）</span><span>发表：<a href="#"><?php echo gmdate('Y-n-j', $value['date']); ?></a></span></p>
        <div class="dateview"><?php echo gmdate('Y-n-j G:i', $value['date']); ?></div>
      </div>
	      <?php endforeach;else:?>
	
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
   <?php endif;?>
    </div>
	<div class="page"><?php echo $page_url;?></div>
  </article>
<?php include View::getView('side');?>  
  <script src="<?php echo TEMPLATE_URL; ?>js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
<?php include View::getView('footer');?>