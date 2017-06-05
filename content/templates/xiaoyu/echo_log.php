<?php 
/**
 * 阅读文章页面
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<link href="<?php echo TEMPLATE_URL; ?>css/style.css" rel="stylesheet">
  <article>
        <h2 class="about_h">您现在的位置是：<a href="<?php echo BLOG_URL; ?>">首页</a>> <?php blog_sort($logid); ?>> <?php echo $log_title; ?></h2>    
    <div class="index_about">
      <h2 class="c_titile"><?php echo $log_title; ?></h2>
      <p class="box_c"><span class="d_time">发布时间：<?php echo gmdate('Y-n-j', $date); ?></span><span>编辑：<?php blog_author($author); ?></span><span>浏览（<?php echo $views; ?>）</span><span>评论（<?php echo $comnum; ?>）</span></p>
      <ul class="infos">
       <?php echo $log_content; ?>
      </ul>
      <div class="keybq">
        <p><span>关键字词</span>：<?php blog_tag($logid); ?></p>
      </div>
      <div class="nextinfo">
        <?php neighbor_log($neighborLog); ?>
      </div>
      <?php doAction('log_related', $logData); ?>
	  <?php blog_comments($comments,$params); ?>
      <?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
    </div>
  </article>

  <aside>
    <div class="about_c">
      <?php echo _g('side_zl'); ?>
    </div>
      	<?php if(_g('echo_so')=='yes'): ?>
	<div id="sousuo">
	    <form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
            <div class="sous">
                <input type="text" placeholder="请输入搜索内容" class=" xg1" name="keyword" id="scbar_txt" value="" x-webkit-speech="" speech="">
            </div>
            <div class="sos_but"><button mid="lVUTkRUmgWWWWWWWWWWWWWWWWWWWWWWW" type="submit" name="sa" id="scbar_btn" sc="1" class="pn pnc" value="true"><strong class="xi2">搜索</strong></button>
            </div>
           </form>
</div>
	<?php else: ?><?php endif; ?>
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