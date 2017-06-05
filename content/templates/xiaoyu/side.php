<?php 
/**
 * 侧边栏
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
  <aside>
	  <div class="avatar"><a href="http://www.xiaoyulive.top/welcome"><span>关于小昱</span></a></div>
	<?php if(_g('index_so')=='yes'): ?>
	<div id="sousuo">
	    <form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
            <div class="sous">
                <input type="text" placeholder="请输入搜索内容" class=" xg1" name="keyword" id="scbar_txt" value="" x-webkit-speech="" speech="">
            </div>
            <div class="sos_but"><button mid="lVUTkRUmgWWWWWWWWWWWWWWWWWWWWWWW" type="submit" name="sa" id="scbar_btn" sc="1" class="pn pnc" value="true">搜索</button>
            </div>
           </form>
</div>
	<?php else: ?><?php endif; ?>
    <div class="topspaceinfo">
      <h1>最新说说</h1>
       <?php widget_twitter("最新微语"); ?>
    </div>
    <div class="about_c">
      <?php echo _g('side_zl'); ?>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
	  <h2>
        <p class="tj_t1">文章分类</p>
      </h2>
      <ul>
           <?php widget_sort("文章分类"); ?>
      </ul>
      <h2>
        <p class="tj_t2">随机文章</p>
      </h2>
      <ul>
          <?php widget_random_log("随机文章"); ?>
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