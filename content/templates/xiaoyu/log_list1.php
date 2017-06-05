<?php 
/**
 * 自定义页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<?php if($pageurl == Url::logPage()){ ?>
<?php include View::getView('index'); ?>
<?php }else{ ?>
<link href="<?php echo TEMPLATE_URL; ?>css/style.css" rel="stylesheet">
  <article>
    <h2 class="about_h">您现在的位置是：<a href="<?php echo BLOG_URL; ?>">首页</a>>图文列表</h2>
    <div class="template">
      <h3>
        <p><span>图文</span>列表</p>
      </h3>
      <ul>
	  <?php if (!empty($logs)):foreach($logs as $value): ?>
        <li>
		   <a href="<?php echo $value['log_url']; ?>"  target="_blank">
		   <?php
$thum_src = getThumbnail($value['logid']);
 $imgFileArray = TEMPLATE_URL.'images/random/'.rand(1,9).'.jpg';
 if(!empty($thum_src)){ ?>
 <img src="<?php echo $thum_src; ?>" alt="<?php echo $value['log_title']; ?>" title="<?php echo $value['log_title'] ?>" />
<?php
 }else{
 ?>
 <img src="<?php echo $imgFileArray; ?>" alt="<?php echo $value['log_title']; ?>" title="<?php echo $value['log_title'] ?>" />
 <?php
 }
 ?></a>
		   <span><?php echo $value['log_title']; ?></span>
		</li>
	<?php endforeach;else:?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
    <?php endif;?>
      </ul>
    </div>
    <div class="page"><?php echo $page_url;?></div>  
</article>

  <aside>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
   <div class="tj_news">  
	  <h2>
        <p class="tj_t1">文章分类</p>
      </h2>
      <ul>
           <?php widget_sort("文章分类"); ?>
      </ul>
   </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <?php widget_link("友情链接"); ?>
      </ul>
    </div>
  </aside>

  <script src="<?php echo TEMPLATE_URL; ?>js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
<?php include View::getView('footer');?>  
<?php } ?>