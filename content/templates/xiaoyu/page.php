<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<link href="<?php echo TEMPLATE_URL; ?>css/style.css" rel="stylesheet">
  <article>
        <h2 class="about_h">您现在的位置是：<a href="<?php echo BLOG_URL; ?>">首页</a>> <?php echo $log_title; ?></h2>    
    <div class="index_about">
      <h2 class="c_titile"><?php echo $log_title; ?></h2>
		<ul style="text-indent:0;" class="infos">
       <?php echo $log_content; ?>
      </ul>
	  <?php doAction('log_related', $logData); ?>
	  <?php blog_comments($comments,$params); ?>
      <?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
    </div>
  </article>

  <aside>
    <div class="about_c">
      <p>网名：陈先生 | 陈子文</p>
      <p>职业：Web前端设计师、电子工程 </p>
      <p>籍贯：湖南省—常德市</p>
      <p>电话：***********</p>
      <p>邮箱：chenziwen@lantk.com</p>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>

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
<style>
	.page_box1 h4 {
    font-size: 18px;
}
.archiver_item {
    margin-left: 50px;
	}</style>